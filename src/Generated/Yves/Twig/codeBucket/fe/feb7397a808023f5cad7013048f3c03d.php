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

/* @CmsBlock/template/type_2_multi_inspirational_block.twig */
class __TwigTemplate_c1ca157c097592f704dc4dc75b055460 extends Template
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
        // line 28
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
    <div class=\"container\">
        <div class=\"grid grid--justify grid--spaced-lg multi-inspirational-wrap js-multi-inspirational-wrap--2\">
            <div class=\"col col--lg-6 col--md-12 col--sm-12 multi-inspirational-wrap__holder multi-inspirational-wrap__holder--parallax-to-bottom js-multi-inspirational-wrap__target--2\">
                <div class=\"multi-inspirational-block multi-inspirational-block--lg\">
                    ";
        // line 8
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title");
        yield "
                </div>
            </div>
            <div class=\"col col--lg-6 col--md-12 col--sm-12\">
                ";
        // line 12
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "description");
        yield "
            </div>
        </div>

        ";
        // line 16
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("scroll-parallax"), "@CmsBlock/template/type_2_multi_inspirational_block.twig", 16)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["wrapper-class-name" => "js-multi-inspirational-wrap--2", "target-class-name" => "js-multi-inspirational-wrap__target--2", "motion-direction" => "top", "motion-ratio" => "8", "breakpoint-min" => "769"]]));
        // line 25
        yield "    </div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CmsBlock/template/type_2_multi_inspirational_block.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  82 => 25,  80 => 16,  73 => 12,  66 => 8,  58 => 2,  51 => 1,  45 => 28,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"description\" -->
    <div class=\"container\">
        <div class=\"grid grid--justify grid--spaced-lg multi-inspirational-wrap js-multi-inspirational-wrap--2\">
            <div class=\"col col--lg-6 col--md-12 col--sm-12 multi-inspirational-wrap__holder multi-inspirational-wrap__holder--parallax-to-bottom js-multi-inspirational-wrap__target--2\">
                <div class=\"multi-inspirational-block multi-inspirational-block--lg\">
                    {{ spyCmsBlockPlaceholder('title') | raw }}
                </div>
            </div>
            <div class=\"col col--lg-6 col--md-12 col--sm-12\">
                {{ spyCmsBlockPlaceholder('description') | raw }}
            </div>
        </div>

        {% include molecule('scroll-parallax') with {
            attributes: {
                'wrapper-class-name': 'js-multi-inspirational-wrap--2',
                'target-class-name': 'js-multi-inspirational-wrap__target--2',
                'motion-direction': 'top',
                'motion-ratio': '8',
                'breakpoint-min': '769',
            },
        } only %}
    </div>

{% endblock %}

", "@CmsBlock/template/type_2_multi_inspirational_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/type_2_multi_inspirational_block.twig");
    }
}
