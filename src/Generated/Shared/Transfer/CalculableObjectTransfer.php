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
class CalculableObjectTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TOTALS = 'totals';

    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string
     */
    public const EXPENSES = 'expenses';

    /**
     * @var string
     */
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var string
     */
    public const VOUCHER_DISCOUNTS = 'voucherDiscounts';

    /**
     * @var string
     */
    public const CART_RULE_DISCOUNTS = 'cartRuleDiscounts';

    /**
     * @var string
     */
    public const ORIGINAL_ORDER = 'originalOrder';

    /**
     * @var string
     */
    public const ORIGINAL_QUOTE = 'originalQuote';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const PROMOTION_ITEMS = 'promotionItems';

    /**
     * @var string
     */
    public const USED_NOT_APPLIED_VOUCHER_CODES = 'usedNotAppliedVoucherCodes';

    /**
     * @var string
     */
    public const GIFT_CARDS = 'giftCards';

    /**
     * @var string
     */
    public const NOT_APPLICABLE_GIFT_CARD_CODES = 'notApplicableGiftCardCodes';

    /**
     * @var string
     */
    public const PAYMENTS = 'payments';

    /**
     * @var string
     */
    public const PAYMENT = 'payment';

    /**
     * @var string
     */
    public const BUNDLE_ITEMS = 'bundleItems';

    /**
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     */
    public const SHIPPING_ADDRESS = 'shippingAddress';

    /**
     * @deprecated Use item level shipment details (item.shipment) instead.
     */
    public const SHIPMENT = 'shipment';

    /**
     * @var string
     */
    public const TAX_METADATA = 'taxMetadata';

    /**
     * @var string
     */
    public const TAX_APP_SALE_HASH = 'taxAppSaleHash';

    /**
     * @var string
     */
    public const TAX_CALCULATION_RESPONSE = 'taxCalculationResponse';

    /**
     * @var \Generated\Shared\Transfer\TotalsTransfer|null
     */
    protected $totals;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ItemTransfer>
     */
    protected $items;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ExpenseTransfer>
     */
    protected $expenses;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DiscountTransfer>
     */
    protected $voucherDiscounts;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DiscountTransfer>
     */
    protected $cartRuleDiscounts;

    /**
     * @var \Generated\Shared\Transfer\OrderTransfer|null
     */
    protected $originalOrder;

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $originalQuote;

    /**
     * @var \Generated\Shared\Transfer\StoreTransfer|null
     */
    protected $store;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    protected $currency;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\PromotionItemTransfer>
     */
    protected $promotionItems;

    /**
     * @var array
     */
    protected $usedNotAppliedVoucherCodes = [];

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\GiftCardTransfer>
     */
    protected $giftCards;

    /**
     * @var array
     */
    protected $notApplicableGiftCardCodes = [];

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\PaymentTransfer>
     */
    protected $payments;

    /**
     * @var \Generated\Shared\Transfer\PaymentTransfer|null
     */
    protected $payment;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ItemTransfer>
     */
    protected $bundleItems;

    /**
     * @var \Generated\Shared\Transfer\AddressTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var \Generated\Shared\Transfer\ShipmentTransfer|null
     */
    protected $shipment;

    /**
     * @var \Generated\Shared\Transfer\SaleTaxMetadataTransfer|null
     */
    protected $taxMetadata;

    /**
     * @var string|null
     */
    protected $taxAppSaleHash;

    /**
     * @var \Generated\Shared\Transfer\TaxCalculationResponseTransfer|null
     */
    protected $taxCalculationResponse;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'totals' => 'totals',
        'Totals' => 'totals',
        'items' => 'items',
        'Items' => 'items',
        'expenses' => 'expenses',
        'Expenses' => 'expenses',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
        'voucher_discounts' => 'voucherDiscounts',
        'voucherDiscounts' => 'voucherDiscounts',
        'VoucherDiscounts' => 'voucherDiscounts',
        'cart_rule_discounts' => 'cartRuleDiscounts',
        'cartRuleDiscounts' => 'cartRuleDiscounts',
        'CartRuleDiscounts' => 'cartRuleDiscounts',
        'original_order' => 'originalOrder',
        'originalOrder' => 'originalOrder',
        'OriginalOrder' => 'originalOrder',
        'original_quote' => 'originalQuote',
        'originalQuote' => 'originalQuote',
        'OriginalQuote' => 'originalQuote',
        'store' => 'store',
        'Store' => 'store',
        'customer' => 'customer',
        'Customer' => 'customer',
        'currency' => 'currency',
        'Currency' => 'currency',
        'promotion_items' => 'promotionItems',
        'promotionItems' => 'promotionItems',
        'PromotionItems' => 'promotionItems',
        'used_not_applied_voucher_codes' => 'usedNotAppliedVoucherCodes',
        'usedNotAppliedVoucherCodes' => 'usedNotAppliedVoucherCodes',
        'UsedNotAppliedVoucherCodes' => 'usedNotAppliedVoucherCodes',
        'gift_cards' => 'giftCards',
        'giftCards' => 'giftCards',
        'GiftCards' => 'giftCards',
        'not_applicable_gift_card_codes' => 'notApplicableGiftCardCodes',
        'notApplicableGiftCardCodes' => 'notApplicableGiftCardCodes',
        'NotApplicableGiftCardCodes' => 'notApplicableGiftCardCodes',
        'payments' => 'payments',
        'Payments' => 'payments',
        'payment' => 'payment',
        'Payment' => 'payment',
        'bundle_items' => 'bundleItems',
        'bundleItems' => 'bundleItems',
        'BundleItems' => 'bundleItems',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'shipment' => 'shipment',
        'Shipment' => 'shipment',
        'tax_metadata' => 'taxMetadata',
        'taxMetadata' => 'taxMetadata',
        'TaxMetadata' => 'taxMetadata',
        'tax_app_sale_hash' => 'taxAppSaleHash',
        'taxAppSaleHash' => 'taxAppSaleHash',
        'TaxAppSaleHash' => 'taxAppSaleHash',
        'tax_calculation_response' => 'taxCalculationResponse',
        'taxCalculationResponse' => 'taxCalculationResponse',
        'TaxCalculationResponse' => 'taxCalculationResponse',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TOTALS => [
            'type' => 'Generated\Shared\Transfer\TotalsTransfer',
            'type_shim' => null,
            'name_underscore' => 'totals',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEMS => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXPENSES => [
            'type' => 'Generated\Shared\Transfer\ExpenseTransfer',
            'type_shim' => null,
            'name_underscore' => 'expenses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_MODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_mode',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'currency_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VOUCHER_DISCOUNTS => [
            'type' => 'Generated\Shared\Transfer\DiscountTransfer',
            'type_shim' => null,
            'name_underscore' => 'voucher_discounts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CART_RULE_DISCOUNTS => [
            'type' => 'Generated\Shared\Transfer\DiscountTransfer',
            'type_shim' => null,
            'name_underscore' => 'cart_rule_discounts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORIGINAL_ORDER => [
            'type' => 'Generated\Shared\Transfer\OrderTransfer',
            'type_shim' => null,
            'name_underscore' => 'original_order',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORIGINAL_QUOTE => [
            'type' => 'Generated\Shared\Transfer\QuoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'original_quote',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\CustomerTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY => [
            'type' => 'Generated\Shared\Transfer\CurrencyTransfer',
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
        self::PROMOTION_ITEMS => [
            'type' => 'Generated\Shared\Transfer\PromotionItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'promotion_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USED_NOT_APPLIED_VOUCHER_CODES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'used_not_applied_voucher_codes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GIFT_CARDS => [
            'type' => 'Generated\Shared\Transfer\GiftCardTransfer',
            'type_shim' => null,
            'name_underscore' => 'gift_cards',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NOT_APPLICABLE_GIFT_CARD_CODES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'not_applicable_gift_card_codes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENTS => [
            'type' => 'Generated\Shared\Transfer\PaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'payments',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT => [
            'type' => 'Generated\Shared\Transfer\PaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'payment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BUNDLE_ITEMS => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'bundle_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPPING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\AddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipping_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT => [
            'type' => 'Generated\Shared\Transfer\ShipmentTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_METADATA => [
            'type' => 'Generated\Shared\Transfer\SaleTaxMetadataTransfer',
            'type_shim' => null,
            'name_underscore' => 'tax_metadata',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::TAX_APP_SALE_HASH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'tax_app_sale_hash',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::TAX_CALCULATION_RESPONSE => [
            'type' => 'Generated\Shared\Transfer\TaxCalculationResponseTransfer',
            'type_shim' => null,
            'name_underscore' => 'tax_calculation_response',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module SalesReturnPage|Calculation|Payment|SalesOrderThreshold|SalesReturn|Shipment|TaxApp
     *
     * @param \Generated\Shared\Transfer\TotalsTransfer|null $totals
     *
     * @return $this
     */
    public function setTotals(TotalsTransfer $totals = null)
    {
        $this->totals = $totals;
        $this->modifiedProperties[self::TOTALS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|Calculation|Payment|SalesOrderThreshold|SalesReturn|Shipment|TaxApp
     *
     * @return \Generated\Shared\Transfer\TotalsTransfer|null
     */
    public function getTotals()
    {
        return $this->totals;
    }

    /**
     * @module SalesReturnPage|Calculation|Payment|SalesOrderThreshold|SalesReturn|Shipment|TaxApp
     *
     * @param \Generated\Shared\Transfer\TotalsTransfer $totals
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTotalsOrFail(TotalsTransfer $totals)
    {
        return $this->setTotals($totals);
    }

    /**
     * @module SalesReturnPage|Calculation|Payment|SalesOrderThreshold|SalesReturn|Shipment|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TotalsTransfer
     */
    public function getTotalsOrFail()
    {
        if ($this->totals === null) {
            $this->throwNullValueException(static::TOTALS);
        }

        return $this->totals;
    }

    /**
     * @module SalesReturnPage|Calculation|Payment|SalesOrderThreshold|SalesReturn|Shipment|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTotals()
    {
        $this->assertPropertyIsSet(self::TOTALS);

        return $this;
    }

    /**
     * @module SalesReturnPage|Calculation|DiscountCalculationConnector|GiftCard|ProductBundle|ProductOption|SalesOrderThreshold|SalesReturn|Shipment|TaxApp|TaxProductConnector|Tax
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ItemTransfer> $items
     *
     * @return $this
     */
    public function setItems(ArrayObject $items)
    {
        $this->items = $items;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|Calculation|DiscountCalculationConnector|GiftCard|ProductBundle|ProductOption|SalesOrderThreshold|SalesReturn|Shipment|TaxApp|TaxProductConnector|Tax
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ItemTransfer>
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module SalesReturnPage|Calculation|DiscountCalculationConnector|GiftCard|ProductBundle|ProductOption|SalesOrderThreshold|SalesReturn|Shipment|TaxApp|TaxProductConnector|Tax
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $item
     *
     * @return $this
     */
    public function addItem(ItemTransfer $item)
    {
        $this->items[] = $item;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|Calculation|DiscountCalculationConnector|GiftCard|ProductBundle|ProductOption|SalesOrderThreshold|SalesReturn|Shipment|TaxApp|TaxProductConnector|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItems()
    {
        $this->assertCollectionPropertyIsSet(self::ITEMS);

        return $this;
    }

    /**
     * @module Calculation|SalesOrderThreshold|Shipment|TaxApp|Tax
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ExpenseTransfer> $expenses
     *
     * @return $this
     */
    public function setExpenses(ArrayObject $expenses)
    {
        $this->expenses = $expenses;
        $this->modifiedProperties[self::EXPENSES] = true;

        return $this;
    }

    /**
     * @module Calculation|SalesOrderThreshold|Shipment|TaxApp|Tax
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ExpenseTransfer>
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    /**
     * @module Calculation|SalesOrderThreshold|Shipment|TaxApp|Tax
     *
     * @param \Generated\Shared\Transfer\ExpenseTransfer $expense
     *
     * @return $this
     */
    public function addExpense(ExpenseTransfer $expense)
    {
        $this->expenses[] = $expense;
        $this->modifiedProperties[self::EXPENSES] = true;

        return $this;
    }

    /**
     * @module Calculation|SalesOrderThreshold|Shipment|TaxApp|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpenses()
    {
        $this->assertCollectionPropertyIsSet(self::EXPENSES);

        return $this;
    }

    /**
     * @module Calculation|SalesOrderThreshold|TaxApp|Tax
     *
     * @param string|null $priceMode
     *
     * @return $this
     */
    public function setPriceMode($priceMode)
    {
        $this->priceMode = $priceMode;
        $this->modifiedProperties[self::PRICE_MODE] = true;

        return $this;
    }

    /**
     * @module Calculation|SalesOrderThreshold|TaxApp|Tax
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module Calculation|SalesOrderThreshold|TaxApp|Tax
     *
     * @param string|null $priceMode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceModeOrFail($priceMode)
    {
        if ($priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->setPriceMode($priceMode);
    }

    /**
     * @module Calculation|SalesOrderThreshold|TaxApp|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceModeOrFail()
    {
        if ($this->priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->priceMode;
    }

    /**
     * @module Calculation|SalesOrderThreshold|TaxApp|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceMode()
    {
        $this->assertPropertyIsSet(self::PRICE_MODE);

        return $this;
    }

    /**
     * @module Calculation
     *
     * @param string|null $currencyIsoCode
     *
     * @return $this
     */
    public function setCurrencyIsoCode($currencyIsoCode)
    {
        $this->currencyIsoCode = $currencyIsoCode;
        $this->modifiedProperties[self::CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module Calculation
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module Calculation
     *
     * @param string|null $currencyIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyIsoCodeOrFail($currencyIsoCode)
    {
        if ($currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->setCurrencyIsoCode($currencyIsoCode);
    }

    /**
     * @module Calculation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCurrencyIsoCodeOrFail()
    {
        if ($this->currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->currencyIsoCode;
    }

    /**
     * @module Calculation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::CURRENCY_ISO_CODE);

        return $this;
    }

    /**
     * @module Calculation
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\DiscountTransfer> $voucherDiscounts
     *
     * @return $this
     */
    public function setVoucherDiscounts(ArrayObject $voucherDiscounts)
    {
        $this->voucherDiscounts = $voucherDiscounts;
        $this->modifiedProperties[self::VOUCHER_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module Calculation
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DiscountTransfer>
     */
    public function getVoucherDiscounts()
    {
        return $this->voucherDiscounts;
    }

    /**
     * @module Calculation
     *
     * @param \Generated\Shared\Transfer\DiscountTransfer $voucherDiscount
     *
     * @return $this
     */
    public function addVoucherDiscount(DiscountTransfer $voucherDiscount)
    {
        $this->voucherDiscounts[] = $voucherDiscount;
        $this->modifiedProperties[self::VOUCHER_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module Calculation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVoucherDiscounts()
    {
        $this->assertCollectionPropertyIsSet(self::VOUCHER_DISCOUNTS);

        return $this;
    }

    /**
     * @module Calculation
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\DiscountTransfer> $cartRuleDiscounts
     *
     * @return $this
     */
    public function setCartRuleDiscounts(ArrayObject $cartRuleDiscounts)
    {
        $this->cartRuleDiscounts = $cartRuleDiscounts;
        $this->modifiedProperties[self::CART_RULE_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module Calculation
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DiscountTransfer>
     */
    public function getCartRuleDiscounts()
    {
        return $this->cartRuleDiscounts;
    }

    /**
     * @module Calculation
     *
     * @param \Generated\Shared\Transfer\DiscountTransfer $cartRuleDiscount
     *
     * @return $this
     */
    public function addCartRuleDiscount(DiscountTransfer $cartRuleDiscount)
    {
        $this->cartRuleDiscounts[] = $cartRuleDiscount;
        $this->modifiedProperties[self::CART_RULE_DISCOUNTS] = true;

        return $this;
    }

    /**
     * @module Calculation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCartRuleDiscounts()
    {
        $this->assertCollectionPropertyIsSet(self::CART_RULE_DISCOUNTS);

        return $this;
    }

    /**
     * @module Calculation|DiscountCalculationConnector|TaxApp
     *
     * @param \Generated\Shared\Transfer\OrderTransfer|null $originalOrder
     *
     * @return $this
     */
    public function setOriginalOrder(OrderTransfer $originalOrder = null)
    {
        $this->originalOrder = $originalOrder;
        $this->modifiedProperties[self::ORIGINAL_ORDER] = true;

        return $this;
    }

    /**
     * @module Calculation|DiscountCalculationConnector|TaxApp
     *
     * @return \Generated\Shared\Transfer\OrderTransfer|null
     */
    public function getOriginalOrder()
    {
        return $this->originalOrder;
    }

    /**
     * @module Calculation|DiscountCalculationConnector|TaxApp
     *
     * @param \Generated\Shared\Transfer\OrderTransfer $originalOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOriginalOrderOrFail(OrderTransfer $originalOrder)
    {
        return $this->setOriginalOrder($originalOrder);
    }

    /**
     * @module Calculation|DiscountCalculationConnector|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OrderTransfer
     */
    public function getOriginalOrderOrFail()
    {
        if ($this->originalOrder === null) {
            $this->throwNullValueException(static::ORIGINAL_ORDER);
        }

        return $this->originalOrder;
    }

    /**
     * @module Calculation|DiscountCalculationConnector|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOriginalOrder()
    {
        $this->assertPropertyIsSet(self::ORIGINAL_ORDER);

        return $this;
    }

    /**
     * @module Calculation|GiftCard|SalesOrderThreshold|Shipment|TaxApp
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer|null $originalQuote
     *
     * @return $this
     */
    public function setOriginalQuote(QuoteTransfer $originalQuote = null)
    {
        $this->originalQuote = $originalQuote;
        $this->modifiedProperties[self::ORIGINAL_QUOTE] = true;

        return $this;
    }

    /**
     * @module Calculation|GiftCard|SalesOrderThreshold|Shipment|TaxApp
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getOriginalQuote()
    {
        return $this->originalQuote;
    }

    /**
     * @module Calculation|GiftCard|SalesOrderThreshold|Shipment|TaxApp
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $originalQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOriginalQuoteOrFail(QuoteTransfer $originalQuote)
    {
        return $this->setOriginalQuote($originalQuote);
    }

    /**
     * @module Calculation|GiftCard|SalesOrderThreshold|Shipment|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getOriginalQuoteOrFail()
    {
        if ($this->originalQuote === null) {
            $this->throwNullValueException(static::ORIGINAL_QUOTE);
        }

        return $this->originalQuote;
    }

    /**
     * @module Calculation|GiftCard|SalesOrderThreshold|Shipment|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOriginalQuote()
    {
        $this->assertPropertyIsSet(self::ORIGINAL_QUOTE);

        return $this;
    }

    /**
     * @module Calculation|DiscountCalculationConnector|ProductOption|SalesOrderThreshold|Shipment|TaxApp|TaxProductConnector
     *
     * @param \Generated\Shared\Transfer\StoreTransfer|null $store
     *
     * @return $this
     */
    public function setStore(StoreTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module Calculation|DiscountCalculationConnector|ProductOption|SalesOrderThreshold|Shipment|TaxApp|TaxProductConnector
     *
     * @return \Generated\Shared\Transfer\StoreTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module Calculation|DiscountCalculationConnector|ProductOption|SalesOrderThreshold|Shipment|TaxApp|TaxProductConnector
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(StoreTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module Calculation|DiscountCalculationConnector|ProductOption|SalesOrderThreshold|Shipment|TaxApp|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module Calculation|DiscountCalculationConnector|ProductOption|SalesOrderThreshold|Shipment|TaxApp|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

        return $this;
    }

    /**
     * @module CustomerGroupDiscountConnector
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(CustomerTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CustomerGroupDiscountConnector
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module CustomerGroupDiscountConnector
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(CustomerTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module CustomerGroupDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module CustomerGroupDiscountConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomer()
    {
        $this->assertPropertyIsSet(self::CUSTOMER);

        return $this;
    }

    /**
     * @module DiscountCalculationConnector
     *
     * @param \Generated\Shared\Transfer\CurrencyTransfer|null $currency
     *
     * @return $this
     */
    public function setCurrency(CurrencyTransfer $currency = null)
    {
        $this->currency = $currency;
        $this->modifiedProperties[self::CURRENCY] = true;

        return $this;
    }

    /**
     * @module DiscountCalculationConnector
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module DiscountCalculationConnector
     *
     * @param \Generated\Shared\Transfer\CurrencyTransfer $currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyOrFail(CurrencyTransfer $currency)
    {
        return $this->setCurrency($currency);
    }

    /**
     * @module DiscountCalculationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer
     */
    public function getCurrencyOrFail()
    {
        if ($this->currency === null) {
            $this->throwNullValueException(static::CURRENCY);
        }

        return $this->currency;
    }

    /**
     * @module DiscountCalculationConnector
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
     * @module DiscountPromotion
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\PromotionItemTransfer> $promotionItems
     *
     * @return $this
     */
    public function setPromotionItems(ArrayObject $promotionItems)
    {
        $this->promotionItems = $promotionItems;
        $this->modifiedProperties[self::PROMOTION_ITEMS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\PromotionItemTransfer>
     */
    public function getPromotionItems()
    {
        return $this->promotionItems;
    }

    /**
     * @module DiscountPromotion
     *
     * @param \Generated\Shared\Transfer\PromotionItemTransfer $promotionItem
     *
     * @return $this
     */
    public function addPromotionItem(PromotionItemTransfer $promotionItem)
    {
        $this->promotionItems[] = $promotionItem;
        $this->modifiedProperties[self::PROMOTION_ITEMS] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePromotionItems()
    {
        $this->assertCollectionPropertyIsSet(self::PROMOTION_ITEMS);

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @param array|null $usedNotAppliedVoucherCodes
     *
     * @return $this
     */
    public function setUsedNotAppliedVoucherCodes(array $usedNotAppliedVoucherCodes = null)
    {
        if ($usedNotAppliedVoucherCodes === null) {
            $usedNotAppliedVoucherCodes = [];
        }

        $this->usedNotAppliedVoucherCodes = $usedNotAppliedVoucherCodes;
        $this->modifiedProperties[self::USED_NOT_APPLIED_VOUCHER_CODES] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @return array
     */
    public function getUsedNotAppliedVoucherCodes()
    {
        return $this->usedNotAppliedVoucherCodes;
    }

    /**
     * @module DiscountPromotion
     *
     * @param mixed $usedNotAppliedVoucherCode
     *
     * @return $this
     */
    public function addUsedNotAppliedVoucherCode($usedNotAppliedVoucherCode)
    {
        $this->usedNotAppliedVoucherCodes[] = $usedNotAppliedVoucherCode;
        $this->modifiedProperties[self::USED_NOT_APPLIED_VOUCHER_CODES] = true;

        return $this;
    }

    /**
     * @module DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsedNotAppliedVoucherCodes()
    {
        $this->assertPropertyIsSet(self::USED_NOT_APPLIED_VOUCHER_CODES);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\GiftCardTransfer> $giftCards
     *
     * @return $this
     */
    public function setGiftCards(ArrayObject $giftCards)
    {
        $this->giftCards = $giftCards;
        $this->modifiedProperties[self::GIFT_CARDS] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\GiftCardTransfer>
     */
    public function getGiftCards()
    {
        return $this->giftCards;
    }

    /**
     * @module GiftCard
     *
     * @param \Generated\Shared\Transfer\GiftCardTransfer $giftCard
     *
     * @return $this
     */
    public function addGiftCard(GiftCardTransfer $giftCard)
    {
        $this->giftCards[] = $giftCard;
        $this->modifiedProperties[self::GIFT_CARDS] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGiftCards()
    {
        $this->assertCollectionPropertyIsSet(self::GIFT_CARDS);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param array|null $notApplicableGiftCardCodes
     *
     * @return $this
     */
    public function setNotApplicableGiftCardCodes(array $notApplicableGiftCardCodes = null)
    {
        if ($notApplicableGiftCardCodes === null) {
            $notApplicableGiftCardCodes = [];
        }

        $this->notApplicableGiftCardCodes = $notApplicableGiftCardCodes;
        $this->modifiedProperties[self::NOT_APPLICABLE_GIFT_CARD_CODES] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return array
     */
    public function getNotApplicableGiftCardCodes()
    {
        return $this->notApplicableGiftCardCodes;
    }

    /**
     * @module GiftCard
     *
     * @param mixed $notApplicableGiftCardCode
     *
     * @return $this
     */
    public function addNotApplicableGiftCardCode($notApplicableGiftCardCode)
    {
        $this->notApplicableGiftCardCodes[] = $notApplicableGiftCardCode;
        $this->modifiedProperties[self::NOT_APPLICABLE_GIFT_CARD_CODES] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNotApplicableGiftCardCodes()
    {
        $this->assertPropertyIsSet(self::NOT_APPLICABLE_GIFT_CARD_CODES);

        return $this;
    }

    /**
     * @module GiftCard|Payment
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\PaymentTransfer> $payments
     *
     * @return $this
     */
    public function setPayments(ArrayObject $payments)
    {
        $this->payments = $payments;
        $this->modifiedProperties[self::PAYMENTS] = true;

        return $this;
    }

    /**
     * @module GiftCard|Payment
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\PaymentTransfer>
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @module GiftCard|Payment
     *
     * @param \Generated\Shared\Transfer\PaymentTransfer $payment
     *
     * @return $this
     */
    public function addPayment(PaymentTransfer $payment)
    {
        $this->payments[] = $payment;
        $this->modifiedProperties[self::PAYMENTS] = true;

        return $this;
    }

    /**
     * @module GiftCard|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayments()
    {
        $this->assertCollectionPropertyIsSet(self::PAYMENTS);

        return $this;
    }

    /**
     * @module GiftCard|Payment
     *
     * @param \Generated\Shared\Transfer\PaymentTransfer|null $payment
     *
     * @return $this
     */
    public function setPayment(PaymentTransfer $payment = null)
    {
        $this->payment = $payment;
        $this->modifiedProperties[self::PAYMENT] = true;

        return $this;
    }

    /**
     * @module GiftCard|Payment
     *
     * @return \Generated\Shared\Transfer\PaymentTransfer|null
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @module GiftCard|Payment
     *
     * @param \Generated\Shared\Transfer\PaymentTransfer $payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentOrFail(PaymentTransfer $payment)
    {
        return $this->setPayment($payment);
    }

    /**
     * @module GiftCard|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaymentTransfer
     */
    public function getPaymentOrFail()
    {
        if ($this->payment === null) {
            $this->throwNullValueException(static::PAYMENT);
        }

        return $this->payment;
    }

    /**
     * @module GiftCard|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayment()
    {
        $this->assertPropertyIsSet(self::PAYMENT);

        return $this;
    }

    /**
     * @module ProductBundle
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ItemTransfer> $bundleItems
     *
     * @return $this
     */
    public function setBundleItems(ArrayObject $bundleItems)
    {
        $this->bundleItems = $bundleItems;
        $this->modifiedProperties[self::BUNDLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module ProductBundle
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ItemTransfer>
     */
    public function getBundleItems()
    {
        return $this->bundleItems;
    }

    /**
     * @module ProductBundle
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $bundleItem
     *
     * @return $this
     */
    public function addBundleItem(ItemTransfer $bundleItem)
    {
        $this->bundleItems[] = $bundleItem;
        $this->modifiedProperties[self::BUNDLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBundleItems()
    {
        $this->assertCollectionPropertyIsSet(self::BUNDLE_ITEMS);

        return $this;
    }

    /**
     * @module ProductOption|Shipment|TaxProductConnector
     *
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     *
     * @param \Generated\Shared\Transfer\AddressTransfer|null $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(AddressTransfer $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module ProductOption|Shipment|TaxProductConnector
     *
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     *
     * @return \Generated\Shared\Transfer\AddressTransfer|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @module ProductOption|Shipment|TaxProductConnector
     *
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $shippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShippingAddressOrFail(AddressTransfer $shippingAddress)
    {
        return $this->setShippingAddress($shippingAddress);
    }

    /**
     * @module ProductOption|Shipment|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     *
     * @return \Generated\Shared\Transfer\AddressTransfer
     */
    public function getShippingAddressOrFail()
    {
        if ($this->shippingAddress === null) {
            $this->throwNullValueException(static::SHIPPING_ADDRESS);
        }

        return $this->shippingAddress;
    }

    /**
     * @module ProductOption|Shipment|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use item level shipping addresses (item.shipment.shippingAddress) instead.
     *
     * @return $this
     */
    public function requireShippingAddress()
    {
        $this->assertPropertyIsSet(self::SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module Shipment
     *
     * @deprecated Use item level shipment details (item.shipment) instead.
     *
     * @param \Generated\Shared\Transfer\ShipmentTransfer|null $shipment
     *
     * @return $this
     */
    public function setShipment(ShipmentTransfer $shipment = null)
    {
        $this->shipment = $shipment;
        $this->modifiedProperties[self::SHIPMENT] = true;

        return $this;
    }

    /**
     * @module Shipment
     *
     * @deprecated Use item level shipment details (item.shipment) instead.
     *
     * @return \Generated\Shared\Transfer\ShipmentTransfer|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @module Shipment
     *
     * @deprecated Use item level shipment details (item.shipment) instead.
     *
     * @param \Generated\Shared\Transfer\ShipmentTransfer $shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentOrFail(ShipmentTransfer $shipment)
    {
        return $this->setShipment($shipment);
    }

    /**
     * @module Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use item level shipment details (item.shipment) instead.
     *
     * @return \Generated\Shared\Transfer\ShipmentTransfer
     */
    public function getShipmentOrFail()
    {
        if ($this->shipment === null) {
            $this->throwNullValueException(static::SHIPMENT);
        }

        return $this->shipment;
    }

    /**
     * @module Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use item level shipment details (item.shipment) instead.
     *
     * @return $this
     */
    public function requireShipment()
    {
        $this->assertPropertyIsSet(self::SHIPMENT);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\SaleTaxMetadataTransfer|null $taxMetadata
     *
     * @return $this
     */
    public function setTaxMetadata(?SaleTaxMetadataTransfer $taxMetadata = null)
    {
        $this->taxMetadata = $taxMetadata;
        $this->modifiedProperties[self::TAX_METADATA] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \Generated\Shared\Transfer\SaleTaxMetadataTransfer|null
     */
    public function getTaxMetadata(): ?SaleTaxMetadataTransfer
    {
        return $this->taxMetadata;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\SaleTaxMetadataTransfer $taxMetadata
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxMetadataOrFail(SaleTaxMetadataTransfer $taxMetadata)
    {
        return $this->setTaxMetadata($taxMetadata);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SaleTaxMetadataTransfer
     */
    public function getTaxMetadataOrFail(): SaleTaxMetadataTransfer
    {
        if ($this->taxMetadata === null) {
            $this->throwNullValueException(static::TAX_METADATA);
        }

        return $this->taxMetadata;
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
     * @param string|null $taxAppSaleHash
     *
     * @return $this
     */
    public function setTaxAppSaleHash(?string $taxAppSaleHash = null)
    {
        $this->taxAppSaleHash = $taxAppSaleHash;
        $this->modifiedProperties[self::TAX_APP_SALE_HASH] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getTaxAppSaleHash(): ?string
    {
        return $this->taxAppSaleHash;
    }

    /**
     * @module TaxApp
     *
     * @param string $taxAppSaleHash
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxAppSaleHashOrFail(string $taxAppSaleHash)
    {
        return $this->setTaxAppSaleHash($taxAppSaleHash);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTaxAppSaleHashOrFail(): string
    {
        if ($this->taxAppSaleHash === null) {
            $this->throwNullValueException(static::TAX_APP_SALE_HASH);
        }

        return $this->taxAppSaleHash;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxAppSaleHash()
    {
        $this->assertPropertyIsSet(self::TAX_APP_SALE_HASH);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxCalculationResponseTransfer|null $taxCalculationResponse
     *
     * @return $this
     */
    public function setTaxCalculationResponse(?TaxCalculationResponseTransfer $taxCalculationResponse = null)
    {
        $this->taxCalculationResponse = $taxCalculationResponse;
        $this->modifiedProperties[self::TAX_CALCULATION_RESPONSE] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \Generated\Shared\Transfer\TaxCalculationResponseTransfer|null
     */
    public function getTaxCalculationResponse(): ?TaxCalculationResponseTransfer
    {
        return $this->taxCalculationResponse;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxCalculationResponseTransfer $taxCalculationResponse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxCalculationResponseOrFail(TaxCalculationResponseTransfer $taxCalculationResponse)
    {
        return $this->setTaxCalculationResponse($taxCalculationResponse);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TaxCalculationResponseTransfer
     */
    public function getTaxCalculationResponseOrFail(): TaxCalculationResponseTransfer
    {
        if ($this->taxCalculationResponse === null) {
            $this->throwNullValueException(static::TAX_CALCULATION_RESPONSE);
        }

        return $this->taxCalculationResponse;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxCalculationResponse()
    {
        $this->assertPropertyIsSet(self::TAX_CALCULATION_RESPONSE);

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
                case 'priceMode':
                case 'currencyIsoCode':
                case 'usedNotAppliedVoucherCodes':
                case 'notApplicableGiftCardCodes':
                case 'taxAppSaleHash':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'totals':
                case 'originalOrder':
                case 'originalQuote':
                case 'store':
                case 'customer':
                case 'currency':
                case 'payment':
                case 'shippingAddress':
                case 'shipment':
                case 'taxMetadata':
                case 'taxCalculationResponse':
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
                case 'items':
                case 'expenses':
                case 'voucherDiscounts':
                case 'cartRuleDiscounts':
                case 'promotionItems':
                case 'giftCards':
                case 'payments':
                case 'bundleItems':
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
                case 'priceMode':
                case 'currencyIsoCode':
                case 'usedNotAppliedVoucherCodes':
                case 'notApplicableGiftCardCodes':
                case 'taxAppSaleHash':
                    $values[$arrayKey] = $value;

                    break;
                case 'totals':
                case 'originalOrder':
                case 'originalQuote':
                case 'store':
                case 'customer':
                case 'currency':
                case 'payment':
                case 'shippingAddress':
                case 'shipment':
                case 'taxMetadata':
                case 'taxCalculationResponse':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'items':
                case 'expenses':
                case 'voucherDiscounts':
                case 'cartRuleDiscounts':
                case 'promotionItems':
                case 'giftCards':
                case 'payments':
                case 'bundleItems':
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
                case 'priceMode':
                case 'currencyIsoCode':
                case 'usedNotAppliedVoucherCodes':
                case 'notApplicableGiftCardCodes':
                case 'taxAppSaleHash':
                    $values[$arrayKey] = $value;

                    break;
                case 'totals':
                case 'originalOrder':
                case 'originalQuote':
                case 'store':
                case 'customer':
                case 'currency':
                case 'payment':
                case 'shippingAddress':
                case 'shipment':
                case 'taxMetadata':
                case 'taxCalculationResponse':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'items':
                case 'expenses':
                case 'voucherDiscounts':
                case 'cartRuleDiscounts':
                case 'promotionItems':
                case 'giftCards':
                case 'payments':
                case 'bundleItems':
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
        $this->items = $this->items ?: new ArrayObject();
        $this->expenses = $this->expenses ?: new ArrayObject();
        $this->voucherDiscounts = $this->voucherDiscounts ?: new ArrayObject();
        $this->cartRuleDiscounts = $this->cartRuleDiscounts ?: new ArrayObject();
        $this->promotionItems = $this->promotionItems ?: new ArrayObject();
        $this->giftCards = $this->giftCards ?: new ArrayObject();
        $this->payments = $this->payments ?: new ArrayObject();
        $this->bundleItems = $this->bundleItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'priceMode' => $this->priceMode,
            'currencyIsoCode' => $this->currencyIsoCode,
            'usedNotAppliedVoucherCodes' => $this->usedNotAppliedVoucherCodes,
            'notApplicableGiftCardCodes' => $this->notApplicableGiftCardCodes,
            'taxAppSaleHash' => $this->taxAppSaleHash,
            'totals' => $this->totals,
            'originalOrder' => $this->originalOrder,
            'originalQuote' => $this->originalQuote,
            'store' => $this->store,
            'customer' => $this->customer,
            'currency' => $this->currency,
            'payment' => $this->payment,
            'shippingAddress' => $this->shippingAddress,
            'shipment' => $this->shipment,
            'taxMetadata' => $this->taxMetadata,
            'taxCalculationResponse' => $this->taxCalculationResponse,
            'items' => $this->items,
            'expenses' => $this->expenses,
            'voucherDiscounts' => $this->voucherDiscounts,
            'cartRuleDiscounts' => $this->cartRuleDiscounts,
            'promotionItems' => $this->promotionItems,
            'giftCards' => $this->giftCards,
            'payments' => $this->payments,
            'bundleItems' => $this->bundleItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'price_mode' => $this->priceMode,
            'currency_iso_code' => $this->currencyIsoCode,
            'used_not_applied_voucher_codes' => $this->usedNotAppliedVoucherCodes,
            'not_applicable_gift_card_codes' => $this->notApplicableGiftCardCodes,
            'tax_app_sale_hash' => $this->taxAppSaleHash,
            'totals' => $this->totals,
            'original_order' => $this->originalOrder,
            'original_quote' => $this->originalQuote,
            'store' => $this->store,
            'customer' => $this->customer,
            'currency' => $this->currency,
            'payment' => $this->payment,
            'shipping_address' => $this->shippingAddress,
            'shipment' => $this->shipment,
            'tax_metadata' => $this->taxMetadata,
            'tax_calculation_response' => $this->taxCalculationResponse,
            'items' => $this->items,
            'expenses' => $this->expenses,
            'voucher_discounts' => $this->voucherDiscounts,
            'cart_rule_discounts' => $this->cartRuleDiscounts,
            'promotion_items' => $this->promotionItems,
            'gift_cards' => $this->giftCards,
            'payments' => $this->payments,
            'bundle_items' => $this->bundleItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
            'used_not_applied_voucher_codes' => $this->usedNotAppliedVoucherCodes instanceof AbstractTransfer ? $this->usedNotAppliedVoucherCodes->toArray(true, false) : $this->usedNotAppliedVoucherCodes,
            'not_applicable_gift_card_codes' => $this->notApplicableGiftCardCodes instanceof AbstractTransfer ? $this->notApplicableGiftCardCodes->toArray(true, false) : $this->notApplicableGiftCardCodes,
            'tax_app_sale_hash' => $this->taxAppSaleHash instanceof AbstractTransfer ? $this->taxAppSaleHash->toArray(true, false) : $this->taxAppSaleHash,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, false) : $this->totals,
            'original_order' => $this->originalOrder instanceof AbstractTransfer ? $this->originalOrder->toArray(true, false) : $this->originalOrder,
            'original_quote' => $this->originalQuote instanceof AbstractTransfer ? $this->originalQuote->toArray(true, false) : $this->originalQuote,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'payment' => $this->payment instanceof AbstractTransfer ? $this->payment->toArray(true, false) : $this->payment,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, false) : $this->shipment,
            'tax_metadata' => $this->taxMetadata instanceof AbstractTransfer ? $this->taxMetadata->toArray(true, false) : $this->taxMetadata,
            'tax_calculation_response' => $this->taxCalculationResponse instanceof AbstractTransfer ? $this->taxCalculationResponse->toArray(true, false) : $this->taxCalculationResponse,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, false) : $this->addValuesToCollection($this->expenses, true, false),
            'voucher_discounts' => $this->voucherDiscounts instanceof AbstractTransfer ? $this->voucherDiscounts->toArray(true, false) : $this->addValuesToCollection($this->voucherDiscounts, true, false),
            'cart_rule_discounts' => $this->cartRuleDiscounts instanceof AbstractTransfer ? $this->cartRuleDiscounts->toArray(true, false) : $this->addValuesToCollection($this->cartRuleDiscounts, true, false),
            'promotion_items' => $this->promotionItems instanceof AbstractTransfer ? $this->promotionItems->toArray(true, false) : $this->addValuesToCollection($this->promotionItems, true, false),
            'gift_cards' => $this->giftCards instanceof AbstractTransfer ? $this->giftCards->toArray(true, false) : $this->addValuesToCollection($this->giftCards, true, false),
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, false) : $this->addValuesToCollection($this->payments, true, false),
            'bundle_items' => $this->bundleItems instanceof AbstractTransfer ? $this->bundleItems->toArray(true, false) : $this->addValuesToCollection($this->bundleItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
            'usedNotAppliedVoucherCodes' => $this->usedNotAppliedVoucherCodes instanceof AbstractTransfer ? $this->usedNotAppliedVoucherCodes->toArray(true, true) : $this->usedNotAppliedVoucherCodes,
            'notApplicableGiftCardCodes' => $this->notApplicableGiftCardCodes instanceof AbstractTransfer ? $this->notApplicableGiftCardCodes->toArray(true, true) : $this->notApplicableGiftCardCodes,
            'taxAppSaleHash' => $this->taxAppSaleHash instanceof AbstractTransfer ? $this->taxAppSaleHash->toArray(true, true) : $this->taxAppSaleHash,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, true) : $this->totals,
            'originalOrder' => $this->originalOrder instanceof AbstractTransfer ? $this->originalOrder->toArray(true, true) : $this->originalOrder,
            'originalQuote' => $this->originalQuote instanceof AbstractTransfer ? $this->originalQuote->toArray(true, true) : $this->originalQuote,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'payment' => $this->payment instanceof AbstractTransfer ? $this->payment->toArray(true, true) : $this->payment,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, true) : $this->shipment,
            'taxMetadata' => $this->taxMetadata instanceof AbstractTransfer ? $this->taxMetadata->toArray(true, true) : $this->taxMetadata,
            'taxCalculationResponse' => $this->taxCalculationResponse instanceof AbstractTransfer ? $this->taxCalculationResponse->toArray(true, true) : $this->taxCalculationResponse,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, true) : $this->addValuesToCollection($this->expenses, true, true),
            'voucherDiscounts' => $this->voucherDiscounts instanceof AbstractTransfer ? $this->voucherDiscounts->toArray(true, true) : $this->addValuesToCollection($this->voucherDiscounts, true, true),
            'cartRuleDiscounts' => $this->cartRuleDiscounts instanceof AbstractTransfer ? $this->cartRuleDiscounts->toArray(true, true) : $this->addValuesToCollection($this->cartRuleDiscounts, true, true),
            'promotionItems' => $this->promotionItems instanceof AbstractTransfer ? $this->promotionItems->toArray(true, true) : $this->addValuesToCollection($this->promotionItems, true, true),
            'giftCards' => $this->giftCards instanceof AbstractTransfer ? $this->giftCards->toArray(true, true) : $this->addValuesToCollection($this->giftCards, true, true),
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, true) : $this->addValuesToCollection($this->payments, true, true),
            'bundleItems' => $this->bundleItems instanceof AbstractTransfer ? $this->bundleItems->toArray(true, true) : $this->addValuesToCollection($this->bundleItems, true, true),
        ];
    }
}
