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

/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_c69058715eeaa945c699cbb84147cf43 extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'accountSidebar' => [$this, 'block_accountSidebar'],
            'outside' => [$this, 'block_outside'],
            'header' => [$this, 'block_header'],
            'container' => [$this, 'block_container'],
            'pageInfo' => [$this, 'block_pageInfo'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'title' => [$this, 'block_title'],
            'contentClass' => [$this, 'block_contentClass'],
            'content' => [$this, 'block_content'],
            'globalComponents' => [$this, 'block_globalComponents'],
            'footer' => [$this, 'block_footer'],
            'icons' => [$this, 'block_icons'],
            'notifications' => [$this, 'block_notifications'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("page-layout-main", "@SprykerShop:ShopUi"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["activePage" => ""], $context['data']);        // line 7
        $context["pageLoadingClassName"] = "page-loading";
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "js-page-layout-main__side-drawer-container ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageLoadingClassName"]) || array_key_exists("pageLoadingClassName", $context) ? $context["pageLoadingClassName"] : (function () { throw new RuntimeError('Variable "pageLoadingClassName" does not exist.', 9, $this->source); })()), "html", null, true);
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
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 27
        yield "
    ";
        // line 28
        yield from $this->unwrap()->yieldBlock('accountSidebar', $context, $blocks);
        // line 72
        yield "
    ";
        // line 73
        yield from $this->unwrap()->yieldBlock('outside', $context, $blocks);
        // line 74
        yield "
    ";
        // line 75
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 98
        yield "
    ";
        // line 99
        yield from $this->unwrap()->yieldBlock('container', $context, $blocks);
        // line 116
        yield "
    ";
        // line 117
        yield from $this->unwrap()->yieldBlock('globalComponents', $context, $blocks);
        // line 146
        yield "
    ";
        // line 147
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 163
        yield "
    ";
        // line 164
        yield from $this->unwrap()->yieldBlock('icons', $context, $blocks);
        // line 167
        yield "
    ";
        // line 168
        yield from $this->unwrap()->yieldBlock('notifications', $context, $blocks);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "        ";
        yield from         $this->loadTemplate("@ShopUi/templates/page-layout-main/page-layout-main.twig", "@ShopUi/templates/page-layout-main/page-layout-main.twig", 13, "111414724")->unwrap()->yield(CoreExtension::toArray(["class" => "is-hidden-lg-xl", "attributes" => ["container-selector" => "js-page-layout-main__side-drawer-container", "trigger-selector" => "js-page-layout-main__side-drawer-trigger"]]));
        // line 26
        yield "    ";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_accountSidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 30
            yield "            ";
            yield from             $this->loadTemplate("@ShopUi/templates/page-layout-main/page-layout-main.twig", "@ShopUi/templates/page-layout-main/page-layout-main.twig", 30, "1507593066")->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["right"], "class" => "is-hidden-lg-xl", "attributes" => ["container-selector" => "js-page-layout-main__side-drawer-container", "trigger-selector" => "js-page-layout-main__account-side-drawer-trigger"], "embed" => ["activePage" => CoreExtension::getAttribute($this->env, $this->source,             // line 38
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "activePage", [], "any", false, false, false, 38)]]));
            // line 70
            yield "        ";
        }
        // line 71
        yield "    ";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outside(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "        ";
        yield from         $this->loadTemplate("@ShopUi/templates/page-layout-main/page-layout-main.twig", "@ShopUi/templates/page-layout-main/page-layout-main.twig", 76, "1361695134")->unwrap()->yield(CoreExtension::toArray(["data" => ["isAjaxMode" => CoreExtension::getAttribute($this->env, $this->source,         // line 78
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 78, $this->source); })()), "isAjaxHeader", [], "any", false, false, false, 78), "ajaxCartUrl" => CoreExtension::getAttribute($this->env, $this->source,         // line 79
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 79, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 79)]]));
        // line 97
        yield "    ";
        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 100
        yield "        <div itemscope itemtype=\"https://schema.org/Product\" class=\"container\">
            ";
        // line 101
        yield from $this->unwrap()->yieldBlock('pageInfo', $context, $blocks);
        // line 110
        yield "
            <main class=\"";
        // line 111
        yield from $this->unwrap()->yieldBlock('contentClass', $context, $blocks);
        yield "\">
                ";
        // line 112
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 113
        yield "            </main>
        </div>
    ";
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageInfo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "                ";
        yield from $this->unwrap()->yieldBlock('breadcrumbs', $context, $blocks);
        // line 105
        yield "
                ";
        // line 106
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 109
        yield "            ";
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumbs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 103
        yield "                    ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breadcrumb"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 103)->unwrap()->yield([]);
        // line 104
        yield "                ";
        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 107
        yield "                    <h1 class=\"title title--main title--with-border title--medium\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 107, $this->source); })()), "title", [], "any", false, false, false, 107), "html", null, true);
        yield "</h1>
                ";
        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contentClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_globalComponents(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 118
        yield "        ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("action-single-click-enforcer"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 118)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["target-selector" => "[data-init-single-click]"]]));
        // line 123
        yield "
        ";
        // line 124
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("form-submitter"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 124)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["trigger-selector" => "[data-form-submitter]"]]));
        // line 129
        yield "
        ";
        // line 130
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("viewport-intersection-observer"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 130)->unwrap()->yield([]);
        // line 131
        yield "
        ";
        // line 132
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("node-animator"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 132)->unwrap()->yield([]);
        // line 133
        yield "
        ";
        // line 134
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("page-load-state"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 134)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["body-loading-class-name" =>         // line 136
(isset($context["pageLoadingClassName"]) || array_key_exists("pageLoadingClassName", $context) ? $context["pageLoadingClassName"] : (function () { throw new RuntimeError('Variable "pageLoadingClassName" does not exist.', 136, $this->source); })())]]));
        // line 139
        yield "
        ";
        // line 140
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("main-overlay"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 140)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["is-open" => CoreExtension::getAttribute($this->env, $this->source,         // line 142
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 142, $this->source); })()), "isOverlayOpen", [], "any", false, false, false, 142)]]));
        // line 145
        yield "    ";
        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 148
        yield "        ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-1')->setCmsSlotTemplatePath('@ShopUi/templates/page-layout-main/page-layout-main.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 149
        yield "
        ";
        // line 150
        yield from         $this->loadTemplate("@ShopUi/templates/page-layout-main/page-layout-main.twig", "@ShopUi/templates/page-layout-main/page-layout-main.twig", 150, "638281378")->unwrap()->yield([]);
        // line 162
        yield "    ";
        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 165
        yield "        ";
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon-sprite"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 165)->unwrap()->yield([]);
        // line 166
        yield "    ";
        yield from [];
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_notifications(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 169
        yield "        ";
        yield from         $this->loadTemplate($this->env->getFunction('organism')->getCallable()("notification-area"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 169)->unwrap()->yield([]);
        // line 170
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
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
        return array (  382 => 170,  379 => 169,  372 => 168,  367 => 166,  364 => 165,  357 => 164,  352 => 162,  350 => 150,  347 => 149,  345 => 148,  338 => 147,  333 => 145,  331 => 142,  330 => 140,  327 => 139,  325 => 136,  324 => 134,  321 => 133,  319 => 132,  316 => 131,  314 => 130,  311 => 129,  309 => 124,  306 => 123,  303 => 118,  296 => 117,  286 => 112,  276 => 111,  268 => 107,  261 => 106,  256 => 104,  253 => 103,  246 => 102,  241 => 109,  239 => 106,  236 => 105,  233 => 102,  226 => 101,  219 => 113,  217 => 112,  213 => 111,  210 => 110,  208 => 101,  205 => 100,  198 => 99,  193 => 97,  191 => 79,  190 => 78,  188 => 76,  181 => 75,  171 => 73,  166 => 71,  163 => 70,  161 => 38,  159 => 30,  156 => 29,  149 => 28,  144 => 26,  141 => 13,  134 => 12,  129 => 168,  126 => 167,  124 => 164,  121 => 163,  119 => 147,  116 => 146,  114 => 117,  111 => 116,  109 => 99,  106 => 98,  104 => 75,  101 => 74,  99 => 73,  96 => 72,  94 => 28,  91 => 27,  88 => 12,  81 => 11,  69 => 9,  65 => 1,  63 => 7,  62 => 3,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-main', '@SprykerShop:ShopUi') %}

{% define data = {
    activePage: ''
} %}

{% set pageLoadingClassName = 'page-loading' %}

{%- block class -%}js-page-layout-main__side-drawer-container {{ pageLoadingClassName }}{%- endblock -%}

{% block body %}
    {% block sidebar %}
        {% embed organism('side-drawer') with {
            class: 'is-hidden-lg-xl',
            attributes: {
                'container-selector': 'js-page-layout-main__side-drawer-container',
                'trigger-selector': 'js-page-layout-main__side-drawer-trigger'
            }
        } only %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% cms_slot 'slt-mobile-header' %}
                </div>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block accountSidebar %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% embed organism('side-drawer') with {
                modifiers: ['right'],
                class: 'is-hidden-lg-xl',
                attributes: {
                    'container-selector': 'js-page-layout-main__side-drawer-container',
                    'trigger-selector': 'js-page-layout-main__account-side-drawer-trigger'
                },
                embed: {
                    activePage: data.activePage
                }
            } only %}
                {% block topBar %}
                    {% set user = app['user'].customerTransfer ?? app['user'].userTransfer %}
                    <div class=\"col grid\">
                        <div class=\"col\">
                            {% include atom('icon') with {
                                modifiers: ['user-side-drawer'],
                                data: {
                                    name: 'user-account'
                                }
                            } only %}
                        </div>
                        <div class=\"col\">
                            {{ user.firstName }} {{ user.lastName }}
                        </div>
                    </div>
                {% endblock %}
                {% block content %}
                    <div class=\"{{config.name}}__navigation\">
                        {% widget 'CustomerNavigationWidget' args [embed.activePage] only %}
                            {% block body %}
                                {% define data = {
                                    modifiers: ['side-drawer']
                                } %}
                                {{ parent() }}
                            {% endblock %}
                        {% endwidget %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endif %}
    {% endblock %}

    {% block outside %}{% endblock %}

    {% block header %}
        {% embed organism('header') with {
            data: {
                isAjaxMode: data.isAjaxHeader,
                ajaxCartUrl: data.ajaxCartUrl,
            },
        } only %}
            {% block mainNavigation %}
                {% cms_slot 'slt-desktop-header' %}
            {% endblock %}

            {% block mobile %}
                <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                    {% include atom('icon') with {
                        modifiers: ['big'],
                        data: {
                            name: 'bars'
                        }
                    } only %}
                </a>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block container %}
        <div itemscope itemtype=\"https://schema.org/Product\" class=\"container\">
            {% block pageInfo %}
                {% block breadcrumbs %}
                    {% include molecule('breadcrumb') only %}
                {% endblock %}

                {% block title %}
                    <h1 class=\"title title--main title--with-border title--medium\">{{ data.title }}</h1>
                {% endblock %}
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block content %}{% endblock %}
            </main>
        </div>
    {% endblock %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('page-load-state') with {
            attributes: {
                'body-loading-class-name': pageLoadingClassName,
            },
        } only %}

        {% include molecule('main-overlay') with {
            attributes: {
                'is-open': data.isOverlayOpen,
            },
        } only %}
    {% endblock %}

    {% block footer %}
        {% cms_slot 'slt-1' %}

        {% embed organism('footer') only %}
            {% block footerNavigation %}
                {% embed molecule('navigation-footer') with {
                    class: config.name ~ '__navigation',
                    modifiers: ['content-item'],
                } only %}
                    {% block body %}
                        {% cms_slot 'slt-footer' %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}

    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}


/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_c69058715eeaa945c699cbb84147cf43___111414724 extends Template
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
            'mobileNavigation' => [$this, 'block_mobileNavigation'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 13
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("side-drawer"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mobileNavigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "                <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "__navigation\">
                    ";
        // line 22
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-mobile-header')->setCmsSlotTemplatePath('@ShopUi/templates/page-layout-main/page-layout-main.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 23
        yield "                </div>
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
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
        return array (  634 => 23,  633 => 22,  628 => 21,  621 => 20,  611 => 13,  382 => 170,  379 => 169,  372 => 168,  367 => 166,  364 => 165,  357 => 164,  352 => 162,  350 => 150,  347 => 149,  345 => 148,  338 => 147,  333 => 145,  331 => 142,  330 => 140,  327 => 139,  325 => 136,  324 => 134,  321 => 133,  319 => 132,  316 => 131,  314 => 130,  311 => 129,  309 => 124,  306 => 123,  303 => 118,  296 => 117,  286 => 112,  276 => 111,  268 => 107,  261 => 106,  256 => 104,  253 => 103,  246 => 102,  241 => 109,  239 => 106,  236 => 105,  233 => 102,  226 => 101,  219 => 113,  217 => 112,  213 => 111,  210 => 110,  208 => 101,  205 => 100,  198 => 99,  193 => 97,  191 => 79,  190 => 78,  188 => 76,  181 => 75,  171 => 73,  166 => 71,  163 => 70,  161 => 38,  159 => 30,  156 => 29,  149 => 28,  144 => 26,  141 => 13,  134 => 12,  129 => 168,  126 => 167,  124 => 164,  121 => 163,  119 => 147,  116 => 146,  114 => 117,  111 => 116,  109 => 99,  106 => 98,  104 => 75,  101 => 74,  99 => 73,  96 => 72,  94 => 28,  91 => 27,  88 => 12,  81 => 11,  69 => 9,  65 => 1,  63 => 7,  62 => 3,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-main', '@SprykerShop:ShopUi') %}

{% define data = {
    activePage: ''
} %}

{% set pageLoadingClassName = 'page-loading' %}

{%- block class -%}js-page-layout-main__side-drawer-container {{ pageLoadingClassName }}{%- endblock -%}

{% block body %}
    {% block sidebar %}
        {% embed organism('side-drawer') with {
            class: 'is-hidden-lg-xl',
            attributes: {
                'container-selector': 'js-page-layout-main__side-drawer-container',
                'trigger-selector': 'js-page-layout-main__side-drawer-trigger'
            }
        } only %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% cms_slot 'slt-mobile-header' %}
                </div>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block accountSidebar %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% embed organism('side-drawer') with {
                modifiers: ['right'],
                class: 'is-hidden-lg-xl',
                attributes: {
                    'container-selector': 'js-page-layout-main__side-drawer-container',
                    'trigger-selector': 'js-page-layout-main__account-side-drawer-trigger'
                },
                embed: {
                    activePage: data.activePage
                }
            } only %}
                {% block topBar %}
                    {% set user = app['user'].customerTransfer ?? app['user'].userTransfer %}
                    <div class=\"col grid\">
                        <div class=\"col\">
                            {% include atom('icon') with {
                                modifiers: ['user-side-drawer'],
                                data: {
                                    name: 'user-account'
                                }
                            } only %}
                        </div>
                        <div class=\"col\">
                            {{ user.firstName }} {{ user.lastName }}
                        </div>
                    </div>
                {% endblock %}
                {% block content %}
                    <div class=\"{{config.name}}__navigation\">
                        {% widget 'CustomerNavigationWidget' args [embed.activePage] only %}
                            {% block body %}
                                {% define data = {
                                    modifiers: ['side-drawer']
                                } %}
                                {{ parent() }}
                            {% endblock %}
                        {% endwidget %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endif %}
    {% endblock %}

    {% block outside %}{% endblock %}

    {% block header %}
        {% embed organism('header') with {
            data: {
                isAjaxMode: data.isAjaxHeader,
                ajaxCartUrl: data.ajaxCartUrl,
            },
        } only %}
            {% block mainNavigation %}
                {% cms_slot 'slt-desktop-header' %}
            {% endblock %}

            {% block mobile %}
                <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                    {% include atom('icon') with {
                        modifiers: ['big'],
                        data: {
                            name: 'bars'
                        }
                    } only %}
                </a>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block container %}
        <div itemscope itemtype=\"https://schema.org/Product\" class=\"container\">
            {% block pageInfo %}
                {% block breadcrumbs %}
                    {% include molecule('breadcrumb') only %}
                {% endblock %}

                {% block title %}
                    <h1 class=\"title title--main title--with-border title--medium\">{{ data.title }}</h1>
                {% endblock %}
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block content %}{% endblock %}
            </main>
        </div>
    {% endblock %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('page-load-state') with {
            attributes: {
                'body-loading-class-name': pageLoadingClassName,
            },
        } only %}

        {% include molecule('main-overlay') with {
            attributes: {
                'is-open': data.isOverlayOpen,
            },
        } only %}
    {% endblock %}

    {% block footer %}
        {% cms_slot 'slt-1' %}

        {% embed organism('footer') only %}
            {% block footerNavigation %}
                {% embed molecule('navigation-footer') with {
                    class: config.name ~ '__navigation',
                    modifiers: ['content-item'],
                } only %}
                    {% block body %}
                        {% cms_slot 'slt-footer' %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}

    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}


/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_c69058715eeaa945c699cbb84147cf43___1507593066 extends Template
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
            'topBar' => [$this, 'block_topBar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 30
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("side-drawer"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 30);
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
    public function block_topBar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "                    ";
        $context["user"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "array", false, true, false, 42), "customerTransfer", [], "any", true, true, false, 42) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "array", false, true, false, 42), "customerTransfer", [], "any", false, false, false, 42)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "array", false, true, false, 42), "customerTransfer", [], "any", false, false, false, 42)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "array", false, false, false, 42), "userTransfer", [], "any", false, false, false, 42)));
        // line 43
        yield "                    <div class=\"col grid\">
                        <div class=\"col\">
                            ";
        // line 45
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 45)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["user-side-drawer"], "data" => ["name" => "user-account"]]));
        // line 51
        yield "                        </div>
                        <div class=\"col\">
                            ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "firstName", [], "any", false, false, false, 53), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "lastName", [], "any", false, false, false, 53), "html", null, true);
        yield "
                        </div>
                    </div>
                ";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "                    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), "html", null, true);
        yield "__navigation\">
                        ";
        // line 59
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CustomerNavigationWidget", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 59, $this->source); })()), "activePage", [], "any", false, false, false, 59)])) {
            $this->loadTemplate("@ShopUi/templates/page-layout-main/page-layout-main.twig", "@ShopUi/templates/page-layout-main/page-layout-main.twig", 59, 267510029)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 67
        yield "                    </div>
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
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
        return array (  922 => 67,  918 => 59,  913 => 58,  906 => 57,  895 => 53,  891 => 51,  889 => 45,  885 => 43,  882 => 42,  875 => 41,  865 => 30,  634 => 23,  633 => 22,  628 => 21,  621 => 20,  611 => 13,  382 => 170,  379 => 169,  372 => 168,  367 => 166,  364 => 165,  357 => 164,  352 => 162,  350 => 150,  347 => 149,  345 => 148,  338 => 147,  333 => 145,  331 => 142,  330 => 140,  327 => 139,  325 => 136,  324 => 134,  321 => 133,  319 => 132,  316 => 131,  314 => 130,  311 => 129,  309 => 124,  306 => 123,  303 => 118,  296 => 117,  286 => 112,  276 => 111,  268 => 107,  261 => 106,  256 => 104,  253 => 103,  246 => 102,  241 => 109,  239 => 106,  236 => 105,  233 => 102,  226 => 101,  219 => 113,  217 => 112,  213 => 111,  210 => 110,  208 => 101,  205 => 100,  198 => 99,  193 => 97,  191 => 79,  190 => 78,  188 => 76,  181 => 75,  171 => 73,  166 => 71,  163 => 70,  161 => 38,  159 => 30,  156 => 29,  149 => 28,  144 => 26,  141 => 13,  134 => 12,  129 => 168,  126 => 167,  124 => 164,  121 => 163,  119 => 147,  116 => 146,  114 => 117,  111 => 116,  109 => 99,  106 => 98,  104 => 75,  101 => 74,  99 => 73,  96 => 72,  94 => 28,  91 => 27,  88 => 12,  81 => 11,  69 => 9,  65 => 1,  63 => 7,  62 => 3,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-main', '@SprykerShop:ShopUi') %}

{% define data = {
    activePage: ''
} %}

{% set pageLoadingClassName = 'page-loading' %}

{%- block class -%}js-page-layout-main__side-drawer-container {{ pageLoadingClassName }}{%- endblock -%}

{% block body %}
    {% block sidebar %}
        {% embed organism('side-drawer') with {
            class: 'is-hidden-lg-xl',
            attributes: {
                'container-selector': 'js-page-layout-main__side-drawer-container',
                'trigger-selector': 'js-page-layout-main__side-drawer-trigger'
            }
        } only %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% cms_slot 'slt-mobile-header' %}
                </div>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block accountSidebar %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% embed organism('side-drawer') with {
                modifiers: ['right'],
                class: 'is-hidden-lg-xl',
                attributes: {
                    'container-selector': 'js-page-layout-main__side-drawer-container',
                    'trigger-selector': 'js-page-layout-main__account-side-drawer-trigger'
                },
                embed: {
                    activePage: data.activePage
                }
            } only %}
                {% block topBar %}
                    {% set user = app['user'].customerTransfer ?? app['user'].userTransfer %}
                    <div class=\"col grid\">
                        <div class=\"col\">
                            {% include atom('icon') with {
                                modifiers: ['user-side-drawer'],
                                data: {
                                    name: 'user-account'
                                }
                            } only %}
                        </div>
                        <div class=\"col\">
                            {{ user.firstName }} {{ user.lastName }}
                        </div>
                    </div>
                {% endblock %}
                {% block content %}
                    <div class=\"{{config.name}}__navigation\">
                        {% widget 'CustomerNavigationWidget' args [embed.activePage] only %}
                            {% block body %}
                                {% define data = {
                                    modifiers: ['side-drawer']
                                } %}
                                {{ parent() }}
                            {% endblock %}
                        {% endwidget %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endif %}
    {% endblock %}

    {% block outside %}{% endblock %}

    {% block header %}
        {% embed organism('header') with {
            data: {
                isAjaxMode: data.isAjaxHeader,
                ajaxCartUrl: data.ajaxCartUrl,
            },
        } only %}
            {% block mainNavigation %}
                {% cms_slot 'slt-desktop-header' %}
            {% endblock %}

            {% block mobile %}
                <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                    {% include atom('icon') with {
                        modifiers: ['big'],
                        data: {
                            name: 'bars'
                        }
                    } only %}
                </a>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block container %}
        <div itemscope itemtype=\"https://schema.org/Product\" class=\"container\">
            {% block pageInfo %}
                {% block breadcrumbs %}
                    {% include molecule('breadcrumb') only %}
                {% endblock %}

                {% block title %}
                    <h1 class=\"title title--main title--with-border title--medium\">{{ data.title }}</h1>
                {% endblock %}
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block content %}{% endblock %}
            </main>
        </div>
    {% endblock %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('page-load-state') with {
            attributes: {
                'body-loading-class-name': pageLoadingClassName,
            },
        } only %}

        {% include molecule('main-overlay') with {
            attributes: {
                'is-open': data.isOverlayOpen,
            },
        } only %}
    {% endblock %}

    {% block footer %}
        {% cms_slot 'slt-1' %}

        {% embed organism('footer') only %}
            {% block footerNavigation %}
                {% embed molecule('navigation-footer') with {
                    class: config.name ~ '__navigation',
                    modifiers: ['content-item'],
                } only %}
                    {% block body %}
                        {% cms_slot 'slt-footer' %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}

    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}


/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_c69058715eeaa945c699cbb84147cf43___267510029 extends Template
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
        // line 59
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 59, $this->source); })()), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 59);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        yield "                                ";
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["modifiers" => ["side-drawer"]], $context['data']);        // line 64
        yield "                                ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
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
        return array (  1171 => 64,  1169 => 61,  1162 => 60,  1152 => 59,  922 => 67,  918 => 59,  913 => 58,  906 => 57,  895 => 53,  891 => 51,  889 => 45,  885 => 43,  882 => 42,  875 => 41,  865 => 30,  634 => 23,  633 => 22,  628 => 21,  621 => 20,  611 => 13,  382 => 170,  379 => 169,  372 => 168,  367 => 166,  364 => 165,  357 => 164,  352 => 162,  350 => 150,  347 => 149,  345 => 148,  338 => 147,  333 => 145,  331 => 142,  330 => 140,  327 => 139,  325 => 136,  324 => 134,  321 => 133,  319 => 132,  316 => 131,  314 => 130,  311 => 129,  309 => 124,  306 => 123,  303 => 118,  296 => 117,  286 => 112,  276 => 111,  268 => 107,  261 => 106,  256 => 104,  253 => 103,  246 => 102,  241 => 109,  239 => 106,  236 => 105,  233 => 102,  226 => 101,  219 => 113,  217 => 112,  213 => 111,  210 => 110,  208 => 101,  205 => 100,  198 => 99,  193 => 97,  191 => 79,  190 => 78,  188 => 76,  181 => 75,  171 => 73,  166 => 71,  163 => 70,  161 => 38,  159 => 30,  156 => 29,  149 => 28,  144 => 26,  141 => 13,  134 => 12,  129 => 168,  126 => 167,  124 => 164,  121 => 163,  119 => 147,  116 => 146,  114 => 117,  111 => 116,  109 => 99,  106 => 98,  104 => 75,  101 => 74,  99 => 73,  96 => 72,  94 => 28,  91 => 27,  88 => 12,  81 => 11,  69 => 9,  65 => 1,  63 => 7,  62 => 3,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-main', '@SprykerShop:ShopUi') %}

{% define data = {
    activePage: ''
} %}

{% set pageLoadingClassName = 'page-loading' %}

{%- block class -%}js-page-layout-main__side-drawer-container {{ pageLoadingClassName }}{%- endblock -%}

{% block body %}
    {% block sidebar %}
        {% embed organism('side-drawer') with {
            class: 'is-hidden-lg-xl',
            attributes: {
                'container-selector': 'js-page-layout-main__side-drawer-container',
                'trigger-selector': 'js-page-layout-main__side-drawer-trigger'
            }
        } only %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% cms_slot 'slt-mobile-header' %}
                </div>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block accountSidebar %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% embed organism('side-drawer') with {
                modifiers: ['right'],
                class: 'is-hidden-lg-xl',
                attributes: {
                    'container-selector': 'js-page-layout-main__side-drawer-container',
                    'trigger-selector': 'js-page-layout-main__account-side-drawer-trigger'
                },
                embed: {
                    activePage: data.activePage
                }
            } only %}
                {% block topBar %}
                    {% set user = app['user'].customerTransfer ?? app['user'].userTransfer %}
                    <div class=\"col grid\">
                        <div class=\"col\">
                            {% include atom('icon') with {
                                modifiers: ['user-side-drawer'],
                                data: {
                                    name: 'user-account'
                                }
                            } only %}
                        </div>
                        <div class=\"col\">
                            {{ user.firstName }} {{ user.lastName }}
                        </div>
                    </div>
                {% endblock %}
                {% block content %}
                    <div class=\"{{config.name}}__navigation\">
                        {% widget 'CustomerNavigationWidget' args [embed.activePage] only %}
                            {% block body %}
                                {% define data = {
                                    modifiers: ['side-drawer']
                                } %}
                                {{ parent() }}
                            {% endblock %}
                        {% endwidget %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endif %}
    {% endblock %}

    {% block outside %}{% endblock %}

    {% block header %}
        {% embed organism('header') with {
            data: {
                isAjaxMode: data.isAjaxHeader,
                ajaxCartUrl: data.ajaxCartUrl,
            },
        } only %}
            {% block mainNavigation %}
                {% cms_slot 'slt-desktop-header' %}
            {% endblock %}

            {% block mobile %}
                <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                    {% include atom('icon') with {
                        modifiers: ['big'],
                        data: {
                            name: 'bars'
                        }
                    } only %}
                </a>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block container %}
        <div itemscope itemtype=\"https://schema.org/Product\" class=\"container\">
            {% block pageInfo %}
                {% block breadcrumbs %}
                    {% include molecule('breadcrumb') only %}
                {% endblock %}

                {% block title %}
                    <h1 class=\"title title--main title--with-border title--medium\">{{ data.title }}</h1>
                {% endblock %}
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block content %}{% endblock %}
            </main>
        </div>
    {% endblock %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('page-load-state') with {
            attributes: {
                'body-loading-class-name': pageLoadingClassName,
            },
        } only %}

        {% include molecule('main-overlay') with {
            attributes: {
                'is-open': data.isOverlayOpen,
            },
        } only %}
    {% endblock %}

    {% block footer %}
        {% cms_slot 'slt-1' %}

        {% embed organism('footer') only %}
            {% block footerNavigation %}
                {% embed molecule('navigation-footer') with {
                    class: config.name ~ '__navigation',
                    modifiers: ['content-item'],
                } only %}
                    {% block body %}
                        {% cms_slot 'slt-footer' %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}

    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}


/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_c69058715eeaa945c699cbb84147cf43___1361695134 extends Template
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
            'mainNavigation' => [$this, 'block_mainNavigation'],
            'mobile' => [$this, 'block_mobile'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 76
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("header"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 76);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainNavigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        yield "                ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-desktop-header')->setCmsSlotTemplatePath('@ShopUi/templates/page-layout-main/page-layout-main.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 84
        yield "            ";
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mobile(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "                <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                    ";
        // line 88
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 88)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["big"], "data" => ["name" => "bars"]]));
        // line 94
        yield "                </a>
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
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
        return array (  1440 => 94,  1438 => 88,  1435 => 87,  1428 => 86,  1423 => 84,  1421 => 83,  1414 => 82,  1404 => 76,  1171 => 64,  1169 => 61,  1162 => 60,  1152 => 59,  922 => 67,  918 => 59,  913 => 58,  906 => 57,  895 => 53,  891 => 51,  889 => 45,  885 => 43,  882 => 42,  875 => 41,  865 => 30,  634 => 23,  633 => 22,  628 => 21,  621 => 20,  611 => 13,  382 => 170,  379 => 169,  372 => 168,  367 => 166,  364 => 165,  357 => 164,  352 => 162,  350 => 150,  347 => 149,  345 => 148,  338 => 147,  333 => 145,  331 => 142,  330 => 140,  327 => 139,  325 => 136,  324 => 134,  321 => 133,  319 => 132,  316 => 131,  314 => 130,  311 => 129,  309 => 124,  306 => 123,  303 => 118,  296 => 117,  286 => 112,  276 => 111,  268 => 107,  261 => 106,  256 => 104,  253 => 103,  246 => 102,  241 => 109,  239 => 106,  236 => 105,  233 => 102,  226 => 101,  219 => 113,  217 => 112,  213 => 111,  210 => 110,  208 => 101,  205 => 100,  198 => 99,  193 => 97,  191 => 79,  190 => 78,  188 => 76,  181 => 75,  171 => 73,  166 => 71,  163 => 70,  161 => 38,  159 => 30,  156 => 29,  149 => 28,  144 => 26,  141 => 13,  134 => 12,  129 => 168,  126 => 167,  124 => 164,  121 => 163,  119 => 147,  116 => 146,  114 => 117,  111 => 116,  109 => 99,  106 => 98,  104 => 75,  101 => 74,  99 => 73,  96 => 72,  94 => 28,  91 => 27,  88 => 12,  81 => 11,  69 => 9,  65 => 1,  63 => 7,  62 => 3,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-main', '@SprykerShop:ShopUi') %}

{% define data = {
    activePage: ''
} %}

{% set pageLoadingClassName = 'page-loading' %}

{%- block class -%}js-page-layout-main__side-drawer-container {{ pageLoadingClassName }}{%- endblock -%}

{% block body %}
    {% block sidebar %}
        {% embed organism('side-drawer') with {
            class: 'is-hidden-lg-xl',
            attributes: {
                'container-selector': 'js-page-layout-main__side-drawer-container',
                'trigger-selector': 'js-page-layout-main__side-drawer-trigger'
            }
        } only %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% cms_slot 'slt-mobile-header' %}
                </div>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block accountSidebar %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% embed organism('side-drawer') with {
                modifiers: ['right'],
                class: 'is-hidden-lg-xl',
                attributes: {
                    'container-selector': 'js-page-layout-main__side-drawer-container',
                    'trigger-selector': 'js-page-layout-main__account-side-drawer-trigger'
                },
                embed: {
                    activePage: data.activePage
                }
            } only %}
                {% block topBar %}
                    {% set user = app['user'].customerTransfer ?? app['user'].userTransfer %}
                    <div class=\"col grid\">
                        <div class=\"col\">
                            {% include atom('icon') with {
                                modifiers: ['user-side-drawer'],
                                data: {
                                    name: 'user-account'
                                }
                            } only %}
                        </div>
                        <div class=\"col\">
                            {{ user.firstName }} {{ user.lastName }}
                        </div>
                    </div>
                {% endblock %}
                {% block content %}
                    <div class=\"{{config.name}}__navigation\">
                        {% widget 'CustomerNavigationWidget' args [embed.activePage] only %}
                            {% block body %}
                                {% define data = {
                                    modifiers: ['side-drawer']
                                } %}
                                {{ parent() }}
                            {% endblock %}
                        {% endwidget %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endif %}
    {% endblock %}

    {% block outside %}{% endblock %}

    {% block header %}
        {% embed organism('header') with {
            data: {
                isAjaxMode: data.isAjaxHeader,
                ajaxCartUrl: data.ajaxCartUrl,
            },
        } only %}
            {% block mainNavigation %}
                {% cms_slot 'slt-desktop-header' %}
            {% endblock %}

            {% block mobile %}
                <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                    {% include atom('icon') with {
                        modifiers: ['big'],
                        data: {
                            name: 'bars'
                        }
                    } only %}
                </a>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block container %}
        <div itemscope itemtype=\"https://schema.org/Product\" class=\"container\">
            {% block pageInfo %}
                {% block breadcrumbs %}
                    {% include molecule('breadcrumb') only %}
                {% endblock %}

                {% block title %}
                    <h1 class=\"title title--main title--with-border title--medium\">{{ data.title }}</h1>
                {% endblock %}
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block content %}{% endblock %}
            </main>
        </div>
    {% endblock %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('page-load-state') with {
            attributes: {
                'body-loading-class-name': pageLoadingClassName,
            },
        } only %}

        {% include molecule('main-overlay') with {
            attributes: {
                'is-open': data.isOverlayOpen,
            },
        } only %}
    {% endblock %}

    {% block footer %}
        {% cms_slot 'slt-1' %}

        {% embed organism('footer') only %}
            {% block footerNavigation %}
                {% embed molecule('navigation-footer') with {
                    class: config.name ~ '__navigation',
                    modifiers: ['content-item'],
                } only %}
                    {% block body %}
                        {% cms_slot 'slt-footer' %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}

    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}


/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_c69058715eeaa945c699cbb84147cf43___638281378 extends Template
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
            'footerNavigation' => [$this, 'block_footerNavigation'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 150
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("footer"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 150);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footerNavigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 152
        yield "                ";
        yield from         $this->loadTemplate("@ShopUi/templates/page-layout-main/page-layout-main.twig", "@ShopUi/templates/page-layout-main/page-layout-main.twig", 152, "104653637")->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 153
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 153, $this->source); })()), "name", [], "any", false, false, false, 153) . "__navigation"), "modifiers" => ["content-item"]]));
        // line 160
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
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
        return array (  1691 => 160,  1689 => 153,  1687 => 152,  1680 => 151,  1670 => 150,  1440 => 94,  1438 => 88,  1435 => 87,  1428 => 86,  1423 => 84,  1421 => 83,  1414 => 82,  1404 => 76,  1171 => 64,  1169 => 61,  1162 => 60,  1152 => 59,  922 => 67,  918 => 59,  913 => 58,  906 => 57,  895 => 53,  891 => 51,  889 => 45,  885 => 43,  882 => 42,  875 => 41,  865 => 30,  634 => 23,  633 => 22,  628 => 21,  621 => 20,  611 => 13,  382 => 170,  379 => 169,  372 => 168,  367 => 166,  364 => 165,  357 => 164,  352 => 162,  350 => 150,  347 => 149,  345 => 148,  338 => 147,  333 => 145,  331 => 142,  330 => 140,  327 => 139,  325 => 136,  324 => 134,  321 => 133,  319 => 132,  316 => 131,  314 => 130,  311 => 129,  309 => 124,  306 => 123,  303 => 118,  296 => 117,  286 => 112,  276 => 111,  268 => 107,  261 => 106,  256 => 104,  253 => 103,  246 => 102,  241 => 109,  239 => 106,  236 => 105,  233 => 102,  226 => 101,  219 => 113,  217 => 112,  213 => 111,  210 => 110,  208 => 101,  205 => 100,  198 => 99,  193 => 97,  191 => 79,  190 => 78,  188 => 76,  181 => 75,  171 => 73,  166 => 71,  163 => 70,  161 => 38,  159 => 30,  156 => 29,  149 => 28,  144 => 26,  141 => 13,  134 => 12,  129 => 168,  126 => 167,  124 => 164,  121 => 163,  119 => 147,  116 => 146,  114 => 117,  111 => 116,  109 => 99,  106 => 98,  104 => 75,  101 => 74,  99 => 73,  96 => 72,  94 => 28,  91 => 27,  88 => 12,  81 => 11,  69 => 9,  65 => 1,  63 => 7,  62 => 3,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-main', '@SprykerShop:ShopUi') %}

{% define data = {
    activePage: ''
} %}

{% set pageLoadingClassName = 'page-loading' %}

{%- block class -%}js-page-layout-main__side-drawer-container {{ pageLoadingClassName }}{%- endblock -%}

{% block body %}
    {% block sidebar %}
        {% embed organism('side-drawer') with {
            class: 'is-hidden-lg-xl',
            attributes: {
                'container-selector': 'js-page-layout-main__side-drawer-container',
                'trigger-selector': 'js-page-layout-main__side-drawer-trigger'
            }
        } only %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% cms_slot 'slt-mobile-header' %}
                </div>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block accountSidebar %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% embed organism('side-drawer') with {
                modifiers: ['right'],
                class: 'is-hidden-lg-xl',
                attributes: {
                    'container-selector': 'js-page-layout-main__side-drawer-container',
                    'trigger-selector': 'js-page-layout-main__account-side-drawer-trigger'
                },
                embed: {
                    activePage: data.activePage
                }
            } only %}
                {% block topBar %}
                    {% set user = app['user'].customerTransfer ?? app['user'].userTransfer %}
                    <div class=\"col grid\">
                        <div class=\"col\">
                            {% include atom('icon') with {
                                modifiers: ['user-side-drawer'],
                                data: {
                                    name: 'user-account'
                                }
                            } only %}
                        </div>
                        <div class=\"col\">
                            {{ user.firstName }} {{ user.lastName }}
                        </div>
                    </div>
                {% endblock %}
                {% block content %}
                    <div class=\"{{config.name}}__navigation\">
                        {% widget 'CustomerNavigationWidget' args [embed.activePage] only %}
                            {% block body %}
                                {% define data = {
                                    modifiers: ['side-drawer']
                                } %}
                                {{ parent() }}
                            {% endblock %}
                        {% endwidget %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endif %}
    {% endblock %}

    {% block outside %}{% endblock %}

    {% block header %}
        {% embed organism('header') with {
            data: {
                isAjaxMode: data.isAjaxHeader,
                ajaxCartUrl: data.ajaxCartUrl,
            },
        } only %}
            {% block mainNavigation %}
                {% cms_slot 'slt-desktop-header' %}
            {% endblock %}

            {% block mobile %}
                <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                    {% include atom('icon') with {
                        modifiers: ['big'],
                        data: {
                            name: 'bars'
                        }
                    } only %}
                </a>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block container %}
        <div itemscope itemtype=\"https://schema.org/Product\" class=\"container\">
            {% block pageInfo %}
                {% block breadcrumbs %}
                    {% include molecule('breadcrumb') only %}
                {% endblock %}

                {% block title %}
                    <h1 class=\"title title--main title--with-border title--medium\">{{ data.title }}</h1>
                {% endblock %}
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block content %}{% endblock %}
            </main>
        </div>
    {% endblock %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('page-load-state') with {
            attributes: {
                'body-loading-class-name': pageLoadingClassName,
            },
        } only %}

        {% include molecule('main-overlay') with {
            attributes: {
                'is-open': data.isOverlayOpen,
            },
        } only %}
    {% endblock %}

    {% block footer %}
        {% cms_slot 'slt-1' %}

        {% embed organism('footer') only %}
            {% block footerNavigation %}
                {% embed molecule('navigation-footer') with {
                    class: config.name ~ '__navigation',
                    modifiers: ['content-item'],
                } only %}
                    {% block body %}
                        {% cms_slot 'slt-footer' %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}

    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}


/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_c69058715eeaa945c699cbb84147cf43___104653637 extends Template
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
        // line 152
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-footer"), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 152);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 156
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 157
        yield "                        ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-footer')->setCmsSlotTemplatePath('@ShopUi/templates/page-layout-main/page-layout-main.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 158
        yield "                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
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
        return array (  1939 => 158,  1937 => 157,  1930 => 156,  1920 => 152,  1691 => 160,  1689 => 153,  1687 => 152,  1680 => 151,  1670 => 150,  1440 => 94,  1438 => 88,  1435 => 87,  1428 => 86,  1423 => 84,  1421 => 83,  1414 => 82,  1404 => 76,  1171 => 64,  1169 => 61,  1162 => 60,  1152 => 59,  922 => 67,  918 => 59,  913 => 58,  906 => 57,  895 => 53,  891 => 51,  889 => 45,  885 => 43,  882 => 42,  875 => 41,  865 => 30,  634 => 23,  633 => 22,  628 => 21,  621 => 20,  611 => 13,  382 => 170,  379 => 169,  372 => 168,  367 => 166,  364 => 165,  357 => 164,  352 => 162,  350 => 150,  347 => 149,  345 => 148,  338 => 147,  333 => 145,  331 => 142,  330 => 140,  327 => 139,  325 => 136,  324 => 134,  321 => 133,  319 => 132,  316 => 131,  314 => 130,  311 => 129,  309 => 124,  306 => 123,  303 => 118,  296 => 117,  286 => 112,  276 => 111,  268 => 107,  261 => 106,  256 => 104,  253 => 103,  246 => 102,  241 => 109,  239 => 106,  236 => 105,  233 => 102,  226 => 101,  219 => 113,  217 => 112,  213 => 111,  210 => 110,  208 => 101,  205 => 100,  198 => 99,  193 => 97,  191 => 79,  190 => 78,  188 => 76,  181 => 75,  171 => 73,  166 => 71,  163 => 70,  161 => 38,  159 => 30,  156 => 29,  149 => 28,  144 => 26,  141 => 13,  134 => 12,  129 => 168,  126 => 167,  124 => 164,  121 => 163,  119 => 147,  116 => 146,  114 => 117,  111 => 116,  109 => 99,  106 => 98,  104 => 75,  101 => 74,  99 => 73,  96 => 72,  94 => 28,  91 => 27,  88 => 12,  81 => 11,  69 => 9,  65 => 1,  63 => 7,  62 => 3,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-main', '@SprykerShop:ShopUi') %}

{% define data = {
    activePage: ''
} %}

{% set pageLoadingClassName = 'page-loading' %}

{%- block class -%}js-page-layout-main__side-drawer-container {{ pageLoadingClassName }}{%- endblock -%}

{% block body %}
    {% block sidebar %}
        {% embed organism('side-drawer') with {
            class: 'is-hidden-lg-xl',
            attributes: {
                'container-selector': 'js-page-layout-main__side-drawer-container',
                'trigger-selector': 'js-page-layout-main__side-drawer-trigger'
            }
        } only %}
            {% block mobileNavigation %}
                <div class=\"{{ config.name }}__navigation\">
                    {% cms_slot 'slt-mobile-header' %}
                </div>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block accountSidebar %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {% embed organism('side-drawer') with {
                modifiers: ['right'],
                class: 'is-hidden-lg-xl',
                attributes: {
                    'container-selector': 'js-page-layout-main__side-drawer-container',
                    'trigger-selector': 'js-page-layout-main__account-side-drawer-trigger'
                },
                embed: {
                    activePage: data.activePage
                }
            } only %}
                {% block topBar %}
                    {% set user = app['user'].customerTransfer ?? app['user'].userTransfer %}
                    <div class=\"col grid\">
                        <div class=\"col\">
                            {% include atom('icon') with {
                                modifiers: ['user-side-drawer'],
                                data: {
                                    name: 'user-account'
                                }
                            } only %}
                        </div>
                        <div class=\"col\">
                            {{ user.firstName }} {{ user.lastName }}
                        </div>
                    </div>
                {% endblock %}
                {% block content %}
                    <div class=\"{{config.name}}__navigation\">
                        {% widget 'CustomerNavigationWidget' args [embed.activePage] only %}
                            {% block body %}
                                {% define data = {
                                    modifiers: ['side-drawer']
                                } %}
                                {{ parent() }}
                            {% endblock %}
                        {% endwidget %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endif %}
    {% endblock %}

    {% block outside %}{% endblock %}

    {% block header %}
        {% embed organism('header') with {
            data: {
                isAjaxMode: data.isAjaxHeader,
                ajaxCartUrl: data.ajaxCartUrl,
            },
        } only %}
            {% block mainNavigation %}
                {% cms_slot 'slt-desktop-header' %}
            {% endblock %}

            {% block mobile %}
                <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                    {% include atom('icon') with {
                        modifiers: ['big'],
                        data: {
                            name: 'bars'
                        }
                    } only %}
                </a>
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block container %}
        <div itemscope itemtype=\"https://schema.org/Product\" class=\"container\">
            {% block pageInfo %}
                {% block breadcrumbs %}
                    {% include molecule('breadcrumb') only %}
                {% endblock %}

                {% block title %}
                    <h1 class=\"title title--main title--with-border title--medium\">{{ data.title }}</h1>
                {% endblock %}
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block content %}{% endblock %}
            </main>
        </div>
    {% endblock %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('page-load-state') with {
            attributes: {
                'body-loading-class-name': pageLoadingClassName,
            },
        } only %}

        {% include molecule('main-overlay') with {
            attributes: {
                'is-open': data.isOverlayOpen,
            },
        } only %}
    {% endblock %}

    {% block footer %}
        {% cms_slot 'slt-1' %}

        {% embed organism('footer') only %}
            {% block footerNavigation %}
                {% embed molecule('navigation-footer') with {
                    class: config.name ~ '__navigation',
                    modifiers: ['content-item'],
                } only %}
                    {% block body %}
                        {% cms_slot 'slt-footer' %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}

    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}
