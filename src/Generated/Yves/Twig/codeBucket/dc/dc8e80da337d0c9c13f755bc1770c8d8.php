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

/* @@SprykerShop:ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig */
class __TwigTemplate_1ff20359f71861e2d6cc7ef662231549 extends Template
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
            'selection' => [$this, 'block_selection'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("color-selector", "ProductGroupWidget"), "@@SprykerShop:ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-item-color-selector", "tag" => "product-item-color-selector"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["parentJsName" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })())], $context['data']);        // line 12
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["product-item-class-name" => CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "parentJsName", [], "any", false, false, false, 13)], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selection(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    ";
        $context["labels"] = ((array_key_exists("labels", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 17, $this->source); })()), [])) : ([]));
        // line 18
        yield "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "labels", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 20
            yield "        ";
            $context["labels"] = Twig\Extension\CoreExtension::merge((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 20, $this->source); })()), [["text" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 21
$context["label"], "key", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["label"], "key", [], "any", false, false, false, 21))) : ("")), "type" => Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 22
$context["label"], "frontEndReference", [], "any", false, false, false, 22)), [" " => "-"]))]]);
            // line 24
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
    ";
        // line 26
        $context["productSku"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "sku", [], "any", false, false, false, 26);
        // line 27
        yield "    ";
        $context["isAvailable"] = (((isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 27, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "available", [], "any", false, false, false, 27)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "idProductConcrete", [], "any", false, false, false, 27));
        // line 28
        yield "
    ";
        // line 29
        $context["dataAttributesList"] = ["type" => "button", "data-product-image-src" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["item"] ?? null), "images", [], "any", false, true, false, 31), 0, [], "array", false, true, false, 31), "externalUrlSmall", [], "any", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "images", [], "any", false, true, false, 31), 0, [], "array", false, true, false, 31), "externalUrlSmall", [], "any", false, false, false, 31)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "images", [], "any", false, true, false, 31), 0, [], "array", false, true, false, 31), "externalUrlSmall", [], "any", false, false, false, 31)) : ("")), "data-product-image-alt" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["item"] ?? null), "images", [], "any", false, true, false, 32), 0, [], "array", false, true, false, 32), "altText", [], "any", true, true, false, 32) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "images", [], "any", false, true, false, 32), 0, [], "array", false, true, false, 32), "altText", [], "any", false, false, false, 32)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "images", [], "any", false, true, false, 32), 0, [], "array", false, true, false, 32), "altText", [], "any", false, false, false, 32)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32))), "data-product-labels" => json_encode(        // line 33
(isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 33, $this->source); })())), "data-product-name" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34)) ?: ("")), "data-product-rating" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "rating", [], "any", false, false, false, 35)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "rating", [], "any", false, false, false, 35), "averageRating", [], "any", false, false, false, 35)) : ("")), "data-product-default-price" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["item"] ?? null), "prices", [], "any", false, true, false, 36), "DEFAULT", [], "array", true, true, false, 36)) ? ($this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "prices", [], "any", false, false, false, 36), "DEFAULT", [], "array", false, false, false, 36))) : ("")), "data-product-original-price" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 37
($context["item"] ?? null), "prices", [], "any", false, true, false, 37), "ORIGINAL", [], "array", true, true, false, 37)) ? ($this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "prices", [], "any", false, false, false, 37), "ORIGINAL", [], "array", false, false, false, 37))) : ("")), "data-product-detail-page-url" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "url", [], "any", false, false, false, 38)) ?: ("")), "data-product-add-to-cart-url" => ((        // line 39
(isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 39, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add", ["sku" => (isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 39, $this->source); })())])) : ("")), "data-product-ajax-add-to-cart-url" => ((        // line 40
(isset($context["isAvailable"]) || array_key_exists("isAvailable", $context) ? $context["isAvailable"] : (function () { throw new RuntimeError('Variable "isAvailable" does not exist.', 40, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add-ajax", ["sku" => (isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 40, $this->source); })())])) : ("")), "data-product-add-to-cart-form-action" => ((        // line 41
(isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 41, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add", ["sku" => (isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 41, $this->source); })())])) : ("")), "data-product-sku" =>         // line 42
(isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 42, $this->source); })())];
        // line 44
        yield "
    ";
        // line 45
        yield from $this->yieldParentBlock("selection", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig";
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
        return array (  112 => 45,  109 => 44,  107 => 42,  106 => 41,  105 => 40,  104 => 39,  103 => 38,  102 => 37,  101 => 36,  100 => 35,  99 => 34,  98 => 33,  97 => 32,  96 => 31,  95 => 29,  92 => 28,  89 => 27,  87 => 26,  84 => 25,  78 => 24,  76 => 22,  75 => 21,  73 => 20,  69 => 19,  66 => 18,  63 => 17,  56 => 16,  52 => 1,  51 => 13,  50 => 12,  49 => 9,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('color-selector', 'ProductGroupWidget') %}

{% define config = {
    name: 'product-item-color-selector',
    tag: 'product-item-color-selector',
} %}

{% define data = {
    parentJsName: required,
} %}

{% define attributes = {
    'product-item-class-name': data.parentJsName,
} %}

{% block selection %}
    {% set labels = labels | default([]) %}

    {% for label in item.labels %}
        {% set labels = labels | merge([{
            text: label.key | default,
            type: (label.frontEndReference | lower | replace({' ': '-'})) | default,
        }]) %}
    {% endfor %}

    {% set productSku = item.sku %}
    {% set isAvailable = productSku and item.available and item.idProductConcrete %}

    {% set dataAttributesList = {
        type: 'button',
        'data-product-image-src': item.images[0].externalUrlSmall ?? '',
        'data-product-image-alt': item.images[0].altText ?? item.name,
        'data-product-labels': labels | json_encode,
        'data-product-name': item.name ?: '',
        'data-product-rating': item.rating ? item.rating.averageRating,
        'data-product-default-price': item.prices['DEFAULT'] is defined ? (item.prices['DEFAULT'] | money),
        'data-product-original-price': item.prices['ORIGINAL'] is defined ? (item.prices['ORIGINAL'] | money),
        'data-product-detail-page-url': item.url ?: '',
        'data-product-add-to-cart-url': productSku ? path('cart/add', {sku: productSku}),
        'data-product-ajax-add-to-cart-url': isAvailable ? path('cart/add-ajax', {sku: productSku}),
        'data-product-add-to-cart-form-action': productSku ? path('cart/add', {sku: productSku}),
        'data-product-sku': productSku,
    } %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig", "/data/vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/product-item-color-selector/product-item-color-selector.twig");
    }
}
