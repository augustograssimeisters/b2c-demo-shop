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

/* @ShopUi/components/molecules/node-animator/node-animator.twig */
class __TwigTemplate_4003dca807eefe55740dec582a5baa22 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/node-animator/node-animator.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "node-animator", "tag" => "node-animator"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["trigger-class-name" => (("js-" . CoreExtension::getAttribute($this->env, $this->source,         // line 9
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9)) . "__trigger"), "target-class-name" => "cart-counter", "node-class-name" => "lazy-image", "wrapper-class-name" => "js-product-item", "clone-node-class-names" => "", "animation-duration" => 1000], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/node-animator/node-animator.twig";
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
        return array (  49 => 1,  48 => 9,  47 => 8,  46 => 3,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'node-animator',
    tag: 'node-animator',
} %}

{% define attributes = {
    'trigger-class-name': 'js-' ~ config.name ~ '__trigger',
    'target-class-name': 'cart-counter',
    'node-class-name': 'lazy-image',
    'wrapper-class-name': 'js-product-item',
    'clone-node-class-names': '',
    'animation-duration': 1000,
} %}
", "@ShopUi/components/molecules/node-animator/node-animator.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/node-animator/node-animator.twig");
    }
}
