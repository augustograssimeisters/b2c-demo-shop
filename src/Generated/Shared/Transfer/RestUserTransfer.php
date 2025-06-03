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
class RestUserTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_AGENT = 'idAgent';

    /**
     * @var string
     */
    public const NATURAL_IDENTIFIER = 'naturalIdentifier';

    /**
     * @var string
     */
    public const SURROGATE_IDENTIFIER = 'surrogateIdentifier';

    /**
     * @var string
     */
    public const SCOPES = 'scopes';

    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const ID_COMPANY = 'idCompany';

    /**
     * @var int|null
     */
    protected $idAgent;

    /**
     * @var string|null
     */
    protected $naturalIdentifier;

    /**
     * @var int|null
     */
    protected $surrogateIdentifier;

    /**
     * @var string[]
     */
    protected $scopes = [];

    /**
     * @var int|null
     */
    protected $idCompanyUser;

    /**
     * @var int|null
     */
    protected $idCompany;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_agent' => 'idAgent',
        'idAgent' => 'idAgent',
        'IdAgent' => 'idAgent',
        'natural_identifier' => 'naturalIdentifier',
        'naturalIdentifier' => 'naturalIdentifier',
        'NaturalIdentifier' => 'naturalIdentifier',
        'surrogate_identifier' => 'surrogateIdentifier',
        'surrogateIdentifier' => 'surrogateIdentifier',
        'SurrogateIdentifier' => 'surrogateIdentifier',
        'scopes' => 'scopes',
        'Scopes' => 'scopes',
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'id_company' => 'idCompany',
        'idCompany' => 'idCompany',
        'IdCompany' => 'idCompany',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_AGENT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_agent',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NATURAL_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'natural_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SURROGATE_IDENTIFIER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'surrogate_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SCOPES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'scopes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_COMPANY_USER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_COMPANY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company',
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
     * @module AgentAuthRestApi
     *
     * @param int|null $idAgent
     *
     * @return $this
     */
    public function setIdAgent($idAgent)
    {
        $this->idAgent = $idAgent;
        $this->modifiedProperties[self::ID_AGENT] = true;

        return $this;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @return int|null
     */
    public function getIdAgent()
    {
        return $this->idAgent;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @param int|null $idAgent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAgentOrFail($idAgent)
    {
        if ($idAgent === null) {
            $this->throwNullValueException(static::ID_AGENT);
        }

        return $this->setIdAgent($idAgent);
    }

    /**
     * @module AgentAuthRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdAgentOrFail()
    {
        if ($this->idAgent === null) {
            $this->throwNullValueException(static::ID_AGENT);
        }

        return $this->idAgent;
    }

    /**
     * @module AgentAuthRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAgent()
    {
        $this->assertPropertyIsSet(self::ID_AGENT);

        return $this;
    }

    /**
     * @module AuthRestApi|AvailabilityNotificationsRestApi|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|GlueApplicationAuthorizationConnector|GlueApplication|GlueStorefrontApiApplicationAuthorizationConnector|OrdersRestApi|ProductReviewsRestApi|SalesReturnsRestApi|UpSellingProductsRestApi|WishlistsRestApi
     *
     * @param string|null $naturalIdentifier
     *
     * @return $this
     */
    public function setNaturalIdentifier($naturalIdentifier)
    {
        $this->naturalIdentifier = $naturalIdentifier;
        $this->modifiedProperties[self::NATURAL_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module AuthRestApi|AvailabilityNotificationsRestApi|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|GlueApplicationAuthorizationConnector|GlueApplication|GlueStorefrontApiApplicationAuthorizationConnector|OrdersRestApi|ProductReviewsRestApi|SalesReturnsRestApi|UpSellingProductsRestApi|WishlistsRestApi
     *
     * @return string|null
     */
    public function getNaturalIdentifier()
    {
        return $this->naturalIdentifier;
    }

    /**
     * @module AuthRestApi|AvailabilityNotificationsRestApi|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|GlueApplicationAuthorizationConnector|GlueApplication|GlueStorefrontApiApplicationAuthorizationConnector|OrdersRestApi|ProductReviewsRestApi|SalesReturnsRestApi|UpSellingProductsRestApi|WishlistsRestApi
     *
     * @param string|null $naturalIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNaturalIdentifierOrFail($naturalIdentifier)
    {
        if ($naturalIdentifier === null) {
            $this->throwNullValueException(static::NATURAL_IDENTIFIER);
        }

        return $this->setNaturalIdentifier($naturalIdentifier);
    }

    /**
     * @module AuthRestApi|AvailabilityNotificationsRestApi|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|GlueApplicationAuthorizationConnector|GlueApplication|GlueStorefrontApiApplicationAuthorizationConnector|OrdersRestApi|ProductReviewsRestApi|SalesReturnsRestApi|UpSellingProductsRestApi|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNaturalIdentifierOrFail()
    {
        if ($this->naturalIdentifier === null) {
            $this->throwNullValueException(static::NATURAL_IDENTIFIER);
        }

        return $this->naturalIdentifier;
    }

    /**
     * @module AuthRestApi|AvailabilityNotificationsRestApi|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|GlueApplicationAuthorizationConnector|GlueApplication|GlueStorefrontApiApplicationAuthorizationConnector|OrdersRestApi|ProductReviewsRestApi|SalesReturnsRestApi|UpSellingProductsRestApi|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNaturalIdentifier()
    {
        $this->assertPropertyIsSet(self::NATURAL_IDENTIFIER);

        return $this;
    }

    /**
     * @module AuthRestApi|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|GlueApplication|UpSellingProductsRestApi|WishlistsRestApi
     *
     * @param int|null $surrogateIdentifier
     *
     * @return $this
     */
    public function setSurrogateIdentifier($surrogateIdentifier)
    {
        $this->surrogateIdentifier = $surrogateIdentifier;
        $this->modifiedProperties[self::SURROGATE_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module AuthRestApi|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|GlueApplication|UpSellingProductsRestApi|WishlistsRestApi
     *
     * @return int|null
     */
    public function getSurrogateIdentifier()
    {
        return $this->surrogateIdentifier;
    }

    /**
     * @module AuthRestApi|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|GlueApplication|UpSellingProductsRestApi|WishlistsRestApi
     *
     * @param int|null $surrogateIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSurrogateIdentifierOrFail($surrogateIdentifier)
    {
        if ($surrogateIdentifier === null) {
            $this->throwNullValueException(static::SURROGATE_IDENTIFIER);
        }

        return $this->setSurrogateIdentifier($surrogateIdentifier);
    }

    /**
     * @module AuthRestApi|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|GlueApplication|UpSellingProductsRestApi|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSurrogateIdentifierOrFail()
    {
        if ($this->surrogateIdentifier === null) {
            $this->throwNullValueException(static::SURROGATE_IDENTIFIER);
        }

        return $this->surrogateIdentifier;
    }

    /**
     * @module AuthRestApi|CartCodesRestApi|CartsRestApi|CheckoutRestApi|ConfigurableBundleCartsRestApi|CustomersRestApi|GlueApplication|UpSellingProductsRestApi|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSurrogateIdentifier()
    {
        $this->assertPropertyIsSet(self::SURROGATE_IDENTIFIER);

        return $this;
    }

    /**
     * @module AuthRestApi|GlueApplication
     *
     * @param string[]|null $scopes
     *
     * @return $this
     */
    public function setScopes(array $scopes = null)
    {
        if ($scopes === null) {
            $scopes = [];
        }

        $this->scopes = $scopes;
        $this->modifiedProperties[self::SCOPES] = true;

        return $this;
    }

    /**
     * @module AuthRestApi|GlueApplication
     *
     * @return string[]
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @module AuthRestApi|GlueApplication
     *
     * @param string $scope
     *
     * @return $this
     */
    public function addScope($scope)
    {
        $this->scopes[] = $scope;
        $this->modifiedProperties[self::SCOPES] = true;

        return $this;
    }

    /**
     * @module AuthRestApi|GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireScopes()
    {
        $this->assertPropertyIsSet(self::SCOPES);

        return $this;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi
     *
     * @param int|null $idCompanyUser
     *
     * @return $this
     */
    public function setIdCompanyUser($idCompanyUser)
    {
        $this->idCompanyUser = $idCompanyUser;
        $this->modifiedProperties[self::ID_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi
     *
     * @return int|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi
     *
     * @param int|null $idCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUserOrFail($idCompanyUser)
    {
        if ($idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->setIdCompanyUser($idCompanyUser);
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyUserOrFail()
    {
        if ($this->idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->idCompanyUser;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUser()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_USER);

        return $this;
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @param int|null $idCompany
     *
     * @return $this
     */
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;
        $this->modifiedProperties[self::ID_COMPANY] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @return int|null
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @param int|null $idCompany
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyOrFail($idCompany)
    {
        if ($idCompany === null) {
            $this->throwNullValueException(static::ID_COMPANY);
        }

        return $this->setIdCompany($idCompany);
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyOrFail()
    {
        if ($this->idCompany === null) {
            $this->throwNullValueException(static::ID_COMPANY);
        }

        return $this->idCompany;
    }

    /**
     * @module ConfigurableBundleCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompany()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY);

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
                case 'idAgent':
                case 'naturalIdentifier':
                case 'surrogateIdentifier':
                case 'scopes':
                case 'idCompanyUser':
                case 'idCompany':
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
                case 'idAgent':
                case 'naturalIdentifier':
                case 'surrogateIdentifier':
                case 'scopes':
                case 'idCompanyUser':
                case 'idCompany':
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
                case 'idAgent':
                case 'naturalIdentifier':
                case 'surrogateIdentifier':
                case 'scopes':
                case 'idCompanyUser':
                case 'idCompany':
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
            'idAgent' => $this->idAgent,
            'naturalIdentifier' => $this->naturalIdentifier,
            'surrogateIdentifier' => $this->surrogateIdentifier,
            'scopes' => $this->scopes,
            'idCompanyUser' => $this->idCompanyUser,
            'idCompany' => $this->idCompany,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_agent' => $this->idAgent,
            'natural_identifier' => $this->naturalIdentifier,
            'surrogate_identifier' => $this->surrogateIdentifier,
            'scopes' => $this->scopes,
            'id_company_user' => $this->idCompanyUser,
            'id_company' => $this->idCompany,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_agent' => $this->idAgent instanceof AbstractTransfer ? $this->idAgent->toArray(true, false) : $this->idAgent,
            'natural_identifier' => $this->naturalIdentifier instanceof AbstractTransfer ? $this->naturalIdentifier->toArray(true, false) : $this->naturalIdentifier,
            'surrogate_identifier' => $this->surrogateIdentifier instanceof AbstractTransfer ? $this->surrogateIdentifier->toArray(true, false) : $this->surrogateIdentifier,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, false) : $this->scopes,
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'id_company' => $this->idCompany instanceof AbstractTransfer ? $this->idCompany->toArray(true, false) : $this->idCompany,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAgent' => $this->idAgent instanceof AbstractTransfer ? $this->idAgent->toArray(true, true) : $this->idAgent,
            'naturalIdentifier' => $this->naturalIdentifier instanceof AbstractTransfer ? $this->naturalIdentifier->toArray(true, true) : $this->naturalIdentifier,
            'surrogateIdentifier' => $this->surrogateIdentifier instanceof AbstractTransfer ? $this->surrogateIdentifier->toArray(true, true) : $this->surrogateIdentifier,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, true) : $this->scopes,
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'idCompany' => $this->idCompany instanceof AbstractTransfer ? $this->idCompany->toArray(true, true) : $this->idCompany,
        ];
    }
}
