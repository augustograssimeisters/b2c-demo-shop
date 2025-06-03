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

/* @@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig */
class __TwigTemplate_e3511a94b769e88ceaa548e86939180f extends Template
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
            'filters' => [$this, 'block_filters'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-section", "tag" => "section"], $context['config']);        // line 10
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["facets" => [], "filteredFacets" => [], "filterPath" => null, "categories" => [], "category" => null, "isEmptyCategoryFilterValueVisible" => null, "parentJsName" => "", "numberFormatConfig" => []], $context['data']);        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "    ";
        $context["facets"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "filteredFacets", [], "any", false, false, false, 22))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "filteredFacets", [], "any", false, false, false, 22)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "facets", [], "any", false, false, false, 22)));
        // line 23
        yield "    ";
        $context["triggerButtonJsName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "parentJsName", [], "any", false, false, false, 23)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "parentJsName", [], "any", false, false, false, 23) . "__trigger")) : (""));
        // line 24
        yield "
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["facets"]) || array_key_exists("facets", $context) ? $context["facets"] : (function () { throw new RuntimeError('Variable "facets" does not exist.', 25, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 26
            yield "        ";
            $context["filterHasValues"] = ( !CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "values", [], "any", true, true, false, 26) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "values", [], "any", false, false, false, 26)) > 0));
            // line 27
            yield "
        ";
            // line 28
            if ((isset($context["filterHasValues"]) || array_key_exists("filterHasValues", $context) ? $context["filterHasValues"] : (function () { throw new RuntimeError('Variable "filterHasValues" does not exist.', 28, $this->source); })())) {
                // line 29
                yield "            ";
                yield from $this->unwrap()->yieldBlock('filters', $context, $blocks);
                // line 57
                yield "
            <hr>
        ";
            }
            // line 60
            yield "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "
    <button type=\"button\" class=\"button button--expand button--small ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["triggerButtonJsName"]) || array_key_exists("triggerButtonJsName", $context) ? $context["triggerButtonJsName"] : (function () { throw new RuntimeError('Variable "triggerButtonJsName" does not exist.', 62, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.button"), "html", null, true);
        yield "
        ";
        // line 64
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig", 64)->unwrap()->yield(CoreExtension::toArray(["data" => ["name" => "filter"]]));
        // line 69
        yield "    </button>
";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "                ";
        $context["filterName"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "config", [], "any", false, true, false, 30), "name", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "config", [], "any", false, true, false, 30), "name", [], "any", false, false, false, 30))) : (""));
        // line 31
        yield "                ";
        $context["filterType"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "config", [], "any", false, true, false, 31), "type", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "config", [], "any", false, true, false, 31), "type", [], "any", false, false, false, 31))) : (""));
        // line 32
        yield "
               ";
        // line 33
        if (((isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 33, $this->source); })()) == "category")) {
            // line 34
            yield "                   <h2 class=\"title--h6\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.filter." . Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["filterName"]) || array_key_exists("filterName", $context) ? $context["filterName"] : (function () { throw new RuntimeError('Variable "filterName" does not exist.', 34, $this->source); })())))), "html", null, true);
            yield "</h2>
               ";
        }
        // line 36
        yield "
                ";
        // line 37
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate([$this->env->getFunction('molecule')->getCallable()(("filter-" .             // line 38
(isset($context["filterName"]) || array_key_exists("filterName", $context) ? $context["filterName"] : (function () { throw new RuntimeError('Variable "filterName" does not exist.', 38, $this->source); })())), "CatalogPage"), $this->env->getFunction('molecule')->getCallable()(("filter-" .             // line 39
(isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 39, $this->source); })())), "CatalogPage")], "@@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig", 37);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield(CoreExtension::toArray(["data" => ["filterPath" => CoreExtension::getAttribute($this->env, $this->source,             // line 42
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "filterPath", [], "any", false, false, false, 42), "categories" => CoreExtension::getAttribute($this->env, $this->source,             // line 43
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "categories", [], "any", false, false, false, 43), "category" => CoreExtension::getAttribute($this->env, $this->source,             // line 44
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })()), "category", [], "any", false, false, false, 44), "filter" =>             // line 45
(isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 45, $this->source); })()), "parameter" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 46
($context["filter"] ?? null), "config", [], "any", false, true, false, 46), "parameterName", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "config", [], "any", false, true, false, 46), "parameterName", [], "any", false, false, false, 46), "")) : ("")), "min" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 47
($context["filter"] ?? null), "min", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "min", [], "any", false, false, false, 47), 0)) : (0)), "max" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 48
($context["filter"] ?? null), "max", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "max", [], "any", false, false, false, 48), 0)) : (0)), "activeMin" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 49
($context["filter"] ?? null), "activeMin", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "activeMin", [], "any", false, false, false, 49), 0)) : (0)), "activeMax" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 50
($context["filter"] ?? null), "activeMax", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["filter"] ?? null), "activeMax", [], "any", false, false, false, 50), 0)) : (0)), "isEmptyCategoryFilterValueVisible" => CoreExtension::getAttribute($this->env, $this->source,             // line 51
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), "isEmptyCategoryFilterValueVisible", [], "any", false, false, false, 51), "parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 52
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 52, $this->source); })()), "parentJsName", [], "any", false, false, false, 52), "numberFormatConfig" => CoreExtension::getAttribute($this->env, $this->source,             // line 53
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()), "numberFormatConfig", [], "any", false, false, false, 53)]]));
        }
        // line 56
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig";
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
        return array (  187 => 56,  184 => 53,  183 => 52,  182 => 51,  181 => 50,  180 => 49,  179 => 48,  178 => 47,  177 => 46,  176 => 45,  175 => 44,  174 => 43,  173 => 42,  167 => 39,  166 => 38,  163 => 37,  160 => 36,  154 => 34,  152 => 33,  149 => 32,  146 => 31,  143 => 30,  136 => 29,  130 => 69,  128 => 64,  124 => 63,  120 => 62,  117 => 61,  103 => 60,  98 => 57,  95 => 29,  93 => 28,  90 => 27,  87 => 26,  70 => 25,  67 => 24,  64 => 23,  61 => 22,  54 => 21,  50 => 3,  49 => 10,  48 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var filter.config \\Generated\\Shared\\Transfer\\FacetConfigTransfer #}

{% extends model('component') %}

{% define config = {
    name: 'filter-section',
    tag: 'section',
} %}

{% define data = {
    facets: [],
    filteredFacets: [],
    filterPath: null,
    categories: [],
    category: null,
    isEmptyCategoryFilterValueVisible: null,
    parentJsName: '',
    numberFormatConfig: {},
} %}

{% block body %}
    {% set facets = data.filteredFacets is not empty ? data.filteredFacets : data.facets %}
    {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

    {% for filter in facets %}
        {% set filterHasValues = filter.values is not defined or filter.values | length > 0 %}

        {% if filterHasValues %}
            {% block filters %}
                {% set filterName = filter.config.name | default %}
                {% set filterType = filter.config.type | default %}

               {% if filterType == 'category' %}
                   <h2 class=\"title--h6\">{{ ('product.filter.' ~ filterName | lower) | trans }}</h2>
               {% endif %}

                {% include [
                    molecule('filter-' ~ filterName, 'CatalogPage'),
                    molecule('filter-' ~ filterType, 'CatalogPage')
                ] ignore missing with {
                    data: {
                        filterPath: data.filterPath,
                        categories: data.categories,
                        category: data.category,
                        filter: filter,
                        parameter: filter.config.parameterName | default(''),
                        min: filter.min | default(0),
                        max: filter.max | default(0),
                        activeMin: filter.activeMin | default(0),
                        activeMax: filter.activeMax | default(0),
                        isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                        parentJsName: data.parentJsName,
                        numberFormatConfig: data.numberFormatConfig,
                    },
                } only %}
            {% endblock %}

            <hr>
        {% endif %}
    {% endfor %}

    <button type=\"button\" class=\"button button--expand button--small {{ triggerButtonJsName }}\">
        {{ 'catalog.filter.button' | trans }}
        {% include atom('icon') with {
            data: {
                name: 'filter',
            },
        } only %}
    </button>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/organisms/filter-section/filter-section.twig");
    }
}
