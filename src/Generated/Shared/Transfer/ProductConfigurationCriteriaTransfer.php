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
class ProductConfigurationCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_CONDITIONS = 'productConfigurationConditions';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const SORT_COLLECTION = 'sortCollection';

    /**
     * @var \Generated\Shared\Transfer\ProductConfigurationConditionsTransfer|null
     */
    protected $productConfigurationConditions;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SortTransfer>
     */
    protected $sortCollection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_configuration_conditions' => 'productConfigurationConditions',
        'productConfigurationConditions' => 'productConfigurationConditions',
        'ProductConfigurationConditions' => 'productConfigurationConditions',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'sort_collection' => 'sortCollection',
        'sortCollection' => 'sortCollection',
        'SortCollection' => 'sortCollection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_CONFIGURATION_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\ProductConfigurationConditionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_configuration_conditions',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
        ],
        self::SORT_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\SortTransfer',
            'type_shim' => null,
            'name_underscore' => 'sort_collection',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\ProductConfigurationConditionsTransfer|null $productConfigurationConditions
     *
     * @return $this
     */
    public function setProductConfigurationConditions(ProductConfigurationConditionsTransfer $productConfigurationConditions = null)
    {
        $this->productConfigurationConditions = $productConfigurationConditions;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @return \Generated\Shared\Transfer\ProductConfigurationConditionsTransfer|null
     */
    public function getProductConfigurationConditions()
    {
        return $this->productConfigurationConditions;
    }

    /**
     * @module ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\ProductConfigurationConditionsTransfer $productConfigurationConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfigurationConditionsOrFail(ProductConfigurationConditionsTransfer $productConfigurationConditions)
    {
        return $this->setProductConfigurationConditions($productConfigurationConditions);
    }

    /**
     * @module ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConfigurationConditionsTransfer
     */
    public function getProductConfigurationConditionsOrFail()
    {
        if ($this->productConfigurationConditions === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_CONDITIONS);
        }

        return $this->productConfigurationConditions;
    }

    /**
     * @module ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfigurationConditions()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATION_CONDITIONS);

        return $this;
    }

    /**
     * @module ProductConfigurationStorage|ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(PaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationStorage|ProductConfiguration
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module ProductConfigurationStorage|ProductConfiguration
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
     * @module ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer
     */
    public function getPaginationOrFail()
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module ProductConfigurationStorage|ProductConfiguration
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
     * @module ProductConfiguration
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SortTransfer> $sortCollection
     *
     * @return $this
     */
    public function setSortCollection(ArrayObject $sortCollection)
    {
        $this->sortCollection = $sortCollection;
        $this->modifiedProperties[self::SORT_COLLECTION] = true;

        return $this;
    }

    /**
     * @module ProductConfiguration
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SortTransfer>
     */
    public function getSortCollection()
    {
        return $this->sortCollection;
    }

    /**
     * @module ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\SortTransfer $sort
     *
     * @return $this
     */
    public function addSort(SortTransfer $sort)
    {
        $this->sortCollection[] = $sort;
        $this->modifiedProperties[self::SORT_COLLECTION] = true;

        return $this;
    }

    /**
     * @module ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSortCollection()
    {
        $this->assertCollectionPropertyIsSet(self::SORT_COLLECTION);

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
                case 'productConfigurationConditions':
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
                case 'sortCollection':
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
                case 'productConfigurationConditions':
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'sortCollection':
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
                case 'productConfigurationConditions':
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'sortCollection':
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
        $this->sortCollection = $this->sortCollection ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'productConfigurationConditions' => $this->productConfigurationConditions,
            'pagination' => $this->pagination,
            'sortCollection' => $this->sortCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_configuration_conditions' => $this->productConfigurationConditions,
            'pagination' => $this->pagination,
            'sort_collection' => $this->sortCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_configuration_conditions' => $this->productConfigurationConditions instanceof AbstractTransfer ? $this->productConfigurationConditions->toArray(true, false) : $this->productConfigurationConditions,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'sort_collection' => $this->sortCollection instanceof AbstractTransfer ? $this->sortCollection->toArray(true, false) : $this->addValuesToCollection($this->sortCollection, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productConfigurationConditions' => $this->productConfigurationConditions instanceof AbstractTransfer ? $this->productConfigurationConditions->toArray(true, true) : $this->productConfigurationConditions,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'sortCollection' => $this->sortCollection instanceof AbstractTransfer ? $this->sortCollection->toArray(true, true) : $this->addValuesToCollection($this->sortCollection, true, true),
        ];
    }
}
