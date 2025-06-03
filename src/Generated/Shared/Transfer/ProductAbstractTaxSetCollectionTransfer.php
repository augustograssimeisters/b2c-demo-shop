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
class ProductAbstractTaxSetCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT_SKU = 'productAbstractSku';

    /**
     * @var string
     */
    public const TAX_SET = 'taxSet';

    /**
     * @var string|null
     */
    protected $productAbstractSku;

    /**
     * @var \Generated\Shared\Transfer\TaxSetTransfer|null
     */
    protected $taxSet;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_abstract_sku' => 'productAbstractSku',
        'productAbstractSku' => 'productAbstractSku',
        'ProductAbstractSku' => 'productAbstractSku',
        'tax_set' => 'taxSet',
        'taxSet' => 'taxSet',
        'TaxSet' => 'taxSet',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_ABSTRACT_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_abstract_sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::TAX_SET => [
            'type' => 'Generated\Shared\Transfer\TaxSetTransfer',
            'type_shim' => null,
            'name_underscore' => 'tax_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @param string|null $productAbstractSku
     *
     * @return $this
     */
    public function setProductAbstractSku(?string $productAbstractSku = null)
    {
        $this->productAbstractSku = $productAbstractSku;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_SKU] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @return string|null
     */
    public function getProductAbstractSku(): ?string
    {
        return $this->productAbstractSku;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @param string $productAbstractSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAbstractSkuOrFail(string $productAbstractSku)
    {
        return $this->setProductAbstractSku($productAbstractSku);
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductAbstractSkuOrFail(): string
    {
        if ($this->productAbstractSku === null) {
            $this->throwNullValueException(static::PRODUCT_ABSTRACT_SKU);
        }

        return $this->productAbstractSku;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstractSku()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT_SKU);

        return $this;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @param \Generated\Shared\Transfer\TaxSetTransfer|null $taxSet
     *
     * @return $this
     */
    public function setTaxSet(?TaxSetTransfer $taxSet = null)
    {
        $this->taxSet = $taxSet;
        $this->modifiedProperties[self::TAX_SET] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @return \Generated\Shared\Transfer\TaxSetTransfer|null
     */
    public function getTaxSet(): ?TaxSetTransfer
    {
        return $this->taxSet;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @param \Generated\Shared\Transfer\TaxSetTransfer $taxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxSetOrFail(TaxSetTransfer $taxSet)
    {
        return $this->setTaxSet($taxSet);
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TaxSetTransfer
     */
    public function getTaxSetOrFail(): TaxSetTransfer
    {
        if ($this->taxSet === null) {
            $this->throwNullValueException(static::TAX_SET);
        }

        return $this->taxSet;
    }

    /**
     * @module ProductsBackendApi|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxSet()
    {
        $this->assertPropertyIsSet(self::TAX_SET);

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
                case 'productAbstractSku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'taxSet':
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
                case 'productAbstractSku':
                    $values[$arrayKey] = $value;

                    break;
                case 'taxSet':
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
                case 'productAbstractSku':
                    $values[$arrayKey] = $value;

                    break;
                case 'taxSet':
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
            'productAbstractSku' => $this->productAbstractSku,
            'taxSet' => $this->taxSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_abstract_sku' => $this->productAbstractSku,
            'tax_set' => $this->taxSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_abstract_sku' => $this->productAbstractSku instanceof AbstractTransfer ? $this->productAbstractSku->toArray(true, false) : $this->productAbstractSku,
            'tax_set' => $this->taxSet instanceof AbstractTransfer ? $this->taxSet->toArray(true, false) : $this->taxSet,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productAbstractSku' => $this->productAbstractSku instanceof AbstractTransfer ? $this->productAbstractSku->toArray(true, true) : $this->productAbstractSku,
            'taxSet' => $this->taxSet instanceof AbstractTransfer ? $this->taxSet->toArray(true, true) : $this->taxSet,
        ];
    }
}
