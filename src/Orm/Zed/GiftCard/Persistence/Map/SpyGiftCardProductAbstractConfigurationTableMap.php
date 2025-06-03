<?php

namespace Orm\Zed\GiftCard\Persistence\Map;

use Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfiguration;
use Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery;
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
 * This class defines the structure of the 'spy_gift_card_product_abstract_configuration' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyGiftCardProductAbstractConfigurationTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.GiftCard.Persistence.Map.SpyGiftCardProductAbstractConfigurationTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_gift_card_product_abstract_configuration';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyGiftCardProductAbstractConfiguration';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCardProductAbstractConfiguration';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.GiftCard.Persistence.SpyGiftCardProductAbstractConfiguration';

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
     * the column name for the id_gift_card_product_abstract_configuration field
     */
    public const COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION = 'spy_gift_card_product_abstract_configuration.id_gift_card_product_abstract_configuration';

    /**
     * the column name for the code_pattern field
     */
    public const COL_CODE_PATTERN = 'spy_gift_card_product_abstract_configuration.code_pattern';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_gift_card_product_abstract_configuration.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_gift_card_product_abstract_configuration.updated_at';

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
        self::TYPE_PHPNAME       => ['IdGiftCardProductAbstractConfiguration', 'CodePattern', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idGiftCardProductAbstractConfiguration', 'codePattern', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, SpyGiftCardProductAbstractConfigurationTableMap::COL_CODE_PATTERN, SpyGiftCardProductAbstractConfigurationTableMap::COL_CREATED_AT, SpyGiftCardProductAbstractConfigurationTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_gift_card_product_abstract_configuration', 'code_pattern', 'created_at', 'updated_at', ],
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
        self::TYPE_PHPNAME       => ['IdGiftCardProductAbstractConfiguration' => 0, 'CodePattern' => 1, 'CreatedAt' => 2, 'UpdatedAt' => 3, ],
        self::TYPE_CAMELNAME     => ['idGiftCardProductAbstractConfiguration' => 0, 'codePattern' => 1, 'createdAt' => 2, 'updatedAt' => 3, ],
        self::TYPE_COLNAME       => [SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION => 0, SpyGiftCardProductAbstractConfigurationTableMap::COL_CODE_PATTERN => 1, SpyGiftCardProductAbstractConfigurationTableMap::COL_CREATED_AT => 2, SpyGiftCardProductAbstractConfigurationTableMap::COL_UPDATED_AT => 3, ],
        self::TYPE_FIELDNAME     => ['id_gift_card_product_abstract_configuration' => 0, 'code_pattern' => 1, 'created_at' => 2, 'updated_at' => 3, ],
        self::TYPE_NUM           => [0, 1, 2, 3, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdGiftCardProductAbstractConfiguration' => 'ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION',
        'SpyGiftCardProductAbstractConfiguration.IdGiftCardProductAbstractConfiguration' => 'ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION',
        'idGiftCardProductAbstractConfiguration' => 'ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION',
        'spyGiftCardProductAbstractConfiguration.idGiftCardProductAbstractConfiguration' => 'ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION',
        'SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION' => 'ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION',
        'COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION' => 'ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION',
        'id_gift_card_product_abstract_configuration' => 'ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION',
        'spy_gift_card_product_abstract_configuration.id_gift_card_product_abstract_configuration' => 'ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION',
        'CodePattern' => 'CODE_PATTERN',
        'SpyGiftCardProductAbstractConfiguration.CodePattern' => 'CODE_PATTERN',
        'codePattern' => 'CODE_PATTERN',
        'spyGiftCardProductAbstractConfiguration.codePattern' => 'CODE_PATTERN',
        'SpyGiftCardProductAbstractConfigurationTableMap::COL_CODE_PATTERN' => 'CODE_PATTERN',
        'COL_CODE_PATTERN' => 'CODE_PATTERN',
        'code_pattern' => 'CODE_PATTERN',
        'spy_gift_card_product_abstract_configuration.code_pattern' => 'CODE_PATTERN',
        'CreatedAt' => 'CREATED_AT',
        'SpyGiftCardProductAbstractConfiguration.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyGiftCardProductAbstractConfiguration.createdAt' => 'CREATED_AT',
        'SpyGiftCardProductAbstractConfigurationTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_gift_card_product_abstract_configuration.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyGiftCardProductAbstractConfiguration.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyGiftCardProductAbstractConfiguration.updatedAt' => 'UPDATED_AT',
        'SpyGiftCardProductAbstractConfigurationTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_gift_card_product_abstract_configuration.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_gift_card_product_abstract_configuration');
        $this->setPhpName('SpyGiftCardProductAbstractConfiguration');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCardProductAbstractConfiguration');
        $this->setPackage('src.Orm.Zed.GiftCard.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_gift_card_product_abstract_configuration_pk_seq');
        // columns
        $this->addPrimaryKey('id_gift_card_product_abstract_configuration', 'IdGiftCardProductAbstractConfiguration', 'INTEGER', true, null, null);
        $this->addColumn('code_pattern', 'CodePattern', 'VARCHAR', true, 40, null);
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
        $this->addRelation('SpyGiftCardProductAbstractConfigurationLink', '\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCardProductAbstractConfigurationLink', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_gift_card_product_abstract_configuration',
    1 => ':id_gift_card_product_abstract_configuration',
  ),
), null, null, 'SpyGiftCardProductAbstractConfigurationLinks', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductAbstractConfiguration', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductAbstractConfiguration', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductAbstractConfiguration', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductAbstractConfiguration', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductAbstractConfiguration', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCardProductAbstractConfiguration', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdGiftCardProductAbstractConfiguration', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyGiftCardProductAbstractConfigurationTableMap::CLASS_DEFAULT : SpyGiftCardProductAbstractConfigurationTableMap::OM_CLASS;
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
     * @return array (SpyGiftCardProductAbstractConfiguration object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyGiftCardProductAbstractConfigurationTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyGiftCardProductAbstractConfigurationTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyGiftCardProductAbstractConfigurationTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyGiftCardProductAbstractConfigurationTableMap::OM_CLASS;
            /** @var SpyGiftCardProductAbstractConfiguration $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyGiftCardProductAbstractConfigurationTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyGiftCardProductAbstractConfigurationTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyGiftCardProductAbstractConfigurationTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyGiftCardProductAbstractConfiguration $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyGiftCardProductAbstractConfigurationTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION);
            $criteria->addSelectColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_CODE_PATTERN);
            $criteria->addSelectColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_gift_card_product_abstract_configuration');
            $criteria->addSelectColumn($alias . '.code_pattern');
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
            $criteria->removeSelectColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION);
            $criteria->removeSelectColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_CODE_PATTERN);
            $criteria->removeSelectColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_gift_card_product_abstract_configuration');
            $criteria->removeSelectColumn($alias . '.code_pattern');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyGiftCardProductAbstractConfigurationTableMap::DATABASE_NAME)->getTable(SpyGiftCardProductAbstractConfigurationTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyGiftCardProductAbstractConfiguration or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyGiftCardProductAbstractConfiguration object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardProductAbstractConfigurationTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfiguration) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyGiftCardProductAbstractConfigurationTableMap::DATABASE_NAME);
            $criteria->add(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, (array) $values, Criteria::IN);
        }

        $query = SpyGiftCardProductAbstractConfigurationQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyGiftCardProductAbstractConfigurationTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyGiftCardProductAbstractConfigurationTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_gift_card_product_abstract_configuration table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyGiftCardProductAbstractConfigurationQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyGiftCardProductAbstractConfiguration or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyGiftCardProductAbstractConfiguration object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardProductAbstractConfigurationTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyGiftCardProductAbstractConfiguration object
        }

        if ($criteria->containsKey(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION) && $criteria->keyContainsValue(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION.')');
        }


        // Set the correct dbName
        $query = SpyGiftCardProductAbstractConfigurationQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
