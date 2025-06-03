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

/* @ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_805031f949cd503a2dd7cfdf17b7b694 extends Template
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
            'template' => [$this, 'block_template'],
            'footerScripts' => [$this, 'block_footerScripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("page-blank", "@SprykerShop:ShopUi"), "@ShopUi/templates/page-blank/page-blank.twig", 1);
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
    public function block_template(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        $context["isCssLazyLoadSupported"] = true;
        // line 5
        yield "
    ";
        // line 6
        yield from $this->yieldParentBlock("template", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footerScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("check-touch"), "@ShopUi/templates/page-blank/page-blank.twig", 10)->unwrap()->yield([]);
        // line 11
        yield "
    ";
        // line 12
        yield from $this->yieldParentBlock("footerScripts", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/templates/page-blank/page-blank.twig";
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
        return array (  84 => 12,  81 => 11,  78 => 10,  71 => 9,  64 => 6,  61 => 5,  58 => 4,  51 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-blank', '@SprykerShop:ShopUi') %}

{% block template %}
    {% set isCssLazyLoadSupported = true %}

    {{ parent() }}
{% endblock %}

{% block footerScripts %}
    {% include molecule('check-touch') only %}

    {{ parent() }}
{% endblock %}
", "@ShopUi/templates/page-blank/page-blank.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}
