<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class UserCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const USERS = 'users';

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\UserTransfer>
     */
    protected $users;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'users' => 'users',
        'Users' => 'users',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::USERS => [
            'type' => 'Generated\Shared\Transfer\UserTransfer',
            'type_shim' => null,
            'name_underscore' => 'users',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module Acl|CmsUserConnector|OauthUserConnector|OauthWarehouseUser|PickingList|PickingListsUsersBackendApi|SecurityGui|SecurityOauthUser|SessionUserValidation|UserLocale|UserPasswordReset|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\UserTransfer> $users
     *
     * @return $this
     */
    public function setUsers(ArrayObject $users)
    {
        $this->users = new ArrayObject();

        foreach ($users as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::USERS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addUser(...$args);
        }

        $this->modifiedProperties[self::USERS] = true;

        return $this;
    }

    /**
     * @module Acl|CmsUserConnector|OauthUserConnector|OauthWarehouseUser|PickingList|PickingListsUsersBackendApi|SecurityGui|SecurityOauthUser|SessionUserValidation|UserLocale|UserPasswordReset|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\UserTransfer>
     */
    public function getUsers(): ArrayObject
    {
        return $this->users;
    }

    /**
     * @module Acl|CmsUserConnector|OauthUserConnector|OauthWarehouseUser|PickingList|PickingListsUsersBackendApi|SecurityGui|SecurityOauthUser|SessionUserValidation|UserLocale|UserPasswordReset|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\UserTransfer $user
     *
     * @return $this
     */
    public function addUser(UserTransfer $user)
    {
        $this->users[] = $user;
        $this->modifiedProperties[self::USERS] = true;

        return $this;
    }

    /**
     * @module Acl|CmsUserConnector|OauthUserConnector|OauthWarehouseUser|PickingList|PickingListsUsersBackendApi|SecurityGui|SecurityOauthUser|SessionUserValidation|UserLocale|UserPasswordReset|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsers()
    {
        $this->assertCollectionPropertyIsSet(self::USERS);

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
                case 'users':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'users':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'users':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->users = $this->users ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'users' => $this->users,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'users' => $this->users,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'users' => $this->users instanceof AbstractTransfer ? $this->users->toArray(true, false) : $this->addValuesToCollection($this->users, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'users' => $this->users instanceof AbstractTransfer ? $this->users->toArray(true, true) : $this->addValuesToCollection($this->users, true, true),
        ];
    }
}
