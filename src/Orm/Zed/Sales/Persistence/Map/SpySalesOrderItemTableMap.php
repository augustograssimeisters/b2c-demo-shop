<?php

namespace Orm\Zed\Sales\Persistence\Map;

use Orm\Zed\Sales\Persistence\SpySalesOrderItem;
use Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'spy_sales_order_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpySalesOrderItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.Sales.Persistence.Map.SpySalesOrderItemTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_sales_order_item';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpySalesOrderItem';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItem';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.Sales.Persistence.SpySalesOrderItem';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 34;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 34;

    /**
     * the column name for the id_sales_order_item field
     */
    public const COL_ID_SALES_ORDER_ITEM = 'spy_sales_order_item.id_sales_order_item';

    /**
     * the column name for the fk_oms_order_item_state field
     */
    public const COL_FK_OMS_ORDER_ITEM_STATE = 'spy_sales_order_item.fk_oms_order_item_state';

    /**
     * the column name for the fk_oms_order_process field
     */
    public const COL_FK_OMS_ORDER_PROCESS = 'spy_sales_order_item.fk_oms_order_process';

    /**
     * the column name for the fk_sales_order field
     */
    public const COL_FK_SALES_ORDER = 'spy_sales_order_item.fk_sales_order';

    /**
     * the column name for the fk_sales_order_item_bundle field
     */
    public const COL_FK_SALES_ORDER_ITEM_BUNDLE = 'spy_sales_order_item.fk_sales_order_item_bundle';

    /**
     * the column name for the fk_sales_shipment field
     */
    public const COL_FK_SALES_SHIPMENT = 'spy_sales_order_item.fk_sales_shipment';

    /**
     * the column name for the canceled_amount field
     */
    public const COL_CANCELED_AMOUNT = 'spy_sales_order_item.canceled_amount';

    /**
     * the column name for the cart_note field
     */
    public const COL_CART_NOTE = 'spy_sales_order_item.cart_note';

    /**
     * the column name for the discount_amount_aggregation field
     */
    public const COL_DISCOUNT_AMOUNT_AGGREGATION = 'spy_sales_order_item.discount_amount_aggregation';

    /**
     * the column name for the discount_amount_full_aggregation field
     */
    public const COL_DISCOUNT_AMOUNT_FULL_AGGREGATION = 'spy_sales_order_item.discount_amount_full_aggregation';

    /**
     * the column name for the expense_price_aggregation field
     */
    public const COL_EXPENSE_PRICE_AGGREGATION = 'spy_sales_order_item.expense_price_aggregation';

    /**
     * the column name for the gross_price field
     */
    public const COL_GROSS_PRICE = 'spy_sales_order_item.gross_price';

    /**
     * the column name for the group_key field
     */
    public const COL_GROUP_KEY = 'spy_sales_order_item.group_key';

    /**
     * the column name for the is_quantity_splittable field
     */
    public const COL_IS_QUANTITY_SPLITTABLE = 'spy_sales_order_item.is_quantity_splittable';

    /**
     * the column name for the last_state_change field
     */
    public const COL_LAST_STATE_CHANGE = 'spy_sales_order_item.last_state_change';

    /**
     * the column name for the name field
     */
    public const COL_NAME = 'spy_sales_order_item.name';

    /**
     * the column name for the net_price field
     */
    public const COL_NET_PRICE = 'spy_sales_order_item.net_price';

    /**
     * the column name for the order_item_reference field
     */
    public const COL_ORDER_ITEM_REFERENCE = 'spy_sales_order_item.order_item_reference';

    /**
     * the column name for the price field
     */
    public const COL_PRICE = 'spy_sales_order_item.price';

    /**
     * the column name for the price_to_pay_aggregation field
     */
    public const COL_PRICE_TO_PAY_AGGREGATION = 'spy_sales_order_item.price_to_pay_aggregation';

    /**
     * the column name for the product_option_price_aggregation field
     */
    public const COL_PRODUCT_OPTION_PRICE_AGGREGATION = 'spy_sales_order_item.product_option_price_aggregation';

    /**
     * the column name for the quantity field
     */
    public const COL_QUANTITY = 'spy_sales_order_item.quantity';

    /**
     * the column name for the refundable_amount field
     */
    public const COL_REFUNDABLE_AMOUNT = 'spy_sales_order_item.refundable_amount';

    /**
     * the column name for the remuneration_amount field
     */
    public const COL_REMUNERATION_AMOUNT = 'spy_sales_order_item.remuneration_amount';

    /**
     * the column name for the sku field
     */
    public const COL_SKU = 'spy_sales_order_item.sku';

    /**
     * the column name for the subtotal_aggregation field
     */
    public const COL_SUBTOTAL_AGGREGATION = 'spy_sales_order_item.subtotal_aggregation';

    /**
     * the column name for the tax_amount field
     */
    public const COL_TAX_AMOUNT = 'spy_sales_order_item.tax_amount';

    /**
     * the column name for the tax_amount_after_cancellation field
     */
    public const COL_TAX_AMOUNT_AFTER_CANCELLATION = 'spy_sales_order_item.tax_amount_after_cancellation';

    /**
     * the column name for the tax_amount_full_aggregation field
     */
    public const COL_TAX_AMOUNT_FULL_AGGREGATION = 'spy_sales_order_item.tax_amount_full_aggregation';

    /**
     * the column name for the tax_rate field
     */
    public const COL_TAX_RATE = 'spy_sales_order_item.tax_rate';

    /**
     * the column name for the tax_rate_average_aggregation field
     */
    public const COL_TAX_RATE_AVERAGE_AGGREGATION = 'spy_sales_order_item.tax_rate_average_aggregation';

    /**
     * the column name for the uuid field
     */
    public const COL_UUID = 'spy_sales_order_item.uuid';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_sales_order_item.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_sales_order_item.updated_at';

    /**
     * The default string format for model objects of the related table
     */
    public const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     *
     * @var array<string, mixed>
     */
    protected static $fieldNames = [
        self::TYPE_PHPNAME       => ['IdSalesOrderItem', 'FkOmsOrderItemState', 'FkOmsOrderProcess', 'FkSalesOrder', 'FkSalesOrderItemBundle', 'FkSalesShipment', 'CanceledAmount', 'CartNote', 'DiscountAmountAggregation', 'DiscountAmountFullAggregation', 'ExpensePriceAggregation', 'GrossPrice', 'GroupKey', 'IsQuantitySplittable', 'LastStateChange', 'Name', 'NetPrice', 'OrderItemReference', 'Price', 'PriceToPayAggregation', 'ProductOptionPriceAggregation', 'Quantity', 'RefundableAmount', 'RemunerationAmount', 'Sku', 'SubtotalAggregation', 'TaxAmount', 'TaxAmountAfterCancellation', 'TaxAmountFullAggregation', 'TaxRate', 'TaxRateAverageAggregation', 'Uuid', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idSalesOrderItem', 'fkOmsOrderItemState', 'fkOmsOrderProcess', 'fkSalesOrder', 'fkSalesOrderItemBundle', 'fkSalesShipment', 'canceledAmount', 'cartNote', 'discountAmountAggregation', 'discountAmountFullAggregation', 'expensePriceAggregation', 'grossPrice', 'groupKey', 'isQuantitySplittable', 'lastStateChange', 'name', 'netPrice', 'orderItemReference', 'price', 'priceToPayAggregation', 'productOptionPriceAggregation', 'quantity', 'refundableAmount', 'remunerationAmount', 'sku', 'subtotalAggregation', 'taxAmount', 'taxAmountAfterCancellation', 'taxAmountFullAggregation', 'taxRate', 'taxRateAverageAggregation', 'uuid', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM, SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_ITEM_STATE, SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_PROCESS, SpySalesOrderItemTableMap::COL_FK_SALES_ORDER, SpySalesOrderItemTableMap::COL_FK_SALES_ORDER_ITEM_BUNDLE, SpySalesOrderItemTableMap::COL_FK_SALES_SHIPMENT, SpySalesOrderItemTableMap::COL_CANCELED_AMOUNT, SpySalesOrderItemTableMap::COL_CART_NOTE, SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION, SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_FULL_AGGREGATION, SpySalesOrderItemTableMap::COL_EXPENSE_PRICE_AGGREGATION, SpySalesOrderItemTableMap::COL_GROSS_PRICE, SpySalesOrderItemTableMap::COL_GROUP_KEY, SpySalesOrderItemTableMap::COL_IS_QUANTITY_SPLITTABLE, SpySalesOrderItemTableMap::COL_LAST_STATE_CHANGE, SpySalesOrderItemTableMap::COL_NAME, SpySalesOrderItemTableMap::COL_NET_PRICE, SpySalesOrderItemTableMap::COL_ORDER_ITEM_REFERENCE, SpySalesOrderItemTableMap::COL_PRICE, SpySalesOrderItemTableMap::COL_PRICE_TO_PAY_AGGREGATION, SpySalesOrderItemTableMap::COL_PRODUCT_OPTION_PRICE_AGGREGATION, SpySalesOrderItemTableMap::COL_QUANTITY, SpySalesOrderItemTableMap::COL_REFUNDABLE_AMOUNT, SpySalesOrderItemTableMap::COL_REMUNERATION_AMOUNT, SpySalesOrderItemTableMap::COL_SKU, SpySalesOrderItemTableMap::COL_SUBTOTAL_AGGREGATION, SpySalesOrderItemTableMap::COL_TAX_AMOUNT, SpySalesOrderItemTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION, SpySalesOrderItemTableMap::COL_TAX_AMOUNT_FULL_AGGREGATION, SpySalesOrderItemTableMap::COL_TAX_RATE, SpySalesOrderItemTableMap::COL_TAX_RATE_AVERAGE_AGGREGATION, SpySalesOrderItemTableMap::COL_UUID, SpySalesOrderItemTableMap::COL_CREATED_AT, SpySalesOrderItemTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_sales_order_item', 'fk_oms_order_item_state', 'fk_oms_order_process', 'fk_sales_order', 'fk_sales_order_item_bundle', 'fk_sales_shipment', 'canceled_amount', 'cart_note', 'discount_amount_aggregation', 'discount_amount_full_aggregation', 'expense_price_aggregation', 'gross_price', 'group_key', 'is_quantity_splittable', 'last_state_change', 'name', 'net_price', 'order_item_reference', 'price', 'price_to_pay_aggregation', 'product_option_price_aggregation', 'quantity', 'refundable_amount', 'remuneration_amount', 'sku', 'subtotal_aggregation', 'tax_amount', 'tax_amount_after_cancellation', 'tax_amount_full_aggregation', 'tax_rate', 'tax_rate_average_aggregation', 'uuid', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, ]
    ];

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     *
     * @var array<string, mixed>
     */
    protected static $fieldKeys = [
        self::TYPE_PHPNAME       => ['IdSalesOrderItem' => 0, 'FkOmsOrderItemState' => 1, 'FkOmsOrderProcess' => 2, 'FkSalesOrder' => 3, 'FkSalesOrderItemBundle' => 4, 'FkSalesShipment' => 5, 'CanceledAmount' => 6, 'CartNote' => 7, 'DiscountAmountAggregation' => 8, 'DiscountAmountFullAggregation' => 9, 'ExpensePriceAggregation' => 10, 'GrossPrice' => 11, 'GroupKey' => 12, 'IsQuantitySplittable' => 13, 'LastStateChange' => 14, 'Name' => 15, 'NetPrice' => 16, 'OrderItemReference' => 17, 'Price' => 18, 'PriceToPayAggregation' => 19, 'ProductOptionPriceAggregation' => 20, 'Quantity' => 21, 'RefundableAmount' => 22, 'RemunerationAmount' => 23, 'Sku' => 24, 'SubtotalAggregation' => 25, 'TaxAmount' => 26, 'TaxAmountAfterCancellation' => 27, 'TaxAmountFullAggregation' => 28, 'TaxRate' => 29, 'TaxRateAverageAggregation' => 30, 'Uuid' => 31, 'CreatedAt' => 32, 'UpdatedAt' => 33, ],
        self::TYPE_CAMELNAME     => ['idSalesOrderItem' => 0, 'fkOmsOrderItemState' => 1, 'fkOmsOrderProcess' => 2, 'fkSalesOrder' => 3, 'fkSalesOrderItemBundle' => 4, 'fkSalesShipment' => 5, 'canceledAmount' => 6, 'cartNote' => 7, 'discountAmountAggregation' => 8, 'discountAmountFullAggregation' => 9, 'expensePriceAggregation' => 10, 'grossPrice' => 11, 'groupKey' => 12, 'isQuantitySplittable' => 13, 'lastStateChange' => 14, 'name' => 15, 'netPrice' => 16, 'orderItemReference' => 17, 'price' => 18, 'priceToPayAggregation' => 19, 'productOptionPriceAggregation' => 20, 'quantity' => 21, 'refundableAmount' => 22, 'remunerationAmount' => 23, 'sku' => 24, 'subtotalAggregation' => 25, 'taxAmount' => 26, 'taxAmountAfterCancellation' => 27, 'taxAmountFullAggregation' => 28, 'taxRate' => 29, 'taxRateAverageAggregation' => 30, 'uuid' => 31, 'createdAt' => 32, 'updatedAt' => 33, ],
        self::TYPE_COLNAME       => [SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM => 0, SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_ITEM_STATE => 1, SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_PROCESS => 2, SpySalesOrderItemTableMap::COL_FK_SALES_ORDER => 3, SpySalesOrderItemTableMap::COL_FK_SALES_ORDER_ITEM_BUNDLE => 4, SpySalesOrderItemTableMap::COL_FK_SALES_SHIPMENT => 5, SpySalesOrderItemTableMap::COL_CANCELED_AMOUNT => 6, SpySalesOrderItemTableMap::COL_CART_NOTE => 7, SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION => 8, SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_FULL_AGGREGATION => 9, SpySalesOrderItemTableMap::COL_EXPENSE_PRICE_AGGREGATION => 10, SpySalesOrderItemTableMap::COL_GROSS_PRICE => 11, SpySalesOrderItemTableMap::COL_GROUP_KEY => 12, SpySalesOrderItemTableMap::COL_IS_QUANTITY_SPLITTABLE => 13, SpySalesOrderItemTableMap::COL_LAST_STATE_CHANGE => 14, SpySalesOrderItemTableMap::COL_NAME => 15, SpySalesOrderItemTableMap::COL_NET_PRICE => 16, SpySalesOrderItemTableMap::COL_ORDER_ITEM_REFERENCE => 17, SpySalesOrderItemTableMap::COL_PRICE => 18, SpySalesOrderItemTableMap::COL_PRICE_TO_PAY_AGGREGATION => 19, SpySalesOrderItemTableMap::COL_PRODUCT_OPTION_PRICE_AGGREGATION => 20, SpySalesOrderItemTableMap::COL_QUANTITY => 21, SpySalesOrderItemTableMap::COL_REFUNDABLE_AMOUNT => 22, SpySalesOrderItemTableMap::COL_REMUNERATION_AMOUNT => 23, SpySalesOrderItemTableMap::COL_SKU => 24, SpySalesOrderItemTableMap::COL_SUBTOTAL_AGGREGATION => 25, SpySalesOrderItemTableMap::COL_TAX_AMOUNT => 26, SpySalesOrderItemTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION => 27, SpySalesOrderItemTableMap::COL_TAX_AMOUNT_FULL_AGGREGATION => 28, SpySalesOrderItemTableMap::COL_TAX_RATE => 29, SpySalesOrderItemTableMap::COL_TAX_RATE_AVERAGE_AGGREGATION => 30, SpySalesOrderItemTableMap::COL_UUID => 31, SpySalesOrderItemTableMap::COL_CREATED_AT => 32, SpySalesOrderItemTableMap::COL_UPDATED_AT => 33, ],
        self::TYPE_FIELDNAME     => ['id_sales_order_item' => 0, 'fk_oms_order_item_state' => 1, 'fk_oms_order_process' => 2, 'fk_sales_order' => 3, 'fk_sales_order_item_bundle' => 4, 'fk_sales_shipment' => 5, 'canceled_amount' => 6, 'cart_note' => 7, 'discount_amount_aggregation' => 8, 'discount_amount_full_aggregation' => 9, 'expense_price_aggregation' => 10, 'gross_price' => 11, 'group_key' => 12, 'is_quantity_splittable' => 13, 'last_state_change' => 14, 'name' => 15, 'net_price' => 16, 'order_item_reference' => 17, 'price' => 18, 'price_to_pay_aggregation' => 19, 'product_option_price_aggregation' => 20, 'quantity' => 21, 'refundable_amount' => 22, 'remuneration_amount' => 23, 'sku' => 24, 'subtotal_aggregation' => 25, 'tax_amount' => 26, 'tax_amount_after_cancellation' => 27, 'tax_amount_full_aggregation' => 28, 'tax_rate' => 29, 'tax_rate_average_aggregation' => 30, 'uuid' => 31, 'created_at' => 32, 'updated_at' => 33, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdSalesOrderItem' => 'ID_SALES_ORDER_ITEM',
        'SpySalesOrderItem.IdSalesOrderItem' => 'ID_SALES_ORDER_ITEM',
        'idSalesOrderItem' => 'ID_SALES_ORDER_ITEM',
        'spySalesOrderItem.idSalesOrderItem' => 'ID_SALES_ORDER_ITEM',
        'SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM' => 'ID_SALES_ORDER_ITEM',
        'COL_ID_SALES_ORDER_ITEM' => 'ID_SALES_ORDER_ITEM',
        'id_sales_order_item' => 'ID_SALES_ORDER_ITEM',
        'spy_sales_order_item.id_sales_order_item' => 'ID_SALES_ORDER_ITEM',
        'FkOmsOrderItemState' => 'FK_OMS_ORDER_ITEM_STATE',
        'SpySalesOrderItem.FkOmsOrderItemState' => 'FK_OMS_ORDER_ITEM_STATE',
        'fkOmsOrderItemState' => 'FK_OMS_ORDER_ITEM_STATE',
        'spySalesOrderItem.fkOmsOrderItemState' => 'FK_OMS_ORDER_ITEM_STATE',
        'SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_ITEM_STATE' => 'FK_OMS_ORDER_ITEM_STATE',
        'COL_FK_OMS_ORDER_ITEM_STATE' => 'FK_OMS_ORDER_ITEM_STATE',
        'fk_oms_order_item_state' => 'FK_OMS_ORDER_ITEM_STATE',
        'spy_sales_order_item.fk_oms_order_item_state' => 'FK_OMS_ORDER_ITEM_STATE',
        'FkOmsOrderProcess' => 'FK_OMS_ORDER_PROCESS',
        'SpySalesOrderItem.FkOmsOrderProcess' => 'FK_OMS_ORDER_PROCESS',
        'fkOmsOrderProcess' => 'FK_OMS_ORDER_PROCESS',
        'spySalesOrderItem.fkOmsOrderProcess' => 'FK_OMS_ORDER_PROCESS',
        'SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_PROCESS' => 'FK_OMS_ORDER_PROCESS',
        'COL_FK_OMS_ORDER_PROCESS' => 'FK_OMS_ORDER_PROCESS',
        'fk_oms_order_process' => 'FK_OMS_ORDER_PROCESS',
        'spy_sales_order_item.fk_oms_order_process' => 'FK_OMS_ORDER_PROCESS',
        'FkSalesOrder' => 'FK_SALES_ORDER',
        'SpySalesOrderItem.FkSalesOrder' => 'FK_SALES_ORDER',
        'fkSalesOrder' => 'FK_SALES_ORDER',
        'spySalesOrderItem.fkSalesOrder' => 'FK_SALES_ORDER',
        'SpySalesOrderItemTableMap::COL_FK_SALES_ORDER' => 'FK_SALES_ORDER',
        'COL_FK_SALES_ORDER' => 'FK_SALES_ORDER',
        'fk_sales_order' => 'FK_SALES_ORDER',
        'spy_sales_order_item.fk_sales_order' => 'FK_SALES_ORDER',
        'FkSalesOrderItemBundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'SpySalesOrderItem.FkSalesOrderItemBundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'fkSalesOrderItemBundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'spySalesOrderItem.fkSalesOrderItemBundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'SpySalesOrderItemTableMap::COL_FK_SALES_ORDER_ITEM_BUNDLE' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'COL_FK_SALES_ORDER_ITEM_BUNDLE' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'fk_sales_order_item_bundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'spy_sales_order_item.fk_sales_order_item_bundle' => 'FK_SALES_ORDER_ITEM_BUNDLE',
        'FkSalesShipment' => 'FK_SALES_SHIPMENT',
        'SpySalesOrderItem.FkSalesShipment' => 'FK_SALES_SHIPMENT',
        'fkSalesShipment' => 'FK_SALES_SHIPMENT',
        'spySalesOrderItem.fkSalesShipment' => 'FK_SALES_SHIPMENT',
        'SpySalesOrderItemTableMap::COL_FK_SALES_SHIPMENT' => 'FK_SALES_SHIPMENT',
        'COL_FK_SALES_SHIPMENT' => 'FK_SALES_SHIPMENT',
        'fk_sales_shipment' => 'FK_SALES_SHIPMENT',
        'spy_sales_order_item.fk_sales_shipment' => 'FK_SALES_SHIPMENT',
        'CanceledAmount' => 'CANCELED_AMOUNT',
        'SpySalesOrderItem.CanceledAmount' => 'CANCELED_AMOUNT',
        'canceledAmount' => 'CANCELED_AMOUNT',
        'spySalesOrderItem.canceledAmount' => 'CANCELED_AMOUNT',
        'SpySalesOrderItemTableMap::COL_CANCELED_AMOUNT' => 'CANCELED_AMOUNT',
        'COL_CANCELED_AMOUNT' => 'CANCELED_AMOUNT',
        'canceled_amount' => 'CANCELED_AMOUNT',
        'spy_sales_order_item.canceled_amount' => 'CANCELED_AMOUNT',
        'CartNote' => 'CART_NOTE',
        'SpySalesOrderItem.CartNote' => 'CART_NOTE',
        'cartNote' => 'CART_NOTE',
        'spySalesOrderItem.cartNote' => 'CART_NOTE',
        'SpySalesOrderItemTableMap::COL_CART_NOTE' => 'CART_NOTE',
        'COL_CART_NOTE' => 'CART_NOTE',
        'cart_note' => 'CART_NOTE',
        'spy_sales_order_item.cart_note' => 'CART_NOTE',
        'DiscountAmountAggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'SpySalesOrderItem.DiscountAmountAggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'discountAmountAggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'spySalesOrderItem.discountAmountAggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'COL_DISCOUNT_AMOUNT_AGGREGATION' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'discount_amount_aggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'spy_sales_order_item.discount_amount_aggregation' => 'DISCOUNT_AMOUNT_AGGREGATION',
        'DiscountAmountFullAggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'SpySalesOrderItem.DiscountAmountFullAggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'discountAmountFullAggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'spySalesOrderItem.discountAmountFullAggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_FULL_AGGREGATION' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'COL_DISCOUNT_AMOUNT_FULL_AGGREGATION' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'discount_amount_full_aggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'spy_sales_order_item.discount_amount_full_aggregation' => 'DISCOUNT_AMOUNT_FULL_AGGREGATION',
        'ExpensePriceAggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'SpySalesOrderItem.ExpensePriceAggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'expensePriceAggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'spySalesOrderItem.expensePriceAggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_EXPENSE_PRICE_AGGREGATION' => 'EXPENSE_PRICE_AGGREGATION',
        'COL_EXPENSE_PRICE_AGGREGATION' => 'EXPENSE_PRICE_AGGREGATION',
        'expense_price_aggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'spy_sales_order_item.expense_price_aggregation' => 'EXPENSE_PRICE_AGGREGATION',
        'GrossPrice' => 'GROSS_PRICE',
        'SpySalesOrderItem.GrossPrice' => 'GROSS_PRICE',
        'grossPrice' => 'GROSS_PRICE',
        'spySalesOrderItem.grossPrice' => 'GROSS_PRICE',
        'SpySalesOrderItemTableMap::COL_GROSS_PRICE' => 'GROSS_PRICE',
        'COL_GROSS_PRICE' => 'GROSS_PRICE',
        'gross_price' => 'GROSS_PRICE',
        'spy_sales_order_item.gross_price' => 'GROSS_PRICE',
        'GroupKey' => 'GROUP_KEY',
        'SpySalesOrderItem.GroupKey' => 'GROUP_KEY',
        'groupKey' => 'GROUP_KEY',
        'spySalesOrderItem.groupKey' => 'GROUP_KEY',
        'SpySalesOrderItemTableMap::COL_GROUP_KEY' => 'GROUP_KEY',
        'COL_GROUP_KEY' => 'GROUP_KEY',
        'group_key' => 'GROUP_KEY',
        'spy_sales_order_item.group_key' => 'GROUP_KEY',
        'IsQuantitySplittable' => 'IS_QUANTITY_SPLITTABLE',
        'SpySalesOrderItem.IsQuantitySplittable' => 'IS_QUANTITY_SPLITTABLE',
        'isQuantitySplittable' => 'IS_QUANTITY_SPLITTABLE',
        'spySalesOrderItem.isQuantitySplittable' => 'IS_QUANTITY_SPLITTABLE',
        'SpySalesOrderItemTableMap::COL_IS_QUANTITY_SPLITTABLE' => 'IS_QUANTITY_SPLITTABLE',
        'COL_IS_QUANTITY_SPLITTABLE' => 'IS_QUANTITY_SPLITTABLE',
        'is_quantity_splittable' => 'IS_QUANTITY_SPLITTABLE',
        'spy_sales_order_item.is_quantity_splittable' => 'IS_QUANTITY_SPLITTABLE',
        'LastStateChange' => 'LAST_STATE_CHANGE',
        'SpySalesOrderItem.LastStateChange' => 'LAST_STATE_CHANGE',
        'lastStateChange' => 'LAST_STATE_CHANGE',
        'spySalesOrderItem.lastStateChange' => 'LAST_STATE_CHANGE',
        'SpySalesOrderItemTableMap::COL_LAST_STATE_CHANGE' => 'LAST_STATE_CHANGE',
        'COL_LAST_STATE_CHANGE' => 'LAST_STATE_CHANGE',
        'last_state_change' => 'LAST_STATE_CHANGE',
        'spy_sales_order_item.last_state_change' => 'LAST_STATE_CHANGE',
        'Name' => 'NAME',
        'SpySalesOrderItem.Name' => 'NAME',
        'name' => 'NAME',
        'spySalesOrderItem.name' => 'NAME',
        'SpySalesOrderItemTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_sales_order_item.name' => 'NAME',
        'NetPrice' => 'NET_PRICE',
        'SpySalesOrderItem.NetPrice' => 'NET_PRICE',
        'netPrice' => 'NET_PRICE',
        'spySalesOrderItem.netPrice' => 'NET_PRICE',
        'SpySalesOrderItemTableMap::COL_NET_PRICE' => 'NET_PRICE',
        'COL_NET_PRICE' => 'NET_PRICE',
        'net_price' => 'NET_PRICE',
        'spy_sales_order_item.net_price' => 'NET_PRICE',
        'OrderItemReference' => 'ORDER_ITEM_REFERENCE',
        'SpySalesOrderItem.OrderItemReference' => 'ORDER_ITEM_REFERENCE',
        'orderItemReference' => 'ORDER_ITEM_REFERENCE',
        'spySalesOrderItem.orderItemReference' => 'ORDER_ITEM_REFERENCE',
        'SpySalesOrderItemTableMap::COL_ORDER_ITEM_REFERENCE' => 'ORDER_ITEM_REFERENCE',
        'COL_ORDER_ITEM_REFERENCE' => 'ORDER_ITEM_REFERENCE',
        'order_item_reference' => 'ORDER_ITEM_REFERENCE',
        'spy_sales_order_item.order_item_reference' => 'ORDER_ITEM_REFERENCE',
        'Price' => 'PRICE',
        'SpySalesOrderItem.Price' => 'PRICE',
        'price' => 'PRICE',
        'spySalesOrderItem.price' => 'PRICE',
        'SpySalesOrderItemTableMap::COL_PRICE' => 'PRICE',
        'COL_PRICE' => 'PRICE',
        'spy_sales_order_item.price' => 'PRICE',
        'PriceToPayAggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'SpySalesOrderItem.PriceToPayAggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'priceToPayAggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'spySalesOrderItem.priceToPayAggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_PRICE_TO_PAY_AGGREGATION' => 'PRICE_TO_PAY_AGGREGATION',
        'COL_PRICE_TO_PAY_AGGREGATION' => 'PRICE_TO_PAY_AGGREGATION',
        'price_to_pay_aggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'spy_sales_order_item.price_to_pay_aggregation' => 'PRICE_TO_PAY_AGGREGATION',
        'ProductOptionPriceAggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'SpySalesOrderItem.ProductOptionPriceAggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'productOptionPriceAggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'spySalesOrderItem.productOptionPriceAggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_PRODUCT_OPTION_PRICE_AGGREGATION' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'COL_PRODUCT_OPTION_PRICE_AGGREGATION' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'product_option_price_aggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'spy_sales_order_item.product_option_price_aggregation' => 'PRODUCT_OPTION_PRICE_AGGREGATION',
        'Quantity' => 'QUANTITY',
        'SpySalesOrderItem.Quantity' => 'QUANTITY',
        'quantity' => 'QUANTITY',
        'spySalesOrderItem.quantity' => 'QUANTITY',
        'SpySalesOrderItemTableMap::COL_QUANTITY' => 'QUANTITY',
        'COL_QUANTITY' => 'QUANTITY',
        'spy_sales_order_item.quantity' => 'QUANTITY',
        'RefundableAmount' => 'REFUNDABLE_AMOUNT',
        'SpySalesOrderItem.RefundableAmount' => 'REFUNDABLE_AMOUNT',
        'refundableAmount' => 'REFUNDABLE_AMOUNT',
        'spySalesOrderItem.refundableAmount' => 'REFUNDABLE_AMOUNT',
        'SpySalesOrderItemTableMap::COL_REFUNDABLE_AMOUNT' => 'REFUNDABLE_AMOUNT',
        'COL_REFUNDABLE_AMOUNT' => 'REFUNDABLE_AMOUNT',
        'refundable_amount' => 'REFUNDABLE_AMOUNT',
        'spy_sales_order_item.refundable_amount' => 'REFUNDABLE_AMOUNT',
        'RemunerationAmount' => 'REMUNERATION_AMOUNT',
        'SpySalesOrderItem.RemunerationAmount' => 'REMUNERATION_AMOUNT',
        'remunerationAmount' => 'REMUNERATION_AMOUNT',
        'spySalesOrderItem.remunerationAmount' => 'REMUNERATION_AMOUNT',
        'SpySalesOrderItemTableMap::COL_REMUNERATION_AMOUNT' => 'REMUNERATION_AMOUNT',
        'COL_REMUNERATION_AMOUNT' => 'REMUNERATION_AMOUNT',
        'remuneration_amount' => 'REMUNERATION_AMOUNT',
        'spy_sales_order_item.remuneration_amount' => 'REMUNERATION_AMOUNT',
        'Sku' => 'SKU',
        'SpySalesOrderItem.Sku' => 'SKU',
        'sku' => 'SKU',
        'spySalesOrderItem.sku' => 'SKU',
        'SpySalesOrderItemTableMap::COL_SKU' => 'SKU',
        'COL_SKU' => 'SKU',
        'spy_sales_order_item.sku' => 'SKU',
        'SubtotalAggregation' => 'SUBTOTAL_AGGREGATION',
        'SpySalesOrderItem.SubtotalAggregation' => 'SUBTOTAL_AGGREGATION',
        'subtotalAggregation' => 'SUBTOTAL_AGGREGATION',
        'spySalesOrderItem.subtotalAggregation' => 'SUBTOTAL_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_SUBTOTAL_AGGREGATION' => 'SUBTOTAL_AGGREGATION',
        'COL_SUBTOTAL_AGGREGATION' => 'SUBTOTAL_AGGREGATION',
        'subtotal_aggregation' => 'SUBTOTAL_AGGREGATION',
        'spy_sales_order_item.subtotal_aggregation' => 'SUBTOTAL_AGGREGATION',
        'TaxAmount' => 'TAX_AMOUNT',
        'SpySalesOrderItem.TaxAmount' => 'TAX_AMOUNT',
        'taxAmount' => 'TAX_AMOUNT',
        'spySalesOrderItem.taxAmount' => 'TAX_AMOUNT',
        'SpySalesOrderItemTableMap::COL_TAX_AMOUNT' => 'TAX_AMOUNT',
        'COL_TAX_AMOUNT' => 'TAX_AMOUNT',
        'tax_amount' => 'TAX_AMOUNT',
        'spy_sales_order_item.tax_amount' => 'TAX_AMOUNT',
        'TaxAmountAfterCancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'SpySalesOrderItem.TaxAmountAfterCancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'taxAmountAfterCancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'spySalesOrderItem.taxAmountAfterCancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'SpySalesOrderItemTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'COL_TAX_AMOUNT_AFTER_CANCELLATION' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'tax_amount_after_cancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'spy_sales_order_item.tax_amount_after_cancellation' => 'TAX_AMOUNT_AFTER_CANCELLATION',
        'TaxAmountFullAggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'SpySalesOrderItem.TaxAmountFullAggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'taxAmountFullAggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'spySalesOrderItem.taxAmountFullAggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_TAX_AMOUNT_FULL_AGGREGATION' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'COL_TAX_AMOUNT_FULL_AGGREGATION' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'tax_amount_full_aggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'spy_sales_order_item.tax_amount_full_aggregation' => 'TAX_AMOUNT_FULL_AGGREGATION',
        'TaxRate' => 'TAX_RATE',
        'SpySalesOrderItem.TaxRate' => 'TAX_RATE',
        'taxRate' => 'TAX_RATE',
        'spySalesOrderItem.taxRate' => 'TAX_RATE',
        'SpySalesOrderItemTableMap::COL_TAX_RATE' => 'TAX_RATE',
        'COL_TAX_RATE' => 'TAX_RATE',
        'tax_rate' => 'TAX_RATE',
        'spy_sales_order_item.tax_rate' => 'TAX_RATE',
        'TaxRateAverageAggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'SpySalesOrderItem.TaxRateAverageAggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'taxRateAverageAggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'spySalesOrderItem.taxRateAverageAggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'SpySalesOrderItemTableMap::COL_TAX_RATE_AVERAGE_AGGREGATION' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'COL_TAX_RATE_AVERAGE_AGGREGATION' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'tax_rate_average_aggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'spy_sales_order_item.tax_rate_average_aggregation' => 'TAX_RATE_AVERAGE_AGGREGATION',
        'Uuid' => 'UUID',
        'SpySalesOrderItem.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spySalesOrderItem.uuid' => 'UUID',
        'SpySalesOrderItemTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_sales_order_item.uuid' => 'UUID',
        'CreatedAt' => 'CREATED_AT',
        'SpySalesOrderItem.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spySalesOrderItem.createdAt' => 'CREATED_AT',
        'SpySalesOrderItemTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_sales_order_item.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpySalesOrderItem.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spySalesOrderItem.updatedAt' => 'UPDATED_AT',
        'SpySalesOrderItemTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_sales_order_item.updated_at' => 'UPDATED_AT',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function initialize(): void
    {
        // attributes
        $this->setName('spy_sales_order_item');
        $this->setPhpName('SpySalesOrderItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItem');
        $this->setPackage('src.Orm.Zed.Sales.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_sales_order_item_pk_seq');
        // columns
        $this->addPrimaryKey('id_sales_order_item', 'IdSalesOrderItem', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_oms_order_item_state', 'FkOmsOrderItemState', 'INTEGER', 'spy_oms_order_item_state', 'id_oms_order_item_state', true, null, null);
        $this->addForeignKey('fk_oms_order_process', 'FkOmsOrderProcess', 'INTEGER', 'spy_oms_order_process', 'id_oms_order_process', false, null, null);
        $this->addForeignKey('fk_sales_order', 'FkSalesOrder', 'INTEGER', 'spy_sales_order', 'id_sales_order', true, null, null);
        $this->addForeignKey('fk_sales_order_item_bundle', 'FkSalesOrderItemBundle', 'INTEGER', 'spy_sales_order_item_bundle', 'id_sales_order_item_bundle', false, null, null);
        $this->addForeignKey('fk_sales_shipment', 'FkSalesShipment', 'INTEGER', 'spy_sales_shipment', 'id_sales_shipment', false, null, null);
        $this->addColumn('canceled_amount', 'CanceledAmount', 'INTEGER', false, null, 0);
        $this->addColumn('cart_note', 'CartNote', 'VARCHAR', false, 255, null);
        $this->addColumn('discount_amount_aggregation', 'DiscountAmountAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('discount_amount_full_aggregation', 'DiscountAmountFullAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('expense_price_aggregation', 'ExpensePriceAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('gross_price', 'GrossPrice', 'INTEGER', true, null, null);
        $this->addColumn('group_key', 'GroupKey', 'VARCHAR', false, 255, null);
        $this->addColumn('is_quantity_splittable', 'IsQuantitySplittable', 'BOOLEAN', true, 1, true);
        $this->addColumn('last_state_change', 'LastStateChange', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('net_price', 'NetPrice', 'INTEGER', false, null, 0);
        $this->addColumn('order_item_reference', 'OrderItemReference', 'VARCHAR', false, 255, null);
        $this->addColumn('price', 'Price', 'INTEGER', false, null, 0);
        $this->addColumn('price_to_pay_aggregation', 'PriceToPayAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('product_option_price_aggregation', 'ProductOptionPriceAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('quantity', 'Quantity', 'INTEGER', true, null, 1);
        $this->addColumn('refundable_amount', 'RefundableAmount', 'INTEGER', false, null, 0);
        $this->addColumn('remuneration_amount', 'RemunerationAmount', 'INTEGER', false, null, null);
        $this->addColumn('sku', 'Sku', 'VARCHAR', true, 255, null);
        $this->addColumn('subtotal_aggregation', 'SubtotalAggregation', 'INTEGER', false, null, null);
        $this->addColumn('tax_amount', 'TaxAmount', 'INTEGER', false, null, 0);
        $this->addColumn('tax_amount_after_cancellation', 'TaxAmountAfterCancellation', 'INTEGER', false, null, 0);
        $this->addColumn('tax_amount_full_aggregation', 'TaxAmountFullAggregation', 'INTEGER', false, null, 0);
        $this->addColumn('tax_rate', 'TaxRate', 'DECIMAL', false, 8, null);
        $this->addColumn('tax_rate_average_aggregation', 'TaxRateAverageAggregation', 'DECIMAL', false, 8, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 36, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('SalesOrderItemBundle', '\\Orm\\Zed\\ProductBundle\\Persistence\\SpySalesOrderItemBundle', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_order_item_bundle',
    1 => ':id_sales_order_item_bundle',
  ),
), null, null, null, false);
        $this->addRelation('Order', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, null, false);
        $this->addRelation('State', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsOrderItemState', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_oms_order_item_state',
    1 => ':id_oms_order_item_state',
  ),
), null, null, null, false);
        $this->addRelation('Process', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsOrderProcess', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_oms_order_process',
    1 => ':id_oms_order_process',
  ),
), null, null, null, false);
        $this->addRelation('SpySalesShipment', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesShipment', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_shipment',
    1 => ':id_sales_shipment',
  ),
), null, null, null, false);
        $this->addRelation('Nopayment', '\\Orm\\Zed\\Nopayment\\Persistence\\SpyNopaymentPaid', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'Nopayments', false);
        $this->addRelation('TransitionLog', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsTransitionLog', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'TransitionLogs', false);
        $this->addRelation('StateHistory', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsOrderItemStateHistory', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'StateHistories', false);
        $this->addRelation('EventTimeout', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsEventTimeout', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'EventTimeouts', false);
        $this->addRelation('Discount', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesDiscount', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'Discounts', false);
        $this->addRelation('SpySalesOrderItemGiftCard', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItemGiftCard', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'SpySalesOrderItemGiftCards', false);
        $this->addRelation('Option', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItemOption', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'Options', false);
        $this->addRelation('Metadata', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItemMetadata', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'Metadatas', false);
        $this->addRelation('SpySalesOrderConfiguredBundleItem', '\\Orm\\Zed\\SalesConfigurableBundle\\Persistence\\SpySalesOrderConfiguredBundleItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'SpySalesOrderConfiguredBundleItems', false);
        $this->addRelation('SpySalesOrderItemConfiguration', '\\Orm\\Zed\\SalesProductConfiguration\\Persistence\\SpySalesOrderItemConfiguration', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'SpySalesOrderItemConfigurations', false);
        $this->addRelation('ReclamationItem', '\\Orm\\Zed\\SalesReclamation\\Persistence\\SpySalesReclamationItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'ReclamationItems', false);
        $this->addRelation('SpySalesReturnItem', '\\Orm\\Zed\\SalesReturn\\Persistence\\SpySalesReturnItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, 'SpySalesReturnItems', false);
    }

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array<string, array> Associative array (name => parameters) of behaviors
     */
    public function getBehaviors(): array
    {
        return [
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'id_sales_order_item'],
            'timestampable' => ['create_column' => 'created_at', 'update_column' => 'updated_at', 'disable_created_at' => 'false', 'disable_updated_at' => 'false'],
        ];
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string|null The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): ?string
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('IdSalesOrderItem', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? SpySalesOrderItemTableMap::CLASS_DEFAULT : SpySalesOrderItemTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array $row Row returned by DataFetcher->fetch().
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array (SpySalesOrderItem object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpySalesOrderItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpySalesOrderItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpySalesOrderItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpySalesOrderItemTableMap::OM_CLASS;
            /** @var SpySalesOrderItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpySalesOrderItemTableMap::addInstanceToPool($obj, $key);
        }

        return [$obj, $col];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array<object>
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher): array
    {
        $results = [];

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = SpySalesOrderItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpySalesOrderItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpySalesOrderItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpySalesOrderItemTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria Object containing the columns to add.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_ITEM_STATE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_PROCESS);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_ORDER);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_ORDER_ITEM_BUNDLE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_SHIPMENT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_CANCELED_AMOUNT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_CART_NOTE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_FULL_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_EXPENSE_PRICE_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_GROSS_PRICE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_GROUP_KEY);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_IS_QUANTITY_SPLITTABLE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_LAST_STATE_CHANGE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_NAME);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_NET_PRICE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_ORDER_ITEM_REFERENCE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_PRICE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_PRICE_TO_PAY_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_PRODUCT_OPTION_PRICE_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_REFUNDABLE_AMOUNT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_REMUNERATION_AMOUNT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_SKU);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_SUBTOTAL_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT_FULL_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_TAX_RATE);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_TAX_RATE_AVERAGE_AGGREGATION);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_UUID);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpySalesOrderItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_sales_order_item');
            $criteria->addSelectColumn($alias . '.fk_oms_order_item_state');
            $criteria->addSelectColumn($alias . '.fk_oms_order_process');
            $criteria->addSelectColumn($alias . '.fk_sales_order');
            $criteria->addSelectColumn($alias . '.fk_sales_order_item_bundle');
            $criteria->addSelectColumn($alias . '.fk_sales_shipment');
            $criteria->addSelectColumn($alias . '.canceled_amount');
            $criteria->addSelectColumn($alias . '.cart_note');
            $criteria->addSelectColumn($alias . '.discount_amount_aggregation');
            $criteria->addSelectColumn($alias . '.discount_amount_full_aggregation');
            $criteria->addSelectColumn($alias . '.expense_price_aggregation');
            $criteria->addSelectColumn($alias . '.gross_price');
            $criteria->addSelectColumn($alias . '.group_key');
            $criteria->addSelectColumn($alias . '.is_quantity_splittable');
            $criteria->addSelectColumn($alias . '.last_state_change');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.net_price');
            $criteria->addSelectColumn($alias . '.order_item_reference');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.price_to_pay_aggregation');
            $criteria->addSelectColumn($alias . '.product_option_price_aggregation');
            $criteria->addSelectColumn($alias . '.quantity');
            $criteria->addSelectColumn($alias . '.refundable_amount');
            $criteria->addSelectColumn($alias . '.remuneration_amount');
            $criteria->addSelectColumn($alias . '.sku');
            $criteria->addSelectColumn($alias . '.subtotal_aggregation');
            $criteria->addSelectColumn($alias . '.tax_amount');
            $criteria->addSelectColumn($alias . '.tax_amount_after_cancellation');
            $criteria->addSelectColumn($alias . '.tax_amount_full_aggregation');
            $criteria->addSelectColumn($alias . '.tax_rate');
            $criteria->addSelectColumn($alias . '.tax_rate_average_aggregation');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria Object containing the columns to remove.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function removeSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_ITEM_STATE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_FK_OMS_ORDER_PROCESS);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_ORDER);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_ORDER_ITEM_BUNDLE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_FK_SALES_SHIPMENT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_CANCELED_AMOUNT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_CART_NOTE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_DISCOUNT_AMOUNT_FULL_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_EXPENSE_PRICE_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_GROSS_PRICE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_GROUP_KEY);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_IS_QUANTITY_SPLITTABLE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_LAST_STATE_CHANGE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_NET_PRICE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_ORDER_ITEM_REFERENCE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_PRICE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_PRICE_TO_PAY_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_PRODUCT_OPTION_PRICE_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_QUANTITY);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_REFUNDABLE_AMOUNT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_REMUNERATION_AMOUNT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_SKU);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_SUBTOTAL_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT_AFTER_CANCELLATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_TAX_AMOUNT_FULL_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_TAX_RATE);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_TAX_RATE_AVERAGE_AGGREGATION);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_UUID);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpySalesOrderItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_sales_order_item');
            $criteria->removeSelectColumn($alias . '.fk_oms_order_item_state');
            $criteria->removeSelectColumn($alias . '.fk_oms_order_process');
            $criteria->removeSelectColumn($alias . '.fk_sales_order');
            $criteria->removeSelectColumn($alias . '.fk_sales_order_item_bundle');
            $criteria->removeSelectColumn($alias . '.fk_sales_shipment');
            $criteria->removeSelectColumn($alias . '.canceled_amount');
            $criteria->removeSelectColumn($alias . '.cart_note');
            $criteria->removeSelectColumn($alias . '.discount_amount_aggregation');
            $criteria->removeSelectColumn($alias . '.discount_amount_full_aggregation');
            $criteria->removeSelectColumn($alias . '.expense_price_aggregation');
            $criteria->removeSelectColumn($alias . '.gross_price');
            $criteria->removeSelectColumn($alias . '.group_key');
            $criteria->removeSelectColumn($alias . '.is_quantity_splittable');
            $criteria->removeSelectColumn($alias . '.last_state_change');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.net_price');
            $criteria->removeSelectColumn($alias . '.order_item_reference');
            $criteria->removeSelectColumn($alias . '.price');
            $criteria->removeSelectColumn($alias . '.price_to_pay_aggregation');
            $criteria->removeSelectColumn($alias . '.product_option_price_aggregation');
            $criteria->removeSelectColumn($alias . '.quantity');
            $criteria->removeSelectColumn($alias . '.refundable_amount');
            $criteria->removeSelectColumn($alias . '.remuneration_amount');
            $criteria->removeSelectColumn($alias . '.sku');
            $criteria->removeSelectColumn($alias . '.subtotal_aggregation');
            $criteria->removeSelectColumn($alias . '.tax_amount');
            $criteria->removeSelectColumn($alias . '.tax_amount_after_cancellation');
            $criteria->removeSelectColumn($alias . '.tax_amount_full_aggregation');
            $criteria->removeSelectColumn($alias . '.tax_rate');
            $criteria->removeSelectColumn($alias . '.tax_rate_average_aggregation');
            $criteria->removeSelectColumn($alias . '.uuid');
            $criteria->removeSelectColumn($alias . '.created_at');
            $criteria->removeSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap(): TableMap
    {
        return Propel::getServiceContainer()->getDatabaseMap(SpySalesOrderItemTableMap::DATABASE_NAME)->getTable(SpySalesOrderItemTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpySalesOrderItem or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpySalesOrderItem object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ?ConnectionInterface $con = null): int
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Sales\Persistence\SpySalesOrderItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpySalesOrderItemTableMap::DATABASE_NAME);
            $criteria->add(SpySalesOrderItemTableMap::COL_ID_SALES_ORDER_ITEM, (array) $values, Criteria::IN);
        }

        $query = SpySalesOrderItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpySalesOrderItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpySalesOrderItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_sales_order_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpySalesOrderItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpySalesOrderItem or Criteria object.
     *
     * @param mixed $criteria Criteria or SpySalesOrderItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpySalesOrderItem object
        }


        // Set the correct dbName
        $query = SpySalesOrderItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
