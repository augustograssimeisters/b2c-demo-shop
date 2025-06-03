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

/* @@SprykerShop:ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig */
class __TwigTemplate_69d9ba27f3e890f35d9a5c5e436b6088 extends Template
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
            'link' => [$this, 'block_link'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "breadcrumb-step", "tag" => "li"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["url" => null, "label" => null, "itemProp" => null, "withChevron" => true, "form" => null, "formName" => "", "tokenFieldName" => ""], $context['data']);        // line 18
        $context["isFormElement"] = ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "form", [], "any", false, false, false, 18)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "formName", [], "any", false, false, false, 18)));
        // line 19
        $context["isLink"] = ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "url", [], "any", false, false, false, 19)) &&  !(isset($context["isFormElement"]) || array_key_exists("isFormElement", $context) ? $context["isFormElement"] : (function () { throw new RuntimeError('Variable "isFormElement" does not exist.', 19, $this->source); })()));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "itemProp", [], "any", false, false, false, 22)) {
            // line 23
            yield "<span itemprop=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "itemProp", [], "any", false, false, false, 23), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "label", [], "any", false, false, false, 23), "html", null, true);
            yield "</span>";
        } else {
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "label", [], "any", false, false, false, 25), "html", null, true);
        }
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        if ((isset($context["isLink"]) || array_key_exists("isLink", $context) ? $context["isLink"] : (function () { throw new RuntimeError('Variable "isLink" does not exist.', 30, $this->source); })())) {
            // line 31
            yield from $this->unwrap()->yieldBlock('link', $context, $blocks);
        }
        // line 36
        if ((isset($context["isFormElement"]) || array_key_exists("isFormElement", $context) ? $context["isFormElement"] : (function () { throw new RuntimeError('Variable "isFormElement" does not exist.', 36, $this->source); })())) {
            // line 37
            yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        }
        // line 45
        if (( !(isset($context["isLink"]) || array_key_exists("isLink", $context) ? $context["isLink"] : (function () { throw new RuntimeError('Variable "isLink" does not exist.', 45, $this->source); })()) &&  !(isset($context["isFormElement"]) || array_key_exists("isFormElement", $context) ? $context["isFormElement"] : (function () { throw new RuntimeError('Variable "isFormElement" does not exist.', 45, $this->source); })()))) {
            yield from             $this->unwrap()->yieldBlock("label", $context, $blocks);
        }
        // line 46
        yield "    
    ";
        // line 47
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "withChevron", [], "any", false, false, false, 47)) {
            // line 48
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig", 48)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["small"], "class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 50
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50) . "__separator"), "data" => ["name" => "angle-double-right"]]));
            // line 55
            yield "    ";
        }
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "url", [], "any", false, false, false, 32), "html", null, true);
        yield "\">";
        yield from         $this->unwrap()->yieldBlock("label", $context, $blocks);
        yield "</a>
        ";
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "            <form class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
        yield "__form\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "formName", [], "any", false, false, false, 38), "html", null, true);
        yield "\" method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "url", [], "any", false, false, false, 38), "html", null, true);
        yield "\">
                <input name=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "tokenFieldName", [], "any", false, false, false, 39), "html", null, true);
        yield "\" type=\"hidden\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "formName", [], "any", false, false, false, 39)), "html", null, true);
        yield "\">
                <button class=\"link\">";
        // line 40
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
        return "@@SprykerShop:ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig";
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
        return array (  157 => 40,  151 => 39,  142 => 38,  135 => 37,  125 => 32,  118 => 31,  112 => 55,  110 => 50,  108 => 48,  106 => 47,  103 => 46,  99 => 45,  96 => 37,  94 => 36,  91 => 31,  89 => 30,  82 => 29,  76 => 25,  69 => 23,  67 => 22,  60 => 21,  56 => 1,  54 => 19,  52 => 18,  51 => 8,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'breadcrumb-step',
    tag: 'li',
} %}

{% define data = {
    url: null,
    label: null,
    itemProp: null,
    withChevron: true,
    form: null,
    formName: '',
    tokenFieldName: '',
} %}

{% set isFormElement = data.form is not empty or data.formName is not empty %}
{% set isLink = data.url is not empty and not isFormElement %}

{% block label %}
    {%- if data.itemProp -%}
        <span itemprop=\"{{- data.itemProp -}}\">{{- data.label -}}</span>
    {%- else -%}
        {{- data.label -}}
    {%- endif -%}
{% endblock %}

{% block body %}
    {%- if isLink -%}
        {% block link %}
            <a href=\"{{ data.url }}\">{{ block('label') }}</a>
        {% endblock %}
    {%- endif -%}

    {%- if isFormElement -%}
        {% block form %}
            <form class=\"{{ config.name }}__form\" name=\"{{ data.formName }}\" method=\"post\" action=\"{{ data.url }}\">
                <input name=\"{{ data.tokenFieldName }}\" type=\"hidden\" value=\"{{ csrf_token(data.formName) }}\">
                <button class=\"link\">{{ block('label') }}</button>
            </form>
        {% endblock %}
    {%- endif -%}

    {% if not isLink and not isFormElement %}{{ block('label') }}{% endif %}
    
    {% if data.withChevron %}
        {% include atom('icon') with {
            modifiers: ['small'],
            class: config.name ~ '__separator',
            data: {
                name: 'angle-double-right',
            },
        } only %}
    {% endif %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/breadcrumb-step/breadcrumb-step.twig");
    }
}
