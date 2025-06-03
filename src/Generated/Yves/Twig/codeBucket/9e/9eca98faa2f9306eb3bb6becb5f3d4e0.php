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

/* @ShopUi/components/molecules/slick-carousel/slick-carousel.twig */
class __TwigTemplate_9d5222700ccaa16827a87875d0d0da86 extends Template
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
            'slides' => [$this, 'block_slides'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/slick-carousel/slick-carousel.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "slick-carousel", "tag" => "slick-carousel"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["slides" => [], "containerClass" => ""], $context['data']);        // line 13
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["data-json" => ""], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "__container ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "jsName", [], "any", false, false, false, 18), "html", null, true);
        yield "__container ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "containerClass", [], "any", false, false, false, 18), "html", null, true);
        yield "\">
        ";
        // line 19
        yield from $this->unwrap()->yieldBlock('slides', $context, $blocks);
        // line 24
        yield "    </div>
";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_slides(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "slides", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 21
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["slide"], "html", null, true);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['slide'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/slick-carousel/slick-carousel.twig";
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
        return array (  100 => 23,  91 => 21,  86 => 20,  79 => 19,  73 => 24,  71 => 19,  62 => 18,  55 => 17,  51 => 1,  50 => 13,  49 => 8,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'slick-carousel',
    tag: 'slick-carousel',
} %}

{% define data = {
    slides: [],
    containerClass: '',
} %}

{% define attributes = {
    'data-json': '',
} %}

{% block body %}
    <div class=\"{{ config.name }}__container {{ config.jsName }}__container {{ data.containerClass }}\">
        {% block slides %}
            {% for slide in data.slides %}
                {{ slide }}
            {% endfor %}
        {% endblock %}
    </div>
{% endblock %}
", "@ShopUi/components/molecules/slick-carousel/slick-carousel.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/slick-carousel/slick-carousel.twig");
    }
}
