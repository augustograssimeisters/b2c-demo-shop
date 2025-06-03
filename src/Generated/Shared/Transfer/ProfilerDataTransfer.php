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
class ProfilerDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONTENT = 'content';

    /**
     * @var string
     */
    public const STATS = 'stats';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const IS_XHPROF_EXTENSION_ENABLED = 'isXhprofExtensionEnabled';

    /**
     * @var string|null
     */
    protected $content;

    /**
     * @var array
     */
    protected $stats = [];

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var bool|null
     */
    protected $isXhprofExtensionEnabled;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'content' => 'content',
        'Content' => 'content',
        'stats' => 'stats',
        'Stats' => 'stats',
        'type' => 'type',
        'Type' => 'type',
        'is_xhprof_extension_enabled' => 'isXhprofExtensionEnabled',
        'isXhprofExtensionEnabled' => 'isXhprofExtensionEnabled',
        'IsXhprofExtensionEnabled' => 'isXhprofExtensionEnabled',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONTENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'content',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'stats',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_XHPROF_EXTENSION_ENABLED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_xhprof_extension_enabled',
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
     * @module Profiler
     *
     * @param string|null $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        $this->modifiedProperties[self::CONTENT] = true;

        return $this;
    }

    /**
     * @module Profiler
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @module Profiler
     *
     * @param string|null $content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContentOrFail($content)
    {
        if ($content === null) {
            $this->throwNullValueException(static::CONTENT);
        }

        return $this->setContent($content);
    }

    /**
     * @module Profiler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getContentOrFail()
    {
        if ($this->content === null) {
            $this->throwNullValueException(static::CONTENT);
        }

        return $this->content;
    }

    /**
     * @module Profiler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContent()
    {
        $this->assertPropertyIsSet(self::CONTENT);

        return $this;
    }

    /**
     * @module Profiler
     *
     * @param array|null $stats
     *
     * @return $this
     */
    public function setStats(array $stats = null)
    {
        if ($stats === null) {
            $stats = [];
        }

        $this->stats = $stats;
        $this->modifiedProperties[self::STATS] = true;

        return $this;
    }

    /**
     * @module Profiler
     *
     * @return array
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @module Profiler
     *
     * @param mixed $statsItem
     *
     * @return $this
     */
    public function addStatsItem($statsItem)
    {
        $this->stats[] = $statsItem;
        $this->modifiedProperties[self::STATS] = true;

        return $this;
    }

    /**
     * @module Profiler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStats()
    {
        $this->assertPropertyIsSet(self::STATS);

        return $this;
    }

    /**
     * @module Profiler
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module Profiler
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module Profiler
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module Profiler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module Profiler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module Profiler
     *
     * @param bool|null $isXhprofExtensionEnabled
     *
     * @return $this
     */
    public function setIsXhprofExtensionEnabled($isXhprofExtensionEnabled)
    {
        $this->isXhprofExtensionEnabled = $isXhprofExtensionEnabled;
        $this->modifiedProperties[self::IS_XHPROF_EXTENSION_ENABLED] = true;

        return $this;
    }

    /**
     * @module Profiler
     *
     * @return bool|null
     */
    public function getIsXhprofExtensionEnabled()
    {
        return $this->isXhprofExtensionEnabled;
    }

    /**
     * @module Profiler
     *
     * @param bool|null $isXhprofExtensionEnabled
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsXhprofExtensionEnabledOrFail($isXhprofExtensionEnabled)
    {
        if ($isXhprofExtensionEnabled === null) {
            $this->throwNullValueException(static::IS_XHPROF_EXTENSION_ENABLED);
        }

        return $this->setIsXhprofExtensionEnabled($isXhprofExtensionEnabled);
    }

    /**
     * @module Profiler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsXhprofExtensionEnabledOrFail()
    {
        if ($this->isXhprofExtensionEnabled === null) {
            $this->throwNullValueException(static::IS_XHPROF_EXTENSION_ENABLED);
        }

        return $this->isXhprofExtensionEnabled;
    }

    /**
     * @module Profiler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsXhprofExtensionEnabled()
    {
        $this->assertPropertyIsSet(self::IS_XHPROF_EXTENSION_ENABLED);

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
                case 'content':
                case 'stats':
                case 'type':
                case 'isXhprofExtensionEnabled':
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
                case 'content':
                case 'stats':
                case 'type':
                case 'isXhprofExtensionEnabled':
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
                case 'content':
                case 'stats':
                case 'type':
                case 'isXhprofExtensionEnabled':
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
            'content' => $this->content,
            'stats' => $this->stats,
            'type' => $this->type,
            'isXhprofExtensionEnabled' => $this->isXhprofExtensionEnabled,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'content' => $this->content,
            'stats' => $this->stats,
            'type' => $this->type,
            'is_xhprof_extension_enabled' => $this->isXhprofExtensionEnabled,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'content' => $this->content instanceof AbstractTransfer ? $this->content->toArray(true, false) : $this->content,
            'stats' => $this->stats instanceof AbstractTransfer ? $this->stats->toArray(true, false) : $this->stats,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'is_xhprof_extension_enabled' => $this->isXhprofExtensionEnabled instanceof AbstractTransfer ? $this->isXhprofExtensionEnabled->toArray(true, false) : $this->isXhprofExtensionEnabled,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'content' => $this->content instanceof AbstractTransfer ? $this->content->toArray(true, true) : $this->content,
            'stats' => $this->stats instanceof AbstractTransfer ? $this->stats->toArray(true, true) : $this->stats,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'isXhprofExtensionEnabled' => $this->isXhprofExtensionEnabled instanceof AbstractTransfer ? $this->isXhprofExtensionEnabled->toArray(true, true) : $this->isXhprofExtensionEnabled,
        ];
    }
}
