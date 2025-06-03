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
class DynamicEntityFieldDefinitionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const IS_CREATABLE = 'isCreatable';

    /**
     * @var string
     */
    public const IS_EDITABLE = 'isEditable';

    /**
     * @var string
     */
    public const FIELD_VISIBLE_NAME = 'fieldVisibleName';

    /**
     * @var string
     */
    public const FIELD_NAME = 'fieldName';

    /**
     * @var string
     */
    public const VALIDATION = 'validation';

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var bool|null
     */
    protected $isCreatable;

    /**
     * @var bool|null
     */
    protected $isEditable;

    /**
     * @var string|null
     */
    protected $fieldVisibleName;

    /**
     * @var string|null
     */
    protected $fieldName;

    /**
     * @var \Generated\Shared\Transfer\DynamicEntityFieldValidationTransfer|null
     */
    protected $validation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'type' => 'type',
        'Type' => 'type',
        'is_creatable' => 'isCreatable',
        'isCreatable' => 'isCreatable',
        'IsCreatable' => 'isCreatable',
        'is_editable' => 'isEditable',
        'isEditable' => 'isEditable',
        'IsEditable' => 'isEditable',
        'field_visible_name' => 'fieldVisibleName',
        'fieldVisibleName' => 'fieldVisibleName',
        'FieldVisibleName' => 'fieldVisibleName',
        'field_name' => 'fieldName',
        'fieldName' => 'fieldName',
        'FieldName' => 'fieldName',
        'validation' => 'validation',
        'Validation' => 'validation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
            'is_strict' => true,
        ],
        self::IS_CREATABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_creatable',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::FIELD_VISIBLE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'field_visible_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::FIELD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'field_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::VALIDATION => [
            'type' => 'Generated\Shared\Transfer\DynamicEntityFieldValidationTransfer',
            'type_shim' => null,
            'name_underscore' => 'validation',
            'is_collection' => false,
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
     * @param string|null $type
     *
     * @return $this
     */
    public function setType(?string $type = null)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param string $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail(string $type)
    {
        return $this->setType($type);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail(): string
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
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
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param bool|null $isCreatable
     *
     * @return $this
     */
    public function setIsCreatable(?bool $isCreatable = null)
    {
        $this->isCreatable = $isCreatable;
        $this->modifiedProperties[self::IS_CREATABLE] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return bool|null
     */
    public function getIsCreatable(): ?bool
    {
        return $this->isCreatable;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param bool $isCreatable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsCreatableOrFail(bool $isCreatable)
    {
        return $this->setIsCreatable($isCreatable);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsCreatableOrFail(): bool
    {
        if ($this->isCreatable === null) {
            $this->throwNullValueException(static::IS_CREATABLE);
        }

        return $this->isCreatable;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsCreatable()
    {
        $this->assertPropertyIsSet(self::IS_CREATABLE);

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
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param string|null $fieldVisibleName
     *
     * @return $this
     */
    public function setFieldVisibleName(?string $fieldVisibleName = null)
    {
        $this->fieldVisibleName = $fieldVisibleName;
        $this->modifiedProperties[self::FIELD_VISIBLE_NAME] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return string|null
     */
    public function getFieldVisibleName(): ?string
    {
        return $this->fieldVisibleName;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param string $fieldVisibleName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFieldVisibleNameOrFail(string $fieldVisibleName)
    {
        return $this->setFieldVisibleName($fieldVisibleName);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFieldVisibleNameOrFail(): string
    {
        if ($this->fieldVisibleName === null) {
            $this->throwNullValueException(static::FIELD_VISIBLE_NAME);
        }

        return $this->fieldVisibleName;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFieldVisibleName()
    {
        $this->assertPropertyIsSet(self::FIELD_VISIBLE_NAME);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param string|null $fieldName
     *
     * @return $this
     */
    public function setFieldName(?string $fieldName = null)
    {
        $this->fieldName = $fieldName;
        $this->modifiedProperties[self::FIELD_NAME] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param string $fieldName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFieldNameOrFail(string $fieldName)
    {
        return $this->setFieldName($fieldName);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFieldNameOrFail(): string
    {
        if ($this->fieldName === null) {
            $this->throwNullValueException(static::FIELD_NAME);
        }

        return $this->fieldName;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFieldName()
    {
        $this->assertPropertyIsSet(self::FIELD_NAME);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityFieldValidationTransfer|null $validation
     *
     * @return $this
     */
    public function setValidation(?DynamicEntityFieldValidationTransfer $validation = null)
    {
        $this->validation = $validation;
        $this->modifiedProperties[self::VALIDATION] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @return \Generated\Shared\Transfer\DynamicEntityFieldValidationTransfer|null
     */
    public function getValidation(): ?DynamicEntityFieldValidationTransfer
    {
        return $this->validation;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityFieldValidationTransfer $validation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidationOrFail(DynamicEntityFieldValidationTransfer $validation)
    {
        return $this->setValidation($validation);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DynamicEntityFieldValidationTransfer
     */
    public function getValidationOrFail(): DynamicEntityFieldValidationTransfer
    {
        if ($this->validation === null) {
            $this->throwNullValueException(static::VALIDATION);
        }

        return $this->validation;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidation()
    {
        $this->assertPropertyIsSet(self::VALIDATION);

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
                case 'type':
                case 'isCreatable':
                case 'isEditable':
                case 'fieldVisibleName':
                case 'fieldName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'validation':
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
                case 'type':
                case 'isCreatable':
                case 'isEditable':
                case 'fieldVisibleName':
                case 'fieldName':
                    $values[$arrayKey] = $value;

                    break;
                case 'validation':
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
                case 'type':
                case 'isCreatable':
                case 'isEditable':
                case 'fieldVisibleName':
                case 'fieldName':
                    $values[$arrayKey] = $value;

                    break;
                case 'validation':
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
            'type' => $this->type,
            'isCreatable' => $this->isCreatable,
            'isEditable' => $this->isEditable,
            'fieldVisibleName' => $this->fieldVisibleName,
            'fieldName' => $this->fieldName,
            'validation' => $this->validation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type,
            'is_creatable' => $this->isCreatable,
            'is_editable' => $this->isEditable,
            'field_visible_name' => $this->fieldVisibleName,
            'field_name' => $this->fieldName,
            'validation' => $this->validation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'is_creatable' => $this->isCreatable instanceof AbstractTransfer ? $this->isCreatable->toArray(true, false) : $this->isCreatable,
            'is_editable' => $this->isEditable instanceof AbstractTransfer ? $this->isEditable->toArray(true, false) : $this->isEditable,
            'field_visible_name' => $this->fieldVisibleName instanceof AbstractTransfer ? $this->fieldVisibleName->toArray(true, false) : $this->fieldVisibleName,
            'field_name' => $this->fieldName instanceof AbstractTransfer ? $this->fieldName->toArray(true, false) : $this->fieldName,
            'validation' => $this->validation instanceof AbstractTransfer ? $this->validation->toArray(true, false) : $this->validation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'isCreatable' => $this->isCreatable instanceof AbstractTransfer ? $this->isCreatable->toArray(true, true) : $this->isCreatable,
            'isEditable' => $this->isEditable instanceof AbstractTransfer ? $this->isEditable->toArray(true, true) : $this->isEditable,
            'fieldVisibleName' => $this->fieldVisibleName instanceof AbstractTransfer ? $this->fieldVisibleName->toArray(true, true) : $this->fieldVisibleName,
            'fieldName' => $this->fieldName instanceof AbstractTransfer ? $this->fieldName->toArray(true, true) : $this->fieldName,
            'validation' => $this->validation instanceof AbstractTransfer ? $this->validation->toArray(true, true) : $this->validation,
        ];
    }
}
