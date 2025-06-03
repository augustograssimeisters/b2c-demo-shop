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

/* @@SprykerShop:CatalogPage/components/molecules/active-filter-price-range/active-filter-price-range.twig */
class __TwigTemplate_38b0ed1304f8be7d1eba800f073678e0 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:CatalogPage/components/molecules/active-filter-price-range/active-filter-price-range.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "active-filter-price-range"], $context['config']);        // line 11
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["filter" =>         // line 12
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 12, $this->source); })()), "activeMin" =>         // line 13
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 13, $this->source); })()), "activeMax" =>         // line 14
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 14, $this->source); })()), "min" => 0, "max" => 0, "hasParameterName" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 17
($context["app"] ?? null), "request", [], "any", false, true, false, 17), "query", [], "any", false, true, false, 17), "has", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "filter", [], "any", false, false, false, 17), "config", [], "any", false, false, false, 17), "parameterName", [], "any", false, false, false, 17)], "method", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 17), "query", [], "any", false, true, false, 17), "has", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "filter", [], "any", false, false, false, 17), "config", [], "any", false, false, false, 17), "parameterName", [], "any", false, false, false, 17)], "method", false, false, false, 17), false)) : (false))], $context['data']);        // line 20
        $context["currentValue"] = (($this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "activeMin", [], "any", false, false, false, 20)) . " - ") . $this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "activeMax", [], "any", false, false, false, 20)));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        $context["isNotDefault"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "hasParameterName", [], "any", false, false, false, 23) && $this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin"));
        // line 24
        yield "
    ";
        // line 25
        if ((isset($context["isNotDefault"]) || array_key_exists("isNotDefault", $context) ? $context["isNotDefault"] : (function () { throw new RuntimeError('Variable "isNotDefault" does not exist.', 25, $this->source); })())) {
            // line 26
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("active-filter", "CatalogPage"), "@@SprykerShop:CatalogPage/components/molecules/active-filter-price-range/active-filter-price-range.twig", 26)->unwrap()->yield(CoreExtension::toArray(["data" => ["filter" => CoreExtension::getAttribute($this->env, $this->source,             // line 28
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "filter", [], "any", false, false, false, 28), "value" =>             // line 29
(isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 29, $this->source); })())]]));
            // line 32
            yield "    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/components/molecules/active-filter-price-range/active-filter-price-range.twig";
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
        return array (  79 => 32,  77 => 29,  76 => 28,  74 => 26,  72 => 25,  69 => 24,  66 => 23,  59 => 22,  55 => 1,  53 => 20,  52 => 17,  51 => 14,  50 => 13,  49 => 12,  48 => 11,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'active-filter-price-range',
} %}

{#
    @deprecated property \"min\" is deprecated.
    @deprecated property \"max\" is deprecated.
#}
{% define data = {
    filter: required,
    activeMin: required,
    activeMax: required,
    min: 0,
    max: 0,
    hasParameterName: app.request.query.has(data.filter.config.parameterName) | default(false),
} %}

{% set currentValue = data.activeMin | money  ~ ' - ' ~ data.activeMax | money %}

{% block component %}
    {% set isNotDefault = data.hasParameterName and can('SeePricePermissionPlugin') %}

    {% if isNotDefault %}
        {% include molecule('active-filter', 'CatalogPage') with {
            data: {
                filter: data.filter,
                value: currentValue,
            },
        } only %}
    {% endif %}
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/active-filter-price-range/active-filter-price-range.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/active-filter-price-range/active-filter-price-range.twig");
    }
}
