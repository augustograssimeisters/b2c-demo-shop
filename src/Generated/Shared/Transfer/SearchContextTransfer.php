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
class SearchContextTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SOURCE_IDENTIFIER = 'sourceIdentifier';

    /**
     * @var string
     */
    public const ELASTICSEARCH_CONTEXT = 'elasticsearchContext';

    /**
     * @var string
     */
    public const STORE_NAME = 'storeName';

    /**
     * @var string
     */
    public const SEARCH_HTTP_CONTEXT = 'searchHttpContext';

    /**
     * @var string|null
     */
    protected $sourceIdentifier;

    /**
     * @var \Generated\Shared\Transfer\ElasticsearchSearchContextTransfer|null
     */
    protected $elasticsearchContext;

    /**
     * @var string|null
     */
    protected $storeName;

    /**
     * @var \Generated\Shared\Transfer\SearchHttpSearchContextTransfer|null
     */
    protected $searchHttpContext;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'source_identifier' => 'sourceIdentifier',
        'sourceIdentifier' => 'sourceIdentifier',
        'SourceIdentifier' => 'sourceIdentifier',
        'elasticsearch_context' => 'elasticsearchContext',
        'elasticsearchContext' => 'elasticsearchContext',
        'ElasticsearchContext' => 'elasticsearchContext',
        'store_name' => 'storeName',
        'storeName' => 'storeName',
        'StoreName' => 'storeName',
        'search_http_context' => 'searchHttpContext',
        'searchHttpContext' => 'searchHttpContext',
        'SearchHttpContext' => 'searchHttpContext',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SOURCE_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'source_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ELASTICSEARCH_CONTEXT => [
            'type' => 'Generated\Shared\Transfer\ElasticsearchSearchContextTransfer',
            'type_shim' => null,
            'name_underscore' => 'elasticsearch_context',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SEARCH_HTTP_CONTEXT => [
            'type' => 'Generated\Shared\Transfer\SearchHttpSearchContextTransfer',
            'type_shim' => null,
            'name_underscore' => 'search_http_context',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module Catalog|CmsPageSearch|ConfigurableBundlePageSearch|ProductNew|ProductReview|ProductSetPageSearch|ProductSet|PublishAndSynchronizeHealthCheckSearch|SalesReturnSearch|SearchElasticsearch|SearchExtension|SearchHttp|Search
     *
     * @param string|null $sourceIdentifier
     *
     * @return $this
     */
    public function setSourceIdentifier($sourceIdentifier)
    {
        $this->sourceIdentifier = $sourceIdentifier;
        $this->modifiedProperties[self::SOURCE_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module Catalog|CmsPageSearch|ConfigurableBundlePageSearch|ProductNew|ProductReview|ProductSetPageSearch|ProductSet|PublishAndSynchronizeHealthCheckSearch|SalesReturnSearch|SearchElasticsearch|SearchExtension|SearchHttp|Search
     *
     * @return string|null
     */
    public function getSourceIdentifier()
    {
        return $this->sourceIdentifier;
    }

    /**
     * @module Catalog|CmsPageSearch|ConfigurableBundlePageSearch|ProductNew|ProductReview|ProductSetPageSearch|ProductSet|PublishAndSynchronizeHealthCheckSearch|SalesReturnSearch|SearchElasticsearch|SearchExtension|SearchHttp|Search
     *
     * @param string|null $sourceIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSourceIdentifierOrFail($sourceIdentifier)
    {
        if ($sourceIdentifier === null) {
            $this->throwNullValueException(static::SOURCE_IDENTIFIER);
        }

        return $this->setSourceIdentifier($sourceIdentifier);
    }

    /**
     * @module Catalog|CmsPageSearch|ConfigurableBundlePageSearch|ProductNew|ProductReview|ProductSetPageSearch|ProductSet|PublishAndSynchronizeHealthCheckSearch|SalesReturnSearch|SearchElasticsearch|SearchExtension|SearchHttp|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSourceIdentifierOrFail()
    {
        if ($this->sourceIdentifier === null) {
            $this->throwNullValueException(static::SOURCE_IDENTIFIER);
        }

        return $this->sourceIdentifier;
    }

    /**
     * @module Catalog|CmsPageSearch|ConfigurableBundlePageSearch|ProductNew|ProductReview|ProductSetPageSearch|ProductSet|PublishAndSynchronizeHealthCheckSearch|SalesReturnSearch|SearchElasticsearch|SearchExtension|SearchHttp|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSourceIdentifier()
    {
        $this->assertPropertyIsSet(self::SOURCE_IDENTIFIER);

        return $this;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @param \Generated\Shared\Transfer\ElasticsearchSearchContextTransfer|null $elasticsearchContext
     *
     * @return $this
     */
    public function setElasticsearchContext(ElasticsearchSearchContextTransfer $elasticsearchContext = null)
    {
        $this->elasticsearchContext = $elasticsearchContext;
        $this->modifiedProperties[self::ELASTICSEARCH_CONTEXT] = true;

        return $this;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @return \Generated\Shared\Transfer\ElasticsearchSearchContextTransfer|null
     */
    public function getElasticsearchContext()
    {
        return $this->elasticsearchContext;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @param \Generated\Shared\Transfer\ElasticsearchSearchContextTransfer $elasticsearchContext
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setElasticsearchContextOrFail(ElasticsearchSearchContextTransfer $elasticsearchContext)
    {
        return $this->setElasticsearchContext($elasticsearchContext);
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ElasticsearchSearchContextTransfer
     */
    public function getElasticsearchContextOrFail()
    {
        if ($this->elasticsearchContext === null) {
            $this->throwNullValueException(static::ELASTICSEARCH_CONTEXT);
        }

        return $this->elasticsearchContext;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireElasticsearchContext()
    {
        $this->assertPropertyIsSet(self::ELASTICSEARCH_CONTEXT);

        return $this;
    }

    /**
     * @module SearchElasticsearch|Search
     *
     * @param string|null $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        $this->modifiedProperties[self::STORE_NAME] = true;

        return $this;
    }

    /**
     * @module SearchElasticsearch|Search
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @module SearchElasticsearch|Search
     *
     * @param string|null $storeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNameOrFail($storeName)
    {
        if ($storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->setStoreName($storeName);
    }

    /**
     * @module SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreNameOrFail()
    {
        if ($this->storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->storeName;
    }

    /**
     * @module SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreName()
    {
        $this->assertPropertyIsSet(self::STORE_NAME);

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @param \Generated\Shared\Transfer\SearchHttpSearchContextTransfer|null $searchHttpContext
     *
     * @return $this
     */
    public function setSearchHttpContext(SearchHttpSearchContextTransfer $searchHttpContext = null)
    {
        $this->searchHttpContext = $searchHttpContext;
        $this->modifiedProperties[self::SEARCH_HTTP_CONTEXT] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return \Generated\Shared\Transfer\SearchHttpSearchContextTransfer|null
     */
    public function getSearchHttpContext()
    {
        return $this->searchHttpContext;
    }

    /**
     * @module SearchHttp
     *
     * @param \Generated\Shared\Transfer\SearchHttpSearchContextTransfer $searchHttpContext
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSearchHttpContextOrFail(SearchHttpSearchContextTransfer $searchHttpContext)
    {
        return $this->setSearchHttpContext($searchHttpContext);
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SearchHttpSearchContextTransfer
     */
    public function getSearchHttpContextOrFail()
    {
        if ($this->searchHttpContext === null) {
            $this->throwNullValueException(static::SEARCH_HTTP_CONTEXT);
        }

        return $this->searchHttpContext;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSearchHttpContext()
    {
        $this->assertPropertyIsSet(self::SEARCH_HTTP_CONTEXT);

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
                case 'sourceIdentifier':
                case 'storeName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'elasticsearchContext':
                case 'searchHttpContext':
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
                case 'sourceIdentifier':
                case 'storeName':
                    $values[$arrayKey] = $value;

                    break;
                case 'elasticsearchContext':
                case 'searchHttpContext':
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
                case 'sourceIdentifier':
                case 'storeName':
                    $values[$arrayKey] = $value;

                    break;
                case 'elasticsearchContext':
                case 'searchHttpContext':
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
            'sourceIdentifier' => $this->sourceIdentifier,
            'storeName' => $this->storeName,
            'elasticsearchContext' => $this->elasticsearchContext,
            'searchHttpContext' => $this->searchHttpContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'source_identifier' => $this->sourceIdentifier,
            'store_name' => $this->storeName,
            'elasticsearch_context' => $this->elasticsearchContext,
            'search_http_context' => $this->searchHttpContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'source_identifier' => $this->sourceIdentifier instanceof AbstractTransfer ? $this->sourceIdentifier->toArray(true, false) : $this->sourceIdentifier,
            'store_name' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, false) : $this->storeName,
            'elasticsearch_context' => $this->elasticsearchContext instanceof AbstractTransfer ? $this->elasticsearchContext->toArray(true, false) : $this->elasticsearchContext,
            'search_http_context' => $this->searchHttpContext instanceof AbstractTransfer ? $this->searchHttpContext->toArray(true, false) : $this->searchHttpContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sourceIdentifier' => $this->sourceIdentifier instanceof AbstractTransfer ? $this->sourceIdentifier->toArray(true, true) : $this->sourceIdentifier,
            'storeName' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, true) : $this->storeName,
            'elasticsearchContext' => $this->elasticsearchContext instanceof AbstractTransfer ? $this->elasticsearchContext->toArray(true, true) : $this->elasticsearchContext,
            'searchHttpContext' => $this->searchHttpContext instanceof AbstractTransfer ? $this->searchHttpContext->toArray(true, true) : $this->searchHttpContext,
        ];
    }
}
