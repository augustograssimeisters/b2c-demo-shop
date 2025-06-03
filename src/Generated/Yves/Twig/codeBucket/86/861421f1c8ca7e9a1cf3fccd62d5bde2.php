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

/* @CatalogPage/components/molecules/filter-range/filter-range.twig */
class __TwigTemplate_c716c80a1612da1172873ee7458f2c55 extends Template
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
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("filter-range", "@SprykerShop:CatalogPage"), "@CatalogPage/components/molecules/filter-range/filter-range.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        $context["filtersEqual"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "max", [], "any", false, false, false, 4) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "min", [], "any", false, false, false, 4));
        // line 5
        yield "
    ";
        // line 6
        if ( !(isset($context["filtersEqual"]) || array_key_exists("filtersEqual", $context) ? $context["filtersEqual"] : (function () { throw new RuntimeError('Variable "filtersEqual" does not exist.', 6, $this->source); })())) {
            // line 7
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("range-slider"), "@CatalogPage/components/molecules/filter-range/filter-range.twig", 7)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["horizontal"], "data" => ["parameter" => CoreExtension::getAttribute($this->env, $this->source,             // line 10
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "parameter", [], "any", false, false, false, 10), "inputAttributes" =>             // line 11
(isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 11, $this->source); })())], "attributes" => ["value-min" => CoreExtension::getAttribute($this->env, $this->source,             // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "min", [], "any", false, false, false, 14), "value-max" => CoreExtension::getAttribute($this->env, $this->source,             // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "max", [], "any", false, false, false, 15), "active-min" => CoreExtension::getAttribute($this->env, $this->source,             // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "activeMin", [], "any", false, false, false, 16), "active-max" => CoreExtension::getAttribute($this->env, $this->source,             // line 17
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "activeMax", [], "any", false, false, false, 17)]]));
            // line 20
            yield "    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/molecules/filter-range/filter-range.twig";
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
        return array (  74 => 20,  72 => 17,  71 => 16,  70 => 15,  69 => 14,  68 => 11,  67 => 10,  65 => 7,  63 => 6,  60 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('filter-range', '@SprykerShop:CatalogPage') %}

{% block body %}
    {% set filtersEqual = data.max is same as(data.min) %}

    {% if not filtersEqual %}
        {% include molecule('range-slider') with {
            modifiers: ['horizontal'],
            data: {
                parameter: data.parameter,
                inputAttributes: inputAttributes,
            },
            attributes: {
                'value-min': data.min,
                'value-max': data.max,
                'active-min': data.activeMin,
                'active-max': data.activeMax,
            },
        } only %}
    {% endif %}
{% endblock %}
", "@CatalogPage/components/molecules/filter-range/filter-range.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/filter-range/filter-range.twig");
    }
}
