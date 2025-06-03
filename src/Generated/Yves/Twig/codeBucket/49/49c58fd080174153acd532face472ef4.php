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

/* @CatalogPage/components/organisms/filter-section/filter-section.twig */
class __TwigTemplate_03d52349bb7029d3eda5276d89c56c76 extends Template
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
            'filter' => [$this, 'block_filter'],
            'actions' => [$this, 'block_actions'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("filter-section", "@SprykerShop:CatalogPage"), "@CatalogPage/components/organisms/filter-section/filter-section.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["togglerClass" => ""], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "__top-panel is-hidden-xl-only\">
        <h3 class=\"text-center title title--medium spacing-bottom\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.filter"), "html", null, true);
        yield "</h3>
        <span class=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        yield "__top-panel-button ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "togglerClass", [], "any", false, false, false, 10), "html", null, true);
        yield "\">
            ";
        // line 11
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/organisms/filter-section/filter-section.twig", 11)->unwrap()->yield(CoreExtension::toArray(["data" => ["name" => "close"]]));
        // line 16
        yield "        </span>

        <div class=\"grid grid--middle ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "jsName", [], "any", false, false, false, 18), "html", null, true);
        yield "__sorting\"></div>
    </div>

    ";
        // line 21
        yield from $this->unwrap()->yieldBlock('filters', $context, $blocks);
        // line 69
        yield "
    ";
        // line 70
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-accordion"), "@CatalogPage/components/organisms/filter-section/filter-section.twig", 70)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["trigger-class-name" => (CoreExtension::getAttribute($this->env, $this->source,         // line 72
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 72, $this->source); })()), "jsName", [], "any", false, false, false, 72) . "__trigger")]]));
        // line 75
        yield "
    ";
        // line 76
        yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filters(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "        ";
        $context["facets"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "filteredFacets", [], "any", false, false, false, 22))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "filteredFacets", [], "any", false, false, false, 22)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "facets", [], "any", false, false, false, 22)));
        // line 23
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["facets"]) || array_key_exists("facets", $context) ? $context["facets"] : (function () { throw new RuntimeError('Variable "facets" does not exist.', 23, $this->source); })()));
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
            // line 24
            yield "            ";
            $context["filterHasValues"] = ( !CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "values", [], "any", true, true, false, 24) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "values", [], "any", false, false, false, 24)) > 0));
            // line 25
            yield "
            ";
            // line 26
            if ((isset($context["filterHasValues"]) || array_key_exists("filterHasValues", $context) ? $context["filterHasValues"] : (function () { throw new RuntimeError('Variable "filterHasValues" does not exist.', 26, $this->source); })())) {
                // line 27
                yield "                ";
                yield from $this->unwrap()->yieldBlock('filter', $context, $blocks);
                // line 66
                yield "            ";
            }
            // line 67
            yield "        ";
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
        // line 68
        yield "    ";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "                    ";
        yield from         $this->loadTemplate("@CatalogPage/components/organisms/filter-section/filter-section.twig", "@CatalogPage/components/organisms/filter-section/filter-section.twig", 28, "554431999")->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["filter", "with-bottom-border", ((CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 29, $this->source); })()), "first", [], "any", false, false, false, 29)) ? ("mobile") : (""))], "data" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.filter." . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31)))), "triggerClass" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 32, $this->source); })()), "first", [], "any", false, false, false, 32)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "jsName", [], "any", false, false, false, 32) . "__trigger-category")) : ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "jsName", [], "any", false, false, false, 32) . "__trigger"))), "targetClass" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "jsName", [], "any", false, false, false, 33) . "__target--") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33)), "isTogglerIncluded" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 34, $this->source); })()), "first", [], "any", false, false, false, 34)) ? (true) : (false)), "hiddenClass" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 35, $this->source); })()), "first", [], "any", false, false, false, 35)) ? ("is-hidden-sm-only") : ("is-hidden"))], "embed" => ["filterPath" => CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "filterPath", [], "any", false, false, false, 38), "categories" => CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "categories", [], "any", false, false, false, 39), "filter" =>         // line 40
(isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 40, $this->source); })()), "parentJsName" => CoreExtension::getAttribute($this->env, $this->source,         // line 41
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "parentJsName", [], "any", false, false, false, 41), "numberFormatConfig" => CoreExtension::getAttribute($this->env, $this->source,         // line 42
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "numberFormatConfig", [], "any", false, false, false, 42)]]));
        // line 65
        yield "                ";
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "        ";
        $context["triggerButtonJsName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 77, $this->source); })()), "parentJsName", [], "any", false, false, false, 77)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 77, $this->source); })()), "parentJsName", [], "any", false, false, false, 77) . "__trigger")) : (""));
        // line 78
        yield "
        <div class=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79), "html", null, true);
        yield "__actions\">
            <button type=\"button\" class=\"button button--large button--expand ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["triggerButtonJsName"]) || array_key_exists("triggerButtonJsName", $context) ? $context["triggerButtonJsName"] : (function () { throw new RuntimeError('Variable "triggerButtonJsName" does not exist.', 80, $this->source); })()), "html", null, true);
        yield "\">
                ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.button"), "html", null, true);
        yield "
            </button>
        </div>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/organisms/filter-section/filter-section.twig";
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
        return array (  213 => 81,  209 => 80,  205 => 79,  202 => 78,  199 => 77,  192 => 76,  187 => 65,  185 => 42,  184 => 41,  183 => 40,  182 => 39,  181 => 38,  180 => 35,  179 => 34,  178 => 33,  177 => 32,  176 => 31,  175 => 29,  173 => 28,  166 => 27,  161 => 68,  147 => 67,  144 => 66,  141 => 27,  139 => 26,  136 => 25,  133 => 24,  115 => 23,  112 => 22,  105 => 21,  100 => 76,  97 => 75,  95 => 72,  94 => 70,  91 => 69,  89 => 21,  83 => 18,  79 => 16,  77 => 11,  71 => 10,  67 => 9,  62 => 8,  55 => 7,  51 => 1,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends organism('filter-section', '@SprykerShop:CatalogPage') %}

{% define data = {
    togglerClass: '',
} %}

{% block body %}
    <div class=\"{{ config.name }}__top-panel is-hidden-xl-only\">
        <h3 class=\"text-center title title--medium spacing-bottom\">{{ 'catalog.filter.filter' | trans }}</h3>
        <span class=\"{{ config.name }}__top-panel-button {{ data.togglerClass }}\">
            {% include atom('icon') with {
                data: {
                    name: 'close'
                }
            } only %}
        </span>

        <div class=\"grid grid--middle {{ config.jsName }}__sorting\"></div>
    </div>

    {% block filters %}
        {% set facets = data.filteredFacets is not empty ? data.filteredFacets : data.facets %}
        {% for filter in facets %}
            {% set filterHasValues = (filter.values is not defined) or (filter.values | length > 0) %}

            {% if filterHasValues %}
                {% block filter %}
                    {% embed molecule('toggler-item') with {
                        modifiers: ['filter', 'with-bottom-border', (loop.first ? 'mobile' : '')],
                        data: {
                            title: ('product.filter.' ~ filter.name | lower) | trans,
                            triggerClass: loop.first ? config.jsName ~ '__trigger-category' : config.jsName ~ '__trigger',
                            targetClass: config.jsName ~ '__target--' ~ filter.name,
                            isTogglerIncluded: loop.first ? true : false,
                            hiddenClass: loop.first ? 'is-hidden-sm-only' : 'is-hidden',
                        },
                        embed: {
                            filterPath: data.filterPath,
                            categories: data.categories,
                            filter: filter,
                            parentJsName: data.parentJsName,
                            numberFormatConfig: data.numberFormatConfig,
                        },
                    } only %}
                        {% block contentText %}
                            {% include [
                                molecule('filter-' ~ embed.filter.config.name, 'CatalogPage'),
                                molecule('filter-' ~ embed.filter.config.type, 'CatalogPage')
                                ] ignore missing with {
                                data: {
                                    filterPath: embed.filterPath,
                                    categories: embed.categories,
                                    filter: embed.filter,
                                    parameter: embed.filter.config.parameterName | default(''),
                                    min: embed.filter.min | default(0),
                                    max: embed.filter.max | default(0),
                                    activeMin: embed.filter.activeMin | default(0),
                                    activeMax: embed.filter.activeMax | default(0),
                                    parentJsName: embed.parentJsName,
                                    numberFormatConfig: embed.numberFormatConfig,
                                },
                            } only %}
                        {% endblock %}
                    {% endembed %}
                {% endblock %}
            {% endif %}
        {% endfor %}
    {% endblock %}

    {% include molecule('toggler-accordion') with {
        attributes: {
            'trigger-class-name': config.jsName ~ '__trigger',
        },
    } only %}

    {% block actions %}
        {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

        <div class=\"{{ config.name }}__actions\">
            <button type=\"button\" class=\"button button--large button--expand {{ triggerButtonJsName }}\">
                {{ 'catalog.filter.button' | trans }}
            </button>
        </div>
    {% endblock %}
{% endblock %}
", "@CatalogPage/components/organisms/filter-section/filter-section.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/organisms/filter-section/filter-section.twig");
    }
}


/* @CatalogPage/components/organisms/filter-section/filter-section.twig */
class __TwigTemplate_03d52349bb7029d3eda5276d89c56c76___554431999 extends Template
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
            'contentText' => [$this, 'block_contentText'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 28
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-item"), "@CatalogPage/components/organisms/filter-section/filter-section.twig", 28);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contentText(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "                            ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate([$this->env->getFunction('molecule')->getCallable()(("filter-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 47
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 47, $this->source); })()), "filter", [], "any", false, false, false, 47), "config", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47)), "CatalogPage"), $this->env->getFunction('molecule')->getCallable()(("filter-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 48
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 48, $this->source); })()), "filter", [], "any", false, false, false, 48), "config", [], "any", false, false, false, 48), "type", [], "any", false, false, false, 48)), "CatalogPage")], "@CatalogPage/components/organisms/filter-section/filter-section.twig", 46);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield(CoreExtension::toArray(["data" => ["filterPath" => CoreExtension::getAttribute($this->env, $this->source,             // line 51
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 51, $this->source); })()), "filterPath", [], "any", false, false, false, 51), "categories" => CoreExtension::getAttribute($this->env, $this->source,             // line 52
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 52, $this->source); })()), "categories", [], "any", false, false, false, 52), "filter" => CoreExtension::getAttribute($this->env, $this->source,             // line 53
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 53, $this->source); })()), "filter", [], "any", false, false, false, 53), "parameter" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 54
($context["embed"] ?? null), "filter", [], "any", false, true, false, 54), "config", [], "any", false, true, false, 54), "parameterName", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "filter", [], "any", false, true, false, 54), "config", [], "any", false, true, false, 54), "parameterName", [], "any", false, false, false, 54), "")) : ("")), "min" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 55
($context["embed"] ?? null), "filter", [], "any", false, true, false, 55), "min", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "filter", [], "any", false, true, false, 55), "min", [], "any", false, false, false, 55), 0)) : (0)), "max" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 56
($context["embed"] ?? null), "filter", [], "any", false, true, false, 56), "max", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "filter", [], "any", false, true, false, 56), "max", [], "any", false, false, false, 56), 0)) : (0)), "activeMin" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 57
($context["embed"] ?? null), "filter", [], "any", false, true, false, 57), "activeMin", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "filter", [], "any", false, true, false, 57), "activeMin", [], "any", false, false, false, 57), 0)) : (0)), "activeMax" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 58
($context["embed"] ?? null), "filter", [], "any", false, true, false, 58), "activeMax", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "filter", [], "any", false, true, false, 58), "activeMax", [], "any", false, false, false, 58), 0)) : (0)), "parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 59
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 59, $this->source); })()), "parentJsName", [], "any", false, false, false, 59), "numberFormatConfig" => CoreExtension::getAttribute($this->env, $this->source,             // line 60
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 60, $this->source); })()), "numberFormatConfig", [], "any", false, false, false, 60)]]));
        }
        // line 63
        yield "                        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/organisms/filter-section/filter-section.twig";
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
        return array (  400 => 63,  397 => 60,  396 => 59,  395 => 58,  394 => 57,  393 => 56,  392 => 55,  391 => 54,  390 => 53,  389 => 52,  388 => 51,  382 => 48,  381 => 47,  377 => 46,  370 => 45,  360 => 28,  213 => 81,  209 => 80,  205 => 79,  202 => 78,  199 => 77,  192 => 76,  187 => 65,  185 => 42,  184 => 41,  183 => 40,  182 => 39,  181 => 38,  180 => 35,  179 => 34,  178 => 33,  177 => 32,  176 => 31,  175 => 29,  173 => 28,  166 => 27,  161 => 68,  147 => 67,  144 => 66,  141 => 27,  139 => 26,  136 => 25,  133 => 24,  115 => 23,  112 => 22,  105 => 21,  100 => 76,  97 => 75,  95 => 72,  94 => 70,  91 => 69,  89 => 21,  83 => 18,  79 => 16,  77 => 11,  71 => 10,  67 => 9,  62 => 8,  55 => 7,  51 => 1,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends organism('filter-section', '@SprykerShop:CatalogPage') %}

{% define data = {
    togglerClass: '',
} %}

{% block body %}
    <div class=\"{{ config.name }}__top-panel is-hidden-xl-only\">
        <h3 class=\"text-center title title--medium spacing-bottom\">{{ 'catalog.filter.filter' | trans }}</h3>
        <span class=\"{{ config.name }}__top-panel-button {{ data.togglerClass }}\">
            {% include atom('icon') with {
                data: {
                    name: 'close'
                }
            } only %}
        </span>

        <div class=\"grid grid--middle {{ config.jsName }}__sorting\"></div>
    </div>

    {% block filters %}
        {% set facets = data.filteredFacets is not empty ? data.filteredFacets : data.facets %}
        {% for filter in facets %}
            {% set filterHasValues = (filter.values is not defined) or (filter.values | length > 0) %}

            {% if filterHasValues %}
                {% block filter %}
                    {% embed molecule('toggler-item') with {
                        modifiers: ['filter', 'with-bottom-border', (loop.first ? 'mobile' : '')],
                        data: {
                            title: ('product.filter.' ~ filter.name | lower) | trans,
                            triggerClass: loop.first ? config.jsName ~ '__trigger-category' : config.jsName ~ '__trigger',
                            targetClass: config.jsName ~ '__target--' ~ filter.name,
                            isTogglerIncluded: loop.first ? true : false,
                            hiddenClass: loop.first ? 'is-hidden-sm-only' : 'is-hidden',
                        },
                        embed: {
                            filterPath: data.filterPath,
                            categories: data.categories,
                            filter: filter,
                            parentJsName: data.parentJsName,
                            numberFormatConfig: data.numberFormatConfig,
                        },
                    } only %}
                        {% block contentText %}
                            {% include [
                                molecule('filter-' ~ embed.filter.config.name, 'CatalogPage'),
                                molecule('filter-' ~ embed.filter.config.type, 'CatalogPage')
                                ] ignore missing with {
                                data: {
                                    filterPath: embed.filterPath,
                                    categories: embed.categories,
                                    filter: embed.filter,
                                    parameter: embed.filter.config.parameterName | default(''),
                                    min: embed.filter.min | default(0),
                                    max: embed.filter.max | default(0),
                                    activeMin: embed.filter.activeMin | default(0),
                                    activeMax: embed.filter.activeMax | default(0),
                                    parentJsName: embed.parentJsName,
                                    numberFormatConfig: embed.numberFormatConfig,
                                },
                            } only %}
                        {% endblock %}
                    {% endembed %}
                {% endblock %}
            {% endif %}
        {% endfor %}
    {% endblock %}

    {% include molecule('toggler-accordion') with {
        attributes: {
            'trigger-class-name': config.jsName ~ '__trigger',
        },
    } only %}

    {% block actions %}
        {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

        <div class=\"{{ config.name }}__actions\">
            <button type=\"button\" class=\"button button--large button--expand {{ triggerButtonJsName }}\">
                {{ 'catalog.filter.button' | trans }}
            </button>
        </div>
    {% endblock %}
{% endblock %}
", "@CatalogPage/components/organisms/filter-section/filter-section.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/organisms/filter-section/filter-section.twig");
    }
}
