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

/* @CatalogPage/components/molecules/filter-color/filter-color.twig */
class __TwigTemplate_2f5bec14b4b9036574c263f718643af0 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@CatalogPage/components/molecules/filter-color/filter-color.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-color"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["filter" => null, "isMultiSelect" => null], $context['data']);        // line 12
        $context["isMultiSelect"] = (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "isMultiSelect", [], "any", false, false, false, 12))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", false, true, false, 12), "config", [], "any", false, true, false, 12), "isMultiValued", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", false, true, false, 12), "config", [], "any", false, true, false, 12), "isMultiValued", [], "any", false, false, false, 12), false)) : (false))) : (false));
        // line 13
        $context["activeValues"] = (((isset($context["isMultiSelect"]) || array_key_exists("isMultiSelect", $context) ? $context["isMultiSelect"] : (function () { throw new RuntimeError('Variable "isMultiSelect" does not exist.', 13, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "filter", [], "any", false, false, false, 13), "activeValue", [], "any", false, false, false, 13)) : ([CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "filter", [], "any", false, false, false, 13), "activeValue", [], "any", false, false, false, 13)]));
        // line 14
        $context["inputComponent"] = (((isset($context["isMultiSelect"]) || array_key_exists("isMultiSelect", $context) ? $context["isMultiSelect"] : (function () { throw new RuntimeError('Variable "isMultiSelect" does not exist.', 14, $this->source); })())) ? ($this->env->getFunction('atom')->getCallable()("color-checkbox", "CatalogPage")) : ($this->env->getFunction('atom')->getCallable()("radio")));
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
        yield "    <ul class=\"grid spacing-bottom\">

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "filter", [], "any", false, false, false, 19), "values", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["filterValue"]) {
            // line 20
            yield "            <li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
            yield "__item spacing-right\">

                ";
            // line 22
            yield from             $this->loadTemplate((isset($context["inputComponent"]) || array_key_exists("inputComponent", $context) ? $context["inputComponent"] : (function () { throw new RuntimeError('Variable "inputComponent" does not exist.', 22, $this->source); })()), "@CatalogPage/components/molecules/filter-color/filter-color.twig", 22)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 23
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23) . "__color"), "attributes" => ["name" => (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "filter", [], "any", false, false, false, 25), "config", [], "any", false, false, false, 25), "parameterName", [], "any", false, false, false, 25) . (((isset($context["isMultiSelect"]) || array_key_exists("isMultiSelect", $context) ? $context["isMultiSelect"] : (function () { throw new RuntimeError('Variable "isMultiSelect" does not exist.', 25, $this->source); })())) ? ("[]") : (""))), "value" => CoreExtension::getAttribute($this->env, $this->source,             // line 26
$context["filterValue"], "value", [], "any", false, false, false, 26), "checked" => CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,             // line 27
$context["filterValue"], "value", [], "any", false, false, false, 27), (isset($context["activeValues"]) || array_key_exists("activeValues", $context) ? $context["activeValues"] : (function () { throw new RuntimeError('Variable "activeValues" does not exist.', 27, $this->source); })()))], "data" => ["label" => CoreExtension::getAttribute($this->env, $this->source,             // line 30
$context["filterValue"], "value", [], "any", false, false, false, 30)]]));
            // line 33
            yield "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['filterValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "
    </ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/molecules/filter-color/filter-color.twig";
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
        return array (  95 => 36,  87 => 33,  85 => 30,  84 => 27,  83 => 26,  82 => 25,  81 => 23,  80 => 22,  74 => 20,  70 => 19,  66 => 17,  59 => 16,  55 => 1,  53 => 14,  51 => 13,  49 => 12,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-color'
} %}

{% define data = {
    filter: null,
    isMultiSelect: null
} %}

{% set isMultiSelect = data.isMultiSelect is null ? (data.filter.config.isMultiValued | default(false)) : false %}
{% set activeValues = isMultiSelect ? data.filter.activeValue : [data.filter.activeValue] %}
{% set inputComponent = isMultiSelect ? atom('color-checkbox', 'CatalogPage') : atom('radio') %}

{% block body %}
    <ul class=\"grid spacing-bottom\">

        {% for filterValue in data.filter.values %}
            <li class=\"{{ config.name }}__item spacing-right\">

                {% include inputComponent with {
                    class: config.name ~ '__color',
                    attributes: {
                        name: data.filter.config.parameterName ~ (isMultiSelect ? '[]' : ''),
                        value: filterValue.value,
                        checked: (filterValue.value in activeValues)
                    },
                    data: {
                        label: filterValue.value
                    }
                } only %}

            </li>
        {% endfor %}

    </ul>
{% endblock %}
", "@CatalogPage/components/molecules/filter-color/filter-color.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/filter-color/filter-color.twig");
    }
}
