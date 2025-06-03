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

/* @@SprykerShop:CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_2878ad02fb317b666cf0b1cafb476e15 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "sort"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["parentJsName" => "", "pagination" => [], "sort" => []], $context['data']);        // line 1
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
        $context["triggerButtonJsName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "parentJsName", [], "any", false, false, false, 14)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "parentJsName", [], "any", false, false, false, 14) . "__trigger")) : (""));
        // line 15
        yield "
    <div class=\"grid grid--middle\">
        <div class=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "__col col col--lg-3 is-hidden-sm-md\">
            <strong>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "pagination", [], "any", false, true, false, 18), "numFound", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "pagination", [], "any", false, true, false, 18), "numFound", [], "any", false, false, false, 18), 0)) : (0)), "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "locale", [], "any", false, false, false, 18)), "html", null, true);
        yield "</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.itemsFound"), "html", null, true);
        yield "
        </div>

        <div class=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "__col col col--sm-3 col--md-2\">
            ";
        // line 22
        yield from         $this->loadTemplate("@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 22, "237872085")->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["expand"], "attributes" => ["name" => "ipp"], "embed" => ["pagination" => CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "pagination", [], "any", false, false, false, 28)]]));
        // line 39
        yield "        </div>

        <div class=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
        yield "__col col col--sm-7 col--md-8 col--lg-6\">
            ";
        // line 42
        yield from         $this->loadTemplate("@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 42, "1186757525")->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["expand"], "attributes" => ["name" => "sort"], "embed" => ["sort" => CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "sort", [], "any", false, false, false, 48)]]));
        // line 63
        yield "        </div>

        <div class=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
        yield "__col col col--sm-2 col--lg-1\">
            <button type=\"button\" class=\"button button--expand ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["triggerButtonJsName"]) || array_key_exists("triggerButtonJsName", $context) ? $context["triggerButtonJsName"] : (function () { throw new RuntimeError('Variable "triggerButtonJsName" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "\">
                ";
        // line 67
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 67)->unwrap()->yield(CoreExtension::toArray(["data" => ["name" => "sort"]]));
        // line 72
        yield "            </button>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig";
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
        return array (  111 => 72,  109 => 67,  105 => 66,  101 => 65,  97 => 63,  95 => 48,  94 => 42,  90 => 41,  86 => 39,  84 => 28,  83 => 22,  79 => 21,  71 => 18,  67 => 17,  63 => 15,  60 => 14,  53 => 13,  49 => 1,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'sort',
} %}

{% define data = {
    parentJsName: '',
    pagination: {},
    sort: {},
} %}

{% block body %}
    {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

    <div class=\"grid grid--middle\">
        <div class=\"{{ config.name }}__col col col--lg-3 is-hidden-sm-md\">
            <strong>{{ data.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }}</strong> {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-3 col--md-2\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'ipp',
                },
                embed: {
                    pagination: data.pagination,
                },
            } only %}
                {% block options %}
                    {% for limit in embed.pagination.config.validItemsPerPageOptions | default([]) %}
                        {% set selectedOption = limit == embed.pagination.currentItemsPerPage | default ? 'selected' %}

                        <option value=\"{{ limit }}\" {{ selectedOption }}>{{ limit }}</option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-7 col--md-8 col--lg-6\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'sort',
                },
                embed: {
                    sort: data.sort,
                },
            } only %}
                {% block options %}
                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>

                    {% for sortParamName in embed.sort.sortParamNames | default([]) %}
                        {% set selectedOption = sortParamName == embed.sort.currentSortParam | default ? 'selected' %}

                        <option value=\"{{ sortParamName }}\" {{ selectedOption }}>
                            {{ ('catalog.sort.' ~ sortParamName) | trans }}
                        </option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-2 col--lg-1\">
            <button type=\"button\" class=\"button button--expand {{ triggerButtonJsName }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'sort',
                    },
                } only %}
            </button>
        </div>
    </div>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}


/* @@SprykerShop:CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_2878ad02fb317b666cf0b1cafb476e15___237872085 extends Template
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
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 22
        return $this->loadTemplate($this->env->getFunction('atom')->getCallable()("select"), "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "pagination", [], "any", false, true, false, 32), "config", [], "any", false, true, false, 32), "validItemsPerPageOptions", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "pagination", [], "any", false, true, false, 32), "config", [], "any", false, true, false, 32), "validItemsPerPageOptions", [], "any", false, false, false, 32), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 33
            yield "                        ";
            $context["selectedOption"] = ((($context["limit"] == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "pagination", [], "any", false, true, false, 33), "currentItemsPerPage", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "pagination", [], "any", false, true, false, 33), "currentItemsPerPage", [], "any", false, false, false, 33))) : ("")))) ? ("selected") : (""));
            // line 34
            yield "
                        <option value=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limit"], "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedOption"]) || array_key_exists("selectedOption", $context) ? $context["selectedOption"] : (function () { throw new RuntimeError('Variable "selectedOption" does not exist.', 35, $this->source); })()), "html", null, true);
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limit"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['limit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig";
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
        return array (  287 => 37,  275 => 35,  272 => 34,  269 => 33,  264 => 32,  257 => 31,  247 => 22,  111 => 72,  109 => 67,  105 => 66,  101 => 65,  97 => 63,  95 => 48,  94 => 42,  90 => 41,  86 => 39,  84 => 28,  83 => 22,  79 => 21,  71 => 18,  67 => 17,  63 => 15,  60 => 14,  53 => 13,  49 => 1,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'sort',
} %}

{% define data = {
    parentJsName: '',
    pagination: {},
    sort: {},
} %}

{% block body %}
    {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

    <div class=\"grid grid--middle\">
        <div class=\"{{ config.name }}__col col col--lg-3 is-hidden-sm-md\">
            <strong>{{ data.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }}</strong> {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-3 col--md-2\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'ipp',
                },
                embed: {
                    pagination: data.pagination,
                },
            } only %}
                {% block options %}
                    {% for limit in embed.pagination.config.validItemsPerPageOptions | default([]) %}
                        {% set selectedOption = limit == embed.pagination.currentItemsPerPage | default ? 'selected' %}

                        <option value=\"{{ limit }}\" {{ selectedOption }}>{{ limit }}</option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-7 col--md-8 col--lg-6\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'sort',
                },
                embed: {
                    sort: data.sort,
                },
            } only %}
                {% block options %}
                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>

                    {% for sortParamName in embed.sort.sortParamNames | default([]) %}
                        {% set selectedOption = sortParamName == embed.sort.currentSortParam | default ? 'selected' %}

                        <option value=\"{{ sortParamName }}\" {{ selectedOption }}>
                            {{ ('catalog.sort.' ~ sortParamName) | trans }}
                        </option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-2 col--lg-1\">
            <button type=\"button\" class=\"button button--expand {{ triggerButtonJsName }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'sort',
                    },
                } only %}
            </button>
        </div>
    </div>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}


/* @@SprykerShop:CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_2878ad02fb317b666cf0b1cafb476e15___1186757525 extends Template
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
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 42
        return $this->loadTemplate($this->env->getFunction('atom')->getCallable()("select"), "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 42);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "                    <option value=\"\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.sort.relevance"), "html", null, true);
        yield "</option>

                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "sort", [], "any", false, true, false, 54), "sortParamNames", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "sort", [], "any", false, true, false, 54), "sortParamNames", [], "any", false, false, false, 54), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["sortParamName"]) {
            // line 55
            yield "                        ";
            $context["selectedOption"] = ((($context["sortParamName"] == ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "sort", [], "any", false, true, false, 55), "currentSortParam", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "sort", [], "any", false, true, false, 55), "currentSortParam", [], "any", false, false, false, 55))) : ("")))) ? ("selected") : (""));
            // line 56
            yield "
                        <option value=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sortParamName"], "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedOption"]) || array_key_exists("selectedOption", $context) ? $context["selectedOption"] : (function () { throw new RuntimeError('Variable "selectedOption" does not exist.', 57, $this->source); })()), "html", null, true);
            yield ">
                            ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("catalog.sort." . $context["sortParamName"])), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sortParamName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig";
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
        return array (  468 => 61,  459 => 58,  453 => 57,  450 => 56,  447 => 55,  443 => 54,  437 => 52,  430 => 51,  420 => 42,  287 => 37,  275 => 35,  272 => 34,  269 => 33,  264 => 32,  257 => 31,  247 => 22,  111 => 72,  109 => 67,  105 => 66,  101 => 65,  97 => 63,  95 => 48,  94 => 42,  90 => 41,  86 => 39,  84 => 28,  83 => 22,  79 => 21,  71 => 18,  67 => 17,  63 => 15,  60 => 14,  53 => 13,  49 => 1,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'sort',
} %}

{% define data = {
    parentJsName: '',
    pagination: {},
    sort: {},
} %}

{% block body %}
    {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

    <div class=\"grid grid--middle\">
        <div class=\"{{ config.name }}__col col col--lg-3 is-hidden-sm-md\">
            <strong>{{ data.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }}</strong> {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-3 col--md-2\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'ipp',
                },
                embed: {
                    pagination: data.pagination,
                },
            } only %}
                {% block options %}
                    {% for limit in embed.pagination.config.validItemsPerPageOptions | default([]) %}
                        {% set selectedOption = limit == embed.pagination.currentItemsPerPage | default ? 'selected' %}

                        <option value=\"{{ limit }}\" {{ selectedOption }}>{{ limit }}</option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-7 col--md-8 col--lg-6\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'sort',
                },
                embed: {
                    sort: data.sort,
                },
            } only %}
                {% block options %}
                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>

                    {% for sortParamName in embed.sort.sortParamNames | default([]) %}
                        {% set selectedOption = sortParamName == embed.sort.currentSortParam | default ? 'selected' %}

                        <option value=\"{{ sortParamName }}\" {{ selectedOption }}>
                            {{ ('catalog.sort.' ~ sortParamName) | trans }}
                        </option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-2 col--lg-1\">
            <button type=\"button\" class=\"button button--expand {{ triggerButtonJsName }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'sort',
                    },
                } only %}
            </button>
        </div>
    </div>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}
