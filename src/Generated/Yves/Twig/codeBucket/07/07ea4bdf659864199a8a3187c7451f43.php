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

/* @@SprykerShop:ShopUi/components/molecules/formatted-number-input/formatted-number-input.twig */
class __TwigTemplate_6b26975270de292f5717551aa565af73 extends Template
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
            'hiddenInput' => [$this, 'block_hiddenInput'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ShopUi/components/molecules/formatted-number-input/formatted-number-input.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "formatted-number-input", "tag" => "formatted-number-input"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["inputName" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "inputValue" =>         // line 11
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 11, $this->source); })()), "inputExtraClasses" => "", "inputAttributes" => [], "hiddenInputExtraClasses" => "", "hiddenInputAttributes" => []], $context['data']);        // line 18
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["grouping-separator" => "", "decimal-separator" => ".", "decimal-rounding" => 3, "decimal-filling" => false, "watch-external-changes" => false, "min" => false, "max" => false], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "    <input value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "inputValue", [], "any", false, false, false, 29), "html", null, true);
        yield "\"
           class=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "jsName", [], "any", false, false, false, 30), "html", null, true);
        yield "__input ";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30) . "__input"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 30, $this->source); })())], 30, $context, $this->getSourceContext());
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "inputExtraClasses", [], "any", false, false, false, 30), "html", null, true);
        yield "\"
           ";
        // line 31
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "inputAttributes", [], "any", false, false, false, 31)], 31, $context, $this->getSourceContext());
        yield ">

    ";
        // line 33
        yield from $this->unwrap()->yieldBlock('hiddenInput', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hiddenInput(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "        <input type=\"hidden\"
               value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "inputValue", [], "any", false, false, false, 35), "html", null, true);
        yield "\"
               name=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "inputName", [], "any", false, false, false, 36), "html", null, true);
        yield "\"
               class=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "jsName", [], "any", false, false, false, 37), "html", null, true);
        yield "__hidden-input ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
        yield "__hidden-input ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()), "hiddenInputExtraClasses", [], "any", false, false, false, 37), "html", null, true);
        yield "\"
               ";
        // line 38
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "hiddenInputAttributes", [], "any", false, false, false, 38)], 38, $context, $this->getSourceContext());
        yield ">
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/molecules/formatted-number-input/formatted-number-input.twig";
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
        return array (  114 => 38,  106 => 37,  102 => 36,  98 => 35,  95 => 34,  84 => 33,  79 => 31,  71 => 30,  66 => 29,  59 => 28,  55 => 1,  54 => 18,  53 => 11,  52 => 10,  51 => 9,  50 => 4,  48 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'formatted-number-input',
    tag: 'formatted-number-input',
} %}

{% define data = {
    inputName: required,
    inputValue: required,
    inputExtraClasses: '',
    inputAttributes: {},
    hiddenInputExtraClasses: '',
    hiddenInputAttributes: {},
} %}

{% define attributes = {
    'grouping-separator': '',
    'decimal-separator': '.',
    'decimal-rounding': 3,
    'decimal-filling': false,
    'watch-external-changes': false,
    min: false,
    max: false,
} %}

{% block body %}
    <input value=\"{{ data.inputValue }}\"
           class=\"{{ config.jsName }}__input {{ component.renderClass(config.name ~ '__input', modifiers) }} {{ data.inputExtraClasses }}\"
           {{ component.renderAttributes(data.inputAttributes) }}>

    {% block hiddenInput %}
        <input type=\"hidden\"
               value=\"{{ data.inputValue }}\"
               name=\"{{ data.inputName }}\"
               class=\"{{ config.jsName }}__hidden-input {{ config.name }}__hidden-input {{ data.hiddenInputExtraClasses }}\"
               {{ component.renderAttributes(data.hiddenInputAttributes) }}>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/formatted-number-input/formatted-number-input.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/formatted-number-input/formatted-number-input.twig");
    }
}
