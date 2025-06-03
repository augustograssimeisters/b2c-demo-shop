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
class DynamicEntityConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TABLE_ALIAS = 'tableAlias';

    /**
     * @var string
     */
    public const FIELD_CONDITIONS = 'fieldConditions';

    /**
     * @var string|null
     */
    protected $tableAlias;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DynamicEntityFieldConditionTransfer>
     */
    protected $fieldConditions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'table_alias' => 'tableAlias',
        'tableAlias' => 'tableAlias',
        'TableAlias' => 'tableAlias',
        'field_conditions' => 'fieldConditions',
        'fieldConditions' => 'fieldConditions',
        'FieldConditions' => 'fieldConditions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TABLE_ALIAS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'table_alias',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::FIELD_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\DynamicEntityFieldConditionTransfer',
            'type_shim' => null,
            'name_underscore' => 'field_conditions',
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
     * @param string|null $tableAlias
     *
     * @return $this
     */
    public function setTableAlias(?string $tableAlias = null)
    {
        $this->tableAlias = $tableAlias;
        $this->modifiedProperties[self::TABLE_ALIAS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return string|null
     */
    public function getTableAlias(): ?string
    {
        return $this->tableAlias;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param string $tableAlias
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTableAliasOrFail(string $tableAlias)
    {
        return $this->setTableAlias($tableAlias);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTableAliasOrFail(): string
    {
        if ($this->tableAlias === null) {
            $this->throwNullValueException(static::TABLE_ALIAS);
        }

        return $this->tableAlias;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTableAlias()
    {
        $this->assertPropertyIsSet(self::TABLE_ALIAS);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\DynamicEntityFieldConditionTransfer> $fieldConditions
     *
     * @return $this
     */
    public function setFieldConditions(ArrayObject $fieldConditions)
    {
        $this->fieldConditions = new ArrayObject();

        foreach ($fieldConditions as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::FIELD_CONDITIONS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addFieldCondition(...$args);
        }

        $this->modifiedProperties[self::FIELD_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DynamicEntityFieldConditionTransfer>
     */
    public function getFieldConditions(): ArrayObject
    {
        return $this->fieldConditions;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityFieldConditionTransfer $fieldCondition
     *
     * @return $this
     */
    public function addFieldCondition(DynamicEntityFieldConditionTransfer $fieldCondition)
    {
        $this->fieldConditions[] = $fieldCondition;
        $this->modifiedProperties[self::FIELD_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFieldConditions()
    {
        $this->assertCollectionPropertyIsSet(self::FIELD_CONDITIONS);

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
                case 'tableAlias':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'fieldConditions':
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
                case 'tableAlias':
                    $values[$arrayKey] = $value;

                    break;
                case 'fieldConditions':
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
                case 'tableAlias':
                    $values[$arrayKey] = $value;

                    break;
                case 'fieldConditions':
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
        $this->fieldConditions = $this->fieldConditions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'tableAlias' => $this->tableAlias,
            'fieldConditions' => $this->fieldConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'table_alias' => $this->tableAlias,
            'field_conditions' => $this->fieldConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'table_alias' => $this->tableAlias instanceof AbstractTransfer ? $this->tableAlias->toArray(true, false) : $this->tableAlias,
            'field_conditions' => $this->fieldConditions instanceof AbstractTransfer ? $this->fieldConditions->toArray(true, false) : $this->addValuesToCollection($this->fieldConditions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'tableAlias' => $this->tableAlias instanceof AbstractTransfer ? $this->tableAlias->toArray(true, true) : $this->tableAlias,
            'fieldConditions' => $this->fieldConditions instanceof AbstractTransfer ? $this->fieldConditions->toArray(true, true) : $this->addValuesToCollection($this->fieldConditions, true, true),
        ];
    }
}
