<?php

namespace App\EventListener;

use Doctrine\ORM\Event\PostFlushEventArgs;
use Doctrine\ORM\Events;
use App\Entity\Vehicle;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Messenger\MessageBusInterface;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use App\Events\NewVehicleHistoryEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\LegacyEventDispatcherProxy;

class OnFlushListener
{
    private $bus;
    private $dispatcher;

    public function __construct(MessageBusInterface $bus, EventDispatcherInterface $dispatcher)
    {
        $this->bus = $bus;
        $this->dispatcher = LegacyEventDispatcherProxy::decorate($dispatcher);
    }

    public function onFlush(OnFlushEventArgs $eventArgs)
    {
        $em = $eventArgs->getEntityManager();
        $uow = $em->getUnitOfWork();
        $entities_updated = $uow->getScheduledEntityUpdates();
        $entities_new = $uow->getScheduledEntityInsertions();

        /*foreach ($entities_new as $entity) {
            if ($entity instanceof Vehicle) {
                $newVehicleHistoryEvent = new NewVehicleHistoryEvent('nuevo registro de auto', $entity, $this->bus);
                $this->dispatcher->dispatch($newVehicleHistoryEvent, NewVehicleHistoryEvent::NAME);
            }
        }*/

        /* foreach ($entities_updated as $entity) {
            if ($entity instanceof Vehicle) {
                $this->bus->dispatch(new VehicleHistoryMessage("vehicle-updated", $entity, "carrefour"));
            }
        } */

        /* foreach ($uow->getScheduledEntityUpdates() as $entity) {

         }

         foreach ($uow->getScheduledEntityDeletions() as $entity) {

         }

         foreach ($uow->getScheduledCollectionDeletions() as $col) {

         }

         foreach ($uow->getScheduledCollectionUpdates() as $col) {

         }*/
    }

    /*public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if ($entity instanceof Vehicle) {

        }
    }*/
}
