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
class SalesPaymentDetailTransfer extends AbstractTransfer
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
    public const STRUCTURED_DETAILS = 'structuredDetails';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

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
     * @var array
     */
    protected $structuredDetails = [];

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $updatedAt;

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
        'structured_details' => 'structuredDetails',
        'structuredDetails' => 'structuredDetails',
        'StructuredDetails' => 'structuredDetails',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
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
        self::STRUCTURED_DETAILS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'structured_details',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
            'is_strict' => true,
        ],
        self::UPDATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_at',
            'is_collection' => false,
            'is_transfer' => false,
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
     * @param array|null $structuredDetails
     *
     * @return $this
     */
    public function setStructuredDetails(array $structuredDetails = null)
    {
        if ($structuredDetails === null) {
            $structuredDetails = [];
        }

        $this->structuredDetails = $structuredDetails;
        $this->modifiedProperties[self::STRUCTURED_DETAILS] = true;

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @return array
     */
    public function getStructuredDetails(): array
    {
        return $this->structuredDetails;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @param mixed $detail
     *
     * @return $this
     */
    public function addDetail($detail)
    {
        $this->structuredDetails[] = $detail;
        $this->modifiedProperties[self::STRUCTURED_DETAILS] = true;

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStructuredDetails()
    {
        $this->assertPropertyIsSet(self::STRUCTURED_DETAILS);

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(?string $createdAt = null)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @param string $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail(string $createdAt)
    {
        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module SalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail(): string
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module SalesPaymentDetail
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
     * @module SalesPaymentDetail
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(?string $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @param string $updatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedAtOrFail(string $updatedAt)
    {
        return $this->setUpdatedAt($updatedAt);
    }

    /**
     * @module SalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedAtOrFail(): string
    {
        if ($this->updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->updatedAt;
    }

    /**
     * @module SalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedAt()
    {
        $this->assertPropertyIsSet(self::UPDATED_AT);

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
                case 'structuredDetails':
                case 'createdAt':
                case 'updatedAt':
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
                case 'structuredDetails':
                case 'createdAt':
                case 'updatedAt':
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
                case 'entityReference':
                case 'paymentReference':
                case 'details':
                case 'structuredDetails':
                case 'createdAt':
                case 'updatedAt':
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
            'entityReference' => $this->entityReference,
            'paymentReference' => $this->paymentReference,
            'details' => $this->details,
            'structuredDetails' => $this->structuredDetails,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
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
            'structured_details' => $this->structuredDetails,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
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
            'structured_details' => $this->structuredDetails instanceof AbstractTransfer ? $this->structuredDetails->toArray(true, false) : $this->structuredDetails,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
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
            'structuredDetails' => $this->structuredDetails instanceof AbstractTransfer ? $this->structuredDetails->toArray(true, true) : $this->structuredDetails,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
        ];
    }
}
