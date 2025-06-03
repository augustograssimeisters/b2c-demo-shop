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
class DynamicEntityDefinitionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FIELD_DEFINITIONS = 'fieldDefinitions';

    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var string
     */
    public const IS_DELETABLE = 'isDeletable';

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DynamicEntityFieldDefinitionTransfer>
     */
    protected $fieldDefinitions;

    /**
     * @var string|null
     */
    protected $identifier;

    /**
     * @var bool|null
     */
    protected $isDeletable;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'field_definitions' => 'fieldDefinitions',
        'fieldDefinitions' => 'fieldDefinitions',
        'FieldDefinitions' => 'fieldDefinitions',
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'is_deletable' => 'isDeletable',
        'isDeletable' => 'isDeletable',
        'IsDeletable' => 'isDeletable',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FIELD_DEFINITIONS => [
            'type' => 'Generated\Shared\Transfer\DynamicEntityFieldDefinitionTransfer',
            'type_shim' => null,
            'name_underscore' => 'field_definitions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_DELETABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_deletable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\DynamicEntityFieldDefinitionTransfer> $fieldDefinitions
     *
     * @return $this
     */
    public function setFieldDefinitions(ArrayObject $fieldDefinitions)
    {
        $this->fieldDefinitions = new ArrayObject();

        foreach ($fieldDefinitions as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::FIELD_DEFINITIONS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addFieldDefinition(...$args);
        }

        $this->modifiedProperties[self::FIELD_DEFINITIONS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DynamicEntityFieldDefinitionTransfer>
     */
    public function getFieldDefinitions(): ArrayObject
    {
        return $this->fieldDefinitions;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityFieldDefinitionTransfer $fieldDefinition
     *
     * @return $this
     */
    public function addFieldDefinition(DynamicEntityFieldDefinitionTransfer $fieldDefinition)
    {
        $this->fieldDefinitions[] = $fieldDefinition;
        $this->modifiedProperties[self::FIELD_DEFINITIONS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFieldDefinitions()
    {
        $this->assertCollectionPropertyIsSet(self::FIELD_DEFINITIONS);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param string|null $identifier
     *
     * @return $this
     */
    public function setIdentifier(?string $identifier = null)
    {
        $this->identifier = $identifier;
        $this->modifiedProperties[self::IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param string $identifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdentifierOrFail(string $identifier)
    {
        return $this->setIdentifier($identifier);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdentifierOrFail(): string
    {
        if ($this->identifier === null) {
            $this->throwNullValueException(static::IDENTIFIER);
        }

        return $this->identifier;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdentifier()
    {
        $this->assertPropertyIsSet(self::IDENTIFIER);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param bool|null $isDeletable
     *
     * @return $this
     */
    public function setIsDeletable(?bool $isDeletable = null)
    {
        $this->isDeletable = $isDeletable;
        $this->modifiedProperties[self::IS_DELETABLE] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @return bool|null
     */
    public function getIsDeletable(): ?bool
    {
        return $this->isDeletable;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param bool $isDeletable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDeletableOrFail(bool $isDeletable)
    {
        return $this->setIsDeletable($isDeletable);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDeletableOrFail(): bool
    {
        if ($this->isDeletable === null) {
            $this->throwNullValueException(static::IS_DELETABLE);
        }

        return $this->isDeletable;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDeletable()
    {
        $this->assertPropertyIsSet(self::IS_DELETABLE);

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
                case 'identifier':
                case 'isDeletable':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'fieldDefinitions':
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
                case 'identifier':
                case 'isDeletable':
                    $values[$arrayKey] = $value;

                    break;
                case 'fieldDefinitions':
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
                case 'identifier':
                case 'isDeletable':
                    $values[$arrayKey] = $value;

                    break;
                case 'fieldDefinitions':
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
        $this->fieldDefinitions = $this->fieldDefinitions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'identifier' => $this->identifier,
            'isDeletable' => $this->isDeletable,
            'fieldDefinitions' => $this->fieldDefinitions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier,
            'is_deletable' => $this->isDeletable,
            'field_definitions' => $this->fieldDefinitions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'is_deletable' => $this->isDeletable instanceof AbstractTransfer ? $this->isDeletable->toArray(true, false) : $this->isDeletable,
            'field_definitions' => $this->fieldDefinitions instanceof AbstractTransfer ? $this->fieldDefinitions->toArray(true, false) : $this->addValuesToCollection($this->fieldDefinitions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'isDeletable' => $this->isDeletable instanceof AbstractTransfer ? $this->isDeletable->toArray(true, true) : $this->isDeletable,
            'fieldDefinitions' => $this->fieldDefinitions instanceof AbstractTransfer ? $this->fieldDefinitions->toArray(true, true) : $this->addValuesToCollection($this->fieldDefinitions, true, true),
        ];
    }
}
