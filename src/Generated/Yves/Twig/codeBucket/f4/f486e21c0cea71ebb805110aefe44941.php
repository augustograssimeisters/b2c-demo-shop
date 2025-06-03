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

/* @CmsBlock/template/title_content_and_link_block.twig */
class __TwigTemplate_8ae8a6b2fdff8063edb6bf2ddacc2a6a extends Template
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
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->

    ";
        // line 6
        $context["link"] = $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "link");
        // line 7
        yield "
    <div class=\"container\">
        <div class=\"product-slider-title\">
            <h1 class=\"title title--h2 title--regular\">";
        // line 10
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title");
        yield "</h1>
            ";
        // line 11
        if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 11, $this->source); })())) {
            // line 12
            yield "                <div class=\"product-slider-title__sub-col is-hidden-sm-md\">";
            yield (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 12, $this->source); })());
            yield "</div>
            ";
        }
        // line 14
        yield "        </div>

        <div class=\"grid\">
            <div class=\"col col--sm-12\">
                ";
        // line 18
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
        return "@CmsBlock/template/title_content_and_link_block.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  85 => 18,  79 => 14,  73 => 12,  71 => 11,  67 => 10,  62 => 7,  60 => 6,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->

    {% set link = spyCmsBlockPlaceholder('link') %}

    <div class=\"container\">
        <div class=\"product-slider-title\">
            <h1 class=\"title title--h2 title--regular\">{{ spyCmsBlockPlaceholder('title') | raw }}</h1>
            {% if link %}
                <div class=\"product-slider-title__sub-col is-hidden-sm-md\">{{ link | raw }}</div>
            {% endif %}
        </div>

        <div class=\"grid\">
            <div class=\"col col--sm-12\">
                {{ spyCmsBlockPlaceholder('content') | raw }}
            </div>
        </div>
    </div>
{% endblock %}
", "@CmsBlock/template/title_content_and_link_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/title_content_and_link_block.twig");
    }
}
