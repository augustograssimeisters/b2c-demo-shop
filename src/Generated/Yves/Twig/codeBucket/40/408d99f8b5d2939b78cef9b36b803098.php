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

/* @ProductComparisonWidget/views/product-comparison-list-link/product-comparison-list-link.twig */
class __TwigTemplate_29ced43fbd785516caae84aa313e1b25 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@ProductComparisonWidget/views/product-comparison-list-link/product-comparison-list-link.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("comparison-link", "ProductComparisonPage"), "@ProductComparisonWidget/views/product-comparison-list-link/product-comparison-list-link.twig", 4)->unwrap()->yield([]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductComparisonWidget/views/product-comparison-list-link/product-comparison-list-link.twig";
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
        return array (  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% block body %}
    {% include molecule('comparison-link', 'ProductComparisonPage') only %}
{% endblock %}
", "@ProductComparisonWidget/views/product-comparison-list-link/product-comparison-list-link.twig", "/data/vendor/spryker-shop/product-comparison-widget/src/SprykerShop/Yves/ProductComparisonWidget/Theme/default/views/product-comparison-list-link/product-comparison-list-link.twig");
    }
}
