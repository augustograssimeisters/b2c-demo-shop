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
class GiftCardAbstractProductConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_GIFT_CARD_ABSTRACT_PRODUCT_CONFIGURATION = 'idGiftCardAbstractProductConfiguration';

    /**
     * @var string
     */
    public const CODE_PATTERN = 'codePattern';

    /**
     * @var int|null
     */
    protected $idGiftCardAbstractProductConfiguration;

    /**
     * @var string|null
     */
    protected $codePattern;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_gift_card_abstract_product_configuration' => 'idGiftCardAbstractProductConfiguration',
        'idGiftCardAbstractProductConfiguration' => 'idGiftCardAbstractProductConfiguration',
        'IdGiftCardAbstractProductConfiguration' => 'idGiftCardAbstractProductConfiguration',
        'code_pattern' => 'codePattern',
        'codePattern' => 'codePattern',
        'CodePattern' => 'codePattern',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_GIFT_CARD_ABSTRACT_PRODUCT_CONFIGURATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_gift_card_abstract_product_configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CODE_PATTERN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'code_pattern',
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
     * @param int|null $idGiftCardAbstractProductConfiguration
     *
     * @return $this
     */
    public function setIdGiftCardAbstractProductConfiguration($idGiftCardAbstractProductConfiguration)
    {
        $this->idGiftCardAbstractProductConfiguration = $idGiftCardAbstractProductConfiguration;
        $this->modifiedProperties[self::ID_GIFT_CARD_ABSTRACT_PRODUCT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return int|null
     */
    public function getIdGiftCardAbstractProductConfiguration()
    {
        return $this->idGiftCardAbstractProductConfiguration;
    }

    /**
     * @module GiftCard
     *
     * @param int|null $idGiftCardAbstractProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdGiftCardAbstractProductConfigurationOrFail($idGiftCardAbstractProductConfiguration)
    {
        if ($idGiftCardAbstractProductConfiguration === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_ABSTRACT_PRODUCT_CONFIGURATION);
        }

        return $this->setIdGiftCardAbstractProductConfiguration($idGiftCardAbstractProductConfiguration);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdGiftCardAbstractProductConfigurationOrFail()
    {
        if ($this->idGiftCardAbstractProductConfiguration === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_ABSTRACT_PRODUCT_CONFIGURATION);
        }

        return $this->idGiftCardAbstractProductConfiguration;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdGiftCardAbstractProductConfiguration()
    {
        $this->assertPropertyIsSet(self::ID_GIFT_CARD_ABSTRACT_PRODUCT_CONFIGURATION);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param string|null $codePattern
     *
     * @return $this
     */
    public function setCodePattern($codePattern)
    {
        $this->codePattern = $codePattern;
        $this->modifiedProperties[self::CODE_PATTERN] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return string|null
     */
    public function getCodePattern()
    {
        return $this->codePattern;
    }

    /**
     * @module GiftCard
     *
     * @param string|null $codePattern
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCodePatternOrFail($codePattern)
    {
        if ($codePattern === null) {
            $this->throwNullValueException(static::CODE_PATTERN);
        }

        return $this->setCodePattern($codePattern);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCodePatternOrFail()
    {
        if ($this->codePattern === null) {
            $this->throwNullValueException(static::CODE_PATTERN);
        }

        return $this->codePattern;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCodePattern()
    {
        $this->assertPropertyIsSet(self::CODE_PATTERN);

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
                case 'idGiftCardAbstractProductConfiguration':
                case 'codePattern':
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
                case 'idGiftCardAbstractProductConfiguration':
                case 'codePattern':
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
                case 'idGiftCardAbstractProductConfiguration':
                case 'codePattern':
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
            'idGiftCardAbstractProductConfiguration' => $this->idGiftCardAbstractProductConfiguration,
            'codePattern' => $this->codePattern,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_abstract_product_configuration' => $this->idGiftCardAbstractProductConfiguration,
            'code_pattern' => $this->codePattern,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_abstract_product_configuration' => $this->idGiftCardAbstractProductConfiguration instanceof AbstractTransfer ? $this->idGiftCardAbstractProductConfiguration->toArray(true, false) : $this->idGiftCardAbstractProductConfiguration,
            'code_pattern' => $this->codePattern instanceof AbstractTransfer ? $this->codePattern->toArray(true, false) : $this->codePattern,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idGiftCardAbstractProductConfiguration' => $this->idGiftCardAbstractProductConfiguration instanceof AbstractTransfer ? $this->idGiftCardAbstractProductConfiguration->toArray(true, true) : $this->idGiftCardAbstractProductConfiguration,
            'codePattern' => $this->codePattern instanceof AbstractTransfer ? $this->codePattern->toArray(true, true) : $this->codePattern,
        ];
    }
}
