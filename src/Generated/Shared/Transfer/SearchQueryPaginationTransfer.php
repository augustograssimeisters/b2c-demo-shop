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
class SearchQueryPaginationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PAGE = 'page';

    /**
     * @var string
     */
    public const ITEMS_PER_PAGE = 'itemsPerPage';

    /**
     * @var int|null
     */
    protected $page;

    /**
     * @var int|null
     */
    protected $itemsPerPage;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'page' => 'page',
        'Page' => 'page',
        'items_per_page' => 'itemsPerPage',
        'itemsPerPage' => 'itemsPerPage',
        'ItemsPerPage' => 'itemsPerPage',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'page',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEMS_PER_PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'items_per_page',
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
     * @module SearchHttp
     *
     * @param int|null $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;
        $this->modifiedProperties[self::PAGE] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @module SearchHttp
     *
     * @param int|null $page
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPageOrFail($page)
    {
        if ($page === null) {
            $this->throwNullValueException(static::PAGE);
        }

        return $this->setPage($page);
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPageOrFail()
    {
        if ($this->page === null) {
            $this->throwNullValueException(static::PAGE);
        }

        return $this->page;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePage()
    {
        $this->assertPropertyIsSet(self::PAGE);

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @param int|null $itemsPerPage
     *
     * @return $this
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
        $this->modifiedProperties[self::ITEMS_PER_PAGE] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return int|null
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * @module SearchHttp
     *
     * @param int|null $itemsPerPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemsPerPageOrFail($itemsPerPage)
    {
        if ($itemsPerPage === null) {
            $this->throwNullValueException(static::ITEMS_PER_PAGE);
        }

        return $this->setItemsPerPage($itemsPerPage);
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getItemsPerPageOrFail()
    {
        if ($this->itemsPerPage === null) {
            $this->throwNullValueException(static::ITEMS_PER_PAGE);
        }

        return $this->itemsPerPage;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemsPerPage()
    {
        $this->assertPropertyIsSet(self::ITEMS_PER_PAGE);

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
                case 'page':
                case 'itemsPerPage':
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
                case 'page':
                case 'itemsPerPage':
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
                case 'page':
                case 'itemsPerPage':
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
            'page' => $this->page,
            'itemsPerPage' => $this->itemsPerPage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'page' => $this->page,
            'items_per_page' => $this->itemsPerPage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'page' => $this->page instanceof AbstractTransfer ? $this->page->toArray(true, false) : $this->page,
            'items_per_page' => $this->itemsPerPage instanceof AbstractTransfer ? $this->itemsPerPage->toArray(true, false) : $this->itemsPerPage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'page' => $this->page instanceof AbstractTransfer ? $this->page->toArray(true, true) : $this->page,
            'itemsPerPage' => $this->itemsPerPage instanceof AbstractTransfer ? $this->itemsPerPage->toArray(true, true) : $this->itemsPerPage,
        ];
    }
}
