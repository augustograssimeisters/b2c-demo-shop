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
class WarehouseUserAssignmentsBackendApiAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const USER_UUID = 'userUuid';

    /**
     * @var string
     */
    public const WAREHOUSE = 'warehouse';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string|null
     */
    protected $userUuid;

    /**
     * @var \Generated\Shared\Transfer\WarehousesBackendApiAttributesTransfer|null
     */
    protected $warehouse;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'user_uuid' => 'userUuid',
        'userUuid' => 'userUuid',
        'UserUuid' => 'userUuid',
        'warehouse' => 'warehouse',
        'Warehouse' => 'warehouse',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::USER_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'user_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WAREHOUSE => [
            'type' => 'Generated\Shared\Transfer\WarehousesBackendApiAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'warehouse',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
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
     * @module UsersBackendApi|WarehouseUsersBackendApi
     *
     * @param string|null $userUuid
     *
     * @return $this
     */
    public function setUserUuid(?string $userUuid = null)
    {
        $this->userUuid = $userUuid;
        $this->modifiedProperties[self::USER_UUID] = true;

        return $this;
    }

    /**
     * @module UsersBackendApi|WarehouseUsersBackendApi
     *
     * @return string|null
     */
    public function getUserUuid(): ?string
    {
        return $this->userUuid;
    }

    /**
     * @module UsersBackendApi|WarehouseUsersBackendApi
     *
     * @param string $userUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserUuidOrFail(string $userUuid)
    {
        return $this->setUserUuid($userUuid);
    }

    /**
     * @module UsersBackendApi|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUserUuidOrFail(): string
    {
        if ($this->userUuid === null) {
            $this->throwNullValueException(static::USER_UUID);
        }

        return $this->userUuid;
    }

    /**
     * @module UsersBackendApi|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUserUuid()
    {
        $this->assertPropertyIsSet(self::USER_UUID);

        return $this;
    }

    /**
     * @module WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\WarehousesBackendApiAttributesTransfer|null $warehouse
     *
     * @return $this
     */
    public function setWarehouse(?WarehousesBackendApiAttributesTransfer $warehouse = null)
    {
        $this->warehouse = $warehouse;
        $this->modifiedProperties[self::WAREHOUSE] = true;

        return $this;
    }

    /**
     * @module WarehouseUsersBackendApi
     *
     * @return \Generated\Shared\Transfer\WarehousesBackendApiAttributesTransfer|null
     */
    public function getWarehouse(): ?WarehousesBackendApiAttributesTransfer
    {
        return $this->warehouse;
    }

    /**
     * @module WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\WarehousesBackendApiAttributesTransfer $warehouse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWarehouseOrFail(WarehousesBackendApiAttributesTransfer $warehouse)
    {
        return $this->setWarehouse($warehouse);
    }

    /**
     * @module WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\WarehousesBackendApiAttributesTransfer
     */
    public function getWarehouseOrFail(): WarehousesBackendApiAttributesTransfer
    {
        if ($this->warehouse === null) {
            $this->throwNullValueException(static::WAREHOUSE);
        }

        return $this->warehouse;
    }

    /**
     * @module WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWarehouse()
    {
        $this->assertPropertyIsSet(self::WAREHOUSE);

        return $this;
    }

    /**
     * @module WarehouseUsersBackendApi
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive(?bool $isActive = null)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module WarehouseUsersBackendApi
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @module WarehouseUsersBackendApi
     *
     * @param bool $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail(bool $isActive)
    {
        return $this->setIsActive($isActive);
    }

    /**
     * @module WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail(): bool
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

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
                case 'userUuid':
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'warehouse':
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
                case 'userUuid':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'warehouse':
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
                case 'userUuid':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'warehouse':
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
            'userUuid' => $this->userUuid,
            'isActive' => $this->isActive,
            'warehouse' => $this->warehouse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'user_uuid' => $this->userUuid,
            'is_active' => $this->isActive,
            'warehouse' => $this->warehouse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'user_uuid' => $this->userUuid instanceof AbstractTransfer ? $this->userUuid->toArray(true, false) : $this->userUuid,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'warehouse' => $this->warehouse instanceof AbstractTransfer ? $this->warehouse->toArray(true, false) : $this->warehouse,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'userUuid' => $this->userUuid instanceof AbstractTransfer ? $this->userUuid->toArray(true, true) : $this->userUuid,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'warehouse' => $this->warehouse instanceof AbstractTransfer ? $this->warehouse->toArray(true, true) : $this->warehouse,
        ];
    }
}
