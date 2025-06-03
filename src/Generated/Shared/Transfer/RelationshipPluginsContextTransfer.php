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
class RelationshipPluginsContextTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RELATIONSHIP_PLUGIN_ANNOTATIONS_CONTEXT = 'relationshipPluginAnnotationsContext';

    /**
     * @var string
     */
    public const RESOURCE_TYPE = 'resourceType';

    /**
     * @var string
     */
    public const RELATIONSHIP = 'relationship';

    /**
     * @var string
     */
    public const RESOURCE_PLUGIN_NAME = 'resourcePluginName';

    /**
     * @var \Generated\Shared\Transfer\RelationshipPluginAnnotationsContextTransfer|null
     */
    protected $relationshipPluginAnnotationsContext;

    /**
     * @var string|null
     */
    protected $resourceType;

    /**
     * @var string|null
     */
    protected $relationship;

    /**
     * @var string|null
     */
    protected $resourcePluginName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'relationship_plugin_annotations_context' => 'relationshipPluginAnnotationsContext',
        'relationshipPluginAnnotationsContext' => 'relationshipPluginAnnotationsContext',
        'RelationshipPluginAnnotationsContext' => 'relationshipPluginAnnotationsContext',
        'resource_type' => 'resourceType',
        'resourceType' => 'resourceType',
        'ResourceType' => 'resourceType',
        'relationship' => 'relationship',
        'Relationship' => 'relationship',
        'resource_plugin_name' => 'resourcePluginName',
        'resourcePluginName' => 'resourcePluginName',
        'ResourcePluginName' => 'resourcePluginName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::RELATIONSHIP_PLUGIN_ANNOTATIONS_CONTEXT => [
            'type' => 'Generated\Shared\Transfer\RelationshipPluginAnnotationsContextTransfer',
            'type_shim' => null,
            'name_underscore' => 'relationship_plugin_annotations_context',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::RELATIONSHIP => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'relationship',
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
    ];

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param \Generated\Shared\Transfer\RelationshipPluginAnnotationsContextTransfer|null $relationshipPluginAnnotationsContext
     *
     * @return $this
     */
    public function setRelationshipPluginAnnotationsContext(RelationshipPluginAnnotationsContextTransfer $relationshipPluginAnnotationsContext = null)
    {
        $this->relationshipPluginAnnotationsContext = $relationshipPluginAnnotationsContext;
        $this->modifiedProperties[self::RELATIONSHIP_PLUGIN_ANNOTATIONS_CONTEXT] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @return \Generated\Shared\Transfer\RelationshipPluginAnnotationsContextTransfer|null
     */
    public function getRelationshipPluginAnnotationsContext()
    {
        return $this->relationshipPluginAnnotationsContext;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param \Generated\Shared\Transfer\RelationshipPluginAnnotationsContextTransfer $relationshipPluginAnnotationsContext
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRelationshipPluginAnnotationsContextOrFail(RelationshipPluginAnnotationsContextTransfer $relationshipPluginAnnotationsContext)
    {
        return $this->setRelationshipPluginAnnotationsContext($relationshipPluginAnnotationsContext);
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RelationshipPluginAnnotationsContextTransfer
     */
    public function getRelationshipPluginAnnotationsContextOrFail()
    {
        if ($this->relationshipPluginAnnotationsContext === null) {
            $this->throwNullValueException(static::RELATIONSHIP_PLUGIN_ANNOTATIONS_CONTEXT);
        }

        return $this->relationshipPluginAnnotationsContext;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRelationshipPluginAnnotationsContext()
    {
        $this->assertPropertyIsSet(self::RELATIONSHIP_PLUGIN_ANNOTATIONS_CONTEXT);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
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
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
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
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
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
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
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
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @param string|null $relationship
     *
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
        $this->modifiedProperties[self::RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @return string|null
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @param string|null $relationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRelationshipOrFail($relationship)
    {
        if ($relationship === null) {
            $this->throwNullValueException(static::RELATIONSHIP);
        }

        return $this->setRelationship($relationship);
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRelationshipOrFail()
    {
        if ($this->relationship === null) {
            $this->throwNullValueException(static::RELATIONSHIP);
        }

        return $this->relationship;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRelationship()
    {
        $this->assertPropertyIsSet(self::RELATIONSHIP);

        return $this;
    }

    /**
     * @module GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
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
     * @module GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
     *
     * @return string|null
     */
    public function getResourcePluginName()
    {
        return $this->resourcePluginName;
    }

    /**
     * @module GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
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
     * @module GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
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
     * @module GlueBackendApiApplicationGlueJsonApiConventionConnector|GlueStorefrontApiApplicationGlueJsonApiConventionConnector
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
                case 'relationship':
                case 'resourcePluginName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'relationshipPluginAnnotationsContext':
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
                case 'relationship':
                case 'resourcePluginName':
                    $values[$arrayKey] = $value;

                    break;
                case 'relationshipPluginAnnotationsContext':
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
                case 'relationship':
                case 'resourcePluginName':
                    $values[$arrayKey] = $value;

                    break;
                case 'relationshipPluginAnnotationsContext':
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
            'relationship' => $this->relationship,
            'resourcePluginName' => $this->resourcePluginName,
            'relationshipPluginAnnotationsContext' => $this->relationshipPluginAnnotationsContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'resource_type' => $this->resourceType,
            'relationship' => $this->relationship,
            'resource_plugin_name' => $this->resourcePluginName,
            'relationship_plugin_annotations_context' => $this->relationshipPluginAnnotationsContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'resource_type' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, false) : $this->resourceType,
            'relationship' => $this->relationship instanceof AbstractTransfer ? $this->relationship->toArray(true, false) : $this->relationship,
            'resource_plugin_name' => $this->resourcePluginName instanceof AbstractTransfer ? $this->resourcePluginName->toArray(true, false) : $this->resourcePluginName,
            'relationship_plugin_annotations_context' => $this->relationshipPluginAnnotationsContext instanceof AbstractTransfer ? $this->relationshipPluginAnnotationsContext->toArray(true, false) : $this->relationshipPluginAnnotationsContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'resourceType' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, true) : $this->resourceType,
            'relationship' => $this->relationship instanceof AbstractTransfer ? $this->relationship->toArray(true, true) : $this->relationship,
            'resourcePluginName' => $this->resourcePluginName instanceof AbstractTransfer ? $this->resourcePluginName->toArray(true, true) : $this->resourcePluginName,
            'relationshipPluginAnnotationsContext' => $this->relationshipPluginAnnotationsContext instanceof AbstractTransfer ? $this->relationshipPluginAnnotationsContext->toArray(true, true) : $this->relationshipPluginAnnotationsContext,
        ];
    }
}
