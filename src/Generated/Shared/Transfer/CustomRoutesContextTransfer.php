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
class CustomRoutesContextTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PATH_ANNOTATION = 'pathAnnotation';

    /**
     * @var string
     */
    public const DEFAULTS = 'defaults';

    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @var string
     */
    public const IS_PROTECTED = 'isProtected';

    /**
     * @var string
     */
    public const RESOURCE_TYPE = 'resourceType';

    /**
     * @var \Generated\Shared\Transfer\PathAnnotationTransfer|null
     */
    protected $pathAnnotation;

    /**
     * @var array
     */
    protected $defaults = [];

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var bool|null
     */
    protected $isProtected;

    /**
     * @var string|null
     */
    protected $resourceType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'path_annotation' => 'pathAnnotation',
        'pathAnnotation' => 'pathAnnotation',
        'PathAnnotation' => 'pathAnnotation',
        'defaults' => 'defaults',
        'Defaults' => 'defaults',
        'path' => 'path',
        'Path' => 'path',
        'is_protected' => 'isProtected',
        'isProtected' => 'isProtected',
        'IsProtected' => 'isProtected',
        'resource_type' => 'resourceType',
        'resourceType' => 'resourceType',
        'ResourceType' => 'resourceType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::DEFAULTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'defaults',
            'is_collection' => false,
            'is_transfer' => false,
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
    ];

    /**
     * @module DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorOpenApi
     *
     * @return \Generated\Shared\Transfer\PathAnnotationTransfer|null
     */
    public function getPathAnnotation()
    {
        return $this->pathAnnotation;
    }

    /**
     * @module DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorOpenApi|DynamicEntityBackendApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @param array|null $defaults
     *
     * @return $this
     */
    public function setDefaults(array $defaults = null)
    {
        if ($defaults === null) {
            $defaults = [];
        }

        $this->defaults = $defaults;
        $this->modifiedProperties[self::DEFAULTS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|DynamicEntityBackendApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @return array
     */
    public function getDefaults()
    {
        return $this->defaults;
    }

    /**
     * @module DocumentationGeneratorOpenApi|DynamicEntityBackendApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @param mixed $default
     *
     * @return $this
     */
    public function addDefault($default)
    {
        $this->defaults[] = $default;
        $this->modifiedProperties[self::DEFAULTS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|DynamicEntityBackendApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaults()
    {
        $this->assertPropertyIsSet(self::DEFAULTS);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
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
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
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
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
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
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueBackendApiApplication|GlueStorefrontApiApplicationAuthorizationConnector|GlueStorefrontApiApplication
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
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
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
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @return bool|null
     */
    public function getIsProtected()
    {
        return $this->isProtected;
    }

    /**
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
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
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
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
     * @module DocumentationGeneratorOpenApi|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
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
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
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
                case 'defaults':
                case 'path':
                case 'isProtected':
                case 'resourceType':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'pathAnnotation':
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
                case 'defaults':
                case 'path':
                case 'isProtected':
                case 'resourceType':
                    $values[$arrayKey] = $value;

                    break;
                case 'pathAnnotation':
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
                case 'defaults':
                case 'path':
                case 'isProtected':
                case 'resourceType':
                    $values[$arrayKey] = $value;

                    break;
                case 'pathAnnotation':
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
            'defaults' => $this->defaults,
            'path' => $this->path,
            'isProtected' => $this->isProtected,
            'resourceType' => $this->resourceType,
            'pathAnnotation' => $this->pathAnnotation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'defaults' => $this->defaults,
            'path' => $this->path,
            'is_protected' => $this->isProtected,
            'resource_type' => $this->resourceType,
            'path_annotation' => $this->pathAnnotation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'defaults' => $this->defaults instanceof AbstractTransfer ? $this->defaults->toArray(true, false) : $this->defaults,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'is_protected' => $this->isProtected instanceof AbstractTransfer ? $this->isProtected->toArray(true, false) : $this->isProtected,
            'resource_type' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, false) : $this->resourceType,
            'path_annotation' => $this->pathAnnotation instanceof AbstractTransfer ? $this->pathAnnotation->toArray(true, false) : $this->pathAnnotation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'defaults' => $this->defaults instanceof AbstractTransfer ? $this->defaults->toArray(true, true) : $this->defaults,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'isProtected' => $this->isProtected instanceof AbstractTransfer ? $this->isProtected->toArray(true, true) : $this->isProtected,
            'resourceType' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, true) : $this->resourceType,
            'pathAnnotation' => $this->pathAnnotation instanceof AbstractTransfer ? $this->pathAnnotation->toArray(true, true) : $this->pathAnnotation,
        ];
    }
}
