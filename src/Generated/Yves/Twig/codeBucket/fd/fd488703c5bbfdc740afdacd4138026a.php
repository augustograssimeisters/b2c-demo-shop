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

/* @@SprykerShop:ShopUi/components/molecules/jumbotron/jumbotron.twig */
class __TwigTemplate_6f210f6fa24e3635640eea9571cbbb22 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ShopUi/components/molecules/jumbotron/jumbotron.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "jumbotron", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["imageUrl" => null, "bgColor" => null, "textColor" => null, "headline" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.shop"), "subHeadline" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.motto")], $context['data']);        // line 16
        $context["backgroundImage"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "imageUrl", [], "any", false, false, false, 16)) ? ((("background-image: url(" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "imageUrl", [], "any", false, false, false, 16)) . "); ")) : (""));
        // line 17
        $context["backgroundColor"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "bgColor", [], "any", false, false, false, 17)) ? ((("background-color: " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "bgColor", [], "any", false, false, false, 17)) . "; ")) : (""));
        // line 18
        $context["textColor"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "textColor", [], "any", false, false, false, 18)) ? ((("color: " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "textColor", [], "any", false, false, false, 18)) . ";")) : (""));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "__container grid grid--center grid--middle\" style=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["backgroundImage"]) || array_key_exists("backgroundImage", $context) ? $context["backgroundImage"] : (function () { throw new RuntimeError('Variable "backgroundImage" does not exist.', 21, $this->source); })()), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["backgroundColor"]) || array_key_exists("backgroundColor", $context) ? $context["backgroundColor"] : (function () { throw new RuntimeError('Variable "backgroundColor" does not exist.', 21, $this->source); })()), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textColor"]) || array_key_exists("textColor", $context) ? $context["textColor"] : (function () { throw new RuntimeError('Variable "textColor" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\">
        <div class=\"col col--sm-12\">
            <h1 class=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        yield "__headline\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "headline", [], "any", false, false, false, 23), "html", null, true);
        yield "</h1>
            <h2 class=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        yield "__sub-headline title--h4\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "subHeadline", [], "any", false, false, false, 24), "html", null, true);
        yield "</h2>
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
        return "@@SprykerShop:ShopUi/components/molecules/jumbotron/jumbotron.twig";
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
        return array (  82 => 24,  76 => 23,  66 => 21,  59 => 20,  55 => 1,  53 => 18,  51 => 17,  49 => 16,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'jumbotron',
    tag: 'section',
} %}

{% define data = {
    imageUrl: null,
    bgColor: null,
    textColor: null,
    headline: 'global.spryker.shop' | trans,
    subHeadline: 'global.spryker.motto' | trans,
} %}

{% set backgroundImage = data.imageUrl ? 'background-image: url(' ~ data.imageUrl ~ '); ' %}
{% set backgroundColor = data.bgColor ? 'background-color: ' ~ data.bgColor ~ '; ' %}
{% set textColor = data.textColor ? 'color: ' ~ data.textColor ~ ';' %}

{% block body %}
    <div class=\"{{config.name}}__container grid grid--center grid--middle\" style=\"{{backgroundImage}}{{backgroundColor}}{{textColor}}\">
        <div class=\"col col--sm-12\">
            <h1 class=\"{{config.name}}__headline\">{{ data.headline }}</h1>
            <h2 class=\"{{config.name}}__sub-headline title--h4\">{{ data.subHeadline }}</h2>
        </div>
    </div>
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/jumbotron/jumbotron.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/jumbotron/jumbotron.twig");
    }
}
