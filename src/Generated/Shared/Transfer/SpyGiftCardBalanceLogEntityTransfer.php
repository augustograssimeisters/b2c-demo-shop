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
class SpyGiftCardBalanceLogEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_GIFT_CARD_BALANCE_LOG = 'idGiftCardBalanceLog';

    /**
     * @var string
     */
    public const FK_GIFT_CARD = 'fkGiftCard';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const SPY_GIFT_CARD = 'spyGiftCard';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER = 'spySalesOrder';

    /**
     * @var integer|null
     */
    protected $idGiftCardBalanceLog;

    /**
     * @var integer|null
     */
    protected $fkGiftCard;

    /**
     * @var integer|null
     */
    protected $fkSalesOrder;

    /**
     * @var integer|null
     */
    protected $value;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var \Generated\Shared\Transfer\SpyGiftCardEntityTransfer|null
     */
    protected $spyGiftCard;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    protected $spySalesOrder;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_gift_card_balance_log' => 'idGiftCardBalanceLog',
        'idGiftCardBalanceLog' => 'idGiftCardBalanceLog',
        'IdGiftCardBalanceLog' => 'idGiftCardBalanceLog',
        'fk_gift_card' => 'fkGiftCard',
        'fkGiftCard' => 'fkGiftCard',
        'FkGiftCard' => 'fkGiftCard',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'value' => 'value',
        'Value' => 'value',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'spy_gift_card' => 'spyGiftCard',
        'spyGiftCard' => 'spyGiftCard',
        'SpyGiftCard' => 'spyGiftCard',
        'spy_sales_order' => 'spySalesOrder',
        'spySalesOrder' => 'spySalesOrder',
        'SpySalesOrder' => 'spySalesOrder',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_GIFT_CARD_BALANCE_LOG => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_gift_card_balance_log',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_GIFT_CARD => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_gift_card',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order',
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
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_GIFT_CARD => [
            'type' => 'Generated\Shared\Transfer\SpyGiftCardEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_gift_card',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order',
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
    public static $entityNamespace = 'Orm\Zed\GiftCardBalance\Persistence\SpyGiftCardBalanceLog';


    /**
     * @module 
     *
     * @param integer|null $idGiftCardBalanceLog
     *
     * @return $this
     */
    public function setIdGiftCardBalanceLog($idGiftCardBalanceLog)
    {
        $this->idGiftCardBalanceLog = $idGiftCardBalanceLog;
        $this->modifiedProperties[self::ID_GIFT_CARD_BALANCE_LOG] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdGiftCardBalanceLog()
    {
        return $this->idGiftCardBalanceLog;
    }

    /**
     * @module 
     *
     * @param integer|null $idGiftCardBalanceLog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdGiftCardBalanceLogOrFail($idGiftCardBalanceLog)
    {
        if ($idGiftCardBalanceLog === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_BALANCE_LOG);
        }

        return $this->setIdGiftCardBalanceLog($idGiftCardBalanceLog);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdGiftCardBalanceLogOrFail()
    {
        if ($this->idGiftCardBalanceLog === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_BALANCE_LOG);
        }

        return $this->idGiftCardBalanceLog;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdGiftCardBalanceLog()
    {
        $this->assertPropertyIsSet(self::ID_GIFT_CARD_BALANCE_LOG);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkGiftCard
     *
     * @return $this
     */
    public function setFkGiftCard($fkGiftCard)
    {
        $this->fkGiftCard = $fkGiftCard;
        $this->modifiedProperties[self::FK_GIFT_CARD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkGiftCard()
    {
        return $this->fkGiftCard;
    }

    /**
     * @module 
     *
     * @param integer|null $fkGiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkGiftCardOrFail($fkGiftCard)
    {
        if ($fkGiftCard === null) {
            $this->throwNullValueException(static::FK_GIFT_CARD);
        }

        return $this->setFkGiftCard($fkGiftCard);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkGiftCardOrFail()
    {
        if ($this->fkGiftCard === null) {
            $this->throwNullValueException(static::FK_GIFT_CARD);
        }

        return $this->fkGiftCard;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkGiftCard()
    {
        $this->assertPropertyIsSet(self::FK_GIFT_CARD);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
     *
     * @return $this
     */
    public function setFkSalesOrder($fkSalesOrder)
    {
        $this->fkSalesOrder = $fkSalesOrder;
        $this->modifiedProperties[self::FK_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrder()
    {
        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderOrFail($fkSalesOrder)
    {
        if ($fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->setFkSalesOrder($fkSalesOrder);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderOrFail()
    {
        if ($this->fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrder()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER);

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
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module 
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyGiftCardEntityTransfer|null $spyGiftCard
     *
     * @return $this
     */
    public function setSpyGiftCard(SpyGiftCardEntityTransfer $spyGiftCard = null)
    {
        $this->spyGiftCard = $spyGiftCard;
        $this->modifiedProperties[self::SPY_GIFT_CARD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyGiftCardEntityTransfer|null
     */
    public function getSpyGiftCard()
    {
        return $this->spyGiftCard;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyGiftCardEntityTransfer $spyGiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyGiftCardOrFail(SpyGiftCardEntityTransfer $spyGiftCard)
    {
        return $this->setSpyGiftCard($spyGiftCard);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyGiftCardEntityTransfer
     */
    public function getSpyGiftCardOrFail()
    {
        if ($this->spyGiftCard === null) {
            $this->throwNullValueException(static::SPY_GIFT_CARD);
        }

        return $this->spyGiftCard;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyGiftCard()
    {
        $this->assertPropertyIsSet(self::SPY_GIFT_CARD);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null $spySalesOrder
     *
     * @return $this
     */
    public function setSpySalesOrder(SpySalesOrderEntityTransfer $spySalesOrder = null)
    {
        $this->spySalesOrder = $spySalesOrder;
        $this->modifiedProperties[self::SPY_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    public function getSpySalesOrder()
    {
        return $this->spySalesOrder;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $spySalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpySalesOrderOrFail(SpySalesOrderEntityTransfer $spySalesOrder)
    {
        return $this->setSpySalesOrder($spySalesOrder);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer
     */
    public function getSpySalesOrderOrFail()
    {
        if ($this->spySalesOrder === null) {
            $this->throwNullValueException(static::SPY_SALES_ORDER);
        }

        return $this->spySalesOrder;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrder()
    {
        $this->assertPropertyIsSet(self::SPY_SALES_ORDER);

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
                case 'idGiftCardBalanceLog':
                case 'fkGiftCard':
                case 'fkSalesOrder':
                case 'value':
                case 'createdAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyGiftCard':
                case 'spySalesOrder':
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
                case 'idGiftCardBalanceLog':
                case 'fkGiftCard':
                case 'fkSalesOrder':
                case 'value':
                case 'createdAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyGiftCard':
                case 'spySalesOrder':
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
                case 'idGiftCardBalanceLog':
                case 'fkGiftCard':
                case 'fkSalesOrder':
                case 'value':
                case 'createdAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyGiftCard':
                case 'spySalesOrder':
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
            'idGiftCardBalanceLog' => $this->idGiftCardBalanceLog,
            'fkGiftCard' => $this->fkGiftCard,
            'fkSalesOrder' => $this->fkSalesOrder,
            'value' => $this->value,
            'createdAt' => $this->createdAt,
            'spyGiftCard' => $this->spyGiftCard,
            'spySalesOrder' => $this->spySalesOrder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_balance_log' => $this->idGiftCardBalanceLog,
            'fk_gift_card' => $this->fkGiftCard,
            'fk_sales_order' => $this->fkSalesOrder,
            'value' => $this->value,
            'created_at' => $this->createdAt,
            'spy_gift_card' => $this->spyGiftCard,
            'spy_sales_order' => $this->spySalesOrder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_balance_log' => $this->idGiftCardBalanceLog instanceof AbstractTransfer ? $this->idGiftCardBalanceLog->toArray(true, false) : $this->idGiftCardBalanceLog,
            'fk_gift_card' => $this->fkGiftCard instanceof AbstractTransfer ? $this->fkGiftCard->toArray(true, false) : $this->fkGiftCard,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'spy_gift_card' => $this->spyGiftCard instanceof AbstractTransfer ? $this->spyGiftCard->toArray(true, false) : $this->spyGiftCard,
            'spy_sales_order' => $this->spySalesOrder instanceof AbstractTransfer ? $this->spySalesOrder->toArray(true, false) : $this->spySalesOrder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idGiftCardBalanceLog' => $this->idGiftCardBalanceLog instanceof AbstractTransfer ? $this->idGiftCardBalanceLog->toArray(true, true) : $this->idGiftCardBalanceLog,
            'fkGiftCard' => $this->fkGiftCard instanceof AbstractTransfer ? $this->fkGiftCard->toArray(true, true) : $this->fkGiftCard,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'spyGiftCard' => $this->spyGiftCard instanceof AbstractTransfer ? $this->spyGiftCard->toArray(true, true) : $this->spyGiftCard,
            'spySalesOrder' => $this->spySalesOrder instanceof AbstractTransfer ? $this->spySalesOrder->toArray(true, true) : $this->spySalesOrder,
        ];
    }
}
