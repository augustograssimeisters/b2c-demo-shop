<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractAttributesTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class GlueResourceTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const METHOD = 'method';

    /**
     * @var string
     */
    public const ID = 'id';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const RESOURCE_NAME = 'resourceName';

    /**
     * @var string
     */
    public const CONTROLLER = 'controller';

    /**
     * @var string
     */
    public const CONTROLLER_EXECUTABLE = 'controllerExecutable';

    /**
     * @var string
     */
    public const ACTION = 'action';

    /**
     * @var string
     */
    public const ROUTE = 'route';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const SCOPE = 'scope';

    /**
     * @var string
     */
    public const LINKS = 'links';

    /**
     * @var string
     */
    public const SELF = 'self';

    /**
     * @var string
     */
    public const RELATIONSHIPS = 'relationships';

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var \Spryker\Shared\Kernel\Transfer\AbstractTransfer|\null
     */
    protected $attributes;

    /**
     * @var string|null
     */
    protected $resourceName;

    /**
     * @var string|null
     */
    protected $controller;

    /**
     * @var string[]
     */
    protected $controllerExecutable = [];

    /**
     * @var string|null
     */
    protected $action;

    /**
     * @var string|null
     */
    protected $route;

    /**
     * @var string[]
     */
    protected $parameters = [];

    /**
     * @var string|null
     */
    protected $scope;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\GlueLinkTransfer>
     */
    protected $links;

    /**
     * @var \Generated\Shared\Transfer\GlueLinkTransfer|null
     */
    protected $self;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\GlueRelationshipTransfer>
     */
    protected $relationships;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'method' => 'method',
        'Method' => 'method',
        'id' => 'id',
        'Id' => 'id',
        'type' => 'type',
        'Type' => 'type',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'resource_name' => 'resourceName',
        'resourceName' => 'resourceName',
        'ResourceName' => 'resourceName',
        'controller' => 'controller',
        'Controller' => 'controller',
        'controller_executable' => 'controllerExecutable',
        'controllerExecutable' => 'controllerExecutable',
        'ControllerExecutable' => 'controllerExecutable',
        'action' => 'action',
        'Action' => 'action',
        'route' => 'route',
        'Route' => 'route',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'scope' => 'scope',
        'Scope' => 'scope',
        'links' => 'links',
        'Links' => 'links',
        'self' => 'self',
        'Self' => 'self',
        'relationships' => 'relationships',
        'Relationships' => 'relationships',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ATTRIBUTES => [
            'type' => 'Spryker\Shared\Kernel\Transfer\AbstractAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'attributes',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESOURCE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'resource_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTROLLER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'controller',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTROLLER_EXECUTABLE => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'controller_executable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'action',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ROUTE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'route',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'parameters',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SCOPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'scope',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LINKS => [
            'type' => 'Generated\Shared\Transfer\GlueLinkTransfer',
            'type_shim' => null,
            'name_underscore' => 'links',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SELF => [
            'type' => 'Generated\Shared\Transfer\GlueLinkTransfer',
            'type_shim' => null,
            'name_underscore' => 'self',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RELATIONSHIPS => [
            'type' => 'Generated\Shared\Transfer\GlueRelationshipTransfer',
            'type_shim' => null,
            'name_underscore' => 'relationships',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
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
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
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
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
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
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
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
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|UsersBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @param string|null $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        $this->modifiedProperties[self::ID] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|UsersBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|UsersBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @param string|null $id
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOrFail($id)
    {
        if ($id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->setId($id);
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|UsersBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdOrFail()
    {
        if ($this->id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->id;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|UsersBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireId()
    {
        $this->assertPropertyIsSet(self::ID);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|TestifyBackendApi|UsersBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|TestifyBackendApi|UsersBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|TestifyBackendApi|UsersBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|TestifyBackendApi|UsersBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|TestifyBackendApi|UsersBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|OauthApi|OauthBackendApi|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|TestifyBackendApi|UsersBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @param \Spryker\Shared\Kernel\Transfer\AbstractTransfer|null $attributes
     *
     * @return $this
     */
    public function setAttributes(AbstractTransfer $attributes = null)
    {
        if ($attributes !== null && !$attributes instanceof AbstractAttributesTransfer) {
            $attributes = (new AbstractAttributesTransfer())
                ->setAbstractAttributesType(get_class($attributes))
                ->fromArray($attributes->toArray(), true);
        }

        $this->attributes = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|OauthApi|OauthBackendApi|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|TestifyBackendApi|UsersBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @return \Spryker\Shared\Kernel\Transfer\AbstractTransfer|null
     */
    public function getAttributes()
    {
        return $this->attributes ? $this->attributes->getValueTransfer() : null;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|OauthApi|OauthBackendApi|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|TestifyBackendApi|UsersBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @param \Spryker\Shared\Kernel\Transfer\AbstractTransfer $attributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAttributesOrFail(AbstractTransfer $attributes)
    {
        return $this->setAttributes($attributes);
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|OauthApi|OauthBackendApi|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|TestifyBackendApi|UsersBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\Shared\Kernel\Transfer\AbstractTransfer
     */
    public function getAttributesOrFail()
    {
        if ($this->attributes === null) {
            $this->throwNullValueException(static::ATTRIBUTES);
        }

        return $this->attributes ? $this->attributes->getValueTransfer() : null;
    }

    /**
     * @module DynamicEntityBackendApi|GlueApplication|GlueJsonApiConvention|OauthApi|OauthBackendApi|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|StoresApi|TestifyBackendApi|UsersBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi|WarehousesBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
     *
     * @param string|null $resourceName
     *
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        $this->resourceName = $resourceName;
        $this->modifiedProperties[self::RESOURCE_NAME] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getResourceName()
    {
        return $this->resourceName;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
     *
     * @param string|null $resourceName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceNameOrFail($resourceName)
    {
        if ($resourceName === null) {
            $this->throwNullValueException(static::RESOURCE_NAME);
        }

        return $this->setResourceName($resourceName);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResourceNameOrFail()
    {
        if ($this->resourceName === null) {
            $this->throwNullValueException(static::RESOURCE_NAME);
        }

        return $this->resourceName;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResourceName()
    {
        $this->assertPropertyIsSet(self::RESOURCE_NAME);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $controller
     *
     * @return $this
     */
    public function setController($controller)
    {
        $this->controller = $controller;
        $this->modifiedProperties[self::CONTROLLER] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $controller
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setControllerOrFail($controller)
    {
        if ($controller === null) {
            $this->throwNullValueException(static::CONTROLLER);
        }

        return $this->setController($controller);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getControllerOrFail()
    {
        if ($this->controller === null) {
            $this->throwNullValueException(static::CONTROLLER);
        }

        return $this->controller;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireController()
    {
        $this->assertPropertyIsSet(self::CONTROLLER);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string[]|null $controllerExecutable
     *
     * @return $this
     */
    public function setControllerExecutable(array $controllerExecutable = null)
    {
        if ($controllerExecutable === null) {
            $controllerExecutable = [];
        }

        $this->controllerExecutable = $controllerExecutable;
        $this->modifiedProperties[self::CONTROLLER_EXECUTABLE] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string[]
     */
    public function getControllerExecutable()
    {
        return $this->controllerExecutable;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string $controllerExecutable
     *
     * @return $this
     */
    public function addControllerExecutable($controllerExecutable)
    {
        $this->controllerExecutable[] = $controllerExecutable;
        $this->modifiedProperties[self::CONTROLLER_EXECUTABLE] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireControllerExecutable()
    {
        $this->assertPropertyIsSet(self::CONTROLLER_EXECUTABLE);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        $this->modifiedProperties[self::ACTION] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $action
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActionOrFail($action)
    {
        if ($action === null) {
            $this->throwNullValueException(static::ACTION);
        }

        return $this->setAction($action);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getActionOrFail()
    {
        if ($this->action === null) {
            $this->throwNullValueException(static::ACTION);
        }

        return $this->action;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAction()
    {
        $this->assertPropertyIsSet(self::ACTION);

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @param string|null $route
     *
     * @return $this
     */
    public function setRoute($route)
    {
        $this->route = $route;
        $this->modifiedProperties[self::ROUTE] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @return string|null
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @module GlueApplication
     *
     * @param string|null $route
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRouteOrFail($route)
    {
        if ($route === null) {
            $this->throwNullValueException(static::ROUTE);
        }

        return $this->setRoute($route);
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRouteOrFail()
    {
        if ($this->route === null) {
            $this->throwNullValueException(static::ROUTE);
        }

        return $this->route;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRoute()
    {
        $this->assertPropertyIsSet(self::ROUTE);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string[]|null $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters = null)
    {
        if ($parameters === null) {
            $parameters = [];
        }

        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string $parameter
     *
     * @return $this
     */
    public function addParameter($parameter)
    {
        $this->parameters[] = $parameter;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameters()
    {
        $this->assertPropertyIsSet(self::PARAMETERS);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        $this->modifiedProperties[self::SCOPE] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $scope
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setScopeOrFail($scope)
    {
        if ($scope === null) {
            $this->throwNullValueException(static::SCOPE);
        }

        return $this->setScope($scope);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getScopeOrFail()
    {
        if ($this->scope === null) {
            $this->throwNullValueException(static::SCOPE);
        }

        return $this->scope;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireScope()
    {
        $this->assertPropertyIsSet(self::SCOPE);

        return $this;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\GlueLinkTransfer> $links
     *
     * @return $this
     */
    public function setLinks(ArrayObject $links)
    {
        $this->links = $links;
        $this->modifiedProperties[self::LINKS] = true;

        return $this;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\GlueLinkTransfer>
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @param \Generated\Shared\Transfer\GlueLinkTransfer $link
     *
     * @return $this
     */
    public function addLink(GlueLinkTransfer $link)
    {
        $this->links[] = $link;
        $this->modifiedProperties[self::LINKS] = true;

        return $this;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLinks()
    {
        $this->assertCollectionPropertyIsSet(self::LINKS);

        return $this;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @param \Generated\Shared\Transfer\GlueLinkTransfer|null $self
     *
     * @return $this
     */
    public function setSelf(GlueLinkTransfer $self = null)
    {
        $this->self = $self;
        $this->modifiedProperties[self::SELF] = true;

        return $this;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @return \Generated\Shared\Transfer\GlueLinkTransfer|null
     */
    public function getSelf()
    {
        return $this->self;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @param \Generated\Shared\Transfer\GlueLinkTransfer $self
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSelfOrFail(GlueLinkTransfer $self)
    {
        return $this->setSelf($self);
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GlueLinkTransfer
     */
    public function getSelfOrFail()
    {
        if ($this->self === null) {
            $this->throwNullValueException(static::SELF);
        }

        return $this->self;
    }

    /**
     * @module GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSelf()
    {
        $this->assertPropertyIsSet(self::SELF);

        return $this;
    }

    /**
     * @module GlueJsonApiConvention|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|UsersBackendApi|WarehouseUsersBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\GlueRelationshipTransfer> $relationships
     *
     * @return $this
     */
    public function setRelationships(ArrayObject $relationships)
    {
        $this->relationships = $relationships;
        $this->modifiedProperties[self::RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module GlueJsonApiConvention|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|UsersBackendApi|WarehouseUsersBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\GlueRelationshipTransfer>
     */
    public function getRelationships()
    {
        return $this->relationships;
    }

    /**
     * @module GlueJsonApiConvention|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|UsersBackendApi|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\GlueRelationshipTransfer $relationship
     *
     * @return $this
     */
    public function addRelationship(GlueRelationshipTransfer $relationship)
    {
        $this->relationships[] = $relationship;
        $this->modifiedProperties[self::RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module GlueJsonApiConvention|PickingListsBackendApi|PickingListsUsersBackendApi|PickingListsWarehousesBackendApi|ProductImageSetsBackendApi|ProductsBackendApi|SalesOrdersBackendApi|ShipmentsBackendApi|UsersBackendApi|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRelationships()
    {
        $this->assertCollectionPropertyIsSet(self::RELATIONSHIPS);

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
                case 'method':
                case 'id':
                case 'type':
                case 'resourceName':
                case 'controller':
                case 'controllerExecutable':
                case 'action':
                case 'route':
                case 'parameters':
                case 'scope':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'attributes':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\AbstractAttributesTransfer $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'self':
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
                case 'links':
                case 'relationships':
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
                case 'method':
                case 'id':
                case 'type':
                case 'resourceName':
                case 'controller':
                case 'controllerExecutable':
                case 'action':
                case 'route':
                case 'parameters':
                case 'scope':
                    $values[$arrayKey] = $value;

                    break;
                case 'self':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'links':
                case 'relationships':
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
                case 'method':
                case 'id':
                case 'type':
                case 'resourceName':
                case 'controller':
                case 'controllerExecutable':
                case 'action':
                case 'route':
                case 'parameters':
                case 'scope':
                    $values[$arrayKey] = $value;

                    break;
                case 'self':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'links':
                case 'relationships':
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
        $this->links = $this->links ?: new ArrayObject();
        $this->relationships = $this->relationships ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'method' => $this->method,
            'id' => $this->id,
            'type' => $this->type,
            'resourceName' => $this->resourceName,
            'controller' => $this->controller,
            'controllerExecutable' => $this->controllerExecutable,
            'action' => $this->action,
            'route' => $this->route,
            'parameters' => $this->parameters,
            'scope' => $this->scope,
            'attributes' => $this->attributes,
            'self' => $this->self,
            'links' => $this->links,
            'relationships' => $this->relationships,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'method' => $this->method,
            'id' => $this->id,
            'type' => $this->type,
            'resource_name' => $this->resourceName,
            'controller' => $this->controller,
            'controller_executable' => $this->controllerExecutable,
            'action' => $this->action,
            'route' => $this->route,
            'parameters' => $this->parameters,
            'scope' => $this->scope,
            'attributes' => $this->attributes,
            'self' => $this->self,
            'links' => $this->links,
            'relationships' => $this->relationships,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, false) : $this->id,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'resource_name' => $this->resourceName instanceof AbstractTransfer ? $this->resourceName->toArray(true, false) : $this->resourceName,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, false) : $this->controller,
            'controller_executable' => $this->controllerExecutable instanceof AbstractTransfer ? $this->controllerExecutable->toArray(true, false) : $this->controllerExecutable,
            'action' => $this->action instanceof AbstractTransfer ? $this->action->toArray(true, false) : $this->action,
            'route' => $this->route instanceof AbstractTransfer ? $this->route->toArray(true, false) : $this->route,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->parameters,
            'scope' => $this->scope instanceof AbstractTransfer ? $this->scope->toArray(true, false) : $this->scope,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'self' => $this->self instanceof AbstractTransfer ? $this->self->toArray(true, false) : $this->self,
            'links' => $this->links instanceof AbstractTransfer ? $this->links->toArray(true, false) : $this->addValuesToCollection($this->links, true, false),
            'relationships' => $this->relationships instanceof AbstractTransfer ? $this->relationships->toArray(true, false) : $this->addValuesToCollection($this->relationships, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, true) : $this->id,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'resourceName' => $this->resourceName instanceof AbstractTransfer ? $this->resourceName->toArray(true, true) : $this->resourceName,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, true) : $this->controller,
            'controllerExecutable' => $this->controllerExecutable instanceof AbstractTransfer ? $this->controllerExecutable->toArray(true, true) : $this->controllerExecutable,
            'action' => $this->action instanceof AbstractTransfer ? $this->action->toArray(true, true) : $this->action,
            'route' => $this->route instanceof AbstractTransfer ? $this->route->toArray(true, true) : $this->route,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->parameters,
            'scope' => $this->scope instanceof AbstractTransfer ? $this->scope->toArray(true, true) : $this->scope,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'self' => $this->self instanceof AbstractTransfer ? $this->self->toArray(true, true) : $this->self,
            'links' => $this->links instanceof AbstractTransfer ? $this->links->toArray(true, true) : $this->addValuesToCollection($this->links, true, true),
            'relationships' => $this->relationships instanceof AbstractTransfer ? $this->relationships->toArray(true, true) : $this->addValuesToCollection($this->relationships, true, true),
        ];
    }
}
