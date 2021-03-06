<?php


namespace App\EventSubscriber;

use App\Events\NewVehicleWorkshopHistoryEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Event\TerminateEvent;
use App\Events\UpdateVehicleWorkshopHistoryEvent;

class NewVehicleWorkshopSubscriber implements EventSubscriberInterface
{

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public static function getSubscribedEvents()
    {
        return array(
            NewVehicleWorkshopHistoryEvent::NAME => 'newVehicleWorkshopHistoryEvent',
            UpdateVehicleWorkshopHistoryEvent::NAME => 'updateVehicleWorkshopHistoryEvent',
        );
    }

    public function newVehicleWorkshopHistoryEvent(NewVehicleWorkshopHistoryEvent $NewVehicleWorkshopHistoryEvent)
    {
        // Add our custom listener to the kernel.terminate event
        // We will see later what the createThingOnApi static function looks like
        $this
            ->container
            ->get('event_dispatcher')
            ->addListener('kernel.terminate',
                function (TerminateEvent $event) use ($NewVehicleWorkshopHistoryEvent) {
                    $NewVehicleWorkshopHistoryEvent->registerHistory();
                });
    }

    public function updateVehicleWorkshopHistoryEvent(UpdateVehicleWorkshopHistoryEvent $UpdateVehicleWorkshopHistoryEvent)
    {
        // Add our custom listener to the kernel.terminate event
        // We will see later what the createThingOnApi static function looks like
        $this
            ->container
            ->get('event_dispatcher')
            ->addListener('kernel.terminate',
                function (TerminateEvent $event) use ($UpdateVehicleWorkshopHistoryEvent) {
                    $UpdateVehicleWorkshopHistoryEvent->registerHistory();
                });
    }
}