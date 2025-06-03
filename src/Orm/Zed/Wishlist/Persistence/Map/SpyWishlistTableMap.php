<?php

namespace Orm\Zed\Wishlist\Persistence\Map;

use Orm\Zed\Wishlist\Persistence\SpyWishlist;
use Orm\Zed\Wishlist\Persistence\SpyWishlistQuery;
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
 * This class defines the structure of the 'spy_wishlist' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyWishlistTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.Wishlist.Persistence.Map.SpyWishlistTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_wishlist';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyWishlist';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\Wishlist\\Persistence\\SpyWishlist';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.Wishlist.Persistence.SpyWishlist';

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
     * the column name for the id_wishlist field
     */
    public const COL_ID_WISHLIST = 'spy_wishlist.id_wishlist';

    /**
     * the column name for the fk_customer field
     */
    public const COL_FK_CUSTOMER = 'spy_wishlist.fk_customer';

    /**
     * the column name for the name field
     */
    public const COL_NAME = 'spy_wishlist.name';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_wishlist.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_wishlist.updated_at';

    /**
     * the column name for the uuid field
     */
    public const COL_UUID = 'spy_wishlist.uuid';

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
        self::TYPE_PHPNAME       => ['IdWishlist', 'FkCustomer', 'Name', 'CreatedAt', 'UpdatedAt', 'Uuid', ],
        self::TYPE_CAMELNAME     => ['idWishlist', 'fkCustomer', 'name', 'createdAt', 'updatedAt', 'uuid', ],
        self::TYPE_COLNAME       => [SpyWishlistTableMap::COL_ID_WISHLIST, SpyWishlistTableMap::COL_FK_CUSTOMER, SpyWishlistTableMap::COL_NAME, SpyWishlistTableMap::COL_CREATED_AT, SpyWishlistTableMap::COL_UPDATED_AT, SpyWishlistTableMap::COL_UUID, ],
        self::TYPE_FIELDNAME     => ['id_wishlist', 'fk_customer', 'name', 'created_at', 'updated_at', 'uuid', ],
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
        self::TYPE_PHPNAME       => ['IdWishlist' => 0, 'FkCustomer' => 1, 'Name' => 2, 'CreatedAt' => 3, 'UpdatedAt' => 4, 'Uuid' => 5, ],
        self::TYPE_CAMELNAME     => ['idWishlist' => 0, 'fkCustomer' => 1, 'name' => 2, 'createdAt' => 3, 'updatedAt' => 4, 'uuid' => 5, ],
        self::TYPE_COLNAME       => [SpyWishlistTableMap::COL_ID_WISHLIST => 0, SpyWishlistTableMap::COL_FK_CUSTOMER => 1, SpyWishlistTableMap::COL_NAME => 2, SpyWishlistTableMap::COL_CREATED_AT => 3, SpyWishlistTableMap::COL_UPDATED_AT => 4, SpyWishlistTableMap::COL_UUID => 5, ],
        self::TYPE_FIELDNAME     => ['id_wishlist' => 0, 'fk_customer' => 1, 'name' => 2, 'created_at' => 3, 'updated_at' => 4, 'uuid' => 5, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdWishlist' => 'ID_WISHLIST',
        'SpyWishlist.IdWishlist' => 'ID_WISHLIST',
        'idWishlist' => 'ID_WISHLIST',
        'spyWishlist.idWishlist' => 'ID_WISHLIST',
        'SpyWishlistTableMap::COL_ID_WISHLIST' => 'ID_WISHLIST',
        'COL_ID_WISHLIST' => 'ID_WISHLIST',
        'id_wishlist' => 'ID_WISHLIST',
        'spy_wishlist.id_wishlist' => 'ID_WISHLIST',
        'FkCustomer' => 'FK_CUSTOMER',
        'SpyWishlist.FkCustomer' => 'FK_CUSTOMER',
        'fkCustomer' => 'FK_CUSTOMER',
        'spyWishlist.fkCustomer' => 'FK_CUSTOMER',
        'SpyWishlistTableMap::COL_FK_CUSTOMER' => 'FK_CUSTOMER',
        'COL_FK_CUSTOMER' => 'FK_CUSTOMER',
        'fk_customer' => 'FK_CUSTOMER',
        'spy_wishlist.fk_customer' => 'FK_CUSTOMER',
        'Name' => 'NAME',
        'SpyWishlist.Name' => 'NAME',
        'name' => 'NAME',
        'spyWishlist.name' => 'NAME',
        'SpyWishlistTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_wishlist.name' => 'NAME',
        'CreatedAt' => 'CREATED_AT',
        'SpyWishlist.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyWishlist.createdAt' => 'CREATED_AT',
        'SpyWishlistTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_wishlist.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyWishlist.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyWishlist.updatedAt' => 'UPDATED_AT',
        'SpyWishlistTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_wishlist.updated_at' => 'UPDATED_AT',
        'Uuid' => 'UUID',
        'SpyWishlist.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spyWishlist.uuid' => 'UUID',
        'SpyWishlistTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_wishlist.uuid' => 'UUID',
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
        $this->setName('spy_wishlist');
        $this->setPhpName('SpyWishlist');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\Wishlist\\Persistence\\SpyWishlist');
        $this->setPackage('src.Orm.Zed.Wishlist.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_wishlist_pk_seq');
        // columns
        $this->addPrimaryKey('id_wishlist', 'IdWishlist', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_customer', 'FkCustomer', 'INTEGER', 'spy_customer', 'id_customer', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 255, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('SpyCustomer', '\\Orm\\Zed\\Customer\\Persistence\\SpyCustomer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_customer',
    1 => ':id_customer',
  ),
), null, null, null, false);
        $this->addRelation('SpyWishlistItem', '\\Orm\\Zed\\Wishlist\\Persistence\\SpyWishlistItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_wishlist',
    1 => ':id_wishlist',
  ),
), null, null, 'SpyWishlistItems', false);
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
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'fk_customer.id_wishlist'],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlist', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlist', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlist', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlist', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlist', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlist', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdWishlist', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyWishlistTableMap::CLASS_DEFAULT : SpyWishlistTableMap::OM_CLASS;
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
     * @return array (SpyWishlist object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyWishlistTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyWishlistTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyWishlistTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyWishlistTableMap::OM_CLASS;
            /** @var SpyWishlist $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyWishlistTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyWishlistTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyWishlistTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyWishlist $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyWishlistTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyWishlistTableMap::COL_ID_WISHLIST);
            $criteria->addSelectColumn(SpyWishlistTableMap::COL_FK_CUSTOMER);
            $criteria->addSelectColumn(SpyWishlistTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyWishlistTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyWishlistTableMap::COL_UPDATED_AT);
            $criteria->addSelectColumn(SpyWishlistTableMap::COL_UUID);
        } else {
            $criteria->addSelectColumn($alias . '.id_wishlist');
            $criteria->addSelectColumn($alias . '.fk_customer');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
            $criteria->addSelectColumn($alias . '.uuid');
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
            $criteria->removeSelectColumn(SpyWishlistTableMap::COL_ID_WISHLIST);
            $criteria->removeSelectColumn(SpyWishlistTableMap::COL_FK_CUSTOMER);
            $criteria->removeSelectColumn(SpyWishlistTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyWishlistTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyWishlistTableMap::COL_UPDATED_AT);
            $criteria->removeSelectColumn(SpyWishlistTableMap::COL_UUID);
        } else {
            $criteria->removeSelectColumn($alias . '.id_wishlist');
            $criteria->removeSelectColumn($alias . '.fk_customer');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.created_at');
            $criteria->removeSelectColumn($alias . '.updated_at');
            $criteria->removeSelectColumn($alias . '.uuid');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyWishlistTableMap::DATABASE_NAME)->getTable(SpyWishlistTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyWishlist or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyWishlist object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyWishlistTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Wishlist\Persistence\SpyWishlist) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyWishlistTableMap::DATABASE_NAME);
            $criteria->add(SpyWishlistTableMap::COL_ID_WISHLIST, (array) $values, Criteria::IN);
        }

        $query = SpyWishlistQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyWishlistTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyWishlistTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_wishlist table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyWishlistQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyWishlist or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyWishlist object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyWishlistTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyWishlist object
        }

        if ($criteria->containsKey(SpyWishlistTableMap::COL_ID_WISHLIST) && $criteria->keyContainsValue(SpyWishlistTableMap::COL_ID_WISHLIST) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyWishlistTableMap::COL_ID_WISHLIST.')');
        }


        // Set the correct dbName
        $query = SpyWishlistQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
