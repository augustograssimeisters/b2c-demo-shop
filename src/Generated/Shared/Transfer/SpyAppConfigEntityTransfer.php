<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyAppConfigEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_APP_CONFIG = 'idAppConfig';

    /**
     * @var string
     */
    public const APP_IDENTIFIER = 'appIdentifier';

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
     * @var integer|null
     */
    protected $idAppConfig;

    /**
     * @var string|null
     */
    protected $appIdentifier;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $config;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_app_config' => 'idAppConfig',
        'idAppConfig' => 'idAppConfig',
        'IdAppConfig' => 'idAppConfig',
        'app_identifier' => 'appIdentifier',
        'appIdentifier' => 'appIdentifier',
        'AppIdentifier' => 'appIdentifier',
        'status' => 'status',
        'Status' => 'status',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'config' => 'config',
        'Config' => 'config',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_APP_CONFIG => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_app_config',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
        ],
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
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIG => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'config',
            'is_collection' => false,
            'is_transfer' => false,
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
    public static $entityNamespace = 'Orm\Zed\KernelApp\Persistence\SpyAppConfig';


    /**
     * @module 
     *
     * @param integer|null $idAppConfig
     *
     * @return $this
     */
    public function setIdAppConfig($idAppConfig)
    {
        $this->idAppConfig = $idAppConfig;
        $this->modifiedProperties[self::ID_APP_CONFIG] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdAppConfig()
    {
        return $this->idAppConfig;
    }

    /**
     * @module 
     *
     * @param integer|null $idAppConfig
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAppConfigOrFail($idAppConfig)
    {
        if ($idAppConfig === null) {
            $this->throwNullValueException(static::ID_APP_CONFIG);
        }

        return $this->setIdAppConfig($idAppConfig);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdAppConfigOrFail()
    {
        if ($this->idAppConfig === null) {
            $this->throwNullValueException(static::ID_APP_CONFIG);
        }

        return $this->idAppConfig;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAppConfig()
    {
        $this->assertPropertyIsSet(self::ID_APP_CONFIG);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $appIdentifier
     *
     * @return $this
     */
    public function setAppIdentifier($appIdentifier)
    {
        $this->appIdentifier = $appIdentifier;
        $this->modifiedProperties[self::APP_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAppIdentifier()
    {
        return $this->appIdentifier;
    }

    /**
     * @module 
     *
     * @param string|null $appIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAppIdentifierOrFail($appIdentifier)
    {
        if ($appIdentifier === null) {
            $this->throwNullValueException(static::APP_IDENTIFIER);
        }

        return $this->setAppIdentifier($appIdentifier);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAppIdentifierOrFail()
    {
        if ($this->appIdentifier === null) {
            $this->throwNullValueException(static::APP_IDENTIFIER);
        }

        return $this->appIdentifier;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module 
     *
     * @param string|null $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail($status)
    {
        if ($status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->setStatus($status);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusOrFail()
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->config = $config;
        $this->modifiedProperties[self::CONFIG] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @module 
     *
     * @param string|null $config
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigOrFail($config)
    {
        if ($config === null) {
            $this->throwNullValueException(static::CONFIG);
        }

        return $this->setConfig($config);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfigOrFail()
    {
        if ($this->config === null) {
            $this->throwNullValueException(static::CONFIG);
        }

        return $this->config;
    }

    /**
     * @module 
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
                case 'idAppConfig':
                case 'appIdentifier':
                case 'status':
                case 'isActive':
                case 'config':
                    $this->$normalizedPropertyName = $value;
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
                case 'idAppConfig':
                case 'appIdentifier':
                case 'status':
                case 'isActive':
                case 'config':
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
                case 'idAppConfig':
                case 'appIdentifier':
                case 'status':
                case 'isActive':
                case 'config':
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
            'idAppConfig' => $this->idAppConfig,
            'appIdentifier' => $this->appIdentifier,
            'status' => $this->status,
            'isActive' => $this->isActive,
            'config' => $this->config,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_app_config' => $this->idAppConfig,
            'app_identifier' => $this->appIdentifier,
            'status' => $this->status,
            'is_active' => $this->isActive,
            'config' => $this->config,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_app_config' => $this->idAppConfig instanceof AbstractTransfer ? $this->idAppConfig->toArray(true, false) : $this->idAppConfig,
            'app_identifier' => $this->appIdentifier instanceof AbstractTransfer ? $this->appIdentifier->toArray(true, false) : $this->appIdentifier,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'config' => $this->config instanceof AbstractTransfer ? $this->config->toArray(true, false) : $this->config,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAppConfig' => $this->idAppConfig instanceof AbstractTransfer ? $this->idAppConfig->toArray(true, true) : $this->idAppConfig,
            'appIdentifier' => $this->appIdentifier instanceof AbstractTransfer ? $this->appIdentifier->toArray(true, true) : $this->appIdentifier,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'config' => $this->config instanceof AbstractTransfer ? $this->config->toArray(true, true) : $this->config,
        ];
    }
}
