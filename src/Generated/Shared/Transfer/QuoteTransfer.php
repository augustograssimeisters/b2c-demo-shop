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
class QuoteTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE = 'idQuote';

    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string
     */
    public const QUOTE_APPROVALS = 'quoteApprovals';

    /**
     * @var string
     */
    public const QUOTE_REQUEST_VERSION_REFERENCE = 'quoteRequestVersionReference';

    /**
     * @var string
     */
    public const COMMENT_THREAD = 'commentThread';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const TOTALS = 'totals';

    /**
     * @var string
     */
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const HIDE_TAX_IN_CART = 'hideTaxInCart';

    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const TAX_VENDOR = 'taxVendor';

    /**
     * @var string
     */
    public const TOTAL_ITEM_COUNT = 'totalItemCount';

    /**
     * @var string
     */
    public const BILLING_SAME_AS_SHIPPING = 'billingSameAsShipping';

    /**
     * @deprecated Use payments property instead.
     */
    public const PAYMENT = 'payment';

    /**
     * @var string
     */
    public const PAYMENTS = 'payments';

    /**
     * @var string
     */
    public const ORDER_REFERENCE = 'orderReference';

    /**
     * @var string
     */
    public const BUNDLE_ITEMS = 'bundleItems';

    /**
     * @var string
     */
    public const EXPENSES = 'expenses';

    /**
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     */
    public const IS_ADDRESS_SAVING_SKIPPED = 'isAddressSavingSkipped';

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
    public const BILLING_ADDRESS = 'billingAddress';

    /**
     * @var string
     */
    public const CHECKOUT_CONFIRMED = 'checkoutConfirmed';

    /**
     * @var string
     */
    public const ACCEPT_TERMS_AND_CONDITIONS = 'acceptTermsAndConditions';

    /**
     * @var string
     */
    public const IS_ORDER_PLACED_SUCCESSFULLY = 'isOrderPlacedSuccessfully';

    /**
     * @var string
     */
    public const ERRORS = 'errors';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const PROMOTION_ITEMS = 'promotionItems';

    /**
     * @var string
     */
    public const IS_LOCKED = 'isLocked';

    /**
     * @var string
     */
    public const VOUCHER_DISCOUNTS = 'voucherDiscounts';

    /**
     * @var string
     */
    public const USED_NOT_APPLIED_VOUCHER_CODES = 'usedNotAppliedVoucherCodes';

    /**
     * @var string
     */
    public const ORDER_CUSTOM_REFERENCE = 'orderCustomReference';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const CART_RULE_DISCOUNTS = 'cartRuleDiscounts';

    /**
     * @var string
     */
    public const CART_NOTE = 'cartNote';

    /**
     * @var string
     */
    public const COMPANY_USER_ID = 'companyUserId';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SKIP_RECALCULATION = 'skipRecalculation';

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
    public const PRE_ORDER_PAYMENT_DATA = 'preOrderPaymentData';

    /**
     * @var string
     */
    public const SALES_ORDER_THRESHOLD_VALUES = 'salesOrderThresholdValues';

    /**
     * @var string
     */
    public const TAX_APP_SALE_HASH = 'taxAppSaleHash';

    /**
     * @var string
     */
    public const TAX_CALCULATION_RESPONSE = 'taxCalculationResponse';

    /**
     * @var int|null
     */
    protected $idQuote;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ItemTransfer>
     */
    protected $items;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\QuoteApprovalTransfer>
     */
    protected $quoteApprovals;

    /**
     * @var string|null
     */
    protected $quoteRequestVersionReference;

    /**
     * @var \Generated\Shared\Transfer\CommentThreadTransfer|null
     */
    protected $commentThread;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var \Generated\Shared\Transfer\TotalsTransfer|null
     */
    protected $totals;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var bool|null
     */
    protected $hideTaxInCart;

    /**
     * @var \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    protected $currency;

    /**
     * @var string|null
     */
    protected $taxVendor;

    /**
     * @var int|null
     */
    protected $totalItemCount;

    /**
     * @var bool|null
     */
    protected $billingSameAsShipping;

    /**
     * @var \Generated\Shared\Transfer\PaymentTransfer|null
     */
    protected $payment;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\PaymentTransfer>
     */
    protected $payments;

    /**
     * @var string|null
     */
    protected $orderReference;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ItemTransfer>
     */
    protected $bundleItems;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ExpenseTransfer>
     */
    protected $expenses;

    /**
     * @var bool|null
     */
    protected $isAddressSavingSkipped;

    /**
     * @var \Generated\Shared\Transfer\AddressTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var \Generated\Shared\Transfer\ShipmentTransfer|null
     */
    protected $shipment;

    /**
     * @var \Generated\Shared\Transfer\AddressTransfer|null
     */
    protected $billingAddress;

    /**
     * @var bool|null
     */
    protected $checkoutConfirmed;

    /**
     * @var bool|null
     */
    protected $acceptTermsAndConditions;

    /**
     * @var bool|null
     */
    protected $isOrderPlacedSuccessfully;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ErrorTransfer>
     */
    protected $errors;

    /**
     * @var \Generated\Shared\Transfer\StoreTransfer|null
     */
    protected $store;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\PromotionItemTransfer>
     */
    protected $promotionItems;

    /**
     * @var bool|null
     */
    protected $isLocked;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DiscountTransfer>
     */
    protected $voucherDiscounts;

    /**
     * @var array
     */
    protected $usedNotAppliedVoucherCodes = [];

    /**
     * @var string|null
     */
    protected $orderCustomReference;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DiscountTransfer>
     */
    protected $cartRuleDiscounts;

    /**
     * @var string|null
     */
    protected $cartNote;

    /**
     * @var int|null
     */
    protected $companyUserId;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var bool|null
     */
    protected $skipRecalculation;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\GiftCardTransfer>
     */
    protected $giftCards;

    /**
     * @var array
     */
    protected $notApplicableGiftCardCodes = [];

    /**
     * @var array
     */
    protected $preOrderPaymentData = [];

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SalesOrderThresholdValueTransfer>
     */
    protected $salesOrderThresholdValues;

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
        'id_quote' => 'idQuote',
        'idQuote' => 'idQuote',
        'IdQuote' => 'idQuote',
        'items' => 'items',
        'Items' => 'items',
        'quote_approvals' => 'quoteApprovals',
        'quoteApprovals' => 'quoteApprovals',
        'QuoteApprovals' => 'quoteApprovals',
        'quote_request_version_reference' => 'quoteRequestVersionReference',
        'quoteRequestVersionReference' => 'quoteRequestVersionReference',
        'QuoteRequestVersionReference' => 'quoteRequestVersionReference',
        'comment_thread' => 'commentThread',
        'commentThread' => 'commentThread',
        'CommentThread' => 'commentThread',
        'customer' => 'customer',
        'Customer' => 'customer',
        'totals' => 'totals',
        'Totals' => 'totals',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'hide_tax_in_cart' => 'hideTaxInCart',
        'hideTaxInCart' => 'hideTaxInCart',
        'HideTaxInCart' => 'hideTaxInCart',
        'currency' => 'currency',
        'Currency' => 'currency',
        'tax_vendor' => 'taxVendor',
        'taxVendor' => 'taxVendor',
        'TaxVendor' => 'taxVendor',
        'total_item_count' => 'totalItemCount',
        'totalItemCount' => 'totalItemCount',
        'TotalItemCount' => 'totalItemCount',
        'billing_same_as_shipping' => 'billingSameAsShipping',
        'billingSameAsShipping' => 'billingSameAsShipping',
        'BillingSameAsShipping' => 'billingSameAsShipping',
        'payment' => 'payment',
        'Payment' => 'payment',
        'payments' => 'payments',
        'Payments' => 'payments',
        'order_reference' => 'orderReference',
        'orderReference' => 'orderReference',
        'OrderReference' => 'orderReference',
        'bundle_items' => 'bundleItems',
        'bundleItems' => 'bundleItems',
        'BundleItems' => 'bundleItems',
        'expenses' => 'expenses',
        'Expenses' => 'expenses',
        'is_address_saving_skipped' => 'isAddressSavingSkipped',
        'isAddressSavingSkipped' => 'isAddressSavingSkipped',
        'IsAddressSavingSkipped' => 'isAddressSavingSkipped',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'shipment' => 'shipment',
        'Shipment' => 'shipment',
        'billing_address' => 'billingAddress',
        'billingAddress' => 'billingAddress',
        'BillingAddress' => 'billingAddress',
        'checkout_confirmed' => 'checkoutConfirmed',
        'checkoutConfirmed' => 'checkoutConfirmed',
        'CheckoutConfirmed' => 'checkoutConfirmed',
        'accept_terms_and_conditions' => 'acceptTermsAndConditions',
        'acceptTermsAndConditions' => 'acceptTermsAndConditions',
        'AcceptTermsAndConditions' => 'acceptTermsAndConditions',
        'is_order_placed_successfully' => 'isOrderPlacedSuccessfully',
        'isOrderPlacedSuccessfully' => 'isOrderPlacedSuccessfully',
        'IsOrderPlacedSuccessfully' => 'isOrderPlacedSuccessfully',
        'errors' => 'errors',
        'Errors' => 'errors',
        'store' => 'store',
        'Store' => 'store',
        'promotion_items' => 'promotionItems',
        'promotionItems' => 'promotionItems',
        'PromotionItems' => 'promotionItems',
        'is_locked' => 'isLocked',
        'isLocked' => 'isLocked',
        'IsLocked' => 'isLocked',
        'voucher_discounts' => 'voucherDiscounts',
        'voucherDiscounts' => 'voucherDiscounts',
        'VoucherDiscounts' => 'voucherDiscounts',
        'used_not_applied_voucher_codes' => 'usedNotAppliedVoucherCodes',
        'usedNotAppliedVoucherCodes' => 'usedNotAppliedVoucherCodes',
        'UsedNotAppliedVoucherCodes' => 'usedNotAppliedVoucherCodes',
        'order_custom_reference' => 'orderCustomReference',
        'orderCustomReference' => 'orderCustomReference',
        'OrderCustomReference' => 'orderCustomReference',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'cart_rule_discounts' => 'cartRuleDiscounts',
        'cartRuleDiscounts' => 'cartRuleDiscounts',
        'CartRuleDiscounts' => 'cartRuleDiscounts',
        'cart_note' => 'cartNote',
        'cartNote' => 'cartNote',
        'CartNote' => 'cartNote',
        'company_user_id' => 'companyUserId',
        'companyUserId' => 'companyUserId',
        'CompanyUserId' => 'companyUserId',
        'name' => 'name',
        'Name' => 'name',
        'skip_recalculation' => 'skipRecalculation',
        'skipRecalculation' => 'skipRecalculation',
        'SkipRecalculation' => 'skipRecalculation',
        'gift_cards' => 'giftCards',
        'giftCards' => 'giftCards',
        'GiftCards' => 'giftCards',
        'not_applicable_gift_card_codes' => 'notApplicableGiftCardCodes',
        'notApplicableGiftCardCodes' => 'notApplicableGiftCardCodes',
        'NotApplicableGiftCardCodes' => 'notApplicableGiftCardCodes',
        'pre_order_payment_data' => 'preOrderPaymentData',
        'preOrderPaymentData' => 'preOrderPaymentData',
        'PreOrderPaymentData' => 'preOrderPaymentData',
        'sales_order_threshold_values' => 'salesOrderThresholdValues',
        'salesOrderThresholdValues' => 'salesOrderThresholdValues',
        'SalesOrderThresholdValues' => 'salesOrderThresholdValues',
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
        self::ID_QUOTE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_quote',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::QUOTE_APPROVALS => [
            'type' => 'Generated\Shared\Transfer\QuoteApprovalTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote_approvals',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_REQUEST_VERSION_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quote_request_version_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMMENT_THREAD => [
            'type' => 'Generated\Shared\Transfer\CommentThreadTransfer',
            'type_shim' => null,
            'name_underscore' => 'comment_thread',
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
        self::HIDE_TAX_IN_CART => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'hide_tax_in_cart',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
        self::TAX_VENDOR => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'tax_vendor',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::TOTAL_ITEM_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'total_item_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::BILLING_SAME_AS_SHIPPING => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'billing_same_as_shipping',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::ORDER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_reference',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::IS_ADDRESS_SAVING_SKIPPED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_address_saving_skipped',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::BILLING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\AddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'billing_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHECKOUT_CONFIRMED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'checkout_confirmed',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACCEPT_TERMS_AND_CONDITIONS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'accept_terms_and_conditions',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ORDER_PLACED_SUCCESSFULLY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_order_placed_successfully',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERRORS => [
            'type' => 'Generated\Shared\Transfer\ErrorTransfer',
            'type_shim' => null,
            'name_underscore' => 'errors',
            'is_collection' => true,
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
        self::IS_LOCKED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_locked',
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
        self::ORDER_CUSTOM_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_custom_reference',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::CART_NOTE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cart_note',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'company_user_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKIP_RECALCULATION => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'skip_recalculation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
        self::PRE_ORDER_PAYMENT_DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'pre_order_payment_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_ORDER_THRESHOLD_VALUES => [
            'type' => 'Generated\Shared\Transfer\SalesOrderThresholdValueTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order_threshold_values',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
     * @module CartNoteWidget|CartPage|CartNote|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|OrderCustomReference|PersistentCart|ProductConfigurationsRestApi|Quote
     *
     * @param int|null $idQuote
     *
     * @return $this
     */
    public function setIdQuote($idQuote)
    {
        $this->idQuote = $idQuote;
        $this->modifiedProperties[self::ID_QUOTE] = true;

        return $this;
    }

    /**
     * @module CartNoteWidget|CartPage|CartNote|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|OrderCustomReference|PersistentCart|ProductConfigurationsRestApi|Quote
     *
     * @return int|null
     */
    public function getIdQuote()
    {
        return $this->idQuote;
    }

    /**
     * @module CartNoteWidget|CartPage|CartNote|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|OrderCustomReference|PersistentCart|ProductConfigurationsRestApi|Quote
     *
     * @param int|null $idQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteOrFail($idQuote)
    {
        if ($idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->setIdQuote($idQuote);
    }

    /**
     * @module CartNoteWidget|CartPage|CartNote|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|OrderCustomReference|PersistentCart|ProductConfigurationsRestApi|Quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdQuoteOrFail()
    {
        if ($this->idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->idQuote;
    }

    /**
     * @module CartNoteWidget|CartPage|CartNote|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|OrderCustomReference|PersistentCart|ProductConfigurationsRestApi|Quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuote()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE);

        return $this;
    }

    /**
     * @module CartPage|CheckoutPage|ConfigurableBundleWidget|CustomerPage|CustomerReorderWidget|DateTimeConfiguratorPageExample|PaymentPage|PriceWidget|ProductBundleWidget|SalesConfigurableBundleWidget|ShipmentTypeWidget|UrlPage|AvailabilityCartConnector|Availability|Calculation|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CategoryDiscountConnector|CheckoutRestApi|Checkout|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|Customer|CustomersRestApi|DiscountPromotion|Discount|GiftCard|Payment|PersistentCart|PriceCartConnector|Price|ProductBundleCartsRestApi|ProductBundleDiscountConnector|ProductBundle|ProductCartConnector|ProductConfigurationCart|ProductConfigurationWishlist|ProductConfigurationsRestApi|ProductDiscontinued|ProductDiscountConnector|ProductLabelDiscountConnector|ProductList|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductQuantity|ProductRelationStorage|ProductRelation|Quote|SalesConfigurableBundle|SalesOrderThreshold|SalesProductConfiguration|SalesProductConnector|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|TaxProductConnector|Tax|Wishlist
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
     * @module CartPage|CheckoutPage|ConfigurableBundleWidget|CustomerPage|CustomerReorderWidget|DateTimeConfiguratorPageExample|PaymentPage|PriceWidget|ProductBundleWidget|SalesConfigurableBundleWidget|ShipmentTypeWidget|UrlPage|AvailabilityCartConnector|Availability|Calculation|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CategoryDiscountConnector|CheckoutRestApi|Checkout|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|Customer|CustomersRestApi|DiscountPromotion|Discount|GiftCard|Payment|PersistentCart|PriceCartConnector|Price|ProductBundleCartsRestApi|ProductBundleDiscountConnector|ProductBundle|ProductCartConnector|ProductConfigurationCart|ProductConfigurationWishlist|ProductConfigurationsRestApi|ProductDiscontinued|ProductDiscountConnector|ProductLabelDiscountConnector|ProductList|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductQuantity|ProductRelationStorage|ProductRelation|Quote|SalesConfigurableBundle|SalesOrderThreshold|SalesProductConfiguration|SalesProductConnector|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|TaxProductConnector|Tax|Wishlist
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ItemTransfer>
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module CartPage|CheckoutPage|ConfigurableBundleWidget|CustomerPage|CustomerReorderWidget|DateTimeConfiguratorPageExample|PaymentPage|PriceWidget|ProductBundleWidget|SalesConfigurableBundleWidget|ShipmentTypeWidget|UrlPage|AvailabilityCartConnector|Availability|Calculation|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CategoryDiscountConnector|CheckoutRestApi|Checkout|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|Customer|CustomersRestApi|DiscountPromotion|Discount|GiftCard|Payment|PersistentCart|PriceCartConnector|Price|ProductBundleCartsRestApi|ProductBundleDiscountConnector|ProductBundle|ProductCartConnector|ProductConfigurationCart|ProductConfigurationWishlist|ProductConfigurationsRestApi|ProductDiscontinued|ProductDiscountConnector|ProductLabelDiscountConnector|ProductList|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductQuantity|ProductRelationStorage|ProductRelation|Quote|SalesConfigurableBundle|SalesOrderThreshold|SalesProductConfiguration|SalesProductConnector|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|TaxProductConnector|Tax|Wishlist
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
     * @module CartPage|CheckoutPage|ConfigurableBundleWidget|CustomerPage|CustomerReorderWidget|DateTimeConfiguratorPageExample|PaymentPage|PriceWidget|ProductBundleWidget|SalesConfigurableBundleWidget|ShipmentTypeWidget|UrlPage|AvailabilityCartConnector|Availability|Calculation|CartCurrencyConnector|CartNote|Cart|CartsRestApi|CategoryDiscountConnector|CheckoutRestApi|Checkout|ConfigurableBundleCart|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|ConfigurableBundle|ConfigurableBundlesRestApi|Customer|CustomersRestApi|DiscountPromotion|Discount|GiftCard|Payment|PersistentCart|PriceCartConnector|Price|ProductBundleCartsRestApi|ProductBundleDiscountConnector|ProductBundle|ProductCartConnector|ProductConfigurationCart|ProductConfigurationWishlist|ProductConfigurationsRestApi|ProductDiscontinued|ProductDiscountConnector|ProductLabelDiscountConnector|ProductList|ProductOptionCartConnector|ProductOption|ProductOptionsRestApi|ProductQuantity|ProductRelationStorage|ProductRelation|Quote|SalesConfigurableBundle|SalesOrderThreshold|SalesProductConfiguration|SalesProductConnector|Sales|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|TaxProductConnector|Tax|Wishlist
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
     * @module CartPage
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\QuoteApprovalTransfer> $quoteApprovals
     *
     * @return $this
     */
    public function setQuoteApprovals(ArrayObject $quoteApprovals)
    {
        $this->quoteApprovals = $quoteApprovals;
        $this->modifiedProperties[self::QUOTE_APPROVALS] = true;

        return $this;
    }

    /**
     * @module CartPage
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\QuoteApprovalTransfer>
     */
    public function getQuoteApprovals()
    {
        return $this->quoteApprovals;
    }

    /**
     * @module CartPage
     *
     * @param \Generated\Shared\Transfer\QuoteApprovalTransfer $quoteApproval
     *
     * @return $this
     */
    public function addQuoteApproval(QuoteApprovalTransfer $quoteApproval)
    {
        $this->quoteApprovals[] = $quoteApproval;
        $this->modifiedProperties[self::QUOTE_APPROVALS] = true;

        return $this;
    }

    /**
     * @module CartPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteApprovals()
    {
        $this->assertCollectionPropertyIsSet(self::QUOTE_APPROVALS);

        return $this;
    }

    /**
     * @module CartPage
     *
     * @param string|null $quoteRequestVersionReference
     *
     * @return $this
     */
    public function setQuoteRequestVersionReference($quoteRequestVersionReference)
    {
        $this->quoteRequestVersionReference = $quoteRequestVersionReference;
        $this->modifiedProperties[self::QUOTE_REQUEST_VERSION_REFERENCE] = true;

        return $this;
    }

    /**
     * @module CartPage
     *
     * @return string|null
     */
    public function getQuoteRequestVersionReference()
    {
        return $this->quoteRequestVersionReference;
    }

    /**
     * @module CartPage
     *
     * @param string|null $quoteRequestVersionReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteRequestVersionReferenceOrFail($quoteRequestVersionReference)
    {
        if ($quoteRequestVersionReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_VERSION_REFERENCE);
        }

        return $this->setQuoteRequestVersionReference($quoteRequestVersionReference);
    }

    /**
     * @module CartPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuoteRequestVersionReferenceOrFail()
    {
        if ($this->quoteRequestVersionReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_VERSION_REFERENCE);
        }

        return $this->quoteRequestVersionReference;
    }

    /**
     * @module CartPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteRequestVersionReference()
    {
        $this->assertPropertyIsSet(self::QUOTE_REQUEST_VERSION_REFERENCE);

        return $this;
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage
     *
     * @param \Generated\Shared\Transfer\CommentThreadTransfer|null $commentThread
     *
     * @return $this
     */
    public function setCommentThread(CommentThreadTransfer $commentThread = null)
    {
        $this->commentThread = $commentThread;
        $this->modifiedProperties[self::COMMENT_THREAD] = true;

        return $this;
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage
     *
     * @return \Generated\Shared\Transfer\CommentThreadTransfer|null
     */
    public function getCommentThread()
    {
        return $this->commentThread;
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage
     *
     * @param \Generated\Shared\Transfer\CommentThreadTransfer $commentThread
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCommentThreadOrFail(CommentThreadTransfer $commentThread)
    {
        return $this->setCommentThread($commentThread);
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CommentThreadTransfer
     */
    public function getCommentThreadOrFail()
    {
        if ($this->commentThread === null) {
            $this->throwNullValueException(static::COMMENT_THREAD);
        }

        return $this->commentThread;
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCommentThread()
    {
        $this->assertPropertyIsSet(self::COMMENT_THREAD);

        return $this;
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|Checkout|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|CustomerGroupDiscountConnector|Customer|CustomersRestApi|Discount|GiftCardMailConnector|OrderCustomReference|Payment|PersistentCart|ProductConfigurationsRestApi|ProductList|Quote|SalesDiscountConnector|Sales|UpSellingProductsRestApi
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
     * @module CartPage|CheckoutPage|CustomerPage|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|Checkout|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|CustomerGroupDiscountConnector|Customer|CustomersRestApi|Discount|GiftCardMailConnector|OrderCustomReference|Payment|PersistentCart|ProductConfigurationsRestApi|ProductList|Quote|SalesDiscountConnector|Sales|UpSellingProductsRestApi
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|Checkout|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|CustomerGroupDiscountConnector|Customer|CustomersRestApi|Discount|GiftCardMailConnector|OrderCustomReference|Payment|PersistentCart|ProductConfigurationsRestApi|ProductList|Quote|SalesDiscountConnector|Sales|UpSellingProductsRestApi
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
     * @module CartPage|CheckoutPage|CustomerPage|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|Checkout|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|CustomerGroupDiscountConnector|Customer|CustomersRestApi|Discount|GiftCardMailConnector|OrderCustomReference|Payment|PersistentCart|ProductConfigurationsRestApi|ProductList|Quote|SalesDiscountConnector|Sales|UpSellingProductsRestApi
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
     * @module CartPage|CheckoutPage|CustomerPage|CartCodesRestApi|CartNote|Cart|CartsRestApi|CheckoutRestApi|Checkout|ConfigurableBundleCartsRestApi|ConfigurableBundleNote|CustomerGroupDiscountConnector|Customer|CustomersRestApi|Discount|GiftCardMailConnector|OrderCustomReference|Payment|PersistentCart|ProductConfigurationsRestApi|ProductList|Quote|SalesDiscountConnector|Sales|UpSellingProductsRestApi
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
     * @module CartPage|CheckoutPage|Calculation|CartCode|Cart|CartsRestApi|Checkout|Discount|Nopayment|ProductOption|Quote|SalesOrderThreshold|Sales|Tax
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
     * @module CartPage|CheckoutPage|Calculation|CartCode|Cart|CartsRestApi|Checkout|Discount|Nopayment|ProductOption|Quote|SalesOrderThreshold|Sales|Tax
     *
     * @return \Generated\Shared\Transfer\TotalsTransfer|null
     */
    public function getTotals()
    {
        return $this->totals;
    }

    /**
     * @module CartPage|CheckoutPage|Calculation|CartCode|Cart|CartsRestApi|Checkout|Discount|Nopayment|ProductOption|Quote|SalesOrderThreshold|Sales|Tax
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
     * @module CartPage|CheckoutPage|Calculation|CartCode|Cart|CartsRestApi|Checkout|Discount|Nopayment|ProductOption|Quote|SalesOrderThreshold|Sales|Tax
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
     * @module CartPage|CheckoutPage|Calculation|CartCode|Cart|CartsRestApi|Checkout|Discount|Nopayment|ProductOption|Quote|SalesOrderThreshold|Sales|Tax
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
     * @module CartPage|CheckoutPage|DateTimeConfiguratorPageExample|Calculation|CartsRestApi|CategoryDiscountConnector|Discount|Payment|PriceCartConnector|Price|ProductBundleDiscountConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
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
     * @module CartPage|CheckoutPage|DateTimeConfiguratorPageExample|Calculation|CartsRestApi|CategoryDiscountConnector|Discount|Payment|PriceCartConnector|Price|ProductBundleDiscountConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @module CartPage|CheckoutPage|DateTimeConfiguratorPageExample|Calculation|CartsRestApi|CategoryDiscountConnector|Discount|Payment|PriceCartConnector|Price|ProductBundleDiscountConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
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
     * @module CartPage|CheckoutPage|DateTimeConfiguratorPageExample|Calculation|CartsRestApi|CategoryDiscountConnector|Discount|Payment|PriceCartConnector|Price|ProductBundleDiscountConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
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
     * @module CartPage|CheckoutPage|DateTimeConfiguratorPageExample|Calculation|CartsRestApi|CategoryDiscountConnector|Discount|Payment|PriceCartConnector|Price|ProductBundleDiscountConnector|ProductBundle|ProductDiscountConnector|ProductLabelDiscountConnector|ProductOptionCartConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
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
     * @module CartPage|TaxApp
     *
     * @param bool|null $hideTaxInCart
     *
     * @return $this
     */
    public function setHideTaxInCart(?bool $hideTaxInCart = null)
    {
        $this->hideTaxInCart = $hideTaxInCart;
        $this->modifiedProperties[self::HIDE_TAX_IN_CART] = true;

        return $this;
    }

    /**
     * @module CartPage|TaxApp
     *
     * @return bool|null
     */
    public function getHideTaxInCart(): ?bool
    {
        return $this->hideTaxInCart;
    }

    /**
     * @module CartPage|TaxApp
     *
     * @param bool $hideTaxInCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHideTaxInCartOrFail(bool $hideTaxInCart)
    {
        return $this->setHideTaxInCart($hideTaxInCart);
    }

    /**
     * @module CartPage|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getHideTaxInCartOrFail(): bool
    {
        if ($this->hideTaxInCart === null) {
            $this->throwNullValueException(static::HIDE_TAX_IN_CART);
        }

        return $this->hideTaxInCart;
    }

    /**
     * @module CartPage|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHideTaxInCart()
    {
        $this->assertPropertyIsSet(self::HIDE_TAX_IN_CART);

        return $this;
    }

    /**
     * @module CartPage|Calculation|CartCurrencyConnector|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|GiftCard|Payment|PriceCartConnector|ProductBundle|ProductOptionCartConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment
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
     * @module CartPage|Calculation|CartCurrencyConnector|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|GiftCard|Payment|PriceCartConnector|ProductBundle|ProductOptionCartConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module CartPage|Calculation|CartCurrencyConnector|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|GiftCard|Payment|PriceCartConnector|ProductBundle|ProductOptionCartConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment
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
     * @module CartPage|Calculation|CartCurrencyConnector|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|GiftCard|Payment|PriceCartConnector|ProductBundle|ProductOptionCartConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment
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
     * @module CartPage|Calculation|CartCurrencyConnector|Cart|CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|GiftCard|Payment|PriceCartConnector|ProductBundle|ProductOptionCartConnector|Quote|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment
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
     * @module CartPage|TaxApp
     *
     * @param string|null $taxVendor
     *
     * @return $this
     */
    public function setTaxVendor(?string $taxVendor = null)
    {
        $this->taxVendor = $taxVendor;
        $this->modifiedProperties[self::TAX_VENDOR] = true;

        return $this;
    }

    /**
     * @module CartPage|TaxApp
     *
     * @return string|null
     */
    public function getTaxVendor(): ?string
    {
        return $this->taxVendor;
    }

    /**
     * @module CartPage|TaxApp
     *
     * @param string $taxVendor
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxVendorOrFail(string $taxVendor)
    {
        return $this->setTaxVendor($taxVendor);
    }

    /**
     * @module CartPage|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTaxVendorOrFail(): string
    {
        if ($this->taxVendor === null) {
            $this->throwNullValueException(static::TAX_VENDOR);
        }

        return $this->taxVendor;
    }

    /**
     * @module CartPage|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxVendor()
    {
        $this->assertPropertyIsSet(self::TAX_VENDOR);

        return $this;
    }

    /**
     * @module CartPage
     *
     * @param int|null $totalItemCount
     *
     * @return $this
     */
    public function setTotalItemCount(?int $totalItemCount = null)
    {
        $this->totalItemCount = $totalItemCount;
        $this->modifiedProperties[self::TOTAL_ITEM_COUNT] = true;

        return $this;
    }

    /**
     * @module CartPage
     *
     * @return int|null
     */
    public function getTotalItemCount(): ?int
    {
        return $this->totalItemCount;
    }

    /**
     * @module CartPage
     *
     * @param int $totalItemCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTotalItemCountOrFail(int $totalItemCount)
    {
        return $this->setTotalItemCount($totalItemCount);
    }

    /**
     * @module CartPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTotalItemCountOrFail(): int
    {
        if ($this->totalItemCount === null) {
            $this->throwNullValueException(static::TOTAL_ITEM_COUNT);
        }

        return $this->totalItemCount;
    }

    /**
     * @module CartPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTotalItemCount()
    {
        $this->assertPropertyIsSet(self::TOTAL_ITEM_COUNT);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer
     *
     * @param bool|null $billingSameAsShipping
     *
     * @return $this
     */
    public function setBillingSameAsShipping($billingSameAsShipping)
    {
        $this->billingSameAsShipping = $billingSameAsShipping;
        $this->modifiedProperties[self::BILLING_SAME_AS_SHIPPING] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer
     *
     * @return bool|null
     */
    public function getBillingSameAsShipping()
    {
        return $this->billingSameAsShipping;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer
     *
     * @param bool|null $billingSameAsShipping
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBillingSameAsShippingOrFail($billingSameAsShipping)
    {
        if ($billingSameAsShipping === null) {
            $this->throwNullValueException(static::BILLING_SAME_AS_SHIPPING);
        }

        return $this->setBillingSameAsShipping($billingSameAsShipping);
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getBillingSameAsShippingOrFail()
    {
        if ($this->billingSameAsShipping === null) {
            $this->throwNullValueException(static::BILLING_SAME_AS_SHIPPING);
        }

        return $this->billingSameAsShipping;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBillingSameAsShipping()
    {
        $this->assertPropertyIsSet(self::BILLING_SAME_AS_SHIPPING);

        return $this;
    }

    /**
     * @module CheckoutPage|CartCode|Checkout|DummyPayment|GiftCard|Nopayment|PaymentCartConnector|Payment|PaymentsRestApi|SalesPayment|Sales
     *
     * @deprecated Use payments property instead.
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
     * @module CheckoutPage|CartCode|Checkout|DummyPayment|GiftCard|Nopayment|PaymentCartConnector|Payment|PaymentsRestApi|SalesPayment|Sales
     *
     * @deprecated Use payments property instead.
     *
     * @return \Generated\Shared\Transfer\PaymentTransfer|null
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @module CheckoutPage|CartCode|Checkout|DummyPayment|GiftCard|Nopayment|PaymentCartConnector|Payment|PaymentsRestApi|SalesPayment|Sales
     *
     * @deprecated Use payments property instead.
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
     * @module CheckoutPage|CartCode|Checkout|DummyPayment|GiftCard|Nopayment|PaymentCartConnector|Payment|PaymentsRestApi|SalesPayment|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use payments property instead.
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
     * @module CheckoutPage|CartCode|Checkout|DummyPayment|GiftCard|Nopayment|PaymentCartConnector|Payment|PaymentsRestApi|SalesPayment|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use payments property instead.
     *
     * @return $this
     */
    public function requirePayment()
    {
        $this->assertPropertyIsSet(self::PAYMENT);

        return $this;
    }

    /**
     * @module CheckoutPage|GiftCard|Nopayment|Payment|SalesPayment
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
     * @module CheckoutPage|GiftCard|Nopayment|Payment|SalesPayment
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\PaymentTransfer>
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @module CheckoutPage|GiftCard|Nopayment|Payment|SalesPayment
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
     * @module CheckoutPage|GiftCard|Nopayment|Payment|SalesPayment
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
     * @module CheckoutPage|Checkout|DiscountCalculationConnector|Discount|Payment|Sales
     *
     * @param string|null $orderReference
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        $this->modifiedProperties[self::ORDER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Checkout|DiscountCalculationConnector|Discount|Payment|Sales
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @module CheckoutPage|Checkout|DiscountCalculationConnector|Discount|Payment|Sales
     *
     * @param string|null $orderReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderReferenceOrFail($orderReference)
    {
        if ($orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->setOrderReference($orderReference);
    }

    /**
     * @module CheckoutPage|Checkout|DiscountCalculationConnector|Discount|Payment|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderReferenceOrFail()
    {
        if ($this->orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->orderReference;
    }

    /**
     * @module CheckoutPage|Checkout|DiscountCalculationConnector|Discount|Payment|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderReference()
    {
        $this->assertPropertyIsSet(self::ORDER_REFERENCE);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|ProductBundleWidget|ProductBundleCartsRestApi|ProductBundleDiscountConnector|ProductBundle|ProductRelationStorage|ProductRelation|ShipmentsRestApi|Wishlist
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
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|ProductBundleWidget|ProductBundleCartsRestApi|ProductBundleDiscountConnector|ProductBundle|ProductRelationStorage|ProductRelation|ShipmentsRestApi|Wishlist
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ItemTransfer>
     */
    public function getBundleItems()
    {
        return $this->bundleItems;
    }

    /**
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|ProductBundleWidget|ProductBundleCartsRestApi|ProductBundleDiscountConnector|ProductBundle|ProductRelationStorage|ProductRelation|ShipmentsRestApi|Wishlist
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
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|ProductBundleWidget|ProductBundleCartsRestApi|ProductBundleDiscountConnector|ProductBundle|ProductRelationStorage|ProductRelation|ShipmentsRestApi|Wishlist
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
     * @module CheckoutPage|Calculation|Cart|Checkout|Discount|Payment|SalesOrderThreshold|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
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
     * @module CheckoutPage|Calculation|Cart|Checkout|Discount|Payment|SalesOrderThreshold|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ExpenseTransfer>
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    /**
     * @module CheckoutPage|Calculation|Cart|Checkout|Discount|Payment|SalesOrderThreshold|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
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
     * @module CheckoutPage|Calculation|Cart|Checkout|Discount|Payment|SalesOrderThreshold|ShipmentCartConnector|ShipmentDiscountConnector|Shipment|ShipmentsRestApi|Tax
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
     * @module CheckoutPage|CustomerPage|Customer
     *
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     *
     * @param bool|null $isAddressSavingSkipped
     *
     * @return $this
     */
    public function setIsAddressSavingSkipped($isAddressSavingSkipped)
    {
        $this->isAddressSavingSkipped = $isAddressSavingSkipped;
        $this->modifiedProperties[self::IS_ADDRESS_SAVING_SKIPPED] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Customer
     *
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     *
     * @return bool|null
     */
    public function getIsAddressSavingSkipped()
    {
        return $this->isAddressSavingSkipped;
    }

    /**
     * @module CheckoutPage|CustomerPage|Customer
     *
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     *
     * @param bool|null $isAddressSavingSkipped
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAddressSavingSkippedOrFail($isAddressSavingSkipped)
    {
        if ($isAddressSavingSkipped === null) {
            $this->throwNullValueException(static::IS_ADDRESS_SAVING_SKIPPED);
        }

        return $this->setIsAddressSavingSkipped($isAddressSavingSkipped);
    }

    /**
     * @module CheckoutPage|CustomerPage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     *
     * @return bool
     */
    public function getIsAddressSavingSkippedOrFail()
    {
        if ($this->isAddressSavingSkipped === null) {
            $this->throwNullValueException(static::IS_ADDRESS_SAVING_SKIPPED);
        }

        return $this->isAddressSavingSkipped;
    }

    /**
     * @module CheckoutPage|CustomerPage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use address transfer property (shippingAddress.isAddressSavingSkipped) instead.
     *
     * @return $this
     */
    public function requireIsAddressSavingSkipped()
    {
        $this->assertPropertyIsSet(self::IS_ADDRESS_SAVING_SKIPPED);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Discount|Payment|ProductOption|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Discount|Payment|ProductOption|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Discount|Payment|ProductOption|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Discount|Payment|ProductOption|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector|Tax
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
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Discount|Payment|ProductOption|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxProductConnector|Tax
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
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|CheckoutRestApi|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentGui|Shipment|ShipmentsRestApi
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
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Discount|DummyPayment|Payment|Sales|TaxApp
     *
     * @param \Generated\Shared\Transfer\AddressTransfer|null $billingAddress
     *
     * @return $this
     */
    public function setBillingAddress(AddressTransfer $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Discount|DummyPayment|Payment|Sales|TaxApp
     *
     * @return \Generated\Shared\Transfer\AddressTransfer|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Discount|DummyPayment|Payment|Sales|TaxApp
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $billingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBillingAddressOrFail(AddressTransfer $billingAddress)
    {
        return $this->setBillingAddress($billingAddress);
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Discount|DummyPayment|Payment|Sales|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AddressTransfer
     */
    public function getBillingAddressOrFail()
    {
        if ($this->billingAddress === null) {
            $this->throwNullValueException(static::BILLING_ADDRESS);
        }

        return $this->billingAddress;
    }

    /**
     * @module CheckoutPage|CustomerPage|Checkout|Customer|CustomersRestApi|Discount|DummyPayment|Payment|Sales|TaxApp
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
     * @module CheckoutPage
     *
     * @param bool|null $checkoutConfirmed
     *
     * @return $this
     */
    public function setCheckoutConfirmed($checkoutConfirmed)
    {
        $this->checkoutConfirmed = $checkoutConfirmed;
        $this->modifiedProperties[self::CHECKOUT_CONFIRMED] = true;

        return $this;
    }

    /**
     * @module CheckoutPage
     *
     * @return bool|null
     */
    public function getCheckoutConfirmed()
    {
        return $this->checkoutConfirmed;
    }

    /**
     * @module CheckoutPage
     *
     * @param bool|null $checkoutConfirmed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCheckoutConfirmedOrFail($checkoutConfirmed)
    {
        if ($checkoutConfirmed === null) {
            $this->throwNullValueException(static::CHECKOUT_CONFIRMED);
        }

        return $this->setCheckoutConfirmed($checkoutConfirmed);
    }

    /**
     * @module CheckoutPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getCheckoutConfirmedOrFail()
    {
        if ($this->checkoutConfirmed === null) {
            $this->throwNullValueException(static::CHECKOUT_CONFIRMED);
        }

        return $this->checkoutConfirmed;
    }

    /**
     * @module CheckoutPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCheckoutConfirmed()
    {
        $this->assertPropertyIsSet(self::CHECKOUT_CONFIRMED);

        return $this;
    }

    /**
     * @module CheckoutPage
     *
     * @param bool|null $acceptTermsAndConditions
     *
     * @return $this
     */
    public function setAcceptTermsAndConditions($acceptTermsAndConditions)
    {
        $this->acceptTermsAndConditions = $acceptTermsAndConditions;
        $this->modifiedProperties[self::ACCEPT_TERMS_AND_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage
     *
     * @return bool|null
     */
    public function getAcceptTermsAndConditions()
    {
        return $this->acceptTermsAndConditions;
    }

    /**
     * @module CheckoutPage
     *
     * @param bool|null $acceptTermsAndConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAcceptTermsAndConditionsOrFail($acceptTermsAndConditions)
    {
        if ($acceptTermsAndConditions === null) {
            $this->throwNullValueException(static::ACCEPT_TERMS_AND_CONDITIONS);
        }

        return $this->setAcceptTermsAndConditions($acceptTermsAndConditions);
    }

    /**
     * @module CheckoutPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAcceptTermsAndConditionsOrFail()
    {
        if ($this->acceptTermsAndConditions === null) {
            $this->throwNullValueException(static::ACCEPT_TERMS_AND_CONDITIONS);
        }

        return $this->acceptTermsAndConditions;
    }

    /**
     * @module CheckoutPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAcceptTermsAndConditions()
    {
        $this->assertPropertyIsSet(self::ACCEPT_TERMS_AND_CONDITIONS);

        return $this;
    }

    /**
     * @module CheckoutPage|Sales
     *
     * @param bool|null $isOrderPlacedSuccessfully
     *
     * @return $this
     */
    public function setIsOrderPlacedSuccessfully($isOrderPlacedSuccessfully)
    {
        $this->isOrderPlacedSuccessfully = $isOrderPlacedSuccessfully;
        $this->modifiedProperties[self::IS_ORDER_PLACED_SUCCESSFULLY] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|Sales
     *
     * @return bool|null
     */
    public function getIsOrderPlacedSuccessfully()
    {
        return $this->isOrderPlacedSuccessfully;
    }

    /**
     * @module CheckoutPage|Sales
     *
     * @param bool|null $isOrderPlacedSuccessfully
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsOrderPlacedSuccessfullyOrFail($isOrderPlacedSuccessfully)
    {
        if ($isOrderPlacedSuccessfully === null) {
            $this->throwNullValueException(static::IS_ORDER_PLACED_SUCCESSFULLY);
        }

        return $this->setIsOrderPlacedSuccessfully($isOrderPlacedSuccessfully);
    }

    /**
     * @module CheckoutPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsOrderPlacedSuccessfullyOrFail()
    {
        if ($this->isOrderPlacedSuccessfully === null) {
            $this->throwNullValueException(static::IS_ORDER_PLACED_SUCCESSFULLY);
        }

        return $this->isOrderPlacedSuccessfully;
    }

    /**
     * @module CheckoutPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsOrderPlacedSuccessfully()
    {
        $this->assertPropertyIsSet(self::IS_ORDER_PLACED_SUCCESSFULLY);

        return $this;
    }

    /**
     * @module CheckoutPage
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ErrorTransfer> $errors
     *
     * @return $this
     */
    public function setErrors(ArrayObject $errors)
    {
        $this->errors = $errors;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ErrorTransfer>
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @module CheckoutPage
     *
     * @param \Generated\Shared\Transfer\ErrorTransfer $error
     *
     * @return $this
     */
    public function addError(ErrorTransfer $error)
    {
        $this->errors[] = $error;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrors()
    {
        $this->assertCollectionPropertyIsSet(self::ERRORS);

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ShipmentTypeWidget|AvailabilityCartConnector|Availability|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|DiscountPromotion|Discount|GiftCardMailConnector|Payment|PaymentsRestApi|PersistentCart|PriceCartConnector|Price|ProductBundle|ProductCartConnector|ProductOption|ProductRelationStorage|Quote|SalesOrderThreshold|Sales|ShipmentTypeStorage|ShipmentType|Shipment|Store|TaxProductConnector
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
     * @module DateTimeConfiguratorPageExample|ShipmentTypeWidget|AvailabilityCartConnector|Availability|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|DiscountPromotion|Discount|GiftCardMailConnector|Payment|PaymentsRestApi|PersistentCart|PriceCartConnector|Price|ProductBundle|ProductCartConnector|ProductOption|ProductRelationStorage|Quote|SalesOrderThreshold|Sales|ShipmentTypeStorage|ShipmentType|Shipment|Store|TaxProductConnector
     *
     * @return \Generated\Shared\Transfer\StoreTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ShipmentTypeWidget|AvailabilityCartConnector|Availability|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|DiscountPromotion|Discount|GiftCardMailConnector|Payment|PaymentsRestApi|PersistentCart|PriceCartConnector|Price|ProductBundle|ProductCartConnector|ProductOption|ProductRelationStorage|Quote|SalesOrderThreshold|Sales|ShipmentTypeStorage|ShipmentType|Shipment|Store|TaxProductConnector
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
     * @module DateTimeConfiguratorPageExample|ShipmentTypeWidget|AvailabilityCartConnector|Availability|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|DiscountPromotion|Discount|GiftCardMailConnector|Payment|PaymentsRestApi|PersistentCart|PriceCartConnector|Price|ProductBundle|ProductCartConnector|ProductOption|ProductRelationStorage|Quote|SalesOrderThreshold|Sales|ShipmentTypeStorage|ShipmentType|Shipment|Store|TaxProductConnector
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
     * @module DateTimeConfiguratorPageExample|ShipmentTypeWidget|AvailabilityCartConnector|Availability|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|DiscountPromotion|Discount|GiftCardMailConnector|Payment|PaymentsRestApi|PersistentCart|PriceCartConnector|Price|ProductBundle|ProductCartConnector|ProductOption|ProductRelationStorage|Quote|SalesOrderThreshold|Sales|ShipmentTypeStorage|ShipmentType|Shipment|Store|TaxProductConnector
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
     * @module DiscountPromotionWidget|CartCodesRestApi|DiscountPromotion|DiscountPromotionsRestApi
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
     * @module DiscountPromotionWidget|CartCodesRestApi|DiscountPromotion|DiscountPromotionsRestApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\PromotionItemTransfer>
     */
    public function getPromotionItems()
    {
        return $this->promotionItems;
    }

    /**
     * @module DiscountPromotionWidget|CartCodesRestApi|DiscountPromotion|DiscountPromotionsRestApi
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
     * @module DiscountPromotionWidget|CartCodesRestApi|DiscountPromotion|DiscountPromotionsRestApi
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
     * @module DiscountWidget|Cart|Quote
     *
     * @param bool|null $isLocked
     *
     * @return $this
     */
    public function setIsLocked($isLocked)
    {
        $this->isLocked = $isLocked;
        $this->modifiedProperties[self::IS_LOCKED] = true;

        return $this;
    }

    /**
     * @module DiscountWidget|Cart|Quote
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->isLocked;
    }

    /**
     * @module DiscountWidget|Cart|Quote
     *
     * @param bool|null $isLocked
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsLockedOrFail($isLocked)
    {
        if ($isLocked === null) {
            $this->throwNullValueException(static::IS_LOCKED);
        }

        return $this->setIsLocked($isLocked);
    }

    /**
     * @module DiscountWidget|Cart|Quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsLockedOrFail()
    {
        if ($this->isLocked === null) {
            $this->throwNullValueException(static::IS_LOCKED);
        }

        return $this->isLocked;
    }

    /**
     * @module DiscountWidget|Cart|Quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsLocked()
    {
        $this->assertPropertyIsSet(self::IS_LOCKED);

        return $this;
    }

    /**
     * @module DiscountWidget|CartCodesRestApi|CartsRestApi|DiscountPromotion|Discount
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
     * @module DiscountWidget|CartCodesRestApi|CartsRestApi|DiscountPromotion|Discount
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DiscountTransfer>
     */
    public function getVoucherDiscounts()
    {
        return $this->voucherDiscounts;
    }

    /**
     * @module DiscountWidget|CartCodesRestApi|CartsRestApi|DiscountPromotion|Discount
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
     * @module DiscountWidget|CartCodesRestApi|CartsRestApi|DiscountPromotion|Discount
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
     * @module DiscountWidget|DiscountPromotion|Discount
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
     * @module DiscountWidget|DiscountPromotion|Discount
     *
     * @return array
     */
    public function getUsedNotAppliedVoucherCodes()
    {
        return $this->usedNotAppliedVoucherCodes;
    }

    /**
     * @module DiscountWidget|DiscountPromotion|Discount
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
     * @module DiscountWidget|DiscountPromotion|Discount
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
     * @module OrderCustomReferenceWidget|OrderCustomReference
     *
     * @param string|null $orderCustomReference
     *
     * @return $this
     */
    public function setOrderCustomReference($orderCustomReference)
    {
        $this->orderCustomReference = $orderCustomReference;
        $this->modifiedProperties[self::ORDER_CUSTOM_REFERENCE] = true;

        return $this;
    }

    /**
     * @module OrderCustomReferenceWidget|OrderCustomReference
     *
     * @return string|null
     */
    public function getOrderCustomReference()
    {
        return $this->orderCustomReference;
    }

    /**
     * @module OrderCustomReferenceWidget|OrderCustomReference
     *
     * @param string|null $orderCustomReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderCustomReferenceOrFail($orderCustomReference)
    {
        if ($orderCustomReference === null) {
            $this->throwNullValueException(static::ORDER_CUSTOM_REFERENCE);
        }

        return $this->setOrderCustomReference($orderCustomReference);
    }

    /**
     * @module OrderCustomReferenceWidget|OrderCustomReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderCustomReferenceOrFail()
    {
        if ($this->orderCustomReference === null) {
            $this->throwNullValueException(static::ORDER_CUSTOM_REFERENCE);
        }

        return $this->orderCustomReference;
    }

    /**
     * @module OrderCustomReferenceWidget|OrderCustomReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderCustomReference()
    {
        $this->assertPropertyIsSet(self::ORDER_CUSTOM_REFERENCE);

        return $this;
    }

    /**
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|GiftCardsRestApi|ProductBundleCartsRestApi|Quote|TaxApp|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|GiftCardsRestApi|ProductBundleCartsRestApi|Quote|TaxApp|UpSellingProductsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|GiftCardsRestApi|ProductBundleCartsRestApi|Quote|TaxApp|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|GiftCardsRestApi|ProductBundleCartsRestApi|Quote|TaxApp|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|GiftCardsRestApi|ProductBundleCartsRestApi|Quote|TaxApp|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|PersistentCart|Quote|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|PersistentCart|Quote|UpSellingProductsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|PersistentCart|Quote|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|PersistentCart|Quote|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|PersistentCart|Quote|UpSellingProductsRestApi
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
     * @module CartCodesRestApi|CartsRestApi|Discount
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
     * @module CartCodesRestApi|CartsRestApi|Discount
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DiscountTransfer>
     */
    public function getCartRuleDiscounts()
    {
        return $this->cartRuleDiscounts;
    }

    /**
     * @module CartCodesRestApi|CartsRestApi|Discount
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
     * @module CartCodesRestApi|CartsRestApi|Discount
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
     * @module CartNote
     *
     * @param string|null $cartNote
     *
     * @return $this
     */
    public function setCartNote($cartNote)
    {
        $this->cartNote = $cartNote;
        $this->modifiedProperties[self::CART_NOTE] = true;

        return $this;
    }

    /**
     * @module CartNote
     *
     * @return string|null
     */
    public function getCartNote()
    {
        return $this->cartNote;
    }

    /**
     * @module CartNote
     *
     * @param string|null $cartNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCartNoteOrFail($cartNote)
    {
        if ($cartNote === null) {
            $this->throwNullValueException(static::CART_NOTE);
        }

        return $this->setCartNote($cartNote);
    }

    /**
     * @module CartNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCartNoteOrFail()
    {
        if ($this->cartNote === null) {
            $this->throwNullValueException(static::CART_NOTE);
        }

        return $this->cartNote;
    }

    /**
     * @module CartNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCartNote()
    {
        $this->assertPropertyIsSet(self::CART_NOTE);

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @param int|null $companyUserId
     *
     * @return $this
     */
    public function setCompanyUserId($companyUserId)
    {
        $this->companyUserId = $companyUserId;
        $this->modifiedProperties[self::COMPANY_USER_ID] = true;

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @return int|null
     */
    public function getCompanyUserId()
    {
        return $this->companyUserId;
    }

    /**
     * @module CartsRestApi
     *
     * @param int|null $companyUserId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserIdOrFail($companyUserId)
    {
        if ($companyUserId === null) {
            $this->throwNullValueException(static::COMPANY_USER_ID);
        }

        return $this->setCompanyUserId($companyUserId);
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCompanyUserIdOrFail()
    {
        if ($this->companyUserId === null) {
            $this->throwNullValueException(static::COMPANY_USER_ID);
        }

        return $this->companyUserId;
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserId()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_ID);

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module CartsRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CartsRestApi
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module CartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module CheckoutRestApi|Shipment
     *
     * @param bool|null $skipRecalculation
     *
     * @return $this
     */
    public function setSkipRecalculation(?bool $skipRecalculation = null)
    {
        $this->skipRecalculation = $skipRecalculation;
        $this->modifiedProperties[self::SKIP_RECALCULATION] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|Shipment
     *
     * @return bool|null
     */
    public function getSkipRecalculation(): ?bool
    {
        return $this->skipRecalculation;
    }

    /**
     * @module CheckoutRestApi|Shipment
     *
     * @param bool $skipRecalculation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkipRecalculationOrFail(bool $skipRecalculation)
    {
        return $this->setSkipRecalculation($skipRecalculation);
    }

    /**
     * @module CheckoutRestApi|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getSkipRecalculationOrFail(): bool
    {
        if ($this->skipRecalculation === null) {
            $this->throwNullValueException(static::SKIP_RECALCULATION);
        }

        return $this->skipRecalculation;
    }

    /**
     * @module CheckoutRestApi|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSkipRecalculation()
    {
        $this->assertPropertyIsSet(self::SKIP_RECALCULATION);

        return $this;
    }

    /**
     * @module GiftCardMailConnector|GiftCard|GiftCardsRestApi
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
     * @module GiftCardMailConnector|GiftCard|GiftCardsRestApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\GiftCardTransfer>
     */
    public function getGiftCards()
    {
        return $this->giftCards;
    }

    /**
     * @module GiftCardMailConnector|GiftCard|GiftCardsRestApi
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
     * @module GiftCardMailConnector|GiftCard|GiftCardsRestApi
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
     * @module Payment|PaymentsRestApi
     *
     * @param array $preOrderPaymentData
     *
     * @return $this
     */
    public function setPreOrderPaymentData($preOrderPaymentData)
    {
        if ($preOrderPaymentData === null) {
            $preOrderPaymentData = [];
        }

        $this->preOrderPaymentData = $preOrderPaymentData;
        $this->modifiedProperties[self::PRE_ORDER_PAYMENT_DATA] = true;

        return $this;
    }

    /**
     * @module Payment|PaymentsRestApi
     *
     * @return array
     */
    public function getPreOrderPaymentData()
    {
        return $this->preOrderPaymentData;
    }

    /**
     * @module Payment|PaymentsRestApi
     *
     * @param string|int $preOrderPaymentDatumKey
     * @param mixed $preOrderPaymentDatumValue
     *
     * @return $this
     */
    public function addPreOrderPaymentDatum($preOrderPaymentDatumKey, $preOrderPaymentDatumValue)
    {
        $this->preOrderPaymentData[$preOrderPaymentDatumKey] = $preOrderPaymentDatumValue;
        $this->modifiedProperties[self::PRE_ORDER_PAYMENT_DATA] = true;

        return $this;
    }

    /**
     * @module Payment|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePreOrderPaymentData()
    {
        $this->assertPropertyIsSet(self::PRE_ORDER_PAYMENT_DATA);

        return $this;
    }

    /**
     * @module SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SalesOrderThresholdValueTransfer> $salesOrderThresholdValues
     *
     * @return $this
     */
    public function setSalesOrderThresholdValues(ArrayObject $salesOrderThresholdValues)
    {
        $this->salesOrderThresholdValues = $salesOrderThresholdValues;
        $this->modifiedProperties[self::SALES_ORDER_THRESHOLD_VALUES] = true;

        return $this;
    }

    /**
     * @module SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SalesOrderThresholdValueTransfer>
     */
    public function getSalesOrderThresholdValues()
    {
        return $this->salesOrderThresholdValues;
    }

    /**
     * @module SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @param \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer $salesOrderThresholdValue
     *
     * @return $this
     */
    public function addSalesOrderThresholdValue(SalesOrderThresholdValueTransfer $salesOrderThresholdValue)
    {
        $this->salesOrderThresholdValues[] = $salesOrderThresholdValue;
        $this->modifiedProperties[self::SALES_ORDER_THRESHOLD_VALUES] = true;

        return $this;
    }

    /**
     * @module SalesOrderThreshold|SalesOrderThresholdsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderThresholdValues()
    {
        $this->assertCollectionPropertyIsSet(self::SALES_ORDER_THRESHOLD_VALUES);

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
                case 'idQuote':
                case 'quoteRequestVersionReference':
                case 'priceMode':
                case 'hideTaxInCart':
                case 'taxVendor':
                case 'totalItemCount':
                case 'billingSameAsShipping':
                case 'orderReference':
                case 'isAddressSavingSkipped':
                case 'checkoutConfirmed':
                case 'acceptTermsAndConditions':
                case 'isOrderPlacedSuccessfully':
                case 'isLocked':
                case 'usedNotAppliedVoucherCodes':
                case 'orderCustomReference':
                case 'uuid':
                case 'customerReference':
                case 'cartNote':
                case 'companyUserId':
                case 'name':
                case 'skipRecalculation':
                case 'notApplicableGiftCardCodes':
                case 'preOrderPaymentData':
                case 'taxAppSaleHash':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'commentThread':
                case 'customer':
                case 'totals':
                case 'currency':
                case 'payment':
                case 'shippingAddress':
                case 'shipment':
                case 'billingAddress':
                case 'store':
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
                case 'quoteApprovals':
                case 'payments':
                case 'bundleItems':
                case 'expenses':
                case 'errors':
                case 'promotionItems':
                case 'voucherDiscounts':
                case 'cartRuleDiscounts':
                case 'giftCards':
                case 'salesOrderThresholdValues':
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
                case 'idQuote':
                case 'quoteRequestVersionReference':
                case 'priceMode':
                case 'hideTaxInCart':
                case 'taxVendor':
                case 'totalItemCount':
                case 'billingSameAsShipping':
                case 'orderReference':
                case 'isAddressSavingSkipped':
                case 'checkoutConfirmed':
                case 'acceptTermsAndConditions':
                case 'isOrderPlacedSuccessfully':
                case 'isLocked':
                case 'usedNotAppliedVoucherCodes':
                case 'orderCustomReference':
                case 'uuid':
                case 'customerReference':
                case 'cartNote':
                case 'companyUserId':
                case 'name':
                case 'skipRecalculation':
                case 'notApplicableGiftCardCodes':
                case 'preOrderPaymentData':
                case 'taxAppSaleHash':
                    $values[$arrayKey] = $value;

                    break;
                case 'commentThread':
                case 'customer':
                case 'totals':
                case 'currency':
                case 'payment':
                case 'shippingAddress':
                case 'shipment':
                case 'billingAddress':
                case 'store':
                case 'taxCalculationResponse':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'items':
                case 'quoteApprovals':
                case 'payments':
                case 'bundleItems':
                case 'expenses':
                case 'errors':
                case 'promotionItems':
                case 'voucherDiscounts':
                case 'cartRuleDiscounts':
                case 'giftCards':
                case 'salesOrderThresholdValues':
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
                case 'idQuote':
                case 'quoteRequestVersionReference':
                case 'priceMode':
                case 'hideTaxInCart':
                case 'taxVendor':
                case 'totalItemCount':
                case 'billingSameAsShipping':
                case 'orderReference':
                case 'isAddressSavingSkipped':
                case 'checkoutConfirmed':
                case 'acceptTermsAndConditions':
                case 'isOrderPlacedSuccessfully':
                case 'isLocked':
                case 'usedNotAppliedVoucherCodes':
                case 'orderCustomReference':
                case 'uuid':
                case 'customerReference':
                case 'cartNote':
                case 'companyUserId':
                case 'name':
                case 'skipRecalculation':
                case 'notApplicableGiftCardCodes':
                case 'preOrderPaymentData':
                case 'taxAppSaleHash':
                    $values[$arrayKey] = $value;

                    break;
                case 'commentThread':
                case 'customer':
                case 'totals':
                case 'currency':
                case 'payment':
                case 'shippingAddress':
                case 'shipment':
                case 'billingAddress':
                case 'store':
                case 'taxCalculationResponse':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'items':
                case 'quoteApprovals':
                case 'payments':
                case 'bundleItems':
                case 'expenses':
                case 'errors':
                case 'promotionItems':
                case 'voucherDiscounts':
                case 'cartRuleDiscounts':
                case 'giftCards':
                case 'salesOrderThresholdValues':
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
        $this->quoteApprovals = $this->quoteApprovals ?: new ArrayObject();
        $this->payments = $this->payments ?: new ArrayObject();
        $this->bundleItems = $this->bundleItems ?: new ArrayObject();
        $this->expenses = $this->expenses ?: new ArrayObject();
        $this->errors = $this->errors ?: new ArrayObject();
        $this->promotionItems = $this->promotionItems ?: new ArrayObject();
        $this->voucherDiscounts = $this->voucherDiscounts ?: new ArrayObject();
        $this->cartRuleDiscounts = $this->cartRuleDiscounts ?: new ArrayObject();
        $this->giftCards = $this->giftCards ?: new ArrayObject();
        $this->salesOrderThresholdValues = $this->salesOrderThresholdValues ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idQuote' => $this->idQuote,
            'quoteRequestVersionReference' => $this->quoteRequestVersionReference,
            'priceMode' => $this->priceMode,
            'hideTaxInCart' => $this->hideTaxInCart,
            'taxVendor' => $this->taxVendor,
            'totalItemCount' => $this->totalItemCount,
            'billingSameAsShipping' => $this->billingSameAsShipping,
            'orderReference' => $this->orderReference,
            'isAddressSavingSkipped' => $this->isAddressSavingSkipped,
            'checkoutConfirmed' => $this->checkoutConfirmed,
            'acceptTermsAndConditions' => $this->acceptTermsAndConditions,
            'isOrderPlacedSuccessfully' => $this->isOrderPlacedSuccessfully,
            'isLocked' => $this->isLocked,
            'usedNotAppliedVoucherCodes' => $this->usedNotAppliedVoucherCodes,
            'orderCustomReference' => $this->orderCustomReference,
            'uuid' => $this->uuid,
            'customerReference' => $this->customerReference,
            'cartNote' => $this->cartNote,
            'companyUserId' => $this->companyUserId,
            'name' => $this->name,
            'skipRecalculation' => $this->skipRecalculation,
            'notApplicableGiftCardCodes' => $this->notApplicableGiftCardCodes,
            'preOrderPaymentData' => $this->preOrderPaymentData,
            'taxAppSaleHash' => $this->taxAppSaleHash,
            'commentThread' => $this->commentThread,
            'customer' => $this->customer,
            'totals' => $this->totals,
            'currency' => $this->currency,
            'payment' => $this->payment,
            'shippingAddress' => $this->shippingAddress,
            'shipment' => $this->shipment,
            'billingAddress' => $this->billingAddress,
            'store' => $this->store,
            'taxCalculationResponse' => $this->taxCalculationResponse,
            'items' => $this->items,
            'quoteApprovals' => $this->quoteApprovals,
            'payments' => $this->payments,
            'bundleItems' => $this->bundleItems,
            'expenses' => $this->expenses,
            'errors' => $this->errors,
            'promotionItems' => $this->promotionItems,
            'voucherDiscounts' => $this->voucherDiscounts,
            'cartRuleDiscounts' => $this->cartRuleDiscounts,
            'giftCards' => $this->giftCards,
            'salesOrderThresholdValues' => $this->salesOrderThresholdValues,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote,
            'quote_request_version_reference' => $this->quoteRequestVersionReference,
            'price_mode' => $this->priceMode,
            'hide_tax_in_cart' => $this->hideTaxInCart,
            'tax_vendor' => $this->taxVendor,
            'total_item_count' => $this->totalItemCount,
            'billing_same_as_shipping' => $this->billingSameAsShipping,
            'order_reference' => $this->orderReference,
            'is_address_saving_skipped' => $this->isAddressSavingSkipped,
            'checkout_confirmed' => $this->checkoutConfirmed,
            'accept_terms_and_conditions' => $this->acceptTermsAndConditions,
            'is_order_placed_successfully' => $this->isOrderPlacedSuccessfully,
            'is_locked' => $this->isLocked,
            'used_not_applied_voucher_codes' => $this->usedNotAppliedVoucherCodes,
            'order_custom_reference' => $this->orderCustomReference,
            'uuid' => $this->uuid,
            'customer_reference' => $this->customerReference,
            'cart_note' => $this->cartNote,
            'company_user_id' => $this->companyUserId,
            'name' => $this->name,
            'skip_recalculation' => $this->skipRecalculation,
            'not_applicable_gift_card_codes' => $this->notApplicableGiftCardCodes,
            'pre_order_payment_data' => $this->preOrderPaymentData,
            'tax_app_sale_hash' => $this->taxAppSaleHash,
            'comment_thread' => $this->commentThread,
            'customer' => $this->customer,
            'totals' => $this->totals,
            'currency' => $this->currency,
            'payment' => $this->payment,
            'shipping_address' => $this->shippingAddress,
            'shipment' => $this->shipment,
            'billing_address' => $this->billingAddress,
            'store' => $this->store,
            'tax_calculation_response' => $this->taxCalculationResponse,
            'items' => $this->items,
            'quote_approvals' => $this->quoteApprovals,
            'payments' => $this->payments,
            'bundle_items' => $this->bundleItems,
            'expenses' => $this->expenses,
            'errors' => $this->errors,
            'promotion_items' => $this->promotionItems,
            'voucher_discounts' => $this->voucherDiscounts,
            'cart_rule_discounts' => $this->cartRuleDiscounts,
            'gift_cards' => $this->giftCards,
            'sales_order_threshold_values' => $this->salesOrderThresholdValues,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, false) : $this->idQuote,
            'quote_request_version_reference' => $this->quoteRequestVersionReference instanceof AbstractTransfer ? $this->quoteRequestVersionReference->toArray(true, false) : $this->quoteRequestVersionReference,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'hide_tax_in_cart' => $this->hideTaxInCart instanceof AbstractTransfer ? $this->hideTaxInCart->toArray(true, false) : $this->hideTaxInCart,
            'tax_vendor' => $this->taxVendor instanceof AbstractTransfer ? $this->taxVendor->toArray(true, false) : $this->taxVendor,
            'total_item_count' => $this->totalItemCount instanceof AbstractTransfer ? $this->totalItemCount->toArray(true, false) : $this->totalItemCount,
            'billing_same_as_shipping' => $this->billingSameAsShipping instanceof AbstractTransfer ? $this->billingSameAsShipping->toArray(true, false) : $this->billingSameAsShipping,
            'order_reference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, false) : $this->orderReference,
            'is_address_saving_skipped' => $this->isAddressSavingSkipped instanceof AbstractTransfer ? $this->isAddressSavingSkipped->toArray(true, false) : $this->isAddressSavingSkipped,
            'checkout_confirmed' => $this->checkoutConfirmed instanceof AbstractTransfer ? $this->checkoutConfirmed->toArray(true, false) : $this->checkoutConfirmed,
            'accept_terms_and_conditions' => $this->acceptTermsAndConditions instanceof AbstractTransfer ? $this->acceptTermsAndConditions->toArray(true, false) : $this->acceptTermsAndConditions,
            'is_order_placed_successfully' => $this->isOrderPlacedSuccessfully instanceof AbstractTransfer ? $this->isOrderPlacedSuccessfully->toArray(true, false) : $this->isOrderPlacedSuccessfully,
            'is_locked' => $this->isLocked instanceof AbstractTransfer ? $this->isLocked->toArray(true, false) : $this->isLocked,
            'used_not_applied_voucher_codes' => $this->usedNotAppliedVoucherCodes instanceof AbstractTransfer ? $this->usedNotAppliedVoucherCodes->toArray(true, false) : $this->usedNotAppliedVoucherCodes,
            'order_custom_reference' => $this->orderCustomReference instanceof AbstractTransfer ? $this->orderCustomReference->toArray(true, false) : $this->orderCustomReference,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'cart_note' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, false) : $this->cartNote,
            'company_user_id' => $this->companyUserId instanceof AbstractTransfer ? $this->companyUserId->toArray(true, false) : $this->companyUserId,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'skip_recalculation' => $this->skipRecalculation instanceof AbstractTransfer ? $this->skipRecalculation->toArray(true, false) : $this->skipRecalculation,
            'not_applicable_gift_card_codes' => $this->notApplicableGiftCardCodes instanceof AbstractTransfer ? $this->notApplicableGiftCardCodes->toArray(true, false) : $this->notApplicableGiftCardCodes,
            'pre_order_payment_data' => $this->preOrderPaymentData instanceof AbstractTransfer ? $this->preOrderPaymentData->toArray(true, false) : $this->preOrderPaymentData,
            'tax_app_sale_hash' => $this->taxAppSaleHash instanceof AbstractTransfer ? $this->taxAppSaleHash->toArray(true, false) : $this->taxAppSaleHash,
            'comment_thread' => $this->commentThread instanceof AbstractTransfer ? $this->commentThread->toArray(true, false) : $this->commentThread,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, false) : $this->totals,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'payment' => $this->payment instanceof AbstractTransfer ? $this->payment->toArray(true, false) : $this->payment,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, false) : $this->shipment,
            'billing_address' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, false) : $this->billingAddress,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'tax_calculation_response' => $this->taxCalculationResponse instanceof AbstractTransfer ? $this->taxCalculationResponse->toArray(true, false) : $this->taxCalculationResponse,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
            'quote_approvals' => $this->quoteApprovals instanceof AbstractTransfer ? $this->quoteApprovals->toArray(true, false) : $this->addValuesToCollection($this->quoteApprovals, true, false),
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, false) : $this->addValuesToCollection($this->payments, true, false),
            'bundle_items' => $this->bundleItems instanceof AbstractTransfer ? $this->bundleItems->toArray(true, false) : $this->addValuesToCollection($this->bundleItems, true, false),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, false) : $this->addValuesToCollection($this->expenses, true, false),
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, false) : $this->addValuesToCollection($this->errors, true, false),
            'promotion_items' => $this->promotionItems instanceof AbstractTransfer ? $this->promotionItems->toArray(true, false) : $this->addValuesToCollection($this->promotionItems, true, false),
            'voucher_discounts' => $this->voucherDiscounts instanceof AbstractTransfer ? $this->voucherDiscounts->toArray(true, false) : $this->addValuesToCollection($this->voucherDiscounts, true, false),
            'cart_rule_discounts' => $this->cartRuleDiscounts instanceof AbstractTransfer ? $this->cartRuleDiscounts->toArray(true, false) : $this->addValuesToCollection($this->cartRuleDiscounts, true, false),
            'gift_cards' => $this->giftCards instanceof AbstractTransfer ? $this->giftCards->toArray(true, false) : $this->addValuesToCollection($this->giftCards, true, false),
            'sales_order_threshold_values' => $this->salesOrderThresholdValues instanceof AbstractTransfer ? $this->salesOrderThresholdValues->toArray(true, false) : $this->addValuesToCollection($this->salesOrderThresholdValues, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, true) : $this->idQuote,
            'quoteRequestVersionReference' => $this->quoteRequestVersionReference instanceof AbstractTransfer ? $this->quoteRequestVersionReference->toArray(true, true) : $this->quoteRequestVersionReference,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'hideTaxInCart' => $this->hideTaxInCart instanceof AbstractTransfer ? $this->hideTaxInCart->toArray(true, true) : $this->hideTaxInCart,
            'taxVendor' => $this->taxVendor instanceof AbstractTransfer ? $this->taxVendor->toArray(true, true) : $this->taxVendor,
            'totalItemCount' => $this->totalItemCount instanceof AbstractTransfer ? $this->totalItemCount->toArray(true, true) : $this->totalItemCount,
            'billingSameAsShipping' => $this->billingSameAsShipping instanceof AbstractTransfer ? $this->billingSameAsShipping->toArray(true, true) : $this->billingSameAsShipping,
            'orderReference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, true) : $this->orderReference,
            'isAddressSavingSkipped' => $this->isAddressSavingSkipped instanceof AbstractTransfer ? $this->isAddressSavingSkipped->toArray(true, true) : $this->isAddressSavingSkipped,
            'checkoutConfirmed' => $this->checkoutConfirmed instanceof AbstractTransfer ? $this->checkoutConfirmed->toArray(true, true) : $this->checkoutConfirmed,
            'acceptTermsAndConditions' => $this->acceptTermsAndConditions instanceof AbstractTransfer ? $this->acceptTermsAndConditions->toArray(true, true) : $this->acceptTermsAndConditions,
            'isOrderPlacedSuccessfully' => $this->isOrderPlacedSuccessfully instanceof AbstractTransfer ? $this->isOrderPlacedSuccessfully->toArray(true, true) : $this->isOrderPlacedSuccessfully,
            'isLocked' => $this->isLocked instanceof AbstractTransfer ? $this->isLocked->toArray(true, true) : $this->isLocked,
            'usedNotAppliedVoucherCodes' => $this->usedNotAppliedVoucherCodes instanceof AbstractTransfer ? $this->usedNotAppliedVoucherCodes->toArray(true, true) : $this->usedNotAppliedVoucherCodes,
            'orderCustomReference' => $this->orderCustomReference instanceof AbstractTransfer ? $this->orderCustomReference->toArray(true, true) : $this->orderCustomReference,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'cartNote' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, true) : $this->cartNote,
            'companyUserId' => $this->companyUserId instanceof AbstractTransfer ? $this->companyUserId->toArray(true, true) : $this->companyUserId,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'skipRecalculation' => $this->skipRecalculation instanceof AbstractTransfer ? $this->skipRecalculation->toArray(true, true) : $this->skipRecalculation,
            'notApplicableGiftCardCodes' => $this->notApplicableGiftCardCodes instanceof AbstractTransfer ? $this->notApplicableGiftCardCodes->toArray(true, true) : $this->notApplicableGiftCardCodes,
            'preOrderPaymentData' => $this->preOrderPaymentData instanceof AbstractTransfer ? $this->preOrderPaymentData->toArray(true, true) : $this->preOrderPaymentData,
            'taxAppSaleHash' => $this->taxAppSaleHash instanceof AbstractTransfer ? $this->taxAppSaleHash->toArray(true, true) : $this->taxAppSaleHash,
            'commentThread' => $this->commentThread instanceof AbstractTransfer ? $this->commentThread->toArray(true, true) : $this->commentThread,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'totals' => $this->totals instanceof AbstractTransfer ? $this->totals->toArray(true, true) : $this->totals,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'payment' => $this->payment instanceof AbstractTransfer ? $this->payment->toArray(true, true) : $this->payment,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, true) : $this->shipment,
            'billingAddress' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, true) : $this->billingAddress,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'taxCalculationResponse' => $this->taxCalculationResponse instanceof AbstractTransfer ? $this->taxCalculationResponse->toArray(true, true) : $this->taxCalculationResponse,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
            'quoteApprovals' => $this->quoteApprovals instanceof AbstractTransfer ? $this->quoteApprovals->toArray(true, true) : $this->addValuesToCollection($this->quoteApprovals, true, true),
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, true) : $this->addValuesToCollection($this->payments, true, true),
            'bundleItems' => $this->bundleItems instanceof AbstractTransfer ? $this->bundleItems->toArray(true, true) : $this->addValuesToCollection($this->bundleItems, true, true),
            'expenses' => $this->expenses instanceof AbstractTransfer ? $this->expenses->toArray(true, true) : $this->addValuesToCollection($this->expenses, true, true),
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, true) : $this->addValuesToCollection($this->errors, true, true),
            'promotionItems' => $this->promotionItems instanceof AbstractTransfer ? $this->promotionItems->toArray(true, true) : $this->addValuesToCollection($this->promotionItems, true, true),
            'voucherDiscounts' => $this->voucherDiscounts instanceof AbstractTransfer ? $this->voucherDiscounts->toArray(true, true) : $this->addValuesToCollection($this->voucherDiscounts, true, true),
            'cartRuleDiscounts' => $this->cartRuleDiscounts instanceof AbstractTransfer ? $this->cartRuleDiscounts->toArray(true, true) : $this->addValuesToCollection($this->cartRuleDiscounts, true, true),
            'giftCards' => $this->giftCards instanceof AbstractTransfer ? $this->giftCards->toArray(true, true) : $this->addValuesToCollection($this->giftCards, true, true),
            'salesOrderThresholdValues' => $this->salesOrderThresholdValues instanceof AbstractTransfer ? $this->salesOrderThresholdValues->toArray(true, true) : $this->addValuesToCollection($this->salesOrderThresholdValues, true, true),
        ];
    }
}
