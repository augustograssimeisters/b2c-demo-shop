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

/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_f3ec8dc780c6282df0d9031e44888354 extends Template
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
            'template' => [$this, 'block_template'],
            'meta' => [$this, 'block_meta'],
            'metaTitle' => [$this, 'block_metaTitle'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
            'headStyles' => [$this, 'block_headStyles'],
            'nonCriticalStyles' => [$this, 'block_nonCriticalStyles'],
            'headScripts' => [$this, 'block_headScripts'],
            'esmHeadScripts' => [$this, 'block_esmHeadScripts'],
            'legacyHeadScripts' => [$this, 'block_legacyHeadScripts'],
            'headTitle' => [$this, 'block_headTitle'],
            'class' => [$this, 'block_class'],
            'attributes' => [$this, 'block_attributes'],
            'footerScripts' => [$this, 'block_footerScripts'],
            'esmFooterScripts' => [$this, 'block_esmFooterScripts'],
            'legacyFooterScripts' => [$this, 'block_legacyFooterScripts'],
            'styleLazyLoader' => [$this, 'block_styleLazyLoader'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("template"), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["locale" => Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "locale", [], "any", false, false, false, 4), 0, 2), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.shop"), "metaTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.shop"), "metaDescription" => "", "metaKeywords" => "", "hasCookies" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "cookies", [], "any", false, false, false, 9), "get", ["last-visit"], "method", false, false, false, 9), "appLocale" => CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "locale", [], "any", false, false, false, 10)], $context['data']);        // line 14
        $context["isNewFrontendBuildSupported"] = false;
        // line 15
        $context["isCssLazyLoadSupported"] = false;
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_template(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "    <!doctype html>
    <html lang=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "locale", [], "any", false, false, false, 19), "html", null, true);
        yield "\" data-locale=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "appLocale", [], "any", false, false, false, 19), "html", null, true);
        yield "\">
        <head>
            ";
        // line 21
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 29
        yield "
            ";
        // line 30
        yield from $this->unwrap()->yieldBlock('headStyles', $context, $blocks);
        // line 41
        yield "
            ";
        // line 42
        yield from $this->unwrap()->yieldBlock('headScripts', $context, $blocks);
        // line 54
        yield "
            <title>";
        // line 55
        yield from $this->unwrap()->yieldBlock('headTitle', $context, $blocks);
        yield "</title>
        </head>
        <body";
        // line 57
        if ( !Twig\Extension\CoreExtension::testEmpty(        $this->unwrap()->renderBlock("class", $context, $blocks))) {
            yield " class=\"";
            yield from $this->unwrap()->yieldBlock('class', $context, $blocks);
            yield "\"";
        }
        // line 58
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        yield ">

            ";
        // line 60
        yield from $this->yieldParentBlock("template", $context, $blocks);
        yield "

            ";
        // line 62
        yield from $this->unwrap()->yieldBlock('footerScripts', $context, $blocks);
        // line 77
        yield "        </body>
    </html>
";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"";
        // line 24
        yield from $this->unwrap()->yieldBlock('metaTitle', $context, $blocks);
        yield "\">
                <meta name=\"description\" content=\"";
        // line 25
        yield from $this->unwrap()->yieldBlock('metaDescription', $context, $blocks);
        yield "\">
                <meta name=\"keywords\" content=\"";
        // line 26
        yield from $this->unwrap()->yieldBlock('metaKeywords', $context, $blocks);
        yield "\">
                <meta name=\"generator\" content=\"spryker\">
            ";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "metaTitle", [], "any", false, false, false, 24), "html", null, true);
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaDescription(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "metaDescription", [], "any", false, false, false, 25), "html", null, true);
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaKeywords(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "metaKeywords", [], "any", false, false, false, 26), "html", null, true);
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headStyles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "                ";
        if ((isset($context["isCssLazyLoadSupported"]) || array_key_exists("isCssLazyLoadSupported", $context) ? $context["isCssLazyLoadSupported"] : (function () { throw new RuntimeError('Variable "isCssLazyLoadSupported" does not exist.', 31, $this->source); })())) {
            // line 32
            yield "                    <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('publicPath')->getCallable()("css/yves_default.critical.css"), "html", null, true);
            yield "\">

                    ";
            // line 34
            yield from $this->unwrap()->yieldBlock('nonCriticalStyles', $context, $blocks);
            // line 37
            yield "                ";
        } else {
            // line 38
            yield "                    <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('publicPath')->getCallable()("css/yves_default.app.css"), "html", null, true);
            yield "\">
                ";
        }
        // line 40
        yield "            ";
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nonCriticalStyles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "                        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('publicPath')->getCallable()("css/yves_default.non-critical.css"), "html", null, true);
        yield "\">
                    ";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", ["header-top"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 43, 924066382)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 44
        yield "
                <script type=\"module\" src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('publicPath')->getCallable()("js/yves_default.runtime.js"), "html", null, true);
        yield "\" crossorigin=\"anonymous\"></script>

                ";
        // line 48
        yield "                ";
        yield from $this->unwrap()->yieldBlock('esmHeadScripts', $context, $blocks);
        // line 49
        yield "                ";
        // line 50
        yield "                ";
        yield from $this->unwrap()->yieldBlock('legacyHeadScripts', $context, $blocks);
        // line 51
        yield "
                ";
        // line 52
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", ["header"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 52, 301246612)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 53
        yield "            ";
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_esmHeadScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_legacyHeadScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), "html", null, true);
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getFunction('qa')->getCallable()(["page"]);
        yield " ";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footerScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", ["footer"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 63, 1249011910)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 64
        yield "
                <script type=\"module\" src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('publicPath')->getCallable()("js/yves_default.vendor.js"), "html", null, true);
        yield "\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('publicPath')->getCallable()("js/yves_default.app.js"), "html", null, true);
        yield "\" crossorigin=\"anonymous\"></script>

                ";
        // line 69
        yield "                ";
        yield from $this->unwrap()->yieldBlock('esmFooterScripts', $context, $blocks);
        // line 70
        yield "                ";
        // line 71
        yield "                ";
        yield from $this->unwrap()->yieldBlock('legacyFooterScripts', $context, $blocks);
        // line 73
        yield from $this->unwrap()->yieldBlock('styleLazyLoader', $context, $blocks);
        // line 75
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", ["footer-bottom"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 75, 29804184)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 76
        yield "            ";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_esmFooterScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_legacyFooterScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_styleLazyLoader(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
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
        return array (  401 => 73,  391 => 71,  381 => 69,  376 => 76,  372 => 75,  370 => 73,  367 => 71,  365 => 70,  362 => 69,  357 => 66,  353 => 65,  350 => 64,  345 => 63,  338 => 62,  325 => 58,  315 => 57,  304 => 55,  294 => 50,  284 => 48,  279 => 53,  275 => 52,  272 => 51,  269 => 50,  267 => 49,  264 => 48,  259 => 45,  256 => 44,  251 => 43,  244 => 42,  236 => 35,  229 => 34,  224 => 40,  218 => 38,  215 => 37,  213 => 34,  207 => 32,  204 => 31,  197 => 30,  186 => 26,  175 => 25,  164 => 24,  156 => 26,  152 => 25,  148 => 24,  144 => 22,  137 => 21,  130 => 77,  128 => 62,  123 => 60,  118 => 58,  112 => 57,  107 => 55,  104 => 54,  102 => 42,  99 => 41,  97 => 30,  94 => 29,  92 => 21,  85 => 19,  82 => 18,  75 => 17,  71 => 1,  69 => 15,  67 => 14,  66 => 10,  65 => 9,  64 => 4,  63 => 3,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
    appLocale: app.locale,
} %}

{# @deprecated variable \"isNewFrontendBuildSupported\" is deprecated #}
{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\" data-locale=\"{{ data.appLocale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmHeadScripts\" is deprecated #}
                {% block esmHeadScripts %}{% endblock %}
                {# @deprecated block \"legacyHeadScripts\" is deprecated #}
                {% block legacyHeadScripts %}{% endblock %}

                {% widget 'AssetWidget' args ['header'] only %}{% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmFooterScripts\" is deprecated #}
                {% block esmFooterScripts %}{% endblock %}
                {# @deprecated block \"legacyFooterScripts\" is deprecated #}
                {% block legacyFooterScripts %}{% endblock %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}{% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_f3ec8dc780c6282df0d9031e44888354___924066382 extends Template
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
        // line 43
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 43, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 43);
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
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
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
        return array (  542 => 43,  401 => 73,  391 => 71,  381 => 69,  376 => 76,  372 => 75,  370 => 73,  367 => 71,  365 => 70,  362 => 69,  357 => 66,  353 => 65,  350 => 64,  345 => 63,  338 => 62,  325 => 58,  315 => 57,  304 => 55,  294 => 50,  284 => 48,  279 => 53,  275 => 52,  272 => 51,  269 => 50,  267 => 49,  264 => 48,  259 => 45,  256 => 44,  251 => 43,  244 => 42,  236 => 35,  229 => 34,  224 => 40,  218 => 38,  215 => 37,  213 => 34,  207 => 32,  204 => 31,  197 => 30,  186 => 26,  175 => 25,  164 => 24,  156 => 26,  152 => 25,  148 => 24,  144 => 22,  137 => 21,  130 => 77,  128 => 62,  123 => 60,  118 => 58,  112 => 57,  107 => 55,  104 => 54,  102 => 42,  99 => 41,  97 => 30,  94 => 29,  92 => 21,  85 => 19,  82 => 18,  75 => 17,  71 => 1,  69 => 15,  67 => 14,  66 => 10,  65 => 9,  64 => 4,  63 => 3,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
    appLocale: app.locale,
} %}

{# @deprecated variable \"isNewFrontendBuildSupported\" is deprecated #}
{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\" data-locale=\"{{ data.appLocale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmHeadScripts\" is deprecated #}
                {% block esmHeadScripts %}{% endblock %}
                {# @deprecated block \"legacyHeadScripts\" is deprecated #}
                {% block legacyHeadScripts %}{% endblock %}

                {% widget 'AssetWidget' args ['header'] only %}{% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmFooterScripts\" is deprecated #}
                {% block esmFooterScripts %}{% endblock %}
                {# @deprecated block \"legacyFooterScripts\" is deprecated #}
                {% block legacyFooterScripts %}{% endblock %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}{% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_f3ec8dc780c6282df0d9031e44888354___301246612 extends Template
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
        // line 52
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 52, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 52);
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
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
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
        return array (  683 => 52,  542 => 43,  401 => 73,  391 => 71,  381 => 69,  376 => 76,  372 => 75,  370 => 73,  367 => 71,  365 => 70,  362 => 69,  357 => 66,  353 => 65,  350 => 64,  345 => 63,  338 => 62,  325 => 58,  315 => 57,  304 => 55,  294 => 50,  284 => 48,  279 => 53,  275 => 52,  272 => 51,  269 => 50,  267 => 49,  264 => 48,  259 => 45,  256 => 44,  251 => 43,  244 => 42,  236 => 35,  229 => 34,  224 => 40,  218 => 38,  215 => 37,  213 => 34,  207 => 32,  204 => 31,  197 => 30,  186 => 26,  175 => 25,  164 => 24,  156 => 26,  152 => 25,  148 => 24,  144 => 22,  137 => 21,  130 => 77,  128 => 62,  123 => 60,  118 => 58,  112 => 57,  107 => 55,  104 => 54,  102 => 42,  99 => 41,  97 => 30,  94 => 29,  92 => 21,  85 => 19,  82 => 18,  75 => 17,  71 => 1,  69 => 15,  67 => 14,  66 => 10,  65 => 9,  64 => 4,  63 => 3,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
    appLocale: app.locale,
} %}

{# @deprecated variable \"isNewFrontendBuildSupported\" is deprecated #}
{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\" data-locale=\"{{ data.appLocale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmHeadScripts\" is deprecated #}
                {% block esmHeadScripts %}{% endblock %}
                {# @deprecated block \"legacyHeadScripts\" is deprecated #}
                {% block legacyHeadScripts %}{% endblock %}

                {% widget 'AssetWidget' args ['header'] only %}{% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmFooterScripts\" is deprecated #}
                {% block esmFooterScripts %}{% endblock %}
                {# @deprecated block \"legacyFooterScripts\" is deprecated #}
                {% block legacyFooterScripts %}{% endblock %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}{% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_f3ec8dc780c6282df0d9031e44888354___1249011910 extends Template
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
        // line 63
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 63, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 63);
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
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
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
        return array (  824 => 63,  683 => 52,  542 => 43,  401 => 73,  391 => 71,  381 => 69,  376 => 76,  372 => 75,  370 => 73,  367 => 71,  365 => 70,  362 => 69,  357 => 66,  353 => 65,  350 => 64,  345 => 63,  338 => 62,  325 => 58,  315 => 57,  304 => 55,  294 => 50,  284 => 48,  279 => 53,  275 => 52,  272 => 51,  269 => 50,  267 => 49,  264 => 48,  259 => 45,  256 => 44,  251 => 43,  244 => 42,  236 => 35,  229 => 34,  224 => 40,  218 => 38,  215 => 37,  213 => 34,  207 => 32,  204 => 31,  197 => 30,  186 => 26,  175 => 25,  164 => 24,  156 => 26,  152 => 25,  148 => 24,  144 => 22,  137 => 21,  130 => 77,  128 => 62,  123 => 60,  118 => 58,  112 => 57,  107 => 55,  104 => 54,  102 => 42,  99 => 41,  97 => 30,  94 => 29,  92 => 21,  85 => 19,  82 => 18,  75 => 17,  71 => 1,  69 => 15,  67 => 14,  66 => 10,  65 => 9,  64 => 4,  63 => 3,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
    appLocale: app.locale,
} %}

{# @deprecated variable \"isNewFrontendBuildSupported\" is deprecated #}
{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\" data-locale=\"{{ data.appLocale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmHeadScripts\" is deprecated #}
                {% block esmHeadScripts %}{% endblock %}
                {# @deprecated block \"legacyHeadScripts\" is deprecated #}
                {% block legacyHeadScripts %}{% endblock %}

                {% widget 'AssetWidget' args ['header'] only %}{% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmFooterScripts\" is deprecated #}
                {% block esmFooterScripts %}{% endblock %}
                {# @deprecated block \"legacyFooterScripts\" is deprecated #}
                {% block legacyFooterScripts %}{% endblock %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}{% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_f3ec8dc780c6282df0d9031e44888354___29804184 extends Template
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
        // line 75
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 75, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 75);
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
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
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
        return array (  965 => 75,  824 => 63,  683 => 52,  542 => 43,  401 => 73,  391 => 71,  381 => 69,  376 => 76,  372 => 75,  370 => 73,  367 => 71,  365 => 70,  362 => 69,  357 => 66,  353 => 65,  350 => 64,  345 => 63,  338 => 62,  325 => 58,  315 => 57,  304 => 55,  294 => 50,  284 => 48,  279 => 53,  275 => 52,  272 => 51,  269 => 50,  267 => 49,  264 => 48,  259 => 45,  256 => 44,  251 => 43,  244 => 42,  236 => 35,  229 => 34,  224 => 40,  218 => 38,  215 => 37,  213 => 34,  207 => 32,  204 => 31,  197 => 30,  186 => 26,  175 => 25,  164 => 24,  156 => 26,  152 => 25,  148 => 24,  144 => 22,  137 => 21,  130 => 77,  128 => 62,  123 => 60,  118 => 58,  112 => 57,  107 => 55,  104 => 54,  102 => 42,  99 => 41,  97 => 30,  94 => 29,  92 => 21,  85 => 19,  82 => 18,  75 => 17,  71 => 1,  69 => 15,  67 => 14,  66 => 10,  65 => 9,  64 => 4,  63 => 3,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
    appLocale: app.locale,
} %}

{# @deprecated variable \"isNewFrontendBuildSupported\" is deprecated #}
{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\" data-locale=\"{{ data.appLocale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmHeadScripts\" is deprecated #}
                {% block esmHeadScripts %}{% endblock %}
                {# @deprecated block \"legacyHeadScripts\" is deprecated #}
                {% block legacyHeadScripts %}{% endblock %}

                {% widget 'AssetWidget' args ['header'] only %}{% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmFooterScripts\" is deprecated #}
                {% block esmFooterScripts %}{% endblock %}
                {# @deprecated block \"legacyFooterScripts\" is deprecated #}
                {% block legacyFooterScripts %}{% endblock %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}{% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}
