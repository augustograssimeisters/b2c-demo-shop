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
class RestProductConfigurationPriceAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NET_AMOUNT = 'netAmount';

    /**
     * @var string
     */
    public const GROSS_AMOUNT = 'grossAmount';

    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const PRICE_TYPE_NAME = 'priceTypeName';

    /**
     * @var string
     */
    public const VOLUME_PRICES = 'volumePrices';

    /**
     * @var string
     */
    public const VOLUME_QUANTITY = 'volumeQuantity';

    /**
     * @var int|null
     */
    protected $netAmount;

    /**
     * @var int|null
     */
    protected $grossAmount;

    /**
     * @var \Generated\Shared\Transfer\RestCurrencyTransfer|null
     */
    protected $currency;

    /**
     * @var string|null
     */
    protected $priceTypeName;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\RestProductPriceVolumesAttributesTransfer>
     */
    protected $volumePrices;

    /**
     * @var int|null
     */
    protected $volumeQuantity;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'net_amount' => 'netAmount',
        'netAmount' => 'netAmount',
        'NetAmount' => 'netAmount',
        'gross_amount' => 'grossAmount',
        'grossAmount' => 'grossAmount',
        'GrossAmount' => 'grossAmount',
        'currency' => 'currency',
        'Currency' => 'currency',
        'price_type_name' => 'priceTypeName',
        'priceTypeName' => 'priceTypeName',
        'PriceTypeName' => 'priceTypeName',
        'volume_prices' => 'volumePrices',
        'volumePrices' => 'volumePrices',
        'VolumePrices' => 'volumePrices',
        'volume_quantity' => 'volumeQuantity',
        'volumeQuantity' => 'volumeQuantity',
        'VolumeQuantity' => 'volumeQuantity',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NET_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'net_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROSS_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'gross_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY => [
            'type' => 'Generated\Shared\Transfer\RestCurrencyTransfer',
            'type_shim' => null,
            'name_underscore' => 'currency',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_TYPE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_type_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VOLUME_PRICES => [
            'type' => 'Generated\Shared\Transfer\RestProductPriceVolumesAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'volume_prices',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VOLUME_QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'volume_quantity',
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
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param int|null $netAmount
     *
     * @return $this
     */
    public function setNetAmount($netAmount)
    {
        $this->netAmount = $netAmount;
        $this->modifiedProperties[self::NET_AMOUNT] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @return int|null
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param int|null $netAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNetAmountOrFail($netAmount)
    {
        if ($netAmount === null) {
            $this->throwNullValueException(static::NET_AMOUNT);
        }

        return $this->setNetAmount($netAmount);
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNetAmountOrFail()
    {
        if ($this->netAmount === null) {
            $this->throwNullValueException(static::NET_AMOUNT);
        }

        return $this->netAmount;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNetAmount()
    {
        $this->assertPropertyIsSet(self::NET_AMOUNT);

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param int|null $grossAmount
     *
     * @return $this
     */
    public function setGrossAmount($grossAmount)
    {
        $this->grossAmount = $grossAmount;
        $this->modifiedProperties[self::GROSS_AMOUNT] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @return int|null
     */
    public function getGrossAmount()
    {
        return $this->grossAmount;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param int|null $grossAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGrossAmountOrFail($grossAmount)
    {
        if ($grossAmount === null) {
            $this->throwNullValueException(static::GROSS_AMOUNT);
        }

        return $this->setGrossAmount($grossAmount);
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getGrossAmountOrFail()
    {
        if ($this->grossAmount === null) {
            $this->throwNullValueException(static::GROSS_AMOUNT);
        }

        return $this->grossAmount;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGrossAmount()
    {
        $this->assertPropertyIsSet(self::GROSS_AMOUNT);

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param \Generated\Shared\Transfer\RestCurrencyTransfer|null $currency
     *
     * @return $this
     */
    public function setCurrency(RestCurrencyTransfer $currency = null)
    {
        $this->currency = $currency;
        $this->modifiedProperties[self::CURRENCY] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @return \Generated\Shared\Transfer\RestCurrencyTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param \Generated\Shared\Transfer\RestCurrencyTransfer $currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyOrFail(RestCurrencyTransfer $currency)
    {
        return $this->setCurrency($currency);
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestCurrencyTransfer
     */
    public function getCurrencyOrFail()
    {
        if ($this->currency === null) {
            $this->throwNullValueException(static::CURRENCY);
        }

        return $this->currency;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrency()
    {
        $this->assertPropertyIsSet(self::CURRENCY);

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param string|null $priceTypeName
     *
     * @return $this
     */
    public function setPriceTypeName($priceTypeName)
    {
        $this->priceTypeName = $priceTypeName;
        $this->modifiedProperties[self::PRICE_TYPE_NAME] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @return string|null
     */
    public function getPriceTypeName()
    {
        return $this->priceTypeName;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param string|null $priceTypeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceTypeNameOrFail($priceTypeName)
    {
        if ($priceTypeName === null) {
            $this->throwNullValueException(static::PRICE_TYPE_NAME);
        }

        return $this->setPriceTypeName($priceTypeName);
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceTypeNameOrFail()
    {
        if ($this->priceTypeName === null) {
            $this->throwNullValueException(static::PRICE_TYPE_NAME);
        }

        return $this->priceTypeName;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceTypeName()
    {
        $this->assertPropertyIsSet(self::PRICE_TYPE_NAME);

        return $this;
    }

    /**
     * @module ProductConfigurationsPriceProductVolumesRestApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\RestProductPriceVolumesAttributesTransfer> $volumePrices
     *
     * @return $this
     */
    public function setVolumePrices(ArrayObject $volumePrices)
    {
        $this->volumePrices = $volumePrices;
        $this->modifiedProperties[self::VOLUME_PRICES] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationsPriceProductVolumesRestApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\RestProductPriceVolumesAttributesTransfer>
     */
    public function getVolumePrices()
    {
        return $this->volumePrices;
    }

    /**
     * @module ProductConfigurationsPriceProductVolumesRestApi
     *
     * @param \Generated\Shared\Transfer\RestProductPriceVolumesAttributesTransfer $volumePrice
     *
     * @return $this
     */
    public function addVolumePrice(RestProductPriceVolumesAttributesTransfer $volumePrice)
    {
        $this->volumePrices[] = $volumePrice;
        $this->modifiedProperties[self::VOLUME_PRICES] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationsPriceProductVolumesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVolumePrices()
    {
        $this->assertCollectionPropertyIsSet(self::VOLUME_PRICES);

        return $this;
    }

    /**
     * @module ProductConfigurationsPriceProductVolumesRestApi
     *
     * @param int|null $volumeQuantity
     *
     * @return $this
     */
    public function setVolumeQuantity($volumeQuantity)
    {
        $this->volumeQuantity = $volumeQuantity;
        $this->modifiedProperties[self::VOLUME_QUANTITY] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationsPriceProductVolumesRestApi
     *
     * @return int|null
     */
    public function getVolumeQuantity()
    {
        return $this->volumeQuantity;
    }

    /**
     * @module ProductConfigurationsPriceProductVolumesRestApi
     *
     * @param int|null $volumeQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVolumeQuantityOrFail($volumeQuantity)
    {
        if ($volumeQuantity === null) {
            $this->throwNullValueException(static::VOLUME_QUANTITY);
        }

        return $this->setVolumeQuantity($volumeQuantity);
    }

    /**
     * @module ProductConfigurationsPriceProductVolumesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getVolumeQuantityOrFail()
    {
        if ($this->volumeQuantity === null) {
            $this->throwNullValueException(static::VOLUME_QUANTITY);
        }

        return $this->volumeQuantity;
    }

    /**
     * @module ProductConfigurationsPriceProductVolumesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVolumeQuantity()
    {
        $this->assertPropertyIsSet(self::VOLUME_QUANTITY);

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
                case 'netAmount':
                case 'grossAmount':
                case 'priceTypeName':
                case 'volumeQuantity':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'currency':
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
                case 'volumePrices':
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
                case 'netAmount':
                case 'grossAmount':
                case 'priceTypeName':
                case 'volumeQuantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'currency':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'volumePrices':
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
                case 'netAmount':
                case 'grossAmount':
                case 'priceTypeName':
                case 'volumeQuantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'currency':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'volumePrices':
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
        $this->volumePrices = $this->volumePrices ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'netAmount' => $this->netAmount,
            'grossAmount' => $this->grossAmount,
            'priceTypeName' => $this->priceTypeName,
            'volumeQuantity' => $this->volumeQuantity,
            'currency' => $this->currency,
            'volumePrices' => $this->volumePrices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'net_amount' => $this->netAmount,
            'gross_amount' => $this->grossAmount,
            'price_type_name' => $this->priceTypeName,
            'volume_quantity' => $this->volumeQuantity,
            'currency' => $this->currency,
            'volume_prices' => $this->volumePrices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'net_amount' => $this->netAmount instanceof AbstractTransfer ? $this->netAmount->toArray(true, false) : $this->netAmount,
            'gross_amount' => $this->grossAmount instanceof AbstractTransfer ? $this->grossAmount->toArray(true, false) : $this->grossAmount,
            'price_type_name' => $this->priceTypeName instanceof AbstractTransfer ? $this->priceTypeName->toArray(true, false) : $this->priceTypeName,
            'volume_quantity' => $this->volumeQuantity instanceof AbstractTransfer ? $this->volumeQuantity->toArray(true, false) : $this->volumeQuantity,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'volume_prices' => $this->volumePrices instanceof AbstractTransfer ? $this->volumePrices->toArray(true, false) : $this->addValuesToCollection($this->volumePrices, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'netAmount' => $this->netAmount instanceof AbstractTransfer ? $this->netAmount->toArray(true, true) : $this->netAmount,
            'grossAmount' => $this->grossAmount instanceof AbstractTransfer ? $this->grossAmount->toArray(true, true) : $this->grossAmount,
            'priceTypeName' => $this->priceTypeName instanceof AbstractTransfer ? $this->priceTypeName->toArray(true, true) : $this->priceTypeName,
            'volumeQuantity' => $this->volumeQuantity instanceof AbstractTransfer ? $this->volumeQuantity->toArray(true, true) : $this->volumeQuantity,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'volumePrices' => $this->volumePrices instanceof AbstractTransfer ? $this->volumePrices->toArray(true, true) : $this->addValuesToCollection($this->volumePrices, true, true),
        ];
    }
}
