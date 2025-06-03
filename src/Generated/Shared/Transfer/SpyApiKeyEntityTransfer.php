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
class SpyApiKeyEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_API_KEY = 'idApiKey';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const KEY_HASH = 'keyHash';

    /**
     * @var string
     */
    public const SCOPES = 'scopes';

    /**
     * @var string
     */
    public const CREATED_BY = 'createdBy';

    /**
     * @var string
     */
    public const VALID_TO = 'validTo';

    /**
     * @var string
     */
    public const USER = 'user';

    /**
     * @var integer|null
     */
    protected $idApiKey;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $keyHash;

    /**
     * @var string|null
     */
    protected $scopes;

    /**
     * @var integer|null
     */
    protected $createdBy;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var \Generated\Shared\Transfer\SpyUserEntityTransfer|null
     */
    protected $user;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_api_key' => 'idApiKey',
        'idApiKey' => 'idApiKey',
        'IdApiKey' => 'idApiKey',
        'name' => 'name',
        'Name' => 'name',
        'key_hash' => 'keyHash',
        'keyHash' => 'keyHash',
        'KeyHash' => 'keyHash',
        'scopes' => 'scopes',
        'Scopes' => 'scopes',
        'created_by' => 'createdBy',
        'createdBy' => 'createdBy',
        'CreatedBy' => 'createdBy',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'user' => 'user',
        'User' => 'user',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_API_KEY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_api_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::KEY_HASH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key_hash',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SCOPES => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'scopes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CREATED_BY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'created_by',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USER => [
            'type' => 'Generated\Shared\Transfer\SpyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'user',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ApiKey\Persistence\SpyApiKey';


    /**
     * @module 
     *
     * @param integer|null $idApiKey
     *
     * @return $this
     */
    public function setIdApiKey($idApiKey)
    {
        $this->idApiKey = $idApiKey;
        $this->modifiedProperties[self::ID_API_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdApiKey()
    {
        return $this->idApiKey;
    }

    /**
     * @module 
     *
     * @param integer|null $idApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdApiKeyOrFail($idApiKey)
    {
        if ($idApiKey === null) {
            $this->throwNullValueException(static::ID_API_KEY);
        }

        return $this->setIdApiKey($idApiKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdApiKeyOrFail()
    {
        if ($this->idApiKey === null) {
            $this->throwNullValueException(static::ID_API_KEY);
        }

        return $this->idApiKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdApiKey()
    {
        $this->assertPropertyIsSet(self::ID_API_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $keyHash
     *
     * @return $this
     */
    public function setKeyHash($keyHash)
    {
        $this->keyHash = $keyHash;
        $this->modifiedProperties[self::KEY_HASH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getKeyHash()
    {
        return $this->keyHash;
    }

    /**
     * @module 
     *
     * @param string|null $keyHash
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyHashOrFail($keyHash)
    {
        if ($keyHash === null) {
            $this->throwNullValueException(static::KEY_HASH);
        }

        return $this->setKeyHash($keyHash);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyHashOrFail()
    {
        if ($this->keyHash === null) {
            $this->throwNullValueException(static::KEY_HASH);
        }

        return $this->keyHash;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKeyHash()
    {
        $this->assertPropertyIsSet(self::KEY_HASH);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $scopes
     *
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;
        $this->modifiedProperties[self::SCOPES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @module 
     *
     * @param string|null $scopes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setScopesOrFail($scopes)
    {
        if ($scopes === null) {
            $this->throwNullValueException(static::SCOPES);
        }

        return $this->setScopes($scopes);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getScopesOrFail()
    {
        if ($this->scopes === null) {
            $this->throwNullValueException(static::SCOPES);
        }

        return $this->scopes;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireScopes()
    {
        $this->assertPropertyIsSet(self::SCOPES);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $createdBy
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        $this->modifiedProperties[self::CREATED_BY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @module 
     *
     * @param integer|null $createdBy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedByOrFail($createdBy)
    {
        if ($createdBy === null) {
            $this->throwNullValueException(static::CREATED_BY);
        }

        return $this->setCreatedBy($createdBy);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getCreatedByOrFail()
    {
        if ($this->createdBy === null) {
            $this->throwNullValueException(static::CREATED_BY);
        }

        return $this->createdBy;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedBy()
    {
        $this->assertPropertyIsSet(self::CREATED_BY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $validTo
     *
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
        $this->modifiedProperties[self::VALID_TO] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module 
     *
     * @param string|null $validTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidToOrFail($validTo)
    {
        if ($validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->setValidTo($validTo);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidToOrFail()
    {
        if ($this->validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->validTo;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidTo()
    {
        $this->assertPropertyIsSet(self::VALID_TO);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUserEntityTransfer|null $user
     *
     * @return $this
     */
    public function setUser(SpyUserEntityTransfer $user = null)
    {
        $this->user = $user;
        $this->modifiedProperties[self::USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyUserEntityTransfer|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUserEntityTransfer $user
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserOrFail(SpyUserEntityTransfer $user)
    {
        return $this->setUser($user);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyUserEntityTransfer
     */
    public function getUserOrFail()
    {
        if ($this->user === null) {
            $this->throwNullValueException(static::USER);
        }

        return $this->user;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUser()
    {
        $this->assertPropertyIsSet(self::USER);

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
                case 'idApiKey':
                case 'name':
                case 'keyHash':
                case 'scopes':
                case 'createdBy':
                case 'validTo':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'user':
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
                case 'idApiKey':
                case 'name':
                case 'keyHash':
                case 'scopes':
                case 'createdBy':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'user':
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
                case 'idApiKey':
                case 'name':
                case 'keyHash':
                case 'scopes':
                case 'createdBy':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'user':
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
            'idApiKey' => $this->idApiKey,
            'name' => $this->name,
            'keyHash' => $this->keyHash,
            'scopes' => $this->scopes,
            'createdBy' => $this->createdBy,
            'validTo' => $this->validTo,
            'user' => $this->user,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_api_key' => $this->idApiKey,
            'name' => $this->name,
            'key_hash' => $this->keyHash,
            'scopes' => $this->scopes,
            'created_by' => $this->createdBy,
            'valid_to' => $this->validTo,
            'user' => $this->user,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_api_key' => $this->idApiKey instanceof AbstractTransfer ? $this->idApiKey->toArray(true, false) : $this->idApiKey,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'key_hash' => $this->keyHash instanceof AbstractTransfer ? $this->keyHash->toArray(true, false) : $this->keyHash,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, false) : $this->scopes,
            'created_by' => $this->createdBy instanceof AbstractTransfer ? $this->createdBy->toArray(true, false) : $this->createdBy,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, false) : $this->user,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idApiKey' => $this->idApiKey instanceof AbstractTransfer ? $this->idApiKey->toArray(true, true) : $this->idApiKey,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'keyHash' => $this->keyHash instanceof AbstractTransfer ? $this->keyHash->toArray(true, true) : $this->keyHash,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, true) : $this->scopes,
            'createdBy' => $this->createdBy instanceof AbstractTransfer ? $this->createdBy->toArray(true, true) : $this->createdBy,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, true) : $this->user,
        ];
    }
}
