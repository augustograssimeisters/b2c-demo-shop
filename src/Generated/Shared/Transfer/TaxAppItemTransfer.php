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
class TaxAppItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID = 'id';

    /**
     * @var string
     */
    public const PRICE_AMOUNT = 'priceAmount';

    /**
     * @var string
     */
    public const REFUNDABLE_AMOUNT = 'refundableAmount';

    /**
     * @var string
     */
    public const DISCOUNT_AMOUNT = 'discountAmount';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const TAX_TOTAL = 'taxTotal';

    /**
     * @var string
     */
    public const REFUNDED_TAX_TOTAL = 'refundedTaxTotal';

    /**
     * @var string
     */
    public const SHIPPING_ADDRESS = 'shippingAddress';

    /**
     * @var string
     */
    public const BILLING_ADDRESS = 'billingAddress';

    /**
     * @var string
     */
    public const SELLER_ADDRESS = 'sellerAddress';

    /**
     * @var string
     */
    public const SHIPPING_WAREHOUSES = 'shippingWarehouses';

    /**
     * @var string
     */
    public const TAX_METADATA = 'taxMetadata';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $priceAmount;

    /**
     * @var int|null
     */
    protected $refundableAmount;

    /**
     * @var int|null
     */
    protected $discountAmount;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var int|null
     */
    protected $taxTotal;

    /**
     * @var int|null
     */
    protected $refundedTaxTotal;

    /**
     * @var \Generated\Shared\Transfer\TaxAppAddressTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var \Generated\Shared\Transfer\TaxAppAddressTransfer|null
     */
    protected $billingAddress;

    /**
     * @var \Generated\Shared\Transfer\TaxAppAddressTransfer|null
     */
    protected $sellerAddress;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ShippingWarehouseTransfer>
     */
    protected $shippingWarehouses;

    /**
     * @var array
     */
    protected $taxMetadata = [];

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id' => 'id',
        'Id' => 'id',
        'price_amount' => 'priceAmount',
        'priceAmount' => 'priceAmount',
        'PriceAmount' => 'priceAmount',
        'refundable_amount' => 'refundableAmount',
        'refundableAmount' => 'refundableAmount',
        'RefundableAmount' => 'refundableAmount',
        'discount_amount' => 'discountAmount',
        'discountAmount' => 'discountAmount',
        'DiscountAmount' => 'discountAmount',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'tax_total' => 'taxTotal',
        'taxTotal' => 'taxTotal',
        'TaxTotal' => 'taxTotal',
        'refunded_tax_total' => 'refundedTaxTotal',
        'refundedTaxTotal' => 'refundedTaxTotal',
        'RefundedTaxTotal' => 'refundedTaxTotal',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'billing_address' => 'billingAddress',
        'billingAddress' => 'billingAddress',
        'BillingAddress' => 'billingAddress',
        'seller_address' => 'sellerAddress',
        'sellerAddress' => 'sellerAddress',
        'SellerAddress' => 'sellerAddress',
        'shipping_warehouses' => 'shippingWarehouses',
        'shippingWarehouses' => 'shippingWarehouses',
        'ShippingWarehouses' => 'shippingWarehouses',
        'tax_metadata' => 'taxMetadata',
        'taxMetadata' => 'taxMetadata',
        'TaxMetadata' => 'taxMetadata',
        'sku' => 'sku',
        'Sku' => 'sku',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
            'is_strict' => true,
        ],
        self::PRICE_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'price_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::REFUNDABLE_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'refundable_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::DISCOUNT_AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'discount_amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
            'is_strict' => true,
        ],
        self::TAX_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'tax_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::REFUNDED_TAX_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'refunded_tax_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SHIPPING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\TaxAppAddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipping_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::BILLING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\TaxAppAddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'billing_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SELLER_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\TaxAppAddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'seller_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SHIPPING_WAREHOUSES => [
            'type' => 'Generated\Shared\Transfer\ShippingWarehouseTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipping_warehouses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::TAX_METADATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'tax_metadata',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => true,
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
            'is_strict' => true,
        ],
    ];

    /**
     * @module TaxApp
     *
     * @param string|null $id
     *
     * @return $this
     */
    public function setId(?string $id = null)
    {
        $this->id = $id;
        $this->modifiedProperties[self::ID] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @module TaxApp
     *
     * @param string $id
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOrFail(string $id)
    {
        return $this->setId($id);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdOrFail(): string
    {
        if ($this->id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->id;
    }

    /**
     * @module TaxApp
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
     * @module TaxApp
     *
     * @param int|null $priceAmount
     *
     * @return $this
     */
    public function setPriceAmount(?int $priceAmount = null)
    {
        $this->priceAmount = $priceAmount;
        $this->modifiedProperties[self::PRICE_AMOUNT] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return int|null
     */
    public function getPriceAmount(): ?int
    {
        return $this->priceAmount;
    }

    /**
     * @module TaxApp
     *
     * @param int $priceAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceAmountOrFail(int $priceAmount)
    {
        return $this->setPriceAmount($priceAmount);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPriceAmountOrFail(): int
    {
        if ($this->priceAmount === null) {
            $this->throwNullValueException(static::PRICE_AMOUNT);
        }

        return $this->priceAmount;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceAmount()
    {
        $this->assertPropertyIsSet(self::PRICE_AMOUNT);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param int|null $refundableAmount
     *
     * @return $this
     */
    public function setRefundableAmount(?int $refundableAmount = null)
    {
        $this->refundableAmount = $refundableAmount;
        $this->modifiedProperties[self::REFUNDABLE_AMOUNT] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return int|null
     */
    public function getRefundableAmount(): ?int
    {
        return $this->refundableAmount;
    }

    /**
     * @module TaxApp
     *
     * @param int $refundableAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefundableAmountOrFail(int $refundableAmount)
    {
        return $this->setRefundableAmount($refundableAmount);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRefundableAmountOrFail(): int
    {
        if ($this->refundableAmount === null) {
            $this->throwNullValueException(static::REFUNDABLE_AMOUNT);
        }

        return $this->refundableAmount;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRefundableAmount()
    {
        $this->assertPropertyIsSet(self::REFUNDABLE_AMOUNT);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param int|null $discountAmount
     *
     * @return $this
     */
    public function setDiscountAmount(?int $discountAmount = null)
    {
        $this->discountAmount = $discountAmount;
        $this->modifiedProperties[self::DISCOUNT_AMOUNT] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return int|null
     */
    public function getDiscountAmount(): ?int
    {
        return $this->discountAmount;
    }

    /**
     * @module TaxApp
     *
     * @param int $discountAmount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDiscountAmountOrFail(int $discountAmount)
    {
        return $this->setDiscountAmount($discountAmount);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDiscountAmountOrFail(): int
    {
        if ($this->discountAmount === null) {
            $this->throwNullValueException(static::DISCOUNT_AMOUNT);
        }

        return $this->discountAmount;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDiscountAmount()
    {
        $this->assertPropertyIsSet(self::DISCOUNT_AMOUNT);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity(?int $quantity = null)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @module TaxApp
     *
     * @param int $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail(int $quantity)
    {
        return $this->setQuantity($quantity);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail(): int
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module TaxApp
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
     * @module TaxApp
     *
     * @param int|null $taxTotal
     *
     * @return $this
     */
    public function setTaxTotal(?int $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        $this->modifiedProperties[self::TAX_TOTAL] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return int|null
     */
    public function getTaxTotal(): ?int
    {
        return $this->taxTotal;
    }

    /**
     * @module TaxApp
     *
     * @param int $taxTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxTotalOrFail(int $taxTotal)
    {
        return $this->setTaxTotal($taxTotal);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTaxTotalOrFail(): int
    {
        if ($this->taxTotal === null) {
            $this->throwNullValueException(static::TAX_TOTAL);
        }

        return $this->taxTotal;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxTotal()
    {
        $this->assertPropertyIsSet(self::TAX_TOTAL);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param int|null $refundedTaxTotal
     *
     * @return $this
     */
    public function setRefundedTaxTotal(?int $refundedTaxTotal = null)
    {
        $this->refundedTaxTotal = $refundedTaxTotal;
        $this->modifiedProperties[self::REFUNDED_TAX_TOTAL] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return int|null
     */
    public function getRefundedTaxTotal(): ?int
    {
        return $this->refundedTaxTotal;
    }

    /**
     * @module TaxApp
     *
     * @param int $refundedTaxTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefundedTaxTotalOrFail(int $refundedTaxTotal)
    {
        return $this->setRefundedTaxTotal($refundedTaxTotal);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRefundedTaxTotalOrFail(): int
    {
        if ($this->refundedTaxTotal === null) {
            $this->throwNullValueException(static::REFUNDED_TAX_TOTAL);
        }

        return $this->refundedTaxTotal;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRefundedTaxTotal()
    {
        $this->assertPropertyIsSet(self::REFUNDED_TAX_TOTAL);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppAddressTransfer|null $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(?TaxAppAddressTransfer $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \Generated\Shared\Transfer\TaxAppAddressTransfer|null
     */
    public function getShippingAddress(): ?TaxAppAddressTransfer
    {
        return $this->shippingAddress;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppAddressTransfer $shippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShippingAddressOrFail(TaxAppAddressTransfer $shippingAddress)
    {
        return $this->setShippingAddress($shippingAddress);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TaxAppAddressTransfer
     */
    public function getShippingAddressOrFail(): TaxAppAddressTransfer
    {
        if ($this->shippingAddress === null) {
            $this->throwNullValueException(static::SHIPPING_ADDRESS);
        }

        return $this->shippingAddress;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShippingAddress()
    {
        $this->assertPropertyIsSet(self::SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppAddressTransfer|null $billingAddress
     *
     * @return $this
     */
    public function setBillingAddress(?TaxAppAddressTransfer $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \Generated\Shared\Transfer\TaxAppAddressTransfer|null
     */
    public function getBillingAddress(): ?TaxAppAddressTransfer
    {
        return $this->billingAddress;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppAddressTransfer $billingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBillingAddressOrFail(TaxAppAddressTransfer $billingAddress)
    {
        return $this->setBillingAddress($billingAddress);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TaxAppAddressTransfer
     */
    public function getBillingAddressOrFail(): TaxAppAddressTransfer
    {
        if ($this->billingAddress === null) {
            $this->throwNullValueException(static::BILLING_ADDRESS);
        }

        return $this->billingAddress;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBillingAddress()
    {
        $this->assertPropertyIsSet(self::BILLING_ADDRESS);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppAddressTransfer|null $sellerAddress
     *
     * @return $this
     */
    public function setSellerAddress(?TaxAppAddressTransfer $sellerAddress = null)
    {
        $this->sellerAddress = $sellerAddress;
        $this->modifiedProperties[self::SELLER_ADDRESS] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \Generated\Shared\Transfer\TaxAppAddressTransfer|null
     */
    public function getSellerAddress(): ?TaxAppAddressTransfer
    {
        return $this->sellerAddress;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppAddressTransfer $sellerAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSellerAddressOrFail(TaxAppAddressTransfer $sellerAddress)
    {
        return $this->setSellerAddress($sellerAddress);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TaxAppAddressTransfer
     */
    public function getSellerAddressOrFail(): TaxAppAddressTransfer
    {
        if ($this->sellerAddress === null) {
            $this->throwNullValueException(static::SELLER_ADDRESS);
        }

        return $this->sellerAddress;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSellerAddress()
    {
        $this->assertPropertyIsSet(self::SELLER_ADDRESS);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ShippingWarehouseTransfer> $shippingWarehouses
     *
     * @return $this
     */
    public function setShippingWarehouses(ArrayObject $shippingWarehouses)
    {
        $this->shippingWarehouses = new ArrayObject();

        foreach ($shippingWarehouses as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SHIPPING_WAREHOUSES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addShippingWarehouse(...$args);
        }

        $this->modifiedProperties[self::SHIPPING_WAREHOUSES] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ShippingWarehouseTransfer>
     */
    public function getShippingWarehouses(): ArrayObject
    {
        return $this->shippingWarehouses;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\ShippingWarehouseTransfer $shippingWarehouse
     *
     * @return $this
     */
    public function addShippingWarehouse(ShippingWarehouseTransfer $shippingWarehouse)
    {
        $this->shippingWarehouses[] = $shippingWarehouse;
        $this->modifiedProperties[self::SHIPPING_WAREHOUSES] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShippingWarehouses()
    {
        $this->assertCollectionPropertyIsSet(self::SHIPPING_WAREHOUSES);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param array|null $taxMetadata
     *
     * @return $this
     */
    public function setTaxMetadata(array $taxMetadata = null)
    {
        if ($taxMetadata === null) {
            $taxMetadata = [];
        }

        $this->taxMetadata = $taxMetadata;
        $this->modifiedProperties[self::TAX_METADATA] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return array
     */
    public function getTaxMetadata(): array
    {
        return $this->taxMetadata;
    }

    /**
     * @module TaxApp
     *
     * @param string|int $taxMetadataEntryKey
     * @param mixed $taxMetadataEntryValue
     *
     * @return $this
     */
    public function addTaxMetadataEntry($taxMetadataEntryKey, $taxMetadataEntryValue)
    {
        $this->taxMetadata[$taxMetadataEntryKey] = $taxMetadataEntryValue;
        $this->modifiedProperties[self::TAX_METADATA] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxMetadata()
    {
        $this->assertPropertyIsSet(self::TAX_METADATA);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|int $key
     *
     * @return mixed
     */
    public function getTaxMetadataEntry($key)
    {
        return $this->taxMetadata[$key];
    }


    /**
     * @module TaxApp
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku(?string $sku = null)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * @module TaxApp
     *
     * @param string $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail(string $sku)
    {
        return $this->setSku($sku);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail(): string
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module TaxApp
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
                case 'priceAmount':
                case 'refundableAmount':
                case 'discountAmount':
                case 'quantity':
                case 'taxTotal':
                case 'refundedTaxTotal':
                case 'taxMetadata':
                case 'sku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shippingAddress':
                case 'billingAddress':
                case 'sellerAddress':
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
                case 'shippingWarehouses':
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
                case 'priceAmount':
                case 'refundableAmount':
                case 'discountAmount':
                case 'quantity':
                case 'taxTotal':
                case 'refundedTaxTotal':
                case 'taxMetadata':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'shippingAddress':
                case 'billingAddress':
                case 'sellerAddress':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'shippingWarehouses':
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
                case 'priceAmount':
                case 'refundableAmount':
                case 'discountAmount':
                case 'quantity':
                case 'taxTotal':
                case 'refundedTaxTotal':
                case 'taxMetadata':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'shippingAddress':
                case 'billingAddress':
                case 'sellerAddress':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'shippingWarehouses':
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
        $this->shippingWarehouses = $this->shippingWarehouses ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'id' => $this->id,
            'priceAmount' => $this->priceAmount,
            'refundableAmount' => $this->refundableAmount,
            'discountAmount' => $this->discountAmount,
            'quantity' => $this->quantity,
            'taxTotal' => $this->taxTotal,
            'refundedTaxTotal' => $this->refundedTaxTotal,
            'taxMetadata' => $this->taxMetadata,
            'sku' => $this->sku,
            'shippingAddress' => $this->shippingAddress,
            'billingAddress' => $this->billingAddress,
            'sellerAddress' => $this->sellerAddress,
            'shippingWarehouses' => $this->shippingWarehouses,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id' => $this->id,
            'price_amount' => $this->priceAmount,
            'refundable_amount' => $this->refundableAmount,
            'discount_amount' => $this->discountAmount,
            'quantity' => $this->quantity,
            'tax_total' => $this->taxTotal,
            'refunded_tax_total' => $this->refundedTaxTotal,
            'tax_metadata' => $this->taxMetadata,
            'sku' => $this->sku,
            'shipping_address' => $this->shippingAddress,
            'billing_address' => $this->billingAddress,
            'seller_address' => $this->sellerAddress,
            'shipping_warehouses' => $this->shippingWarehouses,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, false) : $this->id,
            'price_amount' => $this->priceAmount instanceof AbstractTransfer ? $this->priceAmount->toArray(true, false) : $this->priceAmount,
            'refundable_amount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, false) : $this->refundableAmount,
            'discount_amount' => $this->discountAmount instanceof AbstractTransfer ? $this->discountAmount->toArray(true, false) : $this->discountAmount,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'tax_total' => $this->taxTotal instanceof AbstractTransfer ? $this->taxTotal->toArray(true, false) : $this->taxTotal,
            'refunded_tax_total' => $this->refundedTaxTotal instanceof AbstractTransfer ? $this->refundedTaxTotal->toArray(true, false) : $this->refundedTaxTotal,
            'tax_metadata' => $this->taxMetadata instanceof AbstractTransfer ? $this->taxMetadata->toArray(true, false) : $this->taxMetadata,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
            'billing_address' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, false) : $this->billingAddress,
            'seller_address' => $this->sellerAddress instanceof AbstractTransfer ? $this->sellerAddress->toArray(true, false) : $this->sellerAddress,
            'shipping_warehouses' => $this->shippingWarehouses instanceof AbstractTransfer ? $this->shippingWarehouses->toArray(true, false) : $this->addValuesToCollection($this->shippingWarehouses, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, true) : $this->id,
            'priceAmount' => $this->priceAmount instanceof AbstractTransfer ? $this->priceAmount->toArray(true, true) : $this->priceAmount,
            'refundableAmount' => $this->refundableAmount instanceof AbstractTransfer ? $this->refundableAmount->toArray(true, true) : $this->refundableAmount,
            'discountAmount' => $this->discountAmount instanceof AbstractTransfer ? $this->discountAmount->toArray(true, true) : $this->discountAmount,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'taxTotal' => $this->taxTotal instanceof AbstractTransfer ? $this->taxTotal->toArray(true, true) : $this->taxTotal,
            'refundedTaxTotal' => $this->refundedTaxTotal instanceof AbstractTransfer ? $this->refundedTaxTotal->toArray(true, true) : $this->refundedTaxTotal,
            'taxMetadata' => $this->taxMetadata instanceof AbstractTransfer ? $this->taxMetadata->toArray(true, true) : $this->taxMetadata,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
            'billingAddress' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, true) : $this->billingAddress,
            'sellerAddress' => $this->sellerAddress instanceof AbstractTransfer ? $this->sellerAddress->toArray(true, true) : $this->sellerAddress,
            'shippingWarehouses' => $this->shippingWarehouses instanceof AbstractTransfer ? $this->shippingWarehouses->toArray(true, true) : $this->addValuesToCollection($this->shippingWarehouses, true, true),
        ];
    }
}
