<?php

namespace Orm\Zed\PickingList\Persistence\Map;

use Orm\Zed\PickingList\Persistence\SpyPickingListItem;
use Orm\Zed\PickingList\Persistence\SpyPickingListItemQuery;
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
 * This class defines the structure of the 'spy_picking_list_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyPickingListItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.PickingList.Persistence.Map.SpyPickingListItemTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_picking_list_item';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyPickingListItem';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\PickingList\\Persistence\\SpyPickingListItem';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.PickingList.Persistence.SpyPickingListItem';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the id_picking_list_item field
     */
    public const COL_ID_PICKING_LIST_ITEM = 'spy_picking_list_item.id_picking_list_item';

    /**
     * the column name for the uuid field
     */
    public const COL_UUID = 'spy_picking_list_item.uuid';

    /**
     * the column name for the fk_picking_list field
     */
    public const COL_FK_PICKING_LIST = 'spy_picking_list_item.fk_picking_list';

    /**
     * the column name for the sales_order_item_uuid field
     */
    public const COL_SALES_ORDER_ITEM_UUID = 'spy_picking_list_item.sales_order_item_uuid';

    /**
     * the column name for the quantity field
     */
    public const COL_QUANTITY = 'spy_picking_list_item.quantity';

    /**
     * the column name for the number_of_picked field
     */
    public const COL_NUMBER_OF_PICKED = 'spy_picking_list_item.number_of_picked';

    /**
     * the column name for the number_of_not_picked field
     */
    public const COL_NUMBER_OF_NOT_PICKED = 'spy_picking_list_item.number_of_not_picked';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_picking_list_item.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_picking_list_item.updated_at';

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
        self::TYPE_PHPNAME       => ['IdPickingListItem', 'Uuid', 'FkPickingList', 'SalesOrderItemUuid', 'Quantity', 'NumberOfPicked', 'NumberOfNotPicked', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idPickingListItem', 'uuid', 'fkPickingList', 'salesOrderItemUuid', 'quantity', 'numberOfPicked', 'numberOfNotPicked', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyPickingListItemTableMap::COL_ID_PICKING_LIST_ITEM, SpyPickingListItemTableMap::COL_UUID, SpyPickingListItemTableMap::COL_FK_PICKING_LIST, SpyPickingListItemTableMap::COL_SALES_ORDER_ITEM_UUID, SpyPickingListItemTableMap::COL_QUANTITY, SpyPickingListItemTableMap::COL_NUMBER_OF_PICKED, SpyPickingListItemTableMap::COL_NUMBER_OF_NOT_PICKED, SpyPickingListItemTableMap::COL_CREATED_AT, SpyPickingListItemTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_picking_list_item', 'uuid', 'fk_picking_list', 'sales_order_item_uuid', 'quantity', 'number_of_picked', 'number_of_not_picked', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, ]
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
        self::TYPE_PHPNAME       => ['IdPickingListItem' => 0, 'Uuid' => 1, 'FkPickingList' => 2, 'SalesOrderItemUuid' => 3, 'Quantity' => 4, 'NumberOfPicked' => 5, 'NumberOfNotPicked' => 6, 'CreatedAt' => 7, 'UpdatedAt' => 8, ],
        self::TYPE_CAMELNAME     => ['idPickingListItem' => 0, 'uuid' => 1, 'fkPickingList' => 2, 'salesOrderItemUuid' => 3, 'quantity' => 4, 'numberOfPicked' => 5, 'numberOfNotPicked' => 6, 'createdAt' => 7, 'updatedAt' => 8, ],
        self::TYPE_COLNAME       => [SpyPickingListItemTableMap::COL_ID_PICKING_LIST_ITEM => 0, SpyPickingListItemTableMap::COL_UUID => 1, SpyPickingListItemTableMap::COL_FK_PICKING_LIST => 2, SpyPickingListItemTableMap::COL_SALES_ORDER_ITEM_UUID => 3, SpyPickingListItemTableMap::COL_QUANTITY => 4, SpyPickingListItemTableMap::COL_NUMBER_OF_PICKED => 5, SpyPickingListItemTableMap::COL_NUMBER_OF_NOT_PICKED => 6, SpyPickingListItemTableMap::COL_CREATED_AT => 7, SpyPickingListItemTableMap::COL_UPDATED_AT => 8, ],
        self::TYPE_FIELDNAME     => ['id_picking_list_item' => 0, 'uuid' => 1, 'fk_picking_list' => 2, 'sales_order_item_uuid' => 3, 'quantity' => 4, 'number_of_picked' => 5, 'number_of_not_picked' => 6, 'created_at' => 7, 'updated_at' => 8, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdPickingListItem' => 'ID_PICKING_LIST_ITEM',
        'SpyPickingListItem.IdPickingListItem' => 'ID_PICKING_LIST_ITEM',
        'idPickingListItem' => 'ID_PICKING_LIST_ITEM',
        'spyPickingListItem.idPickingListItem' => 'ID_PICKING_LIST_ITEM',
        'SpyPickingListItemTableMap::COL_ID_PICKING_LIST_ITEM' => 'ID_PICKING_LIST_ITEM',
        'COL_ID_PICKING_LIST_ITEM' => 'ID_PICKING_LIST_ITEM',
        'id_picking_list_item' => 'ID_PICKING_LIST_ITEM',
        'spy_picking_list_item.id_picking_list_item' => 'ID_PICKING_LIST_ITEM',
        'Uuid' => 'UUID',
        'SpyPickingListItem.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spyPickingListItem.uuid' => 'UUID',
        'SpyPickingListItemTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_picking_list_item.uuid' => 'UUID',
        'FkPickingList' => 'FK_PICKING_LIST',
        'SpyPickingListItem.FkPickingList' => 'FK_PICKING_LIST',
        'fkPickingList' => 'FK_PICKING_LIST',
        'spyPickingListItem.fkPickingList' => 'FK_PICKING_LIST',
        'SpyPickingListItemTableMap::COL_FK_PICKING_LIST' => 'FK_PICKING_LIST',
        'COL_FK_PICKING_LIST' => 'FK_PICKING_LIST',
        'fk_picking_list' => 'FK_PICKING_LIST',
        'spy_picking_list_item.fk_picking_list' => 'FK_PICKING_LIST',
        'SalesOrderItemUuid' => 'SALES_ORDER_ITEM_UUID',
        'SpyPickingListItem.SalesOrderItemUuid' => 'SALES_ORDER_ITEM_UUID',
        'salesOrderItemUuid' => 'SALES_ORDER_ITEM_UUID',
        'spyPickingListItem.salesOrderItemUuid' => 'SALES_ORDER_ITEM_UUID',
        'SpyPickingListItemTableMap::COL_SALES_ORDER_ITEM_UUID' => 'SALES_ORDER_ITEM_UUID',
        'COL_SALES_ORDER_ITEM_UUID' => 'SALES_ORDER_ITEM_UUID',
        'sales_order_item_uuid' => 'SALES_ORDER_ITEM_UUID',
        'spy_picking_list_item.sales_order_item_uuid' => 'SALES_ORDER_ITEM_UUID',
        'Quantity' => 'QUANTITY',
        'SpyPickingListItem.Quantity' => 'QUANTITY',
        'quantity' => 'QUANTITY',
        'spyPickingListItem.quantity' => 'QUANTITY',
        'SpyPickingListItemTableMap::COL_QUANTITY' => 'QUANTITY',
        'COL_QUANTITY' => 'QUANTITY',
        'spy_picking_list_item.quantity' => 'QUANTITY',
        'NumberOfPicked' => 'NUMBER_OF_PICKED',
        'SpyPickingListItem.NumberOfPicked' => 'NUMBER_OF_PICKED',
        'numberOfPicked' => 'NUMBER_OF_PICKED',
        'spyPickingListItem.numberOfPicked' => 'NUMBER_OF_PICKED',
        'SpyPickingListItemTableMap::COL_NUMBER_OF_PICKED' => 'NUMBER_OF_PICKED',
        'COL_NUMBER_OF_PICKED' => 'NUMBER_OF_PICKED',
        'number_of_picked' => 'NUMBER_OF_PICKED',
        'spy_picking_list_item.number_of_picked' => 'NUMBER_OF_PICKED',
        'NumberOfNotPicked' => 'NUMBER_OF_NOT_PICKED',
        'SpyPickingListItem.NumberOfNotPicked' => 'NUMBER_OF_NOT_PICKED',
        'numberOfNotPicked' => 'NUMBER_OF_NOT_PICKED',
        'spyPickingListItem.numberOfNotPicked' => 'NUMBER_OF_NOT_PICKED',
        'SpyPickingListItemTableMap::COL_NUMBER_OF_NOT_PICKED' => 'NUMBER_OF_NOT_PICKED',
        'COL_NUMBER_OF_NOT_PICKED' => 'NUMBER_OF_NOT_PICKED',
        'number_of_not_picked' => 'NUMBER_OF_NOT_PICKED',
        'spy_picking_list_item.number_of_not_picked' => 'NUMBER_OF_NOT_PICKED',
        'CreatedAt' => 'CREATED_AT',
        'SpyPickingListItem.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyPickingListItem.createdAt' => 'CREATED_AT',
        'SpyPickingListItemTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_picking_list_item.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyPickingListItem.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyPickingListItem.updatedAt' => 'UPDATED_AT',
        'SpyPickingListItemTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_picking_list_item.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_picking_list_item');
        $this->setPhpName('SpyPickingListItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\PickingList\\Persistence\\SpyPickingListItem');
        $this->setPackage('src.Orm.Zed.PickingList.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_picking_list_item_pk_seq');
        // columns
        $this->addPrimaryKey('id_picking_list_item', 'IdPickingListItem', 'INTEGER', true, null, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 36, null);
        $this->addForeignKey('fk_picking_list', 'FkPickingList', 'INTEGER', 'spy_picking_list', 'id_picking_list', true, null, null);
        $this->addColumn('sales_order_item_uuid', 'SalesOrderItemUuid', 'VARCHAR', true, 36, null);
        $this->addColumn('quantity', 'Quantity', 'INTEGER', true, null, null);
        $this->addColumn('number_of_picked', 'NumberOfPicked', 'INTEGER', true, null, 0);
        $this->addColumn('number_of_not_picked', 'NumberOfNotPicked', 'INTEGER', true, null, 0);
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
        $this->addRelation('SpyPickingList', '\\Orm\\Zed\\PickingList\\Persistence\\SpyPickingList', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_picking_list',
    1 => ':id_picking_list',
  ),
), null, null, null, false);
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
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'id_picking_list_item'],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingListItem', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingListItem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingListItem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingListItem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingListItem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingListItem', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdPickingListItem', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyPickingListItemTableMap::CLASS_DEFAULT : SpyPickingListItemTableMap::OM_CLASS;
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
     * @return array (SpyPickingListItem object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyPickingListItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyPickingListItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyPickingListItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyPickingListItemTableMap::OM_CLASS;
            /** @var SpyPickingListItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyPickingListItemTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyPickingListItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyPickingListItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyPickingListItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyPickingListItemTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyPickingListItemTableMap::COL_ID_PICKING_LIST_ITEM);
            $criteria->addSelectColumn(SpyPickingListItemTableMap::COL_UUID);
            $criteria->addSelectColumn(SpyPickingListItemTableMap::COL_FK_PICKING_LIST);
            $criteria->addSelectColumn(SpyPickingListItemTableMap::COL_SALES_ORDER_ITEM_UUID);
            $criteria->addSelectColumn(SpyPickingListItemTableMap::COL_QUANTITY);
            $criteria->addSelectColumn(SpyPickingListItemTableMap::COL_NUMBER_OF_PICKED);
            $criteria->addSelectColumn(SpyPickingListItemTableMap::COL_NUMBER_OF_NOT_PICKED);
            $criteria->addSelectColumn(SpyPickingListItemTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyPickingListItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_picking_list_item');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.fk_picking_list');
            $criteria->addSelectColumn($alias . '.sales_order_item_uuid');
            $criteria->addSelectColumn($alias . '.quantity');
            $criteria->addSelectColumn($alias . '.number_of_picked');
            $criteria->addSelectColumn($alias . '.number_of_not_picked');
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
            $criteria->removeSelectColumn(SpyPickingListItemTableMap::COL_ID_PICKING_LIST_ITEM);
            $criteria->removeSelectColumn(SpyPickingListItemTableMap::COL_UUID);
            $criteria->removeSelectColumn(SpyPickingListItemTableMap::COL_FK_PICKING_LIST);
            $criteria->removeSelectColumn(SpyPickingListItemTableMap::COL_SALES_ORDER_ITEM_UUID);
            $criteria->removeSelectColumn(SpyPickingListItemTableMap::COL_QUANTITY);
            $criteria->removeSelectColumn(SpyPickingListItemTableMap::COL_NUMBER_OF_PICKED);
            $criteria->removeSelectColumn(SpyPickingListItemTableMap::COL_NUMBER_OF_NOT_PICKED);
            $criteria->removeSelectColumn(SpyPickingListItemTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyPickingListItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_picking_list_item');
            $criteria->removeSelectColumn($alias . '.uuid');
            $criteria->removeSelectColumn($alias . '.fk_picking_list');
            $criteria->removeSelectColumn($alias . '.sales_order_item_uuid');
            $criteria->removeSelectColumn($alias . '.quantity');
            $criteria->removeSelectColumn($alias . '.number_of_picked');
            $criteria->removeSelectColumn($alias . '.number_of_not_picked');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyPickingListItemTableMap::DATABASE_NAME)->getTable(SpyPickingListItemTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyPickingListItem or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyPickingListItem object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPickingListItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\PickingList\Persistence\SpyPickingListItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyPickingListItemTableMap::DATABASE_NAME);
            $criteria->add(SpyPickingListItemTableMap::COL_ID_PICKING_LIST_ITEM, (array) $values, Criteria::IN);
        }

        $query = SpyPickingListItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyPickingListItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyPickingListItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_picking_list_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyPickingListItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyPickingListItem or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyPickingListItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPickingListItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyPickingListItem object
        }

        if ($criteria->containsKey(SpyPickingListItemTableMap::COL_ID_PICKING_LIST_ITEM) && $criteria->keyContainsValue(SpyPickingListItemTableMap::COL_ID_PICKING_LIST_ITEM) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyPickingListItemTableMap::COL_ID_PICKING_LIST_ITEM.')');
        }


        // Set the correct dbName
        $query = SpyPickingListItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
