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
class ProductConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const ID_PRODUCT_CONFIGURATION = 'idProductConfiguration';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const CONFIGURATOR_KEY = 'configuratorKey';

    /**
     * @var string
     */
    public const IS_COMPLETE = 'isComplete';

    /**
     * @var string
     */
    public const DEFAULT_DISPLAY_DATA = 'defaultDisplayData';

    /**
     * @var string
     */
    public const DEFAULT_CONFIGURATION = 'defaultConfiguration';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $idProductConfiguration;

    /**
     * @var int|null
     */
    protected $fkProduct;

    /**
     * @var string|null
     */
    protected $configuratorKey;

    /**
     * @var bool|null
     */
    protected $isComplete;

    /**
     * @var string|null
     */
    protected $defaultDisplayData;

    /**
     * @var string|null
     */
    protected $defaultConfiguration;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'id_product_configuration' => 'idProductConfiguration',
        'idProductConfiguration' => 'idProductConfiguration',
        'IdProductConfiguration' => 'idProductConfiguration',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'configurator_key' => 'configuratorKey',
        'configuratorKey' => 'configuratorKey',
        'ConfiguratorKey' => 'configuratorKey',
        'is_complete' => 'isComplete',
        'isComplete' => 'isComplete',
        'IsComplete' => 'isComplete',
        'default_display_data' => 'defaultDisplayData',
        'defaultDisplayData' => 'defaultDisplayData',
        'DefaultDisplayData' => 'defaultDisplayData',
        'default_configuration' => 'defaultConfiguration',
        'defaultConfiguration' => 'defaultConfiguration',
        'DefaultConfiguration' => 'defaultConfiguration',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID_PRODUCT_CONFIGURATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURATOR_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'configurator_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_COMPLETE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_complete',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_DISPLAY_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_display_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_CONFIGURATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_configuration',
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
    ];

    /**
     * @module ProductConfigurationCart|ProductConfiguration
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
     * @module ProductConfigurationCart|ProductConfiguration
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductConfigurationCart|ProductConfiguration
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
     * @module ProductConfigurationCart|ProductConfiguration
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
     * @module ProductConfigurationCart|ProductConfiguration
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
     * @module ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfiguration
     *
     * @param int|null $idProductConfiguration
     *
     * @return $this
     */
    public function setIdProductConfiguration($idProductConfiguration)
    {
        $this->idProductConfiguration = $idProductConfiguration;
        $this->modifiedProperties[self::ID_PRODUCT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfiguration
     *
     * @return int|null
     */
    public function getIdProductConfiguration()
    {
        return $this->idProductConfiguration;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfiguration
     *
     * @param int|null $idProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductConfigurationOrFail($idProductConfiguration)
    {
        if ($idProductConfiguration === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONFIGURATION);
        }

        return $this->setIdProductConfiguration($idProductConfiguration);
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductConfigurationOrFail()
    {
        if ($this->idProductConfiguration === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONFIGURATION);
        }

        return $this->idProductConfiguration;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductConfiguration()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_CONFIGURATION);

        return $this;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @param int|null $fkProduct
     *
     * @return $this
     */
    public function setFkProduct($fkProduct)
    {
        $this->fkProduct = $fkProduct;
        $this->modifiedProperties[self::FK_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @return int|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @param int|null $fkProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductOrFail($fkProduct)
    {
        if ($fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->setFkProduct($fkProduct);
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProduct()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT);

        return $this;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @param string|null $configuratorKey
     *
     * @return $this
     */
    public function setConfiguratorKey($configuratorKey)
    {
        $this->configuratorKey = $configuratorKey;
        $this->modifiedProperties[self::CONFIGURATOR_KEY] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @return string|null
     */
    public function getConfiguratorKey()
    {
        return $this->configuratorKey;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @param string|null $configuratorKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfiguratorKeyOrFail($configuratorKey)
    {
        if ($configuratorKey === null) {
            $this->throwNullValueException(static::CONFIGURATOR_KEY);
        }

        return $this->setConfiguratorKey($configuratorKey);
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfiguratorKeyOrFail()
    {
        if ($this->configuratorKey === null) {
            $this->throwNullValueException(static::CONFIGURATOR_KEY);
        }

        return $this->configuratorKey;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfiguratorKey()
    {
        $this->assertPropertyIsSet(self::CONFIGURATOR_KEY);

        return $this;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @param bool|null $isComplete
     *
     * @return $this
     */
    public function setIsComplete($isComplete)
    {
        $this->isComplete = $isComplete;
        $this->modifiedProperties[self::IS_COMPLETE] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @return bool|null
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @param bool|null $isComplete
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsCompleteOrFail($isComplete)
    {
        if ($isComplete === null) {
            $this->throwNullValueException(static::IS_COMPLETE);
        }

        return $this->setIsComplete($isComplete);
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsCompleteOrFail()
    {
        if ($this->isComplete === null) {
            $this->throwNullValueException(static::IS_COMPLETE);
        }

        return $this->isComplete;
    }

    /**
     * @module ProductConfigurationDataImport|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsComplete()
    {
        $this->assertPropertyIsSet(self::IS_COMPLETE);

        return $this;
    }

    /**
     * @module ProductConfiguration
     *
     * @param string|null $defaultDisplayData
     *
     * @return $this
     */
    public function setDefaultDisplayData($defaultDisplayData)
    {
        $this->defaultDisplayData = $defaultDisplayData;
        $this->modifiedProperties[self::DEFAULT_DISPLAY_DATA] = true;

        return $this;
    }

    /**
     * @module ProductConfiguration
     *
     * @return string|null
     */
    public function getDefaultDisplayData()
    {
        return $this->defaultDisplayData;
    }

    /**
     * @module ProductConfiguration
     *
     * @param string|null $defaultDisplayData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultDisplayDataOrFail($defaultDisplayData)
    {
        if ($defaultDisplayData === null) {
            $this->throwNullValueException(static::DEFAULT_DISPLAY_DATA);
        }

        return $this->setDefaultDisplayData($defaultDisplayData);
    }

    /**
     * @module ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultDisplayDataOrFail()
    {
        if ($this->defaultDisplayData === null) {
            $this->throwNullValueException(static::DEFAULT_DISPLAY_DATA);
        }

        return $this->defaultDisplayData;
    }

    /**
     * @module ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultDisplayData()
    {
        $this->assertPropertyIsSet(self::DEFAULT_DISPLAY_DATA);

        return $this;
    }

    /**
     * @module ProductConfiguration
     *
     * @param string|null $defaultConfiguration
     *
     * @return $this
     */
    public function setDefaultConfiguration($defaultConfiguration)
    {
        $this->defaultConfiguration = $defaultConfiguration;
        $this->modifiedProperties[self::DEFAULT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module ProductConfiguration
     *
     * @return string|null
     */
    public function getDefaultConfiguration()
    {
        return $this->defaultConfiguration;
    }

    /**
     * @module ProductConfiguration
     *
     * @param string|null $defaultConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultConfigurationOrFail($defaultConfiguration)
    {
        if ($defaultConfiguration === null) {
            $this->throwNullValueException(static::DEFAULT_CONFIGURATION);
        }

        return $this->setDefaultConfiguration($defaultConfiguration);
    }

    /**
     * @module ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultConfigurationOrFail()
    {
        if ($this->defaultConfiguration === null) {
            $this->throwNullValueException(static::DEFAULT_CONFIGURATION);
        }

        return $this->defaultConfiguration;
    }

    /**
     * @module ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultConfiguration()
    {
        $this->assertPropertyIsSet(self::DEFAULT_CONFIGURATION);

        return $this;
    }

    /**
     * @module ProductConfiguration
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
     * @module ProductConfiguration
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module ProductConfiguration
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
     * @module ProductConfiguration
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
     * @module ProductConfiguration
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
                case 'sku':
                case 'idProductConfiguration':
                case 'fkProduct':
                case 'configuratorKey':
                case 'isComplete':
                case 'defaultDisplayData':
                case 'defaultConfiguration':
                case 'uuid':
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
                case 'sku':
                case 'idProductConfiguration':
                case 'fkProduct':
                case 'configuratorKey':
                case 'isComplete':
                case 'defaultDisplayData':
                case 'defaultConfiguration':
                case 'uuid':
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
                case 'sku':
                case 'idProductConfiguration':
                case 'fkProduct':
                case 'configuratorKey':
                case 'isComplete':
                case 'defaultDisplayData':
                case 'defaultConfiguration':
                case 'uuid':
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
            'sku' => $this->sku,
            'idProductConfiguration' => $this->idProductConfiguration,
            'fkProduct' => $this->fkProduct,
            'configuratorKey' => $this->configuratorKey,
            'isComplete' => $this->isComplete,
            'defaultDisplayData' => $this->defaultDisplayData,
            'defaultConfiguration' => $this->defaultConfiguration,
            'uuid' => $this->uuid,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'id_product_configuration' => $this->idProductConfiguration,
            'fk_product' => $this->fkProduct,
            'configurator_key' => $this->configuratorKey,
            'is_complete' => $this->isComplete,
            'default_display_data' => $this->defaultDisplayData,
            'default_configuration' => $this->defaultConfiguration,
            'uuid' => $this->uuid,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'id_product_configuration' => $this->idProductConfiguration instanceof AbstractTransfer ? $this->idProductConfiguration->toArray(true, false) : $this->idProductConfiguration,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'configurator_key' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, false) : $this->configuratorKey,
            'is_complete' => $this->isComplete instanceof AbstractTransfer ? $this->isComplete->toArray(true, false) : $this->isComplete,
            'default_display_data' => $this->defaultDisplayData instanceof AbstractTransfer ? $this->defaultDisplayData->toArray(true, false) : $this->defaultDisplayData,
            'default_configuration' => $this->defaultConfiguration instanceof AbstractTransfer ? $this->defaultConfiguration->toArray(true, false) : $this->defaultConfiguration,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'idProductConfiguration' => $this->idProductConfiguration instanceof AbstractTransfer ? $this->idProductConfiguration->toArray(true, true) : $this->idProductConfiguration,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'configuratorKey' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, true) : $this->configuratorKey,
            'isComplete' => $this->isComplete instanceof AbstractTransfer ? $this->isComplete->toArray(true, true) : $this->isComplete,
            'defaultDisplayData' => $this->defaultDisplayData instanceof AbstractTransfer ? $this->defaultDisplayData->toArray(true, true) : $this->defaultDisplayData,
            'defaultConfiguration' => $this->defaultConfiguration instanceof AbstractTransfer ? $this->defaultConfiguration->toArray(true, true) : $this->defaultConfiguration,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
        ];
    }
}
