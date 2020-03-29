<?php
// api/src/EventSubscriber/BookMailSubscriber.php

namespace App\EventSubscriber;

use ApiPlatform\Core\EventListener\EventPriorities;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\Exception\CredentialsExpiredException;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use App\Service\RedisCacheService;

final class RequestSubscriber implements EventSubscriberInterface
{


    private $redis;

    public function __construct(RedisCacheService $redis)
    {
        $this->redis = $redis;
    }

    public static function getSubscribedEvents()
    {
        return [
          //  KernelEvents::REQUEST => ['checkRequestIntegrity', EventPriorities::PRE_READ],
        ];
    }

    public function decodeJWT($jwtToken): array
    {
        $decoder = new JsonDecode();
        $jwtDecoded = $decoder->decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $jwtToken)[1]))), 'json');
        return get_object_vars($jwtDecoded);
    }

 /*  public function checkRequestIntegrity(RequestEvent $event): void
    {

        $headers = $event->getRequest()->headers;
        $authHeader = $headers->get('authorization');
        if (!$authHeader) {
            $unauthorizedException = new UnauthorizedHttpException('Auth', 'Unauthorized error, please provide valid JWT');
            $msg = $unauthorizedException->getMessage();
            $statusCode = $unauthorizedException->getStatusCode();
            $event->setResponse(new JsonResponse(array('code' => $statusCode, 'message' => $msg), $statusCode));
        } else {
            $jwt = explode(" ", $authHeader)[1];
            $decodedJwt = $this->decodeJWT($jwt);
            $username = $decodedJwt['username'];
            if (!($this->redis->exist($username) and $this->redis->get($username) == $jwt)) {
                $badCredentialsException = new BadCredentialsException('Auth', 401);
                $msg = $badCredentialsException->getMessageKey();
                $statusCode = $badCredentialsException->getCode();
                $event->setResponse(new JsonResponse(array('code' => $statusCode, 'message' => $msg, 'arrivedToken' => $jwt, 'username' => $username), $statusCode));
            } else {
                $expirateToken = date('Y/m/d H:i:s', $decodedJwt['exp']);
                $today = new \DateTime('now');
                $timestamp = $today->getTimestamp();
                if ($decodedJwt['exp'] < $timestamp) {
                    $expiredException = new CredentialsExpiredException('Expiration', 401);
                    $msg = $expiredException->getMessageKey();
                    $statusCode = $expiredException->getCode();
                    $event->setResponse(new JsonResponse(array('code' => $statusCode, 'message' => $msg, 'exp' => $expirateToken)));
                }

            }
        }

    }*/
}