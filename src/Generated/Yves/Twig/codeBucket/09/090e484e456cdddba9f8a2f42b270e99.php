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

/* @CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_bc5f7829318359ccdcfed668ccd3800d extends Template
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
            'selects' => [$this, 'block_selects'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("sort", "@SprykerShop:CatalogPage"), "@CatalogPage/components/molecules/sort/sort.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["pagination" => [], "sort" => []], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    <div class=\"grid grid--justify grid--middle\">
        <div class=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        yield "__results col\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "pagination", [], "any", false, true, false, 11), "numFound", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "pagination", [], "any", false, true, false, 11), "numFound", [], "any", false, false, false, 11), 0)) : (0)), "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "locale", [], "any", false, false, false, 11)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.itemsFound"), "html", null, true);
        // line 12
        yield "</div>

        <div class=\"col col--lg-8 col--xl-6 is-hidden-sm-md\">
            <div class=\"grid grid--middle\">
                ";
        // line 16
        yield from $this->unwrap()->yieldBlock('selects', $context, $blocks);
        // line 75
        yield "            </div>
        </div>
    </div>

    ";
        // line 79
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breakpoint-dependent-block-placer"), "@CatalogPage/components/molecules/sort/sort.twig", 79)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["block-class-name" => (CoreExtension::getAttribute($this->env, $this->source,         // line 81
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 81, $this->source); })()), "jsName", [], "any", false, false, false, 81) . "__filter")]]));
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selects(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "                    <div class=\"col col--sm-3 col--md-5 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "jsName", [], "any", false, false, false, 17), "html", null, true);
        yield "__filter\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"769\">
                        ";
        // line 18
        yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
        // line 21
        yield "
                        ";
        // line 22
        yield from         $this->loadTemplate("@CatalogPage/components/molecules/sort/sort.twig", "@CatalogPage/components/molecules/sort/sort.twig", 22, "544674428")->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["hollow"], "attributes" => ["name" => "ipp", "config-theme" => "secondary"], "embed" => ["pagination" => CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "pagination", [], "any", false, false, false, 29), "parentJsName" => CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "parentJsName", [], "any", false, false, false, 30)]]));
        // line 43
        yield "                    </div>

                    <div class=\"col col--sm-9 col--md-7 ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "jsName", [], "any", false, false, false, 45), "html", null, true);
        yield "__filter\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"769\">
                        ";
        // line 46
        yield from         $this->loadTemplate("@CatalogPage/components/molecules/sort/sort.twig", "@CatalogPage/components/molecules/sort/sort.twig", 46, "1338146012")->unwrap()->yield(CoreExtension::toArray(["class" => "float-right", "modifiers" => ["hollow"], "attributes" => ["name" => "sort", "config-theme" => "secondary", "config-width" => "100%"], "embed" => ["sort" => CoreExtension::getAttribute($this->env, $this->source,         // line 55
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "sort", [], "any", false, false, false, 55), "parentJsName" => CoreExtension::getAttribute($this->env, $this->source,         // line 56
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "parentJsName", [], "any", false, false, false, 56)]]));
        // line 73
        yield "                    </div>
                ";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "                            <label class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "__label is-hidden-sm-md\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.per"), "html", null, true);
        yield ":</label>
                        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/molecules/sort/sort.twig";
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
        return array (  137 => 19,  130 => 18,  124 => 73,  122 => 56,  121 => 55,  120 => 46,  116 => 45,  112 => 43,  110 => 30,  109 => 29,  108 => 22,  105 => 21,  103 => 18,  98 => 17,  91 => 16,  86 => 81,  85 => 79,  79 => 75,  77 => 16,  71 => 12,  67 => 11,  64 => 10,  61 => 9,  54 => 8,  50 => 1,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('sort', '@SprykerShop:CatalogPage') %}

{% define data = {
    pagination: {},
    sort: {},
} %}

{% block body %}
    <div class=\"grid grid--justify grid--middle\">
        <div class=\"{{ config.name }}__results col\">
            {{- data.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }} {{ 'catalog.itemsFound' | trans -}}
        </div>

        <div class=\"col col--lg-8 col--xl-6 is-hidden-sm-md\">
            <div class=\"grid grid--middle\">
                {% block selects %}
                    <div class=\"col col--sm-3 col--md-5 {{ config.jsName }}__filter\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"769\">
                        {% block label %}
                            <label class=\"{{ config.name }}__label is-hidden-sm-md\">{{ 'catalog.filter.per' | trans }}:</label>
                        {% endblock %}

                        {% embed molecule('custom-select') with {
                            modifiers: ['hollow'],
                            attributes: {
                                name: 'ipp',
                                'config-theme': 'secondary',
                            },
                            embed: {
                                pagination: data.pagination,
                                parentJsName: data.parentJsName,
                            },
                        } only %}
                            {% block selectClass %}{{ parent() }} {{ embed.parentJsName ? embed.parentJsName ~ '__sort-trigger' }}{% endblock %}

                            {% block options %}
                                {% for limit in embed.pagination.config.validItemsPerPageOptions %}
                                    {% set selectedAttribute = (limit == embed.pagination.currentItemsPerPage) ? 'selected' %}

                                    <option value=\"{{ limit }}\" {{ selectedAttribute }}>{{ limit | executeFilterIfExists('formatInt', app.locale) }}</option>
                                {% endfor %}
                            {% endblock %}
                        {% endembed %}
                    </div>

                    <div class=\"col col--sm-9 col--md-7 {{ config.jsName }}__filter\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"769\">
                        {% embed molecule('custom-select') with {
                            class: 'float-right',
                            modifiers: ['hollow'],
                            attributes: {
                                name: 'sort',
                                'config-theme': 'secondary',
                                'config-width': '100%',
                            },
                            embed: {
                                sort: data.sort,
                                parentJsName: data.parentJsName,
                            },
                        } only %}
                            {% block selectClass %}{{ parent() }} {{ embed.parentJsName ? embed.parentJsName ~ '__sort-trigger' }}{% endblock %}

                            {% block options %}
                                <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>

                                {% for sortParamName in embed.sort.sortParamNames %}
                                    {% set selectedAttribute = (sortParamName == embed.sort.currentSortParam) ? 'selected' %}

                                    <option value=\"{{ sortParamName }}\" {{ selectedAttribute }}>
                                        {{ ('catalog.sort.' ~ sortParamName) | trans }}
                                    </option>
                                {% endfor %}
                            {% endblock %}
                        {% endembed %}
                    </div>
                {% endblock %}
            </div>
        </div>
    </div>

    {% include molecule('breakpoint-dependent-block-placer') with {
        attributes: {
            'block-class-name': config.jsName ~ '__filter',
        },
    } only %}
{% endblock %}
", "@CatalogPage/components/molecules/sort/sort.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}


/* @CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_bc5f7829318359ccdcfed668ccd3800d___544674428 extends Template
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
            'selectClass' => [$this, 'block_selectClass'],
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 22
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("custom-select"), "@CatalogPage/components/molecules/sort/sort.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selectClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->yieldParentBlock("selectClass", $context, $blocks);
        yield " ";
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 33, $this->source); })()), "parentJsName", [], "any", false, false, false, 33)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 33, $this->source); })()), "parentJsName", [], "any", false, false, false, 33) . "__sort-trigger"), "html", null, true)) : (yield ""));
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 36, $this->source); })()), "pagination", [], "any", false, false, false, 36), "config", [], "any", false, false, false, 36), "validItemsPerPageOptions", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 37
            yield "                                    ";
            $context["selectedAttribute"] = ((($context["limit"] == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 37, $this->source); })()), "pagination", [], "any", false, false, false, 37), "currentItemsPerPage", [], "any", false, false, false, 37))) ? ("selected") : (""));
            // line 38
            yield "
                                    <option value=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limit"], "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedAttribute"]) || array_key_exists("selectedAttribute", $context) ? $context["selectedAttribute"] : (function () { throw new RuntimeError('Variable "selectedAttribute" does not exist.', 39, $this->source); })()), "html", null, true);
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()($context["limit"], "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "locale", [], "any", false, false, false, 39)), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['limit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/molecules/sort/sort.twig";
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
        return array (  338 => 41,  326 => 39,  323 => 38,  320 => 37,  315 => 36,  308 => 35,  295 => 33,  285 => 22,  137 => 19,  130 => 18,  124 => 73,  122 => 56,  121 => 55,  120 => 46,  116 => 45,  112 => 43,  110 => 30,  109 => 29,  108 => 22,  105 => 21,  103 => 18,  98 => 17,  91 => 16,  86 => 81,  85 => 79,  79 => 75,  77 => 16,  71 => 12,  67 => 11,  64 => 10,  61 => 9,  54 => 8,  50 => 1,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('sort', '@SprykerShop:CatalogPage') %}

{% define data = {
    pagination: {},
    sort: {},
} %}

{% block body %}
    <div class=\"grid grid--justify grid--middle\">
        <div class=\"{{ config.name }}__results col\">
            {{- data.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }} {{ 'catalog.itemsFound' | trans -}}
        </div>

        <div class=\"col col--lg-8 col--xl-6 is-hidden-sm-md\">
            <div class=\"grid grid--middle\">
                {% block selects %}
                    <div class=\"col col--sm-3 col--md-5 {{ config.jsName }}__filter\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"769\">
                        {% block label %}
                            <label class=\"{{ config.name }}__label is-hidden-sm-md\">{{ 'catalog.filter.per' | trans }}:</label>
                        {% endblock %}

                        {% embed molecule('custom-select') with {
                            modifiers: ['hollow'],
                            attributes: {
                                name: 'ipp',
                                'config-theme': 'secondary',
                            },
                            embed: {
                                pagination: data.pagination,
                                parentJsName: data.parentJsName,
                            },
                        } only %}
                            {% block selectClass %}{{ parent() }} {{ embed.parentJsName ? embed.parentJsName ~ '__sort-trigger' }}{% endblock %}

                            {% block options %}
                                {% for limit in embed.pagination.config.validItemsPerPageOptions %}
                                    {% set selectedAttribute = (limit == embed.pagination.currentItemsPerPage) ? 'selected' %}

                                    <option value=\"{{ limit }}\" {{ selectedAttribute }}>{{ limit | executeFilterIfExists('formatInt', app.locale) }}</option>
                                {% endfor %}
                            {% endblock %}
                        {% endembed %}
                    </div>

                    <div class=\"col col--sm-9 col--md-7 {{ config.jsName }}__filter\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"769\">
                        {% embed molecule('custom-select') with {
                            class: 'float-right',
                            modifiers: ['hollow'],
                            attributes: {
                                name: 'sort',
                                'config-theme': 'secondary',
                                'config-width': '100%',
                            },
                            embed: {
                                sort: data.sort,
                                parentJsName: data.parentJsName,
                            },
                        } only %}
                            {% block selectClass %}{{ parent() }} {{ embed.parentJsName ? embed.parentJsName ~ '__sort-trigger' }}{% endblock %}

                            {% block options %}
                                <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>

                                {% for sortParamName in embed.sort.sortParamNames %}
                                    {% set selectedAttribute = (sortParamName == embed.sort.currentSortParam) ? 'selected' %}

                                    <option value=\"{{ sortParamName }}\" {{ selectedAttribute }}>
                                        {{ ('catalog.sort.' ~ sortParamName) | trans }}
                                    </option>
                                {% endfor %}
                            {% endblock %}
                        {% endembed %}
                    </div>
                {% endblock %}
            </div>
        </div>
    </div>

    {% include molecule('breakpoint-dependent-block-placer') with {
        attributes: {
            'block-class-name': config.jsName ~ '__filter',
        },
    } only %}
{% endblock %}
", "@CatalogPage/components/molecules/sort/sort.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}


/* @CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_bc5f7829318359ccdcfed668ccd3800d___1338146012 extends Template
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
            'selectClass' => [$this, 'block_selectClass'],
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 46
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("custom-select"), "@CatalogPage/components/molecules/sort/sort.twig", 46);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selectClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->yieldParentBlock("selectClass", $context, $blocks);
        yield " ";
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 59, $this->source); })()), "parentJsName", [], "any", false, false, false, 59)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 59, $this->source); })()), "parentJsName", [], "any", false, false, false, 59) . "__sort-trigger"), "html", null, true)) : (yield ""));
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "                                <option value=\"\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.sort.relevance"), "html", null, true);
        yield "</option>

                                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 64, $this->source); })()), "sort", [], "any", false, false, false, 64), "sortParamNames", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["sortParamName"]) {
            // line 65
            yield "                                    ";
            $context["selectedAttribute"] = ((($context["sortParamName"] == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 65, $this->source); })()), "sort", [], "any", false, false, false, 65), "currentSortParam", [], "any", false, false, false, 65))) ? ("selected") : (""));
            // line 66
            yield "
                                    <option value=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sortParamName"], "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedAttribute"]) || array_key_exists("selectedAttribute", $context) ? $context["selectedAttribute"] : (function () { throw new RuntimeError('Variable "selectedAttribute" does not exist.', 67, $this->source); })()), "html", null, true);
            yield ">
                                        ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("catalog.sort." . $context["sortParamName"])), "html", null, true);
            yield "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sortParamName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/molecules/sort/sort.twig";
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
        return array (  542 => 71,  533 => 68,  527 => 67,  524 => 66,  521 => 65,  517 => 64,  511 => 62,  504 => 61,  491 => 59,  481 => 46,  338 => 41,  326 => 39,  323 => 38,  320 => 37,  315 => 36,  308 => 35,  295 => 33,  285 => 22,  137 => 19,  130 => 18,  124 => 73,  122 => 56,  121 => 55,  120 => 46,  116 => 45,  112 => 43,  110 => 30,  109 => 29,  108 => 22,  105 => 21,  103 => 18,  98 => 17,  91 => 16,  86 => 81,  85 => 79,  79 => 75,  77 => 16,  71 => 12,  67 => 11,  64 => 10,  61 => 9,  54 => 8,  50 => 1,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('sort', '@SprykerShop:CatalogPage') %}

{% define data = {
    pagination: {},
    sort: {},
} %}

{% block body %}
    <div class=\"grid grid--justify grid--middle\">
        <div class=\"{{ config.name }}__results col\">
            {{- data.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }} {{ 'catalog.itemsFound' | trans -}}
        </div>

        <div class=\"col col--lg-8 col--xl-6 is-hidden-sm-md\">
            <div class=\"grid grid--middle\">
                {% block selects %}
                    <div class=\"col col--sm-3 col--md-5 {{ config.jsName }}__filter\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"769\">
                        {% block label %}
                            <label class=\"{{ config.name }}__label is-hidden-sm-md\">{{ 'catalog.filter.per' | trans }}:</label>
                        {% endblock %}

                        {% embed molecule('custom-select') with {
                            modifiers: ['hollow'],
                            attributes: {
                                name: 'ipp',
                                'config-theme': 'secondary',
                            },
                            embed: {
                                pagination: data.pagination,
                                parentJsName: data.parentJsName,
                            },
                        } only %}
                            {% block selectClass %}{{ parent() }} {{ embed.parentJsName ? embed.parentJsName ~ '__sort-trigger' }}{% endblock %}

                            {% block options %}
                                {% for limit in embed.pagination.config.validItemsPerPageOptions %}
                                    {% set selectedAttribute = (limit == embed.pagination.currentItemsPerPage) ? 'selected' %}

                                    <option value=\"{{ limit }}\" {{ selectedAttribute }}>{{ limit | executeFilterIfExists('formatInt', app.locale) }}</option>
                                {% endfor %}
                            {% endblock %}
                        {% endembed %}
                    </div>

                    <div class=\"col col--sm-9 col--md-7 {{ config.jsName }}__filter\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"769\">
                        {% embed molecule('custom-select') with {
                            class: 'float-right',
                            modifiers: ['hollow'],
                            attributes: {
                                name: 'sort',
                                'config-theme': 'secondary',
                                'config-width': '100%',
                            },
                            embed: {
                                sort: data.sort,
                                parentJsName: data.parentJsName,
                            },
                        } only %}
                            {% block selectClass %}{{ parent() }} {{ embed.parentJsName ? embed.parentJsName ~ '__sort-trigger' }}{% endblock %}

                            {% block options %}
                                <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>

                                {% for sortParamName in embed.sort.sortParamNames %}
                                    {% set selectedAttribute = (sortParamName == embed.sort.currentSortParam) ? 'selected' %}

                                    <option value=\"{{ sortParamName }}\" {{ selectedAttribute }}>
                                        {{ ('catalog.sort.' ~ sortParamName) | trans }}
                                    </option>
                                {% endfor %}
                            {% endblock %}
                        {% endembed %}
                    </div>
                {% endblock %}
            </div>
        </div>
    </div>

    {% include molecule('breakpoint-dependent-block-placer') with {
        attributes: {
            'block-class-name': config.jsName ~ '__filter',
        },
    } only %}
{% endblock %}
", "@CatalogPage/components/molecules/sort/sort.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}
