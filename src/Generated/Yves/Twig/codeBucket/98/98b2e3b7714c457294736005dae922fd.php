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

/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_cfb3ea6c6ce912079dc7927be51cd2c2 extends Template
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
            'additionalLink' => [$this, 'block_additionalLink'],
            'mainNavigation' => [$this, 'block_mainNavigation'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/organisms/header/header.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "header", "tag" => "header"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["showSearchForm" => true, "showNavigation" => true, "isAjaxMode" => false, "ajaxCartUrl" => ""], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "    ";
        $context["benefits"] = ["global.benefit.free_returns", "global.benefit.warranty", "global.benefit.competitive_prices"];
        // line 21
        yield "
    ";
        // line 22
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AgentControlBarWidget")) {
            $this->loadTemplate("@ShopUi/components/organisms/header/header.twig", "@ShopUi/components/organisms/header/header.twig", 22, 585479458)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 23
        yield "
    <div class=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        yield "__top\">
        <div class=\"container grid grid--justify\">
            ";
        // line 26
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("panel-info"), "@ShopUi/components/organisms/header/header.twig", 26)->unwrap()->yield(CoreExtension::toArray(["class" => "grid grid--justify", "data" => ["info" =>         // line 29
(isset($context["benefits"]) || array_key_exists("benefits", $context) ? $context["benefits"] : (function () { throw new RuntimeError('Variable "benefits" does not exist.', 29, $this->source); })())]]));
        // line 32
        yield "
            <div class=\"col ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        yield "__currency-lang\">
                ";
        // line 34
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("LanguageSwitcherWidget", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "pathInfo", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 36
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "queryString", [], "any", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "requestUri", [], "any", false, false, false, 37)])) {
            $this->loadTemplate("@ShopUi/components/organisms/header/header.twig", "@ShopUi/components/organisms/header/header.twig", 34, 983109123)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["additionalClassName" => CoreExtension::getAttribute($this->env, $this->source,             // line 40
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40)], "embed" => ["parentConfigName" => CoreExtension::getAttribute($this->env, $this->source,             // line 43
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 53
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CurrencyWidget")) {
            $this->loadTemplate("@ShopUi/components/organisms/header/header.twig", "@ShopUi/components/organisms/header/header.twig", 53, 619344024)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["additionalClassName" => CoreExtension::getAttribute($this->env, $this->source,             // line 55
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55)], "embed" => ["parentConfigName" => CoreExtension::getAttribute($this->env, $this->source,             // line 58
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 68
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("StoreSwitcher")) {
            $this->loadTemplate("@ShopUi/components/organisms/header/header.twig", "@ShopUi/components/organisms/header/header.twig", 68, 1792734603)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["additionalClassName" => CoreExtension::getAttribute($this->env, $this->source,             // line 70
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70)], "embed" => ["parentConfigName" => CoreExtension::getAttribute($this->env, $this->source,             // line 73
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 82
        yield "            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
        yield "__search-wrapper js-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
        yield "__search-wrapper\">
            <div class=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88), "html", null, true);
        yield "__search\">
                <div class=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), "html", null, true);
        yield "__search-close js-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), "html", null, true);
        yield "__search-close\">
                    ";
        // line 90
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/organisms/header/header.twig", 90)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 91
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 91, $this->source); })()), "name", [], "any", false, false, false, 91) . "__search-close-icon"), "data" => ["name" => "close"]]));
        // line 96
        yield "                </div>

                ";
        // line 98
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 98, $this->source); })()), "showSearchForm", [], "any", false, false, false, 98)) {
            // line 99
            yield "                    ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("search-form"), "@ShopUi/components/organisms/header/header.twig", 99)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["data-search-id" => "desktop", "wrapper-class-name" => (("js-" . CoreExtension::getAttribute($this->env, $this->source,             // line 102
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 102, $this->source); })()), "name", [], "any", false, false, false, 102)) . "__search-wrapper"), "close-class-name" => (("js-" . CoreExtension::getAttribute($this->env, $this->source,             // line 103
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 103, $this->source); })()), "name", [], "any", false, false, false, 103)) . "__search-close"), "open-class-name" => (("js-" . CoreExtension::getAttribute($this->env, $this->source,             // line 104
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 104, $this->source); })()), "name", [], "any", false, false, false, 104)) . "__search-open"), "wrapper-toggle-class-name" => (CoreExtension::getAttribute($this->env, $this->source,             // line 105
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105) . "__search-wrapper-active")]]));
            // line 108
            yield "                ";
        }
        // line 109
        yield "            </div>
        </div>

        ";
        // line 112
        yield from $this->unwrap()->yieldBlock('additionalLink', $context, $blocks);
        // line 113
        yield "
        <div class=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 114, $this->source); })()), "name", [], "any", false, false, false, 114), "html", null, true);
        yield "__row ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 114, $this->source); })()), "name", [], "any", false, false, false, 114), "html", null, true);
        yield "__navigation-top grid grid--middle grid--justify\">
            <div class=\"col col--sm-12 col--lg-4 is-hidden-sm-md\">
                ";
        // line 116
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 116, $this->source); })()), "showSearchForm", [], "any", false, false, false, 116)) {
            // line 117
            yield "                    <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 117, $this->source); })()), "name", [], "any", false, false, false, 117), "html", null, true);
            yield "__search-open js-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 117, $this->source); })()), "name", [], "any", false, false, false, 117), "html", null, true);
            yield "__search-open\">
                        ";
            // line 118
            yield from             $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/organisms/header/header.twig", 118)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 119
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 119, $this->source); })()), "name", [], "any", false, false, false, 119) . "__search-open-icon"), "data" => ["name" => "search"]]));
            // line 124
            yield "                    </div>
                ";
        }
        // line 126
        yield "            </div>

            <div class=\"col col--sm-12 col--lg-4\">
                ";
        // line 129
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("logo"), "@ShopUi/components/organisms/header/header.twig", 129)->unwrap()->yield(CoreExtension::toArray(["modifiers" =>         // line 130
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 130, $this->source); })()), "class" => "grid grid--center"]));
        // line 133
        yield "            </div>

            <div class=\"col col--lg-4 is-hidden-sm-md\">
                ";
        // line 136
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 136, $this->source); })()), "showNavigation", [], "any", false, false, false, 136)) {
            // line 137
            yield "                    ";
            yield from             $this->loadTemplate($this->env->getFunction('organism')->getCallable()("navigation-top"), "@ShopUi/components/organisms/header/header.twig", 137)->unwrap()->yield(CoreExtension::toArray(["data" => ["isAjaxMode" => CoreExtension::getAttribute($this->env, $this->source,             // line 139
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 139, $this->source); })()), "isAjaxMode", [], "any", false, false, false, 139), "ajaxCartUrl" => CoreExtension::getAttribute($this->env, $this->source,             // line 140
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 140, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 140)]]));
            // line 143
            yield "                ";
        }
        // line 144
        yield "            </div>
        </div>
        ";
        // line 146
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 146, $this->source); })()), "showNavigation", [], "any", false, false, false, 146)) {
            // line 147
            yield "            <div class=\"is-hidden-lg-xl\">
                <div class=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 148, $this->source); })()), "name", [], "any", false, false, false, 148), "html", null, true);
            yield "__row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 148, $this->source); })()), "name", [], "any", false, false, false, 148), "html", null, true);
            yield "__navigation-top\">
                    ";
            // line 149
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-top-mobile"), "@ShopUi/components/organisms/header/header.twig", 149)->unwrap()->yield(CoreExtension::toArray(["data" => ["isAjaxMode" => CoreExtension::getAttribute($this->env, $this->source,             // line 151
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 151, $this->source); })()), "isAjaxMode", [], "any", false, false, false, 151), "ajaxCartUrl" => CoreExtension::getAttribute($this->env, $this->source,             // line 152
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 152, $this->source); })()), "ajaxCartUrl", [], "any", false, false, false, 152)]]));
            // line 155
            yield "                </div>
            </div>
        ";
        }
        // line 158
        yield "    </div>
    ";
        // line 159
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 159, $this->source); })()), "showNavigation", [], "any", false, false, false, 159)) {
            // line 160
            yield "        <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 160, $this->source); })()), "name", [], "any", false, false, false, 160), "html", null, true);
            yield "__row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 160, $this->source); })()), "name", [], "any", false, false, false, 160), "html", null, true);
            yield "__navigation-main is-hidden-sm-md\">
            ";
            // line 161
            yield from $this->unwrap()->yieldBlock('mainNavigation', $context, $blocks);
            // line 164
            yield "        </div>
    ";
        }
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_additionalLink(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainNavigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 162
        yield "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("NavigationWidget", ["MAIN_NAVIGATION_DESKTOP", "navigation-header"])) {
            $this->loadTemplate("@ShopUi/components/organisms/header/header.twig", "@ShopUi/components/organisms/header/header.twig", 162, 292528816)->display(array_merge($context, array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget))));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 163
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/organisms/header/header.twig";
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
        return array (  276 => 163,  271 => 162,  264 => 161,  254 => 112,  247 => 164,  245 => 161,  238 => 160,  236 => 159,  233 => 158,  228 => 155,  226 => 152,  225 => 151,  224 => 149,  218 => 148,  215 => 147,  213 => 146,  209 => 144,  206 => 143,  204 => 140,  203 => 139,  201 => 137,  199 => 136,  194 => 133,  192 => 130,  191 => 129,  186 => 126,  182 => 124,  180 => 119,  179 => 118,  172 => 117,  170 => 116,  163 => 114,  160 => 113,  158 => 112,  153 => 109,  150 => 108,  148 => 105,  147 => 104,  146 => 103,  145 => 102,  143 => 99,  141 => 98,  137 => 96,  135 => 91,  134 => 90,  128 => 89,  124 => 88,  118 => 87,  111 => 82,  108 => 73,  107 => 70,  105 => 68,  102 => 58,  101 => 55,  99 => 53,  96 => 43,  95 => 40,  93 => 37,  92 => 36,  91 => 35,  90 => 34,  86 => 33,  83 => 32,  81 => 29,  80 => 26,  75 => 24,  72 => 23,  68 => 22,  65 => 21,  62 => 16,  55 => 15,  51 => 1,  50 => 8,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'header',
    tag: 'header'
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    {% set benefits = [
        'global.benefit.free_returns',
        'global.benefit.warranty',
        'global.benefit.competitive_prices'
    ] %}

    {% widget 'AgentControlBarWidget' only %}{% endwidget %}

    <div class=\"{{ config.name }}__top\">
        <div class=\"container grid grid--justify\">
            {% include molecule('panel-info') with {
                class: 'grid grid--justify',
                data: {
                    info: benefits,
                },
            } only %}

            <div class=\"col {{ config.name }}__currency-lang\">
                {% widget 'LanguageSwitcherWidget' args [
                    app.request.pathInfo,
                    app.request.queryString,
                    app.request.requestUri
                ] with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'CurrencyWidget' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'StoreSwitcher' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"{{ config.name }}__search-wrapper js-{{ config.name }}__search-wrapper\">
            <div class=\"{{ config.name }}__search\">
                <div class=\"{{ config.name }}__search-close js-{{ config.name }}__search-close\">
                    {% include atom('icon') with {
                        class: config.name ~ '__search-close-icon',
                        data: {
                            name: 'close',
                        },
                    } only %}
                </div>

                {% if data.showSearchForm %}
                    {% include molecule('search-form') with {
                        attributes: {
                            'data-search-id': 'desktop',
                            'wrapper-class-name': 'js-' ~ config.name ~ '__search-wrapper',
                            'close-class-name': 'js-' ~ config.name ~ '__search-close',
                            'open-class-name': 'js-' ~ config.name ~ '__search-open',
                            'wrapper-toggle-class-name': config.name ~ '__search-wrapper-active',
                        },
                    } only %}
                {% endif %}
            </div>
        </div>

        {% block additionalLink %}{% endblock %}

        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top grid grid--middle grid--justify\">
            <div class=\"col col--sm-12 col--lg-4 is-hidden-sm-md\">
                {% if data.showSearchForm %}
                    <div class=\"{{ config.name }}__search-open js-{{ config.name }}__search-open\">
                        {% include atom('icon') with {
                            class: config.name ~ '__search-open-icon',
                            data: {
                                name: 'search',
                            },
                        } only %}
                    </div>
                {% endif %}
            </div>

            <div class=\"col col--sm-12 col--lg-4\">
                {% include molecule('logo') with {
                    modifiers: modifiers,
                    class: 'grid grid--center'
                } only %}
            </div>

            <div class=\"col col--lg-4 is-hidden-sm-md\">
                {% if data.showNavigation %}
                    {% include organism('navigation-top') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                {% endif %}
            </div>
        </div>
        {% if data.showNavigation %}
            <div class=\"is-hidden-lg-xl\">
                <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top\">
                    {% include molecule('navigation-top-mobile') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                </div>
            </div>
        {% endif %}
    </div>
    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-main is-hidden-sm-md\">
            {% block mainNavigation %}
                {% widget 'NavigationWidget' args ['MAIN_NAVIGATION_DESKTOP', 'navigation-header'] %}{% endwidget %}
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@ShopUi/components/organisms/header/header.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig");
    }
}


/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_cfb3ea6c6ce912079dc7927be51cd2c2___585479458 extends Template
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
        // line 22
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 22, $this->source); })()), "@ShopUi/components/organisms/header/header.twig", 22);
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
        return "@ShopUi/components/organisms/header/header.twig";
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
        return array (  499 => 22,  276 => 163,  271 => 162,  264 => 161,  254 => 112,  247 => 164,  245 => 161,  238 => 160,  236 => 159,  233 => 158,  228 => 155,  226 => 152,  225 => 151,  224 => 149,  218 => 148,  215 => 147,  213 => 146,  209 => 144,  206 => 143,  204 => 140,  203 => 139,  201 => 137,  199 => 136,  194 => 133,  192 => 130,  191 => 129,  186 => 126,  182 => 124,  180 => 119,  179 => 118,  172 => 117,  170 => 116,  163 => 114,  160 => 113,  158 => 112,  153 => 109,  150 => 108,  148 => 105,  147 => 104,  146 => 103,  145 => 102,  143 => 99,  141 => 98,  137 => 96,  135 => 91,  134 => 90,  128 => 89,  124 => 88,  118 => 87,  111 => 82,  108 => 73,  107 => 70,  105 => 68,  102 => 58,  101 => 55,  99 => 53,  96 => 43,  95 => 40,  93 => 37,  92 => 36,  91 => 35,  90 => 34,  86 => 33,  83 => 32,  81 => 29,  80 => 26,  75 => 24,  72 => 23,  68 => 22,  65 => 21,  62 => 16,  55 => 15,  51 => 1,  50 => 8,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'header',
    tag: 'header'
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    {% set benefits = [
        'global.benefit.free_returns',
        'global.benefit.warranty',
        'global.benefit.competitive_prices'
    ] %}

    {% widget 'AgentControlBarWidget' only %}{% endwidget %}

    <div class=\"{{ config.name }}__top\">
        <div class=\"container grid grid--justify\">
            {% include molecule('panel-info') with {
                class: 'grid grid--justify',
                data: {
                    info: benefits,
                },
            } only %}

            <div class=\"col {{ config.name }}__currency-lang\">
                {% widget 'LanguageSwitcherWidget' args [
                    app.request.pathInfo,
                    app.request.queryString,
                    app.request.requestUri
                ] with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'CurrencyWidget' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'StoreSwitcher' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"{{ config.name }}__search-wrapper js-{{ config.name }}__search-wrapper\">
            <div class=\"{{ config.name }}__search\">
                <div class=\"{{ config.name }}__search-close js-{{ config.name }}__search-close\">
                    {% include atom('icon') with {
                        class: config.name ~ '__search-close-icon',
                        data: {
                            name: 'close',
                        },
                    } only %}
                </div>

                {% if data.showSearchForm %}
                    {% include molecule('search-form') with {
                        attributes: {
                            'data-search-id': 'desktop',
                            'wrapper-class-name': 'js-' ~ config.name ~ '__search-wrapper',
                            'close-class-name': 'js-' ~ config.name ~ '__search-close',
                            'open-class-name': 'js-' ~ config.name ~ '__search-open',
                            'wrapper-toggle-class-name': config.name ~ '__search-wrapper-active',
                        },
                    } only %}
                {% endif %}
            </div>
        </div>

        {% block additionalLink %}{% endblock %}

        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top grid grid--middle grid--justify\">
            <div class=\"col col--sm-12 col--lg-4 is-hidden-sm-md\">
                {% if data.showSearchForm %}
                    <div class=\"{{ config.name }}__search-open js-{{ config.name }}__search-open\">
                        {% include atom('icon') with {
                            class: config.name ~ '__search-open-icon',
                            data: {
                                name: 'search',
                            },
                        } only %}
                    </div>
                {% endif %}
            </div>

            <div class=\"col col--sm-12 col--lg-4\">
                {% include molecule('logo') with {
                    modifiers: modifiers,
                    class: 'grid grid--center'
                } only %}
            </div>

            <div class=\"col col--lg-4 is-hidden-sm-md\">
                {% if data.showNavigation %}
                    {% include organism('navigation-top') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                {% endif %}
            </div>
        </div>
        {% if data.showNavigation %}
            <div class=\"is-hidden-lg-xl\">
                <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top\">
                    {% include molecule('navigation-top-mobile') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                </div>
            </div>
        {% endif %}
    </div>
    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-main is-hidden-sm-md\">
            {% block mainNavigation %}
                {% widget 'NavigationWidget' args ['MAIN_NAVIGATION_DESKTOP', 'navigation-header'] %}{% endwidget %}
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@ShopUi/components/organisms/header/header.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig");
    }
}


/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_cfb3ea6c6ce912079dc7927be51cd2c2___983109123 extends Template
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
        // line 34
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 34, $this->source); })()), "@ShopUi/components/organisms/header/header.twig", 34);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "                        <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 47, $this->source); })()), "parentConfigName", [], "any", false, false, false, 47), "html", null, true);
        yield "__select\">
                            ";
        // line 48
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
                        </div>
                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/organisms/header/header.twig";
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
        return array (  750 => 48,  745 => 47,  738 => 46,  728 => 34,  499 => 22,  276 => 163,  271 => 162,  264 => 161,  254 => 112,  247 => 164,  245 => 161,  238 => 160,  236 => 159,  233 => 158,  228 => 155,  226 => 152,  225 => 151,  224 => 149,  218 => 148,  215 => 147,  213 => 146,  209 => 144,  206 => 143,  204 => 140,  203 => 139,  201 => 137,  199 => 136,  194 => 133,  192 => 130,  191 => 129,  186 => 126,  182 => 124,  180 => 119,  179 => 118,  172 => 117,  170 => 116,  163 => 114,  160 => 113,  158 => 112,  153 => 109,  150 => 108,  148 => 105,  147 => 104,  146 => 103,  145 => 102,  143 => 99,  141 => 98,  137 => 96,  135 => 91,  134 => 90,  128 => 89,  124 => 88,  118 => 87,  111 => 82,  108 => 73,  107 => 70,  105 => 68,  102 => 58,  101 => 55,  99 => 53,  96 => 43,  95 => 40,  93 => 37,  92 => 36,  91 => 35,  90 => 34,  86 => 33,  83 => 32,  81 => 29,  80 => 26,  75 => 24,  72 => 23,  68 => 22,  65 => 21,  62 => 16,  55 => 15,  51 => 1,  50 => 8,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'header',
    tag: 'header'
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    {% set benefits = [
        'global.benefit.free_returns',
        'global.benefit.warranty',
        'global.benefit.competitive_prices'
    ] %}

    {% widget 'AgentControlBarWidget' only %}{% endwidget %}

    <div class=\"{{ config.name }}__top\">
        <div class=\"container grid grid--justify\">
            {% include molecule('panel-info') with {
                class: 'grid grid--justify',
                data: {
                    info: benefits,
                },
            } only %}

            <div class=\"col {{ config.name }}__currency-lang\">
                {% widget 'LanguageSwitcherWidget' args [
                    app.request.pathInfo,
                    app.request.queryString,
                    app.request.requestUri
                ] with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'CurrencyWidget' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'StoreSwitcher' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"{{ config.name }}__search-wrapper js-{{ config.name }}__search-wrapper\">
            <div class=\"{{ config.name }}__search\">
                <div class=\"{{ config.name }}__search-close js-{{ config.name }}__search-close\">
                    {% include atom('icon') with {
                        class: config.name ~ '__search-close-icon',
                        data: {
                            name: 'close',
                        },
                    } only %}
                </div>

                {% if data.showSearchForm %}
                    {% include molecule('search-form') with {
                        attributes: {
                            'data-search-id': 'desktop',
                            'wrapper-class-name': 'js-' ~ config.name ~ '__search-wrapper',
                            'close-class-name': 'js-' ~ config.name ~ '__search-close',
                            'open-class-name': 'js-' ~ config.name ~ '__search-open',
                            'wrapper-toggle-class-name': config.name ~ '__search-wrapper-active',
                        },
                    } only %}
                {% endif %}
            </div>
        </div>

        {% block additionalLink %}{% endblock %}

        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top grid grid--middle grid--justify\">
            <div class=\"col col--sm-12 col--lg-4 is-hidden-sm-md\">
                {% if data.showSearchForm %}
                    <div class=\"{{ config.name }}__search-open js-{{ config.name }}__search-open\">
                        {% include atom('icon') with {
                            class: config.name ~ '__search-open-icon',
                            data: {
                                name: 'search',
                            },
                        } only %}
                    </div>
                {% endif %}
            </div>

            <div class=\"col col--sm-12 col--lg-4\">
                {% include molecule('logo') with {
                    modifiers: modifiers,
                    class: 'grid grid--center'
                } only %}
            </div>

            <div class=\"col col--lg-4 is-hidden-sm-md\">
                {% if data.showNavigation %}
                    {% include organism('navigation-top') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                {% endif %}
            </div>
        </div>
        {% if data.showNavigation %}
            <div class=\"is-hidden-lg-xl\">
                <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top\">
                    {% include molecule('navigation-top-mobile') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                </div>
            </div>
        {% endif %}
    </div>
    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-main is-hidden-sm-md\">
            {% block mainNavigation %}
                {% widget 'NavigationWidget' args ['MAIN_NAVIGATION_DESKTOP', 'navigation-header'] %}{% endwidget %}
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@ShopUi/components/organisms/header/header.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig");
    }
}


/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_cfb3ea6c6ce912079dc7927be51cd2c2___619344024 extends Template
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
        // line 53
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 53, $this->source); })()), "@ShopUi/components/organisms/header/header.twig", 53);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "                        <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 62, $this->source); })()), "parentConfigName", [], "any", false, false, false, 62), "html", null, true);
        yield "__select\">
                            ";
        // line 63
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
                        </div>
                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/organisms/header/header.twig";
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
        return array (  999 => 63,  994 => 62,  987 => 61,  977 => 53,  750 => 48,  745 => 47,  738 => 46,  728 => 34,  499 => 22,  276 => 163,  271 => 162,  264 => 161,  254 => 112,  247 => 164,  245 => 161,  238 => 160,  236 => 159,  233 => 158,  228 => 155,  226 => 152,  225 => 151,  224 => 149,  218 => 148,  215 => 147,  213 => 146,  209 => 144,  206 => 143,  204 => 140,  203 => 139,  201 => 137,  199 => 136,  194 => 133,  192 => 130,  191 => 129,  186 => 126,  182 => 124,  180 => 119,  179 => 118,  172 => 117,  170 => 116,  163 => 114,  160 => 113,  158 => 112,  153 => 109,  150 => 108,  148 => 105,  147 => 104,  146 => 103,  145 => 102,  143 => 99,  141 => 98,  137 => 96,  135 => 91,  134 => 90,  128 => 89,  124 => 88,  118 => 87,  111 => 82,  108 => 73,  107 => 70,  105 => 68,  102 => 58,  101 => 55,  99 => 53,  96 => 43,  95 => 40,  93 => 37,  92 => 36,  91 => 35,  90 => 34,  86 => 33,  83 => 32,  81 => 29,  80 => 26,  75 => 24,  72 => 23,  68 => 22,  65 => 21,  62 => 16,  55 => 15,  51 => 1,  50 => 8,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'header',
    tag: 'header'
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    {% set benefits = [
        'global.benefit.free_returns',
        'global.benefit.warranty',
        'global.benefit.competitive_prices'
    ] %}

    {% widget 'AgentControlBarWidget' only %}{% endwidget %}

    <div class=\"{{ config.name }}__top\">
        <div class=\"container grid grid--justify\">
            {% include molecule('panel-info') with {
                class: 'grid grid--justify',
                data: {
                    info: benefits,
                },
            } only %}

            <div class=\"col {{ config.name }}__currency-lang\">
                {% widget 'LanguageSwitcherWidget' args [
                    app.request.pathInfo,
                    app.request.queryString,
                    app.request.requestUri
                ] with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'CurrencyWidget' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'StoreSwitcher' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"{{ config.name }}__search-wrapper js-{{ config.name }}__search-wrapper\">
            <div class=\"{{ config.name }}__search\">
                <div class=\"{{ config.name }}__search-close js-{{ config.name }}__search-close\">
                    {% include atom('icon') with {
                        class: config.name ~ '__search-close-icon',
                        data: {
                            name: 'close',
                        },
                    } only %}
                </div>

                {% if data.showSearchForm %}
                    {% include molecule('search-form') with {
                        attributes: {
                            'data-search-id': 'desktop',
                            'wrapper-class-name': 'js-' ~ config.name ~ '__search-wrapper',
                            'close-class-name': 'js-' ~ config.name ~ '__search-close',
                            'open-class-name': 'js-' ~ config.name ~ '__search-open',
                            'wrapper-toggle-class-name': config.name ~ '__search-wrapper-active',
                        },
                    } only %}
                {% endif %}
            </div>
        </div>

        {% block additionalLink %}{% endblock %}

        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top grid grid--middle grid--justify\">
            <div class=\"col col--sm-12 col--lg-4 is-hidden-sm-md\">
                {% if data.showSearchForm %}
                    <div class=\"{{ config.name }}__search-open js-{{ config.name }}__search-open\">
                        {% include atom('icon') with {
                            class: config.name ~ '__search-open-icon',
                            data: {
                                name: 'search',
                            },
                        } only %}
                    </div>
                {% endif %}
            </div>

            <div class=\"col col--sm-12 col--lg-4\">
                {% include molecule('logo') with {
                    modifiers: modifiers,
                    class: 'grid grid--center'
                } only %}
            </div>

            <div class=\"col col--lg-4 is-hidden-sm-md\">
                {% if data.showNavigation %}
                    {% include organism('navigation-top') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                {% endif %}
            </div>
        </div>
        {% if data.showNavigation %}
            <div class=\"is-hidden-lg-xl\">
                <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top\">
                    {% include molecule('navigation-top-mobile') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                </div>
            </div>
        {% endif %}
    </div>
    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-main is-hidden-sm-md\">
            {% block mainNavigation %}
                {% widget 'NavigationWidget' args ['MAIN_NAVIGATION_DESKTOP', 'navigation-header'] %}{% endwidget %}
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@ShopUi/components/organisms/header/header.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig");
    }
}


/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_cfb3ea6c6ce912079dc7927be51cd2c2___1792734603 extends Template
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
        // line 68
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 68, $this->source); })()), "@ShopUi/components/organisms/header/header.twig", 68);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "                        <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 77, $this->source); })()), "parentConfigName", [], "any", false, false, false, 77), "html", null, true);
        yield "__select\">
                            ";
        // line 78
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
                        </div>
                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/organisms/header/header.twig";
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
        return array (  1248 => 78,  1243 => 77,  1236 => 76,  1226 => 68,  999 => 63,  994 => 62,  987 => 61,  977 => 53,  750 => 48,  745 => 47,  738 => 46,  728 => 34,  499 => 22,  276 => 163,  271 => 162,  264 => 161,  254 => 112,  247 => 164,  245 => 161,  238 => 160,  236 => 159,  233 => 158,  228 => 155,  226 => 152,  225 => 151,  224 => 149,  218 => 148,  215 => 147,  213 => 146,  209 => 144,  206 => 143,  204 => 140,  203 => 139,  201 => 137,  199 => 136,  194 => 133,  192 => 130,  191 => 129,  186 => 126,  182 => 124,  180 => 119,  179 => 118,  172 => 117,  170 => 116,  163 => 114,  160 => 113,  158 => 112,  153 => 109,  150 => 108,  148 => 105,  147 => 104,  146 => 103,  145 => 102,  143 => 99,  141 => 98,  137 => 96,  135 => 91,  134 => 90,  128 => 89,  124 => 88,  118 => 87,  111 => 82,  108 => 73,  107 => 70,  105 => 68,  102 => 58,  101 => 55,  99 => 53,  96 => 43,  95 => 40,  93 => 37,  92 => 36,  91 => 35,  90 => 34,  86 => 33,  83 => 32,  81 => 29,  80 => 26,  75 => 24,  72 => 23,  68 => 22,  65 => 21,  62 => 16,  55 => 15,  51 => 1,  50 => 8,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'header',
    tag: 'header'
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    {% set benefits = [
        'global.benefit.free_returns',
        'global.benefit.warranty',
        'global.benefit.competitive_prices'
    ] %}

    {% widget 'AgentControlBarWidget' only %}{% endwidget %}

    <div class=\"{{ config.name }}__top\">
        <div class=\"container grid grid--justify\">
            {% include molecule('panel-info') with {
                class: 'grid grid--justify',
                data: {
                    info: benefits,
                },
            } only %}

            <div class=\"col {{ config.name }}__currency-lang\">
                {% widget 'LanguageSwitcherWidget' args [
                    app.request.pathInfo,
                    app.request.queryString,
                    app.request.requestUri
                ] with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'CurrencyWidget' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'StoreSwitcher' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"{{ config.name }}__search-wrapper js-{{ config.name }}__search-wrapper\">
            <div class=\"{{ config.name }}__search\">
                <div class=\"{{ config.name }}__search-close js-{{ config.name }}__search-close\">
                    {% include atom('icon') with {
                        class: config.name ~ '__search-close-icon',
                        data: {
                            name: 'close',
                        },
                    } only %}
                </div>

                {% if data.showSearchForm %}
                    {% include molecule('search-form') with {
                        attributes: {
                            'data-search-id': 'desktop',
                            'wrapper-class-name': 'js-' ~ config.name ~ '__search-wrapper',
                            'close-class-name': 'js-' ~ config.name ~ '__search-close',
                            'open-class-name': 'js-' ~ config.name ~ '__search-open',
                            'wrapper-toggle-class-name': config.name ~ '__search-wrapper-active',
                        },
                    } only %}
                {% endif %}
            </div>
        </div>

        {% block additionalLink %}{% endblock %}

        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top grid grid--middle grid--justify\">
            <div class=\"col col--sm-12 col--lg-4 is-hidden-sm-md\">
                {% if data.showSearchForm %}
                    <div class=\"{{ config.name }}__search-open js-{{ config.name }}__search-open\">
                        {% include atom('icon') with {
                            class: config.name ~ '__search-open-icon',
                            data: {
                                name: 'search',
                            },
                        } only %}
                    </div>
                {% endif %}
            </div>

            <div class=\"col col--sm-12 col--lg-4\">
                {% include molecule('logo') with {
                    modifiers: modifiers,
                    class: 'grid grid--center'
                } only %}
            </div>

            <div class=\"col col--lg-4 is-hidden-sm-md\">
                {% if data.showNavigation %}
                    {% include organism('navigation-top') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                {% endif %}
            </div>
        </div>
        {% if data.showNavigation %}
            <div class=\"is-hidden-lg-xl\">
                <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top\">
                    {% include molecule('navigation-top-mobile') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                </div>
            </div>
        {% endif %}
    </div>
    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-main is-hidden-sm-md\">
            {% block mainNavigation %}
                {% widget 'NavigationWidget' args ['MAIN_NAVIGATION_DESKTOP', 'navigation-header'] %}{% endwidget %}
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@ShopUi/components/organisms/header/header.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig");
    }
}


/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_cfb3ea6c6ce912079dc7927be51cd2c2___292528816 extends Template
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
        // line 162
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 162, $this->source); })()), "@ShopUi/components/organisms/header/header.twig", 162);
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
        return "@ShopUi/components/organisms/header/header.twig";
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
        return array (  1474 => 162,  1248 => 78,  1243 => 77,  1236 => 76,  1226 => 68,  999 => 63,  994 => 62,  987 => 61,  977 => 53,  750 => 48,  745 => 47,  738 => 46,  728 => 34,  499 => 22,  276 => 163,  271 => 162,  264 => 161,  254 => 112,  247 => 164,  245 => 161,  238 => 160,  236 => 159,  233 => 158,  228 => 155,  226 => 152,  225 => 151,  224 => 149,  218 => 148,  215 => 147,  213 => 146,  209 => 144,  206 => 143,  204 => 140,  203 => 139,  201 => 137,  199 => 136,  194 => 133,  192 => 130,  191 => 129,  186 => 126,  182 => 124,  180 => 119,  179 => 118,  172 => 117,  170 => 116,  163 => 114,  160 => 113,  158 => 112,  153 => 109,  150 => 108,  148 => 105,  147 => 104,  146 => 103,  145 => 102,  143 => 99,  141 => 98,  137 => 96,  135 => 91,  134 => 90,  128 => 89,  124 => 88,  118 => 87,  111 => 82,  108 => 73,  107 => 70,  105 => 68,  102 => 58,  101 => 55,  99 => 53,  96 => 43,  95 => 40,  93 => 37,  92 => 36,  91 => 35,  90 => 34,  86 => 33,  83 => 32,  81 => 29,  80 => 26,  75 => 24,  72 => 23,  68 => 22,  65 => 21,  62 => 16,  55 => 15,  51 => 1,  50 => 8,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'header',
    tag: 'header'
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    isAjaxMode: false,
    ajaxCartUrl: '',
} %}

{% block body %}
    {% set benefits = [
        'global.benefit.free_returns',
        'global.benefit.warranty',
        'global.benefit.competitive_prices'
    ] %}

    {% widget 'AgentControlBarWidget' only %}{% endwidget %}

    <div class=\"{{ config.name }}__top\">
        <div class=\"container grid grid--justify\">
            {% include molecule('panel-info') with {
                class: 'grid grid--justify',
                data: {
                    info: benefits,
                },
            } only %}

            <div class=\"col {{ config.name }}__currency-lang\">
                {% widget 'LanguageSwitcherWidget' args [
                    app.request.pathInfo,
                    app.request.queryString,
                    app.request.requestUri
                ] with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'CurrencyWidget' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}

                {%- widget 'StoreSwitcher' with {
                    data: {
                        additionalClassName: config.name,
                    },
                    embed: {
                        parentConfigName: config.name,
                    },
                } only %}
                    {% block body %}
                        <div class=\"{{ embed.parentConfigName }}__select\">
                            {{ parent () }}
                        </div>
                    {% endblock %}
                {% endwidget %}
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"{{ config.name }}__search-wrapper js-{{ config.name }}__search-wrapper\">
            <div class=\"{{ config.name }}__search\">
                <div class=\"{{ config.name }}__search-close js-{{ config.name }}__search-close\">
                    {% include atom('icon') with {
                        class: config.name ~ '__search-close-icon',
                        data: {
                            name: 'close',
                        },
                    } only %}
                </div>

                {% if data.showSearchForm %}
                    {% include molecule('search-form') with {
                        attributes: {
                            'data-search-id': 'desktop',
                            'wrapper-class-name': 'js-' ~ config.name ~ '__search-wrapper',
                            'close-class-name': 'js-' ~ config.name ~ '__search-close',
                            'open-class-name': 'js-' ~ config.name ~ '__search-open',
                            'wrapper-toggle-class-name': config.name ~ '__search-wrapper-active',
                        },
                    } only %}
                {% endif %}
            </div>
        </div>

        {% block additionalLink %}{% endblock %}

        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top grid grid--middle grid--justify\">
            <div class=\"col col--sm-12 col--lg-4 is-hidden-sm-md\">
                {% if data.showSearchForm %}
                    <div class=\"{{ config.name }}__search-open js-{{ config.name }}__search-open\">
                        {% include atom('icon') with {
                            class: config.name ~ '__search-open-icon',
                            data: {
                                name: 'search',
                            },
                        } only %}
                    </div>
                {% endif %}
            </div>

            <div class=\"col col--sm-12 col--lg-4\">
                {% include molecule('logo') with {
                    modifiers: modifiers,
                    class: 'grid grid--center'
                } only %}
            </div>

            <div class=\"col col--lg-4 is-hidden-sm-md\">
                {% if data.showNavigation %}
                    {% include organism('navigation-top') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                {% endif %}
            </div>
        </div>
        {% if data.showNavigation %}
            <div class=\"is-hidden-lg-xl\">
                <div class=\"{{ config.name }}__row {{ config.name }}__navigation-top\">
                    {% include molecule('navigation-top-mobile') with {
                        data: {
                            isAjaxMode: data.isAjaxMode,
                            ajaxCartUrl: data.ajaxCartUrl,
                        },
                    } only %}
                </div>
            </div>
        {% endif %}
    </div>
    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__row {{ config.name }}__navigation-main is-hidden-sm-md\">
            {% block mainNavigation %}
                {% widget 'NavigationWidget' args ['MAIN_NAVIGATION_DESKTOP', 'navigation-header'] %}{% endwidget %}
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@ShopUi/components/organisms/header/header.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig");
    }
}
