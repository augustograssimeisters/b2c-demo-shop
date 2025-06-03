<?php

namespace Orm\Zed\Wishlist\Persistence\Map;

use Orm\Zed\Wishlist\Persistence\SpyWishlistItem;
use Orm\Zed\Wishlist\Persistence\SpyWishlistItemQuery;
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
 * This class defines the structure of the 'spy_wishlist_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyWishlistItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.Wishlist.Persistence.Map.SpyWishlistItemTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_wishlist_item';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyWishlistItem';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\Wishlist\\Persistence\\SpyWishlistItem';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.Wishlist.Persistence.SpyWishlistItem';

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
     * the column name for the id_wishlist_item field
     */
    public const COL_ID_WISHLIST_ITEM = 'spy_wishlist_item.id_wishlist_item';

    /**
     * the column name for the fk_wishlist field
     */
    public const COL_FK_WISHLIST = 'spy_wishlist_item.fk_wishlist';

    /**
     * the column name for the product_configuration_instance_data field
     */
    public const COL_PRODUCT_CONFIGURATION_INSTANCE_DATA = 'spy_wishlist_item.product_configuration_instance_data';

    /**
     * the column name for the sku field
     */
    public const COL_SKU = 'spy_wishlist_item.sku';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_wishlist_item.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_wishlist_item.updated_at';

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
        self::TYPE_PHPNAME       => ['IdWishlistItem', 'FkWishlist', 'ProductConfigurationInstanceData', 'Sku', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idWishlistItem', 'fkWishlist', 'productConfigurationInstanceData', 'sku', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM, SpyWishlistItemTableMap::COL_FK_WISHLIST, SpyWishlistItemTableMap::COL_PRODUCT_CONFIGURATION_INSTANCE_DATA, SpyWishlistItemTableMap::COL_SKU, SpyWishlistItemTableMap::COL_CREATED_AT, SpyWishlistItemTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_wishlist_item', 'fk_wishlist', 'product_configuration_instance_data', 'sku', 'created_at', 'updated_at', ],
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
        self::TYPE_PHPNAME       => ['IdWishlistItem' => 0, 'FkWishlist' => 1, 'ProductConfigurationInstanceData' => 2, 'Sku' => 3, 'CreatedAt' => 4, 'UpdatedAt' => 5, ],
        self::TYPE_CAMELNAME     => ['idWishlistItem' => 0, 'fkWishlist' => 1, 'productConfigurationInstanceData' => 2, 'sku' => 3, 'createdAt' => 4, 'updatedAt' => 5, ],
        self::TYPE_COLNAME       => [SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM => 0, SpyWishlistItemTableMap::COL_FK_WISHLIST => 1, SpyWishlistItemTableMap::COL_PRODUCT_CONFIGURATION_INSTANCE_DATA => 2, SpyWishlistItemTableMap::COL_SKU => 3, SpyWishlistItemTableMap::COL_CREATED_AT => 4, SpyWishlistItemTableMap::COL_UPDATED_AT => 5, ],
        self::TYPE_FIELDNAME     => ['id_wishlist_item' => 0, 'fk_wishlist' => 1, 'product_configuration_instance_data' => 2, 'sku' => 3, 'created_at' => 4, 'updated_at' => 5, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdWishlistItem' => 'ID_WISHLIST_ITEM',
        'SpyWishlistItem.IdWishlistItem' => 'ID_WISHLIST_ITEM',
        'idWishlistItem' => 'ID_WISHLIST_ITEM',
        'spyWishlistItem.idWishlistItem' => 'ID_WISHLIST_ITEM',
        'SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM' => 'ID_WISHLIST_ITEM',
        'COL_ID_WISHLIST_ITEM' => 'ID_WISHLIST_ITEM',
        'id_wishlist_item' => 'ID_WISHLIST_ITEM',
        'spy_wishlist_item.id_wishlist_item' => 'ID_WISHLIST_ITEM',
        'FkWishlist' => 'FK_WISHLIST',
        'SpyWishlistItem.FkWishlist' => 'FK_WISHLIST',
        'fkWishlist' => 'FK_WISHLIST',
        'spyWishlistItem.fkWishlist' => 'FK_WISHLIST',
        'SpyWishlistItemTableMap::COL_FK_WISHLIST' => 'FK_WISHLIST',
        'COL_FK_WISHLIST' => 'FK_WISHLIST',
        'fk_wishlist' => 'FK_WISHLIST',
        'spy_wishlist_item.fk_wishlist' => 'FK_WISHLIST',
        'ProductConfigurationInstanceData' => 'PRODUCT_CONFIGURATION_INSTANCE_DATA',
        'SpyWishlistItem.ProductConfigurationInstanceData' => 'PRODUCT_CONFIGURATION_INSTANCE_DATA',
        'productConfigurationInstanceData' => 'PRODUCT_CONFIGURATION_INSTANCE_DATA',
        'spyWishlistItem.productConfigurationInstanceData' => 'PRODUCT_CONFIGURATION_INSTANCE_DATA',
        'SpyWishlistItemTableMap::COL_PRODUCT_CONFIGURATION_INSTANCE_DATA' => 'PRODUCT_CONFIGURATION_INSTANCE_DATA',
        'COL_PRODUCT_CONFIGURATION_INSTANCE_DATA' => 'PRODUCT_CONFIGURATION_INSTANCE_DATA',
        'product_configuration_instance_data' => 'PRODUCT_CONFIGURATION_INSTANCE_DATA',
        'spy_wishlist_item.product_configuration_instance_data' => 'PRODUCT_CONFIGURATION_INSTANCE_DATA',
        'Sku' => 'SKU',
        'SpyWishlistItem.Sku' => 'SKU',
        'sku' => 'SKU',
        'spyWishlistItem.sku' => 'SKU',
        'SpyWishlistItemTableMap::COL_SKU' => 'SKU',
        'COL_SKU' => 'SKU',
        'spy_wishlist_item.sku' => 'SKU',
        'CreatedAt' => 'CREATED_AT',
        'SpyWishlistItem.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyWishlistItem.createdAt' => 'CREATED_AT',
        'SpyWishlistItemTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_wishlist_item.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyWishlistItem.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyWishlistItem.updatedAt' => 'UPDATED_AT',
        'SpyWishlistItemTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_wishlist_item.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_wishlist_item');
        $this->setPhpName('SpyWishlistItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\Wishlist\\Persistence\\SpyWishlistItem');
        $this->setPackage('src.Orm.Zed.Wishlist.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_wishlist_item_pk_seq');
        // columns
        $this->addPrimaryKey('id_wishlist_item', 'IdWishlistItem', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_wishlist', 'FkWishlist', 'INTEGER', 'spy_wishlist', 'id_wishlist', true, null, null);
        $this->addColumn('product_configuration_instance_data', 'ProductConfigurationInstanceData', 'CLOB', false, null, null);
        $this->addForeignKey('sku', 'Sku', 'VARCHAR', 'spy_product', 'sku', true, 255, null);
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
        $this->addRelation('SpyWishlist', '\\Orm\\Zed\\Wishlist\\Persistence\\SpyWishlist', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_wishlist',
    1 => ':id_wishlist',
  ),
), null, null, null, false);
        $this->addRelation('SpyProduct', '\\Orm\\Zed\\Product\\Persistence\\SpyProduct', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':sku',
    1 => ':sku',
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlistItem', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlistItem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlistItem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlistItem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlistItem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdWishlistItem', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdWishlistItem', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyWishlistItemTableMap::CLASS_DEFAULT : SpyWishlistItemTableMap::OM_CLASS;
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
     * @return array (SpyWishlistItem object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyWishlistItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyWishlistItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyWishlistItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyWishlistItemTableMap::OM_CLASS;
            /** @var SpyWishlistItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyWishlistItemTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyWishlistItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyWishlistItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyWishlistItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyWishlistItemTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM);
            $criteria->addSelectColumn(SpyWishlistItemTableMap::COL_FK_WISHLIST);
            $criteria->addSelectColumn(SpyWishlistItemTableMap::COL_PRODUCT_CONFIGURATION_INSTANCE_DATA);
            $criteria->addSelectColumn(SpyWishlistItemTableMap::COL_SKU);
            $criteria->addSelectColumn(SpyWishlistItemTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyWishlistItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_wishlist_item');
            $criteria->addSelectColumn($alias . '.fk_wishlist');
            $criteria->addSelectColumn($alias . '.product_configuration_instance_data');
            $criteria->addSelectColumn($alias . '.sku');
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
            $criteria->removeSelectColumn(SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM);
            $criteria->removeSelectColumn(SpyWishlistItemTableMap::COL_FK_WISHLIST);
            $criteria->removeSelectColumn(SpyWishlistItemTableMap::COL_PRODUCT_CONFIGURATION_INSTANCE_DATA);
            $criteria->removeSelectColumn(SpyWishlistItemTableMap::COL_SKU);
            $criteria->removeSelectColumn(SpyWishlistItemTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyWishlistItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_wishlist_item');
            $criteria->removeSelectColumn($alias . '.fk_wishlist');
            $criteria->removeSelectColumn($alias . '.product_configuration_instance_data');
            $criteria->removeSelectColumn($alias . '.sku');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyWishlistItemTableMap::DATABASE_NAME)->getTable(SpyWishlistItemTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyWishlistItem or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyWishlistItem object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyWishlistItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Wishlist\Persistence\SpyWishlistItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyWishlistItemTableMap::DATABASE_NAME);
            $criteria->add(SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM, (array) $values, Criteria::IN);
        }

        $query = SpyWishlistItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyWishlistItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyWishlistItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_wishlist_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyWishlistItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyWishlistItem or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyWishlistItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyWishlistItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyWishlistItem object
        }

        if ($criteria->containsKey(SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM) && $criteria->keyContainsValue(SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM.')');
        }


        // Set the correct dbName
        $query = SpyWishlistItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
