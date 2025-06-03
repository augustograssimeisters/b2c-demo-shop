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

/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_ca5b9c34035a46e02a2b3e8a607ff3a9 extends Template
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
            'thumbnailWrapper' => [$this, 'block_thumbnailWrapper'],
            'imageContainer' => [$this, 'block_imageContainer'],
            'image' => [$this, 'block_image'],
            'imageLink' => [$this, 'block_imageLink'],
            'productThumbnail' => [$this, 'block_productThumbnail'],
            'labels' => [$this, 'block_labels'],
            'productAbstractLabels' => [$this, 'block_productAbstractLabels'],
            'groups' => [$this, 'block_groups'],
            'productAbstractGroups' => [$this, 'block_productAbstractGroups'],
            'content' => [$this, 'block_content'],
            'colors' => [$this, 'block_colors'],
            'name' => [$this, 'block_name'],
            'link' => [$this, 'block_link'],
            'title' => [$this, 'block_title'],
            'sku' => [$this, 'block_sku'],
            'rating' => [$this, 'block_rating'],
            'productAbstractRating' => [$this, 'block_productAbstractRating'],
            'priceContainer' => [$this, 'block_priceContainer'],
            'price' => [$this, 'block_price'],
            'actionsContainer' => [$this, 'block_actionsContainer'],
            'actions' => [$this, 'block_actions'],
            'actionsContent' => [$this, 'block_actionsContent'],
            'action' => [$this, 'block_action'],
            'actionInner' => [$this, 'block_actionInner'],
            'icon' => [$this, 'block_icon'],
            'ajaxAddToCart' => [$this, 'block_ajaxAddToCart'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-item", "tag" => "product-item"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["product" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "name" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["data"] ?? null), "product", [], "any", false, true, false, 10), "name", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 10), "name", [], "any", false, false, false, 10))) : ("")), "sku" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["data"] ?? null), "product", [], "any", false, true, false, 11), "sku", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 11), "sku", [], "any", false, false, false, 11))) : ("")), "url" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 12
($context["data"] ?? null), "product", [], "any", false, true, false, 12), "url", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 12), "url", [], "any", false, false, false, 12))) : ("")), "image" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["data"] ?? null), "product", [], "any", false, true, false, 13), "images", [], "any", true, true, false, 13)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 13), "images", [], "any", false, true, false, 13), 0, [], "any", false, true, false, 13), "externalUrlSmall", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 13), "images", [], "any", false, true, false, 13), 0, [], "any", false, true, false, 13), "externalUrlSmall", [], "any", false, false, false, 13))) : (""))) : ("")), "imageAlt" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 14
($context["data"] ?? null), "product", [], "any", false, true, false, 14), "images", [], "any", true, true, false, 14) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 14), "images", [], "any", false, true, false, 14), 0, [], "any", false, true, false, 14), "altText", [], "any", true, true, false, 14))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "product", [], "any", false, false, false, 14), "images", [], "any", false, false, false, 14), 0, [], "any", false, false, false, 14), "altText", [], "any", false, false, false, 14)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "name", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "name", [], "any", false, false, false, 14))) : ("")))), "idProductAbstract" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["data"] ?? null), "product", [], "any", false, true, false, 15), "idProductAbstract", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 15), "idProductAbstract", [], "any", false, false, false, 15))) : ("")), "currencyIsoCode" => null, "metaSku" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 17
($context["data"] ?? null), "product", [], "any", false, true, false, 17), "sku", [], "any", true, true, false, 17)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "product", [], "any", false, false, false, 17), "sku", [], "any", false, false, false, 17)) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 17), "abstract_sku", [], "any", true, true, false, 17)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "product", [], "any", false, false, false, 17), "abstract_sku", [], "any", false, false, false, 17)) : ("")))), "eventRevealer" => null], $context['data']);        // line 21
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["itemscope" => "", "itemtype" => "https://schema.org/Product"], $context['attributes']);        // line 26
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extraClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " box ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "jsName", [], "any", false, false, false, 28), "html", null, true);
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        yield from $this->unwrap()->yieldBlock('thumbnailWrapper', $context, $blocks);
        // line 72
        yield "
    ";
        // line 73
        yield from $this->unwrap()->yieldBlock('labels', $context, $blocks);
        // line 84
        yield "
    ";
        // line 85
        yield from $this->unwrap()->yieldBlock('groups', $context, $blocks);
        // line 92
        yield "
    ";
        // line 93
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 163
        yield "
    ";
        // line 164
        yield from $this->unwrap()->yieldBlock('actionsContainer', $context, $blocks);
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_thumbnailWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "        ";
        $context["extraClass"] = "";
        // line 33
        yield "        ";
        $context["modifiers"] = [];
        // line 34
        yield "
        ";
        // line 35
        yield from $this->unwrap()->yieldBlock('imageContainer', $context, $blocks);
        // line 71
        yield "    ";
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_imageContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "            ";
        // line 55
        yield "
            ";
        // line 56
        yield from $this->unwrap()->yieldBlock('image', $context, $blocks);
        // line 70
        yield "        ";
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "url", [], "any", false, false, false, 57)) {
            // line 58
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('imageLink', $context, $blocks);
            // line 63
            yield "                ";
        }
        // line 64
        yield "                ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "url", [], "any", false, false, false, 64)) {
            // line 65
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('productThumbnail', $context, $blocks);
            // line 68
            yield "                ";
        }
        // line 69
        yield "            ";
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_imageLink(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "                        <a class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "jsName", [], "any", false, false, false, 59), "html", null, true);
        yield "__link-detail-page\" itemprop=\"url\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 59, $this->source); })()), "url", [], "any", false, false, false, 59));
        yield "\">
                            ";
        // line 60
        yield CoreExtension::callMacro($macros["macros"], "macro_thumbnail", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "image", [], "any", false, false, false, 60), ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "imageAlt", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "imageAlt", [], "any", false, false, false, 60), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60))), (isset($context["extraClass"]) || array_key_exists("extraClass", $context) ? $context["extraClass"] : (function () { throw new RuntimeError('Variable "extraClass" does not exist.', 60, $this->source); })()), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 60, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 60, $this->source); })()), "jsName", [], "any", false, false, false, 60)], 60, $context, $this->getSourceContext());
        yield "
                        </a>
                    ";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_productThumbnail(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "                        ";
        yield CoreExtension::callMacro($macros["macros"], "macro_thumbnail", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "image", [], "any", false, false, false, 66), ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "imageAlt", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "imageAlt", [], "any", false, false, false, 66), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66))), (isset($context["extraClass"]) || array_key_exists("extraClass", $context) ? $context["extraClass"] : (function () { throw new RuntimeError('Variable "extraClass" does not exist.', 66, $this->source); })()), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 66, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 66, $this->source); })()), "jsName", [], "any", false, false, false, 66)], 66, $context, $this->getSourceContext());
        yield "
                    ";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_labels(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 74, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 74)) {
            // line 75
            yield "            ";
            yield from $this->unwrap()->yieldBlock('productAbstractLabels', $context, $blocks);
            // line 82
            yield "        ";
        }
        // line 83
        yield "    ";
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_productAbstractLabels(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductAbstractLabelWidget", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 76, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 76)])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 76, 1977150937)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 78
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 78, $this->source); })()), "jsName", [], "any", false, false, false, 78)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 81
        yield "            ";
        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_groups(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 86
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 86, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 86)) {
            // line 87
            yield "            ";
            yield from $this->unwrap()->yieldBlock('productAbstractGroups', $context, $blocks);
            // line 90
            yield "        ";
        }
        // line 91
        yield "    ";
        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_productAbstractGroups(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        yield "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductGroupWidget", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 88, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 88)])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 88, 1262319687)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 89
        yield "            ";
        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 94
        yield "        ";
        yield from $this->unwrap()->yieldBlock('colors', $context, $blocks);
        // line 101
        yield "
        ";
        // line 102
        yield from $this->unwrap()->yieldBlock('name', $context, $blocks);
        // line 117
        yield "
        ";
        // line 118
        yield from $this->unwrap()->yieldBlock('sku', $context, $blocks);
        // line 125
        yield "
        ";
        // line 126
        yield from $this->unwrap()->yieldBlock('rating', $context, $blocks);
        // line 137
        yield "
        ";
        // line 138
        yield from $this->unwrap()->yieldBlock('priceContainer', $context, $blocks);
        // line 162
        yield "    ";
        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_colors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 95
        yield "            ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductGroupColorWidget", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 95, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 95), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 95), "selectedAttributes", [], "any", true, true, false, 95) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 95), "selectedAttributes", [], "any", false, false, false, 95)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 95), "selectedAttributes", [], "any", false, false, false, 95)) : ([]))])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 95, 922062094)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget, $this->env->getFunction('view')->getCallable()("product-item-color-selector", "ProductGroupWidget"))), ["data" => ["parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 97
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 97, $this->source); })()), "jsName", [], "any", false, false, false, 97)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 100
        yield "        ";
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_name(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 103
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "name", [], "any", false, false, false, 103) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "url", [], "any", false, false, false, 103))) {
            // line 104
            yield "                ";
            yield from $this->unwrap()->yieldBlock('link', $context, $blocks);
            // line 109
            yield "            ";
        }
        // line 110
        yield "
            ";
        // line 111
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })()), "name", [], "any", false, false, false, 111) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })()), "url", [], "any", false, false, false, 111))) {
            // line 112
            yield "                ";
            yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
            // line 115
            yield "            ";
        }
        // line 116
        yield "        ";
        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 105
        yield "                    <a class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105), "html", null, true);
        yield "__name ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 105, $this->source); })()), "jsName", [], "any", false, false, false, 105), "html", null, true);
        yield "__name ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 105, $this->source); })()), "jsName", [], "any", false, false, false, 105), "html", null, true);
        yield "__link-detail-page\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 105, $this->source); })()), "url", [], "any", false, false, false, 105));
        yield "\">
                        <span itemprop=\"name\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 106, $this->source); })()), "name", [], "any", false, false, false, 106), "html", null, true);
        yield "</span>
                    </a>
                ";
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 113
        yield "                    <span itemprop=\"name\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 113, $this->source); })()), "name", [], "any", false, false, false, 113), "html", null, true);
        yield "__name ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 113, $this->source); })()), "jsName", [], "any", false, false, false, 113), "html", null, true);
        yield "__name\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 113, $this->source); })()), "name", [], "any", false, false, false, 113), "html", null, true);
        yield "</span>
                ";
        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sku(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 119
        yield "            <meta class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 119, $this->source); })()), "jsName", [], "any", false, false, false, 119), "html", null, true);
        yield "__sku\" itemprop=\"sku\" content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 119, $this->source); })()), "metaSku", [], "any", false, false, false, 119), "html", null, true);
        yield "\">

            ";
        // line 121
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 121, $this->source); })()), "sku", [], "any", false, false, false, 121)) {
            // line 122
            yield "                <div itemprop=\"sku\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 122, $this->source); })()), "sku", [], "any", false, false, false, 122), "html", null, true);
            yield "</div>
            ";
        }
        // line 124
        yield "        ";
        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rating(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 127
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 127, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 127)) {
            // line 128
            yield "                ";
            yield from $this->unwrap()->yieldBlock('productAbstractRating', $context, $blocks);
            // line 135
            yield "            ";
        }
        // line 136
        yield "        ";
        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_productAbstractRating(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 129
        yield "                    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("DisplayProductAbstractReviewWidget", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 129, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 129)])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 129, 1769561631)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 131
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 131, $this->source); })()), "jsName", [], "any", false, false, false, 131)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 134
        yield "                ";
        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_priceContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 139
        yield "            <div class=\"spacing-y\">
                ";
        // line 140
        yield from $this->unwrap()->yieldBlock('price', $context, $blocks);
        // line 160
        yield "            </div>
        ";
        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_price(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 141
        yield "                    ";
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 142
            yield "                        ";
            yield from             $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 142, "2091772416")->unwrap()->yield(CoreExtension::toArray(["data" => ["amount" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 144
($context["data"] ?? null), "product", [], "any", false, true, false, 144), "prices", [], "any", false, true, false, 144), "DEFAULT", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 144), "prices", [], "any", false, true, false, 144), "DEFAULT", [], "any", false, false, false, 144), null)) : (null)), "originalAmount" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 145
($context["data"] ?? null), "product", [], "any", false, true, false, 145), "prices", [], "any", false, true, false, 145), "ORIGINAL", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 145), "prices", [], "any", false, true, false, 145), "ORIGINAL", [], "any", false, false, false, 145), null)) : (null)), "currencyIsoCode" => CoreExtension::getAttribute($this->env, $this->source,             // line 146
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 146, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 146), "parentJsName" => CoreExtension::getAttribute($this->env, $this->source,             // line 147
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 147, $this->source); })()), "jsName", [], "any", false, false, false, 147)]]));
            // line 156
            yield "                    ";
        } else {
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.access.cannot_see_price"), "html", null, true);
        }
        // line 159
        yield "                ";
        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actionsContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 165
        yield "        <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 165, $this->source); })()), "name", [], "any", false, false, false, 165), "html", null, true);
        yield "__actions\">
            ";
        // line 166
        yield from $this->unwrap()->yieldBlock('actions', $context, $blocks);
        // line 205
        yield "        </div>
    ";
        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 167
        yield "                <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 167, $this->source); })()), "name", [], "any", false, false, false, 167), "html", null, true);
        yield "__actions-row\">
                    ";
        // line 168
        yield from $this->unwrap()->yieldBlock('actionsContent', $context, $blocks);
        // line 203
        yield "                </div>
            ";
        yield from [];
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actionsContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 169
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 169, $this->source); })()), "url", [], "any", false, false, false, 169)) {
            // line 170
            yield "                            ";
            yield from $this->unwrap()->yieldBlock('action', $context, $blocks);
            // line 189
            yield "                        ";
        }
        // line 190
        yield "
                        ";
        // line 191
        yield from $this->unwrap()->yieldBlock('ajaxAddToCart', $context, $blocks);
        // line 202
        yield "                    ";
        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_action(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 171
        yield "                                <a class=\"button button--expand ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 171, $this->source); })()), "jsName", [], "any", false, false, false, 171), "html", null, true);
        yield "__link-detail-page\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 171, $this->source); })()), "url", [], "any", false, false, false, 171));
        yield "\">
                                    ";
        // line 172
        yield from $this->unwrap()->yieldBlock('actionInner', $context, $blocks);
        // line 187
        yield "                                </a>
                            ";
        yield from [];
    }

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actionInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.view"), "html", null, true);
        // line 175
        $context["iconModifiers"] = ["small"];
        // line 176
        yield "                                        ";
        $context["iconName"] = "angle-double-right";
        // line 177
        yield "
                                        ";
        // line 178
        yield from $this->unwrap()->yieldBlock('icon', $context, $blocks);
        // line 186
        yield "                                    ";
        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 179
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 179)->unwrap()->yield(CoreExtension::toArray(["modifiers" =>         // line 180
(isset($context["iconModifiers"]) || array_key_exists("iconModifiers", $context) ? $context["iconModifiers"] : (function () { throw new RuntimeError('Variable "iconModifiers" does not exist.', 180, $this->source); })()), "data" => ["name" =>         // line 182
(isset($context["iconName"]) || array_key_exists("iconName", $context) ? $context["iconName"] : (function () { throw new RuntimeError('Variable "iconName" does not exist.', 182, $this->source); })())]]));
        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ajaxAddToCart(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 192
        yield "                            ";
        if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 192, $this->source); })()), "product", [], "any", false, false, false, 192)) && $this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeAddToCartPermissionPlugin"))) {
            // line 193
            yield "                                ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductAbstractAddToCartButtonWidget", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 193, $this->source); })()), "product", [], "any", false, false, false, 193)])) {
                $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 193, 820679497)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["buttonExtraClasses" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 195
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 195, $this->source); })()), "jsName", [], "any", false, false, false, 195) . "__ajax-button-add-to-cart"), "eventRevealer" => CoreExtension::getAttribute($this->env, $this->source,                 // line 196
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 196, $this->source); })()), "eventRevealer", [], "any", false, false, false, 196)]]));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 200
            yield "                            ";
        }
        // line 201
        yield "                        ";
        yield from [];
    }

    // line 36
    public function macro_thumbnail($__src__ = null, $__alt__ = "", $__extraClass__ = "", $__modifiers__ = [], $__jsName__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "src" => $__src__,
            "alt" => $__alt__,
            "extraClass" => $__extraClass__,
            "modifiers" => $__modifiers__,
            "jsName" => $__jsName__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 37
            yield "                ";
            yield from             $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 37, "570813215")->unwrap()->yield(CoreExtension::toArray(["class" =>             // line 38
(isset($context["extraClass"]) || array_key_exists("extraClass", $context) ? $context["extraClass"] : (function () { throw new RuntimeError('Variable "extraClass" does not exist.', 38, $this->source); })()), "modifiers" => Twig\Extension\CoreExtension::merge(            // line 39
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 39, $this->source); })()), ["thumbnail"]), "data" => ["imageSrc" =>             // line 41
(isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 41, $this->source); })()), "imageTitle" =>             // line 42
(isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 42, $this->source); })())], "embed" => ["jsName" =>             // line 45
(isset($context["jsName"]) || array_key_exists("jsName", $context) ? $context["jsName"] : (function () { throw new RuntimeError('Variable "jsName" does not exist.', 45, $this->source); })())]]));
            // line 54
            yield "            ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
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
        return array (  740 => 54,  738 => 45,  737 => 42,  736 => 41,  735 => 39,  734 => 38,  732 => 37,  716 => 36,  711 => 201,  708 => 200,  705 => 196,  704 => 195,  701 => 193,  698 => 192,  691 => 191,  686 => 182,  685 => 180,  684 => 179,  677 => 178,  672 => 186,  670 => 178,  667 => 177,  664 => 176,  662 => 175,  660 => 173,  653 => 172,  647 => 187,  645 => 172,  638 => 171,  631 => 170,  626 => 202,  624 => 191,  621 => 190,  618 => 189,  615 => 170,  612 => 169,  605 => 168,  599 => 203,  597 => 168,  592 => 167,  585 => 166,  579 => 205,  577 => 166,  572 => 165,  565 => 164,  560 => 159,  557 => 157,  554 => 156,  552 => 147,  551 => 146,  550 => 145,  549 => 144,  547 => 142,  544 => 141,  537 => 140,  531 => 160,  529 => 140,  526 => 139,  519 => 138,  514 => 134,  511 => 131,  508 => 129,  501 => 128,  496 => 136,  493 => 135,  490 => 128,  487 => 127,  480 => 126,  475 => 124,  469 => 122,  467 => 121,  459 => 119,  452 => 118,  440 => 113,  433 => 112,  425 => 106,  414 => 105,  407 => 104,  402 => 116,  399 => 115,  396 => 112,  394 => 111,  391 => 110,  388 => 109,  385 => 104,  382 => 103,  375 => 102,  370 => 100,  367 => 97,  364 => 95,  357 => 94,  352 => 162,  350 => 138,  347 => 137,  345 => 126,  342 => 125,  340 => 118,  337 => 117,  335 => 102,  332 => 101,  329 => 94,  322 => 93,  317 => 89,  312 => 88,  305 => 87,  300 => 91,  297 => 90,  294 => 87,  291 => 86,  284 => 85,  279 => 81,  276 => 78,  273 => 76,  266 => 75,  261 => 83,  258 => 82,  255 => 75,  252 => 74,  245 => 73,  237 => 66,  230 => 65,  222 => 60,  215 => 59,  208 => 58,  203 => 69,  200 => 68,  197 => 65,  194 => 64,  191 => 63,  188 => 58,  185 => 57,  178 => 56,  173 => 70,  171 => 56,  168 => 55,  166 => 36,  159 => 35,  154 => 71,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  136 => 31,  131 => 164,  128 => 163,  126 => 93,  123 => 92,  121 => 85,  118 => 84,  116 => 73,  113 => 72,  110 => 31,  103 => 30,  91 => 28,  87 => 1,  85 => 26,  84 => 21,  83 => 17,  82 => 15,  81 => 14,  80 => 13,  79 => 12,  78 => 11,  77 => 10,  76 => 9,  75 => 8,  74 => 3,  67 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    imageAlt: data.product.images is defined and data.product.images.0.altText is defined ? data.product.images.0.altText : data.name | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
    eventRevealer: null,
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                        eventRevealer: data.eventRevealer,
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_ca5b9c34035a46e02a2b3e8a607ff3a9___570813215 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 37
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("lazy-image"), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 37);
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
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "                        ";
        $context["imageExtraClasses"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 49, $this->source); })()), "jsName", [], "any", false, false, false, 49)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 49, $this->source); })()), "jsName", [], "any", false, false, false, 49) . "__image")) : (""));
        // line 50
        yield "
                        ";
        // line 51
        yield from $this->yieldParentBlock("content", $context, $blocks);
        yield "
                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
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
        return array (  1029 => 51,  1026 => 50,  1023 => 49,  1016 => 48,  1006 => 37,  740 => 54,  738 => 45,  737 => 42,  736 => 41,  735 => 39,  734 => 38,  732 => 37,  716 => 36,  711 => 201,  708 => 200,  705 => 196,  704 => 195,  701 => 193,  698 => 192,  691 => 191,  686 => 182,  685 => 180,  684 => 179,  677 => 178,  672 => 186,  670 => 178,  667 => 177,  664 => 176,  662 => 175,  660 => 173,  653 => 172,  647 => 187,  645 => 172,  638 => 171,  631 => 170,  626 => 202,  624 => 191,  621 => 190,  618 => 189,  615 => 170,  612 => 169,  605 => 168,  599 => 203,  597 => 168,  592 => 167,  585 => 166,  579 => 205,  577 => 166,  572 => 165,  565 => 164,  560 => 159,  557 => 157,  554 => 156,  552 => 147,  551 => 146,  550 => 145,  549 => 144,  547 => 142,  544 => 141,  537 => 140,  531 => 160,  529 => 140,  526 => 139,  519 => 138,  514 => 134,  511 => 131,  508 => 129,  501 => 128,  496 => 136,  493 => 135,  490 => 128,  487 => 127,  480 => 126,  475 => 124,  469 => 122,  467 => 121,  459 => 119,  452 => 118,  440 => 113,  433 => 112,  425 => 106,  414 => 105,  407 => 104,  402 => 116,  399 => 115,  396 => 112,  394 => 111,  391 => 110,  388 => 109,  385 => 104,  382 => 103,  375 => 102,  370 => 100,  367 => 97,  364 => 95,  357 => 94,  352 => 162,  350 => 138,  347 => 137,  345 => 126,  342 => 125,  340 => 118,  337 => 117,  335 => 102,  332 => 101,  329 => 94,  322 => 93,  317 => 89,  312 => 88,  305 => 87,  300 => 91,  297 => 90,  294 => 87,  291 => 86,  284 => 85,  279 => 81,  276 => 78,  273 => 76,  266 => 75,  261 => 83,  258 => 82,  255 => 75,  252 => 74,  245 => 73,  237 => 66,  230 => 65,  222 => 60,  215 => 59,  208 => 58,  203 => 69,  200 => 68,  197 => 65,  194 => 64,  191 => 63,  188 => 58,  185 => 57,  178 => 56,  173 => 70,  171 => 56,  168 => 55,  166 => 36,  159 => 35,  154 => 71,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  136 => 31,  131 => 164,  128 => 163,  126 => 93,  123 => 92,  121 => 85,  118 => 84,  116 => 73,  113 => 72,  110 => 31,  103 => 30,  91 => 28,  87 => 1,  85 => 26,  84 => 21,  83 => 17,  82 => 15,  81 => 14,  80 => 13,  79 => 12,  78 => 11,  77 => 10,  76 => 9,  75 => 8,  74 => 3,  67 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    imageAlt: data.product.images is defined and data.product.images.0.altText is defined ? data.product.images.0.altText : data.name | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
    eventRevealer: null,
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                        eventRevealer: data.eventRevealer,
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_ca5b9c34035a46e02a2b3e8a607ff3a9___1977150937 extends Template
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
        // line 76
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 76, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 76);
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
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
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
        return array (  1295 => 76,  1029 => 51,  1026 => 50,  1023 => 49,  1016 => 48,  1006 => 37,  740 => 54,  738 => 45,  737 => 42,  736 => 41,  735 => 39,  734 => 38,  732 => 37,  716 => 36,  711 => 201,  708 => 200,  705 => 196,  704 => 195,  701 => 193,  698 => 192,  691 => 191,  686 => 182,  685 => 180,  684 => 179,  677 => 178,  672 => 186,  670 => 178,  667 => 177,  664 => 176,  662 => 175,  660 => 173,  653 => 172,  647 => 187,  645 => 172,  638 => 171,  631 => 170,  626 => 202,  624 => 191,  621 => 190,  618 => 189,  615 => 170,  612 => 169,  605 => 168,  599 => 203,  597 => 168,  592 => 167,  585 => 166,  579 => 205,  577 => 166,  572 => 165,  565 => 164,  560 => 159,  557 => 157,  554 => 156,  552 => 147,  551 => 146,  550 => 145,  549 => 144,  547 => 142,  544 => 141,  537 => 140,  531 => 160,  529 => 140,  526 => 139,  519 => 138,  514 => 134,  511 => 131,  508 => 129,  501 => 128,  496 => 136,  493 => 135,  490 => 128,  487 => 127,  480 => 126,  475 => 124,  469 => 122,  467 => 121,  459 => 119,  452 => 118,  440 => 113,  433 => 112,  425 => 106,  414 => 105,  407 => 104,  402 => 116,  399 => 115,  396 => 112,  394 => 111,  391 => 110,  388 => 109,  385 => 104,  382 => 103,  375 => 102,  370 => 100,  367 => 97,  364 => 95,  357 => 94,  352 => 162,  350 => 138,  347 => 137,  345 => 126,  342 => 125,  340 => 118,  337 => 117,  335 => 102,  332 => 101,  329 => 94,  322 => 93,  317 => 89,  312 => 88,  305 => 87,  300 => 91,  297 => 90,  294 => 87,  291 => 86,  284 => 85,  279 => 81,  276 => 78,  273 => 76,  266 => 75,  261 => 83,  258 => 82,  255 => 75,  252 => 74,  245 => 73,  237 => 66,  230 => 65,  222 => 60,  215 => 59,  208 => 58,  203 => 69,  200 => 68,  197 => 65,  194 => 64,  191 => 63,  188 => 58,  185 => 57,  178 => 56,  173 => 70,  171 => 56,  168 => 55,  166 => 36,  159 => 35,  154 => 71,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  136 => 31,  131 => 164,  128 => 163,  126 => 93,  123 => 92,  121 => 85,  118 => 84,  116 => 73,  113 => 72,  110 => 31,  103 => 30,  91 => 28,  87 => 1,  85 => 26,  84 => 21,  83 => 17,  82 => 15,  81 => 14,  80 => 13,  79 => 12,  78 => 11,  77 => 10,  76 => 9,  75 => 8,  74 => 3,  67 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    imageAlt: data.product.images is defined and data.product.images.0.altText is defined ? data.product.images.0.altText : data.name | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
    eventRevealer: null,
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                        eventRevealer: data.eventRevealer,
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_ca5b9c34035a46e02a2b3e8a607ff3a9___1262319687 extends Template
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
        // line 88
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 88, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 88);
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
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
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
        return array (  1564 => 88,  1295 => 76,  1029 => 51,  1026 => 50,  1023 => 49,  1016 => 48,  1006 => 37,  740 => 54,  738 => 45,  737 => 42,  736 => 41,  735 => 39,  734 => 38,  732 => 37,  716 => 36,  711 => 201,  708 => 200,  705 => 196,  704 => 195,  701 => 193,  698 => 192,  691 => 191,  686 => 182,  685 => 180,  684 => 179,  677 => 178,  672 => 186,  670 => 178,  667 => 177,  664 => 176,  662 => 175,  660 => 173,  653 => 172,  647 => 187,  645 => 172,  638 => 171,  631 => 170,  626 => 202,  624 => 191,  621 => 190,  618 => 189,  615 => 170,  612 => 169,  605 => 168,  599 => 203,  597 => 168,  592 => 167,  585 => 166,  579 => 205,  577 => 166,  572 => 165,  565 => 164,  560 => 159,  557 => 157,  554 => 156,  552 => 147,  551 => 146,  550 => 145,  549 => 144,  547 => 142,  544 => 141,  537 => 140,  531 => 160,  529 => 140,  526 => 139,  519 => 138,  514 => 134,  511 => 131,  508 => 129,  501 => 128,  496 => 136,  493 => 135,  490 => 128,  487 => 127,  480 => 126,  475 => 124,  469 => 122,  467 => 121,  459 => 119,  452 => 118,  440 => 113,  433 => 112,  425 => 106,  414 => 105,  407 => 104,  402 => 116,  399 => 115,  396 => 112,  394 => 111,  391 => 110,  388 => 109,  385 => 104,  382 => 103,  375 => 102,  370 => 100,  367 => 97,  364 => 95,  357 => 94,  352 => 162,  350 => 138,  347 => 137,  345 => 126,  342 => 125,  340 => 118,  337 => 117,  335 => 102,  332 => 101,  329 => 94,  322 => 93,  317 => 89,  312 => 88,  305 => 87,  300 => 91,  297 => 90,  294 => 87,  291 => 86,  284 => 85,  279 => 81,  276 => 78,  273 => 76,  266 => 75,  261 => 83,  258 => 82,  255 => 75,  252 => 74,  245 => 73,  237 => 66,  230 => 65,  222 => 60,  215 => 59,  208 => 58,  203 => 69,  200 => 68,  197 => 65,  194 => 64,  191 => 63,  188 => 58,  185 => 57,  178 => 56,  173 => 70,  171 => 56,  168 => 55,  166 => 36,  159 => 35,  154 => 71,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  136 => 31,  131 => 164,  128 => 163,  126 => 93,  123 => 92,  121 => 85,  118 => 84,  116 => 73,  113 => 72,  110 => 31,  103 => 30,  91 => 28,  87 => 1,  85 => 26,  84 => 21,  83 => 17,  82 => 15,  81 => 14,  80 => 13,  79 => 12,  78 => 11,  77 => 10,  76 => 9,  75 => 8,  74 => 3,  67 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    imageAlt: data.product.images is defined and data.product.images.0.altText is defined ? data.product.images.0.altText : data.name | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
    eventRevealer: null,
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                        eventRevealer: data.eventRevealer,
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_ca5b9c34035a46e02a2b3e8a607ff3a9___922062094 extends Template
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
        // line 95
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 95, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 95);
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
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
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
        return array (  1833 => 95,  1564 => 88,  1295 => 76,  1029 => 51,  1026 => 50,  1023 => 49,  1016 => 48,  1006 => 37,  740 => 54,  738 => 45,  737 => 42,  736 => 41,  735 => 39,  734 => 38,  732 => 37,  716 => 36,  711 => 201,  708 => 200,  705 => 196,  704 => 195,  701 => 193,  698 => 192,  691 => 191,  686 => 182,  685 => 180,  684 => 179,  677 => 178,  672 => 186,  670 => 178,  667 => 177,  664 => 176,  662 => 175,  660 => 173,  653 => 172,  647 => 187,  645 => 172,  638 => 171,  631 => 170,  626 => 202,  624 => 191,  621 => 190,  618 => 189,  615 => 170,  612 => 169,  605 => 168,  599 => 203,  597 => 168,  592 => 167,  585 => 166,  579 => 205,  577 => 166,  572 => 165,  565 => 164,  560 => 159,  557 => 157,  554 => 156,  552 => 147,  551 => 146,  550 => 145,  549 => 144,  547 => 142,  544 => 141,  537 => 140,  531 => 160,  529 => 140,  526 => 139,  519 => 138,  514 => 134,  511 => 131,  508 => 129,  501 => 128,  496 => 136,  493 => 135,  490 => 128,  487 => 127,  480 => 126,  475 => 124,  469 => 122,  467 => 121,  459 => 119,  452 => 118,  440 => 113,  433 => 112,  425 => 106,  414 => 105,  407 => 104,  402 => 116,  399 => 115,  396 => 112,  394 => 111,  391 => 110,  388 => 109,  385 => 104,  382 => 103,  375 => 102,  370 => 100,  367 => 97,  364 => 95,  357 => 94,  352 => 162,  350 => 138,  347 => 137,  345 => 126,  342 => 125,  340 => 118,  337 => 117,  335 => 102,  332 => 101,  329 => 94,  322 => 93,  317 => 89,  312 => 88,  305 => 87,  300 => 91,  297 => 90,  294 => 87,  291 => 86,  284 => 85,  279 => 81,  276 => 78,  273 => 76,  266 => 75,  261 => 83,  258 => 82,  255 => 75,  252 => 74,  245 => 73,  237 => 66,  230 => 65,  222 => 60,  215 => 59,  208 => 58,  203 => 69,  200 => 68,  197 => 65,  194 => 64,  191 => 63,  188 => 58,  185 => 57,  178 => 56,  173 => 70,  171 => 56,  168 => 55,  166 => 36,  159 => 35,  154 => 71,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  136 => 31,  131 => 164,  128 => 163,  126 => 93,  123 => 92,  121 => 85,  118 => 84,  116 => 73,  113 => 72,  110 => 31,  103 => 30,  91 => 28,  87 => 1,  85 => 26,  84 => 21,  83 => 17,  82 => 15,  81 => 14,  80 => 13,  79 => 12,  78 => 11,  77 => 10,  76 => 9,  75 => 8,  74 => 3,  67 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    imageAlt: data.product.images is defined and data.product.images.0.altText is defined ? data.product.images.0.altText : data.name | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
    eventRevealer: null,
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                        eventRevealer: data.eventRevealer,
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_ca5b9c34035a46e02a2b3e8a607ff3a9___1769561631 extends Template
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
        // line 129
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 129, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 129);
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
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
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
        return array (  2102 => 129,  1833 => 95,  1564 => 88,  1295 => 76,  1029 => 51,  1026 => 50,  1023 => 49,  1016 => 48,  1006 => 37,  740 => 54,  738 => 45,  737 => 42,  736 => 41,  735 => 39,  734 => 38,  732 => 37,  716 => 36,  711 => 201,  708 => 200,  705 => 196,  704 => 195,  701 => 193,  698 => 192,  691 => 191,  686 => 182,  685 => 180,  684 => 179,  677 => 178,  672 => 186,  670 => 178,  667 => 177,  664 => 176,  662 => 175,  660 => 173,  653 => 172,  647 => 187,  645 => 172,  638 => 171,  631 => 170,  626 => 202,  624 => 191,  621 => 190,  618 => 189,  615 => 170,  612 => 169,  605 => 168,  599 => 203,  597 => 168,  592 => 167,  585 => 166,  579 => 205,  577 => 166,  572 => 165,  565 => 164,  560 => 159,  557 => 157,  554 => 156,  552 => 147,  551 => 146,  550 => 145,  549 => 144,  547 => 142,  544 => 141,  537 => 140,  531 => 160,  529 => 140,  526 => 139,  519 => 138,  514 => 134,  511 => 131,  508 => 129,  501 => 128,  496 => 136,  493 => 135,  490 => 128,  487 => 127,  480 => 126,  475 => 124,  469 => 122,  467 => 121,  459 => 119,  452 => 118,  440 => 113,  433 => 112,  425 => 106,  414 => 105,  407 => 104,  402 => 116,  399 => 115,  396 => 112,  394 => 111,  391 => 110,  388 => 109,  385 => 104,  382 => 103,  375 => 102,  370 => 100,  367 => 97,  364 => 95,  357 => 94,  352 => 162,  350 => 138,  347 => 137,  345 => 126,  342 => 125,  340 => 118,  337 => 117,  335 => 102,  332 => 101,  329 => 94,  322 => 93,  317 => 89,  312 => 88,  305 => 87,  300 => 91,  297 => 90,  294 => 87,  291 => 86,  284 => 85,  279 => 81,  276 => 78,  273 => 76,  266 => 75,  261 => 83,  258 => 82,  255 => 75,  252 => 74,  245 => 73,  237 => 66,  230 => 65,  222 => 60,  215 => 59,  208 => 58,  203 => 69,  200 => 68,  197 => 65,  194 => 64,  191 => 63,  188 => 58,  185 => 57,  178 => 56,  173 => 70,  171 => 56,  168 => 55,  166 => 36,  159 => 35,  154 => 71,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  136 => 31,  131 => 164,  128 => 163,  126 => 93,  123 => 92,  121 => 85,  118 => 84,  116 => 73,  113 => 72,  110 => 31,  103 => 30,  91 => 28,  87 => 1,  85 => 26,  84 => 21,  83 => 17,  82 => 15,  81 => 14,  80 => 13,  79 => 12,  78 => 11,  77 => 10,  76 => 9,  75 => 8,  74 => 3,  67 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    imageAlt: data.product.images is defined and data.product.images.0.altText is defined ? data.product.images.0.altText : data.name | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
    eventRevealer: null,
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                        eventRevealer: data.eventRevealer,
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_ca5b9c34035a46e02a2b3e8a607ff3a9___2091772416 extends Template
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
            'originalPrice' => [$this, 'block_originalPrice'],
            'originalPriceInner' => [$this, 'block_originalPriceInner'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 142
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("money-price"), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 142);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_originalPrice(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        yield "                                ";
        yield from $this->unwrap()->yieldBlock('originalPriceInner', $context, $blocks);
        // line 154
        yield "                            ";
        yield from [];
    }

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_originalPriceInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 152
        yield "                                    ";
        yield from $this->yieldParentBlock("originalPriceInner", $context, $blocks);
        yield "
                                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
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
        return array (  2405 => 152,  2398 => 151,  2393 => 154,  2390 => 151,  2383 => 150,  2373 => 142,  2102 => 129,  1833 => 95,  1564 => 88,  1295 => 76,  1029 => 51,  1026 => 50,  1023 => 49,  1016 => 48,  1006 => 37,  740 => 54,  738 => 45,  737 => 42,  736 => 41,  735 => 39,  734 => 38,  732 => 37,  716 => 36,  711 => 201,  708 => 200,  705 => 196,  704 => 195,  701 => 193,  698 => 192,  691 => 191,  686 => 182,  685 => 180,  684 => 179,  677 => 178,  672 => 186,  670 => 178,  667 => 177,  664 => 176,  662 => 175,  660 => 173,  653 => 172,  647 => 187,  645 => 172,  638 => 171,  631 => 170,  626 => 202,  624 => 191,  621 => 190,  618 => 189,  615 => 170,  612 => 169,  605 => 168,  599 => 203,  597 => 168,  592 => 167,  585 => 166,  579 => 205,  577 => 166,  572 => 165,  565 => 164,  560 => 159,  557 => 157,  554 => 156,  552 => 147,  551 => 146,  550 => 145,  549 => 144,  547 => 142,  544 => 141,  537 => 140,  531 => 160,  529 => 140,  526 => 139,  519 => 138,  514 => 134,  511 => 131,  508 => 129,  501 => 128,  496 => 136,  493 => 135,  490 => 128,  487 => 127,  480 => 126,  475 => 124,  469 => 122,  467 => 121,  459 => 119,  452 => 118,  440 => 113,  433 => 112,  425 => 106,  414 => 105,  407 => 104,  402 => 116,  399 => 115,  396 => 112,  394 => 111,  391 => 110,  388 => 109,  385 => 104,  382 => 103,  375 => 102,  370 => 100,  367 => 97,  364 => 95,  357 => 94,  352 => 162,  350 => 138,  347 => 137,  345 => 126,  342 => 125,  340 => 118,  337 => 117,  335 => 102,  332 => 101,  329 => 94,  322 => 93,  317 => 89,  312 => 88,  305 => 87,  300 => 91,  297 => 90,  294 => 87,  291 => 86,  284 => 85,  279 => 81,  276 => 78,  273 => 76,  266 => 75,  261 => 83,  258 => 82,  255 => 75,  252 => 74,  245 => 73,  237 => 66,  230 => 65,  222 => 60,  215 => 59,  208 => 58,  203 => 69,  200 => 68,  197 => 65,  194 => 64,  191 => 63,  188 => 58,  185 => 57,  178 => 56,  173 => 70,  171 => 56,  168 => 55,  166 => 36,  159 => 35,  154 => 71,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  136 => 31,  131 => 164,  128 => 163,  126 => 93,  123 => 92,  121 => 85,  118 => 84,  116 => 73,  113 => 72,  110 => 31,  103 => 30,  91 => 28,  87 => 1,  85 => 26,  84 => 21,  83 => 17,  82 => 15,  81 => 14,  80 => 13,  79 => 12,  78 => 11,  77 => 10,  76 => 9,  75 => 8,  74 => 3,  67 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    imageAlt: data.product.images is defined and data.product.images.0.altText is defined ? data.product.images.0.altText : data.name | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
    eventRevealer: null,
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                        eventRevealer: data.eventRevealer,
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_ca5b9c34035a46e02a2b3e8a607ff3a9___820679497 extends Template
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
        // line 193
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 193, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 193);
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
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
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
        return array (  2672 => 193,  2405 => 152,  2398 => 151,  2393 => 154,  2390 => 151,  2383 => 150,  2373 => 142,  2102 => 129,  1833 => 95,  1564 => 88,  1295 => 76,  1029 => 51,  1026 => 50,  1023 => 49,  1016 => 48,  1006 => 37,  740 => 54,  738 => 45,  737 => 42,  736 => 41,  735 => 39,  734 => 38,  732 => 37,  716 => 36,  711 => 201,  708 => 200,  705 => 196,  704 => 195,  701 => 193,  698 => 192,  691 => 191,  686 => 182,  685 => 180,  684 => 179,  677 => 178,  672 => 186,  670 => 178,  667 => 177,  664 => 176,  662 => 175,  660 => 173,  653 => 172,  647 => 187,  645 => 172,  638 => 171,  631 => 170,  626 => 202,  624 => 191,  621 => 190,  618 => 189,  615 => 170,  612 => 169,  605 => 168,  599 => 203,  597 => 168,  592 => 167,  585 => 166,  579 => 205,  577 => 166,  572 => 165,  565 => 164,  560 => 159,  557 => 157,  554 => 156,  552 => 147,  551 => 146,  550 => 145,  549 => 144,  547 => 142,  544 => 141,  537 => 140,  531 => 160,  529 => 140,  526 => 139,  519 => 138,  514 => 134,  511 => 131,  508 => 129,  501 => 128,  496 => 136,  493 => 135,  490 => 128,  487 => 127,  480 => 126,  475 => 124,  469 => 122,  467 => 121,  459 => 119,  452 => 118,  440 => 113,  433 => 112,  425 => 106,  414 => 105,  407 => 104,  402 => 116,  399 => 115,  396 => 112,  394 => 111,  391 => 110,  388 => 109,  385 => 104,  382 => 103,  375 => 102,  370 => 100,  367 => 97,  364 => 95,  357 => 94,  352 => 162,  350 => 138,  347 => 137,  345 => 126,  342 => 125,  340 => 118,  337 => 117,  335 => 102,  332 => 101,  329 => 94,  322 => 93,  317 => 89,  312 => 88,  305 => 87,  300 => 91,  297 => 90,  294 => 87,  291 => 86,  284 => 85,  279 => 81,  276 => 78,  273 => 76,  266 => 75,  261 => 83,  258 => 82,  255 => 75,  252 => 74,  245 => 73,  237 => 66,  230 => 65,  222 => 60,  215 => 59,  208 => 58,  203 => 69,  200 => 68,  197 => 65,  194 => 64,  191 => 63,  188 => 58,  185 => 57,  178 => 56,  173 => 70,  171 => 56,  168 => 55,  166 => 36,  159 => 35,  154 => 71,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  136 => 31,  131 => 164,  128 => 163,  126 => 93,  123 => 92,  121 => 85,  118 => 84,  116 => 73,  113 => 72,  110 => 31,  103 => 30,  91 => 28,  87 => 1,  85 => 26,  84 => 21,  83 => 17,  82 => 15,  81 => 14,  80 => 13,  79 => 12,  78 => 11,  77 => 10,  76 => 9,  75 => 8,  74 => 3,  67 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    imageAlt: data.product.images is defined and data.product.images.0.altText is defined ? data.product.images.0.altText : data.name | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
    eventRevealer: null,
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.imageAlt | default(data.name), extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                        eventRevealer: data.eventRevealer,
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}
