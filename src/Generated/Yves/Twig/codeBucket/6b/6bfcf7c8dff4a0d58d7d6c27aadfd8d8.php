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

/* @ShopUi/components/molecules/scroll-parallax/scroll-parallax.twig */
class __TwigTemplate_d8b76b866d03648183a7e2515cd94546 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/scroll-parallax/scroll-parallax.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "scroll-parallax", "tag" => "scroll-parallax"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["wrapper-class-name" => "", "target-class-name" => "", "motion-direction" => "down", "motion-ratio" => "6", "breakpoint-min" => "0", "breakpoint-max" => "Infinity"], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/scroll-parallax/scroll-parallax.twig";
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
        return array (  48 => 1,  47 => 8,  46 => 3,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'scroll-parallax',
    tag: 'scroll-parallax',
} %}

{% define attributes = {
    'wrapper-class-name': '',
    'target-class-name': '',
    'motion-direction': 'down',
    'motion-ratio': '6',
    'breakpoint-min': '0',
    'breakpoint-max': 'Infinity',
} %}


", "@ShopUi/components/molecules/scroll-parallax/scroll-parallax.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/scroll-parallax/scroll-parallax.twig");
    }
}
