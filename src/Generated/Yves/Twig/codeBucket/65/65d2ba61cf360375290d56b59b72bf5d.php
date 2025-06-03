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

/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_2be26aee9068e7f3eb7a6716ac1591d5 extends Template
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
            'headScripts' => [$this, 'block_headScripts'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
            'form' => [$this, 'block_form'],
            'filterBar' => [$this, 'block_filterBar'],
            'noResults' => [$this, 'block_noResults'],
            'footerScripts' => [$this, 'block_footerScripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("page-critical-path"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["products" =>         // line 4
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 4, $this->source); })()), "facets" =>         // line 5
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 5, $this->source); })()), "filteredFacets" => [], "category" => null, "categories" => [], "categoryId" => null, "filterPath" => null, "viewMode" => null, "isEmptyCategoryFilterValueVisible" => null, "sort" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["_view"] ?? null), "sort", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "sort", [], "any", false, false, false, 13))) : ("")), "pagination" => ["currentPage" =>         // line 15
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 15, $this->source); })()), "maxPage" =>         // line 16
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 16, $this->source); })()), "parameters" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "all", [], "method", false, false, false, 17), "paginationPath" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "getPathInfo", [], "method", false, false, false, 18), "showAlwaysFirstAndLast" => true, "numFound" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 20
($context["_view"] ?? null), "pagination", [], "any", false, true, false, 20), "numFound", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "pagination", [], "any", false, true, false, 20), "numFound", [], "any", false, false, false, 20))) : ("")), "config" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 21
($context["_view"] ?? null), "pagination", [], "any", false, true, false, 21), "config", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "pagination", [], "any", false, true, false, 21), "config", [], "any", false, false, false, 21))) : ("")), "currentItemsPerPage" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 22
($context["_view"] ?? null), "pagination", [], "any", false, true, false, 22), "currentItemsPerPage", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "pagination", [], "any", false, true, false, 22), "currentItemsPerPage", [], "any", false, false, false, 22))) : (""))], "numberFormatConfig" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["_view"] ?? null), "numberFormatConfig", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "numberFormatConfig", [], "any", false, false, false, 24), [])) : ([])), "isAjaxHeader" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["_view"] ?? null), "isMiniCartAsyncModeEnabled", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "isMiniCartAsyncModeEnabled", [], "any", false, false, false, 25), false)) : (false))], $context['data']);        // line 28
        $context["numberFormatConfig"] = [];
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "numberFormatConfig", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 30
            $context["numberFormatConfig"] = Twig\Extension\CoreExtension::merge((isset($context["numberFormatConfig"]) || array_key_exists("numberFormatConfig", $context) ? $context["numberFormatConfig"] : (function () { throw new RuntimeError('Variable "numberFormatConfig" does not exist.', 30, $this->source); })()), [Twig\Extension\CoreExtension::replace($context["key"], ["_symbol" => "", "_" => "-"]) => $context["value"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "    ";
        yield from $this->yieldParentBlock("headScripts", $context, $blocks);
        yield "

    ";
        // line 56
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", ["catalog-header"])) {
            $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 56, 642143631)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumbs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        yield "    ";
        $macros["self"] = $this;
        // line 62
        yield "
    ";
        // line 63
        yield from         $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 63, "265147289")->unwrap()->yield(CoreExtension::toArray(["embed" => ["breadcrumbs" => CoreExtension::callMacro($macros["self"], "macro_renderBreadcrumbSteps", [CoreExtension::getAttribute($this->env, $this->source,         // line 65
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 65, $this->source); })()), "category", [], "any", false, false, false, 65), true, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 65, $this->source); })()), "filterPath", [], "any", false, false, false, 65)], 65, $context, $this->getSourceContext())]]));
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "    ";
        $context["catalogJsName"] = "js-catalog";
        // line 76
        yield "
    ";
        // line 77
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("window-location-applicator", "CatalogPage"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 77)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["form-class-name" => (        // line 79
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 79, $this->source); })()) . "__form"), "trigger-class-name" => (        // line 80
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 80, $this->source); })()) . "__trigger")]]));
        // line 83
        yield "
    <form method=\"GET\" class=\"grid ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 84, $this->source); })()), "html", null, true);
        yield "__form\" data-init-default-value-form>
        ";
        // line 85
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        // line 168
        yield "    </form>
";
        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 86
        yield "            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                ";
        // line 87
        yield from $this->unwrap()->yieldBlock('filterBar', $context, $blocks);
        // line 119
        yield "            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                ";
        // line 122
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("sort", "CatalogPage"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 122)->unwrap()->yield(CoreExtension::toArray(["class" => "box", "data" => ["pagination" => CoreExtension::getAttribute($this->env, $this->source,         // line 125
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 125, $this->source); })()), "pagination", [], "any", false, false, false, 125), "sort" => CoreExtension::getAttribute($this->env, $this->source,         // line 126
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 126, $this->source); })()), "sort", [], "any", false, false, false, 126), "parentJsName" =>         // line 127
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 127, $this->source); })())]]));
        // line 130
        yield "
                ";
        // line 131
        yield from         $this->loadTemplate($this->env->getFunction('organism')->getCallable()("active-filter-section", "CatalogPage"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 131)->unwrap()->yield(CoreExtension::toArray(["class" => "spacing-top spacing-top--big", "data" => ["facets" => CoreExtension::getAttribute($this->env, $this->source,         // line 134
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 134, $this->source); })()), "facets", [], "any", false, false, false, 134), "filteredFacets" => CoreExtension::getAttribute($this->env, $this->source,         // line 135
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 135, $this->source); })()), "filteredFacets", [], "any", false, false, false, 135)]]));
        // line 138
        yield "
                ";
        // line 139
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("pagination"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 139)->unwrap()->yield(CoreExtension::toArray(["class" => "box spacing-top spacing-top--big", "data" => CoreExtension::getAttribute($this->env, $this->source,         // line 141
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 141, $this->source); })()), "pagination", [], "any", false, false, false, 141)]));
        // line 143
        yield "
                <div class=\"grid grid--stretch\">
                    ";
        // line 145
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 145, $this->source); })()), "products", [], "any", false, false, false, 145)) {
            // line 146
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 146, $this->source); })()), "products", [], "any", false, false, false, 146));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 147
                yield "                            ";
                if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CatalogPageProductWidget", [$context["product"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 147, $this->source); })()), "viewMode", [], "any", false, false, false, 147)])) {
                    $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 147, 340706639)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["eventRevealer" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 149
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 149, $this->source); })()), "isAjaxHeader", [], "any", false, false, false, 149)) ? ("CART_UPDATE_EVENT") : (null))]]));
                    $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
                } elseif ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductWidgetPlugin", [                // line 152
$context["product"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 152, $this->source); })()), "viewMode", [], "any", false, false, false, 152)])) {
                    $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 147, 1726158289)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                    $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
                }                // line 154
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "                    ";
        } else {
            // line 156
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('noResults', $context, $blocks);
            // line 159
            yield "                    ";
        }
        // line 160
        yield "                </div>

                ";
        // line 162
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("pagination"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 162)->unwrap()->yield(CoreExtension::toArray(["class" => "box", "data" => CoreExtension::getAttribute($this->env, $this->source,         // line 164
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 164, $this->source); })()), "pagination", [], "any", false, false, false, 164)]));
        // line 166
        yield "            </div>
        ";
        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filterBar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        yield "                    ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("view-mode-switch", "CatalogPage"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 88)->unwrap()->yield(CoreExtension::toArray(["class" => "box"]));
        // line 91
        yield "
                    ";
        // line 92
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-checkbox"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 92)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["expand"], "class" => "box spacing-top spacing-top--big is-hidden-lg-xl", "data" => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.show_hide_button")], "attributes" => ["target-class-name" => "js-catalog__filters-toggle", "class-to-toggle" => "is-hidden-sm-md", "checked" => true]]));
        // line 104
        yield "
                    ";
        // line 105
        yield from         $this->loadTemplate($this->env->getFunction('organism')->getCallable()("filter-section", "CatalogPage"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 105)->unwrap()->yield(CoreExtension::toArray(["class" => "box spacing-top spacing-top--big js-catalog__filters-toggle", "data" => ["facets" => CoreExtension::getAttribute($this->env, $this->source,         // line 108
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 108, $this->source); })()), "facets", [], "any", false, false, false, 108), "filteredFacets" => CoreExtension::getAttribute($this->env, $this->source,         // line 109
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "filteredFacets", [], "any", false, false, false, 109), "filterPath" => CoreExtension::getAttribute($this->env, $this->source,         // line 110
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 110, $this->source); })()), "filterPath", [], "any", false, false, false, 110), "categories" => CoreExtension::getAttribute($this->env, $this->source,         // line 111
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })()), "categories", [], "any", false, false, false, 111), "category" => CoreExtension::getAttribute($this->env, $this->source,         // line 112
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "category", [], "any", false, false, false, 112), "isEmptyCategoryFilterValueVisible" => CoreExtension::getAttribute($this->env, $this->source,         // line 113
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 113, $this->source); })()), "isEmptyCategoryFilterValueVisible", [], "any", false, false, false, 113), "parentJsName" =>         // line 114
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 114, $this->source); })()), "numberFormatConfig" =>         // line 115
(isset($context["numberFormatConfig"]) || array_key_exists("numberFormatConfig", $context) ? $context["numberFormatConfig"] : (function () { throw new RuntimeError('Variable "numberFormatConfig" does not exist.', 115, $this->source); })())]]));
        // line 118
        yield "                ";
        yield from [];
    }

    // line 156
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_noResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 157
        yield "                            <div class=\"col col--sm-12 text-center\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.no-results"), "html", null, true);
        yield "</div>
                        ";
        yield from [];
    }

    // line 171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footerScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 172
        yield "    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", ["catalog-footer"])) {
            $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 172, 478943377)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 174
        yield "
    ";
        // line 175
        yield from $this->yieldParentBlock("footerScripts", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 33
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
            // line 34
            yield "    ";
            $macros["self"] = $this;
            // line 35
            yield "    ";
            $context["categoryUrl"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "url", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "url", [], "any", false, false, false, 35))) : (""));
            // line 36
            yield "    ";
            $context["categoryUrl"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 36, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 36, $this->source); })()), ["categoryPath" => $this->env->getFilter('trimLocale')->getCallable()((isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 36, $this->source); })()))])) : ((isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 36, $this->source); })())));
            // line 37
            yield "    ";
            $context["categoryLabel"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "name", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "name", [], "any", false, false, false, 37))) : (""));
            // line 38
            yield "    ";
            $context["categoryPatrentNodes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "parents", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryNode"] ?? null), "parents", [], "any", false, false, false, 38))) : (""));
            // line 39
            yield "
    ";
            // line 40
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["categoryPatrentNodes"]) || array_key_exists("categoryPatrentNodes", $context) ? $context["categoryPatrentNodes"] : (function () { throw new RuntimeError('Variable "categoryPatrentNodes" does not exist.', 40, $this->source); })()))) {
                // line 41
                yield "        ";
                yield CoreExtension::callMacro($macros["self"], "macro_renderBreadcrumbSteps", [Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["categoryPatrentNodes"]) || array_key_exists("categoryPatrentNodes", $context) ? $context["categoryPatrentNodes"] : (function () { throw new RuntimeError('Variable "categoryPatrentNodes" does not exist.', 41, $this->source); })())), false, (isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 41, $this->source); })())], 41, $context, $this->getSourceContext());
                yield "

        ";
                // line 43
                yield from                 $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breadcrumb-step"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 43)->unwrap()->yield(CoreExtension::toArray(["data" => ["url" =>                 // line 45
(isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 45, $this->source); })()), "label" =>                 // line 46
(isset($context["categoryLabel"]) || array_key_exists("categoryLabel", $context) ? $context["categoryLabel"] : (function () { throw new RuntimeError('Variable "categoryLabel" does not exist.', 46, $this->source); })()), "withChevron" =>  !                // line 47
(isset($context["isLastLeaf"]) || array_key_exists("isLastLeaf", $context) ? $context["isLastLeaf"] : (function () { throw new RuntimeError('Variable "isLastLeaf" does not exist.', 47, $this->source); })())]]));
                // line 50
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
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
        return array (  352 => 50,  350 => 47,  349 => 46,  348 => 45,  347 => 43,  341 => 41,  339 => 40,  336 => 39,  333 => 38,  330 => 37,  327 => 36,  324 => 35,  321 => 34,  307 => 33,  300 => 175,  297 => 174,  292 => 172,  285 => 171,  277 => 157,  270 => 156,  265 => 118,  263 => 115,  262 => 114,  261 => 113,  260 => 112,  259 => 111,  258 => 110,  257 => 109,  256 => 108,  255 => 105,  252 => 104,  250 => 92,  247 => 91,  244 => 88,  237 => 87,  231 => 166,  229 => 164,  228 => 162,  224 => 160,  221 => 159,  218 => 156,  215 => 155,  209 => 154,  205 => 152,  202 => 149,  199 => 147,  194 => 146,  192 => 145,  188 => 143,  186 => 141,  185 => 139,  182 => 138,  180 => 135,  179 => 134,  178 => 131,  175 => 130,  173 => 127,  172 => 126,  171 => 125,  170 => 122,  165 => 119,  163 => 87,  160 => 86,  153 => 85,  147 => 168,  145 => 85,  141 => 84,  138 => 83,  136 => 80,  135 => 79,  134 => 77,  131 => 76,  128 => 75,  121 => 74,  116 => 65,  115 => 63,  112 => 62,  109 => 61,  102 => 60,  95 => 56,  89 => 54,  82 => 53,  78 => 1,  72 => 30,  68 => 29,  66 => 28,  65 => 25,  64 => 24,  63 => 22,  62 => 21,  61 => 20,  60 => 18,  59 => 17,  58 => 16,  57 => 15,  56 => 13,  55 => 5,  54 => 4,  53 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort | default,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound | default,
        config: _view.pagination.config | default,
        currentItemsPerPage: _view.pagination.currentItemsPerPage | default,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
    isAjaxHeader: _view.isMiniCartAsyncModeEnabled | default(false),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] with {
                                data: {
                                    eventRevealer: data.isAjaxHeader ? 'CART_UPDATE_EVENT' : null,
                                },
                            } only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_2be26aee9068e7f3eb7a6716ac1591d5___642143631 extends Template
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
        // line 56
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 56, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 56);
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
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
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
        return array (  587 => 56,  352 => 50,  350 => 47,  349 => 46,  348 => 45,  347 => 43,  341 => 41,  339 => 40,  336 => 39,  333 => 38,  330 => 37,  327 => 36,  324 => 35,  321 => 34,  307 => 33,  300 => 175,  297 => 174,  292 => 172,  285 => 171,  277 => 157,  270 => 156,  265 => 118,  263 => 115,  262 => 114,  261 => 113,  260 => 112,  259 => 111,  258 => 110,  257 => 109,  256 => 108,  255 => 105,  252 => 104,  250 => 92,  247 => 91,  244 => 88,  237 => 87,  231 => 166,  229 => 164,  228 => 162,  224 => 160,  221 => 159,  218 => 156,  215 => 155,  209 => 154,  205 => 152,  202 => 149,  199 => 147,  194 => 146,  192 => 145,  188 => 143,  186 => 141,  185 => 139,  182 => 138,  180 => 135,  179 => 134,  178 => 131,  175 => 130,  173 => 127,  172 => 126,  171 => 125,  170 => 122,  165 => 119,  163 => 87,  160 => 86,  153 => 85,  147 => 168,  145 => 85,  141 => 84,  138 => 83,  136 => 80,  135 => 79,  134 => 77,  131 => 76,  128 => 75,  121 => 74,  116 => 65,  115 => 63,  112 => 62,  109 => 61,  102 => 60,  95 => 56,  89 => 54,  82 => 53,  78 => 1,  72 => 30,  68 => 29,  66 => 28,  65 => 25,  64 => 24,  63 => 22,  62 => 21,  61 => 20,  60 => 18,  59 => 17,  58 => 16,  57 => 15,  56 => 13,  55 => 5,  54 => 4,  53 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort | default,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound | default,
        config: _view.pagination.config | default,
        currentItemsPerPage: _view.pagination.currentItemsPerPage | default,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
    isAjaxHeader: _view.isMiniCartAsyncModeEnabled | default(false),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] with {
                                data: {
                                    eventRevealer: data.isAjaxHeader ? 'CART_UPDATE_EVENT' : null,
                                },
                            } only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_2be26aee9068e7f3eb7a6716ac1591d5___265147289 extends Template
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
        // line 63
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breadcrumb"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 63);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumbs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 69, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 69), "html", null, true);
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
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
        return array (  843 => 69,  836 => 68,  826 => 63,  587 => 56,  352 => 50,  350 => 47,  349 => 46,  348 => 45,  347 => 43,  341 => 41,  339 => 40,  336 => 39,  333 => 38,  330 => 37,  327 => 36,  324 => 35,  321 => 34,  307 => 33,  300 => 175,  297 => 174,  292 => 172,  285 => 171,  277 => 157,  270 => 156,  265 => 118,  263 => 115,  262 => 114,  261 => 113,  260 => 112,  259 => 111,  258 => 110,  257 => 109,  256 => 108,  255 => 105,  252 => 104,  250 => 92,  247 => 91,  244 => 88,  237 => 87,  231 => 166,  229 => 164,  228 => 162,  224 => 160,  221 => 159,  218 => 156,  215 => 155,  209 => 154,  205 => 152,  202 => 149,  199 => 147,  194 => 146,  192 => 145,  188 => 143,  186 => 141,  185 => 139,  182 => 138,  180 => 135,  179 => 134,  178 => 131,  175 => 130,  173 => 127,  172 => 126,  171 => 125,  170 => 122,  165 => 119,  163 => 87,  160 => 86,  153 => 85,  147 => 168,  145 => 85,  141 => 84,  138 => 83,  136 => 80,  135 => 79,  134 => 77,  131 => 76,  128 => 75,  121 => 74,  116 => 65,  115 => 63,  112 => 62,  109 => 61,  102 => 60,  95 => 56,  89 => 54,  82 => 53,  78 => 1,  72 => 30,  68 => 29,  66 => 28,  65 => 25,  64 => 24,  63 => 22,  62 => 21,  61 => 20,  60 => 18,  59 => 17,  58 => 16,  57 => 15,  56 => 13,  55 => 5,  54 => 4,  53 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort | default,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound | default,
        config: _view.pagination.config | default,
        currentItemsPerPage: _view.pagination.currentItemsPerPage | default,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
    isAjaxHeader: _view.isMiniCartAsyncModeEnabled | default(false),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] with {
                                data: {
                                    eventRevealer: data.isAjaxHeader ? 'CART_UPDATE_EVENT' : null,
                                },
                            } only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_2be26aee9068e7f3eb7a6716ac1591d5___340706639 extends Template
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
        // line 147
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 147, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 147);
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
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
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
        return array (  1079 => 147,  843 => 69,  836 => 68,  826 => 63,  587 => 56,  352 => 50,  350 => 47,  349 => 46,  348 => 45,  347 => 43,  341 => 41,  339 => 40,  336 => 39,  333 => 38,  330 => 37,  327 => 36,  324 => 35,  321 => 34,  307 => 33,  300 => 175,  297 => 174,  292 => 172,  285 => 171,  277 => 157,  270 => 156,  265 => 118,  263 => 115,  262 => 114,  261 => 113,  260 => 112,  259 => 111,  258 => 110,  257 => 109,  256 => 108,  255 => 105,  252 => 104,  250 => 92,  247 => 91,  244 => 88,  237 => 87,  231 => 166,  229 => 164,  228 => 162,  224 => 160,  221 => 159,  218 => 156,  215 => 155,  209 => 154,  205 => 152,  202 => 149,  199 => 147,  194 => 146,  192 => 145,  188 => 143,  186 => 141,  185 => 139,  182 => 138,  180 => 135,  179 => 134,  178 => 131,  175 => 130,  173 => 127,  172 => 126,  171 => 125,  170 => 122,  165 => 119,  163 => 87,  160 => 86,  153 => 85,  147 => 168,  145 => 85,  141 => 84,  138 => 83,  136 => 80,  135 => 79,  134 => 77,  131 => 76,  128 => 75,  121 => 74,  116 => 65,  115 => 63,  112 => 62,  109 => 61,  102 => 60,  95 => 56,  89 => 54,  82 => 53,  78 => 1,  72 => 30,  68 => 29,  66 => 28,  65 => 25,  64 => 24,  63 => 22,  62 => 21,  61 => 20,  60 => 18,  59 => 17,  58 => 16,  57 => 15,  56 => 13,  55 => 5,  54 => 4,  53 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort | default,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound | default,
        config: _view.pagination.config | default,
        currentItemsPerPage: _view.pagination.currentItemsPerPage | default,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
    isAjaxHeader: _view.isMiniCartAsyncModeEnabled | default(false),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] with {
                                data: {
                                    eventRevealer: data.isAjaxHeader ? 'CART_UPDATE_EVENT' : null,
                                },
                            } only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_2be26aee9068e7f3eb7a6716ac1591d5___1726158289 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 147, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 147);
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
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
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
        return array (  1079 => 147,  843 => 69,  836 => 68,  826 => 63,  587 => 56,  352 => 50,  350 => 47,  349 => 46,  348 => 45,  347 => 43,  341 => 41,  339 => 40,  336 => 39,  333 => 38,  330 => 37,  327 => 36,  324 => 35,  321 => 34,  307 => 33,  300 => 175,  297 => 174,  292 => 172,  285 => 171,  277 => 157,  270 => 156,  265 => 118,  263 => 115,  262 => 114,  261 => 113,  260 => 112,  259 => 111,  258 => 110,  257 => 109,  256 => 108,  255 => 105,  252 => 104,  250 => 92,  247 => 91,  244 => 88,  237 => 87,  231 => 166,  229 => 164,  228 => 162,  224 => 160,  221 => 159,  218 => 156,  215 => 155,  209 => 154,  205 => 152,  202 => 149,  199 => 147,  194 => 146,  192 => 145,  188 => 143,  186 => 141,  185 => 139,  182 => 138,  180 => 135,  179 => 134,  178 => 131,  175 => 130,  173 => 127,  172 => 126,  171 => 125,  170 => 122,  165 => 119,  163 => 87,  160 => 86,  153 => 85,  147 => 168,  145 => 85,  141 => 84,  138 => 83,  136 => 80,  135 => 79,  134 => 77,  131 => 76,  128 => 75,  121 => 74,  116 => 65,  115 => 63,  112 => 62,  109 => 61,  102 => 60,  95 => 56,  89 => 54,  82 => 53,  78 => 1,  72 => 30,  68 => 29,  66 => 28,  65 => 25,  64 => 24,  63 => 22,  62 => 21,  61 => 20,  60 => 18,  59 => 17,  58 => 16,  57 => 15,  56 => 13,  55 => 5,  54 => 4,  53 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort | default,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound | default,
        config: _view.pagination.config | default,
        currentItemsPerPage: _view.pagination.currentItemsPerPage | default,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
    isAjaxHeader: _view.isMiniCartAsyncModeEnabled | default(false),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] with {
                                data: {
                                    eventRevealer: data.isAjaxHeader ? 'CART_UPDATE_EVENT' : null,
                                },
                            } only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_2be26aee9068e7f3eb7a6716ac1591d5___478943377 extends Template
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
        // line 172
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 172, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 172);
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
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
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
        return array (  1554 => 172,  1079 => 147,  843 => 69,  836 => 68,  826 => 63,  587 => 56,  352 => 50,  350 => 47,  349 => 46,  348 => 45,  347 => 43,  341 => 41,  339 => 40,  336 => 39,  333 => 38,  330 => 37,  327 => 36,  324 => 35,  321 => 34,  307 => 33,  300 => 175,  297 => 174,  292 => 172,  285 => 171,  277 => 157,  270 => 156,  265 => 118,  263 => 115,  262 => 114,  261 => 113,  260 => 112,  259 => 111,  258 => 110,  257 => 109,  256 => 108,  255 => 105,  252 => 104,  250 => 92,  247 => 91,  244 => 88,  237 => 87,  231 => 166,  229 => 164,  228 => 162,  224 => 160,  221 => 159,  218 => 156,  215 => 155,  209 => 154,  205 => 152,  202 => 149,  199 => 147,  194 => 146,  192 => 145,  188 => 143,  186 => 141,  185 => 139,  182 => 138,  180 => 135,  179 => 134,  178 => 131,  175 => 130,  173 => 127,  172 => 126,  171 => 125,  170 => 122,  165 => 119,  163 => 87,  160 => 86,  153 => 85,  147 => 168,  145 => 85,  141 => 84,  138 => 83,  136 => 80,  135 => 79,  134 => 77,  131 => 76,  128 => 75,  121 => 74,  116 => 65,  115 => 63,  112 => 62,  109 => 61,  102 => 60,  95 => 56,  89 => 54,  82 => 53,  78 => 1,  72 => 30,  68 => 29,  66 => 28,  65 => 25,  64 => 24,  63 => 22,  62 => 21,  61 => 20,  60 => 18,  59 => 17,  58 => 16,  57 => 15,  56 => 13,  55 => 5,  54 => 4,  53 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort | default,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound | default,
        config: _view.pagination.config | default,
        currentItemsPerPage: _view.pagination.currentItemsPerPage | default,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
    isAjaxHeader: _view.isMiniCartAsyncModeEnabled | default(false),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] with {
                                data: {
                                    eventRevealer: data.isAjaxHeader ? 'CART_UPDATE_EVENT' : null,
                                },
                            } only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}
