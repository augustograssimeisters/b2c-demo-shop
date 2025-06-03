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
class AuthorizationRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IDENTITY = 'identity';

    /**
     * @var string
     */
    public const ENTITY = 'entity';

    /**
     * @deprecated Use {@link \Generated\Shared\Transfer\AuthorizationRequestTransfer::$strategies} instead.
     */
    public const STRATEGY = 'strategy';

    /**
     * @var string
     */
    public const STRATEGIES = 'strategies';

    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @var string
     */
    public const METHOD = 'method';

    /**
     * @var \Generated\Shared\Transfer\AuthorizationIdentityTransfer|null
     */
    protected $identity;

    /**
     * @var \Generated\Shared\Transfer\AuthorizationEntityTransfer|null
     */
    protected $entity;

    /**
     * @var string|null
     */
    protected $strategy;

    /**
     * @var string[]
     */
    protected $strategies = [];

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'identity' => 'identity',
        'Identity' => 'identity',
        'entity' => 'entity',
        'Entity' => 'entity',
        'strategy' => 'strategy',
        'Strategy' => 'strategy',
        'strategies' => 'strategies',
        'Strategies' => 'strategies',
        'path' => 'path',
        'Path' => 'path',
        'method' => 'method',
        'Method' => 'method',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IDENTITY => [
            'type' => 'Generated\Shared\Transfer\AuthorizationIdentityTransfer',
            'type_shim' => null,
            'name_underscore' => 'identity',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ENTITY => [
            'type' => 'Generated\Shared\Transfer\AuthorizationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'entity',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STRATEGY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'strategy',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STRATEGIES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'strategies',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METHOD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'method',
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
     * @module ApiKeyAuthorizationConnector|Authorization|Customer|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector|OauthWarehouse
     *
     * @param \Generated\Shared\Transfer\AuthorizationIdentityTransfer|null $identity
     *
     * @return $this
     */
    public function setIdentity(AuthorizationIdentityTransfer $identity = null)
    {
        $this->identity = $identity;
        $this->modifiedProperties[self::IDENTITY] = true;

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|Customer|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector|OauthWarehouse
     *
     * @return \Generated\Shared\Transfer\AuthorizationIdentityTransfer|null
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|Customer|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector|OauthWarehouse
     *
     * @param \Generated\Shared\Transfer\AuthorizationIdentityTransfer $identity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdentityOrFail(AuthorizationIdentityTransfer $identity)
    {
        return $this->setIdentity($identity);
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|Customer|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector|OauthWarehouse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AuthorizationIdentityTransfer
     */
    public function getIdentityOrFail()
    {
        if ($this->identity === null) {
            $this->throwNullValueException(static::IDENTITY);
        }

        return $this->identity;
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|Customer|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector|OauthWarehouse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdentity()
    {
        $this->assertPropertyIsSet(self::IDENTITY);

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|Customer|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector|OauthUserConnector|OauthWarehouseUser|OauthWarehouse|WarehouseOauthBackendApi
     *
     * @param \Generated\Shared\Transfer\AuthorizationEntityTransfer|null $entity
     *
     * @return $this
     */
    public function setEntity(AuthorizationEntityTransfer $entity = null)
    {
        $this->entity = $entity;
        $this->modifiedProperties[self::ENTITY] = true;

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|Customer|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector|OauthUserConnector|OauthWarehouseUser|OauthWarehouse|WarehouseOauthBackendApi
     *
     * @return \Generated\Shared\Transfer\AuthorizationEntityTransfer|null
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|Customer|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector|OauthUserConnector|OauthWarehouseUser|OauthWarehouse|WarehouseOauthBackendApi
     *
     * @param \Generated\Shared\Transfer\AuthorizationEntityTransfer $entity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEntityOrFail(AuthorizationEntityTransfer $entity)
    {
        return $this->setEntity($entity);
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|Customer|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector|OauthUserConnector|OauthWarehouseUser|OauthWarehouse|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AuthorizationEntityTransfer
     */
    public function getEntityOrFail()
    {
        if ($this->entity === null) {
            $this->throwNullValueException(static::ENTITY);
        }

        return $this->entity;
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|Customer|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector|OauthUserConnector|OauthWarehouseUser|OauthWarehouse|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEntity()
    {
        $this->assertPropertyIsSet(self::ENTITY);

        return $this;
    }

    /**
     * @module Authorization|GlueApplicationAuthorizationConnector
     *
     * @deprecated Use {@link \Generated\Shared\Transfer\AuthorizationRequestTransfer::$strategies} instead.
     *
     * @param string|null $strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;
        $this->modifiedProperties[self::STRATEGY] = true;

        return $this;
    }

    /**
     * @module Authorization|GlueApplicationAuthorizationConnector
     *
     * @deprecated Use {@link \Generated\Shared\Transfer\AuthorizationRequestTransfer::$strategies} instead.
     *
     * @return string|null
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * @module Authorization|GlueApplicationAuthorizationConnector
     *
     * @deprecated Use {@link \Generated\Shared\Transfer\AuthorizationRequestTransfer::$strategies} instead.
     *
     * @param string|null $strategy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStrategyOrFail($strategy)
    {
        if ($strategy === null) {
            $this->throwNullValueException(static::STRATEGY);
        }

        return $this->setStrategy($strategy);
    }

    /**
     * @module Authorization|GlueApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use {@link \Generated\Shared\Transfer\AuthorizationRequestTransfer::$strategies} instead.
     *
     * @return string
     */
    public function getStrategyOrFail()
    {
        if ($this->strategy === null) {
            $this->throwNullValueException(static::STRATEGY);
        }

        return $this->strategy;
    }

    /**
     * @module Authorization|GlueApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use {@link \Generated\Shared\Transfer\AuthorizationRequestTransfer::$strategies} instead.
     *
     * @return $this
     */
    public function requireStrategy()
    {
        $this->assertPropertyIsSet(self::STRATEGY);

        return $this;
    }

    /**
     * @module Authorization|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string[]|null $strategies
     *
     * @return $this
     */
    public function setStrategies(array $strategies = null)
    {
        if ($strategies === null) {
            $strategies = [];
        }

        $this->strategies = $strategies;
        $this->modifiedProperties[self::STRATEGIES] = true;

        return $this;
    }

    /**
     * @module Authorization|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @return string[]
     */
    public function getStrategies()
    {
        return $this->strategies;
    }

    /**
     * @module Authorization|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string $strategy
     *
     * @return $this
     */
    public function addStrategy($strategy)
    {
        $this->strategies[] = $strategy;
        $this->modifiedProperties[self::STRATEGIES] = true;

        return $this;
    }

    /**
     * @module Authorization|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStrategies()
    {
        $this->assertPropertyIsSet(self::STRATEGIES);

        return $this;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string|null $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        $this->modifiedProperties[self::PATH] = true;

        return $this;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string|null $path
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPathOrFail($path)
    {
        if ($path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->setPath($path);
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPathOrFail()
    {
        if ($this->path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->path;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePath()
    {
        $this->assertPropertyIsSet(self::PATH);

        return $this;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string|null $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        $this->modifiedProperties[self::METHOD] = true;

        return $this;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string|null $method
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMethodOrFail($method)
    {
        if ($method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->setMethod($method);
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMethodOrFail()
    {
        if ($this->method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->method;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethod()
    {
        $this->assertPropertyIsSet(self::METHOD);

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
                case 'strategy':
                case 'strategies':
                case 'path':
                case 'method':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'identity':
                case 'entity':
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
                case 'strategy':
                case 'strategies':
                case 'path':
                case 'method':
                    $values[$arrayKey] = $value;

                    break;
                case 'identity':
                case 'entity':
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
                case 'strategy':
                case 'strategies':
                case 'path':
                case 'method':
                    $values[$arrayKey] = $value;

                    break;
                case 'identity':
                case 'entity':
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
            'strategy' => $this->strategy,
            'strategies' => $this->strategies,
            'path' => $this->path,
            'method' => $this->method,
            'identity' => $this->identity,
            'entity' => $this->entity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'strategy' => $this->strategy,
            'strategies' => $this->strategies,
            'path' => $this->path,
            'method' => $this->method,
            'identity' => $this->identity,
            'entity' => $this->entity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'strategy' => $this->strategy instanceof AbstractTransfer ? $this->strategy->toArray(true, false) : $this->strategy,
            'strategies' => $this->strategies instanceof AbstractTransfer ? $this->strategies->toArray(true, false) : $this->strategies,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
            'identity' => $this->identity instanceof AbstractTransfer ? $this->identity->toArray(true, false) : $this->identity,
            'entity' => $this->entity instanceof AbstractTransfer ? $this->entity->toArray(true, false) : $this->entity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'strategy' => $this->strategy instanceof AbstractTransfer ? $this->strategy->toArray(true, true) : $this->strategy,
            'strategies' => $this->strategies instanceof AbstractTransfer ? $this->strategies->toArray(true, true) : $this->strategies,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
            'identity' => $this->identity instanceof AbstractTransfer ? $this->identity->toArray(true, true) : $this->identity,
            'entity' => $this->entity instanceof AbstractTransfer ? $this->entity->toArray(true, true) : $this->entity,
        ];
    }
}
