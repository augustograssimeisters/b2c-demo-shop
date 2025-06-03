<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class MerchantStockAddressTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUANTITY_TO_SHIP = 'quantityToShip';

    /**
     * @var string
     */
    public const STOCK_ADDRESS = 'stockAddress';

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $quantityToShip;

    /**
     * @var \Generated\Shared\Transfer\StockAddressTransfer|null
     */
    protected $stockAddress;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quantity_to_ship' => 'quantityToShip',
        'quantityToShip' => 'quantityToShip',
        'QuantityToShip' => 'quantityToShip',
        'stock_address' => 'stockAddress',
        'stockAddress' => 'stockAddress',
        'StockAddress' => 'stockAddress',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUANTITY_TO_SHIP => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'quantity_to_ship',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STOCK_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\StockAddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'stock_address',
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
     * @module TaxApp
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $quantityToShip
     *
     * @return $this
     */
    public function setQuantityToShip($quantityToShip = null)
    {
        if ($quantityToShip !== null && !$quantityToShip instanceof Decimal) {
            $quantityToShip = new Decimal($quantityToShip);
        }

        $this->quantityToShip = $quantityToShip;
        $this->modifiedProperties[self::QUANTITY_TO_SHIP] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getQuantityToShip()
    {
        return $this->quantityToShip;
    }

    /**
     * @module TaxApp
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $quantityToShip
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityToShipOrFail($quantityToShip)
    {
        if ($quantityToShip === null) {
            $this->throwNullValueException(static::QUANTITY_TO_SHIP);
        }

        return $this->setQuantityToShip($quantityToShip);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getQuantityToShipOrFail()
    {
        if ($this->quantityToShip === null) {
            $this->throwNullValueException(static::QUANTITY_TO_SHIP);
        }

        return $this->quantityToShip;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantityToShip()
    {
        $this->assertPropertyIsSet(self::QUANTITY_TO_SHIP);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\StockAddressTransfer|null $stockAddress
     *
     * @return $this
     */
    public function setStockAddress(StockAddressTransfer $stockAddress = null)
    {
        $this->stockAddress = $stockAddress;
        $this->modifiedProperties[self::STOCK_ADDRESS] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \Generated\Shared\Transfer\StockAddressTransfer|null
     */
    public function getStockAddress()
    {
        return $this->stockAddress;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\StockAddressTransfer $stockAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStockAddressOrFail(StockAddressTransfer $stockAddress)
    {
        return $this->setStockAddress($stockAddress);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StockAddressTransfer
     */
    public function getStockAddressOrFail()
    {
        if ($this->stockAddress === null) {
            $this->throwNullValueException(static::STOCK_ADDRESS);
        }

        return $this->stockAddress;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStockAddress()
    {
        $this->assertPropertyIsSet(self::STOCK_ADDRESS);

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
                case 'stockAddress':
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
                case 'quantityToShip':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'stockAddress':
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
                case 'stockAddress':
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
            'stockAddress' => $this->stockAddress,
            'quantityToShip' => $this->quantityToShip,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'stock_address' => $this->stockAddress,
            'quantity_to_ship' => $this->quantityToShip,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'stock_address' => $this->stockAddress instanceof AbstractTransfer ? $this->stockAddress->toArray(true, false) : $this->stockAddress,
            'quantity_to_ship' => $this->quantityToShip,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'stockAddress' => $this->stockAddress instanceof AbstractTransfer ? $this->stockAddress->toArray(true, true) : $this->stockAddress,
            'quantityToShip' => $this->quantityToShip,
        ];
    }
}
