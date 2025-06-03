<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyDynamicEntityConfigurationEntityTransfer extends AbstractEntityTransfer
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
    public const DEFINITION = 'definition';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const SPY_DYNAMIC_CONFIGURATION_RELATIONS = 'spyDynamicConfigurationRelations';

    /**
     * @var integer|null
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
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $definition;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer>
     */
    protected $spyDynamicConfigurationRelations;

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
        'definition' => 'definition',
        'Definition' => 'definition',
        'type' => 'type',
        'Type' => 'type',
        'spy_dynamic_configuration_relations' => 'spyDynamicConfigurationRelations',
        'spyDynamicConfigurationRelations' => 'spyDynamicConfigurationRelations',
        'SpyDynamicConfigurationRelations' => 'spyDynamicConfigurationRelations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DYNAMIC_ENTITY_CONFIGURATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_dynamic_entity_configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
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
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFINITION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'definition',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
            'is_strict' => false,
        ],
        self::SPY_DYNAMIC_CONFIGURATION_RELATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_dynamic_configuration_relations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_DYNAMIC_CONFIGURATION_RELATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_dynamic_configuration_relations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\DynamicEntity\Persistence\SpyDynamicEntityConfiguration';


    /**
     * @module 
     *
     * @param integer|null $idDynamicEntityConfiguration
     *
     * @return $this
     */
    public function setIdDynamicEntityConfiguration($idDynamicEntityConfiguration)
    {
        $this->idDynamicEntityConfiguration = $idDynamicEntityConfiguration;
        $this->modifiedProperties[self::ID_DYNAMIC_ENTITY_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdDynamicEntityConfiguration()
    {
        return $this->idDynamicEntityConfiguration;
    }

    /**
     * @module 
     *
     * @param integer|null $idDynamicEntityConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDynamicEntityConfigurationOrFail($idDynamicEntityConfiguration)
    {
        if ($idDynamicEntityConfiguration === null) {
            $this->throwNullValueException(static::ID_DYNAMIC_ENTITY_CONFIGURATION);
        }

        return $this->setIdDynamicEntityConfiguration($idDynamicEntityConfiguration);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdDynamicEntityConfigurationOrFail()
    {
        if ($this->idDynamicEntityConfiguration === null) {
            $this->throwNullValueException(static::ID_DYNAMIC_ENTITY_CONFIGURATION);
        }

        return $this->idDynamicEntityConfiguration;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $tableAlias
     *
     * @return $this
     */
    public function setTableAlias($tableAlias)
    {
        $this->tableAlias = $tableAlias;
        $this->modifiedProperties[self::TABLE_ALIAS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getTableAlias()
    {
        return $this->tableAlias;
    }

    /**
     * @module 
     *
     * @param string|null $tableAlias
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTableAliasOrFail($tableAlias)
    {
        if ($tableAlias === null) {
            $this->throwNullValueException(static::TABLE_ALIAS);
        }

        return $this->setTableAlias($tableAlias);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTableAliasOrFail()
    {
        if ($this->tableAlias === null) {
            $this->throwNullValueException(static::TABLE_ALIAS);
        }

        return $this->tableAlias;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $tableName
     *
     * @return $this
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
        $this->modifiedProperties[self::TABLE_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * @module 
     *
     * @param string|null $tableName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTableNameOrFail($tableName)
    {
        if ($tableName === null) {
            $this->throwNullValueException(static::TABLE_NAME);
        }

        return $this->setTableName($tableName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTableNameOrFail()
    {
        if ($this->tableName === null) {
            $this->throwNullValueException(static::TABLE_NAME);
        }

        return $this->tableName;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $definition
     *
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
        $this->modifiedProperties[self::DEFINITION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * @module 
     *
     * @param string|null $definition
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefinitionOrFail($definition)
    {
        if ($definition === null) {
            $this->throwNullValueException(static::DEFINITION);
        }

        return $this->setDefinition($definition);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefinitionOrFail()
    {
        if ($this->definition === null) {
            $this->throwNullValueException(static::DEFINITION);
        }

        return $this->definition;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefinition()
    {
        $this->assertPropertyIsSet(self::DEFINITION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module 
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer> $spyDynamicConfigurationRelations
     *
     * @return $this
     */
    public function setSpyDynamicConfigurationRelations(ArrayObject $spyDynamicConfigurationRelations)
    {
        $this->spyDynamicConfigurationRelations = $spyDynamicConfigurationRelations;
        $this->modifiedProperties[self::SPY_DYNAMIC_CONFIGURATION_RELATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer>
     */
    public function getSpyDynamicConfigurationRelations()
    {
        return $this->spyDynamicConfigurationRelations;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer $spyDynamicConfigurationRelations
     *
     * @return $this
     */
    public function addSpyDynamicConfigurationRelations(SpyDynamicEntityConfigurationRelationEntityTransfer $spyDynamicConfigurationRelations)
    {
        $this->spyDynamicConfigurationRelations[] = $spyDynamicConfigurationRelations;
        $this->modifiedProperties[self::SPY_DYNAMIC_CONFIGURATION_RELATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyDynamicConfigurationRelations()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_DYNAMIC_CONFIGURATION_RELATIONS);

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
                case 'definition':
                case 'type':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyDynamicConfigurationRelations':
                case 'spyDynamicConfigurationRelations':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
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
                case 'definition':
                case 'type':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyDynamicConfigurationRelations':
                case 'spyDynamicConfigurationRelations':
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
                case 'definition':
                case 'type':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyDynamicConfigurationRelations':
                case 'spyDynamicConfigurationRelations':
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
        $this->spyDynamicConfigurationRelations = $this->spyDynamicConfigurationRelations ?: new ArrayObject();
        $this->spyDynamicConfigurationRelations = $this->spyDynamicConfigurationRelations ?: new ArrayObject();
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
            'definition' => $this->definition,
            'type' => $this->type,
            'spyDynamicConfigurationRelations' => $this->spyDynamicConfigurationRelations,
            'spyDynamicConfigurationRelations' => $this->spyDynamicConfigurationRelations,
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
            'definition' => $this->definition,
            'type' => $this->type,
            'spy_dynamic_configuration_relations' => $this->spyDynamicConfigurationRelations,
            'spy_dynamic_configuration_relations' => $this->spyDynamicConfigurationRelations,
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
            'definition' => $this->definition instanceof AbstractTransfer ? $this->definition->toArray(true, false) : $this->definition,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'spy_dynamic_configuration_relations' => $this->spyDynamicConfigurationRelations instanceof AbstractTransfer ? $this->spyDynamicConfigurationRelations->toArray(true, false) : $this->addValuesToCollection($this->spyDynamicConfigurationRelations, true, false),
            'spy_dynamic_configuration_relations' => $this->spyDynamicConfigurationRelations instanceof AbstractTransfer ? $this->spyDynamicConfigurationRelations->toArray(true, false) : $this->addValuesToCollection($this->spyDynamicConfigurationRelations, true, false),
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
            'definition' => $this->definition instanceof AbstractTransfer ? $this->definition->toArray(true, true) : $this->definition,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'spyDynamicConfigurationRelations' => $this->spyDynamicConfigurationRelations instanceof AbstractTransfer ? $this->spyDynamicConfigurationRelations->toArray(true, true) : $this->addValuesToCollection($this->spyDynamicConfigurationRelations, true, true),
            'spyDynamicConfigurationRelations' => $this->spyDynamicConfigurationRelations instanceof AbstractTransfer ? $this->spyDynamicConfigurationRelations->toArray(true, true) : $this->addValuesToCollection($this->spyDynamicConfigurationRelations, true, true),
        ];
    }
}
