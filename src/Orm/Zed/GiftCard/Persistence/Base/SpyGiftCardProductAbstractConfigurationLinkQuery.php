<?php

namespace Orm\Zed\GiftCard\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLink as ChildSpyGiftCardProductAbstractConfigurationLink;
use Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLinkQuery as ChildSpyGiftCardProductAbstractConfigurationLinkQuery;
use Orm\Zed\GiftCard\Persistence\Map\SpyGiftCardProductAbstractConfigurationLinkTableMap;
use Orm\Zed\Product\Persistence\SpyProductAbstract;
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
 * Base class that represents a query for the `spy_gift_card_product_abstract_configuration_link` table.
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery orderByIdGiftCardProductAbstractConfigurationLink($order = Criteria::ASC) Order by the id_gift_card_product_abstract_configuration_link column
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery orderByFkGiftCardProductAbstractConfiguration($order = Criteria::ASC) Order by the fk_gift_card_product_abstract_configuration column
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery orderByFkProductAbstract($order = Criteria::ASC) Order by the fk_product_abstract column
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery groupByIdGiftCardProductAbstractConfigurationLink() Group by the id_gift_card_product_abstract_configuration_link column
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery groupByFkGiftCardProductAbstractConfiguration() Group by the fk_gift_card_product_abstract_configuration column
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery groupByFkProductAbstract() Group by the fk_product_abstract column
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery leftJoinSpyProductAbstract($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductAbstract relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery rightJoinSpyProductAbstract($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductAbstract relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery innerJoinSpyProductAbstract($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductAbstract relation
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery joinWithSpyProductAbstract($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductAbstract relation
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery leftJoinWithSpyProductAbstract() Adds a LEFT JOIN clause and with to the query using the SpyProductAbstract relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery rightJoinWithSpyProductAbstract() Adds a RIGHT JOIN clause and with to the query using the SpyProductAbstract relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery innerJoinWithSpyProductAbstract() Adds a INNER JOIN clause and with to the query using the SpyProductAbstract relation
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery leftJoinSpyGiftCardProductAbstractConfiguration($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyGiftCardProductAbstractConfiguration relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery rightJoinSpyGiftCardProductAbstractConfiguration($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyGiftCardProductAbstractConfiguration relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery innerJoinSpyGiftCardProductAbstractConfiguration($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyGiftCardProductAbstractConfiguration relation
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery joinWithSpyGiftCardProductAbstractConfiguration($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyGiftCardProductAbstractConfiguration relation
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery leftJoinWithSpyGiftCardProductAbstractConfiguration() Adds a LEFT JOIN clause and with to the query using the SpyGiftCardProductAbstractConfiguration relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery rightJoinWithSpyGiftCardProductAbstractConfiguration() Adds a RIGHT JOIN clause and with to the query using the SpyGiftCardProductAbstractConfiguration relation
 * @method     ChildSpyGiftCardProductAbstractConfigurationLinkQuery innerJoinWithSpyGiftCardProductAbstractConfiguration() Adds a INNER JOIN clause and with to the query using the SpyGiftCardProductAbstractConfiguration relation
 *
 * @method     \Orm\Zed\Product\Persistence\SpyProductAbstractQuery|\Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyGiftCardProductAbstractConfigurationLink matching the query
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyGiftCardProductAbstractConfigurationLink matching the query, or a new ChildSpyGiftCardProductAbstractConfigurationLink object populated from the query conditions when no match is found
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink|null findOneByIdGiftCardProductAbstractConfigurationLink(int $id_gift_card_product_abstract_configuration_link) Return the first ChildSpyGiftCardProductAbstractConfigurationLink filtered by the id_gift_card_product_abstract_configuration_link column
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink|null findOneByFkGiftCardProductAbstractConfiguration(int $fk_gift_card_product_abstract_configuration) Return the first ChildSpyGiftCardProductAbstractConfigurationLink filtered by the fk_gift_card_product_abstract_configuration column
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink|null findOneByFkProductAbstract(int $fk_product_abstract) Return the first ChildSpyGiftCardProductAbstractConfigurationLink filtered by the fk_product_abstract column
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyGiftCardProductAbstractConfigurationLink by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink requireOne(?ConnectionInterface $con = null) Return the first ChildSpyGiftCardProductAbstractConfigurationLink matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink requireOneByIdGiftCardProductAbstractConfigurationLink(int $id_gift_card_product_abstract_configuration_link) Return the first ChildSpyGiftCardProductAbstractConfigurationLink filtered by the id_gift_card_product_abstract_configuration_link column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink requireOneByFkGiftCardProductAbstractConfiguration(int $fk_gift_card_product_abstract_configuration) Return the first ChildSpyGiftCardProductAbstractConfigurationLink filtered by the fk_gift_card_product_abstract_configuration column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink requireOneByFkProductAbstract(int $fk_product_abstract) Return the first ChildSpyGiftCardProductAbstractConfigurationLink filtered by the fk_product_abstract column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyGiftCardProductAbstractConfigurationLink objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardProductAbstractConfigurationLink> find(?ConnectionInterface $con = null) Return ChildSpyGiftCardProductAbstractConfigurationLink objects based on current ModelCriteria
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink[]|Collection findByIdGiftCardProductAbstractConfigurationLink(int|array<int> $id_gift_card_product_abstract_configuration_link) Return ChildSpyGiftCardProductAbstractConfigurationLink objects filtered by the id_gift_card_product_abstract_configuration_link column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardProductAbstractConfigurationLink> findByIdGiftCardProductAbstractConfigurationLink(int|array<int> $id_gift_card_product_abstract_configuration_link) Return ChildSpyGiftCardProductAbstractConfigurationLink objects filtered by the id_gift_card_product_abstract_configuration_link column
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink[]|Collection findByFkGiftCardProductAbstractConfiguration(int|array<int> $fk_gift_card_product_abstract_configuration) Return ChildSpyGiftCardProductAbstractConfigurationLink objects filtered by the fk_gift_card_product_abstract_configuration column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardProductAbstractConfigurationLink> findByFkGiftCardProductAbstractConfiguration(int|array<int> $fk_gift_card_product_abstract_configuration) Return ChildSpyGiftCardProductAbstractConfigurationLink objects filtered by the fk_gift_card_product_abstract_configuration column
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink[]|Collection findByFkProductAbstract(int|array<int> $fk_product_abstract) Return ChildSpyGiftCardProductAbstractConfigurationLink objects filtered by the fk_product_abstract column
 * @psalm-method Collection&\Traversable<ChildSpyGiftCardProductAbstractConfigurationLink> findByFkProductAbstract(int|array<int> $fk_product_abstract) Return ChildSpyGiftCardProductAbstractConfigurationLink objects filtered by the fk_product_abstract column
 *
 * @method     ChildSpyGiftCardProductAbstractConfigurationLink[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyGiftCardProductAbstractConfigurationLink> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyGiftCardProductAbstractConfigurationLinkQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\GiftCard\Persistence\Base\SpyGiftCardProductAbstractConfigurationLinkQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\GiftCard\\Persistence\\SpyGiftCardProductAbstractConfigurationLink', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyGiftCardProductAbstractConfigurationLinkQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyGiftCardProductAbstractConfigurationLinkQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyGiftCardProductAbstractConfigurationLinkQuery) {
            return $criteria;
        }
        $query = new ChildSpyGiftCardProductAbstractConfigurationLinkQuery();
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
     * @return ChildSpyGiftCardProductAbstractConfigurationLink|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyGiftCardProductAbstractConfigurationLinkTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyGiftCardProductAbstractConfigurationLink A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_gift_card_product_abstract_configuration_link, fk_gift_card_product_abstract_configuration, fk_product_abstract FROM spy_gift_card_product_abstract_configuration_link WHERE id_gift_card_product_abstract_configuration_link = :p0';
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
            /** @var ChildSpyGiftCardProductAbstractConfigurationLink $obj */
            $obj = new ChildSpyGiftCardProductAbstractConfigurationLink();
            $obj->hydrate($row);
            SpyGiftCardProductAbstractConfigurationLinkTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyGiftCardProductAbstractConfigurationLink|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idGiftCardProductAbstractConfigurationLink Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdGiftCardProductAbstractConfigurationLink_Between(array $idGiftCardProductAbstractConfigurationLink)
    {
        return $this->filterByIdGiftCardProductAbstractConfigurationLink($idGiftCardProductAbstractConfigurationLink, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idGiftCardProductAbstractConfigurationLinks Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdGiftCardProductAbstractConfigurationLink_In(array $idGiftCardProductAbstractConfigurationLinks)
    {
        return $this->filterByIdGiftCardProductAbstractConfigurationLink($idGiftCardProductAbstractConfigurationLinks, Criteria::IN);
    }

    /**
     * Filter the query on the id_gift_card_product_abstract_configuration_link column
     *
     * Example usage:
     * <code>
     * $query->filterByIdGiftCardProductAbstractConfigurationLink(1234); // WHERE id_gift_card_product_abstract_configuration_link = 1234
     * $query->filterByIdGiftCardProductAbstractConfigurationLink(array(12, 34), Criteria::IN); // WHERE id_gift_card_product_abstract_configuration_link IN (12, 34)
     * $query->filterByIdGiftCardProductAbstractConfigurationLink(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_gift_card_product_abstract_configuration_link > 12
     * </code>
     *
     * @param     mixed $idGiftCardProductAbstractConfigurationLink The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdGiftCardProductAbstractConfigurationLink($idGiftCardProductAbstractConfigurationLink = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idGiftCardProductAbstractConfigurationLink)) {
            $useMinMax = false;
            if (isset($idGiftCardProductAbstractConfigurationLink['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK, $idGiftCardProductAbstractConfigurationLink['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGiftCardProductAbstractConfigurationLink['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK, $idGiftCardProductAbstractConfigurationLink['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idGiftCardProductAbstractConfigurationLink of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK, $idGiftCardProductAbstractConfigurationLink, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkGiftCardProductAbstractConfiguration Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkGiftCardProductAbstractConfiguration_Between(array $fkGiftCardProductAbstractConfiguration)
    {
        return $this->filterByFkGiftCardProductAbstractConfiguration($fkGiftCardProductAbstractConfiguration, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkGiftCardProductAbstractConfigurations Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkGiftCardProductAbstractConfiguration_In(array $fkGiftCardProductAbstractConfigurations)
    {
        return $this->filterByFkGiftCardProductAbstractConfiguration($fkGiftCardProductAbstractConfigurations, Criteria::IN);
    }

    /**
     * Filter the query on the fk_gift_card_product_abstract_configuration column
     *
     * Example usage:
     * <code>
     * $query->filterByFkGiftCardProductAbstractConfiguration(1234); // WHERE fk_gift_card_product_abstract_configuration = 1234
     * $query->filterByFkGiftCardProductAbstractConfiguration(array(12, 34), Criteria::IN); // WHERE fk_gift_card_product_abstract_configuration IN (12, 34)
     * $query->filterByFkGiftCardProductAbstractConfiguration(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_gift_card_product_abstract_configuration > 12
     * </code>
     *
     * @see       filterBySpyGiftCardProductAbstractConfiguration()
     *
     * @param     mixed $fkGiftCardProductAbstractConfiguration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkGiftCardProductAbstractConfiguration($fkGiftCardProductAbstractConfiguration = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkGiftCardProductAbstractConfiguration)) {
            $useMinMax = false;
            if (isset($fkGiftCardProductAbstractConfiguration['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_FK_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $fkGiftCardProductAbstractConfiguration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkGiftCardProductAbstractConfiguration['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_FK_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $fkGiftCardProductAbstractConfiguration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkGiftCardProductAbstractConfiguration of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_FK_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $fkGiftCardProductAbstractConfiguration, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProductAbstract Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAbstract_Between(array $fkProductAbstract)
    {
        return $this->filterByFkProductAbstract($fkProductAbstract, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProductAbstracts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAbstract_In(array $fkProductAbstracts)
    {
        return $this->filterByFkProductAbstract($fkProductAbstracts, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product_abstract column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProductAbstract(1234); // WHERE fk_product_abstract = 1234
     * $query->filterByFkProductAbstract(array(12, 34), Criteria::IN); // WHERE fk_product_abstract IN (12, 34)
     * $query->filterByFkProductAbstract(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product_abstract > 12
     * </code>
     *
     * @see       filterBySpyProductAbstract()
     *
     * @param     mixed $fkProductAbstract The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProductAbstract($fkProductAbstract = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProductAbstract)) {
            $useMinMax = false;
            if (isset($fkProductAbstract['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_FK_PRODUCT_ABSTRACT, $fkProductAbstract['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductAbstract['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_FK_PRODUCT_ABSTRACT, $fkProductAbstract['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductAbstract of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_FK_PRODUCT_ABSTRACT, $fkProductAbstract, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Product\Persistence\SpyProductAbstract object
     *
     * @param \Orm\Zed\Product\Persistence\SpyProductAbstract|ObjectCollection $spyProductAbstract The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyProductAbstract($spyProductAbstract, ?string $comparison = null)
    {
        if ($spyProductAbstract instanceof \Orm\Zed\Product\Persistence\SpyProductAbstract) {
            return $this
                ->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_FK_PRODUCT_ABSTRACT, $spyProductAbstract->getIdProductAbstract(), $comparison);
        } elseif ($spyProductAbstract instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_FK_PRODUCT_ABSTRACT, $spyProductAbstract->toKeyValue('PrimaryKey', 'IdProductAbstract'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyProductAbstract() only accepts arguments of type \Orm\Zed\Product\Persistence\SpyProductAbstract or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductAbstract relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyProductAbstract(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductAbstract');

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
            $this->addJoinObject($join, 'SpyProductAbstract');
        }

        return $this;
    }

    /**
     * Use the SpyProductAbstract relation SpyProductAbstract object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductAbstractQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductAbstract($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductAbstract', '\Orm\Zed\Product\Persistence\SpyProductAbstractQuery');
    }

    /**
     * Use the SpyProductAbstract relation SpyProductAbstract object
     *
     * @param callable(\Orm\Zed\Product\Persistence\SpyProductAbstractQuery):\Orm\Zed\Product\Persistence\SpyProductAbstractQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductAbstractQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductAbstractQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyProductAbstract table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductAbstractExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAbstractQuery */
        $q = $this->useExistsQuery('SpyProductAbstract', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyProductAbstract table for a NOT EXISTS query.
     *
     * @see useSpyProductAbstractExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductAbstractNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAbstractQuery */
        $q = $this->useExistsQuery('SpyProductAbstract', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyProductAbstract table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery The inner query object of the IN statement
     */
    public function useInSpyProductAbstractQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAbstractQuery */
        $q = $this->useInQuery('SpyProductAbstract', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyProductAbstract table for a NOT IN query.
     *
     * @see useSpyProductAbstractInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyProductAbstractQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAbstractQuery */
        $q = $this->useInQuery('SpyProductAbstract', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfiguration object
     *
     * @param \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfiguration|ObjectCollection $spyGiftCardProductAbstractConfiguration The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyGiftCardProductAbstractConfiguration($spyGiftCardProductAbstractConfiguration, ?string $comparison = null)
    {
        if ($spyGiftCardProductAbstractConfiguration instanceof \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfiguration) {
            return $this
                ->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_FK_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $spyGiftCardProductAbstractConfiguration->getIdGiftCardProductAbstractConfiguration(), $comparison);
        } elseif ($spyGiftCardProductAbstractConfiguration instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_FK_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION, $spyGiftCardProductAbstractConfiguration->toKeyValue('PrimaryKey', 'IdGiftCardProductAbstractConfiguration'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyGiftCardProductAbstractConfiguration() only accepts arguments of type \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfiguration or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyGiftCardProductAbstractConfiguration relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyGiftCardProductAbstractConfiguration(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyGiftCardProductAbstractConfiguration');

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
            $this->addJoinObject($join, 'SpyGiftCardProductAbstractConfiguration');
        }

        return $this;
    }

    /**
     * Use the SpyGiftCardProductAbstractConfiguration relation SpyGiftCardProductAbstractConfiguration object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery A secondary query class using the current class as primary query
     */
    public function useSpyGiftCardProductAbstractConfigurationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyGiftCardProductAbstractConfiguration($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyGiftCardProductAbstractConfiguration', '\Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery');
    }

    /**
     * Use the SpyGiftCardProductAbstractConfiguration relation SpyGiftCardProductAbstractConfiguration object
     *
     * @param callable(\Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery):\Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyGiftCardProductAbstractConfigurationQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyGiftCardProductAbstractConfigurationQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyGiftCardProductAbstractConfiguration table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery The inner query object of the EXISTS statement
     */
    public function useSpyGiftCardProductAbstractConfigurationExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery */
        $q = $this->useExistsQuery('SpyGiftCardProductAbstractConfiguration', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyGiftCardProductAbstractConfiguration table for a NOT EXISTS query.
     *
     * @see useSpyGiftCardProductAbstractConfigurationExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyGiftCardProductAbstractConfigurationNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery */
        $q = $this->useExistsQuery('SpyGiftCardProductAbstractConfiguration', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyGiftCardProductAbstractConfiguration table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery The inner query object of the IN statement
     */
    public function useInSpyGiftCardProductAbstractConfigurationQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery */
        $q = $this->useInQuery('SpyGiftCardProductAbstractConfiguration', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyGiftCardProductAbstractConfiguration table for a NOT IN query.
     *
     * @see useSpyGiftCardProductAbstractConfigurationInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyGiftCardProductAbstractConfigurationQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationQuery */
        $q = $this->useInQuery('SpyGiftCardProductAbstractConfiguration', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyGiftCardProductAbstractConfigurationLink $spyGiftCardProductAbstractConfigurationLink Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyGiftCardProductAbstractConfigurationLink = null)
    {
        if ($spyGiftCardProductAbstractConfigurationLink) {
            $this->addUsingAlias(SpyGiftCardProductAbstractConfigurationLinkTableMap::COL_ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK, $spyGiftCardProductAbstractConfigurationLink->getIdGiftCardProductAbstractConfigurationLink(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_gift_card_product_abstract_configuration_link table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardProductAbstractConfigurationLinkTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyGiftCardProductAbstractConfigurationLinkTableMap::clearInstancePool();
            SpyGiftCardProductAbstractConfigurationLinkTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGiftCardProductAbstractConfigurationLinkTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyGiftCardProductAbstractConfigurationLinkTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyGiftCardProductAbstractConfigurationLinkTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyGiftCardProductAbstractConfigurationLinkTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
