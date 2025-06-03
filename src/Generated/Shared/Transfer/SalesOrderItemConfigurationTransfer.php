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
class SalesOrderItemConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DISPLAY_DATA = 'displayData';

    /**
     * @var string
     */
    public const CONFIGURATOR_KEY = 'configuratorKey';

    /**
     * @var string
     */
    public const ID_SALES_ORDER_ITEM_CONFIGURATION = 'idSalesOrderItemConfiguration';

    /**
     * @var string
     */
    public const ID_SALES_ORDER_ITEM = 'idSalesOrderItem';

    /**
     * @var string
     */
    public const CONFIGURATION = 'configuration';

    /**
     * @var string|null
     */
    protected $displayData;

    /**
     * @var string|null
     */
    protected $configuratorKey;

    /**
     * @var int|null
     */
    protected $idSalesOrderItemConfiguration;

    /**
     * @var int|null
     */
    protected $idSalesOrderItem;

    /**
     * @var string|null
     */
    protected $configuration;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'display_data' => 'displayData',
        'displayData' => 'displayData',
        'DisplayData' => 'displayData',
        'configurator_key' => 'configuratorKey',
        'configuratorKey' => 'configuratorKey',
        'ConfiguratorKey' => 'configuratorKey',
        'id_sales_order_item_configuration' => 'idSalesOrderItemConfiguration',
        'idSalesOrderItemConfiguration' => 'idSalesOrderItemConfiguration',
        'IdSalesOrderItemConfiguration' => 'idSalesOrderItemConfiguration',
        'id_sales_order_item' => 'idSalesOrderItem',
        'idSalesOrderItem' => 'idSalesOrderItem',
        'IdSalesOrderItem' => 'idSalesOrderItem',
        'configuration' => 'configuration',
        'Configuration' => 'configuration',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DISPLAY_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'display_data',
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
        self::ID_SALES_ORDER_ITEM_CONFIGURATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_item_configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SALES_ORDER_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'configuration',
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
     * @module DateTimeConfiguratorPageExample|SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfigurationGui|SalesProductConfiguration
     *
     * @param string|null $displayData
     *
     * @return $this
     */
    public function setDisplayData($displayData)
    {
        $this->displayData = $displayData;
        $this->modifiedProperties[self::DISPLAY_DATA] = true;

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfigurationGui|SalesProductConfiguration
     *
     * @return string|null
     */
    public function getDisplayData()
    {
        return $this->displayData;
    }

    /**
     * @module DateTimeConfiguratorPageExample|SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfigurationGui|SalesProductConfiguration
     *
     * @param string|null $displayData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDisplayDataOrFail($displayData)
    {
        if ($displayData === null) {
            $this->throwNullValueException(static::DISPLAY_DATA);
        }

        return $this->setDisplayData($displayData);
    }

    /**
     * @module DateTimeConfiguratorPageExample|SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfigurationGui|SalesProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDisplayDataOrFail()
    {
        if ($this->displayData === null) {
            $this->throwNullValueException(static::DISPLAY_DATA);
        }

        return $this->displayData;
    }

    /**
     * @module DateTimeConfiguratorPageExample|SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfigurationGui|SalesProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDisplayData()
    {
        $this->assertPropertyIsSet(self::DISPLAY_DATA);

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfiguration
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
     * @module DateTimeConfiguratorPageExample|SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfiguration
     *
     * @return string|null
     */
    public function getConfiguratorKey()
    {
        return $this->configuratorKey;
    }

    /**
     * @module DateTimeConfiguratorPageExample|SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfiguration
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
     * @module DateTimeConfiguratorPageExample|SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfiguration
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
     * @module DateTimeConfiguratorPageExample|SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfiguration
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
     * @module SalesProductConfigurationWidget|SalesProductConfiguration
     *
     * @param int|null $idSalesOrderItemConfiguration
     *
     * @return $this
     */
    public function setIdSalesOrderItemConfiguration($idSalesOrderItemConfiguration)
    {
        $this->idSalesOrderItemConfiguration = $idSalesOrderItemConfiguration;
        $this->modifiedProperties[self::ID_SALES_ORDER_ITEM_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module SalesProductConfigurationWidget|SalesProductConfiguration
     *
     * @return int|null
     */
    public function getIdSalesOrderItemConfiguration()
    {
        return $this->idSalesOrderItemConfiguration;
    }

    /**
     * @module SalesProductConfigurationWidget|SalesProductConfiguration
     *
     * @param int|null $idSalesOrderItemConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderItemConfigurationOrFail($idSalesOrderItemConfiguration)
    {
        if ($idSalesOrderItemConfiguration === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM_CONFIGURATION);
        }

        return $this->setIdSalesOrderItemConfiguration($idSalesOrderItemConfiguration);
    }

    /**
     * @module SalesProductConfigurationWidget|SalesProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderItemConfigurationOrFail()
    {
        if ($this->idSalesOrderItemConfiguration === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM_CONFIGURATION);
        }

        return $this->idSalesOrderItemConfiguration;
    }

    /**
     * @module SalesProductConfigurationWidget|SalesProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderItemConfiguration()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_ITEM_CONFIGURATION);

        return $this;
    }

    /**
     * @module SalesProductConfigurationWidget|SalesProductConfiguration
     *
     * @param int|null $idSalesOrderItem
     *
     * @return $this
     */
    public function setIdSalesOrderItem($idSalesOrderItem)
    {
        $this->idSalesOrderItem = $idSalesOrderItem;
        $this->modifiedProperties[self::ID_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module SalesProductConfigurationWidget|SalesProductConfiguration
     *
     * @return int|null
     */
    public function getIdSalesOrderItem()
    {
        return $this->idSalesOrderItem;
    }

    /**
     * @module SalesProductConfigurationWidget|SalesProductConfiguration
     *
     * @param int|null $idSalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderItemOrFail($idSalesOrderItem)
    {
        if ($idSalesOrderItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM);
        }

        return $this->setIdSalesOrderItem($idSalesOrderItem);
    }

    /**
     * @module SalesProductConfigurationWidget|SalesProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderItemOrFail()
    {
        if ($this->idSalesOrderItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM);
        }

        return $this->idSalesOrderItem;
    }

    /**
     * @module SalesProductConfigurationWidget|SalesProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderItem()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_ITEM);

        return $this;
    }

    /**
     * @module SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfiguration
     *
     * @param string|null $configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
        $this->modifiedProperties[self::CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfiguration
     *
     * @return string|null
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @module SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfiguration
     *
     * @param string|null $configuration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigurationOrFail($configuration)
    {
        if ($configuration === null) {
            $this->throwNullValueException(static::CONFIGURATION);
        }

        return $this->setConfiguration($configuration);
    }

    /**
     * @module SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfigurationOrFail()
    {
        if ($this->configuration === null) {
            $this->throwNullValueException(static::CONFIGURATION);
        }

        return $this->configuration;
    }

    /**
     * @module SalesProductConfigurationWidget|ProductConfigurationsRestApi|SalesProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfiguration()
    {
        $this->assertPropertyIsSet(self::CONFIGURATION);

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
                case 'displayData':
                case 'configuratorKey':
                case 'idSalesOrderItemConfiguration':
                case 'idSalesOrderItem':
                case 'configuration':
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
                case 'displayData':
                case 'configuratorKey':
                case 'idSalesOrderItemConfiguration':
                case 'idSalesOrderItem':
                case 'configuration':
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
                case 'displayData':
                case 'configuratorKey':
                case 'idSalesOrderItemConfiguration':
                case 'idSalesOrderItem':
                case 'configuration':
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
            'displayData' => $this->displayData,
            'configuratorKey' => $this->configuratorKey,
            'idSalesOrderItemConfiguration' => $this->idSalesOrderItemConfiguration,
            'idSalesOrderItem' => $this->idSalesOrderItem,
            'configuration' => $this->configuration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'display_data' => $this->displayData,
            'configurator_key' => $this->configuratorKey,
            'id_sales_order_item_configuration' => $this->idSalesOrderItemConfiguration,
            'id_sales_order_item' => $this->idSalesOrderItem,
            'configuration' => $this->configuration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'display_data' => $this->displayData instanceof AbstractTransfer ? $this->displayData->toArray(true, false) : $this->displayData,
            'configurator_key' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, false) : $this->configuratorKey,
            'id_sales_order_item_configuration' => $this->idSalesOrderItemConfiguration instanceof AbstractTransfer ? $this->idSalesOrderItemConfiguration->toArray(true, false) : $this->idSalesOrderItemConfiguration,
            'id_sales_order_item' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, false) : $this->idSalesOrderItem,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, false) : $this->configuration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'displayData' => $this->displayData instanceof AbstractTransfer ? $this->displayData->toArray(true, true) : $this->displayData,
            'configuratorKey' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, true) : $this->configuratorKey,
            'idSalesOrderItemConfiguration' => $this->idSalesOrderItemConfiguration instanceof AbstractTransfer ? $this->idSalesOrderItemConfiguration->toArray(true, true) : $this->idSalesOrderItemConfiguration,
            'idSalesOrderItem' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, true) : $this->idSalesOrderItem,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, true) : $this->configuration,
        ];
    }
}
