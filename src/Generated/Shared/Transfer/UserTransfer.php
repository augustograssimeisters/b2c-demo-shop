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
class UserTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PASSWORD = 'password';

    /**
     * @var string
     */
    public const USERNAME = 'username';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const ID_USER = 'idUser';

    /**
     * @var string
     */
    public const ACL_GROUPS = 'aclGroups';

    /**
     * @var string
     */
    public const IS_AGENT = 'isAgent';

    /**
     * @var string
     */
    public const FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const LAST_NAME = 'lastName';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const USER_REFERENCE = 'userReference';

    /**
     * @var string
     */
    public const IS_WAREHOUSE_USER = 'isWarehouseUser';

    /**
     * @var string
     */
    public const LAST_LOGIN = 'lastLogin';

    /**
     * @var string
     */
    public const IS_SYSTEM_USER = 'isSystemUser';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var int|null
     */
    protected $idUser;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\GroupTransfer>
     */
    protected $aclGroups;

    /**
     * @var bool|null
     */
    protected $isAgent;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $userReference;

    /**
     * @var bool|null
     */
    protected $isWarehouseUser;

    /**
     * @var string|null
     */
    protected $lastLogin;

    /**
     * @var bool|null
     */
    protected $isSystemUser;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var int|null
     */
    protected $fkLocale;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'password' => 'password',
        'Password' => 'password',
        'username' => 'username',
        'Username' => 'username',
        'status' => 'status',
        'Status' => 'status',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'id_user' => 'idUser',
        'idUser' => 'idUser',
        'IdUser' => 'idUser',
        'acl_groups' => 'aclGroups',
        'aclGroups' => 'aclGroups',
        'AclGroups' => 'aclGroups',
        'is_agent' => 'isAgent',
        'isAgent' => 'isAgent',
        'IsAgent' => 'isAgent',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'email' => 'email',
        'Email' => 'email',
        'user_reference' => 'userReference',
        'userReference' => 'userReference',
        'UserReference' => 'userReference',
        'is_warehouse_user' => 'isWarehouseUser',
        'isWarehouseUser' => 'isWarehouseUser',
        'IsWarehouseUser' => 'isWarehouseUser',
        'last_login' => 'lastLogin',
        'lastLogin' => 'lastLogin',
        'LastLogin' => 'lastLogin',
        'is_system_user' => 'isSystemUser',
        'isSystemUser' => 'isSystemUser',
        'IsSystemUser' => 'isSystemUser',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PASSWORD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'password',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USERNAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'username',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATUS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'status',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
        self::ACL_GROUPS => [
            'type' => 'Generated\Shared\Transfer\GroupTransfer',
            'type_shim' => null,
            'name_underscore' => 'acl_groups',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_AGENT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_agent',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FIRST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'first_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LAST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'last_name',
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
        self::IS_WAREHOUSE_USER => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_warehouse_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::LAST_LOGIN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'last_login',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SYSTEM_USER => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_system_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LOCALE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
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
     * @module AgentPage|OauthAgentConnector|OauthUserConnector|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordReset|User
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        $this->modifiedProperties[self::PASSWORD] = true;

        return $this;
    }

    /**
     * @module AgentPage|OauthAgentConnector|OauthUserConnector|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordReset|User
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @module AgentPage|OauthAgentConnector|OauthUserConnector|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordReset|User
     *
     * @param string|null $password
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPasswordOrFail($password)
    {
        if ($password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->setPassword($password);
    }

    /**
     * @module AgentPage|OauthAgentConnector|OauthUserConnector|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPasswordOrFail()
    {
        if ($this->password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->password;
    }

    /**
     * @module AgentPage|OauthAgentConnector|OauthUserConnector|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePassword()
    {
        $this->assertPropertyIsSet(self::PASSWORD);

        return $this;
    }

    /**
     * @module AgentPage|SessionAgentValidation|Acl|Agent|Application|Log|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordResetMail|User
     *
     * @param string|null $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        $this->modifiedProperties[self::USERNAME] = true;

        return $this;
    }

    /**
     * @module AgentPage|SessionAgentValidation|Acl|Agent|Application|Log|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordResetMail|User
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @module AgentPage|SessionAgentValidation|Acl|Agent|Application|Log|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordResetMail|User
     *
     * @param string|null $username
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUsernameOrFail($username)
    {
        if ($username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->setUsername($username);
    }

    /**
     * @module AgentPage|SessionAgentValidation|Acl|Agent|Application|Log|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordResetMail|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUsernameOrFail()
    {
        if ($this->username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->username;
    }

    /**
     * @module AgentPage|SessionAgentValidation|Acl|Agent|Application|Log|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordResetMail|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsername()
    {
        $this->assertPropertyIsSet(self::USERNAME);

        return $this;
    }

    /**
     * @module AgentPage|SessionAgentValidation|OauthAgentConnector|PickingList|SecurityOauthUser|UserPasswordReset|User
     *
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module AgentPage|SessionAgentValidation|OauthAgentConnector|PickingList|SecurityOauthUser|UserPasswordReset|User
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module AgentPage|SessionAgentValidation|OauthAgentConnector|PickingList|SecurityOauthUser|UserPasswordReset|User
     *
     * @param string|null $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail($status)
    {
        if ($status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->setStatus($status);
    }

    /**
     * @module AgentPage|SessionAgentValidation|OauthAgentConnector|PickingList|SecurityOauthUser|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusOrFail()
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module AgentPage|SessionAgentValidation|OauthAgentConnector|PickingList|SecurityOauthUser|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatus()
    {
        $this->assertPropertyIsSet(self::STATUS);

        return $this;
    }

    /**
     * @module AgentPage|PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid(?string $uuid = null)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module AgentPage|PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return string|null
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * @module AgentPage|PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param string $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail(string $uuid)
    {
        return $this->setUuid($uuid);
    }

    /**
     * @module AgentPage|PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail(): string
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module AgentPage|PickingList|PickingListsBackendApi|PickingListsUsersBackendApi|User|UsersBackendApi|WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module SessionAgentValidation|Acl|ApiKey|CmsUserConnector|CustomerNote|CustomerUserConnectorGui|OauthAgentConnector|OauthUserConnector|PriceProductSchedule|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User|WarehouseUserGui
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
     * @module SessionAgentValidation|Acl|ApiKey|CmsUserConnector|CustomerNote|CustomerUserConnectorGui|OauthAgentConnector|OauthUserConnector|PriceProductSchedule|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User|WarehouseUserGui
     *
     * @return int|null
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @module SessionAgentValidation|Acl|ApiKey|CmsUserConnector|CustomerNote|CustomerUserConnectorGui|OauthAgentConnector|OauthUserConnector|PriceProductSchedule|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User|WarehouseUserGui
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
     * @module SessionAgentValidation|Acl|ApiKey|CmsUserConnector|CustomerNote|CustomerUserConnectorGui|OauthAgentConnector|OauthUserConnector|PriceProductSchedule|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User|WarehouseUserGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
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
     * @module SessionAgentValidation|Acl|ApiKey|CmsUserConnector|CustomerNote|CustomerUserConnectorGui|OauthAgentConnector|OauthUserConnector|PriceProductSchedule|SecurityOauthUser|SessionUserValidation|UserPasswordReset|User|WarehouseUserGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdUser()
    {
        $this->assertPropertyIsSet(self::ID_USER);

        return $this;
    }

    /**
     * @module Acl
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\GroupTransfer> $aclGroups
     *
     * @return $this
     */
    public function setAclGroups(ArrayObject $aclGroups)
    {
        $this->aclGroups = $aclGroups;
        $this->modifiedProperties[self::ACL_GROUPS] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\GroupTransfer>
     */
    public function getAclGroups()
    {
        return $this->aclGroups;
    }

    /**
     * @module Acl
     *
     * @param \Generated\Shared\Transfer\GroupTransfer $aclGroup
     *
     * @return $this
     */
    public function addAclGroup(GroupTransfer $aclGroup)
    {
        $this->aclGroups[] = $aclGroup;
        $this->modifiedProperties[self::ACL_GROUPS] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAclGroups()
    {
        $this->assertCollectionPropertyIsSet(self::ACL_GROUPS);

        return $this;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @param bool|null $isAgent
     *
     * @return $this
     */
    public function setIsAgent($isAgent)
    {
        $this->isAgent = $isAgent;
        $this->modifiedProperties[self::IS_AGENT] = true;

        return $this;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @return bool|null
     */
    public function getIsAgent()
    {
        return $this->isAgent;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @param bool|null $isAgent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAgentOrFail($isAgent)
    {
        if ($isAgent === null) {
            $this->throwNullValueException(static::IS_AGENT);
        }

        return $this->setIsAgent($isAgent);
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsAgentOrFail()
    {
        if ($this->isAgent === null) {
            $this->throwNullValueException(static::IS_AGENT);
        }

        return $this->isAgent;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsAgent()
    {
        $this->assertPropertyIsSet(self::IS_AGENT);

        return $this;
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @param string|null $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        $this->modifiedProperties[self::FIRST_NAME] = true;

        return $this;
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @param string|null $firstName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFirstNameOrFail($firstName)
    {
        if ($firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->setFirstName($firstName);
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFirstNameOrFail()
    {
        if ($this->firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->firstName;
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFirstName()
    {
        $this->assertPropertyIsSet(self::FIRST_NAME);

        return $this;
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        $this->modifiedProperties[self::LAST_NAME] = true;

        return $this;
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @param string|null $lastName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLastNameOrFail($lastName)
    {
        if ($lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->setLastName($lastName);
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLastNameOrFail()
    {
        if ($this->lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->lastName;
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLastName()
    {
        $this->assertPropertyIsSet(self::LAST_NAME);

        return $this;
    }

    /**
     * @module OauthUserConnector
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
     * @module OauthUserConnector
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module OauthUserConnector
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
     * @module OauthUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
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
     * @module OauthUserConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEmail()
    {
        $this->assertPropertyIsSet(self::EMAIL);

        return $this;
    }

    /**
     * @module OauthUserConnector
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
     * @return string|null
     */
    public function getUserReference()
    {
        return $this->userReference;
    }

    /**
     * @module OauthUserConnector
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
     * @return $this
     */
    public function requireUserReference()
    {
        $this->assertPropertyIsSet(self::USER_REFERENCE);

        return $this;
    }

    /**
     * @module OauthWarehouseUser|PickingList|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param bool|null $isWarehouseUser
     *
     * @return $this
     */
    public function setIsWarehouseUser(?bool $isWarehouseUser = null)
    {
        $this->isWarehouseUser = $isWarehouseUser;
        $this->modifiedProperties[self::IS_WAREHOUSE_USER] = true;

        return $this;
    }

    /**
     * @module OauthWarehouseUser|PickingList|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return bool|null
     */
    public function getIsWarehouseUser(): ?bool
    {
        return $this->isWarehouseUser;
    }

    /**
     * @module OauthWarehouseUser|PickingList|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param bool $isWarehouseUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsWarehouseUserOrFail(bool $isWarehouseUser)
    {
        return $this->setIsWarehouseUser($isWarehouseUser);
    }

    /**
     * @module OauthWarehouseUser|PickingList|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsWarehouseUserOrFail(): bool
    {
        if ($this->isWarehouseUser === null) {
            $this->throwNullValueException(static::IS_WAREHOUSE_USER);
        }

        return $this->isWarehouseUser;
    }

    /**
     * @module OauthWarehouseUser|PickingList|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsWarehouseUser()
    {
        $this->assertPropertyIsSet(self::IS_WAREHOUSE_USER);

        return $this;
    }

    /**
     * @module SecurityGui|SecuritySystemUser|User
     *
     * @param string|null $lastLogin
     *
     * @return $this
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
        $this->modifiedProperties[self::LAST_LOGIN] = true;

        return $this;
    }

    /**
     * @module SecurityGui|SecuritySystemUser|User
     *
     * @return string|null
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * @module SecurityGui|SecuritySystemUser|User
     *
     * @param string|null $lastLogin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLastLoginOrFail($lastLogin)
    {
        if ($lastLogin === null) {
            $this->throwNullValueException(static::LAST_LOGIN);
        }

        return $this->setLastLogin($lastLogin);
    }

    /**
     * @module SecurityGui|SecuritySystemUser|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLastLoginOrFail()
    {
        if ($this->lastLogin === null) {
            $this->throwNullValueException(static::LAST_LOGIN);
        }

        return $this->lastLogin;
    }

    /**
     * @module SecurityGui|SecuritySystemUser|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLastLogin()
    {
        $this->assertPropertyIsSet(self::LAST_LOGIN);

        return $this;
    }

    /**
     * @module SecuritySystemUser
     *
     * @param bool|null $isSystemUser
     *
     * @return $this
     */
    public function setIsSystemUser($isSystemUser)
    {
        $this->isSystemUser = $isSystemUser;
        $this->modifiedProperties[self::IS_SYSTEM_USER] = true;

        return $this;
    }

    /**
     * @module SecuritySystemUser
     *
     * @return bool|null
     */
    public function getIsSystemUser()
    {
        return $this->isSystemUser;
    }

    /**
     * @module SecuritySystemUser
     *
     * @param bool|null $isSystemUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSystemUserOrFail($isSystemUser)
    {
        if ($isSystemUser === null) {
            $this->throwNullValueException(static::IS_SYSTEM_USER);
        }

        return $this->setIsSystemUser($isSystemUser);
    }

    /**
     * @module SecuritySystemUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSystemUserOrFail()
    {
        if ($this->isSystemUser === null) {
            $this->throwNullValueException(static::IS_SYSTEM_USER);
        }

        return $this->isSystemUser;
    }

    /**
     * @module SecuritySystemUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSystemUser()
    {
        $this->assertPropertyIsSet(self::IS_SYSTEM_USER);

        return $this;
    }

    /**
     * @module UserLocale
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module UserLocale
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module UserLocale
     *
     * @param string|null $localeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleNameOrFail($localeName)
    {
        if ($localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->setLocaleName($localeName);
    }

    /**
     * @module UserLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleNameOrFail()
    {
        if ($this->localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->localeName;
    }

    /**
     * @module UserLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleName()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAME);

        return $this;
    }

    /**
     * @module UserLocale
     *
     * @param int|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module UserLocale
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module UserLocale
     *
     * @param int|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module UserLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module UserLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

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
                case 'password':
                case 'username':
                case 'status':
                case 'uuid':
                case 'idUser':
                case 'isAgent':
                case 'firstName':
                case 'lastName':
                case 'email':
                case 'userReference':
                case 'isWarehouseUser':
                case 'lastLogin':
                case 'isSystemUser':
                case 'localeName':
                case 'fkLocale':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'aclGroups':
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
                case 'password':
                case 'username':
                case 'status':
                case 'uuid':
                case 'idUser':
                case 'isAgent':
                case 'firstName':
                case 'lastName':
                case 'email':
                case 'userReference':
                case 'isWarehouseUser':
                case 'lastLogin':
                case 'isSystemUser':
                case 'localeName':
                case 'fkLocale':
                    $values[$arrayKey] = $value;

                    break;
                case 'aclGroups':
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
                case 'password':
                case 'username':
                case 'status':
                case 'uuid':
                case 'idUser':
                case 'isAgent':
                case 'firstName':
                case 'lastName':
                case 'email':
                case 'userReference':
                case 'isWarehouseUser':
                case 'lastLogin':
                case 'isSystemUser':
                case 'localeName':
                case 'fkLocale':
                    $values[$arrayKey] = $value;

                    break;
                case 'aclGroups':
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
        $this->aclGroups = $this->aclGroups ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'password' => $this->password,
            'username' => $this->username,
            'status' => $this->status,
            'uuid' => $this->uuid,
            'idUser' => $this->idUser,
            'isAgent' => $this->isAgent,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'userReference' => $this->userReference,
            'isWarehouseUser' => $this->isWarehouseUser,
            'lastLogin' => $this->lastLogin,
            'isSystemUser' => $this->isSystemUser,
            'localeName' => $this->localeName,
            'fkLocale' => $this->fkLocale,
            'aclGroups' => $this->aclGroups,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'password' => $this->password,
            'username' => $this->username,
            'status' => $this->status,
            'uuid' => $this->uuid,
            'id_user' => $this->idUser,
            'is_agent' => $this->isAgent,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'user_reference' => $this->userReference,
            'is_warehouse_user' => $this->isWarehouseUser,
            'last_login' => $this->lastLogin,
            'is_system_user' => $this->isSystemUser,
            'locale_name' => $this->localeName,
            'fk_locale' => $this->fkLocale,
            'acl_groups' => $this->aclGroups,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, false) : $this->password,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, false) : $this->username,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'id_user' => $this->idUser instanceof AbstractTransfer ? $this->idUser->toArray(true, false) : $this->idUser,
            'is_agent' => $this->isAgent instanceof AbstractTransfer ? $this->isAgent->toArray(true, false) : $this->isAgent,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'user_reference' => $this->userReference instanceof AbstractTransfer ? $this->userReference->toArray(true, false) : $this->userReference,
            'is_warehouse_user' => $this->isWarehouseUser instanceof AbstractTransfer ? $this->isWarehouseUser->toArray(true, false) : $this->isWarehouseUser,
            'last_login' => $this->lastLogin instanceof AbstractTransfer ? $this->lastLogin->toArray(true, false) : $this->lastLogin,
            'is_system_user' => $this->isSystemUser instanceof AbstractTransfer ? $this->isSystemUser->toArray(true, false) : $this->isSystemUser,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'acl_groups' => $this->aclGroups instanceof AbstractTransfer ? $this->aclGroups->toArray(true, false) : $this->addValuesToCollection($this->aclGroups, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, true) : $this->password,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, true) : $this->username,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'idUser' => $this->idUser instanceof AbstractTransfer ? $this->idUser->toArray(true, true) : $this->idUser,
            'isAgent' => $this->isAgent instanceof AbstractTransfer ? $this->isAgent->toArray(true, true) : $this->isAgent,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'userReference' => $this->userReference instanceof AbstractTransfer ? $this->userReference->toArray(true, true) : $this->userReference,
            'isWarehouseUser' => $this->isWarehouseUser instanceof AbstractTransfer ? $this->isWarehouseUser->toArray(true, true) : $this->isWarehouseUser,
            'lastLogin' => $this->lastLogin instanceof AbstractTransfer ? $this->lastLogin->toArray(true, true) : $this->lastLogin,
            'isSystemUser' => $this->isSystemUser instanceof AbstractTransfer ? $this->isSystemUser->toArray(true, true) : $this->isSystemUser,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'aclGroups' => $this->aclGroups instanceof AbstractTransfer ? $this->aclGroups->toArray(true, true) : $this->addValuesToCollection($this->aclGroups, true, true),
        ];
    }
}
