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
class ProductAbstractConcreteCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_CONCRETES = 'productConcretes';

    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT_SKU = 'productAbstractSku';

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ProductConcreteTransfer>
     */
    protected $productConcretes;

    /**
     * @var string|null
     */
    protected $productAbstractSku;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_concretes' => 'productConcretes',
        'productConcretes' => 'productConcretes',
        'ProductConcretes' => 'productConcretes',
        'product_abstract_sku' => 'productAbstractSku',
        'productAbstractSku' => 'productAbstractSku',
        'ProductAbstractSku' => 'productAbstractSku',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_CONCRETES => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_concretes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
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
    ];

    /**
     * @module Product|ProductsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ProductConcreteTransfer> $productConcretes
     *
     * @return $this
     */
    public function setProductConcretes(ArrayObject $productConcretes)
    {
        $this->productConcretes = new ArrayObject();

        foreach ($productConcretes as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PRODUCT_CONCRETES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addProductConcrete(...$args);
        }

        $this->modifiedProperties[self::PRODUCT_CONCRETES] = true;

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ProductConcreteTransfer>
     */
    public function getProductConcretes(): ArrayObject
    {
        return $this->productConcretes;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcrete
     *
     * @return $this
     */
    public function addProductConcrete(ProductConcreteTransfer $productConcrete)
    {
        $this->productConcretes[] = $productConcrete;
        $this->modifiedProperties[self::PRODUCT_CONCRETES] = true;

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcretes()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_CONCRETES);

        return $this;
    }

    /**
     * @module Product|ProductsBackendApi
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
     * @module Product|ProductsBackendApi
     *
     * @return string|null
     */
    public function getProductAbstractSku(): ?string
    {
        return $this->productAbstractSku;
    }

    /**
     * @module Product|ProductsBackendApi
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
     * @module Product|ProductsBackendApi
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
     * @module Product|ProductsBackendApi
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
                case 'productConcretes':
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
                case 'productAbstractSku':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConcretes':
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
                case 'productAbstractSku':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConcretes':
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
        $this->productConcretes = $this->productConcretes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'productAbstractSku' => $this->productAbstractSku,
            'productConcretes' => $this->productConcretes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_abstract_sku' => $this->productAbstractSku,
            'product_concretes' => $this->productConcretes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_abstract_sku' => $this->productAbstractSku instanceof AbstractTransfer ? $this->productAbstractSku->toArray(true, false) : $this->productAbstractSku,
            'product_concretes' => $this->productConcretes instanceof AbstractTransfer ? $this->productConcretes->toArray(true, false) : $this->addValuesToCollection($this->productConcretes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productAbstractSku' => $this->productAbstractSku instanceof AbstractTransfer ? $this->productAbstractSku->toArray(true, true) : $this->productAbstractSku,
            'productConcretes' => $this->productConcretes instanceof AbstractTransfer ? $this->productConcretes->toArray(true, true) : $this->addValuesToCollection($this->productConcretes, true, true),
        ];
    }
}
