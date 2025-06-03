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

/* @ShopUi/components/molecules/formatted-number-input/formatted-number-input.twig */
class __TwigTemplate_7fcca5333b230af716eda189d94b6bc1 extends Template
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
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("formatted-number-input", "@SprykerShop:ShopUi"), "@ShopUi/components/molecules/formatted-number-input/formatted-number-input.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["globalNumberFormatConfig"] = [];
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $this->env->getFunction('getNumberFormatConfig')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "locale", [], "any", false, false, false, 4)), "toArray", [], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 5
            $context["globalNumberFormatConfig"] = Twig\Extension\CoreExtension::merge((isset($context["globalNumberFormatConfig"]) || array_key_exists("globalNumberFormatConfig", $context) ? $context["globalNumberFormatConfig"] : (function () { throw new RuntimeError('Variable "globalNumberFormatConfig" does not exist.', 5, $this->source); })()), [Twig\Extension\CoreExtension::replace($context["key"], ["_symbol" => "", "_" => "-"]) => $context["value"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["grouping-separator" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["globalNumberFormatConfig"] ?? null), "grouping-separator", [], "array", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["globalNumberFormatConfig"] ?? null), "grouping-separator", [], "array", false, false, false, 9))) : ("")), "decimal-separator" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["globalNumberFormatConfig"] ?? null), "decimal-separator", [], "array", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["globalNumberFormatConfig"] ?? null), "decimal-separator", [], "array", false, false, false, 10), ".")) : (".")), "decimal-rounding" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["globalNumberFormatConfig"] ?? null), "decimal-rounding", [], "array", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["globalNumberFormatConfig"] ?? null), "decimal-rounding", [], "array", false, false, false, 11), 3)) : (3))], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/formatted-number-input/formatted-number-input.twig";
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
        return array (  62 => 1,  61 => 11,  60 => 10,  59 => 9,  58 => 8,  52 => 5,  48 => 4,  46 => 3,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('formatted-number-input', '@SprykerShop:ShopUi') %}

{% set globalNumberFormatConfig = {} %}
{% for key, value in getNumberFormatConfig(app.locale).toArray() %}
    {% set globalNumberFormatConfig = globalNumberFormatConfig | merge({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% define attributes = {
    'grouping-separator': globalNumberFormatConfig['grouping-separator'] | default,
    'decimal-separator': globalNumberFormatConfig['decimal-separator'] | default('.'),
    'decimal-rounding': globalNumberFormatConfig['decimal-rounding'] | default(3),
} %}
", "@ShopUi/components/molecules/formatted-number-input/formatted-number-input.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/formatted-number-input/formatted-number-input.twig");
    }
}
