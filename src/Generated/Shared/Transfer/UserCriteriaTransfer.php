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
class UserCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const USER_CONDITIONS = 'userConditions';

    /**
     * @deprecated Will be removed without replacement.
     */
    public const USER_REFERENCE = 'userReference';

    /**
     * @deprecated Will be removed without replacement.
     */
    public const WITH_EXPANDERS = 'withExpanders';

    /**
     * @deprecated Use UserConditions.usernames instead.
     */
    public const EMAIL = 'email';

    /**
     * @deprecated Use UserConditions.userIds instead.
     */
    public const ID_USER = 'idUser';

    /**
     * @var \Generated\Shared\Transfer\UserConditionsTransfer|null
     */
    protected $userConditions;

    /**
     * @var string|null
     */
    protected $userReference;

    /**
     * @var bool|null
     */
    protected $withExpanders;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var int|null
     */
    protected $idUser;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'user_conditions' => 'userConditions',
        'userConditions' => 'userConditions',
        'UserConditions' => 'userConditions',
        'user_reference' => 'userReference',
        'userReference' => 'userReference',
        'UserReference' => 'userReference',
        'with_expanders' => 'withExpanders',
        'withExpanders' => 'withExpanders',
        'WithExpanders' => 'withExpanders',
        'email' => 'email',
        'Email' => 'email',
        'id_user' => 'idUser',
        'idUser' => 'idUser',
        'IdUser' => 'idUser',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::USER_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\UserConditionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'user_conditions',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::USER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'user_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WITH_EXPANDERS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_expanders',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EMAIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'email',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_USER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_user',
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
     * @module Acl|CmsUserConnector|OauthUserConnector|OauthWarehouseUser|PickingListsUsersBackendApi|SecurityGui|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\UserConditionsTransfer|null $userConditions
     *
     * @return $this
     */
    public function setUserConditions(?UserConditionsTransfer $userConditions = null)
    {
        $this->userConditions = $userConditions;
        $this->modifiedProperties[self::USER_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module Acl|CmsUserConnector|OauthUserConnector|OauthWarehouseUser|PickingListsUsersBackendApi|SecurityGui|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return \Generated\Shared\Transfer\UserConditionsTransfer|null
     */
    public function getUserConditions(): ?UserConditionsTransfer
    {
        return $this->userConditions;
    }

    /**
     * @module Acl|CmsUserConnector|OauthUserConnector|OauthWarehouseUser|PickingListsUsersBackendApi|SecurityGui|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\UserConditionsTransfer $userConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserConditionsOrFail(UserConditionsTransfer $userConditions)
    {
        return $this->setUserConditions($userConditions);
    }

    /**
     * @module Acl|CmsUserConnector|OauthUserConnector|OauthWarehouseUser|PickingListsUsersBackendApi|SecurityGui|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\UserConditionsTransfer
     */
    public function getUserConditionsOrFail(): UserConditionsTransfer
    {
        if ($this->userConditions === null) {
            $this->throwNullValueException(static::USER_CONDITIONS);
        }

        return $this->userConditions;
    }

    /**
     * @module Acl|CmsUserConnector|OauthUserConnector|OauthWarehouseUser|PickingListsUsersBackendApi|SecurityGui|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUserConditions()
    {
        $this->assertPropertyIsSet(self::USER_CONDITIONS);

        return $this;
    }

    /**
     * @module OauthUserConnector
     *
     * @deprecated Will be removed without replacement.
     *
     * @param string|null $userReference
     *
     * @return $this
     */
    public function setUserReference($userReference)
    {
        $this->userReference = $userReference;
        $this->modifiedProperties[self::USER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module OauthUserConnector
     *
     * @deprecated Will be removed without replacement.
     *
     * @return string|null
     */
    public function getUserReference()
    {
        return $this->userReference;
    }

    /**
     * @module OauthUserConnector
     *
     * @deprecated Will be removed without replacement.
     *
     * @param string|null $userReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserReferenceOrFail($userReference)
    {
        if ($userReference === null) {
            $this->throwNullValueException(static::USER_REFERENCE);
        }

        return $this->setUserReference($userReference);
    }

    /**
     * @module OauthUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed without replacement.
     *
     * @return string
     */
    public function getUserReferenceOrFail()
    {
        if ($this->userReference === null) {
            $this->throwNullValueException(static::USER_REFERENCE);
        }

        return $this->userReference;
    }

    /**
     * @module OauthUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed without replacement.
     *
     * @return $this
     */
    public function requireUserReference()
    {
        $this->assertPropertyIsSet(self::USER_REFERENCE);

        return $this;
    }

    /**
     * @module OauthUserConnector
     *
     * @deprecated Will be removed without replacement.
     *
     * @param bool|null $withExpanders
     *
     * @return $this
     */
    public function setWithExpanders($withExpanders)
    {
        $this->withExpanders = $withExpanders;
        $this->modifiedProperties[self::WITH_EXPANDERS] = true;

        return $this;
    }

    /**
     * @module OauthUserConnector
     *
     * @deprecated Will be removed without replacement.
     *
     * @return bool|null
     */
    public function getWithExpanders()
    {
        return $this->withExpanders;
    }

    /**
     * @module OauthUserConnector
     *
     * @deprecated Will be removed without replacement.
     *
     * @param bool|null $withExpanders
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithExpandersOrFail($withExpanders)
    {
        if ($withExpanders === null) {
            $this->throwNullValueException(static::WITH_EXPANDERS);
        }

        return $this->setWithExpanders($withExpanders);
    }

    /**
     * @module OauthUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed without replacement.
     *
     * @return bool
     */
    public function getWithExpandersOrFail()
    {
        if ($this->withExpanders === null) {
            $this->throwNullValueException(static::WITH_EXPANDERS);
        }

        return $this->withExpanders;
    }

    /**
     * @module OauthUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed without replacement.
     *
     * @return $this
     */
    public function requireWithExpanders()
    {
        $this->assertPropertyIsSet(self::WITH_EXPANDERS);

        return $this;
    }

    /**
     * @module OauthUserConnector|SecurityOauthUser|UserPasswordReset|User
     *
     * @deprecated Use UserConditions.usernames instead.
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->modifiedProperties[self::EMAIL] = true;

        return $this;
    }

    /**
     * @module OauthUserConnector|SecurityOauthUser|UserPasswordReset|User
     *
     * @deprecated Use UserConditions.usernames instead.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module OauthUserConnector|SecurityOauthUser|UserPasswordReset|User
     *
     * @deprecated Use UserConditions.usernames instead.
     *
     * @param string|null $email
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEmailOrFail($email)
    {
        if ($email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->setEmail($email);
    }

    /**
     * @module OauthUserConnector|SecurityOauthUser|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use UserConditions.usernames instead.
     *
     * @return string
     */
    public function getEmailOrFail()
    {
        if ($this->email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->email;
    }

    /**
     * @module OauthUserConnector|SecurityOauthUser|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use UserConditions.usernames instead.
     *
     * @return $this
     */
    public function requireEmail()
    {
        $this->assertPropertyIsSet(self::EMAIL);

        return $this;
    }

    /**
     * @module User
     *
     * @deprecated Use UserConditions.userIds instead.
     *
     * @param int|null $idUser
     *
     * @return $this
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
        $this->modifiedProperties[self::ID_USER] = true;

        return $this;
    }

    /**
     * @module User
     *
     * @deprecated Use UserConditions.userIds instead.
     *
     * @return int|null
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @module User
     *
     * @deprecated Use UserConditions.userIds instead.
     *
     * @param int|null $idUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdUserOrFail($idUser)
    {
        if ($idUser === null) {
            $this->throwNullValueException(static::ID_USER);
        }

        return $this->setIdUser($idUser);
    }

    /**
     * @module User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use UserConditions.userIds instead.
     *
     * @return int
     */
    public function getIdUserOrFail()
    {
        if ($this->idUser === null) {
            $this->throwNullValueException(static::ID_USER);
        }

        return $this->idUser;
    }

    /**
     * @module User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use UserConditions.userIds instead.
     *
     * @return $this
     */
    public function requireIdUser()
    {
        $this->assertPropertyIsSet(self::ID_USER);

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
                case 'userReference':
                case 'withExpanders':
                case 'email':
                case 'idUser':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'userConditions':
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
                case 'userReference':
                case 'withExpanders':
                case 'email':
                case 'idUser':
                    $values[$arrayKey] = $value;

                    break;
                case 'userConditions':
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
                case 'userReference':
                case 'withExpanders':
                case 'email':
                case 'idUser':
                    $values[$arrayKey] = $value;

                    break;
                case 'userConditions':
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
            'userReference' => $this->userReference,
            'withExpanders' => $this->withExpanders,
            'email' => $this->email,
            'idUser' => $this->idUser,
            'userConditions' => $this->userConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'user_reference' => $this->userReference,
            'with_expanders' => $this->withExpanders,
            'email' => $this->email,
            'id_user' => $this->idUser,
            'user_conditions' => $this->userConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'user_reference' => $this->userReference instanceof AbstractTransfer ? $this->userReference->toArray(true, false) : $this->userReference,
            'with_expanders' => $this->withExpanders instanceof AbstractTransfer ? $this->withExpanders->toArray(true, false) : $this->withExpanders,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'id_user' => $this->idUser instanceof AbstractTransfer ? $this->idUser->toArray(true, false) : $this->idUser,
            'user_conditions' => $this->userConditions instanceof AbstractTransfer ? $this->userConditions->toArray(true, false) : $this->userConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'userReference' => $this->userReference instanceof AbstractTransfer ? $this->userReference->toArray(true, true) : $this->userReference,
            'withExpanders' => $this->withExpanders instanceof AbstractTransfer ? $this->withExpanders->toArray(true, true) : $this->withExpanders,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'idUser' => $this->idUser instanceof AbstractTransfer ? $this->idUser->toArray(true, true) : $this->idUser,
            'userConditions' => $this->userConditions instanceof AbstractTransfer ? $this->userConditions->toArray(true, true) : $this->userConditions,
        ];
    }
}
