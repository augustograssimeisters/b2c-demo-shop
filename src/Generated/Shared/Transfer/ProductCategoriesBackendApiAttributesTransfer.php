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
class ProductCategoriesBackendApiAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const CATEGORY_KEY = 'categoryKey';

    /**
     * @var string
     */
    public const META_TITLE = 'metaTitle';

    /**
     * @var string
     */
    public const META_DESCRIPTION = 'metaDescription';

    /**
     * @var string
     */
    public const META_KEYWORDS = 'metaKeywords';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $categoryKey;

    /**
     * @var string|null
     */
    protected $metaTitle;

    /**
     * @var string|null
     */
    protected $metaDescription;

    /**
     * @var string|null
     */
    protected $metaKeywords;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'category_key' => 'categoryKey',
        'categoryKey' => 'categoryKey',
        'CategoryKey' => 'categoryKey',
        'meta_title' => 'metaTitle',
        'metaTitle' => 'metaTitle',
        'MetaTitle' => 'metaTitle',
        'meta_description' => 'metaDescription',
        'metaDescription' => 'metaDescription',
        'MetaDescription' => 'metaDescription',
        'meta_keywords' => 'metaKeywords',
        'metaKeywords' => 'metaKeywords',
        'MetaKeywords' => 'metaKeywords',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
            'is_strict' => true,
        ],
        self::CATEGORY_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'category_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::META_TITLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_title',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::META_DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::META_KEYWORDS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_keywords',
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
     * @module ProductsBackendApi
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name = null)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail(string $name)
    {
        return $this->setName($name);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail(): string
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module ProductsBackendApi
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
     * @module ProductsBackendApi
     *
     * @param string|null $categoryKey
     *
     * @return $this
     */
    public function setCategoryKey(?string $categoryKey = null)
    {
        $this->categoryKey = $categoryKey;
        $this->modifiedProperties[self::CATEGORY_KEY] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getCategoryKey(): ?string
    {
        return $this->categoryKey;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $categoryKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryKeyOrFail(string $categoryKey)
    {
        return $this->setCategoryKey($categoryKey);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCategoryKeyOrFail(): string
    {
        if ($this->categoryKey === null) {
            $this->throwNullValueException(static::CATEGORY_KEY);
        }

        return $this->categoryKey;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryKey()
    {
        $this->assertPropertyIsSet(self::CATEGORY_KEY);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string|null $metaTitle
     *
     * @return $this
     */
    public function setMetaTitle(?string $metaTitle = null)
    {
        $this->metaTitle = $metaTitle;
        $this->modifiedProperties[self::META_TITLE] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $metaTitle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaTitleOrFail(string $metaTitle)
    {
        return $this->setMetaTitle($metaTitle);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaTitleOrFail(): string
    {
        if ($this->metaTitle === null) {
            $this->throwNullValueException(static::META_TITLE);
        }

        return $this->metaTitle;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaTitle()
    {
        $this->assertPropertyIsSet(self::META_TITLE);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string|null $metaDescription
     *
     * @return $this
     */
    public function setMetaDescription(?string $metaDescription = null)
    {
        $this->metaDescription = $metaDescription;
        $this->modifiedProperties[self::META_DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $metaDescription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaDescriptionOrFail(string $metaDescription)
    {
        return $this->setMetaDescription($metaDescription);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaDescriptionOrFail(): string
    {
        if ($this->metaDescription === null) {
            $this->throwNullValueException(static::META_DESCRIPTION);
        }

        return $this->metaDescription;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaDescription()
    {
        $this->assertPropertyIsSet(self::META_DESCRIPTION);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string|null $metaKeywords
     *
     * @return $this
     */
    public function setMetaKeywords(?string $metaKeywords = null)
    {
        $this->metaKeywords = $metaKeywords;
        $this->modifiedProperties[self::META_KEYWORDS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $metaKeywords
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaKeywordsOrFail(string $metaKeywords)
    {
        return $this->setMetaKeywords($metaKeywords);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaKeywordsOrFail(): string
    {
        if ($this->metaKeywords === null) {
            $this->throwNullValueException(static::META_KEYWORDS);
        }

        return $this->metaKeywords;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaKeywords()
    {
        $this->assertPropertyIsSet(self::META_KEYWORDS);

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
                case 'name':
                case 'categoryKey':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
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
                case 'name':
                case 'categoryKey':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
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
                case 'name':
                case 'categoryKey':
                case 'metaTitle':
                case 'metaDescription':
                case 'metaKeywords':
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
            'name' => $this->name,
            'categoryKey' => $this->categoryKey,
            'metaTitle' => $this->metaTitle,
            'metaDescription' => $this->metaDescription,
            'metaKeywords' => $this->metaKeywords,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'category_key' => $this->categoryKey,
            'meta_title' => $this->metaTitle,
            'meta_description' => $this->metaDescription,
            'meta_keywords' => $this->metaKeywords,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'category_key' => $this->categoryKey instanceof AbstractTransfer ? $this->categoryKey->toArray(true, false) : $this->categoryKey,
            'meta_title' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, false) : $this->metaTitle,
            'meta_description' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, false) : $this->metaDescription,
            'meta_keywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, false) : $this->metaKeywords,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'categoryKey' => $this->categoryKey instanceof AbstractTransfer ? $this->categoryKey->toArray(true, true) : $this->categoryKey,
            'metaTitle' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, true) : $this->metaTitle,
            'metaDescription' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, true) : $this->metaDescription,
            'metaKeywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, true) : $this->metaKeywords,
        ];
    }
}
