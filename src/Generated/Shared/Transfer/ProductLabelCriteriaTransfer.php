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
class ProductLabelCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_LABEL_CONDITIONS = 'productLabelConditions';

    /**
     * @var string
     */
    public const SORT_COLLECTION = 'sortCollection';

    /**
     * @deprecated Use ProductLabelConditions.productAbstractIds instead.
     */
    public const PRODUCT_ABSTRACT_IDS = 'productAbstractIds';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const WITH_PRODUCT_LABEL_STORES = 'withProductLabelStores';

    /**
     * @var string
     */
    public const WITH_PRODUCT_LABEL_PRODUCT_ABSTRACTS = 'withProductLabelProductAbstracts';

    /**
     * @var string
     */
    public const PRODUCT_LABEL_IDS = 'productLabelIds';

    /**
     * @var string
     */
    public const WITH_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES = 'withProductLabelLocalizedAttributes';

    /**
     * @var string
     */
    public const STORE_NAME = 'storeName';

    /**
     * @var \Generated\Shared\Transfer\ProductLabelConditionsTransfer|null
     */
    protected $productLabelConditions;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SortTransfer>
     */
    protected $sortCollection;

    /**
     * @var int[]
     */
    protected $productAbstractIds = [];

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var bool|null
     */
    protected $withProductLabelStores;

    /**
     * @var bool|null
     */
    protected $withProductLabelProductAbstracts;

    /**
     * @var int[]
     */
    protected $productLabelIds = [];

    /**
     * @var bool|null
     */
    protected $withProductLabelLocalizedAttributes;

    /**
     * @var string|null
     */
    protected $storeName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_label_conditions' => 'productLabelConditions',
        'productLabelConditions' => 'productLabelConditions',
        'ProductLabelConditions' => 'productLabelConditions',
        'sort_collection' => 'sortCollection',
        'sortCollection' => 'sortCollection',
        'SortCollection' => 'sortCollection',
        'product_abstract_ids' => 'productAbstractIds',
        'productAbstractIds' => 'productAbstractIds',
        'ProductAbstractIds' => 'productAbstractIds',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'with_product_label_stores' => 'withProductLabelStores',
        'withProductLabelStores' => 'withProductLabelStores',
        'WithProductLabelStores' => 'withProductLabelStores',
        'with_product_label_product_abstracts' => 'withProductLabelProductAbstracts',
        'withProductLabelProductAbstracts' => 'withProductLabelProductAbstracts',
        'WithProductLabelProductAbstracts' => 'withProductLabelProductAbstracts',
        'product_label_ids' => 'productLabelIds',
        'productLabelIds' => 'productLabelIds',
        'ProductLabelIds' => 'productLabelIds',
        'with_product_label_localized_attributes' => 'withProductLabelLocalizedAttributes',
        'withProductLabelLocalizedAttributes' => 'withProductLabelLocalizedAttributes',
        'WithProductLabelLocalizedAttributes' => 'withProductLabelLocalizedAttributes',
        'store_name' => 'storeName',
        'storeName' => 'storeName',
        'StoreName' => 'storeName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_LABEL_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\ProductLabelConditionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_label_conditions',
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
        self::PRODUCT_ABSTRACT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'product_abstract_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
        self::WITH_PRODUCT_LABEL_STORES => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_product_label_stores',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WITH_PRODUCT_LABEL_PRODUCT_ABSTRACTS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_product_label_product_abstracts',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LABEL_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'product_label_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WITH_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_product_label_localized_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_name',
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
     * @module ProductLabelDiscountConnector|ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @param \Generated\Shared\Transfer\ProductLabelConditionsTransfer|null $productLabelConditions
     *
     * @return $this
     */
    public function setProductLabelConditions(?ProductLabelConditionsTransfer $productLabelConditions = null)
    {
        $this->productLabelConditions = $productLabelConditions;
        $this->modifiedProperties[self::PRODUCT_LABEL_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module ProductLabelDiscountConnector|ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @return \Generated\Shared\Transfer\ProductLabelConditionsTransfer|null
     */
    public function getProductLabelConditions(): ?ProductLabelConditionsTransfer
    {
        return $this->productLabelConditions;
    }

    /**
     * @module ProductLabelDiscountConnector|ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @param \Generated\Shared\Transfer\ProductLabelConditionsTransfer $productLabelConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductLabelConditionsOrFail(ProductLabelConditionsTransfer $productLabelConditions)
    {
        return $this->setProductLabelConditions($productLabelConditions);
    }

    /**
     * @module ProductLabelDiscountConnector|ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductLabelConditionsTransfer
     */
    public function getProductLabelConditionsOrFail(): ProductLabelConditionsTransfer
    {
        if ($this->productLabelConditions === null) {
            $this->throwNullValueException(static::PRODUCT_LABEL_CONDITIONS);
        }

        return $this->productLabelConditions;
    }

    /**
     * @module ProductLabelDiscountConnector|ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductLabelConditions()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LABEL_CONDITIONS);

        return $this;
    }

    /**
     * @module ProductLabelDiscountConnector|ProductLabelSearch|ProductLabelStorage|ProductLabel
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
     * @module ProductLabelDiscountConnector|ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SortTransfer>
     */
    public function getSortCollection(): ArrayObject
    {
        return $this->sortCollection;
    }

    /**
     * @module ProductLabelDiscountConnector|ProductLabelSearch|ProductLabelStorage|ProductLabel
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
     * @module ProductLabelDiscountConnector|ProductLabelSearch|ProductLabelStorage|ProductLabel
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
     * @module ProductLabelSearch|ProductLabel
     *
     * @deprecated Use ProductLabelConditions.productAbstractIds instead.
     *
     * @param int[]|null $productAbstractIds
     *
     * @return $this
     */
    public function setProductAbstractIds(array $productAbstractIds = null)
    {
        if ($productAbstractIds === null) {
            $productAbstractIds = [];
        }

        $this->productAbstractIds = $productAbstractIds;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductLabelSearch|ProductLabel
     *
     * @deprecated Use ProductLabelConditions.productAbstractIds instead.
     *
     * @return int[]
     */
    public function getProductAbstractIds()
    {
        return $this->productAbstractIds;
    }

    /**
     * @module ProductLabelSearch|ProductLabel
     *
     * @deprecated Use ProductLabelConditions.productAbstractIds instead.
     *
     * @param int $productAbstractId
     *
     * @return $this
     */
    public function addProductAbstractId($productAbstractId)
    {
        $this->productAbstractIds[] = $productAbstractId;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductLabelSearch|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use ProductLabelConditions.productAbstractIds instead.
     *
     * @return $this
     */
    public function requireProductAbstractIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT_IDS);

        return $this;
    }

    /**
     * @module ProductLabelSearch|ProductLabel
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
     * @module ProductLabelSearch|ProductLabel
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination(): ?PaginationTransfer
    {
        return $this->pagination;
    }

    /**
     * @module ProductLabelSearch|ProductLabel
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
     * @module ProductLabelSearch|ProductLabel
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
     * @module ProductLabelSearch|ProductLabel
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
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @param bool|null $withProductLabelStores
     *
     * @return $this
     */
    public function setWithProductLabelStores($withProductLabelStores)
    {
        $this->withProductLabelStores = $withProductLabelStores;
        $this->modifiedProperties[self::WITH_PRODUCT_LABEL_STORES] = true;

        return $this;
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @return bool|null
     */
    public function getWithProductLabelStores()
    {
        return $this->withProductLabelStores;
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @param bool|null $withProductLabelStores
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithProductLabelStoresOrFail($withProductLabelStores)
    {
        if ($withProductLabelStores === null) {
            $this->throwNullValueException(static::WITH_PRODUCT_LABEL_STORES);
        }

        return $this->setWithProductLabelStores($withProductLabelStores);
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithProductLabelStoresOrFail()
    {
        if ($this->withProductLabelStores === null) {
            $this->throwNullValueException(static::WITH_PRODUCT_LABEL_STORES);
        }

        return $this->withProductLabelStores;
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithProductLabelStores()
    {
        $this->assertPropertyIsSet(self::WITH_PRODUCT_LABEL_STORES);

        return $this;
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @param bool|null $withProductLabelProductAbstracts
     *
     * @return $this
     */
    public function setWithProductLabelProductAbstracts($withProductLabelProductAbstracts)
    {
        $this->withProductLabelProductAbstracts = $withProductLabelProductAbstracts;
        $this->modifiedProperties[self::WITH_PRODUCT_LABEL_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @return bool|null
     */
    public function getWithProductLabelProductAbstracts()
    {
        return $this->withProductLabelProductAbstracts;
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @param bool|null $withProductLabelProductAbstracts
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithProductLabelProductAbstractsOrFail($withProductLabelProductAbstracts)
    {
        if ($withProductLabelProductAbstracts === null) {
            $this->throwNullValueException(static::WITH_PRODUCT_LABEL_PRODUCT_ABSTRACTS);
        }

        return $this->setWithProductLabelProductAbstracts($withProductLabelProductAbstracts);
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithProductLabelProductAbstractsOrFail()
    {
        if ($this->withProductLabelProductAbstracts === null) {
            $this->throwNullValueException(static::WITH_PRODUCT_LABEL_PRODUCT_ABSTRACTS);
        }

        return $this->withProductLabelProductAbstracts;
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithProductLabelProductAbstracts()
    {
        $this->assertPropertyIsSet(self::WITH_PRODUCT_LABEL_PRODUCT_ABSTRACTS);

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @param int[]|null $productLabelIds
     *
     * @return $this
     */
    public function setProductLabelIds(array $productLabelIds = null)
    {
        if ($productLabelIds === null) {
            $productLabelIds = [];
        }

        $this->productLabelIds = $productLabelIds;
        $this->modifiedProperties[self::PRODUCT_LABEL_IDS] = true;

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @return int[]
     */
    public function getProductLabelIds()
    {
        return $this->productLabelIds;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @param int $productLabelId
     *
     * @return $this
     */
    public function addProductLabelId($productLabelId)
    {
        $this->productLabelIds[] = $productLabelId;
        $this->modifiedProperties[self::PRODUCT_LABEL_IDS] = true;

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductLabelIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LABEL_IDS);

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @param bool|null $withProductLabelLocalizedAttributes
     *
     * @return $this
     */
    public function setWithProductLabelLocalizedAttributes($withProductLabelLocalizedAttributes)
    {
        $this->withProductLabelLocalizedAttributes = $withProductLabelLocalizedAttributes;
        $this->modifiedProperties[self::WITH_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @return bool|null
     */
    public function getWithProductLabelLocalizedAttributes()
    {
        return $this->withProductLabelLocalizedAttributes;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @param bool|null $withProductLabelLocalizedAttributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithProductLabelLocalizedAttributesOrFail($withProductLabelLocalizedAttributes)
    {
        if ($withProductLabelLocalizedAttributes === null) {
            $this->throwNullValueException(static::WITH_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES);
        }

        return $this->setWithProductLabelLocalizedAttributes($withProductLabelLocalizedAttributes);
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithProductLabelLocalizedAttributesOrFail()
    {
        if ($this->withProductLabelLocalizedAttributes === null) {
            $this->throwNullValueException(static::WITH_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES);
        }

        return $this->withProductLabelLocalizedAttributes;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithProductLabelLocalizedAttributes()
    {
        $this->assertPropertyIsSet(self::WITH_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductLabel
     *
     * @param string|null $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        $this->modifiedProperties[self::STORE_NAME] = true;

        return $this;
    }

    /**
     * @module ProductLabel
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @module ProductLabel
     *
     * @param string|null $storeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNameOrFail($storeName)
    {
        if ($storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->setStoreName($storeName);
    }

    /**
     * @module ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreNameOrFail()
    {
        if ($this->storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->storeName;
    }

    /**
     * @module ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreName()
    {
        $this->assertPropertyIsSet(self::STORE_NAME);

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
                case 'productAbstractIds':
                case 'withProductLabelStores':
                case 'withProductLabelProductAbstracts':
                case 'productLabelIds':
                case 'withProductLabelLocalizedAttributes':
                case 'storeName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productLabelConditions':
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
                case 'productAbstractIds':
                case 'withProductLabelStores':
                case 'withProductLabelProductAbstracts':
                case 'productLabelIds':
                case 'withProductLabelLocalizedAttributes':
                case 'storeName':
                    $values[$arrayKey] = $value;

                    break;
                case 'productLabelConditions':
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
                case 'productAbstractIds':
                case 'withProductLabelStores':
                case 'withProductLabelProductAbstracts':
                case 'productLabelIds':
                case 'withProductLabelLocalizedAttributes':
                case 'storeName':
                    $values[$arrayKey] = $value;

                    break;
                case 'productLabelConditions':
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
            'productAbstractIds' => $this->productAbstractIds,
            'withProductLabelStores' => $this->withProductLabelStores,
            'withProductLabelProductAbstracts' => $this->withProductLabelProductAbstracts,
            'productLabelIds' => $this->productLabelIds,
            'withProductLabelLocalizedAttributes' => $this->withProductLabelLocalizedAttributes,
            'storeName' => $this->storeName,
            'productLabelConditions' => $this->productLabelConditions,
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
            'product_abstract_ids' => $this->productAbstractIds,
            'with_product_label_stores' => $this->withProductLabelStores,
            'with_product_label_product_abstracts' => $this->withProductLabelProductAbstracts,
            'product_label_ids' => $this->productLabelIds,
            'with_product_label_localized_attributes' => $this->withProductLabelLocalizedAttributes,
            'store_name' => $this->storeName,
            'product_label_conditions' => $this->productLabelConditions,
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
            'product_abstract_ids' => $this->productAbstractIds instanceof AbstractTransfer ? $this->productAbstractIds->toArray(true, false) : $this->productAbstractIds,
            'with_product_label_stores' => $this->withProductLabelStores instanceof AbstractTransfer ? $this->withProductLabelStores->toArray(true, false) : $this->withProductLabelStores,
            'with_product_label_product_abstracts' => $this->withProductLabelProductAbstracts instanceof AbstractTransfer ? $this->withProductLabelProductAbstracts->toArray(true, false) : $this->withProductLabelProductAbstracts,
            'product_label_ids' => $this->productLabelIds instanceof AbstractTransfer ? $this->productLabelIds->toArray(true, false) : $this->productLabelIds,
            'with_product_label_localized_attributes' => $this->withProductLabelLocalizedAttributes instanceof AbstractTransfer ? $this->withProductLabelLocalizedAttributes->toArray(true, false) : $this->withProductLabelLocalizedAttributes,
            'store_name' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, false) : $this->storeName,
            'product_label_conditions' => $this->productLabelConditions instanceof AbstractTransfer ? $this->productLabelConditions->toArray(true, false) : $this->productLabelConditions,
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
            'productAbstractIds' => $this->productAbstractIds instanceof AbstractTransfer ? $this->productAbstractIds->toArray(true, true) : $this->productAbstractIds,
            'withProductLabelStores' => $this->withProductLabelStores instanceof AbstractTransfer ? $this->withProductLabelStores->toArray(true, true) : $this->withProductLabelStores,
            'withProductLabelProductAbstracts' => $this->withProductLabelProductAbstracts instanceof AbstractTransfer ? $this->withProductLabelProductAbstracts->toArray(true, true) : $this->withProductLabelProductAbstracts,
            'productLabelIds' => $this->productLabelIds instanceof AbstractTransfer ? $this->productLabelIds->toArray(true, true) : $this->productLabelIds,
            'withProductLabelLocalizedAttributes' => $this->withProductLabelLocalizedAttributes instanceof AbstractTransfer ? $this->withProductLabelLocalizedAttributes->toArray(true, true) : $this->withProductLabelLocalizedAttributes,
            'storeName' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, true) : $this->storeName,
            'productLabelConditions' => $this->productLabelConditions instanceof AbstractTransfer ? $this->productLabelConditions->toArray(true, true) : $this->productLabelConditions,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'sortCollection' => $this->sortCollection instanceof AbstractTransfer ? $this->sortCollection->toArray(true, true) : $this->addValuesToCollection($this->sortCollection, true, true),
        ];
    }
}
