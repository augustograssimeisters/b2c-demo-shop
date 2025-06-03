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

/* @ShopUi/components/molecules/pagination/pagination.twig */
class __TwigTemplate_3e40edb5e26236d882f570d851a52f69 extends Template
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
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/pagination/pagination.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "pagination", "tag" => "nav"], $context['config']);        // line 20
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["parameters" => [], "currentPage" => 1, "paginationPath" => "", "showAlwaysFirstAndLast" => false, "maxPage" => 10, "extremePagesLimit" => 1, "nearbyPagesLimit" => 2, "anchor" => "#"], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "maxPage", [], "any", false, false, false, 32) > 1)) {
            // line 33
            yield "        <ul class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
            yield "__list grid grid--center\">

            ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "currentPage", [], "any", false, false, false, 35) > 1)) {
                // line 36
                yield "                <li class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
                yield "__item\">
                    <a
                        class=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
                yield "__step ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
                yield "__step--previous\"
                        href=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "paginationPath", [], "any", false, false, false, 39), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "parameters", [], "any", false, false, false, 39), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "currentPage", [], "any", false, false, false, 39) - 1)])), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "anchor", [], "any", false, false, false, 39), "html", null, true);
                yield "\"
                    >
                        ";
                // line 41
                yield from                 $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/pagination/pagination.twig", 41)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["arrow"], "data" => ["name" => "arrow-left"]]));
                // line 47
                yield "                    </a>
                </li>

                ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 50, $this->source); })()), "extremePagesLimit", [], "any", false, false, false, 50)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 51
                    yield "                    ";
                    if (($context["i"] < (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), "currentPage", [], "any", false, false, false, 51) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 51)))) {
                        // line 52
                        yield "                        <li class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
                        yield "__item\">
                            <a
                                class=\"";
                        // line 54
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
                        yield "__step\"
                                href=\"";
                        // line 55
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "paginationPath", [], "any", false, false, false, 55), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "parameters", [], "any", false, false, false, 55), ["page" => $context["i"]])), "html", null, true);
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "anchor", [], "any", false, false, false, 55), "html", null, true);
                        yield "\"
                            >";
                        // line 57
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()($context["i"], "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "locale", [], "any", false, false, false, 57)), "html", null, true);
                        // line 58
                        yield "</a>
                        </li>
                    ";
                    }
                    // line 61
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "
                ";
                // line 63
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "extremePagesLimit", [], "any", false, false, false, 63) + 1) < (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "currentPage", [], "any", false, false, false, 63) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 63)))) {
                    // line 64
                    yield "                    <li class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true);
                    yield "__item\">
                        <span class=\"";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
                    yield "__step ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
                    yield "__step--ellipsis\">
                            &hellip;
                        </span>
                    </li>
                ";
                }
                // line 70
                yield "
                ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 71, $this->source); })()), "currentPage", [], "any", false, false, false, 71) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 71, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 71)), (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 71, $this->source); })()), "currentPage", [], "any", false, false, false, 71) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 72
                    yield "                    ";
                    if (($context["i"] > 0)) {
                        // line 73
                        yield "                        <li class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), "html", null, true);
                        yield "__item\">
                            <a
                                class=\"";
                        // line 75
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), "html", null, true);
                        yield "__step\"
                                href=\"";
                        // line 76
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 76, $this->source); })()), "paginationPath", [], "any", false, false, false, 76), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 76, $this->source); })()), "parameters", [], "any", false, false, false, 76), ["page" => $context["i"]])), "html", null, true);
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 76, $this->source); })()), "anchor", [], "any", false, false, false, 76), "html", null, true);
                        yield "\"
                            >";
                        // line 78
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()($context["i"], "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "locale", [], "any", false, false, false, 78)), "html", null, true);
                        // line 79
                        yield "</a>
                        </li>
                    ";
                    }
                    // line 82
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                yield "
            ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 84
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 84, $this->source); })()), "showAlwaysFirstAndLast", [], "any", false, false, false, 84)) {
                // line 85
                yield "                <li class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), "html", null, true);
                yield "__item\">
                    <span class=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 86, $this->source); })()), "name", [], "any", false, false, false, 86), "html", null, true);
                yield "__step ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 86, $this->source); })()), "name", [], "any", false, false, false, 86), "html", null, true);
                yield "__step--previous ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 86, $this->source); })()), "name", [], "any", false, false, false, 86), "html", null, true);
                yield "__step--disabled\">
                        ";
                // line 87
                yield from                 $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/pagination/pagination.twig", 87)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["arrow"], "data" => ["name" => "arrow-left"]]));
                // line 93
                yield "                    </span>
                </li>
            ";
            }
            // line 96
            yield "
            <li class=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), "html", null, true);
            yield "__item\">
                <a
                    class=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 99, $this->source); })()), "name", [], "any", false, false, false, 99), "html", null, true);
            yield "__step ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 99, $this->source); })()), "name", [], "any", false, false, false, 99), "html", null, true);
            yield "__step--current\"
                    href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 100, $this->source); })()), "paginationPath", [], "any", false, false, false, 100), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 100, $this->source); })()), "parameters", [], "any", false, false, false, 100), ["page" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 100, $this->source); })()), "currentPage", [], "any", false, false, false, 100)])), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 100, $this->source); })()), "anchor", [], "any", false, false, false, 100), "html", null, true);
            yield "\"
                >";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 102, $this->source); })()), "currentPage", [], "any", false, false, false, 102), "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "locale", [], "any", false, false, false, 102)), "html", null, true);
            // line 103
            yield "</a>
            </li>

            ";
            // line 106
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 106, $this->source); })()), "currentPage", [], "any", false, false, false, 106) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 106, $this->source); })()), "maxPage", [], "any", false, false, false, 106))) {
                // line 107
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 107, $this->source); })()), "currentPage", [], "any", false, false, false, 107) + 1), (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 107, $this->source); })()), "currentPage", [], "any", false, false, false, 107) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 107, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 107))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 108
                    yield "                    ";
                    if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 108, $this->source); })()), "maxPage", [], "any", false, false, false, 108))) {
                        // line 109
                        yield "                        <li class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 109, $this->source); })()), "name", [], "any", false, false, false, 109), "html", null, true);
                        yield "__item\">
                            <a
                                class=\"";
                        // line 111
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 111, $this->source); })()), "name", [], "any", false, false, false, 111), "html", null, true);
                        yield "__step\"
                                href=\"";
                        // line 112
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "paginationPath", [], "any", false, false, false, 112), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "parameters", [], "any", false, false, false, 112), ["page" => $context["i"]])), "html", null, true);
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "anchor", [], "any", false, false, false, 112), "html", null, true);
                        yield "\"
                            >";
                        // line 114
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()($context["i"], "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "locale", [], "any", false, false, false, 114)), "html", null, true);
                        // line 115
                        yield "</a>
                        </li>
                    ";
                    }
                    // line 118
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                yield "
                ";
                // line 120
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 120, $this->source); })()), "maxPage", [], "any", false, false, false, 120) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 120, $this->source); })()), "extremePagesLimit", [], "any", false, false, false, 120)) > (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 120, $this->source); })()), "currentPage", [], "any", false, false, false, 120) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 120, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 120)))) {
                    // line 121
                    yield "                    <li class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 121, $this->source); })()), "name", [], "any", false, false, false, 121), "html", null, true);
                    yield "__item\">
                        <span class=\"";
                    // line 122
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 122, $this->source); })()), "name", [], "any", false, false, false, 122), "html", null, true);
                    yield "__step ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 122, $this->source); })()), "name", [], "any", false, false, false, 122), "html", null, true);
                    yield "__step--ellipsis\">
                            &hellip;
                        </span>
                    </li>
                ";
                }
                // line 127
                yield "
                ";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 128, $this->source); })()), "maxPage", [], "any", false, false, false, 128) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 128, $this->source); })()), "extremePagesLimit", [], "any", false, false, false, 128)) + 1), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 128, $this->source); })()), "maxPage", [], "any", false, false, false, 128)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 129
                    yield "                    ";
                    if (($context["i"] > (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 129, $this->source); })()), "currentPage", [], "any", false, false, false, 129) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 129, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 129)))) {
                        // line 130
                        yield "                        <li class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 130, $this->source); })()), "name", [], "any", false, false, false, 130), "html", null, true);
                        yield "__item\">
                            <a
                                class=\"";
                        // line 132
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 132, $this->source); })()), "name", [], "any", false, false, false, 132), "html", null, true);
                        yield "__step\"
                                href=\"";
                        // line 133
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 133, $this->source); })()), "paginationPath", [], "any", false, false, false, 133), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 133, $this->source); })()), "parameters", [], "any", false, false, false, 133), ["page" => $context["i"]])), "html", null, true);
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 133, $this->source); })()), "anchor", [], "any", false, false, false, 133), "html", null, true);
                        yield "\"
                            >";
                        // line 135
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()($context["i"], "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "locale", [], "any", false, false, false, 135)), "html", null, true);
                        // line 136
                        yield "</a>
                        </li>
                    ";
                    }
                    // line 139
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                yield "
                <li class=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 141, $this->source); })()), "name", [], "any", false, false, false, 141), "html", null, true);
                yield "__item\">
                    <a
                        class=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 143, $this->source); })()), "name", [], "any", false, false, false, 143), "html", null, true);
                yield "__step ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 143, $this->source); })()), "name", [], "any", false, false, false, 143), "html", null, true);
                yield "__step--next\"
                        href=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 144, $this->source); })()), "paginationPath", [], "any", false, false, false, 144), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 144, $this->source); })()), "parameters", [], "any", false, false, false, 144), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 144, $this->source); })()), "currentPage", [], "any", false, false, false, 144) + 1)])), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 144, $this->source); })()), "anchor", [], "any", false, false, false, 144), "html", null, true);
                yield "\"
                    >
                        ";
                // line 146
                yield from                 $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/pagination/pagination.twig", 146)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["arrow"], "data" => ["name" => "arrow-right"]]));
                // line 152
                yield "                    </a>
                </li>

            ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 155
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 155, $this->source); })()), "showAlwaysFirstAndLast", [], "any", false, false, false, 155)) {
                // line 156
                yield "                <li class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 156, $this->source); })()), "name", [], "any", false, false, false, 156), "html", null, true);
                yield "__item\">
                    <span class=\"";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 157, $this->source); })()), "name", [], "any", false, false, false, 157), "html", null, true);
                yield "__step ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 157, $this->source); })()), "name", [], "any", false, false, false, 157), "html", null, true);
                yield "__step--next ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 157, $this->source); })()), "name", [], "any", false, false, false, 157), "html", null, true);
                yield "__step--disabled\">
                        ";
                // line 158
                yield from                 $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/pagination/pagination.twig", 158)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["arrow"], "data" => ["name" => "arrow-right"]]));
                // line 164
                yield "                    </span>
                </li>
            ";
            }
            // line 167
            yield "
        </ul>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/pagination/pagination.twig";
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
        return array (  385 => 167,  380 => 164,  378 => 158,  370 => 157,  365 => 156,  363 => 155,  358 => 152,  356 => 146,  350 => 144,  344 => 143,  339 => 141,  336 => 140,  330 => 139,  325 => 136,  323 => 135,  318 => 133,  314 => 132,  308 => 130,  305 => 129,  301 => 128,  298 => 127,  288 => 122,  283 => 121,  281 => 120,  278 => 119,  272 => 118,  267 => 115,  265 => 114,  260 => 112,  256 => 111,  250 => 109,  247 => 108,  242 => 107,  240 => 106,  235 => 103,  233 => 102,  228 => 100,  222 => 99,  217 => 97,  214 => 96,  209 => 93,  207 => 87,  199 => 86,  194 => 85,  192 => 84,  189 => 83,  183 => 82,  178 => 79,  176 => 78,  171 => 76,  167 => 75,  161 => 73,  158 => 72,  154 => 71,  151 => 70,  141 => 65,  136 => 64,  134 => 63,  131 => 62,  125 => 61,  120 => 58,  118 => 57,  113 => 55,  109 => 54,  103 => 52,  100 => 51,  96 => 50,  91 => 47,  89 => 41,  83 => 39,  77 => 38,  71 => 36,  69 => 35,  63 => 33,  60 => 32,  53 => 31,  49 => 1,  48 => 20,  47 => 15,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{#
  Parameters:
    * parameters (array) : associative array that contains the current route-arguments
    * currentPage (int) : the current page you are in
    * paginationPath (string) : the route name to use for links
    * showAlwaysFirstAndLast (bool) : Always show first and last link (just disabled)
    * maxPage (int) : represents the total number of existing pages
    * extremePagesLimit (int): the number of first and last pages to be displayed (default 1)
    * nearbyPagesLimit (int): the number of pages that are displayed around the active page (default 2)
    * anchor (string): the anchor to be used after each pagination (default empty)
#}

{% define config = {
    name: 'pagination',
    tag: 'nav'
} %}

{% define data = {
    parameters: [],
    currentPage: 1,
    paginationPath: '',
    showAlwaysFirstAndLast: false,
    maxPage: 10,
    extremePagesLimit: 1,
    nearbyPagesLimit: 2,
    anchor: '#'
} %}

{% block body %}
    {% if data.maxPage > 1 %}
        <ul class=\"{{ config.name }}__list grid grid--center\">

            {% if data.currentPage > 1 %}
                <li class=\"{{ config.name }}__item\">
                    <a
                        class=\"{{ config.name }}__step {{ config.name }}__step--previous\"
                        href=\"{{ path(data.paginationPath, data.parameters | merge({ page: data.currentPage-1 })) }}{{ data.anchor }}\"
                    >
                        {% include atom('icon') with {
                            modifiers: ['arrow'],
                            data: {
                                name: 'arrow-left'
                            }
                        } only %}
                    </a>
                </li>

                {% for i in range(1, data.extremePagesLimit) %}
                    {% if ( i < data.currentPage - data.nearbyPagesLimit ) %}
                        <li class=\"{{ config.name }}__item\">
                            <a
                                class=\"{{ config.name }}__step\"
                                href=\"{{ path(data.paginationPath, data.parameters | merge({ page: i })) }}{{ data.anchor }}\"
                            >
                                {{- i | executeFilterIfExists('formatInt', app.locale) -}}
                            </a>
                        </li>
                    {% endif %}
                {% endfor %}

                {% if data.extremePagesLimit + 1 < data.currentPage - data.nearbyPagesLimit %}
                    <li class=\"{{ config.name }}__item\">
                        <span class=\"{{ config.name }}__step {{ config.name }}__step--ellipsis\">
                            &hellip;
                        </span>
                    </li>
                {% endif %}

                {% for i in range(data.currentPage - data.nearbyPagesLimit, data.currentPage - 1) %}
                    {% if (i > 0) %}
                        <li class=\"{{ config.name }}__item\">
                            <a
                                class=\"{{ config.name }}__step\"
                                href=\"{{ path(data.paginationPath, data.parameters | merge({ page: i })) }}{{ data.anchor }}\"
                            >
                                {{- i | executeFilterIfExists('formatInt', app.locale) -}}
                            </a>
                        </li>
                    {% endif %}
                {% endfor %}

            {% elseif data.showAlwaysFirstAndLast %}
                <li class=\"{{ config.name }}__item\">
                    <span class=\"{{ config.name }}__step {{ config.name }}__step--previous {{config.name }}__step--disabled\">
                        {% include atom('icon') with {
                            modifiers: ['arrow'],
                            data: {
                                name: 'arrow-left'
                            }
                        } only %}
                    </span>
                </li>
            {% endif %}

            <li class=\"{{ config.name }}__item\">
                <a
                    class=\"{{ config.name }}__step {{ config.name }}__step--current\"
                    href=\"{{ path(data.paginationPath, data.parameters | merge({ page: data.currentPage })) }}{{ data.anchor }}\"
                >
                    {{- data.currentPage | executeFilterIfExists('formatInt', app.locale) -}}
                </a>
            </li>

            {% if data.currentPage < data.maxPage %}
                {% for i in range(data.currentPage + 1, data.currentPage + data.nearbyPagesLimit) %}
                    {% if ( i <= data.maxPage ) %}
                        <li class=\"{{ config.name }}__item\">
                            <a
                                class=\"{{ config.name }}__step\"
                                href=\"{{ path(data.paginationPath, data.parameters | merge({ page: i})) }}{{ data.anchor }}\"
                            >
                                {{- i | executeFilterIfExists('formatInt', app.locale) -}}
                            </a>
                        </li>
                    {% endif %}
                {% endfor %}

                {% if (data.maxPage - data.extremePagesLimit) > (data.currentPage + data.nearbyPagesLimit) %}
                    <li class=\"{{ config.name }}__item\">
                        <span class=\"{{ config.name }}__step {{ config.name }}__step--ellipsis\">
                            &hellip;
                        </span>
                    </li>
                {% endif %}

                {% for i in range(data.maxPage - data.extremePagesLimit + 1, data.maxPage) %}
                    {% if ( i > data.currentPage + data.nearbyPagesLimit ) %}
                        <li class=\"{{ config.name }}__item\">
                            <a
                                class=\"{{ config.name }}__step\"
                                href=\"{{ path(data.paginationPath, data.parameters | merge({ page: i })) }}{{ data.anchor }}\"
                            >
                                {{- i | executeFilterIfExists('formatInt', app.locale) -}}
                            </a>
                        </li>
                    {% endif %}
                {% endfor %}

                <li class=\"{{ config.name }}__item\">
                    <a
                        class=\"{{ config.name }}__step {{ config.name }}__step--next\"
                        href=\"{{ path(data.paginationPath, data.parameters | merge({ page: data.currentPage + 1 })) }}{{ data.anchor }}\"
                    >
                        {% include atom('icon') with {
                            modifiers: ['arrow'],
                            data: {
                                name: 'arrow-right'
                            }
                        } only %}
                    </a>
                </li>

            {% elseif data.showAlwaysFirstAndLast %}
                <li class=\"{{ config.name }}__item\">
                    <span class=\"{{ config.name }}__step {{ config.name }}__step--next {{config.name }}__step--disabled\">
                        {% include atom('icon') with {
                            modifiers: ['arrow'],
                            data: {
                                name: 'arrow-right'
                            }
                        } only %}
                    </span>
                </li>
            {% endif %}

        </ul>
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/pagination/pagination.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/pagination/pagination.twig");
    }
}
