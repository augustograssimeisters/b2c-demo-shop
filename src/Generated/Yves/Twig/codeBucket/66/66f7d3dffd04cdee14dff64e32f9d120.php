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

/* @ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_caff9020567bd9a4ee7b2844ba90662d extends Template
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
            'extraClass' => [$this, 'block_extraClass'],
            'body' => [$this, 'block_body'],
            'imageContainer' => [$this, 'block_imageContainer'],
            'colors' => [$this, 'block_colors'],
            'ajaxAddToCart' => [$this, 'block_ajaxAddToCart'],
            'ajaxAddToCartInner' => [$this, 'block_ajaxAddToCartInner'],
            'content' => [$this, 'block_content'],
            'image' => [$this, 'block_image'],
            'productThumbnail' => [$this, 'block_productThumbnail'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("product-item", "@SprykerShop:ShopUi"), "@ShopUi/components/molecules/product-item/product-item.twig", 1);
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
    public function block_extraClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "jsName", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "__container\">
        <div class=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "__image-wrap\">
            ";
        // line 10
        yield from $this->unwrap()->yieldBlock('imageContainer', $context, $blocks);
        // line 13
        yield "
            ";
        // line 14
        yield from         $this->unwrap()->yieldBlock("labels", $context, $blocks);
        yield "

            <div class=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "__overlay-container\">
                ";
        // line 17
        yield from $this->unwrap()->yieldBlock('colors', $context, $blocks);
        // line 25
        yield "
                ";
        // line 26
        $context["isColorSelectorExist"] = Twig\Extension\CoreExtension::spaceless(        $this->unwrap()->renderBlock("colors", $context, $blocks));
        // line 27
        yield "
                ";
        // line 28
        yield from $this->unwrap()->yieldBlock('ajaxAddToCart', $context, $blocks);
        // line 56
        yield "            </div>
        </div>

        ";
        // line 59
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 78
        yield "    </div>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_imageContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "                ";
        yield from $this->yieldParentBlock("imageContainer", $context, $blocks);
        yield "
            ";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_colors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "                    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductGroupColorWidget", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 18), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 18), "selectedAttributes", [], "any", true, true, false, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 18), "selectedAttributes", [], "any", false, false, false, 18)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 18), "selectedAttributes", [], "any", false, false, false, 18)) : ([]))])) {
            $this->loadTemplate("@ShopUi/components/molecules/product-item/product-item.twig", "@ShopUi/components/molecules/product-item/product-item.twig", 18, 1150162912)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget, $this->env->getFunction('view')->getCallable()("product-item-color-selector", "ProductGroupWidget"))), ["data" => ["parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 20
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "jsName", [], "any", false, false, false, 20), "parentName" => CoreExtension::getAttribute($this->env, $this->source,             // line 21
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 24
        yield "                ";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ajaxAddToCart(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "                    ";
        if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "product", [], "any", false, false, false, 29)) && $this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeAddToCartPermissionPlugin"))) {
            // line 30
            yield "                        ";
            $context["isColorSelectorExist"] = (($context["isColorSelectorExist"]) ?? (false));
            // line 31
            yield "                        ";
            $context["ajaxButtonClasses"] = "button button--expand button--large button--reset-min-width button--reset-border-radius";
            // line 32
            yield "                        ";
            $context["ajaxButtonExtraAttributes"] = [];
            // line 33
            yield "                        ";
            $context["ajaxAddToCartExtraClasses"] = (( !(isset($context["isColorSelectorExist"]) || array_key_exists("isColorSelectorExist", $context) ? $context["isColorSelectorExist"] : (function () { throw new RuntimeError('Variable "isColorSelectorExist" does not exist.', 33, $this->source); })())) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33) . "__overlay-container-col")) : (""));
            // line 34
            yield "
                        ";
            // line 35
            yield from $this->unwrap()->yieldBlock('ajaxAddToCartInner', $context, $blocks);
            // line 54
            yield "                    ";
        }
        // line 55
        yield "                ";
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ajaxAddToCartInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "                            ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductAbstractAddToCartButtonWidget", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "product", [], "any", false, false, false, 36)])) {
            $this->loadTemplate("@ShopUi/components/molecules/product-item/product-item.twig", "@ShopUi/components/molecules/product-item/product-item.twig", 36, 623771690)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["buttonClasses" =>             // line 38
(isset($context["ajaxButtonClasses"]) || array_key_exists("ajaxButtonClasses", $context) ? $context["ajaxButtonClasses"] : (function () { throw new RuntimeError('Variable "ajaxButtonClasses" does not exist.', 38, $this->source); })()), "buttonExtraClasses" => (CoreExtension::getAttribute($this->env, $this->source,             // line 39
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "jsName", [], "any", false, false, false, 39) . "__ajax-button-add-to-cart js-node-animator__trigger"), "isTextHidden" =>             // line 40
(isset($context["isColorSelectorExist"]) || array_key_exists("isColorSelectorExist", $context) ? $context["isColorSelectorExist"] : (function () { throw new RuntimeError('Variable "isColorSelectorExist" does not exist.', 40, $this->source); })()), "extraAttributes" =>             // line 41
(isset($context["ajaxButtonExtraAttributes"]) || array_key_exists("ajaxButtonExtraAttributes", $context) ? $context["ajaxButtonExtraAttributes"] : (function () { throw new RuntimeError('Variable "ajaxButtonExtraAttributes" does not exist.', 41, $this->source); })()), "eventRevealer" => CoreExtension::getAttribute($this->env, $this->source,             // line 42
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "eventRevealer", [], "any", false, false, false, 42)], "embed" => ["ajaxAddToCartExtraClasses" =>             // line 45
(isset($context["ajaxAddToCartExtraClasses"]) || array_key_exists("ajaxAddToCartExtraClasses", $context) ? $context["ajaxAddToCartExtraClasses"] : (function () { throw new RuntimeError('Variable "ajaxAddToCartExtraClasses" does not exist.', 45, $this->source); })())]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 53
        yield "                        ";
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "url", [], "any", false, false, false, 60), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), "html", null, true);
        yield "__info ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 60, $this->source); })()), "jsName", [], "any", false, false, false, 60), "html", null, true);
        yield "__link-detail-page grid grid--justify grid--top grid--no-wrap\">
                ";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61)) {
            // line 62
            yield "                    <div class=\"col col--sm-12 col--md-8\">
                        ";
            // line 63
            yield from             $this->unwrap()->yieldBlock("title", $context, $blocks);
            yield "
                    </div>
                ";
        }
        // line 66
        yield "
                <div class=\"col col--sm-12 col--md-4 text-right\">
                    ";
        // line 68
        yield from         $this->unwrap()->yieldBlock("price", $context, $blocks);
        yield "
                </div>
            </a>

            <div class=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "html", null, true);
        yield "__review\" itemscope itemtype=\"http://schema.org/AggregateRating\" itemprop=\"aggregateRating\">
                ";
        // line 73
        yield from         $this->unwrap()->yieldBlock("rating", $context, $blocks);
        yield "
            </div>

            <meta class=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 76, $this->source); })()), "jsName", [], "any", false, false, false, 76), "html", null, true);
        yield "__sku\" itemprop=\"sku\" content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 76, $this->source); })()), "metaSku", [], "any", false, false, false, 76), "html", null, true);
        yield "\">
        ";
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "    ";
        $context["extraClass"] = "";
        // line 83
        yield "    ";
        $context["linkExtraClass"] = "";
        // line 84
        yield "    ";
        $context["modifiers"] = ["spaceless"];
        // line 85
        yield "
    ";
        // line 86
        yield from $this->unwrap()->yieldBlock('productThumbnail', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_productThumbnail(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "        <a itemprop=\"url\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
        yield "__overlay ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "jsName", [], "any", false, false, false, 87), "html", null, true);
        yield "__link-detail-page ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["linkExtraClass"]) || array_key_exists("linkExtraClass", $context) ? $context["linkExtraClass"] : (function () { throw new RuntimeError('Variable "linkExtraClass" does not exist.', 87, $this->source); })()), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 87, $this->source); })()), "url", [], "any", false, false, false, 87), "html", null, true);
        yield "\">
            ";
        // line 88
        yield from $this->yieldParentBlock("productThumbnail", $context, $blocks);
        yield "
        </a>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/product-item/product-item.twig";
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
        return array (  318 => 88,  307 => 87,  296 => 86,  293 => 85,  290 => 84,  287 => 83,  284 => 82,  277 => 81,  268 => 76,  262 => 73,  258 => 72,  251 => 68,  247 => 66,  241 => 63,  238 => 62,  236 => 61,  227 => 60,  220 => 59,  215 => 53,  212 => 45,  211 => 42,  210 => 41,  209 => 40,  208 => 39,  207 => 38,  204 => 36,  197 => 35,  192 => 55,  189 => 54,  187 => 35,  184 => 34,  181 => 33,  178 => 32,  175 => 31,  172 => 30,  169 => 29,  162 => 28,  157 => 24,  154 => 21,  153 => 20,  150 => 18,  143 => 17,  135 => 11,  128 => 10,  122 => 78,  120 => 59,  115 => 56,  113 => 28,  110 => 27,  108 => 26,  105 => 25,  103 => 17,  99 => 16,  94 => 14,  91 => 13,  89 => 10,  85 => 9,  80 => 8,  73 => 7,  65 => 4,  58 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('product-item', '@SprykerShop:ShopUi') %}

{% block extraClass %}
    {{ config.jsName }}
{% endblock %}

{% block body %}
    <div class=\"{{ config.name }}__container\">
        <div class=\"{{ config.name }}__image-wrap\">
            {% block imageContainer %}
                {{ parent() }}
            {% endblock %}

            {{ block('labels') }}

            <div class=\"{{ config.name }}__overlay-container\">
                {% block colors %}
                    {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                        data: {
                            parentJsName: config.jsName,
                            parentName: config.name,
                        },
                    } only %}{% endwidget %}
                {% endblock %}

                {% set isColorSelectorExist = block('colors') | spaceless %}

                {% block ajaxAddToCart %}
                    {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                        {% set isColorSelectorExist = isColorSelectorExist ?? false %}
                        {% set ajaxButtonClasses = 'button button--expand button--large button--reset-min-width button--reset-border-radius' %}
                        {% set ajaxButtonExtraAttributes = {} %}
                        {% set ajaxAddToCartExtraClasses = not isColorSelectorExist ? config.name ~ '__overlay-container-col' %}

                        {% block ajaxAddToCartInner %}
                            {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                data: {
                                    buttonClasses: ajaxButtonClasses,
                                    buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart js-node-animator__trigger',
                                    isTextHidden: isColorSelectorExist,
                                    extraAttributes: ajaxButtonExtraAttributes,
                                    eventRevealer: data.eventRevealer,
                                },
                                embed: {
                                    ajaxAddToCartExtraClasses: ajaxAddToCartExtraClasses,
                                },
                            } only %}
                                {% block ajaxButton %}
                                    {% set extraClasses = embed.ajaxAddToCartExtraClasses %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endwidget %}
                        {% endblock %}
                    {% endif %}
                {% endblock %}
            </div>
        </div>

        {% block content %}
            <a href=\"{{ data.url }}\" class=\"{{ config.name }}__info {{ config.jsName }}__link-detail-page grid grid--justify grid--top grid--no-wrap\">
                {% if data.name %}
                    <div class=\"col col--sm-12 col--md-8\">
                        {{ block('title') }}
                    </div>
                {% endif %}

                <div class=\"col col--sm-12 col--md-4 text-right\">
                    {{ block('price') }}
                </div>
            </a>

            <div class=\"{{ config.name }}__review\" itemscope itemtype=\"http://schema.org/AggregateRating\" itemprop=\"aggregateRating\">
                {{ block('rating') }}
            </div>

            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">
        {% endblock %}
    </div>
{% endblock %}

{% block image %}
    {% set extraClass = '' %}
    {% set linkExtraClass = '' %}
    {% set modifiers = ['spaceless'] %}

    {% block productThumbnail %}
        <a itemprop=\"url\" class=\"{{ config.name }}__overlay {{ config.jsName }}__link-detail-page {{ linkExtraClass }}\" href=\"{{ data.url }}\">
            {{ parent() }}
        </a>
    {% endblock %}
{% endblock %}
", "@ShopUi/components/molecules/product-item/product-item.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_caff9020567bd9a4ee7b2844ba90662d___1150162912 extends Template
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
        // line 18
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 18, $this->source); })()), "@ShopUi/components/molecules/product-item/product-item.twig", 18);
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
        return "@ShopUi/components/molecules/product-item/product-item.twig";
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
        return array (  469 => 18,  318 => 88,  307 => 87,  296 => 86,  293 => 85,  290 => 84,  287 => 83,  284 => 82,  277 => 81,  268 => 76,  262 => 73,  258 => 72,  251 => 68,  247 => 66,  241 => 63,  238 => 62,  236 => 61,  227 => 60,  220 => 59,  215 => 53,  212 => 45,  211 => 42,  210 => 41,  209 => 40,  208 => 39,  207 => 38,  204 => 36,  197 => 35,  192 => 55,  189 => 54,  187 => 35,  184 => 34,  181 => 33,  178 => 32,  175 => 31,  172 => 30,  169 => 29,  162 => 28,  157 => 24,  154 => 21,  153 => 20,  150 => 18,  143 => 17,  135 => 11,  128 => 10,  122 => 78,  120 => 59,  115 => 56,  113 => 28,  110 => 27,  108 => 26,  105 => 25,  103 => 17,  99 => 16,  94 => 14,  91 => 13,  89 => 10,  85 => 9,  80 => 8,  73 => 7,  65 => 4,  58 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('product-item', '@SprykerShop:ShopUi') %}

{% block extraClass %}
    {{ config.jsName }}
{% endblock %}

{% block body %}
    <div class=\"{{ config.name }}__container\">
        <div class=\"{{ config.name }}__image-wrap\">
            {% block imageContainer %}
                {{ parent() }}
            {% endblock %}

            {{ block('labels') }}

            <div class=\"{{ config.name }}__overlay-container\">
                {% block colors %}
                    {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                        data: {
                            parentJsName: config.jsName,
                            parentName: config.name,
                        },
                    } only %}{% endwidget %}
                {% endblock %}

                {% set isColorSelectorExist = block('colors') | spaceless %}

                {% block ajaxAddToCart %}
                    {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                        {% set isColorSelectorExist = isColorSelectorExist ?? false %}
                        {% set ajaxButtonClasses = 'button button--expand button--large button--reset-min-width button--reset-border-radius' %}
                        {% set ajaxButtonExtraAttributes = {} %}
                        {% set ajaxAddToCartExtraClasses = not isColorSelectorExist ? config.name ~ '__overlay-container-col' %}

                        {% block ajaxAddToCartInner %}
                            {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                data: {
                                    buttonClasses: ajaxButtonClasses,
                                    buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart js-node-animator__trigger',
                                    isTextHidden: isColorSelectorExist,
                                    extraAttributes: ajaxButtonExtraAttributes,
                                    eventRevealer: data.eventRevealer,
                                },
                                embed: {
                                    ajaxAddToCartExtraClasses: ajaxAddToCartExtraClasses,
                                },
                            } only %}
                                {% block ajaxButton %}
                                    {% set extraClasses = embed.ajaxAddToCartExtraClasses %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endwidget %}
                        {% endblock %}
                    {% endif %}
                {% endblock %}
            </div>
        </div>

        {% block content %}
            <a href=\"{{ data.url }}\" class=\"{{ config.name }}__info {{ config.jsName }}__link-detail-page grid grid--justify grid--top grid--no-wrap\">
                {% if data.name %}
                    <div class=\"col col--sm-12 col--md-8\">
                        {{ block('title') }}
                    </div>
                {% endif %}

                <div class=\"col col--sm-12 col--md-4 text-right\">
                    {{ block('price') }}
                </div>
            </a>

            <div class=\"{{ config.name }}__review\" itemscope itemtype=\"http://schema.org/AggregateRating\" itemprop=\"aggregateRating\">
                {{ block('rating') }}
            </div>

            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">
        {% endblock %}
    </div>
{% endblock %}

{% block image %}
    {% set extraClass = '' %}
    {% set linkExtraClass = '' %}
    {% set modifiers = ['spaceless'] %}

    {% block productThumbnail %}
        <a itemprop=\"url\" class=\"{{ config.name }}__overlay {{ config.jsName }}__link-detail-page {{ linkExtraClass }}\" href=\"{{ data.url }}\">
            {{ parent() }}
        </a>
    {% endblock %}
{% endblock %}
", "@ShopUi/components/molecules/product-item/product-item.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_caff9020567bd9a4ee7b2844ba90662d___623771690 extends Template
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
            'ajaxButton' => [$this, 'block_ajaxButton'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 36
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 36, $this->source); })()), "@ShopUi/components/molecules/product-item/product-item.twig", 36);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ajaxButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "                                    ";
        $context["extraClasses"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 49, $this->source); })()), "ajaxAddToCartExtraClasses", [], "any", false, false, false, 49);
        // line 50
        yield "                                    ";
        yield from $this->yieldParentBlock("ajaxButton", $context, $blocks);
        yield "
                                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/product-item/product-item.twig";
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
        return array (  643 => 50,  640 => 49,  633 => 48,  623 => 36,  469 => 18,  318 => 88,  307 => 87,  296 => 86,  293 => 85,  290 => 84,  287 => 83,  284 => 82,  277 => 81,  268 => 76,  262 => 73,  258 => 72,  251 => 68,  247 => 66,  241 => 63,  238 => 62,  236 => 61,  227 => 60,  220 => 59,  215 => 53,  212 => 45,  211 => 42,  210 => 41,  209 => 40,  208 => 39,  207 => 38,  204 => 36,  197 => 35,  192 => 55,  189 => 54,  187 => 35,  184 => 34,  181 => 33,  178 => 32,  175 => 31,  172 => 30,  169 => 29,  162 => 28,  157 => 24,  154 => 21,  153 => 20,  150 => 18,  143 => 17,  135 => 11,  128 => 10,  122 => 78,  120 => 59,  115 => 56,  113 => 28,  110 => 27,  108 => 26,  105 => 25,  103 => 17,  99 => 16,  94 => 14,  91 => 13,  89 => 10,  85 => 9,  80 => 8,  73 => 7,  65 => 4,  58 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('product-item', '@SprykerShop:ShopUi') %}

{% block extraClass %}
    {{ config.jsName }}
{% endblock %}

{% block body %}
    <div class=\"{{ config.name }}__container\">
        <div class=\"{{ config.name }}__image-wrap\">
            {% block imageContainer %}
                {{ parent() }}
            {% endblock %}

            {{ block('labels') }}

            <div class=\"{{ config.name }}__overlay-container\">
                {% block colors %}
                    {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                        data: {
                            parentJsName: config.jsName,
                            parentName: config.name,
                        },
                    } only %}{% endwidget %}
                {% endblock %}

                {% set isColorSelectorExist = block('colors') | spaceless %}

                {% block ajaxAddToCart %}
                    {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                        {% set isColorSelectorExist = isColorSelectorExist ?? false %}
                        {% set ajaxButtonClasses = 'button button--expand button--large button--reset-min-width button--reset-border-radius' %}
                        {% set ajaxButtonExtraAttributes = {} %}
                        {% set ajaxAddToCartExtraClasses = not isColorSelectorExist ? config.name ~ '__overlay-container-col' %}

                        {% block ajaxAddToCartInner %}
                            {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                data: {
                                    buttonClasses: ajaxButtonClasses,
                                    buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart js-node-animator__trigger',
                                    isTextHidden: isColorSelectorExist,
                                    extraAttributes: ajaxButtonExtraAttributes,
                                    eventRevealer: data.eventRevealer,
                                },
                                embed: {
                                    ajaxAddToCartExtraClasses: ajaxAddToCartExtraClasses,
                                },
                            } only %}
                                {% block ajaxButton %}
                                    {% set extraClasses = embed.ajaxAddToCartExtraClasses %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endwidget %}
                        {% endblock %}
                    {% endif %}
                {% endblock %}
            </div>
        </div>

        {% block content %}
            <a href=\"{{ data.url }}\" class=\"{{ config.name }}__info {{ config.jsName }}__link-detail-page grid grid--justify grid--top grid--no-wrap\">
                {% if data.name %}
                    <div class=\"col col--sm-12 col--md-8\">
                        {{ block('title') }}
                    </div>
                {% endif %}

                <div class=\"col col--sm-12 col--md-4 text-right\">
                    {{ block('price') }}
                </div>
            </a>

            <div class=\"{{ config.name }}__review\" itemscope itemtype=\"http://schema.org/AggregateRating\" itemprop=\"aggregateRating\">
                {{ block('rating') }}
            </div>

            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">
        {% endblock %}
    </div>
{% endblock %}

{% block image %}
    {% set extraClass = '' %}
    {% set linkExtraClass = '' %}
    {% set modifiers = ['spaceless'] %}

    {% block productThumbnail %}
        <a itemprop=\"url\" class=\"{{ config.name }}__overlay {{ config.jsName }}__link-detail-page {{ linkExtraClass }}\" href=\"{{ data.url }}\">
            {{ parent() }}
        </a>
    {% endblock %}
{% endblock %}
", "@ShopUi/components/molecules/product-item/product-item.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}
