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
class PathMethodComponentDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RESOURCE_TYPE = 'resourceType';

    /**
     * @var string
     */
    public const ANNOTATION = 'annotation';

    /**
     * @var string
     */
    public const PATTERN_OPERATION_ID_RESOURCE = 'patternOperationIdResource';

    /**
     * @var string
     */
    public const DEFAULT_RESPONSE_CODE = 'defaultResponseCode';

    /**
     * @var string
     */
    public const IS_GET_COLLECTION = 'isGetCollection';

    /**
     * @var string
     */
    public const PATH_NAME = 'pathName';

    /**
     * @var string
     */
    public const IS_PROTECTED = 'isProtected';

    /**
     * @var string|null
     */
    protected $resourceType;

    /**
     * @var \Generated\Shared\Transfer\AnnotationTransfer|null
     */
    protected $annotation;

    /**
     * @var string|null
     */
    protected $patternOperationIdResource;

    /**
     * @var int|null
     */
    protected $defaultResponseCode;

    /**
     * @var bool|null
     */
    protected $isGetCollection;

    /**
     * @var string|null
     */
    protected $pathName;

    /**
     * @var bool|null
     */
    protected $isProtected;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'resource_type' => 'resourceType',
        'resourceType' => 'resourceType',
        'ResourceType' => 'resourceType',
        'annotation' => 'annotation',
        'Annotation' => 'annotation',
        'pattern_operation_id_resource' => 'patternOperationIdResource',
        'patternOperationIdResource' => 'patternOperationIdResource',
        'PatternOperationIdResource' => 'patternOperationIdResource',
        'default_response_code' => 'defaultResponseCode',
        'defaultResponseCode' => 'defaultResponseCode',
        'DefaultResponseCode' => 'defaultResponseCode',
        'is_get_collection' => 'isGetCollection',
        'isGetCollection' => 'isGetCollection',
        'IsGetCollection' => 'isGetCollection',
        'path_name' => 'pathName',
        'pathName' => 'pathName',
        'PathName' => 'pathName',
        'is_protected' => 'isProtected',
        'isProtected' => 'isProtected',
        'IsProtected' => 'isProtected',
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
        self::ANNOTATION => [
            'type' => 'Generated\Shared\Transfer\AnnotationTransfer',
            'type_shim' => null,
            'name_underscore' => 'annotation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PATTERN_OPERATION_ID_RESOURCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'pattern_operation_id_resource',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_RESPONSE_CODE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'default_response_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_GET_COLLECTION => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_get_collection',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PATH_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'path_name',
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
    ];

    /**
     * @module DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorOpenApi
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @module DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorOpenApi
     *
     * @param \Generated\Shared\Transfer\AnnotationTransfer|null $annotation
     *
     * @return $this
     */
    public function setAnnotation(AnnotationTransfer $annotation = null)
    {
        $this->annotation = $annotation;
        $this->modifiedProperties[self::ANNOTATION] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @return \Generated\Shared\Transfer\AnnotationTransfer|null
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param \Generated\Shared\Transfer\AnnotationTransfer $annotation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAnnotationOrFail(AnnotationTransfer $annotation)
    {
        return $this->setAnnotation($annotation);
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AnnotationTransfer
     */
    public function getAnnotationOrFail()
    {
        if ($this->annotation === null) {
            $this->throwNullValueException(static::ANNOTATION);
        }

        return $this->annotation;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAnnotation()
    {
        $this->assertPropertyIsSet(self::ANNOTATION);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param string|null $patternOperationIdResource
     *
     * @return $this
     */
    public function setPatternOperationIdResource($patternOperationIdResource)
    {
        $this->patternOperationIdResource = $patternOperationIdResource;
        $this->modifiedProperties[self::PATTERN_OPERATION_ID_RESOURCE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @return string|null
     */
    public function getPatternOperationIdResource()
    {
        return $this->patternOperationIdResource;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param string|null $patternOperationIdResource
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPatternOperationIdResourceOrFail($patternOperationIdResource)
    {
        if ($patternOperationIdResource === null) {
            $this->throwNullValueException(static::PATTERN_OPERATION_ID_RESOURCE);
        }

        return $this->setPatternOperationIdResource($patternOperationIdResource);
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPatternOperationIdResourceOrFail()
    {
        if ($this->patternOperationIdResource === null) {
            $this->throwNullValueException(static::PATTERN_OPERATION_ID_RESOURCE);
        }

        return $this->patternOperationIdResource;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePatternOperationIdResource()
    {
        $this->assertPropertyIsSet(self::PATTERN_OPERATION_ID_RESOURCE);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param int|null $defaultResponseCode
     *
     * @return $this
     */
    public function setDefaultResponseCode($defaultResponseCode)
    {
        $this->defaultResponseCode = $defaultResponseCode;
        $this->modifiedProperties[self::DEFAULT_RESPONSE_CODE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @return int|null
     */
    public function getDefaultResponseCode()
    {
        return $this->defaultResponseCode;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param int|null $defaultResponseCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultResponseCodeOrFail($defaultResponseCode)
    {
        if ($defaultResponseCode === null) {
            $this->throwNullValueException(static::DEFAULT_RESPONSE_CODE);
        }

        return $this->setDefaultResponseCode($defaultResponseCode);
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDefaultResponseCodeOrFail()
    {
        if ($this->defaultResponseCode === null) {
            $this->throwNullValueException(static::DEFAULT_RESPONSE_CODE);
        }

        return $this->defaultResponseCode;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultResponseCode()
    {
        $this->assertPropertyIsSet(self::DEFAULT_RESPONSE_CODE);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param bool|null $isGetCollection
     *
     * @return $this
     */
    public function setIsGetCollection($isGetCollection)
    {
        $this->isGetCollection = $isGetCollection;
        $this->modifiedProperties[self::IS_GET_COLLECTION] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @return bool|null
     */
    public function getIsGetCollection()
    {
        return $this->isGetCollection;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param bool|null $isGetCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsGetCollectionOrFail($isGetCollection)
    {
        if ($isGetCollection === null) {
            $this->throwNullValueException(static::IS_GET_COLLECTION);
        }

        return $this->setIsGetCollection($isGetCollection);
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsGetCollectionOrFail()
    {
        if ($this->isGetCollection === null) {
            $this->throwNullValueException(static::IS_GET_COLLECTION);
        }

        return $this->isGetCollection;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsGetCollection()
    {
        $this->assertPropertyIsSet(self::IS_GET_COLLECTION);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param string|null $pathName
     *
     * @return $this
     */
    public function setPathName($pathName)
    {
        $this->pathName = $pathName;
        $this->modifiedProperties[self::PATH_NAME] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @return string|null
     */
    public function getPathName()
    {
        return $this->pathName;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param string|null $pathName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPathNameOrFail($pathName)
    {
        if ($pathName === null) {
            $this->throwNullValueException(static::PATH_NAME);
        }

        return $this->setPathName($pathName);
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPathNameOrFail()
    {
        if ($this->pathName === null) {
            $this->throwNullValueException(static::PATH_NAME);
        }

        return $this->pathName;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePathName()
    {
        $this->assertPropertyIsSet(self::PATH_NAME);

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorOpenApi
     *
     * @return bool|null
     */
    public function getIsProtected()
    {
        return $this->isProtected;
    }

    /**
     * @module DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorOpenApi
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
     * @module DocumentationGeneratorOpenApi
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
                case 'patternOperationIdResource':
                case 'defaultResponseCode':
                case 'isGetCollection':
                case 'pathName':
                case 'isProtected':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'annotation':
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
                case 'patternOperationIdResource':
                case 'defaultResponseCode':
                case 'isGetCollection':
                case 'pathName':
                case 'isProtected':
                    $values[$arrayKey] = $value;

                    break;
                case 'annotation':
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
                case 'patternOperationIdResource':
                case 'defaultResponseCode':
                case 'isGetCollection':
                case 'pathName':
                case 'isProtected':
                    $values[$arrayKey] = $value;

                    break;
                case 'annotation':
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
            'patternOperationIdResource' => $this->patternOperationIdResource,
            'defaultResponseCode' => $this->defaultResponseCode,
            'isGetCollection' => $this->isGetCollection,
            'pathName' => $this->pathName,
            'isProtected' => $this->isProtected,
            'annotation' => $this->annotation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'resource_type' => $this->resourceType,
            'pattern_operation_id_resource' => $this->patternOperationIdResource,
            'default_response_code' => $this->defaultResponseCode,
            'is_get_collection' => $this->isGetCollection,
            'path_name' => $this->pathName,
            'is_protected' => $this->isProtected,
            'annotation' => $this->annotation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'resource_type' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, false) : $this->resourceType,
            'pattern_operation_id_resource' => $this->patternOperationIdResource instanceof AbstractTransfer ? $this->patternOperationIdResource->toArray(true, false) : $this->patternOperationIdResource,
            'default_response_code' => $this->defaultResponseCode instanceof AbstractTransfer ? $this->defaultResponseCode->toArray(true, false) : $this->defaultResponseCode,
            'is_get_collection' => $this->isGetCollection instanceof AbstractTransfer ? $this->isGetCollection->toArray(true, false) : $this->isGetCollection,
            'path_name' => $this->pathName instanceof AbstractTransfer ? $this->pathName->toArray(true, false) : $this->pathName,
            'is_protected' => $this->isProtected instanceof AbstractTransfer ? $this->isProtected->toArray(true, false) : $this->isProtected,
            'annotation' => $this->annotation instanceof AbstractTransfer ? $this->annotation->toArray(true, false) : $this->annotation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'resourceType' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, true) : $this->resourceType,
            'patternOperationIdResource' => $this->patternOperationIdResource instanceof AbstractTransfer ? $this->patternOperationIdResource->toArray(true, true) : $this->patternOperationIdResource,
            'defaultResponseCode' => $this->defaultResponseCode instanceof AbstractTransfer ? $this->defaultResponseCode->toArray(true, true) : $this->defaultResponseCode,
            'isGetCollection' => $this->isGetCollection instanceof AbstractTransfer ? $this->isGetCollection->toArray(true, true) : $this->isGetCollection,
            'pathName' => $this->pathName instanceof AbstractTransfer ? $this->pathName->toArray(true, true) : $this->pathName,
            'isProtected' => $this->isProtected instanceof AbstractTransfer ? $this->isProtected->toArray(true, true) : $this->isProtected,
            'annotation' => $this->annotation instanceof AbstractTransfer ? $this->annotation->toArray(true, true) : $this->annotation,
        ];
    }
}
