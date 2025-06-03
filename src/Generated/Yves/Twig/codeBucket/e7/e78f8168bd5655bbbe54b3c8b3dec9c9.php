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

/* @@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig */
class __TwigTemplate_cfd511fbedb229fd93df02229c164f11 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["items" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["_widget"] ?? null), "productGroupItems", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_widget"] ?? null), "productGroupItems", [], "any", false, false, false, 4), [])) : ([])), "parentJsName" => ""], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "items", [], "any", false, false, false, 9)) > 1)) {
            // line 10
            yield "        <hr>
        ";
            // line 11
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("product-item-color-selector", "ProductGroupWidget"), "@@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", 11)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["center"], "data" => ["items" => CoreExtension::getAttribute($this->env, $this->source,             // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "items", [], "any", false, false, false, 14), "parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "parentJsName", [], "any", false, false, false, 15)]]));
            // line 18
            yield "        <hr>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig";
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
        return array (  70 => 18,  68 => 15,  67 => 14,  66 => 11,  63 => 10,  60 => 9,  53 => 8,  49 => 1,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    items: _widget.productGroupItems | default([]),
    parentJsName: '',
} %}

{% block body %}
    {% if data.items | length > 1 %}
        <hr>
        {% include molecule('product-item-color-selector', 'ProductGroupWidget') with {
            modifiers: ['center'],
            data: {
                items: data.items,
                parentJsName: data.parentJsName,
            },
        } only %}
        <hr>
    {% endif %}
{% endblock %}
", "@@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", "/data/vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/views/product-item-color-selector/product-item-color-selector.twig");
    }
}
