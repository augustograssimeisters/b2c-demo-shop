<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SalesShipmentResourceCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SALES_SHIPMENT_RESOURCES = 'salesShipmentResources';

    /**
     * @var string
     */
    public const SHIPMENTS = 'shipments';

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\GlueResourceTransfer>
     */
    protected $salesShipmentResources;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ShipmentTransfer>
     */
    protected $shipments;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sales_shipment_resources' => 'salesShipmentResources',
        'salesShipmentResources' => 'salesShipmentResources',
        'SalesShipmentResources' => 'salesShipmentResources',
        'shipments' => 'shipments',
        'Shipments' => 'shipments',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SALES_SHIPMENT_RESOURCES => [
            'type' => 'Generated\Shared\Transfer\GlueResourceTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_shipment_resources',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SHIPMENTS => [
            'type' => 'Generated\Shared\Transfer\ShipmentTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipments',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module ShipmentsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\GlueResourceTransfer> $salesShipmentResources
     *
     * @return $this
     */
    public function setSalesShipmentResources(ArrayObject $salesShipmentResources)
    {
        $this->salesShipmentResources = new ArrayObject();

        foreach ($salesShipmentResources as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SALES_SHIPMENT_RESOURCES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addSalesShipmentResource(...$args);
        }

        $this->modifiedProperties[self::SALES_SHIPMENT_RESOURCES] = true;

        return $this;
    }

    /**
     * @module ShipmentsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\GlueResourceTransfer>
     */
    public function getSalesShipmentResources(): ArrayObject
    {
        return $this->salesShipmentResources;
    }

    /**
     * @module ShipmentsBackendApi
     *
     * @param \Generated\Shared\Transfer\GlueResourceTransfer $salesShipmentResource
     *
     * @return $this
     */
    public function addSalesShipmentResource(GlueResourceTransfer $salesShipmentResource)
    {
        $this->salesShipmentResources[] = $salesShipmentResource;
        $this->modifiedProperties[self::SALES_SHIPMENT_RESOURCES] = true;

        return $this;
    }

    /**
     * @module ShipmentsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesShipmentResources()
    {
        $this->assertCollectionPropertyIsSet(self::SALES_SHIPMENT_RESOURCES);

        return $this;
    }

    /**
     * @module ShipmentsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ShipmentTransfer> $shipments
     *
     * @return $this
     */
    public function setShipments(ArrayObject $shipments)
    {
        $this->shipments = new ArrayObject();

        foreach ($shipments as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SHIPMENTS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addShipment(...$args);
        }

        $this->modifiedProperties[self::SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module ShipmentsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ShipmentTransfer>
     */
    public function getShipments(): ArrayObject
    {
        return $this->shipments;
    }

    /**
     * @module ShipmentsBackendApi
     *
     * @param \Generated\Shared\Transfer\ShipmentTransfer $shipment
     *
     * @return $this
     */
    public function addShipment(ShipmentTransfer $shipment)
    {
        $this->shipments[] = $shipment;
        $this->modifiedProperties[self::SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module ShipmentsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipments()
    {
        $this->assertCollectionPropertyIsSet(self::SHIPMENTS);

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
                case 'salesShipmentResources':
                case 'shipments':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'salesShipmentResources':
                case 'shipments':
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
                case 'salesShipmentResources':
                case 'shipments':
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
        $this->salesShipmentResources = $this->salesShipmentResources ?: new ArrayObject();
        $this->shipments = $this->shipments ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'salesShipmentResources' => $this->salesShipmentResources,
            'shipments' => $this->shipments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sales_shipment_resources' => $this->salesShipmentResources,
            'shipments' => $this->shipments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sales_shipment_resources' => $this->salesShipmentResources instanceof AbstractTransfer ? $this->salesShipmentResources->toArray(true, false) : $this->addValuesToCollection($this->salesShipmentResources, true, false),
            'shipments' => $this->shipments instanceof AbstractTransfer ? $this->shipments->toArray(true, false) : $this->addValuesToCollection($this->shipments, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'salesShipmentResources' => $this->salesShipmentResources instanceof AbstractTransfer ? $this->salesShipmentResources->toArray(true, true) : $this->addValuesToCollection($this->salesShipmentResources, true, true),
            'shipments' => $this->shipments instanceof AbstractTransfer ? $this->shipments->toArray(true, true) : $this->addValuesToCollection($this->shipments, true, true),
        ];
    }
}
