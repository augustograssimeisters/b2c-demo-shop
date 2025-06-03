<?php

namespace Orm\Zed\ExampleStateMachine\Persistence\Map;

use Orm\Zed\ExampleStateMachine\Persistence\ExampleStateMachineItem;
use Orm\Zed\ExampleStateMachine\Persistence\ExampleStateMachineItemQuery;
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
 * This class defines the structure of the 'pyz_example_state_machine_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ExampleStateMachineItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.ExampleStateMachine.Persistence.Map.ExampleStateMachineItemTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'pyz_example_state_machine_item';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'ExampleStateMachineItem';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\ExampleStateMachine\\Persistence\\ExampleStateMachineItem';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.ExampleStateMachine.Persistence.ExampleStateMachineItem';

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
     * the column name for the id_example_state_machine_item field
     */
    public const COL_ID_EXAMPLE_STATE_MACHINE_ITEM = 'pyz_example_state_machine_item.id_example_state_machine_item';

    /**
     * the column name for the fk_state_machine_item_state field
     */
    public const COL_FK_STATE_MACHINE_ITEM_STATE = 'pyz_example_state_machine_item.fk_state_machine_item_state';

    /**
     * the column name for the name field
     */
    public const COL_NAME = 'pyz_example_state_machine_item.name';

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
        self::TYPE_PHPNAME       => ['IdExampleStateMachineItem', 'FkStateMachineItemState', 'Name', ],
        self::TYPE_CAMELNAME     => ['idExampleStateMachineItem', 'fkStateMachineItemState', 'name', ],
        self::TYPE_COLNAME       => [ExampleStateMachineItemTableMap::COL_ID_EXAMPLE_STATE_MACHINE_ITEM, ExampleStateMachineItemTableMap::COL_FK_STATE_MACHINE_ITEM_STATE, ExampleStateMachineItemTableMap::COL_NAME, ],
        self::TYPE_FIELDNAME     => ['id_example_state_machine_item', 'fk_state_machine_item_state', 'name', ],
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
        self::TYPE_PHPNAME       => ['IdExampleStateMachineItem' => 0, 'FkStateMachineItemState' => 1, 'Name' => 2, ],
        self::TYPE_CAMELNAME     => ['idExampleStateMachineItem' => 0, 'fkStateMachineItemState' => 1, 'name' => 2, ],
        self::TYPE_COLNAME       => [ExampleStateMachineItemTableMap::COL_ID_EXAMPLE_STATE_MACHINE_ITEM => 0, ExampleStateMachineItemTableMap::COL_FK_STATE_MACHINE_ITEM_STATE => 1, ExampleStateMachineItemTableMap::COL_NAME => 2, ],
        self::TYPE_FIELDNAME     => ['id_example_state_machine_item' => 0, 'fk_state_machine_item_state' => 1, 'name' => 2, ],
        self::TYPE_NUM           => [0, 1, 2, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdExampleStateMachineItem' => 'ID_EXAMPLE_STATE_MACHINE_ITEM',
        'ExampleStateMachineItem.IdExampleStateMachineItem' => 'ID_EXAMPLE_STATE_MACHINE_ITEM',
        'idExampleStateMachineItem' => 'ID_EXAMPLE_STATE_MACHINE_ITEM',
        'exampleStateMachineItem.idExampleStateMachineItem' => 'ID_EXAMPLE_STATE_MACHINE_ITEM',
        'ExampleStateMachineItemTableMap::COL_ID_EXAMPLE_STATE_MACHINE_ITEM' => 'ID_EXAMPLE_STATE_MACHINE_ITEM',
        'COL_ID_EXAMPLE_STATE_MACHINE_ITEM' => 'ID_EXAMPLE_STATE_MACHINE_ITEM',
        'id_example_state_machine_item' => 'ID_EXAMPLE_STATE_MACHINE_ITEM',
        'pyz_example_state_machine_item.id_example_state_machine_item' => 'ID_EXAMPLE_STATE_MACHINE_ITEM',
        'FkStateMachineItemState' => 'FK_STATE_MACHINE_ITEM_STATE',
        'ExampleStateMachineItem.FkStateMachineItemState' => 'FK_STATE_MACHINE_ITEM_STATE',
        'fkStateMachineItemState' => 'FK_STATE_MACHINE_ITEM_STATE',
        'exampleStateMachineItem.fkStateMachineItemState' => 'FK_STATE_MACHINE_ITEM_STATE',
        'ExampleStateMachineItemTableMap::COL_FK_STATE_MACHINE_ITEM_STATE' => 'FK_STATE_MACHINE_ITEM_STATE',
        'COL_FK_STATE_MACHINE_ITEM_STATE' => 'FK_STATE_MACHINE_ITEM_STATE',
        'fk_state_machine_item_state' => 'FK_STATE_MACHINE_ITEM_STATE',
        'pyz_example_state_machine_item.fk_state_machine_item_state' => 'FK_STATE_MACHINE_ITEM_STATE',
        'Name' => 'NAME',
        'ExampleStateMachineItem.Name' => 'NAME',
        'name' => 'NAME',
        'exampleStateMachineItem.name' => 'NAME',
        'ExampleStateMachineItemTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'pyz_example_state_machine_item.name' => 'NAME',
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
        $this->setName('pyz_example_state_machine_item');
        $this->setPhpName('ExampleStateMachineItem');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\ExampleStateMachine\\Persistence\\ExampleStateMachineItem');
        $this->setPackage('src.Orm.Zed.ExampleStateMachine.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('pyz_example_state_machine_item_pk_seq');
        // columns
        $this->addPrimaryKey('id_example_state_machine_item', 'IdExampleStateMachineItem', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_state_machine_item_state', 'FkStateMachineItemState', 'INTEGER', 'spy_state_machine_item_state', 'id_state_machine_item_state', false, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 255, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('State', '\\Orm\\Zed\\StateMachine\\Persistence\\SpyStateMachineItemState', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_state_machine_item_state',
    1 => ':id_state_machine_item_state',
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdExampleStateMachineItem', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdExampleStateMachineItem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdExampleStateMachineItem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdExampleStateMachineItem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdExampleStateMachineItem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdExampleStateMachineItem', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdExampleStateMachineItem', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? ExampleStateMachineItemTableMap::CLASS_DEFAULT : ExampleStateMachineItemTableMap::OM_CLASS;
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
     * @return array (ExampleStateMachineItem object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ExampleStateMachineItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ExampleStateMachineItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ExampleStateMachineItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ExampleStateMachineItemTableMap::OM_CLASS;
            /** @var ExampleStateMachineItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ExampleStateMachineItemTableMap::addInstanceToPool($obj, $key);
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
            $key = ExampleStateMachineItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ExampleStateMachineItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ExampleStateMachineItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ExampleStateMachineItemTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ExampleStateMachineItemTableMap::COL_ID_EXAMPLE_STATE_MACHINE_ITEM);
            $criteria->addSelectColumn(ExampleStateMachineItemTableMap::COL_FK_STATE_MACHINE_ITEM_STATE);
            $criteria->addSelectColumn(ExampleStateMachineItemTableMap::COL_NAME);
        } else {
            $criteria->addSelectColumn($alias . '.id_example_state_machine_item');
            $criteria->addSelectColumn($alias . '.fk_state_machine_item_state');
            $criteria->addSelectColumn($alias . '.name');
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
            $criteria->removeSelectColumn(ExampleStateMachineItemTableMap::COL_ID_EXAMPLE_STATE_MACHINE_ITEM);
            $criteria->removeSelectColumn(ExampleStateMachineItemTableMap::COL_FK_STATE_MACHINE_ITEM_STATE);
            $criteria->removeSelectColumn(ExampleStateMachineItemTableMap::COL_NAME);
        } else {
            $criteria->removeSelectColumn($alias . '.id_example_state_machine_item');
            $criteria->removeSelectColumn($alias . '.fk_state_machine_item_state');
            $criteria->removeSelectColumn($alias . '.name');
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
        return Propel::getServiceContainer()->getDatabaseMap(ExampleStateMachineItemTableMap::DATABASE_NAME)->getTable(ExampleStateMachineItemTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a ExampleStateMachineItem or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or ExampleStateMachineItem object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ExampleStateMachineItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ExampleStateMachine\Persistence\ExampleStateMachineItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ExampleStateMachineItemTableMap::DATABASE_NAME);
            $criteria->add(ExampleStateMachineItemTableMap::COL_ID_EXAMPLE_STATE_MACHINE_ITEM, (array) $values, Criteria::IN);
        }

        $query = ExampleStateMachineItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ExampleStateMachineItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ExampleStateMachineItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the pyz_example_state_machine_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ExampleStateMachineItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ExampleStateMachineItem or Criteria object.
     *
     * @param mixed $criteria Criteria or ExampleStateMachineItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ExampleStateMachineItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ExampleStateMachineItem object
        }

        if ($criteria->containsKey(ExampleStateMachineItemTableMap::COL_ID_EXAMPLE_STATE_MACHINE_ITEM) && $criteria->keyContainsValue(ExampleStateMachineItemTableMap::COL_ID_EXAMPLE_STATE_MACHINE_ITEM) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ExampleStateMachineItemTableMap::COL_ID_EXAMPLE_STATE_MACHINE_ITEM.')');
        }


        // Set the correct dbName
        $query = ExampleStateMachineItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
