<?php

namespace Orm\Zed\Wishlist\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Product\Persistence\SpyProduct;
use Orm\Zed\Wishlist\Persistence\SpyWishlistItem as ChildSpyWishlistItem;
use Orm\Zed\Wishlist\Persistence\SpyWishlistItemQuery as ChildSpyWishlistItemQuery;
use Orm\Zed\Wishlist\Persistence\Map\SpyWishlistItemTableMap;
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
 * Base class that represents a query for the `spy_wishlist_item` table.
 *
 * @method     ChildSpyWishlistItemQuery orderByIdWishlistItem($order = Criteria::ASC) Order by the id_wishlist_item column
 * @method     ChildSpyWishlistItemQuery orderByFkWishlist($order = Criteria::ASC) Order by the fk_wishlist column
 * @method     ChildSpyWishlistItemQuery orderByProductConfigurationInstanceData($order = Criteria::ASC) Order by the product_configuration_instance_data column
 * @method     ChildSpyWishlistItemQuery orderBySku($order = Criteria::ASC) Order by the sku column
 * @method     ChildSpyWishlistItemQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyWishlistItemQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyWishlistItemQuery groupByIdWishlistItem() Group by the id_wishlist_item column
 * @method     ChildSpyWishlistItemQuery groupByFkWishlist() Group by the fk_wishlist column
 * @method     ChildSpyWishlistItemQuery groupByProductConfigurationInstanceData() Group by the product_configuration_instance_data column
 * @method     ChildSpyWishlistItemQuery groupBySku() Group by the sku column
 * @method     ChildSpyWishlistItemQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyWishlistItemQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyWishlistItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyWishlistItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyWishlistItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyWishlistItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyWishlistItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyWishlistItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyWishlistItemQuery leftJoinSpyWishlist($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyWishlist relation
 * @method     ChildSpyWishlistItemQuery rightJoinSpyWishlist($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyWishlist relation
 * @method     ChildSpyWishlistItemQuery innerJoinSpyWishlist($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyWishlist relation
 *
 * @method     ChildSpyWishlistItemQuery joinWithSpyWishlist($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyWishlist relation
 *
 * @method     ChildSpyWishlistItemQuery leftJoinWithSpyWishlist() Adds a LEFT JOIN clause and with to the query using the SpyWishlist relation
 * @method     ChildSpyWishlistItemQuery rightJoinWithSpyWishlist() Adds a RIGHT JOIN clause and with to the query using the SpyWishlist relation
 * @method     ChildSpyWishlistItemQuery innerJoinWithSpyWishlist() Adds a INNER JOIN clause and with to the query using the SpyWishlist relation
 *
 * @method     ChildSpyWishlistItemQuery leftJoinSpyProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProduct relation
 * @method     ChildSpyWishlistItemQuery rightJoinSpyProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProduct relation
 * @method     ChildSpyWishlistItemQuery innerJoinSpyProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProduct relation
 *
 * @method     ChildSpyWishlistItemQuery joinWithSpyProduct($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProduct relation
 *
 * @method     ChildSpyWishlistItemQuery leftJoinWithSpyProduct() Adds a LEFT JOIN clause and with to the query using the SpyProduct relation
 * @method     ChildSpyWishlistItemQuery rightJoinWithSpyProduct() Adds a RIGHT JOIN clause and with to the query using the SpyProduct relation
 * @method     ChildSpyWishlistItemQuery innerJoinWithSpyProduct() Adds a INNER JOIN clause and with to the query using the SpyProduct relation
 *
 * @method     \Orm\Zed\Wishlist\Persistence\SpyWishlistQuery|\Orm\Zed\Product\Persistence\SpyProductQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyWishlistItem|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyWishlistItem matching the query
 * @method     ChildSpyWishlistItem findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyWishlistItem matching the query, or a new ChildSpyWishlistItem object populated from the query conditions when no match is found
 *
 * @method     ChildSpyWishlistItem|null findOneByIdWishlistItem(int $id_wishlist_item) Return the first ChildSpyWishlistItem filtered by the id_wishlist_item column
 * @method     ChildSpyWishlistItem|null findOneByFkWishlist(int $fk_wishlist) Return the first ChildSpyWishlistItem filtered by the fk_wishlist column
 * @method     ChildSpyWishlistItem|null findOneByProductConfigurationInstanceData(string $product_configuration_instance_data) Return the first ChildSpyWishlistItem filtered by the product_configuration_instance_data column
 * @method     ChildSpyWishlistItem|null findOneBySku(string $sku) Return the first ChildSpyWishlistItem filtered by the sku column
 * @method     ChildSpyWishlistItem|null findOneByCreatedAt(string $created_at) Return the first ChildSpyWishlistItem filtered by the created_at column
 * @method     ChildSpyWishlistItem|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyWishlistItem filtered by the updated_at column
 *
 * @method     ChildSpyWishlistItem requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyWishlistItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyWishlistItem requireOne(?ConnectionInterface $con = null) Return the first ChildSpyWishlistItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyWishlistItem requireOneByIdWishlistItem(int $id_wishlist_item) Return the first ChildSpyWishlistItem filtered by the id_wishlist_item column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyWishlistItem requireOneByFkWishlist(int $fk_wishlist) Return the first ChildSpyWishlistItem filtered by the fk_wishlist column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyWishlistItem requireOneByProductConfigurationInstanceData(string $product_configuration_instance_data) Return the first ChildSpyWishlistItem filtered by the product_configuration_instance_data column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyWishlistItem requireOneBySku(string $sku) Return the first ChildSpyWishlistItem filtered by the sku column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyWishlistItem requireOneByCreatedAt(string $created_at) Return the first ChildSpyWishlistItem filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyWishlistItem requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyWishlistItem filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyWishlistItem[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyWishlistItem objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyWishlistItem> find(?ConnectionInterface $con = null) Return ChildSpyWishlistItem objects based on current ModelCriteria
 *
 * @method     ChildSpyWishlistItem[]|Collection findByIdWishlistItem(int|array<int> $id_wishlist_item) Return ChildSpyWishlistItem objects filtered by the id_wishlist_item column
 * @psalm-method Collection&\Traversable<ChildSpyWishlistItem> findByIdWishlistItem(int|array<int> $id_wishlist_item) Return ChildSpyWishlistItem objects filtered by the id_wishlist_item column
 * @method     ChildSpyWishlistItem[]|Collection findByFkWishlist(int|array<int> $fk_wishlist) Return ChildSpyWishlistItem objects filtered by the fk_wishlist column
 * @psalm-method Collection&\Traversable<ChildSpyWishlistItem> findByFkWishlist(int|array<int> $fk_wishlist) Return ChildSpyWishlistItem objects filtered by the fk_wishlist column
 * @method     ChildSpyWishlistItem[]|Collection findByProductConfigurationInstanceData(string|array<string> $product_configuration_instance_data) Return ChildSpyWishlistItem objects filtered by the product_configuration_instance_data column
 * @psalm-method Collection&\Traversable<ChildSpyWishlistItem> findByProductConfigurationInstanceData(string|array<string> $product_configuration_instance_data) Return ChildSpyWishlistItem objects filtered by the product_configuration_instance_data column
 * @method     ChildSpyWishlistItem[]|Collection findBySku(string|array<string> $sku) Return ChildSpyWishlistItem objects filtered by the sku column
 * @psalm-method Collection&\Traversable<ChildSpyWishlistItem> findBySku(string|array<string> $sku) Return ChildSpyWishlistItem objects filtered by the sku column
 * @method     ChildSpyWishlistItem[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpyWishlistItem objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpyWishlistItem> findByCreatedAt(string|array<string> $created_at) Return ChildSpyWishlistItem objects filtered by the created_at column
 * @method     ChildSpyWishlistItem[]|Collection findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyWishlistItem objects filtered by the updated_at column
 * @psalm-method Collection&\Traversable<ChildSpyWishlistItem> findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyWishlistItem objects filtered by the updated_at column
 *
 * @method     ChildSpyWishlistItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyWishlistItem> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyWishlistItemQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Wishlist\Persistence\Base\SpyWishlistItemQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Wishlist\\Persistence\\SpyWishlistItem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyWishlistItemQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyWishlistItemQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyWishlistItemQuery) {
            return $criteria;
        }
        $query = new ChildSpyWishlistItemQuery();
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
     * @return ChildSpyWishlistItem|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyWishlistItemTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyWishlistItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_wishlist_item, fk_wishlist, product_configuration_instance_data, sku, created_at, updated_at FROM spy_wishlist_item WHERE id_wishlist_item = :p0';
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
            /** @var ChildSpyWishlistItem $obj */
            $obj = new ChildSpyWishlistItem();
            $obj->hydrate($row);
            SpyWishlistItemTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyWishlistItem|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idWishlistItem Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdWishlistItem_Between(array $idWishlistItem)
    {
        return $this->filterByIdWishlistItem($idWishlistItem, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idWishlistItems Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdWishlistItem_In(array $idWishlistItems)
    {
        return $this->filterByIdWishlistItem($idWishlistItems, Criteria::IN);
    }

    /**
     * Filter the query on the id_wishlist_item column
     *
     * Example usage:
     * <code>
     * $query->filterByIdWishlistItem(1234); // WHERE id_wishlist_item = 1234
     * $query->filterByIdWishlistItem(array(12, 34), Criteria::IN); // WHERE id_wishlist_item IN (12, 34)
     * $query->filterByIdWishlistItem(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_wishlist_item > 12
     * </code>
     *
     * @param     mixed $idWishlistItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdWishlistItem($idWishlistItem = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idWishlistItem)) {
            $useMinMax = false;
            if (isset($idWishlistItem['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM, $idWishlistItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idWishlistItem['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM, $idWishlistItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idWishlistItem of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM, $idWishlistItem, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkWishlist Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkWishlist_Between(array $fkWishlist)
    {
        return $this->filterByFkWishlist($fkWishlist, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkWishlists Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkWishlist_In(array $fkWishlists)
    {
        return $this->filterByFkWishlist($fkWishlists, Criteria::IN);
    }

    /**
     * Filter the query on the fk_wishlist column
     *
     * Example usage:
     * <code>
     * $query->filterByFkWishlist(1234); // WHERE fk_wishlist = 1234
     * $query->filterByFkWishlist(array(12, 34), Criteria::IN); // WHERE fk_wishlist IN (12, 34)
     * $query->filterByFkWishlist(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_wishlist > 12
     * </code>
     *
     * @see       filterBySpyWishlist()
     *
     * @param     mixed $fkWishlist The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkWishlist($fkWishlist = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkWishlist)) {
            $useMinMax = false;
            if (isset($fkWishlist['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyWishlistItemTableMap::COL_FK_WISHLIST, $fkWishlist['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkWishlist['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyWishlistItemTableMap::COL_FK_WISHLIST, $fkWishlist['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkWishlist of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyWishlistItemTableMap::COL_FK_WISHLIST, $fkWishlist, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $productConfigurationInstanceDatas Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByProductConfigurationInstanceData_In(array $productConfigurationInstanceDatas)
    {
        return $this->filterByProductConfigurationInstanceData($productConfigurationInstanceDatas, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $productConfigurationInstanceData Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByProductConfigurationInstanceData_Like($productConfigurationInstanceData)
    {
        return $this->filterByProductConfigurationInstanceData($productConfigurationInstanceData, Criteria::LIKE);
    }

    /**
     * Filter the query on the product_configuration_instance_data column
     *
     * Example usage:
     * <code>
     * $query->filterByProductConfigurationInstanceData('fooValue');   // WHERE product_configuration_instance_data = 'fooValue'
     * $query->filterByProductConfigurationInstanceData('%fooValue%', Criteria::LIKE); // WHERE product_configuration_instance_data LIKE '%fooValue%'
     * $query->filterByProductConfigurationInstanceData([1, 'foo'], Criteria::IN); // WHERE product_configuration_instance_data IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $productConfigurationInstanceData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByProductConfigurationInstanceData($productConfigurationInstanceData = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $productConfigurationInstanceData = str_replace('*', '%', $productConfigurationInstanceData);
        }

        if (is_array($productConfigurationInstanceData) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$productConfigurationInstanceData of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyWishlistItemTableMap::COL_PRODUCT_CONFIGURATION_INSTANCE_DATA, $productConfigurationInstanceData, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $skus Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySku_In(array $skus)
    {
        return $this->filterBySku($skus, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $sku Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySku_Like($sku)
    {
        return $this->filterBySku($sku, Criteria::LIKE);
    }

    /**
     * Filter the query on the sku column
     *
     * Example usage:
     * <code>
     * $query->filterBySku('fooValue');   // WHERE sku = 'fooValue'
     * $query->filterBySku('%fooValue%', Criteria::LIKE); // WHERE sku LIKE '%fooValue%'
     * $query->filterBySku([1, 'foo'], Criteria::IN); // WHERE sku IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $sku The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterBySku($sku = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $sku = str_replace('*', '%', $sku);
        }

        if (is_array($sku) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$sku of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyWishlistItemTableMap::COL_SKU, $sku, $comparison);

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
                $this->addUsingAlias(SpyWishlistItemTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyWishlistItemTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyWishlistItemTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyWishlistItemTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyWishlistItemTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyWishlistItemTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Wishlist\Persistence\SpyWishlist object
     *
     * @param \Orm\Zed\Wishlist\Persistence\SpyWishlist|ObjectCollection $spyWishlist The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyWishlist($spyWishlist, ?string $comparison = null)
    {
        if ($spyWishlist instanceof \Orm\Zed\Wishlist\Persistence\SpyWishlist) {
            return $this
                ->addUsingAlias(SpyWishlistItemTableMap::COL_FK_WISHLIST, $spyWishlist->getIdWishlist(), $comparison);
        } elseif ($spyWishlist instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyWishlistItemTableMap::COL_FK_WISHLIST, $spyWishlist->toKeyValue('PrimaryKey', 'IdWishlist'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyWishlist() only accepts arguments of type \Orm\Zed\Wishlist\Persistence\SpyWishlist or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyWishlist relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyWishlist(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyWishlist');

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
            $this->addJoinObject($join, 'SpyWishlist');
        }

        return $this;
    }

    /**
     * Use the SpyWishlist relation SpyWishlist object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Wishlist\Persistence\SpyWishlistQuery A secondary query class using the current class as primary query
     */
    public function useSpyWishlistQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyWishlist($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyWishlist', '\Orm\Zed\Wishlist\Persistence\SpyWishlistQuery');
    }

    /**
     * Use the SpyWishlist relation SpyWishlist object
     *
     * @param callable(\Orm\Zed\Wishlist\Persistence\SpyWishlistQuery):\Orm\Zed\Wishlist\Persistence\SpyWishlistQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyWishlistQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyWishlistQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyWishlist table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Wishlist\Persistence\SpyWishlistQuery The inner query object of the EXISTS statement
     */
    public function useSpyWishlistExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Wishlist\Persistence\SpyWishlistQuery */
        $q = $this->useExistsQuery('SpyWishlist', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyWishlist table for a NOT EXISTS query.
     *
     * @see useSpyWishlistExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Wishlist\Persistence\SpyWishlistQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyWishlistNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Wishlist\Persistence\SpyWishlistQuery */
        $q = $this->useExistsQuery('SpyWishlist', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyWishlist table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Wishlist\Persistence\SpyWishlistQuery The inner query object of the IN statement
     */
    public function useInSpyWishlistQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Wishlist\Persistence\SpyWishlistQuery */
        $q = $this->useInQuery('SpyWishlist', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyWishlist table for a NOT IN query.
     *
     * @see useSpyWishlistInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Wishlist\Persistence\SpyWishlistQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyWishlistQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Wishlist\Persistence\SpyWishlistQuery */
        $q = $this->useInQuery('SpyWishlist', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\Product\Persistence\SpyProduct object
     *
     * @param \Orm\Zed\Product\Persistence\SpyProduct|ObjectCollection $spyProduct The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyProduct($spyProduct, ?string $comparison = null)
    {
        if ($spyProduct instanceof \Orm\Zed\Product\Persistence\SpyProduct) {
            return $this
                ->addUsingAlias(SpyWishlistItemTableMap::COL_SKU, $spyProduct->getSku(), $comparison);
        } elseif ($spyProduct instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyWishlistItemTableMap::COL_SKU, $spyProduct->toKeyValue('PrimaryKey', 'Sku'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyProduct() only accepts arguments of type \Orm\Zed\Product\Persistence\SpyProduct or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProduct relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyProduct(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProduct');

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
            $this->addJoinObject($join, 'SpyProduct');
        }

        return $this;
    }

    /**
     * Use the SpyProduct relation SpyProduct object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProduct($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProduct', '\Orm\Zed\Product\Persistence\SpyProductQuery');
    }

    /**
     * Use the SpyProduct relation SpyProduct object
     *
     * @param callable(\Orm\Zed\Product\Persistence\SpyProductQuery):\Orm\Zed\Product\Persistence\SpyProductQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyProduct table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductQuery */
        $q = $this->useExistsQuery('SpyProduct', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyProduct table for a NOT EXISTS query.
     *
     * @see useSpyProductExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductQuery */
        $q = $this->useExistsQuery('SpyProduct', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyProduct table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery The inner query object of the IN statement
     */
    public function useInSpyProductQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductQuery */
        $q = $this->useInQuery('SpyProduct', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyProduct table for a NOT IN query.
     *
     * @see useSpyProductInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyProductQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductQuery */
        $q = $this->useInQuery('SpyProduct', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyWishlistItem $spyWishlistItem Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyWishlistItem = null)
    {
        if ($spyWishlistItem) {
            $this->addUsingAlias(SpyWishlistItemTableMap::COL_ID_WISHLIST_ITEM, $spyWishlistItem->getIdWishlistItem(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_wishlist_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyWishlistItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyWishlistItemTableMap::clearInstancePool();
            SpyWishlistItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyWishlistItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyWishlistItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyWishlistItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyWishlistItemTableMap::clearRelatedInstancePool();

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
        $this->addUsingAlias(SpyWishlistItemTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by update date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyWishlistItemTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by update date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyWishlistItemTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by create date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyWishlistItemTableMap::COL_CREATED_AT);

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
        $this->addUsingAlias(SpyWishlistItemTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyWishlistItemTableMap::COL_CREATED_AT);

        return $this;
    }

}
