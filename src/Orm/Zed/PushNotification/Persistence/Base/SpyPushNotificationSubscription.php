<?php

namespace Orm\Zed\PushNotification\Persistence\Base;

use \DateTime;
use \Exception;
use \PDO;
use Orm\Zed\Locale\Persistence\SpyLocale;
use Orm\Zed\Locale\Persistence\SpyLocaleQuery;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroup as ChildSpyPushNotificationGroup;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery as ChildSpyPushNotificationGroupQuery;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationProvider as ChildSpyPushNotificationProvider;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery as ChildSpyPushNotificationProviderQuery;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscription as ChildSpyPushNotificationSubscription;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLog as ChildSpyPushNotificationSubscriptionDeliveryLog;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery as ChildSpyPushNotificationSubscriptionDeliveryLogQuery;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionQuery as ChildSpyPushNotificationSubscriptionQuery;
use Orm\Zed\PushNotification\Persistence\Map\SpyPushNotificationSubscriptionDeliveryLogTableMap;
use Orm\Zed\PushNotification\Persistence\Map\SpyPushNotificationSubscriptionTableMap;
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
 * Base class that represents a row from the 'spy_push_notification_subscription' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.PushNotification.Persistence.Base
 */
abstract class SpyPushNotificationSubscription implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = '\\Orm\\Zed\\PushNotification\\Persistence\\Map\\SpyPushNotificationSubscriptionTableMap';


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
     * The value for the id_push_notification_subscription field.
     *
     * @var        int
     */
    protected $id_push_notification_subscription;

    /**
     * The value for the uuid field.
     *
     * @var        string|null
     */
    protected $uuid;

    /**
     * The value for the fk_push_notification_group field.
     *
     * @var        int
     */
    protected $fk_push_notification_group;

    /**
     * The value for the fk_push_notification_provider field.
     *
     * @var        int
     */
    protected $fk_push_notification_provider;

    /**
     * The value for the fk_locale field.
     *
     * @var        int|null
     */
    protected $fk_locale;

    /**
     * The value for the payload field.
     *
     * @var        string|null
     */
    protected $payload;

    /**
     * The value for the payload_checksum field.
     *
     * @var        string|null
     */
    protected $payload_checksum;

    /**
     * The value for the expired_at field.
     *
     * @var        DateTime
     */
    protected $expired_at;

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
     * @var        ChildSpyPushNotificationGroup
     */
    protected $aSpyPushNotificationGroup;

    /**
     * @var        ChildSpyPushNotificationProvider
     */
    protected $aSpyPushNotificationProvider;

    /**
     * @var        SpyLocale
     */
    protected $aSpyLocale;

    /**
     * @var        ObjectCollection|ChildSpyPushNotificationSubscriptionDeliveryLog[] Collection to store aggregation of ChildSpyPushNotificationSubscriptionDeliveryLog objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyPushNotificationSubscriptionDeliveryLog> Collection to store aggregation of ChildSpyPushNotificationSubscriptionDeliveryLog objects.
     */
    protected $collSpyPushNotificationSubscriptionDeliveryLogs;
    protected $collSpyPushNotificationSubscriptionDeliveryLogsPartial;

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
     * @var ObjectCollection|ChildSpyPushNotificationSubscriptionDeliveryLog[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyPushNotificationSubscriptionDeliveryLog>
     */
    protected $spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\PushNotification\Persistence\Base\SpyPushNotificationSubscription object.
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
     * Compares this with another <code>SpyPushNotificationSubscription</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyPushNotificationSubscription</code>, delegates to
     * <code>equals(SpyPushNotificationSubscription)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_push_notification_subscription] column value.
     *
     * @return int
     */
    public function getIdPushNotificationSubscription()
    {
        return $this->id_push_notification_subscription;
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
     * Get the [fk_push_notification_group] column value.
     *
     * @return int
     */
    public function getFkPushNotificationGroup()
    {
        return $this->fk_push_notification_group;
    }

    /**
     * Get the [fk_push_notification_provider] column value.
     *
     * @return int
     */
    public function getFkPushNotificationProvider()
    {
        return $this->fk_push_notification_provider;
    }

    /**
     * Get the [fk_locale] column value.
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fk_locale;
    }

    /**
     * Get the [payload] column value.
     *
     * @return string|null
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Get the [payload_checksum] column value.
     *
     * @return string|null
     */
    public function getPayloadChecksum()
    {
        return $this->payload_checksum;
    }

    /**
     * Get the [optionally formatted] temporal [expired_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), and 0 if column value is 0000-00-00 00:00:00.
     *
     * @throws \Propel\Runtime\Exception\PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime : string)
     */
    public function getExpiredAt($format = null)
    {
        if ($format === null) {
            return $this->expired_at;
        } else {
            return $this->expired_at instanceof \DateTimeInterface ? $this->expired_at->format($format) : null;
        }
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
     * Set the value of [id_push_notification_subscription] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setIdPushNotificationSubscription($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_push_notification_subscription !== $v) {
            $this->id_push_notification_subscription = $v;
            $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION] = true;
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
            $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_UUID] = true;
        }

        return $this;
    }

    /**
     * Set the value of [fk_push_notification_group] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setFkPushNotificationGroup($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_push_notification_group !== $v) {
            $this->fk_push_notification_group = $v;
            $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP] = true;
        }

        if ($this->aSpyPushNotificationGroup !== null && $this->aSpyPushNotificationGroup->getIdPushNotificationGroup() !== $v) {
            $this->aSpyPushNotificationGroup = null;
        }

        return $this;
    }

    /**
     * Set the value of [fk_push_notification_provider] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setFkPushNotificationProvider($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_push_notification_provider !== $v) {
            $this->fk_push_notification_provider = $v;
            $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER] = true;
        }

        if ($this->aSpyPushNotificationProvider !== null && $this->aSpyPushNotificationProvider->getIdPushNotificationProvider() !== $v) {
            $this->aSpyPushNotificationProvider = null;
        }

        return $this;
    }

    /**
     * Set the value of [fk_locale] column.
     *
     * @param int|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setFkLocale($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_locale !== $v) {
            $this->fk_locale = $v;
            $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE] = true;
        }

        if ($this->aSpyLocale !== null && $this->aSpyLocale->getIdLocale() !== $v) {
            $this->aSpyLocale = null;
        }

        return $this;
    }

    /**
     * Set the value of [payload] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setPayload($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->payload !== $v) {
            $this->payload = $v;
            $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD] = true;
        }

        return $this;
    }

    /**
     * Set the value of [payload_checksum] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setPayloadChecksum($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->payload_checksum !== $v) {
            $this->payload_checksum = $v;
            $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD_CHECKSUM] = true;
        }

        return $this;
    }

    /**
     * Sets the value of [expired_at] column to a normalized version of the date/time value specified.
     *
     * @param string|integer|\DateTimeInterface $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this The current object (for fluent API support)
     */
    public function setExpiredAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->expired_at !== null || $dt !== null) {
            if ($this->expired_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->expired_at->format("Y-m-d H:i:s.u")) {
                $this->expired_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT] = true;
            }
        } // if either are not null

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
                $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT] = true;
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
                $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyPushNotificationSubscriptionTableMap::translateFieldName('IdPushNotificationSubscription', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_push_notification_subscription = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyPushNotificationSubscriptionTableMap::translateFieldName('Uuid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->uuid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyPushNotificationSubscriptionTableMap::translateFieldName('FkPushNotificationGroup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_push_notification_group = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyPushNotificationSubscriptionTableMap::translateFieldName('FkPushNotificationProvider', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_push_notification_provider = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyPushNotificationSubscriptionTableMap::translateFieldName('FkLocale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_locale = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyPushNotificationSubscriptionTableMap::translateFieldName('Payload', TableMap::TYPE_PHPNAME, $indexType)];
            $this->payload = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyPushNotificationSubscriptionTableMap::translateFieldName('PayloadChecksum', TableMap::TYPE_PHPNAME, $indexType)];
            $this->payload_checksum = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyPushNotificationSubscriptionTableMap::translateFieldName('ExpiredAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->expired_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SpyPushNotificationSubscriptionTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SpyPushNotificationSubscriptionTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 10; // 10 = SpyPushNotificationSubscriptionTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationSubscription'), 0, $e);
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
        if ($this->aSpyPushNotificationGroup !== null && $this->fk_push_notification_group !== $this->aSpyPushNotificationGroup->getIdPushNotificationGroup()) {
            $this->aSpyPushNotificationGroup = null;
        }
        if ($this->aSpyPushNotificationProvider !== null && $this->fk_push_notification_provider !== $this->aSpyPushNotificationProvider->getIdPushNotificationProvider()) {
            $this->aSpyPushNotificationProvider = null;
        }
        if ($this->aSpyLocale !== null && $this->fk_locale !== $this->aSpyLocale->getIdLocale()) {
            $this->aSpyLocale = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyPushNotificationSubscriptionTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyPushNotificationSubscriptionQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyPushNotificationGroup = null;
            $this->aSpyPushNotificationProvider = null;
            $this->aSpyLocale = null;
            $this->collSpyPushNotificationSubscriptionDeliveryLogs = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     * @see SpyPushNotificationSubscription::setDeleted()
     * @see SpyPushNotificationSubscription::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPushNotificationSubscriptionTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyPushNotificationSubscriptionQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPushNotificationSubscriptionTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                $time = time();
                $highPrecision = \Propel\Runtime\Util\PropelDateTime::createHighPrecision();
                if (!$this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT)) {
                    $this->setCreatedAt($highPrecision);
                }
                if (!$this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt($highPrecision);
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt(\Propel\Runtime\Util\PropelDateTime::createHighPrecision());
                }
                // uuid behavior
                $this->updateUuidBeforeUpdate();
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
                SpyPushNotificationSubscriptionTableMap::addInstanceToPool($this);
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

            if ($this->aSpyPushNotificationGroup !== null) {
                if ($this->aSpyPushNotificationGroup->isModified() || $this->aSpyPushNotificationGroup->isNew()) {
                    $affectedRows += $this->aSpyPushNotificationGroup->save($con);
                }
                $this->setSpyPushNotificationGroup($this->aSpyPushNotificationGroup);
            }

            if ($this->aSpyPushNotificationProvider !== null) {
                if ($this->aSpyPushNotificationProvider->isModified() || $this->aSpyPushNotificationProvider->isNew()) {
                    $affectedRows += $this->aSpyPushNotificationProvider->save($con);
                }
                $this->setSpyPushNotificationProvider($this->aSpyPushNotificationProvider);
            }

            if ($this->aSpyLocale !== null) {
                if ($this->aSpyLocale->isModified() || $this->aSpyLocale->isNew()) {
                    $affectedRows += $this->aSpyLocale->save($con);
                }
                $this->setSpyLocale($this->aSpyLocale);
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

            if ($this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion !== null) {
                if (!$this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery::create()
                        ->filterByPrimaryKeys($this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyPushNotificationSubscriptionDeliveryLogs !== null) {
                foreach ($this->collSpyPushNotificationSubscriptionDeliveryLogs as $referrerFK) {
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

        $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION] = true;
        if (null !== $this->id_push_notification_subscription) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'id_push_notification_subscription';
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_UUID)) {
            $modifiedColumns[':p' . $index++]  = 'uuid';
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP)) {
            $modifiedColumns[':p' . $index++]  = 'fk_push_notification_group';
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER)) {
            $modifiedColumns[':p' . $index++]  = 'fk_push_notification_provider';
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE)) {
            $modifiedColumns[':p' . $index++]  = 'fk_locale';
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD)) {
            $modifiedColumns[':p' . $index++]  = 'payload';
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD_CHECKSUM)) {
            $modifiedColumns[':p' . $index++]  = 'payload_checksum';
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'expired_at';
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'updated_at';
        }

        $sql = sprintf(
            'INSERT INTO spy_push_notification_subscription (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_push_notification_subscription':
                        $stmt->bindValue($identifier, $this->id_push_notification_subscription, PDO::PARAM_INT);

                        break;
                    case 'uuid':
                        $stmt->bindValue($identifier, $this->uuid, PDO::PARAM_STR);

                        break;
                    case 'fk_push_notification_group':
                        $stmt->bindValue($identifier, $this->fk_push_notification_group, PDO::PARAM_INT);

                        break;
                    case 'fk_push_notification_provider':
                        $stmt->bindValue($identifier, $this->fk_push_notification_provider, PDO::PARAM_INT);

                        break;
                    case 'fk_locale':
                        $stmt->bindValue($identifier, $this->fk_locale, PDO::PARAM_INT);

                        break;
                    case 'payload':
                        $stmt->bindValue($identifier, $this->payload, PDO::PARAM_STR);

                        break;
                    case 'payload_checksum':
                        $stmt->bindValue($identifier, $this->payload_checksum, PDO::PARAM_STR);

                        break;
                    case 'expired_at':
                        $stmt->bindValue($identifier, $this->expired_at ? $this->expired_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);

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
            $pk = $con->lastInsertId('id_push_notification_subscription_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdPushNotificationSubscription($pk);

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
        $pos = SpyPushNotificationSubscriptionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdPushNotificationSubscription();

            case 1:
                return $this->getUuid();

            case 2:
                return $this->getFkPushNotificationGroup();

            case 3:
                return $this->getFkPushNotificationProvider();

            case 4:
                return $this->getFkLocale();

            case 5:
                return $this->getPayload();

            case 6:
                return $this->getPayloadChecksum();

            case 7:
                return $this->getExpiredAt();

            case 8:
                return $this->getCreatedAt();

            case 9:
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
        if (isset($alreadyDumpedObjects['SpyPushNotificationSubscription'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['SpyPushNotificationSubscription'][$this->hashCode()] = true;
        $keys = SpyPushNotificationSubscriptionTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getIdPushNotificationSubscription(),
            $keys[1] => $this->getUuid(),
            $keys[2] => $this->getFkPushNotificationGroup(),
            $keys[3] => $this->getFkPushNotificationProvider(),
            $keys[4] => $this->getFkLocale(),
            $keys[5] => $this->getPayload(),
            $keys[6] => $this->getPayloadChecksum(),
            $keys[7] => $this->getExpiredAt(),
            $keys[8] => $this->getCreatedAt(),
            $keys[9] => $this->getUpdatedAt(),
        ];
        if ($result[$keys[7]] instanceof \DateTimeInterface) {
            $result[$keys[7]] = $result[$keys[7]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[8]] instanceof \DateTimeInterface) {
            $result[$keys[8]] = $result[$keys[8]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[9]] instanceof \DateTimeInterface) {
            $result[$keys[9]] = $result[$keys[9]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSpyPushNotificationGroup) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPushNotificationGroup';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_push_notification_group';
                        break;
                    default:
                        $key = 'SpyPushNotificationGroup';
                }

                $result[$key] = $this->aSpyPushNotificationGroup->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSpyPushNotificationProvider) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPushNotificationProvider';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_push_notification_provider';
                        break;
                    default:
                        $key = 'SpyPushNotificationProvider';
                }

                $result[$key] = $this->aSpyPushNotificationProvider->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSpyLocale) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyLocale';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_locale';
                        break;
                    default:
                        $key = 'SpyLocale';
                }

                $result[$key] = $this->aSpyLocale->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSpyPushNotificationSubscriptionDeliveryLogs) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPushNotificationSubscriptionDeliveryLogs';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_push_notification_subscription_delivery_logs';
                        break;
                    default:
                        $key = 'SpyPushNotificationSubscriptionDeliveryLogs';
                }

                $result[$key] = $this->collSpyPushNotificationSubscriptionDeliveryLogs->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SpyPushNotificationSubscriptionTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

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
                $this->setIdPushNotificationSubscription($value);
                break;
            case 1:
                $this->setUuid($value);
                break;
            case 2:
                $this->setFkPushNotificationGroup($value);
                break;
            case 3:
                $this->setFkPushNotificationProvider($value);
                break;
            case 4:
                $this->setFkLocale($value);
                break;
            case 5:
                $this->setPayload($value);
                break;
            case 6:
                $this->setPayloadChecksum($value);
                break;
            case 7:
                $this->setExpiredAt($value);
                break;
            case 8:
                $this->setCreatedAt($value);
                break;
            case 9:
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
        $keys = SpyPushNotificationSubscriptionTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdPushNotificationSubscription($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setUuid($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkPushNotificationGroup($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setFkPushNotificationProvider($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setFkLocale($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPayload($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPayloadChecksum($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setExpiredAt($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setCreatedAt($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setUpdatedAt($arr[$keys[9]]);
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
        $criteria = new Criteria(SpyPushNotificationSubscriptionTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION)) {
            $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION, $this->id_push_notification_subscription);
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_UUID)) {
            $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_UUID, $this->uuid);
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP)) {
            $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP, $this->fk_push_notification_group);
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER)) {
            $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER, $this->fk_push_notification_provider);
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE)) {
            $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE, $this->fk_locale);
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD)) {
            $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD, $this->payload);
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD_CHECKSUM)) {
            $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD_CHECKSUM, $this->payload_checksum);
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT)) {
            $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT, $this->expired_at);
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT)) {
            $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT)) {
            $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT, $this->updated_at);
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
        $criteria = ChildSpyPushNotificationSubscriptionQuery::create();
        $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION, $this->id_push_notification_subscription);

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
        $validPk = null !== $this->getIdPushNotificationSubscription();

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
        return $this->getIdPushNotificationSubscription();
    }

    /**
     * Generic method to set the primary key (id_push_notification_subscription column).
     *
     * @param int|null $key Primary key.
     * @return void
     */
    public function setPrimaryKey(?int $key = null): void
    {
        $this->setIdPushNotificationSubscription($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     *
     * @return bool
     */
    public function isPrimaryKeyNull(): bool
    {
        return null === $this->getIdPushNotificationSubscription();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscription (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setUuid($this->getUuid());
        $copyObj->setFkPushNotificationGroup($this->getFkPushNotificationGroup());
        $copyObj->setFkPushNotificationProvider($this->getFkPushNotificationProvider());
        $copyObj->setFkLocale($this->getFkLocale());
        $copyObj->setPayload($this->getPayload());
        $copyObj->setPayloadChecksum($this->getPayloadChecksum());
        $copyObj->setExpiredAt($this->getExpiredAt());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyPushNotificationSubscriptionDeliveryLogs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyPushNotificationSubscriptionDeliveryLog($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPushNotificationSubscription(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscription Clone of current object.
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
     * Declares an association between this object and a ChildSpyPushNotificationGroup object.
     *
     * @param ChildSpyPushNotificationGroup $v
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setSpyPushNotificationGroup(ChildSpyPushNotificationGroup $v = null)
    {
        if ($v === null) {
            $this->setFkPushNotificationGroup(NULL);
        } else {
            $this->setFkPushNotificationGroup($v->getIdPushNotificationGroup());
        }

        $this->aSpyPushNotificationGroup = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyPushNotificationGroup object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyPushNotificationSubscription($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyPushNotificationGroup object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return ChildSpyPushNotificationGroup The associated ChildSpyPushNotificationGroup object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getSpyPushNotificationGroup(?ConnectionInterface $con = null)
    {
        if ($this->aSpyPushNotificationGroup === null && ($this->fk_push_notification_group != 0)) {
            $this->aSpyPushNotificationGroup = ChildSpyPushNotificationGroupQuery::create()->findPk($this->fk_push_notification_group, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyPushNotificationGroup->addSpyPushNotificationSubscriptions($this);
             */
        }

        return $this->aSpyPushNotificationGroup;
    }

    /**
     * Declares an association between this object and a ChildSpyPushNotificationProvider object.
     *
     * @param ChildSpyPushNotificationProvider $v
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setSpyPushNotificationProvider(ChildSpyPushNotificationProvider $v = null)
    {
        if ($v === null) {
            $this->setFkPushNotificationProvider(NULL);
        } else {
            $this->setFkPushNotificationProvider($v->getIdPushNotificationProvider());
        }

        $this->aSpyPushNotificationProvider = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyPushNotificationProvider object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyPushNotificationSubscription($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyPushNotificationProvider object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return ChildSpyPushNotificationProvider The associated ChildSpyPushNotificationProvider object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getSpyPushNotificationProvider(?ConnectionInterface $con = null)
    {
        if ($this->aSpyPushNotificationProvider === null && ($this->fk_push_notification_provider != 0)) {
            $this->aSpyPushNotificationProvider = ChildSpyPushNotificationProviderQuery::create()->findPk($this->fk_push_notification_provider, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyPushNotificationProvider->addSpyPushNotificationSubscriptions($this);
             */
        }

        return $this->aSpyPushNotificationProvider;
    }

    /**
     * Declares an association between this object and a SpyLocale object.
     *
     * @param SpyLocale|null $v
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setSpyLocale(SpyLocale $v = null)
    {
        if ($v === null) {
            $this->setFkLocale(NULL);
        } else {
            $this->setFkLocale($v->getIdLocale());
        }

        $this->aSpyLocale = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyLocale object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyPushNotificationSubscription($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyLocale object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return SpyLocale|null The associated SpyLocale object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getSpyLocale(?ConnectionInterface $con = null)
    {
        if ($this->aSpyLocale === null && ($this->fk_locale != 0)) {
            $this->aSpyLocale = SpyLocaleQuery::create()->findPk($this->fk_locale, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyLocale->addSpyPushNotificationSubscriptions($this);
             */
        }

        return $this->aSpyLocale;
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
        if ('SpyPushNotificationSubscriptionDeliveryLog' === $relationName) {
            $this->initSpyPushNotificationSubscriptionDeliveryLogs();
            return;
        }
    }

    /**
     * Clears out the collSpyPushNotificationSubscriptionDeliveryLogs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return $this
     * @see addSpyPushNotificationSubscriptionDeliveryLogs()
     */
    public function clearSpyPushNotificationSubscriptionDeliveryLogs()
    {
        $this->collSpyPushNotificationSubscriptionDeliveryLogs = null; // important to set this to NULL since that means it is uninitialized

        return $this;
    }

    /**
     * Reset is the collSpyPushNotificationSubscriptionDeliveryLogs collection loaded partially.
     *
     * @return void
     */
    public function resetPartialSpyPushNotificationSubscriptionDeliveryLogs($v = true): void
    {
        $this->collSpyPushNotificationSubscriptionDeliveryLogsPartial = $v;
    }

    /**
     * Initializes the collSpyPushNotificationSubscriptionDeliveryLogs collection.
     *
     * By default this just sets the collSpyPushNotificationSubscriptionDeliveryLogs collection to an empty array (like clearcollSpyPushNotificationSubscriptionDeliveryLogs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param bool $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyPushNotificationSubscriptionDeliveryLogs(bool $overrideExisting = true): void
    {
        if (null !== $this->collSpyPushNotificationSubscriptionDeliveryLogs && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyPushNotificationSubscriptionDeliveryLogTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyPushNotificationSubscriptionDeliveryLogs = new $collectionClassName;
        $this->collSpyPushNotificationSubscriptionDeliveryLogs->setModel('\Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLog');
    }

    /**
     * Gets an array of ChildSpyPushNotificationSubscriptionDeliveryLog objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyPushNotificationSubscription is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyPushNotificationSubscriptionDeliveryLog[] List of ChildSpyPushNotificationSubscriptionDeliveryLog objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyPushNotificationSubscriptionDeliveryLog> List of ChildSpyPushNotificationSubscriptionDeliveryLog objects
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getSpyPushNotificationSubscriptionDeliveryLogs(?Criteria $criteria = null, ?ConnectionInterface $con = null)
    {
        $partial = $this->collSpyPushNotificationSubscriptionDeliveryLogsPartial && !$this->isNew();
        if (null === $this->collSpyPushNotificationSubscriptionDeliveryLogs || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyPushNotificationSubscriptionDeliveryLogs) {
                    $this->initSpyPushNotificationSubscriptionDeliveryLogs();
                } else {
                    $collectionClassName = SpyPushNotificationSubscriptionDeliveryLogTableMap::getTableMap()->getCollectionClassName();

                    $collSpyPushNotificationSubscriptionDeliveryLogs = new $collectionClassName;
                    $collSpyPushNotificationSubscriptionDeliveryLogs->setModel('\Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLog');

                    return $collSpyPushNotificationSubscriptionDeliveryLogs;
                }
            } else {
                $collSpyPushNotificationSubscriptionDeliveryLogs = ChildSpyPushNotificationSubscriptionDeliveryLogQuery::create(null, $criteria)
                    ->filterBySpyPushNotificationSubscription($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyPushNotificationSubscriptionDeliveryLogsPartial && count($collSpyPushNotificationSubscriptionDeliveryLogs)) {
                        $this->initSpyPushNotificationSubscriptionDeliveryLogs(false);

                        foreach ($collSpyPushNotificationSubscriptionDeliveryLogs as $obj) {
                            if (false == $this->collSpyPushNotificationSubscriptionDeliveryLogs->contains($obj)) {
                                $this->collSpyPushNotificationSubscriptionDeliveryLogs->append($obj);
                            }
                        }

                        $this->collSpyPushNotificationSubscriptionDeliveryLogsPartial = true;
                    }

                    return $collSpyPushNotificationSubscriptionDeliveryLogs;
                }

                if ($partial && $this->collSpyPushNotificationSubscriptionDeliveryLogs) {
                    foreach ($this->collSpyPushNotificationSubscriptionDeliveryLogs as $obj) {
                        if ($obj->isNew()) {
                            $collSpyPushNotificationSubscriptionDeliveryLogs[] = $obj;
                        }
                    }
                }

                $this->collSpyPushNotificationSubscriptionDeliveryLogs = $collSpyPushNotificationSubscriptionDeliveryLogs;
                $this->collSpyPushNotificationSubscriptionDeliveryLogsPartial = false;
            }
        }

        return $this->collSpyPushNotificationSubscriptionDeliveryLogs;
    }

    /**
     * Sets a collection of ChildSpyPushNotificationSubscriptionDeliveryLog objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param Collection $spyPushNotificationSubscriptionDeliveryLogs A Propel collection.
     * @param ConnectionInterface $con Optional connection object
     * @return $this The current object (for fluent API support)
     */
    public function setSpyPushNotificationSubscriptionDeliveryLogs(Collection $spyPushNotificationSubscriptionDeliveryLogs, ?ConnectionInterface $con = null)
    {
        /** @var ChildSpyPushNotificationSubscriptionDeliveryLog[] $spyPushNotificationSubscriptionDeliveryLogsToDelete */
        $spyPushNotificationSubscriptionDeliveryLogsToDelete = $this->getSpyPushNotificationSubscriptionDeliveryLogs(new Criteria(), $con)->diff($spyPushNotificationSubscriptionDeliveryLogs);


        $this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion = $spyPushNotificationSubscriptionDeliveryLogsToDelete;

        foreach ($spyPushNotificationSubscriptionDeliveryLogsToDelete as $spyPushNotificationSubscriptionDeliveryLogRemoved) {
            $spyPushNotificationSubscriptionDeliveryLogRemoved->setSpyPushNotificationSubscription(null);
        }

        $this->collSpyPushNotificationSubscriptionDeliveryLogs = null;
        foreach ($spyPushNotificationSubscriptionDeliveryLogs as $spyPushNotificationSubscriptionDeliveryLog) {
            $this->addSpyPushNotificationSubscriptionDeliveryLog($spyPushNotificationSubscriptionDeliveryLog);
        }

        $this->collSpyPushNotificationSubscriptionDeliveryLogs = $spyPushNotificationSubscriptionDeliveryLogs;
        $this->collSpyPushNotificationSubscriptionDeliveryLogsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyPushNotificationSubscriptionDeliveryLog objects.
     *
     * @param Criteria $criteria
     * @param bool $distinct
     * @param ConnectionInterface $con
     * @return int Count of related SpyPushNotificationSubscriptionDeliveryLog objects.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function countSpyPushNotificationSubscriptionDeliveryLogs(?Criteria $criteria = null, bool $distinct = false, ?ConnectionInterface $con = null): int
    {
        $partial = $this->collSpyPushNotificationSubscriptionDeliveryLogsPartial && !$this->isNew();
        if (null === $this->collSpyPushNotificationSubscriptionDeliveryLogs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyPushNotificationSubscriptionDeliveryLogs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyPushNotificationSubscriptionDeliveryLogs());
            }

            $query = ChildSpyPushNotificationSubscriptionDeliveryLogQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyPushNotificationSubscription($this)
                ->count($con);
        }

        return count($this->collSpyPushNotificationSubscriptionDeliveryLogs);
    }

    /**
     * Method called to associate a ChildSpyPushNotificationSubscriptionDeliveryLog object to this object
     * through the ChildSpyPushNotificationSubscriptionDeliveryLog foreign key attribute.
     *
     * @param ChildSpyPushNotificationSubscriptionDeliveryLog $l ChildSpyPushNotificationSubscriptionDeliveryLog
     * @return $this The current object (for fluent API support)
     */
    public function addSpyPushNotificationSubscriptionDeliveryLog(ChildSpyPushNotificationSubscriptionDeliveryLog $l)
    {
        if ($this->collSpyPushNotificationSubscriptionDeliveryLogs === null) {
            $this->initSpyPushNotificationSubscriptionDeliveryLogs();
            $this->collSpyPushNotificationSubscriptionDeliveryLogsPartial = true;
        }

        if (!$this->collSpyPushNotificationSubscriptionDeliveryLogs->contains($l)) {
            $this->doAddSpyPushNotificationSubscriptionDeliveryLog($l);

            if ($this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion and $this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion->contains($l)) {
                $this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion->remove($this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyPushNotificationSubscriptionDeliveryLog $spyPushNotificationSubscriptionDeliveryLog The ChildSpyPushNotificationSubscriptionDeliveryLog object to add.
     */
    protected function doAddSpyPushNotificationSubscriptionDeliveryLog(ChildSpyPushNotificationSubscriptionDeliveryLog $spyPushNotificationSubscriptionDeliveryLog): void
    {
        $this->collSpyPushNotificationSubscriptionDeliveryLogs[]= $spyPushNotificationSubscriptionDeliveryLog;
        $spyPushNotificationSubscriptionDeliveryLog->setSpyPushNotificationSubscription($this);
    }

    /**
     * @param ChildSpyPushNotificationSubscriptionDeliveryLog $spyPushNotificationSubscriptionDeliveryLog The ChildSpyPushNotificationSubscriptionDeliveryLog object to remove.
     * @return $this The current object (for fluent API support)
     */
    public function removeSpyPushNotificationSubscriptionDeliveryLog(ChildSpyPushNotificationSubscriptionDeliveryLog $spyPushNotificationSubscriptionDeliveryLog)
    {
        if ($this->getSpyPushNotificationSubscriptionDeliveryLogs()->contains($spyPushNotificationSubscriptionDeliveryLog)) {
            $pos = $this->collSpyPushNotificationSubscriptionDeliveryLogs->search($spyPushNotificationSubscriptionDeliveryLog);
            $this->collSpyPushNotificationSubscriptionDeliveryLogs->remove($pos);
            if (null === $this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion) {
                $this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion = clone $this->collSpyPushNotificationSubscriptionDeliveryLogs;
                $this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion->clear();
            }
            $this->spyPushNotificationSubscriptionDeliveryLogsScheduledForDeletion[]= clone $spyPushNotificationSubscriptionDeliveryLog;
            $spyPushNotificationSubscriptionDeliveryLog->setSpyPushNotificationSubscription(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyPushNotificationSubscription is new, it will return
     * an empty collection; or if this SpyPushNotificationSubscription has previously
     * been saved, it will retrieve related SpyPushNotificationSubscriptionDeliveryLogs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyPushNotificationSubscription.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @param string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyPushNotificationSubscriptionDeliveryLog[] List of ChildSpyPushNotificationSubscriptionDeliveryLog objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyPushNotificationSubscriptionDeliveryLog}> List of ChildSpyPushNotificationSubscriptionDeliveryLog objects
     */
    public function getSpyPushNotificationSubscriptionDeliveryLogsJoinSpyPushNotification(?Criteria $criteria = null, ?ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyPushNotificationSubscriptionDeliveryLogQuery::create(null, $criteria);
        $query->joinWith('SpyPushNotification', $joinBehavior);

        return $this->getSpyPushNotificationSubscriptionDeliveryLogs($query, $con);
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
        if (null !== $this->aSpyPushNotificationGroup) {
            $this->aSpyPushNotificationGroup->removeSpyPushNotificationSubscription($this);
        }
        if (null !== $this->aSpyPushNotificationProvider) {
            $this->aSpyPushNotificationProvider->removeSpyPushNotificationSubscription($this);
        }
        if (null !== $this->aSpyLocale) {
            $this->aSpyLocale->removeSpyPushNotificationSubscription($this);
        }
        $this->id_push_notification_subscription = null;
        $this->uuid = null;
        $this->fk_push_notification_group = null;
        $this->fk_push_notification_provider = null;
        $this->fk_locale = null;
        $this->payload = null;
        $this->payload_checksum = null;
        $this->expired_at = null;
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
            if ($this->collSpyPushNotificationSubscriptionDeliveryLogs) {
                foreach ($this->collSpyPushNotificationSubscriptionDeliveryLogs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyPushNotificationSubscriptionDeliveryLogs = null;
        $this->aSpyPushNotificationGroup = null;
        $this->aSpyPushNotificationProvider = null;
        $this->aSpyLocale = null;
        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyPushNotificationSubscriptionTableMap::DEFAULT_STRING_FORMAT);
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return $this The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT] = true;

        return $this;
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
        $name = 'spy_push_notification_subscription' . '.' . $this->getIdPushNotificationSubscription() . '.' . $this->getFkPushNotificationGroup() . '.' . $this->getFkPushNotificationProvider();
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
