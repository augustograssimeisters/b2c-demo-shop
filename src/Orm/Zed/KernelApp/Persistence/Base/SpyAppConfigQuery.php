<?php

namespace Orm\Zed\KernelApp\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\KernelApp\Persistence\SpyAppConfig as ChildSpyAppConfig;
use Orm\Zed\KernelApp\Persistence\SpyAppConfigQuery as ChildSpyAppConfigQuery;
use Orm\Zed\KernelApp\Persistence\Map\SpyAppConfigTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Model\Formatter\TypeAwareSimpleArrayFormatter;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\PropelReplicationCache\Business\PropelReplicationCacheFacade;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the `spy_app_config` table.
 *
 * @method     ChildSpyAppConfigQuery orderByIdAppConfig($order = Criteria::ASC) Order by the id_app_config column
 * @method     ChildSpyAppConfigQuery orderByAppIdentifier($order = Criteria::ASC) Order by the app_identifier column
 * @method     ChildSpyAppConfigQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildSpyAppConfigQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     ChildSpyAppConfigQuery orderByConfig($order = Criteria::ASC) Order by the config column
 *
 * @method     ChildSpyAppConfigQuery groupByIdAppConfig() Group by the id_app_config column
 * @method     ChildSpyAppConfigQuery groupByAppIdentifier() Group by the app_identifier column
 * @method     ChildSpyAppConfigQuery groupByStatus() Group by the status column
 * @method     ChildSpyAppConfigQuery groupByIsActive() Group by the is_active column
 * @method     ChildSpyAppConfigQuery groupByConfig() Group by the config column
 *
 * @method     ChildSpyAppConfigQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyAppConfigQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyAppConfigQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyAppConfigQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyAppConfigQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyAppConfigQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyAppConfig|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyAppConfig matching the query
 * @method     ChildSpyAppConfig findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyAppConfig matching the query, or a new ChildSpyAppConfig object populated from the query conditions when no match is found
 *
 * @method     ChildSpyAppConfig|null findOneByIdAppConfig(int $id_app_config) Return the first ChildSpyAppConfig filtered by the id_app_config column
 * @method     ChildSpyAppConfig|null findOneByAppIdentifier(string $app_identifier) Return the first ChildSpyAppConfig filtered by the app_identifier column
 * @method     ChildSpyAppConfig|null findOneByStatus(string $status) Return the first ChildSpyAppConfig filtered by the status column
 * @method     ChildSpyAppConfig|null findOneByIsActive(boolean $is_active) Return the first ChildSpyAppConfig filtered by the is_active column
 * @method     ChildSpyAppConfig|null findOneByConfig(string $config) Return the first ChildSpyAppConfig filtered by the config column
 *
 * @method     ChildSpyAppConfig requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyAppConfig by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAppConfig requireOne(?ConnectionInterface $con = null) Return the first ChildSpyAppConfig matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyAppConfig requireOneByIdAppConfig(int $id_app_config) Return the first ChildSpyAppConfig filtered by the id_app_config column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAppConfig requireOneByAppIdentifier(string $app_identifier) Return the first ChildSpyAppConfig filtered by the app_identifier column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAppConfig requireOneByStatus(string $status) Return the first ChildSpyAppConfig filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAppConfig requireOneByIsActive(boolean $is_active) Return the first ChildSpyAppConfig filtered by the is_active column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAppConfig requireOneByConfig(string $config) Return the first ChildSpyAppConfig filtered by the config column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyAppConfig[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyAppConfig objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyAppConfig> find(?ConnectionInterface $con = null) Return ChildSpyAppConfig objects based on current ModelCriteria
 *
 * @method     ChildSpyAppConfig[]|Collection findByIdAppConfig(int|array<int> $id_app_config) Return ChildSpyAppConfig objects filtered by the id_app_config column
 * @psalm-method Collection&\Traversable<ChildSpyAppConfig> findByIdAppConfig(int|array<int> $id_app_config) Return ChildSpyAppConfig objects filtered by the id_app_config column
 * @method     ChildSpyAppConfig[]|Collection findByAppIdentifier(string|array<string> $app_identifier) Return ChildSpyAppConfig objects filtered by the app_identifier column
 * @psalm-method Collection&\Traversable<ChildSpyAppConfig> findByAppIdentifier(string|array<string> $app_identifier) Return ChildSpyAppConfig objects filtered by the app_identifier column
 * @method     ChildSpyAppConfig[]|Collection findByStatus(string|array<string> $status) Return ChildSpyAppConfig objects filtered by the status column
 * @psalm-method Collection&\Traversable<ChildSpyAppConfig> findByStatus(string|array<string> $status) Return ChildSpyAppConfig objects filtered by the status column
 * @method     ChildSpyAppConfig[]|Collection findByIsActive(boolean|array<boolean> $is_active) Return ChildSpyAppConfig objects filtered by the is_active column
 * @psalm-method Collection&\Traversable<ChildSpyAppConfig> findByIsActive(boolean|array<boolean> $is_active) Return ChildSpyAppConfig objects filtered by the is_active column
 * @method     ChildSpyAppConfig[]|Collection findByConfig(string|array<string> $config) Return ChildSpyAppConfig objects filtered by the config column
 * @psalm-method Collection&\Traversable<ChildSpyAppConfig> findByConfig(string|array<string> $config) Return ChildSpyAppConfig objects filtered by the config column
 *
 * @method     ChildSpyAppConfig[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyAppConfig> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyAppConfigQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\KernelApp\Persistence\Base\SpyAppConfigQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\KernelApp\\Persistence\\SpyAppConfig', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyAppConfigQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyAppConfigQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyAppConfigQuery) {
            return $criteria;
        }
        $query = new ChildSpyAppConfigQuery();
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
     * @return ChildSpyAppConfig|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyAppConfigTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyAppConfig A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_app_config, app_identifier, status, is_active, config FROM spy_app_config WHERE id_app_config = :p0';
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
            /** @var ChildSpyAppConfig $obj */
            $obj = new ChildSpyAppConfig();
            $obj->hydrate($row);
            SpyAppConfigTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyAppConfig|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyAppConfigTableMap::COL_ID_APP_CONFIG, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyAppConfigTableMap::COL_ID_APP_CONFIG, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idAppConfig Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdAppConfig_Between(array $idAppConfig)
    {
        return $this->filterByIdAppConfig($idAppConfig, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idAppConfigs Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdAppConfig_In(array $idAppConfigs)
    {
        return $this->filterByIdAppConfig($idAppConfigs, Criteria::IN);
    }

    /**
     * Filter the query on the id_app_config column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAppConfig(1234); // WHERE id_app_config = 1234
     * $query->filterByIdAppConfig(array(12, 34), Criteria::IN); // WHERE id_app_config IN (12, 34)
     * $query->filterByIdAppConfig(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_app_config > 12
     * </code>
     *
     * @param     mixed $idAppConfig The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdAppConfig($idAppConfig = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idAppConfig)) {
            $useMinMax = false;
            if (isset($idAppConfig['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAppConfigTableMap::COL_ID_APP_CONFIG, $idAppConfig['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAppConfig['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAppConfigTableMap::COL_ID_APP_CONFIG, $idAppConfig['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idAppConfig of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyAppConfigTableMap::COL_ID_APP_CONFIG, $idAppConfig, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $appIdentifiers Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAppIdentifier_In(array $appIdentifiers)
    {
        return $this->filterByAppIdentifier($appIdentifiers, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $appIdentifier Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAppIdentifier_Like($appIdentifier)
    {
        return $this->filterByAppIdentifier($appIdentifier, Criteria::LIKE);
    }

    /**
     * Filter the query on the app_identifier column
     *
     * Example usage:
     * <code>
     * $query->filterByAppIdentifier('fooValue');   // WHERE app_identifier = 'fooValue'
     * $query->filterByAppIdentifier('%fooValue%', Criteria::LIKE); // WHERE app_identifier LIKE '%fooValue%'
     * $query->filterByAppIdentifier([1, 'foo'], Criteria::IN); // WHERE app_identifier IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $appIdentifier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByAppIdentifier($appIdentifier = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $appIdentifier = str_replace('*', '%', $appIdentifier);
        }

        if (is_array($appIdentifier) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$appIdentifier of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyAppConfigTableMap::COL_APP_IDENTIFIER, $appIdentifier, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $statuss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStatus_In(array $statuss)
    {
        return $this->filterByStatus($statuss, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $status Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStatus_Like($status)
    {
        return $this->filterByStatus($status, Criteria::LIKE);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%', Criteria::LIKE); // WHERE status LIKE '%fooValue%'
     * $query->filterByStatus([1, 'foo'], Criteria::IN); // WHERE status IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByStatus($status = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $status = str_replace('*', '%', $status);
        }

        if (is_array($status) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$status of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyAppConfigTableMap::COL_STATUS, $status, $comparison);

        return $query;
    }

    /**
     * Filter the query on the is_active column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActive(true); // WHERE is_active = true
     * $query->filterByIsActive('yes'); // WHERE is_active = true
     * </code>
     *
     * @param     bool|string $isActive The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIsActive($isActive = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($isActive)) {
            $isActive = in_array(strtolower($isActive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyAppConfigTableMap::COL_IS_ACTIVE, $isActive, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $configs Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByConfig_In(array $configs)
    {
        return $this->filterByConfig($configs, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $config Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByConfig_Like($config)
    {
        return $this->filterByConfig($config, Criteria::LIKE);
    }

    /**
     * Filter the query on the config column
     *
     * Example usage:
     * <code>
     * $query->filterByConfig('fooValue');   // WHERE config = 'fooValue'
     * $query->filterByConfig('%fooValue%', Criteria::LIKE); // WHERE config LIKE '%fooValue%'
     * $query->filterByConfig([1, 'foo'], Criteria::IN); // WHERE config IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $config The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByConfig($config = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $config = str_replace('*', '%', $config);
        }

        if (is_array($config) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$config of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyAppConfigTableMap::COL_CONFIG, $config, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyAppConfig $spyAppConfig Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyAppConfig = null)
    {
        if ($spyAppConfig) {
            $this->addUsingAlias(SpyAppConfigTableMap::COL_ID_APP_CONFIG, $spyAppConfig->getIdAppConfig(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_app_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAppConfigTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyAppConfigTableMap::clearInstancePool();
            SpyAppConfigTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAppConfigTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyAppConfigTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyAppConfigTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyAppConfigTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
