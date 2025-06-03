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

/* @CmsBlock/template/jumbotron_slider_block.twig */
class __TwigTemplate_b3960ab9d3e419fd63dae6ce0ef6634c extends Template
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
        yield "    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

    ";
        // line 4
        $context["title"] = $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title");
        // line 5
        yield "
    ";
        // line 6
        if ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })())) {
            // line 7
            yield "        <h5 class=\"title title--catalog-cms title--medium\">";
            yield (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })());
            yield "</h5>
    ";
        }
        // line 9
        yield "    ";
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "content");
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CmsBlock/template/jumbotron_slider_block.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  75 => 9,  69 => 7,  67 => 6,  64 => 5,  62 => 4,  58 => 2,  51 => 1,  45 => 11,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

    {% set title = spyCmsBlockPlaceholder('title') %}

    {% if title %}
        <h5 class=\"title title--catalog-cms title--medium\">{{ title | raw }}</h5>
    {% endif %}
    {{ spyCmsBlockPlaceholder('content') | raw }}
{% endblock %}

", "@CmsBlock/template/jumbotron_slider_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/jumbotron_slider_block.twig");
    }
}
