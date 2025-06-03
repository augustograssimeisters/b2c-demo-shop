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
class ProductConcreteConditionsTransfer extends AbstractTransfer
{
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
    protected $skus = [];

    /**
     * @var string[]
     */
    protected $localeNames = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
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
     * @module Product|ProductsBackendApi
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
     * @module Product|ProductsBackendApi
     *
     * @return string[]
     */
    public function getSkus(): array
    {
        return $this->skus;
    }

    /**
     * @module Product|ProductsBackendApi
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
     * @module Product|ProductsBackendApi
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
     * @module Product|ProductsBackendApi
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
     * @module Product|ProductsBackendApi
     *
     * @return string[]
     */
    public function getLocaleNames(): array
    {
        return $this->localeNames;
    }

    /**
     * @module Product|ProductsBackendApi
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
     * @module Product|ProductsBackendApi
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
            'skus' => $this->skus instanceof AbstractTransfer ? $this->skus->toArray(true, true) : $this->skus,
            'localeNames' => $this->localeNames instanceof AbstractTransfer ? $this->localeNames->toArray(true, true) : $this->localeNames,
        ];
    }
}
