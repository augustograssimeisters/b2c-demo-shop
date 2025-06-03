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
class SynchronizationMessageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var string
     */
    public const FALLBACK_QUEUE_MESSAGE = 'fallbackQueueMessage';

    /**
     * @var string
     */
    public const FALLBACK_QUEUE_NAME = 'fallbackQueueName';

    /**
     * @var string
     */
    public const SYNC_DESTINATION_TYPE = 'syncDestinationType';

    /**
     * @var string
     */
    public const OPERATION_TYPE = 'operationType';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const RESOURCE = 'resource';

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var \Generated\Shared\Transfer\QueueSendMessageTransfer|null
     */
    protected $fallbackQueueMessage;

    /**
     * @var string|null
     */
    protected $fallbackQueueName;

    /**
     * @var string|null
     */
    protected $syncDestinationType;

    /**
     * @var string|null
     */
    protected $operationType;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $resource;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'data' => 'data',
        'Data' => 'data',
        'fallback_queue_message' => 'fallbackQueueMessage',
        'fallbackQueueMessage' => 'fallbackQueueMessage',
        'FallbackQueueMessage' => 'fallbackQueueMessage',
        'fallback_queue_name' => 'fallbackQueueName',
        'fallbackQueueName' => 'fallbackQueueName',
        'FallbackQueueName' => 'fallbackQueueName',
        'sync_destination_type' => 'syncDestinationType',
        'syncDestinationType' => 'syncDestinationType',
        'SyncDestinationType' => 'syncDestinationType',
        'operation_type' => 'operationType',
        'operationType' => 'operationType',
        'OperationType' => 'operationType',
        'locale' => 'locale',
        'Locale' => 'locale',
        'resource' => 'resource',
        'Resource' => 'resource',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::FALLBACK_QUEUE_MESSAGE => [
            'type' => 'Generated\Shared\Transfer\QueueSendMessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'fallback_queue_message',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::FALLBACK_QUEUE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'fallback_queue_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SYNC_DESTINATION_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sync_destination_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::OPERATION_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'operation_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::RESOURCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'resource',
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
     * @module Synchronization
     *
     * @param array|null $data
     *
     * @return $this
     */
    public function setData(array $data = null)
    {
        if ($data === null) {
            $data = [];
        }

        $this->data = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @module Synchronization
     *
     * @param mixed $data
     *
     * @return $this
     */
    public function addData($data)
    {
        $this->data[] = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireData()
    {
        $this->assertPropertyIsSet(self::DATA);

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @param \Generated\Shared\Transfer\QueueSendMessageTransfer|null $fallbackQueueMessage
     *
     * @return $this
     */
    public function setFallbackQueueMessage(?QueueSendMessageTransfer $fallbackQueueMessage = null)
    {
        $this->fallbackQueueMessage = $fallbackQueueMessage;
        $this->modifiedProperties[self::FALLBACK_QUEUE_MESSAGE] = true;

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @return \Generated\Shared\Transfer\QueueSendMessageTransfer|null
     */
    public function getFallbackQueueMessage(): ?QueueSendMessageTransfer
    {
        return $this->fallbackQueueMessage;
    }

    /**
     * @module Synchronization
     *
     * @param \Generated\Shared\Transfer\QueueSendMessageTransfer $fallbackQueueMessage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFallbackQueueMessageOrFail(QueueSendMessageTransfer $fallbackQueueMessage)
    {
        return $this->setFallbackQueueMessage($fallbackQueueMessage);
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QueueSendMessageTransfer
     */
    public function getFallbackQueueMessageOrFail(): QueueSendMessageTransfer
    {
        if ($this->fallbackQueueMessage === null) {
            $this->throwNullValueException(static::FALLBACK_QUEUE_MESSAGE);
        }

        return $this->fallbackQueueMessage;
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFallbackQueueMessage()
    {
        $this->assertPropertyIsSet(self::FALLBACK_QUEUE_MESSAGE);

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @param string|null $fallbackQueueName
     *
     * @return $this
     */
    public function setFallbackQueueName(?string $fallbackQueueName = null)
    {
        $this->fallbackQueueName = $fallbackQueueName;
        $this->modifiedProperties[self::FALLBACK_QUEUE_NAME] = true;

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @return string|null
     */
    public function getFallbackQueueName(): ?string
    {
        return $this->fallbackQueueName;
    }

    /**
     * @module Synchronization
     *
     * @param string $fallbackQueueName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFallbackQueueNameOrFail(string $fallbackQueueName)
    {
        return $this->setFallbackQueueName($fallbackQueueName);
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFallbackQueueNameOrFail(): string
    {
        if ($this->fallbackQueueName === null) {
            $this->throwNullValueException(static::FALLBACK_QUEUE_NAME);
        }

        return $this->fallbackQueueName;
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFallbackQueueName()
    {
        $this->assertPropertyIsSet(self::FALLBACK_QUEUE_NAME);

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @param string|null $syncDestinationType
     *
     * @return $this
     */
    public function setSyncDestinationType(?string $syncDestinationType = null)
    {
        $this->syncDestinationType = $syncDestinationType;
        $this->modifiedProperties[self::SYNC_DESTINATION_TYPE] = true;

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @return string|null
     */
    public function getSyncDestinationType(): ?string
    {
        return $this->syncDestinationType;
    }

    /**
     * @module Synchronization
     *
     * @param string $syncDestinationType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSyncDestinationTypeOrFail(string $syncDestinationType)
    {
        return $this->setSyncDestinationType($syncDestinationType);
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSyncDestinationTypeOrFail(): string
    {
        if ($this->syncDestinationType === null) {
            $this->throwNullValueException(static::SYNC_DESTINATION_TYPE);
        }

        return $this->syncDestinationType;
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSyncDestinationType()
    {
        $this->assertPropertyIsSet(self::SYNC_DESTINATION_TYPE);

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @param string|null $operationType
     *
     * @return $this
     */
    public function setOperationType(?string $operationType = null)
    {
        $this->operationType = $operationType;
        $this->modifiedProperties[self::OPERATION_TYPE] = true;

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @return string|null
     */
    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    /**
     * @module Synchronization
     *
     * @param string $operationType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOperationTypeOrFail(string $operationType)
    {
        return $this->setOperationType($operationType);
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOperationTypeOrFail(): string
    {
        if ($this->operationType === null) {
            $this->throwNullValueException(static::OPERATION_TYPE);
        }

        return $this->operationType;
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOperationType()
    {
        $this->assertPropertyIsSet(self::OPERATION_TYPE);

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @param string|null $locale
     *
     * @return $this
     */
    public function setLocale(?string $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @module Synchronization
     *
     * @param string $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(string $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleOrFail(): string
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @param string|null $resource
     *
     * @return $this
     */
    public function setResource(?string $resource = null)
    {
        $this->resource = $resource;
        $this->modifiedProperties[self::RESOURCE] = true;

        return $this;
    }

    /**
     * @module Synchronization
     *
     * @return string|null
     */
    public function getResource(): ?string
    {
        return $this->resource;
    }

    /**
     * @module Synchronization
     *
     * @param string $resource
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceOrFail(string $resource)
    {
        return $this->setResource($resource);
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResourceOrFail(): string
    {
        if ($this->resource === null) {
            $this->throwNullValueException(static::RESOURCE);
        }

        return $this->resource;
    }

    /**
     * @module Synchronization
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResource()
    {
        $this->assertPropertyIsSet(self::RESOURCE);

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
                case 'data':
                case 'fallbackQueueName':
                case 'syncDestinationType':
                case 'operationType':
                case 'locale':
                case 'resource':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'fallbackQueueMessage':
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
                case 'data':
                case 'fallbackQueueName':
                case 'syncDestinationType':
                case 'operationType':
                case 'locale':
                case 'resource':
                    $values[$arrayKey] = $value;

                    break;
                case 'fallbackQueueMessage':
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
                case 'data':
                case 'fallbackQueueName':
                case 'syncDestinationType':
                case 'operationType':
                case 'locale':
                case 'resource':
                    $values[$arrayKey] = $value;

                    break;
                case 'fallbackQueueMessage':
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
            'data' => $this->data,
            'fallbackQueueName' => $this->fallbackQueueName,
            'syncDestinationType' => $this->syncDestinationType,
            'operationType' => $this->operationType,
            'locale' => $this->locale,
            'resource' => $this->resource,
            'fallbackQueueMessage' => $this->fallbackQueueMessage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'data' => $this->data,
            'fallback_queue_name' => $this->fallbackQueueName,
            'sync_destination_type' => $this->syncDestinationType,
            'operation_type' => $this->operationType,
            'locale' => $this->locale,
            'resource' => $this->resource,
            'fallback_queue_message' => $this->fallbackQueueMessage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
            'fallback_queue_name' => $this->fallbackQueueName instanceof AbstractTransfer ? $this->fallbackQueueName->toArray(true, false) : $this->fallbackQueueName,
            'sync_destination_type' => $this->syncDestinationType instanceof AbstractTransfer ? $this->syncDestinationType->toArray(true, false) : $this->syncDestinationType,
            'operation_type' => $this->operationType instanceof AbstractTransfer ? $this->operationType->toArray(true, false) : $this->operationType,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'resource' => $this->resource instanceof AbstractTransfer ? $this->resource->toArray(true, false) : $this->resource,
            'fallback_queue_message' => $this->fallbackQueueMessage instanceof AbstractTransfer ? $this->fallbackQueueMessage->toArray(true, false) : $this->fallbackQueueMessage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
            'fallbackQueueName' => $this->fallbackQueueName instanceof AbstractTransfer ? $this->fallbackQueueName->toArray(true, true) : $this->fallbackQueueName,
            'syncDestinationType' => $this->syncDestinationType instanceof AbstractTransfer ? $this->syncDestinationType->toArray(true, true) : $this->syncDestinationType,
            'operationType' => $this->operationType instanceof AbstractTransfer ? $this->operationType->toArray(true, true) : $this->operationType,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'resource' => $this->resource instanceof AbstractTransfer ? $this->resource->toArray(true, true) : $this->resource,
            'fallbackQueueMessage' => $this->fallbackQueueMessage instanceof AbstractTransfer ? $this->fallbackQueueMessage->toArray(true, true) : $this->fallbackQueueMessage,
        ];
    }
}
