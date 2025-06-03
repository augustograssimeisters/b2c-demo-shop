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
class AppConfigUpdatedTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const CONFIG = 'config';

    /**
     * @var string
     */
    public const APP_IDENTIFIER = 'appIdentifier';

    /**
     * @var string
     */
    public const MESSAGE_ATTRIBUTES = 'messageAttributes';

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var array
     */
    protected $config = [];

    /**
     * @var string|null
     */
    protected $appIdentifier;

    /**
     * @var \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    protected $messageAttributes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'status' => 'status',
        'Status' => 'status',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'config' => 'config',
        'Config' => 'config',
        'app_identifier' => 'appIdentifier',
        'appIdentifier' => 'appIdentifier',
        'AppIdentifier' => 'appIdentifier',
        'message_attributes' => 'messageAttributes',
        'messageAttributes' => 'messageAttributes',
        'MessageAttributes' => 'messageAttributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::STATUS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'status',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CONFIG => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'config',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::APP_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'app_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::MESSAGE_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\MessageAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'message_attributes',
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
     * @module KernelApp
     *
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus(?string $status = null)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module KernelApp
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @module KernelApp
     *
     * @param string $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail(string $status)
    {
        return $this->setStatus($status);
    }

    /**
     * @module KernelApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusOrFail(): string
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module KernelApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatus()
    {
        $this->assertPropertyIsSet(self::STATUS);

        return $this;
    }

    /**
     * @module KernelApp
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive(?bool $isActive = null)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module KernelApp
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @module KernelApp
     *
     * @param bool $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail(bool $isActive)
    {
        return $this->setIsActive($isActive);
    }

    /**
     * @module KernelApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail(): bool
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module KernelApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module KernelApp
     *
     * @param array|null $config
     *
     * @return $this
     */
    public function setConfig(array $config = null)
    {
        if ($config === null) {
            $config = [];
        }

        $this->config = $config;
        $this->modifiedProperties[self::CONFIG] = true;

        return $this;
    }

    /**
     * @module KernelApp
     *
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * @module KernelApp
     *
     * @param mixed $config
     *
     * @return $this
     */
    public function addConfig($config)
    {
        $this->config[] = $config;
        $this->modifiedProperties[self::CONFIG] = true;

        return $this;
    }

    /**
     * @module KernelApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfig()
    {
        $this->assertPropertyIsSet(self::CONFIG);

        return $this;
    }

    /**
     * @module KernelApp
     *
     * @param string|null $appIdentifier
     *
     * @return $this
     */
    public function setAppIdentifier(?string $appIdentifier = null)
    {
        $this->appIdentifier = $appIdentifier;
        $this->modifiedProperties[self::APP_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module KernelApp
     *
     * @return string|null
     */
    public function getAppIdentifier(): ?string
    {
        return $this->appIdentifier;
    }

    /**
     * @module KernelApp
     *
     * @param string $appIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAppIdentifierOrFail(string $appIdentifier)
    {
        return $this->setAppIdentifier($appIdentifier);
    }

    /**
     * @module KernelApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAppIdentifierOrFail(): string
    {
        if ($this->appIdentifier === null) {
            $this->throwNullValueException(static::APP_IDENTIFIER);
        }

        return $this->appIdentifier;
    }

    /**
     * @module KernelApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAppIdentifier()
    {
        $this->assertPropertyIsSet(self::APP_IDENTIFIER);

        return $this;
    }

    /**
     * @module KernelApp
     *
     * @param \Generated\Shared\Transfer\MessageAttributesTransfer|null $messageAttributes
     *
     * @return $this
     */
    public function setMessageAttributes(?MessageAttributesTransfer $messageAttributes = null)
    {
        $this->messageAttributes = $messageAttributes;
        $this->modifiedProperties[self::MESSAGE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module KernelApp
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    public function getMessageAttributes(): ?MessageAttributesTransfer
    {
        return $this->messageAttributes;
    }

    /**
     * @module KernelApp
     *
     * @param \Generated\Shared\Transfer\MessageAttributesTransfer $messageAttributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageAttributesOrFail(MessageAttributesTransfer $messageAttributes)
    {
        return $this->setMessageAttributes($messageAttributes);
    }

    /**
     * @module KernelApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer
     */
    public function getMessageAttributesOrFail(): MessageAttributesTransfer
    {
        if ($this->messageAttributes === null) {
            $this->throwNullValueException(static::MESSAGE_ATTRIBUTES);
        }

        return $this->messageAttributes;
    }

    /**
     * @module KernelApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessageAttributes()
    {
        $this->assertPropertyIsSet(self::MESSAGE_ATTRIBUTES);

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
                case 'status':
                case 'isActive':
                case 'config':
                case 'appIdentifier':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'messageAttributes':
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
                case 'status':
                case 'isActive':
                case 'config':
                case 'appIdentifier':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
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
                case 'status':
                case 'isActive':
                case 'config':
                case 'appIdentifier':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
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
            'status' => $this->status,
            'isActive' => $this->isActive,
            'config' => $this->config,
            'appIdentifier' => $this->appIdentifier,
            'messageAttributes' => $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'status' => $this->status,
            'is_active' => $this->isActive,
            'config' => $this->config,
            'app_identifier' => $this->appIdentifier,
            'message_attributes' => $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'config' => $this->config instanceof AbstractTransfer ? $this->config->toArray(true, false) : $this->config,
            'app_identifier' => $this->appIdentifier instanceof AbstractTransfer ? $this->appIdentifier->toArray(true, false) : $this->appIdentifier,
            'message_attributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, false) : $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'config' => $this->config instanceof AbstractTransfer ? $this->config->toArray(true, true) : $this->config,
            'appIdentifier' => $this->appIdentifier instanceof AbstractTransfer ? $this->appIdentifier->toArray(true, true) : $this->appIdentifier,
            'messageAttributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, true) : $this->messageAttributes,
        ];
    }
}
