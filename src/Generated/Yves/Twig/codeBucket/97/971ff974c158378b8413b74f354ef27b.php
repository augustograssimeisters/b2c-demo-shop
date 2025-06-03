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

/* @ShopUi/components/molecules/breadcrumb/breadcrumb.twig */
class __TwigTemplate_f4891d63c49584e8ea2454811da3ee66 extends Template
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
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/breadcrumb/breadcrumb.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "breadcrumb", "tag" => "ul"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["steps" => [], "startWithHome" => true], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "startWithHome", [], "any", false, false, false, 14)) {
            // line 15
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breadcrumb-step"), "@ShopUi/components/molecules/breadcrumb/breadcrumb.twig", 15)->unwrap()->yield(CoreExtension::toArray(["data" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.home")]]));
            // line 21
            yield "    ";
        }
        // line 22
        yield "    ";
        yield from $this->unwrap()->yieldBlock('breadcrumbs', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumbs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "steps", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 24
            yield "            ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breadcrumb-step"), "@ShopUi/components/molecules/breadcrumb/breadcrumb.twig", 24)->unwrap()->yield(CoreExtension::toArray(["data" => ["url" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 26
$context["step"], "url", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "url", [], "any", false, false, false, 26))) : ("")), "label" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 27
$context["step"], "label", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, false, 27))) : ("")), "itemProp" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 28
$context["step"], "itemProp", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "itemProp", [], "any", false, false, false, 28))) : ("")), "withChevron" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 29
$context["step"], "withChevron", [], "any", true, true, false, 29)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["step"], "withChevron", [], "any", false, false, false, 29)) : (true)), "formName" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 30
$context["step"], "formName", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "formName", [], "any", false, false, false, 30))) : ("")), "tokenFieldName" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 31
$context["step"], "tokenFieldName", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "tokenFieldName", [], "any", false, false, false, 31))) : (""))]]));
            // line 34
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['step'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/breadcrumb/breadcrumb.twig";
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
        return array (  102 => 35,  96 => 34,  94 => 31,  93 => 30,  92 => 29,  91 => 28,  90 => 27,  89 => 26,  87 => 24,  82 => 23,  70 => 22,  67 => 21,  64 => 15,  61 => 14,  54 => 13,  50 => 1,  49 => 8,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'breadcrumb',
    tag: 'ul'
} %}

{% define data = {
    steps: [],
    startWithHome: true
} %}

{% block body %}
    {% if data.startWithHome %}
        {% include molecule('breadcrumb-step') with {
            data: {
                url: path('home'),
                label: 'global.home' | trans
            }
        } only %}
    {% endif %}
    {% block breadcrumbs %}
        {% for step in data.steps %}
            {% include molecule('breadcrumb-step') with {
                data: {
                    url: step.url | default,
                    label: step.label | default,
                    itemProp: step.itemProp | default,
                    withChevron: step.withChevron is defined ? step.withChevron : true,
                    formName: step.formName | default,
                    tokenFieldName: step.tokenFieldName | default,
                }
            } only %}
        {% endfor %}
    {% endblock %}
{% endblock %}
", "@ShopUi/components/molecules/breadcrumb/breadcrumb.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/breadcrumb/breadcrumb.twig");
    }
}
