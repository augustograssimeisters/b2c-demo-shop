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
class ProductConcretesBackendApiAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const IS_QUANTITY_SPLITTABLE = 'isQuantitySplittable';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const LOCALIZED_ATTRIBUTES = 'localizedAttributes';

    /**
     * @var string
     */
    public const IMAGE_SETS = 'imageSets';

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var bool|null
     */
    protected $isQuantitySplittable;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ProductConcreteLocalizedAttributesBackendApiAttributesTransfer>
     */
    protected $localizedAttributes;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ProductImageSetBackendApiAttributesTransfer>
     */
    protected $imageSets;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sku' => 'sku',
        'Sku' => 'sku',
        'is_quantity_splittable' => 'isQuantitySplittable',
        'isQuantitySplittable' => 'isQuantitySplittable',
        'IsQuantitySplittable' => 'isQuantitySplittable',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'localized_attributes' => 'localizedAttributes',
        'localizedAttributes' => 'localizedAttributes',
        'LocalizedAttributes' => 'localizedAttributes',
        'image_sets' => 'imageSets',
        'imageSets' => 'imageSets',
        'ImageSets' => 'imageSets',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_QUANTITY_SPLITTABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_quantity_splittable',
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
        self::LOCALIZED_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteLocalizedAttributesBackendApiAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'localized_attributes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\ProductImageSetBackendApiAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'image_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module ProductsBackendApi
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku(?string $sku = null)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param string $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail(string $sku)
    {
        return $this->setSku($sku);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail(): string
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param bool|null $isQuantitySplittable
     *
     * @return $this
     */
    public function setIsQuantitySplittable(?bool $isQuantitySplittable = null)
    {
        $this->isQuantitySplittable = $isQuantitySplittable;
        $this->modifiedProperties[self::IS_QUANTITY_SPLITTABLE] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return bool|null
     */
    public function getIsQuantitySplittable(): ?bool
    {
        return $this->isQuantitySplittable;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param bool $isQuantitySplittable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsQuantitySplittableOrFail(bool $isQuantitySplittable)
    {
        return $this->setIsQuantitySplittable($isQuantitySplittable);
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsQuantitySplittableOrFail(): bool
    {
        if ($this->isQuantitySplittable === null) {
            $this->throwNullValueException(static::IS_QUANTITY_SPLITTABLE);
        }

        return $this->isQuantitySplittable;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsQuantitySplittable()
    {
        $this->assertPropertyIsSet(self::IS_QUANTITY_SPLITTABLE);

        return $this;
    }

    /**
     * @module ProductsBackendApi
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
     * @module ProductsBackendApi
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @module ProductsBackendApi
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
     * @module ProductsBackendApi
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
     * @module ProductsBackendApi
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
     * @module ProductsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ProductConcreteLocalizedAttributesBackendApiAttributesTransfer> $localizedAttributes
     *
     * @return $this
     */
    public function setLocalizedAttributes(ArrayObject $localizedAttributes)
    {
        $this->localizedAttributes = new ArrayObject();

        foreach ($localizedAttributes as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::LOCALIZED_ATTRIBUTES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addLocalizedAttribute(...$args);
        }

        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ProductConcreteLocalizedAttributesBackendApiAttributesTransfer>
     */
    public function getLocalizedAttributes(): ArrayObject
    {
        return $this->localizedAttributes;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\ProductConcreteLocalizedAttributesBackendApiAttributesTransfer $localizedAttribute
     *
     * @return $this
     */
    public function addLocalizedAttribute(ProductConcreteLocalizedAttributesBackendApiAttributesTransfer $localizedAttribute)
    {
        $this->localizedAttributes[] = $localizedAttribute;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ProductImageSetBackendApiAttributesTransfer> $imageSets
     *
     * @return $this
     */
    public function setImageSets(ArrayObject $imageSets)
    {
        $this->imageSets = new ArrayObject();

        foreach ($imageSets as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::IMAGE_SETS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addImageSet(...$args);
        }

        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ProductImageSetBackendApiAttributesTransfer>
     */
    public function getImageSets(): ArrayObject
    {
        return $this->imageSets;
    }

    /**
     * @module ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\ProductImageSetBackendApiAttributesTransfer $imageSet
     *
     * @return $this
     */
    public function addImageSet(ProductImageSetBackendApiAttributesTransfer $imageSet)
    {
        $this->imageSets[] = $imageSet;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::IMAGE_SETS);

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
                case 'sku':
                case 'isQuantitySplittable':
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'localizedAttributes':
                case 'imageSets':
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
                case 'sku':
                case 'isQuantitySplittable':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedAttributes':
                case 'imageSets':
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
                case 'sku':
                case 'isQuantitySplittable':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedAttributes':
                case 'imageSets':
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
        $this->localizedAttributes = $this->localizedAttributes ?: new ArrayObject();
        $this->imageSets = $this->imageSets ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'isQuantitySplittable' => $this->isQuantitySplittable,
            'isActive' => $this->isActive,
            'localizedAttributes' => $this->localizedAttributes,
            'imageSets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku,
            'is_quantity_splittable' => $this->isQuantitySplittable,
            'is_active' => $this->isActive,
            'localized_attributes' => $this->localizedAttributes,
            'image_sets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'is_quantity_splittable' => $this->isQuantitySplittable instanceof AbstractTransfer ? $this->isQuantitySplittable->toArray(true, false) : $this->isQuantitySplittable,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'localized_attributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, false) : $this->addValuesToCollection($this->localizedAttributes, true, false),
            'image_sets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, false) : $this->addValuesToCollection($this->imageSets, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'isQuantitySplittable' => $this->isQuantitySplittable instanceof AbstractTransfer ? $this->isQuantitySplittable->toArray(true, true) : $this->isQuantitySplittable,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'localizedAttributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, true) : $this->addValuesToCollection($this->localizedAttributes, true, true),
            'imageSets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, true) : $this->addValuesToCollection($this->imageSets, true, true),
        ];
    }
}
