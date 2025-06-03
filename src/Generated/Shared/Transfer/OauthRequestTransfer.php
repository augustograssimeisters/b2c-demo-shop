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
class OauthRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const GRANT_TYPE = 'grantType';

    /**
     * @var string
     */
    public const USERNAME = 'username';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const GLUE_AUTHENTICATION_REQUEST_CONTEXT = 'glueAuthenticationRequestContext';

    /**
     * @var string
     */
    public const CLIENT_ID = 'clientId';

    /**
     * @var string
     */
    public const CLIENT_SECRET = 'clientSecret';

    /**
     * @var string
     */
    public const SCOPE = 'scope';

    /**
     * @var string
     */
    public const PASSWORD = 'password';

    /**
     * @var string
     */
    public const REFRESH_TOKEN = 'refreshToken';

    /**
     * @var string
     */
    public const ID_WAREHOUSE = 'idWarehouse';

    /**
     * @var string|null
     */
    protected $grantType;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var \Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer|null
     */
    protected $glueAuthenticationRequestContext;

    /**
     * @var string|null
     */
    protected $clientId;

    /**
     * @var string|null
     */
    protected $clientSecret;

    /**
     * @var string|null
     */
    protected $scope;

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var string|null
     */
    protected $refreshToken;

    /**
     * @var int|null
     */
    protected $idWarehouse;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'grant_type' => 'grantType',
        'grantType' => 'grantType',
        'GrantType' => 'grantType',
        'username' => 'username',
        'Username' => 'username',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'glue_authentication_request_context' => 'glueAuthenticationRequestContext',
        'glueAuthenticationRequestContext' => 'glueAuthenticationRequestContext',
        'GlueAuthenticationRequestContext' => 'glueAuthenticationRequestContext',
        'client_id' => 'clientId',
        'clientId' => 'clientId',
        'ClientId' => 'clientId',
        'client_secret' => 'clientSecret',
        'clientSecret' => 'clientSecret',
        'ClientSecret' => 'clientSecret',
        'scope' => 'scope',
        'Scope' => 'scope',
        'password' => 'password',
        'Password' => 'password',
        'refresh_token' => 'refreshToken',
        'refreshToken' => 'refreshToken',
        'RefreshToken' => 'refreshToken',
        'id_warehouse' => 'idWarehouse',
        'idWarehouse' => 'idWarehouse',
        'IdWarehouse' => 'idWarehouse',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::GRANT_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'grant_type',
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
            'is_strict' => false,
        ],
        self::GLUE_AUTHENTICATION_REQUEST_CONTEXT => [
            'type' => 'Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer',
            'type_shim' => null,
            'name_underscore' => 'glue_authentication_request_context',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CLIENT_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'client_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CLIENT_SECRET => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'client_secret',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SCOPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'scope',
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
        self::REFRESH_TOKEN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'refresh_token',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_WAREHOUSE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_warehouse',
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
     * @module AgentAuthRestApi|AuthRestApi|OauthApi|OauthBackendApi|OauthWarehouse|Oauth|WarehouseOauthBackendApi
     *
     * @param string|null $grantType
     *
     * @return $this
     */
    public function setGrantType($grantType)
    {
        $this->grantType = $grantType;
        $this->modifiedProperties[self::GRANT_TYPE] = true;

        return $this;
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|OauthApi|OauthBackendApi|OauthWarehouse|Oauth|WarehouseOauthBackendApi
     *
     * @return string|null
     */
    public function getGrantType()
    {
        return $this->grantType;
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|OauthApi|OauthBackendApi|OauthWarehouse|Oauth|WarehouseOauthBackendApi
     *
     * @param string|null $grantType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGrantTypeOrFail($grantType)
    {
        if ($grantType === null) {
            $this->throwNullValueException(static::GRANT_TYPE);
        }

        return $this->setGrantType($grantType);
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|OauthApi|OauthBackendApi|OauthWarehouse|Oauth|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGrantTypeOrFail()
    {
        if ($this->grantType === null) {
            $this->throwNullValueException(static::GRANT_TYPE);
        }

        return $this->grantType;
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|OauthApi|OauthBackendApi|OauthWarehouse|Oauth|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGrantType()
    {
        $this->assertPropertyIsSet(self::GRANT_TYPE);

        return $this;
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|OauthBackendApi|Oauth
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
     * @module AgentAuthRestApi|AuthRestApi|OauthBackendApi|Oauth
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @module AgentAuthRestApi|AuthRestApi|OauthBackendApi|Oauth
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
     * @module AgentAuthRestApi|AuthRestApi|OauthBackendApi|Oauth
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
     * @module AgentAuthRestApi|AuthRestApi|OauthBackendApi|Oauth
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
     * @module AuthRestApi
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module AuthRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module AuthRestApi
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module AuthRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module AuthRestApi
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
     * @module AuthenticationOauth|Oauth
     *
     * @param \Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer|null $glueAuthenticationRequestContext
     *
     * @return $this
     */
    public function setGlueAuthenticationRequestContext(GlueAuthenticationRequestContextTransfer $glueAuthenticationRequestContext = null)
    {
        $this->glueAuthenticationRequestContext = $glueAuthenticationRequestContext;
        $this->modifiedProperties[self::GLUE_AUTHENTICATION_REQUEST_CONTEXT] = true;

        return $this;
    }

    /**
     * @module AuthenticationOauth|Oauth
     *
     * @return \Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer|null
     */
    public function getGlueAuthenticationRequestContext()
    {
        return $this->glueAuthenticationRequestContext;
    }

    /**
     * @module AuthenticationOauth|Oauth
     *
     * @param \Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer $glueAuthenticationRequestContext
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGlueAuthenticationRequestContextOrFail(GlueAuthenticationRequestContextTransfer $glueAuthenticationRequestContext)
    {
        return $this->setGlueAuthenticationRequestContext($glueAuthenticationRequestContext);
    }

    /**
     * @module AuthenticationOauth|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer
     */
    public function getGlueAuthenticationRequestContextOrFail()
    {
        if ($this->glueAuthenticationRequestContext === null) {
            $this->throwNullValueException(static::GLUE_AUTHENTICATION_REQUEST_CONTEXT);
        }

        return $this->glueAuthenticationRequestContext;
    }

    /**
     * @module AuthenticationOauth|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGlueAuthenticationRequestContext()
    {
        $this->assertPropertyIsSet(self::GLUE_AUTHENTICATION_REQUEST_CONTEXT);

        return $this;
    }

    /**
     * @module Oauth
     *
     * @param string|null $clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        $this->modifiedProperties[self::CLIENT_ID] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @module Oauth
     *
     * @param string|null $clientId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setClientIdOrFail($clientId)
    {
        if ($clientId === null) {
            $this->throwNullValueException(static::CLIENT_ID);
        }

        return $this->setClientId($clientId);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getClientIdOrFail()
    {
        if ($this->clientId === null) {
            $this->throwNullValueException(static::CLIENT_ID);
        }

        return $this->clientId;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireClientId()
    {
        $this->assertPropertyIsSet(self::CLIENT_ID);

        return $this;
    }

    /**
     * @module Oauth
     *
     * @param string|null $clientSecret
     *
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
        $this->modifiedProperties[self::CLIENT_SECRET] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return string|null
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @module Oauth
     *
     * @param string|null $clientSecret
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setClientSecretOrFail($clientSecret)
    {
        if ($clientSecret === null) {
            $this->throwNullValueException(static::CLIENT_SECRET);
        }

        return $this->setClientSecret($clientSecret);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getClientSecretOrFail()
    {
        if ($this->clientSecret === null) {
            $this->throwNullValueException(static::CLIENT_SECRET);
        }

        return $this->clientSecret;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireClientSecret()
    {
        $this->assertPropertyIsSet(self::CLIENT_SECRET);

        return $this;
    }

    /**
     * @module Oauth
     *
     * @param string|null $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        $this->modifiedProperties[self::SCOPE] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @module Oauth
     *
     * @param string|null $scope
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setScopeOrFail($scope)
    {
        if ($scope === null) {
            $this->throwNullValueException(static::SCOPE);
        }

        return $this->setScope($scope);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getScopeOrFail()
    {
        if ($this->scope === null) {
            $this->throwNullValueException(static::SCOPE);
        }

        return $this->scope;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireScope()
    {
        $this->assertPropertyIsSet(self::SCOPE);

        return $this;
    }

    /**
     * @module Oauth
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
     * @module Oauth
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @module Oauth
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
     * @module Oauth
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
     * @module Oauth
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
     * @module Oauth
     *
     * @param string|null $refreshToken
     *
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
        $this->modifiedProperties[self::REFRESH_TOKEN] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return string|null
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @module Oauth
     *
     * @param string|null $refreshToken
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefreshTokenOrFail($refreshToken)
    {
        if ($refreshToken === null) {
            $this->throwNullValueException(static::REFRESH_TOKEN);
        }

        return $this->setRefreshToken($refreshToken);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRefreshTokenOrFail()
    {
        if ($this->refreshToken === null) {
            $this->throwNullValueException(static::REFRESH_TOKEN);
        }

        return $this->refreshToken;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRefreshToken()
    {
        $this->assertPropertyIsSet(self::REFRESH_TOKEN);

        return $this;
    }

    /**
     * @module WarehouseOauthBackendApi
     *
     * @param int|null $idWarehouse
     *
     * @return $this
     */
    public function setIdWarehouse(?int $idWarehouse = null)
    {
        $this->idWarehouse = $idWarehouse;
        $this->modifiedProperties[self::ID_WAREHOUSE] = true;

        return $this;
    }

    /**
     * @module WarehouseOauthBackendApi
     *
     * @return int|null
     */
    public function getIdWarehouse(): ?int
    {
        return $this->idWarehouse;
    }

    /**
     * @module WarehouseOauthBackendApi
     *
     * @param int $idWarehouse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdWarehouseOrFail(int $idWarehouse)
    {
        return $this->setIdWarehouse($idWarehouse);
    }

    /**
     * @module WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdWarehouseOrFail(): int
    {
        if ($this->idWarehouse === null) {
            $this->throwNullValueException(static::ID_WAREHOUSE);
        }

        return $this->idWarehouse;
    }

    /**
     * @module WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdWarehouse()
    {
        $this->assertPropertyIsSet(self::ID_WAREHOUSE);

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
                case 'grantType':
                case 'username':
                case 'customerReference':
                case 'clientId':
                case 'clientSecret':
                case 'scope':
                case 'password':
                case 'refreshToken':
                case 'idWarehouse':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'glueAuthenticationRequestContext':
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
                case 'grantType':
                case 'username':
                case 'customerReference':
                case 'clientId':
                case 'clientSecret':
                case 'scope':
                case 'password':
                case 'refreshToken':
                case 'idWarehouse':
                    $values[$arrayKey] = $value;

                    break;
                case 'glueAuthenticationRequestContext':
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
                case 'grantType':
                case 'username':
                case 'customerReference':
                case 'clientId':
                case 'clientSecret':
                case 'scope':
                case 'password':
                case 'refreshToken':
                case 'idWarehouse':
                    $values[$arrayKey] = $value;

                    break;
                case 'glueAuthenticationRequestContext':
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
            'grantType' => $this->grantType,
            'username' => $this->username,
            'customerReference' => $this->customerReference,
            'clientId' => $this->clientId,
            'clientSecret' => $this->clientSecret,
            'scope' => $this->scope,
            'password' => $this->password,
            'refreshToken' => $this->refreshToken,
            'idWarehouse' => $this->idWarehouse,
            'glueAuthenticationRequestContext' => $this->glueAuthenticationRequestContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'grant_type' => $this->grantType,
            'username' => $this->username,
            'customer_reference' => $this->customerReference,
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'scope' => $this->scope,
            'password' => $this->password,
            'refresh_token' => $this->refreshToken,
            'id_warehouse' => $this->idWarehouse,
            'glue_authentication_request_context' => $this->glueAuthenticationRequestContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'grant_type' => $this->grantType instanceof AbstractTransfer ? $this->grantType->toArray(true, false) : $this->grantType,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, false) : $this->username,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'client_id' => $this->clientId instanceof AbstractTransfer ? $this->clientId->toArray(true, false) : $this->clientId,
            'client_secret' => $this->clientSecret instanceof AbstractTransfer ? $this->clientSecret->toArray(true, false) : $this->clientSecret,
            'scope' => $this->scope instanceof AbstractTransfer ? $this->scope->toArray(true, false) : $this->scope,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, false) : $this->password,
            'refresh_token' => $this->refreshToken instanceof AbstractTransfer ? $this->refreshToken->toArray(true, false) : $this->refreshToken,
            'id_warehouse' => $this->idWarehouse instanceof AbstractTransfer ? $this->idWarehouse->toArray(true, false) : $this->idWarehouse,
            'glue_authentication_request_context' => $this->glueAuthenticationRequestContext instanceof AbstractTransfer ? $this->glueAuthenticationRequestContext->toArray(true, false) : $this->glueAuthenticationRequestContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'grantType' => $this->grantType instanceof AbstractTransfer ? $this->grantType->toArray(true, true) : $this->grantType,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, true) : $this->username,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'clientId' => $this->clientId instanceof AbstractTransfer ? $this->clientId->toArray(true, true) : $this->clientId,
            'clientSecret' => $this->clientSecret instanceof AbstractTransfer ? $this->clientSecret->toArray(true, true) : $this->clientSecret,
            'scope' => $this->scope instanceof AbstractTransfer ? $this->scope->toArray(true, true) : $this->scope,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, true) : $this->password,
            'refreshToken' => $this->refreshToken instanceof AbstractTransfer ? $this->refreshToken->toArray(true, true) : $this->refreshToken,
            'idWarehouse' => $this->idWarehouse instanceof AbstractTransfer ? $this->idWarehouse->toArray(true, true) : $this->idWarehouse,
            'glueAuthenticationRequestContext' => $this->glueAuthenticationRequestContext instanceof AbstractTransfer ? $this->glueAuthenticationRequestContext->toArray(true, true) : $this->glueAuthenticationRequestContext,
        ];
    }
}
