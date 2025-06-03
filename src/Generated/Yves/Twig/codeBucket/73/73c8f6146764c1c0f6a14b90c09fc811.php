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

/* @NewsletterWidget/components/molecules/subscription-form/subscription-form.twig */
class __TwigTemplate_7d02c7393faee3af2373c04d2bfbb5d3 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@NewsletterWidget/components/molecules/subscription-form/subscription-form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "subscription-form", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["form" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "events" => ["success" =>         // line 12
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 12, $this->source); })()), "error" =>         // line 13
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 13, $this->source); })())]], $context['data']);        // line 1
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
        yield "
    ";
        // line 19
        yield from         $this->loadTemplate("@NewsletterWidget/components/molecules/subscription-form/subscription-form.twig", "@NewsletterWidget/components/molecules/subscription-form/subscription-form.twig", 19, "1839911102")->unwrap()->yield(CoreExtension::toArray(["data" => ["form" => CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "form", [], "any", false, false, false, 21)]]));
        // line 45
        yield "
    ";
        // line 46
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), "events", [], "any", false, false, false, 46), "success", [], "any", false, false, false, 46))) {
            // line 47
            yield "        <div class=\"text-success ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
            yield "__success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "events", [], "any", false, false, false, 47), "success", [], "any", false, false, false, 47)), "html", null, true);
            yield "</div>
    ";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "events", [], "any", false, false, false, 48), "error", [], "any", false, false, false, 48))) {
            // line 49
            yield "        <div class=\"text-alert ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
            yield "__alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "events", [], "any", false, false, false, 49), "error", [], "any", false, false, false, 49)), "html", null, true);
            yield "</div>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@NewsletterWidget/components/molecules/subscription-form/subscription-form.twig";
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
        return array (  83 => 49,  81 => 48,  74 => 47,  72 => 46,  69 => 45,  67 => 21,  66 => 19,  63 => 18,  56 => 17,  52 => 1,  51 => 13,  50 => 12,  49 => 9,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'subscription-form',
    tag: 'section'
} %}

{% define data = {
    form: required,

    events: {
        success: required,
        error: required
    }
} %}

{% block body %}

    {% embed molecule('form') with {
        data: {
            form: data.form
        }
    } only %}
        {% block formErrors %}{% endblock %}

        {% block fields %}
            <div class=\"col col--sm-12 grid grid--no-wrap\">
                <div class=\"col col--expand\">
                    {{ form_widget(_view.newsletterSubscriptionForm.subscribe, {'attr':{'placeholder': 'footer_subscribe.subscription_placeholder' | trans }}) }}
                </div>
                <div class=\"col\">
                    <button type=\"submit\" class=\"button button--combined button--combined-small\" {{ qa('subscription-form__button') }}>
                        {% include atom('icon') with {
                            modifiers: ['send'],
                            data: {
                                name: 'arrow'
                            }
                        } only %}
                    </button>
                </div>
            </div>
            {{ form_errors(data.form) }}
        {% endblock %}
    {% endembed %}

    {% if data.events.success is not empty %}
        <div class=\"text-success {{ config.name }}__success\">{{data.events.success | trans}}</div>
    {% elseif data.events.error is not empty %}
        <div class=\"text-alert {{ config.name }}__alert\">{{data.events.error | trans}}</div>
    {% endif %}
{% endblock %}
", "@NewsletterWidget/components/molecules/subscription-form/subscription-form.twig", "/data/src/Pyz/Yves/NewsletterWidget/Theme/default/components/molecules/subscription-form/subscription-form.twig");
    }
}


/* @NewsletterWidget/components/molecules/subscription-form/subscription-form.twig */
class __TwigTemplate_7d02c7393faee3af2373c04d2bfbb5d3___1839911102 extends Template
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
            'formErrors' => [$this, 'block_formErrors'],
            'fields' => [$this, 'block_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 19
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("form"), "@NewsletterWidget/components/molecules/subscription-form/subscription-form.twig", 19);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_formErrors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "            <div class=\"col col--sm-12 grid grid--no-wrap\">
                <div class=\"col col--expand\">
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 29, $this->source); })()), "newsletterSubscriptionForm", [], "any", false, false, false, 29), "subscribe", [], "any", false, false, false, 29), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer_subscribe.subscription_placeholder")]]);
        yield "
                </div>
                <div class=\"col\">
                    <button type=\"submit\" class=\"button button--combined button--combined-small\" ";
        // line 32
        yield $this->env->getFunction('qa')->getCallable()(["subscription-form__button"]);
        yield ">
                        ";
        // line 33
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@NewsletterWidget/components/molecules/subscription-form/subscription-form.twig", 33)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["send"], "data" => ["name" => "arrow"]]));
        // line 39
        yield "                    </button>
                </div>
            </div>
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "form", [], "any", false, false, false, 42), 'errors');
        yield "
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@NewsletterWidget/components/molecules/subscription-form/subscription-form.twig";
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
        return array (  247 => 42,  242 => 39,  240 => 33,  236 => 32,  230 => 29,  226 => 27,  219 => 26,  209 => 24,  199 => 19,  83 => 49,  81 => 48,  74 => 47,  72 => 46,  69 => 45,  67 => 21,  66 => 19,  63 => 18,  56 => 17,  52 => 1,  51 => 13,  50 => 12,  49 => 9,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'subscription-form',
    tag: 'section'
} %}

{% define data = {
    form: required,

    events: {
        success: required,
        error: required
    }
} %}

{% block body %}

    {% embed molecule('form') with {
        data: {
            form: data.form
        }
    } only %}
        {% block formErrors %}{% endblock %}

        {% block fields %}
            <div class=\"col col--sm-12 grid grid--no-wrap\">
                <div class=\"col col--expand\">
                    {{ form_widget(_view.newsletterSubscriptionForm.subscribe, {'attr':{'placeholder': 'footer_subscribe.subscription_placeholder' | trans }}) }}
                </div>
                <div class=\"col\">
                    <button type=\"submit\" class=\"button button--combined button--combined-small\" {{ qa('subscription-form__button') }}>
                        {% include atom('icon') with {
                            modifiers: ['send'],
                            data: {
                                name: 'arrow'
                            }
                        } only %}
                    </button>
                </div>
            </div>
            {{ form_errors(data.form) }}
        {% endblock %}
    {% endembed %}

    {% if data.events.success is not empty %}
        <div class=\"text-success {{ config.name }}__success\">{{data.events.success | trans}}</div>
    {% elseif data.events.error is not empty %}
        <div class=\"text-alert {{ config.name }}__alert\">{{data.events.error | trans}}</div>
    {% endif %}
{% endblock %}
", "@NewsletterWidget/components/molecules/subscription-form/subscription-form.twig", "/data/src/Pyz/Yves/NewsletterWidget/Theme/default/components/molecules/subscription-form/subscription-form.twig");
    }
}
