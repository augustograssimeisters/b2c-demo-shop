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

/* @@SprykerShop:CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig */
class __TwigTemplate_47089557bc83506fdaa3505e652d71d0 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "view-mode-switch"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["requestUri" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "requestUri", [], "any", false, false, false, 8)], $context['data']);        // line 11
        $context["gridHref"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change-view-mode", ["mode" => "grid", "referer-url" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "requestUri", [], "any", false, false, false, 11)]);
        // line 12
        $context["listHref"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change-view-mode", ["mode" => "list", "referer-url" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "requestUri", [], "any", false, false, false, 12)]);
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "    <ul class=\"menu menu--inline\">
        <li class=\"menu__item\">
            <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gridHref"]) || array_key_exists("gridHref", $context) ? $context["gridHref"] : (function () { throw new RuntimeError('Variable "gridHref" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\">
                ";
        // line 18
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", 18)->unwrap()->yield(CoreExtension::toArray(["data" => ["name" => "th-large"]]));
        // line 23
        yield "                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.view.mode.grid"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"menu__separator\"></li>
        <li class=\"menu__item\">
            <a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["listHref"]) || array_key_exists("listHref", $context) ? $context["listHref"] : (function () { throw new RuntimeError('Variable "listHref" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\">
                ";
        // line 29
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", 29)->unwrap()->yield(CoreExtension::toArray(["data" => ["name" => "th-list"]]));
        // line 34
        yield "                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.view.mode.list"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig";
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
        return array (  90 => 34,  88 => 29,  84 => 28,  75 => 23,  73 => 18,  69 => 17,  65 => 15,  58 => 14,  54 => 1,  52 => 12,  50 => 11,  49 => 8,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'view-mode-switch',
} %}

{% define data = {
    requestUri: app.request.requestUri,
} %}

{% set gridHref = path('change-view-mode', { mode: 'grid', 'referer-url': data.requestUri }) %}
{% set listHref = path('change-view-mode', { mode: 'list', 'referer-url': data.requestUri }) %}

{% block body %}
    <ul class=\"menu menu--inline\">
        <li class=\"menu__item\">
            <a href=\"{{ gridHref }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'th-large',
                    },
                } only %}
                {{ 'catalog.view.mode.grid' | trans }}
            </a>
        </li>
        <li class=\"menu__separator\"></li>
        <li class=\"menu__item\">
            <a href=\"{{ listHref }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'th-list',
                    },
                } only %}
                {{ 'catalog.view.mode.list' | trans }}
            </a>
        </li>
    </ul>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/view-mode-switch/view-mode-switch.twig");
    }
}
