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

/* @CurrencyWidget/views/currency-switcher/currency-switcher.twig */
class __TwigTemplate_e8735ff4a88845271a2532ecfe55f5d2 extends Template
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
            'template' => [$this, 'block_template'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@CurrencyWidget/views/currency-switcher/currency-switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["currencies" => CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "currencies", [], "any", false, false, false, 4), "currentCurrency" => CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "currentCurrency", [], "any", false, false, false, 5), "additionalModifiers" => ["hollow", "header"], "additionalClassName" => ""], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_template(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "currencies", [], "any", false, false, false, 11))) {
            // line 12
            yield "        ";
            yield from $this->yieldParentBlock("template", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    <form method=\"GET\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("currency-switch");
        yield "\">
        ";
        // line 18
        yield from         $this->loadTemplate("@CurrencyWidget/views/currency-switcher/currency-switcher.twig", "@CurrencyWidget/views/currency-switcher/currency-switcher.twig", 18, "1376872242")->unwrap()->yield(CoreExtension::toArray(["modifiers" => CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "additionalModifiers", [], "any", false, false, false, 19), "attributes" => ["name" => "currency-iso-code", "config-theme" => "secondary", "additional-class-name" => CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "additionalClassName", [], "any", false, false, false, 23), "data-form-submitter" => ""], "embed" => ["currencies" => CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "currencies", [], "any", false, false, false, 27), "currentCurrency" => CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "currentCurrency", [], "any", false, false, false, 28)]]));
        // line 37
        yield "
        <input type=\"hidden\" name=\"referrer-url\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "requestUri", [], "any", false, false, false, 38), "html", null, true);
        yield "\"/>
    </form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CurrencyWidget/views/currency-switcher/currency-switcher.twig";
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
        return array (  95 => 38,  92 => 37,  90 => 28,  89 => 27,  88 => 23,  87 => 19,  86 => 18,  81 => 17,  74 => 16,  65 => 12,  62 => 11,  55 => 10,  51 => 1,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    currencies: _widget.currencies,
    currentCurrency: _widget.currentCurrency,
    additionalModifiers: ['hollow', 'header'],
    additionalClassName: '',
} %}

{% block template %}
    {% if data.currencies is not empty %}
        {{parent()}}
    {% endif %}
{% endblock %}

{% block body %}
    <form method=\"GET\" action=\"{{ path('currency-switch') }}\">
        {% embed molecule('custom-select') with {
            modifiers: data.additionalModifiers,
            attributes: {
                name: 'currency-iso-code',
                'config-theme': 'secondary',
                'additional-class-name': data.additionalClassName,
                'data-form-submitter': '',
            },
            embed: {
                currencies: data.currencies,
                currentCurrency: data.currentCurrency,
            },
        } only %}
            {% block options %}
                {% for currency in embed.currencies %}
                    <option value=\"{{ currency.code }}\" {{ (currency.code == embed.currentCurrency) ? 'selected' : ''}}>{{ currency.code | trans }}</option>
                {% endfor %}
            {% endblock %}
        {% endembed %}

        <input type=\"hidden\" name=\"referrer-url\" value=\"{{ app.request.requestUri }}\"/>
    </form>
{% endblock %}
", "@CurrencyWidget/views/currency-switcher/currency-switcher.twig", "/data/src/Pyz/Yves/CurrencyWidget/Theme/default/views/currency-switcher/currency-switcher.twig");
    }
}


/* @CurrencyWidget/views/currency-switcher/currency-switcher.twig */
class __TwigTemplate_e8735ff4a88845271a2532ecfe55f5d2___1376872242 extends Template
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
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 18
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("custom-select"), "@CurrencyWidget/views/currency-switcher/currency-switcher.twig", 18);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 32, $this->source); })()), "currencies", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 33
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 33), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 33) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 33, $this->source); })()), "currentCurrency", [], "any", false, false, false, 33))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 33)), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@CurrencyWidget/views/currency-switcher/currency-switcher.twig";
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
        return array (  231 => 35,  218 => 33,  213 => 32,  206 => 31,  196 => 18,  95 => 38,  92 => 37,  90 => 28,  89 => 27,  88 => 23,  87 => 19,  86 => 18,  81 => 17,  74 => 16,  65 => 12,  62 => 11,  55 => 10,  51 => 1,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    currencies: _widget.currencies,
    currentCurrency: _widget.currentCurrency,
    additionalModifiers: ['hollow', 'header'],
    additionalClassName: '',
} %}

{% block template %}
    {% if data.currencies is not empty %}
        {{parent()}}
    {% endif %}
{% endblock %}

{% block body %}
    <form method=\"GET\" action=\"{{ path('currency-switch') }}\">
        {% embed molecule('custom-select') with {
            modifiers: data.additionalModifiers,
            attributes: {
                name: 'currency-iso-code',
                'config-theme': 'secondary',
                'additional-class-name': data.additionalClassName,
                'data-form-submitter': '',
            },
            embed: {
                currencies: data.currencies,
                currentCurrency: data.currentCurrency,
            },
        } only %}
            {% block options %}
                {% for currency in embed.currencies %}
                    <option value=\"{{ currency.code }}\" {{ (currency.code == embed.currentCurrency) ? 'selected' : ''}}>{{ currency.code | trans }}</option>
                {% endfor %}
            {% endblock %}
        {% endembed %}

        <input type=\"hidden\" name=\"referrer-url\" value=\"{{ app.request.requestUri }}\"/>
    </form>
{% endblock %}
", "@CurrencyWidget/views/currency-switcher/currency-switcher.twig", "/data/src/Pyz/Yves/CurrencyWidget/Theme/default/views/currency-switcher/currency-switcher.twig");
    }
}
