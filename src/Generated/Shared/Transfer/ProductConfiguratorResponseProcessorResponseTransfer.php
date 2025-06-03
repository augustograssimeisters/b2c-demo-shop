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
class ProductConfiguratorResponseProcessorResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESSFUL = 'isSuccessful';

    /**
     * @var string
     */
    public const BACK_URL = 'backUrl';

    /**
     * @var string
     */
    public const MESSAGES = 'messages';

    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATOR_RESPONSE = 'productConfiguratorResponse';

    /**
     * @var string
     */
    public const WISHLIST_NAME = 'wishlistName';

    /**
     * @var bool|null
     */
    protected $isSuccessful;

    /**
     * @var string|null
     */
    protected $backUrl;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\MessageTransfer>
     */
    protected $messages;

    /**
     * @var \Generated\Shared\Transfer\ProductConfiguratorResponseTransfer|null
     */
    protected $productConfiguratorResponse;

    /**
     * @var string|null
     */
    protected $wishlistName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_successful' => 'isSuccessful',
        'isSuccessful' => 'isSuccessful',
        'IsSuccessful' => 'isSuccessful',
        'back_url' => 'backUrl',
        'backUrl' => 'backUrl',
        'BackUrl' => 'backUrl',
        'messages' => 'messages',
        'Messages' => 'messages',
        'product_configurator_response' => 'productConfiguratorResponse',
        'productConfiguratorResponse' => 'productConfiguratorResponse',
        'ProductConfiguratorResponse' => 'productConfiguratorResponse',
        'wishlist_name' => 'wishlistName',
        'wishlistName' => 'wishlistName',
        'WishlistName' => 'wishlistName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_SUCCESSFUL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_successful',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BACK_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'back_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGES => [
            'type' => 'Generated\Shared\Transfer\MessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'messages',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONFIGURATOR_RESPONSE => [
            'type' => 'Generated\Shared\Transfer\ProductConfiguratorResponseTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_configurator_response',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WISHLIST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'wishlist_name',
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
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param bool|null $isSuccessful
     *
     * @return $this
     */
    public function setIsSuccessful($isSuccessful)
    {
        $this->isSuccessful = $isSuccessful;
        $this->modifiedProperties[self::IS_SUCCESSFUL] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @return bool|null
     */
    public function getIsSuccessful()
    {
        return $this->isSuccessful;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param bool|null $isSuccessful
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessfulOrFail($isSuccessful)
    {
        if ($isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->setIsSuccessful($isSuccessful);
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessfulOrFail()
    {
        if ($this->isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->isSuccessful;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccessful()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESSFUL);

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage
     *
     * @param string|null $backUrl
     *
     * @return $this
     */
    public function setBackUrl($backUrl)
    {
        $this->backUrl = $backUrl;
        $this->modifiedProperties[self::BACK_URL] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage
     *
     * @return string|null
     */
    public function getBackUrl()
    {
        return $this->backUrl;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage
     *
     * @param string|null $backUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBackUrlOrFail($backUrl)
    {
        if ($backUrl === null) {
            $this->throwNullValueException(static::BACK_URL);
        }

        return $this->setBackUrl($backUrl);
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBackUrlOrFail()
    {
        if ($this->backUrl === null) {
            $this->throwNullValueException(static::BACK_URL);
        }

        return $this->backUrl;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfigurationWishlistWidget|ProductConfiguratorGatewayPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBackUrl()
    {
        $this->assertPropertyIsSet(self::BACK_URL);

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\MessageTransfer> $messages
     *
     * @return $this
     */
    public function setMessages(ArrayObject $messages)
    {
        $this->messages = $messages;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\MessageTransfer>
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\MessageTransfer $message
     *
     * @return $this
     */
    public function addMessage(MessageTransfer $message)
    {
        $this->messages[] = $message;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessages()
    {
        $this->assertCollectionPropertyIsSet(self::MESSAGES);

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\ProductConfiguratorResponseTransfer|null $productConfiguratorResponse
     *
     * @return $this
     */
    public function setProductConfiguratorResponse(ProductConfiguratorResponseTransfer $productConfiguratorResponse = null)
    {
        $this->productConfiguratorResponse = $productConfiguratorResponse;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATOR_RESPONSE] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @return \Generated\Shared\Transfer\ProductConfiguratorResponseTransfer|null
     */
    public function getProductConfiguratorResponse()
    {
        return $this->productConfiguratorResponse;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\ProductConfiguratorResponseTransfer $productConfiguratorResponse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfiguratorResponseOrFail(ProductConfiguratorResponseTransfer $productConfiguratorResponse)
    {
        return $this->setProductConfiguratorResponse($productConfiguratorResponse);
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConfiguratorResponseTransfer
     */
    public function getProductConfiguratorResponseOrFail()
    {
        if ($this->productConfiguratorResponse === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATOR_RESPONSE);
        }

        return $this->productConfiguratorResponse;
    }

    /**
     * @module ProductConfigurationCartWidget|ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationStorage|ProductConfigurationWishlist|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfiguratorResponse()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATOR_RESPONSE);

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist
     *
     * @param string|null $wishlistName
     *
     * @return $this
     */
    public function setWishlistName($wishlistName)
    {
        $this->wishlistName = $wishlistName;
        $this->modifiedProperties[self::WISHLIST_NAME] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist
     *
     * @return string|null
     */
    public function getWishlistName()
    {
        return $this->wishlistName;
    }

    /**
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist
     *
     * @param string|null $wishlistName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWishlistNameOrFail($wishlistName)
    {
        if ($wishlistName === null) {
            $this->throwNullValueException(static::WISHLIST_NAME);
        }

        return $this->setWishlistName($wishlistName);
    }

    /**
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getWishlistNameOrFail()
    {
        if ($this->wishlistName === null) {
            $this->throwNullValueException(static::WISHLIST_NAME);
        }

        return $this->wishlistName;
    }

    /**
     * @module ProductConfigurationWishlistWidget|ProductConfigurationWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWishlistName()
    {
        $this->assertPropertyIsSet(self::WISHLIST_NAME);

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
                case 'isSuccessful':
                case 'backUrl':
                case 'wishlistName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productConfiguratorResponse':
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
                case 'messages':
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
                case 'isSuccessful':
                case 'backUrl':
                case 'wishlistName':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConfiguratorResponse':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'messages':
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
                case 'isSuccessful':
                case 'backUrl':
                case 'wishlistName':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConfiguratorResponse':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'messages':
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
        $this->messages = $this->messages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful,
            'backUrl' => $this->backUrl,
            'wishlistName' => $this->wishlistName,
            'productConfiguratorResponse' => $this->productConfiguratorResponse,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful,
            'back_url' => $this->backUrl,
            'wishlist_name' => $this->wishlistName,
            'product_configurator_response' => $this->productConfiguratorResponse,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, false) : $this->isSuccessful,
            'back_url' => $this->backUrl instanceof AbstractTransfer ? $this->backUrl->toArray(true, false) : $this->backUrl,
            'wishlist_name' => $this->wishlistName instanceof AbstractTransfer ? $this->wishlistName->toArray(true, false) : $this->wishlistName,
            'product_configurator_response' => $this->productConfiguratorResponse instanceof AbstractTransfer ? $this->productConfiguratorResponse->toArray(true, false) : $this->productConfiguratorResponse,
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, false) : $this->addValuesToCollection($this->messages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, true) : $this->isSuccessful,
            'backUrl' => $this->backUrl instanceof AbstractTransfer ? $this->backUrl->toArray(true, true) : $this->backUrl,
            'wishlistName' => $this->wishlistName instanceof AbstractTransfer ? $this->wishlistName->toArray(true, true) : $this->wishlistName,
            'productConfiguratorResponse' => $this->productConfiguratorResponse instanceof AbstractTransfer ? $this->productConfiguratorResponse->toArray(true, true) : $this->productConfiguratorResponse,
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, true) : $this->addValuesToCollection($this->messages, true, true),
        ];
    }
}
