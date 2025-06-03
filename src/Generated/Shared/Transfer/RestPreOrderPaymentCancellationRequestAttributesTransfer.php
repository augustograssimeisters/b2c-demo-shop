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
class RestPreOrderPaymentCancellationRequestAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PAYMENT = 'payment';

    /**
     * @var string
     */
    public const PRE_ORDER_PAYMENT_DATA = 'preOrderPaymentData';

    /**
     * @var \Generated\Shared\Transfer\RestPaymentTransfer|null
     */
    protected $payment;

    /**
     * @var array
     */
    protected $preOrderPaymentData = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'payment' => 'payment',
        'Payment' => 'payment',
        'pre_order_payment_data' => 'preOrderPaymentData',
        'preOrderPaymentData' => 'preOrderPaymentData',
        'PreOrderPaymentData' => 'preOrderPaymentData',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PAYMENT => [
            'type' => 'Generated\Shared\Transfer\RestPaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'payment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRE_ORDER_PAYMENT_DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'pre_order_payment_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestPaymentTransfer|null $payment
     *
     * @return $this
     */
    public function setPayment(RestPaymentTransfer $payment = null)
    {
        $this->payment = $payment;
        $this->modifiedProperties[self::PAYMENT] = true;

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @return \Generated\Shared\Transfer\RestPaymentTransfer|null
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @module PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestPaymentTransfer $payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentOrFail(RestPaymentTransfer $payment)
    {
        return $this->setPayment($payment);
    }

    /**
     * @module PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestPaymentTransfer
     */
    public function getPaymentOrFail()
    {
        if ($this->payment === null) {
            $this->throwNullValueException(static::PAYMENT);
        }

        return $this->payment;
    }

    /**
     * @module PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayment()
    {
        $this->assertPropertyIsSet(self::PAYMENT);

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @param array $preOrderPaymentData
     *
     * @return $this
     */
    public function setPreOrderPaymentData($preOrderPaymentData)
    {
        if ($preOrderPaymentData === null) {
            $preOrderPaymentData = [];
        }

        $this->preOrderPaymentData = $preOrderPaymentData;
        $this->modifiedProperties[self::PRE_ORDER_PAYMENT_DATA] = true;

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @return array
     */
    public function getPreOrderPaymentData()
    {
        return $this->preOrderPaymentData;
    }

    /**
     * @module PaymentsRestApi
     *
     * @param string|int $preOrderPaymentDatumKey
     * @param mixed $preOrderPaymentDatumValue
     *
     * @return $this
     */
    public function addPreOrderPaymentDatum($preOrderPaymentDatumKey, $preOrderPaymentDatumValue)
    {
        $this->preOrderPaymentData[$preOrderPaymentDatumKey] = $preOrderPaymentDatumValue;
        $this->modifiedProperties[self::PRE_ORDER_PAYMENT_DATA] = true;

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePreOrderPaymentData()
    {
        $this->assertPropertyIsSet(self::PRE_ORDER_PAYMENT_DATA);

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
                case 'preOrderPaymentData':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'payment':
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
                case 'preOrderPaymentData':
                    $values[$arrayKey] = $value;

                    break;
                case 'payment':
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
                case 'preOrderPaymentData':
                    $values[$arrayKey] = $value;

                    break;
                case 'payment':
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
            'preOrderPaymentData' => $this->preOrderPaymentData,
            'payment' => $this->payment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'pre_order_payment_data' => $this->preOrderPaymentData,
            'payment' => $this->payment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'pre_order_payment_data' => $this->preOrderPaymentData instanceof AbstractTransfer ? $this->preOrderPaymentData->toArray(true, false) : $this->preOrderPaymentData,
            'payment' => $this->payment instanceof AbstractTransfer ? $this->payment->toArray(true, false) : $this->payment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'preOrderPaymentData' => $this->preOrderPaymentData instanceof AbstractTransfer ? $this->preOrderPaymentData->toArray(true, true) : $this->preOrderPaymentData,
            'payment' => $this->payment instanceof AbstractTransfer ? $this->payment->toArray(true, true) : $this->payment,
        ];
    }
}
