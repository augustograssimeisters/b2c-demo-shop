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

/* @CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig */
class __TwigTemplate_5f54557858a340f032caf77b15abd723 extends Template
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
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("view-mode-switch", "@SprykerShop:CatalogPage"), "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["viewMode" => ""], $context['data']);        // line 1
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
        yield "    ";
        $context["gridViewActiveClass"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "viewMode", [], "any", false, false, false, 8) == "grid")) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8) . "__link--active")) : (""));
        // line 9
        yield "    ";
        $context["listViewActiveClass"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "viewMode", [], "any", false, false, false, 9) != "grid")) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9) . "__link--active")) : (""));
        // line 10
        yield "
    <a class=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        yield "__link ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gridViewActiveClass"]) || array_key_exists("gridViewActiveClass", $context) ? $context["gridViewActiveClass"] : (function () { throw new RuntimeError('Variable "gridViewActiveClass" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gridHref"]) || array_key_exists("gridHref", $context) ? $context["gridHref"] : (function () { throw new RuntimeError('Variable "gridHref" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 12
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", 12)->unwrap()->yield(CoreExtension::toArray(["class" => "spacing-right", "modifiers" => ["grid"], "data" => ["name" => "grid"]]));
        // line 19
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.view.mode.grid"), "html", null, true);
        yield "
    </a>
    <a class=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "__link ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["listViewActiveClass"]) || array_key_exists("listViewActiveClass", $context) ? $context["listViewActiveClass"] : (function () { throw new RuntimeError('Variable "listViewActiveClass" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["listHref"]) || array_key_exists("listHref", $context) ? $context["listHref"] : (function () { throw new RuntimeError('Variable "listHref" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 22
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", 22)->unwrap()->yield(CoreExtension::toArray(["class" => "spacing-right", "data" => ["name" => "list"]]));
        // line 28
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.view.mode.list"), "html", null, true);
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
        return "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig";
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
        return array (  94 => 28,  92 => 22,  84 => 21,  78 => 19,  76 => 12,  68 => 11,  65 => 10,  62 => 9,  59 => 8,  52 => 7,  48 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('view-mode-switch', '@SprykerShop:CatalogPage') %}

{% define data = {
    viewMode: '',
} %}

{% block body %}
    {% set gridViewActiveClass = data.viewMode == 'grid' ? config.name ~ '__link--active' %}
    {% set listViewActiveClass = data.viewMode != 'grid' ? config.name ~ '__link--active' %}

    <a class=\"{{ config.name }}__link {{ gridViewActiveClass }}\" href=\"{{ gridHref }}\">
        {% include atom('icon') with {
            class: 'spacing-right',
            modifiers: ['grid'],
            data: {
                name: 'grid',
            },
        } only %}
        {{ 'catalog.view.mode.grid' | trans }}
    </a>
    <a class=\"{{ config.name }}__link {{ listViewActiveClass }}\" href=\"{{ listHref }}\">
        {% include atom('icon') with {
            class: 'spacing-right',
            data: {
                name: 'list',
            },
        } only %}
        {{ 'catalog.view.mode.list' | trans }}
    </a>
{% endblock %}
", "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/view-mode-switch/view-mode-switch.twig");
    }
}
