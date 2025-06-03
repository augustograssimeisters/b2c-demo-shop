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
class ProductsBackendApiAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT_SKU = 'productAbstractSku';

    /**
     * @var string
     */
    public const TAX_SET_NAME = 'taxSetName';

    /**
     * @var string
     */
    public const NEW_FROM = 'newFrom';

    /**
     * @var string
     */
    public const NEW_TO = 'newTo';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const LOCALIZED_ATTRIBUTES = 'localizedAttributes';

    /**
     * @var string
     */
    public const URLS = 'urls';

    /**
     * @var string
     */
    public const IMAGE_SETS = 'imageSets';

    /**
     * @var string
     */
    public const STORES = 'stores';

    /**
     * @var string
     */
    public const CATEGORIES = 'categories';

    /**
     * @var string
     */
    public const VARIANTS = 'variants';

    /**
     * @var string|null
     */
    protected $productAbstractSku;

    /**
     * @var string|null
     */
    protected $taxSetName;

    /**
     * @var string|null
     */
    protected $newFrom;

    /**
     * @var string|null
     */
    protected $newTo;

    /**
     * @var string[]
     */
    protected $attributes = [];

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ProductLocalizedAttributesBackendApiAttributesTransfer>
     */
    protected $localizedAttributes;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ProductUrlsBackendApiAttributesTransfer>
     */
    protected $urls;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ProductImageSetBackendApiAttributesTransfer>
     */
    protected $imageSets;

    /**
     * @var string[]
     */
    protected $stores = [];

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ProductCategoriesBackendApiAttributesTransfer>
     */
    protected $categories;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ProductConcretesBackendApiAttributesTransfer>
     */
    protected $variants;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_abstract_sku' => 'productAbstractSku',
        'productAbstractSku' => 'productAbstractSku',
        'ProductAbstractSku' => 'productAbstractSku',
        'tax_set_name' => 'taxSetName',
        'taxSetName' => 'taxSetName',
        'TaxSetName' => 'taxSetName',
        'new_from' => 'newFrom',
        'newFrom' => 'newFrom',
        'NewFrom' => 'newFrom',
        'new_to' => 'newTo',
        'newTo' => 'newTo',
        'NewTo' => 'newTo',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'localized_attributes' => 'localizedAttributes',
        'localizedAttributes' => 'localizedAttributes',
        'LocalizedAttributes' => 'localizedAttributes',
        'urls' => 'urls',
        'Urls' => 'urls',
        'image_sets' => 'imageSets',
        'imageSets' => 'imageSets',
        'ImageSets' => 'imageSets',
        'stores' => 'stores',
        'Stores' => 'stores',
        'categories' => 'categories',
        'Categories' => 'categories',
        'variants' => 'variants',
        'Variants' => 'variants',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_ABSTRACT_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_abstract_sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::TAX_SET_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'tax_set_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::NEW_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'new_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::NEW_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'new_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ATTRIBUTES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::LOCALIZED_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\ProductLocalizedAttributesBackendApiAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'localized_attributes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::URLS => [
            'type' => 'Generated\Shared\Transfer\ProductUrlsBackendApiAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'urls',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\ProductImageSetBackendApiAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'image_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::STORES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'stores',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CATEGORIES => [
            'type' => 'Generated\Shared\Transfer\ProductCategoriesBackendApiAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'categories',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::VARIANTS => [
            'type' => 'Generated\Shared\Transfer\ProductConcretesBackendApiAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'variants',
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
     * @module ProductsBackendApi
     *
     * @param string|null $productAbstractSku
     *
     * @return $this
     */
    public function setProductAbstractSku(?string $productAbstractSku = null)
    {
        $this->productAbstractSku = $productAbstractSku;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_SKU] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getProductAbstractSku(): ?string
    {
        return $this->productAbstractSku;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $productAbstractSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAbstractSkuOrFail(string $productAbstractSku)
    {
        return $this->setProductAbstractSku($productAbstractSku);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductAbstractSkuOrFail(): string
    {
        if ($this->productAbstractSku === null) {
            $this->throwNullValueException(static::PRODUCT_ABSTRACT_SKU);
        }

        return $this->productAbstractSku;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstractSku()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT_SKU);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string|null $taxSetName
     *
     * @return $this
     */
    public function setTaxSetName(?string $taxSetName = null)
    {
        $this->taxSetName = $taxSetName;
        $this->modifiedProperties[self::TAX_SET_NAME] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getTaxSetName(): ?string
    {
        return $this->taxSetName;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $taxSetName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxSetNameOrFail(string $taxSetName)
    {
        return $this->setTaxSetName($taxSetName);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTaxSetNameOrFail(): string
    {
        if ($this->taxSetName === null) {
            $this->throwNullValueException(static::TAX_SET_NAME);
        }

        return $this->taxSetName;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxSetName()
    {
        $this->assertPropertyIsSet(self::TAX_SET_NAME);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string|null $newFrom
     *
     * @return $this
     */
    public function setNewFrom(?string $newFrom = null)
    {
        $this->newFrom = $newFrom;
        $this->modifiedProperties[self::NEW_FROM] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getNewFrom(): ?string
    {
        return $this->newFrom;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $newFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNewFromOrFail(string $newFrom)
    {
        return $this->setNewFrom($newFrom);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNewFromOrFail(): string
    {
        if ($this->newFrom === null) {
            $this->throwNullValueException(static::NEW_FROM);
        }

        return $this->newFrom;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNewFrom()
    {
        $this->assertPropertyIsSet(self::NEW_FROM);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string|null $newTo
     *
     * @return $this
     */
    public function setNewTo(?string $newTo = null)
    {
        $this->newTo = $newTo;
        $this->modifiedProperties[self::NEW_TO] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getNewTo(): ?string
    {
        return $this->newTo;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $newTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNewToOrFail(string $newTo)
    {
        return $this->setNewTo($newTo);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNewToOrFail(): string
    {
        if ($this->newTo === null) {
            $this->throwNullValueException(static::NEW_TO);
        }

        return $this->newTo;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNewTo()
    {
        $this->assertPropertyIsSet(self::NEW_TO);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string[]|null $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes = null)
    {
        if ($attributes === null) {
            $attributes = [];
        }

        $this->attributes = [];

        foreach ($attributes as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::ATTRIBUTES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addAttribute(...$args);
        }

        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string[]
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string|int $attributeKey
     * @param string $attributeValue
     *
     * @return $this
     */
    public function addAttribute($attributeKey, string $attributeValue)
    {
        $this->attributes[$attributeKey] = $attributeValue;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttributes()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string|int $key
     *
     * @return \Generated\Shared\Transfer\string
     */
    public function getAttribute($key): string
    {
        return $this->attributes[$key];
    }


    /**
     * @module ProductsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ProductLocalizedAttributesBackendApiAttributesTransfer> $localizedAttributes
     *
     * @return $this
     */
    public function setLocalizedAttributes(ArrayObject $localizedAttributes)
    {
        $this->localizedAttributes = new ArrayObject();

        foreach ($localizedAttributes as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::LOCALIZED_ATTRIBUTES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addLocalizedAttribute(...$args);
        }

        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ProductLocalizedAttributesBackendApiAttributesTransfer>
     */
    public function getLocalizedAttributes(): ArrayObject
    {
        return $this->localizedAttributes;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\ProductLocalizedAttributesBackendApiAttributesTransfer $localizedAttribute
     *
     * @return $this
     */
    public function addLocalizedAttribute(ProductLocalizedAttributesBackendApiAttributesTransfer $localizedAttribute)
    {
        $this->localizedAttributes[] = $localizedAttribute;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ProductUrlsBackendApiAttributesTransfer> $urls
     *
     * @return $this
     */
    public function setUrls(ArrayObject $urls)
    {
        $this->urls = new ArrayObject();

        foreach ($urls as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::URLS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addUrl(...$args);
        }

        $this->modifiedProperties[self::URLS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ProductUrlsBackendApiAttributesTransfer>
     */
    public function getUrls(): ArrayObject
    {
        return $this->urls;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\ProductUrlsBackendApiAttributesTransfer $url
     *
     * @return $this
     */
    public function addUrl(ProductUrlsBackendApiAttributesTransfer $url)
    {
        $this->urls[] = $url;
        $this->modifiedProperties[self::URLS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrls()
    {
        $this->assertCollectionPropertyIsSet(self::URLS);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ProductImageSetBackendApiAttributesTransfer> $imageSets
     *
     * @return $this
     */
    public function setImageSets(ArrayObject $imageSets)
    {
        $this->imageSets = new ArrayObject();

        foreach ($imageSets as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::IMAGE_SETS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addImageSet(...$args);
        }

        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ProductImageSetBackendApiAttributesTransfer>
     */
    public function getImageSets(): ArrayObject
    {
        return $this->imageSets;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\ProductImageSetBackendApiAttributesTransfer $imageSet
     *
     * @return $this
     */
    public function addImageSet(ProductImageSetBackendApiAttributesTransfer $imageSet)
    {
        $this->imageSets[] = $imageSet;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::IMAGE_SETS);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string[]|null $stores
     *
     * @return $this
     */
    public function setStores(array $stores = null)
    {
        if ($stores === null) {
            $stores = [];
        }

        $this->stores = [];

        foreach ($stores as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::STORES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addStore(...$args);
        }

        $this->modifiedProperties[self::STORES] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string[]
     */
    public function getStores(): array
    {
        return $this->stores;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $store
     *
     * @return $this
     */
    public function addStore(string $store)
    {
        $this->stores[] = $store;
        $this->modifiedProperties[self::STORES] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStores()
    {
        $this->assertPropertyIsSet(self::STORES);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ProductCategoriesBackendApiAttributesTransfer> $categories
     *
     * @return $this
     */
    public function setCategories(ArrayObject $categories)
    {
        $this->categories = new ArrayObject();

        foreach ($categories as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::CATEGORIES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addCategory(...$args);
        }

        $this->modifiedProperties[self::CATEGORIES] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ProductCategoriesBackendApiAttributesTransfer>
     */
    public function getCategories(): ArrayObject
    {
        return $this->categories;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\ProductCategoriesBackendApiAttributesTransfer $category
     *
     * @return $this
     */
    public function addCategory(ProductCategoriesBackendApiAttributesTransfer $category)
    {
        $this->categories[] = $category;
        $this->modifiedProperties[self::CATEGORIES] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategories()
    {
        $this->assertCollectionPropertyIsSet(self::CATEGORIES);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ProductConcretesBackendApiAttributesTransfer> $variants
     *
     * @return $this
     */
    public function setVariants(ArrayObject $variants)
    {
        $this->variants = new ArrayObject();

        foreach ($variants as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::VARIANTS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addVariant(...$args);
        }

        $this->modifiedProperties[self::VARIANTS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ProductConcretesBackendApiAttributesTransfer>
     */
    public function getVariants(): ArrayObject
    {
        return $this->variants;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\ProductConcretesBackendApiAttributesTransfer $variant
     *
     * @return $this
     */
    public function addVariant(ProductConcretesBackendApiAttributesTransfer $variant)
    {
        $this->variants[] = $variant;
        $this->modifiedProperties[self::VARIANTS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVariants()
    {
        $this->assertCollectionPropertyIsSet(self::VARIANTS);

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
                case 'productAbstractSku':
                case 'taxSetName':
                case 'newFrom':
                case 'newTo':
                case 'attributes':
                case 'stores':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'localizedAttributes':
                case 'urls':
                case 'imageSets':
                case 'categories':
                case 'variants':
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
                case 'productAbstractSku':
                case 'taxSetName':
                case 'newFrom':
                case 'newTo':
                case 'attributes':
                case 'stores':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedAttributes':
                case 'urls':
                case 'imageSets':
                case 'categories':
                case 'variants':
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
                case 'productAbstractSku':
                case 'taxSetName':
                case 'newFrom':
                case 'newTo':
                case 'attributes':
                case 'stores':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedAttributes':
                case 'urls':
                case 'imageSets':
                case 'categories':
                case 'variants':
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
        $this->localizedAttributes = $this->localizedAttributes ?: new ArrayObject();
        $this->urls = $this->urls ?: new ArrayObject();
        $this->imageSets = $this->imageSets ?: new ArrayObject();
        $this->categories = $this->categories ?: new ArrayObject();
        $this->variants = $this->variants ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'productAbstractSku' => $this->productAbstractSku,
            'taxSetName' => $this->taxSetName,
            'newFrom' => $this->newFrom,
            'newTo' => $this->newTo,
            'attributes' => $this->attributes,
            'stores' => $this->stores,
            'localizedAttributes' => $this->localizedAttributes,
            'urls' => $this->urls,
            'imageSets' => $this->imageSets,
            'categories' => $this->categories,
            'variants' => $this->variants,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_abstract_sku' => $this->productAbstractSku,
            'tax_set_name' => $this->taxSetName,
            'new_from' => $this->newFrom,
            'new_to' => $this->newTo,
            'attributes' => $this->attributes,
            'stores' => $this->stores,
            'localized_attributes' => $this->localizedAttributes,
            'urls' => $this->urls,
            'image_sets' => $this->imageSets,
            'categories' => $this->categories,
            'variants' => $this->variants,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_abstract_sku' => $this->productAbstractSku instanceof AbstractTransfer ? $this->productAbstractSku->toArray(true, false) : $this->productAbstractSku,
            'tax_set_name' => $this->taxSetName instanceof AbstractTransfer ? $this->taxSetName->toArray(true, false) : $this->taxSetName,
            'new_from' => $this->newFrom instanceof AbstractTransfer ? $this->newFrom->toArray(true, false) : $this->newFrom,
            'new_to' => $this->newTo instanceof AbstractTransfer ? $this->newTo->toArray(true, false) : $this->newTo,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'stores' => $this->stores instanceof AbstractTransfer ? $this->stores->toArray(true, false) : $this->stores,
            'localized_attributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, false) : $this->addValuesToCollection($this->localizedAttributes, true, false),
            'urls' => $this->urls instanceof AbstractTransfer ? $this->urls->toArray(true, false) : $this->addValuesToCollection($this->urls, true, false),
            'image_sets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, false) : $this->addValuesToCollection($this->imageSets, true, false),
            'categories' => $this->categories instanceof AbstractTransfer ? $this->categories->toArray(true, false) : $this->addValuesToCollection($this->categories, true, false),
            'variants' => $this->variants instanceof AbstractTransfer ? $this->variants->toArray(true, false) : $this->addValuesToCollection($this->variants, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productAbstractSku' => $this->productAbstractSku instanceof AbstractTransfer ? $this->productAbstractSku->toArray(true, true) : $this->productAbstractSku,
            'taxSetName' => $this->taxSetName instanceof AbstractTransfer ? $this->taxSetName->toArray(true, true) : $this->taxSetName,
            'newFrom' => $this->newFrom instanceof AbstractTransfer ? $this->newFrom->toArray(true, true) : $this->newFrom,
            'newTo' => $this->newTo instanceof AbstractTransfer ? $this->newTo->toArray(true, true) : $this->newTo,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'stores' => $this->stores instanceof AbstractTransfer ? $this->stores->toArray(true, true) : $this->stores,
            'localizedAttributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, true) : $this->addValuesToCollection($this->localizedAttributes, true, true),
            'urls' => $this->urls instanceof AbstractTransfer ? $this->urls->toArray(true, true) : $this->addValuesToCollection($this->urls, true, true),
            'imageSets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, true) : $this->addValuesToCollection($this->imageSets, true, true),
            'categories' => $this->categories instanceof AbstractTransfer ? $this->categories->toArray(true, true) : $this->addValuesToCollection($this->categories, true, true),
            'variants' => $this->variants instanceof AbstractTransfer ? $this->variants->toArray(true, true) : $this->addValuesToCollection($this->variants, true, true),
        ];
    }
}
