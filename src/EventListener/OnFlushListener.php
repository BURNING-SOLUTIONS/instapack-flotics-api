<?php

namespace App\EventListener;

use App\Events\UpdateVehicleHistoryEvent;
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
        $myChanges = array();

        foreach ($entities_updated as $entity) {
            if ($entity instanceof Vehicle) {
                $changeset = $uow->getEntityChangeSet($entity);
                if (array_key_exists('client', $changeset)) {
                    $myChanges[] = 'client';
                }

                if (array_key_exists('deliveryMan', $changeset)) {
                    $myChanges[] = 'deliveryMan';
                }

                if ($changeset) {
                    // Do something when the deliveryMan is changed.
                    $updateVehicleHistoryEvent = new UpdateVehicleHistoryEvent($myChanges, $entity, $this->bus);
                    $this->dispatcher->dispatch($updateVehicleHistoryEvent, UpdateVehicleHistoryEvent::NAME);
                }
            }
        }

        /*foreach ($entities_new as $entity) {
            if ($entity instanceof Vehicle) {
                $newVehicleHistoryEvent = new NewVehicleHistoryEvent('nuevo registro de auto', $entity, $this->bus);
                $this->dispatcher->dispatch($newVehicleHistoryEvent, NewVehicleHistoryEvent::NAME);
            }
        }*/

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
