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
class OrderMatrixTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PROCESS_NAME = 'processName';

    /**
     * @var string
     */
    public const STATE_NAME = 'stateName';

    /**
     * @var string
     */
    public const ITEMS_COUNT = 'itemsCount';

    /**
     * @var string
     */
    public const DATE_WINDOW = 'dateWindow';

    /**
     * @var string
     */
    public const ID_PROCESS = 'idProcess';

    /**
     * @var string
     */
    public const ID_STATE = 'idState';

    /**
     * @var string|null
     */
    protected $processName;

    /**
     * @var string|null
     */
    protected $stateName;

    /**
     * @var int|null
     */
    protected $itemsCount;

    /**
     * @var string|null
     */
    protected $dateWindow;

    /**
     * @var int|null
     */
    protected $idProcess;

    /**
     * @var int|null
     */
    protected $idState;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'process_name' => 'processName',
        'processName' => 'processName',
        'ProcessName' => 'processName',
        'state_name' => 'stateName',
        'stateName' => 'stateName',
        'StateName' => 'stateName',
        'items_count' => 'itemsCount',
        'itemsCount' => 'itemsCount',
        'ItemsCount' => 'itemsCount',
        'date_window' => 'dateWindow',
        'dateWindow' => 'dateWindow',
        'DateWindow' => 'dateWindow',
        'id_process' => 'idProcess',
        'idProcess' => 'idProcess',
        'IdProcess' => 'idProcess',
        'id_state' => 'idState',
        'idState' => 'idState',
        'IdState' => 'idState',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PROCESS_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'process_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::STATE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'state_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ITEMS_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'items_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::DATE_WINDOW => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'date_window',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ID_PROCESS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_process',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ID_STATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_state',
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
     * @module Oms|OrderMatrix
     *
     * @param string|null $processName
     *
     * @return $this
     */
    public function setProcessName(?string $processName = null)
    {
        $this->processName = $processName;
        $this->modifiedProperties[self::PROCESS_NAME] = true;

        return $this;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @return string|null
     */
    public function getProcessName(): ?string
    {
        return $this->processName;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @param string $processName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProcessNameOrFail(string $processName)
    {
        return $this->setProcessName($processName);
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProcessNameOrFail(): string
    {
        if ($this->processName === null) {
            $this->throwNullValueException(static::PROCESS_NAME);
        }

        return $this->processName;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProcessName()
    {
        $this->assertPropertyIsSet(self::PROCESS_NAME);

        return $this;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @param string|null $stateName
     *
     * @return $this
     */
    public function setStateName(?string $stateName = null)
    {
        $this->stateName = $stateName;
        $this->modifiedProperties[self::STATE_NAME] = true;

        return $this;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @return string|null
     */
    public function getStateName(): ?string
    {
        return $this->stateName;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @param string $stateName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStateNameOrFail(string $stateName)
    {
        return $this->setStateName($stateName);
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStateNameOrFail(): string
    {
        if ($this->stateName === null) {
            $this->throwNullValueException(static::STATE_NAME);
        }

        return $this->stateName;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStateName()
    {
        $this->assertPropertyIsSet(self::STATE_NAME);

        return $this;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @param int|null $itemsCount
     *
     * @return $this
     */
    public function setItemsCount(?int $itemsCount = null)
    {
        $this->itemsCount = $itemsCount;
        $this->modifiedProperties[self::ITEMS_COUNT] = true;

        return $this;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @return int|null
     */
    public function getItemsCount(): ?int
    {
        return $this->itemsCount;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @param int $itemsCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemsCountOrFail(int $itemsCount)
    {
        return $this->setItemsCount($itemsCount);
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getItemsCountOrFail(): int
    {
        if ($this->itemsCount === null) {
            $this->throwNullValueException(static::ITEMS_COUNT);
        }

        return $this->itemsCount;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemsCount()
    {
        $this->assertPropertyIsSet(self::ITEMS_COUNT);

        return $this;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @param string|null $dateWindow
     *
     * @return $this
     */
    public function setDateWindow(?string $dateWindow = null)
    {
        $this->dateWindow = $dateWindow;
        $this->modifiedProperties[self::DATE_WINDOW] = true;

        return $this;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @return string|null
     */
    public function getDateWindow(): ?string
    {
        return $this->dateWindow;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @param string $dateWindow
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDateWindowOrFail(string $dateWindow)
    {
        return $this->setDateWindow($dateWindow);
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDateWindowOrFail(): string
    {
        if ($this->dateWindow === null) {
            $this->throwNullValueException(static::DATE_WINDOW);
        }

        return $this->dateWindow;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDateWindow()
    {
        $this->assertPropertyIsSet(self::DATE_WINDOW);

        return $this;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @param int|null $idProcess
     *
     * @return $this
     */
    public function setIdProcess(?int $idProcess = null)
    {
        $this->idProcess = $idProcess;
        $this->modifiedProperties[self::ID_PROCESS] = true;

        return $this;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @return int|null
     */
    public function getIdProcess(): ?int
    {
        return $this->idProcess;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @param int $idProcess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProcessOrFail(int $idProcess)
    {
        return $this->setIdProcess($idProcess);
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProcessOrFail(): int
    {
        if ($this->idProcess === null) {
            $this->throwNullValueException(static::ID_PROCESS);
        }

        return $this->idProcess;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProcess()
    {
        $this->assertPropertyIsSet(self::ID_PROCESS);

        return $this;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @param int|null $idState
     *
     * @return $this
     */
    public function setIdState(?int $idState = null)
    {
        $this->idState = $idState;
        $this->modifiedProperties[self::ID_STATE] = true;

        return $this;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @return int|null
     */
    public function getIdState(): ?int
    {
        return $this->idState;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @param int $idState
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStateOrFail(int $idState)
    {
        return $this->setIdState($idState);
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdStateOrFail(): int
    {
        if ($this->idState === null) {
            $this->throwNullValueException(static::ID_STATE);
        }

        return $this->idState;
    }

    /**
     * @module Oms|OrderMatrix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdState()
    {
        $this->assertPropertyIsSet(self::ID_STATE);

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
                case 'processName':
                case 'stateName':
                case 'itemsCount':
                case 'dateWindow':
                case 'idProcess':
                case 'idState':
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
                case 'processName':
                case 'stateName':
                case 'itemsCount':
                case 'dateWindow':
                case 'idProcess':
                case 'idState':
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
                case 'processName':
                case 'stateName':
                case 'itemsCount':
                case 'dateWindow':
                case 'idProcess':
                case 'idState':
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
            'processName' => $this->processName,
            'stateName' => $this->stateName,
            'itemsCount' => $this->itemsCount,
            'dateWindow' => $this->dateWindow,
            'idProcess' => $this->idProcess,
            'idState' => $this->idState,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'process_name' => $this->processName,
            'state_name' => $this->stateName,
            'items_count' => $this->itemsCount,
            'date_window' => $this->dateWindow,
            'id_process' => $this->idProcess,
            'id_state' => $this->idState,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'process_name' => $this->processName instanceof AbstractTransfer ? $this->processName->toArray(true, false) : $this->processName,
            'state_name' => $this->stateName instanceof AbstractTransfer ? $this->stateName->toArray(true, false) : $this->stateName,
            'items_count' => $this->itemsCount instanceof AbstractTransfer ? $this->itemsCount->toArray(true, false) : $this->itemsCount,
            'date_window' => $this->dateWindow instanceof AbstractTransfer ? $this->dateWindow->toArray(true, false) : $this->dateWindow,
            'id_process' => $this->idProcess instanceof AbstractTransfer ? $this->idProcess->toArray(true, false) : $this->idProcess,
            'id_state' => $this->idState instanceof AbstractTransfer ? $this->idState->toArray(true, false) : $this->idState,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'processName' => $this->processName instanceof AbstractTransfer ? $this->processName->toArray(true, true) : $this->processName,
            'stateName' => $this->stateName instanceof AbstractTransfer ? $this->stateName->toArray(true, true) : $this->stateName,
            'itemsCount' => $this->itemsCount instanceof AbstractTransfer ? $this->itemsCount->toArray(true, true) : $this->itemsCount,
            'dateWindow' => $this->dateWindow instanceof AbstractTransfer ? $this->dateWindow->toArray(true, true) : $this->dateWindow,
            'idProcess' => $this->idProcess instanceof AbstractTransfer ? $this->idProcess->toArray(true, true) : $this->idProcess,
            'idState' => $this->idState instanceof AbstractTransfer ? $this->idState->toArray(true, true) : $this->idState,
        ];
    }
}
