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
class ProductConcreteLocalizedAttributesBackendApiAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const IS_SEARCHABLE = 'isSearchable';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var bool|null
     */
    protected $isSearchable;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'locale' => 'locale',
        'Locale' => 'locale',
        'name' => 'name',
        'Name' => 'name',
        'description' => 'description',
        'Description' => 'description',
        'is_searchable' => 'isSearchable',
        'isSearchable' => 'isSearchable',
        'IsSearchable' => 'isSearchable',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
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
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_SEARCHABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_searchable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ATTRIBUTES => [
            'type' => 'array',
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
    ];

    /**
     * @module ProductsBackendApi
     *
     * @param string|null $locale
     *
     * @return $this
     */
    public function setLocale(?string $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(string $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleOrFail(): string
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

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
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription(?string $description = null)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail(string $description)
    {
        return $this->setDescription($description);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail(): string
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param bool|null $isSearchable
     *
     * @return $this
     */
    public function setIsSearchable(?bool $isSearchable = null)
    {
        $this->isSearchable = $isSearchable;
        $this->modifiedProperties[self::IS_SEARCHABLE] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return bool|null
     */
    public function getIsSearchable(): ?bool
    {
        return $this->isSearchable;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param bool $isSearchable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSearchableOrFail(bool $isSearchable)
    {
        return $this->setIsSearchable($isSearchable);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSearchableOrFail(): bool
    {
        if ($this->isSearchable === null) {
            $this->throwNullValueException(static::IS_SEARCHABLE);
        }

        return $this->isSearchable;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSearchable()
    {
        $this->assertPropertyIsSet(self::IS_SEARCHABLE);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param array|null $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes = null)
    {
        if ($attributes === null) {
            $attributes = [];
        }

        $this->attributes = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string|int $attributeKey
     * @param mixed $attributeValue
     *
     * @return $this
     */
    public function addAttribute($attributeKey, $attributeValue)
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
     * @return mixed
     */
    public function getAttribute($key)
    {
        return $this->attributes[$key];
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
                case 'locale':
                case 'name':
                case 'description':
                case 'isSearchable':
                case 'attributes':
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
                case 'locale':
                case 'name':
                case 'description':
                case 'isSearchable':
                case 'attributes':
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
                case 'locale':
                case 'name':
                case 'description':
                case 'isSearchable':
                case 'attributes':
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
            'locale' => $this->locale,
            'name' => $this->name,
            'description' => $this->description,
            'isSearchable' => $this->isSearchable,
            'attributes' => $this->attributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'locale' => $this->locale,
            'name' => $this->name,
            'description' => $this->description,
            'is_searchable' => $this->isSearchable,
            'attributes' => $this->attributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'is_searchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, false) : $this->isSearchable,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'isSearchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, true) : $this->isSearchable,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
        ];
    }
}
