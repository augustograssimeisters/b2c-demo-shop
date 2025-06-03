<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductConfigurationInstanceTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONFIGURATOR_KEY = 'configuratorKey';

    /**
     * @var string
     */
    public const DISPLAY_DATA = 'displayData';

    /**
     * @var string
     */
    public const AVAILABLE_QUANTITY = 'availableQuantity';

    /**
     * @var string
     */
    public const IS_COMPLETE = 'isComplete';

    /**
     * @var string
     */
    public const CONFIGURATION = 'configuration';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const PRICES = 'prices';

    /**
     * @deprecated Obsolete. Not used.
     */
    public const SKU = 'sku';

    /**
     * @var string|null
     */
    protected $configuratorKey;

    /**
     * @var string|null
     */
    protected $displayData;

    /**
     * @var int|null
     */
    protected $availableQuantity;

    /**
     * @var bool|null
     */
    protected $isComplete;

    /**
     * @var string|null
     */
    protected $configuration;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    protected $prices;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'configurator_key' => 'configuratorKey',
        'configuratorKey' => 'configuratorKey',
        'ConfiguratorKey' => 'configuratorKey',
        'display_data' => 'displayData',
        'displayData' => 'displayData',
        'DisplayData' => 'displayData',
        'available_quantity' => 'availableQuantity',
        'availableQuantity' => 'availableQuantity',
        'AvailableQuantity' => 'availableQuantity',
        'is_complete' => 'isComplete',
        'isComplete' => 'isComplete',
        'IsComplete' => 'isComplete',
        'configuration' => 'configuration',
        'Configuration' => 'configuration',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'prices' => 'prices',
        'Prices' => 'prices',
        'sku' => 'sku',
        'Sku' => 'sku',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::AVAILABLE_QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'available_quantity',
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
        self::QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICES => [
            'type' => 'Generated\Shared\Transfer\PriceProductTransfer',
            'type_shim' => null,
            'name_underscore' => 'prices',
            'is_collection' => true,
            'is_transfer' => true,
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
     * @module DateTimeConfiguratorPageExample|ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsRestApi|SalesProductConfiguration
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
     * @module DateTimeConfiguratorPageExample|ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsRestApi|SalesProductConfiguration
     *
     * @return string|null
     */
    public function getConfiguratorKey()
    {
        return $this->configuratorKey;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsRestApi|SalesProductConfiguration
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
     * @module DateTimeConfiguratorPageExample|ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsRestApi|SalesProductConfiguration
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
     * @module DateTimeConfiguratorPageExample|ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsRestApi|SalesProductConfiguration
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
     * @module DateTimeConfiguratorPageExample|ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module DateTimeConfiguratorPageExample|ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
     *
     * @return string|null
     */
    public function getDisplayData()
    {
        return $this->displayData;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module DateTimeConfiguratorPageExample|ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module DateTimeConfiguratorPageExample|ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module DateTimeConfiguratorPageExample|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi
     *
     * @param int|null $availableQuantity
     *
     * @return $this
     */
    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
        $this->modifiedProperties[self::AVAILABLE_QUANTITY] = true;

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi
     *
     * @return int|null
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi
     *
     * @param int|null $availableQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailableQuantityOrFail($availableQuantity)
    {
        if ($availableQuantity === null) {
            $this->throwNullValueException(static::AVAILABLE_QUANTITY);
        }

        return $this->setAvailableQuantity($availableQuantity);
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAvailableQuantityOrFail()
    {
        if ($this->availableQuantity === null) {
            $this->throwNullValueException(static::AVAILABLE_QUANTITY);
        }

        return $this->availableQuantity;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailableQuantity()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_QUANTITY);

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationDataImport|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationDataImport|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
     *
     * @return bool|null
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationDataImport|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationDataImport|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationDataImport|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
     *
     * @return string|null
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationDataImport|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|SalesProductConfiguration
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
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductConfiguration
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductConfiguration
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductConfiguration
     *
     * @param int|null $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\PriceProductTransfer> $prices
     *
     * @return $this
     */
    public function setPrices(ArrayObject $prices)
    {
        $this->prices = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param \Generated\Shared\Transfer\PriceProductTransfer $price
     *
     * @return $this
     */
    public function addPrice(PriceProductTransfer $price)
    {
        $this->prices[] = $price;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationWishlistsRestApi|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrices()
    {
        $this->assertCollectionPropertyIsSet(self::PRICES);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration|ProductConfigurationsRestApi
     *
     * @deprecated Obsolete. Not used.
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
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration|ProductConfigurationsRestApi
     *
     * @deprecated Obsolete. Not used.
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration|ProductConfigurationsRestApi
     *
     * @deprecated Obsolete. Not used.
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
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Obsolete. Not used.
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
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Obsolete. Not used.
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
                case 'configuratorKey':
                case 'displayData':
                case 'availableQuantity':
                case 'isComplete':
                case 'configuration':
                case 'quantity':
                case 'sku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'prices':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'configuratorKey':
                case 'displayData':
                case 'availableQuantity':
                case 'isComplete':
                case 'configuration':
                case 'quantity':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'prices':
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
                case 'configuratorKey':
                case 'displayData':
                case 'availableQuantity':
                case 'isComplete':
                case 'configuration':
                case 'quantity':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'prices':
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
        $this->prices = $this->prices ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'configuratorKey' => $this->configuratorKey,
            'displayData' => $this->displayData,
            'availableQuantity' => $this->availableQuantity,
            'isComplete' => $this->isComplete,
            'configuration' => $this->configuration,
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'configurator_key' => $this->configuratorKey,
            'display_data' => $this->displayData,
            'available_quantity' => $this->availableQuantity,
            'is_complete' => $this->isComplete,
            'configuration' => $this->configuration,
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'configurator_key' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, false) : $this->configuratorKey,
            'display_data' => $this->displayData instanceof AbstractTransfer ? $this->displayData->toArray(true, false) : $this->displayData,
            'available_quantity' => $this->availableQuantity instanceof AbstractTransfer ? $this->availableQuantity->toArray(true, false) : $this->availableQuantity,
            'is_complete' => $this->isComplete instanceof AbstractTransfer ? $this->isComplete->toArray(true, false) : $this->isComplete,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, false) : $this->configuration,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->addValuesToCollection($this->prices, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'configuratorKey' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, true) : $this->configuratorKey,
            'displayData' => $this->displayData instanceof AbstractTransfer ? $this->displayData->toArray(true, true) : $this->displayData,
            'availableQuantity' => $this->availableQuantity instanceof AbstractTransfer ? $this->availableQuantity->toArray(true, true) : $this->availableQuantity,
            'isComplete' => $this->isComplete instanceof AbstractTransfer ? $this->isComplete->toArray(true, true) : $this->isComplete,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, true) : $this->configuration,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->addValuesToCollection($this->prices, true, true),
        ];
    }
}
