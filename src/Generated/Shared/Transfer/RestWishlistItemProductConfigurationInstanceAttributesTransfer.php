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
class RestWishlistItemProductConfigurationInstanceAttributesTransfer extends AbstractTransfer
{
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
    public const IS_COMPLETE = 'isComplete';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const AVAILABLE_QUANTITY = 'availableQuantity';

    /**
     * @var string
     */
    public const PRICES = 'prices';

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
     * @var bool|null
     */
    protected $isComplete;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var int|null
     */
    protected $availableQuantity;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\RestProductConfigurationPriceAttributesTransfer>
     */
    protected $prices;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'display_data' => 'displayData',
        'displayData' => 'displayData',
        'DisplayData' => 'displayData',
        'configuration' => 'configuration',
        'Configuration' => 'configuration',
        'configurator_key' => 'configuratorKey',
        'configuratorKey' => 'configuratorKey',
        'ConfiguratorKey' => 'configuratorKey',
        'is_complete' => 'isComplete',
        'isComplete' => 'isComplete',
        'IsComplete' => 'isComplete',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'available_quantity' => 'availableQuantity',
        'availableQuantity' => 'availableQuantity',
        'AvailableQuantity' => 'availableQuantity',
        'prices' => 'prices',
        'Prices' => 'prices',
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
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
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
        self::AVAILABLE_QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'available_quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICES => [
            'type' => 'Generated\Shared\Transfer\RestProductConfigurationPriceAttributesTransfer',
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
    ];

    /**
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
     *
     * @return string|null
     */
    public function getDisplayData()
    {
        return $this->displayData;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
     *
     * @return string|null
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
     *
     * @return string|null
     */
    public function getConfiguratorKey()
    {
        return $this->configuratorKey;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
     *
     * @return bool|null
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
     *
     * @return int|null
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\RestProductConfigurationPriceAttributesTransfer> $prices
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
     * @module ProductConfigurationWishlistsRestApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\RestProductConfigurationPriceAttributesTransfer>
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
     *
     * @param \Generated\Shared\Transfer\RestProductConfigurationPriceAttributesTransfer $price
     *
     * @return $this
     */
    public function addPrice(RestProductConfigurationPriceAttributesTransfer $price)
    {
        $this->prices[] = $price;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
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
                case 'configuration':
                case 'configuratorKey':
                case 'isComplete':
                case 'quantity':
                case 'availableQuantity':
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
                case 'displayData':
                case 'configuration':
                case 'configuratorKey':
                case 'isComplete':
                case 'quantity':
                case 'availableQuantity':
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
                case 'displayData':
                case 'configuration':
                case 'configuratorKey':
                case 'isComplete':
                case 'quantity':
                case 'availableQuantity':
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
            'displayData' => $this->displayData,
            'configuration' => $this->configuration,
            'configuratorKey' => $this->configuratorKey,
            'isComplete' => $this->isComplete,
            'quantity' => $this->quantity,
            'availableQuantity' => $this->availableQuantity,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'display_data' => $this->displayData,
            'configuration' => $this->configuration,
            'configurator_key' => $this->configuratorKey,
            'is_complete' => $this->isComplete,
            'quantity' => $this->quantity,
            'available_quantity' => $this->availableQuantity,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'display_data' => $this->displayData instanceof AbstractTransfer ? $this->displayData->toArray(true, false) : $this->displayData,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, false) : $this->configuration,
            'configurator_key' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, false) : $this->configuratorKey,
            'is_complete' => $this->isComplete instanceof AbstractTransfer ? $this->isComplete->toArray(true, false) : $this->isComplete,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'available_quantity' => $this->availableQuantity instanceof AbstractTransfer ? $this->availableQuantity->toArray(true, false) : $this->availableQuantity,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->addValuesToCollection($this->prices, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'displayData' => $this->displayData instanceof AbstractTransfer ? $this->displayData->toArray(true, true) : $this->displayData,
            'configuration' => $this->configuration instanceof AbstractTransfer ? $this->configuration->toArray(true, true) : $this->configuration,
            'configuratorKey' => $this->configuratorKey instanceof AbstractTransfer ? $this->configuratorKey->toArray(true, true) : $this->configuratorKey,
            'isComplete' => $this->isComplete instanceof AbstractTransfer ? $this->isComplete->toArray(true, true) : $this->isComplete,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'availableQuantity' => $this->availableQuantity instanceof AbstractTransfer ? $this->availableQuantity->toArray(true, true) : $this->availableQuantity,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->addValuesToCollection($this->prices, true, true),
        ];
    }
}
