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
class GiftCardTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const ID_GIFT_CARD = 'idGiftCard';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const REPLACEMENT_PATTERN = 'replacementPattern';

    /**
     * @var string
     */
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var string
     */
    public const ACTUAL_VALUE = 'actualValue';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var int|null
     */
    protected $value;

    /**
     * @var int|null
     */
    protected $idGiftCard;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $replacementPattern;

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var int|null
     */
    protected $actualValue;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'code' => 'code',
        'Code' => 'code',
        'value' => 'value',
        'Value' => 'value',
        'id_gift_card' => 'idGiftCard',
        'idGiftCard' => 'idGiftCard',
        'IdGiftCard' => 'idGiftCard',
        'name' => 'name',
        'Name' => 'name',
        'replacement_pattern' => 'replacementPattern',
        'replacementPattern' => 'replacementPattern',
        'ReplacementPattern' => 'replacementPattern',
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
        'actual_value' => 'actualValue',
        'actualValue' => 'actualValue',
        'ActualValue' => 'actualValue',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'code',
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
        self::ID_GIFT_CARD => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_gift_card',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REPLACEMENT_PATTERN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'replacement_pattern',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'currency_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTUAL_VALUE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'actual_value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
        ],
    ];

    /**
     * @module GiftCardBalance|GiftCard|GiftCardsRestApi
     *
     * @param string|null $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        $this->modifiedProperties[self::CODE] = true;

        return $this;
    }

    /**
     * @module GiftCardBalance|GiftCard|GiftCardsRestApi
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module GiftCardBalance|GiftCard|GiftCardsRestApi
     *
     * @param string|null $code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCodeOrFail($code)
    {
        if ($code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->setCode($code);
    }

    /**
     * @module GiftCardBalance|GiftCard|GiftCardsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCodeOrFail()
    {
        if ($this->code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->code;
    }

    /**
     * @module GiftCardBalance|GiftCard|GiftCardsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCode()
    {
        $this->assertPropertyIsSet(self::CODE);

        return $this;
    }

    /**
     * @module GiftCardBalance|GiftCard
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
     * @module GiftCardBalance|GiftCard
     *
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module GiftCardBalance|GiftCard
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
     * @module GiftCardBalance|GiftCard
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
     * @module GiftCardBalance|GiftCard
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
     * @module GiftCardBalance|GiftCardMailConnector|GiftCard
     *
     * @param int|null $idGiftCard
     *
     * @return $this
     */
    public function setIdGiftCard($idGiftCard)
    {
        $this->idGiftCard = $idGiftCard;
        $this->modifiedProperties[self::ID_GIFT_CARD] = true;

        return $this;
    }

    /**
     * @module GiftCardBalance|GiftCardMailConnector|GiftCard
     *
     * @return int|null
     */
    public function getIdGiftCard()
    {
        return $this->idGiftCard;
    }

    /**
     * @module GiftCardBalance|GiftCardMailConnector|GiftCard
     *
     * @param int|null $idGiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdGiftCardOrFail($idGiftCard)
    {
        if ($idGiftCard === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD);
        }

        return $this->setIdGiftCard($idGiftCard);
    }

    /**
     * @module GiftCardBalance|GiftCardMailConnector|GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdGiftCardOrFail()
    {
        if ($this->idGiftCard === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD);
        }

        return $this->idGiftCard;
    }

    /**
     * @module GiftCardBalance|GiftCardMailConnector|GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdGiftCard()
    {
        $this->assertPropertyIsSet(self::ID_GIFT_CARD);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module GiftCard
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param string|null $replacementPattern
     *
     * @return $this
     */
    public function setReplacementPattern($replacementPattern)
    {
        $this->replacementPattern = $replacementPattern;
        $this->modifiedProperties[self::REPLACEMENT_PATTERN] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return string|null
     */
    public function getReplacementPattern()
    {
        return $this->replacementPattern;
    }

    /**
     * @module GiftCard
     *
     * @param string|null $replacementPattern
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReplacementPatternOrFail($replacementPattern)
    {
        if ($replacementPattern === null) {
            $this->throwNullValueException(static::REPLACEMENT_PATTERN);
        }

        return $this->setReplacementPattern($replacementPattern);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getReplacementPatternOrFail()
    {
        if ($this->replacementPattern === null) {
            $this->throwNullValueException(static::REPLACEMENT_PATTERN);
        }

        return $this->replacementPattern;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReplacementPattern()
    {
        $this->assertPropertyIsSet(self::REPLACEMENT_PATTERN);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param string|null $currencyIsoCode
     *
     * @return $this
     */
    public function setCurrencyIsoCode($currencyIsoCode)
    {
        $this->currencyIsoCode = $currencyIsoCode;
        $this->modifiedProperties[self::CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module GiftCard
     *
     * @param string|null $currencyIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyIsoCodeOrFail($currencyIsoCode)
    {
        if ($currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->setCurrencyIsoCode($currencyIsoCode);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCurrencyIsoCodeOrFail()
    {
        if ($this->currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->currencyIsoCode;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::CURRENCY_ISO_CODE);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param int|null $actualValue
     *
     * @return $this
     */
    public function setActualValue($actualValue)
    {
        $this->actualValue = $actualValue;
        $this->modifiedProperties[self::ACTUAL_VALUE] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return int|null
     */
    public function getActualValue()
    {
        return $this->actualValue;
    }

    /**
     * @module GiftCard
     *
     * @param int|null $actualValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActualValueOrFail($actualValue)
    {
        if ($actualValue === null) {
            $this->throwNullValueException(static::ACTUAL_VALUE);
        }

        return $this->setActualValue($actualValue);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getActualValueOrFail()
    {
        if ($this->actualValue === null) {
            $this->throwNullValueException(static::ACTUAL_VALUE);
        }

        return $this->actualValue;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireActualValue()
    {
        $this->assertPropertyIsSet(self::ACTUAL_VALUE);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param array|null $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes = null)
    {
        if ($attributes === null) {
            $attributes = [];
        }

        $this->attributes = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module GiftCard
     *
     * @param mixed $attributes
     *
     * @return $this
     */
    public function addAttributes($attributes)
    {
        $this->attributes[] = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttributes()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTES);

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module GiftCard
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module GiftCard
     *
     * @param bool|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module GiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module GiftCard
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
                case 'code':
                case 'value':
                case 'idGiftCard':
                case 'name':
                case 'replacementPattern':
                case 'currencyIsoCode':
                case 'actualValue':
                case 'attributes':
                case 'isActive':
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
                case 'code':
                case 'value':
                case 'idGiftCard':
                case 'name':
                case 'replacementPattern':
                case 'currencyIsoCode':
                case 'actualValue':
                case 'attributes':
                case 'isActive':
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
                case 'code':
                case 'value':
                case 'idGiftCard':
                case 'name':
                case 'replacementPattern':
                case 'currencyIsoCode':
                case 'actualValue':
                case 'attributes':
                case 'isActive':
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
            'code' => $this->code,
            'value' => $this->value,
            'idGiftCard' => $this->idGiftCard,
            'name' => $this->name,
            'replacementPattern' => $this->replacementPattern,
            'currencyIsoCode' => $this->currencyIsoCode,
            'actualValue' => $this->actualValue,
            'attributes' => $this->attributes,
            'isActive' => $this->isActive,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'code' => $this->code,
            'value' => $this->value,
            'id_gift_card' => $this->idGiftCard,
            'name' => $this->name,
            'replacement_pattern' => $this->replacementPattern,
            'currency_iso_code' => $this->currencyIsoCode,
            'actual_value' => $this->actualValue,
            'attributes' => $this->attributes,
            'is_active' => $this->isActive,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'id_gift_card' => $this->idGiftCard instanceof AbstractTransfer ? $this->idGiftCard->toArray(true, false) : $this->idGiftCard,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'replacement_pattern' => $this->replacementPattern instanceof AbstractTransfer ? $this->replacementPattern->toArray(true, false) : $this->replacementPattern,
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
            'actual_value' => $this->actualValue instanceof AbstractTransfer ? $this->actualValue->toArray(true, false) : $this->actualValue,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'idGiftCard' => $this->idGiftCard instanceof AbstractTransfer ? $this->idGiftCard->toArray(true, true) : $this->idGiftCard,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'replacementPattern' => $this->replacementPattern instanceof AbstractTransfer ? $this->replacementPattern->toArray(true, true) : $this->replacementPattern,
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
            'actualValue' => $this->actualValue instanceof AbstractTransfer ? $this->actualValue->toArray(true, true) : $this->actualValue,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
        ];
    }
}
