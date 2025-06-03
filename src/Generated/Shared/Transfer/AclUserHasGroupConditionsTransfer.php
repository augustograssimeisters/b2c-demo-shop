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
class AclUserHasGroupConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const USER_IDS = 'userIds';

    /**
     * @var string
     */
    public const GROUP_NAMES = 'groupNames';

    /**
     * @var int[]
     */
    protected $userIds = [];

    /**
     * @var string[]
     */
    protected $groupNames = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'user_ids' => 'userIds',
        'userIds' => 'userIds',
        'UserIds' => 'userIds',
        'group_names' => 'groupNames',
        'groupNames' => 'groupNames',
        'GroupNames' => 'groupNames',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::USER_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'user_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::GROUP_NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'group_names',
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
     * @module Acl
     *
     * @param int[]|null $userIds
     *
     * @return $this
     */
    public function setUserIds(array $userIds = null)
    {
        if ($userIds === null) {
            $userIds = [];
        }

        $this->userIds = [];

        foreach ($userIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::USER_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdUser(...$args);
        }

        $this->modifiedProperties[self::USER_IDS] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @return int[]
     */
    public function getUserIds(): array
    {
        return $this->userIds;
    }

    /**
     * @module Acl
     *
     * @param int $idUser
     *
     * @return $this
     */
    public function addIdUser(int $idUser)
    {
        $this->userIds[] = $idUser;
        $this->modifiedProperties[self::USER_IDS] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUserIds()
    {
        $this->assertPropertyIsSet(self::USER_IDS);

        return $this;
    }

    /**
     * @module Acl
     *
     * @param string[]|null $groupNames
     *
     * @return $this
     */
    public function setGroupNames(array $groupNames = null)
    {
        if ($groupNames === null) {
            $groupNames = [];
        }

        $this->groupNames = [];

        foreach ($groupNames as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::GROUP_NAMES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addGroupName(...$args);
        }

        $this->modifiedProperties[self::GROUP_NAMES] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @return string[]
     */
    public function getGroupNames(): array
    {
        return $this->groupNames;
    }

    /**
     * @module Acl
     *
     * @param string $groupName
     *
     * @return $this
     */
    public function addGroupName(string $groupName)
    {
        $this->groupNames[] = $groupName;
        $this->modifiedProperties[self::GROUP_NAMES] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupNames()
    {
        $this->assertPropertyIsSet(self::GROUP_NAMES);

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
                case 'userIds':
                case 'groupNames':
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
                case 'userIds':
                case 'groupNames':
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
                case 'userIds':
                case 'groupNames':
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
            'userIds' => $this->userIds,
            'groupNames' => $this->groupNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'user_ids' => $this->userIds,
            'group_names' => $this->groupNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'user_ids' => $this->userIds instanceof AbstractTransfer ? $this->userIds->toArray(true, false) : $this->userIds,
            'group_names' => $this->groupNames instanceof AbstractTransfer ? $this->groupNames->toArray(true, false) : $this->groupNames,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'userIds' => $this->userIds instanceof AbstractTransfer ? $this->userIds->toArray(true, true) : $this->userIds,
            'groupNames' => $this->groupNames instanceof AbstractTransfer ? $this->groupNames->toArray(true, true) : $this->groupNames,
        ];
    }
}
