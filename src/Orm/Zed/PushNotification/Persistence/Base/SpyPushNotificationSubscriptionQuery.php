<?php

namespace Orm\Zed\PushNotification\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Locale\Persistence\SpyLocale;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscription as ChildSpyPushNotificationSubscription;
use Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionQuery as ChildSpyPushNotificationSubscriptionQuery;
use Orm\Zed\PushNotification\Persistence\Map\SpyPushNotificationSubscriptionTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Model\Formatter\TypeAwareSimpleArrayFormatter;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\PropelReplicationCache\Business\PropelReplicationCacheFacade;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the `spy_push_notification_subscription` table.
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery orderByIdPushNotificationSubscription($order = Criteria::ASC) Order by the id_push_notification_subscription column
 * @method     ChildSpyPushNotificationSubscriptionQuery orderByUuid($order = Criteria::ASC) Order by the uuid column
 * @method     ChildSpyPushNotificationSubscriptionQuery orderByFkPushNotificationGroup($order = Criteria::ASC) Order by the fk_push_notification_group column
 * @method     ChildSpyPushNotificationSubscriptionQuery orderByFkPushNotificationProvider($order = Criteria::ASC) Order by the fk_push_notification_provider column
 * @method     ChildSpyPushNotificationSubscriptionQuery orderByFkLocale($order = Criteria::ASC) Order by the fk_locale column
 * @method     ChildSpyPushNotificationSubscriptionQuery orderByPayload($order = Criteria::ASC) Order by the payload column
 * @method     ChildSpyPushNotificationSubscriptionQuery orderByPayloadChecksum($order = Criteria::ASC) Order by the payload_checksum column
 * @method     ChildSpyPushNotificationSubscriptionQuery orderByExpiredAt($order = Criteria::ASC) Order by the expired_at column
 * @method     ChildSpyPushNotificationSubscriptionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyPushNotificationSubscriptionQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery groupByIdPushNotificationSubscription() Group by the id_push_notification_subscription column
 * @method     ChildSpyPushNotificationSubscriptionQuery groupByUuid() Group by the uuid column
 * @method     ChildSpyPushNotificationSubscriptionQuery groupByFkPushNotificationGroup() Group by the fk_push_notification_group column
 * @method     ChildSpyPushNotificationSubscriptionQuery groupByFkPushNotificationProvider() Group by the fk_push_notification_provider column
 * @method     ChildSpyPushNotificationSubscriptionQuery groupByFkLocale() Group by the fk_locale column
 * @method     ChildSpyPushNotificationSubscriptionQuery groupByPayload() Group by the payload column
 * @method     ChildSpyPushNotificationSubscriptionQuery groupByPayloadChecksum() Group by the payload_checksum column
 * @method     ChildSpyPushNotificationSubscriptionQuery groupByExpiredAt() Group by the expired_at column
 * @method     ChildSpyPushNotificationSubscriptionQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyPushNotificationSubscriptionQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyPushNotificationSubscriptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyPushNotificationSubscriptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyPushNotificationSubscriptionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyPushNotificationSubscriptionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery leftJoinSpyPushNotificationGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyPushNotificationGroup relation
 * @method     ChildSpyPushNotificationSubscriptionQuery rightJoinSpyPushNotificationGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyPushNotificationGroup relation
 * @method     ChildSpyPushNotificationSubscriptionQuery innerJoinSpyPushNotificationGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyPushNotificationGroup relation
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery joinWithSpyPushNotificationGroup($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyPushNotificationGroup relation
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery leftJoinWithSpyPushNotificationGroup() Adds a LEFT JOIN clause and with to the query using the SpyPushNotificationGroup relation
 * @method     ChildSpyPushNotificationSubscriptionQuery rightJoinWithSpyPushNotificationGroup() Adds a RIGHT JOIN clause and with to the query using the SpyPushNotificationGroup relation
 * @method     ChildSpyPushNotificationSubscriptionQuery innerJoinWithSpyPushNotificationGroup() Adds a INNER JOIN clause and with to the query using the SpyPushNotificationGroup relation
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery leftJoinSpyPushNotificationProvider($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyPushNotificationProvider relation
 * @method     ChildSpyPushNotificationSubscriptionQuery rightJoinSpyPushNotificationProvider($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyPushNotificationProvider relation
 * @method     ChildSpyPushNotificationSubscriptionQuery innerJoinSpyPushNotificationProvider($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyPushNotificationProvider relation
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery joinWithSpyPushNotificationProvider($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyPushNotificationProvider relation
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery leftJoinWithSpyPushNotificationProvider() Adds a LEFT JOIN clause and with to the query using the SpyPushNotificationProvider relation
 * @method     ChildSpyPushNotificationSubscriptionQuery rightJoinWithSpyPushNotificationProvider() Adds a RIGHT JOIN clause and with to the query using the SpyPushNotificationProvider relation
 * @method     ChildSpyPushNotificationSubscriptionQuery innerJoinWithSpyPushNotificationProvider() Adds a INNER JOIN clause and with to the query using the SpyPushNotificationProvider relation
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery leftJoinSpyLocale($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyLocale relation
 * @method     ChildSpyPushNotificationSubscriptionQuery rightJoinSpyLocale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyLocale relation
 * @method     ChildSpyPushNotificationSubscriptionQuery innerJoinSpyLocale($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyLocale relation
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery joinWithSpyLocale($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyLocale relation
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery leftJoinWithSpyLocale() Adds a LEFT JOIN clause and with to the query using the SpyLocale relation
 * @method     ChildSpyPushNotificationSubscriptionQuery rightJoinWithSpyLocale() Adds a RIGHT JOIN clause and with to the query using the SpyLocale relation
 * @method     ChildSpyPushNotificationSubscriptionQuery innerJoinWithSpyLocale() Adds a INNER JOIN clause and with to the query using the SpyLocale relation
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery leftJoinSpyPushNotificationSubscriptionDeliveryLog($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyPushNotificationSubscriptionDeliveryLog relation
 * @method     ChildSpyPushNotificationSubscriptionQuery rightJoinSpyPushNotificationSubscriptionDeliveryLog($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyPushNotificationSubscriptionDeliveryLog relation
 * @method     ChildSpyPushNotificationSubscriptionQuery innerJoinSpyPushNotificationSubscriptionDeliveryLog($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyPushNotificationSubscriptionDeliveryLog relation
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery joinWithSpyPushNotificationSubscriptionDeliveryLog($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyPushNotificationSubscriptionDeliveryLog relation
 *
 * @method     ChildSpyPushNotificationSubscriptionQuery leftJoinWithSpyPushNotificationSubscriptionDeliveryLog() Adds a LEFT JOIN clause and with to the query using the SpyPushNotificationSubscriptionDeliveryLog relation
 * @method     ChildSpyPushNotificationSubscriptionQuery rightJoinWithSpyPushNotificationSubscriptionDeliveryLog() Adds a RIGHT JOIN clause and with to the query using the SpyPushNotificationSubscriptionDeliveryLog relation
 * @method     ChildSpyPushNotificationSubscriptionQuery innerJoinWithSpyPushNotificationSubscriptionDeliveryLog() Adds a INNER JOIN clause and with to the query using the SpyPushNotificationSubscriptionDeliveryLog relation
 *
 * @method     \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery|\Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery|\Orm\Zed\Locale\Persistence\SpyLocaleQuery|\Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyPushNotificationSubscription|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyPushNotificationSubscription matching the query
 * @method     ChildSpyPushNotificationSubscription findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyPushNotificationSubscription matching the query, or a new ChildSpyPushNotificationSubscription object populated from the query conditions when no match is found
 *
 * @method     ChildSpyPushNotificationSubscription|null findOneByIdPushNotificationSubscription(int $id_push_notification_subscription) Return the first ChildSpyPushNotificationSubscription filtered by the id_push_notification_subscription column
 * @method     ChildSpyPushNotificationSubscription|null findOneByUuid(string $uuid) Return the first ChildSpyPushNotificationSubscription filtered by the uuid column
 * @method     ChildSpyPushNotificationSubscription|null findOneByFkPushNotificationGroup(int $fk_push_notification_group) Return the first ChildSpyPushNotificationSubscription filtered by the fk_push_notification_group column
 * @method     ChildSpyPushNotificationSubscription|null findOneByFkPushNotificationProvider(int $fk_push_notification_provider) Return the first ChildSpyPushNotificationSubscription filtered by the fk_push_notification_provider column
 * @method     ChildSpyPushNotificationSubscription|null findOneByFkLocale(int $fk_locale) Return the first ChildSpyPushNotificationSubscription filtered by the fk_locale column
 * @method     ChildSpyPushNotificationSubscription|null findOneByPayload(string $payload) Return the first ChildSpyPushNotificationSubscription filtered by the payload column
 * @method     ChildSpyPushNotificationSubscription|null findOneByPayloadChecksum(string $payload_checksum) Return the first ChildSpyPushNotificationSubscription filtered by the payload_checksum column
 * @method     ChildSpyPushNotificationSubscription|null findOneByExpiredAt(string $expired_at) Return the first ChildSpyPushNotificationSubscription filtered by the expired_at column
 * @method     ChildSpyPushNotificationSubscription|null findOneByCreatedAt(string $created_at) Return the first ChildSpyPushNotificationSubscription filtered by the created_at column
 * @method     ChildSpyPushNotificationSubscription|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyPushNotificationSubscription filtered by the updated_at column
 *
 * @method     ChildSpyPushNotificationSubscription requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyPushNotificationSubscription by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPushNotificationSubscription requireOne(?ConnectionInterface $con = null) Return the first ChildSpyPushNotificationSubscription matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPushNotificationSubscription requireOneByIdPushNotificationSubscription(int $id_push_notification_subscription) Return the first ChildSpyPushNotificationSubscription filtered by the id_push_notification_subscription column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPushNotificationSubscription requireOneByUuid(string $uuid) Return the first ChildSpyPushNotificationSubscription filtered by the uuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPushNotificationSubscription requireOneByFkPushNotificationGroup(int $fk_push_notification_group) Return the first ChildSpyPushNotificationSubscription filtered by the fk_push_notification_group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPushNotificationSubscription requireOneByFkPushNotificationProvider(int $fk_push_notification_provider) Return the first ChildSpyPushNotificationSubscription filtered by the fk_push_notification_provider column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPushNotificationSubscription requireOneByFkLocale(int $fk_locale) Return the first ChildSpyPushNotificationSubscription filtered by the fk_locale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPushNotificationSubscription requireOneByPayload(string $payload) Return the first ChildSpyPushNotificationSubscription filtered by the payload column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPushNotificationSubscription requireOneByPayloadChecksum(string $payload_checksum) Return the first ChildSpyPushNotificationSubscription filtered by the payload_checksum column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPushNotificationSubscription requireOneByExpiredAt(string $expired_at) Return the first ChildSpyPushNotificationSubscription filtered by the expired_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPushNotificationSubscription requireOneByCreatedAt(string $created_at) Return the first ChildSpyPushNotificationSubscription filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPushNotificationSubscription requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyPushNotificationSubscription filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPushNotificationSubscription[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyPushNotificationSubscription objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyPushNotificationSubscription> find(?ConnectionInterface $con = null) Return ChildSpyPushNotificationSubscription objects based on current ModelCriteria
 *
 * @method     ChildSpyPushNotificationSubscription[]|Collection findByIdPushNotificationSubscription(int|array<int> $id_push_notification_subscription) Return ChildSpyPushNotificationSubscription objects filtered by the id_push_notification_subscription column
 * @psalm-method Collection&\Traversable<ChildSpyPushNotificationSubscription> findByIdPushNotificationSubscription(int|array<int> $id_push_notification_subscription) Return ChildSpyPushNotificationSubscription objects filtered by the id_push_notification_subscription column
 * @method     ChildSpyPushNotificationSubscription[]|Collection findByUuid(string|array<string> $uuid) Return ChildSpyPushNotificationSubscription objects filtered by the uuid column
 * @psalm-method Collection&\Traversable<ChildSpyPushNotificationSubscription> findByUuid(string|array<string> $uuid) Return ChildSpyPushNotificationSubscription objects filtered by the uuid column
 * @method     ChildSpyPushNotificationSubscription[]|Collection findByFkPushNotificationGroup(int|array<int> $fk_push_notification_group) Return ChildSpyPushNotificationSubscription objects filtered by the fk_push_notification_group column
 * @psalm-method Collection&\Traversable<ChildSpyPushNotificationSubscription> findByFkPushNotificationGroup(int|array<int> $fk_push_notification_group) Return ChildSpyPushNotificationSubscription objects filtered by the fk_push_notification_group column
 * @method     ChildSpyPushNotificationSubscription[]|Collection findByFkPushNotificationProvider(int|array<int> $fk_push_notification_provider) Return ChildSpyPushNotificationSubscription objects filtered by the fk_push_notification_provider column
 * @psalm-method Collection&\Traversable<ChildSpyPushNotificationSubscription> findByFkPushNotificationProvider(int|array<int> $fk_push_notification_provider) Return ChildSpyPushNotificationSubscription objects filtered by the fk_push_notification_provider column
 * @method     ChildSpyPushNotificationSubscription[]|Collection findByFkLocale(int|array<int> $fk_locale) Return ChildSpyPushNotificationSubscription objects filtered by the fk_locale column
 * @psalm-method Collection&\Traversable<ChildSpyPushNotificationSubscription> findByFkLocale(int|array<int> $fk_locale) Return ChildSpyPushNotificationSubscription objects filtered by the fk_locale column
 * @method     ChildSpyPushNotificationSubscription[]|Collection findByPayload(string|array<string> $payload) Return ChildSpyPushNotificationSubscription objects filtered by the payload column
 * @psalm-method Collection&\Traversable<ChildSpyPushNotificationSubscription> findByPayload(string|array<string> $payload) Return ChildSpyPushNotificationSubscription objects filtered by the payload column
 * @method     ChildSpyPushNotificationSubscription[]|Collection findByPayloadChecksum(string|array<string> $payload_checksum) Return ChildSpyPushNotificationSubscription objects filtered by the payload_checksum column
 * @psalm-method Collection&\Traversable<ChildSpyPushNotificationSubscription> findByPayloadChecksum(string|array<string> $payload_checksum) Return ChildSpyPushNotificationSubscription objects filtered by the payload_checksum column
 * @method     ChildSpyPushNotificationSubscription[]|Collection findByExpiredAt(string|array<string> $expired_at) Return ChildSpyPushNotificationSubscription objects filtered by the expired_at column
 * @psalm-method Collection&\Traversable<ChildSpyPushNotificationSubscription> findByExpiredAt(string|array<string> $expired_at) Return ChildSpyPushNotificationSubscription objects filtered by the expired_at column
 * @method     ChildSpyPushNotificationSubscription[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpyPushNotificationSubscription objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpyPushNotificationSubscription> findByCreatedAt(string|array<string> $created_at) Return ChildSpyPushNotificationSubscription objects filtered by the created_at column
 * @method     ChildSpyPushNotificationSubscription[]|Collection findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyPushNotificationSubscription objects filtered by the updated_at column
 * @psalm-method Collection&\Traversable<ChildSpyPushNotificationSubscription> findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyPushNotificationSubscription objects filtered by the updated_at column
 *
 * @method     ChildSpyPushNotificationSubscription[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyPushNotificationSubscription> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyPushNotificationSubscriptionQuery extends ModelCriteria
{

    /**
     * @var bool
     */
    protected $isForUpdateEnabled = false;

    /**
     * @deprecated Use {@link \Propel\Runtime\ActiveQuery\Criteria::lockForUpdate()} instead.
     *
     * @param bool $isForUpdateEnabled
     *
     * @return $this The primary criteria object
     */
    public function forUpdate($isForUpdateEnabled)
    {
        $this->isForUpdateEnabled = $isForUpdateEnabled;

        return $this;
    }

    /**
     * @param array $params
     *
     * @return string
     */
    public function createSelectSql(&$params): string
    {
        $sql = parent::createSelectSql($params);
        if ($this->isForUpdateEnabled) {
            $sql .= ' FOR UPDATE';
        }

        return $sql;
    }

    /**
     * Clear the conditions to allow the reuse of the query object.
     * The ModelCriteria's Model and alias 'all the properties set by construct) will remain.
     *
     * @return $this The primary criteria object
     */
    public function clear()
    {
        parent::clear();

        $this->isSelfSelected = false;
        $this->forUpdate(false);

        return $this;
    }


    /**
     * @param int $affectedRows
     * @param \Propel\Runtime\Connection\ConnectionInterface $con
     *
     * @return int|null
     */
    protected function postUpdate(int $affectedRows, ConnectionInterface $con): ?int
    {
        $class = get_class($this);
        PropelReplicationCacheFacade::getInstance()->setKey($class);

        return null;
    }

    /**
     * @param int $affectedRows
     * @param \Propel\Runtime\Connection\ConnectionInterface $con
     *
     * @return int|null
     */
    protected function postDelete(int $affectedRows, ConnectionInterface $con): ?int
    {
        $class = get_class($this);
        PropelReplicationCacheFacade::getInstance()->setKey($class);

        return null;
    }

    /**
     * Issue a SELECT query based on the current ModelCriteria
     * and format the list of results with the current formatter
     * By default, returns an array of model objects
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return \Propel\Runtime\Collection\ObjectCollection|\Propel\Runtime\ActiveRecord\ActiveRecordInterface[]|mixed the list of results, formatted by the current formatter
     */
    public function find(?ConnectionInterface $con = null)
    {
        $class = get_class($this);
        $mustUseWriteContext = PropelReplicationCacheFacade::getInstance()->hasKey($class);

        if ($mustUseWriteContext) {
            $con = Propel::getWriteConnection($this->getDbName());
        } elseif ($con === null) {
            $con = Propel::getReadConnection($this->getDbName());
        }

        return parent::find($con);
    }

    /**
     * Issue a SELECT ... LIMIT 1 query based on the current ModelCriteria
     * and format the result with the current formatter
     * By default, returns a model object.
     *
     * Does not work with ->with()s containing one-to-many relations.
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return mixed the result, formatted by the current formatter
     */
    public function findOne(?ConnectionInterface $con = null)
    {
        $class = get_class($this);
        $mustUseWriteContext = PropelReplicationCacheFacade::getInstance()->hasKey($class);

        if ($mustUseWriteContext) {
            $con = Propel::getWriteConnection($this->getDbName());
        } elseif ($con === null) {
            $con = Propel::getReadConnection($this->getDbName());
        }

        return parent::findOne($con);
    }

    /**
     * Issue an existence check on the current ModelCriteria
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return bool column existence
     */
    public function exists(?ConnectionInterface $con = null): bool
    {
        $class = get_class($this);
        $mustUseWriteContext = PropelReplicationCacheFacade::getInstance()->hasKey($class);

        if ($mustUseWriteContext) {
            $con = Propel::getWriteConnection($this->getDbName());
        } elseif ($con === null) {
            $con = Propel::getReadConnection($this->getDbName());
        }

        return parent::exists($con);
    }

    /**
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return void
     */
    public function configureSelectColumns(): void
    {
        if (!$this->select) {
            return;
        }

        if ($this->formatter === null) {
            $this->setFormatter(new TypeAwareSimpleArrayFormatter());
        }

        parent::configureSelectColumns();
     }
        protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Orm\Zed\PushNotification\Persistence\Base\SpyPushNotificationSubscriptionQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\PushNotification\\Persistence\\SpyPushNotificationSubscription', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyPushNotificationSubscriptionQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyPushNotificationSubscriptionQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyPushNotificationSubscriptionQuery) {
            return $criteria;
        }
        $query = new ChildSpyPushNotificationSubscriptionQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSpyPushNotificationSubscription|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        $class = get_class($this);
        $mustUseWriteContext = PropelReplicationCacheFacade::getInstance()->hasKey($class);

        if ($mustUseWriteContext) {
            $con = Propel::getWriteConnection($this->getDbName());
        } elseif ($con === null) {
            $con = Propel::getReadConnection($this->getDbName());
        }


        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SpyPushNotificationSubscriptionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyPushNotificationSubscription A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_push_notification_subscription, uuid, fk_push_notification_group, fk_push_notification_provider, fk_locale, payload, payload_checksum, expired_at, created_at, updated_at FROM spy_push_notification_subscription WHERE id_push_notification_subscription = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSpyPushNotificationSubscription $obj */
            $obj = new ChildSpyPushNotificationSubscription();
            $obj->hydrate($row);
            SpyPushNotificationSubscriptionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @return ChildSpyPushNotificationSubscription|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return    Collection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        $class = get_class($this);
        $mustUseWriteContext = PropelReplicationCacheFacade::getInstance()->hasKey($class);

        if ($mustUseWriteContext) {
            $con = Propel::getWriteConnection($this->getDbName());
        } elseif ($con === null) {
            $con = Propel::getReadConnection($this->getDbName());
        }


        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }

        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION, $key, Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idPushNotificationSubscription Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPushNotificationSubscription_Between(array $idPushNotificationSubscription)
    {
        return $this->filterByIdPushNotificationSubscription($idPushNotificationSubscription, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idPushNotificationSubscriptions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPushNotificationSubscription_In(array $idPushNotificationSubscriptions)
    {
        return $this->filterByIdPushNotificationSubscription($idPushNotificationSubscriptions, Criteria::IN);
    }

    /**
     * Filter the query on the id_push_notification_subscription column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPushNotificationSubscription(1234); // WHERE id_push_notification_subscription = 1234
     * $query->filterByIdPushNotificationSubscription(array(12, 34), Criteria::IN); // WHERE id_push_notification_subscription IN (12, 34)
     * $query->filterByIdPushNotificationSubscription(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_push_notification_subscription > 12
     * </code>
     *
     * @param     mixed $idPushNotificationSubscription The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdPushNotificationSubscription($idPushNotificationSubscription = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idPushNotificationSubscription)) {
            $useMinMax = false;
            if (isset($idPushNotificationSubscription['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION, $idPushNotificationSubscription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPushNotificationSubscription['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION, $idPushNotificationSubscription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idPushNotificationSubscription of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION, $idPushNotificationSubscription, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $uuids Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUuid_In(array $uuids)
    {
        return $this->filterByUuid($uuids, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $uuid Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUuid_Like($uuid)
    {
        return $this->filterByUuid($uuid, Criteria::LIKE);
    }

    /**
     * Filter the query on the uuid column
     *
     * Example usage:
     * <code>
     * $query->filterByUuid('fooValue');   // WHERE uuid = 'fooValue'
     * $query->filterByUuid('%fooValue%', Criteria::LIKE); // WHERE uuid LIKE '%fooValue%'
     * $query->filterByUuid([1, 'foo'], Criteria::IN); // WHERE uuid IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $uuid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByUuid($uuid = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $uuid = str_replace('*', '%', $uuid);
        }

        if (is_array($uuid) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$uuid of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_UUID, $uuid, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkPushNotificationGroup Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPushNotificationGroup_Between(array $fkPushNotificationGroup)
    {
        return $this->filterByFkPushNotificationGroup($fkPushNotificationGroup, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkPushNotificationGroups Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPushNotificationGroup_In(array $fkPushNotificationGroups)
    {
        return $this->filterByFkPushNotificationGroup($fkPushNotificationGroups, Criteria::IN);
    }

    /**
     * Filter the query on the fk_push_notification_group column
     *
     * Example usage:
     * <code>
     * $query->filterByFkPushNotificationGroup(1234); // WHERE fk_push_notification_group = 1234
     * $query->filterByFkPushNotificationGroup(array(12, 34), Criteria::IN); // WHERE fk_push_notification_group IN (12, 34)
     * $query->filterByFkPushNotificationGroup(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_push_notification_group > 12
     * </code>
     *
     * @see       filterBySpyPushNotificationGroup()
     *
     * @param     mixed $fkPushNotificationGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkPushNotificationGroup($fkPushNotificationGroup = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkPushNotificationGroup)) {
            $useMinMax = false;
            if (isset($fkPushNotificationGroup['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP, $fkPushNotificationGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkPushNotificationGroup['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP, $fkPushNotificationGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkPushNotificationGroup of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP, $fkPushNotificationGroup, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkPushNotificationProvider Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPushNotificationProvider_Between(array $fkPushNotificationProvider)
    {
        return $this->filterByFkPushNotificationProvider($fkPushNotificationProvider, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkPushNotificationProviders Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPushNotificationProvider_In(array $fkPushNotificationProviders)
    {
        return $this->filterByFkPushNotificationProvider($fkPushNotificationProviders, Criteria::IN);
    }

    /**
     * Filter the query on the fk_push_notification_provider column
     *
     * Example usage:
     * <code>
     * $query->filterByFkPushNotificationProvider(1234); // WHERE fk_push_notification_provider = 1234
     * $query->filterByFkPushNotificationProvider(array(12, 34), Criteria::IN); // WHERE fk_push_notification_provider IN (12, 34)
     * $query->filterByFkPushNotificationProvider(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_push_notification_provider > 12
     * </code>
     *
     * @see       filterBySpyPushNotificationProvider()
     *
     * @param     mixed $fkPushNotificationProvider The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkPushNotificationProvider($fkPushNotificationProvider = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkPushNotificationProvider)) {
            $useMinMax = false;
            if (isset($fkPushNotificationProvider['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER, $fkPushNotificationProvider['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkPushNotificationProvider['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER, $fkPushNotificationProvider['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkPushNotificationProvider of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER, $fkPushNotificationProvider, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkLocale Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkLocale_Between(array $fkLocale)
    {
        return $this->filterByFkLocale($fkLocale, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkLocales Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkLocale_In(array $fkLocales)
    {
        return $this->filterByFkLocale($fkLocales, Criteria::IN);
    }

    /**
     * Filter the query on the fk_locale column
     *
     * Example usage:
     * <code>
     * $query->filterByFkLocale(1234); // WHERE fk_locale = 1234
     * $query->filterByFkLocale(array(12, 34), Criteria::IN); // WHERE fk_locale IN (12, 34)
     * $query->filterByFkLocale(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_locale > 12
     * </code>
     *
     * @see       filterBySpyLocale()
     *
     * @param     mixed $fkLocale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkLocale($fkLocale = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkLocale)) {
            $useMinMax = false;
            if (isset($fkLocale['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE, $fkLocale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkLocale['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE, $fkLocale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkLocale of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE, $fkLocale, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $payloads Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPayload_In(array $payloads)
    {
        return $this->filterByPayload($payloads, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $payload Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPayload_Like($payload)
    {
        return $this->filterByPayload($payload, Criteria::LIKE);
    }

    /**
     * Filter the query on the payload column
     *
     * Example usage:
     * <code>
     * $query->filterByPayload('fooValue');   // WHERE payload = 'fooValue'
     * $query->filterByPayload('%fooValue%', Criteria::LIKE); // WHERE payload LIKE '%fooValue%'
     * $query->filterByPayload([1, 'foo'], Criteria::IN); // WHERE payload IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $payload The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByPayload($payload = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $payload = str_replace('*', '%', $payload);
        }

        if (is_array($payload) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$payload of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD, $payload, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $payloadChecksums Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPayloadChecksum_In(array $payloadChecksums)
    {
        return $this->filterByPayloadChecksum($payloadChecksums, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $payloadChecksum Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPayloadChecksum_Like($payloadChecksum)
    {
        return $this->filterByPayloadChecksum($payloadChecksum, Criteria::LIKE);
    }

    /**
     * Filter the query on the payload_checksum column
     *
     * Example usage:
     * <code>
     * $query->filterByPayloadChecksum('fooValue');   // WHERE payload_checksum = 'fooValue'
     * $query->filterByPayloadChecksum('%fooValue%', Criteria::LIKE); // WHERE payload_checksum LIKE '%fooValue%'
     * $query->filterByPayloadChecksum([1, 'foo'], Criteria::IN); // WHERE payload_checksum IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $payloadChecksum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByPayloadChecksum($payloadChecksum = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $payloadChecksum = str_replace('*', '%', $payloadChecksum);
        }

        if (is_array($payloadChecksum) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$payloadChecksum of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_PAYLOAD_CHECKSUM, $payloadChecksum, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $expiredAt Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByExpiredAt_Between(array $expiredAt)
    {
        return $this->filterByExpiredAt($expiredAt, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $expiredAts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByExpiredAt_In(array $expiredAts)
    {
        return $this->filterByExpiredAt($expiredAts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $expiredAt Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByExpiredAt_Like($expiredAt)
    {
        return $this->filterByExpiredAt($expiredAt, Criteria::LIKE);
    }

    /**
     * Filter the query on the expired_at column
     *
     * Example usage:
     * <code>
     * $query->filterByExpiredAt('2011-03-14'); // WHERE expired_at = '2011-03-14'
     * $query->filterByExpiredAt('now'); // WHERE expired_at = '2011-03-14'
     * $query->filterByExpiredAt(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE expired_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $expiredAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByExpiredAt($expiredAt = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($expiredAt)) {
            $useMinMax = false;
            if (isset($expiredAt['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT, $expiredAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expiredAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT, $expiredAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$expiredAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_EXPIRED_AT, $expiredAt, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $createdAt Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_Between(array $createdAt)
    {
        return $this->filterByCreatedAt($createdAt, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $createdAts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_In(array $createdAts)
    {
        return $this->filterByCreatedAt($createdAts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $createdAt Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_Like($createdAt)
    {
        return $this->filterByCreatedAt($createdAt, Criteria::LIKE);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCreatedAt($createdAt = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT, $createdAt, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $updatedAt Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_Between(array $updatedAt)
    {
        return $this->filterByUpdatedAt($updatedAt, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $updatedAts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_In(array $updatedAts)
    {
        return $this->filterByUpdatedAt($updatedAts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $updatedAt Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_Like($updatedAt)
    {
        return $this->filterByUpdatedAt($updatedAt, Criteria::LIKE);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroup object
     *
     * @param \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroup|ObjectCollection $spyPushNotificationGroup The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyPushNotificationGroup($spyPushNotificationGroup, ?string $comparison = null)
    {
        if ($spyPushNotificationGroup instanceof \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroup) {
            return $this
                ->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP, $spyPushNotificationGroup->getIdPushNotificationGroup(), $comparison);
        } elseif ($spyPushNotificationGroup instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_GROUP, $spyPushNotificationGroup->toKeyValue('PrimaryKey', 'IdPushNotificationGroup'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyPushNotificationGroup() only accepts arguments of type \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroup or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyPushNotificationGroup relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyPushNotificationGroup(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyPushNotificationGroup');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyPushNotificationGroup');
        }

        return $this;
    }

    /**
     * Use the SpyPushNotificationGroup relation SpyPushNotificationGroup object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery A secondary query class using the current class as primary query
     */
    public function useSpyPushNotificationGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyPushNotificationGroup($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyPushNotificationGroup', '\Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery');
    }

    /**
     * Use the SpyPushNotificationGroup relation SpyPushNotificationGroup object
     *
     * @param callable(\Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery):\Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyPushNotificationGroupQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyPushNotificationGroupQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyPushNotificationGroup table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery The inner query object of the EXISTS statement
     */
    public function useSpyPushNotificationGroupExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery */
        $q = $this->useExistsQuery('SpyPushNotificationGroup', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyPushNotificationGroup table for a NOT EXISTS query.
     *
     * @see useSpyPushNotificationGroupExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyPushNotificationGroupNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery */
        $q = $this->useExistsQuery('SpyPushNotificationGroup', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyPushNotificationGroup table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery The inner query object of the IN statement
     */
    public function useInSpyPushNotificationGroupQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery */
        $q = $this->useInQuery('SpyPushNotificationGroup', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyPushNotificationGroup table for a NOT IN query.
     *
     * @see useSpyPushNotificationGroupInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyPushNotificationGroupQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationGroupQuery */
        $q = $this->useInQuery('SpyPushNotificationGroup', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProvider object
     *
     * @param \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProvider|ObjectCollection $spyPushNotificationProvider The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyPushNotificationProvider($spyPushNotificationProvider, ?string $comparison = null)
    {
        if ($spyPushNotificationProvider instanceof \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProvider) {
            return $this
                ->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER, $spyPushNotificationProvider->getIdPushNotificationProvider(), $comparison);
        } elseif ($spyPushNotificationProvider instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_PUSH_NOTIFICATION_PROVIDER, $spyPushNotificationProvider->toKeyValue('PrimaryKey', 'IdPushNotificationProvider'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyPushNotificationProvider() only accepts arguments of type \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProvider or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyPushNotificationProvider relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyPushNotificationProvider(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyPushNotificationProvider');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyPushNotificationProvider');
        }

        return $this;
    }

    /**
     * Use the SpyPushNotificationProvider relation SpyPushNotificationProvider object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery A secondary query class using the current class as primary query
     */
    public function useSpyPushNotificationProviderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyPushNotificationProvider($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyPushNotificationProvider', '\Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery');
    }

    /**
     * Use the SpyPushNotificationProvider relation SpyPushNotificationProvider object
     *
     * @param callable(\Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery):\Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyPushNotificationProviderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyPushNotificationProviderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyPushNotificationProvider table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery The inner query object of the EXISTS statement
     */
    public function useSpyPushNotificationProviderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery */
        $q = $this->useExistsQuery('SpyPushNotificationProvider', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyPushNotificationProvider table for a NOT EXISTS query.
     *
     * @see useSpyPushNotificationProviderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyPushNotificationProviderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery */
        $q = $this->useExistsQuery('SpyPushNotificationProvider', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyPushNotificationProvider table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery The inner query object of the IN statement
     */
    public function useInSpyPushNotificationProviderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery */
        $q = $this->useInQuery('SpyPushNotificationProvider', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyPushNotificationProvider table for a NOT IN query.
     *
     * @see useSpyPushNotificationProviderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyPushNotificationProviderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationProviderQuery */
        $q = $this->useInQuery('SpyPushNotificationProvider', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\Locale\Persistence\SpyLocale object
     *
     * @param \Orm\Zed\Locale\Persistence\SpyLocale|ObjectCollection $spyLocale The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyLocale($spyLocale, ?string $comparison = null)
    {
        if ($spyLocale instanceof \Orm\Zed\Locale\Persistence\SpyLocale) {
            return $this
                ->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE, $spyLocale->getIdLocale(), $comparison);
        } elseif ($spyLocale instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_FK_LOCALE, $spyLocale->toKeyValue('PrimaryKey', 'IdLocale'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyLocale() only accepts arguments of type \Orm\Zed\Locale\Persistence\SpyLocale or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyLocale relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyLocale(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyLocale');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyLocale');
        }

        return $this;
    }

    /**
     * Use the SpyLocale relation SpyLocale object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery A secondary query class using the current class as primary query
     */
    public function useSpyLocaleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyLocale($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyLocale', '\Orm\Zed\Locale\Persistence\SpyLocaleQuery');
    }

    /**
     * Use the SpyLocale relation SpyLocale object
     *
     * @param callable(\Orm\Zed\Locale\Persistence\SpyLocaleQuery):\Orm\Zed\Locale\Persistence\SpyLocaleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyLocaleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyLocaleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyLocale table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the EXISTS statement
     */
    public function useSpyLocaleExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Locale\Persistence\SpyLocaleQuery */
        $q = $this->useExistsQuery('SpyLocale', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyLocale table for a NOT EXISTS query.
     *
     * @see useSpyLocaleExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyLocaleNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Locale\Persistence\SpyLocaleQuery */
        $q = $this->useExistsQuery('SpyLocale', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyLocale table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the IN statement
     */
    public function useInSpyLocaleQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Locale\Persistence\SpyLocaleQuery */
        $q = $this->useInQuery('SpyLocale', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyLocale table for a NOT IN query.
     *
     * @see useSpyLocaleInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyLocaleQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Locale\Persistence\SpyLocaleQuery */
        $q = $this->useInQuery('SpyLocale', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLog object
     *
     * @param \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLog|ObjectCollection $spyPushNotificationSubscriptionDeliveryLog the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyPushNotificationSubscriptionDeliveryLog($spyPushNotificationSubscriptionDeliveryLog, ?string $comparison = null)
    {
        if ($spyPushNotificationSubscriptionDeliveryLog instanceof \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLog) {
            $this
                ->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION, $spyPushNotificationSubscriptionDeliveryLog->getFkPushNotificationSubscription(), $comparison);

            return $this;
        } elseif ($spyPushNotificationSubscriptionDeliveryLog instanceof ObjectCollection) {
            $this
                ->useSpyPushNotificationSubscriptionDeliveryLogQuery()
                ->filterByPrimaryKeys($spyPushNotificationSubscriptionDeliveryLog->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySpyPushNotificationSubscriptionDeliveryLog() only accepts arguments of type \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLog or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyPushNotificationSubscriptionDeliveryLog relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyPushNotificationSubscriptionDeliveryLog(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyPushNotificationSubscriptionDeliveryLog');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyPushNotificationSubscriptionDeliveryLog');
        }

        return $this;
    }

    /**
     * Use the SpyPushNotificationSubscriptionDeliveryLog relation SpyPushNotificationSubscriptionDeliveryLog object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery A secondary query class using the current class as primary query
     */
    public function useSpyPushNotificationSubscriptionDeliveryLogQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyPushNotificationSubscriptionDeliveryLog($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyPushNotificationSubscriptionDeliveryLog', '\Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery');
    }

    /**
     * Use the SpyPushNotificationSubscriptionDeliveryLog relation SpyPushNotificationSubscriptionDeliveryLog object
     *
     * @param callable(\Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery):\Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyPushNotificationSubscriptionDeliveryLogQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyPushNotificationSubscriptionDeliveryLogQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyPushNotificationSubscriptionDeliveryLog table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery The inner query object of the EXISTS statement
     */
    public function useSpyPushNotificationSubscriptionDeliveryLogExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery */
        $q = $this->useExistsQuery('SpyPushNotificationSubscriptionDeliveryLog', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyPushNotificationSubscriptionDeliveryLog table for a NOT EXISTS query.
     *
     * @see useSpyPushNotificationSubscriptionDeliveryLogExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyPushNotificationSubscriptionDeliveryLogNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery */
        $q = $this->useExistsQuery('SpyPushNotificationSubscriptionDeliveryLog', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyPushNotificationSubscriptionDeliveryLog table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery The inner query object of the IN statement
     */
    public function useInSpyPushNotificationSubscriptionDeliveryLogQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery */
        $q = $this->useInQuery('SpyPushNotificationSubscriptionDeliveryLog', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyPushNotificationSubscriptionDeliveryLog table for a NOT IN query.
     *
     * @see useSpyPushNotificationSubscriptionDeliveryLogInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyPushNotificationSubscriptionDeliveryLogQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscriptionDeliveryLogQuery */
        $q = $this->useInQuery('SpyPushNotificationSubscriptionDeliveryLog', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyPushNotificationSubscription $spyPushNotificationSubscription Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyPushNotificationSubscription = null)
    {
        if ($spyPushNotificationSubscription) {
            $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_ID_PUSH_NOTIFICATION_SUBSCRIPTION, $spyPushNotificationSubscription->getIdPushNotificationSubscription(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_push_notification_subscription table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPushNotificationSubscriptionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyPushNotificationSubscriptionTableMap::clearInstancePool();
            SpyPushNotificationSubscriptionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPushNotificationSubscriptionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyPushNotificationSubscriptionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyPushNotificationSubscriptionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyPushNotificationSubscriptionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param int $nbDays Maximum age of the latest update in days
     *
     * @return $this The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by update date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by update date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyPushNotificationSubscriptionTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by create date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT);

        return $this;
    }

    /**
     * Filter by the latest created
     *
     * @param int $nbDays Maximum age of in days
     *
     * @return $this The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        $this->addUsingAlias(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyPushNotificationSubscriptionTableMap::COL_CREATED_AT);

        return $this;
    }

}
