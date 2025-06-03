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

/* @CatalogPage/components/molecules/active-filter-price-range/active-filter-price-range.twig */
class __TwigTemplate_24a2064bca41567a59d22366cb9f1635 extends Template
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
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("active-filter-price-range", "@SprykerShop:CatalogPage"), "@CatalogPage/components/molecules/active-filter-price-range/active-filter-price-range.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "has", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "filter", [], "any", false, false, false, 4), "config", [], "any", false, false, false, 4), "parameterName", [], "any", false, false, false, 4)], "method", false, false, false, 4)) {
            // line 5
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("active-filter", "CatalogPage"), "@CatalogPage/components/molecules/active-filter-price-range/active-filter-price-range.twig", 5)->unwrap()->yield(CoreExtension::toArray(["data" => ["filter" => CoreExtension::getAttribute($this->env, $this->source,             // line 7
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "filter", [], "any", false, false, false, 7), "value" =>             // line 8
(isset($context["currentValue"]) || array_key_exists("currentValue", $context) ? $context["currentValue"] : (function () { throw new RuntimeError('Variable "currentValue" does not exist.', 8, $this->source); })())]]));
            // line 11
            yield "    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/molecules/active-filter-price-range/active-filter-price-range.twig";
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
        return array (  65 => 11,  63 => 8,  62 => 7,  60 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('active-filter-price-range', '@SprykerShop:CatalogPage') %}

{% block component %}
    {% if app.request.query.has(data.filter.config.parameterName) %}
        {% include molecule('active-filter', 'CatalogPage') with {
            data: {
                filter: data.filter,
                value: currentValue,
            },
        } only %}
    {% endif %}
{% endblock %}
", "@CatalogPage/components/molecules/active-filter-price-range/active-filter-price-range.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/active-filter-price-range/active-filter-price-range.twig");
    }
}
