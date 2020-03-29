<?php

namespace App\Security;

use App\Security\User;
use App\Service\RedisCacheService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Serializer\Encoder\JsonDecode;

class TokenAuthenticator extends AbstractGuardAuthenticator
{
    private $redis;

    public function __construct(RedisCacheService $redis)
    {
        $this->redis = $redis;
    }

    /**
     * Called on every request to decide if this authenticator should be
     * used for the request. Returning false will cause this authenticator
     * to be skipped.
     */
    public function supports(Request $request)
    {
        #echo var_dump($request->attributes); exit;
        return $request->headers->has('Authorization');
    }

    public function decodeJWT($jwtToken): array
    {
        $decoder = new JsonDecode();
        $jwtDecoded = $decoder->decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $jwtToken)[1]))), 'json');
        return get_object_vars($jwtDecoded);
    }

    /**
     * Called on every request. Return whatever credentials you want to
     * be passed to getUser() as $credentials.
     */
    public function getCredentials(Request $request)
    {
        $authHeader = $request->headers->get('Authorization');
        $splitHeader = explode(" ", $authHeader);
        if (array_key_exists(1, $splitHeader))
            return explode(" ", $authHeader)[1];

        return "";
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        if (!$credentials) {
            // The token header was empty, authentication fails with 401
            return null;
        } else {
            // if a User is returned, checkCredentials() is called
            $decodedJWT = $this->decodeJWT($credentials);
            //extract username of jwt Payload
            return new User($decodedJWT['username'], $credentials);
        }

    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        // check credentials - e.g. make sure the password is valid
        // no credential check is needed in this case
        if ($this->redis->exist($user->getUsername())) {
            $jwtRedis = $this->redis->get($user->getUsername());
            if ($jwtRedis == $credentials) {
                // return true to cause authentication success
                return true;
            }

        }
        return false;

    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        // on success, let the request continue
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $data = [
            // you may ant to customize or obfuscate the message first
            'message' => strtr($exception->getMessageKey(), $exception->getMessageData())

            // or to translate this message
            // $this->translator->trans($exception->getMessageKey(), $exception->getMessageData())
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }

    /**
     * Called when authentication is needed, but it's not sent
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        $data = [
            // you might translate this message
            'message' => 'Authentication Required'
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }

    public function supportsRememberMe()
    {
        return false;
    }
}
