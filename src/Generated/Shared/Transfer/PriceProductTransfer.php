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
class PriceProductTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MONEY_VALUE = 'moneyValue';

    /**
     * @var string
     */
    public const SKU_PRODUCT = 'skuProduct';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const ID_PRODUCT = 'idProduct';

    /**
     * @var string
     */
    public const SKU_PRODUCT_ABSTRACT = 'skuProductAbstract';

    /**
     * @var string
     */
    public const PRICE_TYPE_NAME = 'priceTypeName';

    /**
     * @var string
     */
    public const PRICE_DIMENSION = 'priceDimension';

    /**
     * @var string
     */
    public const FK_PRICE_TYPE = 'fkPriceType';

    /**
     * @var string
     */
    public const PRICE_TYPE = 'priceType';

    /**
     * @var string
     */
    public const GROUP_KEY = 'groupKey';

    /**
     * @var string
     */
    public const IS_MERGEABLE = 'isMergeable';

    /**
     * @var string
     */
    public const ID_PRICE_PRODUCT = 'idPriceProduct';

    /**
     * @var string
     */
    public const VOLUME_QUANTITY = 'volumeQuantity';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var \Generated\Shared\Transfer\MoneyValueTransfer|null
     */
    protected $moneyValue;

    /**
     * @var string|null
     */
    protected $skuProduct;

    /**
     * @var int|null
     */
    protected $idProductAbstract;

    /**
     * @var int|null
     */
    protected $idProduct;

    /**
     * @var string|null
     */
    protected $skuProductAbstract;

    /**
     * @var string|null
     */
    protected $priceTypeName;

    /**
     * @var \Generated\Shared\Transfer\PriceProductDimensionTransfer|null
     */
    protected $priceDimension;

    /**
     * @var int|null
     */
    protected $fkPriceType;

    /**
     * @var \Generated\Shared\Transfer\PriceTypeTransfer|null
     */
    protected $priceType;

    /**
     * @var string|null
     */
    protected $groupKey;

    /**
     * @var bool|null
     */
    protected $isMergeable;

    /**
     * @var int|null
     */
    protected $idPriceProduct;

    /**
     * @var int|null
     */
    protected $volumeQuantity;

    /**
     * @var string|null
     */
    protected $isActive;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'money_value' => 'moneyValue',
        'moneyValue' => 'moneyValue',
        'MoneyValue' => 'moneyValue',
        'sku_product' => 'skuProduct',
        'skuProduct' => 'skuProduct',
        'SkuProduct' => 'skuProduct',
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'id_product' => 'idProduct',
        'idProduct' => 'idProduct',
        'IdProduct' => 'idProduct',
        'sku_product_abstract' => 'skuProductAbstract',
        'skuProductAbstract' => 'skuProductAbstract',
        'SkuProductAbstract' => 'skuProductAbstract',
        'price_type_name' => 'priceTypeName',
        'priceTypeName' => 'priceTypeName',
        'PriceTypeName' => 'priceTypeName',
        'price_dimension' => 'priceDimension',
        'priceDimension' => 'priceDimension',
        'PriceDimension' => 'priceDimension',
        'fk_price_type' => 'fkPriceType',
        'fkPriceType' => 'fkPriceType',
        'FkPriceType' => 'fkPriceType',
        'price_type' => 'priceType',
        'priceType' => 'priceType',
        'PriceType' => 'priceType',
        'group_key' => 'groupKey',
        'groupKey' => 'groupKey',
        'GroupKey' => 'groupKey',
        'is_mergeable' => 'isMergeable',
        'isMergeable' => 'isMergeable',
        'IsMergeable' => 'isMergeable',
        'id_price_product' => 'idPriceProduct',
        'idPriceProduct' => 'idPriceProduct',
        'IdPriceProduct' => 'idPriceProduct',
        'volume_quantity' => 'volumeQuantity',
        'volumeQuantity' => 'volumeQuantity',
        'VolumeQuantity' => 'volumeQuantity',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::MONEY_VALUE => [
            'type' => 'Generated\Shared\Transfer\MoneyValueTransfer',
            'type_shim' => null,
            'name_underscore' => 'money_value',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU_PRODUCT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU_PRODUCT_ABSTRACT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::PRICE_DIMENSION => [
            'type' => 'Generated\Shared\Transfer\PriceProductDimensionTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_dimension',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRICE_TYPE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_price_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_TYPE => [
            'type' => 'Generated\Shared\Transfer\PriceTypeTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_type',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROUP_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'group_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_MERGEABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_mergeable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRICE_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_price_product',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::IS_ACTIVE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'is_active',
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
     * @module PriceProductVolumeWidget|PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement|ProductPageSearch|ProductPricesRestApi
     *
     * @param \Generated\Shared\Transfer\MoneyValueTransfer|null $moneyValue
     *
     * @return $this
     */
    public function setMoneyValue(MoneyValueTransfer $moneyValue = null)
    {
        $this->moneyValue = $moneyValue;
        $this->modifiedProperties[self::MONEY_VALUE] = true;

        return $this;
    }

    /**
     * @module PriceProductVolumeWidget|PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement|ProductPageSearch|ProductPricesRestApi
     *
     * @return \Generated\Shared\Transfer\MoneyValueTransfer|null
     */
    public function getMoneyValue()
    {
        return $this->moneyValue;
    }

    /**
     * @module PriceProductVolumeWidget|PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement|ProductPageSearch|ProductPricesRestApi
     *
     * @param \Generated\Shared\Transfer\MoneyValueTransfer $moneyValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMoneyValueOrFail(MoneyValueTransfer $moneyValue)
    {
        return $this->setMoneyValue($moneyValue);
    }

    /**
     * @module PriceProductVolumeWidget|PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement|ProductPageSearch|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MoneyValueTransfer
     */
    public function getMoneyValueOrFail()
    {
        if ($this->moneyValue === null) {
            $this->throwNullValueException(static::MONEY_VALUE);
        }

        return $this->moneyValue;
    }

    /**
     * @module PriceProductVolumeWidget|PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductConfigurationStorage|ProductConfigurationWishlistsRestApi|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement|ProductPageSearch|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMoneyValue()
    {
        $this->assertPropertyIsSet(self::MONEY_VALUE);

        return $this;
    }

    /**
     * @module PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductVolume|PriceProduct|ProductConfigurationCart|ProductConfiguration|ProductManagement
     *
     * @param string|null $skuProduct
     *
     * @return $this
     */
    public function setSkuProduct($skuProduct)
    {
        $this->skuProduct = $skuProduct;
        $this->modifiedProperties[self::SKU_PRODUCT] = true;

        return $this;
    }

    /**
     * @module PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductVolume|PriceProduct|ProductConfigurationCart|ProductConfiguration|ProductManagement
     *
     * @return string|null
     */
    public function getSkuProduct()
    {
        return $this->skuProduct;
    }

    /**
     * @module PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductVolume|PriceProduct|ProductConfigurationCart|ProductConfiguration|ProductManagement
     *
     * @param string|null $skuProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuProductOrFail($skuProduct)
    {
        if ($skuProduct === null) {
            $this->throwNullValueException(static::SKU_PRODUCT);
        }

        return $this->setSkuProduct($skuProduct);
    }

    /**
     * @module PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductVolume|PriceProduct|ProductConfigurationCart|ProductConfiguration|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuProductOrFail()
    {
        if ($this->skuProduct === null) {
            $this->throwNullValueException(static::SKU_PRODUCT);
        }

        return $this->skuProduct;
    }

    /**
     * @module PriceCartConnector|PriceProductScheduleGui|PriceProductSchedule|PriceProductVolume|PriceProduct|ProductConfigurationCart|ProductConfiguration|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSkuProduct()
    {
        $this->assertPropertyIsSet(self::SKU_PRODUCT);

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductManagement|ProductPageSearch
     *
     * @param int|null $idProductAbstract
     *
     * @return $this
     */
    public function setIdProductAbstract($idProductAbstract)
    {
        $this->idProductAbstract = $idProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductManagement|ProductPageSearch
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductManagement|ProductPageSearch
     *
     * @param int|null $idProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAbstractOrFail($idProductAbstract)
    {
        if ($idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->setIdProductAbstract($idProductAbstract);
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductManagement|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAbstractOrFail()
    {
        if ($this->idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->idProductAbstract;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductManagement|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstract()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductVolumeGui|PriceProduct|ProductManagement
     *
     * @param int|null $idProduct
     *
     * @return $this
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
        $this->modifiedProperties[self::ID_PRODUCT] = true;

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductVolumeGui|PriceProduct|ProductManagement
     *
     * @return int|null
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductVolumeGui|PriceProduct|ProductManagement
     *
     * @param int|null $idProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductOrFail($idProduct)
    {
        if ($idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->setIdProduct($idProduct);
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductVolumeGui|PriceProduct|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductOrFail()
    {
        if ($this->idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->idProduct;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductVolumeGui|PriceProduct|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProduct()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT);

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProduct|ProductManagement
     *
     * @param string|null $skuProductAbstract
     *
     * @return $this
     */
    public function setSkuProductAbstract($skuProductAbstract)
    {
        $this->skuProductAbstract = $skuProductAbstract;
        $this->modifiedProperties[self::SKU_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProduct|ProductManagement
     *
     * @return string|null
     */
    public function getSkuProductAbstract()
    {
        return $this->skuProductAbstract;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProduct|ProductManagement
     *
     * @param string|null $skuProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuProductAbstractOrFail($skuProductAbstract)
    {
        if ($skuProductAbstract === null) {
            $this->throwNullValueException(static::SKU_PRODUCT_ABSTRACT);
        }

        return $this->setSkuProductAbstract($skuProductAbstract);
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProduct|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuProductAbstractOrFail()
    {
        if ($this->skuProductAbstract === null) {
            $this->throwNullValueException(static::SKU_PRODUCT_ABSTRACT);
        }

        return $this->skuProductAbstract;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProduct|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSkuProductAbstract()
    {
        $this->assertPropertyIsSet(self::SKU_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement
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
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement
     *
     * @return string|null
     */
    public function getPriceTypeName()
    {
        return $this->priceTypeName;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement
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
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement
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
     * @module PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolume|PriceProductVolumesRestApi|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement
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
     * @module PriceProductSchedule|PriceProductStorage|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement
     *
     * @param \Generated\Shared\Transfer\PriceProductDimensionTransfer|null $priceDimension
     *
     * @return $this
     */
    public function setPriceDimension(PriceProductDimensionTransfer $priceDimension = null)
    {
        $this->priceDimension = $priceDimension;
        $this->modifiedProperties[self::PRICE_DIMENSION] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule|PriceProductStorage|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement
     *
     * @return \Generated\Shared\Transfer\PriceProductDimensionTransfer|null
     */
    public function getPriceDimension()
    {
        return $this->priceDimension;
    }

    /**
     * @module PriceProductSchedule|PriceProductStorage|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement
     *
     * @param \Generated\Shared\Transfer\PriceProductDimensionTransfer $priceDimension
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceDimensionOrFail(PriceProductDimensionTransfer $priceDimension)
    {
        return $this->setPriceDimension($priceDimension);
    }

    /**
     * @module PriceProductSchedule|PriceProductStorage|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PriceProductDimensionTransfer
     */
    public function getPriceDimensionOrFail()
    {
        if ($this->priceDimension === null) {
            $this->throwNullValueException(static::PRICE_DIMENSION);
        }

        return $this->priceDimension;
    }

    /**
     * @module PriceProductSchedule|PriceProductStorage|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceDimension()
    {
        $this->assertPropertyIsSet(self::PRICE_DIMENSION);

        return $this;
    }

    /**
     * @module PriceProductSchedule|PriceProduct|ProductManagement
     *
     * @param int|null $fkPriceType
     *
     * @return $this
     */
    public function setFkPriceType($fkPriceType)
    {
        $this->fkPriceType = $fkPriceType;
        $this->modifiedProperties[self::FK_PRICE_TYPE] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule|PriceProduct|ProductManagement
     *
     * @return int|null
     */
    public function getFkPriceType()
    {
        return $this->fkPriceType;
    }

    /**
     * @module PriceProductSchedule|PriceProduct|ProductManagement
     *
     * @param int|null $fkPriceType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPriceTypeOrFail($fkPriceType)
    {
        if ($fkPriceType === null) {
            $this->throwNullValueException(static::FK_PRICE_TYPE);
        }

        return $this->setFkPriceType($fkPriceType);
    }

    /**
     * @module PriceProductSchedule|PriceProduct|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkPriceTypeOrFail()
    {
        if ($this->fkPriceType === null) {
            $this->throwNullValueException(static::FK_PRICE_TYPE);
        }

        return $this->fkPriceType;
    }

    /**
     * @module PriceProductSchedule|PriceProduct|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPriceType()
    {
        $this->assertPropertyIsSet(self::FK_PRICE_TYPE);

        return $this;
    }

    /**
     * @module PriceProductSchedule|PriceProductVolume|PriceProduct|ProductManagement|ProductPricesRestApi
     *
     * @param \Generated\Shared\Transfer\PriceTypeTransfer|null $priceType
     *
     * @return $this
     */
    public function setPriceType(PriceTypeTransfer $priceType = null)
    {
        $this->priceType = $priceType;
        $this->modifiedProperties[self::PRICE_TYPE] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule|PriceProductVolume|PriceProduct|ProductManagement|ProductPricesRestApi
     *
     * @return \Generated\Shared\Transfer\PriceTypeTransfer|null
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * @module PriceProductSchedule|PriceProductVolume|PriceProduct|ProductManagement|ProductPricesRestApi
     *
     * @param \Generated\Shared\Transfer\PriceTypeTransfer $priceType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceTypeOrFail(PriceTypeTransfer $priceType)
    {
        return $this->setPriceType($priceType);
    }

    /**
     * @module PriceProductSchedule|PriceProductVolume|PriceProduct|ProductManagement|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PriceTypeTransfer
     */
    public function getPriceTypeOrFail()
    {
        if ($this->priceType === null) {
            $this->throwNullValueException(static::PRICE_TYPE);
        }

        return $this->priceType;
    }

    /**
     * @module PriceProductSchedule|PriceProductVolume|PriceProduct|ProductManagement|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceType()
    {
        $this->assertPropertyIsSet(self::PRICE_TYPE);

        return $this;
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param string|null $groupKey
     *
     * @return $this
     */
    public function setGroupKey($groupKey)
    {
        $this->groupKey = $groupKey;
        $this->modifiedProperties[self::GROUP_KEY] = true;

        return $this;
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @return string|null
     */
    public function getGroupKey()
    {
        return $this->groupKey;
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param string|null $groupKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupKeyOrFail($groupKey)
    {
        if ($groupKey === null) {
            $this->throwNullValueException(static::GROUP_KEY);
        }

        return $this->setGroupKey($groupKey);
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGroupKeyOrFail()
    {
        if ($this->groupKey === null) {
            $this->throwNullValueException(static::GROUP_KEY);
        }

        return $this->groupKey;
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupKey()
    {
        $this->assertPropertyIsSet(self::GROUP_KEY);

        return $this;
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param bool|null $isMergeable
     *
     * @return $this
     */
    public function setIsMergeable($isMergeable)
    {
        $this->isMergeable = $isMergeable;
        $this->modifiedProperties[self::IS_MERGEABLE] = true;

        return $this;
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @return bool|null
     */
    public function getIsMergeable()
    {
        return $this->isMergeable;
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @param bool|null $isMergeable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsMergeableOrFail($isMergeable)
    {
        if ($isMergeable === null) {
            $this->throwNullValueException(static::IS_MERGEABLE);
        }

        return $this->setIsMergeable($isMergeable);
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsMergeableOrFail()
    {
        if ($this->isMergeable === null) {
            $this->throwNullValueException(static::IS_MERGEABLE);
        }

        return $this->isMergeable;
    }

    /**
     * @module PriceProductStorage|PriceProductVolume|PriceProduct|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsMergeable()
    {
        $this->assertPropertyIsSet(self::IS_MERGEABLE);

        return $this;
    }

    /**
     * @module PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement
     *
     * @param int|null $idPriceProduct
     *
     * @return $this
     */
    public function setIdPriceProduct($idPriceProduct)
    {
        $this->idPriceProduct = $idPriceProduct;
        $this->modifiedProperties[self::ID_PRICE_PRODUCT] = true;

        return $this;
    }

    /**
     * @module PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement
     *
     * @return int|null
     */
    public function getIdPriceProduct()
    {
        return $this->idPriceProduct;
    }

    /**
     * @module PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement
     *
     * @param int|null $idPriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPriceProductOrFail($idPriceProduct)
    {
        if ($idPriceProduct === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT);
        }

        return $this->setIdPriceProduct($idPriceProduct);
    }

    /**
     * @module PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPriceProductOrFail()
    {
        if ($this->idPriceProduct === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT);
        }

        return $this->idPriceProduct;
    }

    /**
     * @module PriceProductVolumeGui|PriceProductVolume|PriceProduct|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPriceProduct()
    {
        $this->assertPropertyIsSet(self::ID_PRICE_PRODUCT);

        return $this;
    }

    /**
     * @module PriceProductVolume|PriceProductVolumesRestApi|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi
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
     * @module PriceProductVolume|PriceProductVolumesRestApi|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi
     *
     * @return int|null
     */
    public function getVolumeQuantity()
    {
        return $this->volumeQuantity;
    }

    /**
     * @module PriceProductVolume|PriceProductVolumesRestApi|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi
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
     * @module PriceProductVolume|PriceProductVolumesRestApi|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi
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
     * @module PriceProductVolume|PriceProductVolumesRestApi|ProductConfigurationStorage|ProductConfiguration|ProductConfigurationsPriceProductVolumesRestApi
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
     * @module PriceProduct
     *
     * @param string|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module PriceProduct
     *
     * @return string|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module PriceProduct
     *
     * @param string|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

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
                case 'skuProduct':
                case 'idProductAbstract':
                case 'idProduct':
                case 'skuProductAbstract':
                case 'priceTypeName':
                case 'fkPriceType':
                case 'groupKey':
                case 'isMergeable':
                case 'idPriceProduct':
                case 'volumeQuantity':
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'moneyValue':
                case 'priceDimension':
                case 'priceType':
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
                case 'skuProduct':
                case 'idProductAbstract':
                case 'idProduct':
                case 'skuProductAbstract':
                case 'priceTypeName':
                case 'fkPriceType':
                case 'groupKey':
                case 'isMergeable':
                case 'idPriceProduct':
                case 'volumeQuantity':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'moneyValue':
                case 'priceDimension':
                case 'priceType':
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
                case 'skuProduct':
                case 'idProductAbstract':
                case 'idProduct':
                case 'skuProductAbstract':
                case 'priceTypeName':
                case 'fkPriceType':
                case 'groupKey':
                case 'isMergeable':
                case 'idPriceProduct':
                case 'volumeQuantity':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'moneyValue':
                case 'priceDimension':
                case 'priceType':
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
            'skuProduct' => $this->skuProduct,
            'idProductAbstract' => $this->idProductAbstract,
            'idProduct' => $this->idProduct,
            'skuProductAbstract' => $this->skuProductAbstract,
            'priceTypeName' => $this->priceTypeName,
            'fkPriceType' => $this->fkPriceType,
            'groupKey' => $this->groupKey,
            'isMergeable' => $this->isMergeable,
            'idPriceProduct' => $this->idPriceProduct,
            'volumeQuantity' => $this->volumeQuantity,
            'isActive' => $this->isActive,
            'moneyValue' => $this->moneyValue,
            'priceDimension' => $this->priceDimension,
            'priceType' => $this->priceType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku_product' => $this->skuProduct,
            'id_product_abstract' => $this->idProductAbstract,
            'id_product' => $this->idProduct,
            'sku_product_abstract' => $this->skuProductAbstract,
            'price_type_name' => $this->priceTypeName,
            'fk_price_type' => $this->fkPriceType,
            'group_key' => $this->groupKey,
            'is_mergeable' => $this->isMergeable,
            'id_price_product' => $this->idPriceProduct,
            'volume_quantity' => $this->volumeQuantity,
            'is_active' => $this->isActive,
            'money_value' => $this->moneyValue,
            'price_dimension' => $this->priceDimension,
            'price_type' => $this->priceType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku_product' => $this->skuProduct instanceof AbstractTransfer ? $this->skuProduct->toArray(true, false) : $this->skuProduct,
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'id_product' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, false) : $this->idProduct,
            'sku_product_abstract' => $this->skuProductAbstract instanceof AbstractTransfer ? $this->skuProductAbstract->toArray(true, false) : $this->skuProductAbstract,
            'price_type_name' => $this->priceTypeName instanceof AbstractTransfer ? $this->priceTypeName->toArray(true, false) : $this->priceTypeName,
            'fk_price_type' => $this->fkPriceType instanceof AbstractTransfer ? $this->fkPriceType->toArray(true, false) : $this->fkPriceType,
            'group_key' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, false) : $this->groupKey,
            'is_mergeable' => $this->isMergeable instanceof AbstractTransfer ? $this->isMergeable->toArray(true, false) : $this->isMergeable,
            'id_price_product' => $this->idPriceProduct instanceof AbstractTransfer ? $this->idPriceProduct->toArray(true, false) : $this->idPriceProduct,
            'volume_quantity' => $this->volumeQuantity instanceof AbstractTransfer ? $this->volumeQuantity->toArray(true, false) : $this->volumeQuantity,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'money_value' => $this->moneyValue instanceof AbstractTransfer ? $this->moneyValue->toArray(true, false) : $this->moneyValue,
            'price_dimension' => $this->priceDimension instanceof AbstractTransfer ? $this->priceDimension->toArray(true, false) : $this->priceDimension,
            'price_type' => $this->priceType instanceof AbstractTransfer ? $this->priceType->toArray(true, false) : $this->priceType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'skuProduct' => $this->skuProduct instanceof AbstractTransfer ? $this->skuProduct->toArray(true, true) : $this->skuProduct,
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'idProduct' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, true) : $this->idProduct,
            'skuProductAbstract' => $this->skuProductAbstract instanceof AbstractTransfer ? $this->skuProductAbstract->toArray(true, true) : $this->skuProductAbstract,
            'priceTypeName' => $this->priceTypeName instanceof AbstractTransfer ? $this->priceTypeName->toArray(true, true) : $this->priceTypeName,
            'fkPriceType' => $this->fkPriceType instanceof AbstractTransfer ? $this->fkPriceType->toArray(true, true) : $this->fkPriceType,
            'groupKey' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, true) : $this->groupKey,
            'isMergeable' => $this->isMergeable instanceof AbstractTransfer ? $this->isMergeable->toArray(true, true) : $this->isMergeable,
            'idPriceProduct' => $this->idPriceProduct instanceof AbstractTransfer ? $this->idPriceProduct->toArray(true, true) : $this->idPriceProduct,
            'volumeQuantity' => $this->volumeQuantity instanceof AbstractTransfer ? $this->volumeQuantity->toArray(true, true) : $this->volumeQuantity,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'moneyValue' => $this->moneyValue instanceof AbstractTransfer ? $this->moneyValue->toArray(true, true) : $this->moneyValue,
            'priceDimension' => $this->priceDimension instanceof AbstractTransfer ? $this->priceDimension->toArray(true, true) : $this->priceDimension,
            'priceType' => $this->priceType instanceof AbstractTransfer ? $this->priceType->toArray(true, true) : $this->priceType,
        ];
    }
}
