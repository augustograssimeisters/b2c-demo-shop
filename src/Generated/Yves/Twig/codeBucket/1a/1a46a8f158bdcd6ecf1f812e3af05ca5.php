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

/* @@SprykerShop:NewsletterWidget/views/subscription-form/subscription-form.twig */
class __TwigTemplate_9798722d91c29acd5ed9bf1d7c876b97 extends Template
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
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("subscription-form", "NewsletterWidget"), "@@SprykerShop:NewsletterWidget/views/subscription-form/subscription-form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["form" => CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "newsletterSubscriptionForm", [], "any", false, false, false, 4)], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("form"), "@@SprykerShop:NewsletterWidget/views/subscription-form/subscription-form.twig", 8)->unwrap()->yield(CoreExtension::toArray(["class" => "col col--sm-12 col--lg-4", "modifiers" => ["inline"], "data" => ["form" => CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "form", [], "any", false, false, false, 12), "submit" => ["enable" => true, "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.form.subscribe")]]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:NewsletterWidget/views/subscription-form/subscription-form.twig";
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
        return array (  62 => 12,  60 => 8,  53 => 7,  49 => 1,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('subscription-form', 'NewsletterWidget') %}

{% define data = {
    form: _view.newsletterSubscriptionForm,
} %}

{% block form %}
    {% include molecule('form') with {
        class: 'col col--sm-12 col--lg-4',
        modifiers: ['inline'],
        data: {
            form: data.form,
            submit: {
                enable: true,
                text: 'newsletter.form.subscribe' | trans
            }
        }
    } only %}
{% endblock %}
", "@@SprykerShop:NewsletterWidget/views/subscription-form/subscription-form.twig", "/data/vendor/spryker-shop/newsletter-widget/src/SprykerShop/Yves/NewsletterWidget/Theme/default/views/subscription-form/subscription-form.twig");
    }
}
