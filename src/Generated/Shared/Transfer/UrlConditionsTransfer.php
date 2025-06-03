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
class UrlConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RESOURCE_PRODUCT_ABSTRACT_IDS = 'resourceProductAbstractIds';

    /**
     * @var string
     */
    public const LOCALE_IDS = 'localeIds';

    /**
     * @var string
     */
    public const URLS = 'urls';

    /**
     * @var string
     */
    public const NOT_RESOURCE_PRODUCT_ABSTRACT_IDS = 'notResourceProductAbstractIds';

    /**
     * @var int[]
     */
    protected $resourceProductAbstractIds = [];

    /**
     * @var int[]
     */
    protected $localeIds = [];

    /**
     * @var string[]
     */
    protected $urls = [];

    /**
     * @var int[]
     */
    protected $notResourceProductAbstractIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'resource_product_abstract_ids' => 'resourceProductAbstractIds',
        'resourceProductAbstractIds' => 'resourceProductAbstractIds',
        'ResourceProductAbstractIds' => 'resourceProductAbstractIds',
        'locale_ids' => 'localeIds',
        'localeIds' => 'localeIds',
        'LocaleIds' => 'localeIds',
        'urls' => 'urls',
        'Urls' => 'urls',
        'not_resource_product_abstract_ids' => 'notResourceProductAbstractIds',
        'notResourceProductAbstractIds' => 'notResourceProductAbstractIds',
        'NotResourceProductAbstractIds' => 'notResourceProductAbstractIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::RESOURCE_PRODUCT_ABSTRACT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'resource_product_abstract_ids',
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
        self::URLS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'urls',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::NOT_RESOURCE_PRODUCT_ABSTRACT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'not_resource_product_abstract_ids',
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
     * @module ProductsBackendApi|Url
     *
     * @param int[]|null $resourceProductAbstractIds
     *
     * @return $this
     */
    public function setResourceProductAbstractIds(array $resourceProductAbstractIds = null)
    {
        if ($resourceProductAbstractIds === null) {
            $resourceProductAbstractIds = [];
        }

        $this->resourceProductAbstractIds = [];

        foreach ($resourceProductAbstractIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::RESOURCE_PRODUCT_ABSTRACT_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdResourceProductAbstract(...$args);
        }

        $this->modifiedProperties[self::RESOURCE_PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi|Url
     *
     * @return int[]
     */
    public function getResourceProductAbstractIds(): array
    {
        return $this->resourceProductAbstractIds;
    }

    /**
     * @module ProductsBackendApi|Url
     *
     * @param int $idResourceProductAbstract
     *
     * @return $this
     */
    public function addIdResourceProductAbstract(int $idResourceProductAbstract)
    {
        $this->resourceProductAbstractIds[] = $idResourceProductAbstract;
        $this->modifiedProperties[self::RESOURCE_PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResourceProductAbstractIds()
    {
        $this->assertPropertyIsSet(self::RESOURCE_PRODUCT_ABSTRACT_IDS);

        return $this;
    }

    /**
     * @module ProductsBackendApi|Url
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
     * @module ProductsBackendApi|Url
     *
     * @return int[]
     */
    public function getLocaleIds(): array
    {
        return $this->localeIds;
    }

    /**
     * @module ProductsBackendApi|Url
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
     * @module ProductsBackendApi|Url
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
     * @module ProductsBackendApi|Url
     *
     * @param string[]|null $urls
     *
     * @return $this
     */
    public function setUrls(array $urls = null)
    {
        if ($urls === null) {
            $urls = [];
        }

        $this->urls = [];

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
     * @module ProductsBackendApi|Url
     *
     * @return string[]
     */
    public function getUrls(): array
    {
        return $this->urls;
    }

    /**
     * @module ProductsBackendApi|Url
     *
     * @param string $url
     *
     * @return $this
     */
    public function addUrl(string $url)
    {
        $this->urls[] = $url;
        $this->modifiedProperties[self::URLS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrls()
    {
        $this->assertPropertyIsSet(self::URLS);

        return $this;
    }

    /**
     * @module ProductsBackendApi|Url
     *
     * @param int[]|null $notResourceProductAbstractIds
     *
     * @return $this
     */
    public function setNotResourceProductAbstractIds(array $notResourceProductAbstractIds = null)
    {
        if ($notResourceProductAbstractIds === null) {
            $notResourceProductAbstractIds = [];
        }

        $this->notResourceProductAbstractIds = [];

        foreach ($notResourceProductAbstractIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::NOT_RESOURCE_PRODUCT_ABSTRACT_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addNotResourceProductAbstractId(...$args);
        }

        $this->modifiedProperties[self::NOT_RESOURCE_PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi|Url
     *
     * @return int[]
     */
    public function getNotResourceProductAbstractIds(): array
    {
        return $this->notResourceProductAbstractIds;
    }

    /**
     * @module ProductsBackendApi|Url
     *
     * @param int $notResourceProductAbstractId
     *
     * @return $this
     */
    public function addNotResourceProductAbstractId(int $notResourceProductAbstractId)
    {
        $this->notResourceProductAbstractIds[] = $notResourceProductAbstractId;
        $this->modifiedProperties[self::NOT_RESOURCE_PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNotResourceProductAbstractIds()
    {
        $this->assertPropertyIsSet(self::NOT_RESOURCE_PRODUCT_ABSTRACT_IDS);

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
                case 'resourceProductAbstractIds':
                case 'localeIds':
                case 'urls':
                case 'notResourceProductAbstractIds':
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
                case 'resourceProductAbstractIds':
                case 'localeIds':
                case 'urls':
                case 'notResourceProductAbstractIds':
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
                case 'resourceProductAbstractIds':
                case 'localeIds':
                case 'urls':
                case 'notResourceProductAbstractIds':
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
            'resourceProductAbstractIds' => $this->resourceProductAbstractIds,
            'localeIds' => $this->localeIds,
            'urls' => $this->urls,
            'notResourceProductAbstractIds' => $this->notResourceProductAbstractIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'resource_product_abstract_ids' => $this->resourceProductAbstractIds,
            'locale_ids' => $this->localeIds,
            'urls' => $this->urls,
            'not_resource_product_abstract_ids' => $this->notResourceProductAbstractIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'resource_product_abstract_ids' => $this->resourceProductAbstractIds instanceof AbstractTransfer ? $this->resourceProductAbstractIds->toArray(true, false) : $this->resourceProductAbstractIds,
            'locale_ids' => $this->localeIds instanceof AbstractTransfer ? $this->localeIds->toArray(true, false) : $this->localeIds,
            'urls' => $this->urls instanceof AbstractTransfer ? $this->urls->toArray(true, false) : $this->urls,
            'not_resource_product_abstract_ids' => $this->notResourceProductAbstractIds instanceof AbstractTransfer ? $this->notResourceProductAbstractIds->toArray(true, false) : $this->notResourceProductAbstractIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'resourceProductAbstractIds' => $this->resourceProductAbstractIds instanceof AbstractTransfer ? $this->resourceProductAbstractIds->toArray(true, true) : $this->resourceProductAbstractIds,
            'localeIds' => $this->localeIds instanceof AbstractTransfer ? $this->localeIds->toArray(true, true) : $this->localeIds,
            'urls' => $this->urls instanceof AbstractTransfer ? $this->urls->toArray(true, true) : $this->urls,
            'notResourceProductAbstractIds' => $this->notResourceProductAbstractIds instanceof AbstractTransfer ? $this->notResourceProductAbstractIds->toArray(true, true) : $this->notResourceProductAbstractIds,
        ];
    }
}
