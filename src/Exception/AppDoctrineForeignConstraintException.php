<?php
// api/src/Exception/ProductNotFoundException.php

namespace App\Exception;
;

use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Throwable;

final class AppDoctrineForeignConstraintException extends ForeignKeyConstraintViolationException
{


    /**
     * {@inheritdoc}
     */
    public function getExceptionCode(): string
    {
        return $this->code;
    }
}
