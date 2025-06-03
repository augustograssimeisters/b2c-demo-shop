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

/* @CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig */
class __TwigTemplate_689f03ac7b6318842ae960e2bebec988 extends Template
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
            'filterSection' => [$this, 'block_filterSection'],
            'filterBar' => [$this, 'block_filterBar'],
            'form' => [$this, 'block_form'],
            'catalogContent' => [$this, 'block_catalogContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("page-layout-catalog", "CatalogPage"), "@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["searchString" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["_view"] ?? null), "searchString", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "searchString", [], "any", false, false, false, 4))) : ("")), "categoryId" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["_view"] ?? null), "idCategory", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "idCategory", [], "any", false, false, false, 5))) : (""))], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filterSection(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        yield from $this->yieldParentBlock("filterSection", $context, $blocks);
        yield "

    ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "categoryId", [], "any", false, false, false, 11)) {
            // line 12
            yield "        <div class=\"catalog-cms-block catalog-cms-block--middle\">
            ";
            // line 13
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-5')->setCmsSlotTemplatePath('@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig')->setProvidedData(["idCategory" => CoreExtension::getAttribute($this->env, $this->source,             // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "categoryId", [], "any", false, false, false, 14)])->setRequiredKeys(["idCategory"])->setAutoFilledKeys([]));            // line 16
            yield "        </div>
    ";
        }
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filterBar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "    ";
        yield from $this->yieldParentBlock("filterBar", $context, $blocks);
        yield "

    ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "categoryId", [], "any", false, false, false, 23)) {
            // line 24
            yield "        <div class=\"box\">
            ";
            // line 25
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-5')->setCmsSlotTemplatePath('@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig')->setProvidedData(["idCategory" => CoreExtension::getAttribute($this->env, $this->source,             // line 26
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "categoryId", [], "any", false, false, false, 26)])->setRequiredKeys(["idCategory"])->setAutoFilledKeys([]));            // line 28
            yield "        </div>
    ";
        }
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        yield from $this->yieldParentBlock("form", $context, $blocks);
        yield "

    ";
        // line 35
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "searchString", [], "any", false, false, false, 35))) {
            // line 36
            yield "        <input type=\"hidden\" name=\"q\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "searchString", [], "any", false, false, false, 36), "html", null, true);
            yield "\" />
    ";
        }
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_catalogContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "categoryId", [], "any", false, false, false, 41)) {
            // line 42
            yield "        <div class=\"catalog-cms-block catalog-cms-block--top\">
            ";
            // line 43
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-4')->setCmsSlotTemplatePath('@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig')->setProvidedData(["idCategory" => CoreExtension::getAttribute($this->env, $this->source,             // line 44
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })()), "categoryId", [], "any", false, false, false, 44)])->setRequiredKeys(["idCategory"])->setAutoFilledKeys([]));            // line 46
            yield "        </div>
    ";
        }
        // line 48
        yield "
    ";
        // line 49
        yield from $this->yieldParentBlock("catalogContent", $context, $blocks);
        yield "

    ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), "categoryId", [], "any", false, false, false, 51)) {
            // line 52
            yield "        <div class=\"catalog-cms-block catalog-cms-block--bottom\">
            ";
            // line 53
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-6')->setCmsSlotTemplatePath('@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig')->setProvidedData(["idCategory" => CoreExtension::getAttribute($this->env, $this->source,             // line 54
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "categoryId", [], "any", false, false, false, 54)])->setRequiredKeys(["idCategory"])->setAutoFilledKeys([]));            // line 56
            yield "        </div>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig";
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
        return array (  169 => 56,  168 => 54,  167 => 53,  164 => 52,  162 => 51,  157 => 49,  154 => 48,  150 => 46,  149 => 44,  148 => 43,  145 => 42,  142 => 41,  135 => 40,  126 => 36,  124 => 35,  118 => 33,  111 => 32,  104 => 28,  103 => 26,  102 => 25,  99 => 24,  97 => 23,  91 => 21,  84 => 20,  77 => 16,  76 => 14,  75 => 13,  72 => 12,  70 => 11,  64 => 9,  57 => 8,  53 => 1,  52 => 5,  51 => 4,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-catalog', 'CatalogPage') %}

{% define data = {
    searchString: _view.searchString | default,
    categoryId: _view.idCategory | default,
} %}

{% block filterSection %}
    {{ parent() }}

    {% if data.categoryId %}
        <div class=\"catalog-cms-block catalog-cms-block--middle\">
            {% cms_slot 'slt-5' required ['idCategory'] with {
                idCategory: data.categoryId,
            } %}
        </div>
    {% endif %}
{% endblock %}

{% block filterBar %}
    {{ parent() }}

    {% if data.categoryId %}
        <div class=\"box\">
            {% cms_slot 'slt-5' required ['idCategory'] with {
                idCategory: data.categoryId,
            } %}
        </div>
    {% endif %}
{% endblock %}

{% block form %}
    {{ parent() }}

    {% if data.searchString is not empty %}
        <input type=\"hidden\" name=\"q\" value=\"{{ data.searchString }}\" />
    {% endif %}
{% endblock %}

{% block catalogContent %}
    {% if data.categoryId %}
        <div class=\"catalog-cms-block catalog-cms-block--top\">
            {% cms_slot 'slt-4' required ['idCategory'] with {
                idCategory: data.categoryId,
            } %}
        </div>
    {% endif %}

    {{ parent() }}

    {% if data.categoryId %}
        <div class=\"catalog-cms-block catalog-cms-block--bottom\">
            {% cms_slot 'slt-6' required ['idCategory'] with {
                idCategory: data.categoryId,
            } %}
        </div>
    {% endif %}
{% endblock %}
", "@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/views/catalog-with-cms-slot/catalog-with-cms-slot.twig");
    }
}
