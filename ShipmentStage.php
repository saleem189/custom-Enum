<?php
//usage example
namespace App\Services\Companies\Shipments\Enums;

use App\Common\Enum\Enum;

class ShipmentStage extends Enum
{
    const WAITING_TRUCK_ASSIGNMENT = 0;
    const AT_PICKUP = 1;
    const IN_TRANSIT = 2;
    const COMPLETED = 3;

    public const LABELS_PENDING = [
        self::WAITING_TRUCK_ASSIGNMENT => 'Awaiting truck assignment',
        self::AT_PICKUP => 'Truck on the way to pick up location',
        self::IN_TRANSIT => 'Picked up, In Transit',
        self::COMPLETED => 'In drop off location',
    ];

    public const LABELS_COMPLETE = [
        self::WAITING_TRUCK_ASSIGNMENT => 'Truck Assigned',
        self::AT_PICKUP => 'Load has been picked up',
        self::IN_TRANSIT => 'Arrived at drop off location',
        self::COMPLETED => 'Dropped off, Completed',
    ];
}
