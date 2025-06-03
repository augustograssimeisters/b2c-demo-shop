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
class AnalyticsCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ANALYTICS_LIST = 'analyticsList';

    /**
     * @var string
     */
    public const ANALYTICS_ACTIONS = 'analyticsActions';

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\AnalyticsTransfer>
     */
    protected $analyticsList;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\AnalyticsActionTransfer>
     */
    protected $analyticsActions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'analytics_list' => 'analyticsList',
        'analyticsList' => 'analyticsList',
        'AnalyticsList' => 'analyticsList',
        'analytics_actions' => 'analyticsActions',
        'analyticsActions' => 'analyticsActions',
        'AnalyticsActions' => 'analyticsActions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ANALYTICS_LIST => [
            'type' => 'Generated\Shared\Transfer\AnalyticsTransfer',
            'type_shim' => null,
            'name_underscore' => 'analytics_list',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ANALYTICS_ACTIONS => [
            'type' => 'Generated\Shared\Transfer\AnalyticsActionTransfer',
            'type_shim' => null,
            'name_underscore' => 'analytics_actions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module AnalyticsGui
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\AnalyticsTransfer> $analyticsList
     *
     * @return $this
     */
    public function setAnalyticsList(ArrayObject $analyticsList)
    {
        $this->analyticsList = new ArrayObject();

        foreach ($analyticsList as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::ANALYTICS_LIST]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addAnalytics(...$args);
        }

        $this->modifiedProperties[self::ANALYTICS_LIST] = true;

        return $this;
    }

    /**
     * @module AnalyticsGui
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\AnalyticsTransfer>
     */
    public function getAnalyticsList(): ArrayObject
    {
        return $this->analyticsList;
    }

    /**
     * @module AnalyticsGui
     *
     * @param \Generated\Shared\Transfer\AnalyticsTransfer $analytics
     *
     * @return $this
     */
    public function addAnalytics(AnalyticsTransfer $analytics)
    {
        $this->analyticsList[] = $analytics;
        $this->modifiedProperties[self::ANALYTICS_LIST] = true;

        return $this;
    }

    /**
     * @module AnalyticsGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAnalyticsList()
    {
        $this->assertCollectionPropertyIsSet(self::ANALYTICS_LIST);

        return $this;
    }

    /**
     * @module AnalyticsGui
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\AnalyticsActionTransfer> $analyticsActions
     *
     * @return $this
     */
    public function setAnalyticsActions(ArrayObject $analyticsActions)
    {
        $this->analyticsActions = new ArrayObject();

        foreach ($analyticsActions as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::ANALYTICS_ACTIONS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addAnalyticsAction(...$args);
        }

        $this->modifiedProperties[self::ANALYTICS_ACTIONS] = true;

        return $this;
    }

    /**
     * @module AnalyticsGui
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\AnalyticsActionTransfer>
     */
    public function getAnalyticsActions(): ArrayObject
    {
        return $this->analyticsActions;
    }

    /**
     * @module AnalyticsGui
     *
     * @param \Generated\Shared\Transfer\AnalyticsActionTransfer $analyticsAction
     *
     * @return $this
     */
    public function addAnalyticsAction(AnalyticsActionTransfer $analyticsAction)
    {
        $this->analyticsActions[] = $analyticsAction;
        $this->modifiedProperties[self::ANALYTICS_ACTIONS] = true;

        return $this;
    }

    /**
     * @module AnalyticsGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAnalyticsActions()
    {
        $this->assertCollectionPropertyIsSet(self::ANALYTICS_ACTIONS);

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
                case 'analyticsList':
                case 'analyticsActions':
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
                case 'analyticsList':
                case 'analyticsActions':
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
                case 'analyticsList':
                case 'analyticsActions':
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
        $this->analyticsList = $this->analyticsList ?: new ArrayObject();
        $this->analyticsActions = $this->analyticsActions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'analyticsList' => $this->analyticsList,
            'analyticsActions' => $this->analyticsActions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'analytics_list' => $this->analyticsList,
            'analytics_actions' => $this->analyticsActions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'analytics_list' => $this->analyticsList instanceof AbstractTransfer ? $this->analyticsList->toArray(true, false) : $this->addValuesToCollection($this->analyticsList, true, false),
            'analytics_actions' => $this->analyticsActions instanceof AbstractTransfer ? $this->analyticsActions->toArray(true, false) : $this->addValuesToCollection($this->analyticsActions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'analyticsList' => $this->analyticsList instanceof AbstractTransfer ? $this->analyticsList->toArray(true, true) : $this->addValuesToCollection($this->analyticsList, true, true),
            'analyticsActions' => $this->analyticsActions instanceof AbstractTransfer ? $this->analyticsActions->toArray(true, true) : $this->addValuesToCollection($this->analyticsActions, true, true),
        ];
    }
}
