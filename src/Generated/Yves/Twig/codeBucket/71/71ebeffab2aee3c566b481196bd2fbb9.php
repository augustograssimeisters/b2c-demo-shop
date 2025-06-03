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

/* @@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig */
class __TwigTemplate_04983a681af3fd7e243106f51e4abec3 extends Template
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
            'component' => [$this, 'block_component'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-category"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["prepareFilterCategoriesDefined" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["data"] ?? null), "prepareFilterCategoriesDefined", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "prepareFilterCategoriesDefined", [], "any", false, false, false, 8)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "prepareFilterCategoriesDefined", [], "any", false, false, false, 8)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "twig", [], "any", false, false, false, 8), "function", ["prepareFilterCategories"], "method", false, false, false, 8)))], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "categories", [], "any", false, false, false, 12))) {
            yield from $this->yieldParentBlock("component", $context, $blocks);
        }
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "prepareFilterCategoriesDefined", [], "any", false, false, false, 16)) {
            // line 17
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("filter-category-prepared", "CatalogPage"), "@@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig", 17)->unwrap()->yield($context);
            // line 18
            yield "    ";
        } else {
            // line 19
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("filter-category-fallback", "CatalogPage"), "@@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig", 19)->unwrap()->yield($context);
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
        return "@@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig";
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
        return array (  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  70 => 15,  62 => 12,  55 => 11,  51 => 1,  50 => 8,  49 => 7,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-category',
} %}

{% define data = {
    prepareFilterCategoriesDefined: data.prepareFilterCategoriesDefined ?? app.twig.function('prepareFilterCategories')
} %}

{% block component %}
    {% if data.categories is not empty %}{{ parent() }}{% endif %}
{% endblock %}

{% block body %}
    {% if data.prepareFilterCategoriesDefined %}
        {% include molecule('filter-category-prepared', 'CatalogPage') %}
    {% else %}
        {% include molecule('filter-category-fallback', 'CatalogPage') %}
    {% endif %}
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/filter-category/filter-category.twig");
    }
}
