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

/* @LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig */
class __TwigTemplate_2dcd92ffd0924a7d002857a788cd3767 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "language-switcher", "tag" => "language-switcher"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["languages" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "currentLanguage" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "getSchemeAndHttpHost" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "getSchemeAndHttpHost", [], "method", false, false, false, 11), "additionalModifiers" =>         // line 12
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 12, $this->source); })()), "additionalClassName" => ""], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    ";
        yield from         $this->loadTemplate("@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", 17, "853592055")->unwrap()->yield(CoreExtension::toArray(["modifiers" => CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "additionalModifiers", [], "any", false, false, false, 18), "attributes" => ["config-theme" => "secondary", "additional-class-name" => CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "additionalClassName", [], "any", false, false, false, 21)], "embed" => ["jsName" => (CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "jsName", [], "any", false, false, false, 24) . "__select"), "languages" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "languages", [], "any", false, false, false, 25), "currentLanguage" => CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "currentLanguage", [], "any", false, false, false, 26), "getSchemeAndHttpHost" => CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "getSchemeAndHttpHost", [], "any", false, false, false, 27)]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig";
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
        return array (  71 => 27,  70 => 26,  69 => 25,  68 => 24,  67 => 21,  66 => 18,  64 => 17,  57 => 16,  53 => 1,  52 => 12,  51 => 11,  50 => 10,  49 => 9,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'language-switcher',
    tag: 'language-switcher'
} %}

{% define data = {
    languages: required,
    currentLanguage: required,
    getSchemeAndHttpHost: app.request.getSchemeAndHttpHost(),
    additionalModifiers: required,
    additionalClassName: '',
} %}

{% block body %}
    {% embed molecule('custom-select') with {
        modifiers: data.additionalModifiers,
        attributes: {
            'config-theme': 'secondary',
            'additional-class-name': data.additionalClassName,
        },
        embed: {
            jsName: config.jsName ~ '__select',
            languages: data.languages,
            currentLanguage: data.currentLanguage,
            getSchemeAndHttpHost: data.getSchemeAndHttpHost
        }
    } only %}
        {% block selectClass %}
            {{ parent() }} {{ embed.jsName }}
        {% endblock %}
        {% block options %}
            {% for language, url in embed.languages %}
                <option
                        value=\"{{ embed.getSchemeAndHttpHost }}{{ url }}\"
                        {{ (language == embed.currentLanguage) ? 'selected' : ''}}>
                    {{ language | upper }}
                </option>
            {% endfor %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", "/data/src/Pyz/Yves/LanguageSwitcherWidget/Theme/default/components/molecules/language-switcher/language-switcher.twig");
    }
}


/* @LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig */
class __TwigTemplate_2dcd92ffd0924a7d002857a788cd3767___853592055 extends Template
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
            'selectClass' => [$this, 'block_selectClass'],
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 17
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("custom-select"), "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", 17);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selectClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "            ";
        yield from $this->yieldParentBlock("selectClass", $context, $blocks);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 31, $this->source); })()), "jsName", [], "any", false, false, false, 31), "html", null, true);
        yield "
        ";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 34, $this->source); })()), "languages", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["language"] => $context["url"]) {
            // line 35
            yield "                <option
                        value=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 36, $this->source); })()), "getSchemeAndHttpHost", [], "any", false, false, false, 36), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["url"], "html", null, true);
            yield "\"
                        ";
            // line 37
            yield ((($context["language"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 37, $this->source); })()), "currentLanguage", [], "any", false, false, false, 37))) ? ("selected") : (""));
            yield ">
                    ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["language"]), "html", null, true);
            yield "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['language'], $context['url'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig";
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
        return array (  233 => 41,  224 => 38,  220 => 37,  215 => 36,  212 => 35,  207 => 34,  200 => 33,  190 => 31,  183 => 30,  173 => 17,  71 => 27,  70 => 26,  69 => 25,  68 => 24,  67 => 21,  66 => 18,  64 => 17,  57 => 16,  53 => 1,  52 => 12,  51 => 11,  50 => 10,  49 => 9,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'language-switcher',
    tag: 'language-switcher'
} %}

{% define data = {
    languages: required,
    currentLanguage: required,
    getSchemeAndHttpHost: app.request.getSchemeAndHttpHost(),
    additionalModifiers: required,
    additionalClassName: '',
} %}

{% block body %}
    {% embed molecule('custom-select') with {
        modifiers: data.additionalModifiers,
        attributes: {
            'config-theme': 'secondary',
            'additional-class-name': data.additionalClassName,
        },
        embed: {
            jsName: config.jsName ~ '__select',
            languages: data.languages,
            currentLanguage: data.currentLanguage,
            getSchemeAndHttpHost: data.getSchemeAndHttpHost
        }
    } only %}
        {% block selectClass %}
            {{ parent() }} {{ embed.jsName }}
        {% endblock %}
        {% block options %}
            {% for language, url in embed.languages %}
                <option
                        value=\"{{ embed.getSchemeAndHttpHost }}{{ url }}\"
                        {{ (language == embed.currentLanguage) ? 'selected' : ''}}>
                    {{ language | upper }}
                </option>
            {% endfor %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", "/data/src/Pyz/Yves/LanguageSwitcherWidget/Theme/default/components/molecules/language-switcher/language-switcher.twig");
    }
}
