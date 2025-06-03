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
class DynamicEntityConfigurationRelationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const CHILD_DYNAMIC_ENTITY_CONFIGURATION = 'childDynamicEntityConfiguration';

    /**
     * @var string
     */
    public const IS_EDITABLE = 'isEditable';

    /**
     * @var string
     */
    public const RELATION_FIELD_MAPPINGS = 'relationFieldMappings';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\DynamicEntityConfigurationTransfer|null
     */
    protected $childDynamicEntityConfiguration;

    /**
     * @var bool|null
     */
    protected $isEditable;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DynamicEntityRelationFieldMappingTransfer>
     */
    protected $relationFieldMappings;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'child_dynamic_entity_configuration' => 'childDynamicEntityConfiguration',
        'childDynamicEntityConfiguration' => 'childDynamicEntityConfiguration',
        'ChildDynamicEntityConfiguration' => 'childDynamicEntityConfiguration',
        'is_editable' => 'isEditable',
        'isEditable' => 'isEditable',
        'IsEditable' => 'isEditable',
        'relation_field_mappings' => 'relationFieldMappings',
        'relationFieldMappings' => 'relationFieldMappings',
        'RelationFieldMappings' => 'relationFieldMappings',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CHILD_DYNAMIC_ENTITY_CONFIGURATION => [
            'type' => 'Generated\Shared\Transfer\DynamicEntityConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'child_dynamic_entity_configuration',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_EDITABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_editable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::RELATION_FIELD_MAPPINGS => [
            'type' => 'Generated\Shared\Transfer\DynamicEntityRelationFieldMappingTransfer',
            'type_shim' => null,
            'name_underscore' => 'relation_field_mappings',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name = null)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param string $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail(string $name)
    {
        return $this->setName($name);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail(): string
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityConfigurationTransfer|null $childDynamicEntityConfiguration
     *
     * @return $this
     */
    public function setChildDynamicEntityConfiguration(?DynamicEntityConfigurationTransfer $childDynamicEntityConfiguration = null)
    {
        $this->childDynamicEntityConfiguration = $childDynamicEntityConfiguration;
        $this->modifiedProperties[self::CHILD_DYNAMIC_ENTITY_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return \Generated\Shared\Transfer\DynamicEntityConfigurationTransfer|null
     */
    public function getChildDynamicEntityConfiguration(): ?DynamicEntityConfigurationTransfer
    {
        return $this->childDynamicEntityConfiguration;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityConfigurationTransfer $childDynamicEntityConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setChildDynamicEntityConfigurationOrFail(DynamicEntityConfigurationTransfer $childDynamicEntityConfiguration)
    {
        return $this->setChildDynamicEntityConfiguration($childDynamicEntityConfiguration);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DynamicEntityConfigurationTransfer
     */
    public function getChildDynamicEntityConfigurationOrFail(): DynamicEntityConfigurationTransfer
    {
        if ($this->childDynamicEntityConfiguration === null) {
            $this->throwNullValueException(static::CHILD_DYNAMIC_ENTITY_CONFIGURATION);
        }

        return $this->childDynamicEntityConfiguration;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChildDynamicEntityConfiguration()
    {
        $this->assertPropertyIsSet(self::CHILD_DYNAMIC_ENTITY_CONFIGURATION);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param bool|null $isEditable
     *
     * @return $this
     */
    public function setIsEditable(?bool $isEditable = null)
    {
        $this->isEditable = $isEditable;
        $this->modifiedProperties[self::IS_EDITABLE] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return bool|null
     */
    public function getIsEditable(): ?bool
    {
        return $this->isEditable;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param bool $isEditable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsEditableOrFail(bool $isEditable)
    {
        return $this->setIsEditable($isEditable);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsEditableOrFail(): bool
    {
        if ($this->isEditable === null) {
            $this->throwNullValueException(static::IS_EDITABLE);
        }

        return $this->isEditable;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsEditable()
    {
        $this->assertPropertyIsSet(self::IS_EDITABLE);

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\DynamicEntityRelationFieldMappingTransfer> $relationFieldMappings
     *
     * @return $this
     */
    public function setRelationFieldMappings(ArrayObject $relationFieldMappings)
    {
        $this->relationFieldMappings = new ArrayObject();

        foreach ($relationFieldMappings as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::RELATION_FIELD_MAPPINGS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addRelationFieldMapping(...$args);
        }

        $this->modifiedProperties[self::RELATION_FIELD_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DynamicEntityRelationFieldMappingTransfer>
     */
    public function getRelationFieldMappings(): ArrayObject
    {
        return $this->relationFieldMappings;
    }

    /**
     * @module DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityRelationFieldMappingTransfer $relationFieldMapping
     *
     * @return $this
     */
    public function addRelationFieldMapping(DynamicEntityRelationFieldMappingTransfer $relationFieldMapping)
    {
        $this->relationFieldMappings[] = $relationFieldMapping;
        $this->modifiedProperties[self::RELATION_FIELD_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRelationFieldMappings()
    {
        $this->assertCollectionPropertyIsSet(self::RELATION_FIELD_MAPPINGS);

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
                case 'name':
                case 'isEditable':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'childDynamicEntityConfiguration':
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
                case 'relationFieldMappings':
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
                case 'name':
                case 'isEditable':
                    $values[$arrayKey] = $value;

                    break;
                case 'childDynamicEntityConfiguration':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'relationFieldMappings':
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
                case 'name':
                case 'isEditable':
                    $values[$arrayKey] = $value;

                    break;
                case 'childDynamicEntityConfiguration':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'relationFieldMappings':
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
        $this->relationFieldMappings = $this->relationFieldMappings ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name,
            'isEditable' => $this->isEditable,
            'childDynamicEntityConfiguration' => $this->childDynamicEntityConfiguration,
            'relationFieldMappings' => $this->relationFieldMappings,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'is_editable' => $this->isEditable,
            'child_dynamic_entity_configuration' => $this->childDynamicEntityConfiguration,
            'relation_field_mappings' => $this->relationFieldMappings,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'is_editable' => $this->isEditable instanceof AbstractTransfer ? $this->isEditable->toArray(true, false) : $this->isEditable,
            'child_dynamic_entity_configuration' => $this->childDynamicEntityConfiguration instanceof AbstractTransfer ? $this->childDynamicEntityConfiguration->toArray(true, false) : $this->childDynamicEntityConfiguration,
            'relation_field_mappings' => $this->relationFieldMappings instanceof AbstractTransfer ? $this->relationFieldMappings->toArray(true, false) : $this->addValuesToCollection($this->relationFieldMappings, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'isEditable' => $this->isEditable instanceof AbstractTransfer ? $this->isEditable->toArray(true, true) : $this->isEditable,
            'childDynamicEntityConfiguration' => $this->childDynamicEntityConfiguration instanceof AbstractTransfer ? $this->childDynamicEntityConfiguration->toArray(true, true) : $this->childDynamicEntityConfiguration,
            'relationFieldMappings' => $this->relationFieldMappings instanceof AbstractTransfer ? $this->relationFieldMappings->toArray(true, true) : $this->addValuesToCollection($this->relationFieldMappings, true, true),
        ];
    }
}
