<?php

namespace Orm\Zed\GiftCard\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfiguration as ChildSpyGiftCardProductAbstractConfiguration;
use Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery as ChildSpyGiftCardProductAbstractConfigurationQuery;
use Orm\Zed\GiftCard\Persistence\Map\SpyGiftCardProductAbstractConfigurationTableMap;
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
 * Base class that represents a query for the `spy_gift_card_product_abstract_configuration` table.
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery orderByIdGiftCardProductAbstractConfiguration($order = Criteria::ASC) Order by the id_gift_card_product_abstract_configuration column
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery orderByCodePattern($order = Criteria::ASC) Order by the code_pattern column
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery groupByIdGiftCardProductAbstractConfiguration() Group by the id_gift_card_product_abstract_configuration column
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery groupByCodePattern() Group by the code_pattern column
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery leftJoinSpyGiftCardProductAbstractConfigurationLink($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyGiftCardProductAbstractConfigurationLink relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery rightJoinSpyGiftCardProductAbstractConfigurationLink($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyGiftCardProductAbstractConfigurationLink relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery innerJoinSpyGiftCardProductAbstractConfigurationLink($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyGiftCardProductAbstractConfigurationLink relation
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery joinWithSpyGiftCardProductAbstractConfigurationLink($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyGiftCardProductAbstractConfigurationLink relation
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery leftJoinWithSpyGiftCardProductAbstractConfigurationLink() Adds a LEFT JOIN clause and with to the query using the SpyGiftCardProductAbstractConfigurationLink relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery rightJoinWithSpyGiftCardProductAbstractConfigurationLink() Adds a RIGHT JOIN clause and with to the query using the SpyGiftCardProductAbstractConfigurationLink relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationQuery innerJoinWithSpyGiftCardProductAbstractConfigurationLink() Adds a INNER JOIN clause and with to the query using the SpyGiftCardProductAbstractConfigurationLink relation
 *
 * @method     \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyGiftCardProductAbstractConfiguration|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyGiftCardProductAbstractConfiguration matching the query
 * @method     ChildSpyGiftCardProductAbstractConfiguration findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyGiftCardProductAbstractConfiguration matching the query, or a new ChildSpyGiftCardProductAbstractConfiguration object populated from the query conditions when no match is found
 *
 * @method     ChildSpyGiftCardProductAbstractConfiguration|null findOneByIdGiftCardProductAbstractConfiguration(int $id_gift_card_product_abstract_configuration) Return the first ChildSpyGiftCardProductAbstractConfiguration filtered by the id_gift_card_product_abstract_configuration column
 * @method     ChildSpyGiftCardProductAbstractConfiguration|null findOneByCodePattern(string $code_pattern) Return the first ChildSpyGiftCardProductAbstractConfiguration filtered by the code_pattern column
 * @method     ChildSpyGiftCardProductAbstractConfiguration|null findOneByCreatedAt(string $created_at) Return the first ChildSpyGiftCardProductAbstractConfiguration filtered by the created_at column
 * @method     ChildSpyGiftCardProductAbstractConfiguration|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyGiftCardProductAbstractConfiguration filtered by the updated_at column
 *
 * @method     ChildSpyGiftCardProductAbstractConfiguration requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyGiftCardProductAbstractConfiguration by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardProductAbstractConfiguration requireOne(?ConnectionInterface $con = null) Return the first ChildSpyGiftCardProductAbstractConfiguration matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyGiftCardProductAbstractConfiguration requireOneByIdGiftCardProductAbstractConfiguration(int $id_gift_card_product_abstract_configuration) Return the first ChildSpyGiftCardProductAbstractConfiguration filtered by the id_gift_card_product_abstract_configuration column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardProductAbstractConfiguration requireOneByCodePattern(string $code_pattern) Return the first ChildSpyGiftCardProductAbstractConfiguration filtered by the code_pattern column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardProductAbstractConfiguration requireOneByCreatedAt(string $created_at) Return the first ChildSpyGiftCardProductAbstractConfiguration filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardProductAbstractConfiguration requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyGiftCardProductAbstractConfiguration filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyGiftCardProductAbstractConfiguration[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyGiftCardProductAbstractConfiguration objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardProductAbstractConfiguration> find(?ConnectionInterface $con = null) Return ChildSpyGiftCardProductAbstractConfiguration objects based on current ModelCriteria
 *
 * @method     ChildSpyGiftCardProductAbstractConfiguration[]|Collection findByIdGiftCardProductAbstractConfiguration(int|array<int> $id_gift_card_product_abstract_configuration) Return ChildSpyGiftCardProductAbstractConfiguration objects filtered by the id_gift_card_product_abstract_configuration column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardProductAbstractConfiguration> findByIdGiftCardProductAbstractConfiguration(int|array<int> $id_gift_card_product_abstract_configuration) Return ChildSpyGiftCardProductAbstractConfiguration objects filtered by the id_gift_card_product_abstract_configuration column
 * @method     ChildSpyGiftCardProductAbstractConfiguration[]|Collection findByCodePattern(string|array<string> $code_pattern) Return ChildSpyGiftCardProductAbstractConfiguration objects filtered by the code_pattern column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardProductAbstractConfiguration> findByCodePattern(string|array<string> $code_pattern) Return ChildSpyGiftCardProductAbstractConfiguration objects filtered by the code_pattern column
 * @method     ChildSpyGiftCardProductAbstractConfiguration[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpyGiftCardProductAbstractConfiguration objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardProductAbstractConfiguration> findByCreatedAt(string|array<string> $created_at) Return ChildSpyGiftCardProductAbstractConfiguration objects filtered by the created_at column
 * @method     ChildSpyGiftCardProductAbstractConfiguration[]|Collection findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyGiftCardProductAbstractConfiguration objects filtered by the updated_at column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardProductAbstractConfiguration> findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyGiftCardProductAbstractConfiguration objects filtered by the updated_at column
 *
 * @method     ChildSpyGiftCardProductAbstractConfiguration[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyGiftCardProductAbstractConfiguration> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyGiftCardProductAbstractConfigurationQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\GiftCard\Persistence\Base\SpyGiftCardProductAbstractConfigurationQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCardProductAbstractConfiguration', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyGiftCardProductAbstractConfigurationQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyGiftCardProductAbstractConfigurationQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyGiftCardProductAbstractConfigurationQuery) {
            return $criteria;
        }
        $query = new ChildSpyGiftCardProductAbstractConfigurationQuery();
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
     * @return ChildSpyGiftCardProductAbstractConfiguration|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyGiftCardProductAbstractConfigurationTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyGiftCardProductAbstractConfiguration A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_gift_card_product_abstract_configuration, code_pattern, created_at, updated_at FROM spy_gift_card_product_abstract_configuration WHERE id_gift_card_product_abstract_configuration = :p0';
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
            /** @var ChildSpyGiftCardProductAbstractConfiguration $obj */
            $obj = new ChildSpyGiftCardProductAbstractConfiguration();
            $obj->hydrate($row);
            SpyGiftCardProductAbstractConfigurationTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyGiftCardProductAbstractConfiguration|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idGiftCardProductAbstractConfiguration Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdGiftCardProductAbstractConfiguration_Between(array $idGiftCardProductAbstractConfiguration)
    {
        return $this->filterByIdGiftCardProductAbstractConfiguration($idGiftCardProductAbstractConfiguration, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idGiftCardProductAbstractConfigurations Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdGiftCardProductAbstractConfiguration_In(array $idGiftCardProductAbstractConfigurations)
    {
        return $this->filterByIdGiftCardProductAbstractConfiguration($idGiftCardProductAbstractConfigurations, Criteria::IN);
    }

    /**
     * Filter the query on the id_gift_card_product_abstract_configuration column
     *
     * Example usage:
     * <code>
     * $query->filterByIdGiftCardProductAbstractConfiguration(1234); // WHERE id_gift_card_product_abstract_configuration = 1234
     * $query->filterByIdGiftCardProductAbstractConfiguration(array(12, 34), Criteria::IN); // WHERE id_gift_card_product_abstract_configuration IN (12, 34)
     * $query->filterByIdGiftCardProductAbstractConfiguration(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_gift_card_product_abstract_configuration > 12
     * </code>
     *
     * @param     mixed $idGiftCardProductAbstractConfiguration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdGiftCardProductAbstractConfiguration($idGiftCardProductAbstractConfiguration = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idGiftCardProductAbstractConfiguration)) {
            $useMinMax = false;
            if (isset($idGiftCardProductAbstractConfiguration['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $idGiftCardProductAbstractConfiguration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGiftCardProductAbstractConfiguration['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $idGiftCardProductAbstractConfiguration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idGiftCardProductAbstractConfiguration of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $idGiftCardProductAbstractConfiguration, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $codePatterns Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCodePattern_In(array $codePatterns)
    {
        return $this->filterByCodePattern($codePatterns, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $codePattern Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCodePattern_Like($codePattern)
    {
        return $this->filterByCodePattern($codePattern, Criteria::LIKE);
    }

    /**
     * Filter the query on the code_pattern column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePattern('fooValue');   // WHERE code_pattern = 'fooValue'
     * $query->filterByCodePattern('%fooValue%', Criteria::LIKE); // WHERE code_pattern LIKE '%fooValue%'
     * $query->filterByCodePattern([1, 'foo'], Criteria::IN); // WHERE code_pattern IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $codePattern The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCodePattern($codePattern = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $codePattern = str_replace('*', '%', $codePattern);
        }

        if (is_array($codePattern) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$codePattern of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_CODE_PATTERN, $codePattern, $comparison);

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
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLink object
     *
     * @param \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLink|ObjectCollection $spyGiftCardProductAbstractConfigurationLink the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyGiftCardProductAbstractConfigurationLink($spyGiftCardProductAbstractConfigurationLink, ?string $comparison = null)
    {
        if ($spyGiftCardProductAbstractConfigurationLink instanceof \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLink) {
            $this
                ->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $spyGiftCardProductAbstractConfigurationLink->getFkGiftCardProductAbstractConfiguration(), $comparison);

            return $this;
        } elseif ($spyGiftCardProductAbstractConfigurationLink instanceof ObjectCollection) {
            $this
                ->useSpyGiftCardProductAbstractConfigurationLinkQuery()
                ->filterByPrimaryKeys($spyGiftCardProductAbstractConfigurationLink->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySpyGiftCardProductAbstractConfigurationLink() only accepts arguments of type \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLink or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyGiftCardProductAbstractConfigurationLink relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyGiftCardProductAbstractConfigurationLink(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyGiftCardProductAbstractConfigurationLink');

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
            $this->addJoinObject($join, 'SpyGiftCardProductAbstractConfigurationLink');
        }

        return $this;
    }

    /**
     * Use the SpyGiftCardProductAbstractConfigurationLink relation SpyGiftCardProductAbstractConfigurationLink object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery A secondary query class using the current class as primary query
     */
    public function useSpyGiftCardProductAbstractConfigurationLinkQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyGiftCardProductAbstractConfigurationLink($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyGiftCardProductAbstractConfigurationLink', '\Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery');
    }

    /**
     * Use the SpyGiftCardProductAbstractConfigurationLink relation SpyGiftCardProductAbstractConfigurationLink object
     *
     * @param callable(\Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery):\Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyGiftCardProductAbstractConfigurationLinkQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyGiftCardProductAbstractConfigurationLinkQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyGiftCardProductAbstractConfigurationLink table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery The inner query object of the EXISTS statement
     */
    public function useSpyGiftCardProductAbstractConfigurationLinkExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery */
        $q = $this->useExistsQuery('SpyGiftCardProductAbstractConfigurationLink', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyGiftCardProductAbstractConfigurationLink table for a NOT EXISTS query.
     *
     * @see useSpyGiftCardProductAbstractConfigurationLinkExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyGiftCardProductAbstractConfigurationLinkNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery */
        $q = $this->useExistsQuery('SpyGiftCardProductAbstractConfigurationLink', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyGiftCardProductAbstractConfigurationLink table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery The inner query object of the IN statement
     */
    public function useInSpyGiftCardProductAbstractConfigurationLinkQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery */
        $q = $this->useInQuery('SpyGiftCardProductAbstractConfigurationLink', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyGiftCardProductAbstractConfigurationLink table for a NOT IN query.
     *
     * @see useSpyGiftCardProductAbstractConfigurationLinkInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyGiftCardProductAbstractConfigurationLinkQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery */
        $q = $this->useInQuery('SpyGiftCardProductAbstractConfigurationLink', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyGiftCardProductAbstractConfiguration $spyGiftCardProductAbstractConfiguration Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyGiftCardProductAbstractConfiguration = null)
    {
        if ($spyGiftCardProductAbstractConfiguration) {
            $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $spyGiftCardProductAbstractConfiguration->getIdGiftCardProductAbstractConfiguration(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_gift_card_product_abstract_configuration table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardProductAbstractConfigurationTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyGiftCardProductAbstractConfigurationTableMap::clearInstancePool();
            SpyGiftCardProductAbstractConfigurationTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardProductAbstractConfigurationTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyGiftCardProductAbstractConfigurationTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyGiftCardProductAbstractConfigurationTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyGiftCardProductAbstractConfigurationTableMap::clearRelatedInstancePool();

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
        $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by update date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by update date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by create date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_CREATED_AT);

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
        $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyGiftCardProductAbstractConfigurationTableMap::COL_CREATED_AT);

        return $this;
    }

}
