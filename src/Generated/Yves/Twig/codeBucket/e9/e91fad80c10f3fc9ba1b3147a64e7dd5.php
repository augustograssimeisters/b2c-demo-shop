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

/* @CatalogPage/components/molecules/filter-category/filter-category.twig */
class __TwigTemplate_a9125657c719b76d3d871c065f33df13 extends Template
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
            'categoryItemToggler' => [$this, 'block_categoryItemToggler'],
            'categoryItemTogglerIcon' => [$this, 'block_categoryItemTogglerIcon'],
            'categoryItemTogglerHandlers' => [$this, 'block_categoryItemTogglerHandlers'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("filter-category", "@SprykerShop:CatalogPage"), "@CatalogPage/components/molecules/filter-category/filter-category.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["levelMenu" => 1], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        $context["categoryPath"] = (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", ["categoryNode"], "method", false, false, false, 8))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", ["categoryNode"], "method", false, false, false, 9), "url", [], "any", false, false, false, 9)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", ["categoryPath"], "method", false, false, false, 10)));
        // line 12
        yield "
    <ul class=\"menu\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "categories", [], "any", false, false, false, 14));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["categoryNode"]) {
            // line 15
            yield "            ";
            $context["quantity"] = 0;
            // line 16
            yield "            ";
            $context["hasChildren"] =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, $context["categoryNode"], "children", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["categoryNode"], "children", [], "any", false, false, false, 16), [])) : ([])));
            // line 17
            yield "
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "filter", [], "any", false, false, false, 18), "values", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["filterValue"]) {
                // line 19
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["filterValue"], "value", [], "any", false, false, false, 19) == CoreExtension::getAttribute($this->env, $this->source, $context["categoryNode"], "nodeId", [], "any", false, false, false, 19))) {
                    // line 20
                    yield "                    ";
                    $context["quantity"] = CoreExtension::getAttribute($this->env, $this->source, $context["filterValue"], "docCount", [], "any", false, false, false, 20);
                    // line 21
                    yield "                ";
                }
                // line 22
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filterValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "
            ";
            // line 24
            $context["currentUrl"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "filterPath", [], "any", false, false, false, 24))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "filterPath", [], "any", false, false, false, 24), ["categoryPath" => (isset($context["categoryPath"]) || array_key_exists("categoryPath", $context) ? $context["categoryPath"] : (function () { throw new RuntimeError('Variable "categoryPath" does not exist.', 24, $this->source); })())])) : ((isset($context["categoryPath"]) || array_key_exists("categoryPath", $context) ? $context["categoryPath"] : (function () { throw new RuntimeError('Variable "categoryPath" does not exist.', 24, $this->source); })())));
            // line 25
            yield "            ";
            $context["categoryUrl"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "filterPath", [], "any", false, false, false, 25))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "filterPath", [], "any", false, false, false, 25), ["categoryPath" => $this->env->getFilter('trimLocale')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["categoryNode"], "url", [], "any", false, false, false, 25))])) : (CoreExtension::getAttribute($this->env, $this->source, $context["categoryNode"], "url", [], "any", false, false, false, 25)));
            // line 26
            yield "            ";
            $context["isActive"] = ((isset($context["currentUrl"]) || array_key_exists("currentUrl", $context) ? $context["currentUrl"] : (function () { throw new RuntimeError('Variable "currentUrl" does not exist.', 26, $this->source); })()) == (isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 26, $this->source); })()));
            // line 27
            yield "            ";
            $context["disableAttribute"] = ((((isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 27, $this->source); })()) == 0)) ? ("disabled") : (""));
            // line 28
            yield "            ";
            $context["classes"] = [(CoreExtension::getAttribute($this->env, $this->source,             // line 29
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29) . "__item"), ((CoreExtension::getAttribute($this->env, $this->source,             // line 30
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30) . "__item--level-") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "levelMenu", [], "any", false, false, false, 30)), ((            // line 31
(isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 31, $this->source); })())) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31) . "__item--active")) : ("")), ((            // line 32
(isset($context["hasChildren"]) || array_key_exists("hasChildren", $context) ? $context["hasChildren"] : (function () { throw new RuntimeError('Variable "hasChildren" does not exist.', 32, $this->source); })())) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32) . "__item--children")) : (""))];
            // line 34
            yield "            ";
            $context["linkActiveClass"] = (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 34, $this->source); })())) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34) . "__link--active")) : (""));
            // line 35
            yield "            ";
            $context["triggerButtonJsName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "parentJsName", [], "any", false, false, false, 35)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "parentJsName", [], "any", false, false, false, 35) . "__trigger")) : (""));
            // line 36
            yield "
            ";
            // line 37
            $context["categoryNamePrepared"] = Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["categoryNode"], "name", [], "any", false, false, false, 37), ["[^a-zA-Z0-9]" => "_"]);
            // line 38
            yield "            ";
            $context["childrenClass"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["categoryNode"], "hasChildren", [], "any", false, false, false, 38)) ? ("menu__item--has-children-list") : (""));
            // line 39
            yield "            ";
            $context["triggerClassName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "jsName", [], "any", false, false, false, 39) . "__category-trigger-") . (isset($context["categoryNamePrepared"]) || array_key_exists("categoryNamePrepared", $context) ? $context["categoryNamePrepared"] : (function () { throw new RuntimeError('Variable "categoryNamePrepared" does not exist.', 39, $this->source); })()));
            // line 40
            yield "            ";
            $context["targetCategoryClassName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 40, $this->source); })()), "jsName", [], "any", false, false, false, 40) . "__category-target-") . (isset($context["categoryNamePrepared"]) || array_key_exists("categoryNamePrepared", $context) ? $context["categoryNamePrepared"] : (function () { throw new RuntimeError('Variable "categoryNamePrepared" does not exist.', 40, $this->source); })()));
            // line 41
            yield "            ";
            $context["targetTogglerClassName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "jsName", [], "any", false, false, false, 41) . "__toggler-target-") . (isset($context["categoryNamePrepared"]) || array_key_exists("categoryNamePrepared", $context) ? $context["categoryNamePrepared"] : (function () { throw new RuntimeError('Variable "categoryNamePrepared" does not exist.', 41, $this->source); })()));
            // line 42
            yield "            ";
            $context["classToToggle"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42) . "__category-target");
            // line 43
            yield "            ";
            $context["categoryTargetInner"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43) . "__category-target-inner");
            // line 44
            yield "            ";
            $context["classToToggleModifier"] = ((isset($context["classToToggle"]) || array_key_exists("classToToggle", $context) ? $context["classToToggle"] : (function () { throw new RuntimeError('Variable "classToToggle" does not exist.', 44, $this->source); })()) . "--hidden");
            // line 45
            yield "            ";
            $context["toggleButtonClassName"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45) . "__category-toggle-button");
            // line 46
            yield "
            <li class=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 47, $this->source); })()), " "), "html", null, true);
            yield "\">
                ";
            // line 48
            if ((isset($context["hasChildren"]) || array_key_exists("hasChildren", $context) ? $context["hasChildren"] : (function () { throw new RuntimeError('Variable "hasChildren" does not exist.', 48, $this->source); })())) {
                // line 49
                yield "                    ";
                yield from $this->unwrap()->yieldBlock('categoryItemToggler', $context, $blocks);
                // line 82
                yield "                ";
            }
            // line 83
            yield "
                <div class=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84), "html", null, true);
            yield "__category-row ";
            (( !(isset($context["hasChildren"]) || array_key_exists("hasChildren", $context) ? $context["hasChildren"] : (function () { throw new RuntimeError('Variable "hasChildren" does not exist.', 84, $this->source); })())) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84) . "__category-row--no-children"), "html", null, true)) : (yield ""));
            yield "\">
                    <button class=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), "html", null, true);
            yield "__link ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["linkActiveClass"]) || array_key_exists("linkActiveClass", $context) ? $context["linkActiveClass"] : (function () { throw new RuntimeError('Variable "linkActiveClass" does not exist.', 85, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["triggerButtonJsName"]) || array_key_exists("triggerButtonJsName", $context) ? $context["triggerButtonJsName"] : (function () { throw new RuntimeError('Variable "triggerButtonJsName" does not exist.', 85, $this->source); })()), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["disableAttribute"]) || array_key_exists("disableAttribute", $context) ? $context["disableAttribute"] : (function () { throw new RuntimeError('Variable "disableAttribute" does not exist.', 85, $this->source); })()), "html", null, true);
            yield " type=\"button\" data-url=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 85, $this->source); })()), "html", null, true);
            yield ">
                        ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryNode"], "name", [], "any", false, false, false, 86), "html", null, true);
            yield "
                        <span class=\"text-secondary\">(";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()((isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 87, $this->source); })()), "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "locale", [], "any", false, false, false, 87)), "html", null, true);
            yield ")</span>
                    </button>

                    ";
            // line 90
            if ((isset($context["hasChildren"]) || array_key_exists("hasChildren", $context) ? $context["hasChildren"] : (function () { throw new RuntimeError('Variable "hasChildren" does not exist.', 90, $this->source); })())) {
                // line 91
                yield "                        <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["classToToggle"]) || array_key_exists("classToToggle", $context) ? $context["classToToggle"] : (function () { throw new RuntimeError('Variable "classToToggle" does not exist.', 91, $this->source); })()), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["targetCategoryClassName"]) || array_key_exists("targetCategoryClassName", $context) ? $context["targetCategoryClassName"] : (function () { throw new RuntimeError('Variable "targetCategoryClassName" does not exist.', 91, $this->source); })()), "html", null, true);
                yield "\">
                            <div class=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["categoryTargetInner"]) || array_key_exists("categoryTargetInner", $context) ? $context["categoryTargetInner"] : (function () { throw new RuntimeError('Variable "categoryTargetInner" does not exist.', 92, $this->source); })()), "html", null, true);
                yield "\">
                                ";
                // line 93
                yield from                 $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("filter-category", "CatalogPage"), "@CatalogPage/components/molecules/filter-category/filter-category.twig", 93)->unwrap()->yield(CoreExtension::toArray(["data" => ["levelMenu" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 95
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 95, $this->source); })()), "levelMenu", [], "any", false, false, false, 95) + 1), "filter" => CoreExtension::getAttribute($this->env, $this->source,                 // line 96
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 96, $this->source); })()), "filter", [], "any", false, false, false, 96), "filterPath" => CoreExtension::getAttribute($this->env, $this->source,                 // line 97
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 97, $this->source); })()), "filterPath", [], "any", false, false, false, 97), "categories" => CoreExtension::getAttribute($this->env, $this->source,                 // line 98
$context["categoryNode"], "children", [], "any", false, false, false, 98), "parentJsName" => CoreExtension::getAttribute($this->env, $this->source,                 // line 99
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 99, $this->source); })()), "parentJsName", [], "any", false, false, false, 99)]]));
                // line 102
                yield "                            </div>
                        </div>
                    ";
            }
            // line 105
            yield "                </div>
            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categoryNode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "    </ul>
";
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_categoryItemToggler(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "                        <div>
                            ";
        // line 51
        yield from $this->unwrap()->yieldBlock('categoryItemTogglerIcon', $context, $blocks);
        // line 62
        yield "
                            ";
        // line 63
        yield from $this->unwrap()->yieldBlock('categoryItemTogglerHandlers', $context, $blocks);
        // line 80
        yield "                        </div>
                    ";
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_categoryItemTogglerIcon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "                                <button type=\"button\" class=\"spacing-right--small ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["toggleButtonClassName"]) || array_key_exists("toggleButtonClassName", $context) ? $context["toggleButtonClassName"] : (function () { throw new RuntimeError('Variable "toggleButtonClassName" does not exist.', 52, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["triggerClassName"]) || array_key_exists("triggerClassName", $context) ? $context["triggerClassName"] : (function () { throw new RuntimeError('Variable "triggerClassName" does not exist.', 52, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["targetTogglerClassName"]) || array_key_exists("targetTogglerClassName", $context) ? $context["targetTogglerClassName"] : (function () { throw new RuntimeError('Variable "targetTogglerClassName" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "\">
                                    ";
        // line 53
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/molecules/filter-category/filter-category.twig", 53)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54) . "__category-toggle-button-icon"), "modifiers" => ["small"], "data" => ["name" => "arrow-down"]]));
        // line 60
        yield "                                </button>
                            ";
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_categoryItemTogglerHandlers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "                                ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-click"), "@CatalogPage/components/molecules/filter-category/filter-category.twig", 64)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["trigger-class-name" =>         // line 66
(isset($context["triggerClassName"]) || array_key_exists("triggerClassName", $context) ? $context["triggerClassName"] : (function () { throw new RuntimeError('Variable "triggerClassName" does not exist.', 66, $this->source); })()), "target-class-name" =>         // line 67
(isset($context["targetCategoryClassName"]) || array_key_exists("targetCategoryClassName", $context) ? $context["targetCategoryClassName"] : (function () { throw new RuntimeError('Variable "targetCategoryClassName" does not exist.', 67, $this->source); })()), "class-to-toggle" =>         // line 68
(isset($context["classToToggleModifier"]) || array_key_exists("classToToggleModifier", $context) ? $context["classToToggleModifier"] : (function () { throw new RuntimeError('Variable "classToToggleModifier" does not exist.', 68, $this->source); })())]]));
        // line 71
        yield "
                                ";
        // line 72
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-click"), "@CatalogPage/components/molecules/filter-category/filter-category.twig", 72)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["trigger-class-name" =>         // line 74
(isset($context["triggerClassName"]) || array_key_exists("triggerClassName", $context) ? $context["triggerClassName"] : (function () { throw new RuntimeError('Variable "triggerClassName" does not exist.', 74, $this->source); })()), "target-class-name" =>         // line 75
(isset($context["targetTogglerClassName"]) || array_key_exists("targetTogglerClassName", $context) ? $context["targetTogglerClassName"] : (function () { throw new RuntimeError('Variable "targetTogglerClassName" does not exist.', 75, $this->source); })()), "class-to-toggle" => (        // line 76
(isset($context["toggleButtonClassName"]) || array_key_exists("toggleButtonClassName", $context) ? $context["toggleButtonClassName"] : (function () { throw new RuntimeError('Variable "toggleButtonClassName" does not exist.', 76, $this->source); })()) . "--collapsed")]]));
        // line 79
        yield "                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/molecules/filter-category/filter-category.twig";
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
        return array (  334 => 79,  332 => 76,  331 => 75,  330 => 74,  329 => 72,  326 => 71,  324 => 68,  323 => 67,  322 => 66,  320 => 64,  313 => 63,  307 => 60,  305 => 54,  304 => 53,  295 => 52,  288 => 51,  282 => 80,  280 => 63,  277 => 62,  275 => 51,  272 => 50,  265 => 49,  259 => 108,  243 => 105,  238 => 102,  236 => 99,  235 => 98,  234 => 97,  233 => 96,  232 => 95,  231 => 93,  227 => 92,  220 => 91,  218 => 90,  212 => 87,  208 => 86,  196 => 85,  190 => 84,  187 => 83,  184 => 82,  181 => 49,  179 => 48,  175 => 47,  172 => 46,  169 => 45,  166 => 44,  163 => 43,  160 => 42,  157 => 41,  154 => 40,  151 => 39,  148 => 38,  146 => 37,  143 => 36,  140 => 35,  137 => 34,  135 => 32,  134 => 31,  133 => 30,  132 => 29,  130 => 28,  127 => 27,  124 => 26,  121 => 25,  119 => 24,  116 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  97 => 18,  94 => 17,  91 => 16,  88 => 15,  71 => 14,  67 => 12,  65 => 10,  64 => 9,  62 => 8,  55 => 7,  51 => 1,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('filter-category', '@SprykerShop:CatalogPage') %}

{% define data = {
    levelMenu: 1,
} %}

{% block body %}
    {% set categoryPath = app.request.attributes.get('categoryNode') is not null
        ? app.request.attributes.get('categoryNode').url
        : app.request.attributes.get('categoryPath')
    %}

    <ul class=\"menu\">
        {% for categoryNode in data.categories %}
            {% set quantity = 0 %}
            {% set hasChildren = (categoryNode.children | default([]) is not empty) %}

            {% for filterValue in data.filter.values %}
                {% if filterValue.value == categoryNode.nodeId %}
                    {% set quantity = filterValue.docCount %}
                {% endif %}
            {% endfor %}

            {% set currentUrl = data.filterPath is not empty ? url(data.filterPath, {categoryPath: (categoryPath)}) : categoryPath %}
            {% set categoryUrl = data.filterPath is not empty ? url(data.filterPath, {categoryPath: (categoryNode.url | trimLocale)}) : categoryNode.url %}
            {% set isActive = currentUrl == categoryUrl %}
            {% set disableAttribute = quantity == 0 ? 'disabled' %}
            {% set classes = [
                config.name ~ '__item',
                config.name ~ '__item--level-' ~ data.levelMenu,
                isActive ? config.name ~ '__item--active' : '',
                hasChildren ? config.name ~ '__item--children' : '',
            ] %}
            {% set linkActiveClass = isActive ? config.name ~ '__link--active' %}
            {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

            {% set categoryNamePrepared = categoryNode.name | replace({'[^a-zA-Z0-9]': '_'}) %}
            {% set childrenClass = categoryNode.hasChildren ? 'menu__item--has-children-list' %}
            {% set triggerClassName = config.jsName ~ '__category-trigger-' ~ categoryNamePrepared %}
            {% set targetCategoryClassName = config.jsName ~ '__category-target-' ~ categoryNamePrepared %}
            {% set targetTogglerClassName = config.jsName ~ '__toggler-target-' ~ categoryNamePrepared %}
            {% set classToToggle = config.name ~ '__category-target' %}
            {% set categoryTargetInner = config.name ~ '__category-target-inner' %}
            {% set classToToggleModifier = classToToggle ~ '--hidden' %}
            {% set toggleButtonClassName = config.name  ~ '__category-toggle-button' %}

            <li class=\"{{ classes | join(' ') }}\">
                {% if hasChildren %}
                    {% block categoryItemToggler %}
                        <div>
                            {% block categoryItemTogglerIcon %}
                                <button type=\"button\" class=\"spacing-right--small {{ toggleButtonClassName }} {{ triggerClassName }} {{ targetTogglerClassName }}\">
                                    {% include atom('icon') with {
                                        class: config.name ~ '__category-toggle-button-icon',
                                        modifiers: ['small'],
                                        data: {
                                            name: 'arrow-down',
                                        },
                                    } only %}
                                </button>
                            {% endblock %}

                            {% block categoryItemTogglerHandlers %}
                                {% include molecule('toggler-click') with {
                                    attributes: {
                                        'trigger-class-name': triggerClassName,
                                        'target-class-name': targetCategoryClassName,
                                        'class-to-toggle': classToToggleModifier,
                                    },
                                } only %}

                                {% include molecule('toggler-click') with {
                                    attributes: {
                                        'trigger-class-name': triggerClassName,
                                        'target-class-name': targetTogglerClassName,
                                        'class-to-toggle': toggleButtonClassName ~ '--collapsed',
                                    },
                                } only %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                {% endif %}

                <div class=\"{{ config.name }}__category-row {{ not hasChildren ? config.name ~ '__category-row--no-children' }}\">
                    <button class=\"{{ config.name }}__link {{ linkActiveClass }} {{ triggerButtonJsName }}\" {{ disableAttribute }} type=\"button\" data-url={{ categoryUrl }}>
                        {{ categoryNode.name }}
                        <span class=\"text-secondary\">({{ quantity | executeFilterIfExists('formatInt', app.locale) }})</span>
                    </button>

                    {% if hasChildren %}
                        <div class=\"{{ classToToggle }} {{ targetCategoryClassName }}\">
                            <div class=\"{{ categoryTargetInner }}\">
                                {% include molecule('filter-category', 'CatalogPage') with {
                                    data: {
                                        levelMenu: data.levelMenu + 1,
                                        filter: data.filter,
                                        filterPath: data.filterPath,
                                        categories: categoryNode.children,
                                        parentJsName: data.parentJsName,
                                    },
                                } only %}
                            </div>
                        </div>
                    {% endif %}
                </div>
            </li>
        {% endfor %}
    </ul>
{% endblock %}
", "@CatalogPage/components/molecules/filter-category/filter-category.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/filter-category/filter-category.twig");
    }
}
