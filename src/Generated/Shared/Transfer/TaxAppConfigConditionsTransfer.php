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
class TaxAppConfigConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const APPLICATION_IDS = 'applicationIds';

    /**
     * @var string
     */
    public const VENDOR_CODES = 'vendorCodes';

    /**
     * @var string
     */
    public const STORE_REFERENCES = 'storeReferences';

    /**
     * @var string
     */
    public const FK_STORES = 'fkStores';

    /**
     * @var string[]
     */
    protected $applicationIds = [];

    /**
     * @var string[]
     */
    protected $vendorCodes = [];

    /**
     * @var string[]
     */
    protected $storeReferences = [];

    /**
     * @var int[]
     */
    protected $fkStores = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'application_ids' => 'applicationIds',
        'applicationIds' => 'applicationIds',
        'ApplicationIds' => 'applicationIds',
        'vendor_codes' => 'vendorCodes',
        'vendorCodes' => 'vendorCodes',
        'VendorCodes' => 'vendorCodes',
        'store_references' => 'storeReferences',
        'storeReferences' => 'storeReferences',
        'StoreReferences' => 'storeReferences',
        'fk_stores' => 'fkStores',
        'fkStores' => 'fkStores',
        'FkStores' => 'fkStores',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::APPLICATION_IDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'application_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::VENDOR_CODES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'vendor_codes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::STORE_REFERENCES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'store_references',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::FK_STORES => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'fk_stores',
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
     * @param string[]|null $applicationIds
     *
     * @return $this
     */
    public function setApplicationIds(array $applicationIds = null)
    {
        if ($applicationIds === null) {
            $applicationIds = [];
        }

        $this->applicationIds = [];

        foreach ($applicationIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::APPLICATION_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addApplicationId(...$args);
        }

        $this->modifiedProperties[self::APPLICATION_IDS] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string[]
     */
    public function getApplicationIds(): array
    {
        return $this->applicationIds;
    }

    /**
     * @module TaxApp
     *
     * @param string $applicationId
     *
     * @return $this
     */
    public function addApplicationId(string $applicationId)
    {
        $this->applicationIds[] = $applicationId;
        $this->modifiedProperties[self::APPLICATION_IDS] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApplicationIds()
    {
        $this->assertPropertyIsSet(self::APPLICATION_IDS);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string[]|null $vendorCodes
     *
     * @return $this
     */
    public function setVendorCodes(array $vendorCodes = null)
    {
        if ($vendorCodes === null) {
            $vendorCodes = [];
        }

        $this->vendorCodes = [];

        foreach ($vendorCodes as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::VENDOR_CODES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addVendorCode(...$args);
        }

        $this->modifiedProperties[self::VENDOR_CODES] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string[]
     */
    public function getVendorCodes(): array
    {
        return $this->vendorCodes;
    }

    /**
     * @module TaxApp
     *
     * @param string $vendorCode
     *
     * @return $this
     */
    public function addVendorCode(string $vendorCode)
    {
        $this->vendorCodes[] = $vendorCode;
        $this->modifiedProperties[self::VENDOR_CODES] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVendorCodes()
    {
        $this->assertPropertyIsSet(self::VENDOR_CODES);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string[]|null $storeReferences
     *
     * @return $this
     */
    public function setStoreReferences(array $storeReferences = null)
    {
        if ($storeReferences === null) {
            $storeReferences = [];
        }

        $this->storeReferences = [];

        foreach ($storeReferences as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::STORE_REFERENCES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addStoreReference(...$args);
        }

        $this->modifiedProperties[self::STORE_REFERENCES] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string[]
     */
    public function getStoreReferences(): array
    {
        return $this->storeReferences;
    }

    /**
     * @module TaxApp
     *
     * @param string $storeReference
     *
     * @return $this
     */
    public function addStoreReference(string $storeReference)
    {
        $this->storeReferences[] = $storeReference;
        $this->modifiedProperties[self::STORE_REFERENCES] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreReferences()
    {
        $this->assertPropertyIsSet(self::STORE_REFERENCES);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param int[]|null $fkStores
     *
     * @return $this
     */
    public function setFkStores(array $fkStores = null)
    {
        if ($fkStores === null) {
            $fkStores = [];
        }

        $this->fkStores = [];

        foreach ($fkStores as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::FK_STORES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addFkStore(...$args);
        }

        $this->modifiedProperties[self::FK_STORES] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return int[]
     */
    public function getFkStores(): array
    {
        return $this->fkStores;
    }

    /**
     * @module TaxApp
     *
     * @param int $fkStore
     *
     * @return $this
     */
    public function addFkStore(int $fkStore)
    {
        $this->fkStores[] = $fkStore;
        $this->modifiedProperties[self::FK_STORES] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStores()
    {
        $this->assertPropertyIsSet(self::FK_STORES);

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
                case 'applicationIds':
                case 'vendorCodes':
                case 'storeReferences':
                case 'fkStores':
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
                case 'applicationIds':
                case 'vendorCodes':
                case 'storeReferences':
                case 'fkStores':
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
                case 'applicationIds':
                case 'vendorCodes':
                case 'storeReferences':
                case 'fkStores':
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
            'applicationIds' => $this->applicationIds,
            'vendorCodes' => $this->vendorCodes,
            'storeReferences' => $this->storeReferences,
            'fkStores' => $this->fkStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'application_ids' => $this->applicationIds,
            'vendor_codes' => $this->vendorCodes,
            'store_references' => $this->storeReferences,
            'fk_stores' => $this->fkStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'application_ids' => $this->applicationIds instanceof AbstractTransfer ? $this->applicationIds->toArray(true, false) : $this->applicationIds,
            'vendor_codes' => $this->vendorCodes instanceof AbstractTransfer ? $this->vendorCodes->toArray(true, false) : $this->vendorCodes,
            'store_references' => $this->storeReferences instanceof AbstractTransfer ? $this->storeReferences->toArray(true, false) : $this->storeReferences,
            'fk_stores' => $this->fkStores instanceof AbstractTransfer ? $this->fkStores->toArray(true, false) : $this->fkStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'applicationIds' => $this->applicationIds instanceof AbstractTransfer ? $this->applicationIds->toArray(true, true) : $this->applicationIds,
            'vendorCodes' => $this->vendorCodes instanceof AbstractTransfer ? $this->vendorCodes->toArray(true, true) : $this->vendorCodes,
            'storeReferences' => $this->storeReferences instanceof AbstractTransfer ? $this->storeReferences->toArray(true, true) : $this->storeReferences,
            'fkStores' => $this->fkStores instanceof AbstractTransfer ? $this->fkStores->toArray(true, true) : $this->fkStores,
        ];
    }
}
