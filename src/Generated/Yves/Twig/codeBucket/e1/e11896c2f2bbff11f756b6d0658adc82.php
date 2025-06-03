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

/* @@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_a97106a0f31c3844c74df488cfc94a0e extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["product" => CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "product", [], "any", false, false, false, 4), "viewMode" => CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "viewMode", [], "any", false, false, false, 5), "eventRevealer" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["data"] ?? null), "eventRevealer", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "eventRevealer", [], "any", false, false, false, 6), null)) : (null))], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        $context["productTemplate"] = $this->env->getFunction('molecule')->getCallable()("product-item");
        // line 11
        yield "    ";
        $context["classWrap"] = "col col--sm-12 col--md-6 col--xl-4";
        // line 12
        yield "    ";
        $context["class"] = "box--stretch";
        // line 13
        yield "
    ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "viewMode", [], "any", false, false, false, 14) == "list")) {
            // line 15
            yield "        ";
            $context["productTemplate"] = $this->env->getFunction('molecule')->getCallable()("product-item-list");
            // line 16
            yield "        ";
            $context["classWrap"] = "col col--sm-12";
            // line 17
            yield "        ";
            $context["class"] = "";
            // line 18
            yield "    ";
        }
        // line 19
        yield "
    <div class=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["classWrap"]) || array_key_exists("classWrap", $context) ? $context["classWrap"] : (function () { throw new RuntimeError('Variable "classWrap" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 21
        yield from         $this->loadTemplate("@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 21, "1193904370")->unwrap()->yield(CoreExtension::toArray(["productTemplate" =>         // line 22
(isset($context["productTemplate"]) || array_key_exists("productTemplate", $context) ? $context["productTemplate"] : (function () { throw new RuntimeError('Variable "productTemplate" does not exist.', 22, $this->source); })()), "class" =>         // line 23
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 23, $this->source); })()), "data" => ["product" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "product", [], "any", false, false, false, 25), "name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "product", [], "any", false, false, false, 26), "abstract_name", [], "any", false, false, false, 26), "image" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "product", [], "any", false, false, false, 27), "images", [], "any", false, false, false, 27)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "product", [], "any", false, false, false, 27), "images", [], "any", false, false, false, 27), 0, [], "any", false, false, false, 27), "external_url_small", [], "any", false, false, false, 27)) : ("")), "imageAlt" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "product", [], "any", false, false, false, 28), "images", [], "any", false, false, false, 28)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 28), "images", [], "any", false, true, false, 28), 0, [], "any", false, true, false, 28), "alt_text", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 28), "images", [], "any", false, true, false, 28), 0, [], "any", false, true, false, 28), "alt_text", [], "any", false, false, false, 28))) : (""))) : ("")), "idProductAbstract" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "product", [], "any", false, false, false, 29), "id_product_abstract", [], "any", false, false, false, 29), "eventRevealer" => CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "eventRevealer", [], "any", false, false, false, 30)]]));
        // line 49
        yield "    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig";
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
        return array (  105 => 49,  103 => 30,  102 => 29,  101 => 28,  100 => 27,  99 => 26,  98 => 25,  97 => 23,  96 => 22,  95 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  55 => 9,  51 => 1,  50 => 6,  49 => 5,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product,
    viewMode: _widget.viewMode,
    eventRevealer: data.eventRevealer | default(null),
} %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set classWrap = 'col col--sm-12 col--md-6 col--xl-4' %}
    {% set class = 'box--stretch' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set classWrap = 'col col--sm-12' %}
        {% set class = '' %}
    {% endif %}

    <div class=\"{{ classWrap }}\">
        {% embed productTemplate with {
            productTemplate: productTemplate,
            class: class,
            data: {
                product: data.product,
                name: data.product.abstract_name,
                image: data.product.images ? data.product.images.0.external_url_small,
                imageAlt: data.product.images ? data.product.images.0.alt_text | default,
                idProductAbstract: data.product.id_product_abstract,
                eventRevealer: data.eventRevealer,
            },
        } only %}
            {% block labels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract]  with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}

            {% block rating %}
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endembed %}
    </div>
{% endblock %}
", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "/data/vendor/spryker-shop/product-widget/src/SprykerShop/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_a97106a0f31c3844c74df488cfc94a0e___1193904370 extends Template
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
        // line 21
        return $this->loadTemplate((isset($context["productTemplate"]) || array_key_exists("productTemplate", $context) ? $context["productTemplate"] : (function () { throw new RuntimeError('Variable "productTemplate" does not exist.', 21, $this->source); })()), "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_labels(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductAbstractLabelWidget", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 34)])) {
            $this->loadTemplate("@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 34, 1287183296)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 36
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "jsName", [], "any", false, false, false, 36)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 39
        yield "            ";
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rating(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductReviewDisplayWidget", [((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 42), "rating", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 42), "rating", [], "any", false, false, false, 42), 0)) : (0))])) {
            $this->loadTemplate("@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 42, 1150880464)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 44
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 44, $this->source); })()), "jsName", [], "any", false, false, false, 44)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 47
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig";
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
        return array (  256 => 47,  253 => 44,  250 => 42,  243 => 41,  238 => 39,  235 => 36,  232 => 34,  225 => 33,  215 => 21,  105 => 49,  103 => 30,  102 => 29,  101 => 28,  100 => 27,  99 => 26,  98 => 25,  97 => 23,  96 => 22,  95 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  55 => 9,  51 => 1,  50 => 6,  49 => 5,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product,
    viewMode: _widget.viewMode,
    eventRevealer: data.eventRevealer | default(null),
} %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set classWrap = 'col col--sm-12 col--md-6 col--xl-4' %}
    {% set class = 'box--stretch' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set classWrap = 'col col--sm-12' %}
        {% set class = '' %}
    {% endif %}

    <div class=\"{{ classWrap }}\">
        {% embed productTemplate with {
            productTemplate: productTemplate,
            class: class,
            data: {
                product: data.product,
                name: data.product.abstract_name,
                image: data.product.images ? data.product.images.0.external_url_small,
                imageAlt: data.product.images ? data.product.images.0.alt_text | default,
                idProductAbstract: data.product.id_product_abstract,
                eventRevealer: data.eventRevealer,
            },
        } only %}
            {% block labels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract]  with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}

            {% block rating %}
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endembed %}
    </div>
{% endblock %}
", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "/data/vendor/spryker-shop/product-widget/src/SprykerShop/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_a97106a0f31c3844c74df488cfc94a0e___1287183296 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 34, $this->source); })()), "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 34);
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
        return "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig";
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
        return array (  363 => 34,  256 => 47,  253 => 44,  250 => 42,  243 => 41,  238 => 39,  235 => 36,  232 => 34,  225 => 33,  215 => 21,  105 => 49,  103 => 30,  102 => 29,  101 => 28,  100 => 27,  99 => 26,  98 => 25,  97 => 23,  96 => 22,  95 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  55 => 9,  51 => 1,  50 => 6,  49 => 5,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product,
    viewMode: _widget.viewMode,
    eventRevealer: data.eventRevealer | default(null),
} %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set classWrap = 'col col--sm-12 col--md-6 col--xl-4' %}
    {% set class = 'box--stretch' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set classWrap = 'col col--sm-12' %}
        {% set class = '' %}
    {% endif %}

    <div class=\"{{ classWrap }}\">
        {% embed productTemplate with {
            productTemplate: productTemplate,
            class: class,
            data: {
                product: data.product,
                name: data.product.abstract_name,
                image: data.product.images ? data.product.images.0.external_url_small,
                imageAlt: data.product.images ? data.product.images.0.alt_text | default,
                idProductAbstract: data.product.id_product_abstract,
                eventRevealer: data.eventRevealer,
            },
        } only %}
            {% block labels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract]  with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}

            {% block rating %}
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endembed %}
    </div>
{% endblock %}
", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "/data/vendor/spryker-shop/product-widget/src/SprykerShop/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_a97106a0f31c3844c74df488cfc94a0e___1150880464 extends Template
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
        // line 42
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 42, $this->source); })()), "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 42);
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
        return "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig";
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
        return array (  475 => 42,  363 => 34,  256 => 47,  253 => 44,  250 => 42,  243 => 41,  238 => 39,  235 => 36,  232 => 34,  225 => 33,  215 => 21,  105 => 49,  103 => 30,  102 => 29,  101 => 28,  100 => 27,  99 => 26,  98 => 25,  97 => 23,  96 => 22,  95 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  55 => 9,  51 => 1,  50 => 6,  49 => 5,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product,
    viewMode: _widget.viewMode,
    eventRevealer: data.eventRevealer | default(null),
} %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set classWrap = 'col col--sm-12 col--md-6 col--xl-4' %}
    {% set class = 'box--stretch' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set classWrap = 'col col--sm-12' %}
        {% set class = '' %}
    {% endif %}

    <div class=\"{{ classWrap }}\">
        {% embed productTemplate with {
            productTemplate: productTemplate,
            class: class,
            data: {
                product: data.product,
                name: data.product.abstract_name,
                image: data.product.images ? data.product.images.0.external_url_small,
                imageAlt: data.product.images ? data.product.images.0.alt_text | default,
                idProductAbstract: data.product.id_product_abstract,
                eventRevealer: data.eventRevealer,
            },
        } only %}
            {% block labels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract]  with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}

            {% block rating %}
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endembed %}
    </div>
{% endblock %}
", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "/data/vendor/spryker-shop/product-widget/src/SprykerShop/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}
