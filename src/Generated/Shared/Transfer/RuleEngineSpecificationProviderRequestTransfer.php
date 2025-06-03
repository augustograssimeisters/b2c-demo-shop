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
class RuleEngineSpecificationProviderRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DOMAIN_NAME = 'domainName';

    /**
     * @var string
     */
    public const SPECIFICATION_RULE_TYPE = 'specificationRuleType';

    /**
     * @var string|null
     */
    protected $domainName;

    /**
     * @var string|null
     */
    protected $specificationRuleType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'domain_name' => 'domainName',
        'domainName' => 'domainName',
        'DomainName' => 'domainName',
        'specification_rule_type' => 'specificationRuleType',
        'specificationRuleType' => 'specificationRuleType',
        'SpecificationRuleType' => 'specificationRuleType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DOMAIN_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'domain_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SPECIFICATION_RULE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'specification_rule_type',
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
     * @module RuleEngine
     *
     * @param string|null $domainName
     *
     * @return $this
     */
    public function setDomainName(?string $domainName = null)
    {
        $this->domainName = $domainName;
        $this->modifiedProperties[self::DOMAIN_NAME] = true;

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @return string|null
     */
    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    /**
     * @module RuleEngine
     *
     * @param string $domainName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDomainNameOrFail(string $domainName)
    {
        return $this->setDomainName($domainName);
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDomainNameOrFail(): string
    {
        if ($this->domainName === null) {
            $this->throwNullValueException(static::DOMAIN_NAME);
        }

        return $this->domainName;
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDomainName()
    {
        $this->assertPropertyIsSet(self::DOMAIN_NAME);

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @param string|null $specificationRuleType
     *
     * @return $this
     */
    public function setSpecificationRuleType(?string $specificationRuleType = null)
    {
        $this->specificationRuleType = $specificationRuleType;
        $this->modifiedProperties[self::SPECIFICATION_RULE_TYPE] = true;

        return $this;
    }

    /**
     * @module RuleEngine
     *
     * @return string|null
     */
    public function getSpecificationRuleType(): ?string
    {
        return $this->specificationRuleType;
    }

    /**
     * @module RuleEngine
     *
     * @param string $specificationRuleType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpecificationRuleTypeOrFail(string $specificationRuleType)
    {
        return $this->setSpecificationRuleType($specificationRuleType);
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSpecificationRuleTypeOrFail(): string
    {
        if ($this->specificationRuleType === null) {
            $this->throwNullValueException(static::SPECIFICATION_RULE_TYPE);
        }

        return $this->specificationRuleType;
    }

    /**
     * @module RuleEngine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpecificationRuleType()
    {
        $this->assertPropertyIsSet(self::SPECIFICATION_RULE_TYPE);

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
                case 'domainName':
                case 'specificationRuleType':
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
                case 'domainName':
                case 'specificationRuleType':
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
                case 'domainName':
                case 'specificationRuleType':
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
            'domainName' => $this->domainName,
            'specificationRuleType' => $this->specificationRuleType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'domain_name' => $this->domainName,
            'specification_rule_type' => $this->specificationRuleType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'domain_name' => $this->domainName instanceof AbstractTransfer ? $this->domainName->toArray(true, false) : $this->domainName,
            'specification_rule_type' => $this->specificationRuleType instanceof AbstractTransfer ? $this->specificationRuleType->toArray(true, false) : $this->specificationRuleType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'domainName' => $this->domainName instanceof AbstractTransfer ? $this->domainName->toArray(true, true) : $this->domainName,
            'specificationRuleType' => $this->specificationRuleType instanceof AbstractTransfer ? $this->specificationRuleType->toArray(true, true) : $this->specificationRuleType,
        ];
    }
}
