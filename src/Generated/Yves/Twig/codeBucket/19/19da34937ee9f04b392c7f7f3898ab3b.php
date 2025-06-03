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

/* @@SprykerShop:CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig */
class __TwigTemplate_01729fa33ca80ea6df2c2e9f62e0b82b extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-enumeration"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["filter" => null, "isMultiSelect" => null], $context['data']);        // line 12
        $context["isMultiSelect"] = (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "isMultiSelect", [], "any", false, false, false, 12))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", false, true, false, 12), "config", [], "any", false, true, false, 12), "isMultiValued", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", false, true, false, 12), "config", [], "any", false, true, false, 12), "isMultiValued", [], "any", false, false, false, 12), false)) : (false))) : (false));
        // line 13
        $context["activeValues"] = (((isset($context["isMultiSelect"]) || array_key_exists("isMultiSelect", $context) ? $context["isMultiSelect"] : (function () { throw new RuntimeError('Variable "isMultiSelect" does not exist.', 13, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "filter", [], "any", false, false, false, 13), "activeValue", [], "any", false, false, false, 13)) : ([CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "filter", [], "any", false, false, false, 13), "activeValue", [], "any", false, false, false, 13)]));
        // line 14
        $context["inputComponent"] = (((isset($context["isMultiSelect"]) || array_key_exists("isMultiSelect", $context) ? $context["isMultiSelect"] : (function () { throw new RuntimeError('Variable "isMultiSelect" does not exist.', 14, $this->source); })())) ? ($this->env->getFunction('atom')->getCallable()("checkbox")) : ($this->env->getFunction('atom')->getCallable()("radio")));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    <h3 class=\"title--h6\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.filter." . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "filter", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17)))), "html", null, true);
        yield "</h3>

    <ul class=\"menu\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "filter", [], "any", false, false, false, 20), "values", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["filterValue"]) {
            // line 21
            yield "            <li class=\"menu__item\">
                ";
            // line 22
            yield from             $this->loadTemplate((isset($context["inputComponent"]) || array_key_exists("inputComponent", $context) ? $context["inputComponent"] : (function () { throw new RuntimeError('Variable "inputComponent" does not exist.', 22, $this->source); })()), "@@SprykerShop:CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig", 22)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["name" => (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 24
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "filter", [], "any", false, false, false, 24), "config", [], "any", false, false, false, 24), "parameterName", [], "any", false, false, false, 24) . (((isset($context["isMultiSelect"]) || array_key_exists("isMultiSelect", $context) ? $context["isMultiSelect"] : (function () { throw new RuntimeError('Variable "isMultiSelect" does not exist.', 24, $this->source); })())) ? ("[]") : (""))), "value" => CoreExtension::getAttribute($this->env, $this->source,             // line 25
$context["filterValue"], "value", [], "any", false, false, false, 25), "checked" => CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,             // line 26
$context["filterValue"], "value", [], "any", false, false, false, 26), (isset($context["activeValues"]) || array_key_exists("activeValues", $context) ? $context["activeValues"] : (function () { throw new RuntimeError('Variable "activeValues" does not exist.', 26, $this->source); })()))], "data" => ["label" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 29
$context["filterValue"], "value", [], "any", false, false, false, 29) . " (") . $this->env->getFilter('executeFilterIfExists')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["filterValue"], "docCount", [], "any", false, false, false, 29), "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "locale", [], "any", false, false, false, 29))) . ")")]]));
            // line 32
            yield "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['filterValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    </ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig";
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
        return array (  93 => 34,  86 => 32,  84 => 29,  83 => 26,  82 => 25,  81 => 24,  80 => 22,  77 => 21,  73 => 20,  66 => 17,  59 => 16,  55 => 1,  53 => 14,  51 => 13,  49 => 12,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-enumeration',
} %}

{% define data = {
    filter: null,
    isMultiSelect: null
} %}

{% set isMultiSelect = data.isMultiSelect is null ? (data.filter.config.isMultiValued | default(false)) : false %}
{% set activeValues = isMultiSelect ? data.filter.activeValue : [data.filter.activeValue] %}
{% set inputComponent = isMultiSelect ? atom('checkbox') : atom('radio') %}

{% block body %}
    <h3 class=\"title--h6\">{{ ('product.filter.' ~ data.filter.name | lower) | trans }}</h3>

    <ul class=\"menu\">
        {% for filterValue in data.filter.values %}
            <li class=\"menu__item\">
                {% include inputComponent with {
                    attributes: {
                        name: data.filter.config.parameterName ~ (isMultiSelect ? '[]' : ''),
                        value: filterValue.value,
                        checked: (filterValue.value in activeValues)
                    },
                    data: {
                        label: filterValue.value ~ ' (' ~ filterValue.docCount | executeFilterIfExists('formatInt', app.locale) ~ ')'
                    }
                } only %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/filter-enumeration/filter-enumeration.twig");
    }
}
