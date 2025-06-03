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
class GlueRequestCustomerTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NATURAL_IDENTIFIER = 'naturalIdentifier';

    /**
     * @var string
     */
    public const SCOPES = 'scopes';

    /**
     * @var string
     */
    public const SURROGATE_IDENTIFIER = 'surrogateIdentifier';

    /**
     * @var string|null
     */
    protected $naturalIdentifier;

    /**
     * @var string[]
     */
    protected $scopes = [];

    /**
     * @var int|null
     */
    protected $surrogateIdentifier;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'natural_identifier' => 'naturalIdentifier',
        'naturalIdentifier' => 'naturalIdentifier',
        'NaturalIdentifier' => 'naturalIdentifier',
        'scopes' => 'scopes',
        'Scopes' => 'scopes',
        'surrogate_identifier' => 'surrogateIdentifier',
        'surrogateIdentifier' => 'surrogateIdentifier',
        'SurrogateIdentifier' => 'surrogateIdentifier',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
    ];

    /**
     * @module GlueStorefrontApiApplicationAuthorizationConnector|OauthApi
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
     * @module GlueStorefrontApiApplicationAuthorizationConnector|OauthApi
     *
     * @return string|null
     */
    public function getNaturalIdentifier()
    {
        return $this->naturalIdentifier;
    }

    /**
     * @module GlueStorefrontApiApplicationAuthorizationConnector|OauthApi
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
     * @module GlueStorefrontApiApplicationAuthorizationConnector|OauthApi
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
     * @module GlueStorefrontApiApplicationAuthorizationConnector|OauthApi
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
     * @module GlueStorefrontApiApplication|OauthApi
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
     * @module GlueStorefrontApiApplication|OauthApi
     *
     * @return string[]
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @module GlueStorefrontApiApplication|OauthApi
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
     * @module GlueStorefrontApiApplication|OauthApi
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
     * @module OauthApi
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
     * @module OauthApi
     *
     * @return int|null
     */
    public function getSurrogateIdentifier()
    {
        return $this->surrogateIdentifier;
    }

    /**
     * @module OauthApi
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
     * @module OauthApi
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
     * @module OauthApi
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
                case 'naturalIdentifier':
                case 'scopes':
                case 'surrogateIdentifier':
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
                case 'naturalIdentifier':
                case 'scopes':
                case 'surrogateIdentifier':
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
                case 'naturalIdentifier':
                case 'scopes':
                case 'surrogateIdentifier':
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
            'naturalIdentifier' => $this->naturalIdentifier,
            'scopes' => $this->scopes,
            'surrogateIdentifier' => $this->surrogateIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'natural_identifier' => $this->naturalIdentifier,
            'scopes' => $this->scopes,
            'surrogate_identifier' => $this->surrogateIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'natural_identifier' => $this->naturalIdentifier instanceof AbstractTransfer ? $this->naturalIdentifier->toArray(true, false) : $this->naturalIdentifier,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, false) : $this->scopes,
            'surrogate_identifier' => $this->surrogateIdentifier instanceof AbstractTransfer ? $this->surrogateIdentifier->toArray(true, false) : $this->surrogateIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'naturalIdentifier' => $this->naturalIdentifier instanceof AbstractTransfer ? $this->naturalIdentifier->toArray(true, true) : $this->naturalIdentifier,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, true) : $this->scopes,
            'surrogateIdentifier' => $this->surrogateIdentifier instanceof AbstractTransfer ? $this->surrogateIdentifier->toArray(true, true) : $this->surrogateIdentifier,
        ];
    }
}
