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
class ProductDiscontinuedCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_DISCONTINUED_CONDITIONS = 'productDiscontinuedConditions';

    /**
     * @var string
     */
    public const WITH_PRODUCT_DISCONTINIUED_NOTES = 'withProductDiscontiniuedNotes';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var \Generated\Shared\Transfer\ProductDiscontinuedConditionsTransfer|null
     */
    protected $productDiscontinuedConditions;

    /**
     * @var bool|null
     */
    protected $withProductDiscontiniuedNotes;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_discontinued_conditions' => 'productDiscontinuedConditions',
        'productDiscontinuedConditions' => 'productDiscontinuedConditions',
        'ProductDiscontinuedConditions' => 'productDiscontinuedConditions',
        'with_product_discontiniued_notes' => 'withProductDiscontiniuedNotes',
        'withProductDiscontiniuedNotes' => 'withProductDiscontiniuedNotes',
        'WithProductDiscontiniuedNotes' => 'withProductDiscontiniuedNotes',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_DISCONTINUED_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\ProductDiscontinuedConditionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_discontinued_conditions',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_PRODUCT_DISCONTINIUED_NOTES => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_product_discontiniued_notes',
            'is_collection' => false,
            'is_transfer' => false,
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
    ];

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @param \Generated\Shared\Transfer\ProductDiscontinuedConditionsTransfer|null $productDiscontinuedConditions
     *
     * @return $this
     */
    public function setProductDiscontinuedConditions(?ProductDiscontinuedConditionsTransfer $productDiscontinuedConditions = null)
    {
        $this->productDiscontinuedConditions = $productDiscontinuedConditions;
        $this->modifiedProperties[self::PRODUCT_DISCONTINUED_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @return \Generated\Shared\Transfer\ProductDiscontinuedConditionsTransfer|null
     */
    public function getProductDiscontinuedConditions(): ?ProductDiscontinuedConditionsTransfer
    {
        return $this->productDiscontinuedConditions;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @param \Generated\Shared\Transfer\ProductDiscontinuedConditionsTransfer $productDiscontinuedConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductDiscontinuedConditionsOrFail(ProductDiscontinuedConditionsTransfer $productDiscontinuedConditions)
    {
        return $this->setProductDiscontinuedConditions($productDiscontinuedConditions);
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductDiscontinuedConditionsTransfer
     */
    public function getProductDiscontinuedConditionsOrFail(): ProductDiscontinuedConditionsTransfer
    {
        if ($this->productDiscontinuedConditions === null) {
            $this->throwNullValueException(static::PRODUCT_DISCONTINUED_CONDITIONS);
        }

        return $this->productDiscontinuedConditions;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductDiscontinuedConditions()
    {
        $this->assertPropertyIsSet(self::PRODUCT_DISCONTINUED_CONDITIONS);

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @param bool|null $withProductDiscontiniuedNotes
     *
     * @return $this
     */
    public function setWithProductDiscontiniuedNotes(?bool $withProductDiscontiniuedNotes = null)
    {
        $this->withProductDiscontiniuedNotes = $withProductDiscontiniuedNotes;
        $this->modifiedProperties[self::WITH_PRODUCT_DISCONTINIUED_NOTES] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @return bool|null
     */
    public function getWithProductDiscontiniuedNotes(): ?bool
    {
        return $this->withProductDiscontiniuedNotes;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @param bool $withProductDiscontiniuedNotes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithProductDiscontiniuedNotesOrFail(bool $withProductDiscontiniuedNotes)
    {
        return $this->setWithProductDiscontiniuedNotes($withProductDiscontiniuedNotes);
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithProductDiscontiniuedNotesOrFail(): bool
    {
        if ($this->withProductDiscontiniuedNotes === null) {
            $this->throwNullValueException(static::WITH_PRODUCT_DISCONTINIUED_NOTES);
        }

        return $this->withProductDiscontiniuedNotes;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithProductDiscontiniuedNotes()
    {
        $this->assertPropertyIsSet(self::WITH_PRODUCT_DISCONTINIUED_NOTES);

        return $this;
    }

    /**
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
     * @module ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination(): ?PaginationTransfer
    {
        return $this->pagination;
    }

    /**
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
                case 'withProductDiscontiniuedNotes':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productDiscontinuedConditions':
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
                case 'withProductDiscontiniuedNotes':
                    $values[$arrayKey] = $value;

                    break;
                case 'productDiscontinuedConditions':
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
                case 'withProductDiscontiniuedNotes':
                    $values[$arrayKey] = $value;

                    break;
                case 'productDiscontinuedConditions':
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
            'withProductDiscontiniuedNotes' => $this->withProductDiscontiniuedNotes,
            'productDiscontinuedConditions' => $this->productDiscontinuedConditions,
            'pagination' => $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'with_product_discontiniued_notes' => $this->withProductDiscontiniuedNotes,
            'product_discontinued_conditions' => $this->productDiscontinuedConditions,
            'pagination' => $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'with_product_discontiniued_notes' => $this->withProductDiscontiniuedNotes instanceof AbstractTransfer ? $this->withProductDiscontiniuedNotes->toArray(true, false) : $this->withProductDiscontiniuedNotes,
            'product_discontinued_conditions' => $this->productDiscontinuedConditions instanceof AbstractTransfer ? $this->productDiscontinuedConditions->toArray(true, false) : $this->productDiscontinuedConditions,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'withProductDiscontiniuedNotes' => $this->withProductDiscontiniuedNotes instanceof AbstractTransfer ? $this->withProductDiscontiniuedNotes->toArray(true, true) : $this->withProductDiscontiniuedNotes,
            'productDiscontinuedConditions' => $this->productDiscontinuedConditions instanceof AbstractTransfer ? $this->productDiscontinuedConditions->toArray(true, true) : $this->productDiscontinuedConditions,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
        ];
    }
}
