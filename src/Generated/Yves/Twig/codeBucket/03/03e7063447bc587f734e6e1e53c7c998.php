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

/* @ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig */
class __TwigTemplate_83c83257521b4c967d1c4251aaba0d88 extends Template
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
            'label' => [$this, 'block_label'],
            'body' => [$this, 'block_body'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breadcrumb-step", "@SprykerShop:ShopUi"), "@ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        $context["label"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "label", [], "any", false, false, false, 4);
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "itemProp", [], "any", false, false, false, 6)) {
            // line 7
            yield "<span class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
            yield "__prop\" itemprop=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "itemProp", [], "any", false, false, false, 7), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "</span>";
        } else {
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 9, $this->source); })()), "html", null, true);
        }
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        if ((isset($context["isLink"]) || array_key_exists("isLink", $context) ? $context["isLink"] : (function () { throw new RuntimeError('Variable "isLink" does not exist.', 14, $this->source); })())) {
            // line 15
            yield "<a class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            yield "__link\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "url", [], "any", false, false, false, 15), "html", null, true);
            yield "\">";
            yield from             $this->unwrap()->yieldBlock("label", $context, $blocks);
            yield "</a>";
        }
        // line 18
        if ((isset($context["isFormElement"]) || array_key_exists("isFormElement", $context) ? $context["isFormElement"] : (function () { throw new RuntimeError('Variable "isFormElement" does not exist.', 18, $this->source); })())) {
            // line 19
            yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        }
        // line 27
        if (( !(isset($context["isLink"]) || array_key_exists("isLink", $context) ? $context["isLink"] : (function () { throw new RuntimeError('Variable "isLink" does not exist.', 27, $this->source); })()) &&  !(isset($context["isFormElement"]) || array_key_exists("isFormElement", $context) ? $context["isFormElement"] : (function () { throw new RuntimeError('Variable "isFormElement" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("label", $context, $blocks);
            yield "
    ";
        }
        // line 30
        yield "
    ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "withChevron", [], "any", false, false, false, 31)) {
            // line 32
            yield "        <span class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
            yield "__separator\"></span>
    ";
        }
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "            <form class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        yield "__form\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "formName", [], "any", false, false, false, 20), "html", null, true);
        yield "\" method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "url", [], "any", false, false, false, 20), "html", null, true);
        yield "\">
                <input name=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "tokenFieldName", [], "any", false, false, false, 21), "html", null, true);
        yield "\" type=\"hidden\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "formName", [], "any", false, false, false, 21)), "html", null, true);
        yield "\">
                <button class=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        yield "__link\">";
        yield from         $this->unwrap()->yieldBlock("label", $context, $blocks);
        yield "</button>
            </form>
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig";
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
        return array (  146 => 22,  140 => 21,  131 => 20,  124 => 19,  115 => 32,  113 => 31,  110 => 30,  104 => 28,  102 => 27,  99 => 19,  97 => 18,  88 => 15,  86 => 14,  79 => 13,  73 => 9,  64 => 7,  62 => 6,  59 => 4,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('breadcrumb-step', '@SprykerShop:ShopUi') %}

{% block label %}
    {% set label = data.label %}

    {%- if data.itemProp -%}
        <span class=\"{{ config.name }}__prop\" itemprop=\"{{- data.itemProp -}}\">{{- label -}}</span>
    {%- else -%}
        {{- label -}}
    {%- endif -%}
{% endblock %}

{% block body %}
    {%- if isLink -%}
        <a class=\"{{ config.name }}__link\" href=\"{{ data.url }}\">{{ block('label') }}</a>
    {%- endif -%}

    {%- if isFormElement -%}
        {% block form %}
            <form class=\"{{ config.name }}__form\" name=\"{{ data.formName }}\" method=\"post\" action=\"{{ data.url }}\">
                <input name=\"{{ data.tokenFieldName }}\" type=\"hidden\" value=\"{{ csrf_token(data.formName) }}\">
                <button class=\"{{ config.name }}__link\">{{ block('label') }}</button>
            </form>
        {% endblock %}
    {%- endif -%}

    {% if not isLink and not isFormElement %}
        {{ block('label') }}
    {% endif %}

    {% if data.withChevron %}
        <span class=\"{{ config.name }}__separator\"></span>
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/breadcrumb-step/breadcrumb-step.twig");
    }
}
