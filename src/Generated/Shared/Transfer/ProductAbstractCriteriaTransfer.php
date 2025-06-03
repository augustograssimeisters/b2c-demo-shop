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
class ProductAbstractCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT_CONDITIONS = 'productAbstractConditions';

    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT_RELATIONS = 'productAbstractRelations';

    /**
     * @var string
     */
    public const SORT_COLLECTION = 'sortCollection';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var \Generated\Shared\Transfer\ProductAbstractConditionsTransfer|null
     */
    protected $productAbstractConditions;

    /**
     * @var \Generated\Shared\Transfer\ProductAbstractRelationsTransfer|null
     */
    protected $productAbstractRelations;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SortTransfer>
     */
    protected $sortCollection;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_abstract_conditions' => 'productAbstractConditions',
        'productAbstractConditions' => 'productAbstractConditions',
        'ProductAbstractConditions' => 'productAbstractConditions',
        'product_abstract_relations' => 'productAbstractRelations',
        'productAbstractRelations' => 'productAbstractRelations',
        'ProductAbstractRelations' => 'productAbstractRelations',
        'sort_collection' => 'sortCollection',
        'sortCollection' => 'sortCollection',
        'SortCollection' => 'sortCollection',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_ABSTRACT_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\ProductAbstractConditionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_abstract_conditions',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PRODUCT_ABSTRACT_RELATIONS => [
            'type' => 'Generated\Shared\Transfer\ProductAbstractRelationsTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_abstract_relations',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SORT_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\SortTransfer',
            'type_shim' => null,
            'name_underscore' => 'sort_collection',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\PaginationTransfer',
            'type_shim' => null,
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
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
     * @param \Generated\Shared\Transfer\ProductAbstractConditionsTransfer|null $productAbstractConditions
     *
     * @return $this
     */
    public function setProductAbstractConditions(?ProductAbstractConditionsTransfer $productAbstractConditions = null)
    {
        $this->productAbstractConditions = $productAbstractConditions;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi
     *
     * @return \Generated\Shared\Transfer\ProductAbstractConditionsTransfer|null
     */
    public function getProductAbstractConditions(): ?ProductAbstractConditionsTransfer
    {
        return $this->productAbstractConditions;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\ProductAbstractConditionsTransfer $productAbstractConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAbstractConditionsOrFail(ProductAbstractConditionsTransfer $productAbstractConditions)
    {
        return $this->setProductAbstractConditions($productAbstractConditions);
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductAbstractConditionsTransfer
     */
    public function getProductAbstractConditionsOrFail(): ProductAbstractConditionsTransfer
    {
        if ($this->productAbstractConditions === null) {
            $this->throwNullValueException(static::PRODUCT_ABSTRACT_CONDITIONS);
        }

        return $this->productAbstractConditions;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstractConditions()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT_CONDITIONS);

        return $this;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi|TaxProductConnector
     *
     * @param \Generated\Shared\Transfer\ProductAbstractRelationsTransfer|null $productAbstractRelations
     *
     * @return $this
     */
    public function setProductAbstractRelations(?ProductAbstractRelationsTransfer $productAbstractRelations = null)
    {
        $this->productAbstractRelations = $productAbstractRelations;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_RELATIONS] = true;

        return $this;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi|TaxProductConnector
     *
     * @return \Generated\Shared\Transfer\ProductAbstractRelationsTransfer|null
     */
    public function getProductAbstractRelations(): ?ProductAbstractRelationsTransfer
    {
        return $this->productAbstractRelations;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi|TaxProductConnector
     *
     * @param \Generated\Shared\Transfer\ProductAbstractRelationsTransfer $productAbstractRelations
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAbstractRelationsOrFail(ProductAbstractRelationsTransfer $productAbstractRelations)
    {
        return $this->setProductAbstractRelations($productAbstractRelations);
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductAbstractRelationsTransfer
     */
    public function getProductAbstractRelationsOrFail(): ProductAbstractRelationsTransfer
    {
        if ($this->productAbstractRelations === null) {
            $this->throwNullValueException(static::PRODUCT_ABSTRACT_RELATIONS);
        }

        return $this->productAbstractRelations;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstractRelations()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT_RELATIONS);

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SortTransfer> $sortCollection
     *
     * @return $this
     */
    public function setSortCollection(ArrayObject $sortCollection)
    {
        $this->sortCollection = new ArrayObject();

        foreach ($sortCollection as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SORT_COLLECTION]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addSort(...$args);
        }

        $this->modifiedProperties[self::SORT_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SortTransfer>
     */
    public function getSortCollection(): ArrayObject
    {
        return $this->sortCollection;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\SortTransfer $sort
     *
     * @return $this
     */
    public function addSort(SortTransfer $sort)
    {
        $this->sortCollection[] = $sort;
        $this->modifiedProperties[self::SORT_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSortCollection()
    {
        $this->assertCollectionPropertyIsSet(self::SORT_COLLECTION);

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi|TaxProductStorage
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(?PaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi|TaxProductStorage
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination(): ?PaginationTransfer
    {
        return $this->pagination;
    }

    /**
     * @module Product|ProductsBackendApi|TaxProductStorage
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(PaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module Product|ProductsBackendApi|TaxProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer
     */
    public function getPaginationOrFail(): PaginationTransfer
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module Product|ProductsBackendApi|TaxProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

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
                case 'productAbstractConditions':
                case 'productAbstractRelations':
                case 'pagination':
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
                case 'sortCollection':
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
                case 'productAbstractConditions':
                case 'productAbstractRelations':
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'sortCollection':
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
                case 'productAbstractConditions':
                case 'productAbstractRelations':
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'sortCollection':
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
        $this->sortCollection = $this->sortCollection ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'productAbstractConditions' => $this->productAbstractConditions,
            'productAbstractRelations' => $this->productAbstractRelations,
            'pagination' => $this->pagination,
            'sortCollection' => $this->sortCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_abstract_conditions' => $this->productAbstractConditions,
            'product_abstract_relations' => $this->productAbstractRelations,
            'pagination' => $this->pagination,
            'sort_collection' => $this->sortCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_abstract_conditions' => $this->productAbstractConditions instanceof AbstractTransfer ? $this->productAbstractConditions->toArray(true, false) : $this->productAbstractConditions,
            'product_abstract_relations' => $this->productAbstractRelations instanceof AbstractTransfer ? $this->productAbstractRelations->toArray(true, false) : $this->productAbstractRelations,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'sort_collection' => $this->sortCollection instanceof AbstractTransfer ? $this->sortCollection->toArray(true, false) : $this->addValuesToCollection($this->sortCollection, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productAbstractConditions' => $this->productAbstractConditions instanceof AbstractTransfer ? $this->productAbstractConditions->toArray(true, true) : $this->productAbstractConditions,
            'productAbstractRelations' => $this->productAbstractRelations instanceof AbstractTransfer ? $this->productAbstractRelations->toArray(true, true) : $this->productAbstractRelations,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'sortCollection' => $this->sortCollection instanceof AbstractTransfer ? $this->sortCollection->toArray(true, true) : $this->addValuesToCollection($this->sortCollection, true, true),
        ];
    }
}
