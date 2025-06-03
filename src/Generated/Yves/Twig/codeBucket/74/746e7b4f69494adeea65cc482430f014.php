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

/* @@SprykerShop:ShopUi/components/molecules/suggest-search/suggest-search.twig */
class __TwigTemplate_571e04710ecc765743950a66372c1e8f extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ShopUi/components/molecules/suggest-search/suggest-search.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "suggest-search", "tag" => "suggest-search"], $context['config']);        // line 9
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["suggestion-url" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "input-selector" => "", "input-class-name" => "", "debounce-delay" => 500, "throttle-delay" => 200, "letters-trashold" => 2], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    <div class=\"box is-hidden ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "__container ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "jsName", [], "any", false, false, false, 19), "html", null, true);
        yield "__container\"></div>

    ";
        // line 21
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("ajax-provider"), "@@SprykerShop:ShopUi/components/molecules/suggest-search/suggest-search.twig", 21)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "jsName", [], "any", false, false, false, 22) . "__ajax-provider"), "attributes" => ["method" => "post", "url" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 25, $this->source); })()), "suggestion-url", [], "array", false, false, false, 25)]]));
        // line 28
        yield "
    ";
        // line 29
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("ajax-loader"), "@@SprykerShop:ShopUi/components/molecules/suggest-search/suggest-search.twig", 29)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["big"], "attributes" => ["provider-class-name" => (CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "jsName", [], "any", false, false, false, 32) . "__ajax-provider")]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/molecules/suggest-search/suggest-search.twig";
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
        return array (  77 => 32,  76 => 29,  73 => 28,  71 => 25,  70 => 22,  69 => 21,  61 => 19,  54 => 18,  50 => 1,  49 => 10,  48 => 9,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'suggest-search',
    tag: 'suggest-search',
} %}

{# @deprecated property \"input-selector\" is deprecated: use \"input-class-name\" instead. #}
{% define attributes = {
    'suggestion-url': required,
    'input-selector': '',
    'input-class-name': '',
    'debounce-delay': 500,
    'throttle-delay': 200,
    'letters-trashold': 2,
} %}

{% block body %}
    <div class=\"box is-hidden {{ config.name }}__container {{ config.jsName }}__container\"></div>

    {% include molecule('ajax-provider') with {
        class: config.jsName ~ '__ajax-provider',
        attributes: {
            method: 'post',
            url: attributes['suggestion-url'],
        },
    } only %}

    {% include molecule('ajax-loader') with {
        modifiers: ['big'],
        attributes: {
            'provider-class-name': config.jsName ~ '__ajax-provider',
        },
    } only %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/suggest-search/suggest-search.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/suggest-search/suggest-search.twig");
    }
}
