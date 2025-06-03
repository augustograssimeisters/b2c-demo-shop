<?php

namespace Orm\Zed\SalesShipmentType\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\SalesShipmentType\Persistence\SpySalesShipmentType as ChildSpySalesShipmentType;
use Orm\Zed\SalesShipmentType\Persistence\SpySalesShipmentTypeQuery as ChildSpySalesShipmentTypeQuery;
use Orm\Zed\SalesShipmentType\Persistence\Map\SpySalesShipmentTypeTableMap;
use Orm\Zed\Sales\Persistence\SpySalesShipment;
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
 * Base class that represents a query for the `spy_sales_shipment_type` table.
 *
 * @method     ChildSpySalesShipmentTypeQuery orderByIdSalesShipmentType($order = Criteria::ASC) Order by the id_sales_shipment_type column
 * @method     ChildSpySalesShipmentTypeQuery orderByKey($order = Criteria::ASC) Order by the key column
 * @method     ChildSpySalesShipmentTypeQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     ChildSpySalesShipmentTypeQuery groupByIdSalesShipmentType() Group by the id_sales_shipment_type column
 * @method     ChildSpySalesShipmentTypeQuery groupByKey() Group by the key column
 * @method     ChildSpySalesShipmentTypeQuery groupByName() Group by the name column
 *
 * @method     ChildSpySalesShipmentTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpySalesShipmentTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpySalesShipmentTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpySalesShipmentTypeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpySalesShipmentTypeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpySalesShipmentTypeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpySalesShipmentTypeQuery leftJoinSalesShipment($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesShipment relation
 * @method     ChildSpySalesShipmentTypeQuery rightJoinSalesShipment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesShipment relation
 * @method     ChildSpySalesShipmentTypeQuery innerJoinSalesShipment($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesShipment relation
 *
 * @method     ChildSpySalesShipmentTypeQuery joinWithSalesShipment($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesShipment relation
 *
 * @method     ChildSpySalesShipmentTypeQuery leftJoinWithSalesShipment() Adds a LEFT JOIN clause and with to the query using the SalesShipment relation
 * @method     ChildSpySalesShipmentTypeQuery rightJoinWithSalesShipment() Adds a RIGHT JOIN clause and with to the query using the SalesShipment relation
 * @method     ChildSpySalesShipmentTypeQuery innerJoinWithSalesShipment() Adds a INNER JOIN clause and with to the query using the SalesShipment relation
 *
 * @method     \Orm\Zed\Sales\Persistence\SpySalesShipmentQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpySalesShipmentType|null findOne(?ConnectionInterface $con = null) Return the first ChildSpySalesShipmentType matching the query
 * @method     ChildSpySalesShipmentType findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpySalesShipmentType matching the query, or a new ChildSpySalesShipmentType object populated from the query conditions when no match is found
 *
 * @method     ChildSpySalesShipmentType|null findOneByIdSalesShipmentType(int $id_sales_shipment_type) Return the first ChildSpySalesShipmentType filtered by the id_sales_shipment_type column
 * @method     ChildSpySalesShipmentType|null findOneByKey(string $key) Return the first ChildSpySalesShipmentType filtered by the key column
 * @method     ChildSpySalesShipmentType|null findOneByName(string $name) Return the first ChildSpySalesShipmentType filtered by the name column
 *
 * @method     ChildSpySalesShipmentType requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpySalesShipmentType by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipmentType requireOne(?ConnectionInterface $con = null) Return the first ChildSpySalesShipmentType matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesShipmentType requireOneByIdSalesShipmentType(int $id_sales_shipment_type) Return the first ChildSpySalesShipmentType filtered by the id_sales_shipment_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipmentType requireOneByKey(string $key) Return the first ChildSpySalesShipmentType filtered by the key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipmentType requireOneByName(string $name) Return the first ChildSpySalesShipmentType filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesShipmentType[]|Collection find(?ConnectionInterface $con = null) Return ChildSpySalesShipmentType objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpySalesShipmentType> find(?ConnectionInterface $con = null) Return ChildSpySalesShipmentType objects based on current ModelCriteria
 *
 * @method     ChildSpySalesShipmentType[]|Collection findByIdSalesShipmentType(int|array<int> $id_sales_shipment_type) Return ChildSpySalesShipmentType objects filtered by the id_sales_shipment_type column
 * @psalm-method Collection&\Traversable<ChildSpySalesShipmentType> findByIdSalesShipmentType(int|array<int> $id_sales_shipment_type) Return ChildSpySalesShipmentType objects filtered by the id_sales_shipment_type column
 * @method     ChildSpySalesShipmentType[]|Collection findByKey(string|array<string> $key) Return ChildSpySalesShipmentType objects filtered by the key column
 * @psalm-method Collection&\Traversable<ChildSpySalesShipmentType> findByKey(string|array<string> $key) Return ChildSpySalesShipmentType objects filtered by the key column
 * @method     ChildSpySalesShipmentType[]|Collection findByName(string|array<string> $name) Return ChildSpySalesShipmentType objects filtered by the name column
 * @psalm-method Collection&\Traversable<ChildSpySalesShipmentType> findByName(string|array<string> $name) Return ChildSpySalesShipmentType objects filtered by the name column
 *
 * @method     ChildSpySalesShipmentType[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpySalesShipmentType> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpySalesShipmentTypeQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\SalesShipmentType\Persistence\Base\SpySalesShipmentTypeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\SalesShipmentType\\Persistence\\SpySalesShipmentType', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpySalesShipmentTypeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpySalesShipmentTypeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpySalesShipmentTypeQuery) {
            return $criteria;
        }
        $query = new ChildSpySalesShipmentTypeQuery();
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
     * @return ChildSpySalesShipmentType|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpySalesShipmentTypeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpySalesShipmentType A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_sales_shipment_type`, `key`, `name` FROM `spy_sales_shipment_type` WHERE `id_sales_shipment_type` = :p0';
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
            /** @var ChildSpySalesShipmentType $obj */
            $obj = new ChildSpySalesShipmentType();
            $obj->hydrate($row);
            SpySalesShipmentTypeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpySalesShipmentType|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpySalesShipmentTypeTableMap::COL_ID_SALES_SHIPMENT_TYPE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpySalesShipmentTypeTableMap::COL_ID_SALES_SHIPMENT_TYPE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idSalesShipmentType Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesShipmentType_Between(array $idSalesShipmentType)
    {
        return $this->filterByIdSalesShipmentType($idSalesShipmentType, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idSalesShipmentTypes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesShipmentType_In(array $idSalesShipmentTypes)
    {
        return $this->filterByIdSalesShipmentType($idSalesShipmentTypes, Criteria::IN);
    }

    /**
     * Filter the query on the id_sales_shipment_type column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSalesShipmentType(1234); // WHERE id_sales_shipment_type = 1234
     * $query->filterByIdSalesShipmentType(array(12, 34), Criteria::IN); // WHERE id_sales_shipment_type IN (12, 34)
     * $query->filterByIdSalesShipmentType(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_sales_shipment_type > 12
     * </code>
     *
     * @param     mixed $idSalesShipmentType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdSalesShipmentType($idSalesShipmentType = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idSalesShipmentType)) {
            $useMinMax = false;
            if (isset($idSalesShipmentType['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTypeTableMap::COL_ID_SALES_SHIPMENT_TYPE, $idSalesShipmentType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSalesShipmentType['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTypeTableMap::COL_ID_SALES_SHIPMENT_TYPE, $idSalesShipmentType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idSalesShipmentType of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesShipmentTypeTableMap::COL_ID_SALES_SHIPMENT_TYPE, $idSalesShipmentType, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $keys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByKey_In(array $keys)
    {
        return $this->filterByKey($keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $key Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByKey_Like($key)
    {
        return $this->filterByKey($key, Criteria::LIKE);
    }

    /**
     * Filter the query on the key column
     *
     * Example usage:
     * <code>
     * $query->filterByKey('fooValue');   // WHERE key = 'fooValue'
     * $query->filterByKey('%fooValue%', Criteria::LIKE); // WHERE key LIKE '%fooValue%'
     * $query->filterByKey([1, 'foo'], Criteria::IN); // WHERE key IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $key The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByKey($key = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $key = str_replace('*', '%', $key);
        }

        if (is_array($key) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$key of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesShipmentTypeTableMap::COL_KEY, $key, $comparison);

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

        $query = $this->addUsingAlias(SpySalesShipmentTypeTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesShipment object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesShipment|ObjectCollection $spySalesShipment the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesShipment($spySalesShipment, ?string $comparison = null)
    {
        if ($spySalesShipment instanceof \Orm\Zed\Sales\Persistence\SpySalesShipment) {
            $this
                ->addUsingAlias(SpySalesShipmentTypeTableMap::COL_ID_SALES_SHIPMENT_TYPE, $spySalesShipment->getFkSalesShipmentType(), $comparison);

            return $this;
        } elseif ($spySalesShipment instanceof ObjectCollection) {
            $this
                ->useSalesShipmentQuery()
                ->filterByPrimaryKeys($spySalesShipment->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySalesShipment() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesShipment or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesShipment relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesShipment(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesShipment');

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
            $this->addJoinObject($join, 'SalesShipment');
        }

        return $this;
    }

    /**
     * Use the SalesShipment relation SpySalesShipment object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesShipmentQuery A secondary query class using the current class as primary query
     */
    public function useSalesShipmentQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSalesShipment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesShipment', '\Orm\Zed\Sales\Persistence\SpySalesShipmentQuery');
    }

    /**
     * Use the SalesShipment relation SpySalesShipment object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesShipmentQuery):\Orm\Zed\Sales\Persistence\SpySalesShipmentQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesShipmentQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSalesShipmentQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the SalesShipment relation to the SpySalesShipment table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesShipmentQuery The inner query object of the EXISTS statement
     */
    public function useSalesShipmentExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesShipmentQuery */
        $q = $this->useExistsQuery('SalesShipment', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the SalesShipment relation to the SpySalesShipment table for a NOT EXISTS query.
     *
     * @see useSalesShipmentExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesShipmentQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesShipmentNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesShipmentQuery */
        $q = $this->useExistsQuery('SalesShipment', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the SalesShipment relation to the SpySalesShipment table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesShipmentQuery The inner query object of the IN statement
     */
    public function useInSalesShipmentQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesShipmentQuery */
        $q = $this->useInQuery('SalesShipment', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the SalesShipment relation to the SpySalesShipment table for a NOT IN query.
     *
     * @see useSalesShipmentInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesShipmentQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesShipmentQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesShipmentQuery */
        $q = $this->useInQuery('SalesShipment', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpySalesShipmentType $spySalesShipmentType Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spySalesShipmentType = null)
    {
        if ($spySalesShipmentType) {
            $this->addUsingAlias(SpySalesShipmentTypeTableMap::COL_ID_SALES_SHIPMENT_TYPE, $spySalesShipmentType->getIdSalesShipmentType(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_sales_shipment_type table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesShipmentTypeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpySalesShipmentTypeTableMap::clearInstancePool();
            SpySalesShipmentTypeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesShipmentTypeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpySalesShipmentTypeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpySalesShipmentTypeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpySalesShipmentTypeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
