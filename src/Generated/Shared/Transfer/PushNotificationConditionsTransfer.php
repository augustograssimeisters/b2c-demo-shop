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
class PushNotificationConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PUSH_NOTIFICATION_IDS = 'pushNotificationIds';

    /**
     * @var string
     */
    public const UUIDS = 'uuids';

    /**
     * @var string
     */
    public const NOTIFICATION_SENT = 'notificationSent';

    /**
     * @var string
     */
    public const PUSH_NOTIFICATION_PROVIDER_IDS = 'pushNotificationProviderIds';

    /**
     * @var int[]
     */
    protected $pushNotificationIds = [];

    /**
     * @var string[]
     */
    protected $uuids = [];

    /**
     * @var bool|null
     */
    protected $notificationSent;

    /**
     * @var int[]
     */
    protected $pushNotificationProviderIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'push_notification_ids' => 'pushNotificationIds',
        'pushNotificationIds' => 'pushNotificationIds',
        'PushNotificationIds' => 'pushNotificationIds',
        'uuids' => 'uuids',
        'Uuids' => 'uuids',
        'notification_sent' => 'notificationSent',
        'notificationSent' => 'notificationSent',
        'NotificationSent' => 'notificationSent',
        'push_notification_provider_ids' => 'pushNotificationProviderIds',
        'pushNotificationProviderIds' => 'pushNotificationProviderIds',
        'PushNotificationProviderIds' => 'pushNotificationProviderIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PUSH_NOTIFICATION_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'push_notification_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'uuids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::NOTIFICATION_SENT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'notification_sent',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PUSH_NOTIFICATION_PROVIDER_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'push_notification_provider_ids',
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
     * @module PushNotification
     *
     * @param int[]|null $pushNotificationIds
     *
     * @return $this
     */
    public function setPushNotificationIds(array $pushNotificationIds = null)
    {
        if ($pushNotificationIds === null) {
            $pushNotificationIds = [];
        }

        $this->pushNotificationIds = [];

        foreach ($pushNotificationIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PUSH_NOTIFICATION_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdPushNotification(...$args);
        }

        $this->modifiedProperties[self::PUSH_NOTIFICATION_IDS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return int[]
     */
    public function getPushNotificationIds(): array
    {
        return $this->pushNotificationIds;
    }

    /**
     * @module PushNotification
     *
     * @param int $idPushNotification
     *
     * @return $this
     */
    public function addIdPushNotification(int $idPushNotification)
    {
        $this->pushNotificationIds[] = $idPushNotification;
        $this->modifiedProperties[self::PUSH_NOTIFICATION_IDS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePushNotificationIds()
    {
        $this->assertPropertyIsSet(self::PUSH_NOTIFICATION_IDS);

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @param string[]|null $uuids
     *
     * @return $this
     */
    public function setUuids(array $uuids = null)
    {
        if ($uuids === null) {
            $uuids = [];
        }

        $this->uuids = [];

        foreach ($uuids as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::UUIDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addUuid(...$args);
        }

        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return string[]
     */
    public function getUuids(): array
    {
        return $this->uuids;
    }

    /**
     * @module PushNotification
     *
     * @param string $uuid
     *
     * @return $this
     */
    public function addUuid(string $uuid)
    {
        $this->uuids[] = $uuid;
        $this->modifiedProperties[self::UUIDS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuids()
    {
        $this->assertPropertyIsSet(self::UUIDS);

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @param bool|null $notificationSent
     *
     * @return $this
     */
    public function setNotificationSent(?bool $notificationSent = null)
    {
        $this->notificationSent = $notificationSent;
        $this->modifiedProperties[self::NOTIFICATION_SENT] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return bool|null
     */
    public function getNotificationSent(): ?bool
    {
        return $this->notificationSent;
    }

    /**
     * @module PushNotification
     *
     * @param bool $notificationSent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNotificationSentOrFail(bool $notificationSent)
    {
        return $this->setNotificationSent($notificationSent);
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getNotificationSentOrFail(): bool
    {
        if ($this->notificationSent === null) {
            $this->throwNullValueException(static::NOTIFICATION_SENT);
        }

        return $this->notificationSent;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNotificationSent()
    {
        $this->assertPropertyIsSet(self::NOTIFICATION_SENT);

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @param int[]|null $pushNotificationProviderIds
     *
     * @return $this
     */
    public function setPushNotificationProviderIds(array $pushNotificationProviderIds = null)
    {
        if ($pushNotificationProviderIds === null) {
            $pushNotificationProviderIds = [];
        }

        $this->pushNotificationProviderIds = [];

        foreach ($pushNotificationProviderIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PUSH_NOTIFICATION_PROVIDER_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdPushNotificationProvider(...$args);
        }

        $this->modifiedProperties[self::PUSH_NOTIFICATION_PROVIDER_IDS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return int[]
     */
    public function getPushNotificationProviderIds(): array
    {
        return $this->pushNotificationProviderIds;
    }

    /**
     * @module PushNotification
     *
     * @param int $idPushNotificationProvider
     *
     * @return $this
     */
    public function addIdPushNotificationProvider(int $idPushNotificationProvider)
    {
        $this->pushNotificationProviderIds[] = $idPushNotificationProvider;
        $this->modifiedProperties[self::PUSH_NOTIFICATION_PROVIDER_IDS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePushNotificationProviderIds()
    {
        $this->assertPropertyIsSet(self::PUSH_NOTIFICATION_PROVIDER_IDS);

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
                case 'pushNotificationIds':
                case 'uuids':
                case 'notificationSent':
                case 'pushNotificationProviderIds':
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
                case 'pushNotificationIds':
                case 'uuids':
                case 'notificationSent':
                case 'pushNotificationProviderIds':
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
                case 'pushNotificationIds':
                case 'uuids':
                case 'notificationSent':
                case 'pushNotificationProviderIds':
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
            'pushNotificationIds' => $this->pushNotificationIds,
            'uuids' => $this->uuids,
            'notificationSent' => $this->notificationSent,
            'pushNotificationProviderIds' => $this->pushNotificationProviderIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'push_notification_ids' => $this->pushNotificationIds,
            'uuids' => $this->uuids,
            'notification_sent' => $this->notificationSent,
            'push_notification_provider_ids' => $this->pushNotificationProviderIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'push_notification_ids' => $this->pushNotificationIds instanceof AbstractTransfer ? $this->pushNotificationIds->toArray(true, false) : $this->pushNotificationIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, false) : $this->uuids,
            'notification_sent' => $this->notificationSent instanceof AbstractTransfer ? $this->notificationSent->toArray(true, false) : $this->notificationSent,
            'push_notification_provider_ids' => $this->pushNotificationProviderIds instanceof AbstractTransfer ? $this->pushNotificationProviderIds->toArray(true, false) : $this->pushNotificationProviderIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'pushNotificationIds' => $this->pushNotificationIds instanceof AbstractTransfer ? $this->pushNotificationIds->toArray(true, true) : $this->pushNotificationIds,
            'uuids' => $this->uuids instanceof AbstractTransfer ? $this->uuids->toArray(true, true) : $this->uuids,
            'notificationSent' => $this->notificationSent instanceof AbstractTransfer ? $this->notificationSent->toArray(true, true) : $this->notificationSent,
            'pushNotificationProviderIds' => $this->pushNotificationProviderIds instanceof AbstractTransfer ? $this->pushNotificationProviderIds->toArray(true, true) : $this->pushNotificationProviderIds,
        ];
    }
}
