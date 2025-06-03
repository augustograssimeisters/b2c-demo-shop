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
class ApiStoreAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DEFAULT_CURRENCY = 'defaultCurrency';

    /**
     * @var string
     */
    public const DEFAULT_LOCALE = 'defaultLocale';

    /**
     * @var string
     */
    public const CURRENCIES = 'currencies';

    /**
     * @var string
     */
    public const LOCALES = 'locales';

    /**
     * @var string
     */
    public const COUNTRIES = 'countries';

    /**
     * @var string|null
     */
    protected $defaultCurrency;

    /**
     * @var string|null
     */
    protected $defaultLocale;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ApiStoreCurrencyAttributesTransfer>
     */
    protected $currencies;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ApiStoreLocaleAttributesTransfer>
     */
    protected $locales;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ApiStoreCountryAttributesTransfer>
     */
    protected $countries;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'default_currency' => 'defaultCurrency',
        'defaultCurrency' => 'defaultCurrency',
        'DefaultCurrency' => 'defaultCurrency',
        'default_locale' => 'defaultLocale',
        'defaultLocale' => 'defaultLocale',
        'DefaultLocale' => 'defaultLocale',
        'currencies' => 'currencies',
        'Currencies' => 'currencies',
        'locales' => 'locales',
        'Locales' => 'locales',
        'countries' => 'countries',
        'Countries' => 'countries',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DEFAULT_CURRENCY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_currency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::DEFAULT_LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CURRENCIES => [
            'type' => 'Generated\Shared\Transfer\ApiStoreCurrencyAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'currencies',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::LOCALES => [
            'type' => 'Generated\Shared\Transfer\ApiStoreLocaleAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'locales',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::COUNTRIES => [
            'type' => 'Generated\Shared\Transfer\ApiStoreCountryAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'countries',
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
     * @module StoresApi
     *
     * @param string|null $defaultCurrency
     *
     * @return $this
     */
    public function setDefaultCurrency(?string $defaultCurrency = null)
    {
        $this->defaultCurrency = $defaultCurrency;
        $this->modifiedProperties[self::DEFAULT_CURRENCY] = true;

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @return string|null
     */
    public function getDefaultCurrency(): ?string
    {
        return $this->defaultCurrency;
    }

    /**
     * @module StoresApi
     *
     * @param string $defaultCurrency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultCurrencyOrFail(string $defaultCurrency)
    {
        return $this->setDefaultCurrency($defaultCurrency);
    }

    /**
     * @module StoresApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultCurrencyOrFail(): string
    {
        if ($this->defaultCurrency === null) {
            $this->throwNullValueException(static::DEFAULT_CURRENCY);
        }

        return $this->defaultCurrency;
    }

    /**
     * @module StoresApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultCurrency()
    {
        $this->assertPropertyIsSet(self::DEFAULT_CURRENCY);

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @param string|null $defaultLocale
     *
     * @return $this
     */
    public function setDefaultLocale(?string $defaultLocale = null)
    {
        $this->defaultLocale = $defaultLocale;
        $this->modifiedProperties[self::DEFAULT_LOCALE] = true;

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @return string|null
     */
    public function getDefaultLocale(): ?string
    {
        return $this->defaultLocale;
    }

    /**
     * @module StoresApi
     *
     * @param string $defaultLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultLocaleOrFail(string $defaultLocale)
    {
        return $this->setDefaultLocale($defaultLocale);
    }

    /**
     * @module StoresApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultLocaleOrFail(): string
    {
        if ($this->defaultLocale === null) {
            $this->throwNullValueException(static::DEFAULT_LOCALE);
        }

        return $this->defaultLocale;
    }

    /**
     * @module StoresApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultLocale()
    {
        $this->assertPropertyIsSet(self::DEFAULT_LOCALE);

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ApiStoreCurrencyAttributesTransfer> $currencies
     *
     * @return $this
     */
    public function setCurrencies(ArrayObject $currencies)
    {
        $this->currencies = new ArrayObject();

        foreach ($currencies as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::CURRENCIES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addCurrency(...$args);
        }

        $this->modifiedProperties[self::CURRENCIES] = true;

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ApiStoreCurrencyAttributesTransfer>
     */
    public function getCurrencies(): ArrayObject
    {
        return $this->currencies;
    }

    /**
     * @module StoresApi
     *
     * @param \Generated\Shared\Transfer\ApiStoreCurrencyAttributesTransfer $currency
     *
     * @return $this
     */
    public function addCurrency(ApiStoreCurrencyAttributesTransfer $currency)
    {
        $this->currencies[] = $currency;
        $this->modifiedProperties[self::CURRENCIES] = true;

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencies()
    {
        $this->assertCollectionPropertyIsSet(self::CURRENCIES);

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ApiStoreLocaleAttributesTransfer> $locales
     *
     * @return $this
     */
    public function setLocales(ArrayObject $locales)
    {
        $this->locales = new ArrayObject();

        foreach ($locales as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::LOCALES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addLocale(...$args);
        }

        $this->modifiedProperties[self::LOCALES] = true;

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ApiStoreLocaleAttributesTransfer>
     */
    public function getLocales(): ArrayObject
    {
        return $this->locales;
    }

    /**
     * @module StoresApi
     *
     * @param \Generated\Shared\Transfer\ApiStoreLocaleAttributesTransfer $locale
     *
     * @return $this
     */
    public function addLocale(ApiStoreLocaleAttributesTransfer $locale)
    {
        $this->locales[] = $locale;
        $this->modifiedProperties[self::LOCALES] = true;

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocales()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALES);

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ApiStoreCountryAttributesTransfer> $countries
     *
     * @return $this
     */
    public function setCountries(ArrayObject $countries)
    {
        $this->countries = new ArrayObject();

        foreach ($countries as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::COUNTRIES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addCountry(...$args);
        }

        $this->modifiedProperties[self::COUNTRIES] = true;

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ApiStoreCountryAttributesTransfer>
     */
    public function getCountries(): ArrayObject
    {
        return $this->countries;
    }

    /**
     * @module StoresApi
     *
     * @param \Generated\Shared\Transfer\ApiStoreCountryAttributesTransfer $country
     *
     * @return $this
     */
    public function addCountry(ApiStoreCountryAttributesTransfer $country)
    {
        $this->countries[] = $country;
        $this->modifiedProperties[self::COUNTRIES] = true;

        return $this;
    }

    /**
     * @module StoresApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCountries()
    {
        $this->assertCollectionPropertyIsSet(self::COUNTRIES);

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
                case 'defaultCurrency':
                case 'defaultLocale':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'currencies':
                case 'locales':
                case 'countries':
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
                case 'defaultCurrency':
                case 'defaultLocale':
                    $values[$arrayKey] = $value;

                    break;
                case 'currencies':
                case 'locales':
                case 'countries':
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
                case 'defaultCurrency':
                case 'defaultLocale':
                    $values[$arrayKey] = $value;

                    break;
                case 'currencies':
                case 'locales':
                case 'countries':
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
        $this->currencies = $this->currencies ?: new ArrayObject();
        $this->locales = $this->locales ?: new ArrayObject();
        $this->countries = $this->countries ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'defaultCurrency' => $this->defaultCurrency,
            'defaultLocale' => $this->defaultLocale,
            'currencies' => $this->currencies,
            'locales' => $this->locales,
            'countries' => $this->countries,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'default_currency' => $this->defaultCurrency,
            'default_locale' => $this->defaultLocale,
            'currencies' => $this->currencies,
            'locales' => $this->locales,
            'countries' => $this->countries,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'default_currency' => $this->defaultCurrency instanceof AbstractTransfer ? $this->defaultCurrency->toArray(true, false) : $this->defaultCurrency,
            'default_locale' => $this->defaultLocale instanceof AbstractTransfer ? $this->defaultLocale->toArray(true, false) : $this->defaultLocale,
            'currencies' => $this->currencies instanceof AbstractTransfer ? $this->currencies->toArray(true, false) : $this->addValuesToCollection($this->currencies, true, false),
            'locales' => $this->locales instanceof AbstractTransfer ? $this->locales->toArray(true, false) : $this->addValuesToCollection($this->locales, true, false),
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, false) : $this->addValuesToCollection($this->countries, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'defaultCurrency' => $this->defaultCurrency instanceof AbstractTransfer ? $this->defaultCurrency->toArray(true, true) : $this->defaultCurrency,
            'defaultLocale' => $this->defaultLocale instanceof AbstractTransfer ? $this->defaultLocale->toArray(true, true) : $this->defaultLocale,
            'currencies' => $this->currencies instanceof AbstractTransfer ? $this->currencies->toArray(true, true) : $this->addValuesToCollection($this->currencies, true, true),
            'locales' => $this->locales instanceof AbstractTransfer ? $this->locales->toArray(true, true) : $this->addValuesToCollection($this->locales, true, true),
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, true) : $this->addValuesToCollection($this->countries, true, true),
        ];
    }
}
