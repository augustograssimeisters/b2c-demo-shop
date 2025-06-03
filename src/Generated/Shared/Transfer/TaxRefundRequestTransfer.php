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
class TaxRefundRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SALE = 'sale';

    /**
     * @var string
     */
    public const REPORTING_DATE = 'reportingDate';

    /**
     * @var string
     */
    public const AUTHORIZATION = 'authorization';

    /**
     * @var \Generated\Shared\Transfer\TaxAppSaleTransfer|null
     */
    protected $sale;

    /**
     * @var string|null
     */
    protected $reportingDate;

    /**
     * @var string|null
     */
    protected $authorization;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sale' => 'sale',
        'Sale' => 'sale',
        'reporting_date' => 'reportingDate',
        'reportingDate' => 'reportingDate',
        'ReportingDate' => 'reportingDate',
        'authorization' => 'authorization',
        'Authorization' => 'authorization',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SALE => [
            'type' => 'Generated\Shared\Transfer\TaxAppSaleTransfer',
            'type_shim' => null,
            'name_underscore' => 'sale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::REPORTING_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'reporting_date',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::AUTHORIZATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'authorization',
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
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppSaleTransfer|null $sale
     *
     * @return $this
     */
    public function setSale(?TaxAppSaleTransfer $sale = null)
    {
        $this->sale = $sale;
        $this->modifiedProperties[self::SALE] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \Generated\Shared\Transfer\TaxAppSaleTransfer|null
     */
    public function getSale(): ?TaxAppSaleTransfer
    {
        return $this->sale;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppSaleTransfer $sale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSaleOrFail(TaxAppSaleTransfer $sale)
    {
        return $this->setSale($sale);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TaxAppSaleTransfer
     */
    public function getSaleOrFail(): TaxAppSaleTransfer
    {
        if ($this->sale === null) {
            $this->throwNullValueException(static::SALE);
        }

        return $this->sale;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSale()
    {
        $this->assertPropertyIsSet(self::SALE);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|null $reportingDate
     *
     * @return $this
     */
    public function setReportingDate(?string $reportingDate = null)
    {
        $this->reportingDate = $reportingDate;
        $this->modifiedProperties[self::REPORTING_DATE] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getReportingDate(): ?string
    {
        return $this->reportingDate;
    }

    /**
     * @module TaxApp
     *
     * @param string $reportingDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReportingDateOrFail(string $reportingDate)
    {
        return $this->setReportingDate($reportingDate);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getReportingDateOrFail(): string
    {
        if ($this->reportingDate === null) {
            $this->throwNullValueException(static::REPORTING_DATE);
        }

        return $this->reportingDate;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReportingDate()
    {
        $this->assertPropertyIsSet(self::REPORTING_DATE);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|null $authorization
     *
     * @return $this
     */
    public function setAuthorization(?string $authorization = null)
    {
        $this->authorization = $authorization;
        $this->modifiedProperties[self::AUTHORIZATION] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getAuthorization(): ?string
    {
        return $this->authorization;
    }

    /**
     * @module TaxApp
     *
     * @param string $authorization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAuthorizationOrFail(string $authorization)
    {
        return $this->setAuthorization($authorization);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAuthorizationOrFail(): string
    {
        if ($this->authorization === null) {
            $this->throwNullValueException(static::AUTHORIZATION);
        }

        return $this->authorization;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAuthorization()
    {
        $this->assertPropertyIsSet(self::AUTHORIZATION);

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
                case 'reportingDate':
                case 'authorization':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'sale':
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
                case 'reportingDate':
                case 'authorization':
                    $values[$arrayKey] = $value;

                    break;
                case 'sale':
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
                case 'reportingDate':
                case 'authorization':
                    $values[$arrayKey] = $value;

                    break;
                case 'sale':
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
            'reportingDate' => $this->reportingDate,
            'authorization' => $this->authorization,
            'sale' => $this->sale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'reporting_date' => $this->reportingDate,
            'authorization' => $this->authorization,
            'sale' => $this->sale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'reporting_date' => $this->reportingDate instanceof AbstractTransfer ? $this->reportingDate->toArray(true, false) : $this->reportingDate,
            'authorization' => $this->authorization instanceof AbstractTransfer ? $this->authorization->toArray(true, false) : $this->authorization,
            'sale' => $this->sale instanceof AbstractTransfer ? $this->sale->toArray(true, false) : $this->sale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'reportingDate' => $this->reportingDate instanceof AbstractTransfer ? $this->reportingDate->toArray(true, true) : $this->reportingDate,
            'authorization' => $this->authorization instanceof AbstractTransfer ? $this->authorization->toArray(true, true) : $this->authorization,
            'sale' => $this->sale instanceof AbstractTransfer ? $this->sale->toArray(true, true) : $this->sale,
        ];
    }
}
