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

/* @CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_bae2d0bb547f46e700fa5eb6f65304df extends Template
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
            'container' => [$this, 'block_container'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'form' => [$this, 'block_form'],
            'filterSection' => [$this, 'block_filterSection'],
            'catalogContent' => [$this, 'block_catalogContent'],
            'noResults' => [$this, 'block_noResults'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("page-layout-catalog", "@SprykerShop:CatalogPage"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["products" => CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "products", [], "any", false, false, false, 4), "facets" => CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 5, $this->source); })()), "facets", [], "any", false, false, false, 5), "filteredFacets" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["_view"] ?? null), "filteredFacets", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "filteredFacets", [], "any", false, false, false, 6), [])) : ([])), "category" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["_view"] ?? null), "category", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, false, false, 7))) : ("")), "categories" => ((        // line 8
array_key_exists("categories", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 8, $this->source); })()), [])) : ([])), "filterPath" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["_view"] ?? null), "filterPath", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "filterPath", [], "any", false, false, false, 9))) : ("")), "viewMode" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["_view"] ?? null), "viewMode", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "viewMode", [], "any", false, false, false, 10))) : ("")), "title" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["_view"] ?? null), "category", [], "any", false, true, false, 11), "name", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 11), "name", [], "any", false, false, false, 11))) : ("")), "metaTitle" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 12
($context["_view"] ?? null), "pageTitle", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "pageTitle", [], "any", false, false, false, 12), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 12), "name", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 12), "name", [], "any", false, false, false, 12))) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 12), "name", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 12), "name", [], "any", false, false, false, 12))) : ("")))), "metaDescription" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["_view"] ?? null), "pageDescription", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "pageDescription", [], "any", false, false, false, 13))) : ("")), "metaKeywords" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 14
($context["_view"] ?? null), "pageKeywords", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "pageKeywords", [], "any", false, false, false, 14))) : ("")), "pagination" => ["currentPage" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 16, $this->source); })()), "pagination", [], "any", false, false, false, 16), "currentPage", [], "any", false, false, false, 16), "maxPage" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 17, $this->source); })()), "pagination", [], "any", false, false, false, 17), "maxPage", [], "any", false, false, false, 17)], "isAjaxHeader" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["_view"] ?? null), "isMiniCartAsyncModeEnabled", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "isMiniCartAsyncModeEnabled", [], "any", false, false, false, 19), false)) : (false)), "ajaxCartUrl" => "/cart/async/mini-cart-view"], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        yield from $this->unwrap()->yieldBlock('breadcrumbs', $context, $blocks);
        // line 43
        yield "
    ";
        // line 44
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 64
        yield "
    <div class=\"container\">
        <main class=\"container__inner\">
            ";
        // line 67
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 181
        yield "
            ";
        // line 202
        yield "
        </main>
    </div>
";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumbs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "        ";
        $context["breadcrumbSteps"] = CoreExtension::callMacro($macros["_self"], "macro_renderBreadcrumbSteps", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25), false, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "filterPath", [], "any", false, false, false, 25)], 25, $context, $this->getSourceContext());
        // line 26
        yield "        <div class=\"container\">
            <div class=\"container__inner\">
                ";
        // line 28
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        // line 40
        yield "            </div>
        </div>
    ";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "                    ";
        yield from         $this->loadTemplate("@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 29, "700156460")->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["no-border"], "embed" => ["breadcrumbs" =>         // line 32
(isset($context["breadcrumbSteps"]) || array_key_exists("breadcrumbSteps", $context) ? $context["breadcrumbSteps"] : (function () { throw new RuntimeError('Variable "breadcrumbSteps" does not exist.', 32, $this->source); })())]]));
        // line 39
        yield "                ";
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "category", [], "any", false, true, false, 45), "image", [], "any", true, true, false, 45)) {
            // line 46
            yield "            ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("jumbotron"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 46)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["category"], "data" => ["imageUrl" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 49
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "category", [], "any", false, false, false, 49), "image", [], "any", false, false, false, 49), "headline" => CoreExtension::getAttribute($this->env, $this->source,             // line 50
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 50, $this->source); })()), "title", [], "any", false, false, false, 50), "subHeadline" => null]]));
            // line 54
            yield "        ";
        } else {
            // line 55
            yield "            ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("jumbotron"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 55)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["category", "category-no-img"], "data" => ["headline" => CoreExtension::getAttribute($this->env, $this->source,             // line 58
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "title", [], "any", false, false, false, 58), "subHeadline" => null]]));
            // line 62
            yield "        ";
        }
        // line 63
        yield "    ";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "                ";
        $context["catalogJsName"] = "js-catalog";
        // line 69
        yield "
                ";
        // line 70
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("window-location-applicator", "CatalogPage"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 70)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["form-class-name" => (        // line 72
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 72, $this->source); })()) . "__form"), "trigger-class-name" => (        // line 73
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 73, $this->source); })()) . "__trigger"), "sort-trigger-class-name" => (        // line 74
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 74, $this->source); })()) . "__sort-trigger")]]));
        // line 77
        yield "
                <form method=\"GET\" class=\"grid js-catalog-filter-target js-form-input-default-value-disabler__catalog-form ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 78, $this->source); })()), "html", null, true);
        yield "__form\">
                    ";
        // line 79
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        // line 179
        yield "                </form>
            ";
        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 80
        yield "                        <div class=\"col col--sm-12 col--xl-3 catalog-left-side\">
                            ";
        // line 81
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("view-mode-switch", "CatalogPage"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 81)->unwrap()->yield(CoreExtension::toArray(["class" => "catalog-left-side__switcher", "data" => ["viewMode" => CoreExtension::getAttribute($this->env, $this->source,         // line 84
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 84, $this->source); })()), "viewMode", [], "any", false, false, false, 84)]]));
        // line 87
        yield "
                            ";
        // line 88
        yield from $this->unwrap()->yieldBlock('filterSection', $context, $blocks);
        // line 102
        yield "                        </div>

                        <div class=\"col col--sm-12 col--xl-9 catalog-right-side\">
                            <button type=\"button\" class=\"button button--hollow button--expand spacing-y spacing-y--big is-hidden-xl-only js-catalog-toggler-click__trigger\">";
        // line 106
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 106)->unwrap()->yield(CoreExtension::toArray(["class" => "spacing-right", "data" => ["name" => "filters"]]));
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.filter"), "html", null, true);
        // line 113
        yield "</button>
                            ";
        // line 114
        yield from $this->unwrap()->yieldBlock('catalogContent', $context, $blocks);
        // line 162
        yield "                        </div>

                        ";
        // line 164
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-click"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 164)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["trigger-class-name" => "js-catalog-toggler-click__trigger", "target-class-name" => "js-catalog-filter-target", "class-to-toggle" => "show-filter"]]));
        // line 171
        yield "
                        ";
        // line 172
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("form-input-default-value-disabler"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 172)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["form-selector" => ".js-form-input-default-value-disabler__catalog-form", "input-selector" => ".js-form-input-default-value-disabler__catalog-input"]]));
        // line 178
        yield "                    ";
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filterSection(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "                                ";
        yield from         $this->loadTemplate($this->env->getFunction('organism')->getCallable()("filter-section", "CatalogPage"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 89)->unwrap()->yield(CoreExtension::toArray(["data" => ["facets" => CoreExtension::getAttribute($this->env, $this->source,         // line 91
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 91, $this->source); })()), "facets", [], "any", false, false, false, 91), "filteredFacets" => CoreExtension::getAttribute($this->env, $this->source,         // line 92
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 92, $this->source); })()), "filteredFacets", [], "any", false, false, false, 92), "filterPath" => CoreExtension::getAttribute($this->env, $this->source,         // line 93
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 93, $this->source); })()), "filterPath", [], "any", false, false, false, 93), "categories" => CoreExtension::getAttribute($this->env, $this->source,         // line 94
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 94, $this->source); })()), "categories", [], "any", false, false, false, 94), "isEmptyCategoryFilterValueVisible" => CoreExtension::getAttribute($this->env, $this->source,         // line 95
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 95, $this->source); })()), "isEmptyCategoryFilterValueVisible", [], "any", false, false, false, 95), "togglerClass" => "js-catalog-toggler-click__trigger", "parentJsName" =>         // line 97
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 97, $this->source); })()), "numberFormatConfig" =>         // line 98
(isset($context["numberFormatConfig"]) || array_key_exists("numberFormatConfig", $context) ? $context["numberFormatConfig"] : (function () { throw new RuntimeError('Variable "numberFormatConfig" does not exist.', 98, $this->source); })())]]));
        // line 101
        yield "                            ";
        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_catalogContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 115
        yield "                                <div class=\"grid\">
                                    <div class=\"col col--sm-12\">
                                        ";
        // line 117
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("sort", "CatalogPage"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 117)->unwrap()->yield(CoreExtension::toArray(["data" => ["pagination" => CoreExtension::getAttribute($this->env, $this->source,         // line 119
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 119, $this->source); })()), "pagination", [], "any", false, false, false, 119), "sort" => CoreExtension::getAttribute($this->env, $this->source,         // line 120
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 120, $this->source); })()), "sort", [], "any", false, false, false, 120), "parentJsName" =>         // line 121
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 121, $this->source); })())]]));
        // line 124
        yield "                                    </div>
                                    <div class=\"col col--sm-12\">
                                        ";
        // line 126
        yield from         $this->loadTemplate($this->env->getFunction('organism')->getCallable()("active-filter-section", "CatalogPage"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 126)->unwrap()->yield(CoreExtension::toArray(["data" => ["facets" => CoreExtension::getAttribute($this->env, $this->source,         // line 128
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 128, $this->source); })()), "facets", [], "any", false, false, false, 128), "filteredFacets" => CoreExtension::getAttribute($this->env, $this->source,         // line 129
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 129, $this->source); })()), "filteredFacets", [], "any", false, false, false, 129)]]));
        // line 132
        yield "                                    </div>
                                    <div class=\"col col--sm-12\">
                                        ";
        // line 134
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("view-mode-switch", "CatalogPage"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 134)->unwrap()->yield(CoreExtension::toArray(["class" => "is-hidden-xl-only", "data" => ["viewMode" => CoreExtension::getAttribute($this->env, $this->source,         // line 137
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 137, $this->source); })()), "viewMode", [], "any", false, false, false, 137)]]));
        // line 140
        yield "                                    </div>
                                </div>

                                <div class=\"grid ";
        // line 143
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 143, $this->source); })()), "viewMode", [], "any", false, false, false, 143) != "list")) {
            yield "grid--stretch product-list";
        }
        yield "\">
                                    ";
        // line 144
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 144, $this->source); })()), "products", [], "any", false, false, false, 144)) {
            // line 145
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 145, $this->source); })()), "products", [], "any", false, false, false, 145));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 146
                yield "                                            ";
                if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CatalogPageProductWidget", [$context["product"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 146, $this->source); })()), "viewMode", [], "any", false, false, false, 146)])) {
                    $this->loadTemplate("@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 146, 968632943)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["eventRevealer" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 148
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 148, $this->source); })()), "isAjaxHeader", [], "any", false, false, false, 148)) ? ("CART_UPDATE_EVENT") : (null))]]));
                    $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
                }                // line 152
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            yield "                                    ";
        } else {
            // line 154
            yield "                                        ";
            yield from $this->unwrap()->yieldBlock('noResults', $context, $blocks);
            // line 155
            yield "                                    ";
        }
        // line 156
        yield "                                </div>

                                ";
        // line 158
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("pagination"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 158)->unwrap()->yield(CoreExtension::toArray(["data" => CoreExtension::getAttribute($this->env, $this->source,         // line 159
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 159, $this->source); })()), "pagination", [], "any", false, false, false, 159)]));
        // line 161
        yield "                            ";
        yield from [];
    }

    // line 154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_noResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->yieldParentBlock("noResults", $context, $blocks);
        yield from [];
    }

    // line 182
    public function macro_renderBreadcrumbSteps($__categoryNode__ = null, $__isLastLeaf__ = null, $__filterPath__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "categoryNode" => $__categoryNode__,
            "isLastLeaf" => $__isLastLeaf__,
            "filterPath" => $__filterPath__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 183
            yield "                ";
            $macros["self"] = $this;
            // line 184
            yield "                ";
            $context["categoryUrl"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "url", [], "any", true, true, false, 184)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "url", [], "any", false, false, false, 184))) : (""));
            // line 185
            yield "                ";
            $context["categoryUrl"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 185, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 185, $this->source); })()), ["categoryPath" => $this->env->getFilter('trimLocale')->getCallable()((isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 185, $this->source); })()))])) : ((isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 185, $this->source); })())));
            // line 186
            yield "                ";
            $context["categoryLabel"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "name", [], "any", true, true, false, 186)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "name", [], "any", false, false, false, 186))) : (""));
            // line 187
            yield "                ";
            $context["categoryPatrentNodes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "parents", [], "any", true, true, false, 187)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "parents", [], "any", false, false, false, 187), null)) : (null));
            // line 188
            yield "
                ";
            // line 189
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["categoryPatrentNodes"]) || array_key_exists("categoryPatrentNodes", $context) ? $context["categoryPatrentNodes"] : (function () { throw new RuntimeError('Variable "categoryPatrentNodes" does not exist.', 189, $this->source); })()))) {
                // line 190
                yield "                    ";
                yield CoreExtension::callMacro($macros["self"], "macro_renderBreadcrumbSteps", [Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["categoryPatrentNodes"]) || array_key_exists("categoryPatrentNodes", $context) ? $context["categoryPatrentNodes"] : (function () { throw new RuntimeError('Variable "categoryPatrentNodes" does not exist.', 190, $this->source); })())), false, (isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 190, $this->source); })())], 190, $context, $this->getSourceContext());
                yield "

                    ";
                // line 192
                if ( !(isset($context["isLastLeaf"]) || array_key_exists("isLastLeaf", $context) ? $context["isLastLeaf"] : (function () { throw new RuntimeError('Variable "isLastLeaf" does not exist.', 192, $this->source); })())) {
                    // line 193
                    yield "                        ";
                    yield from                     $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breadcrumb-step"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 193)->unwrap()->yield(CoreExtension::toArray(["data" => ["url" =>                     // line 195
(isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 195, $this->source); })()), "label" =>                     // line 196
(isset($context["categoryLabel"]) || array_key_exists("categoryLabel", $context) ? $context["categoryLabel"] : (function () { throw new RuntimeError('Variable "categoryLabel" does not exist.', 196, $this->source); })())]]));
                    // line 199
                    yield "                    ";
                }
                // line 200
                yield "                ";
            }
            // line 201
            yield "            ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
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
        return array (  426 => 201,  423 => 200,  420 => 199,  418 => 196,  417 => 195,  415 => 193,  413 => 192,  407 => 190,  405 => 189,  402 => 188,  399 => 187,  396 => 186,  393 => 185,  390 => 184,  387 => 183,  373 => 182,  362 => 154,  357 => 161,  355 => 159,  354 => 158,  350 => 156,  347 => 155,  344 => 154,  341 => 153,  335 => 152,  332 => 148,  329 => 146,  324 => 145,  322 => 144,  316 => 143,  311 => 140,  309 => 137,  308 => 134,  304 => 132,  302 => 129,  301 => 128,  300 => 126,  296 => 124,  294 => 121,  293 => 120,  292 => 119,  291 => 117,  287 => 115,  280 => 114,  275 => 101,  273 => 98,  272 => 97,  271 => 95,  270 => 94,  269 => 93,  268 => 92,  267 => 91,  265 => 89,  258 => 88,  253 => 178,  251 => 172,  248 => 171,  246 => 164,  242 => 162,  240 => 114,  237 => 113,  235 => 112,  233 => 106,  228 => 102,  226 => 88,  223 => 87,  221 => 84,  220 => 81,  217 => 80,  210 => 79,  204 => 179,  202 => 79,  198 => 78,  195 => 77,  193 => 74,  192 => 73,  191 => 72,  190 => 70,  187 => 69,  184 => 68,  177 => 67,  172 => 63,  169 => 62,  167 => 58,  165 => 55,  162 => 54,  160 => 50,  159 => 49,  157 => 46,  154 => 45,  147 => 44,  142 => 39,  140 => 32,  138 => 29,  131 => 28,  124 => 40,  122 => 28,  118 => 26,  115 => 25,  108 => 24,  100 => 202,  97 => 181,  95 => 67,  90 => 64,  88 => 44,  85 => 43,  82 => 24,  75 => 23,  71 => 1,  70 => 19,  69 => 17,  68 => 16,  67 => 14,  66 => 13,  65 => 12,  64 => 11,  63 => 10,  62 => 9,  61 => 8,  60 => 7,  59 => 6,  58 => 5,  57 => 4,  56 => 3,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-catalog', '@SprykerShop:CatalogPage') %}

{% define data = {
    products: _view.products,
    facets: _view.facets,
    filteredFacets: _view.filteredFacets | default([]),
    category: _view.category | default,
    categories: categories | default([]),
    filterPath: _view.filterPath | default,
    viewMode: _view.viewMode | default,
    title: _view.category.name | default,
    metaTitle: _view.pageTitle | default(_view.category.name | default),
    metaDescription: _view.pageDescription | default,
    metaKeywords: _view.pageKeywords | default,
    pagination: {
        currentPage: _view.pagination.currentPage,
        maxPage: _view.pagination.maxPage,
    },
    isAjaxHeader: _view.isMiniCartAsyncModeEnabled | default(false),
    ajaxCartUrl: '/cart/async/mini-cart-view',
} %}

{% block container %}
    {% block breadcrumbs %}
        {% set breadcrumbSteps = _self.renderBreadcrumbSteps(data.category, false, data.filterPath) %}
        <div class=\"container\">
            <div class=\"container__inner\">
                {% block breadcrumb %}
                    {% embed molecule('breadcrumb') with {
                        modifiers: ['no-border'],
                        embed: {
                            breadcrumbs: breadcrumbSteps
                        }
                    } only %}
                        {% block breadcrumbs %}
                            {{ embed.breadcrumbs }}
                        {% endblock %}
                    {% endembed %}
                {% endblock %}
            </div>
        </div>
    {% endblock %}

    {% block title %}
        {% if data.category.image is defined %}
            {% include molecule('jumbotron') with {
                modifiers: ['category'],
                data: {
                    imageUrl: data.category.image,
                    headline: data.title,
                    subHeadline: null
                }
            } only %}
        {% else %}
            {% include molecule('jumbotron') with {
                modifiers: ['category', 'category-no-img'],
                data: {
                    headline: data.title,
                    subHeadline: null
                }
            } only %}
        {% endif %}
    {% endblock %}

    <div class=\"container\">
        <main class=\"container__inner\">
            {% block content %}
                {% set catalogJsName = 'js-catalog' %}

                {% include molecule('window-location-applicator', 'CatalogPage') with {
                    attributes: {
                        'form-class-name': catalogJsName ~ '__form',
                        'trigger-class-name': catalogJsName ~ '__trigger',
                        'sort-trigger-class-name': catalogJsName ~ '__sort-trigger',
                    },
                } only %}

                <form method=\"GET\" class=\"grid js-catalog-filter-target js-form-input-default-value-disabler__catalog-form {{ catalogJsName }}__form\">
                    {% block form %}
                        <div class=\"col col--sm-12 col--xl-3 catalog-left-side\">
                            {% include molecule('view-mode-switch', 'CatalogPage') with {
                                class: 'catalog-left-side__switcher',
                                data: {
                                    viewMode: data.viewMode,
                                }
                            } only %}

                            {% block filterSection %}
                                {% include organism('filter-section', 'CatalogPage') with {
                                    data: {
                                        facets: data.facets,
                                        filteredFacets: data.filteredFacets,
                                        filterPath: data.filterPath,
                                        categories: data.categories,
                                        isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                                        togglerClass: 'js-catalog-toggler-click__trigger',
                                        parentJsName: catalogJsName,
                                        numberFormatConfig: numberFormatConfig,
                                    },
                                } only %}
                            {% endblock %}
                        </div>

                        <div class=\"col col--sm-12 col--xl-9 catalog-right-side\">
                            <button type=\"button\" class=\"button button--hollow button--expand spacing-y spacing-y--big is-hidden-xl-only js-catalog-toggler-click__trigger\">
                                {%- include atom('icon') with {
                                    class: 'spacing-right',
                                    data: {
                                        name: 'filters'
                                    }
                                } only -%}
                                {{- 'catalog.filter.filter' | trans -}}
                            </button>
                            {% block catalogContent %}
                                <div class=\"grid\">
                                    <div class=\"col col--sm-12\">
                                        {% include molecule('sort', 'CatalogPage') with {
                                            data: {
                                                pagination: data.pagination,
                                                sort: data.sort,
                                                parentJsName: catalogJsName,
                                            },
                                        } only %}
                                    </div>
                                    <div class=\"col col--sm-12\">
                                        {% include organism('active-filter-section', 'CatalogPage') with {
                                            data: {
                                                facets: data.facets,
                                                filteredFacets: data.filteredFacets
                                            }
                                        } only %}
                                    </div>
                                    <div class=\"col col--sm-12\">
                                        {% include molecule('view-mode-switch', 'CatalogPage') with {
                                            class: 'is-hidden-xl-only',
                                            data: {
                                                viewMode: data.viewMode
                                            }
                                        } only %}
                                    </div>
                                </div>

                                <div class=\"grid {% if data.viewMode != 'list' %}grid--stretch product-list{% endif %}\">
                                    {% if data.products %}
                                        {% for product in data.products %}
                                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] with {
                                                data: {
                                                    eventRevealer: data.isAjaxHeader ? 'CART_UPDATE_EVENT' : null,
                                                },
                                            } only %}
                                            {% endwidget %}
                                        {% endfor %}
                                    {% else %}
                                        {% block noResults %}{{ parent() }}{% endblock %}
                                    {% endif %}
                                </div>

                                {% include molecule('pagination') with {
                                    data: data.pagination
                                } only %}
                            {% endblock %}
                        </div>

                        {% include molecule('toggler-click') with {
                            attributes: {
                                'trigger-class-name': 'js-catalog-toggler-click__trigger',
                                'target-class-name': 'js-catalog-filter-target',
                                'class-to-toggle': 'show-filter',
                            },
                        } only %}

                        {% include molecule('form-input-default-value-disabler') with {
                            attributes: {
                                'form-selector': '.js-form-input-default-value-disabler__catalog-form',
                                'input-selector': '.js-form-input-default-value-disabler__catalog-input'
                            }
                        } only %}
                    {% endblock %}
                </form>
            {% endblock %}

            {% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
                {% import _self as self %}
                {% set categoryUrl = categoryNode.url | default %}
                {% set categoryUrl = filterPath is not empty ? url(filterPath, {categoryPath: categoryUrl | trimLocale}) : categoryUrl %}
                {% set categoryLabel = categoryNode.name | default %}
                {% set categoryPatrentNodes = categoryNode.parents | default(null) %}

                {% if categoryPatrentNodes is not empty %}
                    {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

                    {% if not isLastLeaf %}
                        {% include molecule('breadcrumb-step') with {
                            data: {
                                url: categoryUrl,
                                label: categoryLabel
                            }
                        } only %}
                    {% endif %}
                {% endif %}
            {% endmacro %}

        </main>
    </div>
{% endblock %}
", "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_bae2d0bb547f46e700fa5eb6f65304df___700156460 extends Template
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
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 29
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breadcrumb"), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 29);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumbs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 36, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 36), "html", null, true);
        yield "
                        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
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
        return array (  707 => 36,  700 => 35,  690 => 29,  426 => 201,  423 => 200,  420 => 199,  418 => 196,  417 => 195,  415 => 193,  413 => 192,  407 => 190,  405 => 189,  402 => 188,  399 => 187,  396 => 186,  393 => 185,  390 => 184,  387 => 183,  373 => 182,  362 => 154,  357 => 161,  355 => 159,  354 => 158,  350 => 156,  347 => 155,  344 => 154,  341 => 153,  335 => 152,  332 => 148,  329 => 146,  324 => 145,  322 => 144,  316 => 143,  311 => 140,  309 => 137,  308 => 134,  304 => 132,  302 => 129,  301 => 128,  300 => 126,  296 => 124,  294 => 121,  293 => 120,  292 => 119,  291 => 117,  287 => 115,  280 => 114,  275 => 101,  273 => 98,  272 => 97,  271 => 95,  270 => 94,  269 => 93,  268 => 92,  267 => 91,  265 => 89,  258 => 88,  253 => 178,  251 => 172,  248 => 171,  246 => 164,  242 => 162,  240 => 114,  237 => 113,  235 => 112,  233 => 106,  228 => 102,  226 => 88,  223 => 87,  221 => 84,  220 => 81,  217 => 80,  210 => 79,  204 => 179,  202 => 79,  198 => 78,  195 => 77,  193 => 74,  192 => 73,  191 => 72,  190 => 70,  187 => 69,  184 => 68,  177 => 67,  172 => 63,  169 => 62,  167 => 58,  165 => 55,  162 => 54,  160 => 50,  159 => 49,  157 => 46,  154 => 45,  147 => 44,  142 => 39,  140 => 32,  138 => 29,  131 => 28,  124 => 40,  122 => 28,  118 => 26,  115 => 25,  108 => 24,  100 => 202,  97 => 181,  95 => 67,  90 => 64,  88 => 44,  85 => 43,  82 => 24,  75 => 23,  71 => 1,  70 => 19,  69 => 17,  68 => 16,  67 => 14,  66 => 13,  65 => 12,  64 => 11,  63 => 10,  62 => 9,  61 => 8,  60 => 7,  59 => 6,  58 => 5,  57 => 4,  56 => 3,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-catalog', '@SprykerShop:CatalogPage') %}

{% define data = {
    products: _view.products,
    facets: _view.facets,
    filteredFacets: _view.filteredFacets | default([]),
    category: _view.category | default,
    categories: categories | default([]),
    filterPath: _view.filterPath | default,
    viewMode: _view.viewMode | default,
    title: _view.category.name | default,
    metaTitle: _view.pageTitle | default(_view.category.name | default),
    metaDescription: _view.pageDescription | default,
    metaKeywords: _view.pageKeywords | default,
    pagination: {
        currentPage: _view.pagination.currentPage,
        maxPage: _view.pagination.maxPage,
    },
    isAjaxHeader: _view.isMiniCartAsyncModeEnabled | default(false),
    ajaxCartUrl: '/cart/async/mini-cart-view',
} %}

{% block container %}
    {% block breadcrumbs %}
        {% set breadcrumbSteps = _self.renderBreadcrumbSteps(data.category, false, data.filterPath) %}
        <div class=\"container\">
            <div class=\"container__inner\">
                {% block breadcrumb %}
                    {% embed molecule('breadcrumb') with {
                        modifiers: ['no-border'],
                        embed: {
                            breadcrumbs: breadcrumbSteps
                        }
                    } only %}
                        {% block breadcrumbs %}
                            {{ embed.breadcrumbs }}
                        {% endblock %}
                    {% endembed %}
                {% endblock %}
            </div>
        </div>
    {% endblock %}

    {% block title %}
        {% if data.category.image is defined %}
            {% include molecule('jumbotron') with {
                modifiers: ['category'],
                data: {
                    imageUrl: data.category.image,
                    headline: data.title,
                    subHeadline: null
                }
            } only %}
        {% else %}
            {% include molecule('jumbotron') with {
                modifiers: ['category', 'category-no-img'],
                data: {
                    headline: data.title,
                    subHeadline: null
                }
            } only %}
        {% endif %}
    {% endblock %}

    <div class=\"container\">
        <main class=\"container__inner\">
            {% block content %}
                {% set catalogJsName = 'js-catalog' %}

                {% include molecule('window-location-applicator', 'CatalogPage') with {
                    attributes: {
                        'form-class-name': catalogJsName ~ '__form',
                        'trigger-class-name': catalogJsName ~ '__trigger',
                        'sort-trigger-class-name': catalogJsName ~ '__sort-trigger',
                    },
                } only %}

                <form method=\"GET\" class=\"grid js-catalog-filter-target js-form-input-default-value-disabler__catalog-form {{ catalogJsName }}__form\">
                    {% block form %}
                        <div class=\"col col--sm-12 col--xl-3 catalog-left-side\">
                            {% include molecule('view-mode-switch', 'CatalogPage') with {
                                class: 'catalog-left-side__switcher',
                                data: {
                                    viewMode: data.viewMode,
                                }
                            } only %}

                            {% block filterSection %}
                                {% include organism('filter-section', 'CatalogPage') with {
                                    data: {
                                        facets: data.facets,
                                        filteredFacets: data.filteredFacets,
                                        filterPath: data.filterPath,
                                        categories: data.categories,
                                        isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                                        togglerClass: 'js-catalog-toggler-click__trigger',
                                        parentJsName: catalogJsName,
                                        numberFormatConfig: numberFormatConfig,
                                    },
                                } only %}
                            {% endblock %}
                        </div>

                        <div class=\"col col--sm-12 col--xl-9 catalog-right-side\">
                            <button type=\"button\" class=\"button button--hollow button--expand spacing-y spacing-y--big is-hidden-xl-only js-catalog-toggler-click__trigger\">
                                {%- include atom('icon') with {
                                    class: 'spacing-right',
                                    data: {
                                        name: 'filters'
                                    }
                                } only -%}
                                {{- 'catalog.filter.filter' | trans -}}
                            </button>
                            {% block catalogContent %}
                                <div class=\"grid\">
                                    <div class=\"col col--sm-12\">
                                        {% include molecule('sort', 'CatalogPage') with {
                                            data: {
                                                pagination: data.pagination,
                                                sort: data.sort,
                                                parentJsName: catalogJsName,
                                            },
                                        } only %}
                                    </div>
                                    <div class=\"col col--sm-12\">
                                        {% include organism('active-filter-section', 'CatalogPage') with {
                                            data: {
                                                facets: data.facets,
                                                filteredFacets: data.filteredFacets
                                            }
                                        } only %}
                                    </div>
                                    <div class=\"col col--sm-12\">
                                        {% include molecule('view-mode-switch', 'CatalogPage') with {
                                            class: 'is-hidden-xl-only',
                                            data: {
                                                viewMode: data.viewMode
                                            }
                                        } only %}
                                    </div>
                                </div>

                                <div class=\"grid {% if data.viewMode != 'list' %}grid--stretch product-list{% endif %}\">
                                    {% if data.products %}
                                        {% for product in data.products %}
                                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] with {
                                                data: {
                                                    eventRevealer: data.isAjaxHeader ? 'CART_UPDATE_EVENT' : null,
                                                },
                                            } only %}
                                            {% endwidget %}
                                        {% endfor %}
                                    {% else %}
                                        {% block noResults %}{{ parent() }}{% endblock %}
                                    {% endif %}
                                </div>

                                {% include molecule('pagination') with {
                                    data: data.pagination
                                } only %}
                            {% endblock %}
                        </div>

                        {% include molecule('toggler-click') with {
                            attributes: {
                                'trigger-class-name': 'js-catalog-toggler-click__trigger',
                                'target-class-name': 'js-catalog-filter-target',
                                'class-to-toggle': 'show-filter',
                            },
                        } only %}

                        {% include molecule('form-input-default-value-disabler') with {
                            attributes: {
                                'form-selector': '.js-form-input-default-value-disabler__catalog-form',
                                'input-selector': '.js-form-input-default-value-disabler__catalog-input'
                            }
                        } only %}
                    {% endblock %}
                </form>
            {% endblock %}

            {% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
                {% import _self as self %}
                {% set categoryUrl = categoryNode.url | default %}
                {% set categoryUrl = filterPath is not empty ? url(filterPath, {categoryPath: categoryUrl | trimLocale}) : categoryUrl %}
                {% set categoryLabel = categoryNode.name | default %}
                {% set categoryPatrentNodes = categoryNode.parents | default(null) %}

                {% if categoryPatrentNodes is not empty %}
                    {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

                    {% if not isLastLeaf %}
                        {% include molecule('breadcrumb-step') with {
                            data: {
                                url: categoryUrl,
                                label: categoryLabel
                            }
                        } only %}
                    {% endif %}
                {% endif %}
            {% endmacro %}

        </main>
    </div>
{% endblock %}
", "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_bae2d0bb547f46e700fa5eb6f65304df___968632943 extends Template
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
        // line 146
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 146, $this->source); })()), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 146);
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
        return "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
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
        return array (  972 => 146,  707 => 36,  700 => 35,  690 => 29,  426 => 201,  423 => 200,  420 => 199,  418 => 196,  417 => 195,  415 => 193,  413 => 192,  407 => 190,  405 => 189,  402 => 188,  399 => 187,  396 => 186,  393 => 185,  390 => 184,  387 => 183,  373 => 182,  362 => 154,  357 => 161,  355 => 159,  354 => 158,  350 => 156,  347 => 155,  344 => 154,  341 => 153,  335 => 152,  332 => 148,  329 => 146,  324 => 145,  322 => 144,  316 => 143,  311 => 140,  309 => 137,  308 => 134,  304 => 132,  302 => 129,  301 => 128,  300 => 126,  296 => 124,  294 => 121,  293 => 120,  292 => 119,  291 => 117,  287 => 115,  280 => 114,  275 => 101,  273 => 98,  272 => 97,  271 => 95,  270 => 94,  269 => 93,  268 => 92,  267 => 91,  265 => 89,  258 => 88,  253 => 178,  251 => 172,  248 => 171,  246 => 164,  242 => 162,  240 => 114,  237 => 113,  235 => 112,  233 => 106,  228 => 102,  226 => 88,  223 => 87,  221 => 84,  220 => 81,  217 => 80,  210 => 79,  204 => 179,  202 => 79,  198 => 78,  195 => 77,  193 => 74,  192 => 73,  191 => 72,  190 => 70,  187 => 69,  184 => 68,  177 => 67,  172 => 63,  169 => 62,  167 => 58,  165 => 55,  162 => 54,  160 => 50,  159 => 49,  157 => 46,  154 => 45,  147 => 44,  142 => 39,  140 => 32,  138 => 29,  131 => 28,  124 => 40,  122 => 28,  118 => 26,  115 => 25,  108 => 24,  100 => 202,  97 => 181,  95 => 67,  90 => 64,  88 => 44,  85 => 43,  82 => 24,  75 => 23,  71 => 1,  70 => 19,  69 => 17,  68 => 16,  67 => 14,  66 => 13,  65 => 12,  64 => 11,  63 => 10,  62 => 9,  61 => 8,  60 => 7,  59 => 6,  58 => 5,  57 => 4,  56 => 3,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-catalog', '@SprykerShop:CatalogPage') %}

{% define data = {
    products: _view.products,
    facets: _view.facets,
    filteredFacets: _view.filteredFacets | default([]),
    category: _view.category | default,
    categories: categories | default([]),
    filterPath: _view.filterPath | default,
    viewMode: _view.viewMode | default,
    title: _view.category.name | default,
    metaTitle: _view.pageTitle | default(_view.category.name | default),
    metaDescription: _view.pageDescription | default,
    metaKeywords: _view.pageKeywords | default,
    pagination: {
        currentPage: _view.pagination.currentPage,
        maxPage: _view.pagination.maxPage,
    },
    isAjaxHeader: _view.isMiniCartAsyncModeEnabled | default(false),
    ajaxCartUrl: '/cart/async/mini-cart-view',
} %}

{% block container %}
    {% block breadcrumbs %}
        {% set breadcrumbSteps = _self.renderBreadcrumbSteps(data.category, false, data.filterPath) %}
        <div class=\"container\">
            <div class=\"container__inner\">
                {% block breadcrumb %}
                    {% embed molecule('breadcrumb') with {
                        modifiers: ['no-border'],
                        embed: {
                            breadcrumbs: breadcrumbSteps
                        }
                    } only %}
                        {% block breadcrumbs %}
                            {{ embed.breadcrumbs }}
                        {% endblock %}
                    {% endembed %}
                {% endblock %}
            </div>
        </div>
    {% endblock %}

    {% block title %}
        {% if data.category.image is defined %}
            {% include molecule('jumbotron') with {
                modifiers: ['category'],
                data: {
                    imageUrl: data.category.image,
                    headline: data.title,
                    subHeadline: null
                }
            } only %}
        {% else %}
            {% include molecule('jumbotron') with {
                modifiers: ['category', 'category-no-img'],
                data: {
                    headline: data.title,
                    subHeadline: null
                }
            } only %}
        {% endif %}
    {% endblock %}

    <div class=\"container\">
        <main class=\"container__inner\">
            {% block content %}
                {% set catalogJsName = 'js-catalog' %}

                {% include molecule('window-location-applicator', 'CatalogPage') with {
                    attributes: {
                        'form-class-name': catalogJsName ~ '__form',
                        'trigger-class-name': catalogJsName ~ '__trigger',
                        'sort-trigger-class-name': catalogJsName ~ '__sort-trigger',
                    },
                } only %}

                <form method=\"GET\" class=\"grid js-catalog-filter-target js-form-input-default-value-disabler__catalog-form {{ catalogJsName }}__form\">
                    {% block form %}
                        <div class=\"col col--sm-12 col--xl-3 catalog-left-side\">
                            {% include molecule('view-mode-switch', 'CatalogPage') with {
                                class: 'catalog-left-side__switcher',
                                data: {
                                    viewMode: data.viewMode,
                                }
                            } only %}

                            {% block filterSection %}
                                {% include organism('filter-section', 'CatalogPage') with {
                                    data: {
                                        facets: data.facets,
                                        filteredFacets: data.filteredFacets,
                                        filterPath: data.filterPath,
                                        categories: data.categories,
                                        isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                                        togglerClass: 'js-catalog-toggler-click__trigger',
                                        parentJsName: catalogJsName,
                                        numberFormatConfig: numberFormatConfig,
                                    },
                                } only %}
                            {% endblock %}
                        </div>

                        <div class=\"col col--sm-12 col--xl-9 catalog-right-side\">
                            <button type=\"button\" class=\"button button--hollow button--expand spacing-y spacing-y--big is-hidden-xl-only js-catalog-toggler-click__trigger\">
                                {%- include atom('icon') with {
                                    class: 'spacing-right',
                                    data: {
                                        name: 'filters'
                                    }
                                } only -%}
                                {{- 'catalog.filter.filter' | trans -}}
                            </button>
                            {% block catalogContent %}
                                <div class=\"grid\">
                                    <div class=\"col col--sm-12\">
                                        {% include molecule('sort', 'CatalogPage') with {
                                            data: {
                                                pagination: data.pagination,
                                                sort: data.sort,
                                                parentJsName: catalogJsName,
                                            },
                                        } only %}
                                    </div>
                                    <div class=\"col col--sm-12\">
                                        {% include organism('active-filter-section', 'CatalogPage') with {
                                            data: {
                                                facets: data.facets,
                                                filteredFacets: data.filteredFacets
                                            }
                                        } only %}
                                    </div>
                                    <div class=\"col col--sm-12\">
                                        {% include molecule('view-mode-switch', 'CatalogPage') with {
                                            class: 'is-hidden-xl-only',
                                            data: {
                                                viewMode: data.viewMode
                                            }
                                        } only %}
                                    </div>
                                </div>

                                <div class=\"grid {% if data.viewMode != 'list' %}grid--stretch product-list{% endif %}\">
                                    {% if data.products %}
                                        {% for product in data.products %}
                                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] with {
                                                data: {
                                                    eventRevealer: data.isAjaxHeader ? 'CART_UPDATE_EVENT' : null,
                                                },
                                            } only %}
                                            {% endwidget %}
                                        {% endfor %}
                                    {% else %}
                                        {% block noResults %}{{ parent() }}{% endblock %}
                                    {% endif %}
                                </div>

                                {% include molecule('pagination') with {
                                    data: data.pagination
                                } only %}
                            {% endblock %}
                        </div>

                        {% include molecule('toggler-click') with {
                            attributes: {
                                'trigger-class-name': 'js-catalog-toggler-click__trigger',
                                'target-class-name': 'js-catalog-filter-target',
                                'class-to-toggle': 'show-filter',
                            },
                        } only %}

                        {% include molecule('form-input-default-value-disabler') with {
                            attributes: {
                                'form-selector': '.js-form-input-default-value-disabler__catalog-form',
                                'input-selector': '.js-form-input-default-value-disabler__catalog-input'
                            }
                        } only %}
                    {% endblock %}
                </form>
            {% endblock %}

            {% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
                {% import _self as self %}
                {% set categoryUrl = categoryNode.url | default %}
                {% set categoryUrl = filterPath is not empty ? url(filterPath, {categoryPath: categoryUrl | trimLocale}) : categoryUrl %}
                {% set categoryLabel = categoryNode.name | default %}
                {% set categoryPatrentNodes = categoryNode.parents | default(null) %}

                {% if categoryPatrentNodes is not empty %}
                    {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

                    {% if not isLastLeaf %}
                        {% include molecule('breadcrumb-step') with {
                            data: {
                                url: categoryUrl,
                                label: categoryLabel
                            }
                        } only %}
                    {% endif %}
                {% endif %}
            {% endmacro %}

        </main>
    </div>
{% endblock %}
", "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}
