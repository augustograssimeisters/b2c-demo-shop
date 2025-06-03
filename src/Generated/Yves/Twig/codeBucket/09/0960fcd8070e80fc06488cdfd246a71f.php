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

/* @ShopUi/components/molecules/nav-overlay/nav-overlay.twig */
class __TwigTemplate_9cb2f66ab099cdaf2cf811048e11c960 extends Template
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
            'dropDown' => [$this, 'block_dropDown'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/nav-overlay/nav-overlay.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "nav-overlay", "tag" => "nav-overlay"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["trigger-open-class-name" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "active-link" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "overlay-class-name" => "main-overlay"], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "__container\">
        ";
        // line 16
        yield from $this->unwrap()->yieldBlock('dropDown', $context, $blocks);
        // line 24
        yield "    </div>
";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dropDown(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "            ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("user-block"), "@ShopUi/components/molecules/nav-overlay/nav-overlay.twig", 17)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "jsName", [], "any", false, false, false, 18) . "__drop-down-block is-hidden")]));
        // line 20
        yield "            ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("cart-block"), "@ShopUi/components/molecules/nav-overlay/nav-overlay.twig", 20)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "jsName", [], "any", false, false, false, 21) . "__drop-down-block is-hidden")]));
        // line 23
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/nav-overlay/nav-overlay.twig";
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
        return array (  91 => 23,  89 => 21,  87 => 20,  85 => 18,  83 => 17,  76 => 16,  70 => 24,  68 => 16,  63 => 15,  56 => 14,  52 => 1,  51 => 10,  50 => 9,  49 => 8,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'nav-overlay',
    tag: 'nav-overlay',
} %}

{% define attributes = {
    'trigger-open-class-name': required,
    'active-link': required,
    'overlay-class-name': 'main-overlay',
} %}

{% block body %}
    <div class=\"{{ config.name }}__container\">
        {% block dropDown %}
            {% include molecule('user-block') with {
                class: config.jsName ~ '__drop-down-block is-hidden',
            } only %}
            {% include molecule('cart-block') with {
                class: config.jsName ~ '__drop-down-block is-hidden',
            } only %}
        {% endblock %}
    </div>
{% endblock %}
", "@ShopUi/components/molecules/nav-overlay/nav-overlay.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/nav-overlay/nav-overlay.twig");
    }
}
