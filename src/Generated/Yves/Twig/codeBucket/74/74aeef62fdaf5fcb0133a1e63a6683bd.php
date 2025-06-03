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

/* @@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_0d3182dc8cd0b5a15ad7548df3d5068b extends Template
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
            'class' => [$this, 'block_class'],
            'body' => [$this, 'block_body'],
            'notifications' => [$this, 'block_notifications'],
            'sidebar' => [$this, 'block_sidebar'],
            'outside' => [$this, 'block_outside'],
            'header' => [$this, 'block_header'],
            'pageInfo' => [$this, 'block_pageInfo'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'globalComponents' => [$this, 'block_globalComponents'],
            'icons' => [$this, 'block_icons'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("page-blank"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["isOverlayOpen" => false, "isAjaxHeader" => false, "ajaxCartUrl" => ""], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "js-page-layout-main";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "    ";
        yield from $this->unwrap()->yieldBlock('notifications', $context, $blocks);
        // line 15
        yield "
    ";
        // line 16
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 29
        yield "
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('outside', $context, $blocks);
        // line 33
        yield "
    ";
        // line 34
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 53
        yield "
    <div class=\"container\">
        ";
        // line 55
        yield from $this->unwrap()->yieldBlock('pageInfo', $context, $blocks);
        // line 68
        yield "
        <main>
            ";
        // line 70
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 71
        yield "        </main>

        ";
        // line 73
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 76
        yield "    </div>

    ";
        // line 78
        yield from $this->unwrap()->yieldBlock('globalComponents', $context, $blocks);
        // line 106
        yield "
    ";
        // line 107
        yield from $this->unwrap()->yieldBlock('icons', $context, $blocks);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_notifications(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "        ";
        yield from         $this->loadTemplate($this->env->getFunction('organism')->getCallable()("notification-area"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 13)->unwrap()->yield([]);
        // line 14
        yield "    ";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "        ";
        yield from         $this->loadTemplate($this->env->getFunction('organism')->getCallable()("side-drawer"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 17)->unwrap()->yield(CoreExtension::toArray(["class" => "is-hidden-lg-xl", "data" => ["isAjaxMode" => CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "isAjaxHeader", [], "any", false, false, false, 20), "ajaxCartUrl" => CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 21)], "attributes" => ["container-selector" => "js-page-layout-main", "trigger-selector" => "js-page-layout-main__side-drawer-trigger"]]));
        // line 28
        yield "    ";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outside(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "        ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("outside-widgets"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 31)->unwrap()->yield([]);
        // line 32
        yield "    ";
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "        ";
        yield from         $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 35, "610545164")->unwrap()->yield(CoreExtension::toArray(["data" => ["isAjaxMode" => CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()), "isAjaxHeader", [], "any", false, false, false, 37), "ajaxCartUrl" => CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 38)]]));
        // line 52
        yield "    ";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageInfo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "            <div class=\"box\">
                ";
        // line 57
        yield from $this->unwrap()->yieldBlock('breadcrumbs', $context, $blocks);
        // line 60
        yield "
                <hr class=\"box__separator\">

                ";
        // line 63
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 66
        yield "            </div>
        ";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumbs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "                    ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breadcrumb"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 58)->unwrap()->yield([]);
        // line 59
        yield "                ";
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "                    <h1 class=\"title--h3\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "title", [], "any", false, false, false, 64), "html", null, true);
        yield "</h1>
                ";
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "            ";
        yield from         $this->loadTemplate($this->env->getFunction('organism')->getCallable()("footer"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 74)->unwrap()->yield([]);
        // line 75
        yield "        ";
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_globalComponents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 79
        yield "        ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("action-single-click-enforcer"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 79)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["target-selector" => "[data-init-single-click]"]]));
        // line 84
        yield "
        ";
        // line 85
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("form-input-default-value-disabler"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 85)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["form-selector" => "[data-init-default-value-form]", "input-selector" => "[data-default-value-disabler]"]]));
        // line 91
        yield "
        ";
        // line 92
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("form-submitter"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 92)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["trigger-selector" => "[data-form-submitter]"]]));
        // line 97
        yield "
        ";
        // line 98
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("viewport-intersection-observer"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 98)->unwrap()->yield([]);
        // line 99
        yield "
        ";
        // line 100
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("main-overlay"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 100)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["is-open" => CoreExtension::getAttribute($this->env, $this->source,         // line 102
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 102, $this->source); })()), "isOverlayOpen", [], "any", false, false, false, 102)]]));
        // line 105
        yield "    ";
        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 108
        yield "        ";
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon-sprite"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 108)->unwrap()->yield([]);
        // line 109
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig";
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
        return array (  322 => 109,  319 => 108,  312 => 107,  307 => 105,  305 => 102,  304 => 100,  301 => 99,  299 => 98,  296 => 97,  294 => 92,  291 => 91,  289 => 85,  286 => 84,  283 => 79,  276 => 78,  271 => 75,  268 => 74,  261 => 73,  251 => 70,  243 => 64,  236 => 63,  231 => 59,  228 => 58,  221 => 57,  215 => 66,  213 => 63,  208 => 60,  206 => 57,  203 => 56,  196 => 55,  191 => 52,  189 => 38,  188 => 37,  186 => 35,  179 => 34,  174 => 32,  171 => 31,  164 => 30,  159 => 28,  157 => 21,  156 => 20,  154 => 17,  147 => 16,  142 => 14,  139 => 13,  132 => 12,  127 => 107,  124 => 106,  122 => 78,  118 => 76,  116 => 73,  112 => 71,  110 => 70,  106 => 68,  104 => 55,  100 => 53,  98 => 34,  95 => 33,  93 => 30,  90 => 29,  88 => 16,  85 => 15,  82 => 12,  75 => 11,  64 => 9,  60 => 1,  59 => 3,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-blank') %}

{% define data = {
    isOverlayOpen: false,
    isAjaxHeader: false,
    ajaxCartUrl: '',
} %}

{%- block class -%}js-page-layout-main{%- endblock -%}

{% block body %}
    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}

    {% block sidebar %}
        {% include organism('side-drawer') with {
            class: 'is-hidden-lg-xl',
            data: {
                isAjaxMode: data.isAjaxHeader,
                ajaxCartUrl: data.ajaxCartUrl,
            },
            attributes: {
                'container-selector': 'js-page-layout-main',
                'trigger-selector': 'js-page-layout-main__side-drawer-trigger',
            },
        } only %}
    {% endblock %}

    {% block outside %}
        {% include molecule('outside-widgets') only %}
    {% endblock %}

    {% block header %}
        {% embed organism('header') with {
            data: {
                isAjaxMode: data.isAjaxHeader,
                ajaxCartUrl: data.ajaxCartUrl,
            },
        } only %}
            {% block mobile %}
                <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                    {% include atom('icon') with {
                        modifiers: ['big'],
                        data: {
                            name: 'bars',
                        },
                    } only %}
                </a>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    <div class=\"container\">
        {% block pageInfo %}
            <div class=\"box\">
                {% block breadcrumbs %}
                    {% include molecule('breadcrumb') only %}
                {% endblock %}

                <hr class=\"box__separator\">

                {% block title %}
                    <h1 class=\"title--h3\">{{ data.title }}</h1>
                {% endblock %}
            </div>
        {% endblock %}

        <main>
            {% block content %}{% endblock %}
        </main>

        {% block footer %}
            {% include organism('footer') only %}
        {% endblock %}
    </div>

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-input-default-value-disabler') with {
            attributes: {
                'form-selector': '[data-init-default-value-form]',
                'input-selector': '[data-default-value-disabler]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('main-overlay') with {
            attributes: {
                'is-open': data.isOverlayOpen,
            },
        } only %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_0d3182dc8cd0b5a15ad7548df3d5068b___610545164 extends Template
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
            'mobile' => [$this, 'block_mobile'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 35
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("header"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 35);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mobile(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "                <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                    ";
        // line 43
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", 43)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["big"], "data" => ["name" => "bars"]]));
        // line 49
        yield "                </a>
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig";
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
        return array (  512 => 49,  510 => 43,  507 => 42,  500 => 41,  490 => 35,  322 => 109,  319 => 108,  312 => 107,  307 => 105,  305 => 102,  304 => 100,  301 => 99,  299 => 98,  296 => 97,  294 => 92,  291 => 91,  289 => 85,  286 => 84,  283 => 79,  276 => 78,  271 => 75,  268 => 74,  261 => 73,  251 => 70,  243 => 64,  236 => 63,  231 => 59,  228 => 58,  221 => 57,  215 => 66,  213 => 63,  208 => 60,  206 => 57,  203 => 56,  196 => 55,  191 => 52,  189 => 38,  188 => 37,  186 => 35,  179 => 34,  174 => 32,  171 => 31,  164 => 30,  159 => 28,  157 => 21,  156 => 20,  154 => 17,  147 => 16,  142 => 14,  139 => 13,  132 => 12,  127 => 107,  124 => 106,  122 => 78,  118 => 76,  116 => 73,  112 => 71,  110 => 70,  106 => 68,  104 => 55,  100 => 53,  98 => 34,  95 => 33,  93 => 30,  90 => 29,  88 => 16,  85 => 15,  82 => 12,  75 => 11,  64 => 9,  60 => 1,  59 => 3,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-blank') %}

{% define data = {
    isOverlayOpen: false,
    isAjaxHeader: false,
    ajaxCartUrl: '',
} %}

{%- block class -%}js-page-layout-main{%- endblock -%}

{% block body %}
    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}

    {% block sidebar %}
        {% include organism('side-drawer') with {
            class: 'is-hidden-lg-xl',
            data: {
                isAjaxMode: data.isAjaxHeader,
                ajaxCartUrl: data.ajaxCartUrl,
            },
            attributes: {
                'container-selector': 'js-page-layout-main',
                'trigger-selector': 'js-page-layout-main__side-drawer-trigger',
            },
        } only %}
    {% endblock %}

    {% block outside %}
        {% include molecule('outside-widgets') only %}
    {% endblock %}

    {% block header %}
        {% embed organism('header') with {
            data: {
                isAjaxMode: data.isAjaxHeader,
                ajaxCartUrl: data.ajaxCartUrl,
            },
        } only %}
            {% block mobile %}
                <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                    {% include atom('icon') with {
                        modifiers: ['big'],
                        data: {
                            name: 'bars',
                        },
                    } only %}
                </a>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    <div class=\"container\">
        {% block pageInfo %}
            <div class=\"box\">
                {% block breadcrumbs %}
                    {% include molecule('breadcrumb') only %}
                {% endblock %}

                <hr class=\"box__separator\">

                {% block title %}
                    <h1 class=\"title--h3\">{{ data.title }}</h1>
                {% endblock %}
            </div>
        {% endblock %}

        <main>
            {% block content %}{% endblock %}
        </main>

        {% block footer %}
            {% include organism('footer') only %}
        {% endblock %}
    </div>

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-input-default-value-disabler') with {
            attributes: {
                'form-selector': '[data-init-default-value-form]',
                'input-selector': '[data-default-value-disabler]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('main-overlay') with {
            attributes: {
                'is-open': data.isOverlayOpen,
            },
        } only %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}
