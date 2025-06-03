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
class StockConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const STOCK_IDS = 'stockIds';

    /**
     * @var string
     */
    public const UUIDS = 'uuids';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const STORE_NAMES = 'storeNames';

    /**
     * @var string
     */
    public const STOCK_NAMES = 'stockNames';

    /**
     * @var int[]
     */
    protected $stockIds = [];

    /**
     * @var string[]
     */
    protected $uuids = [];

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var string[]
     */
    protected $storeNames = [];

    /**
     * @var string[]
     */
    protected $stockNames = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'stock_ids' => 'stockIds',
        'stockIds' => 'stockIds',
        'StockIds' => 'stockIds',
        'uuids' => 'uuids',
        'Uuids' => 'uuids',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'store_names' => 'storeNames',
        'storeNames' => 'storeNames',
        'StoreNames' => 'storeNames',
        'stock_names' => 'stockNames',
        'stockNames' => 'stockNames',
        'StockNames' => 'stockNames',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::STOCK_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'stock_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'uuids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::STORE_NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'store_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::STOCK_NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'stock_names',
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
     * @module PickingListsBackendApi|PickingListsWarehousesBackendApi|Stock|WarehouseUser
     *
     * @param int[]|null $stockIds
     *
     * @return $this
     */
    public function setStockIds(array $stockIds = null)
    {
        if ($stockIds === null) {
            $stockIds = [];
        }

        $this->stockIds = [];

        foreach ($stockIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::STOCK_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdStock(...$args);
        }

        $this->modifiedProperties[self::STOCK_IDS] = true;

        return $this;
    }

    /**
     * @module PickingListsBackendApi|PickingListsWarehousesBackendApi|Stock|WarehouseUser
     *
     * @return int[]
     */
    public function getStockIds(): array
    {
        return $this->stockIds;
    }

    /**
     * @module PickingListsBackendApi|PickingListsWarehousesBackendApi|Stock|WarehouseUser
     *
     * @param int $idStock
     *
     * @return $this
     */
    public function addIdStock(int $idStock)
    {
        $this->stockIds[] = $idStock;
        $this->modifiedProperties[self::STOCK_IDS] = true;

        return $this;
    }

    /**
     * @module PickingListsBackendApi|PickingListsWarehousesBackendApi|Stock|WarehouseUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStockIds()
    {
        $this->assertPropertyIsSet(self::STOCK_IDS);

        return $this;
    }

    /**
     * @module PickingListsWarehousesBackendApi|Stock|WarehouseUser
     *
     * @param string[]|null $uuids
     *
     * @return $this
     */
    public function setUuids(array $uuids = null)
    {
        if ($uuids === null) {
            $uuids = [];
        }

        $this->uuids = [];

        foreach ($uuids as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::UUIDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addUuid(...$args);
        }

        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingListsWarehousesBackendApi|Stock|WarehouseUser
     *
     * @return string[]
     */
    public function getUuids(): array
    {
        return $this->uuids;
    }

    /**
     * @module PickingListsWarehousesBackendApi|Stock|WarehouseUser
     *
     * @param string $uuid
     *
     * @return $this
     */
    public function addUuid(string $uuid)
    {
        $this->uuids[] = $uuid;
        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingListsWarehousesBackendApi|Stock|WarehouseUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuids()
    {
        $this->assertPropertyIsSet(self::UUIDS);

        return $this;
    }

    /**
     * @module Stock
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive(?bool $isActive = null)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module Stock
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @module Stock
     *
     * @param bool $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail(bool $isActive)
    {
        return $this->setIsActive($isActive);
    }

    /**
     * @module Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail(): bool
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module Stock
     *
     * @param string[]|null $storeNames
     *
     * @return $this
     */
    public function setStoreNames(array $storeNames = null)
    {
        if ($storeNames === null) {
            $storeNames = [];
        }

        $this->storeNames = [];

        foreach ($storeNames as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::STORE_NAMES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addStoreName(...$args);
        }

        $this->modifiedProperties[self::STORE_NAMES] = true;

        return $this;
    }

    /**
     * @module Stock
     *
     * @return string[]
     */
    public function getStoreNames(): array
    {
        return $this->storeNames;
    }

    /**
     * @module Stock
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function addStoreName(string $storeName)
    {
        $this->storeNames[] = $storeName;
        $this->modifiedProperties[self::STORE_NAMES] = true;

        return $this;
    }

    /**
     * @module Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreNames()
    {
        $this->assertPropertyIsSet(self::STORE_NAMES);

        return $this;
    }

    /**
     * @module Stock
     *
     * @param string[]|null $stockNames
     *
     * @return $this
     */
    public function setStockNames(array $stockNames = null)
    {
        if ($stockNames === null) {
            $stockNames = [];
        }

        $this->stockNames = [];

        foreach ($stockNames as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::STOCK_NAMES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addStockName(...$args);
        }

        $this->modifiedProperties[self::STOCK_NAMES] = true;

        return $this;
    }

    /**
     * @module Stock
     *
     * @return string[]
     */
    public function getStockNames(): array
    {
        return $this->stockNames;
    }

    /**
     * @module Stock
     *
     * @param string $stockName
     *
     * @return $this
     */
    public function addStockName(string $stockName)
    {
        $this->stockNames[] = $stockName;
        $this->modifiedProperties[self::STOCK_NAMES] = true;

        return $this;
    }

    /**
     * @module Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStockNames()
    {
        $this->assertPropertyIsSet(self::STOCK_NAMES);

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
                case 'stockIds':
                case 'uuids':
                case 'isActive':
                case 'storeNames':
                case 'stockNames':
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
                case 'stockIds':
                case 'uuids':
                case 'isActive':
                case 'storeNames':
                case 'stockNames':
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
                case 'stockIds':
                case 'uuids':
                case 'isActive':
                case 'storeNames':
                case 'stockNames':
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
            'stockIds' => $this->stockIds,
            'uuids' => $this->uuids,
            'isActive' => $this->isActive,
            'storeNames' => $this->storeNames,
            'stockNames' => $this->stockNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'stock_ids' => $this->stockIds,
            'uuids' => $this->uuids,
            'is_active' => $this->isActive,
            'store_names' => $this->storeNames,
            'stock_names' => $this->stockNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'stock_ids' => $this->stockIds instanceof AbstractTransfer ? $this->stockIds->toArray(true, false) : $this->stockIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, false) : $this->uuids,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'store_names' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, false) : $this->storeNames,
            'stock_names' => $this->stockNames instanceof AbstractTransfer ? $this->stockNames->toArray(true, false) : $this->stockNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'stockIds' => $this->stockIds instanceof AbstractTransfer ? $this->stockIds->toArray(true, true) : $this->stockIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, true) : $this->uuids,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'storeNames' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, true) : $this->storeNames,
            'stockNames' => $this->stockNames instanceof AbstractTransfer ? $this->stockNames->toArray(true, true) : $this->stockNames,
        ];
    }
}
