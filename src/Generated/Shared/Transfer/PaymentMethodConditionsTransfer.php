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
class PaymentMethodConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAMES = 'names';

    /**
     * @var string
     */
    public const PAYMENT_METHOD_IDS = 'paymentMethodIds';

    /**
     * @var string
     */
    public const PAYMENT_METHOD_KEYS = 'paymentMethodKeys';

    /**
     * @var string
     */
    public const PAYMENT_PROVIDER_KEYS = 'paymentProviderKeys';

    /**
     * @var string
     */
    public const STORE_IDS = 'storeIds';

    /**
     * @var string[]
     */
    protected $names = [];

    /**
     * @var int[]
     */
    protected $paymentMethodIds = [];

    /**
     * @var string[]
     */
    protected $paymentMethodKeys = [];

    /**
     * @var string[]
     */
    protected $paymentProviderKeys = [];

    /**
     * @var int[]
     */
    protected $storeIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'names' => 'names',
        'Names' => 'names',
        'payment_method_ids' => 'paymentMethodIds',
        'paymentMethodIds' => 'paymentMethodIds',
        'PaymentMethodIds' => 'paymentMethodIds',
        'payment_method_keys' => 'paymentMethodKeys',
        'paymentMethodKeys' => 'paymentMethodKeys',
        'PaymentMethodKeys' => 'paymentMethodKeys',
        'payment_provider_keys' => 'paymentProviderKeys',
        'paymentProviderKeys' => 'paymentProviderKeys',
        'PaymentProviderKeys' => 'paymentProviderKeys',
        'store_ids' => 'storeIds',
        'storeIds' => 'storeIds',
        'StoreIds' => 'storeIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_METHOD_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'payment_method_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_METHOD_KEYS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'payment_method_keys',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_PROVIDER_KEYS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'payment_provider_keys',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'store_ids',
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
     * @module PaymentGui|Payment
     *
     * @param string[]|null $names
     *
     * @return $this
     */
    public function setNames(array $names = null)
    {
        if ($names === null) {
            $names = [];
        }

        $this->names = $names;
        $this->modifiedProperties[self::NAMES] = true;

        return $this;
    }

    /**
     * @module PaymentGui|Payment
     *
     * @return string[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @module PaymentGui|Payment
     *
     * @param string $name
     *
     * @return $this
     */
    public function addName($name)
    {
        $this->names[] = $name;
        $this->modifiedProperties[self::NAMES] = true;

        return $this;
    }

    /**
     * @module PaymentGui|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNames()
    {
        $this->assertPropertyIsSet(self::NAMES);

        return $this;
    }

    /**
     * @module PaymentGui|Payment
     *
     * @param int[]|null $paymentMethodIds
     *
     * @return $this
     */
    public function setPaymentMethodIds(array $paymentMethodIds = null)
    {
        if ($paymentMethodIds === null) {
            $paymentMethodIds = [];
        }

        $this->paymentMethodIds = $paymentMethodIds;
        $this->modifiedProperties[self::PAYMENT_METHOD_IDS] = true;

        return $this;
    }

    /**
     * @module PaymentGui|Payment
     *
     * @return int[]
     */
    public function getPaymentMethodIds()
    {
        return $this->paymentMethodIds;
    }

    /**
     * @module PaymentGui|Payment
     *
     * @param int $idPaymentMethod
     *
     * @return $this
     */
    public function addIdPaymentMethod($idPaymentMethod)
    {
        $this->paymentMethodIds[] = $idPaymentMethod;
        $this->modifiedProperties[self::PAYMENT_METHOD_IDS] = true;

        return $this;
    }

    /**
     * @module PaymentGui|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentMethodIds()
    {
        $this->assertPropertyIsSet(self::PAYMENT_METHOD_IDS);

        return $this;
    }

    /**
     * @module PaymentGui|Payment
     *
     * @param string[]|null $paymentMethodKeys
     *
     * @return $this
     */
    public function setPaymentMethodKeys(array $paymentMethodKeys = null)
    {
        if ($paymentMethodKeys === null) {
            $paymentMethodKeys = [];
        }

        $this->paymentMethodKeys = $paymentMethodKeys;
        $this->modifiedProperties[self::PAYMENT_METHOD_KEYS] = true;

        return $this;
    }

    /**
     * @module PaymentGui|Payment
     *
     * @return string[]
     */
    public function getPaymentMethodKeys()
    {
        return $this->paymentMethodKeys;
    }

    /**
     * @module PaymentGui|Payment
     *
     * @param string $paymentMethodKey
     *
     * @return $this
     */
    public function addPaymentMethodKey($paymentMethodKey)
    {
        $this->paymentMethodKeys[] = $paymentMethodKey;
        $this->modifiedProperties[self::PAYMENT_METHOD_KEYS] = true;

        return $this;
    }

    /**
     * @module PaymentGui|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentMethodKeys()
    {
        $this->assertPropertyIsSet(self::PAYMENT_METHOD_KEYS);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param string[]|null $paymentProviderKeys
     *
     * @return $this
     */
    public function setPaymentProviderKeys(array $paymentProviderKeys = null)
    {
        if ($paymentProviderKeys === null) {
            $paymentProviderKeys = [];
        }

        $this->paymentProviderKeys = $paymentProviderKeys;
        $this->modifiedProperties[self::PAYMENT_PROVIDER_KEYS] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return string[]
     */
    public function getPaymentProviderKeys()
    {
        return $this->paymentProviderKeys;
    }

    /**
     * @module Payment
     *
     * @param string $paymentProviderKey
     *
     * @return $this
     */
    public function addPaymentProviderKey($paymentProviderKey)
    {
        $this->paymentProviderKeys[] = $paymentProviderKey;
        $this->modifiedProperties[self::PAYMENT_PROVIDER_KEYS] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentProviderKeys()
    {
        $this->assertPropertyIsSet(self::PAYMENT_PROVIDER_KEYS);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param int[]|null $storeIds
     *
     * @return $this
     */
    public function setStoreIds(array $storeIds = null)
    {
        if ($storeIds === null) {
            $storeIds = [];
        }

        $this->storeIds = $storeIds;
        $this->modifiedProperties[self::STORE_IDS] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return int[]
     */
    public function getStoreIds()
    {
        return $this->storeIds;
    }

    /**
     * @module Payment
     *
     * @param int $idStore
     *
     * @return $this
     */
    public function addIdStore($idStore)
    {
        $this->storeIds[] = $idStore;
        $this->modifiedProperties[self::STORE_IDS] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreIds()
    {
        $this->assertPropertyIsSet(self::STORE_IDS);

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
                case 'names':
                case 'paymentMethodIds':
                case 'paymentMethodKeys':
                case 'paymentProviderKeys':
                case 'storeIds':
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
                case 'names':
                case 'paymentMethodIds':
                case 'paymentMethodKeys':
                case 'paymentProviderKeys':
                case 'storeIds':
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
                case 'names':
                case 'paymentMethodIds':
                case 'paymentMethodKeys':
                case 'paymentProviderKeys':
                case 'storeIds':
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
            'names' => $this->names,
            'paymentMethodIds' => $this->paymentMethodIds,
            'paymentMethodKeys' => $this->paymentMethodKeys,
            'paymentProviderKeys' => $this->paymentProviderKeys,
            'storeIds' => $this->storeIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'names' => $this->names,
            'payment_method_ids' => $this->paymentMethodIds,
            'payment_method_keys' => $this->paymentMethodKeys,
            'payment_provider_keys' => $this->paymentProviderKeys,
            'store_ids' => $this->storeIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'names' => $this->names instanceof AbstractTransfer ? $this->names->toArray(true, false) : $this->names,
            'payment_method_ids' => $this->paymentMethodIds instanceof AbstractTransfer ? $this->paymentMethodIds->toArray(true, false) : $this->paymentMethodIds,
            'payment_method_keys' => $this->paymentMethodKeys instanceof AbstractTransfer ? $this->paymentMethodKeys->toArray(true, false) : $this->paymentMethodKeys,
            'payment_provider_keys' => $this->paymentProviderKeys instanceof AbstractTransfer ? $this->paymentProviderKeys->toArray(true, false) : $this->paymentProviderKeys,
            'store_ids' => $this->storeIds instanceof AbstractTransfer ? $this->storeIds->toArray(true, false) : $this->storeIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'names' => $this->names instanceof AbstractTransfer ? $this->names->toArray(true, true) : $this->names,
            'paymentMethodIds' => $this->paymentMethodIds instanceof AbstractTransfer ? $this->paymentMethodIds->toArray(true, true) : $this->paymentMethodIds,
            'paymentMethodKeys' => $this->paymentMethodKeys instanceof AbstractTransfer ? $this->paymentMethodKeys->toArray(true, true) : $this->paymentMethodKeys,
            'paymentProviderKeys' => $this->paymentProviderKeys instanceof AbstractTransfer ? $this->paymentProviderKeys->toArray(true, true) : $this->paymentProviderKeys,
            'storeIds' => $this->storeIds instanceof AbstractTransfer ? $this->storeIds->toArray(true, true) : $this->storeIds,
        ];
    }
}
