<?php

namespace Orm\Zed\PickingList\Persistence\Map;

use Orm\Zed\PickingList\Persistence\SpyPickingList;
use Orm\Zed\PickingList\Persistence\SpyPickingListQuery;
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
 * This class defines the structure of the 'spy_picking_list' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyPickingListTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.PickingList.Persistence.Map.SpyPickingListTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_picking_list';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyPickingList';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\PickingList\\Persistence\\SpyPickingList';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.PickingList.Persistence.SpyPickingList';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the id_picking_list field
     */
    public const COL_ID_PICKING_LIST = 'spy_picking_list.id_picking_list';

    /**
     * the column name for the uuid field
     */
    public const COL_UUID = 'spy_picking_list.uuid';

    /**
     * the column name for the fk_warehouse field
     */
    public const COL_FK_WAREHOUSE = 'spy_picking_list.fk_warehouse';

    /**
     * the column name for the user_uuid field
     */
    public const COL_USER_UUID = 'spy_picking_list.user_uuid';

    /**
     * the column name for the status field
     */
    public const COL_STATUS = 'spy_picking_list.status';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_picking_list.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_picking_list.updated_at';

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
        self::TYPE_PHPNAME       => ['IdPickingList', 'Uuid', 'FkWarehouse', 'UserUuid', 'Status', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idPickingList', 'uuid', 'fkWarehouse', 'userUuid', 'status', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyPickingListTableMap::COL_ID_PICKING_LIST, SpyPickingListTableMap::COL_UUID, SpyPickingListTableMap::COL_FK_WAREHOUSE, SpyPickingListTableMap::COL_USER_UUID, SpyPickingListTableMap::COL_STATUS, SpyPickingListTableMap::COL_CREATED_AT, SpyPickingListTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_picking_list', 'uuid', 'fk_warehouse', 'user_uuid', 'status', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
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
        self::TYPE_PHPNAME       => ['IdPickingList' => 0, 'Uuid' => 1, 'FkWarehouse' => 2, 'UserUuid' => 3, 'Status' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ],
        self::TYPE_CAMELNAME     => ['idPickingList' => 0, 'uuid' => 1, 'fkWarehouse' => 2, 'userUuid' => 3, 'status' => 4, 'createdAt' => 5, 'updatedAt' => 6, ],
        self::TYPE_COLNAME       => [SpyPickingListTableMap::COL_ID_PICKING_LIST => 0, SpyPickingListTableMap::COL_UUID => 1, SpyPickingListTableMap::COL_FK_WAREHOUSE => 2, SpyPickingListTableMap::COL_USER_UUID => 3, SpyPickingListTableMap::COL_STATUS => 4, SpyPickingListTableMap::COL_CREATED_AT => 5, SpyPickingListTableMap::COL_UPDATED_AT => 6, ],
        self::TYPE_FIELDNAME     => ['id_picking_list' => 0, 'uuid' => 1, 'fk_warehouse' => 2, 'user_uuid' => 3, 'status' => 4, 'created_at' => 5, 'updated_at' => 6, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdPickingList' => 'ID_PICKING_LIST',
        'SpyPickingList.IdPickingList' => 'ID_PICKING_LIST',
        'idPickingList' => 'ID_PICKING_LIST',
        'spyPickingList.idPickingList' => 'ID_PICKING_LIST',
        'SpyPickingListTableMap::COL_ID_PICKING_LIST' => 'ID_PICKING_LIST',
        'COL_ID_PICKING_LIST' => 'ID_PICKING_LIST',
        'id_picking_list' => 'ID_PICKING_LIST',
        'spy_picking_list.id_picking_list' => 'ID_PICKING_LIST',
        'Uuid' => 'UUID',
        'SpyPickingList.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spyPickingList.uuid' => 'UUID',
        'SpyPickingListTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_picking_list.uuid' => 'UUID',
        'FkWarehouse' => 'FK_WAREHOUSE',
        'SpyPickingList.FkWarehouse' => 'FK_WAREHOUSE',
        'fkWarehouse' => 'FK_WAREHOUSE',
        'spyPickingList.fkWarehouse' => 'FK_WAREHOUSE',
        'SpyPickingListTableMap::COL_FK_WAREHOUSE' => 'FK_WAREHOUSE',
        'COL_FK_WAREHOUSE' => 'FK_WAREHOUSE',
        'fk_warehouse' => 'FK_WAREHOUSE',
        'spy_picking_list.fk_warehouse' => 'FK_WAREHOUSE',
        'UserUuid' => 'USER_UUID',
        'SpyPickingList.UserUuid' => 'USER_UUID',
        'userUuid' => 'USER_UUID',
        'spyPickingList.userUuid' => 'USER_UUID',
        'SpyPickingListTableMap::COL_USER_UUID' => 'USER_UUID',
        'COL_USER_UUID' => 'USER_UUID',
        'user_uuid' => 'USER_UUID',
        'spy_picking_list.user_uuid' => 'USER_UUID',
        'Status' => 'STATUS',
        'SpyPickingList.Status' => 'STATUS',
        'status' => 'STATUS',
        'spyPickingList.status' => 'STATUS',
        'SpyPickingListTableMap::COL_STATUS' => 'STATUS',
        'COL_STATUS' => 'STATUS',
        'spy_picking_list.status' => 'STATUS',
        'CreatedAt' => 'CREATED_AT',
        'SpyPickingList.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyPickingList.createdAt' => 'CREATED_AT',
        'SpyPickingListTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_picking_list.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyPickingList.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyPickingList.updatedAt' => 'UPDATED_AT',
        'SpyPickingListTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_picking_list.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_picking_list');
        $this->setPhpName('SpyPickingList');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\PickingList\\Persistence\\SpyPickingList');
        $this->setPackage('src.Orm.Zed.PickingList.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_picking_list_pk_seq');
        // columns
        $this->addPrimaryKey('id_picking_list', 'IdPickingList', 'INTEGER', true, null, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 36, null);
        $this->addForeignKey('fk_warehouse', 'FkWarehouse', 'INTEGER', 'spy_stock', 'id_stock', true, null, null);
        $this->addColumn('user_uuid', 'UserUuid', 'VARCHAR', false, 36, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 255, null);
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
        $this->addRelation('SpyStock', '\\Orm\\Zed\\Stock\\Persistence\\SpyStock', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_warehouse',
    1 => ':id_stock',
  ),
), null, null, null, false);
        $this->addRelation('SpyPickingListItem', '\\Orm\\Zed\\PickingList\\Persistence\\SpyPickingListItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_picking_list',
    1 => ':id_picking_list',
  ),
), null, null, 'SpyPickingListItems', false);
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
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'id_picking_list'],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingList', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingList', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingList', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingList', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingList', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPickingList', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdPickingList', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyPickingListTableMap::CLASS_DEFAULT : SpyPickingListTableMap::OM_CLASS;
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
     * @return array (SpyPickingList object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyPickingListTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyPickingListTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyPickingListTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyPickingListTableMap::OM_CLASS;
            /** @var SpyPickingList $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyPickingListTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyPickingListTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyPickingListTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyPickingList $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyPickingListTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyPickingListTableMap::COL_ID_PICKING_LIST);
            $criteria->addSelectColumn(SpyPickingListTableMap::COL_UUID);
            $criteria->addSelectColumn(SpyPickingListTableMap::COL_FK_WAREHOUSE);
            $criteria->addSelectColumn(SpyPickingListTableMap::COL_USER_UUID);
            $criteria->addSelectColumn(SpyPickingListTableMap::COL_STATUS);
            $criteria->addSelectColumn(SpyPickingListTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyPickingListTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_picking_list');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.fk_warehouse');
            $criteria->addSelectColumn($alias . '.user_uuid');
            $criteria->addSelectColumn($alias . '.status');
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
            $criteria->removeSelectColumn(SpyPickingListTableMap::COL_ID_PICKING_LIST);
            $criteria->removeSelectColumn(SpyPickingListTableMap::COL_UUID);
            $criteria->removeSelectColumn(SpyPickingListTableMap::COL_FK_WAREHOUSE);
            $criteria->removeSelectColumn(SpyPickingListTableMap::COL_USER_UUID);
            $criteria->removeSelectColumn(SpyPickingListTableMap::COL_STATUS);
            $criteria->removeSelectColumn(SpyPickingListTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyPickingListTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_picking_list');
            $criteria->removeSelectColumn($alias . '.uuid');
            $criteria->removeSelectColumn($alias . '.fk_warehouse');
            $criteria->removeSelectColumn($alias . '.user_uuid');
            $criteria->removeSelectColumn($alias . '.status');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyPickingListTableMap::DATABASE_NAME)->getTable(SpyPickingListTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyPickingList or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyPickingList object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPickingListTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\PickingList\Persistence\SpyPickingList) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyPickingListTableMap::DATABASE_NAME);
            $criteria->add(SpyPickingListTableMap::COL_ID_PICKING_LIST, (array) $values, Criteria::IN);
        }

        $query = SpyPickingListQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyPickingListTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyPickingListTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_picking_list table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyPickingListQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyPickingList or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyPickingList object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPickingListTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyPickingList object
        }

        if ($criteria->containsKey(SpyPickingListTableMap::COL_ID_PICKING_LIST) && $criteria->keyContainsValue(SpyPickingListTableMap::COL_ID_PICKING_LIST) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyPickingListTableMap::COL_ID_PICKING_LIST.')');
        }


        // Set the correct dbName
        $query = SpyPickingListQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
