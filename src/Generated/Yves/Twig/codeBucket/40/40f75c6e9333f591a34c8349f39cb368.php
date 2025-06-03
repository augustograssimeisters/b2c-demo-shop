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

/* @ShopUi/components/molecules/cart-block/cart-block.twig */
class __TwigTemplate_c83320df5b59eb45c56499595461bc82 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/cart-block/cart-block.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "cart-block"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["quote" => $this->env->getFunction('getQuote')->getCallable()(), "cartItems" => $this->env->getFunction('getCartItems')->getCallable()()], $context['data']);        // line 1
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
        yield "    <h2 class=\"title title--mini-cart title--with-border\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.cart"), "html", null, true);
        yield "</h2>
    ";
        // line 14
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "cartItems", [], "any", false, false, false, 14))) {
            // line 15
            yield "        ";
            $context["optionPrice"] = 0;
            // line 16
            yield "
        ";
            // line 17
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("QuoteConfiguredBundleWidget", [CoreExtension::getAttribute($this->env, $this->source,             // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "quote", [], "any", false, false, false, 18)])) {
                $this->loadTemplate("@ShopUi/components/molecules/cart-block/cart-block.twig", "@ShopUi/components/molecules/cart-block/cart-block.twig", 17, 1478719545)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget, $this->env->getFunction('view')->getCallable()("quote-configured-bundle-mini-cart", "ConfigurableBundleWidget"))), ["data" => ["isEditable" => true]]));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 25
            yield "
        ";
            // line 26
            $context["productBundleItemCounterWidget"] = $this->env->getFunction('findWidget')->getCallable()("ProductBundleItemCounterWidget", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "quote", [], "any", false, false, false, 26)]);
            // line 27
            yield "        ";
            $context["transformedCartItems"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["productBundleItemCounterWidget"] ?? null), "items", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["productBundleItemCounterWidget"] ?? null), "items", [], "any", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "cartItems", [], "any", false, false, false, 27))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "cartItems", [], "any", false, false, false, 27)));
            // line 28
            yield "
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transformedCartItems"]) || array_key_exists("transformedCartItems", $context) ? $context["transformedCartItems"] : (function () { throw new RuntimeError('Variable "transformedCartItems" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 30
                yield "            ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "configuredBundleItem", [], "any", false, false, false, 30)) {
                    // line 31
                    yield "                ";
                    yield from                     $this->loadTemplate("@ShopUi/components/molecules/cart-block/cart-block.twig", "@ShopUi/components/molecules/cart-block/cart-block.twig", 31, "1769143059")->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["mini-cart", "readonly"], "data" => ["productItem" =>                     // line 34
$context["item"]]]));
                    // line 71
                    yield "            ";
                }
                // line 72
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "
        ";
            // line 74
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 74, $this->source); })()), "quote", [], "any", false, false, false, 74), "totals", [], "any", false, false, false, 74), "discounttotal", [], "any", false, false, false, 74)) {
                // line 75
                yield "            <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), "html", null, true);
                yield "__total grid grid--middle grid--justify\">
                <strong class=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 76, $this->source); })()), "name", [], "any", false, false, false, 76), "html", null, true);
                yield "__total-text col\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.discounts"), "html", null, true);
                yield "</strong>
                <strong class=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77), "html", null, true);
                yield "__total-text col\">- ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 77, $this->source); })()), "quote", [], "any", false, false, false, 77), "totals", [], "any", false, false, false, 77), "discounttotal", [], "any", false, false, false, 77)), "html", null, true);
                yield "</strong>
            </div>
        ";
            }
            // line 80
            yield "
        <div class=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81), "html", null, true);
            yield "__total grid grid--middle grid--justify\">
            <strong class=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 82, $this->source); })()), "name", [], "any", false, false, false, 82), "html", null, true);
            yield "__total-text col\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.total"), "html", null, true);
            yield "</strong>
            <strong class=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 83, $this->source); })()), "name", [], "any", false, false, false, 83), "html", null, true);
            yield "__total-text col\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 83, $this->source); })()), "quote", [], "any", false, false, false, 83), "totals", [], "any", false, false, false, 83), "grandTotal", [], "any", false, false, false, 83)), "html", null, true);
            yield "</strong>
        </div>

        ";
            // line 86
            $context["canProceedToCheckout"] = ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 86, $this->source); })()), "quote", [], "any", false, false, false, 86), "items", [], "any", false, false, false, 86)) && ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") || $this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("WriteSharedCartPermissionPlugin", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 88
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 88, $this->source); })()), "quote", [], "any", false, false, false, 88), "idQuote", [], "any", false, false, false, 88))));
            // line 90
            yield "
        ";
            // line 91
            if ((isset($context["canProceedToCheckout"]) || array_key_exists("canProceedToCheckout", $context) ? $context["canProceedToCheckout"] : (function () { throw new RuntimeError('Variable "canProceedToCheckout" does not exist.', 91, $this->source); })())) {
                // line 92
                yield "            <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92), "html", null, true);
                yield "__buttons-container grid grid--middle grid--justify\">
                <a href=\"";
                // line 93
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
                yield "\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93), "html", null, true);
                yield "__button button button--hollow col\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.cart"), "html", null, true);
                yield "</a>
                <a class=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 94, $this->source); })()), "name", [], "any", false, false, false, 94), "html", null, true);
                yield "__button button col\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("checkout-index");
                yield "\" ";
                yield $this->env->getFunction('qa')->getCallable()(["cart-go-to-checkout"]);
                yield ">
                    ";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.checkout"), "html", null, true);
                yield "
                </a>
            </div>
        ";
            }
            // line 99
            yield "    ";
        }
        // line 100
        yield "
    ";
        // line 101
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 101, $this->source); })()), "quote", [], "any", false, false, false, 101), "items", [], "any", false, false, false, 101))) {
            // line 102
            yield "        <p class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 102, $this->source); })()), "name", [], "any", false, false, false, 102), "html", null, true);
            yield "__empty-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart_widget.empty_text"), "html", null, true);
            yield "</p>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/cart-block/cart-block.twig";
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
        return array (  198 => 102,  196 => 101,  193 => 100,  190 => 99,  183 => 95,  175 => 94,  167 => 93,  162 => 92,  160 => 91,  157 => 90,  155 => 88,  154 => 86,  146 => 83,  140 => 82,  136 => 81,  133 => 80,  125 => 77,  119 => 76,  114 => 75,  112 => 74,  109 => 73,  103 => 72,  100 => 71,  98 => 34,  96 => 31,  93 => 30,  89 => 29,  86 => 28,  83 => 27,  81 => 26,  78 => 25,  74 => 18,  73 => 17,  70 => 16,  67 => 15,  65 => 14,  60 => 13,  53 => 12,  49 => 1,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'cart-block'
} %}

{% define data = {
    quote: getQuote(),
    cartItems: getCartItems(),
} %}

{% block body %}
    <h2 class=\"title title--mini-cart title--with-border\">{{ 'cart.cart' | trans }}</h2>
    {% if data.cartItems is not empty %}
        {% set optionPrice = 0 %}

        {% widget 'QuoteConfiguredBundleWidget'
            args [data.quote]
            use view('quote-configured-bundle-mini-cart', 'ConfigurableBundleWidget')
            with {
            data: {
                isEditable: true,
            },
        } only %}{% endwidget %}

        {% set productBundleItemCounterWidget = findWidget('ProductBundleItemCounterWidget', [data.quote]) %}
        {% set transformedCartItems = productBundleItemCounterWidget.items | default(data.cartItems) %}

        {% for item in transformedCartItems %}
            {% if not item.configuredBundleItem %}
                {% embed molecule('product-card-item') with {
                    modifiers: ['mini-cart', 'readonly'],
                    data: {
                        productItem: item,
                    },
                } only %}
                    {% import _self as component %}
                    {% block options %}
                        {% set optionPrice = 0 %}

                        {% for option in data.productItem.productOptions %}
                            {% set optionPrice = optionPrice + option.unitPrice %}
                        {% endfor %}

                        {% if optionPrice %}
                            <div class=\"grid grid--middle grid--justify {{ component.renderClass(config.name ~ '__option', modifiers) }}\">
                                <span class=\"col\">
                                    {{ 'cart.product-option' | trans }}:
                                </span>
                                <span class=\"col\">{{ optionPrice | money }}</span>
                            </div>
                        {% endif %}

                        {% for attributeName, attribute in data.productItem.concreteAttributes %}
                            <div class=\"{{ component.renderClass(config.name ~ '__option', modifiers) }}\">
                                {{ ('product.attribute.' ~ attributeName) | trans }}: {{ attribute }}
                            </div>
                        {% endfor %}
                    {% endblock %}

                    {% block quantity %}
                        <div class=\"{{ component.renderClass(config.name ~ '__option', modifiers) }}\">
                            {{ 'cart.item_quantity' | trans }}: {{ data.productItem.quantity | executeFilterIfExists('formatInt', app.locale) }}
                        </div>
                    {% endblock %}

                    {% block productConfiguration %}{% endblock %}
                    {% block bundles %}{% endblock %}
                    {% block summary %}{% endblock %}
                {% endembed %}
            {% endif %}
        {% endfor %}

        {% if data.quote.totals.discounttotal %}
            <div class=\"{{ config.name }}__total grid grid--middle grid--justify\">
                <strong class=\"{{ config.name }}__total-text col\">{{ 'cart.discounts' | trans }}</strong>
                <strong class=\"{{ config.name }}__total-text col\">- {{ data.quote.totals.discounttotal | money }}</strong>
            </div>
        {% endif %}

        <div class=\"{{ config.name }}__total grid grid--middle grid--justify\">
            <strong class=\"{{ config.name }}__total-text col\">{{ 'cart.total' | trans }}</strong>
            <strong class=\"{{ config.name }}__total-text col\">{{ data.quote.totals.grandTotal | money }}</strong>
        </div>

        {% set canProceedToCheckout = data.quote.items is not empty
            and (not is_granted('IS_AUTHENTICATED_FULLY')
            or can('WriteSharedCartPermissionPlugin', data.quote.idQuote))
        %}

        {% if canProceedToCheckout %}
            <div class=\"{{ config.name }}__buttons-container grid grid--middle grid--justify\">
                <a href=\"{{ url('cart') }}\" class=\"{{ config.name }}__button button button--hollow col\">{{ 'cart.cart' | trans }}</a>
                <a class=\"{{ config.name }}__button button col\" href=\"{{ url('checkout-index') }}\" {{qa('cart-go-to-checkout')}}>
                    {{ 'cart.checkout' | trans }}
                </a>
            </div>
        {% endif %}
    {% endif %}

    {% if data.quote.items is empty %}
        <p class=\"{{ config.name }}__empty-text\">{{ 'cart_widget.empty_text' | trans }}</p>
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/cart-block/cart-block.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/cart-block/cart-block.twig");
    }
}


/* @ShopUi/components/molecules/cart-block/cart-block.twig */
class __TwigTemplate_c83320df5b59eb45c56499595461bc82___1478719545 extends Template
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
        // line 17
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 17, $this->source); })()), "@ShopUi/components/molecules/cart-block/cart-block.twig", 17);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/cart-block/cart-block.twig";
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
        return array (  365 => 17,  198 => 102,  196 => 101,  193 => 100,  190 => 99,  183 => 95,  175 => 94,  167 => 93,  162 => 92,  160 => 91,  157 => 90,  155 => 88,  154 => 86,  146 => 83,  140 => 82,  136 => 81,  133 => 80,  125 => 77,  119 => 76,  114 => 75,  112 => 74,  109 => 73,  103 => 72,  100 => 71,  98 => 34,  96 => 31,  93 => 30,  89 => 29,  86 => 28,  83 => 27,  81 => 26,  78 => 25,  74 => 18,  73 => 17,  70 => 16,  67 => 15,  65 => 14,  60 => 13,  53 => 12,  49 => 1,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'cart-block'
} %}

{% define data = {
    quote: getQuote(),
    cartItems: getCartItems(),
} %}

{% block body %}
    <h2 class=\"title title--mini-cart title--with-border\">{{ 'cart.cart' | trans }}</h2>
    {% if data.cartItems is not empty %}
        {% set optionPrice = 0 %}

        {% widget 'QuoteConfiguredBundleWidget'
            args [data.quote]
            use view('quote-configured-bundle-mini-cart', 'ConfigurableBundleWidget')
            with {
            data: {
                isEditable: true,
            },
        } only %}{% endwidget %}

        {% set productBundleItemCounterWidget = findWidget('ProductBundleItemCounterWidget', [data.quote]) %}
        {% set transformedCartItems = productBundleItemCounterWidget.items | default(data.cartItems) %}

        {% for item in transformedCartItems %}
            {% if not item.configuredBundleItem %}
                {% embed molecule('product-card-item') with {
                    modifiers: ['mini-cart', 'readonly'],
                    data: {
                        productItem: item,
                    },
                } only %}
                    {% import _self as component %}
                    {% block options %}
                        {% set optionPrice = 0 %}

                        {% for option in data.productItem.productOptions %}
                            {% set optionPrice = optionPrice + option.unitPrice %}
                        {% endfor %}

                        {% if optionPrice %}
                            <div class=\"grid grid--middle grid--justify {{ component.renderClass(config.name ~ '__option', modifiers) }}\">
                                <span class=\"col\">
                                    {{ 'cart.product-option' | trans }}:
                                </span>
                                <span class=\"col\">{{ optionPrice | money }}</span>
                            </div>
                        {% endif %}

                        {% for attributeName, attribute in data.productItem.concreteAttributes %}
                            <div class=\"{{ component.renderClass(config.name ~ '__option', modifiers) }}\">
                                {{ ('product.attribute.' ~ attributeName) | trans }}: {{ attribute }}
                            </div>
                        {% endfor %}
                    {% endblock %}

                    {% block quantity %}
                        <div class=\"{{ component.renderClass(config.name ~ '__option', modifiers) }}\">
                            {{ 'cart.item_quantity' | trans }}: {{ data.productItem.quantity | executeFilterIfExists('formatInt', app.locale) }}
                        </div>
                    {% endblock %}

                    {% block productConfiguration %}{% endblock %}
                    {% block bundles %}{% endblock %}
                    {% block summary %}{% endblock %}
                {% endembed %}
            {% endif %}
        {% endfor %}

        {% if data.quote.totals.discounttotal %}
            <div class=\"{{ config.name }}__total grid grid--middle grid--justify\">
                <strong class=\"{{ config.name }}__total-text col\">{{ 'cart.discounts' | trans }}</strong>
                <strong class=\"{{ config.name }}__total-text col\">- {{ data.quote.totals.discounttotal | money }}</strong>
            </div>
        {% endif %}

        <div class=\"{{ config.name }}__total grid grid--middle grid--justify\">
            <strong class=\"{{ config.name }}__total-text col\">{{ 'cart.total' | trans }}</strong>
            <strong class=\"{{ config.name }}__total-text col\">{{ data.quote.totals.grandTotal | money }}</strong>
        </div>

        {% set canProceedToCheckout = data.quote.items is not empty
            and (not is_granted('IS_AUTHENTICATED_FULLY')
            or can('WriteSharedCartPermissionPlugin', data.quote.idQuote))
        %}

        {% if canProceedToCheckout %}
            <div class=\"{{ config.name }}__buttons-container grid grid--middle grid--justify\">
                <a href=\"{{ url('cart') }}\" class=\"{{ config.name }}__button button button--hollow col\">{{ 'cart.cart' | trans }}</a>
                <a class=\"{{ config.name }}__button button col\" href=\"{{ url('checkout-index') }}\" {{qa('cart-go-to-checkout')}}>
                    {{ 'cart.checkout' | trans }}
                </a>
            </div>
        {% endif %}
    {% endif %}

    {% if data.quote.items is empty %}
        <p class=\"{{ config.name }}__empty-text\">{{ 'cart_widget.empty_text' | trans }}</p>
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/cart-block/cart-block.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/cart-block/cart-block.twig");
    }
}


/* @ShopUi/components/molecules/cart-block/cart-block.twig */
class __TwigTemplate_c83320df5b59eb45c56499595461bc82___1769143059 extends Template
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
            'options' => [$this, 'block_options'],
            'quantity' => [$this, 'block_quantity'],
            'productConfiguration' => [$this, 'block_productConfiguration'],
            'bundles' => [$this, 'block_bundles'],
            'summary' => [$this, 'block_summary'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 31
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("product-card-item"), "@ShopUi/components/molecules/cart-block/cart-block.twig", 31);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        $macros["component"] = $this->macros["component"] = $this;
        // line 31
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "                        ";
        $context["optionPrice"] = 0;
        // line 40
        yield "
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "productItem", [], "any", false, false, false, 41), "productOptions", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 42
            yield "                            ";
            $context["optionPrice"] = ((isset($context["optionPrice"]) || array_key_exists("optionPrice", $context) ? $context["optionPrice"] : (function () { throw new RuntimeError('Variable "optionPrice" does not exist.', 42, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["option"], "unitPrice", [], "any", false, false, false, 42));
            // line 43
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
                        ";
        // line 45
        if ((isset($context["optionPrice"]) || array_key_exists("optionPrice", $context) ? $context["optionPrice"] : (function () { throw new RuntimeError('Variable "optionPrice" does not exist.', 45, $this->source); })())) {
            // line 46
            yield "                            <div class=\"grid grid--middle grid--justify ";
            yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46) . "__option"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 46, $this->source); })())], 46, $context, $this->getSourceContext());
            yield "\">
                                <span class=\"col\">
                                    ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.product-option"), "html", null, true);
            yield ":
                                </span>
                                <span class=\"col\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('money')->getCallable()((isset($context["optionPrice"]) || array_key_exists("optionPrice", $context) ? $context["optionPrice"] : (function () { throw new RuntimeError('Variable "optionPrice" does not exist.', 50, $this->source); })())), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 53
        yield "
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "productItem", [], "any", false, false, false, 54), "concreteAttributes", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["attributeName"] => $context["attribute"]) {
            // line 55
            yield "                            <div class=\"";
            yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55) . "__option"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 55, $this->source); })())], 55, $context, $this->getSourceContext());
            yield "\">
                                ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.attribute." . $context["attributeName"])), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html", null, true);
            yield "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attributeName'], $context['attribute'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                    ";
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_quantity(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "                        <div class=\"";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62) . "__option"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 62, $this->source); })())], 62, $context, $this->getSourceContext());
        yield "\">
                            ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.item_quantity"), "html", null, true);
        yield ": ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "productItem", [], "any", false, false, false, 63), "quantity", [], "any", false, false, false, 63), "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "locale", [], "any", false, false, false, 63)), "html", null, true);
        yield "
                        </div>
                    ";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_productConfiguration(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bundles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_summary(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/cart-block/cart-block.twig";
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
        return array (  667 => 69,  657 => 68,  647 => 67,  637 => 63,  632 => 62,  625 => 61,  620 => 59,  609 => 56,  604 => 55,  600 => 54,  597 => 53,  591 => 50,  586 => 48,  580 => 46,  578 => 45,  575 => 44,  569 => 43,  566 => 42,  562 => 41,  559 => 40,  556 => 39,  549 => 38,  545 => 31,  543 => 37,  536 => 31,  365 => 17,  198 => 102,  196 => 101,  193 => 100,  190 => 99,  183 => 95,  175 => 94,  167 => 93,  162 => 92,  160 => 91,  157 => 90,  155 => 88,  154 => 86,  146 => 83,  140 => 82,  136 => 81,  133 => 80,  125 => 77,  119 => 76,  114 => 75,  112 => 74,  109 => 73,  103 => 72,  100 => 71,  98 => 34,  96 => 31,  93 => 30,  89 => 29,  86 => 28,  83 => 27,  81 => 26,  78 => 25,  74 => 18,  73 => 17,  70 => 16,  67 => 15,  65 => 14,  60 => 13,  53 => 12,  49 => 1,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'cart-block'
} %}

{% define data = {
    quote: getQuote(),
    cartItems: getCartItems(),
} %}

{% block body %}
    <h2 class=\"title title--mini-cart title--with-border\">{{ 'cart.cart' | trans }}</h2>
    {% if data.cartItems is not empty %}
        {% set optionPrice = 0 %}

        {% widget 'QuoteConfiguredBundleWidget'
            args [data.quote]
            use view('quote-configured-bundle-mini-cart', 'ConfigurableBundleWidget')
            with {
            data: {
                isEditable: true,
            },
        } only %}{% endwidget %}

        {% set productBundleItemCounterWidget = findWidget('ProductBundleItemCounterWidget', [data.quote]) %}
        {% set transformedCartItems = productBundleItemCounterWidget.items | default(data.cartItems) %}

        {% for item in transformedCartItems %}
            {% if not item.configuredBundleItem %}
                {% embed molecule('product-card-item') with {
                    modifiers: ['mini-cart', 'readonly'],
                    data: {
                        productItem: item,
                    },
                } only %}
                    {% import _self as component %}
                    {% block options %}
                        {% set optionPrice = 0 %}

                        {% for option in data.productItem.productOptions %}
                            {% set optionPrice = optionPrice + option.unitPrice %}
                        {% endfor %}

                        {% if optionPrice %}
                            <div class=\"grid grid--middle grid--justify {{ component.renderClass(config.name ~ '__option', modifiers) }}\">
                                <span class=\"col\">
                                    {{ 'cart.product-option' | trans }}:
                                </span>
                                <span class=\"col\">{{ optionPrice | money }}</span>
                            </div>
                        {% endif %}

                        {% for attributeName, attribute in data.productItem.concreteAttributes %}
                            <div class=\"{{ component.renderClass(config.name ~ '__option', modifiers) }}\">
                                {{ ('product.attribute.' ~ attributeName) | trans }}: {{ attribute }}
                            </div>
                        {% endfor %}
                    {% endblock %}

                    {% block quantity %}
                        <div class=\"{{ component.renderClass(config.name ~ '__option', modifiers) }}\">
                            {{ 'cart.item_quantity' | trans }}: {{ data.productItem.quantity | executeFilterIfExists('formatInt', app.locale) }}
                        </div>
                    {% endblock %}

                    {% block productConfiguration %}{% endblock %}
                    {% block bundles %}{% endblock %}
                    {% block summary %}{% endblock %}
                {% endembed %}
            {% endif %}
        {% endfor %}

        {% if data.quote.totals.discounttotal %}
            <div class=\"{{ config.name }}__total grid grid--middle grid--justify\">
                <strong class=\"{{ config.name }}__total-text col\">{{ 'cart.discounts' | trans }}</strong>
                <strong class=\"{{ config.name }}__total-text col\">- {{ data.quote.totals.discounttotal | money }}</strong>
            </div>
        {% endif %}

        <div class=\"{{ config.name }}__total grid grid--middle grid--justify\">
            <strong class=\"{{ config.name }}__total-text col\">{{ 'cart.total' | trans }}</strong>
            <strong class=\"{{ config.name }}__total-text col\">{{ data.quote.totals.grandTotal | money }}</strong>
        </div>

        {% set canProceedToCheckout = data.quote.items is not empty
            and (not is_granted('IS_AUTHENTICATED_FULLY')
            or can('WriteSharedCartPermissionPlugin', data.quote.idQuote))
        %}

        {% if canProceedToCheckout %}
            <div class=\"{{ config.name }}__buttons-container grid grid--middle grid--justify\">
                <a href=\"{{ url('cart') }}\" class=\"{{ config.name }}__button button button--hollow col\">{{ 'cart.cart' | trans }}</a>
                <a class=\"{{ config.name }}__button button col\" href=\"{{ url('checkout-index') }}\" {{qa('cart-go-to-checkout')}}>
                    {{ 'cart.checkout' | trans }}
                </a>
            </div>
        {% endif %}
    {% endif %}

    {% if data.quote.items is empty %}
        <p class=\"{{ config.name }}__empty-text\">{{ 'cart_widget.empty_text' | trans }}</p>
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/cart-block/cart-block.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/cart-block/cart-block.twig");
    }
}
