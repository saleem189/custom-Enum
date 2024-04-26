<?php
// usage of Custom Enum Class
use App\Common\Enum;

class ShipmentTrackingMethods extends Enum
{
    const NONE = [
        'key' => '31300',
        'value' => 'None',
    ];
    
    const MY_CUSTOM_APP = [
        'key' => '31301',
        'value' => 'My Custom App',
    ];
}
