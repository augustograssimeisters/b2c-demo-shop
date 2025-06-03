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

/* @CatalogPage/components/molecules/active-filter-rating/active-filter-rating.twig */
class __TwigTemplate_ed2bdb38d283fde6d978ef341001eeb0 extends Template
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
        // line 2
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("active-filter", "CatalogPage"), "@CatalogPage/components/molecules/active-filter-rating/active-filter-rating.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["value" => ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["data"] ?? null), "filter", [], "any", false, true, false, 5), "activeMin", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", false, true, false, 5), "activeMin", [], "any", false, false, false, 5), 0)) : (0)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.active_rating_up")), "hasParameterName" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["app"] ?? null), "request", [], "any", false, true, false, 6), "query", [], "any", false, true, false, 6), "has", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "filter", [], "any", false, false, false, 6), "config", [], "any", false, false, false, 6), "parameterName", [], "any", false, false, false, 6)], "method", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 6), "query", [], "any", false, true, false, 6), "has", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "filter", [], "any", false, false, false, 6), "config", [], "any", false, false, false, 6), "parameterName", [], "any", false, false, false, 6)], "method", false, false, false, 6), false)) : (false))], $context['data']);        // line 2
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "hasParameterName", [], "any", false, false, false, 10)) {
            // line 11
            yield "        ";
            yield from $this->yieldParentBlock("component", $context, $blocks);
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
        return "@CatalogPage/components/molecules/active-filter-rating/active-filter-rating.twig";
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
        return array (  64 => 11,  61 => 10,  54 => 9,  50 => 2,  49 => 6,  48 => 5,  47 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# fe-sniffer:disabled correct-twig-component-structure #}
{% extends molecule('active-filter', 'CatalogPage') %}

{% define data = {
    value: data.filter.activeMin | default(0) ~ ' ' ~ 'catalog.filter.active_rating_up' | trans,
    hasParameterName: app.request.query.has(data.filter.config.parameterName) | default(false),
} %}

{% block component %}
    {% if data.hasParameterName %}
        {{ parent() }}
    {% endif %}
{% endblock %}
", "@CatalogPage/components/molecules/active-filter-rating/active-filter-rating.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/active-filter-rating/active-filter-rating.twig");
    }
}
