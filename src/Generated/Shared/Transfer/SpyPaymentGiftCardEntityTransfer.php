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
class SpyPaymentGiftCardEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PAYMENT_GIFT_CARD = 'idPaymentGiftCard';

    /**
     * @var string
     */
    public const FK_SALES_PAYMENT = 'fkSalesPayment';

    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const SPY_SALES_PAYMENT = 'spySalesPayment';

    /**
     * @var integer|null
     */
    protected $idPaymentGiftCard;

    /**
     * @var integer|null
     */
    protected $fkSalesPayment;

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var \Generated\Shared\Transfer\SpySalesPaymentEntityTransfer|null
     */
    protected $spySalesPayment;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_payment_gift_card' => 'idPaymentGiftCard',
        'idPaymentGiftCard' => 'idPaymentGiftCard',
        'IdPaymentGiftCard' => 'idPaymentGiftCard',
        'fk_sales_payment' => 'fkSalesPayment',
        'fkSalesPayment' => 'fkSalesPayment',
        'FkSalesPayment' => 'fkSalesPayment',
        'code' => 'code',
        'Code' => 'code',
        'spy_sales_payment' => 'spySalesPayment',
        'spySalesPayment' => 'spySalesPayment',
        'SpySalesPayment' => 'spySalesPayment',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PAYMENT_GIFT_CARD => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_payment_gift_card',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_PAYMENT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_payment',
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
        self::SPY_SALES_PAYMENT => [
            'type' => 'Generated\Shared\Transfer\SpySalesPaymentEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_payment',
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
    public static $entityNamespace = 'Orm\Zed\GiftCard\Persistence\SpyPaymentGiftCard';


    /**
     * @module 
     *
     * @param integer|null $idPaymentGiftCard
     *
     * @return $this
     */
    public function setIdPaymentGiftCard($idPaymentGiftCard)
    {
        $this->idPaymentGiftCard = $idPaymentGiftCard;
        $this->modifiedProperties[self::ID_PAYMENT_GIFT_CARD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdPaymentGiftCard()
    {
        return $this->idPaymentGiftCard;
    }

    /**
     * @module 
     *
     * @param integer|null $idPaymentGiftCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPaymentGiftCardOrFail($idPaymentGiftCard)
    {
        if ($idPaymentGiftCard === null) {
            $this->throwNullValueException(static::ID_PAYMENT_GIFT_CARD);
        }

        return $this->setIdPaymentGiftCard($idPaymentGiftCard);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdPaymentGiftCardOrFail()
    {
        if ($this->idPaymentGiftCard === null) {
            $this->throwNullValueException(static::ID_PAYMENT_GIFT_CARD);
        }

        return $this->idPaymentGiftCard;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPaymentGiftCard()
    {
        $this->assertPropertyIsSet(self::ID_PAYMENT_GIFT_CARD);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesPayment
     *
     * @return $this
     */
    public function setFkSalesPayment($fkSalesPayment)
    {
        $this->fkSalesPayment = $fkSalesPayment;
        $this->modifiedProperties[self::FK_SALES_PAYMENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesPayment()
    {
        return $this->fkSalesPayment;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesPaymentOrFail($fkSalesPayment)
    {
        if ($fkSalesPayment === null) {
            $this->throwNullValueException(static::FK_SALES_PAYMENT);
        }

        return $this->setFkSalesPayment($fkSalesPayment);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesPaymentOrFail()
    {
        if ($this->fkSalesPayment === null) {
            $this->throwNullValueException(static::FK_SALES_PAYMENT);
        }

        return $this->fkSalesPayment;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesPayment()
    {
        $this->assertPropertyIsSet(self::FK_SALES_PAYMENT);

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
     * @param \Generated\Shared\Transfer\SpySalesPaymentEntityTransfer|null $spySalesPayment
     *
     * @return $this
     */
    public function setSpySalesPayment(SpySalesPaymentEntityTransfer $spySalesPayment = null)
    {
        $this->spySalesPayment = $spySalesPayment;
        $this->modifiedProperties[self::SPY_SALES_PAYMENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesPaymentEntityTransfer|null
     */
    public function getSpySalesPayment()
    {
        return $this->spySalesPayment;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesPaymentEntityTransfer $spySalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpySalesPaymentOrFail(SpySalesPaymentEntityTransfer $spySalesPayment)
    {
        return $this->setSpySalesPayment($spySalesPayment);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesPaymentEntityTransfer
     */
    public function getSpySalesPaymentOrFail()
    {
        if ($this->spySalesPayment === null) {
            $this->throwNullValueException(static::SPY_SALES_PAYMENT);
        }

        return $this->spySalesPayment;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesPayment()
    {
        $this->assertPropertyIsSet(self::SPY_SALES_PAYMENT);

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
                case 'idPaymentGiftCard':
                case 'fkSalesPayment':
                case 'code':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spySalesPayment':
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
                case 'idPaymentGiftCard':
                case 'fkSalesPayment':
                case 'code':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesPayment':
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
                case 'idPaymentGiftCard':
                case 'fkSalesPayment':
                case 'code':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesPayment':
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
            'idPaymentGiftCard' => $this->idPaymentGiftCard,
            'fkSalesPayment' => $this->fkSalesPayment,
            'code' => $this->code,
            'spySalesPayment' => $this->spySalesPayment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_payment_gift_card' => $this->idPaymentGiftCard,
            'fk_sales_payment' => $this->fkSalesPayment,
            'code' => $this->code,
            'spy_sales_payment' => $this->spySalesPayment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_payment_gift_card' => $this->idPaymentGiftCard instanceof AbstractTransfer ? $this->idPaymentGiftCard->toArray(true, false) : $this->idPaymentGiftCard,
            'fk_sales_payment' => $this->fkSalesPayment instanceof AbstractTransfer ? $this->fkSalesPayment->toArray(true, false) : $this->fkSalesPayment,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'spy_sales_payment' => $this->spySalesPayment instanceof AbstractTransfer ? $this->spySalesPayment->toArray(true, false) : $this->spySalesPayment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPaymentGiftCard' => $this->idPaymentGiftCard instanceof AbstractTransfer ? $this->idPaymentGiftCard->toArray(true, true) : $this->idPaymentGiftCard,
            'fkSalesPayment' => $this->fkSalesPayment instanceof AbstractTransfer ? $this->fkSalesPayment->toArray(true, true) : $this->fkSalesPayment,
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'spySalesPayment' => $this->spySalesPayment instanceof AbstractTransfer ? $this->spySalesPayment->toArray(true, true) : $this->spySalesPayment,
        ];
    }
}
