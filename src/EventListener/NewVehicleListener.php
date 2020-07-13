<?php


namespace App\EventListener;

use App\Entity\Vehicle;
// for Doctrine < 2.4: use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Events\NewVehicleHistoryEvent;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy;
use Symfony\Component\Messenger\MessageBusInterface;

class NewVehicleListener
{

    private $bus;
    private $dispatcher;

    public function __construct(MessageBusInterface $bus, EventDispatcherInterface $dispatcher)
    {
        $this->bus = $bus;
        $this->dispatcher = LegacyEventDispatcherProxy::decorate($dispatcher);
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        // only act on some "Product" entity
        if (!$entity instanceof Vehicle) {
            return;
        }

        $entityManager = $args->getObjectManager();
        // ... do something with the Vehicle
        $newVehicleHistoryEvent = new NewVehicleHistoryEvent('Alta vehículo', $entity, $this->bus);
        $this->dispatcher->dispatch($newVehicleHistoryEvent, NewVehicleHistoryEvent::NAME);
    }

}

