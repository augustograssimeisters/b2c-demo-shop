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

/* @ShopUi/models/component.twig */
class __TwigTemplate_8cd2e498fe5ea4257925d9ade02e9af7 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'component' => [$this, 'block_component'],
            'class' => [$this, 'block_class'],
            'extraClass' => [$this, 'block_extraClass'],
            'attributes' => [$this, 'block_attributes'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "jsName" => ("js-" . CoreExtension::getAttribute($this->env, $this->source,         // line 9
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9)), "tag" => "div"], $context['config']);        // line 13
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive([], $context['data']);        // line 14
if (!array_key_exists('embed', $context)) {$context['embed'] = [];}$context['embed'] = array_replace_recursive([], $context['embed']);        // line 15
        $context["qa"] = ((array_key_exists("qa", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["qa"]) || array_key_exists("qa", $context) ? $context["qa"] : (function () { throw new RuntimeError('Variable "qa" does not exist.', 15, $this->source); })()), "")) : (""));
        // line 17
        $context["class"] = ((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 17, $this->source); })()), "")) : (""));
        // line 18
if (!array_key_exists('modifiers', $context)) {$context['modifiers'] = [];}$context['modifiers'] = array_replace_recursive([], $context['modifiers']);        // line 19
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive([], $context['attributes']);        // line 37
        $macros["component"] = $this->macros["component"] = $this;
        // line 38
        yield "
";
        // line 39
        yield from $this->unwrap()->yieldBlock('component', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_component(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "    <";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 40, $this->source); })()), "tag", [], "any", false, false, false, 40), "html", null, true);
        yield " class=\"";
        // line 41
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "tag", [], "any", false, false, false, 41)) && CoreExtension::inFilter("-", CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "tag", [], "any", false, false, false, 41)))) {
            yield "custom-element ";
        }
        // line 43
        yield from $this->unwrap()->yieldBlock('class', $context, $blocks);
        // line 46
        yield "\"

        ";
        // line 48
        yield $this->env->getFunction('qa')->getCallable()(["component", CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), ((CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["attributes"] ?? null), "name", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "name", [], "any", false, false, false, 51))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["attributes"] ?? null), "id", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, false, 52))) : ("")),         // line 53
(isset($context["qa"]) || array_key_exists("qa", $context) ? $context["qa"] : (function () { throw new RuntimeError('Variable "qa" does not exist.', 53, $this->source); })())]);
        // line 56
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        // line 58
        yield ">";
        // line 59
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 60
        yield "</";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 60, $this->source); })()), "tag", [], "any", false, false, false, 60), "html", null, true);
        yield ">
";
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 44, $this->source); })()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 44, $this->source); })())], 44, $context, $this->getSourceContext());
        // line 45
        yield from $this->unwrap()->yieldBlock('extraClass', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extraClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 57, $this->source); })())], 57, $context, $this->getSourceContext());
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 21
    public function macro_renderClass($__name__ = null, $__modifiers__ = null, $__extra__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "name" => $__name__,
            "modifiers" => $__modifiers__,
            "extra" => $__extra__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 22, $this->source); })())), "html", null, true);
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["modifier"]) {
                if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($context["modifier"]))) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 23, $this->source); })()), "html", null, true);
                    yield "--";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["modifier"]), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['modifier'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            if ((isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 24, $this->source); })())) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 24, $this->source); })()), "html", null, true);
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 27
    public function macro_renderAttributes($__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 29
                if (($context["value"] === true)) {
                    // line 30
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" " . $context["name"]), "html", null, true);
                } elseif ( !(                // line 31
$context["value"] === false)) {
                    // line 32
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" " . $context["name"]), "html", null, true);
                    yield "='";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "'";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/models/component.twig";
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
        return array (  214 => 32,  212 => 31,  210 => 30,  208 => 29,  204 => 28,  192 => 27,  183 => 24,  169 => 23,  167 => 22,  153 => 21,  143 => 59,  138 => 57,  131 => 56,  117 => 45,  115 => 44,  108 => 43,  100 => 60,  98 => 59,  96 => 58,  94 => 56,  92 => 53,  91 => 52,  90 => 51,  89 => 50,  88 => 48,  84 => 46,  82 => 43,  78 => 41,  74 => 40,  63 => 39,  60 => 38,  58 => 37,  57 => 19,  56 => 18,  54 => 17,  52 => 15,  51 => 14,  50 => 13,  49 => 9,  48 => 8,  47 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 #
 #
 # Component API
 #}

{%- define config = {
    name: required,
    jsName: 'js-' ~ config.name,
    tag: 'div'
} -%}

{%- define data = {} -%}
{%- define embed = {} -%}
{%- set qa = qa | default('') -%}

{%- set class = class | default('') -%}
{%- define modifiers = [] -%}
{%- define attributes = {} -%}

{% macro renderClass(name, modifiers, extra) %}
    {{-name | trim-}}
    {%- for modifier in modifiers -%}{%- if modifier | trim is not empty %} {{name}}--{{modifier | trim}}{% endif -%}{% endfor -%}
    {%- if extra %} {{extra-}}{% endif -%}
{%- endmacro -%}

{% macro renderAttributes(attributes) %}
    {%- for name, value in attributes -%}
        {%- if value is same as(true) -%}
            {{-' ' ~ name-}}
        {%- elseif value is not same as(false) -%}
            {{-' ' ~ name-}}='{{-value-}}'
        {%- endif -%}
    {%- endfor -%}
{%- endmacro -%}

{% import _self as component %}

{% block component %}
    <{{-config.tag}} class=\"
        {%- if config.name == config.tag and '-' in config.tag -%}custom-element {% endif -%}

        {%- block class -%}
            {{- component.renderClass(config.name, modifiers, class) -}}
            {% block extraClass %}{% endblock %}
        {%- endblock -%}\"

        {{qa(
            'component',
            config.name,
            attributes.name | default,
            attributes.id | default,
            qa
        )}}

        {%- block attributes -%}
            {{- component.renderAttributes(attributes) -}}
        {%- endblock -%}>
            {%- block body -%}{%- endblock -%}
    </{{-config.tag-}}>
{% endblock -%}
", "@ShopUi/models/component.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.twig");
    }
}
