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
class RuleEngineClauseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const OPERATOR = 'operator';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const ATTRIBUTE = 'attribute';

    /**
     * @var string
     */
    public const FIELD = 'field';

    /**
     * @var string
     */
    public const ACCEPTED_TYPES = 'acceptedTypes';

    /**
     * @var string|null
     */
    protected $operator;

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var string|null
     */
    protected $attribute;

    /**
     * @var string|null
     */
    protected $field;

    /**
     * @var array
     */
    protected $acceptedTypes = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'operator' => 'operator',
        'Operator' => 'operator',
        'value' => 'value',
        'Value' => 'value',
        'attribute' => 'attribute',
        'Attribute' => 'attribute',
        'field' => 'field',
        'Field' => 'field',
        'accepted_types' => 'acceptedTypes',
        'acceptedTypes' => 'acceptedTypes',
        'AcceptedTypes' => 'acceptedTypes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::OPERATOR => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'operator',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::VALUE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ATTRIBUTE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'attribute',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::FIELD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'field',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ACCEPTED_TYPES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'accepted_types',
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
     * @module RuleEngine
     *
     * @param string|null $operator
     *
     * @return $this
     */
    public function setOperator(?string $operator = null)
    {
        $this->operator = $operator;
        $this->modifiedProperties[self::OPERATOR] = true;

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @return string|null
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @module RuleEngine
     *
     * @param string $operator
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOperatorOrFail(string $operator)
    {
        return $this->setOperator($operator);
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOperatorOrFail(): string
    {
        if ($this->operator === null) {
            $this->throwNullValueException(static::OPERATOR);
        }

        return $this->operator;
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOperator()
    {
        $this->assertPropertyIsSet(self::OPERATOR);

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setValue(?string $value = null)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @module RuleEngine
     *
     * @param string $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail(string $value)
    {
        return $this->setValue($value);
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValueOrFail(): string
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @param string|null $attribute
     *
     * @return $this
     */
    public function setAttribute(?string $attribute = null)
    {
        $this->attribute = $attribute;
        $this->modifiedProperties[self::ATTRIBUTE] = true;

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->attribute;
    }

    /**
     * @module RuleEngine
     *
     * @param string $attribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAttributeOrFail(string $attribute)
    {
        return $this->setAttribute($attribute);
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAttributeOrFail(): string
    {
        if ($this->attribute === null) {
            $this->throwNullValueException(static::ATTRIBUTE);
        }

        return $this->attribute;
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttribute()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTE);

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @param string|null $field
     *
     * @return $this
     */
    public function setField(?string $field = null)
    {
        $this->field = $field;
        $this->modifiedProperties[self::FIELD] = true;

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * @module RuleEngine
     *
     * @param string $field
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFieldOrFail(string $field)
    {
        return $this->setField($field);
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFieldOrFail(): string
    {
        if ($this->field === null) {
            $this->throwNullValueException(static::FIELD);
        }

        return $this->field;
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireField()
    {
        $this->assertPropertyIsSet(self::FIELD);

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @param array|null $acceptedTypes
     *
     * @return $this
     */
    public function setAcceptedTypes(array $acceptedTypes = null)
    {
        if ($acceptedTypes === null) {
            $acceptedTypes = [];
        }

        $this->acceptedTypes = $acceptedTypes;
        $this->modifiedProperties[self::ACCEPTED_TYPES] = true;

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @return array
     */
    public function getAcceptedTypes(): array
    {
        return $this->acceptedTypes;
    }

    /**
     * @module RuleEngine
     *
     * @param mixed $acceptedTypes
     *
     * @return $this
     */
    public function addAcceptedTypes($acceptedTypes)
    {
        $this->acceptedTypes[] = $acceptedTypes;
        $this->modifiedProperties[self::ACCEPTED_TYPES] = true;

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAcceptedTypes()
    {
        $this->assertPropertyIsSet(self::ACCEPTED_TYPES);

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
                case 'operator':
                case 'value':
                case 'attribute':
                case 'field':
                case 'acceptedTypes':
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
                case 'operator':
                case 'value':
                case 'attribute':
                case 'field':
                case 'acceptedTypes':
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
                case 'operator':
                case 'value':
                case 'attribute':
                case 'field':
                case 'acceptedTypes':
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
            'operator' => $this->operator,
            'value' => $this->value,
            'attribute' => $this->attribute,
            'field' => $this->field,
            'acceptedTypes' => $this->acceptedTypes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'operator' => $this->operator,
            'value' => $this->value,
            'attribute' => $this->attribute,
            'field' => $this->field,
            'accepted_types' => $this->acceptedTypes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'operator' => $this->operator instanceof AbstractTransfer ? $this->operator->toArray(true, false) : $this->operator,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'attribute' => $this->attribute instanceof AbstractTransfer ? $this->attribute->toArray(true, false) : $this->attribute,
            'field' => $this->field instanceof AbstractTransfer ? $this->field->toArray(true, false) : $this->field,
            'accepted_types' => $this->acceptedTypes instanceof AbstractTransfer ? $this->acceptedTypes->toArray(true, false) : $this->acceptedTypes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'operator' => $this->operator instanceof AbstractTransfer ? $this->operator->toArray(true, true) : $this->operator,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'attribute' => $this->attribute instanceof AbstractTransfer ? $this->attribute->toArray(true, true) : $this->attribute,
            'field' => $this->field instanceof AbstractTransfer ? $this->field->toArray(true, true) : $this->field,
            'acceptedTypes' => $this->acceptedTypes instanceof AbstractTransfer ? $this->acceptedTypes->toArray(true, true) : $this->acceptedTypes,
        ];
    }
}
