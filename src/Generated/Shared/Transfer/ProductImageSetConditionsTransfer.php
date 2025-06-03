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
class ProductImageSetConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAMES = 'names';

    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT_IDS = 'productAbstractIds';

    /**
     * @var string
     */
    public const PRODUCT_CONCRETE_IDS = 'productConcreteIds';

    /**
     * @var string
     */
    public const LOCALE_IDS = 'localeIds';

    /**
     * @var string
     */
    public const ADD_FALLBACK_LOCALE = 'addFallbackLocale';

    /**
     * @var string
     */
    public const SKUS = 'skus';

    /**
     * @var string
     */
    public const LOCALE_NAMES = 'localeNames';

    /**
     * @var string[]
     */
    protected $names = [];

    /**
     * @var int[]
     */
    protected $productAbstractIds = [];

    /**
     * @var int[]
     */
    protected $productConcreteIds = [];

    /**
     * @var int[]
     */
    protected $localeIds = [];

    /**
     * @var bool|null
     */
    protected $addFallbackLocale;

    /**
     * @var string[]
     */
    protected $skus = [];

    /**
     * @var string[]
     */
    protected $localeNames = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'names' => 'names',
        'Names' => 'names',
        'product_abstract_ids' => 'productAbstractIds',
        'productAbstractIds' => 'productAbstractIds',
        'ProductAbstractIds' => 'productAbstractIds',
        'product_concrete_ids' => 'productConcreteIds',
        'productConcreteIds' => 'productConcreteIds',
        'ProductConcreteIds' => 'productConcreteIds',
        'locale_ids' => 'localeIds',
        'localeIds' => 'localeIds',
        'LocaleIds' => 'localeIds',
        'add_fallback_locale' => 'addFallbackLocale',
        'addFallbackLocale' => 'addFallbackLocale',
        'AddFallbackLocale' => 'addFallbackLocale',
        'skus' => 'skus',
        'Skus' => 'skus',
        'locale_names' => 'localeNames',
        'localeNames' => 'localeNames',
        'LocaleNames' => 'localeNames',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'names',
            'is_collection' => false,
            'is_transfer' => false,
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
            'is_strict' => true,
        ],
        self::PRODUCT_CONCRETE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'product_concrete_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::LOCALE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'locale_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ADD_FALLBACK_LOCALE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'add_fallback_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SKUS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'skus',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::LOCALE_NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'locale_names',
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
     * @module ProductImageCartConnector|ProductImage
     *
     * @param string[]|null $names
     *
     * @return $this
     */
    public function setNames(array $names = null)
    {
        if ($names === null) {
            $names = [];
        }

        $this->names = [];

        foreach ($names as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::NAMES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addName(...$args);
        }

        $this->modifiedProperties[self::NAMES] = true;

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @return string[]
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @param string $name
     *
     * @return $this
     */
    public function addName(string $name)
    {
        $this->names[] = $name;
        $this->modifiedProperties[self::NAMES] = true;

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNames()
    {
        $this->assertPropertyIsSet(self::NAMES);

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
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

        $this->productAbstractIds = [];

        foreach ($productAbstractIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PRODUCT_ABSTRACT_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdProductAbstract(...$args);
        }

        $this->modifiedProperties[self::PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @return int[]
     */
    public function getProductAbstractIds(): array
    {
        return $this->productAbstractIds;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @param int $idProductAbstract
     *
     * @return $this
     */
    public function addIdProductAbstract(int $idProductAbstract)
    {
        $this->productAbstractIds[] = $idProductAbstract;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstractIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT_IDS);

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @param int[]|null $productConcreteIds
     *
     * @return $this
     */
    public function setProductConcreteIds(array $productConcreteIds = null)
    {
        if ($productConcreteIds === null) {
            $productConcreteIds = [];
        }

        $this->productConcreteIds = [];

        foreach ($productConcreteIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PRODUCT_CONCRETE_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdProductConcrete(...$args);
        }

        $this->modifiedProperties[self::PRODUCT_CONCRETE_IDS] = true;

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @return int[]
     */
    public function getProductConcreteIds(): array
    {
        return $this->productConcreteIds;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @param int $idProductConcrete
     *
     * @return $this
     */
    public function addIdProductConcrete(int $idProductConcrete)
    {
        $this->productConcreteIds[] = $idProductConcrete;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_IDS] = true;

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcreteIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONCRETE_IDS);

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @param int[]|null $localeIds
     *
     * @return $this
     */
    public function setLocaleIds(array $localeIds = null)
    {
        if ($localeIds === null) {
            $localeIds = [];
        }

        $this->localeIds = [];

        foreach ($localeIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::LOCALE_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdLocale(...$args);
        }

        $this->modifiedProperties[self::LOCALE_IDS] = true;

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @return int[]
     */
    public function getLocaleIds(): array
    {
        return $this->localeIds;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @param int $idLocale
     *
     * @return $this
     */
    public function addIdLocale(int $idLocale)
    {
        $this->localeIds[] = $idLocale;
        $this->modifiedProperties[self::LOCALE_IDS] = true;

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleIds()
    {
        $this->assertPropertyIsSet(self::LOCALE_IDS);

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @param bool|null $addFallbackLocale
     *
     * @return $this
     */
    public function setAddFallbackLocale(?bool $addFallbackLocale = null)
    {
        $this->addFallbackLocale = $addFallbackLocale;
        $this->modifiedProperties[self::ADD_FALLBACK_LOCALE] = true;

        return $this;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @return bool|null
     */
    public function getAddFallbackLocale(): ?bool
    {
        return $this->addFallbackLocale;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @param bool $addFallbackLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAddFallbackLocaleOrFail(bool $addFallbackLocale)
    {
        return $this->setAddFallbackLocale($addFallbackLocale);
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAddFallbackLocaleOrFail(): bool
    {
        if ($this->addFallbackLocale === null) {
            $this->throwNullValueException(static::ADD_FALLBACK_LOCALE);
        }

        return $this->addFallbackLocale;
    }

    /**
     * @module ProductImageCartConnector|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAddFallbackLocale()
    {
        $this->assertPropertyIsSet(self::ADD_FALLBACK_LOCALE);

        return $this;
    }

    /**
     * @module ProductImageSetsBackendApi|ProductImage
     *
     * @param string[]|null $skus
     *
     * @return $this
     */
    public function setSkus(array $skus = null)
    {
        if ($skus === null) {
            $skus = [];
        }

        $this->skus = [];

        foreach ($skus as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SKUS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addSku(...$args);
        }

        $this->modifiedProperties[self::SKUS] = true;

        return $this;
    }

    /**
     * @module ProductImageSetsBackendApi|ProductImage
     *
     * @return string[]
     */
    public function getSkus(): array
    {
        return $this->skus;
    }

    /**
     * @module ProductImageSetsBackendApi|ProductImage
     *
     * @param string $sku
     *
     * @return $this
     */
    public function addSku(string $sku)
    {
        $this->skus[] = $sku;
        $this->modifiedProperties[self::SKUS] = true;

        return $this;
    }

    /**
     * @module ProductImageSetsBackendApi|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSkus()
    {
        $this->assertPropertyIsSet(self::SKUS);

        return $this;
    }

    /**
     * @module ProductImageSetsBackendApi|ProductImage
     *
     * @param string[]|null $localeNames
     *
     * @return $this
     */
    public function setLocaleNames(array $localeNames = null)
    {
        if ($localeNames === null) {
            $localeNames = [];
        }

        $this->localeNames = [];

        foreach ($localeNames as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::LOCALE_NAMES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addLocaleName(...$args);
        }

        $this->modifiedProperties[self::LOCALE_NAMES] = true;

        return $this;
    }

    /**
     * @module ProductImageSetsBackendApi|ProductImage
     *
     * @return string[]
     */
    public function getLocaleNames(): array
    {
        return $this->localeNames;
    }

    /**
     * @module ProductImageSetsBackendApi|ProductImage
     *
     * @param string $localeName
     *
     * @return $this
     */
    public function addLocaleName(string $localeName)
    {
        $this->localeNames[] = $localeName;
        $this->modifiedProperties[self::LOCALE_NAMES] = true;

        return $this;
    }

    /**
     * @module ProductImageSetsBackendApi|ProductImage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleNames()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAMES);

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
                case 'names':
                case 'productAbstractIds':
                case 'productConcreteIds':
                case 'localeIds':
                case 'addFallbackLocale':
                case 'skus':
                case 'localeNames':
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
                case 'names':
                case 'productAbstractIds':
                case 'productConcreteIds':
                case 'localeIds':
                case 'addFallbackLocale':
                case 'skus':
                case 'localeNames':
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
                case 'names':
                case 'productAbstractIds':
                case 'productConcreteIds':
                case 'localeIds':
                case 'addFallbackLocale':
                case 'skus':
                case 'localeNames':
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
            'names' => $this->names,
            'productAbstractIds' => $this->productAbstractIds,
            'productConcreteIds' => $this->productConcreteIds,
            'localeIds' => $this->localeIds,
            'addFallbackLocale' => $this->addFallbackLocale,
            'skus' => $this->skus,
            'localeNames' => $this->localeNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'names' => $this->names,
            'product_abstract_ids' => $this->productAbstractIds,
            'product_concrete_ids' => $this->productConcreteIds,
            'locale_ids' => $this->localeIds,
            'add_fallback_locale' => $this->addFallbackLocale,
            'skus' => $this->skus,
            'locale_names' => $this->localeNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'names' => $this->names instanceof AbstractTransfer ? $this->names->toArray(true, false) : $this->names,
            'product_abstract_ids' => $this->productAbstractIds instanceof AbstractTransfer ? $this->productAbstractIds->toArray(true, false) : $this->productAbstractIds,
            'product_concrete_ids' => $this->productConcreteIds instanceof AbstractTransfer ? $this->productConcreteIds->toArray(true, false) : $this->productConcreteIds,
            'locale_ids' => $this->localeIds instanceof AbstractTransfer ? $this->localeIds->toArray(true, false) : $this->localeIds,
            'add_fallback_locale' => $this->addFallbackLocale instanceof AbstractTransfer ? $this->addFallbackLocale->toArray(true, false) : $this->addFallbackLocale,
            'skus' => $this->skus instanceof AbstractTransfer ? $this->skus->toArray(true, false) : $this->skus,
            'locale_names' => $this->localeNames instanceof AbstractTransfer ? $this->localeNames->toArray(true, false) : $this->localeNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'names' => $this->names instanceof AbstractTransfer ? $this->names->toArray(true, true) : $this->names,
            'productAbstractIds' => $this->productAbstractIds instanceof AbstractTransfer ? $this->productAbstractIds->toArray(true, true) : $this->productAbstractIds,
            'productConcreteIds' => $this->productConcreteIds instanceof AbstractTransfer ? $this->productConcreteIds->toArray(true, true) : $this->productConcreteIds,
            'localeIds' => $this->localeIds instanceof AbstractTransfer ? $this->localeIds->toArray(true, true) : $this->localeIds,
            'addFallbackLocale' => $this->addFallbackLocale instanceof AbstractTransfer ? $this->addFallbackLocale->toArray(true, true) : $this->addFallbackLocale,
            'skus' => $this->skus instanceof AbstractTransfer ? $this->skus->toArray(true, true) : $this->skus,
            'localeNames' => $this->localeNames instanceof AbstractTransfer ? $this->localeNames->toArray(true, true) : $this->localeNames,
        ];
    }
}
