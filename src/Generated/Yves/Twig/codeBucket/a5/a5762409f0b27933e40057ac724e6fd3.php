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

/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_4061d864e540e0d0f6ec1091e67baa46 extends Template
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
            'contentInner' => [$this, 'block_contentInner'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-top", "tag" => "nav", "ajaxCartUrl" => null], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["cartQuantity" => Twig\Extension\CoreExtension::default($this->env->getFunction('getCartQuantity')->getCallable()()), "showUserMenu" => true], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "    ";
        $context["ajaxContentClass"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "jsName", [], "any", false, false, false, 15) . "-content");
        // line 16
        yield "    ";
        $context["ajaxCartProvider"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 16)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "jsName", [], "any", false, false, false, 16) . "-provider")) : (null));
        // line 17
        yield "
    <div ";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 18)) {
            yield "class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ajaxContentClass"]) || array_key_exists("ajaxContentClass", $context) ? $context["ajaxContentClass"] : (function () { throw new RuntimeError('Variable "ajaxContentClass" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
        ";
        // line 19
        yield from $this->unwrap()->yieldBlock('contentInner', $context, $blocks);
        // line 93
        yield "    </div>

    ";
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 95, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 95)) {
            // line 96
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("ajax-provider"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 96)->unwrap()->yield(CoreExtension::toArray(["class" =>             // line 97
(isset($context["ajaxCartProvider"]) || array_key_exists("ajaxCartProvider", $context) ? $context["ajaxCartProvider"] : (function () { throw new RuntimeError('Variable "ajaxCartProvider" does not exist.', 97, $this->source); })()), "attributes" => ["url" => CoreExtension::getAttribute($this->env, $this->source,             // line 99
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 99, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 99), "method" => "POST", "event-host" => "CART_UPDATE_EVENT", "element-visibility-checker-class-name" =>             // line 102
(isset($context["ajaxContentClass"]) || array_key_exists("ajaxContentClass", $context) ? $context["ajaxContentClass"] : (function () { throw new RuntimeError('Variable "ajaxContentClass" does not exist.', 102, $this->source); })())]]));
            // line 105
            yield "
        ";
            // line 106
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("ajax-renderer"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 106)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["provider-class-name" =>             // line 108
(isset($context["ajaxCartProvider"]) || array_key_exists("ajaxCartProvider", $context) ? $context["ajaxCartProvider"] : (function () { throw new RuntimeError('Variable "ajaxCartProvider" does not exist.', 108, $this->source); })()), "target-class-name" =>             // line 109
(isset($context["ajaxContentClass"]) || array_key_exists("ajaxContentClass", $context) ? $context["ajaxContentClass"] : (function () { throw new RuntimeError('Variable "ajaxContentClass" does not exist.', 109, $this->source); })()), "mount-after-render" => true]]));
            // line 113
            yield "    ";
        }
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contentInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "            <ul class=\"grid grid--middle grid--right\">
                 ";
        // line 21
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("LinkToProductComparisonListWidget")) {
            $this->loadTemplate("@ShopUi/components/organisms/navigation-top/navigation-top.twig", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 21, 867746201)->display(array_merge($context, array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget))));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 28
        yield "
                ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "showUserMenu", [], "any", false, false, false, 29)) {
            // line 30
            yield "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 31
                yield "                        <li class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
                yield "__item\">
                            <a href=\"";
                // line 32
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wishlist/overview");
                yield "\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
                yield "__link\">
                                ";
                // line 33
                yield from                 $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 33)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["big"], "data" => ["name" => "wishlist"]]));
                // line 39
                yield "                            </a>
                        </li>
                        <li class=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
                yield "__item\">
                            <a href=\"";
                // line 42
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("customer/overview");
                yield "\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
                yield "__link ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "jsName", [], "any", false, false, false, 42), "html", null, true);
                yield "__trigger\">
                                ";
                // line 43
                yield from                 $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 43)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["big"], "data" => ["name" => "user-account"]]));
                // line 49
                yield "                            </a>
                        </li>
                    ";
            } else {
                // line 52
                yield "                        <li class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
                yield "__item\">
                            <a href=\"";
                // line 53
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
                yield "\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
                yield "__link\">
                                ";
                // line 54
                yield from                 $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 54)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["big"], "data" => ["name" => "wishlist"]]));
                // line 60
                yield "                            </a>
                        </li>
                        <li class=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62), "html", null, true);
                yield "__item\">
                            <a href=\"";
                // line 63
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
                yield "\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), "html", null, true);
                yield "__link ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 63, $this->source); })()), "jsName", [], "any", false, false, false, 63), "html", null, true);
                yield "__trigger\">
                                ";
                // line 64
                yield from                 $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 64)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["big"], "data" => ["name" => "user-account"]]));
                // line 70
                yield "                            </a>
                        </li>
                    ";
            }
            // line 73
            yield "                ";
        }
        // line 74
        yield "
                <li class=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), "html", null, true);
        yield "__item\">
                    ";
        // line 76
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("cart-counter"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 76)->unwrap()->yield(CoreExtension::toArray(["class" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77) . "__link ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 77, $this->source); })()), "jsName", [], "any", false, false, false, 77)) . "__trigger"), "data" => ["quantity" => CoreExtension::getAttribute($this->env, $this->source,         // line 79
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 79, $this->source); })()), "cartQuantity", [], "any", false, false, false, 79)]]));
        // line 82
        yield "                </li>
                <li class=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 83, $this->source); })()), "name", [], "any", false, false, false, 83), "html", null, true);
        yield "__item ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 83, $this->source); })()), "name", [], "any", false, false, false, 83), "html", null, true);
        yield "__item--overlay\">
                    ";
        // line 84
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("nav-overlay"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 84)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["trigger-open-class-name" => (CoreExtension::getAttribute($this->env, $this->source,         // line 86
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 86, $this->source); })()), "jsName", [], "any", false, false, false, 86) . "__trigger"), "active-link" => (CoreExtension::getAttribute($this->env, $this->source,         // line 87
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87) . "__link--active")]]));
        // line 90
        yield "                </li>
            </ul>
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
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
        return array (  226 => 90,  224 => 87,  223 => 86,  222 => 84,  216 => 83,  213 => 82,  211 => 79,  210 => 77,  209 => 76,  205 => 75,  202 => 74,  199 => 73,  194 => 70,  192 => 64,  184 => 63,  180 => 62,  176 => 60,  174 => 54,  168 => 53,  163 => 52,  158 => 49,  156 => 43,  148 => 42,  144 => 41,  140 => 39,  138 => 33,  132 => 32,  127 => 31,  124 => 30,  122 => 29,  119 => 28,  115 => 21,  112 => 20,  105 => 19,  99 => 113,  97 => 109,  96 => 108,  95 => 106,  92 => 105,  90 => 102,  89 => 99,  88 => 97,  86 => 96,  84 => 95,  80 => 93,  78 => 19,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  54 => 14,  50 => 1,  49 => 9,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'nav',
    ajaxCartUrl: null,
} %}

{% define data = {
    cartQuantity: getCartQuantity() | default,
    showUserMenu: true
} %}

{% block body %}
    {% set ajaxContentClass = config.jsName ~ '-content' %}
    {% set ajaxCartProvider = data.ajaxCartUrl ? config.jsName ~ '-provider' : null %}

    <div {% if data.ajaxCartUrl %}class=\"{{ ajaxContentClass }}\"{% endif %}>
        {% block contentInner %}
            <ul class=\"grid grid--middle grid--right\">
                 {% widget 'LinkToProductComparisonListWidget' %}
                    {% block body %}
                        <li class=\"{{ config.name }}__item\">
                            {{ parent() }}
                        </li>
                    {% endblock %}
                {% endwidget %}

                {% if data.showUserMenu %}
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"{{ config.name }}__item\">
                            <a href=\"{{ url('wishlist/overview') }}\" class=\"{{ config.name }}__link\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'wishlist'
                                    }
                                } only %}
                            </a>
                        </li>
                        <li class=\"{{ config.name }}__item\">
                            <a href=\"{{ url('customer/overview') }}\" class=\"{{ config.name }}__link {{ config.jsName }}__trigger\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'user-account'
                                    }
                                } only %}
                            </a>
                        </li>
                    {% else %}
                        <li class=\"{{ config.name }}__item\">
                            <a href=\"{{ url('login') }}\" class=\"{{ config.name }}__link\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'wishlist'
                                    }
                                } only %}
                            </a>
                        </li>
                        <li class=\"{{ config.name }}__item\">
                            <a href=\"{{ url('login') }}\" class=\"{{ config.name }}__link {{ config.jsName }}__trigger\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'user-account'
                                    }
                                } only %}
                            </a>
                        </li>
                    {% endif %}
                {% endif %}

                <li class=\"{{ config.name }}__item\">
                    {% include molecule('cart-counter') with {
                        class: config.name ~ '__link ' ~ config.jsName ~ '__trigger',
                        data: {
                            quantity: data.cartQuantity,
                        },
                    } only %}
                </li>
                <li class=\"{{ config.name }}__item {{ config.name }}__item--overlay\">
                    {% include molecule('nav-overlay') with {
                        attributes: {
                            'trigger-open-class-name': config.jsName ~ '__trigger',
                            'active-link': config.name ~ '__link--active',
                        },
                    } only %}
                </li>
            </ul>
        {% endblock %}
    </div>

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
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}


/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_4061d864e540e0d0f6ec1091e67baa46___867746201 extends Template
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
        // line 21
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 21, $this->source); })()), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "                        <li class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        yield "__item\">
                            ";
        // line 24
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
                        </li>
                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
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
        return array (  422 => 24,  417 => 23,  410 => 22,  400 => 21,  226 => 90,  224 => 87,  223 => 86,  222 => 84,  216 => 83,  213 => 82,  211 => 79,  210 => 77,  209 => 76,  205 => 75,  202 => 74,  199 => 73,  194 => 70,  192 => 64,  184 => 63,  180 => 62,  176 => 60,  174 => 54,  168 => 53,  163 => 52,  158 => 49,  156 => 43,  148 => 42,  144 => 41,  140 => 39,  138 => 33,  132 => 32,  127 => 31,  124 => 30,  122 => 29,  119 => 28,  115 => 21,  112 => 20,  105 => 19,  99 => 113,  97 => 109,  96 => 108,  95 => 106,  92 => 105,  90 => 102,  89 => 99,  88 => 97,  86 => 96,  84 => 95,  80 => 93,  78 => 19,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  54 => 14,  50 => 1,  49 => 9,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'nav',
    ajaxCartUrl: null,
} %}

{% define data = {
    cartQuantity: getCartQuantity() | default,
    showUserMenu: true
} %}

{% block body %}
    {% set ajaxContentClass = config.jsName ~ '-content' %}
    {% set ajaxCartProvider = data.ajaxCartUrl ? config.jsName ~ '-provider' : null %}

    <div {% if data.ajaxCartUrl %}class=\"{{ ajaxContentClass }}\"{% endif %}>
        {% block contentInner %}
            <ul class=\"grid grid--middle grid--right\">
                 {% widget 'LinkToProductComparisonListWidget' %}
                    {% block body %}
                        <li class=\"{{ config.name }}__item\">
                            {{ parent() }}
                        </li>
                    {% endblock %}
                {% endwidget %}

                {% if data.showUserMenu %}
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"{{ config.name }}__item\">
                            <a href=\"{{ url('wishlist/overview') }}\" class=\"{{ config.name }}__link\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'wishlist'
                                    }
                                } only %}
                            </a>
                        </li>
                        <li class=\"{{ config.name }}__item\">
                            <a href=\"{{ url('customer/overview') }}\" class=\"{{ config.name }}__link {{ config.jsName }}__trigger\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'user-account'
                                    }
                                } only %}
                            </a>
                        </li>
                    {% else %}
                        <li class=\"{{ config.name }}__item\">
                            <a href=\"{{ url('login') }}\" class=\"{{ config.name }}__link\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'wishlist'
                                    }
                                } only %}
                            </a>
                        </li>
                        <li class=\"{{ config.name }}__item\">
                            <a href=\"{{ url('login') }}\" class=\"{{ config.name }}__link {{ config.jsName }}__trigger\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'user-account'
                                    }
                                } only %}
                            </a>
                        </li>
                    {% endif %}
                {% endif %}

                <li class=\"{{ config.name }}__item\">
                    {% include molecule('cart-counter') with {
                        class: config.name ~ '__link ' ~ config.jsName ~ '__trigger',
                        data: {
                            quantity: data.cartQuantity,
                        },
                    } only %}
                </li>
                <li class=\"{{ config.name }}__item {{ config.name }}__item--overlay\">
                    {% include molecule('nav-overlay') with {
                        attributes: {
                            'trigger-open-class-name': config.jsName ~ '__trigger',
                            'active-link': config.name ~ '__link--active',
                        },
                    } only %}
                </li>
            </ul>
        {% endblock %}
    </div>

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
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}
