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
class ProductAbstractCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_ABSTRACTS = 'productAbstracts';

    /**
     * @var string
     */
    public const PRODUCT_CONCRETES = 'productConcretes';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const PRODUCT_TAX_SETS = 'productTaxSets';

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ProductAbstractTransfer>
     */
    protected $productAbstracts;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ProductAbstractConcreteCollectionTransfer>
     */
    protected $productConcretes;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ProductAbstractTaxSetCollectionTransfer>
     */
    protected $productTaxSets;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_abstracts' => 'productAbstracts',
        'productAbstracts' => 'productAbstracts',
        'ProductAbstracts' => 'productAbstracts',
        'product_concretes' => 'productConcretes',
        'productConcretes' => 'productConcretes',
        'ProductConcretes' => 'productConcretes',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'product_tax_sets' => 'productTaxSets',
        'productTaxSets' => 'productTaxSets',
        'ProductTaxSets' => 'productTaxSets',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_ABSTRACTS => [
            'type' => 'Generated\Shared\Transfer\ProductAbstractTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_abstracts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONCRETES => [
            'type' => 'Generated\Shared\Transfer\ProductAbstractConcreteCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_concretes',
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
            'is_strict' => false,
        ],
        self::PRODUCT_TAX_SETS => [
            'type' => 'Generated\Shared\Transfer\ProductAbstractTaxSetCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_tax_sets',
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
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi|TaxProductConnector|TaxProductStorage
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ProductAbstractTransfer> $productAbstracts
     *
     * @return $this
     */
    public function setProductAbstracts(ArrayObject $productAbstracts)
    {
        $this->productAbstracts = $productAbstracts;
        $this->modifiedProperties[self::PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi|TaxProductConnector|TaxProductStorage
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ProductAbstractTransfer>
     */
    public function getProductAbstracts()
    {
        return $this->productAbstracts;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi|TaxProductConnector|TaxProductStorage
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstract
     *
     * @return $this
     */
    public function addProductAbstract(ProductAbstractTransfer $productAbstract)
    {
        $this->productAbstracts[] = $productAbstract;
        $this->modifiedProperties[self::PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module ProductDynamicEntityConnector|Product|ProductsBackendApi|TaxProductConnector|TaxProductStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstracts()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_ABSTRACTS);

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ProductAbstractConcreteCollectionTransfer> $productConcretes
     *
     * @return $this
     */
    public function setProductConcretes(ArrayObject $productConcretes)
    {
        $this->productConcretes = new ArrayObject();

        foreach ($productConcretes as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PRODUCT_CONCRETES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addProductConcrete(...$args);
        }

        $this->modifiedProperties[self::PRODUCT_CONCRETES] = true;

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ProductAbstractConcreteCollectionTransfer>
     */
    public function getProductConcretes(): ArrayObject
    {
        return $this->productConcretes;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\ProductAbstractConcreteCollectionTransfer $productConcrete
     *
     * @return $this
     */
    public function addProductConcrete(ProductAbstractConcreteCollectionTransfer $productConcrete)
    {
        $this->productConcretes[] = $productConcrete;
        $this->modifiedProperties[self::PRODUCT_CONCRETES] = true;

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcretes()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_CONCRETES);

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi|TaxProductStorage
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(PaginationTransfer $pagination = null)
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
    public function getPagination()
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
    public function getPaginationOrFail()
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
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ProductAbstractTaxSetCollectionTransfer> $productTaxSets
     *
     * @return $this
     */
    public function setProductTaxSets(ArrayObject $productTaxSets)
    {
        $this->productTaxSets = new ArrayObject();

        foreach ($productTaxSets as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PRODUCT_TAX_SETS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addProductTaxSet(...$args);
        }

        $this->modifiedProperties[self::PRODUCT_TAX_SETS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ProductAbstractTaxSetCollectionTransfer>
     */
    public function getProductTaxSets(): ArrayObject
    {
        return $this->productTaxSets;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTaxSetCollectionTransfer $productTaxSet
     *
     * @return $this
     */
    public function addProductTaxSet(ProductAbstractTaxSetCollectionTransfer $productTaxSet)
    {
        $this->productTaxSets[] = $productTaxSet;
        $this->modifiedProperties[self::PRODUCT_TAX_SETS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductTaxSets()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_TAX_SETS);

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
                case 'productAbstracts':
                case 'productConcretes':
                case 'productTaxSets':
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
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'productAbstracts':
                case 'productConcretes':
                case 'productTaxSets':
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
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'productAbstracts':
                case 'productConcretes':
                case 'productTaxSets':
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
        $this->productAbstracts = $this->productAbstracts ?: new ArrayObject();
        $this->productConcretes = $this->productConcretes ?: new ArrayObject();
        $this->productTaxSets = $this->productTaxSets ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'pagination' => $this->pagination,
            'productAbstracts' => $this->productAbstracts,
            'productConcretes' => $this->productConcretes,
            'productTaxSets' => $this->productTaxSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'pagination' => $this->pagination,
            'product_abstracts' => $this->productAbstracts,
            'product_concretes' => $this->productConcretes,
            'product_tax_sets' => $this->productTaxSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'product_abstracts' => $this->productAbstracts instanceof AbstractTransfer ? $this->productAbstracts->toArray(true, false) : $this->addValuesToCollection($this->productAbstracts, true, false),
            'product_concretes' => $this->productConcretes instanceof AbstractTransfer ? $this->productConcretes->toArray(true, false) : $this->addValuesToCollection($this->productConcretes, true, false),
            'product_tax_sets' => $this->productTaxSets instanceof AbstractTransfer ? $this->productTaxSets->toArray(true, false) : $this->addValuesToCollection($this->productTaxSets, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'productAbstracts' => $this->productAbstracts instanceof AbstractTransfer ? $this->productAbstracts->toArray(true, true) : $this->addValuesToCollection($this->productAbstracts, true, true),
            'productConcretes' => $this->productConcretes instanceof AbstractTransfer ? $this->productConcretes->toArray(true, true) : $this->addValuesToCollection($this->productConcretes, true, true),
            'productTaxSets' => $this->productTaxSets instanceof AbstractTransfer ? $this->productTaxSets->toArray(true, true) : $this->addValuesToCollection($this->productTaxSets, true, true),
        ];
    }
}
