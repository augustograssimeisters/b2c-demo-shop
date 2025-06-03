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
class DynamicEntityConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_DYNAMIC_ENTITY_CONFIGURATION = 'idDynamicEntityConfiguration';

    /**
     * @var string
     */
    public const TABLE_ALIAS = 'tableAlias';

    /**
     * @var string
     */
    public const TABLE_NAME = 'tableName';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const DYNAMIC_ENTITY_DEFINITION = 'dynamicEntityDefinition';

    /**
     * @var string
     */
    public const CHILD_RELATIONS = 'childRelations';

    /**
     * @var int|null
     */
    protected $idDynamicEntityConfiguration;

    /**
     * @var string|null
     */
    protected $tableAlias;

    /**
     * @var string|null
     */
    protected $tableName;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var \Generated\Shared\Transfer\DynamicEntityDefinitionTransfer|null
     */
    protected $dynamicEntityDefinition;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DynamicEntityConfigurationRelationTransfer>
     */
    protected $childRelations;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_dynamic_entity_configuration' => 'idDynamicEntityConfiguration',
        'idDynamicEntityConfiguration' => 'idDynamicEntityConfiguration',
        'IdDynamicEntityConfiguration' => 'idDynamicEntityConfiguration',
        'table_alias' => 'tableAlias',
        'tableAlias' => 'tableAlias',
        'TableAlias' => 'tableAlias',
        'table_name' => 'tableName',
        'tableName' => 'tableName',
        'TableName' => 'tableName',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'dynamic_entity_definition' => 'dynamicEntityDefinition',
        'dynamicEntityDefinition' => 'dynamicEntityDefinition',
        'DynamicEntityDefinition' => 'dynamicEntityDefinition',
        'child_relations' => 'childRelations',
        'childRelations' => 'childRelations',
        'ChildRelations' => 'childRelations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DYNAMIC_ENTITY_CONFIGURATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_dynamic_entity_configuration',
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
        self::TABLE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'table_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::DYNAMIC_ENTITY_DEFINITION => [
            'type' => 'Generated\Shared\Transfer\DynamicEntityDefinitionTransfer',
            'type_shim' => null,
            'name_underscore' => 'dynamic_entity_definition',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CHILD_RELATIONS => [
            'type' => 'Generated\Shared\Transfer\DynamicEntityConfigurationRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'child_relations',
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
     * @param int|null $idDynamicEntityConfiguration
     *
     * @return $this
     */
    public function setIdDynamicEntityConfiguration(?int $idDynamicEntityConfiguration = null)
    {
        $this->idDynamicEntityConfiguration = $idDynamicEntityConfiguration;
        $this->modifiedProperties[self::ID_DYNAMIC_ENTITY_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return int|null
     */
    public function getIdDynamicEntityConfiguration(): ?int
    {
        return $this->idDynamicEntityConfiguration;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param int $idDynamicEntityConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDynamicEntityConfigurationOrFail(int $idDynamicEntityConfiguration)
    {
        return $this->setIdDynamicEntityConfiguration($idDynamicEntityConfiguration);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdDynamicEntityConfigurationOrFail(): int
    {
        if ($this->idDynamicEntityConfiguration === null) {
            $this->throwNullValueException(static::ID_DYNAMIC_ENTITY_CONFIGURATION);
        }

        return $this->idDynamicEntityConfiguration;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdDynamicEntityConfiguration()
    {
        $this->assertPropertyIsSet(self::ID_DYNAMIC_ENTITY_CONFIGURATION);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
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
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @return string|null
     */
    public function getTableAlias(): ?string
    {
        return $this->tableAlias;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
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
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
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
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
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
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param string|null $tableName
     *
     * @return $this
     */
    public function setTableName(?string $tableName = null)
    {
        $this->tableName = $tableName;
        $this->modifiedProperties[self::TABLE_NAME] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @return string|null
     */
    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param string $tableName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTableNameOrFail(string $tableName)
    {
        return $this->setTableName($tableName);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTableNameOrFail(): string
    {
        if ($this->tableName === null) {
            $this->throwNullValueException(static::TABLE_NAME);
        }

        return $this->tableName;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTableName()
    {
        $this->assertPropertyIsSet(self::TABLE_NAME);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive(?bool $isActive = null)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param bool $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail(bool $isActive)
    {
        return $this->setIsActive($isActive);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail(): bool
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityDefinitionTransfer|null $dynamicEntityDefinition
     *
     * @return $this
     */
    public function setDynamicEntityDefinition(?DynamicEntityDefinitionTransfer $dynamicEntityDefinition = null)
    {
        $this->dynamicEntityDefinition = $dynamicEntityDefinition;
        $this->modifiedProperties[self::DYNAMIC_ENTITY_DEFINITION] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @return \Generated\Shared\Transfer\DynamicEntityDefinitionTransfer|null
     */
    public function getDynamicEntityDefinition(): ?DynamicEntityDefinitionTransfer
    {
        return $this->dynamicEntityDefinition;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityDefinitionTransfer $dynamicEntityDefinition
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDynamicEntityDefinitionOrFail(DynamicEntityDefinitionTransfer $dynamicEntityDefinition)
    {
        return $this->setDynamicEntityDefinition($dynamicEntityDefinition);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DynamicEntityDefinitionTransfer
     */
    public function getDynamicEntityDefinitionOrFail(): DynamicEntityDefinitionTransfer
    {
        if ($this->dynamicEntityDefinition === null) {
            $this->throwNullValueException(static::DYNAMIC_ENTITY_DEFINITION);
        }

        return $this->dynamicEntityDefinition;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDynamicEntityDefinition()
    {
        $this->assertPropertyIsSet(self::DYNAMIC_ENTITY_DEFINITION);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\DynamicEntityConfigurationRelationTransfer> $childRelations
     *
     * @return $this
     */
    public function setChildRelations(ArrayObject $childRelations)
    {
        $this->childRelations = new ArrayObject();

        foreach ($childRelations as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::CHILD_RELATIONS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addChildRelation(...$args);
        }

        $this->modifiedProperties[self::CHILD_RELATIONS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DynamicEntityConfigurationRelationTransfer>
     */
    public function getChildRelations(): ArrayObject
    {
        return $this->childRelations;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityConfigurationRelationTransfer $childRelation
     *
     * @return $this
     */
    public function addChildRelation(DynamicEntityConfigurationRelationTransfer $childRelation)
    {
        $this->childRelations[] = $childRelation;
        $this->modifiedProperties[self::CHILD_RELATIONS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChildRelations()
    {
        $this->assertCollectionPropertyIsSet(self::CHILD_RELATIONS);

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
                case 'idDynamicEntityConfiguration':
                case 'tableAlias':
                case 'tableName':
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'dynamicEntityDefinition':
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
                case 'childRelations':
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
                case 'idDynamicEntityConfiguration':
                case 'tableAlias':
                case 'tableName':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'dynamicEntityDefinition':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'childRelations':
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
                case 'idDynamicEntityConfiguration':
                case 'tableAlias':
                case 'tableName':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'dynamicEntityDefinition':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'childRelations':
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
        $this->childRelations = $this->childRelations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idDynamicEntityConfiguration' => $this->idDynamicEntityConfiguration,
            'tableAlias' => $this->tableAlias,
            'tableName' => $this->tableName,
            'isActive' => $this->isActive,
            'dynamicEntityDefinition' => $this->dynamicEntityDefinition,
            'childRelations' => $this->childRelations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_dynamic_entity_configuration' => $this->idDynamicEntityConfiguration,
            'table_alias' => $this->tableAlias,
            'table_name' => $this->tableName,
            'is_active' => $this->isActive,
            'dynamic_entity_definition' => $this->dynamicEntityDefinition,
            'child_relations' => $this->childRelations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_dynamic_entity_configuration' => $this->idDynamicEntityConfiguration instanceof AbstractTransfer ? $this->idDynamicEntityConfiguration->toArray(true, false) : $this->idDynamicEntityConfiguration,
            'table_alias' => $this->tableAlias instanceof AbstractTransfer ? $this->tableAlias->toArray(true, false) : $this->tableAlias,
            'table_name' => $this->tableName instanceof AbstractTransfer ? $this->tableName->toArray(true, false) : $this->tableName,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'dynamic_entity_definition' => $this->dynamicEntityDefinition instanceof AbstractTransfer ? $this->dynamicEntityDefinition->toArray(true, false) : $this->dynamicEntityDefinition,
            'child_relations' => $this->childRelations instanceof AbstractTransfer ? $this->childRelations->toArray(true, false) : $this->addValuesToCollection($this->childRelations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDynamicEntityConfiguration' => $this->idDynamicEntityConfiguration instanceof AbstractTransfer ? $this->idDynamicEntityConfiguration->toArray(true, true) : $this->idDynamicEntityConfiguration,
            'tableAlias' => $this->tableAlias instanceof AbstractTransfer ? $this->tableAlias->toArray(true, true) : $this->tableAlias,
            'tableName' => $this->tableName instanceof AbstractTransfer ? $this->tableName->toArray(true, true) : $this->tableName,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'dynamicEntityDefinition' => $this->dynamicEntityDefinition instanceof AbstractTransfer ? $this->dynamicEntityDefinition->toArray(true, true) : $this->dynamicEntityDefinition,
            'childRelations' => $this->childRelations instanceof AbstractTransfer ? $this->childRelations->toArray(true, true) : $this->addValuesToCollection($this->childRelations, true, true),
        ];
    }
}
