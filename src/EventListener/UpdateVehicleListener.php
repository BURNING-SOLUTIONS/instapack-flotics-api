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
        $changeset = array();
        $entity = $event->getObject();
        $entityManager = $event->getObjectManager();
        // only act on some "Product" entity
        if (!$entity instanceof Vehicle) {
            return;
        }
        // ... do something with the Vehicle
        if ($event->hasChangedField('client')) {
            if ($this->isDifferentClient($event->getEntityChangeSet()['client'])) {
                $changeset[] = 'client';
            }
        }

        if ($event->hasChangedField('deliveryMan')) {
            if ($this->isDifferentDeliveryMan($event->getEntityChangeSet()['deliveryMan'])) {
                $changeset[] = 'deliveryMan';
            }
        }

        if ($changeset) {
            // Do something when the deliveryMan is changed.
            $updateVehicleHistoryEvent = new UpdateVehicleHistoryEvent($changeset, $entity, $this->bus);
            $this->dispatcher->dispatch($updateVehicleHistoryEvent, UpdateVehicleHistoryEvent::NAME);
        }
    }

    #check and compare if last client value and new client value are different for current updated vehicle
    public function isDifferentClient(array $client): bool
    {
        $oldValue = $client[0];
        $newValue = $client[1];
        if (!$newValue && $oldValue) {
            return true;
        }
        if (array_key_exists('nomCli', $newValue) && array_key_exists('nomCli', $oldValue)) {
            return $newValue['nomCli'] !== $oldValue['nomCli'];
        }
        return true;
    }

    #check and compare if last client value and new client value are different for current updated vehicle
    public function isDifferentDeliveryMan(array $deliveryMan): bool
    {
        $oldValue = $deliveryMan[0];
        $newValue = $deliveryMan[1];
        if (!$newValue && $oldValue) {
            return true;
        }
        if (array_key_exists('nomMen', $newValue) && array_key_exists('nomMen', $oldValue)) {
            return $newValue['nomMen'] !== $oldValue['nomMen'];
        }
        return true;
    }

}