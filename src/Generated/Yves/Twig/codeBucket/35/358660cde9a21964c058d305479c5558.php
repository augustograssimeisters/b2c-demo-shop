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

/* @ShopUi/components/atoms/checkbox/checkbox.twig */
class __TwigTemplate_2e02c2daf5c081d94432d7d0fd60d71f extends Template
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
            'inputClass' => [$this, 'block_inputClass'],
            'icon' => [$this, 'block_icon'],
            'labelContainer' => [$this, 'block_labelContainer'],
            'labelClass' => [$this, 'block_labelClass'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('atom')->getCallable()("checkbox", "@SprykerShop:ShopUi"), "@ShopUi/components/atoms/checkbox/checkbox.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        $context["iconName"] = "check";
        // line 6
        yield "
    <label class=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "__container\" ";
        yield $this->env->getFunction('qa')->getCallable()(["label"]);
        yield ">
        <input class=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "__input ";
        yield from $this->unwrap()->yieldBlock('inputClass', $context, $blocks);
        yield "\" ";
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 8, $this->source); })())], 8, $context, $this->getSourceContext());
        yield ">
        <span class=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "__box\"></span>
        ";
        // line 10
        yield from $this->unwrap()->yieldBlock('icon', $context, $blocks);
        // line 19
        yield from $this->unwrap()->yieldBlock('labelContainer', $context, $blocks);
        // line 24
        yield "</label>
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inputClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "inputClass", [], "any", false, false, false, 8), "html", null, true);
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "            ";
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/atoms/checkbox/checkbox.twig", 11)->unwrap()->yield(CoreExtension::toArray(["class" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12) . "__") . (isset($context["iconName"]) || array_key_exists("iconName", $context) ? $context["iconName"] : (function () { throw new RuntimeError('Variable "iconName" does not exist.', 12, $this->source); })())), "data" => ["name" =>         // line 14
(isset($context["iconName"]) || array_key_exists("iconName", $context) ? $context["iconName"] : (function () { throw new RuntimeError('Variable "iconName" does not exist.', 14, $this->source); })())]]));
        // line 17
        yield "        ";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_labelContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "<span class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        yield "__label ";
        yield from $this->unwrap()->yieldBlock('labelClass', $context, $blocks);
        yield "\">";
        // line 21
        yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
        // line 22
        yield "</span>";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_labelClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "label", [], "any", false, false, false, 21), "html", null, true);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/atoms/checkbox/checkbox.twig";
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
        return array (  157 => 21,  147 => 20,  142 => 22,  140 => 21,  134 => 20,  127 => 19,  122 => 17,  120 => 14,  119 => 12,  117 => 11,  110 => 10,  99 => 8,  93 => 24,  91 => 19,  89 => 10,  85 => 9,  77 => 8,  71 => 7,  68 => 6,  65 => 5,  58 => 4,  54 => 1,  52 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends atom('checkbox', '@SprykerShop:ShopUi') %}
{% import _self as component %}

{% block body %}
    {% set iconName = 'check' %}

    <label class=\"{{ config.name }}__container\" {{ qa('label') }}>
        <input class=\"{{ config.name }}__input {% block inputClass %} {{- data.inputClass -}} {% endblock %}\" {{ component.renderAttributes(attributes) }}>
        <span class=\"{{ config.name }}__box\"></span>
        {% block icon %}
            {% include atom('icon') with {
                class: config.name ~ '__' ~ iconName,
                data: {
                    name: iconName,
                },
            } only %}
        {% endblock %}

        {%- block labelContainer -%}
            <span class=\"{{ config.name }}__label {% block labelClass %}{% endblock %}\">
                {%- block label -%}{{ data.label }}{%- endblock -%}
            </span>
        {%- endblock -%}
    </label>
{% endblock %}
", "@ShopUi/components/atoms/checkbox/checkbox.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/atoms/checkbox/checkbox.twig");
    }
}
