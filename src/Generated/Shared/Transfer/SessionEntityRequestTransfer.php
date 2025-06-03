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
class SessionEntityRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_ENTITY = 'idEntity';

    /**
     * @var string
     */
    public const ID_SESSION = 'idSession';

    /**
     * @var string
     */
    public const ENTITY_TYPE = 'entityType';

    /**
     * @var int|null
     */
    protected $idEntity;

    /**
     * @var string|null
     */
    protected $idSession;

    /**
     * @var string|null
     */
    protected $entityType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_entity' => 'idEntity',
        'idEntity' => 'idEntity',
        'IdEntity' => 'idEntity',
        'id_session' => 'idSession',
        'idSession' => 'idSession',
        'IdSession' => 'idSession',
        'entity_type' => 'entityType',
        'entityType' => 'entityType',
        'EntityType' => 'entityType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_ENTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_entity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SESSION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_session',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ENTITY_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'entity_type',
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
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @param int|null $idEntity
     *
     * @return $this
     */
    public function setIdEntity($idEntity)
    {
        $this->idEntity = $idEntity;
        $this->modifiedProperties[self::ID_ENTITY] = true;

        return $this;
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @return int|null
     */
    public function getIdEntity()
    {
        return $this->idEntity;
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @param int|null $idEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdEntityOrFail($idEntity)
    {
        if ($idEntity === null) {
            $this->throwNullValueException(static::ID_ENTITY);
        }

        return $this->setIdEntity($idEntity);
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdEntityOrFail()
    {
        if ($this->idEntity === null) {
            $this->throwNullValueException(static::ID_ENTITY);
        }

        return $this->idEntity;
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdEntity()
    {
        $this->assertPropertyIsSet(self::ID_ENTITY);

        return $this;
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @param string|null $idSession
     *
     * @return $this
     */
    public function setIdSession($idSession)
    {
        $this->idSession = $idSession;
        $this->modifiedProperties[self::ID_SESSION] = true;

        return $this;
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @return string|null
     */
    public function getIdSession()
    {
        return $this->idSession;
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @param string|null $idSession
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSessionOrFail($idSession)
    {
        if ($idSession === null) {
            $this->throwNullValueException(static::ID_SESSION);
        }

        return $this->setIdSession($idSession);
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdSessionOrFail()
    {
        if ($this->idSession === null) {
            $this->throwNullValueException(static::ID_SESSION);
        }

        return $this->idSession;
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSession()
    {
        $this->assertPropertyIsSet(self::ID_SESSION);

        return $this;
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @param string|null $entityType
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
        $this->modifiedProperties[self::ENTITY_TYPE] = true;

        return $this;
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @param string|null $entityType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEntityTypeOrFail($entityType)
    {
        if ($entityType === null) {
            $this->throwNullValueException(static::ENTITY_TYPE);
        }

        return $this->setEntityType($entityType);
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEntityTypeOrFail()
    {
        if ($this->entityType === null) {
            $this->throwNullValueException(static::ENTITY_TYPE);
        }

        return $this->entityType;
    }

    /**
     * @module SessionAgentValidation|SessionCustomerValidationPage|SessionFile|SessionRedis
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEntityType()
    {
        $this->assertPropertyIsSet(self::ENTITY_TYPE);

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
                case 'idEntity':
                case 'idSession':
                case 'entityType':
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
                case 'idEntity':
                case 'idSession':
                case 'entityType':
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
                case 'idEntity':
                case 'idSession':
                case 'entityType':
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
            'idEntity' => $this->idEntity,
            'idSession' => $this->idSession,
            'entityType' => $this->entityType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_entity' => $this->idEntity,
            'id_session' => $this->idSession,
            'entity_type' => $this->entityType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_entity' => $this->idEntity instanceof AbstractTransfer ? $this->idEntity->toArray(true, false) : $this->idEntity,
            'id_session' => $this->idSession instanceof AbstractTransfer ? $this->idSession->toArray(true, false) : $this->idSession,
            'entity_type' => $this->entityType instanceof AbstractTransfer ? $this->entityType->toArray(true, false) : $this->entityType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idEntity' => $this->idEntity instanceof AbstractTransfer ? $this->idEntity->toArray(true, true) : $this->idEntity,
            'idSession' => $this->idSession instanceof AbstractTransfer ? $this->idSession->toArray(true, true) : $this->idSession,
            'entityType' => $this->entityType instanceof AbstractTransfer ? $this->entityType->toArray(true, true) : $this->entityType,
        ];
    }
}
