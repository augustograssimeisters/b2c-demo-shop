<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyDynamicEntityConfigurationRelationFieldMappingEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION_FIELD_MAPPING = 'idDynamicEntityConfigurationRelationFieldMapping';

    /**
     * @var string
     */
    public const FK_DYNAMIC_ENTITY_CONFIGURATION_RELATION = 'fkDynamicEntityConfigurationRelation';

    /**
     * @var string
     */
    public const CHILD_FIELD_NAME = 'childFieldName';

    /**
     * @var string
     */
    public const PARENT_FIELD_NAME = 'parentFieldName';

    /**
     * @var string
     */
    public const SPY_DYNAMIC_ENTITY_CONFIGURATION_RELATION = 'spyDynamicEntityConfigurationRelation';

    /**
     * @var integer|null
     */
    protected $idDynamicEntityConfigurationRelationFieldMapping;

    /**
     * @var integer|null
     */
    protected $fkDynamicEntityConfigurationRelation;

    /**
     * @var string|null
     */
    protected $childFieldName;

    /**
     * @var string|null
     */
    protected $parentFieldName;

    /**
     * @var \Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer|null
     */
    protected $spyDynamicEntityConfigurationRelation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_dynamic_entity_configuration_relation_field_mapping' => 'idDynamicEntityConfigurationRelationFieldMapping',
        'idDynamicEntityConfigurationRelationFieldMapping' => 'idDynamicEntityConfigurationRelationFieldMapping',
        'IdDynamicEntityConfigurationRelationFieldMapping' => 'idDynamicEntityConfigurationRelationFieldMapping',
        'fk_dynamic_entity_configuration_relation' => 'fkDynamicEntityConfigurationRelation',
        'fkDynamicEntityConfigurationRelation' => 'fkDynamicEntityConfigurationRelation',
        'FkDynamicEntityConfigurationRelation' => 'fkDynamicEntityConfigurationRelation',
        'child_field_name' => 'childFieldName',
        'childFieldName' => 'childFieldName',
        'ChildFieldName' => 'childFieldName',
        'parent_field_name' => 'parentFieldName',
        'parentFieldName' => 'parentFieldName',
        'ParentFieldName' => 'parentFieldName',
        'spy_dynamic_entity_configuration_relation' => 'spyDynamicEntityConfigurationRelation',
        'spyDynamicEntityConfigurationRelation' => 'spyDynamicEntityConfigurationRelation',
        'SpyDynamicEntityConfigurationRelation' => 'spyDynamicEntityConfigurationRelation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION_FIELD_MAPPING => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_dynamic_entity_configuration_relation_field_mapping',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_DYNAMIC_ENTITY_CONFIGURATION_RELATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_dynamic_entity_configuration_relation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHILD_FIELD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'child_field_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARENT_FIELD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'parent_field_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_DYNAMIC_ENTITY_CONFIGURATION_RELATION => [
            'type' => 'Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_dynamic_entity_configuration_relation',
            'is_collection' => false,
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
    public static $entityNamespace = 'Orm\Zed\DynamicEntity\Persistence\SpyDynamicEntityConfigurationRelationFieldMapping';


    /**
     * @module 
     *
     * @param integer|null $idDynamicEntityConfigurationRelationFieldMapping
     *
     * @return $this
     */
    public function setIdDynamicEntityConfigurationRelationFieldMapping($idDynamicEntityConfigurationRelationFieldMapping)
    {
        $this->idDynamicEntityConfigurationRelationFieldMapping = $idDynamicEntityConfigurationRelationFieldMapping;
        $this->modifiedProperties[self::ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION_FIELD_MAPPING] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdDynamicEntityConfigurationRelationFieldMapping()
    {
        return $this->idDynamicEntityConfigurationRelationFieldMapping;
    }

    /**
     * @module 
     *
     * @param integer|null $idDynamicEntityConfigurationRelationFieldMapping
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdDynamicEntityConfigurationRelationFieldMappingOrFail($idDynamicEntityConfigurationRelationFieldMapping)
    {
        if ($idDynamicEntityConfigurationRelationFieldMapping === null) {
            $this->throwNullValueException(static::ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION_FIELD_MAPPING);
        }

        return $this->setIdDynamicEntityConfigurationRelationFieldMapping($idDynamicEntityConfigurationRelationFieldMapping);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdDynamicEntityConfigurationRelationFieldMappingOrFail()
    {
        if ($this->idDynamicEntityConfigurationRelationFieldMapping === null) {
            $this->throwNullValueException(static::ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION_FIELD_MAPPING);
        }

        return $this->idDynamicEntityConfigurationRelationFieldMapping;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdDynamicEntityConfigurationRelationFieldMapping()
    {
        $this->assertPropertyIsSet(self::ID_DYNAMIC_ENTITY_CONFIGURATION_RELATION_FIELD_MAPPING);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkDynamicEntityConfigurationRelation
     *
     * @return $this
     */
    public function setFkDynamicEntityConfigurationRelation($fkDynamicEntityConfigurationRelation)
    {
        $this->fkDynamicEntityConfigurationRelation = $fkDynamicEntityConfigurationRelation;
        $this->modifiedProperties[self::FK_DYNAMIC_ENTITY_CONFIGURATION_RELATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkDynamicEntityConfigurationRelation()
    {
        return $this->fkDynamicEntityConfigurationRelation;
    }

    /**
     * @module 
     *
     * @param integer|null $fkDynamicEntityConfigurationRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkDynamicEntityConfigurationRelationOrFail($fkDynamicEntityConfigurationRelation)
    {
        if ($fkDynamicEntityConfigurationRelation === null) {
            $this->throwNullValueException(static::FK_DYNAMIC_ENTITY_CONFIGURATION_RELATION);
        }

        return $this->setFkDynamicEntityConfigurationRelation($fkDynamicEntityConfigurationRelation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkDynamicEntityConfigurationRelationOrFail()
    {
        if ($this->fkDynamicEntityConfigurationRelation === null) {
            $this->throwNullValueException(static::FK_DYNAMIC_ENTITY_CONFIGURATION_RELATION);
        }

        return $this->fkDynamicEntityConfigurationRelation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkDynamicEntityConfigurationRelation()
    {
        $this->assertPropertyIsSet(self::FK_DYNAMIC_ENTITY_CONFIGURATION_RELATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $childFieldName
     *
     * @return $this
     */
    public function setChildFieldName($childFieldName)
    {
        $this->childFieldName = $childFieldName;
        $this->modifiedProperties[self::CHILD_FIELD_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getChildFieldName()
    {
        return $this->childFieldName;
    }

    /**
     * @module 
     *
     * @param string|null $childFieldName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setChildFieldNameOrFail($childFieldName)
    {
        if ($childFieldName === null) {
            $this->throwNullValueException(static::CHILD_FIELD_NAME);
        }

        return $this->setChildFieldName($childFieldName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getChildFieldNameOrFail()
    {
        if ($this->childFieldName === null) {
            $this->throwNullValueException(static::CHILD_FIELD_NAME);
        }

        return $this->childFieldName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChildFieldName()
    {
        $this->assertPropertyIsSet(self::CHILD_FIELD_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $parentFieldName
     *
     * @return $this
     */
    public function setParentFieldName($parentFieldName)
    {
        $this->parentFieldName = $parentFieldName;
        $this->modifiedProperties[self::PARENT_FIELD_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getParentFieldName()
    {
        return $this->parentFieldName;
    }

    /**
     * @module 
     *
     * @param string|null $parentFieldName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParentFieldNameOrFail($parentFieldName)
    {
        if ($parentFieldName === null) {
            $this->throwNullValueException(static::PARENT_FIELD_NAME);
        }

        return $this->setParentFieldName($parentFieldName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getParentFieldNameOrFail()
    {
        if ($this->parentFieldName === null) {
            $this->throwNullValueException(static::PARENT_FIELD_NAME);
        }

        return $this->parentFieldName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParentFieldName()
    {
        $this->assertPropertyIsSet(self::PARENT_FIELD_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer|null $spyDynamicEntityConfigurationRelation
     *
     * @return $this
     */
    public function setSpyDynamicEntityConfigurationRelation(SpyDynamicEntityConfigurationRelationEntityTransfer $spyDynamicEntityConfigurationRelation = null)
    {
        $this->spyDynamicEntityConfigurationRelation = $spyDynamicEntityConfigurationRelation;
        $this->modifiedProperties[self::SPY_DYNAMIC_ENTITY_CONFIGURATION_RELATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer|null
     */
    public function getSpyDynamicEntityConfigurationRelation()
    {
        return $this->spyDynamicEntityConfigurationRelation;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer $spyDynamicEntityConfigurationRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyDynamicEntityConfigurationRelationOrFail(SpyDynamicEntityConfigurationRelationEntityTransfer $spyDynamicEntityConfigurationRelation)
    {
        return $this->setSpyDynamicEntityConfigurationRelation($spyDynamicEntityConfigurationRelation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyDynamicEntityConfigurationRelationEntityTransfer
     */
    public function getSpyDynamicEntityConfigurationRelationOrFail()
    {
        if ($this->spyDynamicEntityConfigurationRelation === null) {
            $this->throwNullValueException(static::SPY_DYNAMIC_ENTITY_CONFIGURATION_RELATION);
        }

        return $this->spyDynamicEntityConfigurationRelation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyDynamicEntityConfigurationRelation()
    {
        $this->assertPropertyIsSet(self::SPY_DYNAMIC_ENTITY_CONFIGURATION_RELATION);

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
                case 'idDynamicEntityConfigurationRelationFieldMapping':
                case 'fkDynamicEntityConfigurationRelation':
                case 'childFieldName':
                case 'parentFieldName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyDynamicEntityConfigurationRelation':
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
                case 'idDynamicEntityConfigurationRelationFieldMapping':
                case 'fkDynamicEntityConfigurationRelation':
                case 'childFieldName':
                case 'parentFieldName':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyDynamicEntityConfigurationRelation':
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
                case 'idDynamicEntityConfigurationRelationFieldMapping':
                case 'fkDynamicEntityConfigurationRelation':
                case 'childFieldName':
                case 'parentFieldName':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyDynamicEntityConfigurationRelation':
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
            'idDynamicEntityConfigurationRelationFieldMapping' => $this->idDynamicEntityConfigurationRelationFieldMapping,
            'fkDynamicEntityConfigurationRelation' => $this->fkDynamicEntityConfigurationRelation,
            'childFieldName' => $this->childFieldName,
            'parentFieldName' => $this->parentFieldName,
            'spyDynamicEntityConfigurationRelation' => $this->spyDynamicEntityConfigurationRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_dynamic_entity_configuration_relation_field_mapping' => $this->idDynamicEntityConfigurationRelationFieldMapping,
            'fk_dynamic_entity_configuration_relation' => $this->fkDynamicEntityConfigurationRelation,
            'child_field_name' => $this->childFieldName,
            'parent_field_name' => $this->parentFieldName,
            'spy_dynamic_entity_configuration_relation' => $this->spyDynamicEntityConfigurationRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_dynamic_entity_configuration_relation_field_mapping' => $this->idDynamicEntityConfigurationRelationFieldMapping instanceof AbstractTransfer ? $this->idDynamicEntityConfigurationRelationFieldMapping->toArray(true, false) : $this->idDynamicEntityConfigurationRelationFieldMapping,
            'fk_dynamic_entity_configuration_relation' => $this->fkDynamicEntityConfigurationRelation instanceof AbstractTransfer ? $this->fkDynamicEntityConfigurationRelation->toArray(true, false) : $this->fkDynamicEntityConfigurationRelation,
            'child_field_name' => $this->childFieldName instanceof AbstractTransfer ? $this->childFieldName->toArray(true, false) : $this->childFieldName,
            'parent_field_name' => $this->parentFieldName instanceof AbstractTransfer ? $this->parentFieldName->toArray(true, false) : $this->parentFieldName,
            'spy_dynamic_entity_configuration_relation' => $this->spyDynamicEntityConfigurationRelation instanceof AbstractTransfer ? $this->spyDynamicEntityConfigurationRelation->toArray(true, false) : $this->spyDynamicEntityConfigurationRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idDynamicEntityConfigurationRelationFieldMapping' => $this->idDynamicEntityConfigurationRelationFieldMapping instanceof AbstractTransfer ? $this->idDynamicEntityConfigurationRelationFieldMapping->toArray(true, true) : $this->idDynamicEntityConfigurationRelationFieldMapping,
            'fkDynamicEntityConfigurationRelation' => $this->fkDynamicEntityConfigurationRelation instanceof AbstractTransfer ? $this->fkDynamicEntityConfigurationRelation->toArray(true, true) : $this->fkDynamicEntityConfigurationRelation,
            'childFieldName' => $this->childFieldName instanceof AbstractTransfer ? $this->childFieldName->toArray(true, true) : $this->childFieldName,
            'parentFieldName' => $this->parentFieldName instanceof AbstractTransfer ? $this->parentFieldName->toArray(true, true) : $this->parentFieldName,
            'spyDynamicEntityConfigurationRelation' => $this->spyDynamicEntityConfigurationRelation instanceof AbstractTransfer ? $this->spyDynamicEntityConfigurationRelation->toArray(true, true) : $this->spyDynamicEntityConfigurationRelation,
        ];
    }
}
