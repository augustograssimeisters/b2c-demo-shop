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
class UserConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const USERNAMES = 'usernames';

    /**
     * @var string
     */
    public const USER_IDS = 'userIds';

    /**
     * @deprecated Exists for BC reasons only.
     */
    public const THROW_USER_NOT_FOUND_EXCEPTION = 'throwUserNotFoundException';

    /**
     * @var string
     */
    public const STATUSES = 'statuses';

    /**
     * @var string
     */
    public const UUIDS = 'uuids';

    /**
     * @var string[]
     */
    protected $usernames = [];

    /**
     * @var int[]
     */
    protected $userIds = [];

    /**
     * @var bool|null
     */
    protected $throwUserNotFoundException;

    /**
     * @var string[]
     */
    protected $statuses = [];

    /**
     * @var string[]
     */
    protected $uuids = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'usernames' => 'usernames',
        'Usernames' => 'usernames',
        'user_ids' => 'userIds',
        'userIds' => 'userIds',
        'UserIds' => 'userIds',
        'throw_user_not_found_exception' => 'throwUserNotFoundException',
        'throwUserNotFoundException' => 'throwUserNotFoundException',
        'ThrowUserNotFoundException' => 'throwUserNotFoundException',
        'statuses' => 'statuses',
        'Statuses' => 'statuses',
        'uuids' => 'uuids',
        'Uuids' => 'uuids',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::USERNAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'usernames',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::USER_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'user_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::THROW_USER_NOT_FOUND_EXCEPTION => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'throw_user_not_found_exception',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::STATUSES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'statuses',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'uuids',
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
     * @module Acl|OauthUserConnector|SecurityGui|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User
     *
     * @param string[]|null $usernames
     *
     * @return $this
     */
    public function setUsernames(array $usernames = null)
    {
        if ($usernames === null) {
            $usernames = [];
        }

        $this->usernames = [];

        foreach ($usernames as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::USERNAMES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addUsername(...$args);
        }

        $this->modifiedProperties[self::USERNAMES] = true;

        return $this;
    }

    /**
     * @module Acl|OauthUserConnector|SecurityGui|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User
     *
     * @return string[]
     */
    public function getUsernames(): array
    {
        return $this->usernames;
    }

    /**
     * @module Acl|OauthUserConnector|SecurityGui|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User
     *
     * @param string $username
     *
     * @return $this
     */
    public function addUsername(string $username)
    {
        $this->usernames[] = $username;
        $this->modifiedProperties[self::USERNAMES] = true;

        return $this;
    }

    /**
     * @module Acl|OauthUserConnector|SecurityGui|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsernames()
    {
        $this->assertPropertyIsSet(self::USERNAMES);

        return $this;
    }

    /**
     * @module CmsUserConnector|OauthWarehouseUser|UserPasswordReset|User|WarehouseUsersBackendApi
     *
     * @param int[]|null $userIds
     *
     * @return $this
     */
    public function setUserIds(array $userIds = null)
    {
        if ($userIds === null) {
            $userIds = [];
        }

        $this->userIds = [];

        foreach ($userIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::USER_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdUser(...$args);
        }

        $this->modifiedProperties[self::USER_IDS] = true;

        return $this;
    }

    /**
     * @module CmsUserConnector|OauthWarehouseUser|UserPasswordReset|User|WarehouseUsersBackendApi
     *
     * @return int[]
     */
    public function getUserIds(): array
    {
        return $this->userIds;
    }

    /**
     * @module CmsUserConnector|OauthWarehouseUser|UserPasswordReset|User|WarehouseUsersBackendApi
     *
     * @param int $idUser
     *
     * @return $this
     */
    public function addIdUser(int $idUser)
    {
        $this->userIds[] = $idUser;
        $this->modifiedProperties[self::USER_IDS] = true;

        return $this;
    }

    /**
     * @module CmsUserConnector|OauthWarehouseUser|UserPasswordReset|User|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUserIds()
    {
        $this->assertPropertyIsSet(self::USER_IDS);

        return $this;
    }

    /**
     * @module CmsUserConnector|SessionUserValidation|UserPasswordReset|User
     *
     * @deprecated Exists for BC reasons only.
     *
     * @param bool|null $throwUserNotFoundException
     *
     * @return $this
     */
    public function setThrowUserNotFoundException(?bool $throwUserNotFoundException = null)
    {
        $this->throwUserNotFoundException = $throwUserNotFoundException;
        $this->modifiedProperties[self::THROW_USER_NOT_FOUND_EXCEPTION] = true;

        return $this;
    }

    /**
     * @module CmsUserConnector|SessionUserValidation|UserPasswordReset|User
     *
     * @deprecated Exists for BC reasons only.
     *
     * @return bool|null
     */
    public function getThrowUserNotFoundException(): ?bool
    {
        return $this->throwUserNotFoundException;
    }

    /**
     * @module CmsUserConnector|SessionUserValidation|UserPasswordReset|User
     *
     * @deprecated Exists for BC reasons only.
     *
     * @param bool $throwUserNotFoundException
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setThrowUserNotFoundExceptionOrFail(bool $throwUserNotFoundException)
    {
        return $this->setThrowUserNotFoundException($throwUserNotFoundException);
    }

    /**
     * @module CmsUserConnector|SessionUserValidation|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Exists for BC reasons only.
     *
     * @return bool
     */
    public function getThrowUserNotFoundExceptionOrFail(): bool
    {
        if ($this->throwUserNotFoundException === null) {
            $this->throwNullValueException(static::THROW_USER_NOT_FOUND_EXCEPTION);
        }

        return $this->throwUserNotFoundException;
    }

    /**
     * @module CmsUserConnector|SessionUserValidation|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Exists for BC reasons only.
     *
     * @return $this
     */
    public function requireThrowUserNotFoundException()
    {
        $this->assertPropertyIsSet(self::THROW_USER_NOT_FOUND_EXCEPTION);

        return $this;
    }

    /**
     * @module OauthUserConnector|SecurityGui|User
     *
     * @param string[]|null $statuses
     *
     * @return $this
     */
    public function setStatuses(array $statuses = null)
    {
        if ($statuses === null) {
            $statuses = [];
        }

        $this->statuses = [];

        foreach ($statuses as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::STATUSES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addStatus(...$args);
        }

        $this->modifiedProperties[self::STATUSES] = true;

        return $this;
    }

    /**
     * @module OauthUserConnector|SecurityGui|User
     *
     * @return string[]
     */
    public function getStatuses(): array
    {
        return $this->statuses;
    }

    /**
     * @module OauthUserConnector|SecurityGui|User
     *
     * @param string $status
     *
     * @return $this
     */
    public function addStatus(string $status)
    {
        $this->statuses[] = $status;
        $this->modifiedProperties[self::STATUSES] = true;

        return $this;
    }

    /**
     * @module OauthUserConnector|SecurityGui|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatuses()
    {
        $this->assertPropertyIsSet(self::STATUSES);

        return $this;
    }

    /**
     * @module PickingListsUsersBackendApi|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param string[]|null $uuids
     *
     * @return $this
     */
    public function setUuids(array $uuids = null)
    {
        if ($uuids === null) {
            $uuids = [];
        }

        $this->uuids = [];

        foreach ($uuids as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::UUIDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addUuid(...$args);
        }

        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingListsUsersBackendApi|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return string[]
     */
    public function getUuids(): array
    {
        return $this->uuids;
    }

    /**
     * @module PickingListsUsersBackendApi|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param string $uuid
     *
     * @return $this
     */
    public function addUuid(string $uuid)
    {
        $this->uuids[] = $uuid;
        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module PickingListsUsersBackendApi|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuids()
    {
        $this->assertPropertyIsSet(self::UUIDS);

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
                case 'usernames':
                case 'userIds':
                case 'throwUserNotFoundException':
                case 'statuses':
                case 'uuids':
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
                case 'usernames':
                case 'userIds':
                case 'throwUserNotFoundException':
                case 'statuses':
                case 'uuids':
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
                case 'usernames':
                case 'userIds':
                case 'throwUserNotFoundException':
                case 'statuses':
                case 'uuids':
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
            'usernames' => $this->usernames,
            'userIds' => $this->userIds,
            'throwUserNotFoundException' => $this->throwUserNotFoundException,
            'statuses' => $this->statuses,
            'uuids' => $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'usernames' => $this->usernames,
            'user_ids' => $this->userIds,
            'throw_user_not_found_exception' => $this->throwUserNotFoundException,
            'statuses' => $this->statuses,
            'uuids' => $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'usernames' => $this->usernames instanceof AbstractTransfer ? $this->usernames->toArray(true, false) : $this->usernames,
            'user_ids' => $this->userIds instanceof AbstractTransfer ? $this->userIds->toArray(true, false) : $this->userIds,
            'throw_user_not_found_exception' => $this->throwUserNotFoundException instanceof AbstractTransfer ? $this->throwUserNotFoundException->toArray(true, false) : $this->throwUserNotFoundException,
            'statuses' => $this->statuses instanceof AbstractTransfer ? $this->statuses->toArray(true, false) : $this->statuses,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, false) : $this->uuids,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'usernames' => $this->usernames instanceof AbstractTransfer ? $this->usernames->toArray(true, true) : $this->usernames,
            'userIds' => $this->userIds instanceof AbstractTransfer ? $this->userIds->toArray(true, true) : $this->userIds,
            'throwUserNotFoundException' => $this->throwUserNotFoundException instanceof AbstractTransfer ? $this->throwUserNotFoundException->toArray(true, true) : $this->throwUserNotFoundException,
            'statuses' => $this->statuses instanceof AbstractTransfer ? $this->statuses->toArray(true, true) : $this->statuses,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, true) : $this->uuids,
        ];
    }
}
