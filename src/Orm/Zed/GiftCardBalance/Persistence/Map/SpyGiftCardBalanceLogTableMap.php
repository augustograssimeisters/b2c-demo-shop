<?php

namespace Orm\Zed\GiftCardBalance\Persistence\Map;

use Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLog;
use Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery;
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
 * This class defines the structure of the 'spy_gift_card_balance_log' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyGiftCardBalanceLogTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.GiftCardBalance.Persistence.Map.SpyGiftCardBalanceLogTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_gift_card_balance_log';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyGiftCardBalanceLog';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\GiftCardBalance\\Persistence\\SpyGiftCardBalanceLog';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.GiftCardBalance.Persistence.SpyGiftCardBalanceLog';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 5;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 5;

    /**
     * the column name for the id_gift_card_balance_log field
     */
    public const COL_ID_GIFT_CARD_BALANCE_LOG = 'spy_gift_card_balance_log.id_gift_card_balance_log';

    /**
     * the column name for the fk_gift_card field
     */
    public const COL_FK_GIFT_CARD = 'spy_gift_card_balance_log.fk_gift_card';

    /**
     * the column name for the fk_sales_order field
     */
    public const COL_FK_SALES_ORDER = 'spy_gift_card_balance_log.fk_sales_order';

    /**
     * the column name for the value field
     */
    public const COL_VALUE = 'spy_gift_card_balance_log.value';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_gift_card_balance_log.created_at';

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
        self::TYPE_PHPNAME       => ['IdGiftCardBalanceLog', 'FkGiftCard', 'FkSalesOrder', 'Value', 'CreatedAt', ],
        self::TYPE_CAMELNAME     => ['idGiftCardBalanceLog', 'fkGiftCard', 'fkSalesOrder', 'value', 'createdAt', ],
        self::TYPE_COLNAME       => [SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG, SpyGiftCardBalanceLogTableMap::COL_FK_GIFT_CARD, SpyGiftCardBalanceLogTableMap::COL_FK_SALES_ORDER, SpyGiftCardBalanceLogTableMap::COL_VALUE, SpyGiftCardBalanceLogTableMap::COL_CREATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_gift_card_balance_log', 'fk_gift_card', 'fk_sales_order', 'value', 'created_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, ]
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
        self::TYPE_PHPNAME       => ['IdGiftCardBalanceLog' => 0, 'FkGiftCard' => 1, 'FkSalesOrder' => 2, 'Value' => 3, 'CreatedAt' => 4, ],
        self::TYPE_CAMELNAME     => ['idGiftCardBalanceLog' => 0, 'fkGiftCard' => 1, 'fkSalesOrder' => 2, 'value' => 3, 'createdAt' => 4, ],
        self::TYPE_COLNAME       => [SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG => 0, SpyGiftCardBalanceLogTableMap::COL_FK_GIFT_CARD => 1, SpyGiftCardBalanceLogTableMap::COL_FK_SALES_ORDER => 2, SpyGiftCardBalanceLogTableMap::COL_VALUE => 3, SpyGiftCardBalanceLogTableMap::COL_CREATED_AT => 4, ],
        self::TYPE_FIELDNAME     => ['id_gift_card_balance_log' => 0, 'fk_gift_card' => 1, 'fk_sales_order' => 2, 'value' => 3, 'created_at' => 4, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdGiftCardBalanceLog' => 'ID_GIFT_CARD_BALANCE_LOG',
        'SpyGiftCardBalanceLog.IdGiftCardBalanceLog' => 'ID_GIFT_CARD_BALANCE_LOG',
        'idGiftCardBalanceLog' => 'ID_GIFT_CARD_BALANCE_LOG',
        'spyGiftCardBalanceLog.idGiftCardBalanceLog' => 'ID_GIFT_CARD_BALANCE_LOG',
        'SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG' => 'ID_GIFT_CARD_BALANCE_LOG',
        'COL_ID_GIFT_CARD_BALANCE_LOG' => 'ID_GIFT_CARD_BALANCE_LOG',
        'id_gift_card_balance_log' => 'ID_GIFT_CARD_BALANCE_LOG',
        'spy_gift_card_balance_log.id_gift_card_balance_log' => 'ID_GIFT_CARD_BALANCE_LOG',
        'FkGiftCard' => 'FK_GIFT_CARD',
        'SpyGiftCardBalanceLog.FkGiftCard' => 'FK_GIFT_CARD',
        'fkGiftCard' => 'FK_GIFT_CARD',
        'spyGiftCardBalanceLog.fkGiftCard' => 'FK_GIFT_CARD',
        'SpyGiftCardBalanceLogTableMap::COL_FK_GIFT_CARD' => 'FK_GIFT_CARD',
        'COL_FK_GIFT_CARD' => 'FK_GIFT_CARD',
        'fk_gift_card' => 'FK_GIFT_CARD',
        'spy_gift_card_balance_log.fk_gift_card' => 'FK_GIFT_CARD',
        'FkSalesOrder' => 'FK_SALES_ORDER',
        'SpyGiftCardBalanceLog.FkSalesOrder' => 'FK_SALES_ORDER',
        'fkSalesOrder' => 'FK_SALES_ORDER',
        'spyGiftCardBalanceLog.fkSalesOrder' => 'FK_SALES_ORDER',
        'SpyGiftCardBalanceLogTableMap::COL_FK_SALES_ORDER' => 'FK_SALES_ORDER',
        'COL_FK_SALES_ORDER' => 'FK_SALES_ORDER',
        'fk_sales_order' => 'FK_SALES_ORDER',
        'spy_gift_card_balance_log.fk_sales_order' => 'FK_SALES_ORDER',
        'Value' => 'VALUE',
        'SpyGiftCardBalanceLog.Value' => 'VALUE',
        'value' => 'VALUE',
        'spyGiftCardBalanceLog.value' => 'VALUE',
        'SpyGiftCardBalanceLogTableMap::COL_VALUE' => 'VALUE',
        'COL_VALUE' => 'VALUE',
        'spy_gift_card_balance_log.value' => 'VALUE',
        'CreatedAt' => 'CREATED_AT',
        'SpyGiftCardBalanceLog.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyGiftCardBalanceLog.createdAt' => 'CREATED_AT',
        'SpyGiftCardBalanceLogTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_gift_card_balance_log.created_at' => 'CREATED_AT',
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
        $this->setName('spy_gift_card_balance_log');
        $this->setPhpName('SpyGiftCardBalanceLog');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\GiftCardBalance\\Persistence\\SpyGiftCardBalanceLog');
        $this->setPackage('src.Orm.Zed.GiftCardBalance.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_gift_card_balance_log_pk_seq');
        // columns
        $this->addPrimaryKey('id_gift_card_balance_log', 'IdGiftCardBalanceLog', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_gift_card', 'FkGiftCard', 'INTEGER', 'spy_gift_card', 'id_gift_card', true, null, null);
        $this->addForeignKey('fk_sales_order', 'FkSalesOrder', 'INTEGER', 'spy_sales_order', 'id_sales_order', true, null, null);
        $this->addColumn('value', 'Value', 'INTEGER', true, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('SpyGiftCard', '\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCard', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_gift_card',
    1 => ':id_gift_card',
  ),
), null, null, null, false);
        $this->addRelation('SpySalesOrder', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
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
            'timestampable' => ['create_column' => 'created_at', 'update_column' => 'updated_at', 'disable_created_at' => 'false', 'disable_updated_at' => 'true'],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardBalanceLog', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardBalanceLog', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardBalanceLog', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardBalanceLog', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardBalanceLog', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardBalanceLog', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdGiftCardBalanceLog', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyGiftCardBalanceLogTableMap::CLASS_DEFAULT : SpyGiftCardBalanceLogTableMap::OM_CLASS;
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
     * @return array (SpyGiftCardBalanceLog object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyGiftCardBalanceLogTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyGiftCardBalanceLogTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyGiftCardBalanceLogTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyGiftCardBalanceLogTableMap::OM_CLASS;
            /** @var SpyGiftCardBalanceLog $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyGiftCardBalanceLogTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyGiftCardBalanceLogTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyGiftCardBalanceLogTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyGiftCardBalanceLog $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyGiftCardBalanceLogTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG);
            $criteria->addSelectColumn(SpyGiftCardBalanceLogTableMap::COL_FK_GIFT_CARD);
            $criteria->addSelectColumn(SpyGiftCardBalanceLogTableMap::COL_FK_SALES_ORDER);
            $criteria->addSelectColumn(SpyGiftCardBalanceLogTableMap::COL_VALUE);
            $criteria->addSelectColumn(SpyGiftCardBalanceLogTableMap::COL_CREATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_gift_card_balance_log');
            $criteria->addSelectColumn($alias . '.fk_gift_card');
            $criteria->addSelectColumn($alias . '.fk_sales_order');
            $criteria->addSelectColumn($alias . '.value');
            $criteria->addSelectColumn($alias . '.created_at');
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
            $criteria->removeSelectColumn(SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG);
            $criteria->removeSelectColumn(SpyGiftCardBalanceLogTableMap::COL_FK_GIFT_CARD);
            $criteria->removeSelectColumn(SpyGiftCardBalanceLogTableMap::COL_FK_SALES_ORDER);
            $criteria->removeSelectColumn(SpyGiftCardBalanceLogTableMap::COL_VALUE);
            $criteria->removeSelectColumn(SpyGiftCardBalanceLogTableMap::COL_CREATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_gift_card_balance_log');
            $criteria->removeSelectColumn($alias . '.fk_gift_card');
            $criteria->removeSelectColumn($alias . '.fk_sales_order');
            $criteria->removeSelectColumn($alias . '.value');
            $criteria->removeSelectColumn($alias . '.created_at');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyGiftCardBalanceLogTableMap::DATABASE_NAME)->getTable(SpyGiftCardBalanceLogTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyGiftCardBalanceLog or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyGiftCardBalanceLog object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardBalanceLogTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLog) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyGiftCardBalanceLogTableMap::DATABASE_NAME);
            $criteria->add(SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG, (array) $values, Criteria::IN);
        }

        $query = SpyGiftCardBalanceLogQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyGiftCardBalanceLogTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyGiftCardBalanceLogTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_gift_card_balance_log table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyGiftCardBalanceLogQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyGiftCardBalanceLog or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyGiftCardBalanceLog object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardBalanceLogTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyGiftCardBalanceLog object
        }

        if ($criteria->containsKey(SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG) && $criteria->keyContainsValue(SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG.')');
        }


        // Set the correct dbName
        $query = SpyGiftCardBalanceLogQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
