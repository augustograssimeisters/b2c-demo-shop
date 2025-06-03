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
class DynamicEntityCollectionRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_CREATABLE = 'isCreatable';

    /**
     * @var string
     */
    public const RESET_NOT_PROVIDED_FIELD_VALUES = 'resetNotProvidedFieldValues';

    /**
     * @var string
     */
    public const TABLE_ALIAS = 'tableAlias';

    /**
     * @var string
     */
    public const DYNAMIC_ENTITIES = 'dynamicEntities';

    /**
     * @var string
     */
    public const IS_TRANSACTIONAL = 'isTransactional';

    /**
     * @var bool|null
     */
    protected $isCreatable;

    /**
     * @var bool|null
     */
    protected $resetNotProvidedFieldValues;

    /**
     * @var string|null
     */
    protected $tableAlias;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DynamicEntityTransfer>
     */
    protected $dynamicEntities;

    /**
     * @var bool|null
     */
    protected $isTransactional;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_creatable' => 'isCreatable',
        'isCreatable' => 'isCreatable',
        'IsCreatable' => 'isCreatable',
        'reset_not_provided_field_values' => 'resetNotProvidedFieldValues',
        'resetNotProvidedFieldValues' => 'resetNotProvidedFieldValues',
        'ResetNotProvidedFieldValues' => 'resetNotProvidedFieldValues',
        'table_alias' => 'tableAlias',
        'tableAlias' => 'tableAlias',
        'TableAlias' => 'tableAlias',
        'dynamic_entities' => 'dynamicEntities',
        'dynamicEntities' => 'dynamicEntities',
        'DynamicEntities' => 'dynamicEntities',
        'is_transactional' => 'isTransactional',
        'isTransactional' => 'isTransactional',
        'IsTransactional' => 'isTransactional',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::RESET_NOT_PROVIDED_FIELD_VALUES => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'reset_not_provided_field_values',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
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
        self::DYNAMIC_ENTITIES => [
            'type' => 'Generated\Shared\Transfer\DynamicEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'dynamic_entities',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_TRANSACTIONAL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_transactional',
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
     * @param bool|null $resetNotProvidedFieldValues
     *
     * @return $this
     */
    public function setResetNotProvidedFieldValues(?bool $resetNotProvidedFieldValues = null)
    {
        $this->resetNotProvidedFieldValues = $resetNotProvidedFieldValues;
        $this->modifiedProperties[self::RESET_NOT_PROVIDED_FIELD_VALUES] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return bool|null
     */
    public function getResetNotProvidedFieldValues(): ?bool
    {
        return $this->resetNotProvidedFieldValues;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param bool $resetNotProvidedFieldValues
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResetNotProvidedFieldValuesOrFail(bool $resetNotProvidedFieldValues)
    {
        return $this->setResetNotProvidedFieldValues($resetNotProvidedFieldValues);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getResetNotProvidedFieldValuesOrFail(): bool
    {
        if ($this->resetNotProvidedFieldValues === null) {
            $this->throwNullValueException(static::RESET_NOT_PROVIDED_FIELD_VALUES);
        }

        return $this->resetNotProvidedFieldValues;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResetNotProvidedFieldValues()
    {
        $this->assertPropertyIsSet(self::RESET_NOT_PROVIDED_FIELD_VALUES);

        return $this;
    }

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
     * @param \ArrayObject<\Generated\Shared\Transfer\DynamicEntityTransfer> $dynamicEntities
     *
     * @return $this
     */
    public function setDynamicEntities(ArrayObject $dynamicEntities)
    {
        $this->dynamicEntities = new ArrayObject();

        foreach ($dynamicEntities as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::DYNAMIC_ENTITIES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addDynamicEntity(...$args);
        }

        $this->modifiedProperties[self::DYNAMIC_ENTITIES] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DynamicEntityTransfer>
     */
    public function getDynamicEntities(): ArrayObject
    {
        return $this->dynamicEntities;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityTransfer $dynamicEntity
     *
     * @return $this
     */
    public function addDynamicEntity(DynamicEntityTransfer $dynamicEntity)
    {
        $this->dynamicEntities[] = $dynamicEntity;
        $this->modifiedProperties[self::DYNAMIC_ENTITIES] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDynamicEntities()
    {
        $this->assertCollectionPropertyIsSet(self::DYNAMIC_ENTITIES);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param bool|null $isTransactional
     *
     * @return $this
     */
    public function setIsTransactional(?bool $isTransactional = null)
    {
        $this->isTransactional = $isTransactional;
        $this->modifiedProperties[self::IS_TRANSACTIONAL] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return bool|null
     */
    public function getIsTransactional(): ?bool
    {
        return $this->isTransactional;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param bool $isTransactional
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsTransactionalOrFail(bool $isTransactional)
    {
        return $this->setIsTransactional($isTransactional);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsTransactionalOrFail(): bool
    {
        if ($this->isTransactional === null) {
            $this->throwNullValueException(static::IS_TRANSACTIONAL);
        }

        return $this->isTransactional;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsTransactional()
    {
        $this->assertPropertyIsSet(self::IS_TRANSACTIONAL);

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
                case 'isCreatable':
                case 'resetNotProvidedFieldValues':
                case 'tableAlias':
                case 'isTransactional':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'dynamicEntities':
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
                case 'isCreatable':
                case 'resetNotProvidedFieldValues':
                case 'tableAlias':
                case 'isTransactional':
                    $values[$arrayKey] = $value;

                    break;
                case 'dynamicEntities':
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
                case 'isCreatable':
                case 'resetNotProvidedFieldValues':
                case 'tableAlias':
                case 'isTransactional':
                    $values[$arrayKey] = $value;

                    break;
                case 'dynamicEntities':
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
        $this->dynamicEntities = $this->dynamicEntities ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isCreatable' => $this->isCreatable,
            'resetNotProvidedFieldValues' => $this->resetNotProvidedFieldValues,
            'tableAlias' => $this->tableAlias,
            'isTransactional' => $this->isTransactional,
            'dynamicEntities' => $this->dynamicEntities,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_creatable' => $this->isCreatable,
            'reset_not_provided_field_values' => $this->resetNotProvidedFieldValues,
            'table_alias' => $this->tableAlias,
            'is_transactional' => $this->isTransactional,
            'dynamic_entities' => $this->dynamicEntities,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_creatable' => $this->isCreatable instanceof AbstractTransfer ? $this->isCreatable->toArray(true, false) : $this->isCreatable,
            'reset_not_provided_field_values' => $this->resetNotProvidedFieldValues instanceof AbstractTransfer ? $this->resetNotProvidedFieldValues->toArray(true, false) : $this->resetNotProvidedFieldValues,
            'table_alias' => $this->tableAlias instanceof AbstractTransfer ? $this->tableAlias->toArray(true, false) : $this->tableAlias,
            'is_transactional' => $this->isTransactional instanceof AbstractTransfer ? $this->isTransactional->toArray(true, false) : $this->isTransactional,
            'dynamic_entities' => $this->dynamicEntities instanceof AbstractTransfer ? $this->dynamicEntities->toArray(true, false) : $this->addValuesToCollection($this->dynamicEntities, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isCreatable' => $this->isCreatable instanceof AbstractTransfer ? $this->isCreatable->toArray(true, true) : $this->isCreatable,
            'resetNotProvidedFieldValues' => $this->resetNotProvidedFieldValues instanceof AbstractTransfer ? $this->resetNotProvidedFieldValues->toArray(true, true) : $this->resetNotProvidedFieldValues,
            'tableAlias' => $this->tableAlias instanceof AbstractTransfer ? $this->tableAlias->toArray(true, true) : $this->tableAlias,
            'isTransactional' => $this->isTransactional instanceof AbstractTransfer ? $this->isTransactional->toArray(true, true) : $this->isTransactional,
            'dynamicEntities' => $this->dynamicEntities instanceof AbstractTransfer ? $this->dynamicEntities->toArray(true, true) : $this->addValuesToCollection($this->dynamicEntities, true, true),
        ];
    }
}
