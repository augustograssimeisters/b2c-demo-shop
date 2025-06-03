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
class SpyProductConfigurationStorageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_CONFIGURATION_STORAGE = 'idProductConfigurationStorage';

    /**
     * @var string
     */
    public const FK_PRODUCT_CONFIGURATION = 'fkProductConfiguration';

    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var integer|null
     */
    protected $idProductConfigurationStorage;

    /**
     * @var integer|null
     */
    protected $fkProductConfiguration;

    /**
     * @var string|null
     */
    protected $data;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_configuration_storage' => 'idProductConfigurationStorage',
        'idProductConfigurationStorage' => 'idProductConfigurationStorage',
        'IdProductConfigurationStorage' => 'idProductConfigurationStorage',
        'fk_product_configuration' => 'fkProductConfiguration',
        'fkProductConfiguration' => 'fkProductConfiguration',
        'FkProductConfiguration' => 'fkProductConfiguration',
        'data' => 'data',
        'Data' => 'data',
        'key' => 'key',
        'Key' => 'key',
        'sku' => 'sku',
        'Sku' => 'sku',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_CONFIGURATION_STORAGE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_configuration_storage',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_CONFIGURATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'data',
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
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
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
    public static $entityNamespace = 'Orm\Zed\ProductConfigurationStorage\Persistence\SpyProductConfigurationStorage';


    /**
     * @module 
     *
     * @param integer|null $idProductConfigurationStorage
     *
     * @return $this
     */
    public function setIdProductConfigurationStorage($idProductConfigurationStorage)
    {
        $this->idProductConfigurationStorage = $idProductConfigurationStorage;
        $this->modifiedProperties[self::ID_PRODUCT_CONFIGURATION_STORAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductConfigurationStorage()
    {
        return $this->idProductConfigurationStorage;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductConfigurationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductConfigurationStorageOrFail($idProductConfigurationStorage)
    {
        if ($idProductConfigurationStorage === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONFIGURATION_STORAGE);
        }

        return $this->setIdProductConfigurationStorage($idProductConfigurationStorage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductConfigurationStorageOrFail()
    {
        if ($this->idProductConfigurationStorage === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONFIGURATION_STORAGE);
        }

        return $this->idProductConfigurationStorage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductConfigurationStorage()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_CONFIGURATION_STORAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductConfiguration
     *
     * @return $this
     */
    public function setFkProductConfiguration($fkProductConfiguration)
    {
        $this->fkProductConfiguration = $fkProductConfiguration;
        $this->modifiedProperties[self::FK_PRODUCT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductConfiguration()
    {
        return $this->fkProductConfiguration;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductConfigurationOrFail($fkProductConfiguration)
    {
        if ($fkProductConfiguration === null) {
            $this->throwNullValueException(static::FK_PRODUCT_CONFIGURATION);
        }

        return $this->setFkProductConfiguration($fkProductConfiguration);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductConfigurationOrFail()
    {
        if ($this->fkProductConfiguration === null) {
            $this->throwNullValueException(static::FK_PRODUCT_CONFIGURATION);
        }

        return $this->fkProductConfiguration;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductConfiguration()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_CONFIGURATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module 
     *
     * @param string|null $data
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDataOrFail($data)
    {
        if ($data === null) {
            $this->throwNullValueException(static::DATA);
        }

        return $this->setData($data);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDataOrFail()
    {
        if ($this->data === null) {
            $this->throwNullValueException(static::DATA);
        }

        return $this->data;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireData()
    {
        $this->assertPropertyIsSet(self::DATA);

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
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module 
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

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
                case 'idProductConfigurationStorage':
                case 'fkProductConfiguration':
                case 'data':
                case 'key':
                case 'sku':
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
                case 'idProductConfigurationStorage':
                case 'fkProductConfiguration':
                case 'data':
                case 'key':
                case 'sku':
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
                case 'idProductConfigurationStorage':
                case 'fkProductConfiguration':
                case 'data':
                case 'key':
                case 'sku':
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
            'idProductConfigurationStorage' => $this->idProductConfigurationStorage,
            'fkProductConfiguration' => $this->fkProductConfiguration,
            'data' => $this->data,
            'key' => $this->key,
            'sku' => $this->sku,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_configuration_storage' => $this->idProductConfigurationStorage,
            'fk_product_configuration' => $this->fkProductConfiguration,
            'data' => $this->data,
            'key' => $this->key,
            'sku' => $this->sku,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_configuration_storage' => $this->idProductConfigurationStorage instanceof AbstractTransfer ? $this->idProductConfigurationStorage->toArray(true, false) : $this->idProductConfigurationStorage,
            'fk_product_configuration' => $this->fkProductConfiguration instanceof AbstractTransfer ? $this->fkProductConfiguration->toArray(true, false) : $this->fkProductConfiguration,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductConfigurationStorage' => $this->idProductConfigurationStorage instanceof AbstractTransfer ? $this->idProductConfigurationStorage->toArray(true, true) : $this->idProductConfigurationStorage,
            'fkProductConfiguration' => $this->fkProductConfiguration instanceof AbstractTransfer ? $this->fkProductConfiguration->toArray(true, true) : $this->fkProductConfiguration,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
        ];
    }
}
