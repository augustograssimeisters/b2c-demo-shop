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

/* @StoreWidget/views/switcher/switcher.twig */
class __TwigTemplate_f5d6a8fd83724782c200cf4973ab1d68 extends Template
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
        return $this->loadTemplate($this->env->getFunction('view')->getCallable()("switcher", "@SprykerShop:StoreWidget"), "@StoreWidget/views/switcher/switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["additionalModifiers" => ["hollow", "header"], "additionalClassName" => ""], $context['data']);        // line 1
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
        yield "    <form method=\"GET\" action=\"/\">
        ";
        // line 10
        $context["options"] = [];
        // line 11
        yield "
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "storeNames", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["storeName"]) {
            // line 13
            yield "            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 13, $this->source); })()), [["label" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("store_widget.switcher.store") . " ") .             // line 14
$context["storeName"]), "value" =>             // line 15
$context["storeName"], "selected" => (            // line 16
$context["storeName"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "currentStoreName", [], "any", false, false, false, 16))]]);
            // line 18
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['storeName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
        ";
        // line 20
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("custom-select"), "@StoreWidget/views/switcher/switcher.twig", 20)->unwrap()->yield(CoreExtension::toArray(["modifiers" => CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "additionalModifiers", [], "any", false, false, false, 21), "data" => ["options" =>         // line 23
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 23, $this->source); })())], "attributes" => ["name" => "_store", "config-theme" => "secondary", "additional-class-name" => CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "additionalClassName", [], "any", false, false, false, 28), "data-form-submitter" => true]]));
        // line 32
        yield "    </form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@StoreWidget/views/switcher/switcher.twig";
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
        return array (  91 => 32,  89 => 28,  88 => 23,  87 => 21,  86 => 20,  83 => 19,  77 => 18,  75 => 16,  74 => 15,  73 => 14,  71 => 13,  67 => 12,  64 => 11,  62 => 10,  59 => 9,  52 => 8,  48 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends view('switcher', '@SprykerShop:StoreWidget') %}

{% define data = {
    additionalModifiers: ['hollow', 'header'],
    additionalClassName: '',
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

        {% include molecule('custom-select') with {
            modifiers: data.additionalModifiers,
            data: {
                options: options,
            },
            attributes: {
                name: '_store',
                'config-theme': 'secondary',
                'additional-class-name': data.additionalClassName,
                'data-form-submitter': true,
            },
        } only %}
    </form>
{% endblock %}
", "@StoreWidget/views/switcher/switcher.twig", "/data/src/Pyz/Yves/StoreWidget/Theme/default/views/switcher/switcher.twig");
    }
}
