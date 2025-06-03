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

/* @@SprykerShop:StoreWidget/views/switcher/switcher.twig */
class __TwigTemplate_eeb88c8d32e8dccdb89b9a7c6e0dc553 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@@SprykerShop:StoreWidget/views/switcher/switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["storeNames" => CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "storeNames", [], "any", false, false, false, 4), "currentStoreName" => CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "currentStoreName", [], "any", false, false, false, 5), "isVisible" => ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "storeNames", [], "any", false, false, false, 6)) && (((CoreExtension::getAttribute($this->env, $this->source, ($context["_widget"] ?? null), "isDynamicStoreEnabled", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["_widget"] ?? null), "isDynamicStoreEnabled", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["_widget"] ?? null), "isDynamicStoreEnabled", [], "any", false, false, false, 6)) : (true)))], $context['data']);        // line 1
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
        yield "    <form method=\"GET\" action=\"/\">
        ";
        // line 11
        $context["options"] = [];
        // line 12
        yield "
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "storeNames", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["storeName"]) {
            // line 14
            yield "            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 14, $this->source); })()), [["label" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("store_widget.switcher.store") . " ") .             // line 15
$context["storeName"]), "value" =>             // line 16
$context["storeName"], "selected" => (            // line 17
$context["storeName"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "currentStoreName", [], "any", false, false, false, 17))]]);
            // line 19
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['storeName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
        ";
        // line 21
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("select"), "@@SprykerShop:StoreWidget/views/switcher/switcher.twig", 21)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["naked"], "data" => ["options" =>         // line 24
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 24, $this->source); })())], "attributes" => ["name" => "_store", "data-form-submitter" => true]]));
        // line 31
        yield "    </form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:StoreWidget/views/switcher/switcher.twig";
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
        return array (  92 => 31,  90 => 24,  89 => 21,  86 => 20,  80 => 19,  78 => 17,  77 => 16,  76 => 15,  74 => 14,  70 => 13,  67 => 12,  65 => 11,  62 => 10,  55 => 9,  51 => 1,  50 => 6,  49 => 5,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    storeNames: _widget.storeNames,
    currentStoreName: _widget.currentStoreName,
    isVisible: _widget.storeNames is not empty and (_widget.isDynamicStoreEnabled ?? true),
} %}

{% block body %}
    <form method=\"GET\" action=\"/\">
        {% set options = [] %}

        {% for storeName in data.storeNames %}
            {% set options = options | merge([{
                label: 'store_widget.switcher.store' | trans ~ ' ' ~ storeName,
                value: storeName,
                selected: storeName == data.currentStoreName,
            }]) %}
        {% endfor %}

        {% include atom('select') with {
            modifiers: ['naked'],
            data: {
                options: options,
            },
            attributes: {
                name: '_store',
                'data-form-submitter': true,
            },
        } only %}
    </form>
{% endblock %}
", "@@SprykerShop:StoreWidget/views/switcher/switcher.twig", "/data/vendor/spryker-shop/store-widget/src/SprykerShop/Yves/StoreWidget/Theme/default/views/switcher/switcher.twig");
    }
}
