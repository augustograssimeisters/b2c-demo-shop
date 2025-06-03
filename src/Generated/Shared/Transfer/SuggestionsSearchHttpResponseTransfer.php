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
class SuggestionsSearchHttpResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CATEGORIES = 'categories';

    /**
     * @var string
     */
    public const COMPLETIONS = 'completions';

    /**
     * @var string
     */
    public const MATCHES = 'matches';

    /**
     * @var string
     */
    public const MATCHED_ITEMS = 'matchedItems';

    /**
     * @var array
     */
    protected $categories = [];

    /**
     * @var string[]
     */
    protected $completions = [];

    /**
     * @var array
     */
    protected $matches = [];

    /**
     * @var array
     */
    protected $matchedItems = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'categories' => 'categories',
        'Categories' => 'categories',
        'completions' => 'completions',
        'Completions' => 'completions',
        'matches' => 'matches',
        'Matches' => 'matches',
        'matched_items' => 'matchedItems',
        'matchedItems' => 'matchedItems',
        'MatchedItems' => 'matchedItems',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CATEGORIES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'categories',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::COMPLETIONS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'completions',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::MATCHES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'matches',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::MATCHED_ITEMS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'matched_items',
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
     * @module CategoryStorage|SearchHttp
     *
     * @param array|null $categories
     *
     * @return $this
     */
    public function setCategories(array $categories = null)
    {
        if ($categories === null) {
            $categories = [];
        }

        $this->categories = $categories;
        $this->modifiedProperties[self::CATEGORIES] = true;

        return $this;
    }

    /**
     * @module CategoryStorage|SearchHttp
     *
     * @return array
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @module CategoryStorage|SearchHttp
     *
     * @param mixed $category
     *
     * @return $this
     */
    public function addCategory($category)
    {
        $this->categories[] = $category;
        $this->modifiedProperties[self::CATEGORIES] = true;

        return $this;
    }

    /**
     * @module CategoryStorage|SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategories()
    {
        $this->assertPropertyIsSet(self::CATEGORIES);

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @param string[]|null $completions
     *
     * @return $this
     */
    public function setCompletions(array $completions = null)
    {
        if ($completions === null) {
            $completions = [];
        }

        $this->completions = [];

        foreach ($completions as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::COMPLETIONS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addCompletion(...$args);
        }

        $this->modifiedProperties[self::COMPLETIONS] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return string[]
     */
    public function getCompletions(): array
    {
        return $this->completions;
    }

    /**
     * @module SearchHttp
     *
     * @param string $completion
     *
     * @return $this
     */
    public function addCompletion(string $completion)
    {
        $this->completions[] = $completion;
        $this->modifiedProperties[self::COMPLETIONS] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompletions()
    {
        $this->assertPropertyIsSet(self::COMPLETIONS);

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @param array|null $matches
     *
     * @return $this
     */
    public function setMatches(array $matches = null)
    {
        if ($matches === null) {
            $matches = [];
        }

        $this->matches = $matches;
        $this->modifiedProperties[self::MATCHES] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return array
     */
    public function getMatches(): array
    {
        return $this->matches;
    }

    /**
     * @module SearchHttp
     *
     * @param string|int $matchKey
     * @param mixed $matchValue
     *
     * @return $this
     */
    public function addMatch($matchKey, $matchValue)
    {
        $this->matches[$matchKey] = $matchValue;
        $this->modifiedProperties[self::MATCHES] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMatches()
    {
        $this->assertPropertyIsSet(self::MATCHES);

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @param string|int $key
     *
     * @return mixed
     */
    public function getMatch($key)
    {
        return $this->matches[$key];
    }


    /**
     * @module SearchHttp
     *
     * @param array|null $matchedItems
     *
     * @return $this
     */
    public function setMatchedItems(array $matchedItems = null)
    {
        if ($matchedItems === null) {
            $matchedItems = [];
        }

        $this->matchedItems = $matchedItems;
        $this->modifiedProperties[self::MATCHED_ITEMS] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return array
     */
    public function getMatchedItems(): array
    {
        return $this->matchedItems;
    }

    /**
     * @module SearchHttp
     *
     * @param mixed $matchedItem
     *
     * @return $this
     */
    public function addMatchedItem($matchedItem)
    {
        $this->matchedItems[] = $matchedItem;
        $this->modifiedProperties[self::MATCHED_ITEMS] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMatchedItems()
    {
        $this->assertPropertyIsSet(self::MATCHED_ITEMS);

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
                case 'categories':
                case 'completions':
                case 'matches':
                case 'matchedItems':
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
                case 'categories':
                case 'completions':
                case 'matches':
                case 'matchedItems':
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
                case 'categories':
                case 'completions':
                case 'matches':
                case 'matchedItems':
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
            'categories' => $this->categories,
            'completions' => $this->completions,
            'matches' => $this->matches,
            'matchedItems' => $this->matchedItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'categories' => $this->categories,
            'completions' => $this->completions,
            'matches' => $this->matches,
            'matched_items' => $this->matchedItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'categories' => $this->categories instanceof AbstractTransfer ? $this->categories->toArray(true, false) : $this->categories,
            'completions' => $this->completions instanceof AbstractTransfer ? $this->completions->toArray(true, false) : $this->completions,
            'matches' => $this->matches instanceof AbstractTransfer ? $this->matches->toArray(true, false) : $this->matches,
            'matched_items' => $this->matchedItems instanceof AbstractTransfer ? $this->matchedItems->toArray(true, false) : $this->matchedItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'categories' => $this->categories instanceof AbstractTransfer ? $this->categories->toArray(true, true) : $this->categories,
            'completions' => $this->completions instanceof AbstractTransfer ? $this->completions->toArray(true, true) : $this->completions,
            'matches' => $this->matches instanceof AbstractTransfer ? $this->matches->toArray(true, true) : $this->matches,
            'matchedItems' => $this->matchedItems instanceof AbstractTransfer ? $this->matchedItems->toArray(true, true) : $this->matchedItems,
        ];
    }
}
