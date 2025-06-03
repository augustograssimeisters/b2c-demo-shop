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
class GlueResourceMethodConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_PROTECTED = 'isProtected';

    /**
     * @var string
     */
    public const IS_SNAKE_CASED = 'isSnakeCased';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const CONTROLLER = 'controller';

    /**
     * @var string
     */
    public const ACTION = 'action';

    /**
     * @var string
     */
    public const IS_SINGULAR_RESPONSE = 'isSingularResponse';

    /**
     * @var bool|null
     */
    protected $isProtected;

    /**
     * @var bool|null
     */
    protected $isSnakeCased;

    /**
     * @var string|null
     */
    protected $attributes;

    /**
     * @var string|null
     */
    protected $controller;

    /**
     * @var string|null
     */
    protected $action;

    /**
     * @var bool|null
     */
    protected $isSingularResponse;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_protected' => 'isProtected',
        'isProtected' => 'isProtected',
        'IsProtected' => 'isProtected',
        'is_snake_cased' => 'isSnakeCased',
        'isSnakeCased' => 'isSnakeCased',
        'IsSnakeCased' => 'isSnakeCased',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'controller' => 'controller',
        'Controller' => 'controller',
        'action' => 'action',
        'Action' => 'action',
        'is_singular_response' => 'isSingularResponse',
        'isSingularResponse' => 'isSingularResponse',
        'IsSingularResponse' => 'isSingularResponse',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_PROTECTED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_protected',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SNAKE_CASED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_snake_cased',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ATTRIBUTES => [
            'type' => 'string',
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
        self::IS_SINGULAR_RESPONSE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_singular_response',
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
     * @module DocumentationGeneratorOpenApi|GlueStorefrontApiApplicationAuthorizationConnector|ProductsBackendApi
     *
     * @param bool|null $isProtected
     *
     * @return $this
     */
    public function setIsProtected($isProtected)
    {
        $this->isProtected = $isProtected;
        $this->modifiedProperties[self::IS_PROTECTED] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueStorefrontApiApplicationAuthorizationConnector|ProductsBackendApi
     *
     * @return bool|null
     */
    public function getIsProtected()
    {
        return $this->isProtected;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueStorefrontApiApplicationAuthorizationConnector|ProductsBackendApi
     *
     * @param bool|null $isProtected
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsProtectedOrFail($isProtected)
    {
        if ($isProtected === null) {
            $this->throwNullValueException(static::IS_PROTECTED);
        }

        return $this->setIsProtected($isProtected);
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueStorefrontApiApplicationAuthorizationConnector|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsProtectedOrFail()
    {
        if ($this->isProtected === null) {
            $this->throwNullValueException(static::IS_PROTECTED);
        }

        return $this->isProtected;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueStorefrontApiApplicationAuthorizationConnector|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsProtected()
    {
        $this->assertPropertyIsSet(self::IS_PROTECTED);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|OauthApi|OauthBackendApi|StoresApi
     *
     * @param bool|null $isSnakeCased
     *
     * @return $this
     */
    public function setIsSnakeCased($isSnakeCased)
    {
        $this->isSnakeCased = $isSnakeCased;
        $this->modifiedProperties[self::IS_SNAKE_CASED] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|OauthApi|OauthBackendApi|StoresApi
     *
     * @return bool|null
     */
    public function getIsSnakeCased()
    {
        return $this->isSnakeCased;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|OauthApi|OauthBackendApi|StoresApi
     *
     * @param bool|null $isSnakeCased
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSnakeCasedOrFail($isSnakeCased)
    {
        if ($isSnakeCased === null) {
            $this->throwNullValueException(static::IS_SNAKE_CASED);
        }

        return $this->setIsSnakeCased($isSnakeCased);
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|OauthApi|OauthBackendApi|StoresApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSnakeCasedOrFail()
    {
        if ($this->isSnakeCased === null) {
            $this->throwNullValueException(static::IS_SNAKE_CASED);
        }

        return $this->isSnakeCased;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|OauthApi|OauthBackendApi|StoresApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSnakeCased()
    {
        $this->assertPropertyIsSet(self::IS_SNAKE_CASED);

        return $this;
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|StoresApi|TestifyBackendApi|WarehouseUsersBackendApi
     *
     * @param string|null $attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|StoresApi|TestifyBackendApi|WarehouseUsersBackendApi
     *
     * @return string|null
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|StoresApi|TestifyBackendApi|WarehouseUsersBackendApi
     *
     * @param string|null $attributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAttributesOrFail($attributes)
    {
        if ($attributes === null) {
            $this->throwNullValueException(static::ATTRIBUTES);
        }

        return $this->setAttributes($attributes);
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|StoresApi|TestifyBackendApi|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAttributesOrFail()
    {
        if ($this->attributes === null) {
            $this->throwNullValueException(static::ATTRIBUTES);
        }

        return $this->attributes;
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|ProductsBackendApi|PushNotificationsBackendApi|StoresApi|TestifyBackendApi|WarehouseUsersBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|PickingListsBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|PickingListsBackendApi
     *
     * @return string|null
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|PickingListsBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|PickingListsBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|PickingListsBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|PushNotificationsBackendApi|StoresApi|TestifyBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|PushNotificationsBackendApi|StoresApi|TestifyBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|PushNotificationsBackendApi|StoresApi|TestifyBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|PushNotificationsBackendApi|StoresApi|TestifyBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|OauthApi|OauthBackendApi|PickingListsBackendApi|PushNotificationsBackendApi|StoresApi|TestifyBackendApi|WarehouseOauthBackendApi|WarehouseUsersBackendApi
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
     * @module GlueApplication|OauthApi|OauthBackendApi|StoresApi|TestifyBackendApi
     *
     * @param bool|null $isSingularResponse
     *
     * @return $this
     */
    public function setIsSingularResponse($isSingularResponse)
    {
        $this->isSingularResponse = $isSingularResponse;
        $this->modifiedProperties[self::IS_SINGULAR_RESPONSE] = true;

        return $this;
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi|StoresApi|TestifyBackendApi
     *
     * @return bool|null
     */
    public function getIsSingularResponse()
    {
        return $this->isSingularResponse;
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi|StoresApi|TestifyBackendApi
     *
     * @param bool|null $isSingularResponse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSingularResponseOrFail($isSingularResponse)
    {
        if ($isSingularResponse === null) {
            $this->throwNullValueException(static::IS_SINGULAR_RESPONSE);
        }

        return $this->setIsSingularResponse($isSingularResponse);
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi|StoresApi|TestifyBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSingularResponseOrFail()
    {
        if ($this->isSingularResponse === null) {
            $this->throwNullValueException(static::IS_SINGULAR_RESPONSE);
        }

        return $this->isSingularResponse;
    }

    /**
     * @module GlueApplication|OauthApi|OauthBackendApi|StoresApi|TestifyBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSingularResponse()
    {
        $this->assertPropertyIsSet(self::IS_SINGULAR_RESPONSE);

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
                case 'isProtected':
                case 'isSnakeCased':
                case 'attributes':
                case 'controller':
                case 'action':
                case 'isSingularResponse':
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
                case 'isProtected':
                case 'isSnakeCased':
                case 'attributes':
                case 'controller':
                case 'action':
                case 'isSingularResponse':
                    $values[$arrayKey] = $value;

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
                case 'isProtected':
                case 'isSnakeCased':
                case 'attributes':
                case 'controller':
                case 'action':
                case 'isSingularResponse':
                    $values[$arrayKey] = $value;

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
            'isProtected' => $this->isProtected,
            'isSnakeCased' => $this->isSnakeCased,
            'attributes' => $this->attributes,
            'controller' => $this->controller,
            'action' => $this->action,
            'isSingularResponse' => $this->isSingularResponse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_protected' => $this->isProtected,
            'is_snake_cased' => $this->isSnakeCased,
            'attributes' => $this->attributes,
            'controller' => $this->controller,
            'action' => $this->action,
            'is_singular_response' => $this->isSingularResponse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_protected' => $this->isProtected instanceof AbstractTransfer ? $this->isProtected->toArray(true, false) : $this->isProtected,
            'is_snake_cased' => $this->isSnakeCased instanceof AbstractTransfer ? $this->isSnakeCased->toArray(true, false) : $this->isSnakeCased,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, false) : $this->controller,
            'action' => $this->action instanceof AbstractTransfer ? $this->action->toArray(true, false) : $this->action,
            'is_singular_response' => $this->isSingularResponse instanceof AbstractTransfer ? $this->isSingularResponse->toArray(true, false) : $this->isSingularResponse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isProtected' => $this->isProtected instanceof AbstractTransfer ? $this->isProtected->toArray(true, true) : $this->isProtected,
            'isSnakeCased' => $this->isSnakeCased instanceof AbstractTransfer ? $this->isSnakeCased->toArray(true, true) : $this->isSnakeCased,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, true) : $this->controller,
            'action' => $this->action instanceof AbstractTransfer ? $this->action->toArray(true, true) : $this->action,
            'isSingularResponse' => $this->isSingularResponse instanceof AbstractTransfer ? $this->isSingularResponse->toArray(true, true) : $this->isSingularResponse,
        ];
    }
}
