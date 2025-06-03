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

/* @ProductGroupWidget/components/molecules/color-selector/color-selector.twig */
class __TwigTemplate_eff6f0349fa98d540d30cbbfd6f9df9c extends Template
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
            'selection' => [$this, 'block_selection'],
            'selectionInner' => [$this, 'block_selectionInner'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("color-selector", "@SprykerShop:ProductGroupWidget"), "@ProductGroupWidget/components/molecules/color-selector/color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["items" =>         // line 5
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 5, $this->source); })()), "colorAttributeName" => "colorCode", "selectionTag" => "button"], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selection(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        yield from $this->unwrap()->yieldBlock('selectionInner', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selectionInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "        <";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "selectionTag", [], "any", false, false, false, 12), "html", null, true);
        yield "
            class=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "__item ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeClassName"]) || array_key_exists("activeClassName", $context) ? $context["activeClassName"] : (function () { throw new RuntimeError('Variable "activeClassName" does not exist.', 13, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "jsName", [], "any", false, false, false, 13), "html", null, true);
        yield "__item\"
            style=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["backgroundColor"]) || array_key_exists("backgroundColor", $context) ? $context["backgroundColor"] : (function () { throw new RuntimeError('Variable "backgroundColor" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\"
            ";
        // line 15
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [(isset($context["dataAttributesList"]) || array_key_exists("dataAttributesList", $context) ? $context["dataAttributesList"] : (function () { throw new RuntimeError('Variable "dataAttributesList" does not exist.', 15, $this->source); })())], 15, $context, $this->getSourceContext());
        yield ">
            <span class=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "__tooltip\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "attributes", [], "any", false, false, false, 16), "color", [], "any", false, false, false, 16), "html", null, true);
        yield "</span>
        </";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "selectionTag", [], "any", false, false, false, 17), "html", null, true);
        yield ">
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductGroupWidget/components/molecules/color-selector/color-selector.twig";
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
        return array (  102 => 17,  96 => 16,  92 => 15,  88 => 14,  80 => 13,  75 => 12,  63 => 11,  56 => 10,  52 => 1,  51 => 5,  50 => 4,  48 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('color-selector', '@SprykerShop:ProductGroupWidget') %}
{% import _self as component %}

{% define data = {
    items: required,
    colorAttributeName: 'colorCode',
    selectionTag: 'button',
} %}

{% block selection %}
    {% block selectionInner %}
        <{{ data.selectionTag }}
            class=\"{{ config.name }}__item {{ activeClassName }} {{ config.jsName }}__item\"
            style=\"{{ backgroundColor }}\"
            {{ component.renderAttributes(dataAttributesList) }}>
            <span class=\"{{ config.name }}__tooltip\">{{ item.attributes.color }}</span>
        </{{ data.selectionTag }}>
    {% endblock %}
{% endblock %}
", "@ProductGroupWidget/components/molecules/color-selector/color-selector.twig", "/data/src/Pyz/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.twig");
    }
}
