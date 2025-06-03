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
class AclEntityMetadataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ENTITY_NAME = 'entityName';

    /**
     * @var string
     */
    public const PARENT = 'parent';

    /**
     * @var string
     */
    public const IS_SUB_ENTITY = 'isSubEntity';

    /**
     * @var string
     */
    public const DEFAULT_GLOBAL_OPERATION_MASK = 'defaultGlobalOperationMask';

    /**
     * @var string
     */
    public const HAS_SEGMENT_TABLE = 'hasSegmentTable';

    /**
     * @var string|null
     */
    protected $entityName;

    /**
     * @var \Generated\Shared\Transfer\AclEntityParentMetadataTransfer|null
     */
    protected $parent;

    /**
     * @var bool|null
     */
    protected $isSubEntity;

    /**
     * @var int|null
     */
    protected $defaultGlobalOperationMask;

    /**
     * @var bool|null
     */
    protected $hasSegmentTable;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'entity_name' => 'entityName',
        'entityName' => 'entityName',
        'EntityName' => 'entityName',
        'parent' => 'parent',
        'Parent' => 'parent',
        'is_sub_entity' => 'isSubEntity',
        'isSubEntity' => 'isSubEntity',
        'IsSubEntity' => 'isSubEntity',
        'default_global_operation_mask' => 'defaultGlobalOperationMask',
        'defaultGlobalOperationMask' => 'defaultGlobalOperationMask',
        'DefaultGlobalOperationMask' => 'defaultGlobalOperationMask',
        'has_segment_table' => 'hasSegmentTable',
        'hasSegmentTable' => 'hasSegmentTable',
        'HasSegmentTable' => 'hasSegmentTable',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ENTITY_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'entity_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARENT => [
            'type' => 'Generated\Shared\Transfer\AclEntityParentMetadataTransfer',
            'type_shim' => null,
            'name_underscore' => 'parent',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SUB_ENTITY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_sub_entity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_GLOBAL_OPERATION_MASK => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'default_global_operation_mask',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HAS_SEGMENT_TABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'has_segment_table',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module Availability|CategoryImage|Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|GiftCard|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|ShipmentType|Shipment|StateMachine|Stock|Store|Tax|Url|UserPasswordReset
     *
     * @param string|null $entityName
     *
     * @return $this
     */
    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;
        $this->modifiedProperties[self::ENTITY_NAME] = true;

        return $this;
    }

    /**
     * @module Availability|CategoryImage|Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|GiftCard|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|ShipmentType|Shipment|StateMachine|Stock|Store|Tax|Url|UserPasswordReset
     *
     * @return string|null
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * @module Availability|CategoryImage|Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|GiftCard|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|ShipmentType|Shipment|StateMachine|Stock|Store|Tax|Url|UserPasswordReset
     *
     * @param string|null $entityName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEntityNameOrFail($entityName)
    {
        if ($entityName === null) {
            $this->throwNullValueException(static::ENTITY_NAME);
        }

        return $this->setEntityName($entityName);
    }

    /**
     * @module Availability|CategoryImage|Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|GiftCard|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|ShipmentType|Shipment|StateMachine|Stock|Store|Tax|Url|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEntityNameOrFail()
    {
        if ($this->entityName === null) {
            $this->throwNullValueException(static::ENTITY_NAME);
        }

        return $this->entityName;
    }

    /**
     * @module Availability|CategoryImage|Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|GiftCard|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|ShipmentType|Shipment|StateMachine|Stock|Store|Tax|Url|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEntityName()
    {
        $this->assertPropertyIsSet(self::ENTITY_NAME);

        return $this;
    }

    /**
     * @module Availability|CategoryImage|Category|DiscountPromotion|Discount|GiftCard|Glossary|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @param \Generated\Shared\Transfer\AclEntityParentMetadataTransfer|null $parent
     *
     * @return $this
     */
    public function setParent(AclEntityParentMetadataTransfer $parent = null)
    {
        $this->parent = $parent;
        $this->modifiedProperties[self::PARENT] = true;

        return $this;
    }

    /**
     * @module Availability|CategoryImage|Category|DiscountPromotion|Discount|GiftCard|Glossary|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @return \Generated\Shared\Transfer\AclEntityParentMetadataTransfer|null
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @module Availability|CategoryImage|Category|DiscountPromotion|Discount|GiftCard|Glossary|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @param \Generated\Shared\Transfer\AclEntityParentMetadataTransfer $parent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParentOrFail(AclEntityParentMetadataTransfer $parent)
    {
        return $this->setParent($parent);
    }

    /**
     * @module Availability|CategoryImage|Category|DiscountPromotion|Discount|GiftCard|Glossary|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AclEntityParentMetadataTransfer
     */
    public function getParentOrFail()
    {
        if ($this->parent === null) {
            $this->throwNullValueException(static::PARENT);
        }

        return $this->parent;
    }

    /**
     * @module Availability|CategoryImage|Category|DiscountPromotion|Discount|GiftCard|Glossary|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParent()
    {
        $this->assertPropertyIsSet(self::PARENT);

        return $this;
    }

    /**
     * @module Availability|CategoryImage|Category|Discount|GiftCard|Glossary|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @param bool|null $isSubEntity
     *
     * @return $this
     */
    public function setIsSubEntity($isSubEntity)
    {
        $this->isSubEntity = $isSubEntity;
        $this->modifiedProperties[self::IS_SUB_ENTITY] = true;

        return $this;
    }

    /**
     * @module Availability|CategoryImage|Category|Discount|GiftCard|Glossary|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @return bool|null
     */
    public function getIsSubEntity()
    {
        return $this->isSubEntity;
    }

    /**
     * @module Availability|CategoryImage|Category|Discount|GiftCard|Glossary|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @param bool|null $isSubEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSubEntityOrFail($isSubEntity)
    {
        if ($isSubEntity === null) {
            $this->throwNullValueException(static::IS_SUB_ENTITY);
        }

        return $this->setIsSubEntity($isSubEntity);
    }

    /**
     * @module Availability|CategoryImage|Category|Discount|GiftCard|Glossary|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSubEntityOrFail()
    {
        if ($this->isSubEntity === null) {
            $this->throwNullValueException(static::IS_SUB_ENTITY);
        }

        return $this->isSubEntity;
    }

    /**
     * @module Availability|CategoryImage|Category|Discount|GiftCard|Glossary|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSubEntity()
    {
        $this->assertPropertyIsSet(self::IS_SUB_ENTITY);

        return $this;
    }

    /**
     * @module Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductOption|Product|ShipmentType|Shipment|StateMachine|Store|Tax|Url|UserPasswordReset
     *
     * @param int|null $defaultGlobalOperationMask
     *
     * @return $this
     */
    public function setDefaultGlobalOperationMask($defaultGlobalOperationMask)
    {
        $this->defaultGlobalOperationMask = $defaultGlobalOperationMask;
        $this->modifiedProperties[self::DEFAULT_GLOBAL_OPERATION_MASK] = true;

        return $this;
    }

    /**
     * @module Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductOption|Product|ShipmentType|Shipment|StateMachine|Store|Tax|Url|UserPasswordReset
     *
     * @return int|null
     */
    public function getDefaultGlobalOperationMask()
    {
        return $this->defaultGlobalOperationMask;
    }

    /**
     * @module Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductOption|Product|ShipmentType|Shipment|StateMachine|Store|Tax|Url|UserPasswordReset
     *
     * @param int|null $defaultGlobalOperationMask
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultGlobalOperationMaskOrFail($defaultGlobalOperationMask)
    {
        if ($defaultGlobalOperationMask === null) {
            $this->throwNullValueException(static::DEFAULT_GLOBAL_OPERATION_MASK);
        }

        return $this->setDefaultGlobalOperationMask($defaultGlobalOperationMask);
    }

    /**
     * @module Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductOption|Product|ShipmentType|Shipment|StateMachine|Store|Tax|Url|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDefaultGlobalOperationMaskOrFail()
    {
        if ($this->defaultGlobalOperationMask === null) {
            $this->throwNullValueException(static::DEFAULT_GLOBAL_OPERATION_MASK);
        }

        return $this->defaultGlobalOperationMask;
    }

    /**
     * @module Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductOption|Product|ShipmentType|Shipment|StateMachine|Store|Tax|Url|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultGlobalOperationMask()
    {
        $this->assertPropertyIsSet(self::DEFAULT_GLOBAL_OPERATION_MASK);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param bool|null $hasSegmentTable
     *
     * @return $this
     */
    public function setHasSegmentTable($hasSegmentTable)
    {
        $this->hasSegmentTable = $hasSegmentTable;
        $this->modifiedProperties[self::HAS_SEGMENT_TABLE] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return bool|null
     */
    public function getHasSegmentTable()
    {
        return $this->hasSegmentTable;
    }

    /**
     * @module Oms
     *
     * @param bool|null $hasSegmentTable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHasSegmentTableOrFail($hasSegmentTable)
    {
        if ($hasSegmentTable === null) {
            $this->throwNullValueException(static::HAS_SEGMENT_TABLE);
        }

        return $this->setHasSegmentTable($hasSegmentTable);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getHasSegmentTableOrFail()
    {
        if ($this->hasSegmentTable === null) {
            $this->throwNullValueException(static::HAS_SEGMENT_TABLE);
        }

        return $this->hasSegmentTable;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHasSegmentTable()
    {
        $this->assertPropertyIsSet(self::HAS_SEGMENT_TABLE);

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
                case 'entityName':
                case 'isSubEntity':
                case 'defaultGlobalOperationMask':
                case 'hasSegmentTable':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'parent':
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
                case 'entityName':
                case 'isSubEntity':
                case 'defaultGlobalOperationMask':
                case 'hasSegmentTable':
                    $values[$arrayKey] = $value;

                    break;
                case 'parent':
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
                case 'entityName':
                case 'isSubEntity':
                case 'defaultGlobalOperationMask':
                case 'hasSegmentTable':
                    $values[$arrayKey] = $value;

                    break;
                case 'parent':
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
            'entityName' => $this->entityName,
            'isSubEntity' => $this->isSubEntity,
            'defaultGlobalOperationMask' => $this->defaultGlobalOperationMask,
            'hasSegmentTable' => $this->hasSegmentTable,
            'parent' => $this->parent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'entity_name' => $this->entityName,
            'is_sub_entity' => $this->isSubEntity,
            'default_global_operation_mask' => $this->defaultGlobalOperationMask,
            'has_segment_table' => $this->hasSegmentTable,
            'parent' => $this->parent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'entity_name' => $this->entityName instanceof AbstractTransfer ? $this->entityName->toArray(true, false) : $this->entityName,
            'is_sub_entity' => $this->isSubEntity instanceof AbstractTransfer ? $this->isSubEntity->toArray(true, false) : $this->isSubEntity,
            'default_global_operation_mask' => $this->defaultGlobalOperationMask instanceof AbstractTransfer ? $this->defaultGlobalOperationMask->toArray(true, false) : $this->defaultGlobalOperationMask,
            'has_segment_table' => $this->hasSegmentTable instanceof AbstractTransfer ? $this->hasSegmentTable->toArray(true, false) : $this->hasSegmentTable,
            'parent' => $this->parent instanceof AbstractTransfer ? $this->parent->toArray(true, false) : $this->parent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'entityName' => $this->entityName instanceof AbstractTransfer ? $this->entityName->toArray(true, true) : $this->entityName,
            'isSubEntity' => $this->isSubEntity instanceof AbstractTransfer ? $this->isSubEntity->toArray(true, true) : $this->isSubEntity,
            'defaultGlobalOperationMask' => $this->defaultGlobalOperationMask instanceof AbstractTransfer ? $this->defaultGlobalOperationMask->toArray(true, true) : $this->defaultGlobalOperationMask,
            'hasSegmentTable' => $this->hasSegmentTable instanceof AbstractTransfer ? $this->hasSegmentTable->toArray(true, true) : $this->hasSegmentTable,
            'parent' => $this->parent instanceof AbstractTransfer ? $this->parent->toArray(true, true) : $this->parent,
        ];
    }
}
