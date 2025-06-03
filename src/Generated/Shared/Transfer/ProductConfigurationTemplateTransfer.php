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
class ProductConfigurationTemplateTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var string
     */
    public const MODULE_NAME = 'moduleName';

    /**
     * @var string
     */
    public const TEMPLATE_TYPE = 'templateType';

    /**
     * @var string
     */
    public const TEMPLATE_NAME = 'templateName';

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var string|null
     */
    protected $moduleName;

    /**
     * @var string|null
     */
    protected $templateType;

    /**
     * @var string|null
     */
    protected $templateName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'data' => 'data',
        'Data' => 'data',
        'module_name' => 'moduleName',
        'moduleName' => 'moduleName',
        'ModuleName' => 'moduleName',
        'template_type' => 'templateType',
        'templateType' => 'templateType',
        'TemplateType' => 'templateType',
        'template_name' => 'templateName',
        'templateName' => 'templateName',
        'TemplateName' => 'templateName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MODULE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'module_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TEMPLATE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'template_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TEMPLATE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'template_name',
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
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @param array|null $data
     *
     * @return $this
     */
    public function setData(array $data = null)
    {
        if ($data === null) {
            $data = [];
        }

        $this->data = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @param mixed $data
     *
     * @return $this
     */
    public function addData($data)
    {
        $this->data[] = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireData()
    {
        $this->assertPropertyIsSet(self::DATA);

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @param string|null $moduleName
     *
     * @return $this
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;
        $this->modifiedProperties[self::MODULE_NAME] = true;

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @return string|null
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @param string|null $moduleName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setModuleNameOrFail($moduleName)
    {
        if ($moduleName === null) {
            $this->throwNullValueException(static::MODULE_NAME);
        }

        return $this->setModuleName($moduleName);
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getModuleNameOrFail()
    {
        if ($this->moduleName === null) {
            $this->throwNullValueException(static::MODULE_NAME);
        }

        return $this->moduleName;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireModuleName()
    {
        $this->assertPropertyIsSet(self::MODULE_NAME);

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @param string|null $templateType
     *
     * @return $this
     */
    public function setTemplateType($templateType)
    {
        $this->templateType = $templateType;
        $this->modifiedProperties[self::TEMPLATE_TYPE] = true;

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @return string|null
     */
    public function getTemplateType()
    {
        return $this->templateType;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @param string|null $templateType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTemplateTypeOrFail($templateType)
    {
        if ($templateType === null) {
            $this->throwNullValueException(static::TEMPLATE_TYPE);
        }

        return $this->setTemplateType($templateType);
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTemplateTypeOrFail()
    {
        if ($this->templateType === null) {
            $this->throwNullValueException(static::TEMPLATE_TYPE);
        }

        return $this->templateType;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplateType()
    {
        $this->assertPropertyIsSet(self::TEMPLATE_TYPE);

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @param string|null $templateName
     *
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        $this->modifiedProperties[self::TEMPLATE_NAME] = true;

        return $this;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @param string|null $templateName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTemplateNameOrFail($templateName)
    {
        if ($templateName === null) {
            $this->throwNullValueException(static::TEMPLATE_NAME);
        }

        return $this->setTemplateName($templateName);
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTemplateNameOrFail()
    {
        if ($this->templateName === null) {
            $this->throwNullValueException(static::TEMPLATE_NAME);
        }

        return $this->templateName;
    }

    /**
     * @module DateTimeConfiguratorPageExample|ProductConfigurationWidget|SalesProductConfigurationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplateName()
    {
        $this->assertPropertyIsSet(self::TEMPLATE_NAME);

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
                case 'data':
                case 'moduleName':
                case 'templateType':
                case 'templateName':
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
                case 'data':
                case 'moduleName':
                case 'templateType':
                case 'templateName':
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
                case 'data':
                case 'moduleName':
                case 'templateType':
                case 'templateName':
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
            'data' => $this->data,
            'moduleName' => $this->moduleName,
            'templateType' => $this->templateType,
            'templateName' => $this->templateName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'data' => $this->data,
            'module_name' => $this->moduleName,
            'template_type' => $this->templateType,
            'template_name' => $this->templateName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
            'module_name' => $this->moduleName instanceof AbstractTransfer ? $this->moduleName->toArray(true, false) : $this->moduleName,
            'template_type' => $this->templateType instanceof AbstractTransfer ? $this->templateType->toArray(true, false) : $this->templateType,
            'template_name' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, false) : $this->templateName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
            'moduleName' => $this->moduleName instanceof AbstractTransfer ? $this->moduleName->toArray(true, true) : $this->moduleName,
            'templateType' => $this->templateType instanceof AbstractTransfer ? $this->templateType->toArray(true, true) : $this->templateType,
            'templateName' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, true) : $this->templateName,
        ];
    }
}
