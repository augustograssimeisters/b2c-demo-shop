<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @ShopUi/components/molecules/range-slider/range-slider.twig */
class __TwigTemplate_9a08db78385cf1bd5d16c0d5d96261c4 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/range-slider/range-slider.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "range-slider", "tag" => "range-slider"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["parameter" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "inputAttributes" => []], $context['data']);        // line 14
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["wrap-class-name" => (("js-" . CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15)) . "__slider-content"), "target-class-name" => (("js-" . CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16)) . "__input"), "value-class-name" => (("js-" . CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17)) . "__values-item"), "value-min" =>         // line 18
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 18, $this->source); })()), "value-max" =>         // line 19
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 19, $this->source); })()), "active-min" =>         // line 20
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 20, $this->source); })()), "active-max" =>         // line 21
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 21, $this->source); })()), "step" => 1, "connect" => "true", "margin" => 1], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "    ";
        $context["activeMin"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 28, $this->source); })()), "active-min", [], "array", false, false, false, 28) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 28, $this->source); })()), "value-min", [], "array", false, false, false, 28))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 28, $this->source); })()), "active-min", [], "array", false, false, false, 28)) : (""));
        // line 29
        yield "    ";
        $context["activeMax"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 29, $this->source); })()), "active-max", [], "array", false, false, false, 29) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 29, $this->source); })()), "value-max", [], "array", false, false, false, 29))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 29, $this->source); })()), "active-max", [], "array", false, false, false, 29)) : (""));
        // line 30
        yield "
    ";
        // line 47
        yield "
    ";
        // line 55
        yield "
    ";
        // line 56
        yield CoreExtension::callMacro($macros["_self"], "macro_renderInput", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "jsName", [], "any", false, false, false, 56) . "__input"), (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "parameter", [], "any", false, false, false, 56) . "[min]"), (isset($context["activeMin"]) || array_key_exists("activeMin", $context) ? $context["activeMin"] : (function () { throw new RuntimeError('Variable "activeMin" does not exist.', 56, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 56, $this->source); })()), "value-min", [], "array", false, false, false, 56), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 56, $this->source); })()), "value-max", [], "array", false, false, false, 56), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 56, $this->source); })()), "value-min", [], "array", false, false, false, 56), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "inputAttributes", [], "any", false, false, false, 56)], 56, $context, $this->getSourceContext());
        yield "
    ";
        // line 57
        yield CoreExtension::callMacro($macros["_self"], "macro_renderInput", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 57, $this->source); })()), "jsName", [], "any", false, false, false, 57) . "__input"), (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "parameter", [], "any", false, false, false, 57) . "[max]"), (isset($context["activeMax"]) || array_key_exists("activeMax", $context) ? $context["activeMax"] : (function () { throw new RuntimeError('Variable "activeMax" does not exist.', 57, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 57, $this->source); })()), "value-min", [], "array", false, false, false, 57), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 57, $this->source); })()), "value-max", [], "array", false, false, false, 57), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 57, $this->source); })()), "value-max", [], "array", false, false, false, 57), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "inputAttributes", [], "any", false, false, false, 57)], 57, $context, $this->getSourceContext());
        yield "

    <div class=\"";
        // line 59
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59) . "__slider-content"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 59, $this->source); })())], 59, $context, $this->getSourceContext());
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "jsName", [], "any", false, false, false, 59), "html", null, true);
        yield "__slider-content\">
        <div class=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), "html", null, true);
        yield "__values\">
            ";
        // line 61
        yield CoreExtension::callMacro($macros["_self"], "macro_renderValueItem", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 61, $this->source); })()), "jsName", [], "any", false, false, false, 61), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 61, $this->source); })()), "active-min", [], "array", false, false, false, 61), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "parameter", [], "any", false, false, false, 61)], 61, $context, $this->getSourceContext());
        yield "
            ";
        // line 62
        yield CoreExtension::callMacro($macros["_self"], "macro_renderValueItem", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 62, $this->source); })()), "jsName", [], "any", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 62, $this->source); })()), "active-max", [], "array", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 62, $this->source); })()), "parameter", [], "any", false, false, false, 62)], 62, $context, $this->getSourceContext());
        yield "
        </div>
    </div>
";
        yield from [];
    }

    // line 31
    public function macro_renderInput($__class__ = null, $__name__ = null, $__value__ = null, $__min__ = null, $__max__ = null, $__defaultValue__ = null, $__attrs__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "class" => $__class__,
            "name" => $__name__,
            "value" => $__value__,
            "min" => $__min__,
            "max" => $__max__,
            "defaultValue" => $__defaultValue__,
            "attrs" => $__attrs__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 32
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("formatted-number-input"), "@ShopUi/components/molecules/range-slider/range-slider.twig", 32)->unwrap()->yield(CoreExtension::toArray(["data" => ["inputName" =>             // line 34
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 34, $this->source); })()), "inputValue" =>             // line 35
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 35, $this->source); })()), "inputExtraClasses" => "is-hidden", "hiddenInputExtraClasses" =>             // line 37
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 37, $this->source); })()), "hiddenInputAttributes" => ["data-default-value" =>             // line 39
(isset($context["defaultValue"]) || array_key_exists("defaultValue", $context) ? $context["defaultValue"] : (function () { throw new RuntimeError('Variable "defaultValue" does not exist.', 39, $this->source); })()), "min" =>             // line 40
(isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 40, $this->source); })()), "max" =>             // line 41
(isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 41, $this->source); })())]], "attributes" =>             // line 44
(isset($context["attrs"]) || array_key_exists("attrs", $context) ? $context["attrs"] : (function () { throw new RuntimeError('Variable "attrs" does not exist.', 44, $this->source); })())]));
            // line 46
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 48
    public function macro_renderValueItem($__name__ = null, $__jsName__ = null, $__value__ = null, $__parameter__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "name" => $__name__,
            "jsName" => $__jsName__,
            "value" => $__value__,
            "parameter" => $__parameter__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 49
            yield "        ";
            $context["valueText"] = ((CoreExtension::inFilter("price", (isset($context["parameter"]) || array_key_exists("parameter", $context) ? $context["parameter"] : (function () { throw new RuntimeError('Variable "parameter" does not exist.', 49, $this->source); })()))) ? ($this->env->getFilter('money')->getCallable()((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 49, $this->source); })()))) : ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 49, $this->source); })())));
            // line 50
            yield "
        <span class=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 51, $this->source); })()), "html", null, true);
            yield "__values-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsName"]) || array_key_exists("jsName", $context) ? $context["jsName"] : (function () { throw new RuntimeError('Variable "jsName" does not exist.', 51, $this->source); })()), "html", null, true);
            yield "__values-item\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valueText"]) || array_key_exists("valueText", $context) ? $context["valueText"] : (function () { throw new RuntimeError('Variable "valueText" does not exist.', 52, $this->source); })()), "html", null, true);
            // line 53
            yield "</span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/range-slider/range-slider.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  181 => 53,  179 => 52,  174 => 51,  171 => 50,  168 => 49,  153 => 48,  147 => 46,  145 => 44,  144 => 41,  143 => 40,  142 => 39,  141 => 37,  140 => 35,  139 => 34,  137 => 32,  119 => 31,  110 => 62,  106 => 61,  102 => 60,  96 => 59,  91 => 57,  87 => 56,  84 => 55,  81 => 47,  78 => 30,  75 => 29,  72 => 28,  65 => 27,  61 => 1,  60 => 21,  59 => 20,  58 => 19,  57 => 18,  56 => 17,  55 => 16,  54 => 15,  53 => 14,  52 => 10,  51 => 9,  50 => 4,  48 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'range-slider',
    tag: 'range-slider',
} %}

{% define data = {
    parameter: required,
    inputAttributes: {},
} %}

{% define attributes = {
    'wrap-class-name': 'js-' ~ config.name ~ '__slider-content',
    'target-class-name': 'js-' ~ config.name ~ '__input',
    'value-class-name': 'js-' ~ config.name ~ '__values-item',
    'value-min': required,
    'value-max': required,
    'active-min': required,
    'active-max': required,
    step: 1,
    connect: 'true',
    margin: 1,
} %}

{% block body %}
    {% set activeMin = (attributes['active-min'] != attributes['value-min']) ? attributes['active-min'] %}
    {% set activeMax = (attributes['active-max'] != attributes['value-max']) ? attributes['active-max'] %}

    {% macro renderInput(class, name, value, min, max, defaultValue, attrs) %}
        {% include molecule('formatted-number-input') with {
            data: {
                inputName: name,
                inputValue: value,
                inputExtraClasses: 'is-hidden',
                hiddenInputExtraClasses: class,
                hiddenInputAttributes: {
                    'data-default-value': defaultValue,
                    min: min,
                    max: max,
                },
            },
            attributes: attrs,
        } only %}
    {% endmacro %}

    {% macro renderValueItem(name, jsName, value, parameter) %}
        {% set valueText = 'price' in parameter ? value | money : value %}

        <span class=\"{{ name }}__values-item {{ jsName }}__values-item\">
            {{- valueText -}}
        </span>
    {% endmacro %}

    {{ _self.renderInput(config.jsName ~ '__input', data.parameter ~ '[min]', activeMin, attributes['value-min'], attributes['value-max'], attributes['value-min'], data.inputAttributes) }}
    {{ _self.renderInput(config.jsName ~ '__input', data.parameter ~ '[max]', activeMax, attributes['value-min'], attributes['value-max'], attributes['value-max'], data.inputAttributes) }}

    <div class=\"{{ component.renderClass(config.name ~ '__slider-content', modifiers) }} {{ config.jsName }}__slider-content\">
        <div class=\"{{ config.name }}__values\">
            {{ _self.renderValueItem(config.name, config.jsName, attributes['active-min'], data.parameter) }}
            {{ _self.renderValueItem(config.name, config.jsName, attributes['active-max'], data.parameter) }}
        </div>
    </div>
{% endblock %}
", "@ShopUi/components/molecules/range-slider/range-slider.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/range-slider/range-slider.twig");
    }
}
