<?php

namespace Orm\Zed\GiftCard\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\GiftCard\Persistence\SpyPaymentGiftCard as ChildSpyPaymentGiftCard;
use Orm\Zed\GiftCard\Persistence\SpyPaymentGiftCardQuery as ChildSpyPaymentGiftCardQuery;
use Orm\Zed\GiftCard\Persistence\Map\SpyPaymentGiftCardTableMap;
use Orm\Zed\Payment\Persistence\SpySalesPayment;
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
 * Base class that represents a query for the `spy_payment_gift_card` table.
 *
 * @method     ChildSpyPaymentGiftCardQuery orderByIdPaymentGiftCard($order = Criteria::ASC) Order by the id_payment_gift_card column
 * @method     ChildSpyPaymentGiftCardQuery orderByFkSalesPayment($order = Criteria::ASC) Order by the fk_sales_payment column
 * @method     ChildSpyPaymentGiftCardQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildSpyPaymentGiftCardQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     ChildSpyPaymentGiftCardQuery groupByIdPaymentGiftCard() Group by the id_payment_gift_card column
 * @method     ChildSpyPaymentGiftCardQuery groupByFkSalesPayment() Group by the fk_sales_payment column
 * @method     ChildSpyPaymentGiftCardQuery groupByCode() Group by the code column
 * @method     ChildSpyPaymentGiftCardQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     ChildSpyPaymentGiftCardQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyPaymentGiftCardQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyPaymentGiftCardQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyPaymentGiftCardQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyPaymentGiftCardQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyPaymentGiftCardQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyPaymentGiftCardQuery leftJoinSpySalesPayment($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpySalesPayment relation
 * @method     ChildSpyPaymentGiftCardQuery rightJoinSpySalesPayment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpySalesPayment relation
 * @method     ChildSpyPaymentGiftCardQuery innerJoinSpySalesPayment($relationAlias = null) Adds a INNER JOIN clause to the query using the SpySalesPayment relation
 *
 * @method     ChildSpyPaymentGiftCardQuery joinWithSpySalesPayment($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpySalesPayment relation
 *
 * @method     ChildSpyPaymentGiftCardQuery leftJoinWithSpySalesPayment() Adds a LEFT JOIN clause and with to the query using the SpySalesPayment relation
 * @method     ChildSpyPaymentGiftCardQuery rightJoinWithSpySalesPayment() Adds a RIGHT JOIN clause and with to the query using the SpySalesPayment relation
 * @method     ChildSpyPaymentGiftCardQuery innerJoinWithSpySalesPayment() Adds a INNER JOIN clause and with to the query using the SpySalesPayment relation
 *
 * @method     \Orm\Zed\Payment\Persistence\SpySalesPaymentQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyPaymentGiftCard|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyPaymentGiftCard matching the query
 * @method     ChildSpyPaymentGiftCard findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyPaymentGiftCard matching the query, or a new ChildSpyPaymentGiftCard object populated from the query conditions when no match is found
 *
 * @method     ChildSpyPaymentGiftCard|null findOneByIdPaymentGiftCard(int $id_payment_gift_card) Return the first ChildSpyPaymentGiftCard filtered by the id_payment_gift_card column
 * @method     ChildSpyPaymentGiftCard|null findOneByFkSalesPayment(int $fk_sales_payment) Return the first ChildSpyPaymentGiftCard filtered by the fk_sales_payment column
 * @method     ChildSpyPaymentGiftCard|null findOneByCode(string $code) Return the first ChildSpyPaymentGiftCard filtered by the code column
 * @method     ChildSpyPaymentGiftCard|null findOneByCreatedAt(string $created_at) Return the first ChildSpyPaymentGiftCard filtered by the created_at column
 *
 * @method     ChildSpyPaymentGiftCard requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyPaymentGiftCard by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPaymentGiftCard requireOne(?ConnectionInterface $con = null) Return the first ChildSpyPaymentGiftCard matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPaymentGiftCard requireOneByIdPaymentGiftCard(int $id_payment_gift_card) Return the first ChildSpyPaymentGiftCard filtered by the id_payment_gift_card column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPaymentGiftCard requireOneByFkSalesPayment(int $fk_sales_payment) Return the first ChildSpyPaymentGiftCard filtered by the fk_sales_payment column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPaymentGiftCard requireOneByCode(string $code) Return the first ChildSpyPaymentGiftCard filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPaymentGiftCard requireOneByCreatedAt(string $created_at) Return the first ChildSpyPaymentGiftCard filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPaymentGiftCard[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyPaymentGiftCard objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyPaymentGiftCard> find(?ConnectionInterface $con = null) Return ChildSpyPaymentGiftCard objects based on current ModelCriteria
 *
 * @method     ChildSpyPaymentGiftCard[]|Collection findByIdPaymentGiftCard(int|array<int> $id_payment_gift_card) Return ChildSpyPaymentGiftCard objects filtered by the id_payment_gift_card column
 * @psalm-method Collection&\Traversable<ChildSpyPaymentGiftCard> findByIdPaymentGiftCard(int|array<int> $id_payment_gift_card) Return ChildSpyPaymentGiftCard objects filtered by the id_payment_gift_card column
 * @method     ChildSpyPaymentGiftCard[]|Collection findByFkSalesPayment(int|array<int> $fk_sales_payment) Return ChildSpyPaymentGiftCard objects filtered by the fk_sales_payment column
 * @psalm-method Collection&\Traversable<ChildSpyPaymentGiftCard> findByFkSalesPayment(int|array<int> $fk_sales_payment) Return ChildSpyPaymentGiftCard objects filtered by the fk_sales_payment column
 * @method     ChildSpyPaymentGiftCard[]|Collection findByCode(string|array<string> $code) Return ChildSpyPaymentGiftCard objects filtered by the code column
 * @psalm-method Collection&\Traversable<ChildSpyPaymentGiftCard> findByCode(string|array<string> $code) Return ChildSpyPaymentGiftCard objects filtered by the code column
 * @method     ChildSpyPaymentGiftCard[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpyPaymentGiftCard objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpyPaymentGiftCard> findByCreatedAt(string|array<string> $created_at) Return ChildSpyPaymentGiftCard objects filtered by the created_at column
 *
 * @method     ChildSpyPaymentGiftCard[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyPaymentGiftCard> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyPaymentGiftCardQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\GiftCard\Persistence\Base\SpyPaymentGiftCardQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\GiftCard\\Persistence\\SpyPaymentGiftCard', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyPaymentGiftCardQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyPaymentGiftCardQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyPaymentGiftCardQuery) {
            return $criteria;
        }
        $query = new ChildSpyPaymentGiftCardQuery();
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
     * @return ChildSpyPaymentGiftCard|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyPaymentGiftCardTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyPaymentGiftCard A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_payment_gift_card, fk_sales_payment, code, created_at FROM spy_payment_gift_card WHERE id_payment_gift_card = :p0';
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
            /** @var ChildSpyPaymentGiftCard $obj */
            $obj = new ChildSpyPaymentGiftCard();
            $obj->hydrate($row);
            SpyPaymentGiftCardTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyPaymentGiftCard|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_ID_PAYMENT_GIFT_CARD, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_ID_PAYMENT_GIFT_CARD, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idPaymentGiftCard Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPaymentGiftCard_Between(array $idPaymentGiftCard)
    {
        return $this->filterByIdPaymentGiftCard($idPaymentGiftCard, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idPaymentGiftCards Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPaymentGiftCard_In(array $idPaymentGiftCards)
    {
        return $this->filterByIdPaymentGiftCard($idPaymentGiftCards, Criteria::IN);
    }

    /**
     * Filter the query on the id_payment_gift_card column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPaymentGiftCard(1234); // WHERE id_payment_gift_card = 1234
     * $query->filterByIdPaymentGiftCard(array(12, 34), Criteria::IN); // WHERE id_payment_gift_card IN (12, 34)
     * $query->filterByIdPaymentGiftCard(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_payment_gift_card > 12
     * </code>
     *
     * @param     mixed $idPaymentGiftCard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdPaymentGiftCard($idPaymentGiftCard = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idPaymentGiftCard)) {
            $useMinMax = false;
            if (isset($idPaymentGiftCard['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_ID_PAYMENT_GIFT_CARD, $idPaymentGiftCard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPaymentGiftCard['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_ID_PAYMENT_GIFT_CARD, $idPaymentGiftCard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idPaymentGiftCard of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_ID_PAYMENT_GIFT_CARD, $idPaymentGiftCard, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkSalesPayment Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesPayment_Between(array $fkSalesPayment)
    {
        return $this->filterByFkSalesPayment($fkSalesPayment, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkSalesPayments Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesPayment_In(array $fkSalesPayments)
    {
        return $this->filterByFkSalesPayment($fkSalesPayments, Criteria::IN);
    }

    /**
     * Filter the query on the fk_sales_payment column
     *
     * Example usage:
     * <code>
     * $query->filterByFkSalesPayment(1234); // WHERE fk_sales_payment = 1234
     * $query->filterByFkSalesPayment(array(12, 34), Criteria::IN); // WHERE fk_sales_payment IN (12, 34)
     * $query->filterByFkSalesPayment(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_sales_payment > 12
     * </code>
     *
     * @see       filterBySpySalesPayment()
     *
     * @param     mixed $fkSalesPayment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkSalesPayment($fkSalesPayment = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkSalesPayment)) {
            $useMinMax = false;
            if (isset($fkSalesPayment['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_FK_SALES_PAYMENT, $fkSalesPayment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesPayment['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_FK_SALES_PAYMENT, $fkSalesPayment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesPayment of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_FK_SALES_PAYMENT, $fkSalesPayment, $comparison);

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

        $query = $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_CODE, $code, $comparison);

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
                $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_CREATED_AT, $createdAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Payment\Persistence\SpySalesPayment object
     *
     * @param \Orm\Zed\Payment\Persistence\SpySalesPayment|ObjectCollection $spySalesPayment The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpySalesPayment($spySalesPayment, ?string $comparison = null)
    {
        if ($spySalesPayment instanceof \Orm\Zed\Payment\Persistence\SpySalesPayment) {
            return $this
                ->addUsingAlias(SpyPaymentGiftCardTableMap::COL_FK_SALES_PAYMENT, $spySalesPayment->getIdSalesPayment(), $comparison);
        } elseif ($spySalesPayment instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyPaymentGiftCardTableMap::COL_FK_SALES_PAYMENT, $spySalesPayment->toKeyValue('PrimaryKey', 'IdSalesPayment'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpySalesPayment() only accepts arguments of type \Orm\Zed\Payment\Persistence\SpySalesPayment or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpySalesPayment relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpySalesPayment(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpySalesPayment');

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
            $this->addJoinObject($join, 'SpySalesPayment');
        }

        return $this;
    }

    /**
     * Use the SpySalesPayment relation SpySalesPayment object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Payment\Persistence\SpySalesPaymentQuery A secondary query class using the current class as primary query
     */
    public function useSpySalesPaymentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpySalesPayment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpySalesPayment', '\Orm\Zed\Payment\Persistence\SpySalesPaymentQuery');
    }

    /**
     * Use the SpySalesPayment relation SpySalesPayment object
     *
     * @param callable(\Orm\Zed\Payment\Persistence\SpySalesPaymentQuery):\Orm\Zed\Payment\Persistence\SpySalesPaymentQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpySalesPaymentQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpySalesPaymentQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpySalesPayment table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Payment\Persistence\SpySalesPaymentQuery The inner query object of the EXISTS statement
     */
    public function useSpySalesPaymentExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Payment\Persistence\SpySalesPaymentQuery */
        $q = $this->useExistsQuery('SpySalesPayment', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpySalesPayment table for a NOT EXISTS query.
     *
     * @see useSpySalesPaymentExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Payment\Persistence\SpySalesPaymentQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpySalesPaymentNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Payment\Persistence\SpySalesPaymentQuery */
        $q = $this->useExistsQuery('SpySalesPayment', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpySalesPayment table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Payment\Persistence\SpySalesPaymentQuery The inner query object of the IN statement
     */
    public function useInSpySalesPaymentQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Payment\Persistence\SpySalesPaymentQuery */
        $q = $this->useInQuery('SpySalesPayment', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpySalesPayment table for a NOT IN query.
     *
     * @see useSpySalesPaymentInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Payment\Persistence\SpySalesPaymentQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpySalesPaymentQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Payment\Persistence\SpySalesPaymentQuery */
        $q = $this->useInQuery('SpySalesPayment', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyPaymentGiftCard $spyPaymentGiftCard Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyPaymentGiftCard = null)
    {
        if ($spyPaymentGiftCard) {
            $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_ID_PAYMENT_GIFT_CARD, $spyPaymentGiftCard->getIdPaymentGiftCard(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_payment_gift_card table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPaymentGiftCardTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyPaymentGiftCardTableMap::clearInstancePool();
            SpyPaymentGiftCardTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPaymentGiftCardTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyPaymentGiftCardTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyPaymentGiftCardTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyPaymentGiftCardTableMap::clearRelatedInstancePool();

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
        $this->addDescendingOrderByColumn(SpyPaymentGiftCardTableMap::COL_CREATED_AT);

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
        $this->addUsingAlias(SpyPaymentGiftCardTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyPaymentGiftCardTableMap::COL_CREATED_AT);

        return $this;
    }

}
