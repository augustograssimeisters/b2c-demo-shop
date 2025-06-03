<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyGiftCardEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_GIFT_CARD = 'idGiftCard';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

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
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const SPY_GIFT_CARD_BALANCE_LOGS = 'spyGiftCardBalanceLogs';

    /**
     * @var integer|null
     */
    protected $idGiftCard;

    /**
     * @var string|null
     */
    protected $attributes;

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $replacementPattern;

    /**
     * @var integer|null
     */
    protected $value;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyGiftCardBalanceLogEntityTransfer>
     */
    protected $spyGiftCardBalanceLogs;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_gift_card' => 'idGiftCard',
        'idGiftCard' => 'idGiftCard',
        'IdGiftCard' => 'idGiftCard',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'code' => 'code',
        'Code' => 'code',
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'name' => 'name',
        'Name' => 'name',
        'replacement_pattern' => 'replacementPattern',
        'replacementPattern' => 'replacementPattern',
        'ReplacementPattern' => 'replacementPattern',
        'value' => 'value',
        'Value' => 'value',
        'spy_gift_card_balance_logs' => 'spyGiftCardBalanceLogs',
        'spyGiftCardBalanceLogs' => 'spyGiftCardBalanceLogs',
        'SpyGiftCardBalanceLogs' => 'spyGiftCardBalanceLogs',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_GIFT_CARD => [
            'type' => 'integer',
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
        self::ATTRIBUTES => [
            'type' => 'string',
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
        self::IS_ACTIVE => [
            'type' => 'boolean',
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
        self::VALUE => [
            'type' => 'integer',
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
        self::SPY_GIFT_CARD_BALANCE_LOGS => [
            'type' => 'Generated\Shared\Transfer\SpyGiftCardBalanceLogEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_gift_card_balance_logs',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\GiftCard\Persistence\SpyGiftCard';


    /**
     * @module 
     *
     * @param integer|null $idGiftCard
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdGiftCard()
    {
        return $this->idGiftCard;
    }

    /**
     * @module 
     *
     * @param integer|null $idGiftCard
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdGiftCardOrFail()
    {
        if ($this->idGiftCard === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD);
        }

        return $this->idGiftCard;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module 
     *
     * @param string|null $attributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAttributesOrFail($attributes)
    {
        if ($attributes === null) {
            $this->throwNullValueException(static::ATTRIBUTES);
        }

        return $this->setAttributes($attributes);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAttributesOrFail()
    {
        if ($this->attributes === null) {
            $this->throwNullValueException(static::ATTRIBUTES);
        }

        return $this->attributes;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getReplacementPattern()
    {
        return $this->replacementPattern;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param integer|null $value
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
     * @module 
     *
     * @return integer|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module 
     *
     * @param integer|null $value
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyGiftCardBalanceLogEntityTransfer> $spyGiftCardBalanceLogs
     *
     * @return $this
     */
    public function setSpyGiftCardBalanceLogs(ArrayObject $spyGiftCardBalanceLogs)
    {
        $this->spyGiftCardBalanceLogs = $spyGiftCardBalanceLogs;
        $this->modifiedProperties[self::SPY_GIFT_CARD_BALANCE_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyGiftCardBalanceLogEntityTransfer>
     */
    public function getSpyGiftCardBalanceLogs()
    {
        return $this->spyGiftCardBalanceLogs;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyGiftCardBalanceLogEntityTransfer $spyGiftCardBalanceLogs
     *
     * @return $this
     */
    public function addSpyGiftCardBalanceLogs(SpyGiftCardBalanceLogEntityTransfer $spyGiftCardBalanceLogs)
    {
        $this->spyGiftCardBalanceLogs[] = $spyGiftCardBalanceLogs;
        $this->modifiedProperties[self::SPY_GIFT_CARD_BALANCE_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyGiftCardBalanceLogs()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_GIFT_CARD_BALANCE_LOGS);

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
                case 'idGiftCard':
                case 'attributes':
                case 'code':
                case 'currencyIsoCode':
                case 'isActive':
                case 'name':
                case 'replacementPattern':
                case 'value':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyGiftCardBalanceLogs':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
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
                case 'idGiftCard':
                case 'attributes':
                case 'code':
                case 'currencyIsoCode':
                case 'isActive':
                case 'name':
                case 'replacementPattern':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyGiftCardBalanceLogs':
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
                case 'idGiftCard':
                case 'attributes':
                case 'code':
                case 'currencyIsoCode':
                case 'isActive':
                case 'name':
                case 'replacementPattern':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyGiftCardBalanceLogs':
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
        $this->spyGiftCardBalanceLogs = $this->spyGiftCardBalanceLogs ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idGiftCard' => $this->idGiftCard,
            'attributes' => $this->attributes,
            'code' => $this->code,
            'currencyIsoCode' => $this->currencyIsoCode,
            'isActive' => $this->isActive,
            'name' => $this->name,
            'replacementPattern' => $this->replacementPattern,
            'value' => $this->value,
            'spyGiftCardBalanceLogs' => $this->spyGiftCardBalanceLogs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card' => $this->idGiftCard,
            'attributes' => $this->attributes,
            'code' => $this->code,
            'currency_iso_code' => $this->currencyIsoCode,
            'is_active' => $this->isActive,
            'name' => $this->name,
            'replacement_pattern' => $this->replacementPattern,
            'value' => $this->value,
            'spy_gift_card_balance_logs' => $this->spyGiftCardBalanceLogs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card' => $this->idGiftCard instanceof AbstractTransfer ? $this->idGiftCard->toArray(true, false) : $this->idGiftCard,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'replacement_pattern' => $this->replacementPattern instanceof AbstractTransfer ? $this->replacementPattern->toArray(true, false) : $this->replacementPattern,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'spy_gift_card_balance_logs' => $this->spyGiftCardBalanceLogs instanceof AbstractTransfer ? $this->spyGiftCardBalanceLogs->toArray(true, false) : $this->addValuesToCollection($this->spyGiftCardBalanceLogs, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idGiftCard' => $this->idGiftCard instanceof AbstractTransfer ? $this->idGiftCard->toArray(true, true) : $this->idGiftCard,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'replacementPattern' => $this->replacementPattern instanceof AbstractTransfer ? $this->replacementPattern->toArray(true, true) : $this->replacementPattern,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'spyGiftCardBalanceLogs' => $this->spyGiftCardBalanceLogs instanceof AbstractTransfer ? $this->spyGiftCardBalanceLogs->toArray(true, true) : $this->addValuesToCollection($this->spyGiftCardBalanceLogs, true, true),
        ];
    }
}
