<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyShipmentTypeStoreEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHIPMENT_TYPE_STORE = 'idShipmentTypeStore';

    /**
     * @var string
     */
    public const FK_SHIPMENT_TYPE = 'fkShipmentType';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const SHIPMENT_TYPE = 'shipmentType';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var integer|null
     */
    protected $idShipmentTypeStore;

    /**
     * @var integer|null
     */
    protected $fkShipmentType;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var \Generated\Shared\Transfer\SpyShipmentTypeEntityTransfer|null
     */
    protected $shipmentType;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $store;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shipment_type_store' => 'idShipmentTypeStore',
        'idShipmentTypeStore' => 'idShipmentTypeStore',
        'IdShipmentTypeStore' => 'idShipmentTypeStore',
        'fk_shipment_type' => 'fkShipmentType',
        'fkShipmentType' => 'fkShipmentType',
        'FkShipmentType' => 'fkShipmentType',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'shipment_type' => 'shipmentType',
        'shipmentType' => 'shipmentType',
        'ShipmentType' => 'shipmentType',
        'store' => 'store',
        'Store' => 'store',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHIPMENT_TYPE_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_shipment_type_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SHIPMENT_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_shipment_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT_TYPE => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentTypeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipment_type',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\SpyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ShipmentType\Persistence\SpyShipmentTypeStore';


    /**
     * @module 
     *
     * @param integer|null $idShipmentTypeStore
     *
     * @return $this
     */
    public function setIdShipmentTypeStore($idShipmentTypeStore)
    {
        $this->idShipmentTypeStore = $idShipmentTypeStore;
        $this->modifiedProperties[self::ID_SHIPMENT_TYPE_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdShipmentTypeStore()
    {
        return $this->idShipmentTypeStore;
    }

    /**
     * @module 
     *
     * @param integer|null $idShipmentTypeStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShipmentTypeStoreOrFail($idShipmentTypeStore)
    {
        if ($idShipmentTypeStore === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_TYPE_STORE);
        }

        return $this->setIdShipmentTypeStore($idShipmentTypeStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShipmentTypeStoreOrFail()
    {
        if ($this->idShipmentTypeStore === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_TYPE_STORE);
        }

        return $this->idShipmentTypeStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShipmentTypeStore()
    {
        $this->assertPropertyIsSet(self::ID_SHIPMENT_TYPE_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShipmentType
     *
     * @return $this
     */
    public function setFkShipmentType($fkShipmentType)
    {
        $this->fkShipmentType = $fkShipmentType;
        $this->modifiedProperties[self::FK_SHIPMENT_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkShipmentType()
    {
        return $this->fkShipmentType;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShipmentType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShipmentTypeOrFail($fkShipmentType)
    {
        if ($fkShipmentType === null) {
            $this->throwNullValueException(static::FK_SHIPMENT_TYPE);
        }

        return $this->setFkShipmentType($fkShipmentType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkShipmentTypeOrFail()
    {
        if ($this->fkShipmentType === null) {
            $this->throwNullValueException(static::FK_SHIPMENT_TYPE);
        }

        return $this->fkShipmentType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShipmentType()
    {
        $this->assertPropertyIsSet(self::FK_SHIPMENT_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @return $this
     */
    public function setFkStore($fkStore)
    {
        $this->fkStore = $fkStore;
        $this->modifiedProperties[self::FK_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkStore()
    {
        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStoreOrFail($fkStore)
    {
        if ($fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->setFkStore($fkStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkStoreOrFail()
    {
        if ($this->fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStore()
    {
        $this->assertPropertyIsSet(self::FK_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentTypeEntityTransfer|null $shipmentType
     *
     * @return $this
     */
    public function setShipmentType(SpyShipmentTypeEntityTransfer $shipmentType = null)
    {
        $this->shipmentType = $shipmentType;
        $this->modifiedProperties[self::SHIPMENT_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyShipmentTypeEntityTransfer|null
     */
    public function getShipmentType()
    {
        return $this->shipmentType;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentTypeEntityTransfer $shipmentType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentTypeOrFail(SpyShipmentTypeEntityTransfer $shipmentType)
    {
        return $this->setShipmentType($shipmentType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyShipmentTypeEntityTransfer
     */
    public function getShipmentTypeOrFail()
    {
        if ($this->shipmentType === null) {
            $this->throwNullValueException(static::SHIPMENT_TYPE);
        }

        return $this->shipmentType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentType()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer|null $store
     *
     * @return $this
     */
    public function setStore(SpyStoreEntityTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(SpyStoreEntityTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

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
                case 'idShipmentTypeStore':
                case 'fkShipmentType':
                case 'fkStore':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shipmentType':
                case 'store':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
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
                case 'idShipmentTypeStore':
                case 'fkShipmentType':
                case 'fkStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'shipmentType':
                case 'store':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'idShipmentTypeStore':
                case 'fkShipmentType':
                case 'fkStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'shipmentType':
                case 'store':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'idShipmentTypeStore' => $this->idShipmentTypeStore,
            'fkShipmentType' => $this->fkShipmentType,
            'fkStore' => $this->fkStore,
            'shipmentType' => $this->shipmentType,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shipment_type_store' => $this->idShipmentTypeStore,
            'fk_shipment_type' => $this->fkShipmentType,
            'fk_store' => $this->fkStore,
            'shipment_type' => $this->shipmentType,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shipment_type_store' => $this->idShipmentTypeStore instanceof AbstractTransfer ? $this->idShipmentTypeStore->toArray(true, false) : $this->idShipmentTypeStore,
            'fk_shipment_type' => $this->fkShipmentType instanceof AbstractTransfer ? $this->fkShipmentType->toArray(true, false) : $this->fkShipmentType,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'shipment_type' => $this->shipmentType instanceof AbstractTransfer ? $this->shipmentType->toArray(true, false) : $this->shipmentType,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShipmentTypeStore' => $this->idShipmentTypeStore instanceof AbstractTransfer ? $this->idShipmentTypeStore->toArray(true, true) : $this->idShipmentTypeStore,
            'fkShipmentType' => $this->fkShipmentType instanceof AbstractTransfer ? $this->fkShipmentType->toArray(true, true) : $this->fkShipmentType,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'shipmentType' => $this->shipmentType instanceof AbstractTransfer ? $this->shipmentType->toArray(true, true) : $this->shipmentType,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
        ];
    }
}
