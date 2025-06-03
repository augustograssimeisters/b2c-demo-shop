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
class ProductConfigurationConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKUS = 'skus';

    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_IDS = 'productConfigurationIds';

    /**
     * @var string
     */
    public const UUIDS = 'uuids';

    /**
     * @var string[]
     */
    protected $skus = [];

    /**
     * @var int[]
     */
    protected $productConfigurationIds = [];

    /**
     * @var string[]
     */
    protected $uuids = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'skus' => 'skus',
        'Skus' => 'skus',
        'product_configuration_ids' => 'productConfigurationIds',
        'productConfigurationIds' => 'productConfigurationIds',
        'ProductConfigurationIds' => 'productConfigurationIds',
        'uuids' => 'uuids',
        'Uuids' => 'uuids',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
            'is_strict' => false,
        ],
        self::PRODUCT_CONFIGURATION_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'product_configuration_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductConfigurationCart|ProductConfigurationWishlist|ProductConfiguration
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

        $this->skus = $skus;
        $this->modifiedProperties[self::SKUS] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCart|ProductConfigurationWishlist|ProductConfiguration
     *
     * @return string[]
     */
    public function getSkus()
    {
        return $this->skus;
    }

    /**
     * @module ProductConfigurationCart|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param string $sku
     *
     * @return $this
     */
    public function addSku($sku)
    {
        $this->skus[] = $sku;
        $this->modifiedProperties[self::SKUS] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCart|ProductConfigurationWishlist|ProductConfiguration
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
     * @module ProductConfigurationStorage|ProductConfiguration
     *
     * @param int[]|null $productConfigurationIds
     *
     * @return $this
     */
    public function setProductConfigurationIds(array $productConfigurationIds = null)
    {
        if ($productConfigurationIds === null) {
            $productConfigurationIds = [];
        }

        $this->productConfigurationIds = $productConfigurationIds;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_IDS] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationStorage|ProductConfiguration
     *
     * @return int[]
     */
    public function getProductConfigurationIds()
    {
        return $this->productConfigurationIds;
    }

    /**
     * @module ProductConfigurationStorage|ProductConfiguration
     *
     * @param int $idProductConfiguration
     *
     * @return $this
     */
    public function addIdProductConfiguration($idProductConfiguration)
    {
        $this->productConfigurationIds[] = $idProductConfiguration;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_IDS] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationStorage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfigurationIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATION_IDS);

        return $this;
    }

    /**
     * @module ProductConfiguration
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

        $this->uuids = $uuids;
        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module ProductConfiguration
     *
     * @return string[]
     */
    public function getUuids()
    {
        return $this->uuids;
    }

    /**
     * @module ProductConfiguration
     *
     * @param string $uuid
     *
     * @return $this
     */
    public function addUuid($uuid)
    {
        $this->uuids[] = $uuid;
        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module ProductConfiguration
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
                case 'skus':
                case 'productConfigurationIds':
                case 'uuids':
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
                case 'skus':
                case 'productConfigurationIds':
                case 'uuids':
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
                case 'skus':
                case 'productConfigurationIds':
                case 'uuids':
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
            'skus' => $this->skus,
            'productConfigurationIds' => $this->productConfigurationIds,
            'uuids' => $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'skus' => $this->skus,
            'product_configuration_ids' => $this->productConfigurationIds,
            'uuids' => $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'skus' => $this->skus instanceof AbstractTransfer ? $this->skus->toArray(true, false) : $this->skus,
            'product_configuration_ids' => $this->productConfigurationIds instanceof AbstractTransfer ? $this->productConfigurationIds->toArray(true, false) : $this->productConfigurationIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, false) : $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'skus' => $this->skus instanceof AbstractTransfer ? $this->skus->toArray(true, true) : $this->skus,
            'productConfigurationIds' => $this->productConfigurationIds instanceof AbstractTransfer ? $this->productConfigurationIds->toArray(true, true) : $this->productConfigurationIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, true) : $this->uuids,
        ];
    }
}
