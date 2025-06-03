<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class GlueRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const META = 'meta';

    /**
     * @var string
     */
    public const QUERY_FIELDS = 'queryFields';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @var string
     */
    public const RESOURCE = 'resource';

    /**
     * @var string
     */
    public const CONTENT = 'content';

    /**
     * @var string
     */
    public const FILTERS = 'filters';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const REQUESTED_FORMAT = 'requestedFormat';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const HOST = 'host';

    /**
     * @var string
     */
    public const CONVENTION = 'convention';

    /**
     * @var string
     */
    public const APPLICATION = 'application';

    /**
     * @var string
     */
    public const METHOD = 'method';

    /**
     * @var string
     */
    public const PARAMETERS_STRING = 'parametersString';

    /**
     * @var string
     */
    public const PARENT_RESOURCES = 'parentResources';

    /**
     * @var string
     */
    public const ACCEPTED_FORMAT = 'acceptedFormat';

    /**
     * @var string
     */
    public const SORTINGS = 'sortings';

    /**
     * @var string
     */
    public const SPARSE_RESOURCES = 'sparseResources';

    /**
     * @var string
     */
    public const HTTP_REQUEST_ATTRIBUTES = 'httpRequestAttributes';

    /**
     * @var string
     */
    public const REQUEST_USER = 'requestUser';

    /**
     * @var string
     */
    public const INCLUDED_RELATIONSHIPS = 'includedRelationships';

    /**
     * @var string
     */
    public const REQUEST_CUSTOMER = 'requestCustomer';

    /**
     * @var string
     */
    public const REQUEST_WAREHOUSE = 'requestWarehouse';

    /**
     * @var string
     */
    public const SCOPES = 'scopes';

    /**
     * @var array
     */
    protected $meta = [];

    /**
     * @var array
     */
    protected $queryFields = [];

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var \Generated\Shared\Transfer\GlueResourceTransfer|null
     */
    protected $resource;

    /**
     * @var string|null
     */
    protected $content;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\GlueFilterTransfer>
     */
    protected $filters;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var string|null
     */
    protected $requestedFormat;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $host;

    /**
     * @var string|null
     */
    protected $convention;

    /**
     * @var string|null
     */
    protected $application;

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var string|null
     */
    protected $parametersString;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\GlueResourceTransfer>
     */
    protected $parentResources;

    /**
     * @var string|null
     */
    protected $acceptedFormat;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SortTransfer>
     */
    protected $sortings;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\GlueSparseResourceTransfer>
     */
    protected $sparseResources;

    /**
     * @var array
     */
    protected $httpRequestAttributes = [];

    /**
     * @var \Generated\Shared\Transfer\GlueRequestUserTransfer|null
     */
    protected $requestUser;

    /**
     * @var string[]
     */
    protected $includedRelationships = [];

    /**
     * @var \Generated\Shared\Transfer\GlueRequestCustomerTransfer|null
     */
    protected $requestCustomer;

    /**
     * @var \Generated\Shared\Transfer\GlueRequestWarehouseTransfer|null
     */
    protected $requestWarehouse;

    /**
     * @var string[]
     */
    protected $scopes = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'meta' => 'meta',
        'Meta' => 'meta',
        'query_fields' => 'queryFields',
        'queryFields' => 'queryFields',
        'QueryFields' => 'queryFields',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'path' => 'path',
        'Path' => 'path',
        'resource' => 'resource',
        'Resource' => 'resource',
        'content' => 'content',
        'Content' => 'content',
        'filters' => 'filters',
        'Filters' => 'filters',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'requested_format' => 'requestedFormat',
        'requestedFormat' => 'requestedFormat',
        'RequestedFormat' => 'requestedFormat',
        'locale' => 'locale',
        'Locale' => 'locale',
        'host' => 'host',
        'Host' => 'host',
        'convention' => 'convention',
        'Convention' => 'convention',
        'application' => 'application',
        'Application' => 'application',
        'method' => 'method',
        'Method' => 'method',
        'parameters_string' => 'parametersString',
        'parametersString' => 'parametersString',
        'ParametersString' => 'parametersString',
        'parent_resources' => 'parentResources',
        'parentResources' => 'parentResources',
        'ParentResources' => 'parentResources',
        'accepted_format' => 'acceptedFormat',
        'acceptedFormat' => 'acceptedFormat',
        'AcceptedFormat' => 'acceptedFormat',
        'sortings' => 'sortings',
        'Sortings' => 'sortings',
        'sparse_resources' => 'sparseResources',
        'sparseResources' => 'sparseResources',
        'SparseResources' => 'sparseResources',
        'http_request_attributes' => 'httpRequestAttributes',
        'httpRequestAttributes' => 'httpRequestAttributes',
        'HttpRequestAttributes' => 'httpRequestAttributes',
        'request_user' => 'requestUser',
        'requestUser' => 'requestUser',
        'RequestUser' => 'requestUser',
        'included_relationships' => 'includedRelationships',
        'includedRelationships' => 'includedRelationships',
        'IncludedRelationships' => 'includedRelationships',
        'request_customer' => 'requestCustomer',
        'requestCustomer' => 'requestCustomer',
        'RequestCustomer' => 'requestCustomer',
        'request_warehouse' => 'requestWarehouse',
        'requestWarehouse' => 'requestWarehouse',
        'RequestWarehouse' => 'requestWarehouse',
        'scopes' => 'scopes',
        'Scopes' => 'scopes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::META => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'meta',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUERY_FIELDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'query_fields',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\PaginationTransfer',
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
        self::PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESOURCE => [
            'type' => 'Generated\Shared\Transfer\GlueResourceTransfer',
            'type_shim' => null,
            'name_underscore' => 'resource',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'content',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILTERS => [
            'type' => 'Generated\Shared\Transfer\GlueFilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filters',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUESTED_FORMAT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'requested_format',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::HOST => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'host',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONVENTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'convention',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::APPLICATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'application',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METHOD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS_STRING => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'parameters_string',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARENT_RESOURCES => [
            'type' => 'Generated\Shared\Transfer\GlueResourceTransfer',
            'type_shim' => null,
            'name_underscore' => 'parent_resources',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACCEPTED_FORMAT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'accepted_format',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SORTINGS => [
            'type' => 'Generated\Shared\Transfer\SortTransfer',
            'type_shim' => null,
            'name_underscore' => 'sortings',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPARSE_RESOURCES => [
            'type' => 'Generated\Shared\Transfer\GlueSparseResourceTransfer',
            'type_shim' => null,
            'name_underscore' => 'sparse_resources',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HTTP_REQUEST_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'http_request_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUEST_USER => [
            'type' => 'Generated\Shared\Transfer\GlueRequestUserTransfer',
            'type_shim' => null,
            'name_underscore' => 'request_user',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INCLUDED_RELATIONSHIPS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'included_relationships',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUEST_CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\GlueRequestCustomerTransfer',
            'type_shim' => null,
            'name_underscore' => 'request_customer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUEST_WAREHOUSE => [
            'type' => 'Generated\Shared\Transfer\GlueRequestWarehouseTransfer',
            'type_shim' => null,
            'name_underscore' => 'request_warehouse',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SCOPES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'scopes',
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
     * @module ApiKeyAuthorizationConnector|DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @param array $meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        if ($meta === null) {
            $meta = [];
        }

        $this->meta = $meta;
        $this->modifiedProperties[self::META] = true;

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @return array
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @module ApiKeyAuthorizationConnector|DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @param string|int $metaKey
     * @param mixed $metaValue
     *
     * @return $this
     */
    public function addMeta($metaKey, $metaValue)
    {
        $this->meta[$metaKey] = $metaValue;
        $this->modifiedProperties[self::META] = true;

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMeta()
    {
        $this->assertPropertyIsSet(self::META);

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention
     *
     * @param array $queryFields
     *
     * @return $this
     */
    public function setQueryFields($queryFields)
    {
        if ($queryFields === null) {
            $queryFields = [];
        }

        $this->queryFields = $queryFields;
        $this->modifiedProperties[self::QUERY_FIELDS] = true;

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention
     *
     * @return array
     */
    public function getQueryFields()
    {
        return $this->queryFields;
    }

    /**
     * @module ApiKeyAuthorizationConnector|DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention
     *
     * @param string|int $queryFieldKey
     * @param mixed $queryFieldValue
     *
     * @return $this
     */
    public function addQueryField($queryFieldKey, $queryFieldValue)
    {
        $this->queryFields[$queryFieldKey] = $queryFieldValue;
        $this->modifiedProperties[self::QUERY_FIELDS] = true;

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueryFields()
    {
        $this->assertPropertyIsSet(self::QUERY_FIELDS);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(PaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|WarehouseUsersBackendApi
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(PaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer
     */
    public function getPaginationOrFail()
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|WarehouseUsersBackendApi
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
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @param string|null $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        $this->modifiedProperties[self::PATH] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @param string|null $path
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPathOrFail($path)
    {
        if ($path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->setPath($path);
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPathOrFail()
    {
        if ($this->path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->path;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePath()
    {
        $this->assertPropertyIsSet(self::PATH);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|StoresApi|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\GlueResourceTransfer|null $resource
     *
     * @return $this
     */
    public function setResource(GlueResourceTransfer $resource = null)
    {
        $this->resource = $resource;
        $this->modifiedProperties[self::RESOURCE] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|StoresApi|WarehouseUsersBackendApi
     *
     * @return \Generated\Shared\Transfer\GlueResourceTransfer|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|StoresApi|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\GlueResourceTransfer $resource
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceOrFail(GlueResourceTransfer $resource)
    {
        return $this->setResource($resource);
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|StoresApi|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GlueResourceTransfer
     */
    public function getResourceOrFail()
    {
        if ($this->resource === null) {
            $this->throwNullValueException(static::RESOURCE);
        }

        return $this->resource;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|StoresApi|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResource()
    {
        $this->assertPropertyIsSet(self::RESOURCE);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi
     *
     * @param string|null $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        $this->modifiedProperties[self::CONTENT] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi
     *
     * @param string|null $content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContentOrFail($content)
    {
        if ($content === null) {
            $this->throwNullValueException(static::CONTENT);
        }

        return $this->setContent($content);
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getContentOrFail()
    {
        if ($this->content === null) {
            $this->throwNullValueException(static::CONTENT);
        }

        return $this->content;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContent()
    {
        $this->assertPropertyIsSet(self::CONTENT);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|WarehouseUsersBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\GlueFilterTransfer> $filters
     *
     * @return $this
     */
    public function setFilters(ArrayObject $filters)
    {
        $this->filters = $filters;
        $this->modifiedProperties[self::FILTERS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|WarehouseUsersBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\GlueFilterTransfer>
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\GlueFilterTransfer $filter
     *
     * @return $this
     */
    public function addFilter(GlueFilterTransfer $filter)
    {
        $this->filters[] = $filter;
        $this->modifiedProperties[self::FILTERS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilters()
    {
        $this->assertCollectionPropertyIsSet(self::FILTERS);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|OauthApi|OauthBackendApi|PickingListsBackendApi
     *
     * @param array|null $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes = null)
    {
        if ($attributes === null) {
            $attributes = [];
        }

        $this->attributes = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|OauthApi|OauthBackendApi|PickingListsBackendApi
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|OauthApi|OauthBackendApi|PickingListsBackendApi
     *
     * @param mixed $attribute
     *
     * @return $this
     */
    public function addAttribute($attribute)
    {
        $this->attributes[] = $attribute;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|OauthApi|OauthBackendApi|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttributes()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTES);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention
     *
     * @param string|null $requestedFormat
     *
     * @return $this
     */
    public function setRequestedFormat($requestedFormat)
    {
        $this->requestedFormat = $requestedFormat;
        $this->modifiedProperties[self::REQUESTED_FORMAT] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention
     *
     * @return string|null
     */
    public function getRequestedFormat()
    {
        return $this->requestedFormat;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention
     *
     * @param string|null $requestedFormat
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestedFormatOrFail($requestedFormat)
    {
        if ($requestedFormat === null) {
            $this->throwNullValueException(static::REQUESTED_FORMAT);
        }

        return $this->setRequestedFormat($requestedFormat);
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRequestedFormatOrFail()
    {
        if ($this->requestedFormat === null) {
            $this->throwNullValueException(static::REQUESTED_FORMAT);
        }

        return $this->requestedFormat;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestedFormat()
    {
        $this->assertPropertyIsSet(self::REQUESTED_FORMAT);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|PickingListsBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|PickingListsBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|PickingListsBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|PickingListsBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|PickingListsBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        $this->modifiedProperties[self::HOST] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $host
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHostOrFail($host)
    {
        if ($host === null) {
            $this->throwNullValueException(static::HOST);
        }

        return $this->setHost($host);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getHostOrFail()
    {
        if ($this->host === null) {
            $this->throwNullValueException(static::HOST);
        }

        return $this->host;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHost()
    {
        $this->assertPropertyIsSet(self::HOST);

        return $this;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention
     *
     * @param string|null $convention
     *
     * @return $this
     */
    public function setConvention($convention)
    {
        $this->convention = $convention;
        $this->modifiedProperties[self::CONVENTION] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention
     *
     * @return string|null
     */
    public function getConvention()
    {
        return $this->convention;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention
     *
     * @param string|null $convention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConventionOrFail($convention)
    {
        if ($convention === null) {
            $this->throwNullValueException(static::CONVENTION);
        }

        return $this->setConvention($convention);
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConventionOrFail()
    {
        if ($this->convention === null) {
            $this->throwNullValueException(static::CONVENTION);
        }

        return $this->convention;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConvention()
    {
        $this->assertPropertyIsSet(self::CONVENTION);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @param string|null $application
     *
     * @return $this
     */
    public function setApplication($application)
    {
        $this->application = $application;
        $this->modifiedProperties[self::APPLICATION] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @param string|null $application
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApplicationOrFail($application)
    {
        if ($application === null) {
            $this->throwNullValueException(static::APPLICATION);
        }

        return $this->setApplication($application);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getApplicationOrFail()
    {
        if ($this->application === null) {
            $this->throwNullValueException(static::APPLICATION);
        }

        return $this->application;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApplication()
    {
        $this->assertPropertyIsSet(self::APPLICATION);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @param string|null $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        $this->modifiedProperties[self::METHOD] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @param string|null $method
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMethodOrFail($method)
    {
        if ($method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->setMethod($method);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMethodOrFail()
    {
        if ($this->method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->method;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethod()
    {
        $this->assertPropertyIsSet(self::METHOD);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $parametersString
     *
     * @return $this
     */
    public function setParametersString($parametersString)
    {
        $this->parametersString = $parametersString;
        $this->modifiedProperties[self::PARAMETERS_STRING] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getParametersString()
    {
        return $this->parametersString;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $parametersString
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParametersStringOrFail($parametersString)
    {
        if ($parametersString === null) {
            $this->throwNullValueException(static::PARAMETERS_STRING);
        }

        return $this->setParametersString($parametersString);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getParametersStringOrFail()
    {
        if ($this->parametersString === null) {
            $this->throwNullValueException(static::PARAMETERS_STRING);
        }

        return $this->parametersString;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParametersString()
    {
        $this->assertPropertyIsSet(self::PARAMETERS_STRING);

        return $this;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention|PickingListsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\GlueResourceTransfer> $parentResources
     *
     * @return $this
     */
    public function setParentResources(ArrayObject $parentResources)
    {
        $this->parentResources = $parentResources;
        $this->modifiedProperties[self::PARENT_RESOURCES] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention|PickingListsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\GlueResourceTransfer>
     */
    public function getParentResources()
    {
        return $this->parentResources;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention|PickingListsBackendApi
     *
     * @param string|int $parentResourceKey
     * @param \Generated\Shared\Transfer\GlueResourceTransfer $parentResourceValue
     *
     * @return $this
     */
    public function addParentResource($parentResourceKey, GlueResourceTransfer $parentResourceValue)
    {
        $this->parentResources[$parentResourceKey] = $parentResourceValue;
        $this->modifiedProperties[self::PARENT_RESOURCES] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention|PickingListsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParentResources()
    {
        $this->assertCollectionPropertyIsSet(self::PARENT_RESOURCES);

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @param string|null $acceptedFormat
     *
     * @return $this
     */
    public function setAcceptedFormat($acceptedFormat)
    {
        $this->acceptedFormat = $acceptedFormat;
        $this->modifiedProperties[self::ACCEPTED_FORMAT] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @return string|null
     */
    public function getAcceptedFormat()
    {
        return $this->acceptedFormat;
    }

    /**
     * @module GlueApplication
     *
     * @param string|null $acceptedFormat
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAcceptedFormatOrFail($acceptedFormat)
    {
        if ($acceptedFormat === null) {
            $this->throwNullValueException(static::ACCEPTED_FORMAT);
        }

        return $this->setAcceptedFormat($acceptedFormat);
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAcceptedFormatOrFail()
    {
        if ($this->acceptedFormat === null) {
            $this->throwNullValueException(static::ACCEPTED_FORMAT);
        }

        return $this->acceptedFormat;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAcceptedFormat()
    {
        $this->assertPropertyIsSet(self::ACCEPTED_FORMAT);

        return $this;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|WarehouseUsersBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SortTransfer> $sortings
     *
     * @return $this
     */
    public function setSortings(ArrayObject $sortings)
    {
        $this->sortings = $sortings;
        $this->modifiedProperties[self::SORTINGS] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|WarehouseUsersBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SortTransfer>
     */
    public function getSortings()
    {
        return $this->sortings;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\SortTransfer $sorting
     *
     * @return $this
     */
    public function addSorting(SortTransfer $sorting)
    {
        $this->sortings[] = $sorting;
        $this->modifiedProperties[self::SORTINGS] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSortings()
    {
        $this->assertCollectionPropertyIsSet(self::SORTINGS);

        return $this;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\GlueSparseResourceTransfer> $sparseResources
     *
     * @return $this
     */
    public function setSparseResources(ArrayObject $sparseResources)
    {
        $this->sparseResources = $sparseResources;
        $this->modifiedProperties[self::SPARSE_RESOURCES] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\GlueSparseResourceTransfer>
     */
    public function getSparseResources()
    {
        return $this->sparseResources;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention
     *
     * @param \Generated\Shared\Transfer\GlueSparseResourceTransfer $sparseResource
     *
     * @return $this
     */
    public function addSparseResource(GlueSparseResourceTransfer $sparseResource)
    {
        $this->sparseResources[] = $sparseResource;
        $this->modifiedProperties[self::SPARSE_RESOURCES] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSparseResources()
    {
        $this->assertCollectionPropertyIsSet(self::SPARSE_RESOURCES);

        return $this;
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi
     *
     * @param array $httpRequestAttributes
     *
     * @return $this
     */
    public function setHttpRequestAttributes($httpRequestAttributes)
    {
        if ($httpRequestAttributes === null) {
            $httpRequestAttributes = [];
        }

        $this->httpRequestAttributes = $httpRequestAttributes;
        $this->modifiedProperties[self::HTTP_REQUEST_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi
     *
     * @return array
     */
    public function getHttpRequestAttributes()
    {
        return $this->httpRequestAttributes;
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi
     *
     * @param string|int $httpRequestAttributeKey
     * @param mixed $httpRequestAttributeValue
     *
     * @return $this
     */
    public function addHttpRequestAttribute($httpRequestAttributeKey, $httpRequestAttributeValue)
    {
        $this->httpRequestAttributes[$httpRequestAttributeKey] = $httpRequestAttributeValue;
        $this->modifiedProperties[self::HTTP_REQUEST_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHttpRequestAttributes()
    {
        $this->assertPropertyIsSet(self::HTTP_REQUEST_ATTRIBUTES);

        return $this;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|OauthBackendApi|PickingListsBackendApi|PushNotificationsBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\GlueRequestUserTransfer|null $requestUser
     *
     * @return $this
     */
    public function setRequestUser(GlueRequestUserTransfer $requestUser = null)
    {
        $this->requestUser = $requestUser;
        $this->modifiedProperties[self::REQUEST_USER] = true;

        return $this;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|OauthBackendApi|PickingListsBackendApi|PushNotificationsBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi
     *
     * @return \Generated\Shared\Transfer\GlueRequestUserTransfer|null
     */
    public function getRequestUser()
    {
        return $this->requestUser;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|OauthBackendApi|PickingListsBackendApi|PushNotificationsBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\GlueRequestUserTransfer $requestUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestUserOrFail(GlueRequestUserTransfer $requestUser)
    {
        return $this->setRequestUser($requestUser);
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|OauthBackendApi|PickingListsBackendApi|PushNotificationsBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GlueRequestUserTransfer
     */
    public function getRequestUserOrFail()
    {
        if ($this->requestUser === null) {
            $this->throwNullValueException(static::REQUEST_USER);
        }

        return $this->requestUser;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|OauthBackendApi|PickingListsBackendApi|PushNotificationsBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestUser()
    {
        $this->assertPropertyIsSet(self::REQUEST_USER);

        return $this;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @param string[]|null $includedRelationships
     *
     * @return $this
     */
    public function setIncludedRelationships(array $includedRelationships = null)
    {
        if ($includedRelationships === null) {
            $includedRelationships = [];
        }

        $this->includedRelationships = $includedRelationships;
        $this->modifiedProperties[self::INCLUDED_RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @return string[]
     */
    public function getIncludedRelationships()
    {
        return $this->includedRelationships;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @param string $includedRelationship
     *
     * @return $this
     */
    public function addIncludedRelationship($includedRelationship)
    {
        $this->includedRelationships[] = $includedRelationship;
        $this->modifiedProperties[self::INCLUDED_RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIncludedRelationships()
    {
        $this->assertPropertyIsSet(self::INCLUDED_RELATIONSHIPS);

        return $this;
    }

    /**
     * @module GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi
     *
     * @param \Generated\Shared\Transfer\GlueRequestCustomerTransfer|null $requestCustomer
     *
     * @return $this
     */
    public function setRequestCustomer(GlueRequestCustomerTransfer $requestCustomer = null)
    {
        $this->requestCustomer = $requestCustomer;
        $this->modifiedProperties[self::REQUEST_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi
     *
     * @return \Generated\Shared\Transfer\GlueRequestCustomerTransfer|null
     */
    public function getRequestCustomer()
    {
        return $this->requestCustomer;
    }

    /**
     * @module GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi
     *
     * @param \Generated\Shared\Transfer\GlueRequestCustomerTransfer $requestCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestCustomerOrFail(GlueRequestCustomerTransfer $requestCustomer)
    {
        return $this->setRequestCustomer($requestCustomer);
    }

    /**
     * @module GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GlueRequestCustomerTransfer
     */
    public function getRequestCustomerOrFail()
    {
        if ($this->requestCustomer === null) {
            $this->throwNullValueException(static::REQUEST_CUSTOMER);
        }

        return $this->requestCustomer;
    }

    /**
     * @module GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestCustomer()
    {
        $this->assertPropertyIsSet(self::REQUEST_CUSTOMER);

        return $this;
    }

    /**
     * @module PickingListsBackendApi|WarehouseOauthBackendApi
     *
     * @param \Generated\Shared\Transfer\GlueRequestWarehouseTransfer|null $requestWarehouse
     *
     * @return $this
     */
    public function setRequestWarehouse(?GlueRequestWarehouseTransfer $requestWarehouse = null)
    {
        $this->requestWarehouse = $requestWarehouse;
        $this->modifiedProperties[self::REQUEST_WAREHOUSE] = true;

        return $this;
    }

    /**
     * @module PickingListsBackendApi|WarehouseOauthBackendApi
     *
     * @return \Generated\Shared\Transfer\GlueRequestWarehouseTransfer|null
     */
    public function getRequestWarehouse(): ?GlueRequestWarehouseTransfer
    {
        return $this->requestWarehouse;
    }

    /**
     * @module PickingListsBackendApi|WarehouseOauthBackendApi
     *
     * @param \Generated\Shared\Transfer\GlueRequestWarehouseTransfer $requestWarehouse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestWarehouseOrFail(GlueRequestWarehouseTransfer $requestWarehouse)
    {
        return $this->setRequestWarehouse($requestWarehouse);
    }

    /**
     * @module PickingListsBackendApi|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GlueRequestWarehouseTransfer
     */
    public function getRequestWarehouseOrFail(): GlueRequestWarehouseTransfer
    {
        if ($this->requestWarehouse === null) {
            $this->throwNullValueException(static::REQUEST_WAREHOUSE);
        }

        return $this->requestWarehouse;
    }

    /**
     * @module PickingListsBackendApi|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestWarehouse()
    {
        $this->assertPropertyIsSet(self::REQUEST_WAREHOUSE);

        return $this;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @param string[]|null $scopes
     *
     * @return $this
     */
    public function setScopes(array $scopes = null)
    {
        if ($scopes === null) {
            $scopes = [];
        }

        $this->scopes = $scopes;
        $this->modifiedProperties[self::SCOPES] = true;

        return $this;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @return string[]
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @param string $scope
     *
     * @return $this
     */
    public function addScope($scope)
    {
        $this->scopes[] = $scope;
        $this->modifiedProperties[self::SCOPES] = true;

        return $this;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireScopes()
    {
        $this->assertPropertyIsSet(self::SCOPES);

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
                case 'meta':
                case 'queryFields':
                case 'path':
                case 'content':
                case 'attributes':
                case 'requestedFormat':
                case 'locale':
                case 'host':
                case 'convention':
                case 'application':
                case 'method':
                case 'parametersString':
                case 'acceptedFormat':
                case 'httpRequestAttributes':
                case 'includedRelationships':
                case 'scopes':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'pagination':
                case 'resource':
                case 'requestUser':
                case 'requestCustomer':
                case 'requestWarehouse':
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
                case 'filters':
                case 'parentResources':
                case 'sortings':
                case 'sparseResources':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'meta':
                case 'queryFields':
                case 'path':
                case 'content':
                case 'attributes':
                case 'requestedFormat':
                case 'locale':
                case 'host':
                case 'convention':
                case 'application':
                case 'method':
                case 'parametersString':
                case 'acceptedFormat':
                case 'httpRequestAttributes':
                case 'includedRelationships':
                case 'scopes':
                    $values[$arrayKey] = $value;

                    break;
                case 'pagination':
                case 'resource':
                case 'requestUser':
                case 'requestCustomer':
                case 'requestWarehouse':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'filters':
                case 'parentResources':
                case 'sortings':
                case 'sparseResources':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'meta':
                case 'queryFields':
                case 'path':
                case 'content':
                case 'attributes':
                case 'requestedFormat':
                case 'locale':
                case 'host':
                case 'convention':
                case 'application':
                case 'method':
                case 'parametersString':
                case 'acceptedFormat':
                case 'httpRequestAttributes':
                case 'includedRelationships':
                case 'scopes':
                    $values[$arrayKey] = $value;

                    break;
                case 'pagination':
                case 'resource':
                case 'requestUser':
                case 'requestCustomer':
                case 'requestWarehouse':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'filters':
                case 'parentResources':
                case 'sortings':
                case 'sparseResources':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->filters = $this->filters ?: new ArrayObject();
        $this->parentResources = $this->parentResources ?: new ArrayObject();
        $this->sortings = $this->sortings ?: new ArrayObject();
        $this->sparseResources = $this->sparseResources ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'meta' => $this->meta,
            'queryFields' => $this->queryFields,
            'path' => $this->path,
            'content' => $this->content,
            'attributes' => $this->attributes,
            'requestedFormat' => $this->requestedFormat,
            'locale' => $this->locale,
            'host' => $this->host,
            'convention' => $this->convention,
            'application' => $this->application,
            'method' => $this->method,
            'parametersString' => $this->parametersString,
            'acceptedFormat' => $this->acceptedFormat,
            'httpRequestAttributes' => $this->httpRequestAttributes,
            'includedRelationships' => $this->includedRelationships,
            'scopes' => $this->scopes,
            'pagination' => $this->pagination,
            'resource' => $this->resource,
            'requestUser' => $this->requestUser,
            'requestCustomer' => $this->requestCustomer,
            'requestWarehouse' => $this->requestWarehouse,
            'filters' => $this->filters,
            'parentResources' => $this->parentResources,
            'sortings' => $this->sortings,
            'sparseResources' => $this->sparseResources,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'meta' => $this->meta,
            'query_fields' => $this->queryFields,
            'path' => $this->path,
            'content' => $this->content,
            'attributes' => $this->attributes,
            'requested_format' => $this->requestedFormat,
            'locale' => $this->locale,
            'host' => $this->host,
            'convention' => $this->convention,
            'application' => $this->application,
            'method' => $this->method,
            'parameters_string' => $this->parametersString,
            'accepted_format' => $this->acceptedFormat,
            'http_request_attributes' => $this->httpRequestAttributes,
            'included_relationships' => $this->includedRelationships,
            'scopes' => $this->scopes,
            'pagination' => $this->pagination,
            'resource' => $this->resource,
            'request_user' => $this->requestUser,
            'request_customer' => $this->requestCustomer,
            'request_warehouse' => $this->requestWarehouse,
            'filters' => $this->filters,
            'parent_resources' => $this->parentResources,
            'sortings' => $this->sortings,
            'sparse_resources' => $this->sparseResources,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'meta' => $this->meta instanceof AbstractTransfer ? $this->meta->toArray(true, false) : $this->meta,
            'query_fields' => $this->queryFields instanceof AbstractTransfer ? $this->queryFields->toArray(true, false) : $this->queryFields,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'content' => $this->content instanceof AbstractTransfer ? $this->content->toArray(true, false) : $this->content,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'requested_format' => $this->requestedFormat instanceof AbstractTransfer ? $this->requestedFormat->toArray(true, false) : $this->requestedFormat,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'host' => $this->host instanceof AbstractTransfer ? $this->host->toArray(true, false) : $this->host,
            'convention' => $this->convention instanceof AbstractTransfer ? $this->convention->toArray(true, false) : $this->convention,
            'application' => $this->application instanceof AbstractTransfer ? $this->application->toArray(true, false) : $this->application,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
            'parameters_string' => $this->parametersString instanceof AbstractTransfer ? $this->parametersString->toArray(true, false) : $this->parametersString,
            'accepted_format' => $this->acceptedFormat instanceof AbstractTransfer ? $this->acceptedFormat->toArray(true, false) : $this->acceptedFormat,
            'http_request_attributes' => $this->httpRequestAttributes instanceof AbstractTransfer ? $this->httpRequestAttributes->toArray(true, false) : $this->httpRequestAttributes,
            'included_relationships' => $this->includedRelationships instanceof AbstractTransfer ? $this->includedRelationships->toArray(true, false) : $this->includedRelationships,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, false) : $this->scopes,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'resource' => $this->resource instanceof AbstractTransfer ? $this->resource->toArray(true, false) : $this->resource,
            'request_user' => $this->requestUser instanceof AbstractTransfer ? $this->requestUser->toArray(true, false) : $this->requestUser,
            'request_customer' => $this->requestCustomer instanceof AbstractTransfer ? $this->requestCustomer->toArray(true, false) : $this->requestCustomer,
            'request_warehouse' => $this->requestWarehouse instanceof AbstractTransfer ? $this->requestWarehouse->toArray(true, false) : $this->requestWarehouse,
            'filters' => $this->filters instanceof AbstractTransfer ? $this->filters->toArray(true, false) : $this->addValuesToCollection($this->filters, true, false),
            'parent_resources' => $this->parentResources instanceof AbstractTransfer ? $this->parentResources->toArray(true, false) : $this->addValuesToCollection($this->parentResources, true, false),
            'sortings' => $this->sortings instanceof AbstractTransfer ? $this->sortings->toArray(true, false) : $this->addValuesToCollection($this->sortings, true, false),
            'sparse_resources' => $this->sparseResources instanceof AbstractTransfer ? $this->sparseResources->toArray(true, false) : $this->addValuesToCollection($this->sparseResources, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'meta' => $this->meta instanceof AbstractTransfer ? $this->meta->toArray(true, true) : $this->meta,
            'queryFields' => $this->queryFields instanceof AbstractTransfer ? $this->queryFields->toArray(true, true) : $this->queryFields,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'content' => $this->content instanceof AbstractTransfer ? $this->content->toArray(true, true) : $this->content,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'requestedFormat' => $this->requestedFormat instanceof AbstractTransfer ? $this->requestedFormat->toArray(true, true) : $this->requestedFormat,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'host' => $this->host instanceof AbstractTransfer ? $this->host->toArray(true, true) : $this->host,
            'convention' => $this->convention instanceof AbstractTransfer ? $this->convention->toArray(true, true) : $this->convention,
            'application' => $this->application instanceof AbstractTransfer ? $this->application->toArray(true, true) : $this->application,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
            'parametersString' => $this->parametersString instanceof AbstractTransfer ? $this->parametersString->toArray(true, true) : $this->parametersString,
            'acceptedFormat' => $this->acceptedFormat instanceof AbstractTransfer ? $this->acceptedFormat->toArray(true, true) : $this->acceptedFormat,
            'httpRequestAttributes' => $this->httpRequestAttributes instanceof AbstractTransfer ? $this->httpRequestAttributes->toArray(true, true) : $this->httpRequestAttributes,
            'includedRelationships' => $this->includedRelationships instanceof AbstractTransfer ? $this->includedRelationships->toArray(true, true) : $this->includedRelationships,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, true) : $this->scopes,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'resource' => $this->resource instanceof AbstractTransfer ? $this->resource->toArray(true, true) : $this->resource,
            'requestUser' => $this->requestUser instanceof AbstractTransfer ? $this->requestUser->toArray(true, true) : $this->requestUser,
            'requestCustomer' => $this->requestCustomer instanceof AbstractTransfer ? $this->requestCustomer->toArray(true, true) : $this->requestCustomer,
            'requestWarehouse' => $this->requestWarehouse instanceof AbstractTransfer ? $this->requestWarehouse->toArray(true, true) : $this->requestWarehouse,
            'filters' => $this->filters instanceof AbstractTransfer ? $this->filters->toArray(true, true) : $this->addValuesToCollection($this->filters, true, true),
            'parentResources' => $this->parentResources instanceof AbstractTransfer ? $this->parentResources->toArray(true, true) : $this->addValuesToCollection($this->parentResources, true, true),
            'sortings' => $this->sortings instanceof AbstractTransfer ? $this->sortings->toArray(true, true) : $this->addValuesToCollection($this->sortings, true, true),
            'sparseResources' => $this->sparseResources instanceof AbstractTransfer ? $this->sparseResources->toArray(true, true) : $this->addValuesToCollection($this->sparseResources, true, true),
        ];
    }
}
