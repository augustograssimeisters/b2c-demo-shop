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
class AclEntityMetadataConfigTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ACL_ENTITY_ALLOW_LIST = 'aclEntityAllowList';

    /**
     * @var string
     */
    public const ACL_ENTITY_METADATA_COLLECTION = 'aclEntityMetadataCollection';

    /**
     * @var string[]
     */
    protected $aclEntityAllowList = [];

    /**
     * @var \Generated\Shared\Transfer\AclEntityMetadataCollectionTransfer|null
     */
    protected $aclEntityMetadataCollection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'acl_entity_allow_list' => 'aclEntityAllowList',
        'aclEntityAllowList' => 'aclEntityAllowList',
        'AclEntityAllowList' => 'aclEntityAllowList',
        'acl_entity_metadata_collection' => 'aclEntityMetadataCollection',
        'aclEntityMetadataCollection' => 'aclEntityMetadataCollection',
        'AclEntityMetadataCollection' => 'aclEntityMetadataCollection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ACL_ENTITY_ALLOW_LIST => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'acl_entity_allow_list',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACL_ENTITY_METADATA_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\AclEntityMetadataCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'acl_entity_metadata_collection',
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
     * @module Acl|Sales|Url
     *
     * @param string[]|null $aclEntityAllowList
     *
     * @return $this
     */
    public function setAclEntityAllowList(array $aclEntityAllowList = null)
    {
        if ($aclEntityAllowList === null) {
            $aclEntityAllowList = [];
        }

        $this->aclEntityAllowList = $aclEntityAllowList;
        $this->modifiedProperties[self::ACL_ENTITY_ALLOW_LIST] = true;

        return $this;
    }

    /**
     * @module Acl|Sales|Url
     *
     * @return string[]
     */
    public function getAclEntityAllowList()
    {
        return $this->aclEntityAllowList;
    }

    /**
     * @module Acl|Sales|Url
     *
     * @param string $aclEntityAllowListItem
     *
     * @return $this
     */
    public function addAclEntityAllowListItem($aclEntityAllowListItem)
    {
        $this->aclEntityAllowList[] = $aclEntityAllowListItem;
        $this->modifiedProperties[self::ACL_ENTITY_ALLOW_LIST] = true;

        return $this;
    }

    /**
     * @module Acl|Sales|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAclEntityAllowList()
    {
        $this->assertPropertyIsSet(self::ACL_ENTITY_ALLOW_LIST);

        return $this;
    }

    /**
     * @module Availability|CategoryImage|Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|GiftCard|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|ShipmentType|Shipment|StateMachine|Stock|Store|Tax|Url|UserPasswordReset
     *
     * @param \Generated\Shared\Transfer\AclEntityMetadataCollectionTransfer|null $aclEntityMetadataCollection
     *
     * @return $this
     */
    public function setAclEntityMetadataCollection(AclEntityMetadataCollectionTransfer $aclEntityMetadataCollection = null)
    {
        $this->aclEntityMetadataCollection = $aclEntityMetadataCollection;
        $this->modifiedProperties[self::ACL_ENTITY_METADATA_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Availability|CategoryImage|Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|GiftCard|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|ShipmentType|Shipment|StateMachine|Stock|Store|Tax|Url|UserPasswordReset
     *
     * @return \Generated\Shared\Transfer\AclEntityMetadataCollectionTransfer|null
     */
    public function getAclEntityMetadataCollection()
    {
        return $this->aclEntityMetadataCollection;
    }

    /**
     * @module Availability|CategoryImage|Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|GiftCard|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|ShipmentType|Shipment|StateMachine|Stock|Store|Tax|Url|UserPasswordReset
     *
     * @param \Generated\Shared\Transfer\AclEntityMetadataCollectionTransfer $aclEntityMetadataCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAclEntityMetadataCollectionOrFail(AclEntityMetadataCollectionTransfer $aclEntityMetadataCollection)
    {
        return $this->setAclEntityMetadataCollection($aclEntityMetadataCollection);
    }

    /**
     * @module Availability|CategoryImage|Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|GiftCard|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|ShipmentType|Shipment|StateMachine|Stock|Store|Tax|Url|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AclEntityMetadataCollectionTransfer
     */
    public function getAclEntityMetadataCollectionOrFail()
    {
        if ($this->aclEntityMetadataCollection === null) {
            $this->throwNullValueException(static::ACL_ENTITY_METADATA_COLLECTION);
        }

        return $this->aclEntityMetadataCollection;
    }

    /**
     * @module Availability|CategoryImage|Category|CmsBlock|Country|Currency|DiscountPromotion|Discount|GiftCard|Glossary|Locale|Oms|Payment|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|ShipmentType|Shipment|StateMachine|Stock|Store|Tax|Url|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAclEntityMetadataCollection()
    {
        $this->assertPropertyIsSet(self::ACL_ENTITY_METADATA_COLLECTION);

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
                case 'aclEntityAllowList':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'aclEntityMetadataCollection':
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
                case 'aclEntityAllowList':
                    $values[$arrayKey] = $value;

                    break;
                case 'aclEntityMetadataCollection':
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
                case 'aclEntityAllowList':
                    $values[$arrayKey] = $value;

                    break;
                case 'aclEntityMetadataCollection':
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
            'aclEntityAllowList' => $this->aclEntityAllowList,
            'aclEntityMetadataCollection' => $this->aclEntityMetadataCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'acl_entity_allow_list' => $this->aclEntityAllowList,
            'acl_entity_metadata_collection' => $this->aclEntityMetadataCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'acl_entity_allow_list' => $this->aclEntityAllowList instanceof AbstractTransfer ? $this->aclEntityAllowList->toArray(true, false) : $this->aclEntityAllowList,
            'acl_entity_metadata_collection' => $this->aclEntityMetadataCollection instanceof AbstractTransfer ? $this->aclEntityMetadataCollection->toArray(true, false) : $this->aclEntityMetadataCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'aclEntityAllowList' => $this->aclEntityAllowList instanceof AbstractTransfer ? $this->aclEntityAllowList->toArray(true, true) : $this->aclEntityAllowList,
            'aclEntityMetadataCollection' => $this->aclEntityMetadataCollection instanceof AbstractTransfer ? $this->aclEntityMetadataCollection->toArray(true, true) : $this->aclEntityMetadataCollection,
        ];
    }
}
