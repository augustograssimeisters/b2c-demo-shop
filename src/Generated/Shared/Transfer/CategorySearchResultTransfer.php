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
class CategorySearchResultTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY = 'idCategory';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var int|null
     */
    protected $idCategory;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category' => 'idCategory',
        'idCategory' => 'idCategory',
        'IdCategory' => 'idCategory',
        'name' => 'name',
        'Name' => 'name',
        'url' => 'url',
        'Url' => 'url',
        'type' => 'type',
        'Type' => 'type',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATEGORY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_category',
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
        self::URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
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
     * @module CategoryStorage
     *
     * @param int|null $idCategory
     *
     * @return $this
     */
    public function setIdCategory(?int $idCategory = null)
    {
        $this->idCategory = $idCategory;
        $this->modifiedProperties[self::ID_CATEGORY] = true;

        return $this;
    }

    /**
     * @module CategoryStorage
     *
     * @return int|null
     */
    public function getIdCategory(): ?int
    {
        return $this->idCategory;
    }

    /**
     * @module CategoryStorage
     *
     * @param int $idCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryOrFail(int $idCategory)
    {
        return $this->setIdCategory($idCategory);
    }

    /**
     * @module CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCategoryOrFail(): int
    {
        if ($this->idCategory === null) {
            $this->throwNullValueException(static::ID_CATEGORY);
        }

        return $this->idCategory;
    }

    /**
     * @module CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategory()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY);

        return $this;
    }

    /**
     * @module CategoryStorage
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
     * @module CategoryStorage
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @module CategoryStorage
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
     * @module CategoryStorage
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
     * @module CategoryStorage
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
     * @module CategoryStorage
     *
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl(?string $url = null)
    {
        $this->url = $url;
        $this->modifiedProperties[self::URL] = true;

        return $this;
    }

    /**
     * @module CategoryStorage
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @module CategoryStorage
     *
     * @param string $url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUrlOrFail(string $url)
    {
        return $this->setUrl($url);
    }

    /**
     * @module CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUrlOrFail(): string
    {
        if ($this->url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->url;
    }

    /**
     * @module CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrl()
    {
        $this->assertPropertyIsSet(self::URL);

        return $this;
    }

    /**
     * @module CategoryStorage
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType(?string $type = null)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module CategoryStorage
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @module CategoryStorage
     *
     * @param string $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail(string $type)
    {
        return $this->setType($type);
    }

    /**
     * @module CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail(): string
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module CategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

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
                case 'idCategory':
                case 'name':
                case 'url':
                case 'type':
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
                case 'idCategory':
                case 'name':
                case 'url':
                case 'type':
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
                case 'idCategory':
                case 'name':
                case 'url':
                case 'type':
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
            'idCategory' => $this->idCategory,
            'name' => $this->name,
            'url' => $this->url,
            'type' => $this->type,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category' => $this->idCategory,
            'name' => $this->name,
            'url' => $this->url,
            'type' => $this->type,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, false) : $this->idCategory,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategory' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, true) : $this->idCategory,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
        ];
    }
}
