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

/* @ShopUi/components/molecules/search-form/search-form.twig */
class __TwigTemplate_d9a545a7827a2607fe7eb6977ab10406 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/search-form/search-form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "search-form"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["searchUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search"), "searchValue" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", ["q"], "method", false, false, false, 9)], $context['data']);        // line 12
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["data-search-id" =>         // line 13
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 13, $this->source); })()), "wrapper-class-name" =>         // line 14
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 14, $this->source); })()), "close-class-name" =>         // line 15
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 15, $this->source); })()), "open-class-name" =>         // line 16
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 16, $this->source); })()), "wrapper-toggle-class-name" => ""], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "searchUrl", [], "any", false, false, false, 21), "html", null, true);
        yield "\">
        <div class=\"grid\">
            <div class=\"col col--sm-10\">
                <input 
                    name=\"q\"
                    class=\"suggest-search__input suggest-search__input--expand ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "jsName", [], "any", false, false, false, 26), "html", null, true);
        yield "__input--";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 26, $this->source); })()), "data-search-id", [], "array", false, false, false, 26), "html", null, true);
        yield "\"
                    placeholder=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search"), "html", null, true);
        yield "\"
                    value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "searchValue", [], "any", false, false, false, 28), "html", null, true);
        yield "\"
                    autocomplete=\"off\"
                    autofocus
                >
            </div>
        </div>

        ";
        // line 35
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("suggest-search"), "@ShopUi/components/molecules/search-form/search-form.twig", 35)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["suggestion-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search/suggestion"), "base-suggest-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search/suggestion"), "input-class-name" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "jsName", [], "any", false, false, false, 39) . "__input--") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 39, $this->source); })()), "data-search-id", [], "array", false, false, false, 39)), "wrapper-class-name" => CoreExtension::getAttribute($this->env, $this->source,         // line 40
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 40, $this->source); })()), "wrapper-class-name", [], "array", false, false, false, 40), "close-class-name" => CoreExtension::getAttribute($this->env, $this->source,         // line 41
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 41, $this->source); })()), "close-class-name", [], "array", false, false, false, 41), "open-class-name" => CoreExtension::getAttribute($this->env, $this->source,         // line 42
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 42, $this->source); })()), "open-class-name", [], "array", false, false, false, 42), "wrapper-toggle-class-name" => CoreExtension::getAttribute($this->env, $this->source,         // line 43
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 43, $this->source); })()), "wrapper-toggle-class-name", [], "array", false, false, false, 43)]]));
        // line 46
        yield "
        <button type=\"submit\" class=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
        yield "__button-hidden\"></button>
    </form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/search-form/search-form.twig";
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
        return array (  105 => 47,  102 => 46,  100 => 43,  99 => 42,  98 => 41,  97 => 40,  96 => 39,  95 => 35,  85 => 28,  81 => 27,  75 => 26,  66 => 21,  59 => 20,  55 => 1,  54 => 16,  53 => 15,  52 => 14,  51 => 13,  50 => 12,  49 => 9,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'search-form'
} %}

{% define data = {
    searchUrl: path('search'),
    searchValue: app.request.get('q')
} %}

{% define attributes = {
    'data-search-id': required,
    'wrapper-class-name': required,
    'close-class-name': required,
    'open-class-name': required,
    'wrapper-toggle-class-name': '',
} %}

{% block body %}
    <form action=\"{{ data.searchUrl }}\">
        <div class=\"grid\">
            <div class=\"col col--sm-10\">
                <input 
                    name=\"q\"
                    class=\"suggest-search__input suggest-search__input--expand {{ config.jsName }}__input--{{ attributes['data-search-id'] }}\"
                    placeholder=\"{{ 'global.search' | trans }}\"
                    value=\"{{ data.searchValue }}\"
                    autocomplete=\"off\"
                    autofocus
                >
            </div>
        </div>

        {% include molecule('suggest-search') with {
            attributes: {
                'suggestion-url': path('search/suggestion'),
                'base-suggest-url': path('search/suggestion'),
                'input-class-name': config.jsName ~ '__input--' ~ attributes['data-search-id'],
                'wrapper-class-name': attributes['wrapper-class-name'],
                'close-class-name': attributes['close-class-name'],
                'open-class-name': attributes['open-class-name'],
                'wrapper-toggle-class-name': attributes['wrapper-toggle-class-name'],
            },
        } only %}

        <button type=\"submit\" class=\"{{ config.name }}__button-hidden\"></button>
    </form>
{% endblock %}
", "@ShopUi/components/molecules/search-form/search-form.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/search-form/search-form.twig");
    }
}
