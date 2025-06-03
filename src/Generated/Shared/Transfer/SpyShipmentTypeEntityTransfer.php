<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyShipmentTypeEntityTransfer extends AbstractEntityTransfer
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
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const SPY_SHIPMENT_METHODS = 'spyShipmentMethods';

    /**
     * @var string
     */
    public const SPY_SHIPMENT_TYPE_STORES = 'spyShipmentTypeStores';

    /**
     * @var integer|null
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
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer>
     */
    protected $spyShipmentMethods;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyShipmentTypeStoreEntityTransfer>
     */
    protected $spyShipmentTypeStores;

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
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'spy_shipment_methods' => 'spyShipmentMethods',
        'spyShipmentMethods' => 'spyShipmentMethods',
        'SpyShipmentMethods' => 'spyShipmentMethods',
        'spy_shipment_type_stores' => 'spyShipmentTypeStores',
        'spyShipmentTypeStores' => 'spyShipmentTypeStores',
        'SpyShipmentTypeStores' => 'spyShipmentTypeStores',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHIPMENT_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_shipment_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
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
            'is_strict' => false,
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
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHIPMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shipment_methods',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHIPMENT_TYPE_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentTypeStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shipment_type_stores',
            'is_collection' => true,
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
    public static $entityNamespace = 'Orm\Zed\ShipmentType\Persistence\SpyShipmentType';


    /**
     * @module 
     *
     * @param integer|null $idShipmentType
     *
     * @return $this
     */
    public function setIdShipmentType($idShipmentType)
    {
        $this->idShipmentType = $idShipmentType;
        $this->modifiedProperties[self::ID_SHIPMENT_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdShipmentType()
    {
        return $this->idShipmentType;
    }

    /**
     * @module 
     *
     * @param integer|null $idShipmentType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShipmentTypeOrFail($idShipmentType)
    {
        if ($idShipmentType === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_TYPE);
        }

        return $this->setIdShipmentType($idShipmentType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShipmentTypeOrFail()
    {
        if ($this->idShipmentType === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_TYPE);
        }

        return $this->idShipmentType;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module 
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer> $spyShipmentMethods
     *
     * @return $this
     */
    public function setSpyShipmentMethods(ArrayObject $spyShipmentMethods)
    {
        $this->spyShipmentMethods = $spyShipmentMethods;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer>
     */
    public function getSpyShipmentMethods()
    {
        return $this->spyShipmentMethods;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer $spyShipmentMethods
     *
     * @return $this
     */
    public function addSpyShipmentMethods(SpyShipmentMethodEntityTransfer $spyShipmentMethods)
    {
        $this->spyShipmentMethods[] = $spyShipmentMethods;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShipmentMethods()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHIPMENT_METHODS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyShipmentTypeStoreEntityTransfer> $spyShipmentTypeStores
     *
     * @return $this
     */
    public function setSpyShipmentTypeStores(ArrayObject $spyShipmentTypeStores)
    {
        $this->spyShipmentTypeStores = $spyShipmentTypeStores;
        $this->modifiedProperties[self::SPY_SHIPMENT_TYPE_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyShipmentTypeStoreEntityTransfer>
     */
    public function getSpyShipmentTypeStores()
    {
        return $this->spyShipmentTypeStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentTypeStoreEntityTransfer $spyShipmentTypeStores
     *
     * @return $this
     */
    public function addSpyShipmentTypeStores(SpyShipmentTypeStoreEntityTransfer $spyShipmentTypeStores)
    {
        $this->spyShipmentTypeStores[] = $spyShipmentTypeStores;
        $this->modifiedProperties[self::SPY_SHIPMENT_TYPE_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShipmentTypeStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHIPMENT_TYPE_STORES);

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
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyShipmentMethods':
                case 'spyShipmentTypeStores':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idShipmentType':
                case 'uuid':
                case 'name':
                case 'key':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShipmentMethods':
                case 'spyShipmentTypeStores':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShipmentMethods':
                case 'spyShipmentTypeStores':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->spyShipmentMethods = $this->spyShipmentMethods ?: new ArrayObject();
        $this->spyShipmentTypeStores = $this->spyShipmentTypeStores ?: new ArrayObject();
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
            'isActive' => $this->isActive,
            'spyShipmentMethods' => $this->spyShipmentMethods,
            'spyShipmentTypeStores' => $this->spyShipmentTypeStores,
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
            'is_active' => $this->isActive,
            'spy_shipment_methods' => $this->spyShipmentMethods,
            'spy_shipment_type_stores' => $this->spyShipmentTypeStores,
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
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'spy_shipment_methods' => $this->spyShipmentMethods instanceof AbstractTransfer ? $this->spyShipmentMethods->toArray(true, false) : $this->addValuesToCollection($this->spyShipmentMethods, true, false),
            'spy_shipment_type_stores' => $this->spyShipmentTypeStores instanceof AbstractTransfer ? $this->spyShipmentTypeStores->toArray(true, false) : $this->addValuesToCollection($this->spyShipmentTypeStores, true, false),
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
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'spyShipmentMethods' => $this->spyShipmentMethods instanceof AbstractTransfer ? $this->spyShipmentMethods->toArray(true, true) : $this->addValuesToCollection($this->spyShipmentMethods, true, true),
            'spyShipmentTypeStores' => $this->spyShipmentTypeStores instanceof AbstractTransfer ? $this->spyShipmentTypeStores->toArray(true, true) : $this->addValuesToCollection($this->spyShipmentTypeStores, true, true),
        ];
    }
}
