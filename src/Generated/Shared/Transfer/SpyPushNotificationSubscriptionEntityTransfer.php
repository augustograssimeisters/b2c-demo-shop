<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyPushNotificationSubscriptionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PUSH_NOTIFICATION_SUBSCRIPTION = 'idPushNotificationSubscription';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const FK_PUSH_NOTIFICATION_GROUP = 'fkPushNotificationGroup';

    /**
     * @var string
     */
    public const FK_PUSH_NOTIFICATION_PROVIDER = 'fkPushNotificationProvider';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const PAYLOAD = 'payload';

    /**
     * @var string
     */
    public const PAYLOAD_CHECKSUM = 'payloadChecksum';

    /**
     * @var string
     */
    public const EXPIRED_AT = 'expiredAt';

    /**
     * @var string
     */
    public const SPY_PUSH_NOTIFICATION_GROUP = 'spyPushNotificationGroup';

    /**
     * @var string
     */
    public const SPY_PUSH_NOTIFICATION_PROVIDER = 'spyPushNotificationProvider';

    /**
     * @var string
     */
    public const SPY_LOCALE = 'spyLocale';

    /**
     * @var string
     */
    public const SPY_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOGS = 'spyPushNotificationSubscriptionDeliveryLogs';

    /**
     * @var integer|null
     */
    protected $idPushNotificationSubscription;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var integer|null
     */
    protected $fkPushNotificationGroup;

    /**
     * @var integer|null
     */
    protected $fkPushNotificationProvider;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var string|null
     */
    protected $payload;

    /**
     * @var string|null
     */
    protected $payloadChecksum;

    /**
     * @var string|null
     */
    protected $expiredAt;

    /**
     * @var \Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer|null
     */
    protected $spyPushNotificationGroup;

    /**
     * @var \Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer|null
     */
    protected $spyPushNotificationProvider;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $spyLocale;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationSubscriptionDeliveryLogEntityTransfer>
     */
    protected $spyPushNotificationSubscriptionDeliveryLogs;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_push_notification_subscription' => 'idPushNotificationSubscription',
        'idPushNotificationSubscription' => 'idPushNotificationSubscription',
        'IdPushNotificationSubscription' => 'idPushNotificationSubscription',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'fk_push_notification_group' => 'fkPushNotificationGroup',
        'fkPushNotificationGroup' => 'fkPushNotificationGroup',
        'FkPushNotificationGroup' => 'fkPushNotificationGroup',
        'fk_push_notification_provider' => 'fkPushNotificationProvider',
        'fkPushNotificationProvider' => 'fkPushNotificationProvider',
        'FkPushNotificationProvider' => 'fkPushNotificationProvider',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'payload' => 'payload',
        'Payload' => 'payload',
        'payload_checksum' => 'payloadChecksum',
        'payloadChecksum' => 'payloadChecksum',
        'PayloadChecksum' => 'payloadChecksum',
        'expired_at' => 'expiredAt',
        'expiredAt' => 'expiredAt',
        'ExpiredAt' => 'expiredAt',
        'spy_push_notification_group' => 'spyPushNotificationGroup',
        'spyPushNotificationGroup' => 'spyPushNotificationGroup',
        'SpyPushNotificationGroup' => 'spyPushNotificationGroup',
        'spy_push_notification_provider' => 'spyPushNotificationProvider',
        'spyPushNotificationProvider' => 'spyPushNotificationProvider',
        'SpyPushNotificationProvider' => 'spyPushNotificationProvider',
        'spy_locale' => 'spyLocale',
        'spyLocale' => 'spyLocale',
        'SpyLocale' => 'spyLocale',
        'spy_push_notification_subscription_delivery_logs' => 'spyPushNotificationSubscriptionDeliveryLogs',
        'spyPushNotificationSubscriptionDeliveryLogs' => 'spyPushNotificationSubscriptionDeliveryLogs',
        'SpyPushNotificationSubscriptionDeliveryLogs' => 'spyPushNotificationSubscriptionDeliveryLogs',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PUSH_NOTIFICATION_SUBSCRIPTION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_push_notification_subscription',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
        ],
        self::FK_PUSH_NOTIFICATION_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_push_notification_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PUSH_NOTIFICATION_PROVIDER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_push_notification_provider',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LOCALE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYLOAD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payload',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYLOAD_CHECKSUM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payload_checksum',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
        ],
        self::SPY_PUSH_NOTIFICATION_GROUP => [
            'type' => 'Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_push_notification_group',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PUSH_NOTIFICATION_PROVIDER => [
            'type' => 'Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_push_notification_provider',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOGS => [
            'type' => 'Generated\Shared\Transfer\SpyPushNotificationSubscriptionDeliveryLogEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_push_notification_subscription_delivery_logs',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\PushNotification\Persistence\SpyPushNotificationSubscription';


    /**
     * @module 
     *
     * @param integer|null $idPushNotificationSubscription
     *
     * @return $this
     */
    public function setIdPushNotificationSubscription($idPushNotificationSubscription)
    {
        $this->idPushNotificationSubscription = $idPushNotificationSubscription;
        $this->modifiedProperties[self::ID_PUSH_NOTIFICATION_SUBSCRIPTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdPushNotificationSubscription()
    {
        return $this->idPushNotificationSubscription;
    }

    /**
     * @module 
     *
     * @param integer|null $idPushNotificationSubscription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPushNotificationSubscriptionOrFail($idPushNotificationSubscription)
    {
        if ($idPushNotificationSubscription === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION_SUBSCRIPTION);
        }

        return $this->setIdPushNotificationSubscription($idPushNotificationSubscription);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdPushNotificationSubscriptionOrFail()
    {
        if ($this->idPushNotificationSubscription === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION_SUBSCRIPTION);
        }

        return $this->idPushNotificationSubscription;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPushNotificationSubscription()
    {
        $this->assertPropertyIsSet(self::ID_PUSH_NOTIFICATION_SUBSCRIPTION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkPushNotificationGroup
     *
     * @return $this
     */
    public function setFkPushNotificationGroup($fkPushNotificationGroup)
    {
        $this->fkPushNotificationGroup = $fkPushNotificationGroup;
        $this->modifiedProperties[self::FK_PUSH_NOTIFICATION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPushNotificationGroup()
    {
        return $this->fkPushNotificationGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPushNotificationGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPushNotificationGroupOrFail($fkPushNotificationGroup)
    {
        if ($fkPushNotificationGroup === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION_GROUP);
        }

        return $this->setFkPushNotificationGroup($fkPushNotificationGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPushNotificationGroupOrFail()
    {
        if ($this->fkPushNotificationGroup === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION_GROUP);
        }

        return $this->fkPushNotificationGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPushNotificationGroup()
    {
        $this->assertPropertyIsSet(self::FK_PUSH_NOTIFICATION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPushNotificationProvider
     *
     * @return $this
     */
    public function setFkPushNotificationProvider($fkPushNotificationProvider)
    {
        $this->fkPushNotificationProvider = $fkPushNotificationProvider;
        $this->modifiedProperties[self::FK_PUSH_NOTIFICATION_PROVIDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPushNotificationProvider()
    {
        return $this->fkPushNotificationProvider;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPushNotificationProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPushNotificationProviderOrFail($fkPushNotificationProvider)
    {
        if ($fkPushNotificationProvider === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION_PROVIDER);
        }

        return $this->setFkPushNotificationProvider($fkPushNotificationProvider);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPushNotificationProviderOrFail()
    {
        if ($this->fkPushNotificationProvider === null) {
            $this->throwNullValueException(static::FK_PUSH_NOTIFICATION_PROVIDER);
        }

        return $this->fkPushNotificationProvider;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPushNotificationProvider()
    {
        $this->assertPropertyIsSet(self::FK_PUSH_NOTIFICATION_PROVIDER);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $payload
     *
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
        $this->modifiedProperties[self::PAYLOAD] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @module 
     *
     * @param string|null $payload
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPayloadOrFail($payload)
    {
        if ($payload === null) {
            $this->throwNullValueException(static::PAYLOAD);
        }

        return $this->setPayload($payload);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPayloadOrFail()
    {
        if ($this->payload === null) {
            $this->throwNullValueException(static::PAYLOAD);
        }

        return $this->payload;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $payloadChecksum
     *
     * @return $this
     */
    public function setPayloadChecksum($payloadChecksum)
    {
        $this->payloadChecksum = $payloadChecksum;
        $this->modifiedProperties[self::PAYLOAD_CHECKSUM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPayloadChecksum()
    {
        return $this->payloadChecksum;
    }

    /**
     * @module 
     *
     * @param string|null $payloadChecksum
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPayloadChecksumOrFail($payloadChecksum)
    {
        if ($payloadChecksum === null) {
            $this->throwNullValueException(static::PAYLOAD_CHECKSUM);
        }

        return $this->setPayloadChecksum($payloadChecksum);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPayloadChecksumOrFail()
    {
        if ($this->payloadChecksum === null) {
            $this->throwNullValueException(static::PAYLOAD_CHECKSUM);
        }

        return $this->payloadChecksum;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayloadChecksum()
    {
        $this->assertPropertyIsSet(self::PAYLOAD_CHECKSUM);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $expiredAt
     *
     * @return $this
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;
        $this->modifiedProperties[self::EXPIRED_AT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * @module 
     *
     * @param string|null $expiredAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpiredAtOrFail($expiredAt)
    {
        if ($expiredAt === null) {
            $this->throwNullValueException(static::EXPIRED_AT);
        }

        return $this->setExpiredAt($expiredAt);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExpiredAtOrFail()
    {
        if ($this->expiredAt === null) {
            $this->throwNullValueException(static::EXPIRED_AT);
        }

        return $this->expiredAt;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer|null $spyPushNotificationGroup
     *
     * @return $this
     */
    public function setSpyPushNotificationGroup(SpyPushNotificationGroupEntityTransfer $spyPushNotificationGroup = null)
    {
        $this->spyPushNotificationGroup = $spyPushNotificationGroup;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer|null
     */
    public function getSpyPushNotificationGroup()
    {
        return $this->spyPushNotificationGroup;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer $spyPushNotificationGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyPushNotificationGroupOrFail(SpyPushNotificationGroupEntityTransfer $spyPushNotificationGroup)
    {
        return $this->setSpyPushNotificationGroup($spyPushNotificationGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationGroupEntityTransfer
     */
    public function getSpyPushNotificationGroupOrFail()
    {
        if ($this->spyPushNotificationGroup === null) {
            $this->throwNullValueException(static::SPY_PUSH_NOTIFICATION_GROUP);
        }

        return $this->spyPushNotificationGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPushNotificationGroup()
    {
        $this->assertPropertyIsSet(self::SPY_PUSH_NOTIFICATION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer|null $spyPushNotificationProvider
     *
     * @return $this
     */
    public function setSpyPushNotificationProvider(SpyPushNotificationProviderEntityTransfer $spyPushNotificationProvider = null)
    {
        $this->spyPushNotificationProvider = $spyPushNotificationProvider;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION_PROVIDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer|null
     */
    public function getSpyPushNotificationProvider()
    {
        return $this->spyPushNotificationProvider;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer $spyPushNotificationProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyPushNotificationProviderOrFail(SpyPushNotificationProviderEntityTransfer $spyPushNotificationProvider)
    {
        return $this->setSpyPushNotificationProvider($spyPushNotificationProvider);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPushNotificationProviderEntityTransfer
     */
    public function getSpyPushNotificationProviderOrFail()
    {
        if ($this->spyPushNotificationProvider === null) {
            $this->throwNullValueException(static::SPY_PUSH_NOTIFICATION_PROVIDER);
        }

        return $this->spyPushNotificationProvider;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPushNotificationProvider()
    {
        $this->assertPropertyIsSet(self::SPY_PUSH_NOTIFICATION_PROVIDER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $spyLocale
     *
     * @return $this
     */
    public function setSpyLocale(SpyLocaleEntityTransfer $spyLocale = null)
    {
        $this->spyLocale = $spyLocale;
        $this->modifiedProperties[self::SPY_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getSpyLocale()
    {
        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $spyLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyLocaleOrFail(SpyLocaleEntityTransfer $spyLocale)
    {
        return $this->setSpyLocale($spyLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getSpyLocaleOrFail()
    {
        if ($this->spyLocale === null) {
            $this->throwNullValueException(static::SPY_LOCALE);
        }

        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyLocale()
    {
        $this->assertPropertyIsSet(self::SPY_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationSubscriptionDeliveryLogEntityTransfer> $spyPushNotificationSubscriptionDeliveryLogs
     *
     * @return $this
     */
    public function setSpyPushNotificationSubscriptionDeliveryLogs(ArrayObject $spyPushNotificationSubscriptionDeliveryLogs)
    {
        $this->spyPushNotificationSubscriptionDeliveryLogs = $spyPushNotificationSubscriptionDeliveryLogs;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyPushNotificationSubscriptionDeliveryLogEntityTransfer>
     */
    public function getSpyPushNotificationSubscriptionDeliveryLogs()
    {
        return $this->spyPushNotificationSubscriptionDeliveryLogs;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPushNotificationSubscriptionDeliveryLogEntityTransfer $spyPushNotificationSubscriptionDeliveryLogs
     *
     * @return $this
     */
    public function addSpyPushNotificationSubscriptionDeliveryLogs(SpyPushNotificationSubscriptionDeliveryLogEntityTransfer $spyPushNotificationSubscriptionDeliveryLogs)
    {
        $this->spyPushNotificationSubscriptionDeliveryLogs[] = $spyPushNotificationSubscriptionDeliveryLogs;
        $this->modifiedProperties[self::SPY_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPushNotificationSubscriptionDeliveryLogs()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PUSH_NOTIFICATION_SUBSCRIPTION_DELIVERY_LOGS);

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
                case 'idPushNotificationSubscription':
                case 'uuid':
                case 'fkPushNotificationGroup':
                case 'fkPushNotificationProvider':
                case 'fkLocale':
                case 'payload':
                case 'payloadChecksum':
                case 'expiredAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyPushNotificationGroup':
                case 'spyPushNotificationProvider':
                case 'spyLocale':
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
                case 'spyPushNotificationSubscriptionDeliveryLogs':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
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
                case 'idPushNotificationSubscription':
                case 'uuid':
                case 'fkPushNotificationGroup':
                case 'fkPushNotificationProvider':
                case 'fkLocale':
                case 'payload':
                case 'payloadChecksum':
                case 'expiredAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPushNotificationGroup':
                case 'spyPushNotificationProvider':
                case 'spyLocale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyPushNotificationSubscriptionDeliveryLogs':
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
                case 'idPushNotificationSubscription':
                case 'uuid':
                case 'fkPushNotificationGroup':
                case 'fkPushNotificationProvider':
                case 'fkLocale':
                case 'payload':
                case 'payloadChecksum':
                case 'expiredAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyPushNotificationGroup':
                case 'spyPushNotificationProvider':
                case 'spyLocale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyPushNotificationSubscriptionDeliveryLogs':
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
        $this->spyPushNotificationSubscriptionDeliveryLogs = $this->spyPushNotificationSubscriptionDeliveryLogs ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idPushNotificationSubscription' => $this->idPushNotificationSubscription,
            'uuid' => $this->uuid,
            'fkPushNotificationGroup' => $this->fkPushNotificationGroup,
            'fkPushNotificationProvider' => $this->fkPushNotificationProvider,
            'fkLocale' => $this->fkLocale,
            'payload' => $this->payload,
            'payloadChecksum' => $this->payloadChecksum,
            'expiredAt' => $this->expiredAt,
            'spyPushNotificationGroup' => $this->spyPushNotificationGroup,
            'spyPushNotificationProvider' => $this->spyPushNotificationProvider,
            'spyLocale' => $this->spyLocale,
            'spyPushNotificationSubscriptionDeliveryLogs' => $this->spyPushNotificationSubscriptionDeliveryLogs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification_subscription' => $this->idPushNotificationSubscription,
            'uuid' => $this->uuid,
            'fk_push_notification_group' => $this->fkPushNotificationGroup,
            'fk_push_notification_provider' => $this->fkPushNotificationProvider,
            'fk_locale' => $this->fkLocale,
            'payload' => $this->payload,
            'payload_checksum' => $this->payloadChecksum,
            'expired_at' => $this->expiredAt,
            'spy_push_notification_group' => $this->spyPushNotificationGroup,
            'spy_push_notification_provider' => $this->spyPushNotificationProvider,
            'spy_locale' => $this->spyLocale,
            'spy_push_notification_subscription_delivery_logs' => $this->spyPushNotificationSubscriptionDeliveryLogs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification_subscription' => $this->idPushNotificationSubscription instanceof AbstractTransfer ? $this->idPushNotificationSubscription->toArray(true, false) : $this->idPushNotificationSubscription,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'fk_push_notification_group' => $this->fkPushNotificationGroup instanceof AbstractTransfer ? $this->fkPushNotificationGroup->toArray(true, false) : $this->fkPushNotificationGroup,
            'fk_push_notification_provider' => $this->fkPushNotificationProvider instanceof AbstractTransfer ? $this->fkPushNotificationProvider->toArray(true, false) : $this->fkPushNotificationProvider,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, false) : $this->payload,
            'payload_checksum' => $this->payloadChecksum instanceof AbstractTransfer ? $this->payloadChecksum->toArray(true, false) : $this->payloadChecksum,
            'expired_at' => $this->expiredAt instanceof AbstractTransfer ? $this->expiredAt->toArray(true, false) : $this->expiredAt,
            'spy_push_notification_group' => $this->spyPushNotificationGroup instanceof AbstractTransfer ? $this->spyPushNotificationGroup->toArray(true, false) : $this->spyPushNotificationGroup,
            'spy_push_notification_provider' => $this->spyPushNotificationProvider instanceof AbstractTransfer ? $this->spyPushNotificationProvider->toArray(true, false) : $this->spyPushNotificationProvider,
            'spy_locale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, false) : $this->spyLocale,
            'spy_push_notification_subscription_delivery_logs' => $this->spyPushNotificationSubscriptionDeliveryLogs instanceof AbstractTransfer ? $this->spyPushNotificationSubscriptionDeliveryLogs->toArray(true, false) : $this->addValuesToCollection($this->spyPushNotificationSubscriptionDeliveryLogs, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPushNotificationSubscription' => $this->idPushNotificationSubscription instanceof AbstractTransfer ? $this->idPushNotificationSubscription->toArray(true, true) : $this->idPushNotificationSubscription,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'fkPushNotificationGroup' => $this->fkPushNotificationGroup instanceof AbstractTransfer ? $this->fkPushNotificationGroup->toArray(true, true) : $this->fkPushNotificationGroup,
            'fkPushNotificationProvider' => $this->fkPushNotificationProvider instanceof AbstractTransfer ? $this->fkPushNotificationProvider->toArray(true, true) : $this->fkPushNotificationProvider,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, true) : $this->payload,
            'payloadChecksum' => $this->payloadChecksum instanceof AbstractTransfer ? $this->payloadChecksum->toArray(true, true) : $this->payloadChecksum,
            'expiredAt' => $this->expiredAt instanceof AbstractTransfer ? $this->expiredAt->toArray(true, true) : $this->expiredAt,
            'spyPushNotificationGroup' => $this->spyPushNotificationGroup instanceof AbstractTransfer ? $this->spyPushNotificationGroup->toArray(true, true) : $this->spyPushNotificationGroup,
            'spyPushNotificationProvider' => $this->spyPushNotificationProvider instanceof AbstractTransfer ? $this->spyPushNotificationProvider->toArray(true, true) : $this->spyPushNotificationProvider,
            'spyLocale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, true) : $this->spyLocale,
            'spyPushNotificationSubscriptionDeliveryLogs' => $this->spyPushNotificationSubscriptionDeliveryLogs instanceof AbstractTransfer ? $this->spyPushNotificationSubscriptionDeliveryLogs->toArray(true, true) : $this->addValuesToCollection($this->spyPushNotificationSubscriptionDeliveryLogs, true, true),
        ];
    }
}
