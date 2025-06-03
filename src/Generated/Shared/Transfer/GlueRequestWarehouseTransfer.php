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
class GlueRequestWarehouseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_WAREHOUSE = 'idWarehouse';

    /**
     * @var string
     */
    public const SCOPES = 'scopes';

    /**
     * @var int|null
     */
    protected $idWarehouse;

    /**
     * @var string[]
     */
    protected $scopes = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_warehouse' => 'idWarehouse',
        'idWarehouse' => 'idWarehouse',
        'IdWarehouse' => 'idWarehouse',
        'scopes' => 'scopes',
        'Scopes' => 'scopes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_WAREHOUSE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_warehouse',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SCOPES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'scopes',
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
     * @module OauthWarehouse|PickingListsBackendApi|WarehouseOauthBackendApi
     *
     * @param int|null $idWarehouse
     *
     * @return $this
     */
    public function setIdWarehouse(?int $idWarehouse = null)
    {
        $this->idWarehouse = $idWarehouse;
        $this->modifiedProperties[self::ID_WAREHOUSE] = true;

        return $this;
    }

    /**
     * @module OauthWarehouse|PickingListsBackendApi|WarehouseOauthBackendApi
     *
     * @return int|null
     */
    public function getIdWarehouse(): ?int
    {
        return $this->idWarehouse;
    }

    /**
     * @module OauthWarehouse|PickingListsBackendApi|WarehouseOauthBackendApi
     *
     * @param int $idWarehouse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdWarehouseOrFail(int $idWarehouse)
    {
        return $this->setIdWarehouse($idWarehouse);
    }

    /**
     * @module OauthWarehouse|PickingListsBackendApi|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdWarehouseOrFail(): int
    {
        if ($this->idWarehouse === null) {
            $this->throwNullValueException(static::ID_WAREHOUSE);
        }

        return $this->idWarehouse;
    }

    /**
     * @module OauthWarehouse|PickingListsBackendApi|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdWarehouse()
    {
        $this->assertPropertyIsSet(self::ID_WAREHOUSE);

        return $this;
    }

    /**
     * @module WarehouseOauthBackendApi
     *
     * @param string[]|null $scopes
     *
     * @return $this
     */
    public function setScopes(array $scopes = null)
    {
        if ($scopes === null) {
            $scopes = [];
        }

        $this->scopes = [];

        foreach ($scopes as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SCOPES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addScope(...$args);
        }

        $this->modifiedProperties[self::SCOPES] = true;

        return $this;
    }

    /**
     * @module WarehouseOauthBackendApi
     *
     * @return string[]
     */
    public function getScopes(): array
    {
        return $this->scopes;
    }

    /**
     * @module WarehouseOauthBackendApi
     *
     * @param string $scope
     *
     * @return $this
     */
    public function addScope(string $scope)
    {
        $this->scopes[] = $scope;
        $this->modifiedProperties[self::SCOPES] = true;

        return $this;
    }

    /**
     * @module WarehouseOauthBackendApi
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
                case 'idWarehouse':
                case 'scopes':
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
                case 'idWarehouse':
                case 'scopes':
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
                case 'idWarehouse':
                case 'scopes':
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
            'idWarehouse' => $this->idWarehouse,
            'scopes' => $this->scopes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_warehouse' => $this->idWarehouse,
            'scopes' => $this->scopes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_warehouse' => $this->idWarehouse instanceof AbstractTransfer ? $this->idWarehouse->toArray(true, false) : $this->idWarehouse,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, false) : $this->scopes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idWarehouse' => $this->idWarehouse instanceof AbstractTransfer ? $this->idWarehouse->toArray(true, true) : $this->idWarehouse,
            'scopes' => $this->scopes instanceof AbstractTransfer ? $this->scopes->toArray(true, true) : $this->scopes,
        ];
    }
}
