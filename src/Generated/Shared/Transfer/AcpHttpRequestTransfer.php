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
class AcpHttpRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const METHOD = 'method';

    /**
     * @var string
     */
    public const URI = 'uri';

    /**
     * @var string
     */
    public const HEADERS = 'headers';

    /**
     * @var string
     */
    public const BODY = 'body';

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var string|null
     */
    protected $uri;

    /**
     * @var array
     */
    protected $headers = [];

    /**
     * @var string|null
     */
    protected $body;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'method' => 'method',
        'Method' => 'method',
        'uri' => 'uri',
        'Uri' => 'uri',
        'headers' => 'headers',
        'Headers' => 'headers',
        'body' => 'body',
        'Body' => 'body',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::METHOD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::URI => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uri',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
            'is_strict' => true,
        ],
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
            'is_strict' => true,
        ],
    ];

    /**
     * @module KernelApp|Payment
     *
     * @param string|null $method
     *
     * @return $this
     */
    public function setMethod(?string $method = null)
    {
        $this->method = $method;
        $this->modifiedProperties[self::METHOD] = true;

        return $this;
    }

    /**
     * @module KernelApp|Payment
     *
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @module KernelApp|Payment
     *
     * @param string $method
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMethodOrFail(string $method)
    {
        return $this->setMethod($method);
    }

    /**
     * @module KernelApp|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMethodOrFail(): string
    {
        if ($this->method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->method;
    }

    /**
     * @module KernelApp|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethod()
    {
        $this->assertPropertyIsSet(self::METHOD);

        return $this;
    }

    /**
     * @module KernelApp|Payment
     *
     * @param string|null $uri
     *
     * @return $this
     */
    public function setUri(?string $uri = null)
    {
        $this->uri = $uri;
        $this->modifiedProperties[self::URI] = true;

        return $this;
    }

    /**
     * @module KernelApp|Payment
     *
     * @return string|null
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * @module KernelApp|Payment
     *
     * @param string $uri
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUriOrFail(string $uri)
    {
        return $this->setUri($uri);
    }

    /**
     * @module KernelApp|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUriOrFail(): string
    {
        if ($this->uri === null) {
            $this->throwNullValueException(static::URI);
        }

        return $this->uri;
    }

    /**
     * @module KernelApp|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUri()
    {
        $this->assertPropertyIsSet(self::URI);

        return $this;
    }

    /**
     * @module KernelApp|OauthClient|Payment
     *
     * @param array|null $headers
     *
     * @return $this
     */
    public function setHeaders(array $headers = null)
    {
        if ($headers === null) {
            $headers = [];
        }

        $this->headers = $headers;
        $this->modifiedProperties[self::HEADERS] = true;

        return $this;
    }

    /**
     * @module KernelApp|OauthClient|Payment
     *
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @module KernelApp|OauthClient|Payment
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
     * @module KernelApp|OauthClient|Payment
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
     * @module KernelApp|OauthClient|Payment
     *
     * @param string|int $key
     *
     * @return mixed
     */
    public function getHeader($key)
    {
        return $this->headers[$key];
    }


    /**
     * @module KernelApp|Payment
     *
     * @param string|null $body
     *
     * @return $this
     */
    public function setBody(?string $body = null)
    {
        $this->body = $body;
        $this->modifiedProperties[self::BODY] = true;

        return $this;
    }

    /**
     * @module KernelApp|Payment
     *
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @module KernelApp|Payment
     *
     * @param string $body
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBodyOrFail(string $body)
    {
        return $this->setBody($body);
    }

    /**
     * @module KernelApp|Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBodyOrFail(): string
    {
        if ($this->body === null) {
            $this->throwNullValueException(static::BODY);
        }

        return $this->body;
    }

    /**
     * @module KernelApp|Payment
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
                case 'method':
                case 'uri':
                case 'headers':
                case 'body':
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
                case 'method':
                case 'uri':
                case 'headers':
                case 'body':
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
                case 'method':
                case 'uri':
                case 'headers':
                case 'body':
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
            'method' => $this->method,
            'uri' => $this->uri,
            'headers' => $this->headers,
            'body' => $this->body,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'method' => $this->method,
            'uri' => $this->uri,
            'headers' => $this->headers,
            'body' => $this->body,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
            'uri' => $this->uri instanceof AbstractTransfer ? $this->uri->toArray(true, false) : $this->uri,
            'headers' => $this->headers instanceof AbstractTransfer ? $this->headers->toArray(true, false) : $this->headers,
            'body' => $this->body instanceof AbstractTransfer ? $this->body->toArray(true, false) : $this->body,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
            'uri' => $this->uri instanceof AbstractTransfer ? $this->uri->toArray(true, true) : $this->uri,
            'headers' => $this->headers instanceof AbstractTransfer ? $this->headers->toArray(true, true) : $this->headers,
            'body' => $this->body instanceof AbstractTransfer ? $this->body->toArray(true, true) : $this->body,
        ];
    }
}
