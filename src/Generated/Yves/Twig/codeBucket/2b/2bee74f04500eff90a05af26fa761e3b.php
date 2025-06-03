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

/* @@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig */
class __TwigTemplate_27870804f125cdd07316b687dfdbafa8 extends Template
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
            'extraClass' => [$this, 'block_extraClass'],
            'body' => [$this, 'block_body'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "rating-selector", "tag" => "rating-selector"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["value" => 0, "minValue" => 1, "maxValue" => 5, "steps" => 5, "useHalfSteps" => false, "inputId" => "", "inputName" => "rating", "parentJsName" => ""], $context['data']);        // line 19
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["readonly" => false, "disable-if-empty-value" => false, "product-item-class-name" => CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "parentJsName", [], "any", false, false, false, 22)], $context['attributes']);        // line 25
        $context["singleStepValue"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "maxValue", [], "any", false, false, false, 25) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "minValue", [], "any", false, false, false, 25)) / (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "steps", [], "any", false, false, false, 25) - 1));
        // line 26
        $context["precision"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "useHalfSteps", [], "any", false, false, false, 26)) ? (1) : (0));
        // line 27
        $context["value"] = Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "value", [], "any", false, false, false, 27), (isset($context["precision"]) || array_key_exists("precision", $context) ? $context["precision"] : (function () { throw new RuntimeError('Variable "precision" does not exist.', 27, $this->source); })()), "floor");
        // line 28
        $context["isActive"] = false;
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extraClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 31, $this->source); })()), "readonly", [], "any", false, false, false, 31)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
            yield "--readonly";
        }
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "    <span class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
        yield "__steps\">
        ";
        // line 36
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 37
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()), "steps", [], "any", false, false, false, 37), 1));
            foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
                // line 38
                yield "                ";
                $context["currentStepValue"] = ($context["step"] * (isset($context["singleStepValue"]) || array_key_exists("singleStepValue", $context) ? $context["singleStepValue"] : (function () { throw new RuntimeError('Variable "singleStepValue" does not exist.', 38, $this->source); })()));
                // line 39
                yield "                ";
                if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })()) >= (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 39, $this->source); })()))) {
                    // line 40
                    yield "                    ";
                    $context["isActive"] = true;
                    // line 41
                    yield "                ";
                }
                // line 42
                yield "
                ";
                // line 43
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "useHalfSteps", [], "any", false, false, false, 43)) {
                    // line 44
                    yield "                    <span
                        data-step-value=\"";
                    // line 45
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 45, $this->source); })()), "html", null, true);
                    yield "\"
                        class=\"
                            ";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
                    yield "__step
                            ";
                    // line 48
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
                    yield "__step--half
                            ";
                    // line 49
                    (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 49, $this->source); })())) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49) . "__step--active"), "html", null, true)) : (yield ""));
                    yield "
                            ";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "jsName", [], "any", false, false, false, 50), "html", null, true);
                    yield "__step\">

                        ";
                    // line 52
                    yield from                     $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 52)->unwrap()->yield(CoreExtension::toArray(["class" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 53
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53) . "__star ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53)) . "__star--half-right"), "data" => ["name" => "star-half"]]));
                    // line 58
                    yield "                    </span>

                    ";
                    // line 60
                    $context["currentStepValue"] = (($context["step"] - 0.5) * (isset($context["singleStepValue"]) || array_key_exists("singleStepValue", $context) ? $context["singleStepValue"] : (function () { throw new RuntimeError('Variable "singleStepValue" does not exist.', 60, $this->source); })()));
                    // line 61
                    yield "                    ";
                    if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 61, $this->source); })()) >= (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 61, $this->source); })()))) {
                        // line 62
                        yield "                        ";
                        $context["isActive"] = true;
                        // line 63
                        yield "                    ";
                    }
                    // line 64
                    yield "
                    <span
                        data-step-value=\"";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 66, $this->source); })()), "html", null, true);
                    yield "\"
                        class=\"
                            ";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), "html", null, true);
                    yield "__step
                            ";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), "html", null, true);
                    yield "__step--half
                            ";
                    // line 70
                    (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 70, $this->source); })())) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70) . "__step--active"), "html", null, true)) : (yield ""));
                    yield "
                            ";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 71, $this->source); })()), "jsName", [], "any", false, false, false, 71), "html", null, true);
                    yield "__step\">

                        ";
                    // line 73
                    yield from                     $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 73)->unwrap()->yield(CoreExtension::toArray(["class" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 74
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74) . "__star ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74)) . "__star--half-left"), "data" => ["name" => "star-half"]]));
                    // line 79
                    yield "                    </span>
                ";
                }
                // line 81
                yield "
                ";
                // line 82
                if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 82, $this->source); })()), "useHalfSteps", [], "any", false, false, false, 82)) {
                    // line 83
                    yield "                    <span
                        data-step-value=\"";
                    // line 84
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 84, $this->source); })()), "html", null, true);
                    yield "\"
                        class=\"
                            ";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 86, $this->source); })()), "name", [], "any", false, false, false, 86), "html", null, true);
                    yield "__step
                            ";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
                    yield "__step--full
                            ";
                    // line 88
                    (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 88, $this->source); })())) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88) . "__step--active"), "html", null, true)) : (yield ""));
                    yield "
                            ";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 89, $this->source); })()), "jsName", [], "any", false, false, false, 89), "html", null, true);
                    yield "__step\">

                        ";
                    // line 91
                    yield from                     $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 91)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,                     // line 92
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92) . "__star"), "data" => ["name" => "star"]]));
                    // line 97
                    yield "                    </span>
                ";
                }
                // line 99
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['step'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "        ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_0_);
        // line 101
        yield "    </span>

    ";
        // line 103
        yield from $this->unwrap()->yieldBlock('input', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 104
        yield "        ";
        $context["hiddenInputJsName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "parentJsName", [], "any", false, false, false, 104)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "parentJsName", [], "any", false, false, false, 104) . "__rating")) : (""));
        // line 105
        yield "
        <input
            type=\"hidden\"
            class=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 108, $this->source); })()), "jsName", [], "any", false, false, false, 108), "html", null, true);
        yield "__input ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hiddenInputJsName"]) || array_key_exists("hiddenInputJsName", $context) ? $context["hiddenInputJsName"] : (function () { throw new RuntimeError('Variable "hiddenInputJsName" does not exist.', 108, $this->source); })()), "html", null, true);
        yield "\"
            ";
        // line 109
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "inputId", [], "any", false, false, false, 109)) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "inputId", [], "any", false, false, false, 109), "html", null, true);
            yield "\"";
        }
        // line 110
        yield "            name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 110, $this->source); })()), "inputName", [], "any", false, false, false, 110), "html", null, true);
        yield "\"
            value=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })()), "value", [], "any", false, false, false, 111), "html", null, true);
        yield "\"
            ";
        // line 112
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 112, $this->source); })()), "disable-if-empty-value", [], "array", false, false, false, 112) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "value", [], "any", false, false, false, 112))) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 112, $this->source); })()), "readonly", [], "array", false, false, false, 112))) {
            yield "disabled";
        }
        yield ">
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig";
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
        return array (  286 => 112,  282 => 111,  277 => 110,  271 => 109,  265 => 108,  260 => 105,  257 => 104,  246 => 103,  242 => 101,  240 => 36,  236 => 100,  230 => 99,  226 => 97,  224 => 92,  223 => 91,  218 => 89,  214 => 88,  210 => 87,  206 => 86,  201 => 84,  198 => 83,  196 => 82,  193 => 81,  189 => 79,  187 => 74,  186 => 73,  181 => 71,  177 => 70,  173 => 69,  169 => 68,  164 => 66,  160 => 64,  157 => 63,  154 => 62,  151 => 61,  149 => 60,  145 => 58,  143 => 53,  142 => 52,  137 => 50,  133 => 49,  129 => 48,  125 => 47,  120 => 45,  117 => 44,  115 => 43,  112 => 42,  109 => 41,  106 => 40,  103 => 39,  100 => 38,  95 => 37,  93 => 36,  88 => 35,  81 => 34,  72 => 31,  65 => 30,  61 => 1,  59 => 28,  57 => 27,  55 => 26,  53 => 25,  52 => 22,  51 => 19,  50 => 8,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'rating-selector',
    tag: 'rating-selector',
} %}

{% define data = {
    value: 0,
    minValue: 1,
    maxValue: 5,
    steps: 5,
    useHalfSteps: false,
    inputId: '',
    inputName: 'rating',
    parentJsName: '',
} %}

{% define attributes = {
    'readonly': false,
    'disable-if-empty-value': false,
    'product-item-class-name': data.parentJsName,
} %}

{% set singleStepValue = (data.maxValue - data.minValue) / (data.steps - 1) %}
{% set precision = data.useHalfSteps ? 1 : 0 %}
{% set value = data.value | round(precision, 'floor') %}
{% set isActive = false %}

{% block extraClass %}
    {% if attributes.readonly %}{{ config.name }}--readonly{% endif %}
{% endblock %}

{% block body %}
    <span class=\"{{ config.name }}__steps\">
        {% apply spaceless %}
            {% for step in data.steps..1 %}
                {% set currentStepValue = step * singleStepValue %}
                {% if value >= currentStepValue %}
                    {% set isActive = true %}
                {% endif %}

                {% if data.useHalfSteps %}
                    <span
                        data-step-value=\"{{ currentStepValue }}\"
                        class=\"
                            {{ config.name }}__step
                            {{ config.name }}__step--half
                            {{ isActive ? config.name ~ '__step--active' }}
                            {{ config.jsName }}__step\">

                        {% include atom('icon') with {
                            class: config.name ~ '__star ' ~ config.name ~ '__star--half-right',
                            data: {
                                name: 'star-half',
                            },
                        } only %}
                    </span>

                    {% set currentStepValue = (step - 0.5) * singleStepValue %}
                    {% if value >= currentStepValue %}
                        {% set isActive = true %}
                    {% endif %}

                    <span
                        data-step-value=\"{{ currentStepValue }}\"
                        class=\"
                            {{ config.name }}__step
                            {{ config.name }}__step--half
                            {{ isActive ? config.name ~ '__step--active' }}
                            {{ config.jsName }}__step\">

                        {% include atom('icon') with {
                            class: config.name ~ '__star ' ~ config.name ~ '__star--half-left',
                            data: {
                                name: 'star-half',
                            },
                        } only %}
                    </span>
                {% endif %}

                {% if not data.useHalfSteps %}
                    <span
                        data-step-value=\"{{ currentStepValue }}\"
                        class=\"
                            {{ config.name }}__step
                            {{ config.name }}__step--full
                            {{ isActive ? config.name ~ '__step--active' }}
                            {{ config.jsName }}__step\">

                        {% include atom('icon') with {
                            class: config.name ~ '__star',
                            data: {
                                name: 'star',
                            },
                        } only %}
                    </span>
                {% endif %}
            {% endfor %}
        {% endapply %}
    </span>

    {% block input %}
        {% set hiddenInputJsName = data.parentJsName ? data.parentJsName ~ '__rating' %}

        <input
            type=\"hidden\"
            class=\"{{ config.jsName }}__input {{ hiddenInputJsName }}\"
            {% if data.inputId %}id=\"{{ data.inputId }}\"{% endif %}
            name=\"{{ data.inputName }}\"
            value=\"{{ data.value }}\"
            {% if attributes['disable-if-empty-value'] and data.value is empty or attributes['readonly'] %}disabled{% endif %}>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", "/data/vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.twig");
    }
}
