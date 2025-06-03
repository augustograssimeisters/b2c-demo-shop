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

/* @CmsBlock/template/title_and_description_block.twig */
class __TwigTemplate_02204c36ef7f9bdcba5412bfbc22e148 extends Template
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
        // line 9
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
    <h3>";
        // line 4
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title");
        yield "</h3>

    ";
        // line 6
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "description");
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CmsBlock/template/title_and_description_block.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  67 => 6,  62 => 4,  58 => 2,  51 => 1,  45 => 9,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"description\" -->
    <h3>{{ spyCmsBlockPlaceholder('title') | raw }}</h3>

    {{ spyCmsBlockPlaceholder('description') | raw }}

{% endblock %}

", "@CmsBlock/template/title_and_description_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/title_and_description_block.twig");
    }
}
