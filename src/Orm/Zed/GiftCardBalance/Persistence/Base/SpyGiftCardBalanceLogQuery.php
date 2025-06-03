<?php

namespace Orm\Zed\GiftCardBalance\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLog as ChildSpyGiftCardBalanceLog;
use Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery as ChildSpyGiftCardBalanceLogQuery;
use Orm\Zed\GiftCardBalance\Persistence\Map\SpyGiftCardBalanceLogTableMap;
use Orm\Zed\GiftCard\Persistence\SpyGiftCard;
use Orm\Zed\Sales\Persistence\SpySalesOrder;
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
 * Base class that represents a query for the `spy_gift_card_balance_log` table.
 *
 * @method     ChildSpyGiftCardBalanceLogQuery orderByIdGiftCardBalanceLog($order = Criteria::ASC) Order by the id_gift_card_balance_log column
 * @method     ChildSpyGiftCardBalanceLogQuery orderByFkGiftCard($order = Criteria::ASC) Order by the fk_gift_card column
 * @method     ChildSpyGiftCardBalanceLogQuery orderByFkSalesOrder($order = Criteria::ASC) Order by the fk_sales_order column
 * @method     ChildSpyGiftCardBalanceLogQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     ChildSpyGiftCardBalanceLogQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     ChildSpyGiftCardBalanceLogQuery groupByIdGiftCardBalanceLog() Group by the id_gift_card_balance_log column
 * @method     ChildSpyGiftCardBalanceLogQuery groupByFkGiftCard() Group by the fk_gift_card column
 * @method     ChildSpyGiftCardBalanceLogQuery groupByFkSalesOrder() Group by the fk_sales_order column
 * @method     ChildSpyGiftCardBalanceLogQuery groupByValue() Group by the value column
 * @method     ChildSpyGiftCardBalanceLogQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     ChildSpyGiftCardBalanceLogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyGiftCardBalanceLogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyGiftCardBalanceLogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyGiftCardBalanceLogQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyGiftCardBalanceLogQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyGiftCardBalanceLogQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyGiftCardBalanceLogQuery leftJoinSpyGiftCard($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyGiftCard relation
 * @method     ChildSpyGiftCardBalanceLogQuery rightJoinSpyGiftCard($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyGiftCard relation
 * @method     ChildSpyGiftCardBalanceLogQuery innerJoinSpyGiftCard($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyGiftCard relation
 *
 * @method     ChildSpyGiftCardBalanceLogQuery joinWithSpyGiftCard($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyGiftCard relation
 *
 * @method     ChildSpyGiftCardBalanceLogQuery leftJoinWithSpyGiftCard() Adds a LEFT JOIN clause and with to the query using the SpyGiftCard relation
 * @method     ChildSpyGiftCardBalanceLogQuery rightJoinWithSpyGiftCard() Adds a RIGHT JOIN clause and with to the query using the SpyGiftCard relation
 * @method     ChildSpyGiftCardBalanceLogQuery innerJoinWithSpyGiftCard() Adds a INNER JOIN clause and with to the query using the SpyGiftCard relation
 *
 * @method     ChildSpyGiftCardBalanceLogQuery leftJoinSpySalesOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpySalesOrder relation
 * @method     ChildSpyGiftCardBalanceLogQuery rightJoinSpySalesOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpySalesOrder relation
 * @method     ChildSpyGiftCardBalanceLogQuery innerJoinSpySalesOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SpySalesOrder relation
 *
 * @method     ChildSpyGiftCardBalanceLogQuery joinWithSpySalesOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpySalesOrder relation
 *
 * @method     ChildSpyGiftCardBalanceLogQuery leftJoinWithSpySalesOrder() Adds a LEFT JOIN clause and with to the query using the SpySalesOrder relation
 * @method     ChildSpyGiftCardBalanceLogQuery rightJoinWithSpySalesOrder() Adds a RIGHT JOIN clause and with to the query using the SpySalesOrder relation
 * @method     ChildSpyGiftCardBalanceLogQuery innerJoinWithSpySalesOrder() Adds a INNER JOIN clause and with to the query using the SpySalesOrder relation
 *
 * @method     \Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery|\Orm\Zed\Sales\Persistence\SpySalesOrderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyGiftCardBalanceLog|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyGiftCardBalanceLog matching the query
 * @method     ChildSpyGiftCardBalanceLog findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyGiftCardBalanceLog matching the query, or a new ChildSpyGiftCardBalanceLog object populated from the query conditions when no match is found
 *
 * @method     ChildSpyGiftCardBalanceLog|null findOneByIdGiftCardBalanceLog(int $id_gift_card_balance_log) Return the first ChildSpyGiftCardBalanceLog filtered by the id_gift_card_balance_log column
 * @method     ChildSpyGiftCardBalanceLog|null findOneByFkGiftCard(int $fk_gift_card) Return the first ChildSpyGiftCardBalanceLog filtered by the fk_gift_card column
 * @method     ChildSpyGiftCardBalanceLog|null findOneByFkSalesOrder(int $fk_sales_order) Return the first ChildSpyGiftCardBalanceLog filtered by the fk_sales_order column
 * @method     ChildSpyGiftCardBalanceLog|null findOneByValue(int $value) Return the first ChildSpyGiftCardBalanceLog filtered by the value column
 * @method     ChildSpyGiftCardBalanceLog|null findOneByCreatedAt(string $created_at) Return the first ChildSpyGiftCardBalanceLog filtered by the created_at column
 *
 * @method     ChildSpyGiftCardBalanceLog requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyGiftCardBalanceLog by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardBalanceLog requireOne(?ConnectionInterface $con = null) Return the first ChildSpyGiftCardBalanceLog matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyGiftCardBalanceLog requireOneByIdGiftCardBalanceLog(int $id_gift_card_balance_log) Return the first ChildSpyGiftCardBalanceLog filtered by the id_gift_card_balance_log column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardBalanceLog requireOneByFkGiftCard(int $fk_gift_card) Return the first ChildSpyGiftCardBalanceLog filtered by the fk_gift_card column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardBalanceLog requireOneByFkSalesOrder(int $fk_sales_order) Return the first ChildSpyGiftCardBalanceLog filtered by the fk_sales_order column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardBalanceLog requireOneByValue(int $value) Return the first ChildSpyGiftCardBalanceLog filtered by the value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardBalanceLog requireOneByCreatedAt(string $created_at) Return the first ChildSpyGiftCardBalanceLog filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyGiftCardBalanceLog[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyGiftCardBalanceLog objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardBalanceLog> find(?ConnectionInterface $con = null) Return ChildSpyGiftCardBalanceLog objects based on current ModelCriteria
 *
 * @method     ChildSpyGiftCardBalanceLog[]|Collection findByIdGiftCardBalanceLog(int|array<int> $id_gift_card_balance_log) Return ChildSpyGiftCardBalanceLog objects filtered by the id_gift_card_balance_log column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardBalanceLog> findByIdGiftCardBalanceLog(int|array<int> $id_gift_card_balance_log) Return ChildSpyGiftCardBalanceLog objects filtered by the id_gift_card_balance_log column
 * @method     ChildSpyGiftCardBalanceLog[]|Collection findByFkGiftCard(int|array<int> $fk_gift_card) Return ChildSpyGiftCardBalanceLog objects filtered by the fk_gift_card column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardBalanceLog> findByFkGiftCard(int|array<int> $fk_gift_card) Return ChildSpyGiftCardBalanceLog objects filtered by the fk_gift_card column
 * @method     ChildSpyGiftCardBalanceLog[]|Collection findByFkSalesOrder(int|array<int> $fk_sales_order) Return ChildSpyGiftCardBalanceLog objects filtered by the fk_sales_order column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardBalanceLog> findByFkSalesOrder(int|array<int> $fk_sales_order) Return ChildSpyGiftCardBalanceLog objects filtered by the fk_sales_order column
 * @method     ChildSpyGiftCardBalanceLog[]|Collection findByValue(int|array<int> $value) Return ChildSpyGiftCardBalanceLog objects filtered by the value column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardBalanceLog> findByValue(int|array<int> $value) Return ChildSpyGiftCardBalanceLog objects filtered by the value column
 * @method     ChildSpyGiftCardBalanceLog[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpyGiftCardBalanceLog objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardBalanceLog> findByCreatedAt(string|array<string> $created_at) Return ChildSpyGiftCardBalanceLog objects filtered by the created_at column
 *
 * @method     ChildSpyGiftCardBalanceLog[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyGiftCardBalanceLog> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyGiftCardBalanceLogQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\GiftCardBalance\Persistence\Base\SpyGiftCardBalanceLogQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\GiftCardBalance\\Persistence\\SpyGiftCardBalanceLog', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyGiftCardBalanceLogQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyGiftCardBalanceLogQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyGiftCardBalanceLogQuery) {
            return $criteria;
        }
        $query = new ChildSpyGiftCardBalanceLogQuery();
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
     * @return ChildSpyGiftCardBalanceLog|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyGiftCardBalanceLogTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyGiftCardBalanceLog A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_gift_card_balance_log, fk_gift_card, fk_sales_order, value, created_at FROM spy_gift_card_balance_log WHERE id_gift_card_balance_log = :p0';
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
            /** @var ChildSpyGiftCardBalanceLog $obj */
            $obj = new ChildSpyGiftCardBalanceLog();
            $obj->hydrate($row);
            SpyGiftCardBalanceLogTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyGiftCardBalanceLog|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idGiftCardBalanceLog Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdGiftCardBalanceLog_Between(array $idGiftCardBalanceLog)
    {
        return $this->filterByIdGiftCardBalanceLog($idGiftCardBalanceLog, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idGiftCardBalanceLogs Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdGiftCardBalanceLog_In(array $idGiftCardBalanceLogs)
    {
        return $this->filterByIdGiftCardBalanceLog($idGiftCardBalanceLogs, Criteria::IN);
    }

    /**
     * Filter the query on the id_gift_card_balance_log column
     *
     * Example usage:
     * <code>
     * $query->filterByIdGiftCardBalanceLog(1234); // WHERE id_gift_card_balance_log = 1234
     * $query->filterByIdGiftCardBalanceLog(array(12, 34), Criteria::IN); // WHERE id_gift_card_balance_log IN (12, 34)
     * $query->filterByIdGiftCardBalanceLog(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_gift_card_balance_log > 12
     * </code>
     *
     * @param     mixed $idGiftCardBalanceLog The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdGiftCardBalanceLog($idGiftCardBalanceLog = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idGiftCardBalanceLog)) {
            $useMinMax = false;
            if (isset($idGiftCardBalanceLog['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG, $idGiftCardBalanceLog['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGiftCardBalanceLog['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG, $idGiftCardBalanceLog['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idGiftCardBalanceLog of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG, $idGiftCardBalanceLog, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkGiftCard Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkGiftCard_Between(array $fkGiftCard)
    {
        return $this->filterByFkGiftCard($fkGiftCard, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkGiftCards Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkGiftCard_In(array $fkGiftCards)
    {
        return $this->filterByFkGiftCard($fkGiftCards, Criteria::IN);
    }

    /**
     * Filter the query on the fk_gift_card column
     *
     * Example usage:
     * <code>
     * $query->filterByFkGiftCard(1234); // WHERE fk_gift_card = 1234
     * $query->filterByFkGiftCard(array(12, 34), Criteria::IN); // WHERE fk_gift_card IN (12, 34)
     * $query->filterByFkGiftCard(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_gift_card > 12
     * </code>
     *
     * @see       filterBySpyGiftCard()
     *
     * @param     mixed $fkGiftCard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkGiftCard($fkGiftCard = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkGiftCard)) {
            $useMinMax = false;
            if (isset($fkGiftCard['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_FK_GIFT_CARD, $fkGiftCard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkGiftCard['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_FK_GIFT_CARD, $fkGiftCard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkGiftCard of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_FK_GIFT_CARD, $fkGiftCard, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkSalesOrder Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrder_Between(array $fkSalesOrder)
    {
        return $this->filterByFkSalesOrder($fkSalesOrder, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkSalesOrders Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrder_In(array $fkSalesOrders)
    {
        return $this->filterByFkSalesOrder($fkSalesOrders, Criteria::IN);
    }

    /**
     * Filter the query on the fk_sales_order column
     *
     * Example usage:
     * <code>
     * $query->filterByFkSalesOrder(1234); // WHERE fk_sales_order = 1234
     * $query->filterByFkSalesOrder(array(12, 34), Criteria::IN); // WHERE fk_sales_order IN (12, 34)
     * $query->filterByFkSalesOrder(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_sales_order > 12
     * </code>
     *
     * @see       filterBySpySalesOrder()
     *
     * @param     mixed $fkSalesOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkSalesOrder($fkSalesOrder = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkSalesOrder)) {
            $useMinMax = false;
            if (isset($fkSalesOrder['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_FK_SALES_ORDER, $fkSalesOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesOrder['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_FK_SALES_ORDER, $fkSalesOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesOrder of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_FK_SALES_ORDER, $fkSalesOrder, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $value Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByValue_Between(array $value)
    {
        return $this->filterByValue($value, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $values Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByValue_In(array $values)
    {
        return $this->filterByValue($values, Criteria::IN);
    }

    /**
     * Filter the query on the value column
     *
     * Example usage:
     * <code>
     * $query->filterByValue(1234); // WHERE value = 1234
     * $query->filterByValue(array(12, 34), Criteria::IN); // WHERE value IN (12, 34)
     * $query->filterByValue(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE value > 12
     * </code>
     *
     * @param     mixed $value The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByValue($value = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($value)) {
            $useMinMax = false;
            if (isset($value['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_VALUE, $value['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($value['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_VALUE, $value['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$value of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_VALUE, $value, $comparison);

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
                $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_CREATED_AT, $createdAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\GiftCard\Persistence\SpyGiftCard object
     *
     * @param \Orm\Zed\GiftCard\Persistence\SpyGiftCard|ObjectCollection $spyGiftCard The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyGiftCard($spyGiftCard, ?string $comparison = null)
    {
        if ($spyGiftCard instanceof \Orm\Zed\GiftCard\Persistence\SpyGiftCard) {
            return $this
                ->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_FK_GIFT_CARD, $spyGiftCard->getIdGiftCard(), $comparison);
        } elseif ($spyGiftCard instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_FK_GIFT_CARD, $spyGiftCard->toKeyValue('PrimaryKey', 'IdGiftCard'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyGiftCard() only accepts arguments of type \Orm\Zed\GiftCard\Persistence\SpyGiftCard or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyGiftCard relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyGiftCard(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyGiftCard');

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
            $this->addJoinObject($join, 'SpyGiftCard');
        }

        return $this;
    }

    /**
     * Use the SpyGiftCard relation SpyGiftCard object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery A secondary query class using the current class as primary query
     */
    public function useSpyGiftCardQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyGiftCard($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyGiftCard', '\Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery');
    }

    /**
     * Use the SpyGiftCard relation SpyGiftCard object
     *
     * @param callable(\Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery):\Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyGiftCardQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyGiftCardQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyGiftCard table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery The inner query object of the EXISTS statement
     */
    public function useSpyGiftCardExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery */
        $q = $this->useExistsQuery('SpyGiftCard', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyGiftCard table for a NOT EXISTS query.
     *
     * @see useSpyGiftCardExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyGiftCardNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery */
        $q = $this->useExistsQuery('SpyGiftCard', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyGiftCard table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery The inner query object of the IN statement
     */
    public function useInSpyGiftCardQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery */
        $q = $this->useInQuery('SpyGiftCard', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyGiftCard table for a NOT IN query.
     *
     * @see useSpyGiftCardInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyGiftCardQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery */
        $q = $this->useInQuery('SpyGiftCard', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesOrder object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder|ObjectCollection $spySalesOrder The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpySalesOrder($spySalesOrder, ?string $comparison = null)
    {
        if ($spySalesOrder instanceof \Orm\Zed\Sales\Persistence\SpySalesOrder) {
            return $this
                ->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_FK_SALES_ORDER, $spySalesOrder->getIdSalesOrder(), $comparison);
        } elseif ($spySalesOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_FK_SALES_ORDER, $spySalesOrder->toKeyValue('PrimaryKey', 'IdSalesOrder'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpySalesOrder() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpySalesOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpySalesOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpySalesOrder');

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
            $this->addJoinObject($join, 'SpySalesOrder');
        }

        return $this;
    }

    /**
     * Use the SpySalesOrder relation SpySalesOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery A secondary query class using the current class as primary query
     */
    public function useSpySalesOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpySalesOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpySalesOrder', '\Orm\Zed\Sales\Persistence\SpySalesOrderQuery');
    }

    /**
     * Use the SpySalesOrder relation SpySalesOrder object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesOrderQuery):\Orm\Zed\Sales\Persistence\SpySalesOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpySalesOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpySalesOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpySalesOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the EXISTS statement
     */
    public function useSpySalesOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderQuery */
        $q = $this->useExistsQuery('SpySalesOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpySalesOrder table for a NOT EXISTS query.
     *
     * @see useSpySalesOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpySalesOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderQuery */
        $q = $this->useExistsQuery('SpySalesOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpySalesOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the IN statement
     */
    public function useInSpySalesOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderQuery */
        $q = $this->useInQuery('SpySalesOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpySalesOrder table for a NOT IN query.
     *
     * @see useSpySalesOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpySalesOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderQuery */
        $q = $this->useInQuery('SpySalesOrder', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyGiftCardBalanceLog $spyGiftCardBalanceLog Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyGiftCardBalanceLog = null)
    {
        if ($spyGiftCardBalanceLog) {
            $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_ID_GIFT_CARD_BALANCE_LOG, $spyGiftCardBalanceLog->getIdGiftCardBalanceLog(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_gift_card_balance_log table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardBalanceLogTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyGiftCardBalanceLogTableMap::clearInstancePool();
            SpyGiftCardBalanceLogTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardBalanceLogTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyGiftCardBalanceLogTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyGiftCardBalanceLogTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyGiftCardBalanceLogTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Order by create date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyGiftCardBalanceLogTableMap::COL_CREATED_AT);

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
        $this->addUsingAlias(SpyGiftCardBalanceLogTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyGiftCardBalanceLogTableMap::COL_CREATED_AT);

        return $this;
    }

}
