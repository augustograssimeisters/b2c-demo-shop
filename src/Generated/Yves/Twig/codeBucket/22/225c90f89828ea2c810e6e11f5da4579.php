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

/* @CmsBlock/template/title_description_image_block.twig */
class __TwigTemplate_8451f4ce749dd4b1175124653d2b0233 extends Template
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
    <div class=\"grid grid--center grid--middle image-banner js-image-banner\">
        <div class=\"image-banner__bg-wrap\">
            <video class=\"image-banner__video\" autoplay=\"autoplay\" loop=\"loop\" muted=\"muted\">
                <source src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('publicPath')->getCallable()("images/spryker-video.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
            </video>
        </div>
        <div class=\"image-banner__text image-banner__text--parallax-to-top js-image-banner__text\">
            <div class=\"image-banner__title\">
                ";
        // line 12
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title");
        yield "
            </div>
            ";
        // line 14
        yield $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "description");
        yield "
        </div>
    </div>

    ";
        // line 18
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("scroll-parallax"), "@CmsBlock/template/title_description_image_block.twig", 18)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["wrapper-class-name" => "js-image-banner", "target-class-name" => "js-image-banner__text", "motion-ratio" => "2.8"]]));
        // line 25
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CmsBlock/template/title_description_image_block.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  83 => 25,  81 => 18,  74 => 14,  69 => 12,  61 => 7,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"description\" -->
    <div class=\"grid grid--center grid--middle image-banner js-image-banner\">
        <div class=\"image-banner__bg-wrap\">
            <video class=\"image-banner__video\" autoplay=\"autoplay\" loop=\"loop\" muted=\"muted\">
                <source src=\"{{ publicPath('images/spryker-video.mp4') }}\" type=\"video/mp4\">
            </video>
        </div>
        <div class=\"image-banner__text image-banner__text--parallax-to-top js-image-banner__text\">
            <div class=\"image-banner__title\">
                {{ spyCmsBlockPlaceholder('title') | raw }}
            </div>
            {{ spyCmsBlockPlaceholder('description') | raw }}
        </div>
    </div>

    {% include molecule('scroll-parallax') with {
        attributes: {
            'wrapper-class-name': 'js-image-banner',
            'target-class-name': 'js-image-banner__text',
            'motion-ratio': '2.8',
        },
    } only %}

{% endblock %}
", "@CmsBlock/template/title_description_image_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/title_description_image_block.twig");
    }
}
