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

/* @NewsletterWidget/views/subscription-form/subscription-form.twig */
class __TwigTemplate_a417ec43f43bb0ee9a0f7cab467820a0 extends Template
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
        return $this->loadTemplate($this->env->getFunction('view')->getCallable()("subscription-form", "@SprykerShop:NewsletterWidget"), "@NewsletterWidget/views/subscription-form/subscription-form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["events" => ["success" => CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 5, $this->source); })()), "success", [], "any", false, false, false, 5), "error" => CoreExtension::getAttribute($this->env, $this->source,         // line 6
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 6, $this->source); })()), "error", [], "any", false, false, false, 6)]], $context['data']);        // line 1
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
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("subscription-form", "NewsletterWidget"), "@NewsletterWidget/views/subscription-form/subscription-form.twig", 11)->unwrap()->yield(CoreExtension::toArray(["data" => ["form" => CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "form", [], "any", false, false, false, 13), "events" => CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "events", [], "any", false, false, false, 14)]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@NewsletterWidget/views/subscription-form/subscription-form.twig";
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
        return array (  64 => 14,  63 => 13,  61 => 11,  54 => 10,  50 => 1,  49 => 6,  48 => 5,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends view('subscription-form', '@SprykerShop:NewsletterWidget') %}

{% define data = {
    events: {
        success: _view.success,
        error: _view.error,
    },
} %}

{% block body %}
    {% include molecule('subscription-form', 'NewsletterWidget') with {
        data: {
            form: data.form,
            events: data.events,
        },
    } only %}
{% endblock %}
", "@NewsletterWidget/views/subscription-form/subscription-form.twig", "/data/src/Pyz/Yves/NewsletterWidget/Theme/default/views/subscription-form/subscription-form.twig");
    }
}
