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

/* @CmsBlock/template/title_and_content_block.twig */
class __TwigTemplate_8a9d82d99529aec07469eaa0d955a74f extends Template
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
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

    <div class=\"container\">
        <div class=\"product-slider-title\">
            <h1 class=\"title title--h2 title--regular\">";
        // line 7
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title");
        yield "</h1>
        </div>

        <div class=\"grid\">
            <div class=\"col col--sm-12\">
                ";
        // line 12
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "content");
        yield "
            </div>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CmsBlock/template/title_and_content_block.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  69 => 12,  61 => 7,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

    <div class=\"container\">
        <div class=\"product-slider-title\">
            <h1 class=\"title title--h2 title--regular\">{{ spyCmsBlockPlaceholder('title') | raw }}</h1>
        </div>

        <div class=\"grid\">
            <div class=\"col col--sm-12\">
                {{ spyCmsBlockPlaceholder('content') | raw }}
            </div>
        </div>
    </div>
{% endblock %}
", "@CmsBlock/template/title_and_content_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/title_and_content_block.twig");
    }
}
