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
class ApiApplicationSchemaContextTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FILE_NAME = 'fileName';

    /**
     * @var string
     */
    public const APPLICATION = 'application';

    /**
     * @var string
     */
    public const HOST = 'host';

    /**
     * @var string
     */
    public const RESOURCE_CONTEXTS = 'resourceContexts';

    /**
     * @var string
     */
    public const RELATIONSHIP_PLUGINS_CONTEXTS = 'relationshipPluginsContexts';

    /**
     * @var string
     */
    public const CUSTOM_ROUTES_CONTEXTS = 'customRoutesContexts';

    /**
     * @var string
     */
    public const DYNAMIC_ENTITY_CONFIGURATIONS = 'dynamicEntityConfigurations';

    /**
     * @var string|null
     */
    protected $fileName;

    /**
     * @var string|null
     */
    protected $application;

    /**
     * @var string|null
     */
    protected $host;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ResourceContextTransfer>
     */
    protected $resourceContexts;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\RelationshipPluginsContextTransfer>
     */
    protected $relationshipPluginsContexts;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\CustomRoutesContextTransfer>
     */
    protected $customRoutesContexts;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DynamicEntityConfigurationTransfer>
     */
    protected $dynamicEntityConfigurations;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'file_name' => 'fileName',
        'fileName' => 'fileName',
        'FileName' => 'fileName',
        'application' => 'application',
        'Application' => 'application',
        'host' => 'host',
        'Host' => 'host',
        'resource_contexts' => 'resourceContexts',
        'resourceContexts' => 'resourceContexts',
        'ResourceContexts' => 'resourceContexts',
        'relationship_plugins_contexts' => 'relationshipPluginsContexts',
        'relationshipPluginsContexts' => 'relationshipPluginsContexts',
        'RelationshipPluginsContexts' => 'relationshipPluginsContexts',
        'custom_routes_contexts' => 'customRoutesContexts',
        'customRoutesContexts' => 'customRoutesContexts',
        'CustomRoutesContexts' => 'customRoutesContexts',
        'dynamic_entity_configurations' => 'dynamicEntityConfigurations',
        'dynamicEntityConfigurations' => 'dynamicEntityConfigurations',
        'DynamicEntityConfigurations' => 'dynamicEntityConfigurations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FILE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'file_name',
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
        self::RESOURCE_CONTEXTS => [
            'type' => 'Generated\Shared\Transfer\ResourceContextTransfer',
            'type_shim' => null,
            'name_underscore' => 'resource_contexts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RELATIONSHIP_PLUGINS_CONTEXTS => [
            'type' => 'Generated\Shared\Transfer\RelationshipPluginsContextTransfer',
            'type_shim' => null,
            'name_underscore' => 'relationship_plugins_contexts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOM_ROUTES_CONTEXTS => [
            'type' => 'Generated\Shared\Transfer\CustomRoutesContextTransfer',
            'type_shim' => null,
            'name_underscore' => 'custom_routes_contexts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DYNAMIC_ENTITY_CONFIGURATIONS => [
            'type' => 'Generated\Shared\Transfer\DynamicEntityConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'dynamic_entity_configurations',
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
     * @module DocumentationGeneratorApi
     *
     * @param string|null $fileName
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        $this->modifiedProperties[self::FILE_NAME] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorApi
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @module DocumentationGeneratorApi
     *
     * @param string|null $fileName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFileNameOrFail($fileName)
    {
        if ($fileName === null) {
            $this->throwNullValueException(static::FILE_NAME);
        }

        return $this->setFileName($fileName);
    }

    /**
     * @module DocumentationGeneratorApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFileNameOrFail()
    {
        if ($this->fileName === null) {
            $this->throwNullValueException(static::FILE_NAME);
        }

        return $this->fileName;
    }

    /**
     * @module DocumentationGeneratorApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileName()
    {
        $this->assertPropertyIsSet(self::FILE_NAME);

        return $this;
    }

    /**
     * @module DocumentationGeneratorApi|DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorApi|DocumentationGeneratorOpenApi
     *
     * @return string|null
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @module DocumentationGeneratorApi|DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorApi|DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorApi|DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorApi|DocumentationGeneratorOpenApi|GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module DocumentationGeneratorApi|DocumentationGeneratorOpenApi|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @module DocumentationGeneratorApi|DocumentationGeneratorOpenApi|GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module DocumentationGeneratorApi|DocumentationGeneratorOpenApi|GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module DocumentationGeneratorApi|DocumentationGeneratorOpenApi|GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ResourceContextTransfer> $resourceContexts
     *
     * @return $this
     */
    public function setResourceContexts(ArrayObject $resourceContexts)
    {
        $this->resourceContexts = $resourceContexts;
        $this->modifiedProperties[self::RESOURCE_CONTEXTS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ResourceContextTransfer>
     */
    public function getResourceContexts()
    {
        return $this->resourceContexts;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @param \Generated\Shared\Transfer\ResourceContextTransfer $resourceContext
     *
     * @return $this
     */
    public function addResourceContext(ResourceContextTransfer $resourceContext)
    {
        $this->resourceContexts[] = $resourceContext;
        $this->modifiedProperties[self::RESOURCE_CONTEXTS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueApplication|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueBackendApiApplication|GlueJsonApiConvention|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResourceContexts()
    {
        $this->assertCollectionPropertyIsSet(self::RESOURCE_CONTEXTS);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\RelationshipPluginsContextTransfer> $relationshipPluginsContexts
     *
     * @return $this
     */
    public function setRelationshipPluginsContexts(ArrayObject $relationshipPluginsContexts)
    {
        $this->relationshipPluginsContexts = $relationshipPluginsContexts;
        $this->modifiedProperties[self::RELATIONSHIP_PLUGINS_CONTEXTS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\RelationshipPluginsContextTransfer>
     */
    public function getRelationshipPluginsContexts()
    {
        return $this->relationshipPluginsContexts;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @param \Generated\Shared\Transfer\RelationshipPluginsContextTransfer $relationshipPluginsContext
     *
     * @return $this
     */
    public function addRelationshipPluginsContext(RelationshipPluginsContextTransfer $relationshipPluginsContext)
    {
        $this->relationshipPluginsContexts[] = $relationshipPluginsContext;
        $this->modifiedProperties[self::RELATIONSHIP_PLUGINS_CONTEXTS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRelationshipPluginsContexts()
    {
        $this->assertCollectionPropertyIsSet(self::RELATIONSHIP_PLUGINS_CONTEXTS);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|DynamicEntityBackendApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\CustomRoutesContextTransfer> $customRoutesContexts
     *
     * @return $this
     */
    public function setCustomRoutesContexts(ArrayObject $customRoutesContexts)
    {
        $this->customRoutesContexts = $customRoutesContexts;
        $this->modifiedProperties[self::CUSTOM_ROUTES_CONTEXTS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|DynamicEntityBackendApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\CustomRoutesContextTransfer>
     */
    public function getCustomRoutesContexts()
    {
        return $this->customRoutesContexts;
    }

    /**
     * @module DocumentationGeneratorOpenApi|DynamicEntityBackendApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @param \Generated\Shared\Transfer\CustomRoutesContextTransfer $customRoutesContext
     *
     * @return $this
     */
    public function addCustomRoutesContext(CustomRoutesContextTransfer $customRoutesContext)
    {
        $this->customRoutesContexts[] = $customRoutesContext;
        $this->modifiedProperties[self::CUSTOM_ROUTES_CONTEXTS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|DynamicEntityBackendApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomRoutesContexts()
    {
        $this->assertCollectionPropertyIsSet(self::CUSTOM_ROUTES_CONTEXTS);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\DynamicEntityConfigurationTransfer> $dynamicEntityConfigurations
     *
     * @return $this
     */
    public function setDynamicEntityConfigurations(ArrayObject $dynamicEntityConfigurations)
    {
        $this->dynamicEntityConfigurations = $dynamicEntityConfigurations;
        $this->modifiedProperties[self::DYNAMIC_ENTITY_CONFIGURATIONS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DynamicEntityConfigurationTransfer>
     */
    public function getDynamicEntityConfigurations()
    {
        return $this->dynamicEntityConfigurations;
    }

    /**
     * @module DynamicEntityBackendApi
     *
     * @param \Generated\Shared\Transfer\DynamicEntityConfigurationTransfer $dynamicEntityConfiguration
     *
     * @return $this
     */
    public function addDynamicEntityConfiguration(DynamicEntityConfigurationTransfer $dynamicEntityConfiguration)
    {
        $this->dynamicEntityConfigurations[] = $dynamicEntityConfiguration;
        $this->modifiedProperties[self::DYNAMIC_ENTITY_CONFIGURATIONS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDynamicEntityConfigurations()
    {
        $this->assertCollectionPropertyIsSet(self::DYNAMIC_ENTITY_CONFIGURATIONS);

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
                case 'fileName':
                case 'application':
                case 'host':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'resourceContexts':
                case 'relationshipPluginsContexts':
                case 'customRoutesContexts':
                case 'dynamicEntityConfigurations':
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
                case 'fileName':
                case 'application':
                case 'host':
                    $values[$arrayKey] = $value;

                    break;
                case 'resourceContexts':
                case 'relationshipPluginsContexts':
                case 'customRoutesContexts':
                case 'dynamicEntityConfigurations':
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
                case 'fileName':
                case 'application':
                case 'host':
                    $values[$arrayKey] = $value;

                    break;
                case 'resourceContexts':
                case 'relationshipPluginsContexts':
                case 'customRoutesContexts':
                case 'dynamicEntityConfigurations':
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
        $this->resourceContexts = $this->resourceContexts ?: new ArrayObject();
        $this->relationshipPluginsContexts = $this->relationshipPluginsContexts ?: new ArrayObject();
        $this->customRoutesContexts = $this->customRoutesContexts ?: new ArrayObject();
        $this->dynamicEntityConfigurations = $this->dynamicEntityConfigurations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'fileName' => $this->fileName,
            'application' => $this->application,
            'host' => $this->host,
            'resourceContexts' => $this->resourceContexts,
            'relationshipPluginsContexts' => $this->relationshipPluginsContexts,
            'customRoutesContexts' => $this->customRoutesContexts,
            'dynamicEntityConfigurations' => $this->dynamicEntityConfigurations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'file_name' => $this->fileName,
            'application' => $this->application,
            'host' => $this->host,
            'resource_contexts' => $this->resourceContexts,
            'relationship_plugins_contexts' => $this->relationshipPluginsContexts,
            'custom_routes_contexts' => $this->customRoutesContexts,
            'dynamic_entity_configurations' => $this->dynamicEntityConfigurations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'file_name' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, false) : $this->fileName,
            'application' => $this->application instanceof AbstractTransfer ? $this->application->toArray(true, false) : $this->application,
            'host' => $this->host instanceof AbstractTransfer ? $this->host->toArray(true, false) : $this->host,
            'resource_contexts' => $this->resourceContexts instanceof AbstractTransfer ? $this->resourceContexts->toArray(true, false) : $this->addValuesToCollection($this->resourceContexts, true, false),
            'relationship_plugins_contexts' => $this->relationshipPluginsContexts instanceof AbstractTransfer ? $this->relationshipPluginsContexts->toArray(true, false) : $this->addValuesToCollection($this->relationshipPluginsContexts, true, false),
            'custom_routes_contexts' => $this->customRoutesContexts instanceof AbstractTransfer ? $this->customRoutesContexts->toArray(true, false) : $this->addValuesToCollection($this->customRoutesContexts, true, false),
            'dynamic_entity_configurations' => $this->dynamicEntityConfigurations instanceof AbstractTransfer ? $this->dynamicEntityConfigurations->toArray(true, false) : $this->addValuesToCollection($this->dynamicEntityConfigurations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fileName' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, true) : $this->fileName,
            'application' => $this->application instanceof AbstractTransfer ? $this->application->toArray(true, true) : $this->application,
            'host' => $this->host instanceof AbstractTransfer ? $this->host->toArray(true, true) : $this->host,
            'resourceContexts' => $this->resourceContexts instanceof AbstractTransfer ? $this->resourceContexts->toArray(true, true) : $this->addValuesToCollection($this->resourceContexts, true, true),
            'relationshipPluginsContexts' => $this->relationshipPluginsContexts instanceof AbstractTransfer ? $this->relationshipPluginsContexts->toArray(true, true) : $this->addValuesToCollection($this->relationshipPluginsContexts, true, true),
            'customRoutesContexts' => $this->customRoutesContexts instanceof AbstractTransfer ? $this->customRoutesContexts->toArray(true, true) : $this->addValuesToCollection($this->customRoutesContexts, true, true),
            'dynamicEntityConfigurations' => $this->dynamicEntityConfigurations instanceof AbstractTransfer ? $this->dynamicEntityConfigurations->toArray(true, true) : $this->addValuesToCollection($this->dynamicEntityConfigurations, true, true),
        ];
    }
}
