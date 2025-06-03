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
class DynamicEntityFieldValidationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MIN = 'min';

    /**
     * @var string
     */
    public const MAX = 'max';

    /**
     * @var string
     */
    public const MIN_LENGTH = 'minLength';

    /**
     * @var string
     */
    public const MAX_LENGTH = 'maxLength';

    /**
     * @var string
     */
    public const PRECISION = 'precision';

    /**
     * @var string
     */
    public const SCALE = 'scale';

    /**
     * @var string
     */
    public const IS_REQUIRED = 'isRequired';

    /**
     * @var string
     */
    public const CONSTRAINTS = 'constraints';

    /**
     * @var int|null
     */
    protected $min;

    /**
     * @var int|null
     */
    protected $max;

    /**
     * @var int|null
     */
    protected $minLength;

    /**
     * @var int|null
     */
    protected $maxLength;

    /**
     * @var int|null
     */
    protected $precision;

    /**
     * @var int|null
     */
    protected $scale;

    /**
     * @var bool|null
     */
    protected $isRequired;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DynamicEntityFieldValidationConstraintTransfer>
     */
    protected $constraints;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'min' => 'min',
        'Min' => 'min',
        'max' => 'max',
        'Max' => 'max',
        'min_length' => 'minLength',
        'minLength' => 'minLength',
        'MinLength' => 'minLength',
        'max_length' => 'maxLength',
        'maxLength' => 'maxLength',
        'MaxLength' => 'maxLength',
        'precision' => 'precision',
        'Precision' => 'precision',
        'scale' => 'scale',
        'Scale' => 'scale',
        'is_required' => 'isRequired',
        'isRequired' => 'isRequired',
        'IsRequired' => 'isRequired',
        'constraints' => 'constraints',
        'Constraints' => 'constraints',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::MIN => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'min',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::MAX => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'max',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::MIN_LENGTH => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'min_length',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::MAX_LENGTH => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'max_length',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PRECISION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'precision',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SCALE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'scale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_REQUIRED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_required',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CONSTRAINTS => [
            'type' => 'Generated\Shared\Transfer\DynamicEntityFieldValidationConstraintTransfer',
            'type_shim' => null,
            'name_underscore' => 'constraints',
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
     * @param int|null $min
     *
     * @return $this
     */
    public function setMin(?int $min = null)
    {
        $this->min = $min;
        $this->modifiedProperties[self::MIN] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return int|null
     */
    public function getMin(): ?int
    {
        return $this->min;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param int $min
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMinOrFail(int $min)
    {
        return $this->setMin($min);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getMinOrFail(): int
    {
        if ($this->min === null) {
            $this->throwNullValueException(static::MIN);
        }

        return $this->min;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMin()
    {
        $this->assertPropertyIsSet(self::MIN);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param int|null $max
     *
     * @return $this
     */
    public function setMax(?int $max = null)
    {
        $this->max = $max;
        $this->modifiedProperties[self::MAX] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return int|null
     */
    public function getMax(): ?int
    {
        return $this->max;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param int $max
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMaxOrFail(int $max)
    {
        return $this->setMax($max);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getMaxOrFail(): int
    {
        if ($this->max === null) {
            $this->throwNullValueException(static::MAX);
        }

        return $this->max;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMax()
    {
        $this->assertPropertyIsSet(self::MAX);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param int|null $minLength
     *
     * @return $this
     */
    public function setMinLength(?int $minLength = null)
    {
        $this->minLength = $minLength;
        $this->modifiedProperties[self::MIN_LENGTH] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return int|null
     */
    public function getMinLength(): ?int
    {
        return $this->minLength;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param int $minLength
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMinLengthOrFail(int $minLength)
    {
        return $this->setMinLength($minLength);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getMinLengthOrFail(): int
    {
        if ($this->minLength === null) {
            $this->throwNullValueException(static::MIN_LENGTH);
        }

        return $this->minLength;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMinLength()
    {
        $this->assertPropertyIsSet(self::MIN_LENGTH);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param int|null $maxLength
     *
     * @return $this
     */
    public function setMaxLength(?int $maxLength = null)
    {
        $this->maxLength = $maxLength;
        $this->modifiedProperties[self::MAX_LENGTH] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return int|null
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param int $maxLength
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMaxLengthOrFail(int $maxLength)
    {
        return $this->setMaxLength($maxLength);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getMaxLengthOrFail(): int
    {
        if ($this->maxLength === null) {
            $this->throwNullValueException(static::MAX_LENGTH);
        }

        return $this->maxLength;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMaxLength()
    {
        $this->assertPropertyIsSet(self::MAX_LENGTH);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param int|null $precision
     *
     * @return $this
     */
    public function setPrecision(?int $precision = null)
    {
        $this->precision = $precision;
        $this->modifiedProperties[self::PRECISION] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return int|null
     */
    public function getPrecision(): ?int
    {
        return $this->precision;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param int $precision
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPrecisionOrFail(int $precision)
    {
        return $this->setPrecision($precision);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPrecisionOrFail(): int
    {
        if ($this->precision === null) {
            $this->throwNullValueException(static::PRECISION);
        }

        return $this->precision;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrecision()
    {
        $this->assertPropertyIsSet(self::PRECISION);

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @param int|null $scale
     *
     * @return $this
     */
    public function setScale(?int $scale = null)
    {
        $this->scale = $scale;
        $this->modifiedProperties[self::SCALE] = true;

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @return int|null
     */
    public function getScale(): ?int
    {
        return $this->scale;
    }

    /**
     * @module DynamicEntity
     *
     * @param int $scale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setScaleOrFail(int $scale)
    {
        return $this->setScale($scale);
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getScaleOrFail(): int
    {
        if ($this->scale === null) {
            $this->throwNullValueException(static::SCALE);
        }

        return $this->scale;
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireScale()
    {
        $this->assertPropertyIsSet(self::SCALE);

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @param bool|null $isRequired
     *
     * @return $this
     */
    public function setIsRequired(?bool $isRequired = null)
    {
        $this->isRequired = $isRequired;
        $this->modifiedProperties[self::IS_REQUIRED] = true;

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @return bool|null
     */
    public function getIsRequired(): ?bool
    {
        return $this->isRequired;
    }

    /**
     * @module DynamicEntity
     *
     * @param bool $isRequired
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsRequiredOrFail(bool $isRequired)
    {
        return $this->setIsRequired($isRequired);
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsRequiredOrFail(): bool
    {
        if ($this->isRequired === null) {
            $this->throwNullValueException(static::IS_REQUIRED);
        }

        return $this->isRequired;
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsRequired()
    {
        $this->assertPropertyIsSet(self::IS_REQUIRED);

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\DynamicEntityFieldValidationConstraintTransfer> $constraints
     *
     * @return $this
     */
    public function setConstraints(ArrayObject $constraints)
    {
        $this->constraints = new ArrayObject();

        foreach ($constraints as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::CONSTRAINTS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addConstraint(...$args);
        }

        $this->modifiedProperties[self::CONSTRAINTS] = true;

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DynamicEntityFieldValidationConstraintTransfer>
     */
    public function getConstraints(): ArrayObject
    {
        return $this->constraints;
    }

    /**
     * @module DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityFieldValidationConstraintTransfer $constraint
     *
     * @return $this
     */
    public function addConstraint(DynamicEntityFieldValidationConstraintTransfer $constraint)
    {
        $this->constraints[] = $constraint;
        $this->modifiedProperties[self::CONSTRAINTS] = true;

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConstraints()
    {
        $this->assertCollectionPropertyIsSet(self::CONSTRAINTS);

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
                case 'min':
                case 'max':
                case 'minLength':
                case 'maxLength':
                case 'precision':
                case 'scale':
                case 'isRequired':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'constraints':
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
                case 'min':
                case 'max':
                case 'minLength':
                case 'maxLength':
                case 'precision':
                case 'scale':
                case 'isRequired':
                    $values[$arrayKey] = $value;

                    break;
                case 'constraints':
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
                case 'min':
                case 'max':
                case 'minLength':
                case 'maxLength':
                case 'precision':
                case 'scale':
                case 'isRequired':
                    $values[$arrayKey] = $value;

                    break;
                case 'constraints':
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
        $this->constraints = $this->constraints ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'min' => $this->min,
            'max' => $this->max,
            'minLength' => $this->minLength,
            'maxLength' => $this->maxLength,
            'precision' => $this->precision,
            'scale' => $this->scale,
            'isRequired' => $this->isRequired,
            'constraints' => $this->constraints,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'min' => $this->min,
            'max' => $this->max,
            'min_length' => $this->minLength,
            'max_length' => $this->maxLength,
            'precision' => $this->precision,
            'scale' => $this->scale,
            'is_required' => $this->isRequired,
            'constraints' => $this->constraints,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'min' => $this->min instanceof AbstractTransfer ? $this->min->toArray(true, false) : $this->min,
            'max' => $this->max instanceof AbstractTransfer ? $this->max->toArray(true, false) : $this->max,
            'min_length' => $this->minLength instanceof AbstractTransfer ? $this->minLength->toArray(true, false) : $this->minLength,
            'max_length' => $this->maxLength instanceof AbstractTransfer ? $this->maxLength->toArray(true, false) : $this->maxLength,
            'precision' => $this->precision instanceof AbstractTransfer ? $this->precision->toArray(true, false) : $this->precision,
            'scale' => $this->scale instanceof AbstractTransfer ? $this->scale->toArray(true, false) : $this->scale,
            'is_required' => $this->isRequired instanceof AbstractTransfer ? $this->isRequired->toArray(true, false) : $this->isRequired,
            'constraints' => $this->constraints instanceof AbstractTransfer ? $this->constraints->toArray(true, false) : $this->addValuesToCollection($this->constraints, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'min' => $this->min instanceof AbstractTransfer ? $this->min->toArray(true, true) : $this->min,
            'max' => $this->max instanceof AbstractTransfer ? $this->max->toArray(true, true) : $this->max,
            'minLength' => $this->minLength instanceof AbstractTransfer ? $this->minLength->toArray(true, true) : $this->minLength,
            'maxLength' => $this->maxLength instanceof AbstractTransfer ? $this->maxLength->toArray(true, true) : $this->maxLength,
            'precision' => $this->precision instanceof AbstractTransfer ? $this->precision->toArray(true, true) : $this->precision,
            'scale' => $this->scale instanceof AbstractTransfer ? $this->scale->toArray(true, true) : $this->scale,
            'isRequired' => $this->isRequired instanceof AbstractTransfer ? $this->isRequired->toArray(true, true) : $this->isRequired,
            'constraints' => $this->constraints instanceof AbstractTransfer ? $this->constraints->toArray(true, true) : $this->addValuesToCollection($this->constraints, true, true),
        ];
    }
}
