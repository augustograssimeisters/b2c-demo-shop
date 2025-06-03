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
class ShipmentTypeStorageConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const STORE_NAME = 'storeName';

    /**
     * @var string
     */
    public const SHIPMENT_TYPE_IDS = 'shipmentTypeIds';

    /**
     * @var string
     */
    public const UUIDS = 'uuids';

    /**
     * @var string|null
     */
    protected $storeName;

    /**
     * @var int[]
     */
    protected $shipmentTypeIds = [];

    /**
     * @var string[]
     */
    protected $uuids = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'store_name' => 'storeName',
        'storeName' => 'storeName',
        'StoreName' => 'storeName',
        'shipment_type_ids' => 'shipmentTypeIds',
        'shipmentTypeIds' => 'shipmentTypeIds',
        'ShipmentTypeIds' => 'shipmentTypeIds',
        'uuids' => 'uuids',
        'Uuids' => 'uuids',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::STORE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SHIPMENT_TYPE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'shipment_type_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'uuids',
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
     * @module ShipmentTypeWidget|ShipmentTypeStorage
     *
     * @param string|null $storeName
     *
     * @return $this
     */
    public function setStoreName(?string $storeName = null)
    {
        $this->storeName = $storeName;
        $this->modifiedProperties[self::STORE_NAME] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeWidget|ShipmentTypeStorage
     *
     * @return string|null
     */
    public function getStoreName(): ?string
    {
        return $this->storeName;
    }

    /**
     * @module ShipmentTypeWidget|ShipmentTypeStorage
     *
     * @param string $storeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNameOrFail(string $storeName)
    {
        return $this->setStoreName($storeName);
    }

    /**
     * @module ShipmentTypeWidget|ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreNameOrFail(): string
    {
        if ($this->storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->storeName;
    }

    /**
     * @module ShipmentTypeWidget|ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreName()
    {
        $this->assertPropertyIsSet(self::STORE_NAME);

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @param int[]|null $shipmentTypeIds
     *
     * @return $this
     */
    public function setShipmentTypeIds(array $shipmentTypeIds = null)
    {
        if ($shipmentTypeIds === null) {
            $shipmentTypeIds = [];
        }

        $this->shipmentTypeIds = [];

        foreach ($shipmentTypeIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SHIPMENT_TYPE_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdShipmentType(...$args);
        }

        $this->modifiedProperties[self::SHIPMENT_TYPE_IDS] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @return int[]
     */
    public function getShipmentTypeIds(): array
    {
        return $this->shipmentTypeIds;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @param int $idShipmentType
     *
     * @return $this
     */
    public function addIdShipmentType(int $idShipmentType)
    {
        $this->shipmentTypeIds[] = $idShipmentType;
        $this->modifiedProperties[self::SHIPMENT_TYPE_IDS] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentTypeIds()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_TYPE_IDS);

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @param string[]|null $uuids
     *
     * @return $this
     */
    public function setUuids(array $uuids = null)
    {
        if ($uuids === null) {
            $uuids = [];
        }

        $this->uuids = [];

        foreach ($uuids as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::UUIDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addUuid(...$args);
        }

        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @return string[]
     */
    public function getUuids(): array
    {
        return $this->uuids;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @param string $uuid
     *
     * @return $this
     */
    public function addUuid(string $uuid)
    {
        $this->uuids[] = $uuid;
        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuids()
    {
        $this->assertPropertyIsSet(self::UUIDS);

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
                case 'storeName':
                case 'shipmentTypeIds':
                case 'uuids':
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
                case 'storeName':
                case 'shipmentTypeIds':
                case 'uuids':
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
                case 'storeName':
                case 'shipmentTypeIds':
                case 'uuids':
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
            'storeName' => $this->storeName,
            'shipmentTypeIds' => $this->shipmentTypeIds,
            'uuids' => $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'store_name' => $this->storeName,
            'shipment_type_ids' => $this->shipmentTypeIds,
            'uuids' => $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'store_name' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, false) : $this->storeName,
            'shipment_type_ids' => $this->shipmentTypeIds instanceof AbstractTransfer ? $this->shipmentTypeIds->toArray(true, false) : $this->shipmentTypeIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, false) : $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'storeName' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, true) : $this->storeName,
            'shipmentTypeIds' => $this->shipmentTypeIds instanceof AbstractTransfer ? $this->shipmentTypeIds->toArray(true, true) : $this->shipmentTypeIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, true) : $this->uuids,
        ];
    }
}
