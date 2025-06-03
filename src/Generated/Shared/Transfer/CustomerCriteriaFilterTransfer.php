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
class CustomerCriteriaFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CUSTOMER_IDS = 'customerIds';

    /**
     * @var string
     */
    public const HAS_ANONYMIZED_AT = 'hasAnonymizedAt';

    /**
     * @var string
     */
    public const RESTORE_PASSWORD_KEY_EXISTS = 'restorePasswordKeyExists';

    /**
     * @var string
     */
    public const PASSWORD_EXISTS = 'passwordExists';

    /**
     * @var int[]
     */
    protected $customerIds = [];

    /**
     * @var bool|null
     */
    protected $hasAnonymizedAt;

    /**
     * @var bool|null
     */
    protected $restorePasswordKeyExists;

    /**
     * @var bool|null
     */
    protected $passwordExists;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'customer_ids' => 'customerIds',
        'customerIds' => 'customerIds',
        'CustomerIds' => 'customerIds',
        'has_anonymized_at' => 'hasAnonymizedAt',
        'hasAnonymizedAt' => 'hasAnonymizedAt',
        'HasAnonymizedAt' => 'hasAnonymizedAt',
        'restore_password_key_exists' => 'restorePasswordKeyExists',
        'restorePasswordKeyExists' => 'restorePasswordKeyExists',
        'RestorePasswordKeyExists' => 'restorePasswordKeyExists',
        'password_exists' => 'passwordExists',
        'passwordExists' => 'passwordExists',
        'PasswordExists' => 'passwordExists',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CUSTOMER_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'customer_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::HAS_ANONYMIZED_AT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'has_anonymized_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::RESTORE_PASSWORD_KEY_EXISTS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'restore_password_key_exists',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PASSWORD_EXISTS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'password_exists',
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
     * @module CustomerStorage|Customer
     *
     * @param int[]|null $customerIds
     *
     * @return $this
     */
    public function setCustomerIds(array $customerIds = null)
    {
        if ($customerIds === null) {
            $customerIds = [];
        }

        $this->customerIds = [];

        foreach ($customerIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::CUSTOMER_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdCustomer(...$args);
        }

        $this->modifiedProperties[self::CUSTOMER_IDS] = true;

        return $this;
    }

    /**
     * @module CustomerStorage|Customer
     *
     * @return int[]
     */
    public function getCustomerIds(): array
    {
        return $this->customerIds;
    }

    /**
     * @module CustomerStorage|Customer
     *
     * @param int $idCustomer
     *
     * @return $this
     */
    public function addIdCustomer(int $idCustomer)
    {
        $this->customerIds[] = $idCustomer;
        $this->modifiedProperties[self::CUSTOMER_IDS] = true;

        return $this;
    }

    /**
     * @module CustomerStorage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerIds()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_IDS);

        return $this;
    }

    /**
     * @module CustomerStorage|Customer
     *
     * @param bool|null $hasAnonymizedAt
     *
     * @return $this
     */
    public function setHasAnonymizedAt(?bool $hasAnonymizedAt = null)
    {
        $this->hasAnonymizedAt = $hasAnonymizedAt;
        $this->modifiedProperties[self::HAS_ANONYMIZED_AT] = true;

        return $this;
    }

    /**
     * @module CustomerStorage|Customer
     *
     * @return bool|null
     */
    public function getHasAnonymizedAt(): ?bool
    {
        return $this->hasAnonymizedAt;
    }

    /**
     * @module CustomerStorage|Customer
     *
     * @param bool $hasAnonymizedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHasAnonymizedAtOrFail(bool $hasAnonymizedAt)
    {
        return $this->setHasAnonymizedAt($hasAnonymizedAt);
    }

    /**
     * @module CustomerStorage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getHasAnonymizedAtOrFail(): bool
    {
        if ($this->hasAnonymizedAt === null) {
            $this->throwNullValueException(static::HAS_ANONYMIZED_AT);
        }

        return $this->hasAnonymizedAt;
    }

    /**
     * @module CustomerStorage|Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHasAnonymizedAt()
    {
        $this->assertPropertyIsSet(self::HAS_ANONYMIZED_AT);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param bool|null $restorePasswordKeyExists
     *
     * @return $this
     */
    public function setRestorePasswordKeyExists($restorePasswordKeyExists)
    {
        $this->restorePasswordKeyExists = $restorePasswordKeyExists;
        $this->modifiedProperties[self::RESTORE_PASSWORD_KEY_EXISTS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return bool|null
     */
    public function getRestorePasswordKeyExists()
    {
        return $this->restorePasswordKeyExists;
    }

    /**
     * @module Customer
     *
     * @param bool|null $restorePasswordKeyExists
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRestorePasswordKeyExistsOrFail($restorePasswordKeyExists)
    {
        if ($restorePasswordKeyExists === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_KEY_EXISTS);
        }

        return $this->setRestorePasswordKeyExists($restorePasswordKeyExists);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getRestorePasswordKeyExistsOrFail()
    {
        if ($this->restorePasswordKeyExists === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_KEY_EXISTS);
        }

        return $this->restorePasswordKeyExists;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRestorePasswordKeyExists()
    {
        $this->assertPropertyIsSet(self::RESTORE_PASSWORD_KEY_EXISTS);

        return $this;
    }

    /**
     * @module Customer
     *
     * @param bool|null $passwordExists
     *
     * @return $this
     */
    public function setPasswordExists($passwordExists)
    {
        $this->passwordExists = $passwordExists;
        $this->modifiedProperties[self::PASSWORD_EXISTS] = true;

        return $this;
    }

    /**
     * @module Customer
     *
     * @return bool|null
     */
    public function getPasswordExists()
    {
        return $this->passwordExists;
    }

    /**
     * @module Customer
     *
     * @param bool|null $passwordExists
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPasswordExistsOrFail($passwordExists)
    {
        if ($passwordExists === null) {
            $this->throwNullValueException(static::PASSWORD_EXISTS);
        }

        return $this->setPasswordExists($passwordExists);
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getPasswordExistsOrFail()
    {
        if ($this->passwordExists === null) {
            $this->throwNullValueException(static::PASSWORD_EXISTS);
        }

        return $this->passwordExists;
    }

    /**
     * @module Customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePasswordExists()
    {
        $this->assertPropertyIsSet(self::PASSWORD_EXISTS);

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
                case 'customerIds':
                case 'hasAnonymizedAt':
                case 'restorePasswordKeyExists':
                case 'passwordExists':
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
                case 'customerIds':
                case 'hasAnonymizedAt':
                case 'restorePasswordKeyExists':
                case 'passwordExists':
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
                case 'customerIds':
                case 'hasAnonymizedAt':
                case 'restorePasswordKeyExists':
                case 'passwordExists':
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
            'customerIds' => $this->customerIds,
            'hasAnonymizedAt' => $this->hasAnonymizedAt,
            'restorePasswordKeyExists' => $this->restorePasswordKeyExists,
            'passwordExists' => $this->passwordExists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'customer_ids' => $this->customerIds,
            'has_anonymized_at' => $this->hasAnonymizedAt,
            'restore_password_key_exists' => $this->restorePasswordKeyExists,
            'password_exists' => $this->passwordExists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'customer_ids' => $this->customerIds instanceof AbstractTransfer ? $this->customerIds->toArray(true, false) : $this->customerIds,
            'has_anonymized_at' => $this->hasAnonymizedAt instanceof AbstractTransfer ? $this->hasAnonymizedAt->toArray(true, false) : $this->hasAnonymizedAt,
            'restore_password_key_exists' => $this->restorePasswordKeyExists instanceof AbstractTransfer ? $this->restorePasswordKeyExists->toArray(true, false) : $this->restorePasswordKeyExists,
            'password_exists' => $this->passwordExists instanceof AbstractTransfer ? $this->passwordExists->toArray(true, false) : $this->passwordExists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'customerIds' => $this->customerIds instanceof AbstractTransfer ? $this->customerIds->toArray(true, true) : $this->customerIds,
            'hasAnonymizedAt' => $this->hasAnonymizedAt instanceof AbstractTransfer ? $this->hasAnonymizedAt->toArray(true, true) : $this->hasAnonymizedAt,
            'restorePasswordKeyExists' => $this->restorePasswordKeyExists instanceof AbstractTransfer ? $this->restorePasswordKeyExists->toArray(true, true) : $this->restorePasswordKeyExists,
            'passwordExists' => $this->passwordExists instanceof AbstractTransfer ? $this->passwordExists->toArray(true, true) : $this->passwordExists,
        ];
    }
}
