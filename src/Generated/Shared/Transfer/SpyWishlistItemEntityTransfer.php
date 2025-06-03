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
class SpyWishlistItemEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_WISHLIST_ITEM = 'idWishlistItem';

    /**
     * @var string
     */
    public const FK_WISHLIST = 'fkWishlist';

    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_INSTANCE_DATA = 'productConfigurationInstanceData';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const SPY_WISHLIST = 'spyWishlist';

    /**
     * @var string
     */
    public const SPY_PRODUCT = 'spyProduct';

    /**
     * @var integer|null
     */
    protected $idWishlistItem;

    /**
     * @var integer|null
     */
    protected $fkWishlist;

    /**
     * @var string|null
     */
    protected $productConfigurationInstanceData;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var \Generated\Shared\Transfer\SpyWishlistEntityTransfer|null
     */
    protected $spyWishlist;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $spyProduct;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_wishlist_item' => 'idWishlistItem',
        'idWishlistItem' => 'idWishlistItem',
        'IdWishlistItem' => 'idWishlistItem',
        'fk_wishlist' => 'fkWishlist',
        'fkWishlist' => 'fkWishlist',
        'FkWishlist' => 'fkWishlist',
        'product_configuration_instance_data' => 'productConfigurationInstanceData',
        'productConfigurationInstanceData' => 'productConfigurationInstanceData',
        'ProductConfigurationInstanceData' => 'productConfigurationInstanceData',
        'sku' => 'sku',
        'Sku' => 'sku',
        'spy_wishlist' => 'spyWishlist',
        'spyWishlist' => 'spyWishlist',
        'SpyWishlist' => 'spyWishlist',
        'spy_product' => 'spyProduct',
        'spyProduct' => 'spyProduct',
        'SpyProduct' => 'spyProduct',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_WISHLIST_ITEM => [
            'type' => 'integer',
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
        self::FK_WISHLIST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_wishlist',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONFIGURATION_INSTANCE_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_configuration_instance_data',
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
        self::SPY_WISHLIST => [
            'type' => 'Generated\Shared\Transfer\SpyWishlistEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_wishlist',
            'is_collection' => false,
            'is_transfer' => true,
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
    public static $entityNamespace = 'Orm\Zed\Wishlist\Persistence\SpyWishlistItem';


    /**
     * @module 
     *
     * @param integer|null $idWishlistItem
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdWishlistItem()
    {
        return $this->idWishlistItem;
    }

    /**
     * @module 
     *
     * @param integer|null $idWishlistItem
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdWishlistItemOrFail()
    {
        if ($this->idWishlistItem === null) {
            $this->throwNullValueException(static::ID_WISHLIST_ITEM);
        }

        return $this->idWishlistItem;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkWishlist
     *
     * @return $this
     */
    public function setFkWishlist($fkWishlist)
    {
        $this->fkWishlist = $fkWishlist;
        $this->modifiedProperties[self::FK_WISHLIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkWishlist()
    {
        return $this->fkWishlist;
    }

    /**
     * @module 
     *
     * @param integer|null $fkWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkWishlistOrFail($fkWishlist)
    {
        if ($fkWishlist === null) {
            $this->throwNullValueException(static::FK_WISHLIST);
        }

        return $this->setFkWishlist($fkWishlist);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkWishlistOrFail()
    {
        if ($this->fkWishlist === null) {
            $this->throwNullValueException(static::FK_WISHLIST);
        }

        return $this->fkWishlist;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkWishlist()
    {
        $this->assertPropertyIsSet(self::FK_WISHLIST);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $productConfigurationInstanceData
     *
     * @return $this
     */
    public function setProductConfigurationInstanceData($productConfigurationInstanceData)
    {
        $this->productConfigurationInstanceData = $productConfigurationInstanceData;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_INSTANCE_DATA] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getProductConfigurationInstanceData()
    {
        return $this->productConfigurationInstanceData;
    }

    /**
     * @module 
     *
     * @param string|null $productConfigurationInstanceData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfigurationInstanceDataOrFail($productConfigurationInstanceData)
    {
        if ($productConfigurationInstanceData === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_INSTANCE_DATA);
        }

        return $this->setProductConfigurationInstanceData($productConfigurationInstanceData);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductConfigurationInstanceDataOrFail()
    {
        if ($this->productConfigurationInstanceData === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_INSTANCE_DATA);
        }

        return $this->productConfigurationInstanceData;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfigurationInstanceData()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATION_INSTANCE_DATA);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyWishlistEntityTransfer|null $spyWishlist
     *
     * @return $this
     */
    public function setSpyWishlist(SpyWishlistEntityTransfer $spyWishlist = null)
    {
        $this->spyWishlist = $spyWishlist;
        $this->modifiedProperties[self::SPY_WISHLIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyWishlistEntityTransfer|null
     */
    public function getSpyWishlist()
    {
        return $this->spyWishlist;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyWishlistEntityTransfer $spyWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyWishlistOrFail(SpyWishlistEntityTransfer $spyWishlist)
    {
        return $this->setSpyWishlist($spyWishlist);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyWishlistEntityTransfer
     */
    public function getSpyWishlistOrFail()
    {
        if ($this->spyWishlist === null) {
            $this->throwNullValueException(static::SPY_WISHLIST);
        }

        return $this->spyWishlist;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyWishlist()
    {
        $this->assertPropertyIsSet(self::SPY_WISHLIST);

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
                case 'idWishlistItem':
                case 'fkWishlist':
                case 'productConfigurationInstanceData':
                case 'sku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyWishlist':
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
                case 'idWishlistItem':
                case 'fkWishlist':
                case 'productConfigurationInstanceData':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyWishlist':
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
                case 'idWishlistItem':
                case 'fkWishlist':
                case 'productConfigurationInstanceData':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyWishlist':
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
            'idWishlistItem' => $this->idWishlistItem,
            'fkWishlist' => $this->fkWishlist,
            'productConfigurationInstanceData' => $this->productConfigurationInstanceData,
            'sku' => $this->sku,
            'spyWishlist' => $this->spyWishlist,
            'spyProduct' => $this->spyProduct,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_wishlist_item' => $this->idWishlistItem,
            'fk_wishlist' => $this->fkWishlist,
            'product_configuration_instance_data' => $this->productConfigurationInstanceData,
            'sku' => $this->sku,
            'spy_wishlist' => $this->spyWishlist,
            'spy_product' => $this->spyProduct,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_wishlist_item' => $this->idWishlistItem instanceof AbstractTransfer ? $this->idWishlistItem->toArray(true, false) : $this->idWishlistItem,
            'fk_wishlist' => $this->fkWishlist instanceof AbstractTransfer ? $this->fkWishlist->toArray(true, false) : $this->fkWishlist,
            'product_configuration_instance_data' => $this->productConfigurationInstanceData instanceof AbstractTransfer ? $this->productConfigurationInstanceData->toArray(true, false) : $this->productConfigurationInstanceData,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'spy_wishlist' => $this->spyWishlist instanceof AbstractTransfer ? $this->spyWishlist->toArray(true, false) : $this->spyWishlist,
            'spy_product' => $this->spyProduct instanceof AbstractTransfer ? $this->spyProduct->toArray(true, false) : $this->spyProduct,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idWishlistItem' => $this->idWishlistItem instanceof AbstractTransfer ? $this->idWishlistItem->toArray(true, true) : $this->idWishlistItem,
            'fkWishlist' => $this->fkWishlist instanceof AbstractTransfer ? $this->fkWishlist->toArray(true, true) : $this->fkWishlist,
            'productConfigurationInstanceData' => $this->productConfigurationInstanceData instanceof AbstractTransfer ? $this->productConfigurationInstanceData->toArray(true, true) : $this->productConfigurationInstanceData,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'spyWishlist' => $this->spyWishlist instanceof AbstractTransfer ? $this->spyWishlist->toArray(true, true) : $this->spyWishlist,
            'spyProduct' => $this->spyProduct instanceof AbstractTransfer ? $this->spyProduct->toArray(true, true) : $this->spyProduct,
        ];
    }
}
