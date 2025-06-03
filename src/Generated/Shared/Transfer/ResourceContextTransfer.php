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
class ResourceContextTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RESOURCE_TYPE = 'resourceType';

    /**
     * @var string
     */
    public const PATH_ANNOTATION = 'pathAnnotation';

    /**
     * @var string
     */
    public const RELATIONSHIPS = 'relationships';

    /**
     * @var string
     */
    public const DECLARED_METHODS = 'declaredMethods';

    /**
     * @var string
     */
    public const PARENT_RESOURCES = 'parentResources';

    /**
     * @var string
     */
    public const RESOURCE_PLUGIN_NAME = 'resourcePluginName';

    /**
     * @var string
     */
    public const CONTROLLER = 'controller';

    /**
     * @var string|null
     */
    protected $resourceType;

    /**
     * @var \Generated\Shared\Transfer\PathAnnotationTransfer|null
     */
    protected $pathAnnotation;

    /**
     * @var string|null
     */
    protected $relationships;

    /**
     * @var \Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer|null
     */
    protected $declaredMethods;

    /**
     * @var string[]
     */
    protected $parentResources = [];

    /**
     * @var string|null
     */
    protected $resourcePluginName;

    /**
     * @var string|null
     */
    protected $controller;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'resource_type' => 'resourceType',
        'resourceType' => 'resourceType',
        'ResourceType' => 'resourceType',
        'path_annotation' => 'pathAnnotation',
        'pathAnnotation' => 'pathAnnotation',
        'PathAnnotation' => 'pathAnnotation',
        'relationships' => 'relationships',
        'Relationships' => 'relationships',
        'declared_methods' => 'declaredMethods',
        'declaredMethods' => 'declaredMethods',
        'DeclaredMethods' => 'declaredMethods',
        'parent_resources' => 'parentResources',
        'parentResources' => 'parentResources',
        'ParentResources' => 'parentResources',
        'resource_plugin_name' => 'resourcePluginName',
        'resourcePluginName' => 'resourcePluginName',
        'ResourcePluginName' => 'resourcePluginName',
        'controller' => 'controller',
        'Controller' => 'controller',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::RESOURCE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'resource_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PATH_ANNOTATION => [
            'type' => 'Generated\Shared\Transfer\PathAnnotationTransfer',
            'type_shim' => null,
            'name_underscore' => 'path_annotation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RELATIONSHIPS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'relationships',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DECLARED_METHODS => [
            'type' => 'Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'declared_methods',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARENT_RESOURCES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'parent_resources',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESOURCE_PLUGIN_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'resource_plugin_name',
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
    ];

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @param string|null $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
        $this->modifiedProperties[self::RESOURCE_TYPE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @param string|null $resourceType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceTypeOrFail($resourceType)
    {
        if ($resourceType === null) {
            $this->throwNullValueException(static::RESOURCE_TYPE);
        }

        return $this->setResourceType($resourceType);
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResourceTypeOrFail()
    {
        if ($this->resourceType === null) {
            $this->throwNullValueException(static::RESOURCE_TYPE);
        }

        return $this->resourceType;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResourceType()
    {
        $this->assertPropertyIsSet(self::RESOURCE_TYPE);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueJsonApiConvention
     *
     * @param \Generated\Shared\Transfer\PathAnnotationTransfer|null $pathAnnotation
     *
     * @return $this
     */
    public function setPathAnnotation(PathAnnotationTransfer $pathAnnotation = null)
    {
        $this->pathAnnotation = $pathAnnotation;
        $this->modifiedProperties[self::PATH_ANNOTATION] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueJsonApiConvention
     *
     * @return \Generated\Shared\Transfer\PathAnnotationTransfer|null
     */
    public function getPathAnnotation()
    {
        return $this->pathAnnotation;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueJsonApiConvention
     *
     * @param \Generated\Shared\Transfer\PathAnnotationTransfer $pathAnnotation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPathAnnotationOrFail(PathAnnotationTransfer $pathAnnotation)
    {
        return $this->setPathAnnotation($pathAnnotation);
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PathAnnotationTransfer
     */
    public function getPathAnnotationOrFail()
    {
        if ($this->pathAnnotation === null) {
            $this->throwNullValueException(static::PATH_ANNOTATION);
        }

        return $this->pathAnnotation;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueJsonApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePathAnnotation()
    {
        $this->assertPropertyIsSet(self::PATH_ANNOTATION);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @param string|null $relationships
     *
     * @return $this
     */
    public function setRelationships($relationships)
    {
        $this->relationships = $relationships;
        $this->modifiedProperties[self::RELATIONSHIPS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @return string|null
     */
    public function getRelationships()
    {
        return $this->relationships;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @param string|null $relationships
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRelationshipsOrFail($relationships)
    {
        if ($relationships === null) {
            $this->throwNullValueException(static::RELATIONSHIPS);
        }

        return $this->setRelationships($relationships);
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRelationshipsOrFail()
    {
        if ($this->relationships === null) {
            $this->throwNullValueException(static::RELATIONSHIPS);
        }

        return $this->relationships;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueJsonApiConvention|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRelationships()
    {
        $this->assertPropertyIsSet(self::RELATIONSHIPS);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @param \Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer|null $declaredMethods
     *
     * @return $this
     */
    public function setDeclaredMethods(GlueResourceMethodCollectionTransfer $declaredMethods = null)
    {
        $this->declaredMethods = $declaredMethods;
        $this->modifiedProperties[self::DECLARED_METHODS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @return \Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer|null
     */
    public function getDeclaredMethods()
    {
        return $this->declaredMethods;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @param \Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer $declaredMethods
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDeclaredMethodsOrFail(GlueResourceMethodCollectionTransfer $declaredMethods)
    {
        return $this->setDeclaredMethods($declaredMethods);
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer
     */
    public function getDeclaredMethodsOrFail()
    {
        if ($this->declaredMethods === null) {
            $this->throwNullValueException(static::DECLARED_METHODS);
        }

        return $this->declaredMethods;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeclaredMethods()
    {
        $this->assertPropertyIsSet(self::DECLARED_METHODS);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string[]|null $parentResources
     *
     * @return $this
     */
    public function setParentResources(array $parentResources = null)
    {
        if ($parentResources === null) {
            $parentResources = [];
        }

        $this->parentResources = $parentResources;
        $this->modifiedProperties[self::PARENT_RESOURCES] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string[]
     */
    public function getParentResources()
    {
        return $this->parentResources;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string $parentResource
     *
     * @return $this
     */
    public function addParentResource($parentResource)
    {
        $this->parentResources[] = $parentResource;
        $this->modifiedProperties[self::PARENT_RESOURCES] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParentResources()
    {
        $this->assertPropertyIsSet(self::PARENT_RESOURCES);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
     *
     * @param string|null $resourcePluginName
     *
     * @return $this
     */
    public function setResourcePluginName($resourcePluginName)
    {
        $this->resourcePluginName = $resourcePluginName;
        $this->modifiedProperties[self::RESOURCE_PLUGIN_NAME] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getResourcePluginName()
    {
        return $this->resourcePluginName;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
     *
     * @param string|null $resourcePluginName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourcePluginNameOrFail($resourcePluginName)
    {
        if ($resourcePluginName === null) {
            $this->throwNullValueException(static::RESOURCE_PLUGIN_NAME);
        }

        return $this->setResourcePluginName($resourcePluginName);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResourcePluginNameOrFail()
    {
        if ($this->resourcePluginName === null) {
            $this->throwNullValueException(static::RESOURCE_PLUGIN_NAME);
        }

        return $this->resourcePluginName;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResourcePluginName()
    {
        $this->assertPropertyIsSet(self::RESOURCE_PLUGIN_NAME);

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
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
                case 'resourceType':
                case 'relationships':
                case 'parentResources':
                case 'resourcePluginName':
                case 'controller':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'pathAnnotation':
                case 'declaredMethods':
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
                case 'resourceType':
                case 'relationships':
                case 'parentResources':
                case 'resourcePluginName':
                case 'controller':
                    $values[$arrayKey] = $value;

                    break;
                case 'pathAnnotation':
                case 'declaredMethods':
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
                case 'resourceType':
                case 'relationships':
                case 'parentResources':
                case 'resourcePluginName':
                case 'controller':
                    $values[$arrayKey] = $value;

                    break;
                case 'pathAnnotation':
                case 'declaredMethods':
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
            'resourceType' => $this->resourceType,
            'relationships' => $this->relationships,
            'parentResources' => $this->parentResources,
            'resourcePluginName' => $this->resourcePluginName,
            'controller' => $this->controller,
            'pathAnnotation' => $this->pathAnnotation,
            'declaredMethods' => $this->declaredMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'resource_type' => $this->resourceType,
            'relationships' => $this->relationships,
            'parent_resources' => $this->parentResources,
            'resource_plugin_name' => $this->resourcePluginName,
            'controller' => $this->controller,
            'path_annotation' => $this->pathAnnotation,
            'declared_methods' => $this->declaredMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'resource_type' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, false) : $this->resourceType,
            'relationships' => $this->relationships instanceof AbstractTransfer ? $this->relationships->toArray(true, false) : $this->relationships,
            'parent_resources' => $this->parentResources instanceof AbstractTransfer ? $this->parentResources->toArray(true, false) : $this->parentResources,
            'resource_plugin_name' => $this->resourcePluginName instanceof AbstractTransfer ? $this->resourcePluginName->toArray(true, false) : $this->resourcePluginName,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, false) : $this->controller,
            'path_annotation' => $this->pathAnnotation instanceof AbstractTransfer ? $this->pathAnnotation->toArray(true, false) : $this->pathAnnotation,
            'declared_methods' => $this->declaredMethods instanceof AbstractTransfer ? $this->declaredMethods->toArray(true, false) : $this->declaredMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'resourceType' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, true) : $this->resourceType,
            'relationships' => $this->relationships instanceof AbstractTransfer ? $this->relationships->toArray(true, true) : $this->relationships,
            'parentResources' => $this->parentResources instanceof AbstractTransfer ? $this->parentResources->toArray(true, true) : $this->parentResources,
            'resourcePluginName' => $this->resourcePluginName instanceof AbstractTransfer ? $this->resourcePluginName->toArray(true, true) : $this->resourcePluginName,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, true) : $this->controller,
            'pathAnnotation' => $this->pathAnnotation instanceof AbstractTransfer ? $this->pathAnnotation->toArray(true, true) : $this->pathAnnotation,
            'declaredMethods' => $this->declaredMethods instanceof AbstractTransfer ? $this->declaredMethods->toArray(true, true) : $this->declaredMethods,
        ];
    }
}
