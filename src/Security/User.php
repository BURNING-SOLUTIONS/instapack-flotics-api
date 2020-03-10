<?php

namespace App\Security;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Encoder\JsonDecode;

class User implements UserInterface
{
    private $email;

    private $password;

    private $roles = [];

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string)$this->email;
    }

    public function decodeJWT($jwtToken): array
    {
        $decoder = new JsonDecode();
        $jwtDecoded = $decoder->decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $jwtToken)[1]))), 'json');
        return get_object_vars($jwtDecoded);
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';
        $decodedJWT = $this->decodeJWT($this->getPassword());
        if (array_key_exists('roles', $decodedJWT)) {
            return $decodedJWT['roles'];
        }
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword()
    {

        return $this->password;
        // not needed for apps that do not check user passwords
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed for apps that do not check user passwords
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
