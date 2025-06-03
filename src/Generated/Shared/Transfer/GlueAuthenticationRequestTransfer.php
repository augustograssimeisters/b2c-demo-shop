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
class GlueAuthenticationRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const OAUTH_REQUEST = 'oauthRequest';

    /**
     * @var string
     */
    public const REQUEST_CONTEXT = 'requestContext';

    /**
     * @var \Generated\Shared\Transfer\OauthRequestTransfer|null
     */
    protected $oauthRequest;

    /**
     * @var \Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer|null
     */
    protected $requestContext;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'oauth_request' => 'oauthRequest',
        'oauthRequest' => 'oauthRequest',
        'OauthRequest' => 'oauthRequest',
        'request_context' => 'requestContext',
        'requestContext' => 'requestContext',
        'RequestContext' => 'requestContext',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::OAUTH_REQUEST => [
            'type' => 'Generated\Shared\Transfer\OauthRequestTransfer',
            'type_shim' => null,
            'name_underscore' => 'oauth_request',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUEST_CONTEXT => [
            'type' => 'Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer',
            'type_shim' => null,
            'name_underscore' => 'request_context',
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
     * @module AuthenticationOauth|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @param \Generated\Shared\Transfer\OauthRequestTransfer|null $oauthRequest
     *
     * @return $this
     */
    public function setOauthRequest(OauthRequestTransfer $oauthRequest = null)
    {
        $this->oauthRequest = $oauthRequest;
        $this->modifiedProperties[self::OAUTH_REQUEST] = true;

        return $this;
    }

    /**
     * @module AuthenticationOauth|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @return \Generated\Shared\Transfer\OauthRequestTransfer|null
     */
    public function getOauthRequest()
    {
        return $this->oauthRequest;
    }

    /**
     * @module AuthenticationOauth|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @param \Generated\Shared\Transfer\OauthRequestTransfer $oauthRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOauthRequestOrFail(OauthRequestTransfer $oauthRequest)
    {
        return $this->setOauthRequest($oauthRequest);
    }

    /**
     * @module AuthenticationOauth|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OauthRequestTransfer
     */
    public function getOauthRequestOrFail()
    {
        if ($this->oauthRequest === null) {
            $this->throwNullValueException(static::OAUTH_REQUEST);
        }

        return $this->oauthRequest;
    }

    /**
     * @module AuthenticationOauth|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOauthRequest()
    {
        $this->assertPropertyIsSet(self::OAUTH_REQUEST);

        return $this;
    }

    /**
     * @module AuthenticationOauth|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @param \Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer|null $requestContext
     *
     * @return $this
     */
    public function setRequestContext(GlueAuthenticationRequestContextTransfer $requestContext = null)
    {
        $this->requestContext = $requestContext;
        $this->modifiedProperties[self::REQUEST_CONTEXT] = true;

        return $this;
    }

    /**
     * @module AuthenticationOauth|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @return \Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer|null
     */
    public function getRequestContext()
    {
        return $this->requestContext;
    }

    /**
     * @module AuthenticationOauth|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @param \Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer $requestContext
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestContextOrFail(GlueAuthenticationRequestContextTransfer $requestContext)
    {
        return $this->setRequestContext($requestContext);
    }

    /**
     * @module AuthenticationOauth|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GlueAuthenticationRequestContextTransfer
     */
    public function getRequestContextOrFail()
    {
        if ($this->requestContext === null) {
            $this->throwNullValueException(static::REQUEST_CONTEXT);
        }

        return $this->requestContext;
    }

    /**
     * @module AuthenticationOauth|OauthApi|OauthBackendApi|WarehouseOauthBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestContext()
    {
        $this->assertPropertyIsSet(self::REQUEST_CONTEXT);

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
                case 'oauthRequest':
                case 'requestContext':
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
                case 'oauthRequest':
                case 'requestContext':
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
                case 'oauthRequest':
                case 'requestContext':
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
            'oauthRequest' => $this->oauthRequest,
            'requestContext' => $this->requestContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'oauth_request' => $this->oauthRequest,
            'request_context' => $this->requestContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'oauth_request' => $this->oauthRequest instanceof AbstractTransfer ? $this->oauthRequest->toArray(true, false) : $this->oauthRequest,
            'request_context' => $this->requestContext instanceof AbstractTransfer ? $this->requestContext->toArray(true, false) : $this->requestContext,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'oauthRequest' => $this->oauthRequest instanceof AbstractTransfer ? $this->oauthRequest->toArray(true, true) : $this->oauthRequest,
            'requestContext' => $this->requestContext instanceof AbstractTransfer ? $this->requestContext->toArray(true, true) : $this->requestContext,
        ];
    }
}
