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

/* @CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig */
class __TwigTemplate_facbde0da1fe85b10f5f27d0b9939c56 extends Template
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
            'ajaxButton' => [$this, 'block_ajaxButton'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('view')->getCallable()("product-abstract-add-to-cart-ajax", "@SprykerShop:CartPage"), "@CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["isTextHidden" => false, "extraAttributes" => []], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        $context["extraClasses"] = "";
        // line 10
        yield "    ";
        $context["addToCartSku"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "productAbstract", [], "any", false, true, false, 10), "add_to_cart_sku", [], "array", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "productAbstract", [], "any", false, true, false, 10), "add_to_cart_sku", [], "array", false, false, false, 10)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "productAbstract", [], "any", false, true, false, 10), "add_to_cart_sku", [], "array", false, false, false, 10)) : (""));
        // line 11
        yield "
    ";
        // line 12
        if ((isset($context["addToCartSku"]) || array_key_exists("addToCartSku", $context) ? $context["addToCartSku"] : (function () { throw new RuntimeError('Variable "addToCartSku" does not exist.', 12, $this->source); })())) {
            // line 13
            yield "        ";
            yield from $this->unwrap()->yieldBlock('ajaxButton', $context, $blocks);
            // line 37
            yield "    ";
        }
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ajaxButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "            ";
        yield from         $this->loadTemplate("@CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig", "@CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig", 14, "1435344779")->unwrap()->yield(CoreExtension::toArray(["class" =>         // line 15
(isset($context["extraClasses"]) || array_key_exists("extraClasses", $context) ? $context["extraClasses"] : (function () { throw new RuntimeError('Variable "extraClasses" does not exist.', 15, $this->source); })()), "data" => ["url" => ((        // line 17
(isset($context["addToCartSku"]) || array_key_exists("addToCartSku", $context) ? $context["addToCartSku"] : (function () { throw new RuntimeError('Variable "addToCartSku" does not exist.', 17, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add-ajax", ["sku" => (isset($context["addToCartSku"]) || array_key_exists("addToCartSku", $context) ? $context["addToCartSku"] : (function () { throw new RuntimeError('Variable "addToCartSku" does not exist.', 17, $this->source); })())])) : ("")), "csrfToken" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-to-cart-ajax"), "iconName" => "cart-plus", "buttonText" => (( !CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "isTextHidden", [], "any", false, false, false, 20)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.add-to-cart")) : ("")), "buttonClasses" => CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "buttonClasses", [], "any", false, false, false, 21), "buttonExtraClasses" => CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "buttonExtraClasses", [], "any", false, false, false, 22), "extraAttributes" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "extraAttributes", [], "any", false, false, false, 23), (( !(isset($context["addToCartSku"]) || array_key_exists("addToCartSku", $context) ? $context["addToCartSku"] : (function () { throw new RuntimeError('Variable "addToCartSku" does not exist.', 23, $this->source); })())) ? (["disabled" => true]) : ([])))], "attributes" => ["event-revealer" => CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "eventRevealer", [], "any", false, false, false, 26)]]));
        // line 36
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig";
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
        return array (  97 => 36,  95 => 26,  94 => 23,  93 => 22,  92 => 21,  91 => 20,  90 => 17,  89 => 15,  87 => 14,  80 => 13,  74 => 37,  71 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  53 => 8,  49 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends view('product-abstract-add-to-cart-ajax', '@SprykerShop:CartPage') %}

{% define data = {
    isTextHidden: false,
    extraAttributes: {},
} %}

{% block body %}
    {% set extraClasses = '' %}
    {% set addToCartSku = data.productAbstract['add_to_cart_sku'] ?? '' %}

    {% if addToCartSku %}
        {% block ajaxButton %}
            {% embed molecule('ajax-add-to-cart') with {
                class: extraClasses,
                data: {
                    url: addToCartSku ? (path('cart/add-ajax', {'sku': addToCartSku})),
                    csrfToken: csrf_token('add-to-cart-ajax'),
                    iconName: 'cart-plus',
                    buttonText: not data.isTextHidden ? 'global.add-to-cart' | trans,
                    buttonClasses: data.buttonClasses,
                    buttonExtraClasses: data.buttonExtraClasses,
                    extraAttributes: data.extraAttributes | merge(not addToCartSku ? {disabled: true} : {}),
                },
                attributes: {
                    'event-revealer': data.eventRevealer,
                },
            } only %}
                {% block button %}
                    {% set iconModifiers = ['cart-plus'] %}
                    {% set buttonTextClasses = 'text-middle spacing-right' %}

                    {{ parent() }}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endif %}
{% endblock %}
", "@CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig", "/data/src/Pyz/Yves/CartPage/Theme/default/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig");
    }
}


/* @CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig */
class __TwigTemplate_facbde0da1fe85b10f5f27d0b9939c56___1435344779 extends Template
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
            'button' => [$this, 'block_button'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 14
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("ajax-add-to-cart"), "@CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig", 14);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "                    ";
        $context["iconModifiers"] = ["cart-plus"];
        // line 31
        yield "                    ";
        $context["buttonTextClasses"] = "text-middle spacing-right";
        // line 32
        yield "
                    ";
        // line 33
        yield from $this->yieldParentBlock("button", $context, $blocks);
        yield "
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig";
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
        return array (  219 => 33,  216 => 32,  213 => 31,  210 => 30,  203 => 29,  193 => 14,  97 => 36,  95 => 26,  94 => 23,  93 => 22,  92 => 21,  91 => 20,  90 => 17,  89 => 15,  87 => 14,  80 => 13,  74 => 37,  71 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  53 => 8,  49 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends view('product-abstract-add-to-cart-ajax', '@SprykerShop:CartPage') %}

{% define data = {
    isTextHidden: false,
    extraAttributes: {},
} %}

{% block body %}
    {% set extraClasses = '' %}
    {% set addToCartSku = data.productAbstract['add_to_cart_sku'] ?? '' %}

    {% if addToCartSku %}
        {% block ajaxButton %}
            {% embed molecule('ajax-add-to-cart') with {
                class: extraClasses,
                data: {
                    url: addToCartSku ? (path('cart/add-ajax', {'sku': addToCartSku})),
                    csrfToken: csrf_token('add-to-cart-ajax'),
                    iconName: 'cart-plus',
                    buttonText: not data.isTextHidden ? 'global.add-to-cart' | trans,
                    buttonClasses: data.buttonClasses,
                    buttonExtraClasses: data.buttonExtraClasses,
                    extraAttributes: data.extraAttributes | merge(not addToCartSku ? {disabled: true} : {}),
                },
                attributes: {
                    'event-revealer': data.eventRevealer,
                },
            } only %}
                {% block button %}
                    {% set iconModifiers = ['cart-plus'] %}
                    {% set buttonTextClasses = 'text-middle spacing-right' %}

                    {{ parent() }}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endif %}
{% endblock %}
", "@CartPage/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig", "/data/src/Pyz/Yves/CartPage/Theme/default/views/product-abstract-add-to-cart-ajax/product-abstract-add-to-cart-ajax.twig");
    }
}
