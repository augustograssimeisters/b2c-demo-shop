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
class ShipmentTypeStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SHIPMENT_TYPE = 'idShipmentType';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const SHIPMENT_METHOD_IDS = 'shipmentMethodIds';

    /**
     * @var int|null
     */
    protected $idShipmentType;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var int[]
     */
    protected $shipmentMethodIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shipment_type' => 'idShipmentType',
        'idShipmentType' => 'idShipmentType',
        'IdShipmentType' => 'idShipmentType',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'name' => 'name',
        'Name' => 'name',
        'key' => 'key',
        'Key' => 'key',
        'shipment_method_ids' => 'shipmentMethodIds',
        'shipmentMethodIds' => 'shipmentMethodIds',
        'ShipmentMethodIds' => 'shipmentMethodIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHIPMENT_TYPE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shipment_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
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
    ];

    /**
     * @module ShipmentTypeStorage
     *
     * @param int|null $idShipmentType
     *
     * @return $this
     */
    public function setIdShipmentType(?int $idShipmentType = null)
    {
        $this->idShipmentType = $idShipmentType;
        $this->modifiedProperties[self::ID_SHIPMENT_TYPE] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @return int|null
     */
    public function getIdShipmentType(): ?int
    {
        return $this->idShipmentType;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @param int $idShipmentType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShipmentTypeOrFail(int $idShipmentType)
    {
        return $this->setIdShipmentType($idShipmentType);
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShipmentTypeOrFail(): int
    {
        if ($this->idShipmentType === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_TYPE);
        }

        return $this->idShipmentType;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShipmentType()
    {
        $this->assertPropertyIsSet(self::ID_SHIPMENT_TYPE);

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid(?string $uuid = null)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @return string|null
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @param string $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail(string $uuid)
    {
        return $this->setUuid($uuid);
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail(): string
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name = null)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @param string $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail(string $name)
    {
        return $this->setName($name);
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail(): string
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey(?string $key = null)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @param string $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail(string $key)
    {
        return $this->setKey($key);
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail(): string
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module ShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module ShipmentTypeStorage
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
     * @module ShipmentTypeStorage
     *
     * @return int[]
     */
    public function getShipmentMethodIds(): array
    {
        return $this->shipmentMethodIds;
    }

    /**
     * @module ShipmentTypeStorage
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
     * @module ShipmentTypeStorage
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
                case 'idShipmentType':
                case 'uuid':
                case 'name':
                case 'key':
                case 'shipmentMethodIds':
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
                case 'idShipmentType':
                case 'uuid':
                case 'name':
                case 'key':
                case 'shipmentMethodIds':
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
                case 'idShipmentType':
                case 'uuid':
                case 'name':
                case 'key':
                case 'shipmentMethodIds':
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
            'idShipmentType' => $this->idShipmentType,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'key' => $this->key,
            'shipmentMethodIds' => $this->shipmentMethodIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shipment_type' => $this->idShipmentType,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'key' => $this->key,
            'shipment_method_ids' => $this->shipmentMethodIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shipment_type' => $this->idShipmentType instanceof AbstractTransfer ? $this->idShipmentType->toArray(true, false) : $this->idShipmentType,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'shipment_method_ids' => $this->shipmentMethodIds instanceof AbstractTransfer ? $this->shipmentMethodIds->toArray(true, false) : $this->shipmentMethodIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShipmentType' => $this->idShipmentType instanceof AbstractTransfer ? $this->idShipmentType->toArray(true, true) : $this->idShipmentType,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'shipmentMethodIds' => $this->shipmentMethodIds instanceof AbstractTransfer ? $this->shipmentMethodIds->toArray(true, true) : $this->shipmentMethodIds,
        ];
    }
}
