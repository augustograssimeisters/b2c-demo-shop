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

/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_e45da66841e33e7516e9642ac7f21909 extends Template
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
            'topBar' => [$this, 'block_topBar'],
            'close' => [$this, 'block_close'],
            'content' => [$this, 'block_content'],
            'mobileNavigation' => [$this, 'block_mobileNavigation'],
            'bottomBar' => [$this, 'block_bottomBar'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("side-drawer", "@SprykerShop:ShopUi"), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["overlay-class-name" => "main-overlay", "should-close-by-overlay-click" => true], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    <aside class=\"";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10) . "__drawer"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 10, $this->source); })())], 10, $context, $this->getSourceContext());
        yield "\">
        <div class=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        yield "__top-bar grid grid--justify\">
            ";
        // line 12
        yield from $this->unwrap()->yieldBlock('topBar', $context, $blocks);
        // line 41
        yield "
            ";
        // line 42
        yield from $this->unwrap()->yieldBlock('close', $context, $blocks);
        // line 52
        yield "        </div>

        ";
        // line 54
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 61
        yield "
        ";
        // line 62
        yield from $this->unwrap()->yieldBlock('bottomBar', $context, $blocks);
        // line 71
        yield "    </aside>
";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_topBar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "                <div class=\"col grid\">
                    <div class=\"col\">
                        ";
        // line 15
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("LanguageSwitcherWidget", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "pathInfo", [], "any", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "queryString", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "requestUri", [], "any", false, false, false, 18)])) {
            $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 15, 1386102843)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["additionalModifiers" => ["hollow", "header", "side-drawer"]]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 24
        yield "                    </div>
                    <div class=\"col\">";
        // line 26
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CurrencyWidget")) {
            $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 26, 1757170191)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["additionalModifiers" => ["hollow", "header", "side-drawer"]]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 31
        yield "</div>
                    <div class=\"col\">";
        // line 33
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("StoreSwitcher")) {
            $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 33, 1344741342)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["additionalModifiers" => ["hollow", "header", "side-drawer"]]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 38
        yield "</div>
                </div>
            ";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "                <button class=\"col link ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        yield "__close ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 43, $this->source); })()), "trigger-selector", [], "array", false, false, false, 43), "html", null, true);
        yield "\">
                    ";
        // line 44
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 44)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["medium-up"], "data" => ["name" => "close"]]));
        // line 50
        yield "                </button>
            ";
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "            ";
        yield from $this->unwrap()->yieldBlock('mobileNavigation', $context, $blocks);
        // line 60
        yield "        ";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mobileNavigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "                <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "html", null, true);
        yield "__navigation\">
                    ";
        // line 57
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("NavigationWidget", ["MAIN_NAVIGATION", "navigation-header-mobile"])) {
            $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 57, 1453952887)->display(array_merge($context, array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget))));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 58
        yield "                </div>
            ";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottomBar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "            <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), "html", null, true);
        yield "__bottom-bar\">
                ";
        // line 64
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 65
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
            yield "\" class=\"button button--hollow button--expand\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.logout"), "html", null, true);
            yield "</a>
                ";
        } else {
            // line 67
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
            yield "\" class=\"button button--expand\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.login"), "html", null, true);
            yield "</a>
                ";
        }
        // line 69
        yield "            </div>
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
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
        return array (  227 => 69,  219 => 67,  211 => 65,  209 => 64,  204 => 63,  197 => 62,  191 => 58,  187 => 57,  182 => 56,  175 => 55,  170 => 60,  167 => 55,  160 => 54,  154 => 50,  152 => 44,  145 => 43,  138 => 42,  131 => 38,  127 => 33,  124 => 31,  120 => 26,  117 => 24,  113 => 18,  112 => 17,  111 => 16,  110 => 15,  106 => 13,  99 => 12,  93 => 71,  91 => 62,  88 => 61,  86 => 54,  82 => 52,  80 => 42,  77 => 41,  75 => 12,  71 => 11,  66 => 10,  59 => 9,  55 => 1,  54 => 4,  52 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends organism('side-drawer', '@SprykerShop:ShopUi') %}
{% import _self as component %}

{% define attributes = {
    'overlay-class-name': 'main-overlay',
    'should-close-by-overlay-click': true,
} %}

{% block body %}
    <aside class=\"{{ component.renderClass(config.name ~ '__drawer', modifiers) }}\">
        <div class=\"{{ config.name }}__top-bar grid grid--justify\">
            {% block topBar %}
                <div class=\"col grid\">
                    <div class=\"col\">
                        {% widget 'LanguageSwitcherWidget' args [
                            app.request.pathInfo,
                            app.request.queryString,
                            app.request.requestUri
                        ] with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only %}{% endwidget %}
                    </div>
                    <div class=\"col\">
                        {%- widget 'CurrencyWidget' with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only -%}{%- endwidget -%}
                    </div>
                    <div class=\"col\">
                        {%- widget 'StoreSwitcher' with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only -%}{%- endwidget -%}
                    </div>
                </div>
            {% endblock %}

            {% block close %}
                <button class=\"col link {{ config.name }}__close {{ attributes['trigger-selector'] }}\">
                    {% include atom('icon') with {
                        modifiers: ['medium-up'],
                        data: {
                            name: 'close',
                        },
                    } only %}
                </button>
            {% endblock %}
        </div>

        {% block content %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-header-mobile'] %}{% endwidget %}
                </div>
            {% endblock %}
        {% endblock %}

        {% block bottomBar %}
            <div class=\"{{ config.name }}__bottom-bar\">
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% else %}
                    <a href=\"{{ url('login') }}\" class=\"button button--expand\">{{ 'global.login' | trans }}</a>
                {% endif %}
            </div>
        {% endblock %}
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_e45da66841e33e7516e9642ac7f21909___1386102843 extends Template
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
        // line 15
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 15, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 15);
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
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
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
        return array (  357 => 15,  227 => 69,  219 => 67,  211 => 65,  209 => 64,  204 => 63,  197 => 62,  191 => 58,  187 => 57,  182 => 56,  175 => 55,  170 => 60,  167 => 55,  160 => 54,  154 => 50,  152 => 44,  145 => 43,  138 => 42,  131 => 38,  127 => 33,  124 => 31,  120 => 26,  117 => 24,  113 => 18,  112 => 17,  111 => 16,  110 => 15,  106 => 13,  99 => 12,  93 => 71,  91 => 62,  88 => 61,  86 => 54,  82 => 52,  80 => 42,  77 => 41,  75 => 12,  71 => 11,  66 => 10,  59 => 9,  55 => 1,  54 => 4,  52 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends organism('side-drawer', '@SprykerShop:ShopUi') %}
{% import _self as component %}

{% define attributes = {
    'overlay-class-name': 'main-overlay',
    'should-close-by-overlay-click': true,
} %}

{% block body %}
    <aside class=\"{{ component.renderClass(config.name ~ '__drawer', modifiers) }}\">
        <div class=\"{{ config.name }}__top-bar grid grid--justify\">
            {% block topBar %}
                <div class=\"col grid\">
                    <div class=\"col\">
                        {% widget 'LanguageSwitcherWidget' args [
                            app.request.pathInfo,
                            app.request.queryString,
                            app.request.requestUri
                        ] with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only %}{% endwidget %}
                    </div>
                    <div class=\"col\">
                        {%- widget 'CurrencyWidget' with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only -%}{%- endwidget -%}
                    </div>
                    <div class=\"col\">
                        {%- widget 'StoreSwitcher' with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only -%}{%- endwidget -%}
                    </div>
                </div>
            {% endblock %}

            {% block close %}
                <button class=\"col link {{ config.name }}__close {{ attributes['trigger-selector'] }}\">
                    {% include atom('icon') with {
                        modifiers: ['medium-up'],
                        data: {
                            name: 'close',
                        },
                    } only %}
                </button>
            {% endblock %}
        </div>

        {% block content %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-header-mobile'] %}{% endwidget %}
                </div>
            {% endblock %}
        {% endblock %}

        {% block bottomBar %}
            <div class=\"{{ config.name }}__bottom-bar\">
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% else %}
                    <a href=\"{{ url('login') }}\" class=\"button button--expand\">{{ 'global.login' | trans }}</a>
                {% endif %}
            </div>
        {% endblock %}
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_e45da66841e33e7516e9642ac7f21909___1757170191 extends Template
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
        // line 26
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 26, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 26);
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
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
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
        return array (  491 => 26,  357 => 15,  227 => 69,  219 => 67,  211 => 65,  209 => 64,  204 => 63,  197 => 62,  191 => 58,  187 => 57,  182 => 56,  175 => 55,  170 => 60,  167 => 55,  160 => 54,  154 => 50,  152 => 44,  145 => 43,  138 => 42,  131 => 38,  127 => 33,  124 => 31,  120 => 26,  117 => 24,  113 => 18,  112 => 17,  111 => 16,  110 => 15,  106 => 13,  99 => 12,  93 => 71,  91 => 62,  88 => 61,  86 => 54,  82 => 52,  80 => 42,  77 => 41,  75 => 12,  71 => 11,  66 => 10,  59 => 9,  55 => 1,  54 => 4,  52 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends organism('side-drawer', '@SprykerShop:ShopUi') %}
{% import _self as component %}

{% define attributes = {
    'overlay-class-name': 'main-overlay',
    'should-close-by-overlay-click': true,
} %}

{% block body %}
    <aside class=\"{{ component.renderClass(config.name ~ '__drawer', modifiers) }}\">
        <div class=\"{{ config.name }}__top-bar grid grid--justify\">
            {% block topBar %}
                <div class=\"col grid\">
                    <div class=\"col\">
                        {% widget 'LanguageSwitcherWidget' args [
                            app.request.pathInfo,
                            app.request.queryString,
                            app.request.requestUri
                        ] with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only %}{% endwidget %}
                    </div>
                    <div class=\"col\">
                        {%- widget 'CurrencyWidget' with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only -%}{%- endwidget -%}
                    </div>
                    <div class=\"col\">
                        {%- widget 'StoreSwitcher' with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only -%}{%- endwidget -%}
                    </div>
                </div>
            {% endblock %}

            {% block close %}
                <button class=\"col link {{ config.name }}__close {{ attributes['trigger-selector'] }}\">
                    {% include atom('icon') with {
                        modifiers: ['medium-up'],
                        data: {
                            name: 'close',
                        },
                    } only %}
                </button>
            {% endblock %}
        </div>

        {% block content %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-header-mobile'] %}{% endwidget %}
                </div>
            {% endblock %}
        {% endblock %}

        {% block bottomBar %}
            <div class=\"{{ config.name }}__bottom-bar\">
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% else %}
                    <a href=\"{{ url('login') }}\" class=\"button button--expand\">{{ 'global.login' | trans }}</a>
                {% endif %}
            </div>
        {% endblock %}
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_e45da66841e33e7516e9642ac7f21909___1344741342 extends Template
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
        // line 33
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 33, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 33);
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
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
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
        return array (  625 => 33,  491 => 26,  357 => 15,  227 => 69,  219 => 67,  211 => 65,  209 => 64,  204 => 63,  197 => 62,  191 => 58,  187 => 57,  182 => 56,  175 => 55,  170 => 60,  167 => 55,  160 => 54,  154 => 50,  152 => 44,  145 => 43,  138 => 42,  131 => 38,  127 => 33,  124 => 31,  120 => 26,  117 => 24,  113 => 18,  112 => 17,  111 => 16,  110 => 15,  106 => 13,  99 => 12,  93 => 71,  91 => 62,  88 => 61,  86 => 54,  82 => 52,  80 => 42,  77 => 41,  75 => 12,  71 => 11,  66 => 10,  59 => 9,  55 => 1,  54 => 4,  52 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends organism('side-drawer', '@SprykerShop:ShopUi') %}
{% import _self as component %}

{% define attributes = {
    'overlay-class-name': 'main-overlay',
    'should-close-by-overlay-click': true,
} %}

{% block body %}
    <aside class=\"{{ component.renderClass(config.name ~ '__drawer', modifiers) }}\">
        <div class=\"{{ config.name }}__top-bar grid grid--justify\">
            {% block topBar %}
                <div class=\"col grid\">
                    <div class=\"col\">
                        {% widget 'LanguageSwitcherWidget' args [
                            app.request.pathInfo,
                            app.request.queryString,
                            app.request.requestUri
                        ] with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only %}{% endwidget %}
                    </div>
                    <div class=\"col\">
                        {%- widget 'CurrencyWidget' with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only -%}{%- endwidget -%}
                    </div>
                    <div class=\"col\">
                        {%- widget 'StoreSwitcher' with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only -%}{%- endwidget -%}
                    </div>
                </div>
            {% endblock %}

            {% block close %}
                <button class=\"col link {{ config.name }}__close {{ attributes['trigger-selector'] }}\">
                    {% include atom('icon') with {
                        modifiers: ['medium-up'],
                        data: {
                            name: 'close',
                        },
                    } only %}
                </button>
            {% endblock %}
        </div>

        {% block content %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-header-mobile'] %}{% endwidget %}
                </div>
            {% endblock %}
        {% endblock %}

        {% block bottomBar %}
            <div class=\"{{ config.name }}__bottom-bar\">
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% else %}
                    <a href=\"{{ url('login') }}\" class=\"button button--expand\">{{ 'global.login' | trans }}</a>
                {% endif %}
            </div>
        {% endblock %}
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_e45da66841e33e7516e9642ac7f21909___1453952887 extends Template
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
        // line 57
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 57, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 57);
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
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
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
        return array (  759 => 57,  625 => 33,  491 => 26,  357 => 15,  227 => 69,  219 => 67,  211 => 65,  209 => 64,  204 => 63,  197 => 62,  191 => 58,  187 => 57,  182 => 56,  175 => 55,  170 => 60,  167 => 55,  160 => 54,  154 => 50,  152 => 44,  145 => 43,  138 => 42,  131 => 38,  127 => 33,  124 => 31,  120 => 26,  117 => 24,  113 => 18,  112 => 17,  111 => 16,  110 => 15,  106 => 13,  99 => 12,  93 => 71,  91 => 62,  88 => 61,  86 => 54,  82 => 52,  80 => 42,  77 => 41,  75 => 12,  71 => 11,  66 => 10,  59 => 9,  55 => 1,  54 => 4,  52 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends organism('side-drawer', '@SprykerShop:ShopUi') %}
{% import _self as component %}

{% define attributes = {
    'overlay-class-name': 'main-overlay',
    'should-close-by-overlay-click': true,
} %}

{% block body %}
    <aside class=\"{{ component.renderClass(config.name ~ '__drawer', modifiers) }}\">
        <div class=\"{{ config.name }}__top-bar grid grid--justify\">
            {% block topBar %}
                <div class=\"col grid\">
                    <div class=\"col\">
                        {% widget 'LanguageSwitcherWidget' args [
                            app.request.pathInfo,
                            app.request.queryString,
                            app.request.requestUri
                        ] with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only %}{% endwidget %}
                    </div>
                    <div class=\"col\">
                        {%- widget 'CurrencyWidget' with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only -%}{%- endwidget -%}
                    </div>
                    <div class=\"col\">
                        {%- widget 'StoreSwitcher' with {
                            data: {
                                additionalModifiers: ['hollow', 'header', 'side-drawer'],
                            },
                        } only -%}{%- endwidget -%}
                    </div>
                </div>
            {% endblock %}

            {% block close %}
                <button class=\"col link {{ config.name }}__close {{ attributes['trigger-selector'] }}\">
                    {% include atom('icon') with {
                        modifiers: ['medium-up'],
                        data: {
                            name: 'close',
                        },
                    } only %}
                </button>
            {% endblock %}
        </div>

        {% block content %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-header-mobile'] %}{% endwidget %}
                </div>
            {% endblock %}
        {% endblock %}

        {% block bottomBar %}
            <div class=\"{{ config.name }}__bottom-bar\">
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% else %}
                    <a href=\"{{ url('login') }}\" class=\"button button--expand\">{{ 'global.login' | trans }}</a>
                {% endif %}
            </div>
        {% endblock %}
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}
