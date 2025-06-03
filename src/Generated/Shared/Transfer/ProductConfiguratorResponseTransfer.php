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
class ProductConfiguratorResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SOURCE_TYPE = 'sourceType';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const ITEM_GROUP_KEY = 'itemGroupKey';

    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_INSTANCE = 'productConfigurationInstance';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const TIMESTAMP = 'timestamp';

    /**
     * @var string
     */
    public const CHECK_SUM = 'checkSum';

    /**
     * @var string
     */
    public const ID_WISHLIST_ITEM = 'idWishlistItem';

    /**
     * @var string|null
     */
    protected $sourceType;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $itemGroupKey;

    /**
     * @var \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer|null
     */
    protected $productConfigurationInstance;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var int|null
     */
    protected $timestamp;

    /**
     * @var string|null
     */
    protected $checkSum;

    /**
     * @var int|null
     */
    protected $idWishlistItem;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'source_type' => 'sourceType',
        'sourceType' => 'sourceType',
        'SourceType' => 'sourceType',
        'sku' => 'sku',
        'Sku' => 'sku',
        'item_group_key' => 'itemGroupKey',
        'itemGroupKey' => 'itemGroupKey',
        'ItemGroupKey' => 'itemGroupKey',
        'product_configuration_instance' => 'productConfigurationInstance',
        'productConfigurationInstance' => 'productConfigurationInstance',
        'ProductConfigurationInstance' => 'productConfigurationInstance',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'timestamp' => 'timestamp',
        'Timestamp' => 'timestamp',
        'check_sum' => 'checkSum',
        'checkSum' => 'checkSum',
        'CheckSum' => 'checkSum',
        'id_wishlist_item' => 'idWishlistItem',
        'idWishlistItem' => 'idWishlistItem',
        'IdWishlistItem' => 'idWishlistItem',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SOURCE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'source_type',
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
        self::ITEM_GROUP_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'item_group_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONFIGURATION_INSTANCE => [
            'type' => 'Generated\Shared\Transfer\ProductConfigurationInstanceTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_configuration_instance',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TIMESTAMP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'timestamp',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHECK_SUM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'check_sum',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_WISHLIST_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_wishlist_item',
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
     * @module CartPage|ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @param string|null $sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
        $this->modifiedProperties[self::SOURCE_TYPE] = true;

        return $this;
    }

    /**
     * @module CartPage|ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @return string|null
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * @module CartPage|ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @param string|null $sourceType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSourceTypeOrFail($sourceType)
    {
        if ($sourceType === null) {
            $this->throwNullValueException(static::SOURCE_TYPE);
        }

        return $this->setSourceType($sourceType);
    }

    /**
     * @module CartPage|ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSourceTypeOrFail()
    {
        if ($this->sourceType === null) {
            $this->throwNullValueException(static::SOURCE_TYPE);
        }

        return $this->sourceType;
    }

    /**
     * @module CartPage|ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSourceType()
    {
        $this->assertPropertyIsSet(self::SOURCE_TYPE);

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
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
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
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
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
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
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
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
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfiguration
     *
     * @param string|null $itemGroupKey
     *
     * @return $this
     */
    public function setItemGroupKey($itemGroupKey)
    {
        $this->itemGroupKey = $itemGroupKey;
        $this->modifiedProperties[self::ITEM_GROUP_KEY] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfiguration
     *
     * @return string|null
     */
    public function getItemGroupKey()
    {
        return $this->itemGroupKey;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfiguration
     *
     * @param string|null $itemGroupKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemGroupKeyOrFail($itemGroupKey)
    {
        if ($itemGroupKey === null) {
            $this->throwNullValueException(static::ITEM_GROUP_KEY);
        }

        return $this->setItemGroupKey($itemGroupKey);
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getItemGroupKeyOrFail()
    {
        if ($this->itemGroupKey === null) {
            $this->throwNullValueException(static::ITEM_GROUP_KEY);
        }

        return $this->itemGroupKey;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemGroupKey()
    {
        $this->assertPropertyIsSet(self::ITEM_GROUP_KEY);

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer|null $productConfigurationInstance
     *
     * @return $this
     */
    public function setProductConfigurationInstance(ProductConfigurationInstanceTransfer $productConfigurationInstance = null)
    {
        $this->productConfigurationInstance = $productConfigurationInstance;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_INSTANCE] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @return \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer|null
     */
    public function getProductConfigurationInstance()
    {
        return $this->productConfigurationInstance;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer $productConfigurationInstance
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfigurationInstanceOrFail(ProductConfigurationInstanceTransfer $productConfigurationInstance)
    {
        return $this->setProductConfigurationInstance($productConfigurationInstance);
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer
     */
    public function getProductConfigurationInstanceOrFail()
    {
        if ($this->productConfigurationInstance === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_INSTANCE);
        }

        return $this->productConfigurationInstance;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
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
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @param int|null $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        $this->modifiedProperties[self::TIMESTAMP] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @return int|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @param int|null $timestamp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTimestampOrFail($timestamp)
    {
        if ($timestamp === null) {
            $this->throwNullValueException(static::TIMESTAMP);
        }

        return $this->setTimestamp($timestamp);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTimestampOrFail()
    {
        if ($this->timestamp === null) {
            $this->throwNullValueException(static::TIMESTAMP);
        }

        return $this->timestamp;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTimestamp()
    {
        $this->assertPropertyIsSet(self::TIMESTAMP);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @param string|null $checkSum
     *
     * @return $this
     */
    public function setCheckSum($checkSum)
    {
        $this->checkSum = $checkSum;
        $this->modifiedProperties[self::CHECK_SUM] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @return string|null
     */
    public function getCheckSum()
    {
        return $this->checkSum;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @param string|null $checkSum
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCheckSumOrFail($checkSum)
    {
        if ($checkSum === null) {
            $this->throwNullValueException(static::CHECK_SUM);
        }

        return $this->setCheckSum($checkSum);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCheckSumOrFail()
    {
        if ($this->checkSum === null) {
            $this->throwNullValueException(static::CHECK_SUM);
        }

        return $this->checkSum;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCheckSum()
    {
        $this->assertPropertyIsSet(self::CHECK_SUM);

        return $this;
    }

    /**
     * @module ProductConfigurationWishlist
     *
     * @param int|null $idWishlistItem
     *
     * @return $this
     */
    public function setIdWishlistItem($idWishlistItem)
    {
        $this->idWishlistItem = $idWishlistItem;
        $this->modifiedProperties[self::ID_WISHLIST_ITEM] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlist
     *
     * @return int|null
     */
    public function getIdWishlistItem()
    {
        return $this->idWishlistItem;
    }

    /**
     * @module ProductConfigurationWishlist
     *
     * @param int|null $idWishlistItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdWishlistItemOrFail($idWishlistItem)
    {
        if ($idWishlistItem === null) {
            $this->throwNullValueException(static::ID_WISHLIST_ITEM);
        }

        return $this->setIdWishlistItem($idWishlistItem);
    }

    /**
     * @module ProductConfigurationWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdWishlistItemOrFail()
    {
        if ($this->idWishlistItem === null) {
            $this->throwNullValueException(static::ID_WISHLIST_ITEM);
        }

        return $this->idWishlistItem;
    }

    /**
     * @module ProductConfigurationWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdWishlistItem()
    {
        $this->assertPropertyIsSet(self::ID_WISHLIST_ITEM);

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
                case 'sourceType':
                case 'sku':
                case 'itemGroupKey':
                case 'customerReference':
                case 'timestamp':
                case 'checkSum':
                case 'idWishlistItem':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
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
                case 'sourceType':
                case 'sku':
                case 'itemGroupKey':
                case 'customerReference':
                case 'timestamp':
                case 'checkSum':
                case 'idWishlistItem':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConfigurationInstance':
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
                case 'sourceType':
                case 'sku':
                case 'itemGroupKey':
                case 'customerReference':
                case 'timestamp':
                case 'checkSum':
                case 'idWishlistItem':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConfigurationInstance':
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
            'sourceType' => $this->sourceType,
            'sku' => $this->sku,
            'itemGroupKey' => $this->itemGroupKey,
            'customerReference' => $this->customerReference,
            'timestamp' => $this->timestamp,
            'checkSum' => $this->checkSum,
            'idWishlistItem' => $this->idWishlistItem,
            'productConfigurationInstance' => $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'source_type' => $this->sourceType,
            'sku' => $this->sku,
            'item_group_key' => $this->itemGroupKey,
            'customer_reference' => $this->customerReference,
            'timestamp' => $this->timestamp,
            'check_sum' => $this->checkSum,
            'id_wishlist_item' => $this->idWishlistItem,
            'product_configuration_instance' => $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'source_type' => $this->sourceType instanceof AbstractTransfer ? $this->sourceType->toArray(true, false) : $this->sourceType,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'item_group_key' => $this->itemGroupKey instanceof AbstractTransfer ? $this->itemGroupKey->toArray(true, false) : $this->itemGroupKey,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'timestamp' => $this->timestamp instanceof AbstractTransfer ? $this->timestamp->toArray(true, false) : $this->timestamp,
            'check_sum' => $this->checkSum instanceof AbstractTransfer ? $this->checkSum->toArray(true, false) : $this->checkSum,
            'id_wishlist_item' => $this->idWishlistItem instanceof AbstractTransfer ? $this->idWishlistItem->toArray(true, false) : $this->idWishlistItem,
            'product_configuration_instance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, false) : $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sourceType' => $this->sourceType instanceof AbstractTransfer ? $this->sourceType->toArray(true, true) : $this->sourceType,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'itemGroupKey' => $this->itemGroupKey instanceof AbstractTransfer ? $this->itemGroupKey->toArray(true, true) : $this->itemGroupKey,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'timestamp' => $this->timestamp instanceof AbstractTransfer ? $this->timestamp->toArray(true, true) : $this->timestamp,
            'checkSum' => $this->checkSum instanceof AbstractTransfer ? $this->checkSum->toArray(true, true) : $this->checkSum,
            'idWishlistItem' => $this->idWishlistItem instanceof AbstractTransfer ? $this->idWishlistItem->toArray(true, true) : $this->idWishlistItem,
            'productConfigurationInstance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, true) : $this->productConfigurationInstance,
        ];
    }
}
