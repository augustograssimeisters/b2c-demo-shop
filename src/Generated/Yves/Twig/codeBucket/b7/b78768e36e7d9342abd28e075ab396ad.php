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

/* @ProductComparisonPage/components/molecules/comparison-link/comparison-link.twig */
class __TwigTemplate_31f546faabb515cee92d2d6b98501112 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ProductComparisonPage/components/molecules/comparison-link/comparison-link.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "comparison-link", "tag" => "comparison-link"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product-comparison")], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    <a class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "__link ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "jsName", [], "any", false, false, false, 13), "html", null, true);
        yield "__link\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 13, $this->source); })()), "url", [], "any", false, false, false, 13), "html", null, true);
        yield "\" data-qa=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "-list-link\">
        ";
        // line 14
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ProductComparisonPage/components/molecules/comparison-link/comparison-link.twig", 14)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["big"], "data" => ["name" => "compare"]]));
        // line 20
        yield "    </a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductComparisonPage/components/molecules/comparison-link/comparison-link.twig";
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
        return array (  73 => 20,  71 => 14,  60 => 13,  53 => 12,  49 => 1,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'comparison-link',
    tag: 'comparison-link',
} %}

{% define attributes = {
    url: path('product-comparison'),
} %}

{% block body %}
    <a class=\"{{ config.name }}__link {{ config.jsName }}__link\" href=\"{{ attributes.url }}\" data-qa=\"{{ config.name }}-list-link\">
        {% include atom('icon') with {
            modifiers: ['big'],
            data: {
                name: 'compare',
            },
        } only %}
    </a>
{% endblock %}
", "@ProductComparisonPage/components/molecules/comparison-link/comparison-link.twig", "/data/src/Pyz/Yves/ProductComparisonPage/Theme/default/components/molecules/comparison-link/comparison-link.twig");
    }
}
