<?php

namespace Orm\Zed\PickingList\Persistence\Base;

use \DateTime;
use \Exception;
use \PDO;
use Orm\Zed\PickingList\Persistence\SpyPickingList as ChildSpyPickingList;
use Orm\Zed\PickingList\Persistence\SpyPickingListItem as ChildSpyPickingListItem;
use Orm\Zed\PickingList\Persistence\SpyPickingListItemQuery as ChildSpyPickingListItemQuery;
use Orm\Zed\PickingList\Persistence\SpyPickingListQuery as ChildSpyPickingListQuery;
use Orm\Zed\PickingList\Persistence\Map\SpyPickingListItemTableMap;
use Orm\Zed\PickingList\Persistence\Map\SpyPickingListTableMap;
use Orm\Zed\Stock\Persistence\SpyStock;
use Orm\Zed\Stock\Persistence\SpyStockQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;
use Spryker\Zed\PropelReplicationCache\Business\PropelReplicationCacheFacade;

/**
 * Base class that represents a row from the 'spy_picking_list' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.PickingList.Persistence.Base
 */
abstract class SpyPickingList implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = '\\Orm\\Zed\\PickingList\\Persistence\\Map\\SpyPickingListTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var bool
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var bool
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = [];

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = [];

    /**
     * The value for the id_picking_list field.
     *
     * @var        int
     */
    protected $id_picking_list;

    /**
     * The value for the uuid field.
     *
     * @var        string|null
     */
    protected $uuid;

    /**
     * The value for the fk_warehouse field.
     *
     * @var        int
     */
    protected $fk_warehouse;

    /**
     * The value for the user_uuid field.
     *
     * @var        string|null
     */
    protected $user_uuid;

    /**
     * The value for the status field.
     *
     * @var        string
     */
    protected $status;

    /**
     * The value for the created_at field.
     *
     * @var        DateTime|null
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     *
     * @var        DateTime|null
     */
    protected $updated_at;

    /**
     * @var        SpyStock
     */
    protected $aSpyStock;

    /**
     * @var        ObjectCollection|ChildSpyPickingListItem[] Collection to store aggregation of ChildSpyPickingListItem objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyPickingListItem> Collection to store aggregation of ChildSpyPickingListItem objects.
     */
    protected $collSpyPickingListItems;
    protected $collSpyPickingListItemsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var bool
     */
    protected $alreadyInSave = false;

    // uuid behavior
    /**
     * @var \Spryker\Service\UtilUuidGenerator\UtilUuidGeneratorServiceInterface
     */
    protected static $_uuidGeneratorService;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyPickingListItem[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyPickingListItem>
     */
    protected $spyPickingListItemsScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\PickingList\Persistence\Base\SpyPickingList object.
     */
    public function __construct()
    {
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return bool True if the object has been modified.
     */
    public function isModified(): bool
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param string $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return bool True if $col has been modified.
     */
    public function isColumnModified(string $col): bool
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns(): array
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return bool True, if the object has never been persisted.
     */
    public function isNew(): bool
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param bool $b the state of the object.
     */
    public function setNew(bool $b): void
    {
        $this->new = $b;
    }

    /**
     * Whether this object has been deleted.
     * @return bool The deleted state of this object.
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param bool $b The deleted state of this object.
     * @return void
     */
    public function setDeleted(bool $b): void
    {
        $this->deleted = $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified(?string $col = null): void
    {
        if (null !== $col) {
            unset($this->modifiedColumns[$col]);
        } else {
            $this->modifiedColumns = [];
        }
    }

    /**
     * Compares this with another <code>SpyPickingList</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyPickingList</code>, delegates to
     * <code>equals(SpyPickingList)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param mixed $obj The object to compare to.
     * @return bool Whether equal to the object specified.
     */
    public function equals($obj): bool
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns(): array
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @return bool
     */
    public function hasVirtualColumn(string $name): bool
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @return mixed
     *
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getVirtualColumn(string $name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of nonexistent virtual column `%s`.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @param mixed $value The value to give to the virtual column
     *
     * @return $this The current object, for fluid interface
     */
    public function setVirtualColumn(string $name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param string $msg
     * @param int $priority One of the Propel::LOG_* logging levels
     * @return void
     */
    protected function log(string $msg, int $priority = Propel::LOG_INFO): void
    {
        Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param \Propel\Runtime\Parser\AbstractParser|string $parser An AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param bool $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @param string $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME, TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM. Defaults to TableMap::TYPE_PHPNAME.
     * @return string The exported data
     */
    public function exportTo($parser, bool $includeLazyLoadColumns = true, string $keyType = TableMap::TYPE_PHPNAME): string
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray($keyType, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     *
     * @return array<string>
     */
    public function __sleep(): array
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [id_picking_list] column value.
     *
     * @return int
     */
    public function getIdPickingList()
    {
        return $this->id_picking_list;
    }

    /**
     * Get the [uuid] column value.
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Get the [fk_warehouse] column value.
     *
     * @return int
     */
    public function getFkWarehouse()
    {
        return $this->fk_warehouse;
    }

    /**
     * Get the [user_uuid] column value.
     *
     * @return string|null
     */
    public function getUserUuid()
    {
        return $this->user_uuid;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime|null Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00.
     *
     * @throws \Propel\Runtime\Exception\PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime|null : string|null)
     */
    public function getCreatedAt($format = null)
    {
        if ($format === null) {
            return $this->created_at;
        } else {
            return $this->created_at instanceof \DateTimeInterface ? $this->created_at->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime|null Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00.
     *
     * @throws \Propel\Runtime\Exception\PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime|null : string|null)
     */
    public function getUpdatedAt($format = null)
    {
        if ($format === null) {
            return $this->updated_at;
        } else {
            return $this->updated_at instanceof \DateTimeInterface ? $this->updated_at->format($format) : null;
        }
    }

    /**
     * Set the value of [id_picking_list] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setIdPickingList($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_picking_list !== $v) {
            $this->id_picking_list = $v;
            $this->modifiedColumns[SpyPickingListTableMap::COL_ID_PICKING_LIST] = true;
        }

        return $this;
    }

    /**
     * Set the value of [uuid] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setUuid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->uuid !== $v) {
            $this->uuid = $v;
            $this->modifiedColumns[SpyPickingListTableMap::COL_UUID] = true;
        }

        return $this;
    }

    /**
     * Set the value of [fk_warehouse] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setFkWarehouse($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_warehouse !== $v) {
            $this->fk_warehouse = $v;
            $this->modifiedColumns[SpyPickingListTableMap::COL_FK_WAREHOUSE] = true;
        }

        if ($this->aSpyStock !== null && $this->aSpyStock->getIdStock() !== $v) {
            $this->aSpyStock = null;
        }

        return $this;
    }

    /**
     * Set the value of [user_uuid] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setUserUuid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->user_uuid !== $v) {
            $this->user_uuid = $v;
            $this->modifiedColumns[SpyPickingListTableMap::COL_USER_UUID] = true;
        }

        return $this;
    }

    /**
     * Set the value of [status] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[SpyPickingListTableMap::COL_STATUS] = true;
        }

        return $this;
    }

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyPickingListTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    }

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyPickingListTableMap::COL_UPDATED_AT] = true;
            }
        } // if either are not null

        return $this;
    }

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return bool Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues(): bool
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    }

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by DataFetcher->fetch().
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param bool $rehydrate Whether this object is being re-hydrated from the database.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int next starting column
     * @throws \Propel\Runtime\Exception\PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate(array $row, int $startcol = 0, bool $rehydrate = false, string $indexType = TableMap::TYPE_NUM): int
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyPickingListTableMap::translateFieldName('IdPickingList', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_picking_list = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyPickingListTableMap::translateFieldName('Uuid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->uuid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyPickingListTableMap::translateFieldName('FkWarehouse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_warehouse = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyPickingListTableMap::translateFieldName('UserUuid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->user_uuid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyPickingListTableMap::translateFieldName('Status', TableMap::TYPE_PHPNAME, $indexType)];
            $this->status = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyPickingListTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyPickingListTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 7; // 7 = SpyPickingListTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\PickingList\\Persistence\\SpyPickingList'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function ensureConsistency(): void
    {
        if ($this->aSpyStock !== null && $this->fk_warehouse !== $this->aSpyStock->getIdStock()) {
            $this->aSpyStock = null;
        }
    }

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param bool $deep (optional) Whether to also de-associated any related objects.
     * @param ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload(bool $deep = false, ?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SpyPickingListTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyPickingListQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyStock = null;
            $this->collSpyPickingListItems = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     * @see SpyPickingList::setDeleted()
     * @see SpyPickingList::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPickingListTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyPickingListQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param ConnectionInterface $con
     * @return int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws \Propel\Runtime\Exception\PropelException
     * @see doSave()
     */
    public function save(?ConnectionInterface $con = null): int
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPickingListTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                $time = time();
                $highPrecision = \Propel\Runtime\Util\PropelDateTime::createHighPrecision();
                if (!$this->isColumnModified(SpyPickingListTableMap::COL_CREATED_AT)) {
                    $this->setCreatedAt($highPrecision);
                }
                if (!$this->isColumnModified(SpyPickingListTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt($highPrecision);
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // uuid behavior
                $this->updateUuidBeforeUpdate();
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SpyPickingListTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt(\Propel\Runtime\Util\PropelDateTime::createHighPrecision());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                    // uuid behavior
                    $this->updateUuidAfterInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                SpyPickingListTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Code to be run after persisting the object
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con
     *
     * @return void
     */
    public function postSave(?ConnectionInterface $con = null): void
    {
        $class = get_class($this);
        PropelReplicationCacheFacade::getInstance()->setKey($class);

    }

    /**
     * Code to be run after updating the object in database
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con
     *
     * @return void
     */
    public function postUpdate(?ConnectionInterface $con = null): void
    {
        $class = get_class($this);
        PropelReplicationCacheFacade::getInstance()->setKey($class);

    }

    /**
     * Code to be run after deleting the object in database
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con
     *
     * @return void
     */
    public function postDelete(?ConnectionInterface $con = null): void
    {
        $class = get_class($this);
        PropelReplicationCacheFacade::getInstance()->setKey($class);

    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param ConnectionInterface $con
     * @return int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws \Propel\Runtime\Exception\PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con): int
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aSpyStock !== null) {
                if ($this->aSpyStock->isModified() || $this->aSpyStock->isNew()) {
                    $affectedRows += $this->aSpyStock->save($con);
                }
                $this->setSpyStock($this->aSpyStock);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            if ($this->spyPickingListItemsScheduledForDeletion !== null) {
                if (!$this->spyPickingListItemsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\PickingList\Persistence\SpyPickingListItemQuery::create()
                        ->filterByPrimaryKeys($this->spyPickingListItemsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyPickingListItemsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyPickingListItems !== null) {
                foreach ($this->collSpyPickingListItems as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    }

    /**
     * Insert the row in the database.
     *
     * @param ConnectionInterface $con
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con): void
    {
        $modifiedColumns = [];
        $index = 0;

        $this->modifiedColumns[SpyPickingListTableMap::COL_ID_PICKING_LIST] = true;
        if (null !== $this->id_picking_list) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyPickingListTableMap::COL_ID_PICKING_LIST . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyPickingListTableMap::COL_ID_PICKING_LIST)) {
            $modifiedColumns[':p' . $index++]  = 'id_picking_list';
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_UUID)) {
            $modifiedColumns[':p' . $index++]  = 'uuid';
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_FK_WAREHOUSE)) {
            $modifiedColumns[':p' . $index++]  = 'fk_warehouse';
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_USER_UUID)) {
            $modifiedColumns[':p' . $index++]  = 'user_uuid';
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'updated_at';
        }

        $sql = sprintf(
            'INSERT INTO spy_picking_list (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_picking_list':
                        $stmt->bindValue($identifier, $this->id_picking_list, PDO::PARAM_INT);

                        break;
                    case 'uuid':
                        $stmt->bindValue($identifier, $this->uuid, PDO::PARAM_STR);

                        break;
                    case 'fk_warehouse':
                        $stmt->bindValue($identifier, $this->fk_warehouse, PDO::PARAM_INT);

                        break;
                    case 'user_uuid':
                        $stmt->bindValue($identifier, $this->user_uuid, PDO::PARAM_STR);

                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);

                        break;
                    case 'created_at':
                        $stmt->bindValue($identifier, $this->created_at ? $this->created_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);

                        break;
                    case 'updated_at':
                        $stmt->bindValue($identifier, $this->updated_at ? $this->updated_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);

                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_picking_list_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdPickingList($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param ConnectionInterface $con
     *
     * @return int Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con): int
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_FIELDNAME.
     * @return mixed Value of field.
     */
    public function getByName(string $name, string $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyPickingListTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos Position in XML schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition(int $pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdPickingList();

            case 1:
                return $this->getUuid();

            case 2:
                return $this->getFkWarehouse();

            case 3:
                return $this->getUserUuid();

            case 4:
                return $this->getStatus();

            case 5:
                return $this->getCreatedAt();

            case 6:
                return $this->getUpdatedAt();

            default:
                return null;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param string $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_FIELDNAME.
     * @param bool $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param bool $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array An associative array containing the field names (as keys) and field values
     */
    public function toArray(string $keyType = TableMap::TYPE_FIELDNAME, bool $includeLazyLoadColumns = true, array $alreadyDumpedObjects = [], bool $includeForeignObjects = false): array
    {
        if (isset($alreadyDumpedObjects['SpyPickingList'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['SpyPickingList'][$this->hashCode()] = true;
        $keys = SpyPickingListTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getIdPickingList(),
            $keys[1] => $this->getUuid(),
            $keys[2] => $this->getFkWarehouse(),
            $keys[3] => $this->getUserUuid(),
            $keys[4] => $this->getStatus(),
            $keys[5] => $this->getCreatedAt(),
            $keys[6] => $this->getUpdatedAt(),
        ];
        if ($result[$keys[5]] instanceof \DateTimeInterface) {
            $result[$keys[5]] = $result[$keys[5]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[6]] instanceof \DateTimeInterface) {
            $result[$keys[6]] = $result[$keys[6]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSpyStock) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyStock';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_stock';
                        break;
                    default:
                        $key = 'SpyStock';
                }

                $result[$key] = $this->aSpyStock->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSpyPickingListItems) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPickingListItems';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_picking_list_items';
                        break;
                    default:
                        $key = 'SpyPickingListItems';
                }

                $result[$key] = $this->collSpyPickingListItems->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_FIELDNAME.
     * @return $this
     */
    public function setByName(string $name, $value, string $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyPickingListTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        $this->setByPosition($pos, $value);

        return $this;
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return $this
     */
    public function setByPosition(int $pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdPickingList($value);
                break;
            case 1:
                $this->setUuid($value);
                break;
            case 2:
                $this->setFkWarehouse($value);
                break;
            case 3:
                $this->setUserUuid($value);
                break;
            case 4:
                $this->setStatus($value);
                break;
            case 5:
                $this->setCreatedAt($value);
                break;
            case 6:
                $this->setUpdatedAt($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_FIELDNAME.
     *
     * @param array $arr An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return $this
     */
    public function fromArray(array $arr, string $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyPickingListTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdPickingList($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setUuid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkWarehouse($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setUserUuid($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setStatus($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setCreatedAt($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setUpdatedAt($arr[$keys[6]]);
        }

        return $this;
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_FIELDNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this The current object, for fluid interface
     */
    public function importFrom($parser, string $data, string $keyType = TableMap::TYPE_FIELDNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return \Propel\Runtime\ActiveQuery\Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria(): Criteria
    {
        $criteria = new Criteria(SpyPickingListTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyPickingListTableMap::COL_ID_PICKING_LIST)) {
            $criteria->add(SpyPickingListTableMap::COL_ID_PICKING_LIST, $this->id_picking_list);
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_UUID)) {
            $criteria->add(SpyPickingListTableMap::COL_UUID, $this->uuid);
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_FK_WAREHOUSE)) {
            $criteria->add(SpyPickingListTableMap::COL_FK_WAREHOUSE, $this->fk_warehouse);
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_USER_UUID)) {
            $criteria->add(SpyPickingListTableMap::COL_USER_UUID, $this->user_uuid);
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_STATUS)) {
            $criteria->add(SpyPickingListTableMap::COL_STATUS, $this->status);
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_CREATED_AT)) {
            $criteria->add(SpyPickingListTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(SpyPickingListTableMap::COL_UPDATED_AT)) {
            $criteria->add(SpyPickingListTableMap::COL_UPDATED_AT, $this->updated_at);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return \Propel\Runtime\ActiveQuery\Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria(): Criteria
    {
        $criteria = ChildSpyPickingListQuery::create();
        $criteria->add(SpyPickingListTableMap::COL_ID_PICKING_LIST, $this->id_picking_list);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int|string Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getIdPickingList();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPickingList();
    }

    /**
     * Generic method to set the primary key (id_picking_list column).
     *
     * @param int|null $key Primary key.
     * @return void
     */
    public function setPrimaryKey(?int $key = null): void
    {
        $this->setIdPickingList($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     *
     * @return bool
     */
    public function isPrimaryKeyNull(): bool
    {
        return null === $this->getIdPickingList();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \Orm\Zed\PickingList\Persistence\SpyPickingList (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setUuid($this->getUuid());
        $copyObj->setFkWarehouse($this->getFkWarehouse());
        $copyObj->setUserUuid($this->getUserUuid());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyPickingListItems() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyPickingListItem($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPickingList(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \Orm\Zed\PickingList\Persistence\SpyPickingList Clone of current object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function copy(bool $deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Declares an association between this object and a SpyStock object.
     *
     * @param SpyStock $v
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setSpyStock(SpyStock $v = null)
    {
        if ($v === null) {
            $this->setFkWarehouse(NULL);
        } else {
            $this->setFkWarehouse($v->getIdStock());
        }

        $this->aSpyStock = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyStock object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyPickingList($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyStock object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return SpyStock The associated SpyStock object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getSpyStock(?ConnectionInterface $con = null)
    {
        if ($this->aSpyStock === null && ($this->fk_warehouse != 0)) {
            $this->aSpyStock = SpyStockQuery::create()->findPk($this->fk_warehouse, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyStock->addSpyPickingLists($this);
             */
        }

        return $this->aSpyStock;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName): void
    {
        if ('SpyPickingListItem' === $relationName) {
            $this->initSpyPickingListItems();
            return;
        }
    }

    /**
     * Clears out the collSpyPickingListItems collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return $this
     * @see addSpyPickingListItems()
     */
    public function clearSpyPickingListItems()
    {
        $this->collSpyPickingListItems = null; // important to set this to NULL since that means it is uninitialized

        return $this;
    }

    /**
     * Reset is the collSpyPickingListItems collection loaded partially.
     *
     * @return void
     */
    public function resetPartialSpyPickingListItems($v = true): void
    {
        $this->collSpyPickingListItemsPartial = $v;
    }

    /**
     * Initializes the collSpyPickingListItems collection.
     *
     * By default this just sets the collSpyPickingListItems collection to an empty array (like clearcollSpyPickingListItems());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param bool $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyPickingListItems(bool $overrideExisting = true): void
    {
        if (null !== $this->collSpyPickingListItems && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyPickingListItemTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyPickingListItems = new $collectionClassName;
        $this->collSpyPickingListItems->setModel('\Orm\Zed\PickingList\Persistence\SpyPickingListItem');
    }

    /**
     * Gets an array of ChildSpyPickingListItem objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyPickingList is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyPickingListItem[] List of ChildSpyPickingListItem objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyPickingListItem> List of ChildSpyPickingListItem objects
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getSpyPickingListItems(?Criteria $criteria = null, ?ConnectionInterface $con = null)
    {
        $partial = $this->collSpyPickingListItemsPartial && !$this->isNew();
        if (null === $this->collSpyPickingListItems || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyPickingListItems) {
                    $this->initSpyPickingListItems();
                } else {
                    $collectionClassName = SpyPickingListItemTableMap::getTableMap()->getCollectionClassName();

                    $collSpyPickingListItems = new $collectionClassName;
                    $collSpyPickingListItems->setModel('\Orm\Zed\PickingList\Persistence\SpyPickingListItem');

                    return $collSpyPickingListItems;
                }
            } else {
                $collSpyPickingListItems = ChildSpyPickingListItemQuery::create(null, $criteria)
                    ->filterBySpyPickingList($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyPickingListItemsPartial && count($collSpyPickingListItems)) {
                        $this->initSpyPickingListItems(false);

                        foreach ($collSpyPickingListItems as $obj) {
                            if (false == $this->collSpyPickingListItems->contains($obj)) {
                                $this->collSpyPickingListItems->append($obj);
                            }
                        }

                        $this->collSpyPickingListItemsPartial = true;
                    }

                    return $collSpyPickingListItems;
                }

                if ($partial && $this->collSpyPickingListItems) {
                    foreach ($this->collSpyPickingListItems as $obj) {
                        if ($obj->isNew()) {
                            $collSpyPickingListItems[] = $obj;
                        }
                    }
                }

                $this->collSpyPickingListItems = $collSpyPickingListItems;
                $this->collSpyPickingListItemsPartial = false;
            }
        }

        return $this->collSpyPickingListItems;
    }

    /**
     * Sets a collection of ChildSpyPickingListItem objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param Collection $spyPickingListItems A Propel collection.
     * @param ConnectionInterface $con Optional connection object
     * @return $this The current object (for fluent API support)
     */
    public function setSpyPickingListItems(Collection $spyPickingListItems, ?ConnectionInterface $con = null)
    {
        /** @var ChildSpyPickingListItem[] $spyPickingListItemsToDelete */
        $spyPickingListItemsToDelete = $this->getSpyPickingListItems(new Criteria(), $con)->diff($spyPickingListItems);


        $this->spyPickingListItemsScheduledForDeletion = $spyPickingListItemsToDelete;

        foreach ($spyPickingListItemsToDelete as $spyPickingListItemRemoved) {
            $spyPickingListItemRemoved->setSpyPickingList(null);
        }

        $this->collSpyPickingListItems = null;
        foreach ($spyPickingListItems as $spyPickingListItem) {
            $this->addSpyPickingListItem($spyPickingListItem);
        }

        $this->collSpyPickingListItems = $spyPickingListItems;
        $this->collSpyPickingListItemsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyPickingListItem objects.
     *
     * @param Criteria $criteria
     * @param bool $distinct
     * @param ConnectionInterface $con
     * @return int Count of related SpyPickingListItem objects.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function countSpyPickingListItems(?Criteria $criteria = null, bool $distinct = false, ?ConnectionInterface $con = null): int
    {
        $partial = $this->collSpyPickingListItemsPartial && !$this->isNew();
        if (null === $this->collSpyPickingListItems || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyPickingListItems) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyPickingListItems());
            }

            $query = ChildSpyPickingListItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyPickingList($this)
                ->count($con);
        }

        return count($this->collSpyPickingListItems);
    }

    /**
     * Method called to associate a ChildSpyPickingListItem object to this object
     * through the ChildSpyPickingListItem foreign key attribute.
     *
     * @param ChildSpyPickingListItem $l ChildSpyPickingListItem
     * @return $this The current object (for fluent API support)
     */
    public function addSpyPickingListItem(ChildSpyPickingListItem $l)
    {
        if ($this->collSpyPickingListItems === null) {
            $this->initSpyPickingListItems();
            $this->collSpyPickingListItemsPartial = true;
        }

        if (!$this->collSpyPickingListItems->contains($l)) {
            $this->doAddSpyPickingListItem($l);

            if ($this->spyPickingListItemsScheduledForDeletion and $this->spyPickingListItemsScheduledForDeletion->contains($l)) {
                $this->spyPickingListItemsScheduledForDeletion->remove($this->spyPickingListItemsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyPickingListItem $spyPickingListItem The ChildSpyPickingListItem object to add.
     */
    protected function doAddSpyPickingListItem(ChildSpyPickingListItem $spyPickingListItem): void
    {
        $this->collSpyPickingListItems[]= $spyPickingListItem;
        $spyPickingListItem->setSpyPickingList($this);
    }

    /**
     * @param ChildSpyPickingListItem $spyPickingListItem The ChildSpyPickingListItem object to remove.
     * @return $this The current object (for fluent API support)
     */
    public function removeSpyPickingListItem(ChildSpyPickingListItem $spyPickingListItem)
    {
        if ($this->getSpyPickingListItems()->contains($spyPickingListItem)) {
            $pos = $this->collSpyPickingListItems->search($spyPickingListItem);
            $this->collSpyPickingListItems->remove($pos);
            if (null === $this->spyPickingListItemsScheduledForDeletion) {
                $this->spyPickingListItemsScheduledForDeletion = clone $this->collSpyPickingListItems;
                $this->spyPickingListItemsScheduledForDeletion->clear();
            }
            $this->spyPickingListItemsScheduledForDeletion[]= clone $spyPickingListItem;
            $spyPickingListItem->setSpyPickingList(null);
        }

        return $this;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     *
     * @return $this
     */
    public function clear()
    {
        if (null !== $this->aSpyStock) {
            $this->aSpyStock->removeSpyPickingList($this);
        }
        $this->id_picking_list = null;
        $this->uuid = null;
        $this->fk_warehouse = null;
        $this->user_uuid = null;
        $this->status = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);

        return $this;
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param bool $deep Whether to also clear the references on all referrer objects.
     * @return $this
     */
    public function clearAllReferences(bool $deep = false)
    {
        if ($deep) {
            if ($this->collSpyPickingListItems) {
                foreach ($this->collSpyPickingListItems as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyPickingListItems = null;
        $this->aSpyStock = null;
        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyPickingListTableMap::DEFAULT_STRING_FORMAT);
    }

    // uuid behavior

    /**
     * @return \Spryker\Service\UtilUuidGenerator\UtilUuidGeneratorServiceInterface
     */
    protected function getUuidGeneratorService()
    {
        if (static::$_uuidGeneratorService === null) {
            static::$_uuidGeneratorService = \Spryker\Zed\Kernel\Locator::getInstance()->utilUuidGenerator()->service();
        }

        return static::$_uuidGeneratorService;
    }

    /**
     * @return void
     */
    protected function setGeneratedUuid()
    {
        $uuidGenerateUtilService = $this->getUuidGeneratorService();
        $name = 'spy_picking_list' . '.' . $this->getIdPickingList();
        $uuid = $uuidGenerateUtilService->generateUuid5FromObjectId($name);
        $this->setUuid($uuid);
    }

    /**
     * @param ConnectionInterface $con
     *
     * @return void
     */
    protected function updateUuidAfterInsert(ConnectionInterface $con = null)
    {
        if (!$this->getUuid()) {
            $this->setGeneratedUuid();
            $this->doSave($con);
        }
    }

    /**
     * @return void
     */
    protected function updateUuidBeforeUpdate()
    {
        if (!$this->getUuid()) {
            $this->setGeneratedUuid();
        }
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return $this The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[SpyPickingListTableMap::COL_UPDATED_AT] = true;

        return $this;
    }

    /**
     * Code to be run before persisting the object
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preSave(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run before inserting to database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preInsert(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postInsert(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before updating the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preUpdate(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run before deleting the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preDelete(?ConnectionInterface $con = null): bool
    {
                return true;
    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);
            $inputData = $params[0];
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->importFrom($format, $inputData, $keyType);
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = $params[0] ?? true;
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->exportTo($format, $includeLazyLoadColumns, $keyType);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
