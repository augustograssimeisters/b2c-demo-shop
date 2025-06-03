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

/* @@SprykerShop:ShopUi/components/molecules/cart-counter/cart-counter.twig */
class __TwigTemplate_b11a95d84245e30fce3856f57f4a6bf2 extends Template
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
            'contentOuter' => [$this, 'block_contentOuter'],
            'contentInner' => [$this, 'block_contentInner'],
            'content' => [$this, 'block_content'],
            'link' => [$this, 'block_link'],
            'label' => [$this, 'block_label'],
            'icon' => [$this, 'block_icon'],
            'quantity' => [$this, 'block_quantity'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ShopUi/components/molecules/cart-counter/cart-counter.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "cart-counter", "tag" => "cart-counter"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.cart"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart"), "quantity" => null, "iconName" => "shopping-cart", "ajaxCartUrl" => null, "ajaxClassSuffix" => ""], $context['data']);        // line 17
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["hidden-quantity-class-name" => (CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18) . "__quantity--hidden")], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "    ";
        $context["ajaxClassSuffix"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "ajaxClassSuffix", [], "any", false, false, false, 22)) ?: ("main"));
        // line 23
        yield "    ";
        $context["ajaxContentClass"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "jsName", [], "any", false, false, false, 23) . "-content-") . (isset($context["ajaxClassSuffix"]) || array_key_exists("ajaxClassSuffix", $context) ? $context["ajaxClassSuffix"] : (function () { throw new RuntimeError('Variable "ajaxClassSuffix" does not exist.', 23, $this->source); })()));
        // line 24
        yield "    ";
        $context["ajaxCartProvider"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 24)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "jsName", [], "any", false, false, false, 24) . "-provider-") . (isset($context["ajaxClassSuffix"]) || array_key_exists("ajaxClassSuffix", $context) ? $context["ajaxClassSuffix"] : (function () { throw new RuntimeError('Variable "ajaxClassSuffix" does not exist.', 24, $this->source); })()))) : (null));
        // line 25
        yield "
    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('contentOuter', $context, $blocks);
        // line 71
        yield "
    ";
        // line 72
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 72, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 72)) {
            // line 73
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("ajax-provider"), "@@SprykerShop:ShopUi/components/molecules/cart-counter/cart-counter.twig", 73)->unwrap()->yield(CoreExtension::toArray(["class" =>             // line 74
(isset($context["ajaxCartProvider"]) || array_key_exists("ajaxCartProvider", $context) ? $context["ajaxCartProvider"] : (function () { throw new RuntimeError('Variable "ajaxCartProvider" does not exist.', 74, $this->source); })()), "attributes" => ["url" => CoreExtension::getAttribute($this->env, $this->source,             // line 76
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 76, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 76), "method" => "POST", "event-host" => "CART_UPDATE_EVENT", "element-visibility-checker-class-name" =>             // line 79
(isset($context["ajaxContentClass"]) || array_key_exists("ajaxContentClass", $context) ? $context["ajaxContentClass"] : (function () { throw new RuntimeError('Variable "ajaxContentClass" does not exist.', 79, $this->source); })())]]));
            // line 82
            yield "
        ";
            // line 83
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("ajax-renderer"), "@@SprykerShop:ShopUi/components/molecules/cart-counter/cart-counter.twig", 83)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["provider-class-name" =>             // line 85
(isset($context["ajaxCartProvider"]) || array_key_exists("ajaxCartProvider", $context) ? $context["ajaxCartProvider"] : (function () { throw new RuntimeError('Variable "ajaxCartProvider" does not exist.', 85, $this->source); })()), "target-class-name" =>             // line 86
(isset($context["ajaxContentClass"]) || array_key_exists("ajaxContentClass", $context) ? $context["ajaxContentClass"] : (function () { throw new RuntimeError('Variable "ajaxContentClass" does not exist.', 86, $this->source); })()), "mount-after-render" => true]]));
            // line 90
            yield "    ";
        }
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contentOuter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "        <span ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 27)) {
            yield "class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ajaxContentClass"]) || array_key_exists("ajaxContentClass", $context) ? $context["ajaxContentClass"] : (function () { throw new RuntimeError('Variable "ajaxContentClass" does not exist.', 27, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
            ";
        // line 28
        yield from $this->unwrap()->yieldBlock('contentInner', $context, $blocks);
        // line 69
        yield "        </span>
    ";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contentInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "                ";
        $context["linkClass"] = "";
        // line 30
        yield "                ";
        $context["label"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "label", [], "any", false, false, false, 30);
        // line 31
        yield "                ";
        $context["labelClass"] = "";
        // line 32
        yield "                ";
        $context["iconName"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "iconName", [], "any", false, false, false, 32);
        // line 33
        yield "                ";
        $context["iconModifiers"] = [];
        // line 34
        yield "                ";
        $context["quantity"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "quantity", [], "any", false, false, false, 34)) ?: (0));
        // line 35
        yield "                ";
        $context["hiddenQuantityClass"] = (( !(isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 35, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 35, $this->source); })()), "hidden-quantity-class-name", [], "array", false, false, false, 35)) : (""));
        // line 36
        yield "
                ";
        // line 37
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 68
        yield "            ";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "                    <a class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["linkClass"]) || array_key_exists("linkClass", $context) ? $context["linkClass"] : (function () { throw new RuntimeError('Variable "linkClass" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "url", [], "any", false, false, false, 38), "html", null, true);
        yield "\">
                        ";
        // line 39
        yield from $this->unwrap()->yieldBlock('link', $context, $blocks);
        // line 66
        yield "                    </a>
                ";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
        // line 47
        yield "
                            ";
        // line 48
        yield from $this->unwrap()->yieldBlock('icon', $context, $blocks);
        // line 59
        yield "
                            ";
        // line 60
        yield from $this->unwrap()->yieldBlock('quantity', $context, $blocks);
        // line 65
        yield "                        ";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "                                ";
        if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 41, $this->source); })())) {
            // line 42
            yield "                                    <span class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["labelClass"]) || array_key_exists("labelClass", $context) ? $context["labelClass"] : (function () { throw new RuntimeError('Variable "labelClass" does not exist.', 42, $this->source); })()), "html", null, true);
            yield "\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 43, $this->source); })()), "html", null, true);
            // line 44
            yield "</span>
                                ";
        }
        // line 46
        yield "                            ";
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "                                ";
        if ((isset($context["iconName"]) || array_key_exists("iconName", $context) ? $context["iconName"] : (function () { throw new RuntimeError('Variable "iconName" does not exist.', 49, $this->source); })())) {
            // line 50
            yield "                                    ";
            yield from             $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ShopUi/components/molecules/cart-counter/cart-counter.twig", 50)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 51
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51) . "__icon"), "modifiers" =>             // line 52
(isset($context["iconModifiers"]) || array_key_exists("iconModifiers", $context) ? $context["iconModifiers"] : (function () { throw new RuntimeError('Variable "iconModifiers" does not exist.', 52, $this->source); })()), "data" => ["name" =>             // line 54
(isset($context["iconName"]) || array_key_exists("iconName", $context) ? $context["iconName"] : (function () { throw new RuntimeError('Variable "iconName" does not exist.', 54, $this->source); })())]]));
            // line 57
            yield "                                ";
        }
        // line 58
        yield "                            ";
        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_quantity(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        yield "                                <span class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), "html", null, true);
        yield "__quantity ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 61, $this->source); })()), "jsName", [], "any", false, false, false, 61), "html", null, true);
        yield "__quantity ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hiddenQuantityClass"]) || array_key_exists("hiddenQuantityClass", $context) ? $context["hiddenQuantityClass"] : (function () { throw new RuntimeError('Variable "hiddenQuantityClass" does not exist.', 61, $this->source); })()), "html", null, true);
        yield "\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()(Twig\Extension\CoreExtension::trim((isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 62, $this->source); })())), "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "locale", [], "any", false, false, false, 62)), "html", null, true);
        // line 63
        yield "</span>
                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/molecules/cart-counter/cart-counter.twig";
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
        return array (  282 => 63,  280 => 62,  272 => 61,  265 => 60,  260 => 58,  257 => 57,  255 => 54,  254 => 52,  253 => 51,  251 => 50,  248 => 49,  241 => 48,  236 => 46,  232 => 44,  230 => 43,  226 => 42,  223 => 41,  216 => 40,  211 => 65,  209 => 60,  206 => 59,  204 => 48,  201 => 47,  198 => 40,  191 => 39,  185 => 66,  183 => 39,  176 => 38,  169 => 37,  164 => 68,  162 => 37,  159 => 36,  156 => 35,  153 => 34,  150 => 33,  147 => 32,  144 => 31,  141 => 30,  138 => 29,  131 => 28,  125 => 69,  123 => 28,  114 => 27,  107 => 26,  101 => 90,  99 => 86,  98 => 85,  97 => 83,  94 => 82,  92 => 79,  91 => 76,  90 => 74,  88 => 73,  86 => 72,  83 => 71,  81 => 26,  78 => 25,  75 => 24,  72 => 23,  69 => 22,  62 => 21,  58 => 1,  57 => 18,  56 => 17,  55 => 8,  54 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'cart-counter',
    tag: 'cart-counter',
} %}

{% define data = {
    label: 'global.cart' | trans,
    url: url('cart'),
    quantity: null,
    iconName: 'shopping-cart',
    ajaxCartUrl: null,
    ajaxClassSuffix: '',
} %}

{% define attributes = {
    'hidden-quantity-class-name': config.name ~ '__quantity--hidden',
} %}

{% block body %}
    {% set ajaxClassSuffix = data.ajaxClassSuffix ?: 'main' %}
    {% set ajaxContentClass = config.jsName ~ '-content-' ~ ajaxClassSuffix %}
    {% set ajaxCartProvider = data.ajaxCartUrl ? config.jsName ~ '-provider-' ~ ajaxClassSuffix : null %}

    {% block contentOuter %}
        <span {% if data.ajaxCartUrl %}class=\"{{ ajaxContentClass }}\"{% endif %}>
            {% block contentInner %}
                {% set linkClass = '' %}
                {% set label = data.label %}
                {% set labelClass = '' %}
                {% set iconName = data.iconName %}
                {% set iconModifiers = [] %}
                {% set quantity = data.quantity ?: 0 %}
                {% set hiddenQuantityClass = not quantity ? attributes['hidden-quantity-class-name'] %}

                {% block content %}
                    <a class=\"{{ linkClass }}\" href=\"{{ data.url }}\">
                        {% block link %}
                            {% block label %}
                                {% if label %}
                                    <span class=\"{{ labelClass }}\">
                                        {{- label -}}
                                    </span>
                                {% endif %}
                            {% endblock %}

                            {% block icon %}
                                {% if iconName %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__icon',
                                        modifiers: iconModifiers,
                                        data: {
                                            name: iconName,
                                        },
                                    } only %}
                                {% endif %}
                            {% endblock %}

                            {% block quantity %}
                                <span class=\"{{ config.name }}__quantity {{ config.jsName }}__quantity {{ hiddenQuantityClass }}\">
                                    {{- quantity | trim | executeFilterIfExists('formatInt', app.locale) -}}
                                </span>
                            {% endblock %}
                        {% endblock %}
                    </a>
                {% endblock %}
            {% endblock %}
        </span>
    {% endblock %}

    {% if data.ajaxCartUrl %}
        {% include molecule('ajax-provider') with {
            class: ajaxCartProvider,
            attributes: {
                url: data.ajaxCartUrl,
                method: 'POST',
                'event-host': 'CART_UPDATE_EVENT',
                'element-visibility-checker-class-name': ajaxContentClass,
            },
        } only %}

        {% include molecule('ajax-renderer') with {
            attributes: {
                'provider-class-name': ajaxCartProvider,
                'target-class-name': ajaxContentClass,
                'mount-after-render': true,
            },
        } only %}
    {% endif %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/cart-counter/cart-counter.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/cart-counter/cart-counter.twig");
    }
}
