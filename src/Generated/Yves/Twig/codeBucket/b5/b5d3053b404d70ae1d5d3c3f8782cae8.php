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

/* @ContentProductWidget/views/cms-product-abstract/cms-product-abstract.twig */
class __TwigTemplate_f64db5346587c3005a5a70be00f41ade extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@ContentProductWidget/views/cms-product-abstract/cms-product-abstract.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["productAbstractViewCollection" =>         // line 4
(isset($context["productAbstractViewCollection"]) || array_key_exists("productAbstractViewCollection", $context) ? $context["productAbstractViewCollection"] : (function () { throw new RuntimeError('Variable "productAbstractViewCollection" does not exist.', 4, $this->source); })())], $context['data']);        // line 1
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
        yield "    <div class=\"grid grid--stretch product-list\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "productAbstractViewCollection", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["productAbstractView"]) {
            // line 10
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["productAbstractView"], "available", [], "any", false, false, false, 10)) {
                // line 11
                yield "                ";
                yield from                 $this->loadTemplate("@ContentProductWidget/views/cms-product-abstract/cms-product-abstract.twig", "@ContentProductWidget/views/cms-product-abstract/cms-product-abstract.twig", 11, "2138650656")->unwrap()->yield(CoreExtension::toArray(["class" => "col col--sm-6 col--lg-3", "data" => ["product" =>                 // line 14
$context["productAbstractView"]]]));
                // line 32
                yield "            ";
            }
            // line 33
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['productAbstractView'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContentProductWidget/views/cms-product-abstract/cms-product-abstract.twig";
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
        return array (  83 => 34,  77 => 33,  74 => 32,  72 => 14,  70 => 11,  67 => 10,  63 => 9,  60 => 8,  53 => 7,  49 => 1,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    productAbstractViewCollection: productAbstractViewCollection,
} %}

{% block body %}
    <div class=\"grid grid--stretch product-list\">
        {% for productAbstractView in data.productAbstractViewCollection %}
            {% if productAbstractView.available %}
                {% embed molecule('product-item') with {
                    class: 'col col--sm-6 col--lg-3',
                    data: {
                        product: productAbstractView,
                    },
                } only %}
                    {% block rating %}
                        {% include molecule('rating-selector', 'ProductReviewWidget') ignore missing with {
                            modifiers: ['small'],
                            data: {
                                value: data.product.rating.averageRating | default(0),
                                reviewCount:  data.product.rating.totalReview | default(0),
                                useHalfSteps: true,
                                parentJsName: config.jsName,
                            },
                            attributes: {
                                readonly: true,
                            },
                        } only %}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endfor %}
    </div>
{% endblock %}
", "@ContentProductWidget/views/cms-product-abstract/cms-product-abstract.twig", "/data/src/Pyz/Yves/ContentProductWidget/Theme/default/views/cms-product-abstract/cms-product-abstract.twig");
    }
}


/* @ContentProductWidget/views/cms-product-abstract/cms-product-abstract.twig */
class __TwigTemplate_f64db5346587c3005a5a70be00f41ade___2138650656 extends Template
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
            'rating' => [$this, 'block_rating'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 11
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("product-item"), "@ContentProductWidget/views/cms-product-abstract/cms-product-abstract.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rating(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "                        ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("rating-selector", "ProductReviewWidget"), "@ContentProductWidget/views/cms-product-abstract/cms-product-abstract.twig", 18);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["small"], "data" => ["value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 21
($context["data"] ?? null), "product", [], "any", false, true, false, 21), "rating", [], "any", false, true, false, 21), "averageRating", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 21), "rating", [], "any", false, true, false, 21), "averageRating", [], "any", false, false, false, 21), 0)) : (0)), "reviewCount" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 22
($context["data"] ?? null), "product", [], "any", false, true, false, 22), "rating", [], "any", false, true, false, 22), "totalReview", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 22), "rating", [], "any", false, true, false, 22), "totalReview", [], "any", false, false, false, 22), 0)) : (0)), "useHalfSteps" => true, "parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 24
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "jsName", [], "any", false, false, false, 24)], "attributes" => ["readonly" => true]]));
        }
        // line 30
        yield "                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContentProductWidget/views/cms-product-abstract/cms-product-abstract.twig";
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
        return array (  208 => 30,  205 => 24,  204 => 22,  203 => 21,  194 => 18,  187 => 17,  177 => 11,  83 => 34,  77 => 33,  74 => 32,  72 => 14,  70 => 11,  67 => 10,  63 => 9,  60 => 8,  53 => 7,  49 => 1,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    productAbstractViewCollection: productAbstractViewCollection,
} %}

{% block body %}
    <div class=\"grid grid--stretch product-list\">
        {% for productAbstractView in data.productAbstractViewCollection %}
            {% if productAbstractView.available %}
                {% embed molecule('product-item') with {
                    class: 'col col--sm-6 col--lg-3',
                    data: {
                        product: productAbstractView,
                    },
                } only %}
                    {% block rating %}
                        {% include molecule('rating-selector', 'ProductReviewWidget') ignore missing with {
                            modifiers: ['small'],
                            data: {
                                value: data.product.rating.averageRating | default(0),
                                reviewCount:  data.product.rating.totalReview | default(0),
                                useHalfSteps: true,
                                parentJsName: config.jsName,
                            },
                            attributes: {
                                readonly: true,
                            },
                        } only %}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endfor %}
    </div>
{% endblock %}
", "@ContentProductWidget/views/cms-product-abstract/cms-product-abstract.twig", "/data/src/Pyz/Yves/ContentProductWidget/Theme/default/views/cms-product-abstract/cms-product-abstract.twig");
    }
}
