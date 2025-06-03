<?php

namespace Orm\Zed\GiftCard\Persistence\Map;

use Orm\Zed\GiftCard\Persistence\SpyGiftCardProductConfigurationLink;
use Orm\Zed\GiftCard\Persistence\SpyGiftCardProductConfigurationLinkQuery;
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
 * This class defines the structure of the 'spy_gift_card_product_configuration_link' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyGiftCardProductConfigurationLinkTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.GiftCard.Persistence.Map.SpyGiftCardProductConfigurationLinkTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_gift_card_product_configuration_link';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyGiftCardProductConfigurationLink';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCardProductConfigurationLink';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.GiftCard.Persistence.SpyGiftCardProductConfigurationLink';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 3;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 3;

    /**
     * the column name for the id_gift_card_product_configuration_link field
     */
    public const COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK = 'spy_gift_card_product_configuration_link.id_gift_card_product_configuration_link';

    /**
     * the column name for the fk_gift_card_product_configuration field
     */
    public const COL_FK_GIFT_CARD_PRODUCT_CONFIGURATION = 'spy_gift_card_product_configuration_link.fk_gift_card_product_configuration';

    /**
     * the column name for the fk_product field
     */
    public const COL_FK_PRODUCT = 'spy_gift_card_product_configuration_link.fk_product';

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
        self::TYPE_PHPNAME       => ['IdGiftCardProductConfigurationLink', 'FkGiftCardProductConfiguration', 'FkProduct', ],
        self::TYPE_CAMELNAME     => ['idGiftCardProductConfigurationLink', 'fkGiftCardProductConfiguration', 'fkProduct', ],
        self::TYPE_COLNAME       => [SpyGiftCardProductConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK, SpyGiftCardProductConfigurationLinkTableMap::COL_FK_GIFT_CARD_PRODUCT_CONFIGURATION, SpyGiftCardProductConfigurationLinkTableMap::COL_FK_PRODUCT, ],
        self::TYPE_FIELDNAME     => ['id_gift_card_product_configuration_link', 'fk_gift_card_product_configuration', 'fk_product', ],
        self::TYPE_NUM           => [0, 1, 2, ]
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
        self::TYPE_PHPNAME       => ['IdGiftCardProductConfigurationLink' => 0, 'FkGiftCardProductConfiguration' => 1, 'FkProduct' => 2, ],
        self::TYPE_CAMELNAME     => ['idGiftCardProductConfigurationLink' => 0, 'fkGiftCardProductConfiguration' => 1, 'fkProduct' => 2, ],
        self::TYPE_COLNAME       => [SpyGiftCardProductConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK => 0, SpyGiftCardProductConfigurationLinkTableMap::COL_FK_GIFT_CARD_PRODUCT_CONFIGURATION => 1, SpyGiftCardProductConfigurationLinkTableMap::COL_FK_PRODUCT => 2, ],
        self::TYPE_FIELDNAME     => ['id_gift_card_product_configuration_link' => 0, 'fk_gift_card_product_configuration' => 1, 'fk_product' => 2, ],
        self::TYPE_NUM           => [0, 1, 2, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdGiftCardProductConfigurationLink' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK',
        'SpyGiftCardProductConfigurationLink.IdGiftCardProductConfigurationLink' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK',
        'idGiftCardProductConfigurationLink' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK',
        'spyGiftCardProductConfigurationLink.idGiftCardProductConfigurationLink' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK',
        'SpyGiftCardProductConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK',
        'COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK',
        'id_gift_card_product_configuration_link' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK',
        'spy_gift_card_product_configuration_link.id_gift_card_product_configuration_link' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK',
        'FkGiftCardProductConfiguration' => 'FK_GIFT_CARD_PRODUCT_CONFIGURATION',
        'SpyGiftCardProductConfigurationLink.FkGiftCardProductConfiguration' => 'FK_GIFT_CARD_PRODUCT_CONFIGURATION',
        'fkGiftCardProductConfiguration' => 'FK_GIFT_CARD_PRODUCT_CONFIGURATION',
        'spyGiftCardProductConfigurationLink.fkGiftCardProductConfiguration' => 'FK_GIFT_CARD_PRODUCT_CONFIGURATION',
        'SpyGiftCardProductConfigurationLinkTableMap::COL_FK_GIFT_CARD_PRODUCT_CONFIGURATION' => 'FK_GIFT_CARD_PRODUCT_CONFIGURATION',
        'COL_FK_GIFT_CARD_PRODUCT_CONFIGURATION' => 'FK_GIFT_CARD_PRODUCT_CONFIGURATION',
        'fk_gift_card_product_configuration' => 'FK_GIFT_CARD_PRODUCT_CONFIGURATION',
        'spy_gift_card_product_configuration_link.fk_gift_card_product_configuration' => 'FK_GIFT_CARD_PRODUCT_CONFIGURATION',
        'FkProduct' => 'FK_PRODUCT',
        'SpyGiftCardProductConfigurationLink.FkProduct' => 'FK_PRODUCT',
        'fkProduct' => 'FK_PRODUCT',
        'spyGiftCardProductConfigurationLink.fkProduct' => 'FK_PRODUCT',
        'SpyGiftCardProductConfigurationLinkTableMap::COL_FK_PRODUCT' => 'FK_PRODUCT',
        'COL_FK_PRODUCT' => 'FK_PRODUCT',
        'fk_product' => 'FK_PRODUCT',
        'spy_gift_card_product_configuration_link.fk_product' => 'FK_PRODUCT',
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
        $this->setName('spy_gift_card_product_configuration_link');
        $this->setPhpName('SpyGiftCardProductConfigurationLink');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCardProductConfigurationLink');
        $this->setPackage('src.Orm.Zed.GiftCard.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_gift_card_product_configuration_link_pk_seq');
        // columns
        $this->addPrimaryKey('id_gift_card_product_configuration_link', 'IdGiftCardProductConfigurationLink', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_gift_card_product_configuration', 'FkGiftCardProductConfiguration', 'INTEGER', 'spy_gift_card_product_configuration', 'id_gift_card_product_configuration', true, null, null);
        $this->addForeignKey('fk_product', 'FkProduct', 'INTEGER', 'spy_product', 'id_product', true, null, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('SpyProduct', '\\Orm\\Zed\\Product\\Persistence\\SpyProduct', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_product',
    1 => ':id_product',
  ),
), null, null, null, false);
        $this->addRelation('SpyGiftCardProductConfiguration', '\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCardProductConfiguration', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_gift_card_product_configuration',
    1 => ':id_gift_card_product_configuration',
  ),
), null, null, null, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfigurationLink', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfigurationLink', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfigurationLink', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfigurationLink', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfigurationLink', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfigurationLink', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdGiftCardProductConfigurationLink', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyGiftCardProductConfigurationLinkTableMap::CLASS_DEFAULT : SpyGiftCardProductConfigurationLinkTableMap::OM_CLASS;
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
     * @return array (SpyGiftCardProductConfigurationLink object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyGiftCardProductConfigurationLinkTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyGiftCardProductConfigurationLinkTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyGiftCardProductConfigurationLinkTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyGiftCardProductConfigurationLinkTableMap::OM_CLASS;
            /** @var SpyGiftCardProductConfigurationLink $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyGiftCardProductConfigurationLinkTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyGiftCardProductConfigurationLinkTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyGiftCardProductConfigurationLinkTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyGiftCardProductConfigurationLink $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyGiftCardProductConfigurationLinkTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyGiftCardProductConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK);
            $criteria->addSelectColumn(SpyGiftCardProductConfigurationLinkTableMap::COL_FK_GIFT_CARD_PRODUCT_CONFIGURATION);
            $criteria->addSelectColumn(SpyGiftCardProductConfigurationLinkTableMap::COL_FK_PRODUCT);
        } else {
            $criteria->addSelectColumn($alias . '.id_gift_card_product_configuration_link');
            $criteria->addSelectColumn($alias . '.fk_gift_card_product_configuration');
            $criteria->addSelectColumn($alias . '.fk_product');
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
            $criteria->removeSelectColumn(SpyGiftCardProductConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK);
            $criteria->removeSelectColumn(SpyGiftCardProductConfigurationLinkTableMap::COL_FK_GIFT_CARD_PRODUCT_CONFIGURATION);
            $criteria->removeSelectColumn(SpyGiftCardProductConfigurationLinkTableMap::COL_FK_PRODUCT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_gift_card_product_configuration_link');
            $criteria->removeSelectColumn($alias . '.fk_gift_card_product_configuration');
            $criteria->removeSelectColumn($alias . '.fk_product');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyGiftCardProductConfigurationLinkTableMap::DATABASE_NAME)->getTable(SpyGiftCardProductConfigurationLinkTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyGiftCardProductConfigurationLink or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyGiftCardProductConfigurationLink object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardProductConfigurationLinkTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductConfigurationLink) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyGiftCardProductConfigurationLinkTableMap::DATABASE_NAME);
            $criteria->add(SpyGiftCardProductConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK, (array) $values, Criteria::IN);
        }

        $query = SpyGiftCardProductConfigurationLinkQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyGiftCardProductConfigurationLinkTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyGiftCardProductConfigurationLinkTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_gift_card_product_configuration_link table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyGiftCardProductConfigurationLinkQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyGiftCardProductConfigurationLink or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyGiftCardProductConfigurationLink object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardProductConfigurationLinkTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyGiftCardProductConfigurationLink object
        }

        if ($criteria->containsKey(SpyGiftCardProductConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK) && $criteria->keyContainsValue(SpyGiftCardProductConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyGiftCardProductConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION_LINK.')');
        }


        // Set the correct dbName
        $query = SpyGiftCardProductConfigurationLinkQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
