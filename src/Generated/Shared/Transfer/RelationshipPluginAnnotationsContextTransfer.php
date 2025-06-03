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
class RelationshipPluginAnnotationsContextTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RESOURCE_TYPE = 'resourceType';

    /**
     * @var string
     */
    public const RESOURCE_ATTRIBUTES_CLASS_NAME = 'resourceAttributesClassName';

    /**
     * @var string|null
     */
    protected $resourceType;

    /**
     * @var string|null
     */
    protected $resourceAttributesClassName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'resource_type' => 'resourceType',
        'resourceType' => 'resourceType',
        'ResourceType' => 'resourceType',
        'resource_attributes_class_name' => 'resourceAttributesClassName',
        'resourceAttributesClassName' => 'resourceAttributesClassName',
        'ResourceAttributesClassName' => 'resourceAttributesClassName',
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
        self::RESOURCE_ATTRIBUTES_CLASS_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'resource_attributes_class_name',
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
     * @param string|null $resourceAttributesClassName
     *
     * @return $this
     */
    public function setResourceAttributesClassName($resourceAttributesClassName)
    {
        $this->resourceAttributesClassName = $resourceAttributesClassName;
        $this->modifiedProperties[self::RESOURCE_ATTRIBUTES_CLASS_NAME] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @return string|null
     */
    public function getResourceAttributesClassName()
    {
        return $this->resourceAttributesClassName;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @param string|null $resourceAttributesClassName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceAttributesClassNameOrFail($resourceAttributesClassName)
    {
        if ($resourceAttributesClassName === null) {
            $this->throwNullValueException(static::RESOURCE_ATTRIBUTES_CLASS_NAME);
        }

        return $this->setResourceAttributesClassName($resourceAttributesClassName);
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResourceAttributesClassNameOrFail()
    {
        if ($this->resourceAttributesClassName === null) {
            $this->throwNullValueException(static::RESOURCE_ATTRIBUTES_CLASS_NAME);
        }

        return $this->resourceAttributesClassName;
    }

    /**
     * @module DocumentationGeneratorOpenApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResourceAttributesClassName()
    {
        $this->assertPropertyIsSet(self::RESOURCE_ATTRIBUTES_CLASS_NAME);

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
                case 'resourceAttributesClassName':
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
                case 'resourceAttributesClassName':
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
                case 'resourceType':
                case 'resourceAttributesClassName':
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
            'resourceType' => $this->resourceType,
            'resourceAttributesClassName' => $this->resourceAttributesClassName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'resource_type' => $this->resourceType,
            'resource_attributes_class_name' => $this->resourceAttributesClassName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'resource_type' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, false) : $this->resourceType,
            'resource_attributes_class_name' => $this->resourceAttributesClassName instanceof AbstractTransfer ? $this->resourceAttributesClassName->toArray(true, false) : $this->resourceAttributesClassName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'resourceType' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, true) : $this->resourceType,
            'resourceAttributesClassName' => $this->resourceAttributesClassName instanceof AbstractTransfer ? $this->resourceAttributesClassName->toArray(true, true) : $this->resourceAttributesClassName,
        ];
    }
}
