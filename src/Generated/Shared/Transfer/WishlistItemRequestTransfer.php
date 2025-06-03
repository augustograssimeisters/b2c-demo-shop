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
class WishlistItemRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_INSTANCE = 'productConfigurationInstance';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const ID_CUSTOMER = 'idCustomer';

    /**
     * @var string
     */
    public const UUID_WISHLIST = 'uuidWishlist';

    /**
     * @var \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer|null
     */
    protected $productConfigurationInstance;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $idCustomer;

    /**
     * @var string|null
     */
    protected $uuidWishlist;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_configuration_instance' => 'productConfigurationInstance',
        'productConfigurationInstance' => 'productConfigurationInstance',
        'ProductConfigurationInstance' => 'productConfigurationInstance',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'sku' => 'sku',
        'Sku' => 'sku',
        'id_customer' => 'idCustomer',
        'idCustomer' => 'idCustomer',
        'IdCustomer' => 'idCustomer',
        'uuid_wishlist' => 'uuidWishlist',
        'uuidWishlist' => 'uuidWishlist',
        'UuidWishlist' => 'uuidWishlist',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID_CUSTOMER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_customer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUID_WISHLIST => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid_wishlist',
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
     *
     * @return \Generated\Shared\Transfer\ProductConfigurationInstanceTransfer|null
     */
    public function getProductConfigurationInstance()
    {
        return $this->productConfigurationInstance;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
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
     * @module ProductConfigurationWishlistsRestApi|WishlistsRestApi
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
     * @module WishlistsRestApi
     *
     * @param int|null $idCustomer
     *
     * @return $this
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;
        $this->modifiedProperties[self::ID_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module WishlistsRestApi
     *
     * @return int|null
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * @module WishlistsRestApi
     *
     * @param int|null $idCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCustomerOrFail($idCustomer)
    {
        if ($idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->setIdCustomer($idCustomer);
    }

    /**
     * @module WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCustomerOrFail()
    {
        if ($this->idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->idCustomer;
    }

    /**
     * @module WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomer()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMER);

        return $this;
    }

    /**
     * @module WishlistsRestApi
     *
     * @param string|null $uuidWishlist
     *
     * @return $this
     */
    public function setUuidWishlist($uuidWishlist)
    {
        $this->uuidWishlist = $uuidWishlist;
        $this->modifiedProperties[self::UUID_WISHLIST] = true;

        return $this;
    }

    /**
     * @module WishlistsRestApi
     *
     * @return string|null
     */
    public function getUuidWishlist()
    {
        return $this->uuidWishlist;
    }

    /**
     * @module WishlistsRestApi
     *
     * @param string|null $uuidWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidWishlistOrFail($uuidWishlist)
    {
        if ($uuidWishlist === null) {
            $this->throwNullValueException(static::UUID_WISHLIST);
        }

        return $this->setUuidWishlist($uuidWishlist);
    }

    /**
     * @module WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidWishlistOrFail()
    {
        if ($this->uuidWishlist === null) {
            $this->throwNullValueException(static::UUID_WISHLIST);
        }

        return $this->uuidWishlist;
    }

    /**
     * @module WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuidWishlist()
    {
        $this->assertPropertyIsSet(self::UUID_WISHLIST);

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
                case 'uuid':
                case 'sku':
                case 'idCustomer':
                case 'uuidWishlist':
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
                case 'uuid':
                case 'sku':
                case 'idCustomer':
                case 'uuidWishlist':
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
                case 'uuid':
                case 'sku':
                case 'idCustomer':
                case 'uuidWishlist':
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
            'uuid' => $this->uuid,
            'sku' => $this->sku,
            'idCustomer' => $this->idCustomer,
            'uuidWishlist' => $this->uuidWishlist,
            'productConfigurationInstance' => $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'uuid' => $this->uuid,
            'sku' => $this->sku,
            'id_customer' => $this->idCustomer,
            'uuid_wishlist' => $this->uuidWishlist,
            'product_configuration_instance' => $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'id_customer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, false) : $this->idCustomer,
            'uuid_wishlist' => $this->uuidWishlist instanceof AbstractTransfer ? $this->uuidWishlist->toArray(true, false) : $this->uuidWishlist,
            'product_configuration_instance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, false) : $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'idCustomer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, true) : $this->idCustomer,
            'uuidWishlist' => $this->uuidWishlist instanceof AbstractTransfer ? $this->uuidWishlist->toArray(true, true) : $this->uuidWishlist,
            'productConfigurationInstance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, true) : $this->productConfigurationInstance,
        ];
    }
}
