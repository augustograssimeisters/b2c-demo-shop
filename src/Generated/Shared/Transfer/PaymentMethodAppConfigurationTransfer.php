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
class PaymentMethodAppConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const BASE_URL = 'baseUrl';

    /**
     * @var string
     */
    public const ENDPOINTS = 'endpoints';

    /**
     * @var string
     */
    public const CHECKOUT_CONFIGURATION = 'checkoutConfiguration';

    /**
     * @var string|null
     */
    protected $baseUrl;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\EndpointTransfer>
     */
    protected $endpoints;

    /**
     * @var \Generated\Shared\Transfer\CheckoutConfigurationTransfer|null
     */
    protected $checkoutConfiguration;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'base_url' => 'baseUrl',
        'baseUrl' => 'baseUrl',
        'BaseUrl' => 'baseUrl',
        'endpoints' => 'endpoints',
        'Endpoints' => 'endpoints',
        'checkout_configuration' => 'checkoutConfiguration',
        'checkoutConfiguration' => 'checkoutConfiguration',
        'CheckoutConfiguration' => 'checkoutConfiguration',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::BASE_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'base_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ENDPOINTS => [
            'type' => 'Generated\Shared\Transfer\EndpointTransfer',
            'type_shim' => null,
            'name_underscore' => 'endpoints',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CHECKOUT_CONFIGURATION => [
            'type' => 'Generated\Shared\Transfer\CheckoutConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'checkout_configuration',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module Payment
     *
     * @param string|null $baseUrl
     *
     * @return $this
     */
    public function setBaseUrl(?string $baseUrl = null)
    {
        $this->baseUrl = $baseUrl;
        $this->modifiedProperties[self::BASE_URL] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return string|null
     */
    public function getBaseUrl(): ?string
    {
        return $this->baseUrl;
    }

    /**
     * @module Payment
     *
     * @param string $baseUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBaseUrlOrFail(string $baseUrl)
    {
        return $this->setBaseUrl($baseUrl);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBaseUrlOrFail(): string
    {
        if ($this->baseUrl === null) {
            $this->throwNullValueException(static::BASE_URL);
        }

        return $this->baseUrl;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBaseUrl()
    {
        $this->assertPropertyIsSet(self::BASE_URL);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\EndpointTransfer> $endpoints
     *
     * @return $this
     */
    public function setEndpoints(ArrayObject $endpoints)
    {
        $this->endpoints = new ArrayObject();

        foreach ($endpoints as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::ENDPOINTS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addEndpoint(...$args);
        }

        $this->modifiedProperties[self::ENDPOINTS] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\EndpointTransfer>
     */
    public function getEndpoints(): ArrayObject
    {
        return $this->endpoints;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\EndpointTransfer $endpoint
     *
     * @return $this
     */
    public function addEndpoint(EndpointTransfer $endpoint)
    {
        $this->endpoints[] = $endpoint;
        $this->modifiedProperties[self::ENDPOINTS] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEndpoints()
    {
        $this->assertCollectionPropertyIsSet(self::ENDPOINTS);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\CheckoutConfigurationTransfer|null $checkoutConfiguration
     *
     * @return $this
     */
    public function setCheckoutConfiguration(?CheckoutConfigurationTransfer $checkoutConfiguration = null)
    {
        $this->checkoutConfiguration = $checkoutConfiguration;
        $this->modifiedProperties[self::CHECKOUT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return \Generated\Shared\Transfer\CheckoutConfigurationTransfer|null
     */
    public function getCheckoutConfiguration(): ?CheckoutConfigurationTransfer
    {
        return $this->checkoutConfiguration;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\CheckoutConfigurationTransfer $checkoutConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCheckoutConfigurationOrFail(CheckoutConfigurationTransfer $checkoutConfiguration)
    {
        return $this->setCheckoutConfiguration($checkoutConfiguration);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CheckoutConfigurationTransfer
     */
    public function getCheckoutConfigurationOrFail(): CheckoutConfigurationTransfer
    {
        if ($this->checkoutConfiguration === null) {
            $this->throwNullValueException(static::CHECKOUT_CONFIGURATION);
        }

        return $this->checkoutConfiguration;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCheckoutConfiguration()
    {
        $this->assertPropertyIsSet(self::CHECKOUT_CONFIGURATION);

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
                case 'baseUrl':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'checkoutConfiguration':
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
                case 'endpoints':
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
                case 'baseUrl':
                    $values[$arrayKey] = $value;

                    break;
                case 'checkoutConfiguration':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'endpoints':
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
                case 'baseUrl':
                    $values[$arrayKey] = $value;

                    break;
                case 'checkoutConfiguration':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'endpoints':
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
        $this->endpoints = $this->endpoints ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'baseUrl' => $this->baseUrl,
            'checkoutConfiguration' => $this->checkoutConfiguration,
            'endpoints' => $this->endpoints,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'base_url' => $this->baseUrl,
            'checkout_configuration' => $this->checkoutConfiguration,
            'endpoints' => $this->endpoints,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'base_url' => $this->baseUrl instanceof AbstractTransfer ? $this->baseUrl->toArray(true, false) : $this->baseUrl,
            'checkout_configuration' => $this->checkoutConfiguration instanceof AbstractTransfer ? $this->checkoutConfiguration->toArray(true, false) : $this->checkoutConfiguration,
            'endpoints' => $this->endpoints instanceof AbstractTransfer ? $this->endpoints->toArray(true, false) : $this->addValuesToCollection($this->endpoints, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'baseUrl' => $this->baseUrl instanceof AbstractTransfer ? $this->baseUrl->toArray(true, true) : $this->baseUrl,
            'checkoutConfiguration' => $this->checkoutConfiguration instanceof AbstractTransfer ? $this->checkoutConfiguration->toArray(true, true) : $this->checkoutConfiguration,
            'endpoints' => $this->endpoints instanceof AbstractTransfer ? $this->endpoints->toArray(true, true) : $this->addValuesToCollection($this->endpoints, true, true),
        ];
    }
}
