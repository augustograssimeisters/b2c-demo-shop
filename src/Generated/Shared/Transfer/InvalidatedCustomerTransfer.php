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
class InvalidatedCustomerTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PASSWORD_UPDATED_AT = 'passwordUpdatedAt';

    /**
     * @var string
     */
    public const ANONYMIZED_AT = 'anonymizedAt';

    /**
     * @var string
     */
    public const ID_CUSTOMER_INVALIDATED_STORAGE = 'idCustomerInvalidatedStorage';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string|null
     */
    protected $passwordUpdatedAt;

    /**
     * @var string|null
     */
    protected $anonymizedAt;

    /**
     * @var string|null
     */
    protected $idCustomerInvalidatedStorage;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'password_updated_at' => 'passwordUpdatedAt',
        'passwordUpdatedAt' => 'passwordUpdatedAt',
        'PasswordUpdatedAt' => 'passwordUpdatedAt',
        'anonymized_at' => 'anonymizedAt',
        'anonymizedAt' => 'anonymizedAt',
        'AnonymizedAt' => 'anonymizedAt',
        'id_customer_invalidated_storage' => 'idCustomerInvalidatedStorage',
        'idCustomerInvalidatedStorage' => 'idCustomerInvalidatedStorage',
        'IdCustomerInvalidatedStorage' => 'idCustomerInvalidatedStorage',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'key' => 'key',
        'Key' => 'key',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PASSWORD_UPDATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'password_updated_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ANONYMIZED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'anonymized_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ID_CUSTOMER_INVALIDATED_STORAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_customer_invalidated_storage',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
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
     * @module CustomerValidationPage|CustomerStorage|OauthCustomerValidation
     *
     * @param string|null $passwordUpdatedAt
     *
     * @return $this
     */
    public function setPasswordUpdatedAt(?string $passwordUpdatedAt = null)
    {
        $this->passwordUpdatedAt = $passwordUpdatedAt;
        $this->modifiedProperties[self::PASSWORD_UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module CustomerValidationPage|CustomerStorage|OauthCustomerValidation
     *
     * @return string|null
     */
    public function getPasswordUpdatedAt(): ?string
    {
        return $this->passwordUpdatedAt;
    }

    /**
     * @module CustomerValidationPage|CustomerStorage|OauthCustomerValidation
     *
     * @param string $passwordUpdatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPasswordUpdatedAtOrFail(string $passwordUpdatedAt)
    {
        return $this->setPasswordUpdatedAt($passwordUpdatedAt);
    }

    /**
     * @module CustomerValidationPage|CustomerStorage|OauthCustomerValidation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPasswordUpdatedAtOrFail(): string
    {
        if ($this->passwordUpdatedAt === null) {
            $this->throwNullValueException(static::PASSWORD_UPDATED_AT);
        }

        return $this->passwordUpdatedAt;
    }

    /**
     * @module CustomerValidationPage|CustomerStorage|OauthCustomerValidation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePasswordUpdatedAt()
    {
        $this->assertPropertyIsSet(self::PASSWORD_UPDATED_AT);

        return $this;
    }

    /**
     * @module CustomerValidationPage|CustomerStorage|OauthCustomerValidation
     *
     * @param string|null $anonymizedAt
     *
     * @return $this
     */
    public function setAnonymizedAt(?string $anonymizedAt = null)
    {
        $this->anonymizedAt = $anonymizedAt;
        $this->modifiedProperties[self::ANONYMIZED_AT] = true;

        return $this;
    }

    /**
     * @module CustomerValidationPage|CustomerStorage|OauthCustomerValidation
     *
     * @return string|null
     */
    public function getAnonymizedAt(): ?string
    {
        return $this->anonymizedAt;
    }

    /**
     * @module CustomerValidationPage|CustomerStorage|OauthCustomerValidation
     *
     * @param string $anonymizedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAnonymizedAtOrFail(string $anonymizedAt)
    {
        return $this->setAnonymizedAt($anonymizedAt);
    }

    /**
     * @module CustomerValidationPage|CustomerStorage|OauthCustomerValidation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAnonymizedAtOrFail(): string
    {
        if ($this->anonymizedAt === null) {
            $this->throwNullValueException(static::ANONYMIZED_AT);
        }

        return $this->anonymizedAt;
    }

    /**
     * @module CustomerValidationPage|CustomerStorage|OauthCustomerValidation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAnonymizedAt()
    {
        $this->assertPropertyIsSet(self::ANONYMIZED_AT);

        return $this;
    }

    /**
     * @module CustomerStorage
     *
     * @param string|null $idCustomerInvalidatedStorage
     *
     * @return $this
     */
    public function setIdCustomerInvalidatedStorage(?string $idCustomerInvalidatedStorage = null)
    {
        $this->idCustomerInvalidatedStorage = $idCustomerInvalidatedStorage;
        $this->modifiedProperties[self::ID_CUSTOMER_INVALIDATED_STORAGE] = true;

        return $this;
    }

    /**
     * @module CustomerStorage
     *
     * @return string|null
     */
    public function getIdCustomerInvalidatedStorage(): ?string
    {
        return $this->idCustomerInvalidatedStorage;
    }

    /**
     * @module CustomerStorage
     *
     * @param string $idCustomerInvalidatedStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCustomerInvalidatedStorageOrFail(string $idCustomerInvalidatedStorage)
    {
        return $this->setIdCustomerInvalidatedStorage($idCustomerInvalidatedStorage);
    }

    /**
     * @module CustomerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdCustomerInvalidatedStorageOrFail(): string
    {
        if ($this->idCustomerInvalidatedStorage === null) {
            $this->throwNullValueException(static::ID_CUSTOMER_INVALIDATED_STORAGE);
        }

        return $this->idCustomerInvalidatedStorage;
    }

    /**
     * @module CustomerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomerInvalidatedStorage()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMER_INVALIDATED_STORAGE);

        return $this;
    }

    /**
     * @module CustomerStorage
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference(?string $customerReference = null)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module CustomerStorage
     *
     * @return string|null
     */
    public function getCustomerReference(): ?string
    {
        return $this->customerReference;
    }

    /**
     * @module CustomerStorage
     *
     * @param string $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail(string $customerReference)
    {
        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module CustomerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail(): string
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module CustomerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module CustomerStorage
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey(?string $key = null)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module CustomerStorage
     *
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @module CustomerStorage
     *
     * @param string $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail(string $key)
    {
        return $this->setKey($key);
    }

    /**
     * @module CustomerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail(): string
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module CustomerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

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
                case 'passwordUpdatedAt':
                case 'anonymizedAt':
                case 'idCustomerInvalidatedStorage':
                case 'customerReference':
                case 'key':
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
                case 'passwordUpdatedAt':
                case 'anonymizedAt':
                case 'idCustomerInvalidatedStorage':
                case 'customerReference':
                case 'key':
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
                case 'passwordUpdatedAt':
                case 'anonymizedAt':
                case 'idCustomerInvalidatedStorage':
                case 'customerReference':
                case 'key':
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
            'passwordUpdatedAt' => $this->passwordUpdatedAt,
            'anonymizedAt' => $this->anonymizedAt,
            'idCustomerInvalidatedStorage' => $this->idCustomerInvalidatedStorage,
            'customerReference' => $this->customerReference,
            'key' => $this->key,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'password_updated_at' => $this->passwordUpdatedAt,
            'anonymized_at' => $this->anonymizedAt,
            'id_customer_invalidated_storage' => $this->idCustomerInvalidatedStorage,
            'customer_reference' => $this->customerReference,
            'key' => $this->key,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'password_updated_at' => $this->passwordUpdatedAt instanceof AbstractTransfer ? $this->passwordUpdatedAt->toArray(true, false) : $this->passwordUpdatedAt,
            'anonymized_at' => $this->anonymizedAt instanceof AbstractTransfer ? $this->anonymizedAt->toArray(true, false) : $this->anonymizedAt,
            'id_customer_invalidated_storage' => $this->idCustomerInvalidatedStorage instanceof AbstractTransfer ? $this->idCustomerInvalidatedStorage->toArray(true, false) : $this->idCustomerInvalidatedStorage,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'passwordUpdatedAt' => $this->passwordUpdatedAt instanceof AbstractTransfer ? $this->passwordUpdatedAt->toArray(true, true) : $this->passwordUpdatedAt,
            'anonymizedAt' => $this->anonymizedAt instanceof AbstractTransfer ? $this->anonymizedAt->toArray(true, true) : $this->anonymizedAt,
            'idCustomerInvalidatedStorage' => $this->idCustomerInvalidatedStorage instanceof AbstractTransfer ? $this->idCustomerInvalidatedStorage->toArray(true, true) : $this->idCustomerInvalidatedStorage,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
        ];
    }
}
