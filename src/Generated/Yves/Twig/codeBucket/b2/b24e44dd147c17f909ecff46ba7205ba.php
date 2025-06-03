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

/* @ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig */
class __TwigTemplate_7afa8de3e95baf5a0edf5bfe9b1c43c0 extends Template
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
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("rating-selector", "@SprykerShop:ProductReviewWidget"), "@ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["reviewCount" => ""], $context['data']);        // line 1
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
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "

    ";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "reviewCount", [], "any", false, false, false, 10))) {
            // line 11
            yield "        ";
            $context["reviewCountJsName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "parentJsName", [], "any", false, false, false, 11)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "parentJsName", [], "any", false, false, false, 11) . "__review-count")) : (""));
            // line 12
            yield "
        <span class=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
            yield "__review-count ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "jsName", [], "any", false, false, false, 13), "html", null, true);
            yield "__review-count ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reviewCountJsName"]) || array_key_exists("reviewCountJsName", $context) ? $context["reviewCountJsName"] : (function () { throw new RuntimeError('Variable "reviewCountJsName" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('executeFilterIfExists')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "reviewCount", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "reviewCount", [], "any", false, false, false, 13), 0)) : (0)), "formatInt", CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "locale", [], "any", false, false, false, 13)), "html", null, true);
            yield "</span>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig";
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
        return array (  73 => 13,  70 => 12,  67 => 11,  65 => 10,  59 => 8,  52 => 7,  48 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('rating-selector', '@SprykerShop:ProductReviewWidget') %}

{% define data = {
    reviewCount: '',
} %}

{% block body %}
    {{ parent() }}

    {% if data.reviewCount is not empty %}
        {% set reviewCountJsName = data.parentJsName ? data.parentJsName ~ '__review-count' %}

        <span class=\"{{ config.name }}__review-count {{ config.jsName }}__review-count {{ reviewCountJsName }}\">{{ data.reviewCount | default(0) | executeFilterIfExists('formatInt', app.locale) }}</span>
    {% endif %}
{% endblock %}
", "@ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", "/data/src/Pyz/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.twig");
    }
}
