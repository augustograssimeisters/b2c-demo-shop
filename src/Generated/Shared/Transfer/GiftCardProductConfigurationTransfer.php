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
class GiftCardProductConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_GIFT_CARD_PRODUCT_CONFIGURATION = 'idGiftCardProductConfiguration';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var int|null
     */
    protected $idGiftCardProductConfiguration;

    /**
     * @var int|null
     */
    protected $value;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_gift_card_product_configuration' => 'idGiftCardProductConfiguration',
        'idGiftCardProductConfiguration' => 'idGiftCardProductConfiguration',
        'IdGiftCardProductConfiguration' => 'idGiftCardProductConfiguration',
        'value' => 'value',
        'Value' => 'value',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_GIFT_CARD_PRODUCT_CONFIGURATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_gift_card_product_configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALUE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'value',
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
     * @param int|null $idGiftCardProductConfiguration
     *
     * @return $this
     */
    public function setIdGiftCardProductConfiguration($idGiftCardProductConfiguration)
    {
        $this->idGiftCardProductConfiguration = $idGiftCardProductConfiguration;
        $this->modifiedProperties[self::ID_GIFT_CARD_PRODUCT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return int|null
     */
    public function getIdGiftCardProductConfiguration()
    {
        return $this->idGiftCardProductConfiguration;
    }

    /**
     * @module GiftCard
     *
     * @param int|null $idGiftCardProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdGiftCardProductConfigurationOrFail($idGiftCardProductConfiguration)
    {
        if ($idGiftCardProductConfiguration === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_PRODUCT_CONFIGURATION);
        }

        return $this->setIdGiftCardProductConfiguration($idGiftCardProductConfiguration);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdGiftCardProductConfigurationOrFail()
    {
        if ($this->idGiftCardProductConfiguration === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_PRODUCT_CONFIGURATION);
        }

        return $this->idGiftCardProductConfiguration;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdGiftCardProductConfiguration()
    {
        $this->assertPropertyIsSet(self::ID_GIFT_CARD_PRODUCT_CONFIGURATION);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param int|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module GiftCard
     *
     * @param int|null $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail($value)
    {
        if ($value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->setValue($value);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

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
                case 'idGiftCardProductConfiguration':
                case 'value':
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
                case 'idGiftCardProductConfiguration':
                case 'value':
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
                case 'idGiftCardProductConfiguration':
                case 'value':
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
            'idGiftCardProductConfiguration' => $this->idGiftCardProductConfiguration,
            'value' => $this->value,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_product_configuration' => $this->idGiftCardProductConfiguration,
            'value' => $this->value,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_product_configuration' => $this->idGiftCardProductConfiguration instanceof AbstractTransfer ? $this->idGiftCardProductConfiguration->toArray(true, false) : $this->idGiftCardProductConfiguration,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idGiftCardProductConfiguration' => $this->idGiftCardProductConfiguration instanceof AbstractTransfer ? $this->idGiftCardProductConfiguration->toArray(true, true) : $this->idGiftCardProductConfiguration,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
        ];
    }
}
