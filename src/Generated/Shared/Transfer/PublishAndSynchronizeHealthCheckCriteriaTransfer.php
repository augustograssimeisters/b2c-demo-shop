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
class PublishAndSynchronizeHealthCheckCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_CONDITIONS = 'publishAndSynchronizeHealthCheckConditions';

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var \Generated\Shared\Transfer\PublishAndSynchronizeHealthCheckConditionsTransfer|null
     */
    protected $publishAndSynchronizeHealthCheckConditions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'publish_and_synchronize_health_check_conditions' => 'publishAndSynchronizeHealthCheckConditions',
        'publishAndSynchronizeHealthCheckConditions' => 'publishAndSynchronizeHealthCheckConditions',
        'PublishAndSynchronizeHealthCheckConditions' => 'publishAndSynchronizeHealthCheckConditions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\PaginationTransfer',
            'type_shim' => null,
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\PublishAndSynchronizeHealthCheckConditionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'publish_and_synchronize_health_check_conditions',
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
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(?PaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination(): ?PaginationTransfer
    {
        return $this->pagination;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(PaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer
     */
    public function getPaginationOrFail(): PaginationTransfer
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheck
     *
     * @param \Generated\Shared\Transfer\PublishAndSynchronizeHealthCheckConditionsTransfer|null $publishAndSynchronizeHealthCheckConditions
     *
     * @return $this
     */
    public function setPublishAndSynchronizeHealthCheckConditions(?PublishAndSynchronizeHealthCheckConditionsTransfer $publishAndSynchronizeHealthCheckConditions = null)
    {
        $this->publishAndSynchronizeHealthCheckConditions = $publishAndSynchronizeHealthCheckConditions;
        $this->modifiedProperties[self::PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheck
     *
     * @return \Generated\Shared\Transfer\PublishAndSynchronizeHealthCheckConditionsTransfer|null
     */
    public function getPublishAndSynchronizeHealthCheckConditions(): ?PublishAndSynchronizeHealthCheckConditionsTransfer
    {
        return $this->publishAndSynchronizeHealthCheckConditions;
    }

    /**
     * @module PublishAndSynchronizeHealthCheck
     *
     * @param \Generated\Shared\Transfer\PublishAndSynchronizeHealthCheckConditionsTransfer $publishAndSynchronizeHealthCheckConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPublishAndSynchronizeHealthCheckConditionsOrFail(PublishAndSynchronizeHealthCheckConditionsTransfer $publishAndSynchronizeHealthCheckConditions)
    {
        return $this->setPublishAndSynchronizeHealthCheckConditions($publishAndSynchronizeHealthCheckConditions);
    }

    /**
     * @module PublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PublishAndSynchronizeHealthCheckConditionsTransfer
     */
    public function getPublishAndSynchronizeHealthCheckConditionsOrFail(): PublishAndSynchronizeHealthCheckConditionsTransfer
    {
        if ($this->publishAndSynchronizeHealthCheckConditions === null) {
            $this->throwNullValueException(static::PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_CONDITIONS);
        }

        return $this->publishAndSynchronizeHealthCheckConditions;
    }

    /**
     * @module PublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePublishAndSynchronizeHealthCheckConditions()
    {
        $this->assertPropertyIsSet(self::PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_CONDITIONS);

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
                case 'pagination':
                case 'publishAndSynchronizeHealthCheckConditions':
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
                case 'pagination':
                case 'publishAndSynchronizeHealthCheckConditions':
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
                case 'pagination':
                case 'publishAndSynchronizeHealthCheckConditions':
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
            'pagination' => $this->pagination,
            'publishAndSynchronizeHealthCheckConditions' => $this->publishAndSynchronizeHealthCheckConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'pagination' => $this->pagination,
            'publish_and_synchronize_health_check_conditions' => $this->publishAndSynchronizeHealthCheckConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'publish_and_synchronize_health_check_conditions' => $this->publishAndSynchronizeHealthCheckConditions instanceof AbstractTransfer ? $this->publishAndSynchronizeHealthCheckConditions->toArray(true, false) : $this->publishAndSynchronizeHealthCheckConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'publishAndSynchronizeHealthCheckConditions' => $this->publishAndSynchronizeHealthCheckConditions instanceof AbstractTransfer ? $this->publishAndSynchronizeHealthCheckConditions->toArray(true, true) : $this->publishAndSynchronizeHealthCheckConditions,
        ];
    }
}
