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
class SearchHttpConfigTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const APPLICATION_ID = 'applicationId';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const SUGGESTION_URL = 'suggestionUrl';

    /**
     * @var string|null
     */
    protected $applicationId;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $suggestionUrl;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'application_id' => 'applicationId',
        'applicationId' => 'applicationId',
        'ApplicationId' => 'applicationId',
        'url' => 'url',
        'Url' => 'url',
        'suggestion_url' => 'suggestionUrl',
        'suggestionUrl' => 'suggestionUrl',
        'SuggestionUrl' => 'suggestionUrl',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::APPLICATION_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'application_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUGGESTION_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'suggestion_url',
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
     * @module SearchHttp
     *
     * @param string|null $applicationId
     *
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        $this->modifiedProperties[self::APPLICATION_ID] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * @module SearchHttp
     *
     * @param string|null $applicationId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApplicationIdOrFail($applicationId)
    {
        if ($applicationId === null) {
            $this->throwNullValueException(static::APPLICATION_ID);
        }

        return $this->setApplicationId($applicationId);
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getApplicationIdOrFail()
    {
        if ($this->applicationId === null) {
            $this->throwNullValueException(static::APPLICATION_ID);
        }

        return $this->applicationId;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApplicationId()
    {
        $this->assertPropertyIsSet(self::APPLICATION_ID);

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        $this->modifiedProperties[self::URL] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module SearchHttp
     *
     * @param string|null $url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUrlOrFail($url)
    {
        if ($url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->setUrl($url);
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUrlOrFail()
    {
        if ($this->url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->url;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrl()
    {
        $this->assertPropertyIsSet(self::URL);

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @param string|null $suggestionUrl
     *
     * @return $this
     */
    public function setSuggestionUrl(?string $suggestionUrl = null)
    {
        $this->suggestionUrl = $suggestionUrl;
        $this->modifiedProperties[self::SUGGESTION_URL] = true;

        return $this;
    }

    /**
     * @module SearchHttp
     *
     * @return string|null
     */
    public function getSuggestionUrl(): ?string
    {
        return $this->suggestionUrl;
    }

    /**
     * @module SearchHttp
     *
     * @param string $suggestionUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSuggestionUrlOrFail(string $suggestionUrl)
    {
        return $this->setSuggestionUrl($suggestionUrl);
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSuggestionUrlOrFail(): string
    {
        if ($this->suggestionUrl === null) {
            $this->throwNullValueException(static::SUGGESTION_URL);
        }

        return $this->suggestionUrl;
    }

    /**
     * @module SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSuggestionUrl()
    {
        $this->assertPropertyIsSet(self::SUGGESTION_URL);

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
                case 'applicationId':
                case 'url':
                case 'suggestionUrl':
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
                case 'applicationId':
                case 'url':
                case 'suggestionUrl':
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
                case 'applicationId':
                case 'url':
                case 'suggestionUrl':
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
            'applicationId' => $this->applicationId,
            'url' => $this->url,
            'suggestionUrl' => $this->suggestionUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'application_id' => $this->applicationId,
            'url' => $this->url,
            'suggestion_url' => $this->suggestionUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'application_id' => $this->applicationId instanceof AbstractTransfer ? $this->applicationId->toArray(true, false) : $this->applicationId,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'suggestion_url' => $this->suggestionUrl instanceof AbstractTransfer ? $this->suggestionUrl->toArray(true, false) : $this->suggestionUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'applicationId' => $this->applicationId instanceof AbstractTransfer ? $this->applicationId->toArray(true, true) : $this->applicationId,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'suggestionUrl' => $this->suggestionUrl instanceof AbstractTransfer ? $this->suggestionUrl->toArray(true, true) : $this->suggestionUrl,
        ];
    }
}
