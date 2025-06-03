<?php

namespace Orm\Zed\GiftCard\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLog;
use Orm\Zed\GiftCard\Persistence\SpyGiftCard as ChildSpyGiftCard;
use Orm\Zed\GiftCard\Persistence\SpyGiftCardQuery as ChildSpyGiftCardQuery;
use Orm\Zed\GiftCard\Persistence\Map\SpyGiftCardTableMap;
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
 * Base class that represents a query for the `spy_gift_card` table.
 *
 * @method     ChildSpyGiftCardQuery orderByIdGiftCard($order = Criteria::ASC) Order by the id_gift_card column
 * @method     ChildSpyGiftCardQuery orderByAttributes($order = Criteria::ASC) Order by the attributes column
 * @method     ChildSpyGiftCardQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildSpyGiftCardQuery orderByCurrencyIsoCode($order = Criteria::ASC) Order by the currency_iso_code column
 * @method     ChildSpyGiftCardQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     ChildSpyGiftCardQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildSpyGiftCardQuery orderByReplacementPattern($order = Criteria::ASC) Order by the replacement_pattern column
 * @method     ChildSpyGiftCardQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     ChildSpyGiftCardQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyGiftCardQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyGiftCardQuery groupByIdGiftCard() Group by the id_gift_card column
 * @method     ChildSpyGiftCardQuery groupByAttributes() Group by the attributes column
 * @method     ChildSpyGiftCardQuery groupByCode() Group by the code column
 * @method     ChildSpyGiftCardQuery groupByCurrencyIsoCode() Group by the currency_iso_code column
 * @method     ChildSpyGiftCardQuery groupByIsActive() Group by the is_active column
 * @method     ChildSpyGiftCardQuery groupByName() Group by the name column
 * @method     ChildSpyGiftCardQuery groupByReplacementPattern() Group by the replacement_pattern column
 * @method     ChildSpyGiftCardQuery groupByValue() Group by the value column
 * @method     ChildSpyGiftCardQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyGiftCardQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyGiftCardQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyGiftCardQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyGiftCardQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyGiftCardQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyGiftCardQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyGiftCardQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyGiftCardQuery leftJoinSpyGiftCardBalanceLog($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyGiftCardBalanceLog relation
 * @method     ChildSpyGiftCardQuery rightJoinSpyGiftCardBalanceLog($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyGiftCardBalanceLog relation
 * @method     ChildSpyGiftCardQuery innerJoinSpyGiftCardBalanceLog($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyGiftCardBalanceLog relation
 *
 * @method     ChildSpyGiftCardQuery joinWithSpyGiftCardBalanceLog($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyGiftCardBalanceLog relation
 *
 * @method     ChildSpyGiftCardQuery leftJoinWithSpyGiftCardBalanceLog() Adds a LEFT JOIN clause and with to the query using the SpyGiftCardBalanceLog relation
 * @method     ChildSpyGiftCardQuery rightJoinWithSpyGiftCardBalanceLog() Adds a RIGHT JOIN clause and with to the query using the SpyGiftCardBalanceLog relation
 * @method     ChildSpyGiftCardQuery innerJoinWithSpyGiftCardBalanceLog() Adds a INNER JOIN clause and with to the query using the SpyGiftCardBalanceLog relation
 *
 * @method     \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyGiftCard|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyGiftCard matching the query
 * @method     ChildSpyGiftCard findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyGiftCard matching the query, or a new ChildSpyGiftCard object populated from the query conditions when no match is found
 *
 * @method     ChildSpyGiftCard|null findOneByIdGiftCard(int $id_gift_card) Return the first ChildSpyGiftCard filtered by the id_gift_card column
 * @method     ChildSpyGiftCard|null findOneByAttributes(string $attributes) Return the first ChildSpyGiftCard filtered by the attributes column
 * @method     ChildSpyGiftCard|null findOneByCode(string $code) Return the first ChildSpyGiftCard filtered by the code column
 * @method     ChildSpyGiftCard|null findOneByCurrencyIsoCode(string $currency_iso_code) Return the first ChildSpyGiftCard filtered by the currency_iso_code column
 * @method     ChildSpyGiftCard|null findOneByIsActive(boolean $is_active) Return the first ChildSpyGiftCard filtered by the is_active column
 * @method     ChildSpyGiftCard|null findOneByName(string $name) Return the first ChildSpyGiftCard filtered by the name column
 * @method     ChildSpyGiftCard|null findOneByReplacementPattern(string $replacement_pattern) Return the first ChildSpyGiftCard filtered by the replacement_pattern column
 * @method     ChildSpyGiftCard|null findOneByValue(int $value) Return the first ChildSpyGiftCard filtered by the value column
 * @method     ChildSpyGiftCard|null findOneByCreatedAt(string $created_at) Return the first ChildSpyGiftCard filtered by the created_at column
 * @method     ChildSpyGiftCard|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyGiftCard filtered by the updated_at column
 *
 * @method     ChildSpyGiftCard requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyGiftCard by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCard requireOne(?ConnectionInterface $con = null) Return the first ChildSpyGiftCard matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyGiftCard requireOneByIdGiftCard(int $id_gift_card) Return the first ChildSpyGiftCard filtered by the id_gift_card column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCard requireOneByAttributes(string $attributes) Return the first ChildSpyGiftCard filtered by the attributes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCard requireOneByCode(string $code) Return the first ChildSpyGiftCard filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCard requireOneByCurrencyIsoCode(string $currency_iso_code) Return the first ChildSpyGiftCard filtered by the currency_iso_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCard requireOneByIsActive(boolean $is_active) Return the first ChildSpyGiftCard filtered by the is_active column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCard requireOneByName(string $name) Return the first ChildSpyGiftCard filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCard requireOneByReplacementPattern(string $replacement_pattern) Return the first ChildSpyGiftCard filtered by the replacement_pattern column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCard requireOneByValue(int $value) Return the first ChildSpyGiftCard filtered by the value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCard requireOneByCreatedAt(string $created_at) Return the first ChildSpyGiftCard filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCard requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyGiftCard filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyGiftCard[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyGiftCard objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyGiftCard> find(?ConnectionInterface $con = null) Return ChildSpyGiftCard objects based on current ModelCriteria
 *
 * @method     ChildSpyGiftCard[]|Collection findByIdGiftCard(int|array<int> $id_gift_card) Return ChildSpyGiftCard objects filtered by the id_gift_card column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCard> findByIdGiftCard(int|array<int> $id_gift_card) Return ChildSpyGiftCard objects filtered by the id_gift_card column
 * @method     ChildSpyGiftCard[]|Collection findByAttributes(string|array<string> $attributes) Return ChildSpyGiftCard objects filtered by the attributes column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCard> findByAttributes(string|array<string> $attributes) Return ChildSpyGiftCard objects filtered by the attributes column
 * @method     ChildSpyGiftCard[]|Collection findByCode(string|array<string> $code) Return ChildSpyGiftCard objects filtered by the code column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCard> findByCode(string|array<string> $code) Return ChildSpyGiftCard objects filtered by the code column
 * @method     ChildSpyGiftCard[]|Collection findByCurrencyIsoCode(string|array<string> $currency_iso_code) Return ChildSpyGiftCard objects filtered by the currency_iso_code column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCard> findByCurrencyIsoCode(string|array<string> $currency_iso_code) Return ChildSpyGiftCard objects filtered by the currency_iso_code column
 * @method     ChildSpyGiftCard[]|Collection findByIsActive(boolean|array<boolean> $is_active) Return ChildSpyGiftCard objects filtered by the is_active column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCard> findByIsActive(boolean|array<boolean> $is_active) Return ChildSpyGiftCard objects filtered by the is_active column
 * @method     ChildSpyGiftCard[]|Collection findByName(string|array<string> $name) Return ChildSpyGiftCard objects filtered by the name column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCard> findByName(string|array<string> $name) Return ChildSpyGiftCard objects filtered by the name column
 * @method     ChildSpyGiftCard[]|Collection findByReplacementPattern(string|array<string> $replacement_pattern) Return ChildSpyGiftCard objects filtered by the replacement_pattern column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCard> findByReplacementPattern(string|array<string> $replacement_pattern) Return ChildSpyGiftCard objects filtered by the replacement_pattern column
 * @method     ChildSpyGiftCard[]|Collection findByValue(int|array<int> $value) Return ChildSpyGiftCard objects filtered by the value column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCard> findByValue(int|array<int> $value) Return ChildSpyGiftCard objects filtered by the value column
 * @method     ChildSpyGiftCard[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpyGiftCard objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCard> findByCreatedAt(string|array<string> $created_at) Return ChildSpyGiftCard objects filtered by the created_at column
 * @method     ChildSpyGiftCard[]|Collection findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyGiftCard objects filtered by the updated_at column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCard> findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyGiftCard objects filtered by the updated_at column
 *
 * @method     ChildSpyGiftCard[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyGiftCard> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyGiftCardQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\GiftCard\Persistence\Base\SpyGiftCardQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCard', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyGiftCardQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyGiftCardQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyGiftCardQuery) {
            return $criteria;
        }
        $query = new ChildSpyGiftCardQuery();
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
     * @return ChildSpyGiftCard|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyGiftCardTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyGiftCard A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_gift_card, attributes, code, currency_iso_code, is_active, name, replacement_pattern, value, created_at, updated_at FROM spy_gift_card WHERE id_gift_card = :p0';
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
            /** @var ChildSpyGiftCard $obj */
            $obj = new ChildSpyGiftCard();
            $obj->hydrate($row);
            SpyGiftCardTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyGiftCard|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyGiftCardTableMap::COL_ID_GIFT_CARD, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyGiftCardTableMap::COL_ID_GIFT_CARD, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idGiftCard Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdGiftCard_Between(array $idGiftCard)
    {
        return $this->filterByIdGiftCard($idGiftCard, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idGiftCards Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdGiftCard_In(array $idGiftCards)
    {
        return $this->filterByIdGiftCard($idGiftCards, Criteria::IN);
    }

    /**
     * Filter the query on the id_gift_card column
     *
     * Example usage:
     * <code>
     * $query->filterByIdGiftCard(1234); // WHERE id_gift_card = 1234
     * $query->filterByIdGiftCard(array(12, 34), Criteria::IN); // WHERE id_gift_card IN (12, 34)
     * $query->filterByIdGiftCard(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_gift_card > 12
     * </code>
     *
     * @param     mixed $idGiftCard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdGiftCard($idGiftCard = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idGiftCard)) {
            $useMinMax = false;
            if (isset($idGiftCard['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardTableMap::COL_ID_GIFT_CARD, $idGiftCard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGiftCard['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardTableMap::COL_ID_GIFT_CARD, $idGiftCard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idGiftCard of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardTableMap::COL_ID_GIFT_CARD, $idGiftCard, $comparison);

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

        $query = $this->addUsingAlias(SpyGiftCardTableMap::COL_ATTRIBUTES, $attributes, $comparison);

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

        $query = $this->addUsingAlias(SpyGiftCardTableMap::COL_CODE, $code, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $currencyIsoCodes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCurrencyIsoCode_In(array $currencyIsoCodes)
    {
        return $this->filterByCurrencyIsoCode($currencyIsoCodes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $currencyIsoCode Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCurrencyIsoCode_Like($currencyIsoCode)
    {
        return $this->filterByCurrencyIsoCode($currencyIsoCode, Criteria::LIKE);
    }

    /**
     * Filter the query on the currency_iso_code column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrencyIsoCode('fooValue');   // WHERE currency_iso_code = 'fooValue'
     * $query->filterByCurrencyIsoCode('%fooValue%', Criteria::LIKE); // WHERE currency_iso_code LIKE '%fooValue%'
     * $query->filterByCurrencyIsoCode([1, 'foo'], Criteria::IN); // WHERE currency_iso_code IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $currencyIsoCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCurrencyIsoCode($currencyIsoCode = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $currencyIsoCode = str_replace('*', '%', $currencyIsoCode);
        }

        if (is_array($currencyIsoCode) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$currencyIsoCode of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyGiftCardTableMap::COL_CURRENCY_ISO_CODE, $currencyIsoCode, $comparison);

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

        $query = $this->addUsingAlias(SpyGiftCardTableMap::COL_IS_ACTIVE, $isActive, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $names Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_In(array $names)
    {
        return $this->filterByName($names, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $name Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_Like($name)
    {
        return $this->filterByName($name, Criteria::LIKE);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * $query->filterByName([1, 'foo'], Criteria::IN); // WHERE name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByName($name = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $name = str_replace('*', '%', $name);
        }

        if (is_array($name) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$name of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyGiftCardTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $replacementPatterns Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByReplacementPattern_In(array $replacementPatterns)
    {
        return $this->filterByReplacementPattern($replacementPatterns, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $replacementPattern Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByReplacementPattern_Like($replacementPattern)
    {
        return $this->filterByReplacementPattern($replacementPattern, Criteria::LIKE);
    }

    /**
     * Filter the query on the replacement_pattern column
     *
     * Example usage:
     * <code>
     * $query->filterByReplacementPattern('fooValue');   // WHERE replacement_pattern = 'fooValue'
     * $query->filterByReplacementPattern('%fooValue%', Criteria::LIKE); // WHERE replacement_pattern LIKE '%fooValue%'
     * $query->filterByReplacementPattern([1, 'foo'], Criteria::IN); // WHERE replacement_pattern IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $replacementPattern The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByReplacementPattern($replacementPattern = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $replacementPattern = str_replace('*', '%', $replacementPattern);
        }

        if (is_array($replacementPattern) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$replacementPattern of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyGiftCardTableMap::COL_REPLACEMENT_PATTERN, $replacementPattern, $comparison);

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
                $this->addUsingAlias(SpyGiftCardTableMap::COL_VALUE, $value['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($value['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardTableMap::COL_VALUE, $value['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$value of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardTableMap::COL_VALUE, $value, $comparison);

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
                $this->addUsingAlias(SpyGiftCardTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyGiftCardTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLog object
     *
     * @param \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLog|ObjectCollection $spyGiftCardBalanceLog the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyGiftCardBalanceLog($spyGiftCardBalanceLog, ?string $comparison = null)
    {
        if ($spyGiftCardBalanceLog instanceof \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLog) {
            $this
                ->addUsingAlias(SpyGiftCardTableMap::COL_ID_GIFT_CARD, $spyGiftCardBalanceLog->getFkGiftCard(), $comparison);

            return $this;
        } elseif ($spyGiftCardBalanceLog instanceof ObjectCollection) {
            $this
                ->useSpyGiftCardBalanceLogQuery()
                ->filterByPrimaryKeys($spyGiftCardBalanceLog->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySpyGiftCardBalanceLog() only accepts arguments of type \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLog or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyGiftCardBalanceLog relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyGiftCardBalanceLog(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyGiftCardBalanceLog');

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
            $this->addJoinObject($join, 'SpyGiftCardBalanceLog');
        }

        return $this;
    }

    /**
     * Use the SpyGiftCardBalanceLog relation SpyGiftCardBalanceLog object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery A secondary query class using the current class as primary query
     */
    public function useSpyGiftCardBalanceLogQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyGiftCardBalanceLog($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyGiftCardBalanceLog', '\Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery');
    }

    /**
     * Use the SpyGiftCardBalanceLog relation SpyGiftCardBalanceLog object
     *
     * @param callable(\Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery):\Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyGiftCardBalanceLogQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyGiftCardBalanceLogQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyGiftCardBalanceLog table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery The inner query object of the EXISTS statement
     */
    public function useSpyGiftCardBalanceLogExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery */
        $q = $this->useExistsQuery('SpyGiftCardBalanceLog', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyGiftCardBalanceLog table for a NOT EXISTS query.
     *
     * @see useSpyGiftCardBalanceLogExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyGiftCardBalanceLogNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery */
        $q = $this->useExistsQuery('SpyGiftCardBalanceLog', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyGiftCardBalanceLog table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery The inner query object of the IN statement
     */
    public function useInSpyGiftCardBalanceLogQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery */
        $q = $this->useInQuery('SpyGiftCardBalanceLog', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyGiftCardBalanceLog table for a NOT IN query.
     *
     * @see useSpyGiftCardBalanceLogInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyGiftCardBalanceLogQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLogQuery */
        $q = $this->useInQuery('SpyGiftCardBalanceLog', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyGiftCard $spyGiftCard Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyGiftCard = null)
    {
        if ($spyGiftCard) {
            $this->addUsingAlias(SpyGiftCardTableMap::COL_ID_GIFT_CARD, $spyGiftCard->getIdGiftCard(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_gift_card table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyGiftCardTableMap::clearInstancePool();
            SpyGiftCardTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyGiftCardTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyGiftCardTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyGiftCardTableMap::clearRelatedInstancePool();

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
        $this->addUsingAlias(SpyGiftCardTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by update date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyGiftCardTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by update date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyGiftCardTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by create date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyGiftCardTableMap::COL_CREATED_AT);

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
        $this->addUsingAlias(SpyGiftCardTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyGiftCardTableMap::COL_CREATED_AT);

        return $this;
    }

}
