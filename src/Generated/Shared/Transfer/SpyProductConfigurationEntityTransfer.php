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
class SpyProductConfigurationEntityTransfer extends AbstractEntityTransfer
{
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
    public const DEFAULT_CONFIGURATION = 'defaultConfiguration';

    /**
     * @var string
     */
    public const DEFAULT_DISPLAY_DATA = 'defaultDisplayData';

    /**
     * @var string
     */
    public const IS_COMPLETE = 'isComplete';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SPY_PRODUCT = 'spyProduct';

    /**
     * @var integer|null
     */
    protected $idProductConfiguration;

    /**
     * @var integer|null
     */
    protected $fkProduct;

    /**
     * @var string|null
     */
    protected $configuratorKey;

    /**
     * @var string|null
     */
    protected $defaultConfiguration;

    /**
     * @var string|null
     */
    protected $defaultDisplayData;

    /**
     * @var boolean|null
     */
    protected $isComplete;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $spyProduct;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_configuration' => 'idProductConfiguration',
        'idProductConfiguration' => 'idProductConfiguration',
        'IdProductConfiguration' => 'idProductConfiguration',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'configurator_key' => 'configuratorKey',
        'configuratorKey' => 'configuratorKey',
        'ConfiguratorKey' => 'configuratorKey',
        'default_configuration' => 'defaultConfiguration',
        'defaultConfiguration' => 'defaultConfiguration',
        'DefaultConfiguration' => 'defaultConfiguration',
        'default_display_data' => 'defaultDisplayData',
        'defaultDisplayData' => 'defaultDisplayData',
        'DefaultDisplayData' => 'defaultDisplayData',
        'is_complete' => 'isComplete',
        'isComplete' => 'isComplete',
        'IsComplete' => 'isComplete',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'spy_product' => 'spyProduct',
        'spyProduct' => 'spyProduct',
        'SpyProduct' => 'spyProduct',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_CONFIGURATION => [
            'type' => 'integer',
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
            'type' => 'integer',
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
        self::IS_COMPLETE => [
            'type' => 'boolean',
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
        self::SPY_PRODUCT => [
            'type' => 'Generated\Shared\Transfer\SpyProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product',
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
    public static $entityNamespace = 'Orm\Zed\ProductConfiguration\Persistence\SpyProductConfiguration';


    /**
     * @module 
     *
     * @param integer|null $idProductConfiguration
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductConfiguration()
    {
        return $this->idProductConfiguration;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductConfiguration
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductConfigurationOrFail()
    {
        if ($this->idProductConfiguration === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONFIGURATION);
        }

        return $this->idProductConfiguration;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkProduct
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProduct
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getConfiguratorKey()
    {
        return $this->configuratorKey;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getDefaultConfiguration()
    {
        return $this->defaultConfiguration;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getDefaultDisplayData()
    {
        return $this->defaultDisplayData;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isComplete
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * @module 
     *
     * @param boolean|null $isComplete
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsCompleteOrFail()
    {
        if ($this->isComplete === null) {
            $this->throwNullValueException(static::IS_COMPLETE);
        }

        return $this->isComplete;
    }

    /**
     * @module 
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
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer|null $spyProduct
     *
     * @return $this
     */
    public function setSpyProduct(SpyProductEntityTransfer $spyProduct = null)
    {
        $this->spyProduct = $spyProduct;
        $this->modifiedProperties[self::SPY_PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    public function getSpyProduct()
    {
        return $this->spyProduct;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer $spyProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductOrFail(SpyProductEntityTransfer $spyProduct)
    {
        return $this->setSpyProduct($spyProduct);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer
     */
    public function getSpyProductOrFail()
    {
        if ($this->spyProduct === null) {
            $this->throwNullValueException(static::SPY_PRODUCT);
        }

        return $this->spyProduct;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProduct()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT);

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
                case 'idProductConfiguration':
                case 'fkProduct':
                case 'configuratorKey':
                case 'defaultConfiguration':
                case 'defaultDisplayData':
                case 'isComplete':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProduct':
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
                case 'idProductConfiguration':
                case 'fkProduct':
                case 'configuratorKey':
                case 'defaultConfiguration':
                case 'defaultDisplayData':
                case 'isComplete':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProduct':
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
                case 'idProductConfiguration':
                case 'fkProduct':
                case 'configuratorKey':
                case 'defaultConfiguration':
                case 'defaultDisplayData':
                case 'isComplete':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProduct':
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
            'idProductConfiguration' => $this->idProductConfiguration,
            'fkProduct' => $this->fkProduct,
            'configuratorKey' => $this->configuratorKey,
            'defaultConfiguration' => $this->defaultConfiguration,
            'defaultDisplayData' => $this->defaultDisplayData,
            'isComplete' => $this->isComplete,
            'uuid' => $this->uuid,
            'spyProduct' => $this->spyProduct,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_configuration' => $this->idProductConfiguration,
            'fk_product' => $this->fkProduct,
            'configurator_key' => $this->configuratorKey,
            'default_configuration' => $this->defaultConfiguration,
            'default_display_data' => $this->defaultDisplayData,
            'is_complete' => $this->isComplete,
            'uuid' => $this->uuid,
            'spy_product' => $this->spyProduct,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_configuration' => $this->idProductConfiguration instanceof AbstractTransfer ? $this->idProductConfiguration->toArray(true, false) : $this->idProductConfiguration,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'configurator_key' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, false) : $this->configuratorKey,
            'default_configuration' => $this->defaultConfiguration instanceof AbstractTransfer ? $this->defaultConfiguration->toArray(true, false) : $this->defaultConfiguration,
            'default_display_data' => $this->defaultDisplayData instanceof AbstractTransfer ? $this->defaultDisplayData->toArray(true, false) : $this->defaultDisplayData,
            'is_complete' => $this->isComplete instanceof AbstractTransfer ? $this->isComplete->toArray(true, false) : $this->isComplete,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'spy_product' => $this->spyProduct instanceof AbstractTransfer ? $this->spyProduct->toArray(true, false) : $this->spyProduct,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductConfiguration' => $this->idProductConfiguration instanceof AbstractTransfer ? $this->idProductConfiguration->toArray(true, true) : $this->idProductConfiguration,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'configuratorKey' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, true) : $this->configuratorKey,
            'defaultConfiguration' => $this->defaultConfiguration instanceof AbstractTransfer ? $this->defaultConfiguration->toArray(true, true) : $this->defaultConfiguration,
            'defaultDisplayData' => $this->defaultDisplayData instanceof AbstractTransfer ? $this->defaultDisplayData->toArray(true, true) : $this->defaultDisplayData,
            'isComplete' => $this->isComplete instanceof AbstractTransfer ? $this->isComplete->toArray(true, true) : $this->isComplete,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'spyProduct' => $this->spyProduct instanceof AbstractTransfer ? $this->spyProduct->toArray(true, true) : $this->spyProduct,
        ];
    }
}
