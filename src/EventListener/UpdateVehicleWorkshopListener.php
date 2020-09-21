<?php


namespace App\EventListener;

use App\Entity\VehicleWorkshop;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use App\Events\UpdateVehicleWorkshopHistoryEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy;
use Symfony\Component\Messenger\MessageBusInterface;

class UpdateVehicleWorkshopListener
{
    private $bus;
    private $dispatcher;

    public function __construct(MessageBusInterface $bus, EventDispatcherInterface $dispatcher)
    {
        $this->bus = $bus;
        $this->dispatcher = LegacyEventDispatcherProxy::decorate($dispatcher);
    }

    public function preUpdate(PreUpdateEventArgs $event)
    {
        $changeset = array();
        $entity = $event->getObject();
        $entityManager = $event->getObjectManager();
        // only act on some "Product" entity
        if (!$entity instanceof VehicleWorkshop) {
            return;
        }
        // ... do something with the Vehicle
        if ($event->hasChangedField('finalized')) {
            if ($entity->getFinalized()) {
                $changeset[] = 'finalized';
            }
        }

        if ($changeset) {
            // Do something when the finalized is changed.
            $updateVehicleWorkshopHistoryEvent = new UpdateVehicleWorkshopHistoryEvent($changeset, $entity, $this->bus);
            $this->dispatcher->dispatch($updateVehicleWorkshopHistoryEvent, UpdateVehicleWorkshopHistoryEvent::NAME);
        }
    }
}