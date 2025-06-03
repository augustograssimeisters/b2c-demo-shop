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
class PriceProductDimensionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const ID_PRICE_PRODUCT_DEFAULT = 'idPriceProductDefault';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_INSTANCE_HASH = 'productConfigurationInstanceHash';

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var int|null
     */
    protected $idPriceProductDefault;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $productConfigurationInstanceHash;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'type' => 'type',
        'Type' => 'type',
        'id_price_product_default' => 'idPriceProductDefault',
        'idPriceProductDefault' => 'idPriceProductDefault',
        'IdPriceProductDefault' => 'idPriceProductDefault',
        'name' => 'name',
        'Name' => 'name',
        'product_configuration_instance_hash' => 'productConfigurationInstanceHash',
        'productConfigurationInstanceHash' => 'productConfigurationInstanceHash',
        'ProductConfigurationInstanceHash' => 'productConfigurationInstanceHash',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRICE_PRODUCT_DEFAULT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_price_product_default',
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
        self::PRODUCT_CONFIGURATION_INSTANCE_HASH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_configuration_instance_hash',
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
     * @module PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductManagement|ProductPageSearch
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductManagement|ProductPageSearch
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductManagement|ProductPageSearch
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductManagement|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductManagement|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module PriceProductSchedule|PriceProduct
     *
     * @param int|null $idPriceProductDefault
     *
     * @return $this
     */
    public function setIdPriceProductDefault($idPriceProductDefault)
    {
        $this->idPriceProductDefault = $idPriceProductDefault;
        $this->modifiedProperties[self::ID_PRICE_PRODUCT_DEFAULT] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule|PriceProduct
     *
     * @return int|null
     */
    public function getIdPriceProductDefault()
    {
        return $this->idPriceProductDefault;
    }

    /**
     * @module PriceProductSchedule|PriceProduct
     *
     * @param int|null $idPriceProductDefault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPriceProductDefaultOrFail($idPriceProductDefault)
    {
        if ($idPriceProductDefault === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_DEFAULT);
        }

        return $this->setIdPriceProductDefault($idPriceProductDefault);
    }

    /**
     * @module PriceProductSchedule|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPriceProductDefaultOrFail()
    {
        if ($this->idPriceProductDefault === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_DEFAULT);
        }

        return $this->idPriceProductDefault;
    }

    /**
     * @module PriceProductSchedule|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPriceProductDefault()
    {
        $this->assertPropertyIsSet(self::ID_PRICE_PRODUCT_DEFAULT);

        return $this;
    }

    /**
     * @module PriceProduct
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
     * @module PriceProduct
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module PriceProduct
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
     * @module ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi
     *
     * @param string|null $productConfigurationInstanceHash
     *
     * @return $this
     */
    public function setProductConfigurationInstanceHash($productConfigurationInstanceHash)
    {
        $this->productConfigurationInstanceHash = $productConfigurationInstanceHash;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_INSTANCE_HASH] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi
     *
     * @return string|null
     */
    public function getProductConfigurationInstanceHash()
    {
        return $this->productConfigurationInstanceHash;
    }

    /**
     * @module ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi
     *
     * @param string|null $productConfigurationInstanceHash
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfigurationInstanceHashOrFail($productConfigurationInstanceHash)
    {
        if ($productConfigurationInstanceHash === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_INSTANCE_HASH);
        }

        return $this->setProductConfigurationInstanceHash($productConfigurationInstanceHash);
    }

    /**
     * @module ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductConfigurationInstanceHashOrFail()
    {
        if ($this->productConfigurationInstanceHash === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_INSTANCE_HASH);
        }

        return $this->productConfigurationInstanceHash;
    }

    /**
     * @module ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfigurationInstanceHash()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATION_INSTANCE_HASH);

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
                case 'type':
                case 'idPriceProductDefault':
                case 'name':
                case 'productConfigurationInstanceHash':
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
                case 'type':
                case 'idPriceProductDefault':
                case 'name':
                case 'productConfigurationInstanceHash':
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
                case 'type':
                case 'idPriceProductDefault':
                case 'name':
                case 'productConfigurationInstanceHash':
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
            'type' => $this->type,
            'idPriceProductDefault' => $this->idPriceProductDefault,
            'name' => $this->name,
            'productConfigurationInstanceHash' => $this->productConfigurationInstanceHash,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type,
            'id_price_product_default' => $this->idPriceProductDefault,
            'name' => $this->name,
            'product_configuration_instance_hash' => $this->productConfigurationInstanceHash,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'id_price_product_default' => $this->idPriceProductDefault instanceof AbstractTransfer ? $this->idPriceProductDefault->toArray(true, false) : $this->idPriceProductDefault,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'product_configuration_instance_hash' => $this->productConfigurationInstanceHash instanceof AbstractTransfer ? $this->productConfigurationInstanceHash->toArray(true, false) : $this->productConfigurationInstanceHash,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'idPriceProductDefault' => $this->idPriceProductDefault instanceof AbstractTransfer ? $this->idPriceProductDefault->toArray(true, true) : $this->idPriceProductDefault,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'productConfigurationInstanceHash' => $this->productConfigurationInstanceHash instanceof AbstractTransfer ? $this->productConfigurationInstanceHash->toArray(true, true) : $this->productConfigurationInstanceHash,
        ];
    }
}
