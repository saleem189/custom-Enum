# custom-Enum
Custom Enum Class Which can be Extends to use Enums

# usage Example

```
use App\Services\Companies\Shipments\Enums\{
    ShipmentStage,
    ShipmentStatusStage,
    ShipmentTrackingMethods
};

// Usage of ShipmentStage enum
echo ShipmentStage::WAITING_TRUCK_ASSIGNMENT; // Outputs: 0
echo ShipmentStage::LABELS_PENDING[ShipmentStage::WAITING_TRUCK_ASSIGNMENT]; // Outputs: Awaiting truck assignment

// Usage of ShipmentStatusStage enum
echo ShipmentStatusStage::PENDING[0]; // Outputs: ShipmentStatus::QUOTE_ACTIVE
echo ShipmentStatusStage::ACTIVE[0]; // Outputs: ShipmentStatus::TENDER_ACCEPTED

// Usage of ShipmentStatusStage enum with constant()
$status = 'PENDING';
echo constant(ShipmentStatusStage::class . '::' . $status)[0]; // Outputs: ShipmentStatus::QUOTE_ACTIVE
echo constant(ShipmentStatusStage::class . '::' . $status)[1]; // Outputs: ShipmentStatus::TENDER_OFFERED

// Usage of ShipmentTrackingMethods enum
echo ShipmentTrackingMethods::NONE['key']; // Outputs: 31300
echo ShipmentTrackingMethods::TURVO_DRIVER_APP['value']; // Outputs: Turvo Driver app
```
```
// Usage of the keyFromValue() function
$key = ShipmentStatusStage::keyFromValue(ShipmentStatusStage::PENDING[0]);
echo "Key for value " . ShipmentStatusStage::PENDING[0] . " is: " . $key . "\n";

// Usage of the keys() function
$allKeys = ShipmentStatusStage::keys();
echo "All keys in ShipmentStatusStage enum: " . implode(', ', $allKeys) . "\n";

// Usage of the valuesKeys() function
$valuesKeys = ShipmentStatusStage::valuesKeys();
echo "Mapping of values to keys in ShipmentStatusStage enum: \n";
foreach ($valuesKeys as $value => $key) {
    echo "Value: " . $value . ", Key: " . $key . "\n";
}
```
