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

/* @ShopUi/components/molecules/ajax-renderer/ajax-renderer.twig */
class __TwigTemplate_3fc23fdad12379a7e06580af0287a0ce extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/ajax-renderer/ajax-renderer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "ajax-renderer", "tag" => "ajax-renderer"], $context['config']);        // line 10
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["provider-selector" => "", "provider-class-name" => "", "target-selector" => "", "target-class-name" => "", "parent-class-name" => "", "render-if-response-is-empty" => false, "mount-after-render" => false], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/ajax-renderer/ajax-renderer.twig";
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
        return array (  48 => 1,  47 => 10,  46 => 3,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'ajax-renderer',
    tag: 'ajax-renderer',
} %}

{# @deprecated property \"provider-selector\" is deprecated: use \"provider-class-name\" instead. #}
{# @deprecated property \"target-selector\" is deprecated: use \"target-class-name\" instead. #}
{% define attributes = {
    'provider-selector': '',
    'provider-class-name': '',
    'target-selector': '',
    'target-class-name': '',
    'parent-class-name': '',
    'render-if-response-is-empty': false,
    'mount-after-render': false,
} %}
", "@ShopUi/components/molecules/ajax-renderer/ajax-renderer.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/ajax-renderer/ajax-renderer.twig");
    }
}
