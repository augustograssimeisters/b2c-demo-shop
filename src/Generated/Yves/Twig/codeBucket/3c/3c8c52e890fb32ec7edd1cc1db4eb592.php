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

/* @ProductLabelWidget/components/molecules/label-group/label-group.twig */
class __TwigTemplate_6ce3d772fc7aaf26371fedf831154d3e extends Template
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
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("label-group", "@SprykerShop:ProductLabelWidget"), "@ProductLabelWidget/components/molecules/label-group/label-group.twig", 1);
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
        yield "    ";
        $context["leftColumnComponents"] = [];
        // line 5
        yield "    ";
        $context["rightColumnComponents"] = [];
        // line 6
        yield "    ";
        $context["labelTagType"] = "template:tag";
        // line 7
        yield "
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "labels", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 9
            yield "        ";
            $context["componentName"] = "flag";
            // line 10
            yield "        ";
            $context["componentModifiers"] = [CoreExtension::getAttribute($this->env, $this->source, $context["label"], "type", [], "any", false, false, false, 10)];
            // line 11
            yield "        ";
            $context["labelJsClass"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "jsName", [], "any", false, false, false, 11) . "__label-flag");
            // line 12
            yield "        ";
            $context["labelTextJsClass"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 12, $this->source); })()), "jsName", [], "any", false, false, false, 12) . "__label-flag-text");
            // line 13
            yield "
        ";
            // line 14
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "type", [], "any", false, false, false, 14) == (isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 14, $this->source); })()))) {
                // line 15
                yield "            ";
                $context["componentName"] = "tag";
                // line 16
                yield "            ";
                $context["componentModifiers"] = [];
                // line 17
                yield "            ";
                $context["labelJsClass"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "jsName", [], "any", false, false, false, 17) . "__label-tag");
                // line 18
                yield "            ";
                $context["labelTextJsClass"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "jsName", [], "any", false, false, false, 18) . "__label-tag-text");
                // line 19
                yield "        ";
            }
            // line 20
            yield "
        ";
            // line 21
            $context["component"] = Twig\Extension\CoreExtension::include($this->env, $context, [$this->env->getFunction('molecule')->getCallable()(            // line 23
(isset($context["componentName"]) || array_key_exists("componentName", $context) ? $context["componentName"] : (function () { throw new RuntimeError('Variable "componentName" does not exist.', 23, $this->source); })()), "ProductLabelWidget")], ["class" =>             // line 26
(isset($context["labelJsClass"]) || array_key_exists("labelJsClass", $context) ? $context["labelJsClass"] : (function () { throw new RuntimeError('Variable "labelJsClass" does not exist.', 26, $this->source); })()), "modifiers" =>             // line 27
(isset($context["componentModifiers"]) || array_key_exists("componentModifiers", $context) ? $context["componentModifiers"] : (function () { throw new RuntimeError('Variable "componentModifiers" does not exist.', 27, $this->source); })()), "data" => ["text" => CoreExtension::getAttribute($this->env, $this->source,             // line 29
$context["label"], "text", [], "any", false, false, false, 29), "textClass" =>             // line 30
(isset($context["labelTextJsClass"]) || array_key_exists("labelTextJsClass", $context) ? $context["labelTextJsClass"] : (function () { throw new RuntimeError('Variable "labelTextJsClass" does not exist.', 30, $this->source); })())], "attributes" => ["data-label-tag-type" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 33
$context["label"], "type", [], "any", false, false, false, 33) == (isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 33, $this->source); })()))) ? ((isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 33, $this->source); })())) : (""))]], false);
            // line 38
            yield "
        ";
            // line 39
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "type", [], "any", false, false, false, 39) == (isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 39, $this->source); })()))) {
                // line 40
                yield "            ";
                $context["leftColumnComponents"] = Twig\Extension\CoreExtension::merge((isset($context["leftColumnComponents"]) || array_key_exists("leftColumnComponents", $context) ? $context["leftColumnComponents"] : (function () { throw new RuntimeError('Variable "leftColumnComponents" does not exist.', 40, $this->source); })()), [(isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 40, $this->source); })())]);
                // line 41
                yield "        ";
            } else {
                // line 42
                yield "            ";
                $context["rightColumnComponents"] = Twig\Extension\CoreExtension::merge((isset($context["rightColumnComponents"]) || array_key_exists("rightColumnComponents", $context) ? $context["rightColumnComponents"] : (function () { throw new RuntimeError('Variable "rightColumnComponents" does not exist.', 42, $this->source); })()), [(isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 42, $this->source); })())]);
                // line 43
                yield "        ";
            }
            // line 44
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "
    ";
        // line 46
        if ((isset($context["leftColumnComponents"]) || array_key_exists("leftColumnComponents", $context) ? $context["leftColumnComponents"] : (function () { throw new RuntimeError('Variable "leftColumnComponents" does not exist.', 46, $this->source); })())) {
            // line 47
            yield "        ";
            yield Twig\Extension\CoreExtension::join((isset($context["leftColumnComponents"]) || array_key_exists("leftColumnComponents", $context) ? $context["leftColumnComponents"] : (function () { throw new RuntimeError('Variable "leftColumnComponents" does not exist.', 47, $this->source); })()));
            yield "
    ";
        } else {
            // line 49
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("tag", "ProductLabelWidget"), "@ProductLabelWidget/components/molecules/label-group/label-group.twig", 49)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 50
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "jsName", [], "any", false, false, false, 50) . "__label-tag is-hidden"), "data" => ["textClass" => (CoreExtension::getAttribute($this->env, $this->source,             // line 52
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 52, $this->source); })()), "jsName", [], "any", false, false, false, 52) . "__label-tag-text")], "attributes" => ["data-label-tag-type" =>             // line 55
(isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 55, $this->source); })())]]));
            // line 58
            yield "    ";
        }
        // line 59
        yield "
    ";
        // line 60
        if ((isset($context["rightColumnComponents"]) || array_key_exists("rightColumnComponents", $context) ? $context["rightColumnComponents"] : (function () { throw new RuntimeError('Variable "rightColumnComponents" does not exist.', 60, $this->source); })())) {
            // line 61
            yield "        ";
            yield Twig\Extension\CoreExtension::join((isset($context["rightColumnComponents"]) || array_key_exists("rightColumnComponents", $context) ? $context["rightColumnComponents"] : (function () { throw new RuntimeError('Variable "rightColumnComponents" does not exist.', 61, $this->source); })()));
            yield "
    ";
        } else {
            // line 63
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("flag", "ProductLabelWidget"), "@ProductLabelWidget/components/molecules/label-group/label-group.twig", 63)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 64
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 64, $this->source); })()), "jsName", [], "any", false, false, false, 64) . "__label-flag is-hidden"), "data" => ["textClass" => (CoreExtension::getAttribute($this->env, $this->source,             // line 66
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 66, $this->source); })()), "jsName", [], "any", false, false, false, 66) . "__label-flag-text")]]));
            // line 69
            yield "    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductLabelWidget/components/molecules/label-group/label-group.twig";
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
        return array (  175 => 69,  173 => 66,  172 => 64,  170 => 63,  164 => 61,  162 => 60,  159 => 59,  156 => 58,  154 => 55,  153 => 52,  152 => 50,  150 => 49,  144 => 47,  142 => 46,  139 => 45,  133 => 44,  130 => 43,  127 => 42,  124 => 41,  121 => 40,  119 => 39,  116 => 38,  114 => 33,  113 => 30,  112 => 29,  111 => 27,  110 => 26,  109 => 23,  108 => 21,  105 => 20,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  90 => 15,  88 => 14,  85 => 13,  82 => 12,  79 => 11,  76 => 10,  73 => 9,  69 => 8,  66 => 7,  63 => 6,  60 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('label-group', '@SprykerShop:ProductLabelWidget') %}

{% block body %}
    {% set leftColumnComponents = [] %}
    {% set rightColumnComponents = [] %}
    {% set labelTagType = 'template:tag' %}

    {% for label in data.labels %}
        {% set componentName = 'flag' %}
        {% set componentModifiers = [label.type] %}
        {% set labelJsClass = config.jsName ~ '__label-flag' %}
        {% set labelTextJsClass = config.jsName ~ '__label-flag-text' %}

        {% if label.type == labelTagType %}
            {% set componentName = 'tag' %}
            {% set componentModifiers = [] %}
            {% set labelJsClass = config.jsName ~ '__label-tag' %}
            {% set labelTextJsClass = config.jsName ~ '__label-tag-text' %}
        {% endif %}

        {% set component = include(
            [
                molecule(componentName, 'ProductLabelWidget')
            ],
            {
                class: labelJsClass,
                modifiers: componentModifiers,
                data: {
                    text: label.text,
                    textClass: labelTextJsClass,
                },
                attributes: {
                    'data-label-tag-type': label.type == labelTagType ? labelTagType,
                },
            },
            with_context = false
        ) %}

        {% if label.type == labelTagType %}
            {% set leftColumnComponents = leftColumnComponents | merge([component]) %}
        {% else %}
            {% set rightColumnComponents = rightColumnComponents | merge([component]) %}
        {% endif %}
    {% endfor %}

    {% if leftColumnComponents %}
        {{ leftColumnComponents | join | raw }}
    {% else %}
        {% include molecule('tag', 'ProductLabelWidget') with {
            class: config.jsName ~ '__label-tag is-hidden',
            data: {
                textClass: config.jsName ~ '__label-tag-text',
            },
            attributes: {
                'data-label-tag-type': labelTagType,
            },
        } only %}
    {% endif %}

    {% if rightColumnComponents %}
        {{ rightColumnComponents | join | raw }}
    {% else %}
        {% include molecule('flag', 'ProductLabelWidget') with {
            class: config.jsName ~ '__label-flag is-hidden',
            data: {
                textClass: config.jsName ~ '__label-flag-text',
            },
        } only %}
    {% endif %}
{% endblock %}
", "@ProductLabelWidget/components/molecules/label-group/label-group.twig", "/data/src/Pyz/Yves/ProductLabelWidget/Theme/default/components/molecules/label-group/label-group.twig");
    }
}
