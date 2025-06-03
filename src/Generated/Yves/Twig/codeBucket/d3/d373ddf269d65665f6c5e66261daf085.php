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

/* @@SprykerShop:CatalogPage/components/molecules/filter-range/filter-range.twig */
class __TwigTemplate_c87774da987d0a9eab90101a4dd78430 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:CatalogPage/components/molecules/filter-range/filter-range.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-range"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["parameter" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "min" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "activeMin" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "max" =>         // line 11
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 11, $this->source); })()), "activeMax" =>         // line 12
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 12, $this->source); })()), "numberFormatConfig" => []], $context['data']);        // line 16
        $context["inputAttributes"] = Twig\Extension\CoreExtension::merge(["min" => CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "min", [], "any", false, false, false, 17), "max" => CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "max", [], "any", false, false, false, 18), "decimal-rounding" => 0], CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "numberFormatConfig", [], "any", false, false, false, 20));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    <h3 class=\"title--h6\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.filter." . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "filter", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23)))), "html", null, true);
        yield "</h3>

    <div class=\"grid grid--justify spacing-top\">
        <div class=\"col col--sm-5\">
            <label>
                ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.rangeFrom"), "html", null, true);
        yield "

                ";
        // line 30
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("formatted-number-input"), "@@SprykerShop:CatalogPage/components/molecules/filter-range/filter-range.twig", 30)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["expand"], "data" => ["inputName" => (CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "parameter", [], "any", false, false, false, 33) . "[min]"), "inputValue" => CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "activeMin", [], "any", false, false, false, 34)], "attributes" =>         // line 36
(isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 36, $this->source); })())]));
        // line 38
        yield "            </label>
        </div>

        <div class=\"col col--sm-5\">
            <label>
                ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.rangeTo"), "html", null, true);
        yield "

                ";
        // line 45
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("formatted-number-input"), "@@SprykerShop:CatalogPage/components/molecules/filter-range/filter-range.twig", 45)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["expand"], "data" => ["inputName" => (CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "parameter", [], "any", false, false, false, 48) . "[max]"), "inputValue" => CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "activeMax", [], "any", false, false, false, 49)], "attributes" =>         // line 51
(isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 51, $this->source); })())]));
        // line 53
        yield "            </label>
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
        return "@@SprykerShop:CatalogPage/components/molecules/filter-range/filter-range.twig";
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
        return array (  106 => 53,  104 => 51,  103 => 49,  102 => 48,  101 => 45,  96 => 43,  89 => 38,  87 => 36,  86 => 34,  85 => 33,  84 => 30,  79 => 28,  70 => 23,  63 => 22,  59 => 1,  57 => 20,  56 => 18,  55 => 17,  54 => 16,  53 => 12,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-range',
} %}

{% define data = {
    parameter: required,
    min: required,
    activeMin: required,
    max: required,
    activeMax: required,
    numberFormatConfig: {},
} %}

{% set inputAttributes = {
    min: data.min,
    max: data.max,
    'decimal-rounding': 0,
} | merge(data.numberFormatConfig) %}

{% block body %}
    <h3 class=\"title--h6\">{{ ('product.filter.' ~ data.filter.name | lower) | trans }}</h3>

    <div class=\"grid grid--justify spacing-top\">
        <div class=\"col col--sm-5\">
            <label>
                {{ 'catalog.filter.rangeFrom'|trans }}

                {% include molecule('formatted-number-input') with {
                    modifiers: ['expand'],
                    data: {
                        inputName: data.parameter ~ '[min]',
                        inputValue: data.activeMin,
                    },
                    attributes: inputAttributes,
                } only %}
            </label>
        </div>

        <div class=\"col col--sm-5\">
            <label>
                {{ 'catalog.filter.rangeTo'|trans }}

                {% include molecule('formatted-number-input') with {
                    modifiers: ['expand'],
                    data: {
                        inputName: data.parameter ~ '[max]',
                        inputValue: data.activeMax,
                    },
                    attributes: inputAttributes,
                } only %}
            </label>
        </div>
    </div>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/filter-range/filter-range.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/filter-range/filter-range.twig");
    }
}
