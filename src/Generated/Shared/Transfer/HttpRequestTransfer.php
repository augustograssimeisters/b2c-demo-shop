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
class HttpRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const BODY = 'body';

    /**
     * @var string
     */
    public const REQUEST_URI = 'requestUri';

    /**
     * @var string
     */
    public const HEADERS = 'headers';

    /**
     * @var string|null
     */
    protected $body;

    /**
     * @var string|null
     */
    protected $requestUri;

    /**
     * @var array
     */
    protected $headers = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'body' => 'body',
        'Body' => 'body',
        'request_uri' => 'requestUri',
        'requestUri' => 'requestUri',
        'RequestUri' => 'requestUri',
        'headers' => 'headers',
        'Headers' => 'headers',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::BODY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'body',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUEST_URI => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'request_uri',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HEADERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'headers',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module MessageBrokerAws
     *
     * @param string|null $body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;
        $this->modifiedProperties[self::BODY] = true;

        return $this;
    }

    /**
     * @module MessageBrokerAws
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @module MessageBrokerAws
     *
     * @param string|null $body
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBodyOrFail($body)
    {
        if ($body === null) {
            $this->throwNullValueException(static::BODY);
        }

        return $this->setBody($body);
    }

    /**
     * @module MessageBrokerAws
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBodyOrFail()
    {
        if ($this->body === null) {
            $this->throwNullValueException(static::BODY);
        }

        return $this->body;
    }

    /**
     * @module MessageBrokerAws
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBody()
    {
        $this->assertPropertyIsSet(self::BODY);

        return $this;
    }

    /**
     * @module MessageBrokerAws
     *
     * @param string|null $requestUri
     *
     * @return $this
     */
    public function setRequestUri($requestUri)
    {
        $this->requestUri = $requestUri;
        $this->modifiedProperties[self::REQUEST_URI] = true;

        return $this;
    }

    /**
     * @module MessageBrokerAws
     *
     * @return string|null
     */
    public function getRequestUri()
    {
        return $this->requestUri;
    }

    /**
     * @module MessageBrokerAws
     *
     * @param string|null $requestUri
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestUriOrFail($requestUri)
    {
        if ($requestUri === null) {
            $this->throwNullValueException(static::REQUEST_URI);
        }

        return $this->setRequestUri($requestUri);
    }

    /**
     * @module MessageBrokerAws
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRequestUriOrFail()
    {
        if ($this->requestUri === null) {
            $this->throwNullValueException(static::REQUEST_URI);
        }

        return $this->requestUri;
    }

    /**
     * @module MessageBrokerAws
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestUri()
    {
        $this->assertPropertyIsSet(self::REQUEST_URI);

        return $this;
    }

    /**
     * @module MessageBrokerAws|OauthClient|SecuritySystemUser|SessionRedis
     *
     * @param array $headers
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        if ($headers === null) {
            $headers = [];
        }

        $this->headers = $headers;
        $this->modifiedProperties[self::HEADERS] = true;

        return $this;
    }

    /**
     * @module MessageBrokerAws|OauthClient|SecuritySystemUser|SessionRedis
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @module MessageBrokerAws|OauthClient|SecuritySystemUser|SessionRedis
     *
     * @param string|int $headerKey
     * @param mixed $headerValue
     *
     * @return $this
     */
    public function addHeader($headerKey, $headerValue)
    {
        $this->headers[$headerKey] = $headerValue;
        $this->modifiedProperties[self::HEADERS] = true;

        return $this;
    }

    /**
     * @module MessageBrokerAws|OauthClient|SecuritySystemUser|SessionRedis
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHeaders()
    {
        $this->assertPropertyIsSet(self::HEADERS);

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
                case 'body':
                case 'requestUri':
                case 'headers':
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
                case 'body':
                case 'requestUri':
                case 'headers':
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
                case 'body':
                case 'requestUri':
                case 'headers':
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
            'body' => $this->body,
            'requestUri' => $this->requestUri,
            'headers' => $this->headers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'body' => $this->body,
            'request_uri' => $this->requestUri,
            'headers' => $this->headers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'body' => $this->body instanceof AbstractTransfer ? $this->body->toArray(true, false) : $this->body,
            'request_uri' => $this->requestUri instanceof AbstractTransfer ? $this->requestUri->toArray(true, false) : $this->requestUri,
            'headers' => $this->headers instanceof AbstractTransfer ? $this->headers->toArray(true, false) : $this->headers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'body' => $this->body instanceof AbstractTransfer ? $this->body->toArray(true, true) : $this->body,
            'requestUri' => $this->requestUri instanceof AbstractTransfer ? $this->requestUri->toArray(true, true) : $this->requestUri,
            'headers' => $this->headers instanceof AbstractTransfer ? $this->headers->toArray(true, true) : $this->headers,
        ];
    }
}
