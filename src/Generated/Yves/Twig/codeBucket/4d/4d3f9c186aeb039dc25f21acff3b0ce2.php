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

/* @ShopUi/components/molecules/user-block/user-block.twig */
class __TwigTemplate_e587728f5da9f804ffe831860b388f21 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/user-block/user-block.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "user-block"], $context['config']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    <h2 class=\"title title--mini-cart title--with-border\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.profile.title"), "html", null, true);
        yield "</h2>
    <div class=\"spacing-y spacing-y--inner spacing-y--big\">
        ";
        // line 10
        $context["links"] = [["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.step.summary.overview"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("customer/overview")], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.account.order_history"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("customer/order")], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.profile.link"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("customer/profile")]];
        // line 24
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 25
            yield "            ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("user-block-item"), "@ShopUi/components/molecules/user-block/user-block.twig", 25)->unwrap()->yield(CoreExtension::toArray(["data" => ["name" => CoreExtension::getAttribute($this->env, $this->source,             // line 27
$context["link"], "name", [], "any", false, false, false, 27)], "attributes" => ["href" => CoreExtension::getAttribute($this->env, $this->source,             // line 30
$context["link"], "url", [], "any", false, false, false, 30)]]));
            // line 33
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    </div>
    ";
        // line 35
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 36
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("user-block-item"), "@ShopUi/components/molecules/user-block/user-block.twig", 36)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["small"], "data" => ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.logout")], "attributes" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout")]]));
            // line 45
            yield "    ";
        } else {
            // line 46
            yield "        <div class=\"grid grid--middle grid--justify ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46), "html", null, true);
            yield "__buttons-container\">
            <a href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register");
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
            yield "__button button button--hollow col\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.customer.auth_as_user"), "html", null, true);
            yield "</a>
            <a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
            yield "__button button col\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.login"), "html", null, true);
            yield "</a>
        </div>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/user-block/user-block.twig";
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
        return array (  107 => 48,  99 => 47,  94 => 46,  91 => 45,  88 => 36,  86 => 35,  83 => 34,  77 => 33,  75 => 30,  74 => 27,  72 => 25,  67 => 24,  65 => 10,  59 => 8,  52 => 7,  48 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'user-block'
} %}

{% block body %}
    <h2 class=\"title title--mini-cart title--with-border\">{{ 'customer.profile.title' | trans }}</h2>
    <div class=\"spacing-y spacing-y--inner spacing-y--big\">
        {% set links = [
            {
                name: 'checkout.step.summary.overview' | trans,
                url: url('customer/overview'),
            },
            {
                name: 'customer.account.order_history' | trans,
                url: url('customer/order'),
            },
            {
                name: 'customer.profile.link' | trans,
                url: url('customer/profile'),
            }
        ] %}
        {% for link in links %}
            {% include molecule('user-block-item') with {
                data: {
                    name: link.name,
                },
                attributes: {
                    href: link.url,
                },
            } only %}
        {% endfor %}
    </div>
    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') and is_granted('ROLE_USER') %}
        {% include molecule('user-block-item') with {
            modifiers: ['small'],
            data: {
                name: 'customer.logout' | trans,
            },
            attributes: {
                href: url('logout'),
            },
        } only %}
    {% else %}
        <div class=\"grid grid--middle grid--justify {{ config.name }}__buttons-container\">
            <a href=\"{{ url('register') }}\" class=\"{{ config.name }}__button button button--hollow col\">{{ 'checkout.customer.auth_as_user' | trans }}</a>
            <a href=\"{{ url('login') }}\" class=\"{{ config.name }}__button button col\">{{ 'global.login' | trans }}</a>
        </div>
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/user-block/user-block.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/user-block/user-block.twig");
    }
}
