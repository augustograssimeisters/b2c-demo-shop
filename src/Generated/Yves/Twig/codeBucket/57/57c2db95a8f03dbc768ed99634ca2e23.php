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

/* @LanguageSwitcherWidget/views/switcher/switcher.twig */
class __TwigTemplate_ffbd4295d1002acd4ddcb9c3218c2d95 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@LanguageSwitcherWidget/views/switcher/switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["languages" => CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "languages", [], "any", false, false, false, 4), "currentLanguage" => CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "currentLanguage", [], "any", false, false, false, 5), "additionalModifiers" => ["hollow", "header"], "additionalClassName" => ""], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "languages", [], "any", false, false, false, 11))) {
            // line 12
            yield "        <form method=\"GET\" action=\"\">
            ";
            // line 13
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("language-switcher", "LanguageSwitcherWidget"), "@LanguageSwitcherWidget/views/switcher/switcher.twig", 13)->unwrap()->yield(CoreExtension::toArray(["data" => ["languages" => CoreExtension::getAttribute($this->env, $this->source,             // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "languages", [], "any", false, false, false, 15), "currentLanguage" => CoreExtension::getAttribute($this->env, $this->source,             // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "currentLanguage", [], "any", false, false, false, 16), "additionalModifiers" => CoreExtension::getAttribute($this->env, $this->source,             // line 17
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "additionalModifiers", [], "any", false, false, false, 17), "additionalClassName" => CoreExtension::getAttribute($this->env, $this->source,             // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "additionalClassName", [], "any", false, false, false, 18)]]));
            // line 21
            yield "        </form>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@LanguageSwitcherWidget/views/switcher/switcher.twig";
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
        return array (  73 => 21,  71 => 18,  70 => 17,  69 => 16,  68 => 15,  67 => 13,  64 => 12,  61 => 11,  54 => 10,  50 => 1,  49 => 5,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    languages: _widget.languages,
    currentLanguage: _widget.currentLanguage,
    additionalModifiers: ['hollow', 'header'],
    additionalClassName: '',
} %}

{% block body %}
    {% if data.languages is not empty %}
        <form method=\"GET\" action=\"\">
            {% include molecule('language-switcher', 'LanguageSwitcherWidget') with {
                data: {
                    languages: data.languages,
                    currentLanguage: data.currentLanguage,
                    additionalModifiers: data.additionalModifiers,
                    additionalClassName: data.additionalClassName,
                },
            } only %}
        </form>
    {% endif %}
{% endblock %}
", "@LanguageSwitcherWidget/views/switcher/switcher.twig", "/data/src/Pyz/Yves/LanguageSwitcherWidget/Theme/default/views/switcher/switcher.twig");
    }
}
