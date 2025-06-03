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

/* @@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_af74ef7c13f1bcb52331eafde7ec6dd7 extends Template
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
            'close' => [$this, 'block_close'],
            'closeIcon' => [$this, 'block_closeIcon'],
            'mobileNavigation' => [$this, 'block_mobileNavigation'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "side-drawer", "tag" => "side-drawer"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["trigger-selector" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "container-selector" => ""], $context['attributes']);        // line 13
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["isAjaxMode" => false, "ajaxCartUrl" => ""], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    <aside class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "__drawer\">
        ";
        // line 20
        yield from $this->unwrap()->yieldBlock('close', $context, $blocks);
        // line 35
        yield "
        <div class=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
        yield "__navigation\">
            ";
        // line 37
        yield from $this->unwrap()->yieldBlock('mobileNavigation', $context, $blocks);
        // line 44
        yield "            <hr>
            ";
        // line 45
        yield from         $this->loadTemplate("@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", 45, "2016400180")->unwrap()->yield(CoreExtension::toArray(["class" => "text-left", "data" => ["isInline" => false, "withSeparators" => false], "embed" => ["isAjaxMode" => CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 52, $this->source); })()), "isAjaxMode", [], "any", false, false, false, 52), "ajaxCartUrl" => CoreExtension::getAttribute($this->env, $this->source,         // line 53
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 53)]]));
        // line 78
        yield "        </div>

        ";
        // line 80
        yield from         $this->unwrap()->yieldBlock("close", $context, $blocks);
        yield "
    </aside>
";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "            <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "__close\">
                <button type=\"button\" class=\"link link--alt ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 22, $this->source); })()), "trigger-selector", [], "array", false, false, false, 22), "html", null, true);
        yield "\">
                    ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.close"), "html", null, true);
        yield "

                    ";
        // line 25
        yield from $this->unwrap()->yieldBlock('closeIcon', $context, $blocks);
        // line 32
        yield "                </button>
            </div>
        ";
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_closeIcon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "                        ";
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", 26)->unwrap()->yield(CoreExtension::toArray(["data" => ["name" => "times"]]));
        // line 31
        yield "                    ";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mobileNavigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("NavigationWidget", ["MAIN_NAVIGATION", "navigation-main-mobile"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", 38, 1990445384)->display(array_merge($context, array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget))));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        } else {
            // line 40
            yield "                    ";
            // line 41
            yield "                    ";
            yield $this->env->getFunction('widgetGlobal')->getCallable()($this->env, "NavigationWidgetPlugin", "MAIN_NAVIGATION", "navigation-main-mobile");
            yield "
                ";
        }
        // line 43
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig";
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
        return array (  166 => 43,  160 => 41,  158 => 40,  152 => 38,  145 => 37,  140 => 31,  137 => 26,  130 => 25,  123 => 32,  121 => 25,  116 => 23,  112 => 22,  107 => 21,  100 => 20,  92 => 80,  88 => 78,  86 => 53,  85 => 52,  84 => 45,  81 => 44,  79 => 37,  75 => 36,  72 => 35,  70 => 20,  65 => 19,  58 => 18,  54 => 1,  53 => 13,  52 => 9,  51 => 8,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer'
} %}

{% define attributes = {
    'trigger-selector': required,
    'container-selector': '',
} %}

{% define data = {
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    <aside class=\"{{ config.name }}__drawer\">
        {% block close %}
            <div class=\"{{ config.name }}__close\">
                <button type=\"button\" class=\"link link--alt {{ attributes['trigger-selector'] }}\">
                    {{ 'global.close' | trans }}

                    {% block closeIcon %}
                        {% include atom('icon') with {
                            data: {
                                name: 'times',
                            },
                        } only %}
                    {% endblock %}
                </button>
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__navigation\">
            {% block mobileNavigation %}
                {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main-mobile'] %}
                {% nowidget %}
                    {# @deprecated Kept for BC reasons, will be removed in next major. #}
                    {{ widgetGlobal('NavigationWidgetPlugin', 'MAIN_NAVIGATION', 'navigation-main-mobile') }}
                {% endwidget %}
            {% endblock %}
            <hr>
            {% embed organism('navigation-top') with {
                class: 'text-left',
                data: {
                    isInline: false,
                    withSeparators: false,
                },
                embed: {
                    isAjaxMode: data.isAjaxMode,
                    ajaxCartUrl: data.ajaxCartUrl,
                },
            } only %}
                {% block multiCart %}
                    <li class=\"menu__item\">
                        {% widget 'MiniCartWidget' args [cartQuantity] with {
                            data: {
                                isAjaxMode: embed.isAjaxMode,
                                ajaxClassSuffix: 'sidedrawer',
                                counterOnly: true,
                            },
                        }  only %}
                            {% block cartList %}{% endblock %}
                        {% nowidget %}
                            {% include molecule('cart-counter') with {
                                data: {
                                    quantity: data.cartQuantity,
                                    ajaxCartUrl: embed.isAjaxMode ? embed.ajaxCartUrl : null,
                                    ajaxClassSuffix: 'sidedrawer',
                                },
                            } only %}
                        {% endwidget %}
                    </li>
                {% endblock %}
            {% endembed %}
        </div>

        {{ block('close') }}
    </aside>
{% endblock %}
", "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_af74ef7c13f1bcb52331eafde7ec6dd7___1990445384 extends Template
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
        // line 38
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 38, $this->source); })()), "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", 38);
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
        return "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig";
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
        return array (  305 => 38,  166 => 43,  160 => 41,  158 => 40,  152 => 38,  145 => 37,  140 => 31,  137 => 26,  130 => 25,  123 => 32,  121 => 25,  116 => 23,  112 => 22,  107 => 21,  100 => 20,  92 => 80,  88 => 78,  86 => 53,  85 => 52,  84 => 45,  81 => 44,  79 => 37,  75 => 36,  72 => 35,  70 => 20,  65 => 19,  58 => 18,  54 => 1,  53 => 13,  52 => 9,  51 => 8,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer'
} %}

{% define attributes = {
    'trigger-selector': required,
    'container-selector': '',
} %}

{% define data = {
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    <aside class=\"{{ config.name }}__drawer\">
        {% block close %}
            <div class=\"{{ config.name }}__close\">
                <button type=\"button\" class=\"link link--alt {{ attributes['trigger-selector'] }}\">
                    {{ 'global.close' | trans }}

                    {% block closeIcon %}
                        {% include atom('icon') with {
                            data: {
                                name: 'times',
                            },
                        } only %}
                    {% endblock %}
                </button>
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__navigation\">
            {% block mobileNavigation %}
                {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main-mobile'] %}
                {% nowidget %}
                    {# @deprecated Kept for BC reasons, will be removed in next major. #}
                    {{ widgetGlobal('NavigationWidgetPlugin', 'MAIN_NAVIGATION', 'navigation-main-mobile') }}
                {% endwidget %}
            {% endblock %}
            <hr>
            {% embed organism('navigation-top') with {
                class: 'text-left',
                data: {
                    isInline: false,
                    withSeparators: false,
                },
                embed: {
                    isAjaxMode: data.isAjaxMode,
                    ajaxCartUrl: data.ajaxCartUrl,
                },
            } only %}
                {% block multiCart %}
                    <li class=\"menu__item\">
                        {% widget 'MiniCartWidget' args [cartQuantity] with {
                            data: {
                                isAjaxMode: embed.isAjaxMode,
                                ajaxClassSuffix: 'sidedrawer',
                                counterOnly: true,
                            },
                        }  only %}
                            {% block cartList %}{% endblock %}
                        {% nowidget %}
                            {% include molecule('cart-counter') with {
                                data: {
                                    quantity: data.cartQuantity,
                                    ajaxCartUrl: embed.isAjaxMode ? embed.ajaxCartUrl : null,
                                    ajaxClassSuffix: 'sidedrawer',
                                },
                            } only %}
                        {% endwidget %}
                    </li>
                {% endblock %}
            {% endembed %}
        </div>

        {{ block('close') }}
    </aside>
{% endblock %}
", "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_af74ef7c13f1bcb52331eafde7ec6dd7___2016400180 extends Template
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
            'multiCart' => [$this, 'block_multiCart'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 45
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("navigation-top"), "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", 45);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_multiCart(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "                    <li class=\"menu__item\">
                        ";
        // line 58
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("MiniCartWidget", [(isset($context["cartQuantity"]) || array_key_exists("cartQuantity", $context) ? $context["cartQuantity"] : (function () { throw new RuntimeError('Variable "cartQuantity" does not exist.', 58, $this->source); })())])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", 58, 1231231805)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["isAjaxMode" => CoreExtension::getAttribute($this->env, $this->source,             // line 60
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 60, $this->source); })()), "isAjaxMode", [], "any", false, false, false, 60), "ajaxClassSuffix" => "sidedrawer", "counterOnly" => true]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        } else {
            // line 67
            yield "                            ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("cart-counter"), "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", 67)->unwrap()->yield(CoreExtension::toArray(["data" => ["quantity" => CoreExtension::getAttribute($this->env, $this->source,             // line 69
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 69, $this->source); })()), "cartQuantity", [], "any", false, false, false, 69), "ajaxCartUrl" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 70
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 70, $this->source); })()), "isAjaxMode", [], "any", false, false, false, 70)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 70, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 70)) : (null)), "ajaxClassSuffix" => "sidedrawer"]]));
            // line 74
            yield "                        ";
        }
        // line 75
        yield "                    </li>
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig";
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
        return array (  484 => 75,  481 => 74,  479 => 70,  478 => 69,  476 => 67,  472 => 60,  470 => 58,  467 => 57,  460 => 56,  450 => 45,  305 => 38,  166 => 43,  160 => 41,  158 => 40,  152 => 38,  145 => 37,  140 => 31,  137 => 26,  130 => 25,  123 => 32,  121 => 25,  116 => 23,  112 => 22,  107 => 21,  100 => 20,  92 => 80,  88 => 78,  86 => 53,  85 => 52,  84 => 45,  81 => 44,  79 => 37,  75 => 36,  72 => 35,  70 => 20,  65 => 19,  58 => 18,  54 => 1,  53 => 13,  52 => 9,  51 => 8,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer'
} %}

{% define attributes = {
    'trigger-selector': required,
    'container-selector': '',
} %}

{% define data = {
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    <aside class=\"{{ config.name }}__drawer\">
        {% block close %}
            <div class=\"{{ config.name }}__close\">
                <button type=\"button\" class=\"link link--alt {{ attributes['trigger-selector'] }}\">
                    {{ 'global.close' | trans }}

                    {% block closeIcon %}
                        {% include atom('icon') with {
                            data: {
                                name: 'times',
                            },
                        } only %}
                    {% endblock %}
                </button>
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__navigation\">
            {% block mobileNavigation %}
                {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main-mobile'] %}
                {% nowidget %}
                    {# @deprecated Kept for BC reasons, will be removed in next major. #}
                    {{ widgetGlobal('NavigationWidgetPlugin', 'MAIN_NAVIGATION', 'navigation-main-mobile') }}
                {% endwidget %}
            {% endblock %}
            <hr>
            {% embed organism('navigation-top') with {
                class: 'text-left',
                data: {
                    isInline: false,
                    withSeparators: false,
                },
                embed: {
                    isAjaxMode: data.isAjaxMode,
                    ajaxCartUrl: data.ajaxCartUrl,
                },
            } only %}
                {% block multiCart %}
                    <li class=\"menu__item\">
                        {% widget 'MiniCartWidget' args [cartQuantity] with {
                            data: {
                                isAjaxMode: embed.isAjaxMode,
                                ajaxClassSuffix: 'sidedrawer',
                                counterOnly: true,
                            },
                        }  only %}
                            {% block cartList %}{% endblock %}
                        {% nowidget %}
                            {% include molecule('cart-counter') with {
                                data: {
                                    quantity: data.cartQuantity,
                                    ajaxCartUrl: embed.isAjaxMode ? embed.ajaxCartUrl : null,
                                    ajaxClassSuffix: 'sidedrawer',
                                },
                            } only %}
                        {% endwidget %}
                    </li>
                {% endblock %}
            {% endembed %}
        </div>

        {{ block('close') }}
    </aside>
{% endblock %}
", "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_af74ef7c13f1bcb52331eafde7ec6dd7___1231231805 extends Template
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
            'cartList' => [$this, 'block_cartList'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 58
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 58, $this->source); })()), "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", 58);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_cartList(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig";
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
        return array (  635 => 65,  625 => 58,  484 => 75,  481 => 74,  479 => 70,  478 => 69,  476 => 67,  472 => 60,  470 => 58,  467 => 57,  460 => 56,  450 => 45,  305 => 38,  166 => 43,  160 => 41,  158 => 40,  152 => 38,  145 => 37,  140 => 31,  137 => 26,  130 => 25,  123 => 32,  121 => 25,  116 => 23,  112 => 22,  107 => 21,  100 => 20,  92 => 80,  88 => 78,  86 => 53,  85 => 52,  84 => 45,  81 => 44,  79 => 37,  75 => 36,  72 => 35,  70 => 20,  65 => 19,  58 => 18,  54 => 1,  53 => 13,  52 => 9,  51 => 8,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer'
} %}

{% define attributes = {
    'trigger-selector': required,
    'container-selector': '',
} %}

{% define data = {
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    <aside class=\"{{ config.name }}__drawer\">
        {% block close %}
            <div class=\"{{ config.name }}__close\">
                <button type=\"button\" class=\"link link--alt {{ attributes['trigger-selector'] }}\">
                    {{ 'global.close' | trans }}

                    {% block closeIcon %}
                        {% include atom('icon') with {
                            data: {
                                name: 'times',
                            },
                        } only %}
                    {% endblock %}
                </button>
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__navigation\">
            {% block mobileNavigation %}
                {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main-mobile'] %}
                {% nowidget %}
                    {# @deprecated Kept for BC reasons, will be removed in next major. #}
                    {{ widgetGlobal('NavigationWidgetPlugin', 'MAIN_NAVIGATION', 'navigation-main-mobile') }}
                {% endwidget %}
            {% endblock %}
            <hr>
            {% embed organism('navigation-top') with {
                class: 'text-left',
                data: {
                    isInline: false,
                    withSeparators: false,
                },
                embed: {
                    isAjaxMode: data.isAjaxMode,
                    ajaxCartUrl: data.ajaxCartUrl,
                },
            } only %}
                {% block multiCart %}
                    <li class=\"menu__item\">
                        {% widget 'MiniCartWidget' args [cartQuantity] with {
                            data: {
                                isAjaxMode: embed.isAjaxMode,
                                ajaxClassSuffix: 'sidedrawer',
                                counterOnly: true,
                            },
                        }  only %}
                            {% block cartList %}{% endblock %}
                        {% nowidget %}
                            {% include molecule('cart-counter') with {
                                data: {
                                    quantity: data.cartQuantity,
                                    ajaxCartUrl: embed.isAjaxMode ? embed.ajaxCartUrl : null,
                                    ajaxClassSuffix: 'sidedrawer',
                                },
                            } only %}
                        {% endwidget %}
                    </li>
                {% endblock %}
            {% endembed %}
        </div>

        {{ block('close') }}
    </aside>
{% endblock %}
", "@@SprykerShop:ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}
