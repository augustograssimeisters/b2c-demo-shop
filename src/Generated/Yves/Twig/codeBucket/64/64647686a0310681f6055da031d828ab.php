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

/* @ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig */
class __TwigTemplate_69ff812b16761e330e77621483e511fa extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-top-mobile", "tag" => "nav"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["url" => "/", "searchUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search"), "cartQuantity" => $this->env->getFunction('getCartQuantity')->getCallable()(), "isAjaxMode" => false, "ajaxCartUrl" => ""], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    ";
        $context["items"] = [["iconName" => "icon-hamburger", "isButton" => true, "jsClass" => "js-page-layout-main__side-drawer-trigger"], ["iconName" => "search", "isButton" => true, "jsClass" => "js-header__search-open"], ["iconName" => "compare", "isCompare" => true, "isEmbed" => true], ["iconName" => "wishlist", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wishlist/overview")], ["iconName" => "user-account", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("customer/overview"), "isButton" => (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) ? (true) : (false)), "jsClass" => "js-page-layout-main__account-side-drawer-trigger"], ["iconName" => "cart", "isEmbed" => true, "isCart" => true]];
        // line 49
        yield "
    <ul class=\"grid grid--middle grid--justify\">
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isEmbed", [], "any", true, true, false, 52)) {
                // line 53
                yield "                ";
                yield from                 $this->loadTemplate("@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", 53, "205717130")->unwrap()->yield(CoreExtension::toArray(["class" => "col", "data" => ["iconName" => CoreExtension::getAttribute($this->env, $this->source,                 // line 56
$context["item"], "iconName", [], "any", false, false, false, 56)], "embed" => ["item" =>                 // line 59
$context["item"], "cartQuantity" => CoreExtension::getAttribute($this->env, $this->source,                 // line 60
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "cartQuantity", [], "any", false, false, false, 60), "ajaxCartUrl" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 61
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "isAjaxMode", [], "any", false, false, false, 61)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 61)) : (null))]]));
                // line 79
                yield "            ";
            } else {
                // line 80
                yield "                ";
                yield from                 $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-top-mobile-item"), "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", 80)->unwrap()->yield(CoreExtension::toArray(["class" => "col", "data" => ["url" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 83
$context["item"], "url", [], "any", true, true, false, 83)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 83)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 83, $this->source); })()), "url", [], "any", false, false, false, 83))), "iconName" => CoreExtension::getAttribute($this->env, $this->source,                 // line 84
$context["item"], "iconName", [], "any", false, false, false, 84), "isButton" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 85
$context["item"], "isButton", [], "any", true, true, false, 85)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isButton", [], "any", false, false, false, 85)) : (false)), "jsClass" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 86
$context["item"], "jsClass", [], "any", true, true, false, 86)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "jsClass", [], "any", false, false, false, 86)) : (""))]]));
                // line 89
                yield "            ";
            }
            // line 90
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "    </ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig";
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
        return array (  100 => 91,  94 => 90,  91 => 89,  89 => 86,  88 => 85,  87 => 84,  86 => 83,  84 => 80,  81 => 79,  79 => 61,  78 => 60,  77 => 59,  76 => 56,  74 => 53,  71 => 52,  67 => 51,  63 => 49,  60 => 17,  53 => 16,  49 => 1,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top-mobile',
    tag: 'nav'
} %}

{% define data = {
    url: '/',
    searchUrl: path('search'),
    cartQuantity: getCartQuantity(),
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    {% set items = [
        {
            iconName: 'icon-hamburger',
            isButton: true,
            jsClass: 'js-page-layout-main__side-drawer-trigger'
        },
        {
            iconName: 'search',
            isButton: true,
            jsClass: 'js-header__search-open'
        },
        {
            iconName: 'compare',
            isCompare: true,
            isEmbed: true,
        },
        {
            iconName: 'wishlist',
            url: url('wishlist/overview')
        },
        {
            iconName: 'user-account',
            url: url('customer/overview'),
            isButton: is_granted('IS_AUTHENTICATED_FULLY') ? true : false,
            jsClass: 'js-page-layout-main__account-side-drawer-trigger'
        },
        {
            iconName: 'cart',
            isEmbed: true,
            isCart: true
        }
    ] %}

    <ul class=\"grid grid--middle grid--justify\">
        {% for item in items %}
            {% if item.isEmbed is defined %}
                {% embed molecule('navigation-top-mobile-item') with {
                    class: 'col',
                    data: {
                        iconName: item.iconName
                    },
                    embed: {
                        item: item,
                        cartQuantity: data.cartQuantity,
                        ajaxCartUrl: data.isAjaxMode ? data.ajaxCartUrl : null,
                    }
                } only %}
                    {% block button %}
                        {% if embed.item.isCompare is defined %}
                            {% widget 'LinkToProductComparisonListWidget' %}{% endwidget %}
                        {% elseif embed.item.isCart is defined %}
                            {% include molecule('cart-counter') with {
                                modifiers: ['mobile'],
                                data: {
                                    quantity: embed.cartQuantity,
                                    ajaxCartUrl: embed.ajaxCartUrl ~ '?counterOnly=true',
                                    ajaxClassSuffix: 'mobile',
                                },
                            } only %}
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% else %}
                {% include molecule('navigation-top-mobile-item') with {
                    class: 'col',
                    data: {
                        url: item.url is defined ? item.url : data.url,
                        iconName: item.iconName,
                        isButton: item.isButton is defined ? item.isButton : false,
                        jsClass: item.jsClass is defined ? item.jsClass : ''
                    }
                } only %}
            {% endif %}
        {% endfor %}
    </ul>
{% endblock %}
", "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-top-mobile/navigation-top-mobile.twig");
    }
}


/* @ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig */
class __TwigTemplate_69ff812b16761e330e77621483e511fa___205717130 extends Template
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
        // line 53
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-top-mobile-item"), "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", 53);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "item", [], "any", false, true, false, 65), "isCompare", [], "any", true, true, false, 65)) {
            // line 66
            yield "                            ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("LinkToProductComparisonListWidget")) {
                $this->loadTemplate("@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", 66, 1698920381)->display(array_merge($context, array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget))));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 67
            yield "                        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["embed"] ?? null), "item", [], "any", false, true, false, 67), "isCart", [], "any", true, true, false, 67)) {
            // line 68
            yield "                            ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("cart-counter"), "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", 68)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["mobile"], "data" => ["quantity" => CoreExtension::getAttribute($this->env, $this->source,             // line 71
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 71, $this->source); })()), "cartQuantity", [], "any", false, false, false, 71), "ajaxCartUrl" => (CoreExtension::getAttribute($this->env, $this->source,             // line 72
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 72, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 72) . "?counterOnly=true"), "ajaxClassSuffix" => "mobile"]]));
            // line 76
            yield "                        ";
        }
        // line 77
        yield "                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig";
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
        return array (  287 => 77,  284 => 76,  282 => 72,  281 => 71,  279 => 68,  276 => 67,  271 => 66,  268 => 65,  261 => 64,  251 => 53,  100 => 91,  94 => 90,  91 => 89,  89 => 86,  88 => 85,  87 => 84,  86 => 83,  84 => 80,  81 => 79,  79 => 61,  78 => 60,  77 => 59,  76 => 56,  74 => 53,  71 => 52,  67 => 51,  63 => 49,  60 => 17,  53 => 16,  49 => 1,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top-mobile',
    tag: 'nav'
} %}

{% define data = {
    url: '/',
    searchUrl: path('search'),
    cartQuantity: getCartQuantity(),
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    {% set items = [
        {
            iconName: 'icon-hamburger',
            isButton: true,
            jsClass: 'js-page-layout-main__side-drawer-trigger'
        },
        {
            iconName: 'search',
            isButton: true,
            jsClass: 'js-header__search-open'
        },
        {
            iconName: 'compare',
            isCompare: true,
            isEmbed: true,
        },
        {
            iconName: 'wishlist',
            url: url('wishlist/overview')
        },
        {
            iconName: 'user-account',
            url: url('customer/overview'),
            isButton: is_granted('IS_AUTHENTICATED_FULLY') ? true : false,
            jsClass: 'js-page-layout-main__account-side-drawer-trigger'
        },
        {
            iconName: 'cart',
            isEmbed: true,
            isCart: true
        }
    ] %}

    <ul class=\"grid grid--middle grid--justify\">
        {% for item in items %}
            {% if item.isEmbed is defined %}
                {% embed molecule('navigation-top-mobile-item') with {
                    class: 'col',
                    data: {
                        iconName: item.iconName
                    },
                    embed: {
                        item: item,
                        cartQuantity: data.cartQuantity,
                        ajaxCartUrl: data.isAjaxMode ? data.ajaxCartUrl : null,
                    }
                } only %}
                    {% block button %}
                        {% if embed.item.isCompare is defined %}
                            {% widget 'LinkToProductComparisonListWidget' %}{% endwidget %}
                        {% elseif embed.item.isCart is defined %}
                            {% include molecule('cart-counter') with {
                                modifiers: ['mobile'],
                                data: {
                                    quantity: embed.cartQuantity,
                                    ajaxCartUrl: embed.ajaxCartUrl ~ '?counterOnly=true',
                                    ajaxClassSuffix: 'mobile',
                                },
                            } only %}
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% else %}
                {% include molecule('navigation-top-mobile-item') with {
                    class: 'col',
                    data: {
                        url: item.url is defined ? item.url : data.url,
                        iconName: item.iconName,
                        isButton: item.isButton is defined ? item.isButton : false,
                        jsClass: item.jsClass is defined ? item.jsClass : ''
                    }
                } only %}
            {% endif %}
        {% endfor %}
    </ul>
{% endblock %}
", "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-top-mobile/navigation-top-mobile.twig");
    }
}


/* @ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig */
class __TwigTemplate_69ff812b16761e330e77621483e511fa___1698920381 extends Template
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
        // line 66
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 66, $this->source); })()), "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", 66);
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
        return "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig";
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
        return array (  436 => 66,  287 => 77,  284 => 76,  282 => 72,  281 => 71,  279 => 68,  276 => 67,  271 => 66,  268 => 65,  261 => 64,  251 => 53,  100 => 91,  94 => 90,  91 => 89,  89 => 86,  88 => 85,  87 => 84,  86 => 83,  84 => 80,  81 => 79,  79 => 61,  78 => 60,  77 => 59,  76 => 56,  74 => 53,  71 => 52,  67 => 51,  63 => 49,  60 => 17,  53 => 16,  49 => 1,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top-mobile',
    tag: 'nav'
} %}

{% define data = {
    url: '/',
    searchUrl: path('search'),
    cartQuantity: getCartQuantity(),
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    {% set items = [
        {
            iconName: 'icon-hamburger',
            isButton: true,
            jsClass: 'js-page-layout-main__side-drawer-trigger'
        },
        {
            iconName: 'search',
            isButton: true,
            jsClass: 'js-header__search-open'
        },
        {
            iconName: 'compare',
            isCompare: true,
            isEmbed: true,
        },
        {
            iconName: 'wishlist',
            url: url('wishlist/overview')
        },
        {
            iconName: 'user-account',
            url: url('customer/overview'),
            isButton: is_granted('IS_AUTHENTICATED_FULLY') ? true : false,
            jsClass: 'js-page-layout-main__account-side-drawer-trigger'
        },
        {
            iconName: 'cart',
            isEmbed: true,
            isCart: true
        }
    ] %}

    <ul class=\"grid grid--middle grid--justify\">
        {% for item in items %}
            {% if item.isEmbed is defined %}
                {% embed molecule('navigation-top-mobile-item') with {
                    class: 'col',
                    data: {
                        iconName: item.iconName
                    },
                    embed: {
                        item: item,
                        cartQuantity: data.cartQuantity,
                        ajaxCartUrl: data.isAjaxMode ? data.ajaxCartUrl : null,
                    }
                } only %}
                    {% block button %}
                        {% if embed.item.isCompare is defined %}
                            {% widget 'LinkToProductComparisonListWidget' %}{% endwidget %}
                        {% elseif embed.item.isCart is defined %}
                            {% include molecule('cart-counter') with {
                                modifiers: ['mobile'],
                                data: {
                                    quantity: embed.cartQuantity,
                                    ajaxCartUrl: embed.ajaxCartUrl ~ '?counterOnly=true',
                                    ajaxClassSuffix: 'mobile',
                                },
                            } only %}
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% else %}
                {% include molecule('navigation-top-mobile-item') with {
                    class: 'col',
                    data: {
                        url: item.url is defined ? item.url : data.url,
                        iconName: item.iconName,
                        isButton: item.isButton is defined ? item.isButton : false,
                        jsClass: item.jsClass is defined ? item.jsClass : ''
                    }
                } only %}
            {% endif %}
        {% endfor %}
    </ul>
{% endblock %}
", "@ShopUi/components/molecules/navigation-top-mobile/navigation-top-mobile.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-top-mobile/navigation-top-mobile.twig");
    }
}
