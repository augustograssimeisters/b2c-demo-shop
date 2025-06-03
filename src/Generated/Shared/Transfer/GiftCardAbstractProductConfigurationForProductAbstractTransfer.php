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
class GiftCardAbstractProductConfigurationForProductAbstractTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const GIFT_CARD_ABSTRACT_PRODUCT_CONFIGURATION = 'giftCardAbstractProductConfiguration';

    /**
     * @var string
     */
    public const ABSTRACT_SKU = 'abstractSku';

    /**
     * @var \Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer|null
     */
    protected $giftCardAbstractProductConfiguration;

    /**
     * @var string|null
     */
    protected $abstractSku;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'gift_card_abstract_product_configuration' => 'giftCardAbstractProductConfiguration',
        'giftCardAbstractProductConfiguration' => 'giftCardAbstractProductConfiguration',
        'GiftCardAbstractProductConfiguration' => 'giftCardAbstractProductConfiguration',
        'abstract_sku' => 'abstractSku',
        'abstractSku' => 'abstractSku',
        'AbstractSku' => 'abstractSku',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::GIFT_CARD_ABSTRACT_PRODUCT_CONFIGURATION => [
            'type' => 'Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'gift_card_abstract_product_configuration',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'abstract_sku',
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
     * @module GiftCard
     *
     * @param \Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer|null $giftCardAbstractProductConfiguration
     *
     * @return $this
     */
    public function setGiftCardAbstractProductConfiguration(GiftCardAbstractProductConfigurationTransfer $giftCardAbstractProductConfiguration = null)
    {
        $this->giftCardAbstractProductConfiguration = $giftCardAbstractProductConfiguration;
        $this->modifiedProperties[self::GIFT_CARD_ABSTRACT_PRODUCT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return \Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer|null
     */
    public function getGiftCardAbstractProductConfiguration()
    {
        return $this->giftCardAbstractProductConfiguration;
    }

    /**
     * @module GiftCard
     *
     * @param \Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer $giftCardAbstractProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGiftCardAbstractProductConfigurationOrFail(GiftCardAbstractProductConfigurationTransfer $giftCardAbstractProductConfiguration)
    {
        return $this->setGiftCardAbstractProductConfiguration($giftCardAbstractProductConfiguration);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer
     */
    public function getGiftCardAbstractProductConfigurationOrFail()
    {
        if ($this->giftCardAbstractProductConfiguration === null) {
            $this->throwNullValueException(static::GIFT_CARD_ABSTRACT_PRODUCT_CONFIGURATION);
        }

        return $this->giftCardAbstractProductConfiguration;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGiftCardAbstractProductConfiguration()
    {
        $this->assertPropertyIsSet(self::GIFT_CARD_ABSTRACT_PRODUCT_CONFIGURATION);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param string|null $abstractSku
     *
     * @return $this
     */
    public function setAbstractSku($abstractSku)
    {
        $this->abstractSku = $abstractSku;
        $this->modifiedProperties[self::ABSTRACT_SKU] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return string|null
     */
    public function getAbstractSku()
    {
        return $this->abstractSku;
    }

    /**
     * @module GiftCard
     *
     * @param string|null $abstractSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAbstractSkuOrFail($abstractSku)
    {
        if ($abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->setAbstractSku($abstractSku);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAbstractSkuOrFail()
    {
        if ($this->abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->abstractSku;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractSku()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_SKU);

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
                case 'abstractSku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'giftCardAbstractProductConfiguration':
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
                case 'abstractSku':
                    $values[$arrayKey] = $value;

                    break;
                case 'giftCardAbstractProductConfiguration':
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
                case 'abstractSku':
                    $values[$arrayKey] = $value;

                    break;
                case 'giftCardAbstractProductConfiguration':
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
            'abstractSku' => $this->abstractSku,
            'giftCardAbstractProductConfiguration' => $this->giftCardAbstractProductConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'abstract_sku' => $this->abstractSku,
            'gift_card_abstract_product_configuration' => $this->giftCardAbstractProductConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'abstract_sku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, false) : $this->abstractSku,
            'gift_card_abstract_product_configuration' => $this->giftCardAbstractProductConfiguration instanceof AbstractTransfer ? $this->giftCardAbstractProductConfiguration->toArray(true, false) : $this->giftCardAbstractProductConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'abstractSku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, true) : $this->abstractSku,
            'giftCardAbstractProductConfiguration' => $this->giftCardAbstractProductConfiguration instanceof AbstractTransfer ? $this->giftCardAbstractProductConfiguration->toArray(true, true) : $this->giftCardAbstractProductConfiguration,
        ];
    }
}
