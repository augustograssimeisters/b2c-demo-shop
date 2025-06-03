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
class ApiKeyConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const API_KEYS = 'apiKeys';

    /**
     * @var string
     */
    public const FILTER_VALID_TO = 'filterValidTo';

    /**
     * @var string
     */
    public const API_KEY_IDS = 'apiKeyIds';

    /**
     * @var string[]
     */
    protected $apiKeys = [];

    /**
     * @var \Generated\Shared\Transfer\CriteriaRangeFilterTransfer|null
     */
    protected $filterValidTo;

    /**
     * @var int[]
     */
    protected $apiKeyIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'api_keys' => 'apiKeys',
        'apiKeys' => 'apiKeys',
        'ApiKeys' => 'apiKeys',
        'filter_valid_to' => 'filterValidTo',
        'filterValidTo' => 'filterValidTo',
        'FilterValidTo' => 'filterValidTo',
        'api_key_ids' => 'apiKeyIds',
        'apiKeyIds' => 'apiKeyIds',
        'ApiKeyIds' => 'apiKeyIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::API_KEYS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'api_keys',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::FILTER_VALID_TO => [
            'type' => 'Generated\Shared\Transfer\CriteriaRangeFilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter_valid_to',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::API_KEY_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'api_key_ids',
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
     * @module ApiKeyAuthorizationConnector|ApiKey
     *
     * @param string[]|null $apiKeys
     *
     * @return $this
     */
    public function setApiKeys(array $apiKeys = null)
    {
        if ($apiKeys === null) {
            $apiKeys = [];
        }

        $this->apiKeys = [];

        foreach ($apiKeys as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::API_KEYS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addApiKey(...$args);
        }

        $this->modifiedProperties[self::API_KEYS] = true;

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKey
     *
     * @return string[]
     */
    public function getApiKeys(): array
    {
        return $this->apiKeys;
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKey
     *
     * @param string $apiKey
     *
     * @return $this
     */
    public function addApiKey(string $apiKey)
    {
        $this->apiKeys[] = $apiKey;
        $this->modifiedProperties[self::API_KEYS] = true;

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApiKeys()
    {
        $this->assertPropertyIsSet(self::API_KEYS);

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKey
     *
     * @param \Generated\Shared\Transfer\CriteriaRangeFilterTransfer|null $filterValidTo
     *
     * @return $this
     */
    public function setFilterValidTo(?CriteriaRangeFilterTransfer $filterValidTo = null)
    {
        $this->filterValidTo = $filterValidTo;
        $this->modifiedProperties[self::FILTER_VALID_TO] = true;

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKey
     *
     * @return \Generated\Shared\Transfer\CriteriaRangeFilterTransfer|null
     */
    public function getFilterValidTo(): ?CriteriaRangeFilterTransfer
    {
        return $this->filterValidTo;
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKey
     *
     * @param \Generated\Shared\Transfer\CriteriaRangeFilterTransfer $filterValidTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterValidToOrFail(CriteriaRangeFilterTransfer $filterValidTo)
    {
        return $this->setFilterValidTo($filterValidTo);
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CriteriaRangeFilterTransfer
     */
    public function getFilterValidToOrFail(): CriteriaRangeFilterTransfer
    {
        if ($this->filterValidTo === null) {
            $this->throwNullValueException(static::FILTER_VALID_TO);
        }

        return $this->filterValidTo;
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilterValidTo()
    {
        $this->assertPropertyIsSet(self::FILTER_VALID_TO);

        return $this;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @param int[]|null $apiKeyIds
     *
     * @return $this
     */
    public function setApiKeyIds(array $apiKeyIds = null)
    {
        if ($apiKeyIds === null) {
            $apiKeyIds = [];
        }

        $this->apiKeyIds = [];

        foreach ($apiKeyIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::API_KEY_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdApiKey(...$args);
        }

        $this->modifiedProperties[self::API_KEY_IDS] = true;

        return $this;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @return int[]
     */
    public function getApiKeyIds(): array
    {
        return $this->apiKeyIds;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @param int $idApiKey
     *
     * @return $this
     */
    public function addIdApiKey(int $idApiKey)
    {
        $this->apiKeyIds[] = $idApiKey;
        $this->modifiedProperties[self::API_KEY_IDS] = true;

        return $this;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApiKeyIds()
    {
        $this->assertPropertyIsSet(self::API_KEY_IDS);

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
                case 'apiKeys':
                case 'apiKeyIds':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filterValidTo':
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
                case 'apiKeys':
                case 'apiKeyIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'filterValidTo':
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
                case 'apiKeys':
                case 'apiKeyIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'filterValidTo':
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
            'apiKeys' => $this->apiKeys,
            'apiKeyIds' => $this->apiKeyIds,
            'filterValidTo' => $this->filterValidTo,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'api_keys' => $this->apiKeys,
            'api_key_ids' => $this->apiKeyIds,
            'filter_valid_to' => $this->filterValidTo,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'api_keys' => $this->apiKeys instanceof AbstractTransfer ? $this->apiKeys->toArray(true, false) : $this->apiKeys,
            'api_key_ids' => $this->apiKeyIds instanceof AbstractTransfer ? $this->apiKeyIds->toArray(true, false) : $this->apiKeyIds,
            'filter_valid_to' => $this->filterValidTo instanceof AbstractTransfer ? $this->filterValidTo->toArray(true, false) : $this->filterValidTo,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'apiKeys' => $this->apiKeys instanceof AbstractTransfer ? $this->apiKeys->toArray(true, true) : $this->apiKeys,
            'apiKeyIds' => $this->apiKeyIds instanceof AbstractTransfer ? $this->apiKeyIds->toArray(true, true) : $this->apiKeyIds,
            'filterValidTo' => $this->filterValidTo instanceof AbstractTransfer ? $this->filterValidTo->toArray(true, true) : $this->filterValidTo,
        ];
    }
}
