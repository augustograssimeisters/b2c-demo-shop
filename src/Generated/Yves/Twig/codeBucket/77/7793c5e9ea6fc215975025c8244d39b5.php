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

/* @@SprykerShop:ShopUi/components/atoms/checkbox/checkbox.twig */
class __TwigTemplate_db3f37308e959aca5b9c2686495f57d6 extends Template
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
            'attributes' => [$this, 'block_attributes'],
            'body' => [$this, 'block_body'],
            'inputClass' => [$this, 'block_inputClass'],
            'labelContainer' => [$this, 'block_labelContainer'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ShopUi/components/atoms/checkbox/checkbox.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ShopUi/components/atoms/checkbox/checkbox.twig", 2)->unwrap();
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "checkbox", "tag" => "span"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["label" => "", "inputClass" => ""], $context['data']);        // line 14
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["type" => "checkbox", "required" => false], $context['attributes']);        // line 19
        $context["disabled"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "disabled", [], "array", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "disabled", [], "array", false, false, false, 19), false)) : (false));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 22, $this->source); })())) {
            yield "disabled";
        }
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "    <label class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        yield "__container\" ";
        yield $this->env->getFunction('qa')->getCallable()(["label"]);
        yield ">
        <input class=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        yield "__input ";
        yield from $this->unwrap()->yieldBlock('inputClass', $context, $blocks);
        yield "\" ";
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 27, $this->source); })())], 27, $context, $this->getSourceContext());
        yield ">
        <span class=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
        yield "__box\"></span>
        <span class=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
        yield "__check\"></span>";
        // line 30
        yield from $this->unwrap()->yieldBlock('labelContainer', $context, $blocks);
        // line 35
        yield "</label>
";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inputClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "inputClass", [], "any", false, false, false, 27), "html", null, true);
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_labelContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "<span class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
        yield "__label label ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 31, $this->source); })()), "required", [], "any", false, false, false, 31)) {
            yield "label--required";
        }
        yield "\">";
        // line 32
        yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
        // line 33
        yield "</span>";
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "label", [], "any", false, false, false, 32), "html", null, true);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/atoms/checkbox/checkbox.twig";
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
        return array (  146 => 32,  141 => 33,  139 => 32,  131 => 31,  124 => 30,  113 => 27,  107 => 35,  105 => 30,  102 => 29,  98 => 28,  90 => 27,  83 => 26,  76 => 25,  69 => 22,  62 => 21,  58 => 1,  56 => 19,  55 => 14,  54 => 9,  53 => 4,  51 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}
{% import model('component') as component %}

{% define config = {
    name: 'checkbox',
    tag: 'span'
} %}

{% define data = {
    label: '',
    inputClass: '',
} %}

{% define attributes = {
    type: 'checkbox',
    required: false,
} %}

{% set disabled = attributes['disabled'] | default(false) %}

{% block attributes %}
    {%- if disabled %}disabled{% endif -%}
{% endblock %}

{% block body %}
    <label class=\"{{config.name}}__container\" {{qa('label')}}>
        <input class=\"{{config.name}}__input {% block inputClass %} {{- data.inputClass -}} {% endblock %}\" {{ component.renderAttributes(attributes) }}>
        <span class=\"{{config.name}}__box\"></span>
        <span class=\"{{config.name}}__check\"></span>
        {%- block labelContainer -%}
            <span class=\"{{config.name}}__label label {% if attributes.required %}label--required{% endif %}\">
                {%- block label -%}{{data.label}}{%- endblock -%}
            </span>
        {%- endblock -%}
    </label>
{% endblock %}
", "@@SprykerShop:ShopUi/components/atoms/checkbox/checkbox.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/atoms/checkbox/checkbox.twig");
    }
}
