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

/* @NewsletterWidget/templates/subscription-form/subscription-form.twig */
class __TwigTemplate_4bbbbf6d8fab7531cac7f056bf18ca0c extends Template
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
            'content' => [$this, 'block_content'],
            'form' => [$this, 'block_form'],
            'message' => [$this, 'block_message'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@NewsletterWidget/templates/subscription-form/subscription-form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["form" =>         // line 4
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 4, $this->source); })()), "text" => "You can subscribe to our newsletters", "events" => ["success" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["_view"] ?? null), "success", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "success", [], "any", false, false, false, 8)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "success", [], "any", false, false, false, 8)) : ("")), "error" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["_view"] ?? null), "error", [], "any", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "error", [], "any", false, false, false, 9)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["_view"] ?? null), "error", [], "any", false, false, false, 9)) : (""))]], $context['data']);        // line 1
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
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 38
        yield "
    ";
        // line 39
        yield from $this->unwrap()->yieldBlock('message', $context, $blocks);
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "        <div class=\"grid grid--middle grid--justify\">
            <div class=\"col col--sm-12 col--lg-7\">
                <p>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "text", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
            </div>

            ";
        // line 20
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        // line 36
        yield "        </div>
    ";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "                ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("form"), "@NewsletterWidget/templates/subscription-form/subscription-form.twig", 21)->unwrap()->yield(CoreExtension::toArray(["class" => "col col--sm-12 col--lg-4", "modifiers" => ["inline"], "data" => ["form" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "form", [], "any", false, false, false, 25), "submit" => ["enable" => true, "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.form.subscribe")], "options" => ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("newsletter-widget/subscribe")]]]));
        // line 35
        yield "            ";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_message(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "events", [], "any", false, false, false, 40), "success", [], "any", false, false, false, 40))) {
            // line 41
            yield "            <p class=\"text-big text-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "events", [], "any", false, false, false, 41), "success", [], "any", false, false, false, 41)), "html", null, true);
            yield "</p>
        ";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 42
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "events", [], "any", false, false, false, 42), "error", [], "any", false, false, false, 42))) {
            // line 43
            yield "            <p class=\"text-big text-alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "events", [], "any", false, false, false, 43), "error", [], "any", false, false, false, 43)), "html", null, true);
            yield "</p>
        ";
        }
        // line 45
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@NewsletterWidget/templates/subscription-form/subscription-form.twig";
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
        return array (  140 => 45,  134 => 43,  132 => 42,  127 => 41,  124 => 40,  117 => 39,  112 => 35,  110 => 25,  108 => 21,  101 => 20,  95 => 36,  93 => 20,  87 => 17,  83 => 15,  76 => 14,  71 => 39,  68 => 38,  65 => 14,  58 => 13,  54 => 1,  53 => 9,  52 => 8,  51 => 4,  50 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    form: required,
    text: 'You can subscribe to our newsletters',

    events: {
        success: _view.success ?? '',
        error: _view.error ?? ''
    }
} %}

{% block body %}
    {% block content %}
        <div class=\"grid grid--middle grid--justify\">
            <div class=\"col col--sm-12 col--lg-7\">
                <p>{{ data.text }}</p>
            </div>

            {% block form %}
                {% include molecule('form') with {
                    class: 'col col--sm-12 col--lg-4',
                    modifiers: ['inline'],
                    data: {
                        form: data.form,
                        submit: {
                            enable: true,
                            text: 'newsletter.form.subscribe' | trans
                        },
                        options: {
                            action: url('newsletter-widget/subscribe')
                        }
                    }
                } only %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block message %}
        {% if data.events.success is not empty %}
            <p class=\"text-big text-success\">{{ data.events.success | trans }}</p>
        {% elseif data.events.error is not empty %}
            <p class=\"text-big text-alert\">{{ data.events.error | trans }}</p>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@NewsletterWidget/templates/subscription-form/subscription-form.twig", "/data/vendor/spryker-shop/newsletter-widget/src/SprykerShop/Yves/NewsletterWidget/Theme/default/templates/subscription-form/subscription-form.twig");
    }
}
