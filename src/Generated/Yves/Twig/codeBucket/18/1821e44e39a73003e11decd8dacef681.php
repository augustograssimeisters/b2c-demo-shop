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

/* @ShopUi/components/molecules/form/form.twig */
class __TwigTemplate_a4589ef153ce3700327586522ba40538 extends Template
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
            'title' => [$this, 'block_title'],
            'errors' => [$this, 'block_errors'],
            'fieldset' => [$this, 'block_fieldset'],
            'fields' => [$this, 'block_fields'],
            'field' => [$this, 'block_field'],
            'actions' => [$this, 'block_actions'],
            'cancel' => [$this, 'block_cancel'],
            'submit' => [$this, 'block_submit'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/form/form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "form", "tag" => "div"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["form" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "enableStart" => true, "enableEnd" => true, "layout" => [], "options" => ["attr" => ["novalidate" => "novalidate"]], "title" => null, "submit" => ["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forms.submit-btn"), "class" => "button button--success", "icon" => null, "enable" => false, "qa" => "submit-button", "attributes" => ""], "cancel" => ["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.back.button"), "class" => "button button--hollow", "icon" => "chevron-left", "url" => "#", "enable" => false, "qa" => "cancel-button"]], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "    ";
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 46
        yield "
    ";
        // line 47
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "enableStart", [], "any", false, false, false, 47)) {
            // line 48
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "form", [], "any", false, false, false, 48), 'form_start', CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "options", [], "any", false, false, false, 48));
            yield "
    ";
        }
        // line 50
        yield "
    <div class=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), "html", null, true);
        yield "__container\">
        ";
        // line 52
        yield from $this->unwrap()->yieldBlock('errors', $context, $blocks);
        // line 55
        yield "
        ";
        // line 56
        yield from $this->unwrap()->yieldBlock('fieldset', $context, $blocks);
        // line 81
        yield "

        ";
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 83, $this->source); })()), "submit", [], "any", false, false, false, 83), "enable", [], "any", false, false, false, 83) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 83, $this->source); })()), "cancel", [], "any", false, false, false, 83), "enable", [], "any", false, false, false, 83))) {
            // line 84
            yield "            ";
            yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
            // line 111
            yield "        ";
        }
        // line 112
        yield "
    </div>

    ";
        // line 115
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 115, $this->source); })()), "enableEnd", [], "any", false, false, false, 115)) {
            // line 116
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 116, $this->source); })()), "form", [], "any", false, false, false, 116), 'form_end');
            yield "
    ";
        }
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42))) {
            // line 43
            yield "            <h2 class=\"title title--form title--with-border\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "title", [], "any", false, false, false, 43), "html", null, true);
            yield "</h2>
        ";
        }
        // line 45
        yield "    ";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()), "form", [], "any", false, false, false, 53), 'errors');
        yield "
        ";
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fieldset(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "            <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
        yield "__fields grid grid--top\">
                ";
        // line 58
        yield from $this->unwrap()->yieldBlock('fields', $context, $blocks);
        // line 79
        yield "            </div>
        ";
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 59, $this->source); })()), "form", [], "any", false, false, false, 59), "children", [], "any", false, false, false, 59)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["fieldName"]) {
            // line 60
            yield "                        ";
            $context["field"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "form", [], "any", false, false, false, 60), "children", [], "any", false, false, false, 60), $context["fieldName"], [], "any", false, false, false, 60);
            // line 61
            yield "
                        ";
            // line 62
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 62, $this->source); })()), "isRendered", [], "any", false, false, false, 62)) {
                // line 63
                yield "                            ";
                $context["fieldLayoutClass"] = "col col--sm-12";
                // line 64
                yield "
                            ";
                // line 65
                if (CoreExtension::inFilter($context["fieldName"], Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 65, $this->source); })()), "layout", [], "any", false, false, false, 65)))) {
                    // line 66
                    yield "                                ";
                    $context["fieldLayoutClass"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "layout", [], "any", false, false, false, 66), $context["fieldName"], [], "any", false, false, false, 66);
                    // line 67
                    yield "                            ";
                }
                // line 68
                yield "
                            ";
                // line 69
                yield from $this->unwrap()->yieldBlock('field', $context, $blocks);
                // line 76
                yield "                        ";
            }
            // line 77
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['fieldName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "                ";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 70, $this->source); })()), 'row', ["rowAttr" => ["class" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 72
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72) . "__field ") . (isset($context["fieldLayoutClass"]) || array_key_exists("fieldLayoutClass", $context) ? $context["fieldLayoutClass"] : (function () { throw new RuntimeError('Variable "fieldLayoutClass" does not exist.', 72, $this->source); })()))]]);
        // line 74
        yield "
                            ";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "                <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), "html", null, true);
        yield "__actions\">
                    ";
        // line 86
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 86, $this->source); })()), "cancel", [], "any", false, false, false, 86), "enable", [], "any", false, false, false, 86)) {
            // line 87
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('cancel', $context, $blocks);
            // line 92
            yield "                    ";
        }
        // line 93
        yield "
                    ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 94, $this->source); })()), "submit", [], "any", false, false, false, 94), "enable", [], "any", false, false, false, 94)) {
            // line 95
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('submit', $context, $blocks);
            // line 108
            yield "                    ";
        }
        // line 109
        yield "                </div>
            ";
        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_cancel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        yield "                            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 88, $this->source); })()), "cancel", [], "any", false, false, false, 88), "url", [], "any", false, false, false, 88), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88), "html", null, true);
        yield "__action ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 88, $this->source); })()), "cancel", [], "any", false, false, false, 88), "class", [], "any", false, false, false, 88), "html", null, true);
        yield "\" ";
        yield $this->env->getFunction('qa')->getCallable()([CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 88, $this->source); })()), "cancel", [], "any", false, false, false, 88), "qa", [], "any", false, false, false, 88)]);
        yield ">
                                ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 89, $this->source); })()), "cancel", [], "any", false, false, false, 89), "text", [], "any", false, false, false, 89), "html", null, true);
        yield "
                            </a>
                        ";
        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 96
        yield "                            <button ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 96, $this->source); })()), "submit", [], "any", false, false, false, 96), "attributes", [], "any", false, false, false, 96), "html", null, true);
        yield " type=\"submit\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 96, $this->source); })()), "name", [], "any", false, false, false, 96), "html", null, true);
        yield "__action ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 96, $this->source); })()), "submit", [], "any", false, false, false, 96), "class", [], "any", false, false, false, 96), "html", null, true);
        yield "\" ";
        yield $this->env->getFunction('qa')->getCallable()([CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 96, $this->source); })()), "submit", [], "any", false, false, false, 96), "qa", [], "any", false, false, false, 96)]);
        yield ">
                                ";
        // line 97
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 97, $this->source); })()), "submit", [], "any", false, false, false, 97), "icon", [], "any", false, false, false, 97))) {
            // line 98
            yield "                                    ";
            yield from             $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/form/form.twig", 98)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["small"], "data" => ["name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 101
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 101, $this->source); })()), "submit", [], "any", false, false, false, 101), "icon", [], "any", false, false, false, 101)]]));
            // line 104
            yield "                                ";
        }
        // line 105
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 105, $this->source); })()), "submit", [], "any", false, false, false, 105), "text", [], "any", false, false, false, 105), "html", null, true);
        yield "
                            </button>
                        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/form/form.twig";
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
        return array (  362 => 105,  359 => 104,  357 => 101,  355 => 98,  353 => 97,  342 => 96,  335 => 95,  327 => 89,  316 => 88,  309 => 87,  303 => 109,  300 => 108,  297 => 95,  295 => 94,  292 => 93,  289 => 92,  286 => 87,  284 => 86,  279 => 85,  272 => 84,  266 => 74,  264 => 72,  262 => 70,  255 => 69,  250 => 78,  236 => 77,  233 => 76,  231 => 69,  228 => 68,  225 => 67,  222 => 66,  220 => 65,  217 => 64,  214 => 63,  212 => 62,  209 => 61,  206 => 60,  188 => 59,  181 => 58,  175 => 79,  173 => 58,  168 => 57,  161 => 56,  153 => 53,  146 => 52,  141 => 45,  135 => 43,  132 => 42,  125 => 41,  116 => 116,  114 => 115,  109 => 112,  106 => 111,  103 => 84,  101 => 83,  97 => 81,  95 => 56,  92 => 55,  90 => 52,  86 => 51,  83 => 50,  77 => 48,  75 => 47,  72 => 46,  69 => 41,  62 => 40,  58 => 1,  57 => 9,  56 => 8,  55 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'form',
    tag: 'div'
} %}

{% define data = {
    form: required,
    enableStart: true,
    enableEnd: true,
    layout: {},
    options: {
        attr: {
            novalidate: 'novalidate'
        }
    },

    title: null,

    submit: {
        text: 'forms.submit-btn' | trans,
        class: 'button button--success',
        icon: null,
        enable: false,
        qa: 'submit-button',
        attributes: '',
    },

    cancel: {
        text: 'general.back.button' | trans,
        class: 'button button--hollow',
        icon: 'chevron-left',
        url: '#',
        enable: false,
        qa: 'cancel-button'
    }
} %}

{% block body %}
    {% block title %}
        {% if data.title is not empty %}
            <h2 class=\"title title--form title--with-border\">{{data.title}}</h2>
        {% endif %}
    {% endblock %}

    {% if data.enableStart %}
        {{ form_start(data.form, data.options) }}
    {% endif %}

    <div class=\"{{config.name}}__container\">
        {% block errors %}
            {{ form_errors(data.form) }}
        {% endblock %}

        {% block fieldset %}
            <div class=\"{{config.name}}__fields grid grid--top\">
                {% block fields %}
                    {% for fieldName in data.form.children | keys %}
                        {% set field = attribute(data.form.children, fieldName) %}

                        {% if not field.isRendered %}
                            {% set fieldLayoutClass = 'col col--sm-12' %}

                            {% if fieldName in data.layout | keys %}
                                {% set fieldLayoutClass = attribute(data.layout, fieldName) %}
                            {% endif %}

                            {% block field %}
                                {{ form_row(field, {
                                    rowAttr: {
                                        class: config.name ~ '__field ' ~ fieldLayoutClass
                                    }
                                }) }}
                            {% endblock %}
                        {% endif %}
                    {% endfor %}
                {% endblock %}
            </div>
        {% endblock %}


        {% if data.submit.enable or data.cancel.enable %}
            {% block actions %}
                <div class=\"{{config.name}}__actions\">
                    {% if data.cancel.enable %}
                        {% block cancel %}
                            <a href=\"{{data.cancel.url}}\" class=\"{{config.name}}__action {{data.cancel.class}}\" {{qa(data.cancel.qa)}}>
                                {{data.cancel.text}}
                            </a>
                        {% endblock %}
                    {% endif %}

                    {% if data.submit.enable %}
                        {% block submit %}
                            <button {{ data.submit.attributes }} type=\"submit\" class=\"{{config.name}}__action {{data.submit.class}}\" {{qa(data.submit.qa)}}>
                                {% if data.submit.icon is not empty %}
                                    {% include atom('icon') with {
                                        modifiers: ['small'],
                                        data: {
                                            name: data.submit.icon
                                        }
                                    } only %}
                                {% endif %}
                                {{data.submit.text}}
                            </button>
                        {% endblock %}
                    {% endif %}
                </div>
            {% endblock %}
        {% endif %}

    </div>

    {% if data.enableEnd %}
        {{ form_end(data.form) }}
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/form/form.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form/form.twig");
    }
}
