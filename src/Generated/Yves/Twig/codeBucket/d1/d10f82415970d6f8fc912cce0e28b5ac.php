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

/* @ShopUi/components/molecules/lazy-image/lazy-image.twig */
class __TwigTemplate_521a10ca720ccabdc59a20a49e297c81 extends Template
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
            'extraClass' => [$this, 'block_extraClass'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'imageContainer' => [$this, 'block_imageContainer'],
            'background' => [$this, 'block_background'],
            'image' => [$this, 'block_image'],
            'noScript' => [$this, 'block_noScript'],
            'backgroundNoScript' => [$this, 'block_backgroundNoScript'],
            'imageNoScript' => [$this, 'block_imageNoScript'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/lazy-image/lazy-image.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/lazy-image/lazy-image.twig", 2)->unwrap();
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "lazy-image", "tag" => "lazy-image"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["imageSrc" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "imagePlaceholder" => "", "isBackground" => false, "imageTitle" => "", "extraAttributes" => []], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extraClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "    js-viewport-intersection-observer__target
    ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "isBackground", [], "any", false, false, false, 19)) {
            // line 20
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
            yield "--background
    ";
        }
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "    ";
        $context["imageClasses"] = CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25) . "__image"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 25, $this->source); })())], 25, $context, $this->getSourceContext());
        // line 26
        yield "    ";
        $context["imageExtraClasses"] = "";
        // line 27
        yield "    ";
        $context["backgroundClasses"] = CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27) . "__background"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 27, $this->source); })())], 27, $context, $this->getSourceContext());
        // line 28
        yield "    ";
        $context["backgroundExtraClasses"] = "";
        // line 29
        yield "    ";
        $context["imageSrc"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "imageSrc", [], "any", false, false, false, 29);
        // line 30
        yield "    ";
        $context["imagePlaceholder"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "imagePlaceholder", [], "any", false, false, false, 30)) ?: ("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="));
        // line 31
        yield "    ";
        $context["imageTitle"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "imageTitle", [], "any", false, false, false, 31);
        // line 32
        yield "    ";
        $context["extraAttributes"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "extraAttributes", [], "any", false, false, false, 32);
        // line 33
        yield "    ";
        $context["backgroundStyleAttribute"] = ((("background-image:" . (isset($context["imagePlaceholder"]) || array_key_exists("imagePlaceholder", $context) ? $context["imagePlaceholder"] : (function () { throw new RuntimeError('Variable "imagePlaceholder" does not exist.', 33, $this->source); })())) . "; ") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", false, false, false, 33)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", false, false, false, 33)) : ("")));
        // line 34
        yield "
    ";
        // line 35
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "        ";
        $context["fallbackImageClasses"] = (isset($context["imageExtraClasses"]) || array_key_exists("imageExtraClasses", $context) ? $context["imageExtraClasses"] : (function () { throw new RuntimeError('Variable "imageExtraClasses" does not exist.', 36, $this->source); })());
        // line 37
        yield "        ";
        $context["fallbackBackgroundClasses"] = (isset($context["backgroundExtraClasses"]) || array_key_exists("backgroundExtraClasses", $context) ? $context["backgroundExtraClasses"] : (function () { throw new RuntimeError('Variable "backgroundExtraClasses" does not exist.', 37, $this->source); })());
        // line 38
        yield "        ";
        $context["fallbackBackgroundStyleAttribute"] = ((("background-image:" . (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 38, $this->source); })())) . "; ") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", false, false, false, 38)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", false, false, false, 38)) : ("")));
        // line 39
        yield "
        ";
        // line 40
        yield from $this->unwrap()->yieldBlock('imageContainer', $context, $blocks);
        // line 58
        yield "
        ";
        // line 59
        yield from $this->unwrap()->yieldBlock('noScript', $context, $blocks);
        // line 77
        yield "    ";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_imageContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "isBackground", [], "any", false, false, false, 41)) {
            // line 42
            yield "                ";
            yield from $this->unwrap()->yieldBlock('background', $context, $blocks);
            // line 48
            yield "            ";
        } else {
            // line 49
            yield "                ";
            yield from $this->unwrap()->yieldBlock('image', $context, $blocks);
            // line 56
            yield "            ";
        }
        // line 57
        yield "        ";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_background(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "                    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["backgroundClasses"]) || array_key_exists("backgroundClasses", $context) ? $context["backgroundClasses"] : (function () { throw new RuntimeError('Variable "backgroundClasses" does not exist.', 43, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 43, $this->source); })()), "jsName", [], "any", false, false, false, 43), "html", null, true);
        yield "__background ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["backgroundExtraClasses"]) || array_key_exists("backgroundExtraClasses", $context) ? $context["backgroundExtraClasses"] : (function () { throw new RuntimeError('Variable "backgroundExtraClasses" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "\"
                         data-background-image=\"url('";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "')\"
                         title=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageTitle"]) || array_key_exists("imageTitle", $context) ? $context["imageTitle"] : (function () { throw new RuntimeError('Variable "imageTitle" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "\"
                        ";
        // line 46
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [Twig\Extension\CoreExtension::merge((isset($context["extraAttributes"]) || array_key_exists("extraAttributes", $context) ? $context["extraAttributes"] : (function () { throw new RuntimeError('Variable "extraAttributes" does not exist.', 46, $this->source); })()), ["style" => (isset($context["backgroundStyleAttribute"]) || array_key_exists("backgroundStyleAttribute", $context) ? $context["backgroundStyleAttribute"] : (function () { throw new RuntimeError('Variable "backgroundStyleAttribute" does not exist.', 46, $this->source); })())])], 46, $context, $this->getSourceContext());
        yield "></div>
                ";
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "                    <img itemprop=\"image\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageClasses"]) || array_key_exists("imageClasses", $context) ? $context["imageClasses"] : (function () { throw new RuntimeError('Variable "imageClasses" does not exist.', 50, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "jsName", [], "any", false, false, false, 50), "html", null, true);
        yield "__image ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageExtraClasses"]) || array_key_exists("imageExtraClasses", $context) ? $context["imageExtraClasses"] : (function () { throw new RuntimeError('Variable "imageExtraClasses" does not exist.', 50, $this->source); })()), "html", null, true);
        yield "\"
                         src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imagePlaceholder"]) || array_key_exists("imagePlaceholder", $context) ? $context["imagePlaceholder"] : (function () { throw new RuntimeError('Variable "imagePlaceholder" does not exist.', 51, $this->source); })()), "html", null, true);
        yield "\"
                         data-src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "\"
                         alt=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageTitle"]) || array_key_exists("imageTitle", $context) ? $context["imageTitle"] : (function () { throw new RuntimeError('Variable "imageTitle" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "\"
                        ";
        // line 54
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [(isset($context["extraAttributes"]) || array_key_exists("extraAttributes", $context) ? $context["extraAttributes"] : (function () { throw new RuntimeError('Variable "extraAttributes" does not exist.', 54, $this->source); })())], 54, $context, $this->getSourceContext());
        yield ">
                ";
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_noScript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "            <noscript>
                ";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "isBackground", [], "any", false, false, false, 61)) {
            // line 62
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('backgroundNoScript', $context, $blocks);
            // line 67
            yield "                ";
        } else {
            // line 68
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('imageNoScript', $context, $blocks);
            // line 74
            yield "                ";
        }
        // line 75
        yield "            </noscript>
        ";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_backgroundNoScript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "                        <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["backgroundClasses"]) || array_key_exists("backgroundClasses", $context) ? $context["backgroundClasses"] : (function () { throw new RuntimeError('Variable "backgroundClasses" does not exist.', 63, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fallbackBackgroundClasses"]) || array_key_exists("fallbackBackgroundClasses", $context) ? $context["fallbackBackgroundClasses"] : (function () { throw new RuntimeError('Variable "fallbackBackgroundClasses" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "\"
                             title=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageTitle"]) || array_key_exists("imageTitle", $context) ? $context["imageTitle"] : (function () { throw new RuntimeError('Variable "imageTitle" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "\"
                            ";
        // line 65
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [Twig\Extension\CoreExtension::merge((isset($context["extraAttributes"]) || array_key_exists("extraAttributes", $context) ? $context["extraAttributes"] : (function () { throw new RuntimeError('Variable "extraAttributes" does not exist.', 65, $this->source); })()), ["style" => (isset($context["fallbackBackgroundStyleAttribute"]) || array_key_exists("fallbackBackgroundStyleAttribute", $context) ? $context["fallbackBackgroundStyleAttribute"] : (function () { throw new RuntimeError('Variable "fallbackBackgroundStyleAttribute" does not exist.', 65, $this->source); })())])], 65, $context, $this->getSourceContext());
        yield "></div>
                    ";
        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_imageNoScript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        yield "                        <img class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageClasses"]) || array_key_exists("imageClasses", $context) ? $context["imageClasses"] : (function () { throw new RuntimeError('Variable "imageClasses" does not exist.', 69, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fallbackImageClasses"]) || array_key_exists("fallbackImageClasses", $context) ? $context["fallbackImageClasses"] : (function () { throw new RuntimeError('Variable "fallbackImageClasses" does not exist.', 69, $this->source); })()), "html", null, true);
        yield "\"
                             src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 70, $this->source); })()), "html", null, true);
        yield "\"
                             alt=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imageTitle"]) || array_key_exists("imageTitle", $context) ? $context["imageTitle"] : (function () { throw new RuntimeError('Variable "imageTitle" does not exist.', 71, $this->source); })()), "html", null, true);
        yield "\"
                            ";
        // line 72
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [(isset($context["extraAttributes"]) || array_key_exists("extraAttributes", $context) ? $context["extraAttributes"] : (function () { throw new RuntimeError('Variable "extraAttributes" does not exist.', 72, $this->source); })())], 72, $context, $this->getSourceContext());
        yield ">
                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/lazy-image/lazy-image.twig";
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
        return array (  327 => 72,  323 => 71,  319 => 70,  312 => 69,  305 => 68,  298 => 65,  294 => 64,  287 => 63,  280 => 62,  274 => 75,  271 => 74,  268 => 68,  265 => 67,  262 => 62,  260 => 61,  257 => 60,  250 => 59,  243 => 54,  239 => 53,  235 => 52,  231 => 51,  222 => 50,  215 => 49,  208 => 46,  204 => 45,  200 => 44,  191 => 43,  184 => 42,  179 => 57,  176 => 56,  173 => 49,  170 => 48,  167 => 42,  164 => 41,  157 => 40,  152 => 77,  150 => 59,  147 => 58,  145 => 40,  142 => 39,  139 => 38,  136 => 37,  133 => 36,  122 => 35,  119 => 34,  116 => 33,  113 => 32,  110 => 31,  107 => 30,  104 => 29,  101 => 28,  98 => 27,  95 => 26,  92 => 25,  85 => 24,  76 => 20,  74 => 19,  71 => 18,  64 => 17,  60 => 1,  59 => 10,  58 => 9,  57 => 4,  55 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}
{% import model('component') as component %}

{% define config = {
    name: 'lazy-image',
    tag: 'lazy-image',
} %}

{% define data = {
    imageSrc: required,
    imagePlaceholder: '',
    isBackground: false,
    imageTitle: '',
    extraAttributes: {},
} %}

{% block extraClass %}
    js-viewport-intersection-observer__target
    {% if data.isBackground %}
        {{ config.name }}--background
    {% endif %}
{% endblock %}

{% block body %}
    {% set imageClasses = component.renderClass(config.name ~ '__image', modifiers) %}
    {% set imageExtraClasses = '' %}
    {% set backgroundClasses = component.renderClass(config.name ~ '__background', modifiers) %}
    {% set backgroundExtraClasses = '' %}
    {% set imageSrc = data.imageSrc %}
    {% set imagePlaceholder = data.imagePlaceholder ?: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=' %}
    {% set imageTitle = data.imageTitle %}
    {% set extraAttributes = data.extraAttributes %}
    {% set backgroundStyleAttribute = 'background-image:' ~ imagePlaceholder ~ '; ' ~ (extraAttributes.style ?? '') %}

    {% block content %}
        {% set fallbackImageClasses = imageExtraClasses %}
        {% set fallbackBackgroundClasses = backgroundExtraClasses %}
        {% set fallbackBackgroundStyleAttribute = 'background-image:' ~ imageSrc ~ '; ' ~ (extraAttributes.style ?? '') %}

        {% block imageContainer %}
            {% if data.isBackground %}
                {% block background %}
                    <div class=\"{{ backgroundClasses }} {{ config.jsName }}__background {{ backgroundExtraClasses }}\"
                         data-background-image=\"url('{{ imageSrc }}')\"
                         title=\"{{ imageTitle }}\"
                        {{ component.renderAttributes(extraAttributes | merge({style: backgroundStyleAttribute})) }}></div>
                {% endblock %}
            {% else %}
                {% block image %}
                    <img itemprop=\"image\" class=\"{{ imageClasses }} {{ config.jsName }}__image {{ imageExtraClasses }}\"
                         src=\"{{ imagePlaceholder }}\"
                         data-src=\"{{ imageSrc }}\"
                         alt=\"{{ imageTitle }}\"
                        {{ component.renderAttributes(extraAttributes) }}>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block noScript %}
            <noscript>
                {% if data.isBackground %}
                    {% block backgroundNoScript %}
                        <div class=\"{{ backgroundClasses }} {{ fallbackBackgroundClasses }}\"
                             title=\"{{ imageTitle }}\"
                            {{ component.renderAttributes(extraAttributes | merge({style: fallbackBackgroundStyleAttribute})) }}></div>
                    {% endblock %}
                {% else %}
                    {% block imageNoScript %}
                        <img class=\"{{ imageClasses }} {{ fallbackImageClasses }}\"
                             src=\"{{ imageSrc }}\"
                             alt=\"{{ imageTitle }}\"
                            {{ component.renderAttributes(extraAttributes) }}>
                    {% endblock %}
                {% endif %}
            </noscript>
        {% endblock %}
    {% endblock %}
{% endblock %}
", "@ShopUi/components/molecules/lazy-image/lazy-image.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/lazy-image/lazy-image.twig");
    }
}
