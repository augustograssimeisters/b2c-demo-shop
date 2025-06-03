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
class TaxSetCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TAX_SET_CONDITIONS = 'taxSetConditions';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const WITH_TAX_RATES = 'withTaxRates';

    /**
     * @var \Generated\Shared\Transfer\TaxSetConditionsTransfer|null
     */
    protected $taxSetConditions;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var bool|null
     */
    protected $withTaxRates;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'tax_set_conditions' => 'taxSetConditions',
        'taxSetConditions' => 'taxSetConditions',
        'TaxSetConditions' => 'taxSetConditions',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'with_tax_rates' => 'withTaxRates',
        'withTaxRates' => 'withTaxRates',
        'WithTaxRates' => 'withTaxRates',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TAX_SET_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\TaxSetConditionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'tax_set_conditions',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\PaginationTransfer',
            'type_shim' => null,
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_TAX_RATES => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_tax_rates',
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
     * @module ProductsBackendApi|Tax
     *
     * @param \Generated\Shared\Transfer\TaxSetConditionsTransfer|null $taxSetConditions
     *
     * @return $this
     */
    public function setTaxSetConditions(?TaxSetConditionsTransfer $taxSetConditions = null)
    {
        $this->taxSetConditions = $taxSetConditions;
        $this->modifiedProperties[self::TAX_SET_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi|Tax
     *
     * @return \Generated\Shared\Transfer\TaxSetConditionsTransfer|null
     */
    public function getTaxSetConditions(): ?TaxSetConditionsTransfer
    {
        return $this->taxSetConditions;
    }

    /**
     * @module ProductsBackendApi|Tax
     *
     * @param \Generated\Shared\Transfer\TaxSetConditionsTransfer $taxSetConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxSetConditionsOrFail(TaxSetConditionsTransfer $taxSetConditions)
    {
        return $this->setTaxSetConditions($taxSetConditions);
    }

    /**
     * @module ProductsBackendApi|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TaxSetConditionsTransfer
     */
    public function getTaxSetConditionsOrFail(): TaxSetConditionsTransfer
    {
        if ($this->taxSetConditions === null) {
            $this->throwNullValueException(static::TAX_SET_CONDITIONS);
        }

        return $this->taxSetConditions;
    }

    /**
     * @module ProductsBackendApi|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxSetConditions()
    {
        $this->assertPropertyIsSet(self::TAX_SET_CONDITIONS);

        return $this;
    }

    /**
     * @module TaxStorage|Tax
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(?PaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module TaxStorage|Tax
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination(): ?PaginationTransfer
    {
        return $this->pagination;
    }

    /**
     * @module TaxStorage|Tax
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(PaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module TaxStorage|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer
     */
    public function getPaginationOrFail(): PaginationTransfer
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module TaxStorage|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

        return $this;
    }

    /**
     * @module Tax
     *
     * @param bool|null $withTaxRates
     *
     * @return $this
     */
    public function setWithTaxRates(?bool $withTaxRates = null)
    {
        $this->withTaxRates = $withTaxRates;
        $this->modifiedProperties[self::WITH_TAX_RATES] = true;

        return $this;
    }

    /**
     * @module Tax
     *
     * @return bool|null
     */
    public function getWithTaxRates(): ?bool
    {
        return $this->withTaxRates;
    }

    /**
     * @module Tax
     *
     * @param bool $withTaxRates
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithTaxRatesOrFail(bool $withTaxRates)
    {
        return $this->setWithTaxRates($withTaxRates);
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithTaxRatesOrFail(): bool
    {
        if ($this->withTaxRates === null) {
            $this->throwNullValueException(static::WITH_TAX_RATES);
        }

        return $this->withTaxRates;
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithTaxRates()
    {
        $this->assertPropertyIsSet(self::WITH_TAX_RATES);

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
                case 'withTaxRates':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'taxSetConditions':
                case 'pagination':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
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
                case 'withTaxRates':
                    $values[$arrayKey] = $value;

                    break;
                case 'taxSetConditions':
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'withTaxRates':
                    $values[$arrayKey] = $value;

                    break;
                case 'taxSetConditions':
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'withTaxRates' => $this->withTaxRates,
            'taxSetConditions' => $this->taxSetConditions,
            'pagination' => $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'with_tax_rates' => $this->withTaxRates,
            'tax_set_conditions' => $this->taxSetConditions,
            'pagination' => $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'with_tax_rates' => $this->withTaxRates instanceof AbstractTransfer ? $this->withTaxRates->toArray(true, false) : $this->withTaxRates,
            'tax_set_conditions' => $this->taxSetConditions instanceof AbstractTransfer ? $this->taxSetConditions->toArray(true, false) : $this->taxSetConditions,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'withTaxRates' => $this->withTaxRates instanceof AbstractTransfer ? $this->withTaxRates->toArray(true, true) : $this->withTaxRates,
            'taxSetConditions' => $this->taxSetConditions instanceof AbstractTransfer ? $this->taxSetConditions->toArray(true, true) : $this->taxSetConditions,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
        ];
    }
}
