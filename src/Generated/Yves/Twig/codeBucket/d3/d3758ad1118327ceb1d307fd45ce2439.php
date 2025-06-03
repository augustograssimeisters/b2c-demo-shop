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

/* @ShopUi/components/molecules/toggler-item/toggler-item.twig */
class __TwigTemplate_477f5a049e73932c398e6b15ec20feee extends Template
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
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'contentText' => [$this, 'block_contentText'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/toggler-item/toggler-item.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "toggler-item"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["title" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "text" => "", "triggerClass" => "", "targetClass" => "", "isActive" => false, "isToggler" => true, "isTogglerIncluded" => true, "hiddenClass" => "is-hidden"], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        $context["titleClasses"] = "title title--h6 title--uppercase text-break";
        // line 21
        yield "    ";
        $context["activeClass"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21) . "__title--active");
        // line 22
        yield "    ";
        $context["togglerClass"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "isToggler", [], "any", false, false, false, 22)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "isActive", [], "any", false, false, false, 22)) ? ((isset($context["activeClass"]) || array_key_exists("activeClass", $context) ? $context["activeClass"] : (function () { throw new RuntimeError('Variable "activeClass" does not exist.', 22, $this->source); })())) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "hiddenClass", [], "any", false, false, false, 22)))) : (""));
        // line 23
        yield "    ";
        $context["titleActiveClass"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "isActive", [], "any", false, false, false, 23)) ? ((isset($context["activeClass"]) || array_key_exists("activeClass", $context) ? $context["activeClass"] : (function () { throw new RuntimeError('Variable "activeClass" does not exist.', 23, $this->source); })())) : (""));
        // line 24
        yield "    ";
        $context["titleReadOnlyClass"] = (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "isToggler", [], "any", false, false, false, 24)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24) . "__title--read-only")) : (""));
        // line 25
        yield "    ";
        $context["targetAttribute"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "targetClass", [], "any", false, false, false, 25)) ? (("data-toggle-target-class-name=" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "targetClass", [], "any", false, false, false, 25))) : (""));
        // line 26
        yield "
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 30
        yield "
    ";
        // line 31
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "        <h2 class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["titleClasses"]) || array_key_exists("titleClasses", $context) ? $context["titleClasses"] : (function () { throw new RuntimeError('Variable "titleClasses" does not exist.', 28, $this->source); })()), "html", null, true);
        yield " ";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28) . "__title"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 28, $this->source); })())], 28, $context, $this->getSourceContext());
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "triggerClass", [], "any", false, false, false, 28), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["titleActiveClass"]) || array_key_exists("titleActiveClass", $context) ? $context["titleActiveClass"] : (function () { throw new RuntimeError('Variable "titleActiveClass" does not exist.', 28, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["titleReadOnlyClass"]) || array_key_exists("titleReadOnlyClass", $context) ? $context["titleReadOnlyClass"] : (function () { throw new RuntimeError('Variable "titleReadOnlyClass" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["targetAttribute"]) || array_key_exists("targetAttribute", $context) ? $context["targetAttribute"] : (function () { throw new RuntimeError('Variable "targetAttribute" does not exist.', 28, $this->source); })()), "html", null, true);
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), "html", null, true);
        yield "</h2>
    ";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "        <div class=\"";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32) . "__content"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 32, $this->source); })())], 32, $context, $this->getSourceContext());
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "targetClass", [], "any", false, false, false, 32), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["togglerClass"]) || array_key_exists("togglerClass", $context) ? $context["togglerClass"] : (function () { throw new RuntimeError('Variable "togglerClass" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\">
            ";
        // line 33
        yield from $this->unwrap()->yieldBlock('contentText', $context, $blocks);
        // line 34
        yield "        </div>
        ";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "isToggler", [], "any", false, false, false, 35) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "isTogglerIncluded", [], "any", false, false, false, 35))) {
            // line 36
            yield "            ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-accordion"), "@ShopUi/components/molecules/toggler-item/toggler-item.twig", 36)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["trigger-class-name" => CoreExtension::getAttribute($this->env, $this->source,             // line 38
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "triggerClass", [], "any", false, false, false, 38), "class-to-toggle" => CoreExtension::getAttribute($this->env, $this->source,             // line 39
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "hiddenClass", [], "any", false, false, false, 39), "active-class" =>             // line 40
(isset($context["activeClass"]) || array_key_exists("activeClass", $context) ? $context["activeClass"] : (function () { throw new RuntimeError('Variable "activeClass" does not exist.', 40, $this->source); })())]]));
            // line 43
            yield "        ";
        }
        // line 44
        yield "    ";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contentText(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "text", [], "any", false, false, false, 33), "html", null, true);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/toggler-item/toggler-item.twig";
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
        return array (  161 => 33,  156 => 44,  153 => 43,  151 => 40,  150 => 39,  149 => 38,  147 => 36,  145 => 35,  142 => 34,  140 => 33,  131 => 32,  124 => 31,  104 => 28,  97 => 27,  92 => 31,  89 => 30,  87 => 27,  84 => 26,  81 => 25,  78 => 24,  75 => 23,  72 => 22,  69 => 21,  66 => 20,  59 => 19,  55 => 1,  54 => 9,  53 => 8,  52 => 4,  50 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'toggler-item',
} %}

{% define data = {
    title: required,
    text: '',
    triggerClass: '',
    targetClass: '',
    isActive: false,
    isToggler: true,
    isTogglerIncluded: true,
    hiddenClass: 'is-hidden',
} %}

{% block body %}
    {% set titleClasses = 'title title--h6 title--uppercase text-break' %}
    {% set activeClass = config.name ~ '__title--active' %}
    {% set togglerClass = data.isToggler ? (data.isActive ? activeClass : data.hiddenClass) %}
    {% set titleActiveClass = data.isActive ? activeClass %}
    {% set titleReadOnlyClass = not data.isToggler ? config.name ~ '__title--read-only' %}
    {% set targetAttribute = data.targetClass ? 'data-toggle-target-class-name=' ~ data.targetClass %}

    {% block title %}
        <h2 class=\"{{ titleClasses }} {{ component.renderClass(config.name ~ '__title', modifiers) }} {{ data.triggerClass }} {{ titleActiveClass }} {{ titleReadOnlyClass }}\" {{ targetAttribute }}>{{ data.title }}</h2>
    {% endblock %}

    {% block content %}
        <div class=\"{{ component.renderClass(config.name ~ '__content', modifiers) }} {{ data.targetClass }} {{ togglerClass }}\">
            {% block contentText %}{{ data.text }}{% endblock %}
        </div>
        {% if data.isToggler and data.isTogglerIncluded %}
            {% include molecule('toggler-accordion') with {
                attributes: {
                    'trigger-class-name': data.triggerClass,
                    'class-to-toggle': data.hiddenClass,
                    'active-class': activeClass,
                },
            } only %}
        {% endif %}
    {% endblock %}
{% endblock %}
", "@ShopUi/components/molecules/toggler-item/toggler-item.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-item/toggler-item.twig");
    }
}
