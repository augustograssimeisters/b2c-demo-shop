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
class SpyDynamicEntityConfigurationRelationEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION = 'idDynamicEntityConfigurationRelation';

    /**
     * @var string
     */
    public const FK_PARENT_DYNAMIC_ENTITY_CONFIGURATION = 'fkParentDynamicEntityConfiguration';

    /**
     * @var string
     */
    public const FK_CHILD_DYNAMIC_ENTITY_CONFIGURATION = 'fkChildDynamicEntityConfiguration';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const IS_EDITABLE = 'isEditable';

    /**
     * @var string
     */
    public const SPY_DYNAMIC_ENTITY_CONFIGURATION = 'spyDynamicEntityConfiguration';

    /**
     * @var string
     */
    public const SPY_DYNAMIC_CONFIGURATION_RELATION_FIELD_MAPPINGS = 'spyDynamicConfigurationRelationFieldMappings';

    /**
     * @var integer|null
     */
    protected $idDynamicEntityConfigurationRelation;

    /**
     * @var integer|null
     */
    protected $fkParentDynamicEntityConfiguration;

    /**
     * @var integer|null
     */
    protected $fkChildDynamicEntityConfiguration;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var boolean|null
     */
    protected $isEditable;

    /**
     * @var \Generated\Shared\Transfer\SpyDynamicEntityConfigurationEntityTransfer|null
     */
    protected $spyDynamicEntityConfiguration;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationFieldMappingEntityTransfer>
     */
    protected $spyDynamicConfigurationRelationFieldMappings;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_dynamic_entity_configuration_relation' => 'idDynamicEntityConfigurationRelation',
        'idDynamicEntityConfigurationRelation' => 'idDynamicEntityConfigurationRelation',
        'IdDynamicEntityConfigurationRelation' => 'idDynamicEntityConfigurationRelation',
        'fk_parent_dynamic_entity_configuration' => 'fkParentDynamicEntityConfiguration',
        'fkParentDynamicEntityConfiguration' => 'fkParentDynamicEntityConfiguration',
        'FkParentDynamicEntityConfiguration' => 'fkParentDynamicEntityConfiguration',
        'fk_child_dynamic_entity_configuration' => 'fkChildDynamicEntityConfiguration',
        'fkChildDynamicEntityConfiguration' => 'fkChildDynamicEntityConfiguration',
        'FkChildDynamicEntityConfiguration' => 'fkChildDynamicEntityConfiguration',
        'name' => 'name',
        'Name' => 'name',
        'is_editable' => 'isEditable',
        'isEditable' => 'isEditable',
        'IsEditable' => 'isEditable',
        'spy_dynamic_entity_configuration' => 'spyDynamicEntityConfiguration',
        'spyDynamicEntityConfiguration' => 'spyDynamicEntityConfiguration',
        'SpyDynamicEntityConfiguration' => 'spyDynamicEntityConfiguration',
        'spy_dynamic_configuration_relation_field_mappings' => 'spyDynamicConfigurationRelationFieldMappings',
        'spyDynamicConfigurationRelationFieldMappings' => 'spyDynamicConfigurationRelationFieldMappings',
        'SpyDynamicConfigurationRelationFieldMappings' => 'spyDynamicConfigurationRelationFieldMappings',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_dynamic_entity_configuration_relation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PARENT_DYNAMIC_ENTITY_CONFIGURATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_parent_dynamic_entity_configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CHILD_DYNAMIC_ENTITY_CONFIGURATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_child_dynamic_entity_configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
            'is_strict' => false,
        ],
        self::IS_EDITABLE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_editable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_DYNAMIC_ENTITY_CONFIGURATION => [
            'type' => 'Generated\Shared\Transfer\SpyDynamicEntityConfigurationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_dynamic_entity_configuration',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_DYNAMIC_ENTITY_CONFIGURATION => [
            'type' => 'Generated\Shared\Transfer\SpyDynamicEntityConfigurationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_dynamic_entity_configuration',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_DYNAMIC_CONFIGURATION_RELATION_FIELD_MAPPINGS => [
            'type' => 'Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationFieldMappingEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_dynamic_configuration_relation_field_mappings',
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
    public static $entityNamespace = 'Orm\Zed\DynamicEntity\Persistence\SpyDynamicEntityConfigurationRelation';


    /**
     * @module 
     *
     * @param integer|null $idDynamicEntityConfigurationRelation
     *
     * @return $this
     */
    public function setIdDynamicEntityConfigurationRelation($idDynamicEntityConfigurationRelation)
    {
        $this->idDynamicEntityConfigurationRelation = $idDynamicEntityConfigurationRelation;
        $this->modifiedProperties[self::ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdDynamicEntityConfigurationRelation()
    {
        return $this->idDynamicEntityConfigurationRelation;
    }

    /**
     * @module 
     *
     * @param integer|null $idDynamicEntityConfigurationRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDynamicEntityConfigurationRelationOrFail($idDynamicEntityConfigurationRelation)
    {
        if ($idDynamicEntityConfigurationRelation === null) {
            $this->throwNullValueException(static::ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION);
        }

        return $this->setIdDynamicEntityConfigurationRelation($idDynamicEntityConfigurationRelation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdDynamicEntityConfigurationRelationOrFail()
    {
        if ($this->idDynamicEntityConfigurationRelation === null) {
            $this->throwNullValueException(static::ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION);
        }

        return $this->idDynamicEntityConfigurationRelation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdDynamicEntityConfigurationRelation()
    {
        $this->assertPropertyIsSet(self::ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkParentDynamicEntityConfiguration
     *
     * @return $this
     */
    public function setFkParentDynamicEntityConfiguration($fkParentDynamicEntityConfiguration)
    {
        $this->fkParentDynamicEntityConfiguration = $fkParentDynamicEntityConfiguration;
        $this->modifiedProperties[self::FK_PARENT_DYNAMIC_ENTITY_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkParentDynamicEntityConfiguration()
    {
        return $this->fkParentDynamicEntityConfiguration;
    }

    /**
     * @module 
     *
     * @param integer|null $fkParentDynamicEntityConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkParentDynamicEntityConfigurationOrFail($fkParentDynamicEntityConfiguration)
    {
        if ($fkParentDynamicEntityConfiguration === null) {
            $this->throwNullValueException(static::FK_PARENT_DYNAMIC_ENTITY_CONFIGURATION);
        }

        return $this->setFkParentDynamicEntityConfiguration($fkParentDynamicEntityConfiguration);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkParentDynamicEntityConfigurationOrFail()
    {
        if ($this->fkParentDynamicEntityConfiguration === null) {
            $this->throwNullValueException(static::FK_PARENT_DYNAMIC_ENTITY_CONFIGURATION);
        }

        return $this->fkParentDynamicEntityConfiguration;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkParentDynamicEntityConfiguration()
    {
        $this->assertPropertyIsSet(self::FK_PARENT_DYNAMIC_ENTITY_CONFIGURATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkChildDynamicEntityConfiguration
     *
     * @return $this
     */
    public function setFkChildDynamicEntityConfiguration($fkChildDynamicEntityConfiguration)
    {
        $this->fkChildDynamicEntityConfiguration = $fkChildDynamicEntityConfiguration;
        $this->modifiedProperties[self::FK_CHILD_DYNAMIC_ENTITY_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkChildDynamicEntityConfiguration()
    {
        return $this->fkChildDynamicEntityConfiguration;
    }

    /**
     * @module 
     *
     * @param integer|null $fkChildDynamicEntityConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkChildDynamicEntityConfigurationOrFail($fkChildDynamicEntityConfiguration)
    {
        if ($fkChildDynamicEntityConfiguration === null) {
            $this->throwNullValueException(static::FK_CHILD_DYNAMIC_ENTITY_CONFIGURATION);
        }

        return $this->setFkChildDynamicEntityConfiguration($fkChildDynamicEntityConfiguration);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkChildDynamicEntityConfigurationOrFail()
    {
        if ($this->fkChildDynamicEntityConfiguration === null) {
            $this->throwNullValueException(static::FK_CHILD_DYNAMIC_ENTITY_CONFIGURATION);
        }

        return $this->fkChildDynamicEntityConfiguration;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkChildDynamicEntityConfiguration()
    {
        $this->assertPropertyIsSet(self::FK_CHILD_DYNAMIC_ENTITY_CONFIGURATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isEditable
     *
     * @return $this
     */
    public function setIsEditable($isEditable)
    {
        $this->isEditable = $isEditable;
        $this->modifiedProperties[self::IS_EDITABLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsEditable()
    {
        return $this->isEditable;
    }

    /**
     * @module 
     *
     * @param boolean|null $isEditable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsEditableOrFail($isEditable)
    {
        if ($isEditable === null) {
            $this->throwNullValueException(static::IS_EDITABLE);
        }

        return $this->setIsEditable($isEditable);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsEditableOrFail()
    {
        if ($this->isEditable === null) {
            $this->throwNullValueException(static::IS_EDITABLE);
        }

        return $this->isEditable;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDynamicEntityConfigurationEntityTransfer|null $spyDynamicEntityConfiguration
     *
     * @return $this
     */
    public function setSpyDynamicEntityConfiguration(SpyDynamicEntityConfigurationEntityTransfer $spyDynamicEntityConfiguration = null)
    {
        $this->spyDynamicEntityConfiguration = $spyDynamicEntityConfiguration;
        $this->modifiedProperties[self::SPY_DYNAMIC_ENTITY_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyDynamicEntityConfigurationEntityTransfer|null
     */
    public function getSpyDynamicEntityConfiguration()
    {
        return $this->spyDynamicEntityConfiguration;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDynamicEntityConfigurationEntityTransfer $spyDynamicEntityConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyDynamicEntityConfigurationOrFail(SpyDynamicEntityConfigurationEntityTransfer $spyDynamicEntityConfiguration)
    {
        return $this->setSpyDynamicEntityConfiguration($spyDynamicEntityConfiguration);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyDynamicEntityConfigurationEntityTransfer
     */
    public function getSpyDynamicEntityConfigurationOrFail()
    {
        if ($this->spyDynamicEntityConfiguration === null) {
            $this->throwNullValueException(static::SPY_DYNAMIC_ENTITY_CONFIGURATION);
        }

        return $this->spyDynamicEntityConfiguration;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyDynamicEntityConfiguration()
    {
        $this->assertPropertyIsSet(self::SPY_DYNAMIC_ENTITY_CONFIGURATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationFieldMappingEntityTransfer> $spyDynamicConfigurationRelationFieldMappings
     *
     * @return $this
     */
    public function setSpyDynamicConfigurationRelationFieldMappings(ArrayObject $spyDynamicConfigurationRelationFieldMappings)
    {
        $this->spyDynamicConfigurationRelationFieldMappings = $spyDynamicConfigurationRelationFieldMappings;
        $this->modifiedProperties[self::SPY_DYNAMIC_CONFIGURATION_RELATION_FIELD_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationFieldMappingEntityTransfer>
     */
    public function getSpyDynamicConfigurationRelationFieldMappings()
    {
        return $this->spyDynamicConfigurationRelationFieldMappings;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationFieldMappingEntityTransfer $spyDynamicConfigurationRelationFieldMappings
     *
     * @return $this
     */
    public function addSpyDynamicConfigurationRelationFieldMappings(SpyDynamicEntityConfigurationRelationFieldMappingEntityTransfer $spyDynamicConfigurationRelationFieldMappings)
    {
        $this->spyDynamicConfigurationRelationFieldMappings[] = $spyDynamicConfigurationRelationFieldMappings;
        $this->modifiedProperties[self::SPY_DYNAMIC_CONFIGURATION_RELATION_FIELD_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyDynamicConfigurationRelationFieldMappings()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_DYNAMIC_CONFIGURATION_RELATION_FIELD_MAPPINGS);

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
                case 'idDynamicEntityConfigurationRelation':
                case 'fkParentDynamicEntityConfiguration':
                case 'fkChildDynamicEntityConfiguration':
                case 'name':
                case 'isEditable':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyDynamicEntityConfiguration':
                case 'spyDynamicEntityConfiguration':
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
                case 'spyDynamicConfigurationRelationFieldMappings':
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
                case 'idDynamicEntityConfigurationRelation':
                case 'fkParentDynamicEntityConfiguration':
                case 'fkChildDynamicEntityConfiguration':
                case 'name':
                case 'isEditable':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyDynamicEntityConfiguration':
                case 'spyDynamicEntityConfiguration':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyDynamicConfigurationRelationFieldMappings':
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
                case 'idDynamicEntityConfigurationRelation':
                case 'fkParentDynamicEntityConfiguration':
                case 'fkChildDynamicEntityConfiguration':
                case 'name':
                case 'isEditable':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyDynamicEntityConfiguration':
                case 'spyDynamicEntityConfiguration':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyDynamicConfigurationRelationFieldMappings':
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
        $this->spyDynamicConfigurationRelationFieldMappings = $this->spyDynamicConfigurationRelationFieldMappings ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idDynamicEntityConfigurationRelation' => $this->idDynamicEntityConfigurationRelation,
            'fkParentDynamicEntityConfiguration' => $this->fkParentDynamicEntityConfiguration,
            'fkChildDynamicEntityConfiguration' => $this->fkChildDynamicEntityConfiguration,
            'name' => $this->name,
            'isEditable' => $this->isEditable,
            'spyDynamicEntityConfiguration' => $this->spyDynamicEntityConfiguration,
            'spyDynamicEntityConfiguration' => $this->spyDynamicEntityConfiguration,
            'spyDynamicConfigurationRelationFieldMappings' => $this->spyDynamicConfigurationRelationFieldMappings,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_dynamic_entity_configuration_relation' => $this->idDynamicEntityConfigurationRelation,
            'fk_parent_dynamic_entity_configuration' => $this->fkParentDynamicEntityConfiguration,
            'fk_child_dynamic_entity_configuration' => $this->fkChildDynamicEntityConfiguration,
            'name' => $this->name,
            'is_editable' => $this->isEditable,
            'spy_dynamic_entity_configuration' => $this->spyDynamicEntityConfiguration,
            'spy_dynamic_entity_configuration' => $this->spyDynamicEntityConfiguration,
            'spy_dynamic_configuration_relation_field_mappings' => $this->spyDynamicConfigurationRelationFieldMappings,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_dynamic_entity_configuration_relation' => $this->idDynamicEntityConfigurationRelation instanceof AbstractTransfer ? $this->idDynamicEntityConfigurationRelation->toArray(true, false) : $this->idDynamicEntityConfigurationRelation,
            'fk_parent_dynamic_entity_configuration' => $this->fkParentDynamicEntityConfiguration instanceof AbstractTransfer ? $this->fkParentDynamicEntityConfiguration->toArray(true, false) : $this->fkParentDynamicEntityConfiguration,
            'fk_child_dynamic_entity_configuration' => $this->fkChildDynamicEntityConfiguration instanceof AbstractTransfer ? $this->fkChildDynamicEntityConfiguration->toArray(true, false) : $this->fkChildDynamicEntityConfiguration,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'is_editable' => $this->isEditable instanceof AbstractTransfer ? $this->isEditable->toArray(true, false) : $this->isEditable,
            'spy_dynamic_entity_configuration' => $this->spyDynamicEntityConfiguration instanceof AbstractTransfer ? $this->spyDynamicEntityConfiguration->toArray(true, false) : $this->spyDynamicEntityConfiguration,
            'spy_dynamic_entity_configuration' => $this->spyDynamicEntityConfiguration instanceof AbstractTransfer ? $this->spyDynamicEntityConfiguration->toArray(true, false) : $this->spyDynamicEntityConfiguration,
            'spy_dynamic_configuration_relation_field_mappings' => $this->spyDynamicConfigurationRelationFieldMappings instanceof AbstractTransfer ? $this->spyDynamicConfigurationRelationFieldMappings->toArray(true, false) : $this->addValuesToCollection($this->spyDynamicConfigurationRelationFieldMappings, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDynamicEntityConfigurationRelation' => $this->idDynamicEntityConfigurationRelation instanceof AbstractTransfer ? $this->idDynamicEntityConfigurationRelation->toArray(true, true) : $this->idDynamicEntityConfigurationRelation,
            'fkParentDynamicEntityConfiguration' => $this->fkParentDynamicEntityConfiguration instanceof AbstractTransfer ? $this->fkParentDynamicEntityConfiguration->toArray(true, true) : $this->fkParentDynamicEntityConfiguration,
            'fkChildDynamicEntityConfiguration' => $this->fkChildDynamicEntityConfiguration instanceof AbstractTransfer ? $this->fkChildDynamicEntityConfiguration->toArray(true, true) : $this->fkChildDynamicEntityConfiguration,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'isEditable' => $this->isEditable instanceof AbstractTransfer ? $this->isEditable->toArray(true, true) : $this->isEditable,
            'spyDynamicEntityConfiguration' => $this->spyDynamicEntityConfiguration instanceof AbstractTransfer ? $this->spyDynamicEntityConfiguration->toArray(true, true) : $this->spyDynamicEntityConfiguration,
            'spyDynamicEntityConfiguration' => $this->spyDynamicEntityConfiguration instanceof AbstractTransfer ? $this->spyDynamicEntityConfiguration->toArray(true, true) : $this->spyDynamicEntityConfiguration,
            'spyDynamicConfigurationRelationFieldMappings' => $this->spyDynamicConfigurationRelationFieldMappings instanceof AbstractTransfer ? $this->spyDynamicConfigurationRelationFieldMappings->toArray(true, true) : $this->addValuesToCollection($this->spyDynamicConfigurationRelationFieldMappings, true, true),
        ];
    }
}
