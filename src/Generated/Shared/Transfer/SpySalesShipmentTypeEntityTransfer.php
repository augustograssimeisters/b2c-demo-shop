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
class SpySalesShipmentTypeEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_SHIPMENT_TYPE = 'idSalesShipmentType';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_SALES_SHIPMENTS = 'spySalesShipments';

    /**
     * @var integer|null
     */
    protected $idSalesShipmentType;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpySalesShipmentEntityTransfer>
     */
    protected $spySalesShipments;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_shipment_type' => 'idSalesShipmentType',
        'idSalesShipmentType' => 'idSalesShipmentType',
        'IdSalesShipmentType' => 'idSalesShipmentType',
        'key' => 'key',
        'Key' => 'key',
        'name' => 'name',
        'Name' => 'name',
        'spy_sales_shipments' => 'spySalesShipments',
        'spySalesShipments' => 'spySalesShipments',
        'SpySalesShipments' => 'spySalesShipments',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_SHIPMENT_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_shipment_type',
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
        self::SPY_SALES_SHIPMENTS => [
            'type' => 'Generated\Shared\Transfer\SpySalesShipmentEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_shipments',
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
    public static $entityNamespace = 'Orm\Zed\SalesShipmentType\Persistence\SpySalesShipmentType';


    /**
     * @module 
     *
     * @param integer|null $idSalesShipmentType
     *
     * @return $this
     */
    public function setIdSalesShipmentType($idSalesShipmentType)
    {
        $this->idSalesShipmentType = $idSalesShipmentType;
        $this->modifiedProperties[self::ID_SALES_SHIPMENT_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesShipmentType()
    {
        return $this->idSalesShipmentType;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesShipmentType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesShipmentTypeOrFail($idSalesShipmentType)
    {
        if ($idSalesShipmentType === null) {
            $this->throwNullValueException(static::ID_SALES_SHIPMENT_TYPE);
        }

        return $this->setIdSalesShipmentType($idSalesShipmentType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesShipmentTypeOrFail()
    {
        if ($this->idSalesShipmentType === null) {
            $this->throwNullValueException(static::ID_SALES_SHIPMENT_TYPE);
        }

        return $this->idSalesShipmentType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesShipmentType()
    {
        $this->assertPropertyIsSet(self::ID_SALES_SHIPMENT_TYPE);

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
     * @param \ArrayObject<\Generated\Shared\Transfer\SpySalesShipmentEntityTransfer> $spySalesShipments
     *
     * @return $this
     */
    public function setSpySalesShipments(ArrayObject $spySalesShipments)
    {
        $this->spySalesShipments = $spySalesShipments;
        $this->modifiedProperties[self::SPY_SALES_SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpySalesShipmentEntityTransfer>
     */
    public function getSpySalesShipments()
    {
        return $this->spySalesShipments;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesShipmentEntityTransfer $spySalesShipments
     *
     * @return $this
     */
    public function addSpySalesShipments(SpySalesShipmentEntityTransfer $spySalesShipments)
    {
        $this->spySalesShipments[] = $spySalesShipments;
        $this->modifiedProperties[self::SPY_SALES_SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesShipments()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_SHIPMENTS);

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
                case 'idSalesShipmentType':
                case 'key':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spySalesShipments':
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
                case 'idSalesShipmentType':
                case 'key':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesShipments':
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
                case 'idSalesShipmentType':
                case 'key':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesShipments':
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
        $this->spySalesShipments = $this->spySalesShipments ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesShipmentType' => $this->idSalesShipmentType,
            'key' => $this->key,
            'name' => $this->name,
            'spySalesShipments' => $this->spySalesShipments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_shipment_type' => $this->idSalesShipmentType,
            'key' => $this->key,
            'name' => $this->name,
            'spy_sales_shipments' => $this->spySalesShipments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_shipment_type' => $this->idSalesShipmentType instanceof AbstractTransfer ? $this->idSalesShipmentType->toArray(true, false) : $this->idSalesShipmentType,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_sales_shipments' => $this->spySalesShipments instanceof AbstractTransfer ? $this->spySalesShipments->toArray(true, false) : $this->addValuesToCollection($this->spySalesShipments, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesShipmentType' => $this->idSalesShipmentType instanceof AbstractTransfer ? $this->idSalesShipmentType->toArray(true, true) : $this->idSalesShipmentType,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spySalesShipments' => $this->spySalesShipments instanceof AbstractTransfer ? $this->spySalesShipments->toArray(true, true) : $this->addValuesToCollection($this->spySalesShipments, true, true),
        ];
    }
}
