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
class RestWishlistItemsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const AVAILABILITY = 'availability';

    /**
     * @var string
     */
    public const ID = 'id';

    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_INSTANCE = 'productConfigurationInstance';

    /**
     * @var string
     */
    public const PRICES = 'prices';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var \Generated\Shared\Transfer\RestProductConcreteAvailabilityTransfer|null
     */
    protected $availability;

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var \Generated\Shared\Transfer\RestWishlistItemProductConfigurationInstanceAttributesTransfer|null
     */
    protected $productConfigurationInstance;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\RestPriceProductTransfer>
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
        'availability' => 'availability',
        'Availability' => 'availability',
        'id' => 'id',
        'Id' => 'id',
        'product_configuration_instance' => 'productConfigurationInstance',
        'productConfigurationInstance' => 'productConfigurationInstance',
        'ProductConfigurationInstance' => 'productConfigurationInstance',
        'prices' => 'prices',
        'Prices' => 'prices',
        'sku' => 'sku',
        'Sku' => 'sku',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::AVAILABILITY => [
            'type' => 'Generated\Shared\Transfer\RestProductConcreteAvailabilityTransfer',
            'type_shim' => null,
            'name_underscore' => 'availability',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONFIGURATION_INSTANCE => [
            'type' => 'Generated\Shared\Transfer\RestWishlistItemProductConfigurationInstanceAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_configuration_instance',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICES => [
            'type' => 'Generated\Shared\Transfer\RestPriceProductTransfer',
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
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductAvailabilitiesRestApi
     *
     * @param \Generated\Shared\Transfer\RestProductConcreteAvailabilityTransfer|null $availability
     *
     * @return $this
     */
    public function setAvailability(RestProductConcreteAvailabilityTransfer $availability = null)
    {
        $this->availability = $availability;
        $this->modifiedProperties[self::AVAILABILITY] = true;

        return $this;
    }

    /**
     * @module ProductAvailabilitiesRestApi
     *
     * @return \Generated\Shared\Transfer\RestProductConcreteAvailabilityTransfer|null
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @module ProductAvailabilitiesRestApi
     *
     * @param \Generated\Shared\Transfer\RestProductConcreteAvailabilityTransfer $availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailabilityOrFail(RestProductConcreteAvailabilityTransfer $availability)
    {
        return $this->setAvailability($availability);
    }

    /**
     * @module ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestProductConcreteAvailabilityTransfer
     */
    public function getAvailabilityOrFail()
    {
        if ($this->availability === null) {
            $this->throwNullValueException(static::AVAILABILITY);
        }

        return $this->availability;
    }

    /**
     * @module ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailability()
    {
        $this->assertPropertyIsSet(self::AVAILABILITY);

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
     *
     * @param string|null $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        $this->modifiedProperties[self::ID] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
     *
     * @param string|null $id
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOrFail($id)
    {
        if ($id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->setId($id);
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdOrFail()
    {
        if ($this->id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->id;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireId()
    {
        $this->assertPropertyIsSet(self::ID);

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
     *
     * @param \Generated\Shared\Transfer\RestWishlistItemProductConfigurationInstanceAttributesTransfer|null $productConfigurationInstance
     *
     * @return $this
     */
    public function setProductConfigurationInstance(RestWishlistItemProductConfigurationInstanceAttributesTransfer $productConfigurationInstance = null)
    {
        $this->productConfigurationInstance = $productConfigurationInstance;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_INSTANCE] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
     *
     * @return \Generated\Shared\Transfer\RestWishlistItemProductConfigurationInstanceAttributesTransfer|null
     */
    public function getProductConfigurationInstance()
    {
        return $this->productConfigurationInstance;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
     *
     * @param \Generated\Shared\Transfer\RestWishlistItemProductConfigurationInstanceAttributesTransfer $productConfigurationInstance
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfigurationInstanceOrFail(RestWishlistItemProductConfigurationInstanceAttributesTransfer $productConfigurationInstance)
    {
        return $this->setProductConfigurationInstance($productConfigurationInstance);
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestWishlistItemProductConfigurationInstanceAttributesTransfer
     */
    public function getProductConfigurationInstanceOrFail()
    {
        if ($this->productConfigurationInstance === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_INSTANCE);
        }

        return $this->productConfigurationInstance;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfigurationInstance()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATION_INSTANCE);

        return $this;
    }

    /**
     * @module ProductPricesRestApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\RestPriceProductTransfer> $prices
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
     * @module ProductPricesRestApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\RestPriceProductTransfer>
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module ProductPricesRestApi
     *
     * @param \Generated\Shared\Transfer\RestPriceProductTransfer $price
     *
     * @return $this
     */
    public function addPrice(RestPriceProductTransfer $price)
    {
        $this->prices[] = $price;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module ProductPricesRestApi
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
     * @module WishlistsRestApi
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
     * @module WishlistsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module WishlistsRestApi
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
     * @module WishlistsRestApi
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
     * @module WishlistsRestApi
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
                case 'id':
                case 'sku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'availability':
                case 'productConfigurationInstance':
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
                case 'id':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'availability':
                case 'productConfigurationInstance':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'id':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'availability':
                case 'productConfigurationInstance':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'id' => $this->id,
            'sku' => $this->sku,
            'availability' => $this->availability,
            'productConfigurationInstance' => $this->productConfigurationInstance,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id' => $this->id,
            'sku' => $this->sku,
            'availability' => $this->availability,
            'product_configuration_instance' => $this->productConfigurationInstance,
            'prices' => $this->prices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, false) : $this->id,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'availability' => $this->availability instanceof AbstractTransfer ? $this->availability->toArray(true, false) : $this->availability,
            'product_configuration_instance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, false) : $this->productConfigurationInstance,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->addValuesToCollection($this->prices, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, true) : $this->id,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'availability' => $this->availability instanceof AbstractTransfer ? $this->availability->toArray(true, true) : $this->availability,
            'productConfigurationInstance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, true) : $this->productConfigurationInstance,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->addValuesToCollection($this->prices, true, true),
        ];
    }
}
