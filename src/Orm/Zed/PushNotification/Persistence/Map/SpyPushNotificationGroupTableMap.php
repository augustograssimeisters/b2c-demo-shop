<?php

namespace Orm\Zed\PushNotification\Persistence\Map;

use Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroup;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery;
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
 * This class defines the structure of the 'spy_push_notification_group' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyPushNotificationGroupTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.PushNotification.Persistence.Map.SpyPushNotificationGroupTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_push_notification_group';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyPushNotificationGroup';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationGroup';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.PushNotification.Persistence.SpyPushNotificationGroup';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the id_push_notification_group field
     */
    public const COL_ID_PUSH_NOTIFICATION_GROUP = 'spy_push_notification_group.id_push_notification_group';

    /**
     * the column name for the uuid field
     */
    public const COL_UUID = 'spy_push_notification_group.uuid';

    /**
     * the column name for the name field
     */
    public const COL_NAME = 'spy_push_notification_group.name';

    /**
     * the column name for the identifier field
     */
    public const COL_IDENTIFIER = 'spy_push_notification_group.identifier';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_push_notification_group.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_push_notification_group.updated_at';

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
        self::TYPE_PHPNAME       => ['IdPushNotificationGroup', 'Uuid', 'Name', 'Identifier', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idPushNotificationGroup', 'uuid', 'name', 'identifier', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyPushNotificationGroupTableMap::COL_ID_PUSH_NOTIFICATION_GROUP, SpyPushNotificationGroupTableMap::COL_UUID, SpyPushNotificationGroupTableMap::COL_NAME, SpyPushNotificationGroupTableMap::COL_IDENTIFIER, SpyPushNotificationGroupTableMap::COL_CREATED_AT, SpyPushNotificationGroupTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_push_notification_group', 'uuid', 'name', 'identifier', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
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
        self::TYPE_PHPNAME       => ['IdPushNotificationGroup' => 0, 'Uuid' => 1, 'Name' => 2, 'Identifier' => 3, 'CreatedAt' => 4, 'UpdatedAt' => 5, ],
        self::TYPE_CAMELNAME     => ['idPushNotificationGroup' => 0, 'uuid' => 1, 'name' => 2, 'identifier' => 3, 'createdAt' => 4, 'updatedAt' => 5, ],
        self::TYPE_COLNAME       => [SpyPushNotificationGroupTableMap::COL_ID_PUSH_NOTIFICATION_GROUP => 0, SpyPushNotificationGroupTableMap::COL_UUID => 1, SpyPushNotificationGroupTableMap::COL_NAME => 2, SpyPushNotificationGroupTableMap::COL_IDENTIFIER => 3, SpyPushNotificationGroupTableMap::COL_CREATED_AT => 4, SpyPushNotificationGroupTableMap::COL_UPDATED_AT => 5, ],
        self::TYPE_FIELDNAME     => ['id_push_notification_group' => 0, 'uuid' => 1, 'name' => 2, 'identifier' => 3, 'created_at' => 4, 'updated_at' => 5, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdPushNotificationGroup' => 'ID_PUSH_NOTIFICATION_GROUP',
        'SpyPushNotificationGroup.IdPushNotificationGroup' => 'ID_PUSH_NOTIFICATION_GROUP',
        'idPushNotificationGroup' => 'ID_PUSH_NOTIFICATION_GROUP',
        'spyPushNotificationGroup.idPushNotificationGroup' => 'ID_PUSH_NOTIFICATION_GROUP',
        'SpyPushNotificationGroupTableMap::COL_ID_PUSH_NOTIFICATION_GROUP' => 'ID_PUSH_NOTIFICATION_GROUP',
        'COL_ID_PUSH_NOTIFICATION_GROUP' => 'ID_PUSH_NOTIFICATION_GROUP',
        'id_push_notification_group' => 'ID_PUSH_NOTIFICATION_GROUP',
        'spy_push_notification_group.id_push_notification_group' => 'ID_PUSH_NOTIFICATION_GROUP',
        'Uuid' => 'UUID',
        'SpyPushNotificationGroup.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spyPushNotificationGroup.uuid' => 'UUID',
        'SpyPushNotificationGroupTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_push_notification_group.uuid' => 'UUID',
        'Name' => 'NAME',
        'SpyPushNotificationGroup.Name' => 'NAME',
        'name' => 'NAME',
        'spyPushNotificationGroup.name' => 'NAME',
        'SpyPushNotificationGroupTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_push_notification_group.name' => 'NAME',
        'Identifier' => 'IDENTIFIER',
        'SpyPushNotificationGroup.Identifier' => 'IDENTIFIER',
        'identifier' => 'IDENTIFIER',
        'spyPushNotificationGroup.identifier' => 'IDENTIFIER',
        'SpyPushNotificationGroupTableMap::COL_IDENTIFIER' => 'IDENTIFIER',
        'COL_IDENTIFIER' => 'IDENTIFIER',
        'spy_push_notification_group.identifier' => 'IDENTIFIER',
        'CreatedAt' => 'CREATED_AT',
        'SpyPushNotificationGroup.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyPushNotificationGroup.createdAt' => 'CREATED_AT',
        'SpyPushNotificationGroupTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_push_notification_group.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyPushNotificationGroup.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyPushNotificationGroup.updatedAt' => 'UPDATED_AT',
        'SpyPushNotificationGroupTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_push_notification_group.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_push_notification_group');
        $this->setPhpName('SpyPushNotificationGroup');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationGroup');
        $this->setPackage('src.Orm.Zed.PushNotification.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('id_push_notification_group_pk_seq');
        // columns
        $this->addPrimaryKey('id_push_notification_group', 'IdPushNotificationGroup', 'INTEGER', true, null, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 36, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('identifier', 'Identifier', 'VARCHAR', false, 255, null);
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
        $this->addRelation('SpyPushNotification', '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotification', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_push_notification_group',
    1 => ':id_push_notification_group',
  ),
), null, null, 'SpyPushNotifications', false);
        $this->addRelation('SpyPushNotificationSubscription', '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationSubscription', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_push_notification_group',
    1 => ':id_push_notification_group',
  ),
), null, null, 'SpyPushNotificationSubscriptions', false);
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
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'id_push_notification_group'],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationGroup', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationGroup', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationGroup', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationGroup', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationGroup', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationGroup', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdPushNotificationGroup', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyPushNotificationGroupTableMap::CLASS_DEFAULT : SpyPushNotificationGroupTableMap::OM_CLASS;
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
     * @return array (SpyPushNotificationGroup object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyPushNotificationGroupTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyPushNotificationGroupTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyPushNotificationGroupTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyPushNotificationGroupTableMap::OM_CLASS;
            /** @var SpyPushNotificationGroup $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyPushNotificationGroupTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyPushNotificationGroupTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyPushNotificationGroupTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyPushNotificationGroup $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyPushNotificationGroupTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyPushNotificationGroupTableMap::COL_ID_PUSH_NOTIFICATION_GROUP);
            $criteria->addSelectColumn(SpyPushNotificationGroupTableMap::COL_UUID);
            $criteria->addSelectColumn(SpyPushNotificationGroupTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyPushNotificationGroupTableMap::COL_IDENTIFIER);
            $criteria->addSelectColumn(SpyPushNotificationGroupTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyPushNotificationGroupTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_push_notification_group');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.identifier');
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
            $criteria->removeSelectColumn(SpyPushNotificationGroupTableMap::COL_ID_PUSH_NOTIFICATION_GROUP);
            $criteria->removeSelectColumn(SpyPushNotificationGroupTableMap::COL_UUID);
            $criteria->removeSelectColumn(SpyPushNotificationGroupTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyPushNotificationGroupTableMap::COL_IDENTIFIER);
            $criteria->removeSelectColumn(SpyPushNotificationGroupTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyPushNotificationGroupTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_push_notification_group');
            $criteria->removeSelectColumn($alias . '.uuid');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.identifier');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyPushNotificationGroupTableMap::DATABASE_NAME)->getTable(SpyPushNotificationGroupTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyPushNotificationGroup or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyPushNotificationGroup object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPushNotificationGroupTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroup) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyPushNotificationGroupTableMap::DATABASE_NAME);
            $criteria->add(SpyPushNotificationGroupTableMap::COL_ID_PUSH_NOTIFICATION_GROUP, (array) $values, Criteria::IN);
        }

        $query = SpyPushNotificationGroupQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyPushNotificationGroupTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyPushNotificationGroupTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_push_notification_group table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyPushNotificationGroupQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyPushNotificationGroup or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyPushNotificationGroup object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPushNotificationGroupTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyPushNotificationGroup object
        }

        if ($criteria->containsKey(SpyPushNotificationGroupTableMap::COL_ID_PUSH_NOTIFICATION_GROUP) && $criteria->keyContainsValue(SpyPushNotificationGroupTableMap::COL_ID_PUSH_NOTIFICATION_GROUP) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyPushNotificationGroupTableMap::COL_ID_PUSH_NOTIFICATION_GROUP.')');
        }


        // Set the correct dbName
        $query = SpyPushNotificationGroupQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
