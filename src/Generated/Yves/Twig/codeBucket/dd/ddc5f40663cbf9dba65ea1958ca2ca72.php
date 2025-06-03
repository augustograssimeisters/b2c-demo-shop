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

/* @ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig */
class __TwigTemplate_1db14218096195fd5b318d457bfb17cf extends Template
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
            'selectionInner' => [$this, 'block_selectionInner'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("product-item-color-selector", "@SprykerShop:ProductGroupWidget"), "@ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig", 1);
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
    public function block_selectionInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        $context["dataAttributesList"] = Twig\Extension\CoreExtension::merge((isset($context["dataAttributesList"]) || array_key_exists("dataAttributesList", $context) ? $context["dataAttributesList"] : (function () { throw new RuntimeError('Variable "dataAttributesList" does not exist.', 4, $this->source); })()), ["data-product-review-count" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "rating", [], "any", false, false, false, 5)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "rating", [], "any", false, false, false, 5), "totalReview", [], "any", false, false, false, 5)) : (""))]);
        // line 7
        yield "
    ";
        // line 8
        yield from $this->yieldParentBlock("selectionInner", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig";
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
        return array (  64 => 8,  61 => 7,  59 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('product-item-color-selector', '@SprykerShop:ProductGroupWidget') %}

{% block selectionInner %}
    {% set dataAttributesList = dataAttributesList | merge({
        'data-product-review-count': item.rating ? item.rating.totalReview,
    }) %}

    {{ parent() }}
{% endblock %}
", "@ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig", "/data/src/Pyz/Yves/ProductGroupWidget/Theme/default/components/molecules/product-item-color-selector/product-item-color-selector.twig");
    }
}
