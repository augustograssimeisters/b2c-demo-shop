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
class ProductConfigurationAggregationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_COUNT = 'productConfigurationCount';

    /**
     * @var string
     */
    public const PRODUCT_CONCRETE_COUNT = 'productConcreteCount';

    /**
     * @var int|null
     */
    protected $productConfigurationCount;

    /**
     * @var int|null
     */
    protected $productConcreteCount;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_configuration_count' => 'productConfigurationCount',
        'productConfigurationCount' => 'productConfigurationCount',
        'ProductConfigurationCount' => 'productConfigurationCount',
        'product_concrete_count' => 'productConcreteCount',
        'productConcreteCount' => 'productConcreteCount',
        'ProductConcreteCount' => 'productConcreteCount',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_CONFIGURATION_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'product_configuration_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONCRETE_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'product_concrete_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductConfigurationGui
     *
     * @param int|null $productConfigurationCount
     *
     * @return $this
     */
    public function setProductConfigurationCount($productConfigurationCount)
    {
        $this->productConfigurationCount = $productConfigurationCount;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_COUNT] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationGui
     *
     * @return int|null
     */
    public function getProductConfigurationCount()
    {
        return $this->productConfigurationCount;
    }

    /**
     * @module ProductConfigurationGui
     *
     * @param int|null $productConfigurationCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfigurationCountOrFail($productConfigurationCount)
    {
        if ($productConfigurationCount === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_COUNT);
        }

        return $this->setProductConfigurationCount($productConfigurationCount);
    }

    /**
     * @module ProductConfigurationGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getProductConfigurationCountOrFail()
    {
        if ($this->productConfigurationCount === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_COUNT);
        }

        return $this->productConfigurationCount;
    }

    /**
     * @module ProductConfigurationGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfigurationCount()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATION_COUNT);

        return $this;
    }

    /**
     * @module ProductConfigurationGui
     *
     * @param int|null $productConcreteCount
     *
     * @return $this
     */
    public function setProductConcreteCount($productConcreteCount)
    {
        $this->productConcreteCount = $productConcreteCount;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_COUNT] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationGui
     *
     * @return int|null
     */
    public function getProductConcreteCount()
    {
        return $this->productConcreteCount;
    }

    /**
     * @module ProductConfigurationGui
     *
     * @param int|null $productConcreteCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConcreteCountOrFail($productConcreteCount)
    {
        if ($productConcreteCount === null) {
            $this->throwNullValueException(static::PRODUCT_CONCRETE_COUNT);
        }

        return $this->setProductConcreteCount($productConcreteCount);
    }

    /**
     * @module ProductConfigurationGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getProductConcreteCountOrFail()
    {
        if ($this->productConcreteCount === null) {
            $this->throwNullValueException(static::PRODUCT_CONCRETE_COUNT);
        }

        return $this->productConcreteCount;
    }

    /**
     * @module ProductConfigurationGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcreteCount()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONCRETE_COUNT);

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
                case 'productConfigurationCount':
                case 'productConcreteCount':
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
                case 'productConfigurationCount':
                case 'productConcreteCount':
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
                case 'productConfigurationCount':
                case 'productConcreteCount':
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
            'productConfigurationCount' => $this->productConfigurationCount,
            'productConcreteCount' => $this->productConcreteCount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_configuration_count' => $this->productConfigurationCount,
            'product_concrete_count' => $this->productConcreteCount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_configuration_count' => $this->productConfigurationCount instanceof AbstractTransfer ? $this->productConfigurationCount->toArray(true, false) : $this->productConfigurationCount,
            'product_concrete_count' => $this->productConcreteCount instanceof AbstractTransfer ? $this->productConcreteCount->toArray(true, false) : $this->productConcreteCount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productConfigurationCount' => $this->productConfigurationCount instanceof AbstractTransfer ? $this->productConfigurationCount->toArray(true, true) : $this->productConfigurationCount,
            'productConcreteCount' => $this->productConcreteCount instanceof AbstractTransfer ? $this->productConcreteCount->toArray(true, true) : $this->productConcreteCount,
        ];
    }
}
