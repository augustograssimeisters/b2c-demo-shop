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

/* @ProductLabelWidget/views/product-label-group/product-label-group.twig */
class __TwigTemplate_2da5c6eb73819b141f71abb50f7b02c7 extends Template
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
        // line 3
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@ProductLabelWidget/views/product-label-group/product-label-group.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["dictionary" => CoreExtension::getAttribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "productLabelDictionaryItemTransfers", [], "any", false, false, false, 6), "parentJsName" => ""], $context['data']);        // line 10
        $context["labels"] = ((array_key_exists("labels", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 10, $this->source); })()), [])) : ([]));
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "dictionary", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            $context["labels"] = Twig\Extension\CoreExtension::merge((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 13, $this->source); })()), [["text" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 14
$context["item"], "name", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 14))) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 14))), "type" => Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 15
$context["item"], "frontEndReference", [], "any", false, false, false, 15)), [" " => "-"]))]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("label-group", "ProductLabelWidget"), "@ProductLabelWidget/views/product-label-group/product-label-group.twig", 20)->unwrap()->yield(CoreExtension::toArray(["data" => ["labels" =>         // line 22
(isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 22, $this->source); })()), "parentJsName" => CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "parentJsName", [], "any", false, false, false, 23)]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductLabelWidget/views/product-label-group/product-label-group.twig";
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
        return array (  77 => 23,  76 => 22,  74 => 20,  67 => 19,  63 => 3,  57 => 15,  56 => 14,  55 => 13,  51 => 12,  49 => 10,  48 => 6,  47 => 5,  40 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var item \\Generated\\Shared\\Transfer\\ProductLabelDictionaryItemTransfer #}

{% extends template('widget') %}

{% define data = {
    dictionary: _widget.productLabelDictionaryItemTransfers,
    parentJsName: '',
} %}

{% set labels = labels | default([]) %}

{% for item in data.dictionary %}
    {% set labels = labels | merge([{
        text: item.name | default(item.key),
        type: (item.frontEndReference | lower | replace({' ': '-'})) | default,
    }]) %}
{% endfor %}

{% block body %}
    {% include molecule('label-group', 'ProductLabelWidget') with {
        data: {
            labels: labels,
            parentJsName: data.parentJsName,
        },
    } only %}
{% endblock %}
", "@ProductLabelWidget/views/product-label-group/product-label-group.twig", "/data/vendor/spryker-shop/product-label-widget/src/SprykerShop/Yves/ProductLabelWidget/Theme/default/views/product-label-group/product-label-group.twig");
    }
}
