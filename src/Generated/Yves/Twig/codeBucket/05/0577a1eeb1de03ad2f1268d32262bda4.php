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

/* @CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig */
class __TwigTemplate_3eaa60cc0ef36f0b5841831bf157a4b2 extends Template
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
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("filter-enumeration", "@SprykerShop:CatalogPage"), "@CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <ul class=\"menu\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "filter", [], "any", false, false, false, 5), "values", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["filterValue"]) {
            // line 6
            yield "            <li class=\"menu__item\">
                ";
            // line 7
            yield from             $this->loadTemplate((isset($context["inputComponent"]) || array_key_exists("inputComponent", $context) ? $context["inputComponent"] : (function () { throw new RuntimeError('Variable "inputComponent" does not exist.', 7, $this->source); })()), "@CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig", 7)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["name" => (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 9
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "filter", [], "any", false, false, false, 9), "config", [], "any", false, false, false, 9), "parameterName", [], "any", false, false, false, 9) . (((isset($context["isMultiSelect"]) || array_key_exists("isMultiSelect", $context) ? $context["isMultiSelect"] : (function () { throw new RuntimeError('Variable "isMultiSelect" does not exist.', 9, $this->source); })())) ? ("[]") : (""))), "value" => CoreExtension::getAttribute($this->env, $this->source,             // line 10
$context["filterValue"], "value", [], "any", false, false, false, 10), "checked" => CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,             // line 11
$context["filterValue"], "value", [], "any", false, false, false, 11), (isset($context["activeValues"]) || array_key_exists("activeValues", $context) ? $context["activeValues"] : (function () { throw new RuntimeError('Variable "activeValues" does not exist.', 11, $this->source); })()))], "data" => ["label" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 14
$context["filterValue"], "value", [], "any", false, false, false, 14) . " (") . $this->env->getFilter('executeFilterIfExists')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["filterValue"], "docCount", [], "any", false, false, false, 14), "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "locale", [], "any", false, false, false, 14))) . ")")]]));
            // line 17
            yield "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['filterValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "    </ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig";
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
        return array (  80 => 19,  73 => 17,  71 => 14,  70 => 11,  69 => 10,  68 => 9,  67 => 7,  64 => 6,  60 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('filter-enumeration', '@SprykerShop:CatalogPage') %}

{% block body %}
    <ul class=\"menu\">
        {% for filterValue in data.filter.values %}
            <li class=\"menu__item\">
                {% include inputComponent with {
                    attributes: {
                        name: data.filter.config.parameterName ~ (isMultiSelect ? '[]' : ''),
                        value: filterValue.value,
                        checked: (filterValue.value in activeValues),
                    },
                    data: {
                        label: filterValue.value ~ ' (' ~ filterValue.docCount | executeFilterIfExists('formatInt', app.locale) ~ ')',
                    },
                } only %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}
", "@CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/filter-enumeration/filter-enumeration.twig");
    }
}
