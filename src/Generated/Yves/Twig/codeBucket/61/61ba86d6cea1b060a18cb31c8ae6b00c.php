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

/* @ShopUi/components/atoms/select/select.twig */
class __TwigTemplate_f5a66685e54215aa3b2462d3f068d4ca extends Template
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
            'attributes' => [$this, 'block_attributes'],
            'body' => [$this, 'block_body'],
            'selectClass' => [$this, 'block_selectClass'],
            'selectAttributes' => [$this, 'block_selectAttributes'],
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/atoms/select/select.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "select", "tag" => "label"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["options" => []], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "    <select class=\"";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16) . "__select"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 16, $this->source); })())], 16, $context, $this->getSourceContext());
        yield " ";
        yield from $this->unwrap()->yieldBlock('selectClass', $context, $blocks);
        yield "\" ";
        yield from $this->unwrap()->yieldBlock('selectAttributes', $context, $blocks);
        yield ">
        ";
        // line 17
        yield from $this->unwrap()->yieldBlock('options', $context, $blocks);
        // line 27
        yield "    </select>
    ";
        // line 28
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/atoms/select/select.twig", 28)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29) . "__caret"), "data" => ["name" => "arrow-down"]]));
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selectClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selectAttributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 16, $this->source); })())], 16, $context, $this->getSourceContext());
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "options", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 19
            yield "                ";
            $context["isSelected"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, false, 19), false)) : (false));
            // line 20
            yield "                ";
            $context["isDisabled"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "disabled", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "disabled", [], "any", false, false, false, 20), false)) : (false));
            // line 21
            yield "
                <option value=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 22), "html", null, true);
            yield "\" ";
            if ((isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 22, $this->source); })())) {
                yield "selected";
            }
            yield " ";
            if ((isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 22, $this->source); })())) {
                yield "disabled";
            }
            yield ">
                    ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 23), "html", null, true);
            yield "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/atoms/select/select.twig";
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
        return array (  158 => 26,  149 => 23,  137 => 22,  134 => 21,  131 => 20,  128 => 19,  123 => 18,  116 => 17,  96 => 16,  91 => 29,  90 => 28,  87 => 27,  85 => 17,  76 => 16,  69 => 15,  59 => 13,  55 => 1,  54 => 9,  53 => 4,  51 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'select',
    tag: 'label'
} %}

{% define data = {
    options: []
} %}

{% block attributes %}{% endblock %}

{% block body %}
    <select class=\"{{ component.renderClass(config.name ~ '__select', modifiers) }} {% block selectClass %}{% endblock %}\" {% block selectAttributes %}{{ component.renderAttributes(attributes) }}{% endblock %}>
        {% block options %}
            {% for option in data.options %}
                {% set isSelected = option.selected | default(false) %}
                {% set isDisabled = option.disabled | default(false) %}

                <option value=\"{{ option.value }}\" {% if isSelected %}selected{% endif %} {% if isDisabled %}disabled{% endif %}>
                    {{ option.label }}
                </option>
            {% endfor %}
        {% endblock %}
    </select>
    {% include atom('icon') with {
        class: config.name ~ '__caret',
        data: {
            name: 'arrow-down'
        }
    } only %}
{% endblock %}
", "@ShopUi/components/atoms/select/select.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/atoms/select/select.twig");
    }
}
