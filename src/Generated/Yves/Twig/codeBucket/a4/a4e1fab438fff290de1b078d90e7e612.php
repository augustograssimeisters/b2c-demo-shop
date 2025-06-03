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

/* @CatalogPage/components/molecules/active-filter/active-filter.twig */
class __TwigTemplate_509530850de5cd18379c512f15337142 extends Template
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
            'class' => [$this, 'block_class'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("active-filter", "@SprykerShop:CatalogPage"), "@CatalogPage/components/molecules/active-filter/active-filter.twig", 1);
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
    public function block_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("class", $context, $blocks);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield "__item
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "value", [], "any", false, false, false, 9), "html", null, true);
        yield "
    ";
        // line 10
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/molecules/active-filter/active-filter.twig", 10)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["medium", "close-filter"], "data" => ["name" => "close-filter"]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CatalogPage/components/molecules/active-filter/active-filter.twig";
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
        return array (  82 => 10,  77 => 9,  70 => 8,  63 => 5,  58 => 4,  51 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('active-filter', '@SprykerShop:CatalogPage') %}

{% block class %}
    {{ parent() }}
    {{ config.name }}__item
{% endblock %}

{% block body %}
    {{ data.value }}
    {% include atom('icon') with {
        modifiers: ['medium', 'close-filter'],
        data: {
            name: 'close-filter',
        },
    } only %}
{% endblock %}
", "@CatalogPage/components/molecules/active-filter/active-filter.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/active-filter/active-filter.twig");
    }
}
