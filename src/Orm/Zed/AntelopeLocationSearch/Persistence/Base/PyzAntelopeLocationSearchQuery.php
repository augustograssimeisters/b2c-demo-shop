<?php

namespace Orm\Zed\AntelopeLocationSearch\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\AntelopeLocationSearch\Persistence\PyzAntelopeLocationSearch as ChildPyzAntelopeLocationSearch;
use Orm\Zed\AntelopeLocationSearch\Persistence\PyzAntelopeLocationSearchQuery as ChildPyzAntelopeLocationSearchQuery;
use Orm\Zed\AntelopeLocationSearch\Persistence\Map\PyzAntelopeLocationSearchTableMap;
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
 * Base class that represents a query for the `pyz_antelope_location_search` table.
 *
 * @method     ChildPyzAntelopeLocationSearchQuery orderByIdAntelopeLocationSearch($order = Criteria::ASC) Order by the id_antelope_location_search column
 * @method     ChildPyzAntelopeLocationSearchQuery orderByFkAntelopeLocation($order = Criteria::ASC) Order by the fk_antelope_location column
 * @method     ChildPyzAntelopeLocationSearchQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildPyzAntelopeLocationSearchQuery orderByLocation($order = Criteria::ASC) Order by the location column
 * @method     ChildPyzAntelopeLocationSearchQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     ChildPyzAntelopeLocationSearchQuery groupByIdAntelopeLocationSearch() Group by the id_antelope_location_search column
 * @method     ChildPyzAntelopeLocationSearchQuery groupByFkAntelopeLocation() Group by the fk_antelope_location column
 * @method     ChildPyzAntelopeLocationSearchQuery groupByName() Group by the name column
 * @method     ChildPyzAntelopeLocationSearchQuery groupByLocation() Group by the location column
 * @method     ChildPyzAntelopeLocationSearchQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     ChildPyzAntelopeLocationSearchQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPyzAntelopeLocationSearchQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPyzAntelopeLocationSearchQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPyzAntelopeLocationSearchQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPyzAntelopeLocationSearchQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPyzAntelopeLocationSearchQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPyzAntelopeLocationSearch|null findOne(?ConnectionInterface $con = null) Return the first ChildPyzAntelopeLocationSearch matching the query
 * @method     ChildPyzAntelopeLocationSearch findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildPyzAntelopeLocationSearch matching the query, or a new ChildPyzAntelopeLocationSearch object populated from the query conditions when no match is found
 *
 * @method     ChildPyzAntelopeLocationSearch|null findOneByIdAntelopeLocationSearch(int $id_antelope_location_search) Return the first ChildPyzAntelopeLocationSearch filtered by the id_antelope_location_search column
 * @method     ChildPyzAntelopeLocationSearch|null findOneByFkAntelopeLocation(int $fk_antelope_location) Return the first ChildPyzAntelopeLocationSearch filtered by the fk_antelope_location column
 * @method     ChildPyzAntelopeLocationSearch|null findOneByName(string $name) Return the first ChildPyzAntelopeLocationSearch filtered by the name column
 * @method     ChildPyzAntelopeLocationSearch|null findOneByLocation(string $location) Return the first ChildPyzAntelopeLocationSearch filtered by the location column
 * @method     ChildPyzAntelopeLocationSearch|null findOneByCreatedAt(string $created_at) Return the first ChildPyzAntelopeLocationSearch filtered by the created_at column
 *
 * @method     ChildPyzAntelopeLocationSearch requirePk($key, ?ConnectionInterface $con = null) Return the ChildPyzAntelopeLocationSearch by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzAntelopeLocationSearch requireOne(?ConnectionInterface $con = null) Return the first ChildPyzAntelopeLocationSearch matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPyzAntelopeLocationSearch requireOneByIdAntelopeLocationSearch(int $id_antelope_location_search) Return the first ChildPyzAntelopeLocationSearch filtered by the id_antelope_location_search column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzAntelopeLocationSearch requireOneByFkAntelopeLocation(int $fk_antelope_location) Return the first ChildPyzAntelopeLocationSearch filtered by the fk_antelope_location column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzAntelopeLocationSearch requireOneByName(string $name) Return the first ChildPyzAntelopeLocationSearch filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzAntelopeLocationSearch requireOneByLocation(string $location) Return the first ChildPyzAntelopeLocationSearch filtered by the location column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzAntelopeLocationSearch requireOneByCreatedAt(string $created_at) Return the first ChildPyzAntelopeLocationSearch filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPyzAntelopeLocationSearch[]|Collection find(?ConnectionInterface $con = null) Return ChildPyzAntelopeLocationSearch objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildPyzAntelopeLocationSearch> find(?ConnectionInterface $con = null) Return ChildPyzAntelopeLocationSearch objects based on current ModelCriteria
 *
 * @method     ChildPyzAntelopeLocationSearch[]|Collection findByIdAntelopeLocationSearch(int|array<int> $id_antelope_location_search) Return ChildPyzAntelopeLocationSearch objects filtered by the id_antelope_location_search column
 * @psalm-method Collection&\Traversable<ChildPyzAntelopeLocationSearch> findByIdAntelopeLocationSearch(int|array<int> $id_antelope_location_search) Return ChildPyzAntelopeLocationSearch objects filtered by the id_antelope_location_search column
 * @method     ChildPyzAntelopeLocationSearch[]|Collection findByFkAntelopeLocation(int|array<int> $fk_antelope_location) Return ChildPyzAntelopeLocationSearch objects filtered by the fk_antelope_location column
 * @psalm-method Collection&\Traversable<ChildPyzAntelopeLocationSearch> findByFkAntelopeLocation(int|array<int> $fk_antelope_location) Return ChildPyzAntelopeLocationSearch objects filtered by the fk_antelope_location column
 * @method     ChildPyzAntelopeLocationSearch[]|Collection findByName(string|array<string> $name) Return ChildPyzAntelopeLocationSearch objects filtered by the name column
 * @psalm-method Collection&\Traversable<ChildPyzAntelopeLocationSearch> findByName(string|array<string> $name) Return ChildPyzAntelopeLocationSearch objects filtered by the name column
 * @method     ChildPyzAntelopeLocationSearch[]|Collection findByLocation(string|array<string> $location) Return ChildPyzAntelopeLocationSearch objects filtered by the location column
 * @psalm-method Collection&\Traversable<ChildPyzAntelopeLocationSearch> findByLocation(string|array<string> $location) Return ChildPyzAntelopeLocationSearch objects filtered by the location column
 * @method     ChildPyzAntelopeLocationSearch[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildPyzAntelopeLocationSearch objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildPyzAntelopeLocationSearch> findByCreatedAt(string|array<string> $created_at) Return ChildPyzAntelopeLocationSearch objects filtered by the created_at column
 *
 * @method     ChildPyzAntelopeLocationSearch[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildPyzAntelopeLocationSearch> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class PyzAntelopeLocationSearchQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\AntelopeLocationSearch\Persistence\Base\PyzAntelopeLocationSearchQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\AntelopeLocationSearch\\Persistence\\PyzAntelopeLocationSearch', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPyzAntelopeLocationSearchQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPyzAntelopeLocationSearchQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildPyzAntelopeLocationSearchQuery) {
            return $criteria;
        }
        $query = new ChildPyzAntelopeLocationSearchQuery();
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
     * @return ChildPyzAntelopeLocationSearch|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = PyzAntelopeLocationSearchTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildPyzAntelopeLocationSearch A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_antelope_location_search, fk_antelope_location, name, location, created_at FROM pyz_antelope_location_search WHERE id_antelope_location_search = :p0';
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
            /** @var ChildPyzAntelopeLocationSearch $obj */
            $obj = new ChildPyzAntelopeLocationSearch();
            $obj->hydrate($row);
            PyzAntelopeLocationSearchTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildPyzAntelopeLocationSearch|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_ID_ANTELOPE_LOCATION_SEARCH, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_ID_ANTELOPE_LOCATION_SEARCH, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idAntelopeLocationSearch Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdAntelopeLocationSearch_Between(array $idAntelopeLocationSearch)
    {
        return $this->filterByIdAntelopeLocationSearch($idAntelopeLocationSearch, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idAntelopeLocationSearchs Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdAntelopeLocationSearch_In(array $idAntelopeLocationSearchs)
    {
        return $this->filterByIdAntelopeLocationSearch($idAntelopeLocationSearchs, Criteria::IN);
    }

    /**
     * Filter the query on the id_antelope_location_search column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAntelopeLocationSearch(1234); // WHERE id_antelope_location_search = 1234
     * $query->filterByIdAntelopeLocationSearch(array(12, 34), Criteria::IN); // WHERE id_antelope_location_search IN (12, 34)
     * $query->filterByIdAntelopeLocationSearch(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_antelope_location_search > 12
     * </code>
     *
     * @param     mixed $idAntelopeLocationSearch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdAntelopeLocationSearch($idAntelopeLocationSearch = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idAntelopeLocationSearch)) {
            $useMinMax = false;
            if (isset($idAntelopeLocationSearch['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_ID_ANTELOPE_LOCATION_SEARCH, $idAntelopeLocationSearch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAntelopeLocationSearch['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_ID_ANTELOPE_LOCATION_SEARCH, $idAntelopeLocationSearch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idAntelopeLocationSearch of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_ID_ANTELOPE_LOCATION_SEARCH, $idAntelopeLocationSearch, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkAntelopeLocation Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkAntelopeLocation_Between(array $fkAntelopeLocation)
    {
        return $this->filterByFkAntelopeLocation($fkAntelopeLocation, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkAntelopeLocations Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkAntelopeLocation_In(array $fkAntelopeLocations)
    {
        return $this->filterByFkAntelopeLocation($fkAntelopeLocations, Criteria::IN);
    }

    /**
     * Filter the query on the fk_antelope_location column
     *
     * Example usage:
     * <code>
     * $query->filterByFkAntelopeLocation(1234); // WHERE fk_antelope_location = 1234
     * $query->filterByFkAntelopeLocation(array(12, 34), Criteria::IN); // WHERE fk_antelope_location IN (12, 34)
     * $query->filterByFkAntelopeLocation(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_antelope_location > 12
     * </code>
     *
     * @param     mixed $fkAntelopeLocation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkAntelopeLocation($fkAntelopeLocation = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkAntelopeLocation)) {
            $useMinMax = false;
            if (isset($fkAntelopeLocation['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_FK_ANTELOPE_LOCATION, $fkAntelopeLocation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkAntelopeLocation['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_FK_ANTELOPE_LOCATION, $fkAntelopeLocation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkAntelopeLocation of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_FK_ANTELOPE_LOCATION, $fkAntelopeLocation, $comparison);

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

        $query = $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $locations Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLocation_In(array $locations)
    {
        return $this->filterByLocation($locations, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $location Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLocation_Like($location)
    {
        return $this->filterByLocation($location, Criteria::LIKE);
    }

    /**
     * Filter the query on the location column
     *
     * Example usage:
     * <code>
     * $query->filterByLocation('fooValue');   // WHERE location = 'fooValue'
     * $query->filterByLocation('%fooValue%', Criteria::LIKE); // WHERE location LIKE '%fooValue%'
     * $query->filterByLocation([1, 'foo'], Criteria::IN); // WHERE location IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $location The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByLocation($location = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $location = str_replace('*', '%', $location);
        }

        if (is_array($location) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$location of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_LOCATION, $location, $comparison);

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
                $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_CREATED_AT, $createdAt, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param ChildPyzAntelopeLocationSearch $pyzAntelopeLocationSearch Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($pyzAntelopeLocationSearch = null)
    {
        if ($pyzAntelopeLocationSearch) {
            $this->addUsingAlias(PyzAntelopeLocationSearchTableMap::COL_ID_ANTELOPE_LOCATION_SEARCH, $pyzAntelopeLocationSearch->getIdAntelopeLocationSearch(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the pyz_antelope_location_search table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PyzAntelopeLocationSearchTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PyzAntelopeLocationSearchTableMap::clearInstancePool();
            PyzAntelopeLocationSearchTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PyzAntelopeLocationSearchTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PyzAntelopeLocationSearchTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PyzAntelopeLocationSearchTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PyzAntelopeLocationSearchTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
