<?php

namespace Orm\Zed\GiftCard\Persistence\Map;

use Orm\Zed\GiftCard\Persistence\SpyGiftCard;
use Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery;
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
 * This class defines the structure of the 'spy_gift_card' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyGiftCardTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.GiftCard.Persistence.Map.SpyGiftCardTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_gift_card';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyGiftCard';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCard';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.GiftCard.Persistence.SpyGiftCard';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 10;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 10;

    /**
     * the column name for the id_gift_card field
     */
    public const COL_ID_GIFT_CARD = 'spy_gift_card.id_gift_card';

    /**
     * the column name for the attributes field
     */
    public const COL_ATTRIBUTES = 'spy_gift_card.attributes';

    /**
     * the column name for the code field
     */
    public const COL_CODE = 'spy_gift_card.code';

    /**
     * the column name for the currency_iso_code field
     */
    public const COL_CURRENCY_ISO_CODE = 'spy_gift_card.currency_iso_code';

    /**
     * the column name for the is_active field
     */
    public const COL_IS_ACTIVE = 'spy_gift_card.is_active';

    /**
     * the column name for the name field
     */
    public const COL_NAME = 'spy_gift_card.name';

    /**
     * the column name for the replacement_pattern field
     */
    public const COL_REPLACEMENT_PATTERN = 'spy_gift_card.replacement_pattern';

    /**
     * the column name for the value field
     */
    public const COL_VALUE = 'spy_gift_card.value';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_gift_card.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_gift_card.updated_at';

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
        self::TYPE_PHPNAME       => ['IdGiftCard', 'Attributes', 'Code', 'CurrencyIsoCode', 'IsActive', 'Name', 'ReplacementPattern', 'Value', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idGiftCard', 'attributes', 'code', 'currencyIsoCode', 'isActive', 'name', 'replacementPattern', 'value', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyGiftCardTableMap::COL_ID_GIFT_CARD, SpyGiftCardTableMap::COL_ATTRIBUTES, SpyGiftCardTableMap::COL_CODE, SpyGiftCardTableMap::COL_CURRENCY_ISO_CODE, SpyGiftCardTableMap::COL_IS_ACTIVE, SpyGiftCardTableMap::COL_NAME, SpyGiftCardTableMap::COL_REPLACEMENT_PATTERN, SpyGiftCardTableMap::COL_VALUE, SpyGiftCardTableMap::COL_CREATED_AT, SpyGiftCardTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_gift_card', 'attributes', 'code', 'currency_iso_code', 'is_active', 'name', 'replacement_pattern', 'value', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ]
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
        self::TYPE_PHPNAME       => ['IdGiftCard' => 0, 'Attributes' => 1, 'Code' => 2, 'CurrencyIsoCode' => 3, 'IsActive' => 4, 'Name' => 5, 'ReplacementPattern' => 6, 'Value' => 7, 'CreatedAt' => 8, 'UpdatedAt' => 9, ],
        self::TYPE_CAMELNAME     => ['idGiftCard' => 0, 'attributes' => 1, 'code' => 2, 'currencyIsoCode' => 3, 'isActive' => 4, 'name' => 5, 'replacementPattern' => 6, 'value' => 7, 'createdAt' => 8, 'updatedAt' => 9, ],
        self::TYPE_COLNAME       => [SpyGiftCardTableMap::COL_ID_GIFT_CARD => 0, SpyGiftCardTableMap::COL_ATTRIBUTES => 1, SpyGiftCardTableMap::COL_CODE => 2, SpyGiftCardTableMap::COL_CURRENCY_ISO_CODE => 3, SpyGiftCardTableMap::COL_IS_ACTIVE => 4, SpyGiftCardTableMap::COL_NAME => 5, SpyGiftCardTableMap::COL_REPLACEMENT_PATTERN => 6, SpyGiftCardTableMap::COL_VALUE => 7, SpyGiftCardTableMap::COL_CREATED_AT => 8, SpyGiftCardTableMap::COL_UPDATED_AT => 9, ],
        self::TYPE_FIELDNAME     => ['id_gift_card' => 0, 'attributes' => 1, 'code' => 2, 'currency_iso_code' => 3, 'is_active' => 4, 'name' => 5, 'replacement_pattern' => 6, 'value' => 7, 'created_at' => 8, 'updated_at' => 9, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdGiftCard' => 'ID_GIFT_CARD',
        'SpyGiftCard.IdGiftCard' => 'ID_GIFT_CARD',
        'idGiftCard' => 'ID_GIFT_CARD',
        'spyGiftCard.idGiftCard' => 'ID_GIFT_CARD',
        'SpyGiftCardTableMap::COL_ID_GIFT_CARD' => 'ID_GIFT_CARD',
        'COL_ID_GIFT_CARD' => 'ID_GIFT_CARD',
        'id_gift_card' => 'ID_GIFT_CARD',
        'spy_gift_card.id_gift_card' => 'ID_GIFT_CARD',
        'Attributes' => 'ATTRIBUTES',
        'SpyGiftCard.Attributes' => 'ATTRIBUTES',
        'attributes' => 'ATTRIBUTES',
        'spyGiftCard.attributes' => 'ATTRIBUTES',
        'SpyGiftCardTableMap::COL_ATTRIBUTES' => 'ATTRIBUTES',
        'COL_ATTRIBUTES' => 'ATTRIBUTES',
        'spy_gift_card.attributes' => 'ATTRIBUTES',
        'Code' => 'CODE',
        'SpyGiftCard.Code' => 'CODE',
        'code' => 'CODE',
        'spyGiftCard.code' => 'CODE',
        'SpyGiftCardTableMap::COL_CODE' => 'CODE',
        'COL_CODE' => 'CODE',
        'spy_gift_card.code' => 'CODE',
        'CurrencyIsoCode' => 'CURRENCY_ISO_CODE',
        'SpyGiftCard.CurrencyIsoCode' => 'CURRENCY_ISO_CODE',
        'currencyIsoCode' => 'CURRENCY_ISO_CODE',
        'spyGiftCard.currencyIsoCode' => 'CURRENCY_ISO_CODE',
        'SpyGiftCardTableMap::COL_CURRENCY_ISO_CODE' => 'CURRENCY_ISO_CODE',
        'COL_CURRENCY_ISO_CODE' => 'CURRENCY_ISO_CODE',
        'currency_iso_code' => 'CURRENCY_ISO_CODE',
        'spy_gift_card.currency_iso_code' => 'CURRENCY_ISO_CODE',
        'IsActive' => 'IS_ACTIVE',
        'SpyGiftCard.IsActive' => 'IS_ACTIVE',
        'isActive' => 'IS_ACTIVE',
        'spyGiftCard.isActive' => 'IS_ACTIVE',
        'SpyGiftCardTableMap::COL_IS_ACTIVE' => 'IS_ACTIVE',
        'COL_IS_ACTIVE' => 'IS_ACTIVE',
        'is_active' => 'IS_ACTIVE',
        'spy_gift_card.is_active' => 'IS_ACTIVE',
        'Name' => 'NAME',
        'SpyGiftCard.Name' => 'NAME',
        'name' => 'NAME',
        'spyGiftCard.name' => 'NAME',
        'SpyGiftCardTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_gift_card.name' => 'NAME',
        'ReplacementPattern' => 'REPLACEMENT_PATTERN',
        'SpyGiftCard.ReplacementPattern' => 'REPLACEMENT_PATTERN',
        'replacementPattern' => 'REPLACEMENT_PATTERN',
        'spyGiftCard.replacementPattern' => 'REPLACEMENT_PATTERN',
        'SpyGiftCardTableMap::COL_REPLACEMENT_PATTERN' => 'REPLACEMENT_PATTERN',
        'COL_REPLACEMENT_PATTERN' => 'REPLACEMENT_PATTERN',
        'replacement_pattern' => 'REPLACEMENT_PATTERN',
        'spy_gift_card.replacement_pattern' => 'REPLACEMENT_PATTERN',
        'Value' => 'VALUE',
        'SpyGiftCard.Value' => 'VALUE',
        'value' => 'VALUE',
        'spyGiftCard.value' => 'VALUE',
        'SpyGiftCardTableMap::COL_VALUE' => 'VALUE',
        'COL_VALUE' => 'VALUE',
        'spy_gift_card.value' => 'VALUE',
        'CreatedAt' => 'CREATED_AT',
        'SpyGiftCard.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyGiftCard.createdAt' => 'CREATED_AT',
        'SpyGiftCardTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_gift_card.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyGiftCard.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyGiftCard.updatedAt' => 'UPDATED_AT',
        'SpyGiftCardTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_gift_card.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_gift_card');
        $this->setPhpName('SpyGiftCard');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCard');
        $this->setPackage('src.Orm.Zed.GiftCard.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_gift_card_pk_seq');
        // columns
        $this->addPrimaryKey('id_gift_card', 'IdGiftCard', 'INTEGER', true, null, null);
        $this->addColumn('attributes', 'Attributes', 'LONGVARCHAR', false, null, null);
        $this->addColumn('code', 'Code', 'VARCHAR', true, 40, null);
        $this->addColumn('currency_iso_code', 'CurrencyIsoCode', 'VARCHAR', false, 5, null);
        $this->addColumn('is_active', 'IsActive', 'BOOLEAN', true, 1, true);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 40, null);
        $this->addColumn('replacement_pattern', 'ReplacementPattern', 'VARCHAR', false, 40, null);
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
        $this->addRelation('SpyGiftCardBalanceLog', '\\Orm\\Zed\\GiftCardBalance\\Persistence\\SpyGiftCardBalanceLog', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_gift_card',
    1 => ':id_gift_card',
  ),
), null, null, 'SpyGiftCardBalanceLogs', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCard', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCard', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCard', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCard', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCard', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGiftCard', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdGiftCard', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyGiftCardTableMap::CLASS_DEFAULT : SpyGiftCardTableMap::OM_CLASS;
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
     * @return array (SpyGiftCard object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyGiftCardTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyGiftCardTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyGiftCardTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyGiftCardTableMap::OM_CLASS;
            /** @var SpyGiftCard $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyGiftCardTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyGiftCardTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyGiftCardTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyGiftCard $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyGiftCardTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyGiftCardTableMap::COL_ID_GIFT_CARD);
            $criteria->addSelectColumn(SpyGiftCardTableMap::COL_ATTRIBUTES);
            $criteria->addSelectColumn(SpyGiftCardTableMap::COL_CODE);
            $criteria->addSelectColumn(SpyGiftCardTableMap::COL_CURRENCY_ISO_CODE);
            $criteria->addSelectColumn(SpyGiftCardTableMap::COL_IS_ACTIVE);
            $criteria->addSelectColumn(SpyGiftCardTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyGiftCardTableMap::COL_REPLACEMENT_PATTERN);
            $criteria->addSelectColumn(SpyGiftCardTableMap::COL_VALUE);
            $criteria->addSelectColumn(SpyGiftCardTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyGiftCardTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_gift_card');
            $criteria->addSelectColumn($alias . '.attributes');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.currency_iso_code');
            $criteria->addSelectColumn($alias . '.is_active');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.replacement_pattern');
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
            $criteria->removeSelectColumn(SpyGiftCardTableMap::COL_ID_GIFT_CARD);
            $criteria->removeSelectColumn(SpyGiftCardTableMap::COL_ATTRIBUTES);
            $criteria->removeSelectColumn(SpyGiftCardTableMap::COL_CODE);
            $criteria->removeSelectColumn(SpyGiftCardTableMap::COL_CURRENCY_ISO_CODE);
            $criteria->removeSelectColumn(SpyGiftCardTableMap::COL_IS_ACTIVE);
            $criteria->removeSelectColumn(SpyGiftCardTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyGiftCardTableMap::COL_REPLACEMENT_PATTERN);
            $criteria->removeSelectColumn(SpyGiftCardTableMap::COL_VALUE);
            $criteria->removeSelectColumn(SpyGiftCardTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyGiftCardTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_gift_card');
            $criteria->removeSelectColumn($alias . '.attributes');
            $criteria->removeSelectColumn($alias . '.code');
            $criteria->removeSelectColumn($alias . '.currency_iso_code');
            $criteria->removeSelectColumn($alias . '.is_active');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.replacement_pattern');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyGiftCardTableMap::DATABASE_NAME)->getTable(SpyGiftCardTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyGiftCard or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyGiftCard object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\GiftCard\Persistence\SpyGiftCard) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyGiftCardTableMap::DATABASE_NAME);
            $criteria->add(SpyGiftCardTableMap::COL_ID_GIFT_CARD, (array) $values, Criteria::IN);
        }

        $query = SpyGiftCardQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyGiftCardTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyGiftCardTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_gift_card table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyGiftCardQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyGiftCard or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyGiftCard object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyGiftCard object
        }

        if ($criteria->containsKey(SpyGiftCardTableMap::COL_ID_GIFT_CARD) && $criteria->keyContainsValue(SpyGiftCardTableMap::COL_ID_GIFT_CARD) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyGiftCardTableMap::COL_ID_GIFT_CARD.')');
        }


        // Set the correct dbName
        $query = SpyGiftCardQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
