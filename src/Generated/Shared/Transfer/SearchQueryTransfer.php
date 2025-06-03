<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SearchQueryTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUERY_STRING = 'queryString';

    /**
     * @var string
     */
    public const SEARCH_QUERY_FACET_FILTERS = 'searchQueryFacetFilters';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const SORT = 'sort';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string|null
     */
    protected $queryString;

    /**
     * @var array
     */
    protected $searchQueryFacetFilters = [];

    /**
     * @var \Generated\Shared\Transfer\SearchQueryPaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var \Generated\Shared\Transfer\SearchQuerySortingTransfer|null
     */
    protected $sort;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'query_string' => 'queryString',
        'queryString' => 'queryString',
        'QueryString' => 'queryString',
        'search_query_facet_filters' => 'searchQueryFacetFilters',
        'searchQueryFacetFilters' => 'searchQueryFacetFilters',
        'SearchQueryFacetFilters' => 'searchQueryFacetFilters',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'sort' => 'sort',
        'Sort' => 'sort',
        'locale' => 'locale',
        'Locale' => 'locale',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUERY_STRING => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'query_string',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SEARCH_QUERY_FACET_FILTERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'search_query_facet_filters',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\SearchQueryPaginationTransfer',
            'type_shim' => null,
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SORT => [
            'type' => 'Generated\Shared\Transfer\SearchQuerySortingTransfer',
            'type_shim' => null,
            'name_underscore' => 'sort',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module SearchHttp
     *
     * @param string|null $queryString
     *
     * @return $this
     */
    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;
        $this->modifiedProperties[self::QUERY_STRING] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return string|null
     */
    public function getQueryString()
    {
        return $this->queryString;
    }

    /**
     * @module SearchHttp
     *
     * @param string|null $queryString
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQueryStringOrFail($queryString)
    {
        if ($queryString === null) {
            $this->throwNullValueException(static::QUERY_STRING);
        }

        return $this->setQueryString($queryString);
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQueryStringOrFail()
    {
        if ($this->queryString === null) {
            $this->throwNullValueException(static::QUERY_STRING);
        }

        return $this->queryString;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueryString()
    {
        $this->assertPropertyIsSet(self::QUERY_STRING);

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @param array|null $searchQueryFacetFilters
     *
     * @return $this
     */
    public function setSearchQueryFacetFilters(array $searchQueryFacetFilters = null)
    {
        if ($searchQueryFacetFilters === null) {
            $searchQueryFacetFilters = [];
        }

        $this->searchQueryFacetFilters = $searchQueryFacetFilters;
        $this->modifiedProperties[self::SEARCH_QUERY_FACET_FILTERS] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return array
     */
    public function getSearchQueryFacetFilters()
    {
        return $this->searchQueryFacetFilters;
    }

    /**
     * @module SearchHttp
     *
     * @param mixed $searchQueryFacetFilter
     *
     * @return $this
     */
    public function addSearchQueryFacetFilter($searchQueryFacetFilter)
    {
        $this->searchQueryFacetFilters[] = $searchQueryFacetFilter;
        $this->modifiedProperties[self::SEARCH_QUERY_FACET_FILTERS] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSearchQueryFacetFilters()
    {
        $this->assertPropertyIsSet(self::SEARCH_QUERY_FACET_FILTERS);

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @param \Generated\Shared\Transfer\SearchQueryPaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(SearchQueryPaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return \Generated\Shared\Transfer\SearchQueryPaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module SearchHttp
     *
     * @param \Generated\Shared\Transfer\SearchQueryPaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(SearchQueryPaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SearchQueryPaginationTransfer
     */
    public function getPaginationOrFail()
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @param \Generated\Shared\Transfer\SearchQuerySortingTransfer|null $sort
     *
     * @return $this
     */
    public function setSort(SearchQuerySortingTransfer $sort = null)
    {
        $this->sort = $sort;
        $this->modifiedProperties[self::SORT] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return \Generated\Shared\Transfer\SearchQuerySortingTransfer|null
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @module SearchHttp
     *
     * @param \Generated\Shared\Transfer\SearchQuerySortingTransfer $sort
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSortOrFail(SearchQuerySortingTransfer $sort)
    {
        return $this->setSort($sort);
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SearchQuerySortingTransfer
     */
    public function getSortOrFail()
    {
        if ($this->sort === null) {
            $this->throwNullValueException(static::SORT);
        }

        return $this->sort;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSort()
    {
        $this->assertPropertyIsSet(self::SORT);

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @param string|null $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module SearchHttp
     *
     * @param string|null $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail($locale)
    {
        if ($locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->setLocale($locale);
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'queryString':
                case 'searchQueryFacetFilters':
                case 'locale':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'pagination':
                case 'sort':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'queryString':
                case 'searchQueryFacetFilters':
                case 'locale':
                    $values[$arrayKey] = $value;

                    break;
                case 'pagination':
                case 'sort':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'queryString':
                case 'searchQueryFacetFilters':
                case 'locale':
                    $values[$arrayKey] = $value;

                    break;
                case 'pagination':
                case 'sort':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties(): void
    {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'queryString' => $this->queryString,
            'searchQueryFacetFilters' => $this->searchQueryFacetFilters,
            'locale' => $this->locale,
            'pagination' => $this->pagination,
            'sort' => $this->sort,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'query_string' => $this->queryString,
            'search_query_facet_filters' => $this->searchQueryFacetFilters,
            'locale' => $this->locale,
            'pagination' => $this->pagination,
            'sort' => $this->sort,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'query_string' => $this->queryString instanceof AbstractTransfer ? $this->queryString->toArray(true, false) : $this->queryString,
            'search_query_facet_filters' => $this->searchQueryFacetFilters instanceof AbstractTransfer ? $this->searchQueryFacetFilters->toArray(true, false) : $this->searchQueryFacetFilters,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'sort' => $this->sort instanceof AbstractTransfer ? $this->sort->toArray(true, false) : $this->sort,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'queryString' => $this->queryString instanceof AbstractTransfer ? $this->queryString->toArray(true, true) : $this->queryString,
            'searchQueryFacetFilters' => $this->searchQueryFacetFilters instanceof AbstractTransfer ? $this->searchQueryFacetFilters->toArray(true, true) : $this->searchQueryFacetFilters,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'sort' => $this->sort instanceof AbstractTransfer ? $this->sort->toArray(true, true) : $this->sort,
        ];
    }
}
