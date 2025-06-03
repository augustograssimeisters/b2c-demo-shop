<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpySalesOrderItemGiftCardEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_ITEM_GIFT_CARD = 'idSalesOrderItemGiftCard';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_ITEM = 'fkSalesOrderItem';

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
    public const PATTERN = 'pattern';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ITEM = 'spySalesOrderItem';

    /**
     * @var integer|null
     */
    protected $idSalesOrderItemGiftCard;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderItem;

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
    protected $pattern;

    /**
     * @var integer|null
     */
    protected $value;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    protected $spySalesOrderItem;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_item_gift_card' => 'idSalesOrderItemGiftCard',
        'idSalesOrderItemGiftCard' => 'idSalesOrderItemGiftCard',
        'IdSalesOrderItemGiftCard' => 'idSalesOrderItemGiftCard',
        'fk_sales_order_item' => 'fkSalesOrderItem',
        'fkSalesOrderItem' => 'fkSalesOrderItem',
        'FkSalesOrderItem' => 'fkSalesOrderItem',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'code' => 'code',
        'Code' => 'code',
        'pattern' => 'pattern',
        'Pattern' => 'pattern',
        'value' => 'value',
        'Value' => 'value',
        'spy_sales_order_item' => 'spySalesOrderItem',
        'spySalesOrderItem' => 'spySalesOrderItem',
        'SpySalesOrderItem' => 'spySalesOrderItem',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_ITEM_GIFT_CARD => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_item_gift_card',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_item',
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
        self::PATTERN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'pattern',
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
        self::SPY_SALES_ORDER_ITEM => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_item',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Sales\Persistence\SpySalesOrderItemGiftCard';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderItemGiftCard
     *
     * @return $this
     */
    public function setIdSalesOrderItemGiftCard($idSalesOrderItemGiftCard)
    {
        $this->idSalesOrderItemGiftCard = $idSalesOrderItemGiftCard;
        $this->modifiedProperties[self::ID_SALES_ORDER_ITEM_GIFT_CARD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderItemGiftCard()
    {
        return $this->idSalesOrderItemGiftCard;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderItemGiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderItemGiftCardOrFail($idSalesOrderItemGiftCard)
    {
        if ($idSalesOrderItemGiftCard === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM_GIFT_CARD);
        }

        return $this->setIdSalesOrderItemGiftCard($idSalesOrderItemGiftCard);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderItemGiftCardOrFail()
    {
        if ($this->idSalesOrderItemGiftCard === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM_GIFT_CARD);
        }

        return $this->idSalesOrderItemGiftCard;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderItemGiftCard()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_ITEM_GIFT_CARD);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderItem
     *
     * @return $this
     */
    public function setFkSalesOrderItem($fkSalesOrderItem)
    {
        $this->fkSalesOrderItem = $fkSalesOrderItem;
        $this->modifiedProperties[self::FK_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderItem()
    {
        return $this->fkSalesOrderItem;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderItemOrFail($fkSalesOrderItem)
    {
        if ($fkSalesOrderItem === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM);
        }

        return $this->setFkSalesOrderItem($fkSalesOrderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderItemOrFail()
    {
        if ($this->fkSalesOrderItem === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM);
        }

        return $this->fkSalesOrderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderItem()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_ITEM);

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
     * @param string|null $pattern
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
        $this->modifiedProperties[self::PATTERN] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @module 
     *
     * @param string|null $pattern
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPatternOrFail($pattern)
    {
        if ($pattern === null) {
            $this->throwNullValueException(static::PATTERN);
        }

        return $this->setPattern($pattern);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPatternOrFail()
    {
        if ($this->pattern === null) {
            $this->throwNullValueException(static::PATTERN);
        }

        return $this->pattern;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePattern()
    {
        $this->assertPropertyIsSet(self::PATTERN);

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
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null $spySalesOrderItem
     *
     * @return $this
     */
    public function setSpySalesOrderItem(SpySalesOrderItemEntityTransfer $spySalesOrderItem = null)
    {
        $this->spySalesOrderItem = $spySalesOrderItem;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    public function getSpySalesOrderItem()
    {
        return $this->spySalesOrderItem;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer $spySalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpySalesOrderItemOrFail(SpySalesOrderItemEntityTransfer $spySalesOrderItem)
    {
        return $this->setSpySalesOrderItem($spySalesOrderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer
     */
    public function getSpySalesOrderItemOrFail()
    {
        if ($this->spySalesOrderItem === null) {
            $this->throwNullValueException(static::SPY_SALES_ORDER_ITEM);
        }

        return $this->spySalesOrderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderItem()
    {
        $this->assertPropertyIsSet(self::SPY_SALES_ORDER_ITEM);

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
                case 'idSalesOrderItemGiftCard':
                case 'fkSalesOrderItem':
                case 'attributes':
                case 'code':
                case 'pattern':
                case 'value':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spySalesOrderItem':
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
                case 'idSalesOrderItemGiftCard':
                case 'fkSalesOrderItem':
                case 'attributes':
                case 'code':
                case 'pattern':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrderItem':
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
                case 'idSalesOrderItemGiftCard':
                case 'fkSalesOrderItem':
                case 'attributes':
                case 'code':
                case 'pattern':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrderItem':
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
            'idSalesOrderItemGiftCard' => $this->idSalesOrderItemGiftCard,
            'fkSalesOrderItem' => $this->fkSalesOrderItem,
            'attributes' => $this->attributes,
            'code' => $this->code,
            'pattern' => $this->pattern,
            'value' => $this->value,
            'spySalesOrderItem' => $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item_gift_card' => $this->idSalesOrderItemGiftCard,
            'fk_sales_order_item' => $this->fkSalesOrderItem,
            'attributes' => $this->attributes,
            'code' => $this->code,
            'pattern' => $this->pattern,
            'value' => $this->value,
            'spy_sales_order_item' => $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item_gift_card' => $this->idSalesOrderItemGiftCard instanceof AbstractTransfer ? $this->idSalesOrderItemGiftCard->toArray(true, false) : $this->idSalesOrderItemGiftCard,
            'fk_sales_order_item' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, false) : $this->fkSalesOrderItem,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'pattern' => $this->pattern instanceof AbstractTransfer ? $this->pattern->toArray(true, false) : $this->pattern,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'spy_sales_order_item' => $this->spySalesOrderItem instanceof AbstractTransfer ? $this->spySalesOrderItem->toArray(true, false) : $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderItemGiftCard' => $this->idSalesOrderItemGiftCard instanceof AbstractTransfer ? $this->idSalesOrderItemGiftCard->toArray(true, true) : $this->idSalesOrderItemGiftCard,
            'fkSalesOrderItem' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, true) : $this->fkSalesOrderItem,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'pattern' => $this->pattern instanceof AbstractTransfer ? $this->pattern->toArray(true, true) : $this->pattern,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'spySalesOrderItem' => $this->spySalesOrderItem instanceof AbstractTransfer ? $this->spySalesOrderItem->toArray(true, true) : $this->spySalesOrderItem,
        ];
    }
}
