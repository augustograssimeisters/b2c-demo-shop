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

/* @CatalogPage/components/organisms/active-filter-section/active-filter-section.twig */
class __TwigTemplate_79cca02506e72f6ed458224c9018ae12 extends Template
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
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("active-filter-section", "@SprykerShop:CatalogPage"), "@CatalogPage/components/organisms/active-filter-section/active-filter-section.twig", 1);
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
        yield "    <a class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield "__item ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield "__item--all\" href=\"";
        yield $this->extensions['SprykerShop\Yves\CatalogPage\Twig\CatalogPageTwigExtension']->generateUrlWithoutAllActiveSearchFilters($context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "facets", [], "any", false, false, false, 4));
        yield "\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.resetAllFilters"), "html", null, true);
        yield "
        ";
        // line 6
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/organisms/active-filter-section/active-filter-section.twig", 6)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["medium", "close-filter"], "data" => ["name" => "close-filter"]]));
        // line 12
        yield "    </a>
    ";
        // line 13
        yield Twig\Extension\CoreExtension::join((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 13, $this->source); })()));
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/organisms/active-filter-section/active-filter-section.twig";
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
        return array (  75 => 13,  72 => 12,  70 => 6,  66 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends organism('active-filter-section', '@SprykerShop:CatalogPage') %}

{% block body %}
    <a class=\"{{ config.name }}__item {{ config.name }}__item--all\" href=\"{{ generateUrlWithoutAllActiveSearchFilters(data.facets) }}\">
        {{ 'catalog.filter.resetAllFilters' | trans }}
        {% include atom('icon') with {
            modifiers: ['medium', 'close-filter'],
            data: {
                name: 'close-filter'
            }
        } only %}
    </a>
    {{ activeFilters | join | raw }}
{% endblock %}
", "@CatalogPage/components/organisms/active-filter-section/active-filter-section.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/organisms/active-filter-section/active-filter-section.twig");
    }
}
