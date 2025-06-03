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
class OrderStatusChangedTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TRANSACTION_DATE = 'transactionDate';

    /**
     * @var string
     */
    public const EMAIL_ADDRESS = 'emailAddress';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const USER_NAME = 'userName';

    /**
     * @var string
     */
    public const ORDER_ITEMS = 'orderItems';

    /**
     * @var string
     */
    public const MERCHANTS = 'merchants';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const STORE_NAME = 'storeName';

    /**
     * @var string
     */
    public const ORDER_REFERENCE = 'orderReference';

    /**
     * @var string
     */
    public const MESSAGE_ATTRIBUTES = 'messageAttributes';

    /**
     * @var string|null
     */
    protected $transactionDate;

    /**
     * @var string|null
     */
    protected $emailAddress;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var string|null
     */
    protected $userName;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\OrderItemTransfer>
     */
    protected $orderItems;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\OrderMerchantTransfer>
     */
    protected $merchants;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $storeName;

    /**
     * @var string|null
     */
    protected $orderReference;

    /**
     * @var \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    protected $messageAttributes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'transaction_date' => 'transactionDate',
        'transactionDate' => 'transactionDate',
        'TransactionDate' => 'transactionDate',
        'email_address' => 'emailAddress',
        'emailAddress' => 'emailAddress',
        'EmailAddress' => 'emailAddress',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'user_name' => 'userName',
        'userName' => 'userName',
        'UserName' => 'userName',
        'order_items' => 'orderItems',
        'orderItems' => 'orderItems',
        'OrderItems' => 'orderItems',
        'merchants' => 'merchants',
        'Merchants' => 'merchants',
        'status' => 'status',
        'Status' => 'status',
        'store_name' => 'storeName',
        'storeName' => 'storeName',
        'StoreName' => 'storeName',
        'order_reference' => 'orderReference',
        'orderReference' => 'orderReference',
        'OrderReference' => 'orderReference',
        'message_attributes' => 'messageAttributes',
        'messageAttributes' => 'messageAttributes',
        'MessageAttributes' => 'messageAttributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TRANSACTION_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'transaction_date',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EMAIL_ADDRESS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'email_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'user_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_ITEMS => [
            'type' => 'Generated\Shared\Transfer\OrderItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'order_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANTS => [
            'type' => 'Generated\Shared\Transfer\OrderMerchantTransfer',
            'type_shim' => null,
            'name_underscore' => 'merchants',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATUS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'status',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGE_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\MessageAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'message_attributes',
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
     * @module Oms
     *
     * @param string|null $transactionDate
     *
     * @return $this
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;
        $this->modifiedProperties[self::TRANSACTION_DATE] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return string|null
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * @module Oms
     *
     * @param string|null $transactionDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTransactionDateOrFail($transactionDate)
    {
        if ($transactionDate === null) {
            $this->throwNullValueException(static::TRANSACTION_DATE);
        }

        return $this->setTransactionDate($transactionDate);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTransactionDateOrFail()
    {
        if ($this->transactionDate === null) {
            $this->throwNullValueException(static::TRANSACTION_DATE);
        }

        return $this->transactionDate;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTransactionDate()
    {
        $this->assertPropertyIsSet(self::TRANSACTION_DATE);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param string|null $emailAddress
     *
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        $this->modifiedProperties[self::EMAIL_ADDRESS] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @module Oms
     *
     * @param string|null $emailAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEmailAddressOrFail($emailAddress)
    {
        if ($emailAddress === null) {
            $this->throwNullValueException(static::EMAIL_ADDRESS);
        }

        return $this->setEmailAddress($emailAddress);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEmailAddressOrFail()
    {
        if ($this->emailAddress === null) {
            $this->throwNullValueException(static::EMAIL_ADDRESS);
        }

        return $this->emailAddress;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEmailAddress()
    {
        $this->assertPropertyIsSet(self::EMAIL_ADDRESS);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module Oms
     *
     * @param string|null $localeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleNameOrFail($localeName)
    {
        if ($localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->setLocaleName($localeName);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleNameOrFail()
    {
        if ($this->localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->localeName;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleName()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAME);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param string|null $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        $this->modifiedProperties[self::USER_NAME] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @module Oms
     *
     * @param string|null $userName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserNameOrFail($userName)
    {
        if ($userName === null) {
            $this->throwNullValueException(static::USER_NAME);
        }

        return $this->setUserName($userName);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUserNameOrFail()
    {
        if ($this->userName === null) {
            $this->throwNullValueException(static::USER_NAME);
        }

        return $this->userName;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUserName()
    {
        $this->assertPropertyIsSet(self::USER_NAME);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\OrderItemTransfer> $orderItems
     *
     * @return $this
     */
    public function setOrderItems(ArrayObject $orderItems)
    {
        $this->orderItems = $orderItems;
        $this->modifiedProperties[self::ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\OrderItemTransfer>
     */
    public function getOrderItems()
    {
        return $this->orderItems;
    }

    /**
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\OrderItemTransfer $orderItem
     *
     * @return $this
     */
    public function addOrderItem(OrderItemTransfer $orderItem)
    {
        $this->orderItems[] = $orderItem;
        $this->modifiedProperties[self::ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItems()
    {
        $this->assertCollectionPropertyIsSet(self::ORDER_ITEMS);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\OrderMerchantTransfer> $merchants
     *
     * @return $this
     */
    public function setMerchants(ArrayObject $merchants)
    {
        $this->merchants = $merchants;
        $this->modifiedProperties[self::MERCHANTS] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\OrderMerchantTransfer>
     */
    public function getMerchants()
    {
        return $this->merchants;
    }

    /**
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\OrderMerchantTransfer $merchant
     *
     * @return $this
     */
    public function addMerchant(OrderMerchantTransfer $merchant)
    {
        $this->merchants[] = $merchant;
        $this->modifiedProperties[self::MERCHANTS] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchants()
    {
        $this->assertCollectionPropertyIsSet(self::MERCHANTS);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module Oms
     *
     * @param string|null $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail($status)
    {
        if ($status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->setStatus($status);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusOrFail()
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatus()
    {
        $this->assertPropertyIsSet(self::STATUS);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param string|null $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        $this->modifiedProperties[self::STORE_NAME] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @module Oms
     *
     * @param string|null $storeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNameOrFail($storeName)
    {
        if ($storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->setStoreName($storeName);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreNameOrFail()
    {
        if ($this->storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->storeName;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreName()
    {
        $this->assertPropertyIsSet(self::STORE_NAME);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param string|null $orderReference
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        $this->modifiedProperties[self::ORDER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @module Oms
     *
     * @param string|null $orderReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderReferenceOrFail($orderReference)
    {
        if ($orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->setOrderReference($orderReference);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderReferenceOrFail()
    {
        if ($this->orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->orderReference;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderReference()
    {
        $this->assertPropertyIsSet(self::ORDER_REFERENCE);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\MessageAttributesTransfer|null $messageAttributes
     *
     * @return $this
     */
    public function setMessageAttributes(MessageAttributesTransfer $messageAttributes = null)
    {
        $this->messageAttributes = $messageAttributes;
        $this->modifiedProperties[self::MESSAGE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    public function getMessageAttributes()
    {
        return $this->messageAttributes;
    }

    /**
     * @module Oms
     *
     * @param \Generated\Shared\Transfer\MessageAttributesTransfer $messageAttributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageAttributesOrFail(MessageAttributesTransfer $messageAttributes)
    {
        return $this->setMessageAttributes($messageAttributes);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer
     */
    public function getMessageAttributesOrFail()
    {
        if ($this->messageAttributes === null) {
            $this->throwNullValueException(static::MESSAGE_ATTRIBUTES);
        }

        return $this->messageAttributes;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessageAttributes()
    {
        $this->assertPropertyIsSet(self::MESSAGE_ATTRIBUTES);

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
                case 'transactionDate':
                case 'emailAddress':
                case 'localeName':
                case 'userName':
                case 'status':
                case 'storeName':
                case 'orderReference':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'messageAttributes':
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
                case 'orderItems':
                case 'merchants':
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
                case 'transactionDate':
                case 'emailAddress':
                case 'localeName':
                case 'userName':
                case 'status':
                case 'storeName':
                case 'orderReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'orderItems':
                case 'merchants':
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
                case 'transactionDate':
                case 'emailAddress':
                case 'localeName':
                case 'userName':
                case 'status':
                case 'storeName':
                case 'orderReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'orderItems':
                case 'merchants':
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
        $this->orderItems = $this->orderItems ?: new ArrayObject();
        $this->merchants = $this->merchants ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'transactionDate' => $this->transactionDate,
            'emailAddress' => $this->emailAddress,
            'localeName' => $this->localeName,
            'userName' => $this->userName,
            'status' => $this->status,
            'storeName' => $this->storeName,
            'orderReference' => $this->orderReference,
            'messageAttributes' => $this->messageAttributes,
            'orderItems' => $this->orderItems,
            'merchants' => $this->merchants,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'transaction_date' => $this->transactionDate,
            'email_address' => $this->emailAddress,
            'locale_name' => $this->localeName,
            'user_name' => $this->userName,
            'status' => $this->status,
            'store_name' => $this->storeName,
            'order_reference' => $this->orderReference,
            'message_attributes' => $this->messageAttributes,
            'order_items' => $this->orderItems,
            'merchants' => $this->merchants,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'transaction_date' => $this->transactionDate instanceof AbstractTransfer ? $this->transactionDate->toArray(true, false) : $this->transactionDate,
            'email_address' => $this->emailAddress instanceof AbstractTransfer ? $this->emailAddress->toArray(true, false) : $this->emailAddress,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'user_name' => $this->userName instanceof AbstractTransfer ? $this->userName->toArray(true, false) : $this->userName,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'store_name' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, false) : $this->storeName,
            'order_reference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, false) : $this->orderReference,
            'message_attributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, false) : $this->messageAttributes,
            'order_items' => $this->orderItems instanceof AbstractTransfer ? $this->orderItems->toArray(true, false) : $this->addValuesToCollection($this->orderItems, true, false),
            'merchants' => $this->merchants instanceof AbstractTransfer ? $this->merchants->toArray(true, false) : $this->addValuesToCollection($this->merchants, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'transactionDate' => $this->transactionDate instanceof AbstractTransfer ? $this->transactionDate->toArray(true, true) : $this->transactionDate,
            'emailAddress' => $this->emailAddress instanceof AbstractTransfer ? $this->emailAddress->toArray(true, true) : $this->emailAddress,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'userName' => $this->userName instanceof AbstractTransfer ? $this->userName->toArray(true, true) : $this->userName,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'storeName' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, true) : $this->storeName,
            'orderReference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, true) : $this->orderReference,
            'messageAttributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, true) : $this->messageAttributes,
            'orderItems' => $this->orderItems instanceof AbstractTransfer ? $this->orderItems->toArray(true, true) : $this->addValuesToCollection($this->orderItems, true, true),
            'merchants' => $this->merchants instanceof AbstractTransfer ? $this->merchants->toArray(true, true) : $this->addValuesToCollection($this->merchants, true, true),
        ];
    }
}
