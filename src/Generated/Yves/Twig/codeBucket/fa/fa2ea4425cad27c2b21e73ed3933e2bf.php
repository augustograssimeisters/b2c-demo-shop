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

/* @ShopUi/components/molecules/navigation-list/navigation-list.twig */
class __TwigTemplate_f55bc707e9cc79898bdff8923320250b extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/navigation-list/navigation-list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-list"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["nodes" => []], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    <ul class=\"list ";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 13, $this->source); })())], 13, $context, $this->getSourceContext());
        yield "\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "nodes", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 15
            yield "            ";
            yield from             $this->loadTemplate("@ShopUi/components/molecules/navigation-list/navigation-list.twig", "@ShopUi/components/molecules/navigation-list/navigation-list.twig", 15, "368909664")->unwrap()->yield(CoreExtension::toArray(["modifiers" =>             // line 16
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 16, $this->source); })()), "class" => ("list__item" . ((CoreExtension::getAttribute($this->env, $this->source,             // line 17
$context["node"], "url", [], "any", false, false, false, 17)) ? ("") : ((" " . CoreExtension::getAttribute($this->env, $this->source, $context["node"], "cssClass", [], "any", false, false, false, 17))))), "config" => ["tag" => "li"], "data" => ["node" =>             // line 22
$context["node"]]]));
            // line 37
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['node'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "    </ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/navigation-list/navigation-list.twig";
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
        return array (  83 => 38,  77 => 37,  75 => 22,  74 => 17,  73 => 16,  71 => 15,  67 => 14,  62 => 13,  55 => 12,  51 => 1,  50 => 8,  49 => 4,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'navigation-list'
} %}

{% define data = {
    nodes: []
} %}

{% block body %}
    <ul class=\"list {{ component.renderClass(config.name, modifiers) }}\">
        {% for node in data.nodes %}
            {% embed atom('node') with {
                modifiers: modifiers,
                class: 'list__item' ~ (node.url ? '' : ' ' ~ node.cssClass),
                config: {
                    tag: 'li'
                },
                data: {
                    node: node
                }
            } only %}
                {% block url %}
                    <a class=\"{{ component.renderClass(config.name ~ '__link', modifiers) }} {{ data.node.cssClass }}\" href=\"{{ data.node.url }}\">{{ data.node.title }}</a>
                {% endblock %}

                {% block externalUrl %}
                    <a class=\"{{ component.renderClass(config.name ~ '__link', modifiers) }} {{ data.node.cssClass }}\" href=\"{{ data.node.url }}\" target=\"_blank\">{{ data.node.title }}</a>
                {% endblock %}

                {% block other %}
                    {{ data.node.title }}
                {% endblock %}
            {% endembed %}
        {% endfor %}
    </ul>
{% endblock %}


", "@ShopUi/components/molecules/navigation-list/navigation-list.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-list/navigation-list.twig");
    }
}


/* @ShopUi/components/molecules/navigation-list/navigation-list.twig */
class __TwigTemplate_f55bc707e9cc79898bdff8923320250b___368909664 extends Template
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
            'url' => [$this, 'block_url'],
            'externalUrl' => [$this, 'block_externalUrl'],
            'other' => [$this, 'block_other'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 15
        return $this->loadTemplate($this->env->getFunction('atom')->getCallable()("node"), "@ShopUi/components/molecules/navigation-list/navigation-list.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_url(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "                    <a class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 26, $this->source); })()), "renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26) . "__link"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 26, $this->source); })())], "method", false, false, false, 26), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "node", [], "any", false, false, false, 26), "cssClass", [], "any", false, false, false, 26), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "node", [], "any", false, false, false, 26), "url", [], "any", false, false, false, 26), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "node", [], "any", false, false, false, 26), "title", [], "any", false, false, false, 26), "html", null, true);
        yield "</a>
                ";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_externalUrl(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "                    <a class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 30, $this->source); })()), "renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30) . "__link"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 30, $this->source); })())], "method", false, false, false, 30), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "node", [], "any", false, false, false, 30), "cssClass", [], "any", false, false, false, 30), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "node", [], "any", false, false, false, 30), "url", [], "any", false, false, false, 30), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "node", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30), "html", null, true);
        yield "</a>
                ";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_other(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "node", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), "html", null, true);
        yield "
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/navigation-list/navigation-list.twig";
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
        return array (  244 => 34,  237 => 33,  223 => 30,  216 => 29,  202 => 26,  195 => 25,  185 => 15,  83 => 38,  77 => 37,  75 => 22,  74 => 17,  73 => 16,  71 => 15,  67 => 14,  62 => 13,  55 => 12,  51 => 1,  50 => 8,  49 => 4,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'navigation-list'
} %}

{% define data = {
    nodes: []
} %}

{% block body %}
    <ul class=\"list {{ component.renderClass(config.name, modifiers) }}\">
        {% for node in data.nodes %}
            {% embed atom('node') with {
                modifiers: modifiers,
                class: 'list__item' ~ (node.url ? '' : ' ' ~ node.cssClass),
                config: {
                    tag: 'li'
                },
                data: {
                    node: node
                }
            } only %}
                {% block url %}
                    <a class=\"{{ component.renderClass(config.name ~ '__link', modifiers) }} {{ data.node.cssClass }}\" href=\"{{ data.node.url }}\">{{ data.node.title }}</a>
                {% endblock %}

                {% block externalUrl %}
                    <a class=\"{{ component.renderClass(config.name ~ '__link', modifiers) }} {{ data.node.cssClass }}\" href=\"{{ data.node.url }}\" target=\"_blank\">{{ data.node.title }}</a>
                {% endblock %}

                {% block other %}
                    {{ data.node.title }}
                {% endblock %}
            {% endembed %}
        {% endfor %}
    </ul>
{% endblock %}


", "@ShopUi/components/molecules/navigation-list/navigation-list.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-list/navigation-list.twig");
    }
}
