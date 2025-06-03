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
class AuthorizationResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_AUTHORIZED = 'isAuthorized';

    /**
     * @var string
     */
    public const FAILED_STRATEGY = 'failedStrategy';

    /**
     * @var bool|null
     */
    protected $isAuthorized;

    /**
     * @var string|null
     */
    protected $failedStrategy;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_authorized' => 'isAuthorized',
        'isAuthorized' => 'isAuthorized',
        'IsAuthorized' => 'isAuthorized',
        'failed_strategy' => 'failedStrategy',
        'failedStrategy' => 'failedStrategy',
        'FailedStrategy' => 'failedStrategy',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_AUTHORIZED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_authorized',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FAILED_STRATEGY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'failed_strategy',
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
     * @module ApiKeyAuthorizationConnector|Authorization|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param bool|null $isAuthorized
     *
     * @return $this
     */
    public function setIsAuthorized($isAuthorized)
    {
        $this->isAuthorized = $isAuthorized;
        $this->modifiedProperties[self::IS_AUTHORIZED] = true;

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @return bool|null
     */
    public function getIsAuthorized()
    {
        return $this->isAuthorized;
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param bool|null $isAuthorized
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAuthorizedOrFail($isAuthorized)
    {
        if ($isAuthorized === null) {
            $this->throwNullValueException(static::IS_AUTHORIZED);
        }

        return $this->setIsAuthorized($isAuthorized);
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsAuthorizedOrFail()
    {
        if ($this->isAuthorized === null) {
            $this->throwNullValueException(static::IS_AUTHORIZED);
        }

        return $this->isAuthorized;
    }

    /**
     * @module ApiKeyAuthorizationConnector|Authorization|GlueApplicationAuthorizationConnector|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsAuthorized()
    {
        $this->assertPropertyIsSet(self::IS_AUTHORIZED);

        return $this;
    }

    /**
     * @module Authorization|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string|null $failedStrategy
     *
     * @return $this
     */
    public function setFailedStrategy($failedStrategy)
    {
        $this->failedStrategy = $failedStrategy;
        $this->modifiedProperties[self::FAILED_STRATEGY] = true;

        return $this;
    }

    /**
     * @module Authorization|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @return string|null
     */
    public function getFailedStrategy()
    {
        return $this->failedStrategy;
    }

    /**
     * @module Authorization|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string|null $failedStrategy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFailedStrategyOrFail($failedStrategy)
    {
        if ($failedStrategy === null) {
            $this->throwNullValueException(static::FAILED_STRATEGY);
        }

        return $this->setFailedStrategy($failedStrategy);
    }

    /**
     * @module Authorization|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFailedStrategyOrFail()
    {
        if ($this->failedStrategy === null) {
            $this->throwNullValueException(static::FAILED_STRATEGY);
        }

        return $this->failedStrategy;
    }

    /**
     * @module Authorization|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFailedStrategy()
    {
        $this->assertPropertyIsSet(self::FAILED_STRATEGY);

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
                case 'isAuthorized':
                case 'failedStrategy':
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
                case 'isAuthorized':
                case 'failedStrategy':
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
                case 'isAuthorized':
                case 'failedStrategy':
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
            'isAuthorized' => $this->isAuthorized,
            'failedStrategy' => $this->failedStrategy,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_authorized' => $this->isAuthorized,
            'failed_strategy' => $this->failedStrategy,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_authorized' => $this->isAuthorized instanceof AbstractTransfer ? $this->isAuthorized->toArray(true, false) : $this->isAuthorized,
            'failed_strategy' => $this->failedStrategy instanceof AbstractTransfer ? $this->failedStrategy->toArray(true, false) : $this->failedStrategy,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isAuthorized' => $this->isAuthorized instanceof AbstractTransfer ? $this->isAuthorized->toArray(true, true) : $this->isAuthorized,
            'failedStrategy' => $this->failedStrategy instanceof AbstractTransfer ? $this->failedStrategy->toArray(true, true) : $this->failedStrategy,
        ];
    }
}
