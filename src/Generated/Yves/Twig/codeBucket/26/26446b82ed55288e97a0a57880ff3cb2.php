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

/* @ShopUi/components/molecules/jumbotron/jumbotron.twig */
class __TwigTemplate_1ea4b3842d3783a4be3314e10b14f4cb extends Template
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
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("jumbotron", "@SprykerShop:ShopUi"), "@ShopUi/components/molecules/jumbotron/jumbotron.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        $context["backgroundImage"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "imageUrl", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "imageUrl", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "imageUrl", [], "any", false, false, false, 5)) : (""));
        // line 6
        yield "
    ";
        // line 7
        if (((isset($context["backgroundImage"]) || array_key_exists("backgroundImage", $context) ? $context["backgroundImage"] : (function () { throw new RuntimeError('Variable "backgroundImage" does not exist.', 7, $this->source); })()) || (isset($context["backgroundColor"]) || array_key_exists("backgroundColor", $context) ? $context["backgroundColor"] : (function () { throw new RuntimeError('Variable "backgroundColor" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("lazy-image"), "@ShopUi/components/molecules/jumbotron/jumbotron.twig", 8)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["full-size-background", "reset-background-position"], "data" => ["imageSrc" =>             // line 11
(isset($context["backgroundImage"]) || array_key_exists("backgroundImage", $context) ? $context["backgroundImage"] : (function () { throw new RuntimeError('Variable "backgroundImage" does not exist.', 11, $this->source); })()), "isBackground" => true, "extraAttributes" => ["style" =>             // line 14
(isset($context["backgroundColor"]) || array_key_exists("backgroundColor", $context) ? $context["backgroundColor"] : (function () { throw new RuntimeError('Variable "backgroundColor" does not exist.', 14, $this->source); })())]]]));
            // line 18
            yield "    ";
        }
        // line 19
        yield "
    <div class=\"container\">
        <div class=\"";
        // line 21
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21) . "__inner"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 21, $this->source); })())], 21, $context, $this->getSourceContext());
        yield " grid grid--center grid--middle\" style=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textColor"]) || array_key_exists("textColor", $context) ? $context["textColor"] : (function () { throw new RuntimeError('Variable "textColor" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\">
            <h1 class=\"";
        // line 22
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22) . "__headline"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 22, $this->source); })())], 22, $context, $this->getSourceContext());
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "headline", [], "any", false, false, false, 22), "html", null, true);
        yield "</h1>
            <h2 class=\"";
        // line 23
        yield CoreExtension::callMacro($macros["component"], "macro_renderClass", [(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23) . "__sub-headline"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 23, $this->source); })())], 23, $context, $this->getSourceContext());
        yield " title title--h4\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "subHeadline", [], "any", false, false, false, 23), "html", null, true);
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
        return "@ShopUi/components/molecules/jumbotron/jumbotron.twig";
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
        return array (  92 => 23,  86 => 22,  80 => 21,  76 => 19,  73 => 18,  71 => 14,  70 => 11,  68 => 8,  66 => 7,  63 => 6,  60 => 5,  53 => 4,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('jumbotron', '@SprykerShop:ShopUi') %}
{% import _self as component %}

{% block body %}
    {% set backgroundImage = data.imageUrl ?? '' %}

    {% if backgroundImage or backgroundColor %}
        {% include molecule('lazy-image') with {
            modifiers: ['full-size-background', 'reset-background-position'],
            data: {
                imageSrc: backgroundImage,
                isBackground: true,
                extraAttributes: {
                    style: backgroundColor,
                },
            },
        } only %}
    {% endif %}

    <div class=\"container\">
        <div class=\"{{ component.renderClass(config.name ~ '__inner', modifiers) }} grid grid--center grid--middle\" style=\"{{ textColor }}\">
            <h1 class=\"{{ component.renderClass(config.name ~ '__headline', modifiers) }}\">{{ data.headline }}</h1>
            <h2 class=\"{{ component.renderClass(config.name ~ '__sub-headline', modifiers) }} title title--h4\">{{ data.subHeadline }}</h2>
        </div>
    </div>
{% endblock %}
", "@ShopUi/components/molecules/jumbotron/jumbotron.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/jumbotron/jumbotron.twig");
    }
}
