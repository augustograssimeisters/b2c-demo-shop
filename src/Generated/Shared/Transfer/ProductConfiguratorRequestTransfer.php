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
class ProductConfiguratorRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ACCESS_TOKEN_REQUEST_URL = 'accessTokenRequestUrl';

    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATOR_REQUEST_DATA = 'productConfiguratorRequestData';

    /**
     * @var string|null
     */
    protected $accessTokenRequestUrl;

    /**
     * @var \Generated\Shared\Transfer\ProductConfiguratorRequestDataTransfer|null
     */
    protected $productConfiguratorRequestData;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'access_token_request_url' => 'accessTokenRequestUrl',
        'accessTokenRequestUrl' => 'accessTokenRequestUrl',
        'AccessTokenRequestUrl' => 'accessTokenRequestUrl',
        'product_configurator_request_data' => 'productConfiguratorRequestData',
        'productConfiguratorRequestData' => 'productConfiguratorRequestData',
        'ProductConfiguratorRequestData' => 'productConfiguratorRequestData',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ACCESS_TOKEN_REQUEST_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'access_token_request_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONFIGURATOR_REQUEST_DATA => [
            'type' => 'Generated\Shared\Transfer\ProductConfiguratorRequestDataTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_configurator_request_data',
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
     * @module DateTimeConfiguratorPageExample|ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $accessTokenRequestUrl
     *
     * @return $this
     */
    public function setAccessTokenRequestUrl($accessTokenRequestUrl)
    {
        $this->accessTokenRequestUrl = $accessTokenRequestUrl;
        $this->modifiedProperties[self::ACCESS_TOKEN_REQUEST_URL] = true;

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @return string|null
     */
    public function getAccessTokenRequestUrl()
    {
        return $this->accessTokenRequestUrl;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $accessTokenRequestUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAccessTokenRequestUrlOrFail($accessTokenRequestUrl)
    {
        if ($accessTokenRequestUrl === null) {
            $this->throwNullValueException(static::ACCESS_TOKEN_REQUEST_URL);
        }

        return $this->setAccessTokenRequestUrl($accessTokenRequestUrl);
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAccessTokenRequestUrlOrFail()
    {
        if ($this->accessTokenRequestUrl === null) {
            $this->throwNullValueException(static::ACCESS_TOKEN_REQUEST_URL);
        }

        return $this->accessTokenRequestUrl;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAccessTokenRequestUrl()
    {
        $this->assertPropertyIsSet(self::ACCESS_TOKEN_REQUEST_URL);

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\ProductConfiguratorRequestDataTransfer|null $productConfiguratorRequestData
     *
     * @return $this
     */
    public function setProductConfiguratorRequestData(ProductConfiguratorRequestDataTransfer $productConfiguratorRequestData = null)
    {
        $this->productConfiguratorRequestData = $productConfiguratorRequestData;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATOR_REQUEST_DATA] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationWishlist|ProductConfiguration
     *
     * @return \Generated\Shared\Transfer\ProductConfiguratorRequestDataTransfer|null
     */
    public function getProductConfiguratorRequestData()
    {
        return $this->productConfiguratorRequestData;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\ProductConfiguratorRequestDataTransfer $productConfiguratorRequestData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfiguratorRequestDataOrFail(ProductConfiguratorRequestDataTransfer $productConfiguratorRequestData)
    {
        return $this->setProductConfiguratorRequestData($productConfiguratorRequestData);
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationWishlist|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConfiguratorRequestDataTransfer
     */
    public function getProductConfiguratorRequestDataOrFail()
    {
        if ($this->productConfiguratorRequestData === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATOR_REQUEST_DATA);
        }

        return $this->productConfiguratorRequestData;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationWishlist|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfiguratorRequestData()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATOR_REQUEST_DATA);

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
                case 'accessTokenRequestUrl':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productConfiguratorRequestData':
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
                case 'accessTokenRequestUrl':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConfiguratorRequestData':
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
                case 'accessTokenRequestUrl':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConfiguratorRequestData':
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
            'accessTokenRequestUrl' => $this->accessTokenRequestUrl,
            'productConfiguratorRequestData' => $this->productConfiguratorRequestData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'access_token_request_url' => $this->accessTokenRequestUrl,
            'product_configurator_request_data' => $this->productConfiguratorRequestData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'access_token_request_url' => $this->accessTokenRequestUrl instanceof AbstractTransfer ? $this->accessTokenRequestUrl->toArray(true, false) : $this->accessTokenRequestUrl,
            'product_configurator_request_data' => $this->productConfiguratorRequestData instanceof AbstractTransfer ? $this->productConfiguratorRequestData->toArray(true, false) : $this->productConfiguratorRequestData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'accessTokenRequestUrl' => $this->accessTokenRequestUrl instanceof AbstractTransfer ? $this->accessTokenRequestUrl->toArray(true, true) : $this->accessTokenRequestUrl,
            'productConfiguratorRequestData' => $this->productConfiguratorRequestData instanceof AbstractTransfer ? $this->productConfiguratorRequestData->toArray(true, true) : $this->productConfiguratorRequestData,
        ];
    }
}
