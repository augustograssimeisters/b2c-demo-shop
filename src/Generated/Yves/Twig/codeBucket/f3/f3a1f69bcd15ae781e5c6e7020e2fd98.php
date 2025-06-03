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

/* @@SprykerShop:CatalogPage/components/organisms/active-filter-section/active-filter-section.twig */
class __TwigTemplate_80c96bceb41220d6c15ec710573b8570 extends Template
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
            'component' => [$this, 'block_component'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:CatalogPage/components/organisms/active-filter-section/active-filter-section.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "active-filter-section", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["facets" => [], "filteredFacets" => []], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield from $this->yieldParentBlock("class", $context, $blocks);
        yield " box";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "    ";
        $context["activeFilters"] = [];
        // line 19
        yield "    ";
        $context["facets"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "filteredFacets", [], "any", false, false, false, 19))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "filteredFacets", [], "any", false, false, false, 19)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "facets", [], "any", false, false, false, 19)));
        // line 20
        yield "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["facets"]) || array_key_exists("facets", $context) ? $context["facets"] : (function () { throw new RuntimeError('Variable "facets" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 22
            yield "        ";
            $context["activeFilter"] = Twig\Extension\CoreExtension::include($this->env, $context, [$this->env->getFunction('molecule')->getCallable()(("active-filter-" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 24
$context["filter"], "config", [], "any", false, true, false, 24), "name", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "config", [], "any", false, true, false, 24), "name", [], "any", false, false, false, 24))) : (""))), "CatalogPage"), $this->env->getFunction('molecule')->getCallable()(("active-filter-" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 25
$context["filter"], "config", [], "any", false, true, false, 25), "type", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "config", [], "any", false, true, false, 25), "type", [], "any", false, false, false, 25))) : (""))), "CatalogPage")], ["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 28
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28) . "__item"), "data" => ["filter" =>             // line 30
$context["filter"], "min" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 31
$context["filter"], "min", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "min", [], "any", false, false, false, 31), 0)) : (0)), "max" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 32
$context["filter"], "max", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "max", [], "any", false, false, false, 32), 0)) : (0)), "activeMin" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 33
$context["filter"], "activeMin", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "activeMin", [], "any", false, false, false, 33), 0)) : (0)), "activeMax" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 34
$context["filter"], "activeMax", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "activeMax", [], "any", false, false, false, 34), 0)) : (0))]], false, true);
            // line 40
            yield "
        ";
            // line 41
            if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim((isset($context["activeFilter"]) || array_key_exists("activeFilter", $context) ? $context["activeFilter"] : (function () { throw new RuntimeError('Variable "activeFilter" does not exist.', 41, $this->source); })())))) {
                // line 42
                yield "            ";
                $context["activeFilters"] = Twig\Extension\CoreExtension::merge((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 42, $this->source); })()), [(isset($context["activeFilter"]) || array_key_exists("activeFilter", $context) ? $context["activeFilter"] : (function () { throw new RuntimeError('Variable "activeFilter" does not exist.', 42, $this->source); })())]);
                // line 43
                yield "        ";
            }
            // line 44
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "
    ";
        // line 46
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 46, $this->source); })()))) {
            // line 47
            yield "        ";
            yield from $this->yieldParentBlock("component", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "    <small>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.activeFilters"), "html", null, true);
        yield ":</small>
    ";
        // line 53
        yield Twig\Extension\CoreExtension::join((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 53, $this->source); })()));
        yield "

    <hr>

    <div class=\"text-right\">
        <a class=\"link link--small\" href=\"";
        // line 58
        yield $this->extensions['SprykerShop\Yves\CatalogPage\Twig\CatalogPageTwigExtension']->generateUrlWithoutAllActiveSearchFilters($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "facets", [], "any", false, false, false, 58));
        yield "\">
            ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.resetAllFilters"), "html", null, true);
        yield " &times;
        </a>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/components/organisms/active-filter-section/active-filter-section.twig";
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
        return array (  154 => 59,  150 => 58,  142 => 53,  137 => 52,  130 => 51,  121 => 47,  119 => 46,  116 => 45,  110 => 44,  107 => 43,  104 => 42,  102 => 41,  99 => 40,  97 => 34,  96 => 33,  95 => 32,  94 => 31,  93 => 30,  92 => 28,  91 => 25,  90 => 24,  88 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  68 => 17,  62 => 14,  55 => 13,  51 => 1,  50 => 8,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'active-filter-section',
    tag: 'section'
} %}

{% define data = {
    facets: [],
    filteredFacets: [],
} %}

{%- block class -%}
    {{parent()}} box
{%- endblock -%}

{% block component %}
    {% set activeFilters = [] %}
    {% set facets = data.filteredFacets is not empty ? data.filteredFacets : data.facets %}

    {% for filter in facets %}
        {% set activeFilter = include(
            [
                molecule('active-filter-' ~ filter.config.name | default, 'CatalogPage'),
                molecule('active-filter-' ~ filter.config.type | default, 'CatalogPage')
            ],
            {
                class: config.name ~ '__item',
                data: {
                    filter: filter,
                    min: filter.min | default(0),
                    max: filter.max | default(0),
                    activeMin: filter.activeMin | default(0),
                    activeMax: filter.activeMax | default(0)
                }
            },
            with_context = false,
            ignore_missing = true
        ) %}

        {% if activeFilter | trim is not empty %}
            {% set activeFilters = activeFilters | merge([activeFilter]) %}
        {% endif %}
    {% endfor %}

    {% if activeFilters is not empty %}
        {{parent()}}
    {% endif %}
{% endblock %}

{% block body %}
    <small>{{ 'catalog.filter.activeFilters' | trans }}:</small>
    {{ activeFilters | join | raw }}

    <hr>

    <div class=\"text-right\">
        <a class=\"link link--small\" href=\"{{ generateUrlWithoutAllActiveSearchFilters(data.facets) }}\">
            {{ 'catalog.filter.resetAllFilters' | trans }} &times;
        </a>
    </div>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/organisms/active-filter-section/active-filter-section.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/organisms/active-filter-section/active-filter-section.twig");
    }
}
