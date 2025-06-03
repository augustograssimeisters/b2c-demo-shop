<?php

namespace Orm\Zed\WarehouseUser\Persistence\Map;

use Orm\Zed\WarehouseUser\Persistence\SpyWarehouseUserAssignment;
use Orm\Zed\WarehouseUser\Persistence\SpyWarehouseUserAssignmentQuery;
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
 * This class defines the structure of the 'spy_warehouse_user_assignment' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyWarehouseUserAssignmentTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.WarehouseUser.Persistence.Map.SpyWarehouseUserAssignmentTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_warehouse_user_assignment';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyWarehouseUserAssignment';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\WarehouseUser\\Persistence\\SpyWarehouseUserAssignment';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.WarehouseUser.Persistence.SpyWarehouseUserAssignment';

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
     * the column name for the id_warehouse_user_assignment field
     */
    public const COL_ID_WAREHOUSE_USER_ASSIGNMENT = 'spy_warehouse_user_assignment.id_warehouse_user_assignment';

    /**
     * the column name for the uuid field
     */
    public const COL_UUID = 'spy_warehouse_user_assignment.uuid';

    /**
     * the column name for the fk_warehouse field
     */
    public const COL_FK_WAREHOUSE = 'spy_warehouse_user_assignment.fk_warehouse';

    /**
     * the column name for the user_uuid field
     */
    public const COL_USER_UUID = 'spy_warehouse_user_assignment.user_uuid';

    /**
     * the column name for the is_active field
     */
    public const COL_IS_ACTIVE = 'spy_warehouse_user_assignment.is_active';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_warehouse_user_assignment.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_warehouse_user_assignment.updated_at';

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
        self::TYPE_PHPNAME       => ['IdWarehouseUserAssignment', 'Uuid', 'FkWarehouse', 'UserUuid', 'IsActive', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idWarehouseUserAssignment', 'uuid', 'fkWarehouse', 'userUuid', 'isActive', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyWarehouseUserAssignmentTableMap::COL_ID_WAREHOUSE_USER_ASSIGNMENT, SpyWarehouseUserAssignmentTableMap::COL_UUID, SpyWarehouseUserAssignmentTableMap::COL_FK_WAREHOUSE, SpyWarehouseUserAssignmentTableMap::COL_USER_UUID, SpyWarehouseUserAssignmentTableMap::COL_IS_ACTIVE, SpyWarehouseUserAssignmentTableMap::COL_CREATED_AT, SpyWarehouseUserAssignmentTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_warehouse_user_assignment', 'uuid', 'fk_warehouse', 'user_uuid', 'is_active', 'created_at', 'updated_at', ],
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
        self::TYPE_PHPNAME       => ['IdWarehouseUserAssignment' => 0, 'Uuid' => 1, 'FkWarehouse' => 2, 'UserUuid' => 3, 'IsActive' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ],
        self::TYPE_CAMELNAME     => ['idWarehouseUserAssignment' => 0, 'uuid' => 1, 'fkWarehouse' => 2, 'userUuid' => 3, 'isActive' => 4, 'createdAt' => 5, 'updatedAt' => 6, ],
        self::TYPE_COLNAME       => [SpyWarehouseUserAssignmentTableMap::COL_ID_WAREHOUSE_USER_ASSIGNMENT => 0, SpyWarehouseUserAssignmentTableMap::COL_UUID => 1, SpyWarehouseUserAssignmentTableMap::COL_FK_WAREHOUSE => 2, SpyWarehouseUserAssignmentTableMap::COL_USER_UUID => 3, SpyWarehouseUserAssignmentTableMap::COL_IS_ACTIVE => 4, SpyWarehouseUserAssignmentTableMap::COL_CREATED_AT => 5, SpyWarehouseUserAssignmentTableMap::COL_UPDATED_AT => 6, ],
        self::TYPE_FIELDNAME     => ['id_warehouse_user_assignment' => 0, 'uuid' => 1, 'fk_warehouse' => 2, 'user_uuid' => 3, 'is_active' => 4, 'created_at' => 5, 'updated_at' => 6, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdWarehouseUserAssignment' => 'ID_WAREHOUSE_USER_ASSIGNMENT',
        'SpyWarehouseUserAssignment.IdWarehouseUserAssignment' => 'ID_WAREHOUSE_USER_ASSIGNMENT',
        'idWarehouseUserAssignment' => 'ID_WAREHOUSE_USER_ASSIGNMENT',
        'spyWarehouseUserAssignment.idWarehouseUserAssignment' => 'ID_WAREHOUSE_USER_ASSIGNMENT',
        'SpyWarehouseUserAssignmentTableMap::COL_ID_WAREHOUSE_USER_ASSIGNMENT' => 'ID_WAREHOUSE_USER_ASSIGNMENT',
        'COL_ID_WAREHOUSE_USER_ASSIGNMENT' => 'ID_WAREHOUSE_USER_ASSIGNMENT',
        'id_warehouse_user_assignment' => 'ID_WAREHOUSE_USER_ASSIGNMENT',
        'spy_warehouse_user_assignment.id_warehouse_user_assignment' => 'ID_WAREHOUSE_USER_ASSIGNMENT',
        'Uuid' => 'UUID',
        'SpyWarehouseUserAssignment.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spyWarehouseUserAssignment.uuid' => 'UUID',
        'SpyWarehouseUserAssignmentTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_warehouse_user_assignment.uuid' => 'UUID',
        'FkWarehouse' => 'FK_WAREHOUSE',
        'SpyWarehouseUserAssignment.FkWarehouse' => 'FK_WAREHOUSE',
        'fkWarehouse' => 'FK_WAREHOUSE',
        'spyWarehouseUserAssignment.fkWarehouse' => 'FK_WAREHOUSE',
        'SpyWarehouseUserAssignmentTableMap::COL_FK_WAREHOUSE' => 'FK_WAREHOUSE',
        'COL_FK_WAREHOUSE' => 'FK_WAREHOUSE',
        'fk_warehouse' => 'FK_WAREHOUSE',
        'spy_warehouse_user_assignment.fk_warehouse' => 'FK_WAREHOUSE',
        'UserUuid' => 'USER_UUID',
        'SpyWarehouseUserAssignment.UserUuid' => 'USER_UUID',
        'userUuid' => 'USER_UUID',
        'spyWarehouseUserAssignment.userUuid' => 'USER_UUID',
        'SpyWarehouseUserAssignmentTableMap::COL_USER_UUID' => 'USER_UUID',
        'COL_USER_UUID' => 'USER_UUID',
        'user_uuid' => 'USER_UUID',
        'spy_warehouse_user_assignment.user_uuid' => 'USER_UUID',
        'IsActive' => 'IS_ACTIVE',
        'SpyWarehouseUserAssignment.IsActive' => 'IS_ACTIVE',
        'isActive' => 'IS_ACTIVE',
        'spyWarehouseUserAssignment.isActive' => 'IS_ACTIVE',
        'SpyWarehouseUserAssignmentTableMap::COL_IS_ACTIVE' => 'IS_ACTIVE',
        'COL_IS_ACTIVE' => 'IS_ACTIVE',
        'is_active' => 'IS_ACTIVE',
        'spy_warehouse_user_assignment.is_active' => 'IS_ACTIVE',
        'CreatedAt' => 'CREATED_AT',
        'SpyWarehouseUserAssignment.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyWarehouseUserAssignment.createdAt' => 'CREATED_AT',
        'SpyWarehouseUserAssignmentTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_warehouse_user_assignment.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyWarehouseUserAssignment.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyWarehouseUserAssignment.updatedAt' => 'UPDATED_AT',
        'SpyWarehouseUserAssignmentTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_warehouse_user_assignment.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_warehouse_user_assignment');
        $this->setPhpName('SpyWarehouseUserAssignment');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\WarehouseUser\\Persistence\\SpyWarehouseUserAssignment');
        $this->setPackage('src.Orm.Zed.WarehouseUser.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_warehouse_user_assignment_pk_seq');
        // columns
        $this->addPrimaryKey('id_warehouse_user_assignment', 'IdWarehouseUserAssignment', 'INTEGER', true, null, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 255, null);
        $this->addForeignKey('fk_warehouse', 'FkWarehouse', 'INTEGER', 'spy_stock', 'id_stock', true, null, null);
        $this->addColumn('user_uuid', 'UserUuid', 'VARCHAR', true, 255, null);
        $this->addColumn('is_active', 'IsActive', 'BOOLEAN', true, 1, false);
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
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'id_warehouse_user_assignment.fk_warehouse.user_uuid'],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWarehouseUserAssignment', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWarehouseUserAssignment', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWarehouseUserAssignment', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWarehouseUserAssignment', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWarehouseUserAssignment', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWarehouseUserAssignment', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdWarehouseUserAssignment', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyWarehouseUserAssignmentTableMap::CLASS_DEFAULT : SpyWarehouseUserAssignmentTableMap::OM_CLASS;
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
     * @return array (SpyWarehouseUserAssignment object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyWarehouseUserAssignmentTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyWarehouseUserAssignmentTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyWarehouseUserAssignmentTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyWarehouseUserAssignmentTableMap::OM_CLASS;
            /** @var SpyWarehouseUserAssignment $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyWarehouseUserAssignmentTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyWarehouseUserAssignmentTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyWarehouseUserAssignmentTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyWarehouseUserAssignment $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyWarehouseUserAssignmentTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_ID_WAREHOUSE_USER_ASSIGNMENT);
            $criteria->addSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_UUID);
            $criteria->addSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_FK_WAREHOUSE);
            $criteria->addSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_USER_UUID);
            $criteria->addSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_IS_ACTIVE);
            $criteria->addSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_warehouse_user_assignment');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.fk_warehouse');
            $criteria->addSelectColumn($alias . '.user_uuid');
            $criteria->addSelectColumn($alias . '.is_active');
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
            $criteria->removeSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_ID_WAREHOUSE_USER_ASSIGNMENT);
            $criteria->removeSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_UUID);
            $criteria->removeSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_FK_WAREHOUSE);
            $criteria->removeSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_USER_UUID);
            $criteria->removeSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_IS_ACTIVE);
            $criteria->removeSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyWarehouseUserAssignmentTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_warehouse_user_assignment');
            $criteria->removeSelectColumn($alias . '.uuid');
            $criteria->removeSelectColumn($alias . '.fk_warehouse');
            $criteria->removeSelectColumn($alias . '.user_uuid');
            $criteria->removeSelectColumn($alias . '.is_active');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyWarehouseUserAssignmentTableMap::DATABASE_NAME)->getTable(SpyWarehouseUserAssignmentTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyWarehouseUserAssignment or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyWarehouseUserAssignment object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyWarehouseUserAssignmentTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\WarehouseUser\Persistence\SpyWarehouseUserAssignment) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyWarehouseUserAssignmentTableMap::DATABASE_NAME);
            $criteria->add(SpyWarehouseUserAssignmentTableMap::COL_ID_WAREHOUSE_USER_ASSIGNMENT, (array) $values, Criteria::IN);
        }

        $query = SpyWarehouseUserAssignmentQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyWarehouseUserAssignmentTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyWarehouseUserAssignmentTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_warehouse_user_assignment table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyWarehouseUserAssignmentQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyWarehouseUserAssignment or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyWarehouseUserAssignment object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyWarehouseUserAssignmentTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyWarehouseUserAssignment object
        }

        if ($criteria->containsKey(SpyWarehouseUserAssignmentTableMap::COL_ID_WAREHOUSE_USER_ASSIGNMENT) && $criteria->keyContainsValue(SpyWarehouseUserAssignmentTableMap::COL_ID_WAREHOUSE_USER_ASSIGNMENT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyWarehouseUserAssignmentTableMap::COL_ID_WAREHOUSE_USER_ASSIGNMENT.')');
        }


        // Set the correct dbName
        $query = SpyWarehouseUserAssignmentQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
