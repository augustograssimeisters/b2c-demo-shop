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

/* @ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_5ae14b17dd0e6352da661648fbd65a2d extends Template
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
        return $this->loadTemplate($this->env->getFunction('view')->getCallable()("catalog-product", "@SprykerShop:ProductWidget"), "@ProductWidget/views/catalog-product/catalog-product.twig", 1);
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
        $context["productTemplate"] = $this->env->getFunction('molecule')->getCallable()("product-item");
        // line 5
        yield "    ";
        $context["class"] = "col col--sm-6 col--lg-4";
        // line 6
        yield "
    ";
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "viewMode", [], "any", false, false, false, 7) == "list")) {
            // line 8
            yield "        ";
            $context["productTemplate"] = $this->env->getFunction('molecule')->getCallable()("product-item-list");
            // line 9
            yield "        ";
            $context["class"] = "col col--sm-12";
            // line 10
            yield "    ";
        }
        // line 11
        yield "
    ";
        // line 12
        $context["image"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "product", [], "any", false, false, false, 12), "images", [], "any", false, false, false, 12));
        // line 13
        yield "
    ";
        // line 14
        yield from         $this->loadTemplate("@ProductWidget/views/catalog-product/catalog-product.twig", "@ProductWidget/views/catalog-product/catalog-product.twig", 14, "2068856946")->unwrap()->yield(CoreExtension::toArray(["productTemplate" =>         // line 15
(isset($context["productTemplate"]) || array_key_exists("productTemplate", $context) ? $context["productTemplate"] : (function () { throw new RuntimeError('Variable "productTemplate" does not exist.', 15, $this->source); })()), "class" =>         // line 16
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 16, $this->source); })()), "data" => ["product" => CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "product", [], "any", false, false, false, 18), "image" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["image"] ?? null), "external_url_small", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "external_url_small", [], "any", false, false, false, 19))) : ("")), "name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "product", [], "any", false, false, false, 20), "abstract_name", [], "any", false, false, false, 20), "idProductAbstract" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "product", [], "any", false, false, false, 21), "id_product_abstract", [], "any", false, false, false, 21), "eventRevealer" => CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "eventRevealer", [], "any", false, false, false, 22)]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductWidget/views/catalog-product/catalog-product.twig";
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
        return array (  92 => 22,  91 => 21,  90 => 20,  89 => 19,  88 => 18,  87 => 16,  86 => 15,  85 => 14,  82 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  66 => 7,  63 => 6,  60 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends view('catalog-product', '@SprykerShop:ProductWidget') %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set class = 'col col--sm-6 col--lg-4' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set class = 'col col--sm-12' %}
    {% endif %}

    {% set image = data.product.images | last %}

    {% embed productTemplate with {
        productTemplate: productTemplate,
        class: class,
        data: {
            product: data.product,
            image: image.external_url_small | default,
            name: data.product.abstract_name,
            idProductAbstract: data.product.id_product_abstract,
            eventRevealer: data.eventRevealer,
        },
    } only %}
        {% block labels %}
            {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block rating %}
            {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                data: {
                    parentJsName: config.jsName,
                    reviewCount: data.product.review_count | default(0),
                },
            } only %}{% endwidget %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/catalog-product/catalog-product.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_5ae14b17dd0e6352da661648fbd65a2d___2068856946 extends Template
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
            'labels' => [$this, 'block_labels'],
            'rating' => [$this, 'block_rating'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 14
        return $this->loadTemplate((isset($context["productTemplate"]) || array_key_exists("productTemplate", $context) ? $context["productTemplate"] : (function () { throw new RuntimeError('Variable "productTemplate" does not exist.', 14, $this->source); })()), "@ProductWidget/views/catalog-product/catalog-product.twig", 14);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_labels(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "            ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductConcreteLabelWidget", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "product", [], "any", false, false, false, 26), "id_product_labels", [], "any", false, false, false, 26)])) {
            $this->loadTemplate("@ProductWidget/views/catalog-product/catalog-product.twig", "@ProductWidget/views/catalog-product/catalog-product.twig", 26, 315246088)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 28
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "jsName", [], "any", false, false, false, 28)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 31
        yield "        ";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rating(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "            ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductReviewDisplayWidget", [((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 34), "rating", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 34), "rating", [], "any", false, false, false, 34), 0)) : (0))])) {
            $this->loadTemplate("@ProductWidget/views/catalog-product/catalog-product.twig", "@ProductWidget/views/catalog-product/catalog-product.twig", 34, 1283177577)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 36
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "jsName", [], "any", false, false, false, 36), "reviewCount" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 37
($context["data"] ?? null), "product", [], "any", false, true, false, 37), "review_count", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 37), "review_count", [], "any", false, false, false, 37), 0)) : (0))]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 40
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductWidget/views/catalog-product/catalog-product.twig";
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
        return array (  235 => 40,  232 => 37,  231 => 36,  228 => 34,  221 => 33,  216 => 31,  213 => 28,  210 => 26,  203 => 25,  193 => 14,  92 => 22,  91 => 21,  90 => 20,  89 => 19,  88 => 18,  87 => 16,  86 => 15,  85 => 14,  82 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  66 => 7,  63 => 6,  60 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends view('catalog-product', '@SprykerShop:ProductWidget') %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set class = 'col col--sm-6 col--lg-4' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set class = 'col col--sm-12' %}
    {% endif %}

    {% set image = data.product.images | last %}

    {% embed productTemplate with {
        productTemplate: productTemplate,
        class: class,
        data: {
            product: data.product,
            image: image.external_url_small | default,
            name: data.product.abstract_name,
            idProductAbstract: data.product.id_product_abstract,
            eventRevealer: data.eventRevealer,
        },
    } only %}
        {% block labels %}
            {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block rating %}
            {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                data: {
                    parentJsName: config.jsName,
                    reviewCount: data.product.review_count | default(0),
                },
            } only %}{% endwidget %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/catalog-product/catalog-product.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_5ae14b17dd0e6352da661648fbd65a2d___315246088 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 26
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 26, $this->source); })()), "@ProductWidget/views/catalog-product/catalog-product.twig", 26);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductWidget/views/catalog-product/catalog-product.twig";
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
        return array (  334 => 26,  235 => 40,  232 => 37,  231 => 36,  228 => 34,  221 => 33,  216 => 31,  213 => 28,  210 => 26,  203 => 25,  193 => 14,  92 => 22,  91 => 21,  90 => 20,  89 => 19,  88 => 18,  87 => 16,  86 => 15,  85 => 14,  82 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  66 => 7,  63 => 6,  60 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends view('catalog-product', '@SprykerShop:ProductWidget') %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set class = 'col col--sm-6 col--lg-4' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set class = 'col col--sm-12' %}
    {% endif %}

    {% set image = data.product.images | last %}

    {% embed productTemplate with {
        productTemplate: productTemplate,
        class: class,
        data: {
            product: data.product,
            image: image.external_url_small | default,
            name: data.product.abstract_name,
            idProductAbstract: data.product.id_product_abstract,
            eventRevealer: data.eventRevealer,
        },
    } only %}
        {% block labels %}
            {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block rating %}
            {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                data: {
                    parentJsName: config.jsName,
                    reviewCount: data.product.review_count | default(0),
                },
            } only %}{% endwidget %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/catalog-product/catalog-product.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_5ae14b17dd0e6352da661648fbd65a2d___1283177577 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 34
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 34, $this->source); })()), "@ProductWidget/views/catalog-product/catalog-product.twig", 34);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ProductWidget/views/catalog-product/catalog-product.twig";
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
        return array (  438 => 34,  334 => 26,  235 => 40,  232 => 37,  231 => 36,  228 => 34,  221 => 33,  216 => 31,  213 => 28,  210 => 26,  203 => 25,  193 => 14,  92 => 22,  91 => 21,  90 => 20,  89 => 19,  88 => 18,  87 => 16,  86 => 15,  85 => 14,  82 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  66 => 7,  63 => 6,  60 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends view('catalog-product', '@SprykerShop:ProductWidget') %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set class = 'col col--sm-6 col--lg-4' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set class = 'col col--sm-12' %}
    {% endif %}

    {% set image = data.product.images | last %}

    {% embed productTemplate with {
        productTemplate: productTemplate,
        class: class,
        data: {
            product: data.product,
            image: image.external_url_small | default,
            name: data.product.abstract_name,
            idProductAbstract: data.product.id_product_abstract,
            eventRevealer: data.eventRevealer,
        },
    } only %}
        {% block labels %}
            {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block rating %}
            {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                data: {
                    parentJsName: config.jsName,
                    reviewCount: data.product.review_count | default(0),
                },
            } only %}{% endwidget %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/catalog-product/catalog-product.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}
