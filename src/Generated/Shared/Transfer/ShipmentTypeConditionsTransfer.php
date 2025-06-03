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
class ShipmentTypeConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SHIPMENT_TYPE_IDS = 'shipmentTypeIds';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const WITH_STORE_RELATIONS = 'withStoreRelations';

    /**
     * @var string
     */
    public const UUIDS = 'uuids';

    /**
     * @var string
     */
    public const KEYS = 'keys';

    /**
     * @var string
     */
    public const NAMES = 'names';

    /**
     * @var string
     */
    public const STORE_NAMES = 'storeNames';

    /**
     * @var int[]
     */
    protected $shipmentTypeIds = [];

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var bool|null
     */
    protected $withStoreRelations;

    /**
     * @var string[]
     */
    protected $uuids = [];

    /**
     * @var string[]
     */
    protected $keys = [];

    /**
     * @var string[]
     */
    protected $names = [];

    /**
     * @var string[]
     */
    protected $storeNames = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'shipment_type_ids' => 'shipmentTypeIds',
        'shipmentTypeIds' => 'shipmentTypeIds',
        'ShipmentTypeIds' => 'shipmentTypeIds',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'with_store_relations' => 'withStoreRelations',
        'withStoreRelations' => 'withStoreRelations',
        'WithStoreRelations' => 'withStoreRelations',
        'uuids' => 'uuids',
        'Uuids' => 'uuids',
        'keys' => 'keys',
        'Keys' => 'keys',
        'names' => 'names',
        'Names' => 'names',
        'store_names' => 'storeNames',
        'storeNames' => 'storeNames',
        'StoreNames' => 'storeNames',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::WITH_STORE_RELATIONS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_store_relations',
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
        self::KEYS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'keys',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'names',
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
    ];

    /**
     * @module ShipmentTypeStorage|ShipmentType
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
     * @module ShipmentTypeStorage|ShipmentType
     *
     * @return int[]
     */
    public function getShipmentTypeIds(): array
    {
        return $this->shipmentTypeIds;
    }

    /**
     * @module ShipmentTypeStorage|ShipmentType
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
     * @module ShipmentTypeStorage|ShipmentType
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
     * @module ShipmentTypeStorage|ShipmentType
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
     * @module ShipmentTypeStorage|ShipmentType
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @module ShipmentTypeStorage|ShipmentType
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
     * @module ShipmentTypeStorage|ShipmentType
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
     * @module ShipmentTypeStorage|ShipmentType
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
     * @module ShipmentTypeStorage|ShipmentType
     *
     * @param bool|null $withStoreRelations
     *
     * @return $this
     */
    public function setWithStoreRelations(?bool $withStoreRelations = null)
    {
        $this->withStoreRelations = $withStoreRelations;
        $this->modifiedProperties[self::WITH_STORE_RELATIONS] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage|ShipmentType
     *
     * @return bool|null
     */
    public function getWithStoreRelations(): ?bool
    {
        return $this->withStoreRelations;
    }

    /**
     * @module ShipmentTypeStorage|ShipmentType
     *
     * @param bool $withStoreRelations
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithStoreRelationsOrFail(bool $withStoreRelations)
    {
        return $this->setWithStoreRelations($withStoreRelations);
    }

    /**
     * @module ShipmentTypeStorage|ShipmentType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithStoreRelationsOrFail(): bool
    {
        if ($this->withStoreRelations === null) {
            $this->throwNullValueException(static::WITH_STORE_RELATIONS);
        }

        return $this->withStoreRelations;
    }

    /**
     * @module ShipmentTypeStorage|ShipmentType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithStoreRelations()
    {
        $this->assertPropertyIsSet(self::WITH_STORE_RELATIONS);

        return $this;
    }

    /**
     * @module ShipmentType
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
     * @module ShipmentType
     *
     * @return string[]
     */
    public function getUuids(): array
    {
        return $this->uuids;
    }

    /**
     * @module ShipmentType
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
     * @module ShipmentType
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
     * @module ShipmentType
     *
     * @param string[]|null $keys
     *
     * @return $this
     */
    public function setKeys(array $keys = null)
    {
        if ($keys === null) {
            $keys = [];
        }

        $this->keys = [];

        foreach ($keys as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::KEYS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addKey(...$args);
        }

        $this->modifiedProperties[self::KEYS] = true;

        return $this;
    }

    /**
     * @module ShipmentType
     *
     * @return string[]
     */
    public function getKeys(): array
    {
        return $this->keys;
    }

    /**
     * @module ShipmentType
     *
     * @param string $key
     *
     * @return $this
     */
    public function addKey(string $key)
    {
        $this->keys[] = $key;
        $this->modifiedProperties[self::KEYS] = true;

        return $this;
    }

    /**
     * @module ShipmentType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKeys()
    {
        $this->assertPropertyIsSet(self::KEYS);

        return $this;
    }

    /**
     * @module ShipmentType
     *
     * @param string[]|null $names
     *
     * @return $this
     */
    public function setNames(array $names = null)
    {
        if ($names === null) {
            $names = [];
        }

        $this->names = [];

        foreach ($names as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::NAMES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addName(...$args);
        }

        $this->modifiedProperties[self::NAMES] = true;

        return $this;
    }

    /**
     * @module ShipmentType
     *
     * @return string[]
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @module ShipmentType
     *
     * @param string $name
     *
     * @return $this
     */
    public function addName(string $name)
    {
        $this->names[] = $name;
        $this->modifiedProperties[self::NAMES] = true;

        return $this;
    }

    /**
     * @module ShipmentType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNames()
    {
        $this->assertPropertyIsSet(self::NAMES);

        return $this;
    }

    /**
     * @module ShipmentType
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
     * @module ShipmentType
     *
     * @return string[]
     */
    public function getStoreNames(): array
    {
        return $this->storeNames;
    }

    /**
     * @module ShipmentType
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
     * @module ShipmentType
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
                case 'shipmentTypeIds':
                case 'isActive':
                case 'withStoreRelations':
                case 'uuids':
                case 'keys':
                case 'names':
                case 'storeNames':
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
                case 'shipmentTypeIds':
                case 'isActive':
                case 'withStoreRelations':
                case 'uuids':
                case 'keys':
                case 'names':
                case 'storeNames':
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
                case 'shipmentTypeIds':
                case 'isActive':
                case 'withStoreRelations':
                case 'uuids':
                case 'keys':
                case 'names':
                case 'storeNames':
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
            'shipmentTypeIds' => $this->shipmentTypeIds,
            'isActive' => $this->isActive,
            'withStoreRelations' => $this->withStoreRelations,
            'uuids' => $this->uuids,
            'keys' => $this->keys,
            'names' => $this->names,
            'storeNames' => $this->storeNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'shipment_type_ids' => $this->shipmentTypeIds,
            'is_active' => $this->isActive,
            'with_store_relations' => $this->withStoreRelations,
            'uuids' => $this->uuids,
            'keys' => $this->keys,
            'names' => $this->names,
            'store_names' => $this->storeNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'shipment_type_ids' => $this->shipmentTypeIds instanceof AbstractTransfer ? $this->shipmentTypeIds->toArray(true, false) : $this->shipmentTypeIds,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'with_store_relations' => $this->withStoreRelations instanceof AbstractTransfer ? $this->withStoreRelations->toArray(true, false) : $this->withStoreRelations,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, false) : $this->uuids,
            'keys' => $this->keys instanceof AbstractTransfer ? $this->keys->toArray(true, false) : $this->keys,
            'names' => $this->names instanceof AbstractTransfer ? $this->names->toArray(true, false) : $this->names,
            'store_names' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, false) : $this->storeNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'shipmentTypeIds' => $this->shipmentTypeIds instanceof AbstractTransfer ? $this->shipmentTypeIds->toArray(true, true) : $this->shipmentTypeIds,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'withStoreRelations' => $this->withStoreRelations instanceof AbstractTransfer ? $this->withStoreRelations->toArray(true, true) : $this->withStoreRelations,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, true) : $this->uuids,
            'keys' => $this->keys instanceof AbstractTransfer ? $this->keys->toArray(true, true) : $this->keys,
            'names' => $this->names instanceof AbstractTransfer ? $this->names->toArray(true, true) : $this->names,
            'storeNames' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, true) : $this->storeNames,
        ];
    }
}
