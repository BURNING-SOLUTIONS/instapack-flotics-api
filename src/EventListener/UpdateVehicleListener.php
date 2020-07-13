<?php


namespace App\EventListener;

use App\Entity\Vehicle;
// for Doctrine < 2.4: use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Events\UpdateVehicleHistoryEvent;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy;
use Symfony\Component\Messenger\MessageBusInterface;
use Doctrine\ORM\Event\PreUpdateEventArgs;

class UpdateVehicleListener
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
        $entity = $event->getObject();
        $entityManager = $event->getObjectManager();
        // only act on some "Product" entity
        if (!$entity instanceof Vehicle) {
            return;
        }
        // ... do something with the Vehicle
        if ($event->hasChangedField('client')) {
            // Do something when the client is changed.
            $updateVehicleHistoryEvent = new UpdateVehicleHistoryEvent(array('client'), $entity, $this->bus);
            $this->dispatcher->dispatch($updateVehicleHistoryEvent, UpdateVehicleHistoryEvent::NAME);
        }
    }

}