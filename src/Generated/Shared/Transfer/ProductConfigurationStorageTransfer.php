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
class ProductConfigurationStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_CONFIGURATION_STORAGE = 'idProductConfigurationStorage';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const FK_PRODUCT_CONFIGURATION = 'fkProductConfiguration';

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
    public const CONFIGURATOR_KEY = 'configuratorKey';

    /**
     * @var string
     */
    public const IS_COMPLETE = 'isComplete';

    /**
     * @var int|null
     */
    protected $idProductConfigurationStorage;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $fkProductConfiguration;

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
    protected $configuratorKey;

    /**
     * @var bool|null
     */
    protected $isComplete;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_configuration_storage' => 'idProductConfigurationStorage',
        'idProductConfigurationStorage' => 'idProductConfigurationStorage',
        'IdProductConfigurationStorage' => 'idProductConfigurationStorage',
        'sku' => 'sku',
        'Sku' => 'sku',
        'fk_product_configuration' => 'fkProductConfiguration',
        'fkProductConfiguration' => 'fkProductConfiguration',
        'FkProductConfiguration' => 'fkProductConfiguration',
        'default_display_data' => 'defaultDisplayData',
        'defaultDisplayData' => 'defaultDisplayData',
        'DefaultDisplayData' => 'defaultDisplayData',
        'default_configuration' => 'defaultConfiguration',
        'defaultConfiguration' => 'defaultConfiguration',
        'DefaultConfiguration' => 'defaultConfiguration',
        'configurator_key' => 'configuratorKey',
        'configuratorKey' => 'configuratorKey',
        'ConfiguratorKey' => 'configuratorKey',
        'is_complete' => 'isComplete',
        'isComplete' => 'isComplete',
        'IsComplete' => 'isComplete',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_CONFIGURATION_STORAGE => [
            'type' => 'int',
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
        self::FK_PRODUCT_CONFIGURATION => [
            'type' => 'int',
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
    ];

    /**
     * @module ProductConfigurationStorage
     *
     * @param int|null $idProductConfigurationStorage
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
     * @module ProductConfigurationStorage
     *
     * @return int|null
     */
    public function getIdProductConfigurationStorage()
    {
        return $this->idProductConfigurationStorage;
    }

    /**
     * @module ProductConfigurationStorage
     *
     * @param int|null $idProductConfigurationStorage
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
     * @module ProductConfigurationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductConfigurationStorageOrFail()
    {
        if ($this->idProductConfigurationStorage === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONFIGURATION_STORAGE);
        }

        return $this->idProductConfigurationStorage;
    }

    /**
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
     *
     * @param int|null $fkProductConfiguration
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
     * @module ProductConfigurationStorage
     *
     * @return int|null
     */
    public function getFkProductConfiguration()
    {
        return $this->fkProductConfiguration;
    }

    /**
     * @module ProductConfigurationStorage
     *
     * @param int|null $fkProductConfiguration
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
     * @module ProductConfigurationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductConfigurationOrFail()
    {
        if ($this->fkProductConfiguration === null) {
            $this->throwNullValueException(static::FK_PRODUCT_CONFIGURATION);
        }

        return $this->fkProductConfiguration;
    }

    /**
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
     *
     * @return string|null
     */
    public function getDefaultDisplayData()
    {
        return $this->defaultDisplayData;
    }

    /**
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
     *
     * @return string|null
     */
    public function getDefaultConfiguration()
    {
        return $this->defaultConfiguration;
    }

    /**
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
     *
     * @return string|null
     */
    public function getConfiguratorKey()
    {
        return $this->configuratorKey;
    }

    /**
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
     *
     * @return bool|null
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
     * @module ProductConfigurationStorage
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
                case 'sku':
                case 'fkProductConfiguration':
                case 'defaultDisplayData':
                case 'defaultConfiguration':
                case 'configuratorKey':
                case 'isComplete':
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
                case 'idProductConfigurationStorage':
                case 'sku':
                case 'fkProductConfiguration':
                case 'defaultDisplayData':
                case 'defaultConfiguration':
                case 'configuratorKey':
                case 'isComplete':
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
                case 'sku':
                case 'fkProductConfiguration':
                case 'defaultDisplayData':
                case 'defaultConfiguration':
                case 'configuratorKey':
                case 'isComplete':
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
            'sku' => $this->sku,
            'fkProductConfiguration' => $this->fkProductConfiguration,
            'defaultDisplayData' => $this->defaultDisplayData,
            'defaultConfiguration' => $this->defaultConfiguration,
            'configuratorKey' => $this->configuratorKey,
            'isComplete' => $this->isComplete,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_configuration_storage' => $this->idProductConfigurationStorage,
            'sku' => $this->sku,
            'fk_product_configuration' => $this->fkProductConfiguration,
            'default_display_data' => $this->defaultDisplayData,
            'default_configuration' => $this->defaultConfiguration,
            'configurator_key' => $this->configuratorKey,
            'is_complete' => $this->isComplete,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_configuration_storage' => $this->idProductConfigurationStorage instanceof AbstractTransfer ? $this->idProductConfigurationStorage->toArray(true, false) : $this->idProductConfigurationStorage,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'fk_product_configuration' => $this->fkProductConfiguration instanceof AbstractTransfer ? $this->fkProductConfiguration->toArray(true, false) : $this->fkProductConfiguration,
            'default_display_data' => $this->defaultDisplayData instanceof AbstractTransfer ? $this->defaultDisplayData->toArray(true, false) : $this->defaultDisplayData,
            'default_configuration' => $this->defaultConfiguration instanceof AbstractTransfer ? $this->defaultConfiguration->toArray(true, false) : $this->defaultConfiguration,
            'configurator_key' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, false) : $this->configuratorKey,
            'is_complete' => $this->isComplete instanceof AbstractTransfer ? $this->isComplete->toArray(true, false) : $this->isComplete,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductConfigurationStorage' => $this->idProductConfigurationStorage instanceof AbstractTransfer ? $this->idProductConfigurationStorage->toArray(true, true) : $this->idProductConfigurationStorage,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'fkProductConfiguration' => $this->fkProductConfiguration instanceof AbstractTransfer ? $this->fkProductConfiguration->toArray(true, true) : $this->fkProductConfiguration,
            'defaultDisplayData' => $this->defaultDisplayData instanceof AbstractTransfer ? $this->defaultDisplayData->toArray(true, true) : $this->defaultDisplayData,
            'defaultConfiguration' => $this->defaultConfiguration instanceof AbstractTransfer ? $this->defaultConfiguration->toArray(true, true) : $this->defaultConfiguration,
            'configuratorKey' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, true) : $this->configuratorKey,
            'isComplete' => $this->isComplete instanceof AbstractTransfer ? $this->isComplete->toArray(true, true) : $this->isComplete,
        ];
    }
}
