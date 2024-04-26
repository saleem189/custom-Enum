# custom-Enum
Description:

The Enum abstract class in PHP serves as a foundation for creating enumerated types, providing essential methods for working with enumerated data. By extending this class, developers can define custom enumerated types with associated keys and values, facilitating structured representation and manipulation of data. The Enum class streamlines the creation and management of enumerated types, enhancing code readability, maintainability, and consistency.

Uses:

- **Defining Enumerated Types:** Extend the Enum class to define custom enumerated types, representing a finite set of related constants.
- **Accessing Keys and Values:** Use the provided methods like keyFromValue(), keys(), and valuesKeys() to retrieve keys and values from the enum, facilitating data retrieval and manipulation.
- **Enhancing Readability and Maintainability:** Enums provide a clear and self-documenting way to represent predefined sets of values, improving code readability and making it easier for developers to understand and maintain the codebase.
- **Ensuring Consistency:** Enumerated types enforce a predefined set of values, reducing the risk of errors and inconsistencies in the code by restricting the possible values to a known set.
- **Facilitating Data Validation:** Enums can be used to validate input data, ensuring that only valid values are accepted, which helps prevent errors and improve data integrity.


# Usage Example

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
