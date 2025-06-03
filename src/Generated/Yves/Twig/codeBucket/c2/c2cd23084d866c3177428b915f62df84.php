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

/* @ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig */
class __TwigTemplate_0681de73c29cc0e482bcf93f36b9c727 extends Template
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
        return $this->loadTemplate($this->env->getFunction('view')->getCallable()("product-item-color-selector", "@SprykerShop:ProductGroupWidget"), "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["parentName" => ""], $context['data']);        // line 1
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "items", [], "any", false, false, false, 8)) > 1)) {
            // line 9
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("product-item-color-selector", "ProductGroupWidget"), "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", 9)->unwrap()->yield(CoreExtension::toArray(["class" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 10
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "parentName", [], "any", false, false, false, 10)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "parentName", [], "any", false, false, false, 10) . "__colors")) : ("")), "data" => ["items" => CoreExtension::getAttribute($this->env, $this->source,             // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "items", [], "any", false, false, false, 12), "parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "parentJsName", [], "any", false, false, false, 13)]]));
            // line 16
            yield "    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig";
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
        return array (  68 => 16,  66 => 13,  65 => 12,  64 => 10,  62 => 9,  59 => 8,  52 => 7,  48 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends view('product-item-color-selector', '@SprykerShop:ProductGroupWidget') %}

{% define data = {
    parentName: '',
} %}

{% block body %}
    {% if data.items | length > 1 %}
        {% include molecule('product-item-color-selector', 'ProductGroupWidget') with {
            class: data.parentName ? data.parentName ~ '__colors',
            data: {
                items: data.items,
                parentJsName: data.parentJsName,
            },
        } only %}
    {% endif %}
{% endblock %}
", "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", "/data/src/Pyz/Yves/ProductGroupWidget/Theme/default/views/product-item-color-selector/product-item-color-selector.twig");
    }
}
