<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyUserEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_USER = 'idUser';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const IS_AGENT = 'isAgent';

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
    public const LAST_NAME = 'lastName';

    /**
     * @var string
     */
    public const PASSWORD = 'password';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const USERNAME = 'username';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SPY_LOCALE = 'spyLocale';

    /**
     * @var string
     */
    public const SPY_CMS_VERSIONS = 'spyCmsVersions';

    /**
     * @var string
     */
    public const SPY_AUTH_RESET_PASSWORDS = 'spyAuthResetPasswords';

    /**
     * @var string
     */
    public const SPY_API_KEYS = 'spyApiKeys';

    /**
     * @var string
     */
    public const SPY_ACL_USER_HAS_GROUPS = 'spyAclUserHasGroups';

    /**
     * @var string
     */
    public const SPY_CUSTOMERS = 'spyCustomers';

    /**
     * @var string
     */
    public const SPY_PRICE_PRODUCT_SCHEDULE_LISTS = 'spyPriceProductScheduleLists';

    /**
     * @var string
     */
    public const SPY_CUSTOMER_NOTES = 'spyCustomerNotes';

    /**
     * @var integer|null
     */
    protected $idUser;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var boolean|null
     */
    protected $isAgent;

    /**
     * @var boolean|null
     */
    protected $isWarehouseUser;

    /**
     * @var string|null
     */
    protected $lastLogin;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $spyLocale;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyCmsVersionEntityTransfer>
     */
    protected $spyCmsVersions;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyAuthResetPasswordEntityTransfer>
     */
    protected $spyAuthResetPasswords;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyApiKeyEntityTransfer>
     */
    protected $spyApiKeys;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyAclUserHasGroupEntityTransfer>
     */
    protected $spyAclUserHasGroups;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyCustomerEntityTransfer>
     */
    protected $spyCustomers;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyPriceProductScheduleListEntityTransfer>
     */
    protected $spyPriceProductScheduleLists;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer>
     */
    protected $spyCustomerNotes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_user' => 'idUser',
        'idUser' => 'idUser',
        'IdUser' => 'idUser',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'is_agent' => 'isAgent',
        'isAgent' => 'isAgent',
        'IsAgent' => 'isAgent',
        'is_warehouse_user' => 'isWarehouseUser',
        'isWarehouseUser' => 'isWarehouseUser',
        'IsWarehouseUser' => 'isWarehouseUser',
        'last_login' => 'lastLogin',
        'lastLogin' => 'lastLogin',
        'LastLogin' => 'lastLogin',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'password' => 'password',
        'Password' => 'password',
        'status' => 'status',
        'Status' => 'status',
        'username' => 'username',
        'Username' => 'username',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'spy_locale' => 'spyLocale',
        'spyLocale' => 'spyLocale',
        'SpyLocale' => 'spyLocale',
        'spy_cms_versions' => 'spyCmsVersions',
        'spyCmsVersions' => 'spyCmsVersions',
        'SpyCmsVersions' => 'spyCmsVersions',
        'spy_auth_reset_passwords' => 'spyAuthResetPasswords',
        'spyAuthResetPasswords' => 'spyAuthResetPasswords',
        'SpyAuthResetPasswords' => 'spyAuthResetPasswords',
        'spy_api_keys' => 'spyApiKeys',
        'spyApiKeys' => 'spyApiKeys',
        'SpyApiKeys' => 'spyApiKeys',
        'spy_acl_user_has_groups' => 'spyAclUserHasGroups',
        'spyAclUserHasGroups' => 'spyAclUserHasGroups',
        'SpyAclUserHasGroups' => 'spyAclUserHasGroups',
        'spy_customers' => 'spyCustomers',
        'spyCustomers' => 'spyCustomers',
        'SpyCustomers' => 'spyCustomers',
        'spy_price_product_schedule_lists' => 'spyPriceProductScheduleLists',
        'spyPriceProductScheduleLists' => 'spyPriceProductScheduleLists',
        'SpyPriceProductScheduleLists' => 'spyPriceProductScheduleLists',
        'spy_customer_notes' => 'spyCustomerNotes',
        'spyCustomerNotes' => 'spyCustomerNotes',
        'SpyCustomerNotes' => 'spyCustomerNotes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_USER => [
            'type' => 'integer',
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
        self::FK_LOCALE => [
            'type' => 'integer',
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
        self::IS_AGENT => [
            'type' => 'boolean',
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
        self::IS_WAREHOUSE_USER => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_warehouse_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
        ],
        self::SPY_LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_VERSIONS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsVersionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_versions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_AUTH_RESET_PASSWORDS => [
            'type' => 'Generated\Shared\Transfer\SpyAuthResetPasswordEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_auth_reset_passwords',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_API_KEYS => [
            'type' => 'Generated\Shared\Transfer\SpyApiKeyEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_api_keys',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_ACL_USER_HAS_GROUPS => [
            'type' => 'Generated\Shared\Transfer\SpyAclUserHasGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_acl_user_has_groups',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CUSTOMERS => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_customers',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRICE_PRODUCT_SCHEDULE_LISTS => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductScheduleListEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_price_product_schedule_lists',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CUSTOMER_NOTES => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_customer_notes',
            'is_collection' => true,
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
    public static $entityNamespace = 'Orm\Zed\User\Persistence\SpyUser';


    /**
     * @module 
     *
     * @param integer|null $idUser
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @module 
     *
     * @param integer|null $idUser
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdUserOrFail()
    {
        if ($this->idUser === null) {
            $this->throwNullValueException(static::ID_USER);
        }

        return $this->idUser;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkLocale
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isAgent
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsAgent()
    {
        return $this->isAgent;
    }

    /**
     * @module 
     *
     * @param boolean|null $isAgent
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsAgentOrFail()
    {
        if ($this->isAgent === null) {
            $this->throwNullValueException(static::IS_AGENT);
        }

        return $this->isAgent;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isWarehouseUser
     *
     * @return $this
     */
    public function setIsWarehouseUser($isWarehouseUser)
    {
        $this->isWarehouseUser = $isWarehouseUser;
        $this->modifiedProperties[self::IS_WAREHOUSE_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsWarehouseUser()
    {
        return $this->isWarehouseUser;
    }

    /**
     * @module 
     *
     * @param boolean|null $isWarehouseUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsWarehouseUserOrFail($isWarehouseUser)
    {
        if ($isWarehouseUser === null) {
            $this->throwNullValueException(static::IS_WAREHOUSE_USER);
        }

        return $this->setIsWarehouseUser($isWarehouseUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsWarehouseUserOrFail()
    {
        if ($this->isWarehouseUser === null) {
            $this->throwNullValueException(static::IS_WAREHOUSE_USER);
        }

        return $this->isWarehouseUser;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $spyLocale
     *
     * @return $this
     */
    public function setSpyLocale(SpyLocaleEntityTransfer $spyLocale = null)
    {
        $this->spyLocale = $spyLocale;
        $this->modifiedProperties[self::SPY_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getSpyLocale()
    {
        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $spyLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyLocaleOrFail(SpyLocaleEntityTransfer $spyLocale)
    {
        return $this->setSpyLocale($spyLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getSpyLocaleOrFail()
    {
        if ($this->spyLocale === null) {
            $this->throwNullValueException(static::SPY_LOCALE);
        }

        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyLocale()
    {
        $this->assertPropertyIsSet(self::SPY_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyCmsVersionEntityTransfer> $spyCmsVersions
     *
     * @return $this
     */
    public function setSpyCmsVersions(ArrayObject $spyCmsVersions)
    {
        $this->spyCmsVersions = $spyCmsVersions;
        $this->modifiedProperties[self::SPY_CMS_VERSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyCmsVersionEntityTransfer>
     */
    public function getSpyCmsVersions()
    {
        return $this->spyCmsVersions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsVersionEntityTransfer $spyCmsVersions
     *
     * @return $this
     */
    public function addSpyCmsVersions(SpyCmsVersionEntityTransfer $spyCmsVersions)
    {
        $this->spyCmsVersions[] = $spyCmsVersions;
        $this->modifiedProperties[self::SPY_CMS_VERSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsVersions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_VERSIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyAuthResetPasswordEntityTransfer> $spyAuthResetPasswords
     *
     * @return $this
     */
    public function setSpyAuthResetPasswords(ArrayObject $spyAuthResetPasswords)
    {
        $this->spyAuthResetPasswords = $spyAuthResetPasswords;
        $this->modifiedProperties[self::SPY_AUTH_RESET_PASSWORDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyAuthResetPasswordEntityTransfer>
     */
    public function getSpyAuthResetPasswords()
    {
        return $this->spyAuthResetPasswords;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAuthResetPasswordEntityTransfer $spyAuthResetPasswords
     *
     * @return $this
     */
    public function addSpyAuthResetPasswords(SpyAuthResetPasswordEntityTransfer $spyAuthResetPasswords)
    {
        $this->spyAuthResetPasswords[] = $spyAuthResetPasswords;
        $this->modifiedProperties[self::SPY_AUTH_RESET_PASSWORDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAuthResetPasswords()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_AUTH_RESET_PASSWORDS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyApiKeyEntityTransfer> $spyApiKeys
     *
     * @return $this
     */
    public function setSpyApiKeys(ArrayObject $spyApiKeys)
    {
        $this->spyApiKeys = $spyApiKeys;
        $this->modifiedProperties[self::SPY_API_KEYS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyApiKeyEntityTransfer>
     */
    public function getSpyApiKeys()
    {
        return $this->spyApiKeys;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyApiKeyEntityTransfer $spyApiKeys
     *
     * @return $this
     */
    public function addSpyApiKeys(SpyApiKeyEntityTransfer $spyApiKeys)
    {
        $this->spyApiKeys[] = $spyApiKeys;
        $this->modifiedProperties[self::SPY_API_KEYS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyApiKeys()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_API_KEYS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyAclUserHasGroupEntityTransfer> $spyAclUserHasGroups
     *
     * @return $this
     */
    public function setSpyAclUserHasGroups(ArrayObject $spyAclUserHasGroups)
    {
        $this->spyAclUserHasGroups = $spyAclUserHasGroups;
        $this->modifiedProperties[self::SPY_ACL_USER_HAS_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyAclUserHasGroupEntityTransfer>
     */
    public function getSpyAclUserHasGroups()
    {
        return $this->spyAclUserHasGroups;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAclUserHasGroupEntityTransfer $spyAclUserHasGroups
     *
     * @return $this
     */
    public function addSpyAclUserHasGroups(SpyAclUserHasGroupEntityTransfer $spyAclUserHasGroups)
    {
        $this->spyAclUserHasGroups[] = $spyAclUserHasGroups;
        $this->modifiedProperties[self::SPY_ACL_USER_HAS_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAclUserHasGroups()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_ACL_USER_HAS_GROUPS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyCustomerEntityTransfer> $spyCustomers
     *
     * @return $this
     */
    public function setSpyCustomers(ArrayObject $spyCustomers)
    {
        $this->spyCustomers = $spyCustomers;
        $this->modifiedProperties[self::SPY_CUSTOMERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyCustomerEntityTransfer>
     */
    public function getSpyCustomers()
    {
        return $this->spyCustomers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer $spyCustomers
     *
     * @return $this
     */
    public function addSpyCustomers(SpyCustomerEntityTransfer $spyCustomers)
    {
        $this->spyCustomers[] = $spyCustomers;
        $this->modifiedProperties[self::SPY_CUSTOMERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCustomers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CUSTOMERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyPriceProductScheduleListEntityTransfer> $spyPriceProductScheduleLists
     *
     * @return $this
     */
    public function setSpyPriceProductScheduleLists(ArrayObject $spyPriceProductScheduleLists)
    {
        $this->spyPriceProductScheduleLists = $spyPriceProductScheduleLists;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_SCHEDULE_LISTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyPriceProductScheduleListEntityTransfer>
     */
    public function getSpyPriceProductScheduleLists()
    {
        return $this->spyPriceProductScheduleLists;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductScheduleListEntityTransfer $spyPriceProductScheduleLists
     *
     * @return $this
     */
    public function addSpyPriceProductScheduleLists(SpyPriceProductScheduleListEntityTransfer $spyPriceProductScheduleLists)
    {
        $this->spyPriceProductScheduleLists[] = $spyPriceProductScheduleLists;
        $this->modifiedProperties[self::SPY_PRICE_PRODUCT_SCHEDULE_LISTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPriceProductScheduleLists()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRICE_PRODUCT_SCHEDULE_LISTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer> $spyCustomerNotes
     *
     * @return $this
     */
    public function setSpyCustomerNotes(ArrayObject $spyCustomerNotes)
    {
        $this->spyCustomerNotes = $spyCustomerNotes;
        $this->modifiedProperties[self::SPY_CUSTOMER_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer>
     */
    public function getSpyCustomerNotes()
    {
        return $this->spyCustomerNotes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerNoteEntityTransfer $spyCustomerNotes
     *
     * @return $this
     */
    public function addSpyCustomerNotes(SpyCustomerNoteEntityTransfer $spyCustomerNotes)
    {
        $this->spyCustomerNotes[] = $spyCustomerNotes;
        $this->modifiedProperties[self::SPY_CUSTOMER_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCustomerNotes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CUSTOMER_NOTES);

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
                case 'idUser':
                case 'fkLocale':
                case 'firstName':
                case 'isAgent':
                case 'isWarehouseUser':
                case 'lastLogin':
                case 'lastName':
                case 'password':
                case 'status':
                case 'username':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyLocale':
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
                case 'spyCmsVersions':
                case 'spyAuthResetPasswords':
                case 'spyApiKeys':
                case 'spyAclUserHasGroups':
                case 'spyCustomers':
                case 'spyPriceProductScheduleLists':
                case 'spyCustomerNotes':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idUser':
                case 'fkLocale':
                case 'firstName':
                case 'isAgent':
                case 'isWarehouseUser':
                case 'lastLogin':
                case 'lastName':
                case 'password':
                case 'status':
                case 'username':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyLocale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyCmsVersions':
                case 'spyAuthResetPasswords':
                case 'spyApiKeys':
                case 'spyAclUserHasGroups':
                case 'spyCustomers':
                case 'spyPriceProductScheduleLists':
                case 'spyCustomerNotes':
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
                case 'idUser':
                case 'fkLocale':
                case 'firstName':
                case 'isAgent':
                case 'isWarehouseUser':
                case 'lastLogin':
                case 'lastName':
                case 'password':
                case 'status':
                case 'username':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyLocale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyCmsVersions':
                case 'spyAuthResetPasswords':
                case 'spyApiKeys':
                case 'spyAclUserHasGroups':
                case 'spyCustomers':
                case 'spyPriceProductScheduleLists':
                case 'spyCustomerNotes':
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
        $this->spyCmsVersions = $this->spyCmsVersions ?: new ArrayObject();
        $this->spyAuthResetPasswords = $this->spyAuthResetPasswords ?: new ArrayObject();
        $this->spyApiKeys = $this->spyApiKeys ?: new ArrayObject();
        $this->spyAclUserHasGroups = $this->spyAclUserHasGroups ?: new ArrayObject();
        $this->spyCustomers = $this->spyCustomers ?: new ArrayObject();
        $this->spyPriceProductScheduleLists = $this->spyPriceProductScheduleLists ?: new ArrayObject();
        $this->spyCustomerNotes = $this->spyCustomerNotes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idUser' => $this->idUser,
            'fkLocale' => $this->fkLocale,
            'firstName' => $this->firstName,
            'isAgent' => $this->isAgent,
            'isWarehouseUser' => $this->isWarehouseUser,
            'lastLogin' => $this->lastLogin,
            'lastName' => $this->lastName,
            'password' => $this->password,
            'status' => $this->status,
            'username' => $this->username,
            'uuid' => $this->uuid,
            'spyLocale' => $this->spyLocale,
            'spyCmsVersions' => $this->spyCmsVersions,
            'spyAuthResetPasswords' => $this->spyAuthResetPasswords,
            'spyApiKeys' => $this->spyApiKeys,
            'spyAclUserHasGroups' => $this->spyAclUserHasGroups,
            'spyCustomers' => $this->spyCustomers,
            'spyPriceProductScheduleLists' => $this->spyPriceProductScheduleLists,
            'spyCustomerNotes' => $this->spyCustomerNotes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_user' => $this->idUser,
            'fk_locale' => $this->fkLocale,
            'first_name' => $this->firstName,
            'is_agent' => $this->isAgent,
            'is_warehouse_user' => $this->isWarehouseUser,
            'last_login' => $this->lastLogin,
            'last_name' => $this->lastName,
            'password' => $this->password,
            'status' => $this->status,
            'username' => $this->username,
            'uuid' => $this->uuid,
            'spy_locale' => $this->spyLocale,
            'spy_cms_versions' => $this->spyCmsVersions,
            'spy_auth_reset_passwords' => $this->spyAuthResetPasswords,
            'spy_api_keys' => $this->spyApiKeys,
            'spy_acl_user_has_groups' => $this->spyAclUserHasGroups,
            'spy_customers' => $this->spyCustomers,
            'spy_price_product_schedule_lists' => $this->spyPriceProductScheduleLists,
            'spy_customer_notes' => $this->spyCustomerNotes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_user' => $this->idUser instanceof AbstractTransfer ? $this->idUser->toArray(true, false) : $this->idUser,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'is_agent' => $this->isAgent instanceof AbstractTransfer ? $this->isAgent->toArray(true, false) : $this->isAgent,
            'is_warehouse_user' => $this->isWarehouseUser instanceof AbstractTransfer ? $this->isWarehouseUser->toArray(true, false) : $this->isWarehouseUser,
            'last_login' => $this->lastLogin instanceof AbstractTransfer ? $this->lastLogin->toArray(true, false) : $this->lastLogin,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, false) : $this->password,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, false) : $this->username,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'spy_locale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, false) : $this->spyLocale,
            'spy_cms_versions' => $this->spyCmsVersions instanceof AbstractTransfer ? $this->spyCmsVersions->toArray(true, false) : $this->addValuesToCollection($this->spyCmsVersions, true, false),
            'spy_auth_reset_passwords' => $this->spyAuthResetPasswords instanceof AbstractTransfer ? $this->spyAuthResetPasswords->toArray(true, false) : $this->addValuesToCollection($this->spyAuthResetPasswords, true, false),
            'spy_api_keys' => $this->spyApiKeys instanceof AbstractTransfer ? $this->spyApiKeys->toArray(true, false) : $this->addValuesToCollection($this->spyApiKeys, true, false),
            'spy_acl_user_has_groups' => $this->spyAclUserHasGroups instanceof AbstractTransfer ? $this->spyAclUserHasGroups->toArray(true, false) : $this->addValuesToCollection($this->spyAclUserHasGroups, true, false),
            'spy_customers' => $this->spyCustomers instanceof AbstractTransfer ? $this->spyCustomers->toArray(true, false) : $this->addValuesToCollection($this->spyCustomers, true, false),
            'spy_price_product_schedule_lists' => $this->spyPriceProductScheduleLists instanceof AbstractTransfer ? $this->spyPriceProductScheduleLists->toArray(true, false) : $this->addValuesToCollection($this->spyPriceProductScheduleLists, true, false),
            'spy_customer_notes' => $this->spyCustomerNotes instanceof AbstractTransfer ? $this->spyCustomerNotes->toArray(true, false) : $this->addValuesToCollection($this->spyCustomerNotes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idUser' => $this->idUser instanceof AbstractTransfer ? $this->idUser->toArray(true, true) : $this->idUser,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'isAgent' => $this->isAgent instanceof AbstractTransfer ? $this->isAgent->toArray(true, true) : $this->isAgent,
            'isWarehouseUser' => $this->isWarehouseUser instanceof AbstractTransfer ? $this->isWarehouseUser->toArray(true, true) : $this->isWarehouseUser,
            'lastLogin' => $this->lastLogin instanceof AbstractTransfer ? $this->lastLogin->toArray(true, true) : $this->lastLogin,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, true) : $this->password,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, true) : $this->username,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'spyLocale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, true) : $this->spyLocale,
            'spyCmsVersions' => $this->spyCmsVersions instanceof AbstractTransfer ? $this->spyCmsVersions->toArray(true, true) : $this->addValuesToCollection($this->spyCmsVersions, true, true),
            'spyAuthResetPasswords' => $this->spyAuthResetPasswords instanceof AbstractTransfer ? $this->spyAuthResetPasswords->toArray(true, true) : $this->addValuesToCollection($this->spyAuthResetPasswords, true, true),
            'spyApiKeys' => $this->spyApiKeys instanceof AbstractTransfer ? $this->spyApiKeys->toArray(true, true) : $this->addValuesToCollection($this->spyApiKeys, true, true),
            'spyAclUserHasGroups' => $this->spyAclUserHasGroups instanceof AbstractTransfer ? $this->spyAclUserHasGroups->toArray(true, true) : $this->addValuesToCollection($this->spyAclUserHasGroups, true, true),
            'spyCustomers' => $this->spyCustomers instanceof AbstractTransfer ? $this->spyCustomers->toArray(true, true) : $this->addValuesToCollection($this->spyCustomers, true, true),
            'spyPriceProductScheduleLists' => $this->spyPriceProductScheduleLists instanceof AbstractTransfer ? $this->spyPriceProductScheduleLists->toArray(true, true) : $this->addValuesToCollection($this->spyPriceProductScheduleLists, true, true),
            'spyCustomerNotes' => $this->spyCustomerNotes instanceof AbstractTransfer ? $this->spyCustomerNotes->toArray(true, true) : $this->addValuesToCollection($this->spyCustomerNotes, true, true),
        ];
    }
}
