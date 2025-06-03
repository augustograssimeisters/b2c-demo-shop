<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PushNotificationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PROVIDER = 'provider';

    /**
     * @var string
     */
    public const GROUP = 'group';

    /**
     * @var string
     */
    public const PAYLOAD = 'payload';

    /**
     * @var string
     */
    public const ID_PUSH_NOTIFICATION = 'idPushNotification';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SUBSCRIPTIONS = 'subscriptions';

    /**
     * @var string
     */
    public const IS_NOTIFICATION_SENT = 'isNotificationSent';

    /**
     * @var \Generated\Shared\Transfer\PushNotificationProviderTransfer|null
     */
    protected $provider;

    /**
     * @var \Generated\Shared\Transfer\PushNotificationGroupTransfer|null
     */
    protected $group;

    /**
     * @var array
     */
    protected $payload = [];

    /**
     * @var int|null
     */
    protected $idPushNotification;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\PushNotificationSubscriptionTransfer>
     */
    protected $subscriptions;

    /**
     * @var bool|null
     */
    protected $isNotificationSent;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'provider' => 'provider',
        'Provider' => 'provider',
        'group' => 'group',
        'Group' => 'group',
        'payload' => 'payload',
        'Payload' => 'payload',
        'id_push_notification' => 'idPushNotification',
        'idPushNotification' => 'idPushNotification',
        'IdPushNotification' => 'idPushNotification',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'subscriptions' => 'subscriptions',
        'Subscriptions' => 'subscriptions',
        'is_notification_sent' => 'isNotificationSent',
        'isNotificationSent' => 'isNotificationSent',
        'IsNotificationSent' => 'isNotificationSent',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PROVIDER => [
            'type' => 'Generated\Shared\Transfer\PushNotificationProviderTransfer',
            'type_shim' => null,
            'name_underscore' => 'provider',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::GROUP => [
            'type' => 'Generated\Shared\Transfer\PushNotificationGroupTransfer',
            'type_shim' => null,
            'name_underscore' => 'group',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PAYLOAD => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'payload',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ID_PUSH_NOTIFICATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_push_notification',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SUBSCRIPTIONS => [
            'type' => 'Generated\Shared\Transfer\PushNotificationSubscriptionTransfer',
            'type_shim' => null,
            'name_underscore' => 'subscriptions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_NOTIFICATION_SENT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_notification_sent',
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
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @param \Generated\Shared\Transfer\PushNotificationProviderTransfer|null $provider
     *
     * @return $this
     */
    public function setProvider(?PushNotificationProviderTransfer $provider = null)
    {
        $this->provider = $provider;
        $this->modifiedProperties[self::PROVIDER] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @return \Generated\Shared\Transfer\PushNotificationProviderTransfer|null
     */
    public function getProvider(): ?PushNotificationProviderTransfer
    {
        return $this->provider;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @param \Generated\Shared\Transfer\PushNotificationProviderTransfer $provider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProviderOrFail(PushNotificationProviderTransfer $provider)
    {
        return $this->setProvider($provider);
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PushNotificationProviderTransfer
     */
    public function getProviderOrFail(): PushNotificationProviderTransfer
    {
        if ($this->provider === null) {
            $this->throwNullValueException(static::PROVIDER);
        }

        return $this->provider;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProvider()
    {
        $this->assertPropertyIsSet(self::PROVIDER);

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @param \Generated\Shared\Transfer\PushNotificationGroupTransfer|null $group
     *
     * @return $this
     */
    public function setGroup(?PushNotificationGroupTransfer $group = null)
    {
        $this->group = $group;
        $this->modifiedProperties[self::GROUP] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @return \Generated\Shared\Transfer\PushNotificationGroupTransfer|null
     */
    public function getGroup(): ?PushNotificationGroupTransfer
    {
        return $this->group;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @param \Generated\Shared\Transfer\PushNotificationGroupTransfer $group
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupOrFail(PushNotificationGroupTransfer $group)
    {
        return $this->setGroup($group);
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PushNotificationGroupTransfer
     */
    public function getGroupOrFail(): PushNotificationGroupTransfer
    {
        if ($this->group === null) {
            $this->throwNullValueException(static::GROUP);
        }

        return $this->group;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroup()
    {
        $this->assertPropertyIsSet(self::GROUP);

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @param array|null $payload
     *
     * @return $this
     */
    public function setPayload(array $payload = null)
    {
        if ($payload === null) {
            $payload = [];
        }

        $this->payload = $payload;
        $this->modifiedProperties[self::PAYLOAD] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @param string|int $payloadItemKey
     * @param mixed $payloadItemValue
     *
     * @return $this
     */
    public function addPayloadItem($payloadItemKey, $payloadItemValue)
    {
        $this->payload[$payloadItemKey] = $payloadItemValue;
        $this->modifiedProperties[self::PAYLOAD] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayload()
    {
        $this->assertPropertyIsSet(self::PAYLOAD);

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @param string|int $key
     *
     * @return mixed
     */
    public function getPayloadItem($key)
    {
        return $this->payload[$key];
    }


    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param int|null $idPushNotification
     *
     * @return $this
     */
    public function setIdPushNotification(?int $idPushNotification = null)
    {
        $this->idPushNotification = $idPushNotification;
        $this->modifiedProperties[self::ID_PUSH_NOTIFICATION] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @return int|null
     */
    public function getIdPushNotification(): ?int
    {
        return $this->idPushNotification;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param int $idPushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPushNotificationOrFail(int $idPushNotification)
    {
        return $this->setIdPushNotification($idPushNotification);
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPushNotificationOrFail(): int
    {
        if ($this->idPushNotification === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION);
        }

        return $this->idPushNotification;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPushNotification()
    {
        $this->assertPropertyIsSet(self::ID_PUSH_NOTIFICATION);

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid(?string $uuid = null)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @return string|null
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param string $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail(string $uuid)
    {
        return $this->setUuid($uuid);
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail(): string
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\PushNotificationSubscriptionTransfer> $subscriptions
     *
     * @return $this
     */
    public function setSubscriptions(ArrayObject $subscriptions)
    {
        $this->subscriptions = new ArrayObject();

        foreach ($subscriptions as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SUBSCRIPTIONS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addSubscription(...$args);
        }

        $this->modifiedProperties[self::SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\PushNotificationSubscriptionTransfer>
     */
    public function getSubscriptions(): ArrayObject
    {
        return $this->subscriptions;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param \Generated\Shared\Transfer\PushNotificationSubscriptionTransfer $subscription
     *
     * @return $this
     */
    public function addSubscription(PushNotificationSubscriptionTransfer $subscription)
    {
        $this->subscriptions[] = $subscription;
        $this->modifiedProperties[self::SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSubscriptions()
    {
        $this->assertCollectionPropertyIsSet(self::SUBSCRIPTIONS);

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @param bool|null $isNotificationSent
     *
     * @return $this
     */
    public function setIsNotificationSent(?bool $isNotificationSent = null)
    {
        $this->isNotificationSent = $isNotificationSent;
        $this->modifiedProperties[self::IS_NOTIFICATION_SENT] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return bool|null
     */
    public function getIsNotificationSent(): ?bool
    {
        return $this->isNotificationSent;
    }

    /**
     * @module PushNotification
     *
     * @param bool $isNotificationSent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsNotificationSentOrFail(bool $isNotificationSent)
    {
        return $this->setIsNotificationSent($isNotificationSent);
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsNotificationSentOrFail(): bool
    {
        if ($this->isNotificationSent === null) {
            $this->throwNullValueException(static::IS_NOTIFICATION_SENT);
        }

        return $this->isNotificationSent;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsNotificationSent()
    {
        $this->assertPropertyIsSet(self::IS_NOTIFICATION_SENT);

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
                case 'payload':
                case 'idPushNotification':
                case 'uuid':
                case 'isNotificationSent':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'provider':
                case 'group':
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
                case 'subscriptions':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'payload':
                case 'idPushNotification':
                case 'uuid':
                case 'isNotificationSent':
                    $values[$arrayKey] = $value;

                    break;
                case 'provider':
                case 'group':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'subscriptions':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'payload':
                case 'idPushNotification':
                case 'uuid':
                case 'isNotificationSent':
                    $values[$arrayKey] = $value;

                    break;
                case 'provider':
                case 'group':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'subscriptions':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->subscriptions = $this->subscriptions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'payload' => $this->payload,
            'idPushNotification' => $this->idPushNotification,
            'uuid' => $this->uuid,
            'isNotificationSent' => $this->isNotificationSent,
            'provider' => $this->provider,
            'group' => $this->group,
            'subscriptions' => $this->subscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'payload' => $this->payload,
            'id_push_notification' => $this->idPushNotification,
            'uuid' => $this->uuid,
            'is_notification_sent' => $this->isNotificationSent,
            'provider' => $this->provider,
            'group' => $this->group,
            'subscriptions' => $this->subscriptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, false) : $this->payload,
            'id_push_notification' => $this->idPushNotification instanceof AbstractTransfer ? $this->idPushNotification->toArray(true, false) : $this->idPushNotification,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'is_notification_sent' => $this->isNotificationSent instanceof AbstractTransfer ? $this->isNotificationSent->toArray(true, false) : $this->isNotificationSent,
            'provider' => $this->provider instanceof AbstractTransfer ? $this->provider->toArray(true, false) : $this->provider,
            'group' => $this->group instanceof AbstractTransfer ? $this->group->toArray(true, false) : $this->group,
            'subscriptions' => $this->subscriptions instanceof AbstractTransfer ? $this->subscriptions->toArray(true, false) : $this->addValuesToCollection($this->subscriptions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, true) : $this->payload,
            'idPushNotification' => $this->idPushNotification instanceof AbstractTransfer ? $this->idPushNotification->toArray(true, true) : $this->idPushNotification,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'isNotificationSent' => $this->isNotificationSent instanceof AbstractTransfer ? $this->isNotificationSent->toArray(true, true) : $this->isNotificationSent,
            'provider' => $this->provider instanceof AbstractTransfer ? $this->provider->toArray(true, true) : $this->provider,
            'group' => $this->group instanceof AbstractTransfer ? $this->group->toArray(true, true) : $this->group,
            'subscriptions' => $this->subscriptions instanceof AbstractTransfer ? $this->subscriptions->toArray(true, true) : $this->addValuesToCollection($this->subscriptions, true, true),
        ];
    }
}
