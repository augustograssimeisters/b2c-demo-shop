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

/* @CmsBlock/template/category_block.twig */
class __TwigTemplate_385422cea4871f4a405f249ad9e3315f extends Template
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

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 11
        yield "
";
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"description\" -->
    <div class=\"catalog-cms-block__inner\">
        ";
        // line 5
        if ($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title")) {
            // line 6
            yield "            <h5 class=\"title title--catalog-cms title--medium\">";
            yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title");
            yield "</h5>
        ";
        }
        // line 8
        yield "        ";
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "description");
        yield "
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CmsBlock/template/category_block.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  71 => 8,  65 => 6,  63 => 5,  58 => 2,  51 => 1,  45 => 11,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"description\" -->
    <div class=\"catalog-cms-block__inner\">
        {% if spyCmsBlockPlaceholder('title') %}
            <h5 class=\"title title--catalog-cms title--medium\">{{ spyCmsBlockPlaceholder('title') | raw }}</h5>
        {% endif %}
        {{ spyCmsBlockPlaceholder('description') | raw }}
    </div>
{% endblock %}

", "@CmsBlock/template/category_block.twig", "/data/src/Pyz/Yves/CmsBlock/Theme/default/template/category_block.twig");
    }
}
