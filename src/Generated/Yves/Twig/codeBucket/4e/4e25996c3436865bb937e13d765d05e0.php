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

/* @ShopUi/components/organisms/jumbotron-slider/jumbotron-slider.twig */
class __TwigTemplate_b7c7041b49d1df87e081bcb8c0e42f38 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/organisms/jumbotron-slider/jumbotron-slider.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "jumbotron-slider"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["slides" => []], $context['data']);        // line 11
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["data-json" => "{
        \"slidesToShow\": 1,
        \"dots\": true,
        \"autoplay\": true,
        \"nextArrow\": false,
        \"prevArrow\": false,
        \"autoplaySpeed\": 4000,
        \"centerMode\": true,
        \"centerPadding\": \"120px\",
        \"responsive\": [{
            \"breakpoint\": 1240,
            \"settings\": {
                \"centerPadding\": \"40px\"
            }
        },
        {
            \"breakpoint\": 770,
            \"settings\": {
                \"centerPadding\": \"12px\",
                \"autoplay\": false
            }
        }
    ]}"], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("slick-carousel"), "@ShopUi/components/organisms/jumbotron-slider/jumbotron-slider.twig", 38)->unwrap()->yield(CoreExtension::toArray(["data" => ["slides" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["data"] ?? null), "slides", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "slides", [], "any", false, false, false, 40), [])) : ([]))], "attributes" => ["data-json" => CoreExtension::getAttribute($this->env, $this->source,         // line 43
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 43, $this->source); })()), "data-json", [], "array", false, false, false, 43)]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/organisms/jumbotron-slider/jumbotron-slider.twig";
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
        return array (  86 => 43,  85 => 40,  83 => 38,  76 => 37,  72 => 1,  49 => 11,  48 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'jumbotron-slider'
} %}

{% define data = {
    slides: []
} %}

{% define attributes = {
    'data-json': '{
        \"slidesToShow\": 1,
        \"dots\": true,
        \"autoplay\": true,
        \"nextArrow\": false,
        \"prevArrow\": false,
        \"autoplaySpeed\": 4000,
        \"centerMode\": true,
        \"centerPadding\": \"120px\",
        \"responsive\": [{
            \"breakpoint\": 1240,
            \"settings\": {
                \"centerPadding\": \"40px\"
            }
        },
        {
            \"breakpoint\": 770,
            \"settings\": {
                \"centerPadding\": \"12px\",
                \"autoplay\": false
            }
        }
    ]}'
} %}

{% block body %}
    {% include molecule('slick-carousel') with {
        data: {
            slides: data.slides | default([]),
        },
        attributes: {
            'data-json': attributes['data-json'],
        },
    } only %}
{% endblock %}
", "@ShopUi/components/organisms/jumbotron-slider/jumbotron-slider.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/jumbotron-slider/jumbotron-slider.twig");
    }
}
