<?php

namespace Orm\Zed\PushNotification\Persistence\Map;

use Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscription;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionQuery;
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
 * This class defines the structure of the 'spy_push_notification_subscription' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyPushNotificationSubscriptionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.PushNotification.Persistence.Map.SpyPushNotificationSubscriptionTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_push_notification_subscription';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyPushNotificationSubscription';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationSubscription';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.PushNotification.Persistence.SpyPushNotificationSubscription';

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
     * the column name for the id_push_notification_subscription field
     */
    public const COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION = 'spy_push_notification_subscription.id_push_notification_subscription';

    /**
     * the column name for the uuid field
     */
    public const COL_UUID = 'spy_push_notification_subscription.uuid';

    /**
     * the column name for the fk_push_notification_group field
     */
    public const COL_FK_PUSH_NOTIFICATION_GROUP = 'spy_push_notification_subscription.fk_push_notification_group';

    /**
     * the column name for the fk_push_notification_provider field
     */
    public const COL_FK_PUSH_NOTIFICATION_PROVIDER = 'spy_push_notification_subscription.fk_push_notification_provider';

    /**
     * the column name for the fk_locale field
     */
    public const COL_FK_LOCALE = 'spy_push_notification_subscription.fk_locale';

    /**
     * the column name for the payload field
     */
    public const COL_PAYLOAD = 'spy_push_notification_subscription.payload';

    /**
     * the column name for the payload_checksum field
     */
    public const COL_PAYLOAD_CHECKSUM = 'spy_push_notification_subscription.payload_checksum';

    /**
     * the column name for the expired_at field
     */
    public const COL_EXPIRED_AT = 'spy_push_notification_subscription.expired_at';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_push_notification_subscription.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_push_notification_subscription.updated_at';

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
        self::TYPE_PHPNAME       => ['IdPushNotificationSubscription', 'Uuid', 'FkPushNotificationGroup', 'FkPushNotificationProvider', 'FkLocale', 'Payload', 'PayloadChecksum', 'ExpiredAt', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idPushNotificationSubscription', 'uuid', 'fkPushNotificationGroup', 'fkPushNotificationProvider', 'fkLocale', 'payload', 'payloadChecksum', 'expiredAt', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION, SpyPushNotificationSubscriptionTableMap::COL_UUID, SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP, SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER, SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE, SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD, SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD_CHECKSUM, SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT, SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT, SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_push_notification_subscription', 'uuid', 'fk_push_notification_group', 'fk_push_notification_provider', 'fk_locale', 'payload', 'payload_checksum', 'expired_at', 'created_at', 'updated_at', ],
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
        self::TYPE_PHPNAME       => ['IdPushNotificationSubscription' => 0, 'Uuid' => 1, 'FkPushNotificationGroup' => 2, 'FkPushNotificationProvider' => 3, 'FkLocale' => 4, 'Payload' => 5, 'PayloadChecksum' => 6, 'ExpiredAt' => 7, 'CreatedAt' => 8, 'UpdatedAt' => 9, ],
        self::TYPE_CAMELNAME     => ['idPushNotificationSubscription' => 0, 'uuid' => 1, 'fkPushNotificationGroup' => 2, 'fkPushNotificationProvider' => 3, 'fkLocale' => 4, 'payload' => 5, 'payloadChecksum' => 6, 'expiredAt' => 7, 'createdAt' => 8, 'updatedAt' => 9, ],
        self::TYPE_COLNAME       => [SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION => 0, SpyPushNotificationSubscriptionTableMap::COL_UUID => 1, SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP => 2, SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER => 3, SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE => 4, SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD => 5, SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD_CHECKSUM => 6, SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT => 7, SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT => 8, SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT => 9, ],
        self::TYPE_FIELDNAME     => ['id_push_notification_subscription' => 0, 'uuid' => 1, 'fk_push_notification_group' => 2, 'fk_push_notification_provider' => 3, 'fk_locale' => 4, 'payload' => 5, 'payload_checksum' => 6, 'expired_at' => 7, 'created_at' => 8, 'updated_at' => 9, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdPushNotificationSubscription' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION',
        'SpyPushNotificationSubscription.IdPushNotificationSubscription' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION',
        'idPushNotificationSubscription' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION',
        'spyPushNotificationSubscription.idPushNotificationSubscription' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION',
        'SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION',
        'COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION',
        'id_push_notification_subscription' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION',
        'spy_push_notification_subscription.id_push_notification_subscription' => 'ID_PUSH_NOTIFICATION_SUBSCRIPTION',
        'Uuid' => 'UUID',
        'SpyPushNotificationSubscription.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spyPushNotificationSubscription.uuid' => 'UUID',
        'SpyPushNotificationSubscriptionTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_push_notification_subscription.uuid' => 'UUID',
        'FkPushNotificationGroup' => 'FK_PUSH_NOTIFICATION_GROUP',
        'SpyPushNotificationSubscription.FkPushNotificationGroup' => 'FK_PUSH_NOTIFICATION_GROUP',
        'fkPushNotificationGroup' => 'FK_PUSH_NOTIFICATION_GROUP',
        'spyPushNotificationSubscription.fkPushNotificationGroup' => 'FK_PUSH_NOTIFICATION_GROUP',
        'SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP' => 'FK_PUSH_NOTIFICATION_GROUP',
        'COL_FK_PUSH_NOTIFICATION_GROUP' => 'FK_PUSH_NOTIFICATION_GROUP',
        'fk_push_notification_group' => 'FK_PUSH_NOTIFICATION_GROUP',
        'spy_push_notification_subscription.fk_push_notification_group' => 'FK_PUSH_NOTIFICATION_GROUP',
        'FkPushNotificationProvider' => 'FK_PUSH_NOTIFICATION_PROVIDER',
        'SpyPushNotificationSubscription.FkPushNotificationProvider' => 'FK_PUSH_NOTIFICATION_PROVIDER',
        'fkPushNotificationProvider' => 'FK_PUSH_NOTIFICATION_PROVIDER',
        'spyPushNotificationSubscription.fkPushNotificationProvider' => 'FK_PUSH_NOTIFICATION_PROVIDER',
        'SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER' => 'FK_PUSH_NOTIFICATION_PROVIDER',
        'COL_FK_PUSH_NOTIFICATION_PROVIDER' => 'FK_PUSH_NOTIFICATION_PROVIDER',
        'fk_push_notification_provider' => 'FK_PUSH_NOTIFICATION_PROVIDER',
        'spy_push_notification_subscription.fk_push_notification_provider' => 'FK_PUSH_NOTIFICATION_PROVIDER',
        'FkLocale' => 'FK_LOCALE',
        'SpyPushNotificationSubscription.FkLocale' => 'FK_LOCALE',
        'fkLocale' => 'FK_LOCALE',
        'spyPushNotificationSubscription.fkLocale' => 'FK_LOCALE',
        'SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE' => 'FK_LOCALE',
        'COL_FK_LOCALE' => 'FK_LOCALE',
        'fk_locale' => 'FK_LOCALE',
        'spy_push_notification_subscription.fk_locale' => 'FK_LOCALE',
        'Payload' => 'PAYLOAD',
        'SpyPushNotificationSubscription.Payload' => 'PAYLOAD',
        'payload' => 'PAYLOAD',
        'spyPushNotificationSubscription.payload' => 'PAYLOAD',
        'SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD' => 'PAYLOAD',
        'COL_PAYLOAD' => 'PAYLOAD',
        'spy_push_notification_subscription.payload' => 'PAYLOAD',
        'PayloadChecksum' => 'PAYLOAD_CHECKSUM',
        'SpyPushNotificationSubscription.PayloadChecksum' => 'PAYLOAD_CHECKSUM',
        'payloadChecksum' => 'PAYLOAD_CHECKSUM',
        'spyPushNotificationSubscription.payloadChecksum' => 'PAYLOAD_CHECKSUM',
        'SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD_CHECKSUM' => 'PAYLOAD_CHECKSUM',
        'COL_PAYLOAD_CHECKSUM' => 'PAYLOAD_CHECKSUM',
        'payload_checksum' => 'PAYLOAD_CHECKSUM',
        'spy_push_notification_subscription.payload_checksum' => 'PAYLOAD_CHECKSUM',
        'ExpiredAt' => 'EXPIRED_AT',
        'SpyPushNotificationSubscription.ExpiredAt' => 'EXPIRED_AT',
        'expiredAt' => 'EXPIRED_AT',
        'spyPushNotificationSubscription.expiredAt' => 'EXPIRED_AT',
        'SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT' => 'EXPIRED_AT',
        'COL_EXPIRED_AT' => 'EXPIRED_AT',
        'expired_at' => 'EXPIRED_AT',
        'spy_push_notification_subscription.expired_at' => 'EXPIRED_AT',
        'CreatedAt' => 'CREATED_AT',
        'SpyPushNotificationSubscription.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyPushNotificationSubscription.createdAt' => 'CREATED_AT',
        'SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_push_notification_subscription.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyPushNotificationSubscription.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyPushNotificationSubscription.updatedAt' => 'UPDATED_AT',
        'SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_push_notification_subscription.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_push_notification_subscription');
        $this->setPhpName('SpyPushNotificationSubscription');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationSubscription');
        $this->setPackage('src.Orm.Zed.PushNotification.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('id_push_notification_subscription_pk_seq');
        // columns
        $this->addPrimaryKey('id_push_notification_subscription', 'IdPushNotificationSubscription', 'INTEGER', true, null, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 36, null);
        $this->addForeignKey('fk_push_notification_group', 'FkPushNotificationGroup', 'INTEGER', 'spy_push_notification_group', 'id_push_notification_group', true, null, null);
        $this->addForeignKey('fk_push_notification_provider', 'FkPushNotificationProvider', 'INTEGER', 'spy_push_notification_provider', 'id_push_notification_provider', true, null, null);
        $this->addForeignKey('fk_locale', 'FkLocale', 'INTEGER', 'spy_locale', 'id_locale', false, null, null);
        $this->addColumn('payload', 'Payload', 'CLOB', false, null, null);
        $this->addColumn('payload_checksum', 'PayloadChecksum', 'VARCHAR', false, 255, null);
        $this->addColumn('expired_at', 'ExpiredAt', 'TIMESTAMP', true, null, null);
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
        $this->addRelation('SpyPushNotificationGroup', '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationGroup', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_push_notification_group',
    1 => ':id_push_notification_group',
  ),
), null, null, null, false);
        $this->addRelation('SpyPushNotificationProvider', '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationProvider', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_push_notification_provider',
    1 => ':id_push_notification_provider',
  ),
), null, null, null, false);
        $this->addRelation('SpyLocale', '\\Orm\\Zed\\Locale\\Persistence\\SpyLocale', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, null, false);
        $this->addRelation('SpyPushNotificationSubscriptionDeliveryLog', '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationSubscriptionDeliveryLog', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_push_notification_subscription',
    1 => ':id_push_notification_subscription',
  ),
), null, null, 'SpyPushNotificationSubscriptionDeliveryLogs', false);
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
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'id_push_notification_subscription.fk_push_notification_group.fk_push_notification_provider'],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscription', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscription', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscription', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscription', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscription', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPushNotificationSubscription', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdPushNotificationSubscription', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyPushNotificationSubscriptionTableMap::CLASS_DEFAULT : SpyPushNotificationSubscriptionTableMap::OM_CLASS;
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
     * @return array (SpyPushNotificationSubscription object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyPushNotificationSubscriptionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyPushNotificationSubscriptionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyPushNotificationSubscriptionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyPushNotificationSubscriptionTableMap::OM_CLASS;
            /** @var SpyPushNotificationSubscription $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyPushNotificationSubscriptionTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyPushNotificationSubscriptionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyPushNotificationSubscriptionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyPushNotificationSubscription $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyPushNotificationSubscriptionTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_UUID);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD_CHECKSUM);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_push_notification_subscription');
            $criteria->addSelectColumn($alias . '.uuid');
            $criteria->addSelectColumn($alias . '.fk_push_notification_group');
            $criteria->addSelectColumn($alias . '.fk_push_notification_provider');
            $criteria->addSelectColumn($alias . '.fk_locale');
            $criteria->addSelectColumn($alias . '.payload');
            $criteria->addSelectColumn($alias . '.payload_checksum');
            $criteria->addSelectColumn($alias . '.expired_at');
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
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_UUID);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD_CHECKSUM);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_push_notification_subscription');
            $criteria->removeSelectColumn($alias . '.uuid');
            $criteria->removeSelectColumn($alias . '.fk_push_notification_group');
            $criteria->removeSelectColumn($alias . '.fk_push_notification_provider');
            $criteria->removeSelectColumn($alias . '.fk_locale');
            $criteria->removeSelectColumn($alias . '.payload');
            $criteria->removeSelectColumn($alias . '.payload_checksum');
            $criteria->removeSelectColumn($alias . '.expired_at');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyPushNotificationSubscriptionTableMap::DATABASE_NAME)->getTable(SpyPushNotificationSubscriptionTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyPushNotificationSubscription or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyPushNotificationSubscription object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPushNotificationSubscriptionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscription) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyPushNotificationSubscriptionTableMap::DATABASE_NAME);
            $criteria->add(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION, (array) $values, Criteria::IN);
        }

        $query = SpyPushNotificationSubscriptionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyPushNotificationSubscriptionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyPushNotificationSubscriptionTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_push_notification_subscription table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyPushNotificationSubscriptionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyPushNotificationSubscription or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyPushNotificationSubscription object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPushNotificationSubscriptionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyPushNotificationSubscription object
        }

        if ($criteria->containsKey(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION) && $criteria->keyContainsValue(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION.')');
        }


        // Set the correct dbName
        $query = SpyPushNotificationSubscriptionQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
