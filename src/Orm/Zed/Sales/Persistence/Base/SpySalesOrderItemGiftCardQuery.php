<?php

namespace Orm\Zed\Sales\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Sales\Persistence\SpySalesOrderItemGiftCard as ChildSpySalesOrderItemGiftCard;
use Orm\Zed\Sales\Persistence\SpySalesOrderItemGiftCardQuery as ChildSpySalesOrderItemGiftCardQuery;
use Orm\Zed\Sales\Persistence\Map\SpySalesOrderItemGiftCardTableMap;
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
 * Base class that represents a query for the `spy_sales_order_item_gift_card` table.
 *
 * @method     ChildSpySalesOrderItemGiftCardQuery orderByIdSalesOrderItemGiftCard($order = Criteria::ASC) Order by the id_sales_order_item_gift_card column
 * @method     ChildSpySalesOrderItemGiftCardQuery orderByFkSalesOrderItem($order = Criteria::ASC) Order by the fk_sales_order_item column
 * @method     ChildSpySalesOrderItemGiftCardQuery orderByAttributes($order = Criteria::ASC) Order by the attributes column
 * @method     ChildSpySalesOrderItemGiftCardQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildSpySalesOrderItemGiftCardQuery orderByPattern($order = Criteria::ASC) Order by the pattern column
 * @method     ChildSpySalesOrderItemGiftCardQuery orderByValue($order = Criteria::ASC) Order by the value column
 *
 * @method     ChildSpySalesOrderItemGiftCardQuery groupByIdSalesOrderItemGiftCard() Group by the id_sales_order_item_gift_card column
 * @method     ChildSpySalesOrderItemGiftCardQuery groupByFkSalesOrderItem() Group by the fk_sales_order_item column
 * @method     ChildSpySalesOrderItemGiftCardQuery groupByAttributes() Group by the attributes column
 * @method     ChildSpySalesOrderItemGiftCardQuery groupByCode() Group by the code column
 * @method     ChildSpySalesOrderItemGiftCardQuery groupByPattern() Group by the pattern column
 * @method     ChildSpySalesOrderItemGiftCardQuery groupByValue() Group by the value column
 *
 * @method     ChildSpySalesOrderItemGiftCardQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpySalesOrderItemGiftCardQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpySalesOrderItemGiftCardQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpySalesOrderItemGiftCardQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpySalesOrderItemGiftCardQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpySalesOrderItemGiftCardQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpySalesOrderItemGiftCardQuery leftJoinSpySalesOrderItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesOrderItemGiftCardQuery rightJoinSpySalesOrderItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesOrderItemGiftCardQuery innerJoinSpySalesOrderItem($relationAlias = null) Adds a INNER JOIN clause to the query using the SpySalesOrderItem relation
 *
 * @method     ChildSpySalesOrderItemGiftCardQuery joinWithSpySalesOrderItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpySalesOrderItem relation
 *
 * @method     ChildSpySalesOrderItemGiftCardQuery leftJoinWithSpySalesOrderItem() Adds a LEFT JOIN clause and with to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesOrderItemGiftCardQuery rightJoinWithSpySalesOrderItem() Adds a RIGHT JOIN clause and with to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesOrderItemGiftCardQuery innerJoinWithSpySalesOrderItem() Adds a INNER JOIN clause and with to the query using the SpySalesOrderItem relation
 *
 * @method     \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpySalesOrderItemGiftCard|null findOne(?ConnectionInterface $con = null) Return the first ChildSpySalesOrderItemGiftCard matching the query
 * @method     ChildSpySalesOrderItemGiftCard findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpySalesOrderItemGiftCard matching the query, or a new ChildSpySalesOrderItemGiftCard object populated from the query conditions when no match is found
 *
 * @method     ChildSpySalesOrderItemGiftCard|null findOneByIdSalesOrderItemGiftCard(int $id_sales_order_item_gift_card) Return the first ChildSpySalesOrderItemGiftCard filtered by the id_sales_order_item_gift_card column
 * @method     ChildSpySalesOrderItemGiftCard|null findOneByFkSalesOrderItem(int $fk_sales_order_item) Return the first ChildSpySalesOrderItemGiftCard filtered by the fk_sales_order_item column
 * @method     ChildSpySalesOrderItemGiftCard|null findOneByAttributes(string $attributes) Return the first ChildSpySalesOrderItemGiftCard filtered by the attributes column
 * @method     ChildSpySalesOrderItemGiftCard|null findOneByCode(string $code) Return the first ChildSpySalesOrderItemGiftCard filtered by the code column
 * @method     ChildSpySalesOrderItemGiftCard|null findOneByPattern(string $pattern) Return the first ChildSpySalesOrderItemGiftCard filtered by the pattern column
 * @method     ChildSpySalesOrderItemGiftCard|null findOneByValue(int $value) Return the first ChildSpySalesOrderItemGiftCard filtered by the value column
 *
 * @method     ChildSpySalesOrderItemGiftCard requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpySalesOrderItemGiftCard by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderItemGiftCard requireOne(?ConnectionInterface $con = null) Return the first ChildSpySalesOrderItemGiftCard matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesOrderItemGiftCard requireOneByIdSalesOrderItemGiftCard(int $id_sales_order_item_gift_card) Return the first ChildSpySalesOrderItemGiftCard filtered by the id_sales_order_item_gift_card column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderItemGiftCard requireOneByFkSalesOrderItem(int $fk_sales_order_item) Return the first ChildSpySalesOrderItemGiftCard filtered by the fk_sales_order_item column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderItemGiftCard requireOneByAttributes(string $attributes) Return the first ChildSpySalesOrderItemGiftCard filtered by the attributes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderItemGiftCard requireOneByCode(string $code) Return the first ChildSpySalesOrderItemGiftCard filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderItemGiftCard requireOneByPattern(string $pattern) Return the first ChildSpySalesOrderItemGiftCard filtered by the pattern column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderItemGiftCard requireOneByValue(int $value) Return the first ChildSpySalesOrderItemGiftCard filtered by the value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesOrderItemGiftCard[]|Collection find(?ConnectionInterface $con = null) Return ChildSpySalesOrderItemGiftCard objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderItemGiftCard> find(?ConnectionInterface $con = null) Return ChildSpySalesOrderItemGiftCard objects based on current ModelCriteria
 *
 * @method     ChildSpySalesOrderItemGiftCard[]|Collection findByIdSalesOrderItemGiftCard(int|array<int> $id_sales_order_item_gift_card) Return ChildSpySalesOrderItemGiftCard objects filtered by the id_sales_order_item_gift_card column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderItemGiftCard> findByIdSalesOrderItemGiftCard(int|array<int> $id_sales_order_item_gift_card) Return ChildSpySalesOrderItemGiftCard objects filtered by the id_sales_order_item_gift_card column
 * @method     ChildSpySalesOrderItemGiftCard[]|Collection findByFkSalesOrderItem(int|array<int> $fk_sales_order_item) Return ChildSpySalesOrderItemGiftCard objects filtered by the fk_sales_order_item column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderItemGiftCard> findByFkSalesOrderItem(int|array<int> $fk_sales_order_item) Return ChildSpySalesOrderItemGiftCard objects filtered by the fk_sales_order_item column
 * @method     ChildSpySalesOrderItemGiftCard[]|Collection findByAttributes(string|array<string> $attributes) Return ChildSpySalesOrderItemGiftCard objects filtered by the attributes column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderItemGiftCard> findByAttributes(string|array<string> $attributes) Return ChildSpySalesOrderItemGiftCard objects filtered by the attributes column
 * @method     ChildSpySalesOrderItemGiftCard[]|Collection findByCode(string|array<string> $code) Return ChildSpySalesOrderItemGiftCard objects filtered by the code column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderItemGiftCard> findByCode(string|array<string> $code) Return ChildSpySalesOrderItemGiftCard objects filtered by the code column
 * @method     ChildSpySalesOrderItemGiftCard[]|Collection findByPattern(string|array<string> $pattern) Return ChildSpySalesOrderItemGiftCard objects filtered by the pattern column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderItemGiftCard> findByPattern(string|array<string> $pattern) Return ChildSpySalesOrderItemGiftCard objects filtered by the pattern column
 * @method     ChildSpySalesOrderItemGiftCard[]|Collection findByValue(int|array<int> $value) Return ChildSpySalesOrderItemGiftCard objects filtered by the value column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderItemGiftCard> findByValue(int|array<int> $value) Return ChildSpySalesOrderItemGiftCard objects filtered by the value column
 *
 * @method     ChildSpySalesOrderItemGiftCard[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpySalesOrderItemGiftCard> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpySalesOrderItemGiftCardQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Sales\Persistence\Base\SpySalesOrderItemGiftCardQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItemGiftCard', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpySalesOrderItemGiftCardQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpySalesOrderItemGiftCardQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpySalesOrderItemGiftCardQuery) {
            return $criteria;
        }
        $query = new ChildSpySalesOrderItemGiftCardQuery();
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
     * @return ChildSpySalesOrderItemGiftCard|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpySalesOrderItemGiftCardTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpySalesOrderItemGiftCard A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_sales_order_item_gift_card, fk_sales_order_item, attributes, code, pattern, value FROM spy_sales_order_item_gift_card WHERE id_sales_order_item_gift_card = :p0';
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
            /** @var ChildSpySalesOrderItemGiftCard $obj */
            $obj = new ChildSpySalesOrderItemGiftCard();
            $obj->hydrate($row);
            SpySalesOrderItemGiftCardTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpySalesOrderItemGiftCard|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_ID_SALES_ORDER_ITEM_GIFT_CARD, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_ID_SALES_ORDER_ITEM_GIFT_CARD, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idSalesOrderItemGiftCard Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesOrderItemGiftCard_Between(array $idSalesOrderItemGiftCard)
    {
        return $this->filterByIdSalesOrderItemGiftCard($idSalesOrderItemGiftCard, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idSalesOrderItemGiftCards Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesOrderItemGiftCard_In(array $idSalesOrderItemGiftCards)
    {
        return $this->filterByIdSalesOrderItemGiftCard($idSalesOrderItemGiftCards, Criteria::IN);
    }

    /**
     * Filter the query on the id_sales_order_item_gift_card column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSalesOrderItemGiftCard(1234); // WHERE id_sales_order_item_gift_card = 1234
     * $query->filterByIdSalesOrderItemGiftCard(array(12, 34), Criteria::IN); // WHERE id_sales_order_item_gift_card IN (12, 34)
     * $query->filterByIdSalesOrderItemGiftCard(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_sales_order_item_gift_card > 12
     * </code>
     *
     * @param     mixed $idSalesOrderItemGiftCard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdSalesOrderItemGiftCard($idSalesOrderItemGiftCard = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idSalesOrderItemGiftCard)) {
            $useMinMax = false;
            if (isset($idSalesOrderItemGiftCard['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_ID_SALES_ORDER_ITEM_GIFT_CARD, $idSalesOrderItemGiftCard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSalesOrderItemGiftCard['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_ID_SALES_ORDER_ITEM_GIFT_CARD, $idSalesOrderItemGiftCard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idSalesOrderItemGiftCard of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_ID_SALES_ORDER_ITEM_GIFT_CARD, $idSalesOrderItemGiftCard, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkSalesOrderItem Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrderItem_Between(array $fkSalesOrderItem)
    {
        return $this->filterByFkSalesOrderItem($fkSalesOrderItem, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkSalesOrderItems Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrderItem_In(array $fkSalesOrderItems)
    {
        return $this->filterByFkSalesOrderItem($fkSalesOrderItems, Criteria::IN);
    }

    /**
     * Filter the query on the fk_sales_order_item column
     *
     * Example usage:
     * <code>
     * $query->filterByFkSalesOrderItem(1234); // WHERE fk_sales_order_item = 1234
     * $query->filterByFkSalesOrderItem(array(12, 34), Criteria::IN); // WHERE fk_sales_order_item IN (12, 34)
     * $query->filterByFkSalesOrderItem(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_sales_order_item > 12
     * </code>
     *
     * @see       filterBySpySalesOrderItem()
     *
     * @param     mixed $fkSalesOrderItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkSalesOrderItem($fkSalesOrderItem = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkSalesOrderItem)) {
            $useMinMax = false;
            if (isset($fkSalesOrderItem['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_FK_SALES_ORDER_ITEM, $fkSalesOrderItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesOrderItem['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_FK_SALES_ORDER_ITEM, $fkSalesOrderItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesOrderItem of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_FK_SALES_ORDER_ITEM, $fkSalesOrderItem, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $attributess Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAttributes_In(array $attributess)
    {
        return $this->filterByAttributes($attributess, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $attributes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAttributes_Like($attributes)
    {
        return $this->filterByAttributes($attributes, Criteria::LIKE);
    }

    /**
     * Filter the query on the attributes column
     *
     * Example usage:
     * <code>
     * $query->filterByAttributes('fooValue');   // WHERE attributes = 'fooValue'
     * $query->filterByAttributes('%fooValue%', Criteria::LIKE); // WHERE attributes LIKE '%fooValue%'
     * $query->filterByAttributes([1, 'foo'], Criteria::IN); // WHERE attributes IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $attributes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByAttributes($attributes = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $attributes = str_replace('*', '%', $attributes);
        }

        if (is_array($attributes) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$attributes of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_ATTRIBUTES, $attributes, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $codes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCode_In(array $codes)
    {
        return $this->filterByCode($codes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $code Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCode_Like($code)
    {
        return $this->filterByCode($code, Criteria::LIKE);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE code LIKE '%fooValue%'
     * $query->filterByCode([1, 'foo'], Criteria::IN); // WHERE code IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCode($code = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $code = str_replace('*', '%', $code);
        }

        if (is_array($code) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$code of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_CODE, $code, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $patterns Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPattern_In(array $patterns)
    {
        return $this->filterByPattern($patterns, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $pattern Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPattern_Like($pattern)
    {
        return $this->filterByPattern($pattern, Criteria::LIKE);
    }

    /**
     * Filter the query on the pattern column
     *
     * Example usage:
     * <code>
     * $query->filterByPattern('fooValue');   // WHERE pattern = 'fooValue'
     * $query->filterByPattern('%fooValue%', Criteria::LIKE); // WHERE pattern LIKE '%fooValue%'
     * $query->filterByPattern([1, 'foo'], Criteria::IN); // WHERE pattern IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $pattern The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByPattern($pattern = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $pattern = str_replace('*', '%', $pattern);
        }

        if (is_array($pattern) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$pattern of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_PATTERN, $pattern, $comparison);

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
                $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_VALUE, $value['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($value['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_VALUE, $value['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$value of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_VALUE, $value, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesOrderItem object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrderItem|ObjectCollection $spySalesOrderItem The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpySalesOrderItem($spySalesOrderItem, ?string $comparison = null)
    {
        if ($spySalesOrderItem instanceof \Orm\Zed\Sales\Persistence\SpySalesOrderItem) {
            return $this
                ->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_FK_SALES_ORDER_ITEM, $spySalesOrderItem->getIdSalesOrderItem(), $comparison);
        } elseif ($spySalesOrderItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_FK_SALES_ORDER_ITEM, $spySalesOrderItem->toKeyValue('PrimaryKey', 'IdSalesOrderItem'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpySalesOrderItem() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesOrderItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpySalesOrderItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpySalesOrderItem(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpySalesOrderItem');

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
            $this->addJoinObject($join, 'SpySalesOrderItem');
        }

        return $this;
    }

    /**
     * Use the SpySalesOrderItem relation SpySalesOrderItem object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery A secondary query class using the current class as primary query
     */
    public function useSpySalesOrderItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpySalesOrderItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpySalesOrderItem', '\Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery');
    }

    /**
     * Use the SpySalesOrderItem relation SpySalesOrderItem object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery):\Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpySalesOrderItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpySalesOrderItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpySalesOrderItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery The inner query object of the EXISTS statement
     */
    public function useSpySalesOrderItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery */
        $q = $this->useExistsQuery('SpySalesOrderItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpySalesOrderItem table for a NOT EXISTS query.
     *
     * @see useSpySalesOrderItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpySalesOrderItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery */
        $q = $this->useExistsQuery('SpySalesOrderItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpySalesOrderItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery The inner query object of the IN statement
     */
    public function useInSpySalesOrderItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery */
        $q = $this->useInQuery('SpySalesOrderItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpySalesOrderItem table for a NOT IN query.
     *
     * @see useSpySalesOrderItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpySalesOrderItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery */
        $q = $this->useInQuery('SpySalesOrderItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpySalesOrderItemGiftCard $spySalesOrderItemGiftCard Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spySalesOrderItemGiftCard = null)
    {
        if ($spySalesOrderItemGiftCard) {
            $this->addUsingAlias(SpySalesOrderItemGiftCardTableMap::COL_ID_SALES_ORDER_ITEM_GIFT_CARD, $spySalesOrderItemGiftCard->getIdSalesOrderItemGiftCard(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_sales_order_item_gift_card table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderItemGiftCardTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpySalesOrderItemGiftCardTableMap::clearInstancePool();
            SpySalesOrderItemGiftCardTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderItemGiftCardTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpySalesOrderItemGiftCardTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpySalesOrderItemGiftCardTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpySalesOrderItemGiftCardTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
