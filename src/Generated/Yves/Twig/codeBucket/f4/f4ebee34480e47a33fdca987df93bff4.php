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

/* @@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig */
class __TwigTemplate_2e64df48024a78e2f02ac0a57377f24a extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-rating"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["filter" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "request" => CoreExtension::getAttribute($this->env, $this->source,         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9)], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    <h3 class=\"title--h6\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.filter." . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "filter", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13)))), "html", null, true);
        yield "</h3>

    ";
        // line 15
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductRatingFilterWidget", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "filter", [], "any", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15)])) {
            $this->loadTemplate("@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig", "@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig", 15, 1221843763)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        } elseif ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductRatingFilterWidgetPlugin", [CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "filter", [], "any", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16)])) {
            $this->loadTemplate("@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig", "@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig", 15, 502847607)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig";
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
        return array (  72 => 16,  68 => 15,  62 => 13,  55 => 12,  51 => 1,  50 => 9,  49 => 8,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-rating',
} %}

{% define data = {
    filter: required,
    request: app.request,
} %}

{% block body %}
    <h3 class=\"title--h6\">{{ ('product.filter.' ~ data.filter.name | lower) | trans }}</h3>

    {% widget 'ProductRatingFilterWidget' args [data.filter, data.request] only %}
    {% elsewidget 'ProductRatingFilterWidgetPlugin' args [data.filter, data.request] only %} {# @deprecated Use ProductRatingFilterWidget instead. #}
    {% endwidget %}
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/filter-rating/filter-rating.twig");
    }
}


/* @@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig */
class __TwigTemplate_2e64df48024a78e2f02ac0a57377f24a___1221843763 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 15
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 15, $this->source); })()), "@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig";
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
        return array (  149 => 15,  72 => 16,  68 => 15,  62 => 13,  55 => 12,  51 => 1,  50 => 9,  49 => 8,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-rating',
} %}

{% define data = {
    filter: required,
    request: app.request,
} %}

{% block body %}
    <h3 class=\"title--h6\">{{ ('product.filter.' ~ data.filter.name | lower) | trans }}</h3>

    {% widget 'ProductRatingFilterWidget' args [data.filter, data.request] only %}
    {% elsewidget 'ProductRatingFilterWidgetPlugin' args [data.filter, data.request] only %} {# @deprecated Use ProductRatingFilterWidget instead. #}
    {% endwidget %}
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/filter-rating/filter-rating.twig");
    }
}


/* @@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig */
class __TwigTemplate_2e64df48024a78e2f02ac0a57377f24a___502847607 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 15, $this->source); })()), "@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig";
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
        return array (  149 => 15,  72 => 16,  68 => 15,  62 => 13,  55 => 12,  51 => 1,  50 => 9,  49 => 8,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-rating',
} %}

{% define data = {
    filter: required,
    request: app.request,
} %}

{% block body %}
    <h3 class=\"title--h6\">{{ ('product.filter.' ~ data.filter.name | lower) | trans }}</h3>

    {% widget 'ProductRatingFilterWidget' args [data.filter, data.request] only %}
    {% elsewidget 'ProductRatingFilterWidgetPlugin' args [data.filter, data.request] only %} {# @deprecated Use ProductRatingFilterWidget instead. #}
    {% endwidget %}
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/filter-rating/filter-rating.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/filter-rating/filter-rating.twig");
    }
}
