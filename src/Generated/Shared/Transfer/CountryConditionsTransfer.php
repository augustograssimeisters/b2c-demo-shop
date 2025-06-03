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
class CountryConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ISO2_CODES = 'iso2Codes';

    /**
     * @var string
     */
    public const WITH_REGIONS = 'withRegions';

    /**
     * @var string[]
     */
    protected $iso2Codes = [];

    /**
     * @var bool|null
     */
    protected $withRegions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'iso2_codes' => 'iso2Codes',
        'iso2Codes' => 'iso2Codes',
        'Iso2Codes' => 'iso2Codes',
        'with_regions' => 'withRegions',
        'withRegions' => 'withRegions',
        'WithRegions' => 'withRegions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ISO2_CODES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'iso2_codes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_REGIONS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_regions',
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
     * @module Country
     *
     * @param string[]|null $iso2Codes
     *
     * @return $this
     */
    public function setIso2Codes(array $iso2Codes = null)
    {
        if ($iso2Codes === null) {
            $iso2Codes = [];
        }

        $this->iso2Codes = [];

        foreach ($iso2Codes as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::ISO2_CODES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIso2Code(...$args);
        }

        $this->modifiedProperties[self::ISO2_CODES] = true;

        return $this;
    }

    /**
     * @module Country
     *
     * @return string[]
     */
    public function getIso2Codes(): array
    {
        return $this->iso2Codes;
    }

    /**
     * @module Country
     *
     * @param string $iso2Code
     *
     * @return $this
     */
    public function addIso2Code(string $iso2Code)
    {
        $this->iso2Codes[] = $iso2Code;
        $this->modifiedProperties[self::ISO2_CODES] = true;

        return $this;
    }

    /**
     * @module Country
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIso2Codes()
    {
        $this->assertPropertyIsSet(self::ISO2_CODES);

        return $this;
    }

    /**
     * @module Country
     *
     * @param bool|null $withRegions
     *
     * @return $this
     */
    public function setWithRegions(?bool $withRegions = null)
    {
        $this->withRegions = $withRegions;
        $this->modifiedProperties[self::WITH_REGIONS] = true;

        return $this;
    }

    /**
     * @module Country
     *
     * @return bool|null
     */
    public function getWithRegions(): ?bool
    {
        return $this->withRegions;
    }

    /**
     * @module Country
     *
     * @param bool $withRegions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithRegionsOrFail(bool $withRegions)
    {
        return $this->setWithRegions($withRegions);
    }

    /**
     * @module Country
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithRegionsOrFail(): bool
    {
        if ($this->withRegions === null) {
            $this->throwNullValueException(static::WITH_REGIONS);
        }

        return $this->withRegions;
    }

    /**
     * @module Country
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithRegions()
    {
        $this->assertPropertyIsSet(self::WITH_REGIONS);

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
                case 'iso2Codes':
                case 'withRegions':
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
                case 'iso2Codes':
                case 'withRegions':
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
                case 'iso2Codes':
                case 'withRegions':
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
            'iso2Codes' => $this->iso2Codes,
            'withRegions' => $this->withRegions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'iso2_codes' => $this->iso2Codes,
            'with_regions' => $this->withRegions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'iso2_codes' => $this->iso2Codes instanceof AbstractTransfer ? $this->iso2Codes->toArray(true, false) : $this->iso2Codes,
            'with_regions' => $this->withRegions instanceof AbstractTransfer ? $this->withRegions->toArray(true, false) : $this->withRegions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'iso2Codes' => $this->iso2Codes instanceof AbstractTransfer ? $this->iso2Codes->toArray(true, true) : $this->iso2Codes,
            'withRegions' => $this->withRegions instanceof AbstractTransfer ? $this->withRegions->toArray(true, true) : $this->withRegions,
        ];
    }
}
