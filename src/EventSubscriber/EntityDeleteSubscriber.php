<?php
// api/src/EventSubscriber/BookMailSubscriber.php

namespace App\EventSubscriber;

use ApiPlatform\Core\EventListener\EventPriorities;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Doctrine\ORM\Events;
use Doctrine\ORM\ORMException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\Exception\CredentialsExpiredException;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use App\Service\RedisCacheService;

final class EntityDeleteSubscriber implements EventSubscriberInterface
{

    //"El elemento no puede ser eliminado, pues esta relacionado con otras entidades en la aplicación, tenga en cuanta que no puede eliminar por ejemplo un vehículo o una agencia si ya tienen contrato registrado.";
    const ERROR_CONSTRAINT = "No se puede eliminar el elemento seleccionado. Está relacionado con otra entidad (Ej: Contratos, Agencias, Datos en Histórico, etc) dentro de la aplicación.";

    private $redis;

    public function __construct(RedisCacheService $redis)
    {
        $this->redis = $redis;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => ['checkExceptionType', EventPriorities::POST_READ],
        ];
    }

    public function checkExceptionType(ExceptionEvent $evt)
    {
        if ($evt->getThrowable() instanceof ForeignKeyConstraintViolationException) {
            $evt->setResponse(new JsonResponse(array("message" => self::ERROR_CONSTRAINT), 500)); //$evt->getThrowable()->getMessage()
        }

    }
}