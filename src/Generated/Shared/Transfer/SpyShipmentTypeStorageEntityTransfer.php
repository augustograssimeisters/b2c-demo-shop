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
class SpyShipmentTypeStorageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHIPMENT_TYPE_STORAGE = 'idShipmentTypeStorage';

    /**
     * @var string
     */
    public const FK_SHIPMENT_TYPE = 'fkShipmentType';

    /**
     * @var integer|null
     */
    protected $idShipmentTypeStorage;

    /**
     * @var integer|null
     */
    protected $fkShipmentType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shipment_type_storage' => 'idShipmentTypeStorage',
        'idShipmentTypeStorage' => 'idShipmentTypeStorage',
        'IdShipmentTypeStorage' => 'idShipmentTypeStorage',
        'fk_shipment_type' => 'fkShipmentType',
        'fkShipmentType' => 'fkShipmentType',
        'FkShipmentType' => 'fkShipmentType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHIPMENT_TYPE_STORAGE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_shipment_type_storage',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ShipmentTypeStorage\Persistence\SpyShipmentTypeStorage';


    /**
     * @module 
     *
     * @param integer|null $idShipmentTypeStorage
     *
     * @return $this
     */
    public function setIdShipmentTypeStorage($idShipmentTypeStorage)
    {
        $this->idShipmentTypeStorage = $idShipmentTypeStorage;
        $this->modifiedProperties[self::ID_SHIPMENT_TYPE_STORAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdShipmentTypeStorage()
    {
        return $this->idShipmentTypeStorage;
    }

    /**
     * @module 
     *
     * @param integer|null $idShipmentTypeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShipmentTypeStorageOrFail($idShipmentTypeStorage)
    {
        if ($idShipmentTypeStorage === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_TYPE_STORAGE);
        }

        return $this->setIdShipmentTypeStorage($idShipmentTypeStorage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShipmentTypeStorageOrFail()
    {
        if ($this->idShipmentTypeStorage === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_TYPE_STORAGE);
        }

        return $this->idShipmentTypeStorage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShipmentTypeStorage()
    {
        $this->assertPropertyIsSet(self::ID_SHIPMENT_TYPE_STORAGE);

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
                case 'idShipmentTypeStorage':
                case 'fkShipmentType':
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
                case 'idShipmentTypeStorage':
                case 'fkShipmentType':
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
                case 'idShipmentTypeStorage':
                case 'fkShipmentType':
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
            'idShipmentTypeStorage' => $this->idShipmentTypeStorage,
            'fkShipmentType' => $this->fkShipmentType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shipment_type_storage' => $this->idShipmentTypeStorage,
            'fk_shipment_type' => $this->fkShipmentType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shipment_type_storage' => $this->idShipmentTypeStorage instanceof AbstractTransfer ? $this->idShipmentTypeStorage->toArray(true, false) : $this->idShipmentTypeStorage,
            'fk_shipment_type' => $this->fkShipmentType instanceof AbstractTransfer ? $this->fkShipmentType->toArray(true, false) : $this->fkShipmentType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShipmentTypeStorage' => $this->idShipmentTypeStorage instanceof AbstractTransfer ? $this->idShipmentTypeStorage->toArray(true, true) : $this->idShipmentTypeStorage,
            'fkShipmentType' => $this->fkShipmentType instanceof AbstractTransfer ? $this->fkShipmentType->toArray(true, true) : $this->fkShipmentType,
        ];
    }
}
