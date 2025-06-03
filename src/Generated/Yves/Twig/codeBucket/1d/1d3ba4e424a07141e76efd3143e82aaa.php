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

/* @ShopUi/components/molecules/toggler-accordion/toggler-accordion.twig */
class __TwigTemplate_b583e30ddcf742c9bbb287110d28ad5f extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/toggler-accordion/toggler-accordion.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "toggler-accordion", "tag" => "toggler-accordion"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["trigger-class-name" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "class-to-toggle" => "is-hidden", "active-class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11) . "--active")], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/toggler-accordion/toggler-accordion.twig";
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
        return array (  50 => 1,  49 => 11,  48 => 9,  47 => 8,  46 => 3,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'toggler-accordion',
    tag: 'toggler-accordion',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'class-to-toggle': 'is-hidden',
    'active-class': config.name ~ '--active',
} %}


", "@ShopUi/components/molecules/toggler-accordion/toggler-accordion.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-accordion/toggler-accordion.twig");
    }
}
