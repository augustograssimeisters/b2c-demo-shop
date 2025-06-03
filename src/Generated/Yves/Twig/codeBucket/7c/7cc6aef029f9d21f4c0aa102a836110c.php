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

/* @@SprykerShop:CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig */
class __TwigTemplate_b76c63dc8522a0acc5e54d2596a9aa4f extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@@SprykerShop:CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["productAbstract" => CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "productAbstract", [], "any", false, false, false, 4), "buttonClasses" => "button button--success button--expand", "buttonExtraClasses" => "", "eventRevealer" => null], $context['data']);        // line 10
        $context["extraClasses"] = "spacing-left";
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    ";
        $context["addToCartSku"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "productAbstract", [], "any", false, true, false, 13), "add_to_cart_sku", [], "array", true, true, false, 13) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "productAbstract", [], "any", false, true, false, 13), "add_to_cart_sku", [], "array", false, false, false, 13)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "productAbstract", [], "any", false, true, false, 13), "add_to_cart_sku", [], "array", false, false, false, 13)) : (""));
        // line 14
        yield "
    ";
        // line 15
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("ajax-add-to-cart"), "@@SprykerShop:CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig", 15)->unwrap()->yield(CoreExtension::toArray(["class" =>         // line 16
(isset($context["extraClasses"]) || array_key_exists("extraClasses", $context) ? $context["extraClasses"] : (function () { throw new RuntimeError('Variable "extraClasses" does not exist.', 16, $this->source); })()), "data" => ["url" => ((        // line 18
(isset($context["addToCartSku"]) || array_key_exists("addToCartSku", $context) ? $context["addToCartSku"] : (function () { throw new RuntimeError('Variable "addToCartSku" does not exist.', 18, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add-ajax", ["sku" => (isset($context["addToCartSku"]) || array_key_exists("addToCartSku", $context) ? $context["addToCartSku"] : (function () { throw new RuntimeError('Variable "addToCartSku" does not exist.', 18, $this->source); })())])) : ("")), "csrfToken" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-to-cart-ajax"), "buttonClasses" => CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "buttonClasses", [], "any", false, false, false, 20), "buttonExtraClasses" => CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "buttonExtraClasses", [], "any", false, false, false, 21), "extraAttributes" => (( !        // line 22
(isset($context["addToCartSku"]) || array_key_exists("addToCartSku", $context) ? $context["addToCartSku"] : (function () { throw new RuntimeError('Variable "addToCartSku" does not exist.', 22, $this->source); })())) ? (["disabled" => true]) : (""))], "attributes" => ["event-revealer" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "eventRevealer", [], "any", false, false, false, 25)]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig";
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
        return array (  74 => 25,  73 => 22,  72 => 21,  71 => 20,  70 => 18,  69 => 16,  68 => 15,  65 => 14,  62 => 13,  55 => 12,  51 => 1,  49 => 10,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    productAbstract: _widget.productAbstract,
    buttonClasses: 'button button--success button--expand',
    buttonExtraClasses: '',
    eventRevealer: null,
} %}

{% set extraClasses = 'spacing-left' %}

{% block body %}
    {% set addToCartSku = data.productAbstract['add_to_cart_sku'] ?? '' %}

    {% include molecule('ajax-add-to-cart') with {
        class: extraClasses,
        data: {
            url: addToCartSku ? (path('cart/add-ajax', {'sku': addToCartSku})),
            csrfToken: csrf_token('add-to-cart-ajax'),
            buttonClasses: data.buttonClasses,
            buttonExtraClasses: data.buttonExtraClasses,
            extraAttributes: not addToCartSku ? {disabled: true},
        },
        attributes: {
            'event-revealer': data.eventRevealer,
        },
    } only %}
{% endblock %}
", "@@SprykerShop:CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig", "/data/vendor/spryker-shop/cart-page/src/SprykerShop/Yves/CartPage/Theme/default/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig");
    }
}
