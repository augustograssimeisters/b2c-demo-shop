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

/* @ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig */
class __TwigTemplate_c2a7a202dee807e41dbe76ffe6216172 extends Template
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
            'icon' => [$this, 'block_icon'],
            'menu' => [$this, 'block_menu'],
            'url' => [$this, 'block_url'],
            'link' => [$this, 'block_link'],
            'externalUrl' => [$this, 'block_externalUrl'],
            'other' => [$this, 'block_other'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('atom')->getCallable()("node"), "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-multilevel-node", "tag" => "li"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["levelMenu" => 1, "itemId" => null], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "    ";
        yield from $this->yieldParentBlock("class", $context, $blocks);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "--lvl-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "levelMenu", [], "any", false, false, false, 15), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "

    ";
        // line 21
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "node", [], "any", false, false, false, 21), "children", [], "any", false, false, false, 21))) {
            // line 22
            yield "        ";
            $context["isToggler"] =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "itemId", [], "any", false, false, false, 22));
            // line 23
            yield "        ";
            $context["triggerClass"] = (((isset($context["isToggler"]) || array_key_exists("isToggler", $context) ? $context["isToggler"] : (function () { throw new RuntimeError('Variable "isToggler" does not exist.', 23, $this->source); })())) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "jsName", [], "any", false, false, false, 23) . "__trigger")) : (""));
            // line 24
            yield "        ";
            $context["targetClass"] = (((isset($context["isToggler"]) || array_key_exists("isToggler", $context) ? $context["isToggler"] : (function () { throw new RuntimeError('Variable "isToggler" does not exist.', 24, $this->source); })())) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "jsName", [], "any", false, false, false, 24) . "__target-") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "itemId", [], "any", false, false, false, 24))) : (""));
            // line 25
            yield "        ";
            $context["targetAttribute"] = (((isset($context["isToggler"]) || array_key_exists("isToggler", $context) ? $context["isToggler"] : (function () { throw new RuntimeError('Variable "isToggler" does not exist.', 25, $this->source); })())) ? (("data-toggle-target-class-name=" . (isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 25, $this->source); })()))) : (""));
            // line 26
            yield "
        ";
            // line 27
            yield from $this->unwrap()->yieldBlock('icon', $context, $blocks);
            // line 37
            yield "
        ";
            // line 38
            yield from $this->unwrap()->yieldBlock('menu', $context, $blocks);
            // line 109
            yield "    ";
        }
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "            <span class=\"";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28) . "__icon"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 28, $this->source); })())], 28, $context, $this->getSourceContext());
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["triggerClass"]) || array_key_exists("triggerClass", $context) ? $context["triggerClass"] : (function () { throw new RuntimeError('Variable "triggerClass" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["targetAttribute"]) || array_key_exists("targetAttribute", $context) ? $context["targetAttribute"] : (function () { throw new RuntimeError('Variable "targetAttribute" does not exist.', 28, $this->source); })()), "html", null, true);
        yield ">
                ";
        // line 29
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig", 29)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["side-drawer-arrow"], "data" => ["name" => "arrow-right-thin"]]));
        // line 35
        yield "            </span>
        ";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "            <ul class=\"";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39) . "__menu"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 39, $this->source); })())], 39, $context, $this->getSourceContext());
        yield " menu ";
        (((isset($context["isToggler"]) || array_key_exists("isToggler", $context) ? $context["isToggler"] : (function () { throw new RuntimeError('Variable "isToggler" does not exist.', 39, $this->source); })())) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39) . "__menu--hidden"), "html", null, true)) : (yield ""));
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "\">
                ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "node", [], "any", false, false, false, 40), "cssClass", [], "any", false, false, false, 40) == "flyout-fullscreen")) {
            // line 41
            yield "                    <li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
            yield "__flyout-fullscreen-container grid grid--justify\">
                        <ul class=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
            yield "__flyout-fullscreen-list\">
                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "node", [], "any", false, false, false, 43), "children", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["childNode"]) {
                // line 44
                yield "                                ";
                if (!CoreExtension::inFilter("node-image", CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "cssClass", [], "any", false, false, false, 44))) {
                    // line 45
                    yield "                                    ";
                    $context["hasChildren"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "children", [], "any", false, false, false, 45)) > 0);
                    // line 46
                    yield "
                                    ";
                    // line 47
                    yield from                     $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-multilevel-node"), "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig", 47)->unwrap()->yield(CoreExtension::toArray(["class" => (((((("menu__item " . CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source,                     // line 48
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48) . "__child"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 48, $this->source); })())], 48, $context, $this->getSourceContext())) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48)) . "__") . CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "cssClass", [], "any", false, false, false, 48)) . ((CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "url", [], "any", false, false, false, 48)) ? ("") : ((" " . CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "cssClass", [], "any", false, false, false, 48))))), "modifiers" =>                     // line 49
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 49, $this->source); })()), "data" => ["node" =>                     // line 51
$context["childNode"], "levelMenu" => (CoreExtension::getAttribute($this->env, $this->source,                     // line 52
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 52, $this->source); })()), "levelMenu", [], "any", false, false, false, 52) + 1)]]));
                    // line 55
                    yield "                                ";
                }
                // line 56
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['childNode'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                        </ul>

                        <ul class=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), "html", null, true);
            yield "__flyout-fullscreen-list-node-image grid grid--justify\">
                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "node", [], "any", false, false, false, 60), "children", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["childNode"]) {
                // line 61
                yield "                                ";
                if (CoreExtension::inFilter("node-image", CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "cssClass", [], "any", false, false, false, 61))) {
                    // line 62
                    yield "                                    ";
                    $context["hasChildren"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "children", [], "any", false, false, false, 62)) > 0);
                    // line 63
                    yield "
                                    ";
                    // line 64
                    yield from                     $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-multilevel-node"), "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig", 64)->unwrap()->yield(CoreExtension::toArray(["class" => (((((("menu__item " . CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source,                     // line 65
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65) . "__child"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 65, $this->source); })())], 65, $context, $this->getSourceContext())) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65)) . "__") . CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "cssClass", [], "any", false, false, false, 65)) . ((CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "url", [], "any", false, false, false, 65)) ? ("") : ((" " . CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "cssClass", [], "any", false, false, false, 65))))), "modifiers" =>                     // line 66
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 66, $this->source); })()), "data" => ["node" =>                     // line 68
$context["childNode"], "levelMenu" => (CoreExtension::getAttribute($this->env, $this->source,                     // line 69
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 69, $this->source); })()), "levelMenu", [], "any", false, false, false, 69) + 1)]]));
                    // line 72
                    yield "                                ";
                }
                // line 73
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['childNode'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                        </ul>
                    </li>
                ";
        } elseif (CoreExtension::inFilter("brand-dropdown", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 76
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 76, $this->source); })()), "node", [], "any", false, false, false, 76), "cssClass", [], "any", false, false, false, 76))) {
            // line 77
            yield "                    <li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77), "html", null, true);
            yield "__brand-dropdown-container\">
                        <ul class=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 78, $this->source); })()), "name", [], "any", false, false, false, 78), "html", null, true);
            yield "__brand-dropdown-list grid grid--justify\">
                            ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 79, $this->source); })()), "node", [], "any", false, false, false, 79), "children", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["childNode"]) {
                // line 80
                yield "                                ";
                $context["hasChildren"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "children", [], "any", false, false, false, 80)) > 0);
                // line 81
                yield "
                                ";
                // line 82
                yield from                 $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-multilevel-node"), "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig", 82)->unwrap()->yield(CoreExtension::toArray(["class" => (((((("menu__item " . CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source,                 // line 83
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 83, $this->source); })()), "name", [], "any", false, false, false, 83) . "__child"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 83, $this->source); })())], 83, $context, $this->getSourceContext())) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 83, $this->source); })()), "name", [], "any", false, false, false, 83)) . "__") . CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "cssClass", [], "any", false, false, false, 83)) . ((CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "url", [], "any", false, false, false, 83)) ? ("") : ((" " . CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "cssClass", [], "any", false, false, false, 83))))), "modifiers" =>                 // line 84
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 84, $this->source); })()), "data" => ["node" =>                 // line 86
$context["childNode"], "levelMenu" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 87
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 87, $this->source); })()), "levelMenu", [], "any", false, false, false, 87) + 1)]]));
                // line 90
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['childNode'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "                        </ul>
                    </li>
                ";
        } else {
            // line 94
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 94, $this->source); })()), "node", [], "any", false, false, false, 94), "children", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["childNode"]) {
                // line 95
                yield "                        ";
                $context["hasChildren"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "children", [], "any", false, false, false, 95)) > 0);
                // line 96
                yield "
                        ";
                // line 97
                yield from                 $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-multilevel-node"), "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig", 97)->unwrap()->yield(CoreExtension::toArray(["class" => (((((("menu__item " . CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source,                 // line 98
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98) . "__child"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 98, $this->source); })())], 98, $context, $this->getSourceContext())) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98)) . "__") . CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "cssClass", [], "any", false, false, false, 98)) . ((CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "url", [], "any", false, false, false, 98)) ? ("") : ((" " . CoreExtension::getAttribute($this->env, $this->source, $context["childNode"], "cssClass", [], "any", false, false, false, 98))))), "modifiers" =>                 // line 99
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 99, $this->source); })()), "data" => ["node" =>                 // line 101
$context["childNode"], "levelMenu" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 102
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 102, $this->source); })()), "levelMenu", [], "any", false, false, false, 102) + 1)]]));
                // line 105
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['childNode'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "                ";
        }
        // line 107
        yield "            </ul>
        ";
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_url(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 113
        yield "    <a class=\"";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 113, $this->source); })()), "name", [], "any", false, false, false, 113) . "__link"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 113, $this->source); })())], 113, $context, $this->getSourceContext());
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 113, $this->source); })()), "name", [], "any", false, false, false, 113), "html", null, true);
        yield "__link--lvl-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 113, $this->source); })()), "levelMenu", [], "any", false, false, false, 113), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 113, $this->source); })()), "node", [], "any", false, false, false, 113), "cssClass", [], "any", false, false, false, 113), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 113, $this->source); })()), "node", [], "any", false, false, false, 113), "url", [], "any", false, false, false, 113), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 113, $this->source); })()), "node", [], "any", false, false, false, 113), "title", [], "any", false, false, false, 113), "html", null, true);
        yield "</a>
";
        yield from [];
    }

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 117
        yield "    <a class=\"";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 117, $this->source); })()), "name", [], "any", false, false, false, 117) . "__link"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 117, $this->source); })())], 117, $context, $this->getSourceContext());
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 117, $this->source); })()), "name", [], "any", false, false, false, 117), "html", null, true);
        yield "__link--lvl-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 117, $this->source); })()), "levelMenu", [], "any", false, false, false, 117), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 117, $this->source); })()), "node", [], "any", false, false, false, 117), "cssClass", [], "any", false, false, false, 117), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 117, $this->source); })()), "node", [], "any", false, false, false, 117), "url", [], "any", false, false, false, 117), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 117, $this->source); })()), "node", [], "any", false, false, false, 117), "title", [], "any", false, false, false, 117), "html", null, true);
        yield "</a>
";
        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_externalUrl(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 121
        yield "    <a class=\"";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 121, $this->source); })()), "name", [], "any", false, false, false, 121) . "__link"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 121, $this->source); })())], 121, $context, $this->getSourceContext());
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 121, $this->source); })()), "name", [], "any", false, false, false, 121), "html", null, true);
        yield "__link--lvl-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 121, $this->source); })()), "levelMenu", [], "any", false, false, false, 121), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 121, $this->source); })()), "node", [], "any", false, false, false, 121), "cssClass", [], "any", false, false, false, 121), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 121, $this->source); })()), "node", [], "any", false, false, false, 121), "url", [], "any", false, false, false, 121), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 121, $this->source); })()), "node", [], "any", false, false, false, 121), "title", [], "any", false, false, false, 121), "html", null, true);
        yield "</a>
";
        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_other(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 125
        yield "    <span class=\"";
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 125, $this->source); })()), "name", [], "any", false, false, false, 125) . "__link"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 125, $this->source); })())], 125, $context, $this->getSourceContext());
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 125, $this->source); })()), "name", [], "any", false, false, false, 125), "html", null, true);
        yield "__link--lvl-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 125, $this->source); })()), "levelMenu", [], "any", false, false, false, 125), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 125, $this->source); })()), "node", [], "any", false, false, false, 125), "title", [], "any", false, false, false, 125), "html", null, true);
        yield "</span>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig";
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
        return array (  395 => 125,  388 => 124,  370 => 121,  363 => 120,  345 => 117,  338 => 116,  320 => 113,  313 => 112,  307 => 107,  304 => 106,  298 => 105,  296 => 102,  295 => 101,  294 => 99,  293 => 98,  292 => 97,  289 => 96,  286 => 95,  281 => 94,  276 => 91,  270 => 90,  268 => 87,  267 => 86,  266 => 84,  265 => 83,  264 => 82,  261 => 81,  258 => 80,  254 => 79,  250 => 78,  245 => 77,  243 => 76,  239 => 74,  233 => 73,  230 => 72,  228 => 69,  227 => 68,  226 => 66,  225 => 65,  224 => 64,  221 => 63,  218 => 62,  215 => 61,  211 => 60,  207 => 59,  203 => 57,  197 => 56,  194 => 55,  192 => 52,  191 => 51,  190 => 49,  189 => 48,  188 => 47,  185 => 46,  182 => 45,  179 => 44,  175 => 43,  171 => 42,  166 => 41,  164 => 40,  155 => 39,  148 => 38,  142 => 35,  140 => 29,  131 => 28,  124 => 27,  118 => 109,  116 => 38,  113 => 37,  111 => 27,  108 => 26,  105 => 25,  102 => 24,  99 => 23,  96 => 22,  94 => 21,  88 => 19,  81 => 18,  69 => 15,  62 => 14,  58 => 1,  57 => 9,  56 => 4,  54 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends atom('node') %}
{% import _self as component %}

{% define config = {
    name: 'navigation-multilevel-node',
    tag: 'li'
} %}

{% define data = {
    levelMenu: 1,
    itemId: null
} %}

{% block class %}
    {{ parent() }} {{ config.name }}--lvl-{{ data.levelMenu }}
{% endblock %}

{% block body %}
    {{ parent() }}

    {% if data.node.children is not empty %}
        {% set isToggler = data.itemId is not null %}
        {% set triggerClass = isToggler ? config.jsName ~ '__trigger' %}
        {% set targetClass = isToggler ? config.jsName ~ '__target-' ~ data.itemId %}
        {% set targetAttribute = isToggler ? 'data-toggle-target-class-name=' ~ targetClass %}

        {% block icon %}
            <span class=\"{{ component.renderClass(config.name ~ '__icon', modifiers) }} {{ triggerClass }}\" {{ targetAttribute }}>
                {% include atom('icon') with {
                    modifiers: ['side-drawer-arrow'],
                    data: {
                        name: 'arrow-right-thin'
                    }
                } only %}
            </span>
        {% endblock %}

        {% block menu %}
            <ul class=\"{{ component.renderClass(config.name ~ '__menu', modifiers) }} menu {{ isToggler ? config.name ~ '__menu--hidden' }} {{ targetClass }}\">
                {% if data.node.cssClass == 'flyout-fullscreen' %}
                    <li class=\"{{ config.name }}__flyout-fullscreen-container grid grid--justify\">
                        <ul class=\"{{ config.name }}__flyout-fullscreen-list\">
                            {% for childNode in data.node.children %}
                                {% if 'node-image' not in childNode.cssClass %}
                                    {% set hasChildren = childNode.children | length > 0 %}

                                    {% include molecule('navigation-multilevel-node') with {
                                        class: 'menu__item ' ~ component.renderClass(config.name ~ '__child', modifiers) ~ ' ' ~ config.name ~ '__' ~ childNode.cssClass ~ (childNode.url ? '' : ' ' ~ childNode.cssClass),
                                        modifiers: modifiers,
                                        data: {
                                            node: childNode,
                                            levelMenu: data.levelMenu + 1
                                        }
                                    } only %}
                                {% endif %}
                            {% endfor %}
                        </ul>

                        <ul class=\"{{ config.name }}__flyout-fullscreen-list-node-image grid grid--justify\">
                            {% for childNode in data.node.children %}
                                {% if 'node-image' in childNode.cssClass %}
                                    {% set hasChildren = childNode.children | length > 0 %}

                                    {% include molecule('navigation-multilevel-node') with {
                                        class: 'menu__item ' ~ component.renderClass(config.name ~ '__child', modifiers) ~ ' ' ~ config.name ~ '__' ~ childNode.cssClass ~ (childNode.url ? '' : ' ' ~ childNode.cssClass),
                                        modifiers: modifiers,
                                        data: {
                                            node: childNode,
                                            levelMenu: data.levelMenu + 1
                                        }
                                    } only %}
                                {% endif %}
                            {% endfor %}
                        </ul>
                    </li>
                {% elseif 'brand-dropdown' in data.node.cssClass %}
                    <li class=\"{{ config.name }}__brand-dropdown-container\">
                        <ul class=\"{{ config.name }}__brand-dropdown-list grid grid--justify\">
                            {% for childNode in data.node.children %}
                                {% set hasChildren = childNode.children | length > 0 %}

                                {% include molecule('navigation-multilevel-node') with {
                                    class: 'menu__item ' ~ component.renderClass(config.name ~ '__child', modifiers) ~ ' ' ~ config.name ~ '__' ~ childNode.cssClass ~ (childNode.url ? '' : ' ' ~ childNode.cssClass),
                                    modifiers: modifiers,
                                    data: {
                                        node: childNode,
                                        levelMenu: data.levelMenu + 1
                                    }
                                } only %}
                            {% endfor %}
                        </ul>
                    </li>
                {% else %}
                    {% for childNode in data.node.children %}
                        {% set hasChildren = childNode.children | length > 0 %}

                        {% include molecule('navigation-multilevel-node') with {
                            class: 'menu__item ' ~ component.renderClass(config.name ~ '__child', modifiers) ~ ' ' ~ config.name ~ '__' ~ childNode.cssClass ~ (childNode.url ? '' : ' ' ~ childNode.cssClass),
                            modifiers: modifiers,
                            data: {
                                node: childNode,
                                levelMenu: data.levelMenu + 1
                            }
                        } only %}
                    {% endfor %}
                {% endif %}
            </ul>
        {% endblock %}
    {% endif %}
{% endblock %}

{% block url %}
    <a class=\"{{ component.renderClass(config.name ~ '__link', modifiers) }} {{ config.name }}__link--lvl-{{ data.levelMenu }} {{ data.node.cssClass }}\" href=\"{{ data.node.url }}\">{{ data.node.title }}</a>
{% endblock %}

{% block link %}
    <a class=\"{{ component.renderClass(config.name ~ '__link', modifiers) }} {{ config.name }}__link--lvl-{{ data.levelMenu }} {{ data.node.cssClass }}\" href=\"{{ data.node.url }}\">{{ data.node.title }}</a>
{% endblock %}

{% block externalUrl %}
    <a class=\"{{ component.renderClass(config.name ~ '__link', modifiers) }} {{ config.name }}__link--lvl-{{ data.levelMenu }} {{ data.node.cssClass }}\" href=\"{{ data.node.url }}\" target=\"_blank\">{{ data.node.title }}</a>
{% endblock %}

{% block other %}
    <span class=\"{{ component.renderClass(config.name ~ '__link', modifiers) }} {{ config.name }}__link--lvl-{{ data.levelMenu }}\">{{ data.node.title }}</span>
{% endblock %}
", "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig");
    }
}
