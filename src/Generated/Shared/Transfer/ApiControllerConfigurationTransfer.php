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
class ApiControllerConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @var string
     */
    public const CONTROLLER = 'controller';

    /**
     * @var string
     */
    public const METHOD = 'method';

    /**
     * @var string
     */
    public const API_APPLICATION = 'apiApplication';

    /**
     * @var string[]
     */
    protected $parameters = [];

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var string|null
     */
    protected $controller;

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var string|null
     */
    protected $apiApplication;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'path' => 'path',
        'Path' => 'path',
        'controller' => 'controller',
        'Controller' => 'controller',
        'method' => 'method',
        'Method' => 'method',
        'api_application' => 'apiApplication',
        'apiApplication' => 'apiApplication',
        'ApiApplication' => 'apiApplication',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PARAMETERS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'parameters',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTROLLER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'controller',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
            'is_strict' => false,
        ],
        self::API_APPLICATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'api_application',
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
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string[]|null $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters = null)
    {
        if ($parameters === null) {
            $parameters = [];
        }

        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string $parameter
     *
     * @return $this
     */
    public function addParameter($parameter)
    {
        $this->parameters[] = $parameter;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameters()
    {
        $this->assertPropertyIsSet(self::PARAMETERS);

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        $this->modifiedProperties[self::PATH] = true;

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $path
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPathOrFail($path)
    {
        if ($path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->setPath($path);
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPathOrFail()
    {
        if ($this->path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->path;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePath()
    {
        $this->assertPropertyIsSet(self::PATH);

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $controller
     *
     * @return $this
     */
    public function setController($controller)
    {
        $this->controller = $controller;
        $this->modifiedProperties[self::CONTROLLER] = true;

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $controller
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setControllerOrFail($controller)
    {
        if ($controller === null) {
            $this->throwNullValueException(static::CONTROLLER);
        }

        return $this->setController($controller);
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getControllerOrFail()
    {
        if ($this->controller === null) {
            $this->throwNullValueException(static::CONTROLLER);
        }

        return $this->controller;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireController()
    {
        $this->assertPropertyIsSet(self::CONTROLLER);

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        $this->modifiedProperties[self::METHOD] = true;

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $method
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMethodOrFail($method)
    {
        if ($method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->setMethod($method);
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMethodOrFail()
    {
        if ($this->method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->method;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $apiApplication
     *
     * @return $this
     */
    public function setApiApplication($apiApplication)
    {
        $this->apiApplication = $apiApplication;
        $this->modifiedProperties[self::API_APPLICATION] = true;

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getApiApplication()
    {
        return $this->apiApplication;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $apiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApiApplicationOrFail($apiApplication)
    {
        if ($apiApplication === null) {
            $this->throwNullValueException(static::API_APPLICATION);
        }

        return $this->setApiApplication($apiApplication);
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getApiApplicationOrFail()
    {
        if ($this->apiApplication === null) {
            $this->throwNullValueException(static::API_APPLICATION);
        }

        return $this->apiApplication;
    }

    /**
     * @module GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApiApplication()
    {
        $this->assertPropertyIsSet(self::API_APPLICATION);

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
                case 'parameters':
                case 'path':
                case 'controller':
                case 'method':
                case 'apiApplication':
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
                case 'parameters':
                case 'path':
                case 'controller':
                case 'method':
                case 'apiApplication':
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
                case 'parameters':
                case 'path':
                case 'controller':
                case 'method':
                case 'apiApplication':
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
            'parameters' => $this->parameters,
            'path' => $this->path,
            'controller' => $this->controller,
            'method' => $this->method,
            'apiApplication' => $this->apiApplication,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'parameters' => $this->parameters,
            'path' => $this->path,
            'controller' => $this->controller,
            'method' => $this->method,
            'api_application' => $this->apiApplication,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->parameters,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, false) : $this->controller,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
            'api_application' => $this->apiApplication instanceof AbstractTransfer ? $this->apiApplication->toArray(true, false) : $this->apiApplication,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->parameters,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, true) : $this->controller,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
            'apiApplication' => $this->apiApplication instanceof AbstractTransfer ? $this->apiApplication->toArray(true, true) : $this->apiApplication,
        ];
    }
}
