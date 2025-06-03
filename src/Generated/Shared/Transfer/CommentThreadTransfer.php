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
class CommentThreadTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_COMMENT_THREAD = 'idCommentThread';

    /**
     * @var string
     */
    public const OWNER_TYPE = 'ownerType';

    /**
     * @var int|null
     */
    protected $idCommentThread;

    /**
     * @var string|null
     */
    protected $ownerType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_comment_thread' => 'idCommentThread',
        'idCommentThread' => 'idCommentThread',
        'IdCommentThread' => 'idCommentThread',
        'owner_type' => 'ownerType',
        'ownerType' => 'ownerType',
        'OwnerType' => 'ownerType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMMENT_THREAD => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_comment_thread',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OWNER_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'owner_type',
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
     * @module CartPage|CheckoutPage|CustomerPage
     *
     * @param int|null $idCommentThread
     *
     * @return $this
     */
    public function setIdCommentThread($idCommentThread)
    {
        $this->idCommentThread = $idCommentThread;
        $this->modifiedProperties[self::ID_COMMENT_THREAD] = true;

        return $this;
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage
     *
     * @return int|null
     */
    public function getIdCommentThread()
    {
        return $this->idCommentThread;
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage
     *
     * @param int|null $idCommentThread
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCommentThreadOrFail($idCommentThread)
    {
        if ($idCommentThread === null) {
            $this->throwNullValueException(static::ID_COMMENT_THREAD);
        }

        return $this->setIdCommentThread($idCommentThread);
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCommentThreadOrFail()
    {
        if ($this->idCommentThread === null) {
            $this->throwNullValueException(static::ID_COMMENT_THREAD);
        }

        return $this->idCommentThread;
    }

    /**
     * @module CartPage|CheckoutPage|CustomerPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCommentThread()
    {
        $this->assertPropertyIsSet(self::ID_COMMENT_THREAD);

        return $this;
    }

    /**
     * @module CartPage
     *
     * @param string|null $ownerType
     *
     * @return $this
     */
    public function setOwnerType($ownerType)
    {
        $this->ownerType = $ownerType;
        $this->modifiedProperties[self::OWNER_TYPE] = true;

        return $this;
    }

    /**
     * @module CartPage
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->ownerType;
    }

    /**
     * @module CartPage
     *
     * @param string|null $ownerType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOwnerTypeOrFail($ownerType)
    {
        if ($ownerType === null) {
            $this->throwNullValueException(static::OWNER_TYPE);
        }

        return $this->setOwnerType($ownerType);
    }

    /**
     * @module CartPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOwnerTypeOrFail()
    {
        if ($this->ownerType === null) {
            $this->throwNullValueException(static::OWNER_TYPE);
        }

        return $this->ownerType;
    }

    /**
     * @module CartPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOwnerType()
    {
        $this->assertPropertyIsSet(self::OWNER_TYPE);

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
                case 'idCommentThread':
                case 'ownerType':
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
                case 'idCommentThread':
                case 'ownerType':
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
                case 'idCommentThread':
                case 'ownerType':
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
            'idCommentThread' => $this->idCommentThread,
            'ownerType' => $this->ownerType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_comment_thread' => $this->idCommentThread,
            'owner_type' => $this->ownerType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_comment_thread' => $this->idCommentThread instanceof AbstractTransfer ? $this->idCommentThread->toArray(true, false) : $this->idCommentThread,
            'owner_type' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, false) : $this->ownerType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCommentThread' => $this->idCommentThread instanceof AbstractTransfer ? $this->idCommentThread->toArray(true, true) : $this->idCommentThread,
            'ownerType' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, true) : $this->ownerType,
        ];
    }
}
