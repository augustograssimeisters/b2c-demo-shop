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

/* @CmsBlock/template/type_1_inspirational_block.twig */
class __TwigTemplate_6c21ba96ef8e57dc384e5aeafb2abd6f extends Template
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
    <!-- CMS_BLOCK_PLACEHOLDER : \"description\" -->
    <div class=\"container\">
        <div class=\"grid grid--justify grid--middle grid--spaced-lg inspirational-block inspirational-block--right\">
            <div class=\"col col--lg-6 col--md-12 col--sm-12\">
                <div class=\"inspirational-block__images inspirational-block__images--left js-inspirational-block__images--1\">
                    <div class=\"inspirational-block__image inspirational-block__image-1\">
                        ";
        // line 9
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("lazy-image"), "@CmsBlock/template/type_1_inspirational_block.twig", 9)->unwrap()->yield(CoreExtension::toArray(["data" => ["imageSrc" => $this->env->getFunction('publicPath')->getCallable()("images/inspire1-bottom.jpg")]]));
        // line 14
        yield "                    </div>
                    <a href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cameras.category.link"), "html", null, true);
        yield "\" class=\"inspirational-block__image inspirational-block__image-2 inspirational-block__image-2--left js-inspirational-block__image-2--1\">
                        ";
        // line 16
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("lazy-image"), "@CmsBlock/template/type_1_inspirational_block.twig", 16)->unwrap()->yield(CoreExtension::toArray(["data" => ["imageSrc" => $this->env->getFunction('publicPath')->getCallable()("images/inspire1-main.jpg")]]));
        // line 21
        yield "                    </a>
                </div>

                ";
        // line 24
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("scroll-parallax"), "@CmsBlock/template/type_1_inspirational_block.twig", 24)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["wrapper-class-name" => "js-inspirational-block__images--1", "target-class-name" => "js-inspirational-block__image-2--1", "motion-direction" => "top"]]));
        // line 31
        yield "            </div>
            <div class=\"col col--lg-6 col--md-12 col--sm-12\">
                <div class=\"inspirational-block__content inspirational-block__content--right\">
                    ";
        // line 34
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title");
        yield "
                    <p class=\"inspirational-block__text\">";
        // line 35
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "description");
        yield "</p>
                    <a href='";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cameras.category.link"), "html", null, true);
        yield "' class=\"button button--hollow button--inspirational button--expand-mobile\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cms-product-group.category.link.text"), "html", null, true);
        yield "</a>
                </div>
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
        return "@CmsBlock/template/type_1_inspirational_block.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  94 => 36,  90 => 35,  86 => 34,  81 => 31,  79 => 24,  74 => 21,  72 => 16,  68 => 15,  65 => 14,  63 => 9,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"description\" -->
    <div class=\"container\">
        <div class=\"grid grid--justify grid--middle grid--spaced-lg inspirational-block inspirational-block--right\">
            <div class=\"col col--lg-6 col--md-12 col--sm-12\">
                <div class=\"inspirational-block__images inspirational-block__images--left js-inspirational-block__images--1\">
                    <div class=\"inspirational-block__image inspirational-block__image-1\">
                        {% include molecule('lazy-image') with {
                            data: {
                                imageSrc: publicPath('images/inspire1-bottom.jpg'),
                            },
                        } only %}
                    </div>
                    <a href=\"{{ 'cameras.category.link' | trans }}\" class=\"inspirational-block__image inspirational-block__image-2 inspirational-block__image-2--left js-inspirational-block__image-2--1\">
                        {% include molecule('lazy-image') with {
                            data: {
                                imageSrc: publicPath('images/inspire1-main.jpg'),
                            },
                        } only %}
                    </a>
                </div>

                {% include molecule('scroll-parallax') with {
                    attributes: {
                        'wrapper-class-name': 'js-inspirational-block__images--1',
                        'target-class-name': 'js-inspirational-block__image-2--1',
                        'motion-direction': 'top',
                    },
                } only %}
            </div>
            <div class=\"col col--lg-6 col--md-12 col--sm-12\">
                <div class=\"inspirational-block__content inspirational-block__content--right\">
                    {{ spyCmsBlockPlaceholder('title') | raw }}
                    <p class=\"inspirational-block__text\">{{ spyCmsBlockPlaceholder('description') | raw }}</p>
                    <a href='{{ 'cameras.category.link' | trans }}' class=\"button button--hollow button--inspirational button--expand-mobile\">{{ 'cms-product-group.category.link.text' | trans }}</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@CmsBlock/template/type_1_inspirational_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/type_1_inspirational_block.twig");
    }
}
