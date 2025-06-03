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
class TaxAppApiUrlsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUOTATION_URL = 'quotationUrl';

    /**
     * @var string
     */
    public const REFUNDS_URL = 'refundsUrl';

    /**
     * @var string|null
     */
    protected $quotationUrl;

    /**
     * @var string|null
     */
    protected $refundsUrl;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quotation_url' => 'quotationUrl',
        'quotationUrl' => 'quotationUrl',
        'QuotationUrl' => 'quotationUrl',
        'refunds_url' => 'refundsUrl',
        'refundsUrl' => 'refundsUrl',
        'RefundsUrl' => 'refundsUrl',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUOTATION_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quotation_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::REFUNDS_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'refunds_url',
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
     * @param string|null $quotationUrl
     *
     * @return $this
     */
    public function setQuotationUrl(?string $quotationUrl = null)
    {
        $this->quotationUrl = $quotationUrl;
        $this->modifiedProperties[self::QUOTATION_URL] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getQuotationUrl(): ?string
    {
        return $this->quotationUrl;
    }

    /**
     * @module TaxApp
     *
     * @param string $quotationUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuotationUrlOrFail(string $quotationUrl)
    {
        return $this->setQuotationUrl($quotationUrl);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuotationUrlOrFail(): string
    {
        if ($this->quotationUrl === null) {
            $this->throwNullValueException(static::QUOTATION_URL);
        }

        return $this->quotationUrl;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuotationUrl()
    {
        $this->assertPropertyIsSet(self::QUOTATION_URL);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|null $refundsUrl
     *
     * @return $this
     */
    public function setRefundsUrl(?string $refundsUrl = null)
    {
        $this->refundsUrl = $refundsUrl;
        $this->modifiedProperties[self::REFUNDS_URL] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getRefundsUrl(): ?string
    {
        return $this->refundsUrl;
    }

    /**
     * @module TaxApp
     *
     * @param string $refundsUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefundsUrlOrFail(string $refundsUrl)
    {
        return $this->setRefundsUrl($refundsUrl);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRefundsUrlOrFail(): string
    {
        if ($this->refundsUrl === null) {
            $this->throwNullValueException(static::REFUNDS_URL);
        }

        return $this->refundsUrl;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRefundsUrl()
    {
        $this->assertPropertyIsSet(self::REFUNDS_URL);

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
                case 'quotationUrl':
                case 'refundsUrl':
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
                case 'quotationUrl':
                case 'refundsUrl':
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
                case 'quotationUrl':
                case 'refundsUrl':
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
            'quotationUrl' => $this->quotationUrl,
            'refundsUrl' => $this->refundsUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'quotation_url' => $this->quotationUrl,
            'refunds_url' => $this->refundsUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'quotation_url' => $this->quotationUrl instanceof AbstractTransfer ? $this->quotationUrl->toArray(true, false) : $this->quotationUrl,
            'refunds_url' => $this->refundsUrl instanceof AbstractTransfer ? $this->refundsUrl->toArray(true, false) : $this->refundsUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'quotationUrl' => $this->quotationUrl instanceof AbstractTransfer ? $this->quotationUrl->toArray(true, true) : $this->quotationUrl,
            'refundsUrl' => $this->refundsUrl instanceof AbstractTransfer ? $this->refundsUrl->toArray(true, true) : $this->refundsUrl,
        ];
    }
}
