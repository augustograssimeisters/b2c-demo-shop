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
class OauthScopeRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DEFAULT_SCOPES = 'defaultScopes';

    /**
     * @var string
     */
    public const GRANT_TYPE = 'grantType';

    /**
     * @var string
     */
    public const REQUEST_APPLICATION = 'requestApplication';

    /**
     * @var string
     */
    public const USER_IDENTIFIER = 'userIdentifier';

    /**
     * @var string
     */
    public const CLIENT_ID = 'clientId';

    /**
     * @var string
     */
    public const CLIENT_NAME = 'clientName';

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\OauthScopeTransfer>
     */
    protected $defaultScopes;

    /**
     * @var string|null
     */
    protected $grantType;

    /**
     * @var string|null
     */
    protected $requestApplication;

    /**
     * @var string|null
     */
    protected $userIdentifier;

    /**
     * @var string|null
     */
    protected $clientId;

    /**
     * @var string|null
     */
    protected $clientName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'default_scopes' => 'defaultScopes',
        'defaultScopes' => 'defaultScopes',
        'DefaultScopes' => 'defaultScopes',
        'grant_type' => 'grantType',
        'grantType' => 'grantType',
        'GrantType' => 'grantType',
        'request_application' => 'requestApplication',
        'requestApplication' => 'requestApplication',
        'RequestApplication' => 'requestApplication',
        'user_identifier' => 'userIdentifier',
        'userIdentifier' => 'userIdentifier',
        'UserIdentifier' => 'userIdentifier',
        'client_id' => 'clientId',
        'clientId' => 'clientId',
        'ClientId' => 'clientId',
        'client_name' => 'clientName',
        'clientName' => 'clientName',
        'ClientName' => 'clientName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DEFAULT_SCOPES => [
            'type' => 'Generated\Shared\Transfer\OauthScopeTransfer',
            'type_shim' => null,
            'name_underscore' => 'default_scopes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::REQUEST_APPLICATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'request_application',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USER_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'user_identifier',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::CLIENT_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'client_name',
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
     * @module OauthAgentConnector|OauthCustomerConnector|OauthUserConnector|OauthWarehouse|Oauth
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\OauthScopeTransfer> $defaultScopes
     *
     * @return $this
     */
    public function setDefaultScopes(ArrayObject $defaultScopes)
    {
        $this->defaultScopes = $defaultScopes;
        $this->modifiedProperties[self::DEFAULT_SCOPES] = true;

        return $this;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|OauthUserConnector|OauthWarehouse|Oauth
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\OauthScopeTransfer>
     */
    public function getDefaultScopes()
    {
        return $this->defaultScopes;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|OauthUserConnector|OauthWarehouse|Oauth
     *
     * @param \Generated\Shared\Transfer\OauthScopeTransfer $scope
     *
     * @return $this
     */
    public function addScope(OauthScopeTransfer $scope)
    {
        $this->defaultScopes[] = $scope;
        $this->modifiedProperties[self::DEFAULT_SCOPES] = true;

        return $this;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|OauthUserConnector|OauthWarehouse|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultScopes()
    {
        $this->assertCollectionPropertyIsSet(self::DEFAULT_SCOPES);

        return $this;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|OauthUserConnector|OauthWarehouse|Oauth
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
     * @module OauthAgentConnector|OauthCustomerConnector|OauthUserConnector|OauthWarehouse|Oauth
     *
     * @return string|null
     */
    public function getGrantType()
    {
        return $this->grantType;
    }

    /**
     * @module OauthAgentConnector|OauthCustomerConnector|OauthUserConnector|OauthWarehouse|Oauth
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
     * @module OauthAgentConnector|OauthCustomerConnector|OauthUserConnector|OauthWarehouse|Oauth
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
     * @module OauthAgentConnector|OauthCustomerConnector|OauthUserConnector|OauthWarehouse|Oauth
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
     * @module OauthCustomerConnector|OauthUserConnector|Oauth
     *
     * @param string|null $requestApplication
     *
     * @return $this
     */
    public function setRequestApplication($requestApplication)
    {
        $this->requestApplication = $requestApplication;
        $this->modifiedProperties[self::REQUEST_APPLICATION] = true;

        return $this;
    }

    /**
     * @module OauthCustomerConnector|OauthUserConnector|Oauth
     *
     * @return string|null
     */
    public function getRequestApplication()
    {
        return $this->requestApplication;
    }

    /**
     * @module OauthCustomerConnector|OauthUserConnector|Oauth
     *
     * @param string|null $requestApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestApplicationOrFail($requestApplication)
    {
        if ($requestApplication === null) {
            $this->throwNullValueException(static::REQUEST_APPLICATION);
        }

        return $this->setRequestApplication($requestApplication);
    }

    /**
     * @module OauthCustomerConnector|OauthUserConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRequestApplicationOrFail()
    {
        if ($this->requestApplication === null) {
            $this->throwNullValueException(static::REQUEST_APPLICATION);
        }

        return $this->requestApplication;
    }

    /**
     * @module OauthCustomerConnector|OauthUserConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestApplication()
    {
        $this->assertPropertyIsSet(self::REQUEST_APPLICATION);

        return $this;
    }

    /**
     * @module OauthUserConnector|Oauth
     *
     * @param string|null $userIdentifier
     *
     * @return $this
     */
    public function setUserIdentifier($userIdentifier)
    {
        $this->userIdentifier = $userIdentifier;
        $this->modifiedProperties[self::USER_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module OauthUserConnector|Oauth
     *
     * @return string|null
     */
    public function getUserIdentifier()
    {
        return $this->userIdentifier;
    }

    /**
     * @module OauthUserConnector|Oauth
     *
     * @param string|null $userIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserIdentifierOrFail($userIdentifier)
    {
        if ($userIdentifier === null) {
            $this->throwNullValueException(static::USER_IDENTIFIER);
        }

        return $this->setUserIdentifier($userIdentifier);
    }

    /**
     * @module OauthUserConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUserIdentifierOrFail()
    {
        if ($this->userIdentifier === null) {
            $this->throwNullValueException(static::USER_IDENTIFIER);
        }

        return $this->userIdentifier;
    }

    /**
     * @module OauthUserConnector|Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUserIdentifier()
    {
        $this->assertPropertyIsSet(self::USER_IDENTIFIER);

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
     * @param string|null $clientName
     *
     * @return $this
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
        $this->modifiedProperties[self::CLIENT_NAME] = true;

        return $this;
    }

    /**
     * @module Oauth
     *
     * @return string|null
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * @module Oauth
     *
     * @param string|null $clientName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setClientNameOrFail($clientName)
    {
        if ($clientName === null) {
            $this->throwNullValueException(static::CLIENT_NAME);
        }

        return $this->setClientName($clientName);
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getClientNameOrFail()
    {
        if ($this->clientName === null) {
            $this->throwNullValueException(static::CLIENT_NAME);
        }

        return $this->clientName;
    }

    /**
     * @module Oauth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireClientName()
    {
        $this->assertPropertyIsSet(self::CLIENT_NAME);

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
                case 'requestApplication':
                case 'userIdentifier':
                case 'clientId':
                case 'clientName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'defaultScopes':
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
                case 'grantType':
                case 'requestApplication':
                case 'userIdentifier':
                case 'clientId':
                case 'clientName':
                    $values[$arrayKey] = $value;

                    break;
                case 'defaultScopes':
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
                case 'grantType':
                case 'requestApplication':
                case 'userIdentifier':
                case 'clientId':
                case 'clientName':
                    $values[$arrayKey] = $value;

                    break;
                case 'defaultScopes':
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
        $this->defaultScopes = $this->defaultScopes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'grantType' => $this->grantType,
            'requestApplication' => $this->requestApplication,
            'userIdentifier' => $this->userIdentifier,
            'clientId' => $this->clientId,
            'clientName' => $this->clientName,
            'defaultScopes' => $this->defaultScopes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'grant_type' => $this->grantType,
            'request_application' => $this->requestApplication,
            'user_identifier' => $this->userIdentifier,
            'client_id' => $this->clientId,
            'client_name' => $this->clientName,
            'default_scopes' => $this->defaultScopes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'grant_type' => $this->grantType instanceof AbstractTransfer ? $this->grantType->toArray(true, false) : $this->grantType,
            'request_application' => $this->requestApplication instanceof AbstractTransfer ? $this->requestApplication->toArray(true, false) : $this->requestApplication,
            'user_identifier' => $this->userIdentifier instanceof AbstractTransfer ? $this->userIdentifier->toArray(true, false) : $this->userIdentifier,
            'client_id' => $this->clientId instanceof AbstractTransfer ? $this->clientId->toArray(true, false) : $this->clientId,
            'client_name' => $this->clientName instanceof AbstractTransfer ? $this->clientName->toArray(true, false) : $this->clientName,
            'default_scopes' => $this->defaultScopes instanceof AbstractTransfer ? $this->defaultScopes->toArray(true, false) : $this->addValuesToCollection($this->defaultScopes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'grantType' => $this->grantType instanceof AbstractTransfer ? $this->grantType->toArray(true, true) : $this->grantType,
            'requestApplication' => $this->requestApplication instanceof AbstractTransfer ? $this->requestApplication->toArray(true, true) : $this->requestApplication,
            'userIdentifier' => $this->userIdentifier instanceof AbstractTransfer ? $this->userIdentifier->toArray(true, true) : $this->userIdentifier,
            'clientId' => $this->clientId instanceof AbstractTransfer ? $this->clientId->toArray(true, true) : $this->clientId,
            'clientName' => $this->clientName instanceof AbstractTransfer ? $this->clientName->toArray(true, true) : $this->clientName,
            'defaultScopes' => $this->defaultScopes instanceof AbstractTransfer ? $this->defaultScopes->toArray(true, true) : $this->addValuesToCollection($this->defaultScopes, true, true),
        ];
    }
}
