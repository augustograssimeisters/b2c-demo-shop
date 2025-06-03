<?php

namespace Orm\Zed\GiftCard\Persistence\Map;

use Orm\Zed\GiftCard\Persistence\SpyGiftCardProductConfiguration;
use Orm\Zed\GiftCard\Persistence\SpyGiftCardProductConfigurationQuery;
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
 * This class defines the structure of the 'spy_gift_card_product_configuration' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyGiftCardProductConfigurationTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.GiftCard.Persistence.Map.SpyGiftCardProductConfigurationTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_gift_card_product_configuration';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyGiftCardProductConfiguration';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCardProductConfiguration';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.GiftCard.Persistence.SpyGiftCardProductConfiguration';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 4;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 4;

    /**
     * the column name for the id_gift_card_product_configuration field
     */
    public const COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION = 'spy_gift_card_product_configuration.id_gift_card_product_configuration';

    /**
     * the column name for the value field
     */
    public const COL_VALUE = 'spy_gift_card_product_configuration.value';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_gift_card_product_configuration.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_gift_card_product_configuration.updated_at';

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
        self::TYPE_PHPNAME       => ['IdGiftCardProductConfiguration', 'Value', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idGiftCardProductConfiguration', 'value', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyGiftCardProductConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION, SpyGiftCardProductConfigurationTableMap::COL_VALUE, SpyGiftCardProductConfigurationTableMap::COL_CREATED_AT, SpyGiftCardProductConfigurationTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_gift_card_product_configuration', 'value', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, ]
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
        self::TYPE_PHPNAME       => ['IdGiftCardProductConfiguration' => 0, 'Value' => 1, 'CreatedAt' => 2, 'UpdatedAt' => 3, ],
        self::TYPE_CAMELNAME     => ['idGiftCardProductConfiguration' => 0, 'value' => 1, 'createdAt' => 2, 'updatedAt' => 3, ],
        self::TYPE_COLNAME       => [SpyGiftCardProductConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION => 0, SpyGiftCardProductConfigurationTableMap::COL_VALUE => 1, SpyGiftCardProductConfigurationTableMap::COL_CREATED_AT => 2, SpyGiftCardProductConfigurationTableMap::COL_UPDATED_AT => 3, ],
        self::TYPE_FIELDNAME     => ['id_gift_card_product_configuration' => 0, 'value' => 1, 'created_at' => 2, 'updated_at' => 3, ],
        self::TYPE_NUM           => [0, 1, 2, 3, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdGiftCardProductConfiguration' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION',
        'SpyGiftCardProductConfiguration.IdGiftCardProductConfiguration' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION',
        'idGiftCardProductConfiguration' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION',
        'spyGiftCardProductConfiguration.idGiftCardProductConfiguration' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION',
        'SpyGiftCardProductConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION',
        'COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION',
        'id_gift_card_product_configuration' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION',
        'spy_gift_card_product_configuration.id_gift_card_product_configuration' => 'ID_GIFT_CARD_PRODUCT_CONFIGURATION',
        'Value' => 'VALUE',
        'SpyGiftCardProductConfiguration.Value' => 'VALUE',
        'value' => 'VALUE',
        'spyGiftCardProductConfiguration.value' => 'VALUE',
        'SpyGiftCardProductConfigurationTableMap::COL_VALUE' => 'VALUE',
        'COL_VALUE' => 'VALUE',
        'spy_gift_card_product_configuration.value' => 'VALUE',
        'CreatedAt' => 'CREATED_AT',
        'SpyGiftCardProductConfiguration.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyGiftCardProductConfiguration.createdAt' => 'CREATED_AT',
        'SpyGiftCardProductConfigurationTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_gift_card_product_configuration.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyGiftCardProductConfiguration.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyGiftCardProductConfiguration.updatedAt' => 'UPDATED_AT',
        'SpyGiftCardProductConfigurationTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_gift_card_product_configuration.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_gift_card_product_configuration');
        $this->setPhpName('SpyGiftCardProductConfiguration');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCardProductConfiguration');
        $this->setPackage('src.Orm.Zed.GiftCard.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_gift_card_product_configuration_pk_seq');
        // columns
        $this->addPrimaryKey('id_gift_card_product_configuration', 'IdGiftCardProductConfiguration', 'INTEGER', true, null, null);
        $this->addColumn('value', 'Value', 'INTEGER', true, null, null);
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
        $this->addRelation('SpyGiftCardProductConfigurationLink', '\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCardProductConfigurationLink', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_gift_card_product_configuration',
    1 => ':id_gift_card_product_configuration',
  ),
), null, null, 'SpyGiftCardProductConfigurationLinks', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfiguration', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfiguration', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfiguration', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfiguration', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfiguration', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductConfiguration', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdGiftCardProductConfiguration', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyGiftCardProductConfigurationTableMap::CLASS_DEFAULT : SpyGiftCardProductConfigurationTableMap::OM_CLASS;
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
     * @return array (SpyGiftCardProductConfiguration object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyGiftCardProductConfigurationTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyGiftCardProductConfigurationTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyGiftCardProductConfigurationTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyGiftCardProductConfigurationTableMap::OM_CLASS;
            /** @var SpyGiftCardProductConfiguration $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyGiftCardProductConfigurationTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyGiftCardProductConfigurationTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyGiftCardProductConfigurationTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyGiftCardProductConfiguration $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyGiftCardProductConfigurationTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyGiftCardProductConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION);
            $criteria->addSelectColumn(SpyGiftCardProductConfigurationTableMap::COL_VALUE);
            $criteria->addSelectColumn(SpyGiftCardProductConfigurationTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyGiftCardProductConfigurationTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_gift_card_product_configuration');
            $criteria->addSelectColumn($alias . '.value');
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
            $criteria->removeSelectColumn(SpyGiftCardProductConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION);
            $criteria->removeSelectColumn(SpyGiftCardProductConfigurationTableMap::COL_VALUE);
            $criteria->removeSelectColumn(SpyGiftCardProductConfigurationTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyGiftCardProductConfigurationTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_gift_card_product_configuration');
            $criteria->removeSelectColumn($alias . '.value');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyGiftCardProductConfigurationTableMap::DATABASE_NAME)->getTable(SpyGiftCardProductConfigurationTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyGiftCardProductConfiguration or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyGiftCardProductConfiguration object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardProductConfigurationTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductConfiguration) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyGiftCardProductConfigurationTableMap::DATABASE_NAME);
            $criteria->add(SpyGiftCardProductConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION, (array) $values, Criteria::IN);
        }

        $query = SpyGiftCardProductConfigurationQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyGiftCardProductConfigurationTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyGiftCardProductConfigurationTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_gift_card_product_configuration table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyGiftCardProductConfigurationQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyGiftCardProductConfiguration or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyGiftCardProductConfiguration object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardProductConfigurationTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyGiftCardProductConfiguration object
        }

        if ($criteria->containsKey(SpyGiftCardProductConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION) && $criteria->keyContainsValue(SpyGiftCardProductConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyGiftCardProductConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_CONFIGURATION.')');
        }


        // Set the correct dbName
        $query = SpyGiftCardProductConfigurationQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
