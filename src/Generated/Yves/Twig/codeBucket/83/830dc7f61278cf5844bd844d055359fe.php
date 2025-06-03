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

/* @CatalogPage/components/atoms/color-checkbox/color-checkbox.twig */
class __TwigTemplate_7e5bbb666b2647972c7b765fffac434a extends Template
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
            'extraAttributes' => [$this, 'block_extraAttributes'],
            'body' => [$this, 'block_body'],
            'inputClass' => [$this, 'block_inputClass'],
            'labelContainer' => [$this, 'block_labelContainer'],
            'labelClass' => [$this, 'block_labelClass'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@CatalogPage/components/atoms/color-checkbox/color-checkbox.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "color-checkbox", "tag" => "span", "renderAttributes" => false], $context['config']);        // line 9
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["type" => "checkbox"], $context['attributes']);        // line 13
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["label" => ""], $context['data']);        // line 17
        $context["disabled"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "disabled", [], "array", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "disabled", [], "array", false, false, false, 17), false)) : (false));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extraAttributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 20, $this->source); })())) {
            yield "disabled";
        }
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "    <label class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        yield "__container ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "label", [], "any", false, false, false, 24), "html", null, true);
        yield "\" ";
        yield $this->env->getFunction('qa')->getCallable()(["label"]);
        yield ">
        <input class=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        yield "__input ";
        yield from $this->unwrap()->yieldBlock('inputClass', $context, $blocks);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        yield "/>
        <span class=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        yield "__box\"></span>

        ";
        // line 28
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/atoms/color-checkbox/color-checkbox.twig", 28)->unwrap()->yield(CoreExtension::toArray(["class" => "checkbox__check", "data" => ["name" => "check"]]));
        // line 35
        yield from $this->unwrap()->yieldBlock('labelContainer', $context, $blocks);
        // line 40
        yield "</label>
";
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inputClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_labelContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "<span class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
        yield "__label ";
        yield from $this->unwrap()->yieldBlock('labelClass', $context, $blocks);
        yield "\">";
        // line 37
        yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
        // line 38
        yield "</span>";
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_labelClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()), "label", [], "any", false, false, false, 37), "html", null, true);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/atoms/color-checkbox/color-checkbox.twig";
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
        return array (  154 => 37,  144 => 36,  139 => 38,  137 => 37,  131 => 36,  124 => 35,  114 => 25,  108 => 40,  106 => 35,  104 => 28,  99 => 26,  91 => 25,  82 => 24,  75 => 23,  68 => 20,  61 => 19,  57 => 1,  55 => 17,  54 => 13,  53 => 9,  52 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'color-checkbox',
    tag: 'span',
    renderAttributes: false
} %}

{% define attributes = {
    type: 'checkbox'
} %}

{% define data = {
    label: ''
} %}

{% set disabled = attributes['disabled'] | default(false) %}

{% block extraAttributes %}
    {%- if disabled %}disabled{% endif -%}
{% endblock %}

{% block body %}
    <label class=\"{{ config.name }}__container {{ data.label }}\" {{ qa('label') }}>
        <input class=\"{{ config.name }}__input {% block inputClass %}{% endblock %}\" {{ block('attributes') }}/>
        <span class=\"{{ config.name }}__box\"></span>

        {% include atom('icon') with {
            class: 'checkbox__check',
            data: {
                name: 'check'
            }
        } only %}

        {%- block labelContainer -%}
            <span class=\"{{ config.name }}__label {% block labelClass %}{% endblock %}\">
                {%- block label -%}{{ data.label }}{%- endblock -%}
            </span>
        {%- endblock -%}
    </label>
{% endblock %}
", "@CatalogPage/components/atoms/color-checkbox/color-checkbox.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/atoms/color-checkbox/color-checkbox.twig");
    }
}
