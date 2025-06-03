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

/* @ContentBannerWidget/components/molecules/banner-jumbotron/banner-jumbotron.twig */
class __TwigTemplate_447428a284ad48452e7ded78de9162d7 extends Template
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
            'bannerTextPosition' => [$this, 'block_bannerTextPosition'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ContentBannerWidget/components/molecules/banner-jumbotron/banner-jumbotron.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "banner-jumbotron", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["banner" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "isBannerClickable" => true], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        $context["backgroundImage"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "banner", [], "any", false, false, false, 14), "imageUrl", [], "any", false, false, false, 14)) ? ((("background-image: url(" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "banner", [], "any", false, false, false, 14), "imageUrl", [], "any", false, false, false, 14)) . ");")) : (""));
        // line 15
        yield "
    <div class=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "__container grid grid--center ";
        yield from $this->unwrap()->yieldBlock('bannerTextPosition', $context, $blocks);
        yield "\" style=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["backgroundImage"]) || array_key_exists("backgroundImage", $context) ? $context["backgroundImage"] : (function () { throw new RuntimeError('Variable "backgroundImage" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "isBannerClickable", [], "any", false, false, false, 17)) {
            // line 18
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "banner", [], "any", false, false, false, 18), "clickUrl", [], "any", false, false, false, 18), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
            yield "__link\"></a>
        ";
        }
        // line 20
        yield "        <div class=\"col col--sm-12 spacing-y spacing-y--inner spacing-y--big\">
            <h1 class=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "__title\">";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "banner", [], "any", false, false, false, 21), "title", [], "any", false, false, false, 21);
        yield "</h1>
            <p class=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        yield "__text\">";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "banner", [], "any", false, false, false, 22), "subtitle", [], "any", false, false, false, 22);
        yield "</p>
        </div>
    </div>
";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bannerTextPosition(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "grid--middle";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContentBannerWidget/components/molecules/banner-jumbotron/banner-jumbotron.twig";
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
        return array (  106 => 16,  95 => 22,  89 => 21,  86 => 20,  78 => 18,  76 => 17,  68 => 16,  65 => 15,  62 => 14,  55 => 13,  51 => 1,  50 => 9,  49 => 8,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'banner-jumbotron',
    tag: 'section',
} %}

{% define data = {
    banner: required,
    isBannerClickable: true,
} %}

{% block body %}
    {% set backgroundImage = data.banner.imageUrl ? 'background-image: url(' ~ data.banner.imageUrl ~ ');' %}

    <div class=\"{{ config.name }}__container grid grid--center {% block bannerTextPosition %}grid--middle{% endblock %}\" style=\"{{ backgroundImage }}\">
        {% if data.isBannerClickable %}
            <a href=\"{{ data.banner.clickUrl }}\" class=\"{{ config.name }}__link\"></a>
        {% endif %}
        <div class=\"col col--sm-12 spacing-y spacing-y--inner spacing-y--big\">
            <h1 class=\"{{ config.name }}__title\">{{ data.banner.title | raw }}</h1>
            <p class=\"{{ config.name }}__text\">{{ data.banner.subtitle | raw }}</p>
        </div>
    </div>
{% endblock %}
", "@ContentBannerWidget/components/molecules/banner-jumbotron/banner-jumbotron.twig", "/data/src/Pyz/Yves/ContentBannerWidget/Theme/default/components/molecules/banner-jumbotron/banner-jumbotron.twig");
    }
}
