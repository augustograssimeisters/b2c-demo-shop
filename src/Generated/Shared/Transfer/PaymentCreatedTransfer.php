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
class PaymentCreatedTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ENTITY_REFERENCE = 'entityReference';

    /**
     * @var string
     */
    public const PAYMENT_REFERENCE = 'paymentReference';

    /**
     * @var string
     */
    public const DETAILS = 'details';

    /**
     * @var string
     */
    public const MESSAGE_ATTRIBUTES = 'messageAttributes';

    /**
     * @var string|null
     */
    protected $entityReference;

    /**
     * @var string|null
     */
    protected $paymentReference;

    /**
     * @var string|null
     */
    protected $details;

    /**
     * @var \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    protected $messageAttributes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'entity_reference' => 'entityReference',
        'entityReference' => 'entityReference',
        'EntityReference' => 'entityReference',
        'payment_reference' => 'paymentReference',
        'paymentReference' => 'paymentReference',
        'PaymentReference' => 'paymentReference',
        'details' => 'details',
        'Details' => 'details',
        'message_attributes' => 'messageAttributes',
        'messageAttributes' => 'messageAttributes',
        'MessageAttributes' => 'messageAttributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ENTITY_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'entity_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PAYMENT_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::DETAILS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'details',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
            'is_strict' => true,
        ],
    ];

    /**
     * @module SalesPaymentDetail
     *
     * @param string|null $entityReference
     *
     * @return $this
     */
    public function setEntityReference(?string $entityReference = null)
    {
        $this->entityReference = $entityReference;
        $this->modifiedProperties[self::ENTITY_REFERENCE] = true;

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @return string|null
     */
    public function getEntityReference(): ?string
    {
        return $this->entityReference;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @param string $entityReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEntityReferenceOrFail(string $entityReference)
    {
        return $this->setEntityReference($entityReference);
    }

    /**
     * @module SalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEntityReferenceOrFail(): string
    {
        if ($this->entityReference === null) {
            $this->throwNullValueException(static::ENTITY_REFERENCE);
        }

        return $this->entityReference;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEntityReference()
    {
        $this->assertPropertyIsSet(self::ENTITY_REFERENCE);

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @param string|null $paymentReference
     *
     * @return $this
     */
    public function setPaymentReference(?string $paymentReference = null)
    {
        $this->paymentReference = $paymentReference;
        $this->modifiedProperties[self::PAYMENT_REFERENCE] = true;

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @return string|null
     */
    public function getPaymentReference(): ?string
    {
        return $this->paymentReference;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @param string $paymentReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentReferenceOrFail(string $paymentReference)
    {
        return $this->setPaymentReference($paymentReference);
    }

    /**
     * @module SalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentReferenceOrFail(): string
    {
        if ($this->paymentReference === null) {
            $this->throwNullValueException(static::PAYMENT_REFERENCE);
        }

        return $this->paymentReference;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentReference()
    {
        $this->assertPropertyIsSet(self::PAYMENT_REFERENCE);

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @param string|null $details
     *
     * @return $this
     */
    public function setDetails(?string $details = null)
    {
        $this->details = $details;
        $this->modifiedProperties[self::DETAILS] = true;

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @param string $details
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDetailsOrFail(string $details)
    {
        return $this->setDetails($details);
    }

    /**
     * @module SalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDetailsOrFail(): string
    {
        if ($this->details === null) {
            $this->throwNullValueException(static::DETAILS);
        }

        return $this->details;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDetails()
    {
        $this->assertPropertyIsSet(self::DETAILS);

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @param \Generated\Shared\Transfer\MessageAttributesTransfer|null $messageAttributes
     *
     * @return $this
     */
    public function setMessageAttributes(?MessageAttributesTransfer $messageAttributes = null)
    {
        $this->messageAttributes = $messageAttributes;
        $this->modifiedProperties[self::MESSAGE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    public function getMessageAttributes(): ?MessageAttributesTransfer
    {
        return $this->messageAttributes;
    }

    /**
     * @module SalesPaymentDetail
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
     * @module SalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer
     */
    public function getMessageAttributesOrFail(): MessageAttributesTransfer
    {
        if ($this->messageAttributes === null) {
            $this->throwNullValueException(static::MESSAGE_ATTRIBUTES);
        }

        return $this->messageAttributes;
    }

    /**
     * @module SalesPaymentDetail
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
                case 'entityReference':
                case 'paymentReference':
                case 'details':
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
                case 'entityReference':
                case 'paymentReference':
                case 'details':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
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
                case 'entityReference':
                case 'paymentReference':
                case 'details':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
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
            'entityReference' => $this->entityReference,
            'paymentReference' => $this->paymentReference,
            'details' => $this->details,
            'messageAttributes' => $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'entity_reference' => $this->entityReference,
            'payment_reference' => $this->paymentReference,
            'details' => $this->details,
            'message_attributes' => $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'entity_reference' => $this->entityReference instanceof AbstractTransfer ? $this->entityReference->toArray(true, false) : $this->entityReference,
            'payment_reference' => $this->paymentReference instanceof AbstractTransfer ? $this->paymentReference->toArray(true, false) : $this->paymentReference,
            'details' => $this->details instanceof AbstractTransfer ? $this->details->toArray(true, false) : $this->details,
            'message_attributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, false) : $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'entityReference' => $this->entityReference instanceof AbstractTransfer ? $this->entityReference->toArray(true, true) : $this->entityReference,
            'paymentReference' => $this->paymentReference instanceof AbstractTransfer ? $this->paymentReference->toArray(true, true) : $this->paymentReference,
            'details' => $this->details instanceof AbstractTransfer ? $this->details->toArray(true, true) : $this->details,
            'messageAttributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, true) : $this->messageAttributes,
        ];
    }
}
