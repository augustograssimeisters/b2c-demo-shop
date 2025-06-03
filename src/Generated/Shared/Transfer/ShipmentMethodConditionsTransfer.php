<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ShipmentMethodConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SHIPMENT_METHOD_IDS = 'shipmentMethodIds';

    /**
     * @var string
     */
    public const SHIPMENT_CARRIER_IDS = 'shipmentCarrierIds';

    /**
     * @var string
     */
    public const STORE_NAMES = 'storeNames';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_ACTIVE_SHIPMENT_CARRIER = 'isActiveShipmentCarrier';

    /**
     * @var int[]
     */
    protected $shipmentMethodIds = [];

    /**
     * @var int[]
     */
    protected $shipmentCarrierIds = [];

    /**
     * @var string[]
     */
    protected $storeNames = [];

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var bool|null
     */
    protected $isActiveShipmentCarrier;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'shipment_method_ids' => 'shipmentMethodIds',
        'shipmentMethodIds' => 'shipmentMethodIds',
        'ShipmentMethodIds' => 'shipmentMethodIds',
        'shipment_carrier_ids' => 'shipmentCarrierIds',
        'shipmentCarrierIds' => 'shipmentCarrierIds',
        'ShipmentCarrierIds' => 'shipmentCarrierIds',
        'store_names' => 'storeNames',
        'storeNames' => 'storeNames',
        'StoreNames' => 'storeNames',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_active_shipment_carrier' => 'isActiveShipmentCarrier',
        'isActiveShipmentCarrier' => 'isActiveShipmentCarrier',
        'IsActiveShipmentCarrier' => 'isActiveShipmentCarrier',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SHIPMENT_METHOD_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'shipment_method_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SHIPMENT_CARRIER_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'shipment_carrier_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::STORE_NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'store_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_ACTIVE_SHIPMENT_CARRIER => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active_shipment_carrier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @param int[]|null $shipmentMethodIds
     *
     * @return $this
     */
    public function setShipmentMethodIds(array $shipmentMethodIds = null)
    {
        if ($shipmentMethodIds === null) {
            $shipmentMethodIds = [];
        }

        $this->shipmentMethodIds = [];

        foreach ($shipmentMethodIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SHIPMENT_METHOD_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdShipmentMethod(...$args);
        }

        $this->modifiedProperties[self::SHIPMENT_METHOD_IDS] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @return int[]
     */
    public function getShipmentMethodIds(): array
    {
        return $this->shipmentMethodIds;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @param int $idShipmentMethod
     *
     * @return $this
     */
    public function addIdShipmentMethod(int $idShipmentMethod)
    {
        $this->shipmentMethodIds[] = $idShipmentMethod;
        $this->modifiedProperties[self::SHIPMENT_METHOD_IDS] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentMethodIds()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_METHOD_IDS);

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @param int[]|null $shipmentCarrierIds
     *
     * @return $this
     */
    public function setShipmentCarrierIds(array $shipmentCarrierIds = null)
    {
        if ($shipmentCarrierIds === null) {
            $shipmentCarrierIds = [];
        }

        $this->shipmentCarrierIds = [];

        foreach ($shipmentCarrierIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SHIPMENT_CARRIER_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdShipmentCarrier(...$args);
        }

        $this->modifiedProperties[self::SHIPMENT_CARRIER_IDS] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @return int[]
     */
    public function getShipmentCarrierIds(): array
    {
        return $this->shipmentCarrierIds;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @param int $idShipmentCarrier
     *
     * @return $this
     */
    public function addIdShipmentCarrier(int $idShipmentCarrier)
    {
        $this->shipmentCarrierIds[] = $idShipmentCarrier;
        $this->modifiedProperties[self::SHIPMENT_CARRIER_IDS] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentCarrierIds()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_CARRIER_IDS);

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @param string[]|null $storeNames
     *
     * @return $this
     */
    public function setStoreNames(array $storeNames = null)
    {
        if ($storeNames === null) {
            $storeNames = [];
        }

        $this->storeNames = [];

        foreach ($storeNames as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::STORE_NAMES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addStoreName(...$args);
        }

        $this->modifiedProperties[self::STORE_NAMES] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @return string[]
     */
    public function getStoreNames(): array
    {
        return $this->storeNames;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function addStoreName(string $storeName)
    {
        $this->storeNames[] = $storeName;
        $this->modifiedProperties[self::STORE_NAMES] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreNames()
    {
        $this->assertPropertyIsSet(self::STORE_NAMES);

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive(?bool $isActive = null)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @param bool $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail(bool $isActive)
    {
        return $this->setIsActive($isActive);
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail(): bool
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @param bool|null $isActiveShipmentCarrier
     *
     * @return $this
     */
    public function setIsActiveShipmentCarrier(?bool $isActiveShipmentCarrier = null)
    {
        $this->isActiveShipmentCarrier = $isActiveShipmentCarrier;
        $this->modifiedProperties[self::IS_ACTIVE_SHIPMENT_CARRIER] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @return bool|null
     */
    public function getIsActiveShipmentCarrier(): ?bool
    {
        return $this->isActiveShipmentCarrier;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @param bool $isActiveShipmentCarrier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveShipmentCarrierOrFail(bool $isActiveShipmentCarrier)
    {
        return $this->setIsActiveShipmentCarrier($isActiveShipmentCarrier);
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveShipmentCarrierOrFail(): bool
    {
        if ($this->isActiveShipmentCarrier === null) {
            $this->throwNullValueException(static::IS_ACTIVE_SHIPMENT_CARRIER);
        }

        return $this->isActiveShipmentCarrier;
    }

    /**
     * @module ShipmentTypeStorage|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActiveShipmentCarrier()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE_SHIPMENT_CARRIER);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'shipmentMethodIds':
                case 'shipmentCarrierIds':
                case 'storeNames':
                case 'isActive':
                case 'isActiveShipmentCarrier':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'shipmentMethodIds':
                case 'shipmentCarrierIds':
                case 'storeNames':
                case 'isActive':
                case 'isActiveShipmentCarrier':
                    $values[$arrayKey] = $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'shipmentMethodIds':
                case 'shipmentCarrierIds':
                case 'storeNames':
                case 'isActive':
                case 'isActiveShipmentCarrier':
                    $values[$arrayKey] = $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties(): void
    {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'shipmentMethodIds' => $this->shipmentMethodIds,
            'shipmentCarrierIds' => $this->shipmentCarrierIds,
            'storeNames' => $this->storeNames,
            'isActive' => $this->isActive,
            'isActiveShipmentCarrier' => $this->isActiveShipmentCarrier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'shipment_method_ids' => $this->shipmentMethodIds,
            'shipment_carrier_ids' => $this->shipmentCarrierIds,
            'store_names' => $this->storeNames,
            'is_active' => $this->isActive,
            'is_active_shipment_carrier' => $this->isActiveShipmentCarrier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'shipment_method_ids' => $this->shipmentMethodIds instanceof AbstractTransfer ? $this->shipmentMethodIds->toArray(true, false) : $this->shipmentMethodIds,
            'shipment_carrier_ids' => $this->shipmentCarrierIds instanceof AbstractTransfer ? $this->shipmentCarrierIds->toArray(true, false) : $this->shipmentCarrierIds,
            'store_names' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, false) : $this->storeNames,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_active_shipment_carrier' => $this->isActiveShipmentCarrier instanceof AbstractTransfer ? $this->isActiveShipmentCarrier->toArray(true, false) : $this->isActiveShipmentCarrier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'shipmentMethodIds' => $this->shipmentMethodIds instanceof AbstractTransfer ? $this->shipmentMethodIds->toArray(true, true) : $this->shipmentMethodIds,
            'shipmentCarrierIds' => $this->shipmentCarrierIds instanceof AbstractTransfer ? $this->shipmentCarrierIds->toArray(true, true) : $this->shipmentCarrierIds,
            'storeNames' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, true) : $this->storeNames,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isActiveShipmentCarrier' => $this->isActiveShipmentCarrier instanceof AbstractTransfer ? $this->isActiveShipmentCarrier->toArray(true, true) : $this->isActiveShipmentCarrier,
        ];
    }
}
