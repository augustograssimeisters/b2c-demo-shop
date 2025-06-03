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
class SpySalesOrderItemConfigurationEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_ITEM_CONFIGURATION = 'idSalesOrderItemConfiguration';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_ITEM = 'fkSalesOrderItem';

    /**
     * @var string
     */
    public const DISPLAY_DATA = 'displayData';

    /**
     * @var string
     */
    public const CONFIGURATION = 'configuration';

    /**
     * @var string
     */
    public const CONFIGURATOR_KEY = 'configuratorKey';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ITEM = 'spySalesOrderItem';

    /**
     * @var integer|null
     */
    protected $idSalesOrderItemConfiguration;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderItem;

    /**
     * @var string|null
     */
    protected $displayData;

    /**
     * @var string|null
     */
    protected $configuration;

    /**
     * @var string|null
     */
    protected $configuratorKey;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    protected $spySalesOrderItem;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_item_configuration' => 'idSalesOrderItemConfiguration',
        'idSalesOrderItemConfiguration' => 'idSalesOrderItemConfiguration',
        'IdSalesOrderItemConfiguration' => 'idSalesOrderItemConfiguration',
        'fk_sales_order_item' => 'fkSalesOrderItem',
        'fkSalesOrderItem' => 'fkSalesOrderItem',
        'FkSalesOrderItem' => 'fkSalesOrderItem',
        'display_data' => 'displayData',
        'displayData' => 'displayData',
        'DisplayData' => 'displayData',
        'configuration' => 'configuration',
        'Configuration' => 'configuration',
        'configurator_key' => 'configuratorKey',
        'configuratorKey' => 'configuratorKey',
        'ConfiguratorKey' => 'configuratorKey',
        'spy_sales_order_item' => 'spySalesOrderItem',
        'spySalesOrderItem' => 'spySalesOrderItem',
        'SpySalesOrderItem' => 'spySalesOrderItem',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_ITEM_CONFIGURATION => [
            'type' => 'integer',
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
        self::FK_SALES_ORDER_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::SPY_SALES_ORDER_ITEM => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_item',
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
    public static $entityNamespace = 'Orm\Zed\SalesProductConfiguration\Persistence\SpySalesOrderItemConfiguration';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderItemConfiguration
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderItemConfiguration()
    {
        return $this->idSalesOrderItemConfiguration;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderItemConfiguration
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderItemConfigurationOrFail()
    {
        if ($this->idSalesOrderItemConfiguration === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM_CONFIGURATION);
        }

        return $this->idSalesOrderItemConfiguration;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkSalesOrderItem
     *
     * @return $this
     */
    public function setFkSalesOrderItem($fkSalesOrderItem)
    {
        $this->fkSalesOrderItem = $fkSalesOrderItem;
        $this->modifiedProperties[self::FK_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderItem()
    {
        return $this->fkSalesOrderItem;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderItemOrFail($fkSalesOrderItem)
    {
        if ($fkSalesOrderItem === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM);
        }

        return $this->setFkSalesOrderItem($fkSalesOrderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderItemOrFail()
    {
        if ($this->fkSalesOrderItem === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM);
        }

        return $this->fkSalesOrderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderItem()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_ITEM);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getDisplayData()
    {
        return $this->displayData;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null $spySalesOrderItem
     *
     * @return $this
     */
    public function setSpySalesOrderItem(SpySalesOrderItemEntityTransfer $spySalesOrderItem = null)
    {
        $this->spySalesOrderItem = $spySalesOrderItem;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    public function getSpySalesOrderItem()
    {
        return $this->spySalesOrderItem;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer $spySalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpySalesOrderItemOrFail(SpySalesOrderItemEntityTransfer $spySalesOrderItem)
    {
        return $this->setSpySalesOrderItem($spySalesOrderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer
     */
    public function getSpySalesOrderItemOrFail()
    {
        if ($this->spySalesOrderItem === null) {
            $this->throwNullValueException(static::SPY_SALES_ORDER_ITEM);
        }

        return $this->spySalesOrderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderItem()
    {
        $this->assertPropertyIsSet(self::SPY_SALES_ORDER_ITEM);

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
                case 'idSalesOrderItemConfiguration':
                case 'fkSalesOrderItem':
                case 'displayData':
                case 'configuration':
                case 'configuratorKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spySalesOrderItem':
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
                case 'idSalesOrderItemConfiguration':
                case 'fkSalesOrderItem':
                case 'displayData':
                case 'configuration':
                case 'configuratorKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrderItem':
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
                case 'idSalesOrderItemConfiguration':
                case 'fkSalesOrderItem':
                case 'displayData':
                case 'configuration':
                case 'configuratorKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrderItem':
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
            'idSalesOrderItemConfiguration' => $this->idSalesOrderItemConfiguration,
            'fkSalesOrderItem' => $this->fkSalesOrderItem,
            'displayData' => $this->displayData,
            'configuration' => $this->configuration,
            'configuratorKey' => $this->configuratorKey,
            'spySalesOrderItem' => $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item_configuration' => $this->idSalesOrderItemConfiguration,
            'fk_sales_order_item' => $this->fkSalesOrderItem,
            'display_data' => $this->displayData,
            'configuration' => $this->configuration,
            'configurator_key' => $this->configuratorKey,
            'spy_sales_order_item' => $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item_configuration' => $this->idSalesOrderItemConfiguration instanceof AbstractTransfer ? $this->idSalesOrderItemConfiguration->toArray(true, false) : $this->idSalesOrderItemConfiguration,
            'fk_sales_order_item' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, false) : $this->fkSalesOrderItem,
            'display_data' => $this->displayData instanceof AbstractTransfer ? $this->displayData->toArray(true, false) : $this->displayData,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, false) : $this->configuration,
            'configurator_key' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, false) : $this->configuratorKey,
            'spy_sales_order_item' => $this->spySalesOrderItem instanceof AbstractTransfer ? $this->spySalesOrderItem->toArray(true, false) : $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderItemConfiguration' => $this->idSalesOrderItemConfiguration instanceof AbstractTransfer ? $this->idSalesOrderItemConfiguration->toArray(true, true) : $this->idSalesOrderItemConfiguration,
            'fkSalesOrderItem' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, true) : $this->fkSalesOrderItem,
            'displayData' => $this->displayData instanceof AbstractTransfer ? $this->displayData->toArray(true, true) : $this->displayData,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, true) : $this->configuration,
            'configuratorKey' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, true) : $this->configuratorKey,
            'spySalesOrderItem' => $this->spySalesOrderItem instanceof AbstractTransfer ? $this->spySalesOrderItem->toArray(true, true) : $this->spySalesOrderItem,
        ];
    }
}
