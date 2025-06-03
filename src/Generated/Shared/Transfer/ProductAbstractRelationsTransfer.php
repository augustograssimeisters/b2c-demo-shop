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
class ProductAbstractRelationsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const WITH_LOCALIZED_ATTRIBUTES = 'withLocalizedAttributes';

    /**
     * @var string
     */
    public const WITH_STORE_RELATIONS = 'withStoreRelations';

    /**
     * @var string
     */
    public const WITH_VARIANTS = 'withVariants';

    /**
     * @var string
     */
    public const WITH_TAX_SET = 'withTaxSet';

    /**
     * @var bool|null
     */
    protected $withLocalizedAttributes;

    /**
     * @var bool|null
     */
    protected $withStoreRelations;

    /**
     * @var bool|null
     */
    protected $withVariants;

    /**
     * @var bool|null
     */
    protected $withTaxSet;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'with_localized_attributes' => 'withLocalizedAttributes',
        'withLocalizedAttributes' => 'withLocalizedAttributes',
        'WithLocalizedAttributes' => 'withLocalizedAttributes',
        'with_store_relations' => 'withStoreRelations',
        'withStoreRelations' => 'withStoreRelations',
        'WithStoreRelations' => 'withStoreRelations',
        'with_variants' => 'withVariants',
        'withVariants' => 'withVariants',
        'WithVariants' => 'withVariants',
        'with_tax_set' => 'withTaxSet',
        'withTaxSet' => 'withTaxSet',
        'WithTaxSet' => 'withTaxSet',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::WITH_LOCALIZED_ATTRIBUTES => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_localized_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_STORE_RELATIONS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_store_relations',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_VARIANTS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_variants',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_TAX_SET => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_tax_set',
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
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi
     *
     * @param bool|null $withLocalizedAttributes
     *
     * @return $this
     */
    public function setWithLocalizedAttributes(?bool $withLocalizedAttributes = null)
    {
        $this->withLocalizedAttributes = $withLocalizedAttributes;
        $this->modifiedProperties[self::WITH_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi
     *
     * @return bool|null
     */
    public function getWithLocalizedAttributes(): ?bool
    {
        return $this->withLocalizedAttributes;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi
     *
     * @param bool $withLocalizedAttributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithLocalizedAttributesOrFail(bool $withLocalizedAttributes)
    {
        return $this->setWithLocalizedAttributes($withLocalizedAttributes);
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithLocalizedAttributesOrFail(): bool
    {
        if ($this->withLocalizedAttributes === null) {
            $this->throwNullValueException(static::WITH_LOCALIZED_ATTRIBUTES);
        }

        return $this->withLocalizedAttributes;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithLocalizedAttributes()
    {
        $this->assertPropertyIsSet(self::WITH_LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @param bool|null $withStoreRelations
     *
     * @return $this
     */
    public function setWithStoreRelations(?bool $withStoreRelations = null)
    {
        $this->withStoreRelations = $withStoreRelations;
        $this->modifiedProperties[self::WITH_STORE_RELATIONS] = true;

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @return bool|null
     */
    public function getWithStoreRelations(): ?bool
    {
        return $this->withStoreRelations;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @param bool $withStoreRelations
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithStoreRelationsOrFail(bool $withStoreRelations)
    {
        return $this->setWithStoreRelations($withStoreRelations);
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithStoreRelationsOrFail(): bool
    {
        if ($this->withStoreRelations === null) {
            $this->throwNullValueException(static::WITH_STORE_RELATIONS);
        }

        return $this->withStoreRelations;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithStoreRelations()
    {
        $this->assertPropertyIsSet(self::WITH_STORE_RELATIONS);

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @param bool|null $withVariants
     *
     * @return $this
     */
    public function setWithVariants(?bool $withVariants = null)
    {
        $this->withVariants = $withVariants;
        $this->modifiedProperties[self::WITH_VARIANTS] = true;

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @return bool|null
     */
    public function getWithVariants(): ?bool
    {
        return $this->withVariants;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @param bool $withVariants
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithVariantsOrFail(bool $withVariants)
    {
        return $this->setWithVariants($withVariants);
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithVariantsOrFail(): bool
    {
        if ($this->withVariants === null) {
            $this->throwNullValueException(static::WITH_VARIANTS);
        }

        return $this->withVariants;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithVariants()
    {
        $this->assertPropertyIsSet(self::WITH_VARIANTS);

        return $this;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @param bool|null $withTaxSet
     *
     * @return $this
     */
    public function setWithTaxSet(?bool $withTaxSet = null)
    {
        $this->withTaxSet = $withTaxSet;
        $this->modifiedProperties[self::WITH_TAX_SET] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @return bool|null
     */
    public function getWithTaxSet(): ?bool
    {
        return $this->withTaxSet;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @param bool $withTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithTaxSetOrFail(bool $withTaxSet)
    {
        return $this->setWithTaxSet($withTaxSet);
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithTaxSetOrFail(): bool
    {
        if ($this->withTaxSet === null) {
            $this->throwNullValueException(static::WITH_TAX_SET);
        }

        return $this->withTaxSet;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithTaxSet()
    {
        $this->assertPropertyIsSet(self::WITH_TAX_SET);

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
                case 'withLocalizedAttributes':
                case 'withStoreRelations':
                case 'withVariants':
                case 'withTaxSet':
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
                case 'withLocalizedAttributes':
                case 'withStoreRelations':
                case 'withVariants':
                case 'withTaxSet':
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
                case 'withLocalizedAttributes':
                case 'withStoreRelations':
                case 'withVariants':
                case 'withTaxSet':
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
            'withLocalizedAttributes' => $this->withLocalizedAttributes,
            'withStoreRelations' => $this->withStoreRelations,
            'withVariants' => $this->withVariants,
            'withTaxSet' => $this->withTaxSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'with_localized_attributes' => $this->withLocalizedAttributes,
            'with_store_relations' => $this->withStoreRelations,
            'with_variants' => $this->withVariants,
            'with_tax_set' => $this->withTaxSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'with_localized_attributes' => $this->withLocalizedAttributes instanceof AbstractTransfer ? $this->withLocalizedAttributes->toArray(true, false) : $this->withLocalizedAttributes,
            'with_store_relations' => $this->withStoreRelations instanceof AbstractTransfer ? $this->withStoreRelations->toArray(true, false) : $this->withStoreRelations,
            'with_variants' => $this->withVariants instanceof AbstractTransfer ? $this->withVariants->toArray(true, false) : $this->withVariants,
            'with_tax_set' => $this->withTaxSet instanceof AbstractTransfer ? $this->withTaxSet->toArray(true, false) : $this->withTaxSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'withLocalizedAttributes' => $this->withLocalizedAttributes instanceof AbstractTransfer ? $this->withLocalizedAttributes->toArray(true, true) : $this->withLocalizedAttributes,
            'withStoreRelations' => $this->withStoreRelations instanceof AbstractTransfer ? $this->withStoreRelations->toArray(true, true) : $this->withStoreRelations,
            'withVariants' => $this->withVariants instanceof AbstractTransfer ? $this->withVariants->toArray(true, true) : $this->withVariants,
            'withTaxSet' => $this->withTaxSet instanceof AbstractTransfer ? $this->withTaxSet->toArray(true, true) : $this->withTaxSet,
        ];
    }
}
