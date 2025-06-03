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

/* @@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig */
class __TwigTemplate_37f50e4129d1114c1533d7d4f35a98c7 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "label-group", "tag" => "label-group"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["labels" => [], "parentJsName" => ""], $context['data']);        // line 13
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["class-to-toggle" => "is-hidden", "product-item-class-name" => CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "parentJsName", [], "any", false, false, false, 15)], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    ";
        $context["leftColumnComponents"] = [];
        // line 20
        yield "    ";
        $context["rightColumnComponents"] = [];
        // line 21
        yield "    ";
        $context["labelTagType"] = "template:tag";
        // line 22
        yield "
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "labels", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 24
            yield "        ";
            $context["componentName"] = "flag";
            // line 25
            yield "        ";
            $context["componentModifiers"] = [CoreExtension::getAttribute($this->env, $this->source, $context["label"], "type", [], "any", false, false, false, 25)];
            // line 26
            yield "        ";
            $context["labelJsClass"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "jsName", [], "any", false, false, false, 26) . "__label-flag");
            // line 27
            yield "        ";
            $context["labelTextJsClass"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "jsName", [], "any", false, false, false, 27) . "__label-flag-text");
            // line 28
            yield "
        ";
            // line 29
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "type", [], "any", false, false, false, 29) == (isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 29, $this->source); })()))) {
                // line 30
                yield "            ";
                $context["componentName"] = "tag";
                // line 31
                yield "            ";
                $context["componentModifiers"] = [];
                // line 32
                yield "            ";
                $context["labelJsClass"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "jsName", [], "any", false, false, false, 32) . "__label-tag");
                // line 33
                yield "            ";
                $context["labelTextJsClass"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "jsName", [], "any", false, false, false, 33) . "__label-tag-text");
                // line 34
                yield "        ";
            }
            // line 35
            yield "
        ";
            // line 36
            $context["component"] = Twig\Extension\CoreExtension::include($this->env, $context, [$this->env->getFunction('molecule')->getCallable()(            // line 38
(isset($context["componentName"]) || array_key_exists("componentName", $context) ? $context["componentName"] : (function () { throw new RuntimeError('Variable "componentName" does not exist.', 38, $this->source); })()), "ProductLabelWidget")], ["class" =>             // line 41
(isset($context["labelJsClass"]) || array_key_exists("labelJsClass", $context) ? $context["labelJsClass"] : (function () { throw new RuntimeError('Variable "labelJsClass" does not exist.', 41, $this->source); })()), "modifiers" =>             // line 42
(isset($context["componentModifiers"]) || array_key_exists("componentModifiers", $context) ? $context["componentModifiers"] : (function () { throw new RuntimeError('Variable "componentModifiers" does not exist.', 42, $this->source); })()), "data" => ["text" => CoreExtension::getAttribute($this->env, $this->source,             // line 44
$context["label"], "text", [], "any", false, false, false, 44), "textClass" =>             // line 45
(isset($context["labelTextJsClass"]) || array_key_exists("labelTextJsClass", $context) ? $context["labelTextJsClass"] : (function () { throw new RuntimeError('Variable "labelTextJsClass" does not exist.', 45, $this->source); })())], "attributes" => ["data-label-tag-type" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 48
$context["label"], "type", [], "any", false, false, false, 48) == (isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 48, $this->source); })()))) ? ((isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 48, $this->source); })())) : (""))]], false);
            // line 53
            yield "
        ";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["label"], "type", [], "any", false, false, false, 54) == (isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 54, $this->source); })()))) {
                // line 55
                yield "            ";
                $context["leftColumnComponents"] = Twig\Extension\CoreExtension::merge((isset($context["leftColumnComponents"]) || array_key_exists("leftColumnComponents", $context) ? $context["leftColumnComponents"] : (function () { throw new RuntimeError('Variable "leftColumnComponents" does not exist.', 55, $this->source); })()), [(isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 55, $this->source); })())]);
                // line 56
                yield "        ";
            } else {
                // line 57
                yield "            ";
                $context["rightColumnComponents"] = Twig\Extension\CoreExtension::merge((isset($context["rightColumnComponents"]) || array_key_exists("rightColumnComponents", $context) ? $context["rightColumnComponents"] : (function () { throw new RuntimeError('Variable "rightColumnComponents" does not exist.', 57, $this->source); })()), [(isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 57, $this->source); })())]);
                // line 58
                yield "        ";
            }
            // line 59
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "
    <div class=\"grid grid--justify\">
        ";
        // line 62
        if ((isset($context["leftColumnComponents"]) || array_key_exists("leftColumnComponents", $context) ? $context["leftColumnComponents"] : (function () { throw new RuntimeError('Variable "leftColumnComponents" does not exist.', 62, $this->source); })())) {
            // line 63
            yield "            <div class=\"col col--expand\">";
            yield Twig\Extension\CoreExtension::join((isset($context["leftColumnComponents"]) || array_key_exists("leftColumnComponents", $context) ? $context["leftColumnComponents"] : (function () { throw new RuntimeError('Variable "leftColumnComponents" does not exist.', 63, $this->source); })()));
            yield "</div>
        ";
        } else {
            // line 65
            yield "            <div class=\"col col--expand\">
                ";
            // line 66
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("tag", "ProductLabelWidget"), "@@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig", 66)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 67
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 67, $this->source); })()), "jsName", [], "any", false, false, false, 67) . "__label-tag is-hidden"), "data" => ["textClass" => (CoreExtension::getAttribute($this->env, $this->source,             // line 69
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 69, $this->source); })()), "jsName", [], "any", false, false, false, 69) . "__label-tag-text")], "attributes" => ["data-label-tag-type" =>             // line 72
(isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 72, $this->source); })())]]));
            // line 75
            yield "            </div>
        ";
        }
        // line 77
        yield "
        ";
        // line 78
        if ((isset($context["rightColumnComponents"]) || array_key_exists("rightColumnComponents", $context) ? $context["rightColumnComponents"] : (function () { throw new RuntimeError('Variable "rightColumnComponents" does not exist.', 78, $this->source); })())) {
            // line 79
            yield "            <div class=\"col col--expand text-right\">";
            yield Twig\Extension\CoreExtension::join((isset($context["rightColumnComponents"]) || array_key_exists("rightColumnComponents", $context) ? $context["rightColumnComponents"] : (function () { throw new RuntimeError('Variable "rightColumnComponents" does not exist.', 79, $this->source); })()));
            yield "</div>
        ";
        } else {
            // line 81
            yield "            <div class=\"col col--expand text-right\">
                ";
            // line 82
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("flag", "ProductLabelWidget"), "@@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig", 82)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 83
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 83, $this->source); })()), "jsName", [], "any", false, false, false, 83) . "__label-flag is-hidden"), "data" => ["textClass" => (CoreExtension::getAttribute($this->env, $this->source,             // line 85
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 85, $this->source); })()), "jsName", [], "any", false, false, false, 85) . "__label-flag-text")]]));
            // line 88
            yield "            </div>
        ";
        }
        // line 90
        yield "    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig";
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
        return array (  190 => 90,  186 => 88,  184 => 85,  183 => 83,  182 => 82,  179 => 81,  173 => 79,  171 => 78,  168 => 77,  164 => 75,  162 => 72,  161 => 69,  160 => 67,  159 => 66,  156 => 65,  150 => 63,  148 => 62,  144 => 60,  138 => 59,  135 => 58,  132 => 57,  129 => 56,  126 => 55,  124 => 54,  121 => 53,  119 => 48,  118 => 45,  117 => 44,  116 => 42,  115 => 41,  114 => 38,  113 => 36,  110 => 35,  107 => 34,  104 => 33,  101 => 32,  98 => 31,  95 => 30,  93 => 29,  90 => 28,  87 => 27,  84 => 26,  81 => 25,  78 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  55 => 18,  51 => 1,  50 => 15,  49 => 13,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'label-group',
    tag: 'label-group',
} %}

{% define data = {
    labels: [],
    parentJsName: '',
}  %}

{% define attributes = {
    'class-to-toggle': 'is-hidden',
    'product-item-class-name': data.parentJsName,
} %}

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

    <div class=\"grid grid--justify\">
        {% if leftColumnComponents %}
            <div class=\"col col--expand\">{{ leftColumnComponents | join | raw }}</div>
        {% else %}
            <div class=\"col col--expand\">
                {% include molecule('tag', 'ProductLabelWidget') with {
                    class: config.jsName ~ '__label-tag is-hidden',
                    data: {
                        textClass: config.jsName ~ '__label-tag-text',
                    },
                    attributes: {
                        'data-label-tag-type': labelTagType,
                    },
                } only %}
            </div>
        {% endif %}

        {% if rightColumnComponents %}
            <div class=\"col col--expand text-right\">{{ rightColumnComponents | join | raw }}</div>
        {% else %}
            <div class=\"col col--expand text-right\">
                {% include molecule('flag', 'ProductLabelWidget') with {
                    class: config.jsName ~ '__label-flag is-hidden',
                    data: {
                        textClass: config.jsName ~ '__label-flag-text',
                    },
                } only %}
            </div>
        {% endif %}
    </div>
{% endblock %}
", "@@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig", "/data/vendor/spryker-shop/product-label-widget/src/SprykerShop/Yves/ProductLabelWidget/Theme/default/components/molecules/label-group/label-group.twig");
    }
}
