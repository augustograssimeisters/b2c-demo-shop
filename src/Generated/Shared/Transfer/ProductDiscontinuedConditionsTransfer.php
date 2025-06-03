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
class ProductDiscontinuedConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_IDS = 'productIds';

    /**
     * @var string
     */
    public const PRODUCT_DISCONTINUED_IDS = 'productDiscontinuedIds';

    /**
     * @var string
     */
    public const SKUS = 'skus';

    /**
     * @var int[]
     */
    protected $productIds = [];

    /**
     * @var int[]
     */
    protected $productDiscontinuedIds = [];

    /**
     * @var string[]
     */
    protected $skus = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_ids' => 'productIds',
        'productIds' => 'productIds',
        'ProductIds' => 'productIds',
        'product_discontinued_ids' => 'productDiscontinuedIds',
        'productDiscontinuedIds' => 'productDiscontinuedIds',
        'ProductDiscontinuedIds' => 'productDiscontinuedIds',
        'skus' => 'skus',
        'Skus' => 'skus',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'product_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PRODUCT_DISCONTINUED_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'product_discontinued_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
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
    ];

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @param int[]|null $productIds
     *
     * @return $this
     */
    public function setProductIds(array $productIds = null)
    {
        if ($productIds === null) {
            $productIds = [];
        }

        $this->productIds = [];

        foreach ($productIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PRODUCT_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdProduct(...$args);
        }

        $this->modifiedProperties[self::PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @return int[]
     */
    public function getProductIds(): array
    {
        return $this->productIds;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @param int $idProduct
     *
     * @return $this
     */
    public function addIdProduct(int $idProduct)
    {
        $this->productIds[] = $idProduct;
        $this->modifiedProperties[self::PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IDS);

        return $this;
    }

    /**
     * @module ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @param int[]|null $productDiscontinuedIds
     *
     * @return $this
     */
    public function setProductDiscontinuedIds(array $productDiscontinuedIds = null)
    {
        if ($productDiscontinuedIds === null) {
            $productDiscontinuedIds = [];
        }

        $this->productDiscontinuedIds = [];

        foreach ($productDiscontinuedIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PRODUCT_DISCONTINUED_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdProductDiscontinued(...$args);
        }

        $this->modifiedProperties[self::PRODUCT_DISCONTINUED_IDS] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @return int[]
     */
    public function getProductDiscontinuedIds(): array
    {
        return $this->productDiscontinuedIds;
    }

    /**
     * @module ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @param int $idProductDiscontinued
     *
     * @return $this
     */
    public function addIdProductDiscontinued(int $idProductDiscontinued)
    {
        $this->productDiscontinuedIds[] = $idProductDiscontinued;
        $this->modifiedProperties[self::PRODUCT_DISCONTINUED_IDS] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductDiscontinuedIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_DISCONTINUED_IDS);

        return $this;
    }

    /**
     * @module ProductDiscontinued
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
     * @module ProductDiscontinued
     *
     * @return string[]
     */
    public function getSkus(): array
    {
        return $this->skus;
    }

    /**
     * @module ProductDiscontinued
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
     * @module ProductDiscontinued
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
                case 'productIds':
                case 'productDiscontinuedIds':
                case 'skus':
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
                case 'productIds':
                case 'productDiscontinuedIds':
                case 'skus':
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
                case 'productIds':
                case 'productDiscontinuedIds':
                case 'skus':
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
            'productIds' => $this->productIds,
            'productDiscontinuedIds' => $this->productDiscontinuedIds,
            'skus' => $this->skus,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_ids' => $this->productIds,
            'product_discontinued_ids' => $this->productDiscontinuedIds,
            'skus' => $this->skus,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_ids' => $this->productIds instanceof AbstractTransfer ? $this->productIds->toArray(true, false) : $this->productIds,
            'product_discontinued_ids' => $this->productDiscontinuedIds instanceof AbstractTransfer ? $this->productDiscontinuedIds->toArray(true, false) : $this->productDiscontinuedIds,
            'skus' => $this->skus instanceof AbstractTransfer ? $this->skus->toArray(true, false) : $this->skus,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productIds' => $this->productIds instanceof AbstractTransfer ? $this->productIds->toArray(true, true) : $this->productIds,
            'productDiscontinuedIds' => $this->productDiscontinuedIds instanceof AbstractTransfer ? $this->productDiscontinuedIds->toArray(true, true) : $this->productDiscontinuedIds,
            'skus' => $this->skus instanceof AbstractTransfer ? $this->skus->toArray(true, true) : $this->skus,
        ];
    }
}
