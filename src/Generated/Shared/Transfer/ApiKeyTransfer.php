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
class ApiKeyTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_API_KEY = 'idApiKey';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const VALID_TO = 'validTo';

    /**
     * @var string
     */
    public const KEY_HASH = 'keyHash';

    /**
     * @var string
     */
    public const CREATED_BY = 'createdBy';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idApiKey;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var string|null
     */
    protected $keyHash;

    /**
     * @var int|null
     */
    protected $createdBy;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'id_api_key' => 'idApiKey',
        'idApiKey' => 'idApiKey',
        'IdApiKey' => 'idApiKey',
        'key' => 'key',
        'Key' => 'key',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'key_hash' => 'keyHash',
        'keyHash' => 'keyHash',
        'KeyHash' => 'keyHash',
        'created_by' => 'createdBy',
        'createdBy' => 'createdBy',
        'CreatedBy' => 'createdBy',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
            'is_strict' => true,
        ],
        self::ID_API_KEY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_api_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
            'is_strict' => true,
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
            'is_strict' => true,
        ],
        self::CREATED_BY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'created_by',
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
     * @module ApiKeyAuthorizationConnector|ApiKeyGui|ApiKey
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name = null)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKeyGui|ApiKey
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKeyGui|ApiKey
     *
     * @param string $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail(string $name)
    {
        return $this->setName($name);
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKeyGui|ApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail(): string
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module ApiKeyAuthorizationConnector|ApiKeyGui|ApiKey
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
     * @module ApiKeyGui|ApiKey
     *
     * @param int|null $idApiKey
     *
     * @return $this
     */
    public function setIdApiKey(?int $idApiKey = null)
    {
        $this->idApiKey = $idApiKey;
        $this->modifiedProperties[self::ID_API_KEY] = true;

        return $this;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @return int|null
     */
    public function getIdApiKey(): ?int
    {
        return $this->idApiKey;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @param int $idApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdApiKeyOrFail(int $idApiKey)
    {
        return $this->setIdApiKey($idApiKey);
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdApiKeyOrFail(): int
    {
        if ($this->idApiKey === null) {
            $this->throwNullValueException(static::ID_API_KEY);
        }

        return $this->idApiKey;
    }

    /**
     * @module ApiKeyGui|ApiKey
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
     * @module ApiKeyGui|ApiKey
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey(?string $key = null)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @param string $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail(string $key)
    {
        return $this->setKey($key);
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail(): string
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @param string|null $validTo
     *
     * @return $this
     */
    public function setValidTo(?string $validTo = null)
    {
        $this->validTo = $validTo;
        $this->modifiedProperties[self::VALID_TO] = true;

        return $this;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @param string $validTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidToOrFail(string $validTo)
    {
        return $this->setValidTo($validTo);
    }

    /**
     * @module ApiKeyGui|ApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidToOrFail(): string
    {
        if ($this->validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->validTo;
    }

    /**
     * @module ApiKeyGui|ApiKey
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
     * @module ApiKey
     *
     * @param string|null $keyHash
     *
     * @return $this
     */
    public function setKeyHash(?string $keyHash = null)
    {
        $this->keyHash = $keyHash;
        $this->modifiedProperties[self::KEY_HASH] = true;

        return $this;
    }

    /**
     * @module ApiKey
     *
     * @return string|null
     */
    public function getKeyHash(): ?string
    {
        return $this->keyHash;
    }

    /**
     * @module ApiKey
     *
     * @param string $keyHash
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyHashOrFail(string $keyHash)
    {
        return $this->setKeyHash($keyHash);
    }

    /**
     * @module ApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyHashOrFail(): string
    {
        if ($this->keyHash === null) {
            $this->throwNullValueException(static::KEY_HASH);
        }

        return $this->keyHash;
    }

    /**
     * @module ApiKey
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
     * @module ApiKey
     *
     * @param int|null $createdBy
     *
     * @return $this
     */
    public function setCreatedBy(?int $createdBy = null)
    {
        $this->createdBy = $createdBy;
        $this->modifiedProperties[self::CREATED_BY] = true;

        return $this;
    }

    /**
     * @module ApiKey
     *
     * @return int|null
     */
    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }

    /**
     * @module ApiKey
     *
     * @param int $createdBy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedByOrFail(int $createdBy)
    {
        return $this->setCreatedBy($createdBy);
    }

    /**
     * @module ApiKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCreatedByOrFail(): int
    {
        if ($this->createdBy === null) {
            $this->throwNullValueException(static::CREATED_BY);
        }

        return $this->createdBy;
    }

    /**
     * @module ApiKey
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
                case 'name':
                case 'idApiKey':
                case 'key':
                case 'validTo':
                case 'keyHash':
                case 'createdBy':
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
                case 'name':
                case 'idApiKey':
                case 'key':
                case 'validTo':
                case 'keyHash':
                case 'createdBy':
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
                case 'name':
                case 'idApiKey':
                case 'key':
                case 'validTo':
                case 'keyHash':
                case 'createdBy':
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
            'name' => $this->name,
            'idApiKey' => $this->idApiKey,
            'key' => $this->key,
            'validTo' => $this->validTo,
            'keyHash' => $this->keyHash,
            'createdBy' => $this->createdBy,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'id_api_key' => $this->idApiKey,
            'key' => $this->key,
            'valid_to' => $this->validTo,
            'key_hash' => $this->keyHash,
            'created_by' => $this->createdBy,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_api_key' => $this->idApiKey instanceof AbstractTransfer ? $this->idApiKey->toArray(true, false) : $this->idApiKey,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'key_hash' => $this->keyHash instanceof AbstractTransfer ? $this->keyHash->toArray(true, false) : $this->keyHash,
            'created_by' => $this->createdBy instanceof AbstractTransfer ? $this->createdBy->toArray(true, false) : $this->createdBy,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idApiKey' => $this->idApiKey instanceof AbstractTransfer ? $this->idApiKey->toArray(true, true) : $this->idApiKey,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'keyHash' => $this->keyHash instanceof AbstractTransfer ? $this->keyHash->toArray(true, true) : $this->keyHash,
            'createdBy' => $this->createdBy instanceof AbstractTransfer ? $this->createdBy->toArray(true, true) : $this->createdBy,
        ];
    }
}
