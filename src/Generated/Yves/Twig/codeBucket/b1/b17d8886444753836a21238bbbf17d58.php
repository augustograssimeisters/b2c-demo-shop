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

/* @CatalogPage/components/molecules/filter-price-range/filter-price-range.twig */
class __TwigTemplate_55f5cb9a7eb67509364bf47dfbc30f4a extends Template
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
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("filter-range", "CatalogPage"), "@CatalogPage/components/molecules/filter-price-range/filter-price-range.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-price-range"], $context['config']);        // line 7
        $context["data"] = Twig\Extension\CoreExtension::merge((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), ["min" => $this->env->getFilter('floor')->getCallable()($this->env->getFilter('moneyRaw')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["data"] ?? null), "min", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "min", [], "any", false, false, false, 8), 0)) : (0)))), "activeMin" => $this->env->getFilter('floor')->getCallable()($this->env->getFilter('moneyRaw')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["data"] ?? null), "activeMin", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "activeMin", [], "any", false, false, false, 9), 0)) : (0)))), "max" => $this->env->getFilter('ceil')->getCallable()($this->env->getFilter('moneyRaw')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["data"] ?? null), "max", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "max", [], "any", false, false, false, 10), 0)) : (0)))), "activeMax" => $this->env->getFilter('ceil')->getCallable()($this->env->getFilter('moneyRaw')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["data"] ?? null), "activeMax", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "activeMax", [], "any", false, false, false, 11), 0)) : (0))))]);
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 15
            yield "        ";
            yield from $this->yieldParentBlock("body", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/molecules/filter-price-range/filter-price-range.twig";
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
        return array (  68 => 15,  65 => 14,  58 => 13,  54 => 1,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('filter-range', 'CatalogPage') %}

{% define config = {
    name: 'filter-price-range'
} %}

{% set data = data | merge({
    min: (data.min | default(0)) | moneyRaw | floor,
    activeMin: (data.activeMin | default(0)) | moneyRaw | floor,
    max: (data.max | default(0)) | moneyRaw | ceil,
    activeMax: (data.activeMax | default(0)) | moneyRaw | ceil
}) %}
{% block body %}
    {% if can('SeePricePermissionPlugin') %}
        {{ parent() }}
    {% endif %}
{% endblock %}


", "@CatalogPage/components/molecules/filter-price-range/filter-price-range.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/filter-price-range/filter-price-range.twig");
    }
}
