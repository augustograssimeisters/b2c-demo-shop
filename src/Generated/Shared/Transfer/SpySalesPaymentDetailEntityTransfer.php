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
class SpySalesPaymentDetailEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_PAYMENT_DETAIL = 'idSalesPaymentDetail';

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
     * @var integer|null
     */
    protected $idSalesPaymentDetail;

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
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_payment_detail' => 'idSalesPaymentDetail',
        'idSalesPaymentDetail' => 'idSalesPaymentDetail',
        'IdSalesPaymentDetail' => 'idSalesPaymentDetail',
        'entity_reference' => 'entityReference',
        'entityReference' => 'entityReference',
        'EntityReference' => 'entityReference',
        'payment_reference' => 'paymentReference',
        'paymentReference' => 'paymentReference',
        'PaymentReference' => 'paymentReference',
        'details' => 'details',
        'Details' => 'details',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_PAYMENT_DETAIL => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_payment_detail',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
            'is_strict' => false,
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
            'is_strict' => false,
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
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\SalesPaymentDetail\Persistence\SpySalesPaymentDetail';


    /**
     * @module 
     *
     * @param integer|null $idSalesPaymentDetail
     *
     * @return $this
     */
    public function setIdSalesPaymentDetail($idSalesPaymentDetail)
    {
        $this->idSalesPaymentDetail = $idSalesPaymentDetail;
        $this->modifiedProperties[self::ID_SALES_PAYMENT_DETAIL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesPaymentDetail()
    {
        return $this->idSalesPaymentDetail;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesPaymentDetail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesPaymentDetailOrFail($idSalesPaymentDetail)
    {
        if ($idSalesPaymentDetail === null) {
            $this->throwNullValueException(static::ID_SALES_PAYMENT_DETAIL);
        }

        return $this->setIdSalesPaymentDetail($idSalesPaymentDetail);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesPaymentDetailOrFail()
    {
        if ($this->idSalesPaymentDetail === null) {
            $this->throwNullValueException(static::ID_SALES_PAYMENT_DETAIL);
        }

        return $this->idSalesPaymentDetail;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesPaymentDetail()
    {
        $this->assertPropertyIsSet(self::ID_SALES_PAYMENT_DETAIL);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $entityReference
     *
     * @return $this
     */
    public function setEntityReference($entityReference)
    {
        $this->entityReference = $entityReference;
        $this->modifiedProperties[self::ENTITY_REFERENCE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getEntityReference()
    {
        return $this->entityReference;
    }

    /**
     * @module 
     *
     * @param string|null $entityReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEntityReferenceOrFail($entityReference)
    {
        if ($entityReference === null) {
            $this->throwNullValueException(static::ENTITY_REFERENCE);
        }

        return $this->setEntityReference($entityReference);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEntityReferenceOrFail()
    {
        if ($this->entityReference === null) {
            $this->throwNullValueException(static::ENTITY_REFERENCE);
        }

        return $this->entityReference;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $paymentReference
     *
     * @return $this
     */
    public function setPaymentReference($paymentReference)
    {
        $this->paymentReference = $paymentReference;
        $this->modifiedProperties[self::PAYMENT_REFERENCE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPaymentReference()
    {
        return $this->paymentReference;
    }

    /**
     * @module 
     *
     * @param string|null $paymentReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentReferenceOrFail($paymentReference)
    {
        if ($paymentReference === null) {
            $this->throwNullValueException(static::PAYMENT_REFERENCE);
        }

        return $this->setPaymentReference($paymentReference);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentReferenceOrFail()
    {
        if ($this->paymentReference === null) {
            $this->throwNullValueException(static::PAYMENT_REFERENCE);
        }

        return $this->paymentReference;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->details = $details;
        $this->modifiedProperties[self::DETAILS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @module 
     *
     * @param string|null $details
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDetailsOrFail($details)
    {
        if ($details === null) {
            $this->throwNullValueException(static::DETAILS);
        }

        return $this->setDetails($details);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDetailsOrFail()
    {
        if ($this->details === null) {
            $this->throwNullValueException(static::DETAILS);
        }

        return $this->details;
    }

    /**
     * @module 
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
                case 'idSalesPaymentDetail':
                case 'entityReference':
                case 'paymentReference':
                case 'details':
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
                case 'idSalesPaymentDetail':
                case 'entityReference':
                case 'paymentReference':
                case 'details':
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
                case 'idSalesPaymentDetail':
                case 'entityReference':
                case 'paymentReference':
                case 'details':
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
            'idSalesPaymentDetail' => $this->idSalesPaymentDetail,
            'entityReference' => $this->entityReference,
            'paymentReference' => $this->paymentReference,
            'details' => $this->details,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_payment_detail' => $this->idSalesPaymentDetail,
            'entity_reference' => $this->entityReference,
            'payment_reference' => $this->paymentReference,
            'details' => $this->details,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_payment_detail' => $this->idSalesPaymentDetail instanceof AbstractTransfer ? $this->idSalesPaymentDetail->toArray(true, false) : $this->idSalesPaymentDetail,
            'entity_reference' => $this->entityReference instanceof AbstractTransfer ? $this->entityReference->toArray(true, false) : $this->entityReference,
            'payment_reference' => $this->paymentReference instanceof AbstractTransfer ? $this->paymentReference->toArray(true, false) : $this->paymentReference,
            'details' => $this->details instanceof AbstractTransfer ? $this->details->toArray(true, false) : $this->details,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesPaymentDetail' => $this->idSalesPaymentDetail instanceof AbstractTransfer ? $this->idSalesPaymentDetail->toArray(true, true) : $this->idSalesPaymentDetail,
            'entityReference' => $this->entityReference instanceof AbstractTransfer ? $this->entityReference->toArray(true, true) : $this->entityReference,
            'paymentReference' => $this->paymentReference instanceof AbstractTransfer ? $this->paymentReference->toArray(true, true) : $this->paymentReference,
            'details' => $this->details instanceof AbstractTransfer ? $this->details->toArray(true, true) : $this->details,
        ];
    }
}
