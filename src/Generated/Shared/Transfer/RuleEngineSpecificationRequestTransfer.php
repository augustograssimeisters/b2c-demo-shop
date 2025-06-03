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
class RuleEngineSpecificationRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUERY_STRING = 'queryString';

    /**
     * @var string
     */
    public const RULE_ENGINE_SPECIFICATION_PROVIDER_REQUEST = 'ruleEngineSpecificationProviderRequest';

    /**
     * @var string|null
     */
    protected $queryString;

    /**
     * @var \Generated\Shared\Transfer\RuleEngineSpecificationProviderRequestTransfer|null
     */
    protected $ruleEngineSpecificationProviderRequest;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'query_string' => 'queryString',
        'queryString' => 'queryString',
        'QueryString' => 'queryString',
        'rule_engine_specification_provider_request' => 'ruleEngineSpecificationProviderRequest',
        'ruleEngineSpecificationProviderRequest' => 'ruleEngineSpecificationProviderRequest',
        'RuleEngineSpecificationProviderRequest' => 'ruleEngineSpecificationProviderRequest',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUERY_STRING => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'query_string',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::RULE_ENGINE_SPECIFICATION_PROVIDER_REQUEST => [
            'type' => 'Generated\Shared\Transfer\RuleEngineSpecificationProviderRequestTransfer',
            'type_shim' => null,
            'name_underscore' => 'rule_engine_specification_provider_request',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module RuleEngine
     *
     * @param string|null $queryString
     *
     * @return $this
     */
    public function setQueryString(?string $queryString = null)
    {
        $this->queryString = $queryString;
        $this->modifiedProperties[self::QUERY_STRING] = true;

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @return string|null
     */
    public function getQueryString(): ?string
    {
        return $this->queryString;
    }

    /**
     * @module RuleEngine
     *
     * @param string $queryString
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQueryStringOrFail(string $queryString)
    {
        return $this->setQueryString($queryString);
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQueryStringOrFail(): string
    {
        if ($this->queryString === null) {
            $this->throwNullValueException(static::QUERY_STRING);
        }

        return $this->queryString;
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueryString()
    {
        $this->assertPropertyIsSet(self::QUERY_STRING);

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @param \Generated\Shared\Transfer\RuleEngineSpecificationProviderRequestTransfer|null $ruleEngineSpecificationProviderRequest
     *
     * @return $this
     */
    public function setRuleEngineSpecificationProviderRequest(?RuleEngineSpecificationProviderRequestTransfer $ruleEngineSpecificationProviderRequest = null)
    {
        $this->ruleEngineSpecificationProviderRequest = $ruleEngineSpecificationProviderRequest;
        $this->modifiedProperties[self::RULE_ENGINE_SPECIFICATION_PROVIDER_REQUEST] = true;

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @return \Generated\Shared\Transfer\RuleEngineSpecificationProviderRequestTransfer|null
     */
    public function getRuleEngineSpecificationProviderRequest(): ?RuleEngineSpecificationProviderRequestTransfer
    {
        return $this->ruleEngineSpecificationProviderRequest;
    }

    /**
     * @module RuleEngine
     *
     * @param \Generated\Shared\Transfer\RuleEngineSpecificationProviderRequestTransfer $ruleEngineSpecificationProviderRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRuleEngineSpecificationProviderRequestOrFail(RuleEngineSpecificationProviderRequestTransfer $ruleEngineSpecificationProviderRequest)
    {
        return $this->setRuleEngineSpecificationProviderRequest($ruleEngineSpecificationProviderRequest);
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RuleEngineSpecificationProviderRequestTransfer
     */
    public function getRuleEngineSpecificationProviderRequestOrFail(): RuleEngineSpecificationProviderRequestTransfer
    {
        if ($this->ruleEngineSpecificationProviderRequest === null) {
            $this->throwNullValueException(static::RULE_ENGINE_SPECIFICATION_PROVIDER_REQUEST);
        }

        return $this->ruleEngineSpecificationProviderRequest;
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRuleEngineSpecificationProviderRequest()
    {
        $this->assertPropertyIsSet(self::RULE_ENGINE_SPECIFICATION_PROVIDER_REQUEST);

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
                case 'queryString':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'ruleEngineSpecificationProviderRequest':
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
                case 'queryString':
                    $values[$arrayKey] = $value;

                    break;
                case 'ruleEngineSpecificationProviderRequest':
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
                case 'queryString':
                    $values[$arrayKey] = $value;

                    break;
                case 'ruleEngineSpecificationProviderRequest':
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
            'queryString' => $this->queryString,
            'ruleEngineSpecificationProviderRequest' => $this->ruleEngineSpecificationProviderRequest,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'query_string' => $this->queryString,
            'rule_engine_specification_provider_request' => $this->ruleEngineSpecificationProviderRequest,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'query_string' => $this->queryString instanceof AbstractTransfer ? $this->queryString->toArray(true, false) : $this->queryString,
            'rule_engine_specification_provider_request' => $this->ruleEngineSpecificationProviderRequest instanceof AbstractTransfer ? $this->ruleEngineSpecificationProviderRequest->toArray(true, false) : $this->ruleEngineSpecificationProviderRequest,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'queryString' => $this->queryString instanceof AbstractTransfer ? $this->queryString->toArray(true, true) : $this->queryString,
            'ruleEngineSpecificationProviderRequest' => $this->ruleEngineSpecificationProviderRequest instanceof AbstractTransfer ? $this->ruleEngineSpecificationProviderRequest->toArray(true, true) : $this->ruleEngineSpecificationProviderRequest,
        ];
    }
}
