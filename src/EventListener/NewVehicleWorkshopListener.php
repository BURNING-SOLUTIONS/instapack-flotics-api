<?php


namespace App\EventListener;

use App\Entity\Vehicle;
use App\Entity\VehicleWorkshop;
// for Doctrine < 2.4: use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Events\NewVehicleWorkshopHistoryEvent;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy;
use Symfony\Component\Messenger\MessageBusInterface;

class NewVehicleWorkshopListener
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
        if (!$entity instanceof VehicleWorkshop) {
            return;
        }

        $entityManager = $args->getObjectManager();
        // ... do something with the VehicleWorkshop
        $newVehicleHistoryEvent = new NewVehicleWorkshopHistoryEvent('Visita al Taller', $entity, $this->bus);
        $this->dispatcher->dispatch($newVehicleHistoryEvent, NewVehicleWorkshopHistoryEvent::NAME);
    }

}