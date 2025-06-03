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
class ProductConfigurationInstanceCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_INSTANCE_CONDITIONS = 'productConfigurationInstanceConditions';

    /**
     * @var \Generated\Shared\Transfer\ProductConfigurationInstanceConditionsTransfer|null
     */
    protected $productConfigurationInstanceConditions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_configuration_instance_conditions' => 'productConfigurationInstanceConditions',
        'productConfigurationInstanceConditions' => 'productConfigurationInstanceConditions',
        'ProductConfigurationInstanceConditions' => 'productConfigurationInstanceConditions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_CONFIGURATION_INSTANCE_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\ProductConfigurationInstanceConditionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_configuration_instance_conditions',
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
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationsRestApi
     *
     * @param \Generated\Shared\Transfer\ProductConfigurationInstanceConditionsTransfer|null $productConfigurationInstanceConditions
     *
     * @return $this
     */
    public function setProductConfigurationInstanceConditions(ProductConfigurationInstanceConditionsTransfer $productConfigurationInstanceConditions = null)
    {
        $this->productConfigurationInstanceConditions = $productConfigurationInstanceConditions;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_INSTANCE_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationsRestApi
     *
     * @return \Generated\Shared\Transfer\ProductConfigurationInstanceConditionsTransfer|null
     */
    public function getProductConfigurationInstanceConditions()
    {
        return $this->productConfigurationInstanceConditions;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationsRestApi
     *
     * @param \Generated\Shared\Transfer\ProductConfigurationInstanceConditionsTransfer $productConfigurationInstanceConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfigurationInstanceConditionsOrFail(ProductConfigurationInstanceConditionsTransfer $productConfigurationInstanceConditions)
    {
        return $this->setProductConfigurationInstanceConditions($productConfigurationInstanceConditions);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConfigurationInstanceConditionsTransfer
     */
    public function getProductConfigurationInstanceConditionsOrFail()
    {
        if ($this->productConfigurationInstanceConditions === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_INSTANCE_CONDITIONS);
        }

        return $this->productConfigurationInstanceConditions;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationPersistentCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfigurationsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfigurationInstanceConditions()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATION_INSTANCE_CONDITIONS);

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
                case 'productConfigurationInstanceConditions':
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
                case 'productConfigurationInstanceConditions':
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
                case 'productConfigurationInstanceConditions':
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
            'productConfigurationInstanceConditions' => $this->productConfigurationInstanceConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_configuration_instance_conditions' => $this->productConfigurationInstanceConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_configuration_instance_conditions' => $this->productConfigurationInstanceConditions instanceof AbstractTransfer ? $this->productConfigurationInstanceConditions->toArray(true, false) : $this->productConfigurationInstanceConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productConfigurationInstanceConditions' => $this->productConfigurationInstanceConditions instanceof AbstractTransfer ? $this->productConfigurationInstanceConditions->toArray(true, true) : $this->productConfigurationInstanceConditions,
        ];
    }
}
