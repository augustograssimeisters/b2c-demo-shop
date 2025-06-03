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

/* @ShopUi/components/molecules/cart-counter/cart-counter.twig */
class __TwigTemplate_830e05893da33ac9c901f7d08dbabdbe extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("cart-counter", "@SprykerShop:ShopUi"), "@ShopUi/components/molecules/cart-counter/cart-counter.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["label" => "", "iconName" => "cart"], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        $context["iconModifiers"] = ["big"];
        // line 10
        yield "    ";
        yield from $this->yieldParentBlock("content", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/cart-counter/cart-counter.twig";
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
        return array (  62 => 10,  59 => 9,  52 => 8,  48 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('cart-counter', '@SprykerShop:ShopUi') %}

{% define data = {
    label: '',
    iconName: 'cart',
} %}

{% block content %}
    {% set iconModifiers = ['big'] %}
    {{ parent() }}
{% endblock %}
", "@ShopUi/components/molecules/cart-counter/cart-counter.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/cart-counter/cart-counter.twig");
    }
}
