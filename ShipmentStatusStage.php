<?php
// usage example
namespace App\Services\Companies\Shipments\Enums;

use App\Common\Enum\Enum;
use App\Services\Companies\Shipments\ShipmentStatus; // Assuming this is the correct namespace for ShipmentStatus

class ShipmentStatusStage extends Enum
{
    const PENDING = [
        ShipmentStatus::QUOTE_ACTIVE,
    ];

    const ACTIVE = [
        ShipmentStatus::TENDER_ACCEPTED,
        ShipmentStatus::DISPATCHED,
        ShipmentStatus::AT_PICKUP,
        ShipmentStatus::EN_ROUTE,
        ShipmentStatus::AT_DELIVERY,
        ShipmentStatus::ROUTE_COMPLETE,
    ];

    const COMPLETED = [
        ShipmentStatus::DELIVERED,
        ShipmentStatus::COMPLETED,
        ShipmentStatus::CANCELED,
    ];
}
