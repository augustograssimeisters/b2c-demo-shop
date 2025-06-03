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

/* @ShopUi/components/molecules/suggest-search/suggest-search.twig */
class __TwigTemplate_5c934a512885e2187df45e5d8c52765d extends Template
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
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("suggest-search", "@SprykerShop:ShopUi"), "@ShopUi/components/molecules/suggest-search/suggest-search.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["overlay-class-name" => "main-overlay", "should-close-by-overlay-click" => true, "wrapper-class-name" =>         // line 6
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 6, $this->source); })()), "close-class-name" =>         // line 7
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 7, $this->source); })()), "open-class-name" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "wrapper-toggle-class-name" => "is-active"], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/suggest-search/suggest-search.twig";
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
        return array (  50 => 1,  49 => 8,  48 => 7,  47 => 6,  46 => 3,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('suggest-search', '@SprykerShop:ShopUi') %}

{% define attributes = {
    'overlay-class-name': 'main-overlay',
    'should-close-by-overlay-click': true,
    'wrapper-class-name': required,
    'close-class-name': required,
    'open-class-name': required,
    'wrapper-toggle-class-name': 'is-active',
} %}
", "@ShopUi/components/molecules/suggest-search/suggest-search.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/suggest-search/suggest-search.twig");
    }
}
