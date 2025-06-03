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
class PushNotificationSubscriptionConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PUSH_NOTIFICATION_GROUP_IDS = 'pushNotificationGroupIds';

    /**
     * @var string
     */
    public const PUSH_NOTIFICATION_PROVIDER_IDS = 'pushNotificationProviderIds';

    /**
     * @var string
     */
    public const PAYLOAD_CHECK_SUMS = 'payloadCheckSums';

    /**
     * @var string
     */
    public const EXPIRED_AT = 'expiredAt';

    /**
     * @var int[]
     */
    protected $pushNotificationGroupIds = [];

    /**
     * @var int[]
     */
    protected $pushNotificationProviderIds = [];

    /**
     * @var string[]
     */
    protected $payloadCheckSums = [];

    /**
     * @var string|null
     */
    protected $expiredAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'push_notification_group_ids' => 'pushNotificationGroupIds',
        'pushNotificationGroupIds' => 'pushNotificationGroupIds',
        'PushNotificationGroupIds' => 'pushNotificationGroupIds',
        'push_notification_provider_ids' => 'pushNotificationProviderIds',
        'pushNotificationProviderIds' => 'pushNotificationProviderIds',
        'PushNotificationProviderIds' => 'pushNotificationProviderIds',
        'payload_check_sums' => 'payloadCheckSums',
        'payloadCheckSums' => 'payloadCheckSums',
        'PayloadCheckSums' => 'payloadCheckSums',
        'expired_at' => 'expiredAt',
        'expiredAt' => 'expiredAt',
        'ExpiredAt' => 'expiredAt',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PUSH_NOTIFICATION_GROUP_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'push_notification_group_ids',
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
        self::PAYLOAD_CHECK_SUMS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'payload_check_sums',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::EXPIRED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'expired_at',
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
     * @param int[]|null $pushNotificationGroupIds
     *
     * @return $this
     */
    public function setPushNotificationGroupIds(array $pushNotificationGroupIds = null)
    {
        if ($pushNotificationGroupIds === null) {
            $pushNotificationGroupIds = [];
        }

        $this->pushNotificationGroupIds = [];

        foreach ($pushNotificationGroupIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PUSH_NOTIFICATION_GROUP_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdPushNotificationGroup(...$args);
        }

        $this->modifiedProperties[self::PUSH_NOTIFICATION_GROUP_IDS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return int[]
     */
    public function getPushNotificationGroupIds(): array
    {
        return $this->pushNotificationGroupIds;
    }

    /**
     * @module PushNotification
     *
     * @param int $idPushNotificationGroup
     *
     * @return $this
     */
    public function addIdPushNotificationGroup(int $idPushNotificationGroup)
    {
        $this->pushNotificationGroupIds[] = $idPushNotificationGroup;
        $this->modifiedProperties[self::PUSH_NOTIFICATION_GROUP_IDS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePushNotificationGroupIds()
    {
        $this->assertPropertyIsSet(self::PUSH_NOTIFICATION_GROUP_IDS);

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
     * @module PushNotification
     *
     * @param string[]|null $payloadCheckSums
     *
     * @return $this
     */
    public function setPayloadCheckSums(array $payloadCheckSums = null)
    {
        if ($payloadCheckSums === null) {
            $payloadCheckSums = [];
        }

        $this->payloadCheckSums = [];

        foreach ($payloadCheckSums as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::PAYLOAD_CHECK_SUMS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addPayloadChecksum(...$args);
        }

        $this->modifiedProperties[self::PAYLOAD_CHECK_SUMS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return string[]
     */
    public function getPayloadCheckSums(): array
    {
        return $this->payloadCheckSums;
    }

    /**
     * @module PushNotification
     *
     * @param string $payloadChecksum
     *
     * @return $this
     */
    public function addPayloadChecksum(string $payloadChecksum)
    {
        $this->payloadCheckSums[] = $payloadChecksum;
        $this->modifiedProperties[self::PAYLOAD_CHECK_SUMS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayloadCheckSums()
    {
        $this->assertPropertyIsSet(self::PAYLOAD_CHECK_SUMS);

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @param string|null $expiredAt
     *
     * @return $this
     */
    public function setExpiredAt(?string $expiredAt = null)
    {
        $this->expiredAt = $expiredAt;
        $this->modifiedProperties[self::EXPIRED_AT] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return string|null
     */
    public function getExpiredAt(): ?string
    {
        return $this->expiredAt;
    }

    /**
     * @module PushNotification
     *
     * @param string $expiredAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpiredAtOrFail(string $expiredAt)
    {
        return $this->setExpiredAt($expiredAt);
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExpiredAtOrFail(): string
    {
        if ($this->expiredAt === null) {
            $this->throwNullValueException(static::EXPIRED_AT);
        }

        return $this->expiredAt;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpiredAt()
    {
        $this->assertPropertyIsSet(self::EXPIRED_AT);

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
                case 'pushNotificationGroupIds':
                case 'pushNotificationProviderIds':
                case 'payloadCheckSums':
                case 'expiredAt':
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
                case 'pushNotificationGroupIds':
                case 'pushNotificationProviderIds':
                case 'payloadCheckSums':
                case 'expiredAt':
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
                case 'pushNotificationGroupIds':
                case 'pushNotificationProviderIds':
                case 'payloadCheckSums':
                case 'expiredAt':
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
            'pushNotificationGroupIds' => $this->pushNotificationGroupIds,
            'pushNotificationProviderIds' => $this->pushNotificationProviderIds,
            'payloadCheckSums' => $this->payloadCheckSums,
            'expiredAt' => $this->expiredAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'push_notification_group_ids' => $this->pushNotificationGroupIds,
            'push_notification_provider_ids' => $this->pushNotificationProviderIds,
            'payload_check_sums' => $this->payloadCheckSums,
            'expired_at' => $this->expiredAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'push_notification_group_ids' => $this->pushNotificationGroupIds instanceof AbstractTransfer ? $this->pushNotificationGroupIds->toArray(true, false) : $this->pushNotificationGroupIds,
            'push_notification_provider_ids' => $this->pushNotificationProviderIds instanceof AbstractTransfer ? $this->pushNotificationProviderIds->toArray(true, false) : $this->pushNotificationProviderIds,
            'payload_check_sums' => $this->payloadCheckSums instanceof AbstractTransfer ? $this->payloadCheckSums->toArray(true, false) : $this->payloadCheckSums,
            'expired_at' => $this->expiredAt instanceof AbstractTransfer ? $this->expiredAt->toArray(true, false) : $this->expiredAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'pushNotificationGroupIds' => $this->pushNotificationGroupIds instanceof AbstractTransfer ? $this->pushNotificationGroupIds->toArray(true, true) : $this->pushNotificationGroupIds,
            'pushNotificationProviderIds' => $this->pushNotificationProviderIds instanceof AbstractTransfer ? $this->pushNotificationProviderIds->toArray(true, true) : $this->pushNotificationProviderIds,
            'payloadCheckSums' => $this->payloadCheckSums instanceof AbstractTransfer ? $this->payloadCheckSums->toArray(true, true) : $this->payloadCheckSums,
            'expiredAt' => $this->expiredAt instanceof AbstractTransfer ? $this->expiredAt->toArray(true, true) : $this->expiredAt,
        ];
    }
}
