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

/* @ShopUi/components/molecules/ajax-loader/ajax-loader.twig */
class __TwigTemplate_640ebe28672b4c0f93aef37df929b747 extends Template
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
            'class' => [$this, 'block_class'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/ajax-loader/ajax-loader.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "ajax-loader", "tag" => "ajax-loader"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["label" => null, "showSpinnerOnLoad" => false], $context['data']);        // line 14
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["provider-selector" => "ajax-provider", "provider-class-name" => "", "parent-class-name" => ""], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->yieldParentBlock("class", $context, $blocks);
        yield " ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "showSpinnerOnLoad", [], "any", false, false, false, 20)) {
            yield "is-invisible";
        }
        yield " grid grid--center grid--middle";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        $context["spinnerModifiers"] = ((CoreExtension::inFilter("big", (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 23, $this->source); })()))) ? (["big"]) : ([]));
        // line 24
        yield "
    <span class=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        yield "__layout grid grid--middle\">
        ";
        // line 26
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/ajax-loader/ajax-loader.twig", 26)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27) . "__spinner"), "modifiers" =>         // line 28
(isset($context["spinnerModifiers"]) || array_key_exists("spinnerModifiers", $context) ? $context["spinnerModifiers"] : (function () { throw new RuntimeError('Variable "spinnerModifiers" does not exist.', 28, $this->source); })()), "data" => ["name" => "spinner"]]));
        // line 33
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "label", [], "any", false, false, false, 33)) {
            // line 34
            yield "            <span class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
            yield "__label\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "label", [], "any", false, false, false, 34), "html", null, true);
            yield "</span>
        ";
        }
        // line 36
        yield "    </span>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/ajax-loader/ajax-loader.twig";
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
        return array (  103 => 36,  95 => 34,  92 => 33,  90 => 28,  89 => 27,  88 => 26,  84 => 25,  81 => 24,  78 => 23,  71 => 22,  55 => 20,  51 => 1,  50 => 14,  49 => 8,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'ajax-loader',
    tag: 'ajax-loader',
} %}

{% define data = {
    label: null,
    showSpinnerOnLoad: false,
} %}

{# @deprecated property \"provider-selector\" is deprecated: use \"provider-class-name\" instead. #}
{% define attributes = {
    'provider-selector': 'ajax-provider',
    'provider-class-name': '',
    'parent-class-name': '',
} %}

{% block class %}{{parent()}} {% if not data.showSpinnerOnLoad %}is-invisible{% endif %} grid grid--center grid--middle{% endblock %}

{% block body %}
    {% set spinnerModifiers = 'big' in modifiers ? ['big'] : [] %}

    <span class=\"{{config.name}}__layout grid grid--middle\">
        {% include atom('icon') with {
            class: config.name ~ '__spinner',
            modifiers: spinnerModifiers,
            data: {
                name: 'spinner',
            },
        } only %}
        {% if data.label %}
            <span class=\"{{config.name}}__label\">{{data.label}}</span>
        {% endif %}
    </span>
{% endblock %}
", "@ShopUi/components/molecules/ajax-loader/ajax-loader.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/ajax-loader/ajax-loader.twig");
    }
}
