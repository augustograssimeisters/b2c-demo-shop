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

/* @ShopUi/models/template.twig */
class __TwigTemplate_8e8932bb8915c98b0708ce1fd2dca6d5 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'template' => [$this, 'block_template'],
            'body' => [$this, 'block_body'],
            'getTemplateMacros' => [$this, 'block_getTemplateMacros'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield " 
";
        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["isVisible" => true], $context['data']);        // line 11
        yield from $this->unwrap()->yieldBlock('template', $context, $blocks);
        // line 17
        yield from $this->unwrap()->yieldBlock('getTemplateMacros', $context, $blocks);
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_template(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "isVisible", [], "any", false, false, false, 12)) {
            // line 13
            yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        }
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_getTemplateMacros(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 18
    public function macro_getTemplate($__templateType__ = null, $__templateName__ = null, $__moduleName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "templateType" => $__templateType__,
            "templateName" => $__templateName__,
            "moduleName" => $__moduleName__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 19
            yield "        ";
            if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 19, $this->source); })()) == "atom")) {
                // line 20
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('atom')->getCallable()((isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 20, $this->source); })()), (isset($context["moduleName"]) || array_key_exists("moduleName", $context) ? $context["moduleName"] : (function () { throw new RuntimeError('Variable "moduleName" does not exist.', 20, $this->source); })())), "html", null, true);
                yield "
        ";
            }
            // line 22
            yield "
        ";
            // line 23
            if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 23, $this->source); })()) == "molecule")) {
                // line 24
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('molecule')->getCallable()((isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 24, $this->source); })()), (isset($context["moduleName"]) || array_key_exists("moduleName", $context) ? $context["moduleName"] : (function () { throw new RuntimeError('Variable "moduleName" does not exist.', 24, $this->source); })())), "html", null, true);
                yield "
        ";
            }
            // line 26
            yield "
        ";
            // line 27
            if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 27, $this->source); })()) == "organism")) {
                // line 28
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('organism')->getCallable()((isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 28, $this->source); })()), (isset($context["moduleName"]) || array_key_exists("moduleName", $context) ? $context["moduleName"] : (function () { throw new RuntimeError('Variable "moduleName" does not exist.', 28, $this->source); })())), "html", null, true);
                yield "
        ";
            }
            // line 30
            yield "
        ";
            // line 31
            if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 31, $this->source); })()) == "view")) {
                // line 32
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('view')->getCallable()((isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 32, $this->source); })()), (isset($context["moduleName"]) || array_key_exists("moduleName", $context) ? $context["moduleName"] : (function () { throw new RuntimeError('Variable "moduleName" does not exist.', 32, $this->source); })())), "html", null, true);
                yield "
        ";
            }
            // line 34
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/models/template.twig";
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
        return array (  146 => 34,  140 => 32,  138 => 31,  135 => 30,  129 => 28,  127 => 27,  124 => 26,  118 => 24,  116 => 23,  113 => 22,  107 => 20,  104 => 19,  90 => 18,  80 => 17,  65 => 13,  63 => 12,  56 => 11,  51 => 17,  49 => 11,  48 => 7,  45 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 #
 #
 # Template API
 #}
 
{% define data = {
    isVisible: true,
} %}

{%- block template -%}
    {% if data.isVisible %}
        {%- block body -%}{%- endblock -%}
    {% endif %}
{%- endblock -%}

{%- block getTemplateMacros -%}
    {% macro getTemplate(templateType, templateName, moduleName) %}
        {% if templateType == 'atom' %}
            {{ atom(templateName, moduleName) }}
        {% endif %}

        {% if templateType == 'molecule' %}
            {{ molecule(templateName, moduleName) }}
        {% endif %}

        {% if templateType == 'organism' %}
            {{ organism(templateName, moduleName) }}
        {% endif %}

        {% if templateType == 'view' %}
            {{ view(templateName, moduleName) }}
        {% endif %}
    {% endmacro %}
{%- endblock -%}
", "@ShopUi/models/template.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/template.twig");
    }
}
