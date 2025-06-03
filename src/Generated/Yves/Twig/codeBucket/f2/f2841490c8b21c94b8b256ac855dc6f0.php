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

/* @ShopUi/components/molecules/navigation-header/navigation-header.twig */
class __TwigTemplate_c25d64d78f532e5d057aa3f621843c28 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/navigation-header/navigation-header.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-header", "tag" => "nav"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["nodes" => [], "menuInline" => false, "menuDropdown" => false], $context['data']);        // line 14
        $context["menuClass"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "menuInline", [], "any", false, false, false, 14)) ? ("menu--inline") : (""));
        // line 15
        $context["menuChildrenClass"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "menuDropdown", [], "any", false, false, false, 15)) ? ("menu__item--has-children-dropdown") : ("menu__item--has-children-list"));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "    <ul class=\"menu ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["menuClass"]) || array_key_exists("menuClass", $context) ? $context["menuClass"] : (function () { throw new RuntimeError('Variable "menuClass" does not exist.', 18, $this->source); })()), "html", null, true);
        yield " grid grid--center grid--no-wrap\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "nodes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 20
            yield "            ";
            $context["hasChildren"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["node"], "children", [], "any", false, false, false, 20)) > 0);
            // line 21
            yield "            ";
            $context["flyoutClass"] = (CoreExtension::getAttribute($this->env, $this->source, $context["node"], "cssClass", [], "any", false, false, false, 21) == "flyout-fullscreen");
            // line 22
            yield "            ";
            $context["flyoutClassBrand"] = (CoreExtension::getAttribute($this->env, $this->source, $context["node"], "cssClass", [], "any", false, false, false, 22) == "flyout-fullscreen brand-dropdown");
            // line 23
            yield "
            ";
            // line 24
            if (((isset($context["flyoutClass"]) || array_key_exists("flyoutClass", $context) ? $context["flyoutClass"] : (function () { throw new RuntimeError('Variable "flyoutClass" does not exist.', 24, $this->source); })()) || (isset($context["flyoutClassBrand"]) || array_key_exists("flyoutClassBrand", $context) ? $context["flyoutClassBrand"] : (function () { throw new RuntimeError('Variable "flyoutClassBrand" does not exist.', 24, $this->source); })()))) {
                // line 25
                yield "                ";
                yield from                 $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-multilevel-node"), "@ShopUi/components/molecules/navigation-header/navigation-header.twig", 25)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["flyout", ((                // line 26
(isset($context["flyoutClassBrand"]) || array_key_exists("flyoutClassBrand", $context) ? $context["flyoutClassBrand"] : (function () { throw new RuntimeError('Variable "flyoutClassBrand" does not exist.', 26, $this->source); })())) ? ("brand") : (""))], "class" => (((("menu__item " . ((                // line 27
(isset($context["hasChildren"]) || array_key_exists("hasChildren", $context) ? $context["hasChildren"] : (function () { throw new RuntimeError('Variable "hasChildren" does not exist.', 27, $this->source); })())) ? ((isset($context["menuChildrenClass"]) || array_key_exists("menuChildrenClass", $context) ? $context["menuChildrenClass"] : (function () { throw new RuntimeError('Variable "menuChildrenClass" does not exist.', 27, $this->source); })())) : ("childless"))) . " ") . (((isset($context["flyoutClass"]) || array_key_exists("flyoutClass", $context) ? $context["flyoutClass"] : (function () { throw new RuntimeError('Variable "flyoutClass" does not exist.', 27, $this->source); })())) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27) . "__flyout-fullscreen ")) : (" "))) . (((isset($context["flyoutClassBrand"]) || array_key_exists("flyoutClassBrand", $context) ? $context["flyoutClassBrand"] : (function () { throw new RuntimeError('Variable "flyoutClassBrand" does not exist.', 27, $this->source); })())) ? ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27) . "__brand-dropdown ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27)) . "__flyout-fullscreen")) : (""))), "data" => ["node" =>                 // line 29
$context["node"]]]));
                // line 32
                yield "            ";
            } else {
                // line 33
                yield "                ";
                yield from                 $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-multilevel-node"), "@ShopUi/components/molecules/navigation-header/navigation-header.twig", 33)->unwrap()->yield(CoreExtension::toArray(["class" => ((((("menu__item " . ((                // line 34
(isset($context["hasChildren"]) || array_key_exists("hasChildren", $context) ? $context["hasChildren"] : (function () { throw new RuntimeError('Variable "hasChildren" does not exist.', 34, $this->source); })())) ? ((isset($context["menuChildrenClass"]) || array_key_exists("menuChildrenClass", $context) ? $context["menuChildrenClass"] : (function () { throw new RuntimeError('Variable "menuChildrenClass" does not exist.', 34, $this->source); })())) : ("childless"))) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34)) . "__") . CoreExtension::getAttribute($this->env, $this->source, $context["node"], "cssClass", [], "any", false, false, false, 34)), "data" => ["node" =>                 // line 36
$context["node"]]]));
                // line 39
                yield "            ";
            }
            // line 40
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['node'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "    </ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/navigation-header/navigation-header.twig";
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
        return array (  110 => 41,  104 => 40,  101 => 39,  99 => 36,  98 => 34,  96 => 33,  93 => 32,  91 => 29,  90 => 27,  89 => 26,  87 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  69 => 19,  64 => 18,  57 => 17,  53 => 1,  51 => 15,  49 => 14,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-header',
    tag: 'nav'
} %}

{% define data = {
    nodes: [],
    menuInline: false,
    menuDropdown: false
} %}

{% set menuClass = data.menuInline ? 'menu--inline' : '' %}
{% set menuChildrenClass = data.menuDropdown ? 'menu__item--has-children-dropdown' : 'menu__item--has-children-list' %}

{% block body %}
    <ul class=\"menu {{ menuClass }} grid grid--center grid--no-wrap\">
        {% for node in data.nodes %}
            {% set hasChildren = node.children | length > 0 %}
            {% set flyoutClass = node.cssClass == 'flyout-fullscreen' %}
            {% set flyoutClassBrand = node.cssClass == 'flyout-fullscreen brand-dropdown' %}

            {% if flyoutClass or flyoutClassBrand %}
                {% include molecule('navigation-multilevel-node') with {
                    modifiers: ['flyout', (flyoutClassBrand ? 'brand' : '')],
                    class: 'menu__item ' ~ (hasChildren ? menuChildrenClass : 'childless') ~ ' ' ~ (flyoutClass ? config.name ~ '__flyout-fullscreen ' : ' ') ~ (flyoutClassBrand ? config.name ~ '__brand-dropdown ' ~ config.name ~ '__flyout-fullscreen' : ''),
                    data: {
                        node: node
                    }
                } only %}
            {% else %}
                {% include molecule('navigation-multilevel-node') with {
                    class: 'menu__item ' ~ (hasChildren ? menuChildrenClass : 'childless') ~ ' ' ~ config.name ~ '__' ~ node.cssClass,
                    data: {
                        node: node
                    }
                } only %}
            {% endif %}
        {% endfor %}
    </ul>
{% endblock %}
", "@ShopUi/components/molecules/navigation-header/navigation-header.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-header/navigation-header.twig");
    }
}
