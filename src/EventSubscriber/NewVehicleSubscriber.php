<?php

namespace App\EventSubscriber;

use App\Events\NewVehicleHistoryEvent;
use App\Events\UpdateVehicleHistoryEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Event\TerminateEvent;

class NewVehicleSubscriber implements EventSubscriberInterface
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public static function getSubscribedEvents()
    {
        return array(
            NewVehicleHistoryEvent::NAME => 'newVehicleHistory',
            UpdateVehicleHistoryEvent::NAME => 'updateVehicleHistory',
        );
    }

    public function newVehicleHistory(NewVehicleHistoryEvent $NewVehicleHistoryEvent)
    {
        // Add our custom listener to the kernel.terminate event
        // We will see later what the createThingOnApi static function looks like
        $this
            ->container
            ->get('event_dispatcher')
            ->addListener('kernel.terminate',
                function (TerminateEvent $event) use ($NewVehicleHistoryEvent) {
                    $NewVehicleHistoryEvent->registerHistory();
                });
    }

    public function updateVehicleHistory(UpdateVehicleHistoryEvent $UpdateVehicleHistoryEvent)
    {
        // Add our custom listener to the kernel.terminate event
        // We will see later what the createThingOnApi static function looks like
        $this
            ->container
            ->get('event_dispatcher')
            ->addListener('kernel.terminate',
                function (TerminateEvent $event) use ($UpdateVehicleHistoryEvent) {
                    $UpdateVehicleHistoryEvent->registerHistory();
                });
    }
    //...


}