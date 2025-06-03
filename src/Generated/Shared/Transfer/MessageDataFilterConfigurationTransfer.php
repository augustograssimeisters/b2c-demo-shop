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
class MessageDataFilterConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const STRIP_ID_FIELDS_CONFIGURATION = 'stripIdFieldsConfiguration';

    /**
     * @var string
     */
    public const STRIP_NULL_FIELDS_CONFIGURATION = 'stripNullFieldsConfiguration';

    /**
     * @var \Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer|null
     */
    protected $stripIdFieldsConfiguration;

    /**
     * @var \Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer|null
     */
    protected $stripNullFieldsConfiguration;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'strip_id_fields_configuration' => 'stripIdFieldsConfiguration',
        'stripIdFieldsConfiguration' => 'stripIdFieldsConfiguration',
        'StripIdFieldsConfiguration' => 'stripIdFieldsConfiguration',
        'strip_null_fields_configuration' => 'stripNullFieldsConfiguration',
        'stripNullFieldsConfiguration' => 'stripNullFieldsConfiguration',
        'StripNullFieldsConfiguration' => 'stripNullFieldsConfiguration',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::STRIP_ID_FIELDS_CONFIGURATION => [
            'type' => 'Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'strip_id_fields_configuration',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STRIP_NULL_FIELDS_CONFIGURATION => [
            'type' => 'Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'strip_null_fields_configuration',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module MessageBrokerAws
     *
     * @param \Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer|null $stripIdFieldsConfiguration
     *
     * @return $this
     */
    public function setStripIdFieldsConfiguration(MessageDataFilterItemConfigurationTransfer $stripIdFieldsConfiguration = null)
    {
        $this->stripIdFieldsConfiguration = $stripIdFieldsConfiguration;
        $this->modifiedProperties[self::STRIP_ID_FIELDS_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module MessageBrokerAws
     *
     * @return \Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer|null
     */
    public function getStripIdFieldsConfiguration()
    {
        return $this->stripIdFieldsConfiguration;
    }

    /**
     * @module MessageBrokerAws
     *
     * @param \Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer $stripIdFieldsConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStripIdFieldsConfigurationOrFail(MessageDataFilterItemConfigurationTransfer $stripIdFieldsConfiguration)
    {
        return $this->setStripIdFieldsConfiguration($stripIdFieldsConfiguration);
    }

    /**
     * @module MessageBrokerAws
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer
     */
    public function getStripIdFieldsConfigurationOrFail()
    {
        if ($this->stripIdFieldsConfiguration === null) {
            $this->throwNullValueException(static::STRIP_ID_FIELDS_CONFIGURATION);
        }

        return $this->stripIdFieldsConfiguration;
    }

    /**
     * @module MessageBrokerAws
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStripIdFieldsConfiguration()
    {
        $this->assertPropertyIsSet(self::STRIP_ID_FIELDS_CONFIGURATION);

        return $this;
    }

    /**
     * @module MessageBrokerAws
     *
     * @param \Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer|null $stripNullFieldsConfiguration
     *
     * @return $this
     */
    public function setStripNullFieldsConfiguration(MessageDataFilterItemConfigurationTransfer $stripNullFieldsConfiguration = null)
    {
        $this->stripNullFieldsConfiguration = $stripNullFieldsConfiguration;
        $this->modifiedProperties[self::STRIP_NULL_FIELDS_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module MessageBrokerAws
     *
     * @return \Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer|null
     */
    public function getStripNullFieldsConfiguration()
    {
        return $this->stripNullFieldsConfiguration;
    }

    /**
     * @module MessageBrokerAws
     *
     * @param \Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer $stripNullFieldsConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStripNullFieldsConfigurationOrFail(MessageDataFilterItemConfigurationTransfer $stripNullFieldsConfiguration)
    {
        return $this->setStripNullFieldsConfiguration($stripNullFieldsConfiguration);
    }

    /**
     * @module MessageBrokerAws
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MessageDataFilterItemConfigurationTransfer
     */
    public function getStripNullFieldsConfigurationOrFail()
    {
        if ($this->stripNullFieldsConfiguration === null) {
            $this->throwNullValueException(static::STRIP_NULL_FIELDS_CONFIGURATION);
        }

        return $this->stripNullFieldsConfiguration;
    }

    /**
     * @module MessageBrokerAws
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStripNullFieldsConfiguration()
    {
        $this->assertPropertyIsSet(self::STRIP_NULL_FIELDS_CONFIGURATION);

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
                case 'stripIdFieldsConfiguration':
                case 'stripNullFieldsConfiguration':
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
                case 'stripIdFieldsConfiguration':
                case 'stripNullFieldsConfiguration':
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
                case 'stripIdFieldsConfiguration':
                case 'stripNullFieldsConfiguration':
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
            'stripIdFieldsConfiguration' => $this->stripIdFieldsConfiguration,
            'stripNullFieldsConfiguration' => $this->stripNullFieldsConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'strip_id_fields_configuration' => $this->stripIdFieldsConfiguration,
            'strip_null_fields_configuration' => $this->stripNullFieldsConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'strip_id_fields_configuration' => $this->stripIdFieldsConfiguration instanceof AbstractTransfer ? $this->stripIdFieldsConfiguration->toArray(true, false) : $this->stripIdFieldsConfiguration,
            'strip_null_fields_configuration' => $this->stripNullFieldsConfiguration instanceof AbstractTransfer ? $this->stripNullFieldsConfiguration->toArray(true, false) : $this->stripNullFieldsConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'stripIdFieldsConfiguration' => $this->stripIdFieldsConfiguration instanceof AbstractTransfer ? $this->stripIdFieldsConfiguration->toArray(true, true) : $this->stripIdFieldsConfiguration,
            'stripNullFieldsConfiguration' => $this->stripNullFieldsConfiguration instanceof AbstractTransfer ? $this->stripNullFieldsConfiguration->toArray(true, true) : $this->stripNullFieldsConfiguration,
        ];
    }
}
