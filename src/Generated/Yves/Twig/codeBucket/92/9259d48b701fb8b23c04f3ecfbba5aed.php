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

/* @ShopUi/components/atoms/node/node.twig */
class __TwigTemplate_def86c3a9e0f0b0cc4ea8bd1634073ce extends Template
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
            'component' => [$this, 'block_component'],
            'body' => [$this, 'block_body'],
            'url' => [$this, 'block_url'],
            'externalUrl' => [$this, 'block_externalUrl'],
            'other' => [$this, 'block_other'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/atoms/node/node.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "node", "tag" => "span"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["node" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })())], $context['data']);        // line 12
        $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Ymd");
        // line 13
        $context["node"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "node", [], "any", false, false, false, 13);
        // line 14
        $context["type"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 14, $this->source); })()), "nodeType", [], "any", false, false, false, 14);
        // line 15
        $context["isActive"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 15, $this->source); })()), "isActive", [], "any", false, false, false, 15);
        // line 16
        $context["isValidFrom"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "isValidFrom", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "isValidFrom", [], "any", false, false, false, 16), (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 16, $this->source); })()), "validFrom", [], "any", false, false, false, 16)) || ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 16, $this->source); })()), "validFrom", [], "any", false, false, false, 16), "Ymd") <= (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 16, $this->source); })()))))) : ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 16, $this->source); })()), "validFrom", [], "any", false, false, false, 16)) || ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 16, $this->source); })()), "validFrom", [], "any", false, false, false, 16), "Ymd") <= (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 16, $this->source); })())))));
        // line 17
        $context["isValidTo"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "isValidTo", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "isValidTo", [], "any", false, false, false, 17), (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 17, $this->source); })()), "validTo", [], "any", false, false, false, 17)) || ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 17, $this->source); })()), "validTo", [], "any", false, false, false, 17), "Ymd") >= (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 17, $this->source); })()))))) : ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 17, $this->source); })()), "validTo", [], "any", false, false, false, 17)) || ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 17, $this->source); })()), "validTo", [], "any", false, false, false, 17), "Ymd") >= (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 17, $this->source); })())))));
        // line 18
        $context["isActiveAndValid"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "isActiveAndValid", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "isActiveAndValid", [], "any", false, false, false, 18), (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 18, $this->source); })()) && (isset($context["isValidFrom"]) || array_key_exists("isValidFrom", $context) ? $context["isValidFrom"] : (function () { throw new RuntimeError('Variable "isValidFrom" does not exist.', 18, $this->source); })())) && (isset($context["isValidTo"]) || array_key_exists("isValidTo", $context) ? $context["isValidTo"] : (function () { throw new RuntimeError('Variable "isValidTo" does not exist.', 18, $this->source); })())))) : ((((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 18, $this->source); })()) && (isset($context["isValidFrom"]) || array_key_exists("isValidFrom", $context) ? $context["isValidFrom"] : (function () { throw new RuntimeError('Variable "isValidFrom" does not exist.', 18, $this->source); })())) && (isset($context["isValidTo"]) || array_key_exists("isValidTo", $context) ? $context["isValidTo"] : (function () { throw new RuntimeError('Variable "isValidTo" does not exist.', 18, $this->source); })()))));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "    ";
        if ((isset($context["isActiveAndValid"]) || array_key_exists("isActiveAndValid", $context) ? $context["isActiveAndValid"] : (function () { throw new RuntimeError('Variable "isActiveAndValid" does not exist.', 21, $this->source); })())) {
            // line 22
            yield "        ";
            yield from $this->yieldParentBlock("component", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        if (((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 27, $this->source); })()) == "category") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 27, $this->source); })()) == "link")) || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 27, $this->source); })()) == "cms_page"))) {
            // line 28
            yield "        ";
            yield from $this->unwrap()->yieldBlock('url', $context, $blocks);
            // line 29
            yield "    ";
        } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()) == "external_url")) {
            // line 30
            yield "        ";
            yield from $this->unwrap()->yieldBlock('externalUrl', $context, $blocks);
            // line 31
            yield "    ";
        } else {
            // line 32
            yield "        ";
            yield from $this->unwrap()->yieldBlock('other', $context, $blocks);
            // line 33
            yield "    ";
        }
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_url(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_externalUrl(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_other(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/atoms/node/node.twig";
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
        return array (  142 => 32,  132 => 30,  122 => 28,  116 => 33,  113 => 32,  110 => 31,  107 => 30,  104 => 29,  101 => 28,  98 => 27,  91 => 26,  82 => 22,  79 => 21,  72 => 20,  68 => 1,  66 => 18,  64 => 17,  62 => 16,  60 => 15,  58 => 14,  56 => 13,  54 => 12,  53 => 9,  52 => 8,  51 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'node',
    tag: 'span',
} %}

{% define data = {
    node: required,
} %}

{% set today = 'now' | date('Ymd') %}
{% set node = data.node %}
{% set type = node.nodeType %}
{% set isActive = node.isActive %}
{% set isValidFrom = node.isValidFrom | default(node.validFrom is empty or node.validFrom | date('Ymd') <= today) %}
{% set isValidTo = node.isValidTo | default(node.validTo is empty or node.validTo | date('Ymd') >= today) %}
{% set isActiveAndValid = node.isActiveAndValid | default(isActive and isValidFrom and isValidTo) %}

{% block component %}
    {% if isActiveAndValid %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block body %}
    {% if type == 'category' or type == 'link' or type == 'cms_page' %}
        {% block url %}{% endblock %}
    {% elseif type == 'external_url' %}
        {% block externalUrl %}{% endblock %}
    {% else %}
        {% block other %}{% endblock %}
    {% endif %}
{% endblock %}
", "@ShopUi/components/atoms/node/node.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/atoms/node/node.twig");
    }
}
