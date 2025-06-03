<?php

namespace Orm\Zed\PushNotification\Persistence\Map;

use Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLog;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery;
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
 * This class defines the structure of the 'spy_push_notification_subscription_delivery_log' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyPushNotificationSubscriptionDeliveryLogTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.PushNotification.Persistence.Map.SpyPushNotificationSubscriptionDeliveryLogTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_push_notification_subscription_delivery_log';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyPushNotificationSubscriptionDeliveryLog';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationSubscriptionDeliveryLog';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.PushNotification.Persistence.SpyPushNotificationSubscriptionDeliveryLog';

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
     * the column name for the id_push_notification_subscription_delivery_log field
     */
    public const COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG = 'spy_push_notification_subscription_delivery_log.id_push_notification_subscription_delivery_log';

    /**
     * the column name for the fk_push_notification field
     */
    public const COL_FK_PUSH_NOTIFICATION = 'spy_push_notification_subscription_delivery_log.fk_push_notification';

    /**
     * the column name for the fk_push_notification_subscription field
     */
    public const COL_FK_PUSH_NOTIFICATION_SUBSCRIPTION = 'spy_push_notification_subscription_delivery_log.fk_push_notification_subscription';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_push_notification_subscription_delivery_log.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_push_notification_subscription_delivery_log.updated_at';

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
        self::TYPE_PHPNAME       => ['IdPushNotificationSubscriptionDeliveryLog', 'FkPushNotification', 'FkPushNotificationSubscription', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idPushNotificationSubscriptionDeliveryLog', 'fkPushNotification', 'fkPushNotificationSubscription', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG, SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_FK_PUSH_NOTIFICATION, SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_FK_PUSH_NOTIFICATION_SUBSCRIPTION, SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_CREATED_AT, SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_push_notification_subscription_delivery_log', 'fk_push_notification', 'fk_push_notification_subscription', 'created_at', 'updated_at', ],
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
        self::TYPE_PHPNAME       => ['IdPushNotificationSubscriptionDeliveryLog' => 0, 'FkPushNotification' => 1, 'FkPushNotificationSubscription' => 2, 'CreatedAt' => 3, 'UpdatedAt' => 4, ],
        self::TYPE_CAMELNAME     => ['idPushNotificationSubscriptionDeliveryLog' => 0, 'fkPushNotification' => 1, 'fkPushNotificationSubscription' => 2, 'createdAt' => 3, 'updatedAt' => 4, ],
        self::TYPE_COLNAME       => [SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG => 0, SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_FK_PUSH_NOTIFICATION => 1, SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_FK_PUSH_NOTIFICATION_SUBSCRIPTION => 2, SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_CREATED_AT => 3, SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_UPDATED_AT => 4, ],
        self::TYPE_FIELDNAME     => ['id_push_notification_subscription_delivery_log' => 0, 'fk_push_notification' => 1, 'fk_push_notification_subscription' => 2, 'created_at' => 3, 'updated_at' => 4, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdPushNotificationSubscriptionDeliveryLog' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG',
        'SpyPushNotificationSubscriptionDeliveryLog.IdPushNotificationSubscriptionDeliveryLog' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG',
        'idPushNotificationSubscriptionDeliveryLog' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG',
        'spyPushNotificationSubscriptionDeliveryLog.idPushNotificationSubscriptionDeliveryLog' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG',
        'SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG',
        'COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG',
        'id_push_notification_subscription_delivery_log' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG',
        'spy_push_notification_subscription_delivery_log.id_push_notification_subscription_delivery_log' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG',
        'FkPushNotification' => 'FK_PUSH_NOTIFICATION',
        'SpyPushNotificationSubscriptionDeliveryLog.FkPushNotification' => 'FK_PUSH_NOTIFICATION',
        'fkPushNotification' => 'FK_PUSH_NOTIFICATION',
        'spyPushNotificationSubscriptionDeliveryLog.fkPushNotification' => 'FK_PUSH_NOTIFICATION',
        'SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_FK_PUSH_NOTIFICATION' => 'FK_PUSH_NOTIFICATION',
        'COL_FK_PUSH_NOTIFICATION' => 'FK_PUSH_NOTIFICATION',
        'fk_push_notification' => 'FK_PUSH_NOTIFICATION',
        'spy_push_notification_subscription_delivery_log.fk_push_notification' => 'FK_PUSH_NOTIFICATION',
        'FkPushNotificationSubscription' => 'FK_PUSH_NOTIFICATION_SUBSCRIPTION',
        'SpyPushNotificationSubscriptionDeliveryLog.FkPushNotificationSubscription' => 'FK_PUSH_NOTIFICATION_SUBSCRIPTION',
        'fkPushNotificationSubscription' => 'FK_PUSH_NOTIFICATION_SUBSCRIPTION',
        'spyPushNotificationSubscriptionDeliveryLog.fkPushNotificationSubscription' => 'FK_PUSH_NOTIFICATION_SUBSCRIPTION',
        'SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_FK_PUSH_NOTIFICATION_SUBSCRIPTION' => 'FK_PUSH_NOTIFICATION_SUBSCRIPTION',
        'COL_FK_PUSH_NOTIFICATION_SUBSCRIPTION' => 'FK_PUSH_NOTIFICATION_SUBSCRIPTION',
        'fk_push_notification_subscription' => 'FK_PUSH_NOTIFICATION_SUBSCRIPTION',
        'spy_push_notification_subscription_delivery_log.fk_push_notification_subscription' => 'FK_PUSH_NOTIFICATION_SUBSCRIPTION',
        'CreatedAt' => 'CREATED_AT',
        'SpyPushNotificationSubscriptionDeliveryLog.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyPushNotificationSubscriptionDeliveryLog.createdAt' => 'CREATED_AT',
        'SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_push_notification_subscription_delivery_log.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyPushNotificationSubscriptionDeliveryLog.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyPushNotificationSubscriptionDeliveryLog.updatedAt' => 'UPDATED_AT',
        'SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_push_notification_subscription_delivery_log.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_push_notification_subscription_delivery_log');
        $this->setPhpName('SpyPushNotificationSubscriptionDeliveryLog');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationSubscriptionDeliveryLog');
        $this->setPackage('src.Orm.Zed.PushNotification.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('id_push_notification_subscription_delivery_log_pk_seq');
        // columns
        $this->addPrimaryKey('id_push_notification_subscription_delivery_log', 'IdPushNotificationSubscriptionDeliveryLog', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_push_notification', 'FkPushNotification', 'INTEGER', 'spy_push_notification', 'id_push_notification', true, null, null);
        $this->addForeignKey('fk_push_notification_subscription', 'FkPushNotificationSubscription', 'INTEGER', 'spy_push_notification_subscription', 'id_push_notification_subscription', true, null, null);
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
        $this->addRelation('SpyPushNotification', '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotification', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_push_notification',
    1 => ':id_push_notification',
  ),
), null, null, null, false);
        $this->addRelation('SpyPushNotificationSubscription', '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationSubscription', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_push_notification_subscription',
    1 => ':id_push_notification_subscription',
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscriptionDeliveryLog', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscriptionDeliveryLog', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscriptionDeliveryLog', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscriptionDeliveryLog', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscriptionDeliveryLog', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscriptionDeliveryLog', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdPushNotificationSubscriptionDeliveryLog', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyPushNotificationSubscriptionDeliveryLogTableMap::CLASS_DEFAULT : SpyPushNotificationSubscriptionDeliveryLogTableMap::OM_CLASS;
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
     * @return array (SpyPushNotificationSubscriptionDeliveryLog object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyPushNotificationSubscriptionDeliveryLogTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyPushNotificationSubscriptionDeliveryLogTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyPushNotificationSubscriptionDeliveryLogTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyPushNotificationSubscriptionDeliveryLogTableMap::OM_CLASS;
            /** @var SpyPushNotificationSubscriptionDeliveryLog $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyPushNotificationSubscriptionDeliveryLogTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyPushNotificationSubscriptionDeliveryLogTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyPushNotificationSubscriptionDeliveryLogTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyPushNotificationSubscriptionDeliveryLog $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyPushNotificationSubscriptionDeliveryLogTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_FK_PUSH_NOTIFICATION);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_FK_PUSH_NOTIFICATION_SUBSCRIPTION);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_push_notification_subscription_delivery_log');
            $criteria->addSelectColumn($alias . '.fk_push_notification');
            $criteria->addSelectColumn($alias . '.fk_push_notification_subscription');
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
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_FK_PUSH_NOTIFICATION);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_FK_PUSH_NOTIFICATION_SUBSCRIPTION);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_push_notification_subscription_delivery_log');
            $criteria->removeSelectColumn($alias . '.fk_push_notification');
            $criteria->removeSelectColumn($alias . '.fk_push_notification_subscription');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyPushNotificationSubscriptionDeliveryLogTableMap::DATABASE_NAME)->getTable(SpyPushNotificationSubscriptionDeliveryLogTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyPushNotificationSubscriptionDeliveryLog or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyPushNotificationSubscriptionDeliveryLog object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPushNotificationSubscriptionDeliveryLogTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLog) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyPushNotificationSubscriptionDeliveryLogTableMap::DATABASE_NAME);
            $criteria->add(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG, (array) $values, Criteria::IN);
        }

        $query = SpyPushNotificationSubscriptionDeliveryLogQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyPushNotificationSubscriptionDeliveryLogTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyPushNotificationSubscriptionDeliveryLogTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_push_notification_subscription_delivery_log table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyPushNotificationSubscriptionDeliveryLogQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyPushNotificationSubscriptionDeliveryLog or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyPushNotificationSubscriptionDeliveryLog object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPushNotificationSubscriptionDeliveryLogTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyPushNotificationSubscriptionDeliveryLog object
        }

        if ($criteria->containsKey(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG) && $criteria->keyContainsValue(SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyPushNotificationSubscriptionDeliveryLogTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOG.')');
        }


        // Set the correct dbName
        $query = SpyPushNotificationSubscriptionDeliveryLogQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
