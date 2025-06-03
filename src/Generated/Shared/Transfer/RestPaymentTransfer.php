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
class RestPaymentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PAYMENT_PROVIDER_NAME = 'paymentProviderName';

    /**
     * @var string
     */
    public const PAYMENT_METHOD_NAME = 'paymentMethodName';

    /**
     * @var string
     */
    public const PAYMENT_SELECTION = 'paymentSelection';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const ADDITIONAL_PAYMENT_DATA = 'additionalPaymentData';

    /**
     * @var string
     */
    public const DUMMY_PAYMENT = 'dummyPayment';

    /**
     * @var string
     */
    public const DUMMY_PAYMENT_INVOICE = 'dummyPaymentInvoice';

    /**
     * @var string
     */
    public const DUMMY_PAYMENT_CREDIT_CARD = 'dummyPaymentCreditCard';

    /**
     * @var string|null
     */
    protected $paymentProviderName;

    /**
     * @var string|null
     */
    protected $paymentMethodName;

    /**
     * @var string|null
     */
    protected $paymentSelection;

    /**
     * @var int|null
     */
    protected $amount;

    /**
     * @var array
     */
    protected $additionalPaymentData = [];

    /**
     * @var \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    protected $dummyPayment;

    /**
     * @var \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    protected $dummyPaymentInvoice;

    /**
     * @var \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    protected $dummyPaymentCreditCard;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'payment_provider_name' => 'paymentProviderName',
        'paymentProviderName' => 'paymentProviderName',
        'PaymentProviderName' => 'paymentProviderName',
        'payment_method_name' => 'paymentMethodName',
        'paymentMethodName' => 'paymentMethodName',
        'PaymentMethodName' => 'paymentMethodName',
        'payment_selection' => 'paymentSelection',
        'paymentSelection' => 'paymentSelection',
        'PaymentSelection' => 'paymentSelection',
        'amount' => 'amount',
        'Amount' => 'amount',
        'additional_payment_data' => 'additionalPaymentData',
        'additionalPaymentData' => 'additionalPaymentData',
        'AdditionalPaymentData' => 'additionalPaymentData',
        'dummy_payment' => 'dummyPayment',
        'dummyPayment' => 'dummyPayment',
        'DummyPayment' => 'dummyPayment',
        'dummy_payment_invoice' => 'dummyPaymentInvoice',
        'dummyPaymentInvoice' => 'dummyPaymentInvoice',
        'DummyPaymentInvoice' => 'dummyPaymentInvoice',
        'dummy_payment_credit_card' => 'dummyPaymentCreditCard',
        'dummyPaymentCreditCard' => 'dummyPaymentCreditCard',
        'DummyPaymentCreditCard' => 'dummyPaymentCreditCard',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PAYMENT_PROVIDER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_provider_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_METHOD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_method_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_SELECTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_selection',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ADDITIONAL_PAYMENT_DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'additional_payment_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DUMMY_PAYMENT => [
            'type' => 'Generated\Shared\Transfer\DummyPaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'dummy_payment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DUMMY_PAYMENT_INVOICE => [
            'type' => 'Generated\Shared\Transfer\DummyPaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'dummy_payment_invoice',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DUMMY_PAYMENT_CREDIT_CARD => [
            'type' => 'Generated\Shared\Transfer\DummyPaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'dummy_payment_credit_card',
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
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param string|null $paymentProviderName
     *
     * @return $this
     */
    public function setPaymentProviderName($paymentProviderName)
    {
        $this->paymentProviderName = $paymentProviderName;
        $this->modifiedProperties[self::PAYMENT_PROVIDER_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @return string|null
     */
    public function getPaymentProviderName()
    {
        return $this->paymentProviderName;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param string|null $paymentProviderName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentProviderNameOrFail($paymentProviderName)
    {
        if ($paymentProviderName === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDER_NAME);
        }

        return $this->setPaymentProviderName($paymentProviderName);
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentProviderNameOrFail()
    {
        if ($this->paymentProviderName === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDER_NAME);
        }

        return $this->paymentProviderName;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentProviderName()
    {
        $this->assertPropertyIsSet(self::PAYMENT_PROVIDER_NAME);

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param string|null $paymentMethodName
     *
     * @return $this
     */
    public function setPaymentMethodName($paymentMethodName)
    {
        $this->paymentMethodName = $paymentMethodName;
        $this->modifiedProperties[self::PAYMENT_METHOD_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @return string|null
     */
    public function getPaymentMethodName()
    {
        return $this->paymentMethodName;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param string|null $paymentMethodName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentMethodNameOrFail($paymentMethodName)
    {
        if ($paymentMethodName === null) {
            $this->throwNullValueException(static::PAYMENT_METHOD_NAME);
        }

        return $this->setPaymentMethodName($paymentMethodName);
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentMethodNameOrFail()
    {
        if ($this->paymentMethodName === null) {
            $this->throwNullValueException(static::PAYMENT_METHOD_NAME);
        }

        return $this->paymentMethodName;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentMethodName()
    {
        $this->assertPropertyIsSet(self::PAYMENT_METHOD_NAME);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $paymentSelection
     *
     * @return $this
     */
    public function setPaymentSelection($paymentSelection)
    {
        $this->paymentSelection = $paymentSelection;
        $this->modifiedProperties[self::PAYMENT_SELECTION] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return string|null
     */
    public function getPaymentSelection()
    {
        return $this->paymentSelection;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $paymentSelection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentSelectionOrFail($paymentSelection)
    {
        if ($paymentSelection === null) {
            $this->throwNullValueException(static::PAYMENT_SELECTION);
        }

        return $this->setPaymentSelection($paymentSelection);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentSelectionOrFail()
    {
        if ($this->paymentSelection === null) {
            $this->throwNullValueException(static::PAYMENT_SELECTION);
        }

        return $this->paymentSelection;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentSelection()
    {
        $this->assertPropertyIsSet(self::PAYMENT_SELECTION);

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @param int|null $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        $this->modifiedProperties[self::AMOUNT] = true;

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module PaymentsRestApi
     *
     * @param int|null $amount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountOrFail($amount)
    {
        if ($amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->setAmount($amount);
    }

    /**
     * @module PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAmountOrFail()
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmount()
    {
        $this->assertPropertyIsSet(self::AMOUNT);

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @param array|null $additionalPaymentData
     *
     * @return $this
     */
    public function setAdditionalPaymentData(array $additionalPaymentData = null)
    {
        if ($additionalPaymentData === null) {
            $additionalPaymentData = [];
        }

        $this->additionalPaymentData = $additionalPaymentData;
        $this->modifiedProperties[self::ADDITIONAL_PAYMENT_DATA] = true;

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @return array
     */
    public function getAdditionalPaymentData()
    {
        return $this->additionalPaymentData;
    }

    /**
     * @module PaymentsRestApi
     *
     * @param mixed $additionalPaymentData
     *
     * @return $this
     */
    public function addAdditionalPaymentData($additionalPaymentData)
    {
        $this->additionalPaymentData[] = $additionalPaymentData;
        $this->modifiedProperties[self::ADDITIONAL_PAYMENT_DATA] = true;

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAdditionalPaymentData()
    {
        $this->assertPropertyIsSet(self::ADDITIONAL_PAYMENT_DATA);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer|null $dummyPayment
     *
     * @return $this
     */
    public function setDummyPayment(DummyPaymentTransfer $dummyPayment = null)
    {
        $this->dummyPayment = $dummyPayment;
        $this->modifiedProperties[self::DUMMY_PAYMENT] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    public function getDummyPayment()
    {
        return $this->dummyPayment;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer $dummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDummyPaymentOrFail(DummyPaymentTransfer $dummyPayment)
    {
        return $this->setDummyPayment($dummyPayment);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer
     */
    public function getDummyPaymentOrFail()
    {
        if ($this->dummyPayment === null) {
            $this->throwNullValueException(static::DUMMY_PAYMENT);
        }

        return $this->dummyPayment;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDummyPayment()
    {
        $this->assertPropertyIsSet(self::DUMMY_PAYMENT);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer|null $dummyPaymentInvoice
     *
     * @return $this
     */
    public function setDummyPaymentInvoice(DummyPaymentTransfer $dummyPaymentInvoice = null)
    {
        $this->dummyPaymentInvoice = $dummyPaymentInvoice;
        $this->modifiedProperties[self::DUMMY_PAYMENT_INVOICE] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    public function getDummyPaymentInvoice()
    {
        return $this->dummyPaymentInvoice;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer $dummyPaymentInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDummyPaymentInvoiceOrFail(DummyPaymentTransfer $dummyPaymentInvoice)
    {
        return $this->setDummyPaymentInvoice($dummyPaymentInvoice);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer
     */
    public function getDummyPaymentInvoiceOrFail()
    {
        if ($this->dummyPaymentInvoice === null) {
            $this->throwNullValueException(static::DUMMY_PAYMENT_INVOICE);
        }

        return $this->dummyPaymentInvoice;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDummyPaymentInvoice()
    {
        $this->assertPropertyIsSet(self::DUMMY_PAYMENT_INVOICE);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer|null $dummyPaymentCreditCard
     *
     * @return $this
     */
    public function setDummyPaymentCreditCard(DummyPaymentTransfer $dummyPaymentCreditCard = null)
    {
        $this->dummyPaymentCreditCard = $dummyPaymentCreditCard;
        $this->modifiedProperties[self::DUMMY_PAYMENT_CREDIT_CARD] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer|null
     */
    public function getDummyPaymentCreditCard()
    {
        return $this->dummyPaymentCreditCard;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\DummyPaymentTransfer $dummyPaymentCreditCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDummyPaymentCreditCardOrFail(DummyPaymentTransfer $dummyPaymentCreditCard)
    {
        return $this->setDummyPaymentCreditCard($dummyPaymentCreditCard);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DummyPaymentTransfer
     */
    public function getDummyPaymentCreditCardOrFail()
    {
        if ($this->dummyPaymentCreditCard === null) {
            $this->throwNullValueException(static::DUMMY_PAYMENT_CREDIT_CARD);
        }

        return $this->dummyPaymentCreditCard;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDummyPaymentCreditCard()
    {
        $this->assertPropertyIsSet(self::DUMMY_PAYMENT_CREDIT_CARD);

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
                case 'paymentProviderName':
                case 'paymentMethodName':
                case 'paymentSelection':
                case 'amount':
                case 'additionalPaymentData':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'dummyPayment':
                case 'dummyPaymentInvoice':
                case 'dummyPaymentCreditCard':
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
                case 'paymentProviderName':
                case 'paymentMethodName':
                case 'paymentSelection':
                case 'amount':
                case 'additionalPaymentData':
                    $values[$arrayKey] = $value;

                    break;
                case 'dummyPayment':
                case 'dummyPaymentInvoice':
                case 'dummyPaymentCreditCard':
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
                case 'paymentProviderName':
                case 'paymentMethodName':
                case 'paymentSelection':
                case 'amount':
                case 'additionalPaymentData':
                    $values[$arrayKey] = $value;

                    break;
                case 'dummyPayment':
                case 'dummyPaymentInvoice':
                case 'dummyPaymentCreditCard':
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
            'paymentProviderName' => $this->paymentProviderName,
            'paymentMethodName' => $this->paymentMethodName,
            'paymentSelection' => $this->paymentSelection,
            'amount' => $this->amount,
            'additionalPaymentData' => $this->additionalPaymentData,
            'dummyPayment' => $this->dummyPayment,
            'dummyPaymentInvoice' => $this->dummyPaymentInvoice,
            'dummyPaymentCreditCard' => $this->dummyPaymentCreditCard,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'payment_provider_name' => $this->paymentProviderName,
            'payment_method_name' => $this->paymentMethodName,
            'payment_selection' => $this->paymentSelection,
            'amount' => $this->amount,
            'additional_payment_data' => $this->additionalPaymentData,
            'dummy_payment' => $this->dummyPayment,
            'dummy_payment_invoice' => $this->dummyPaymentInvoice,
            'dummy_payment_credit_card' => $this->dummyPaymentCreditCard,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'payment_provider_name' => $this->paymentProviderName instanceof AbstractTransfer ? $this->paymentProviderName->toArray(true, false) : $this->paymentProviderName,
            'payment_method_name' => $this->paymentMethodName instanceof AbstractTransfer ? $this->paymentMethodName->toArray(true, false) : $this->paymentMethodName,
            'payment_selection' => $this->paymentSelection instanceof AbstractTransfer ? $this->paymentSelection->toArray(true, false) : $this->paymentSelection,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'additional_payment_data' => $this->additionalPaymentData instanceof AbstractTransfer ? $this->additionalPaymentData->toArray(true, false) : $this->additionalPaymentData,
            'dummy_payment' => $this->dummyPayment instanceof AbstractTransfer ? $this->dummyPayment->toArray(true, false) : $this->dummyPayment,
            'dummy_payment_invoice' => $this->dummyPaymentInvoice instanceof AbstractTransfer ? $this->dummyPaymentInvoice->toArray(true, false) : $this->dummyPaymentInvoice,
            'dummy_payment_credit_card' => $this->dummyPaymentCreditCard instanceof AbstractTransfer ? $this->dummyPaymentCreditCard->toArray(true, false) : $this->dummyPaymentCreditCard,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'paymentProviderName' => $this->paymentProviderName instanceof AbstractTransfer ? $this->paymentProviderName->toArray(true, true) : $this->paymentProviderName,
            'paymentMethodName' => $this->paymentMethodName instanceof AbstractTransfer ? $this->paymentMethodName->toArray(true, true) : $this->paymentMethodName,
            'paymentSelection' => $this->paymentSelection instanceof AbstractTransfer ? $this->paymentSelection->toArray(true, true) : $this->paymentSelection,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'additionalPaymentData' => $this->additionalPaymentData instanceof AbstractTransfer ? $this->additionalPaymentData->toArray(true, true) : $this->additionalPaymentData,
            'dummyPayment' => $this->dummyPayment instanceof AbstractTransfer ? $this->dummyPayment->toArray(true, true) : $this->dummyPayment,
            'dummyPaymentInvoice' => $this->dummyPaymentInvoice instanceof AbstractTransfer ? $this->dummyPaymentInvoice->toArray(true, true) : $this->dummyPaymentInvoice,
            'dummyPaymentCreditCard' => $this->dummyPaymentCreditCard instanceof AbstractTransfer ? $this->dummyPaymentCreditCard->toArray(true, true) : $this->dummyPaymentCreditCard,
        ];
    }
}
