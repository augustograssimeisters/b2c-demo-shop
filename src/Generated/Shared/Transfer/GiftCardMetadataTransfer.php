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
class GiftCardMetadataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_GIFT_CARD = 'isGiftCard';

    /**
     * @var string
     */
    public const ABSTRACT_CONFIGURATION = 'abstractConfiguration';

    /**
     * @var string
     */
    public const CONCRETE_CONFIGURATION = 'concreteConfiguration';

    /**
     * @var bool|null
     */
    protected $isGiftCard;

    /**
     * @var \Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer|null
     */
    protected $abstractConfiguration;

    /**
     * @var \Generated\Shared\Transfer\GiftCardProductConfigurationTransfer|null
     */
    protected $concreteConfiguration;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_gift_card' => 'isGiftCard',
        'isGiftCard' => 'isGiftCard',
        'IsGiftCard' => 'isGiftCard',
        'abstract_configuration' => 'abstractConfiguration',
        'abstractConfiguration' => 'abstractConfiguration',
        'AbstractConfiguration' => 'abstractConfiguration',
        'concrete_configuration' => 'concreteConfiguration',
        'concreteConfiguration' => 'concreteConfiguration',
        'ConcreteConfiguration' => 'concreteConfiguration',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_GIFT_CARD => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_gift_card',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_CONFIGURATION => [
            'type' => 'Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'abstract_configuration',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONCRETE_CONFIGURATION => [
            'type' => 'Generated\Shared\Transfer\GiftCardProductConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'concrete_configuration',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CheckoutPage|CustomerPage|GiftCard|ShipmentsRestApi
     *
     * @param bool|null $isGiftCard
     *
     * @return $this
     */
    public function setIsGiftCard($isGiftCard)
    {
        $this->isGiftCard = $isGiftCard;
        $this->modifiedProperties[self::IS_GIFT_CARD] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|GiftCard|ShipmentsRestApi
     *
     * @return bool|null
     */
    public function getIsGiftCard()
    {
        return $this->isGiftCard;
    }

    /**
     * @module CheckoutPage|CustomerPage|GiftCard|ShipmentsRestApi
     *
     * @param bool|null $isGiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsGiftCardOrFail($isGiftCard)
    {
        if ($isGiftCard === null) {
            $this->throwNullValueException(static::IS_GIFT_CARD);
        }

        return $this->setIsGiftCard($isGiftCard);
    }

    /**
     * @module CheckoutPage|CustomerPage|GiftCard|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsGiftCardOrFail()
    {
        if ($this->isGiftCard === null) {
            $this->throwNullValueException(static::IS_GIFT_CARD);
        }

        return $this->isGiftCard;
    }

    /**
     * @module CheckoutPage|CustomerPage|GiftCard|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsGiftCard()
    {
        $this->assertPropertyIsSet(self::IS_GIFT_CARD);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param \Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer|null $abstractConfiguration
     *
     * @return $this
     */
    public function setAbstractConfiguration(GiftCardAbstractProductConfigurationTransfer $abstractConfiguration = null)
    {
        $this->abstractConfiguration = $abstractConfiguration;
        $this->modifiedProperties[self::ABSTRACT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return \Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer|null
     */
    public function getAbstractConfiguration()
    {
        return $this->abstractConfiguration;
    }

    /**
     * @module GiftCard
     *
     * @param \Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer $abstractConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAbstractConfigurationOrFail(GiftCardAbstractProductConfigurationTransfer $abstractConfiguration)
    {
        return $this->setAbstractConfiguration($abstractConfiguration);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GiftCardAbstractProductConfigurationTransfer
     */
    public function getAbstractConfigurationOrFail()
    {
        if ($this->abstractConfiguration === null) {
            $this->throwNullValueException(static::ABSTRACT_CONFIGURATION);
        }

        return $this->abstractConfiguration;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractConfiguration()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_CONFIGURATION);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param \Generated\Shared\Transfer\GiftCardProductConfigurationTransfer|null $concreteConfiguration
     *
     * @return $this
     */
    public function setConcreteConfiguration(GiftCardProductConfigurationTransfer $concreteConfiguration = null)
    {
        $this->concreteConfiguration = $concreteConfiguration;
        $this->modifiedProperties[self::CONCRETE_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return \Generated\Shared\Transfer\GiftCardProductConfigurationTransfer|null
     */
    public function getConcreteConfiguration()
    {
        return $this->concreteConfiguration;
    }

    /**
     * @module GiftCard
     *
     * @param \Generated\Shared\Transfer\GiftCardProductConfigurationTransfer $concreteConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConcreteConfigurationOrFail(GiftCardProductConfigurationTransfer $concreteConfiguration)
    {
        return $this->setConcreteConfiguration($concreteConfiguration);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GiftCardProductConfigurationTransfer
     */
    public function getConcreteConfigurationOrFail()
    {
        if ($this->concreteConfiguration === null) {
            $this->throwNullValueException(static::CONCRETE_CONFIGURATION);
        }

        return $this->concreteConfiguration;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConcreteConfiguration()
    {
        $this->assertPropertyIsSet(self::CONCRETE_CONFIGURATION);

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
                case 'isGiftCard':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'abstractConfiguration':
                case 'concreteConfiguration':
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
                case 'isGiftCard':
                    $values[$arrayKey] = $value;

                    break;
                case 'abstractConfiguration':
                case 'concreteConfiguration':
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
                case 'isGiftCard':
                    $values[$arrayKey] = $value;

                    break;
                case 'abstractConfiguration':
                case 'concreteConfiguration':
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
            'isGiftCard' => $this->isGiftCard,
            'abstractConfiguration' => $this->abstractConfiguration,
            'concreteConfiguration' => $this->concreteConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_gift_card' => $this->isGiftCard,
            'abstract_configuration' => $this->abstractConfiguration,
            'concrete_configuration' => $this->concreteConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_gift_card' => $this->isGiftCard instanceof AbstractTransfer ? $this->isGiftCard->toArray(true, false) : $this->isGiftCard,
            'abstract_configuration' => $this->abstractConfiguration instanceof AbstractTransfer ? $this->abstractConfiguration->toArray(true, false) : $this->abstractConfiguration,
            'concrete_configuration' => $this->concreteConfiguration instanceof AbstractTransfer ? $this->concreteConfiguration->toArray(true, false) : $this->concreteConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isGiftCard' => $this->isGiftCard instanceof AbstractTransfer ? $this->isGiftCard->toArray(true, true) : $this->isGiftCard,
            'abstractConfiguration' => $this->abstractConfiguration instanceof AbstractTransfer ? $this->abstractConfiguration->toArray(true, true) : $this->abstractConfiguration,
            'concreteConfiguration' => $this->concreteConfiguration instanceof AbstractTransfer ? $this->concreteConfiguration->toArray(true, true) : $this->concreteConfiguration,
        ];
    }
}
