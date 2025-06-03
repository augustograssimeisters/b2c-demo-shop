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

/* @ShopUi/components/organisms/notification-area/notification-area.twig */
class __TwigTemplate_5d9586d882169207a165384b7369dec8 extends Template
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
            'dynamicNotificationArea' => [$this, 'block_dynamicNotificationArea'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/organisms/notification-area/notification-area.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "notification-area", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["messages" => [], "successMessages" => [], "warningMessages" => [], "alertMessages" => [], "flashMessagesInfo" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "flashbag", [], "any", false, false, false, 13), "get", ["flash.messages.info"], "method", false, false, false, 13), "flashMessagesSuccess" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "session", [], "any", false, false, false, 14), "flashbag", [], "any", false, false, false, 14), "get", ["flash.messages.success"], "method", false, false, false, 14), "flashMessagesError" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "flashbag", [], "any", false, false, false, 15), "get", ["flash.messages.error"], "method", false, false, false, 15)], $context['data']);        // line 18
        $context["messages"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "messages", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "flashMessagesInfo", [], "any", false, false, false, 18));
        // line 19
        $context["successMessages"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "successMessages", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "flashMessagesSuccess", [], "any", false, false, false, 19));
        // line 20
        $context["warningMessages"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "warningMessages", [], "any", false, false, false, 20);
        // line 21
        $context["alertMessages"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "alertMessages", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "flashMessagesError", [], "any", false, false, false, 21));
        // line 22
        $context["hasNoMessage"] = (((Twig\Extension\CoreExtension::testEmpty((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 22, $this->source); })())) && Twig\Extension\CoreExtension::testEmpty((isset($context["successMessages"]) || array_key_exists("successMessages", $context) ? $context["successMessages"] : (function () { throw new RuntimeError('Variable "successMessages" does not exist.', 22, $this->source); })()))) && Twig\Extension\CoreExtension::testEmpty((isset($context["warningMessages"]) || array_key_exists("warningMessages", $context) ? $context["warningMessages"] : (function () { throw new RuntimeError('Variable "warningMessages" does not exist.', 22, $this->source); })()))) && Twig\Extension\CoreExtension::testEmpty((isset($context["alertMessages"]) || array_key_exists("alertMessages", $context) ? $context["alertMessages"] : (function () { throw new RuntimeError('Variable "alertMessages" does not exist.', 22, $this->source); })())));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
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
        if ( !(isset($context["hasNoMessage"]) || array_key_exists("hasNoMessage", $context) ? $context["hasNoMessage"] : (function () { throw new RuntimeError('Variable "hasNoMessage" does not exist.', 25, $this->source); })())) {
            // line 26
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 27
                yield "            ";
                yield from                 $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("flash-message"), "@ShopUi/components/organisms/notification-area/notification-area.twig", 27)->unwrap()->yield(CoreExtension::toArray(["data" => ["text" =>                 // line 29
$context["message"]]]));
                // line 32
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["successMessages"]) || array_key_exists("successMessages", $context) ? $context["successMessages"] : (function () { throw new RuntimeError('Variable "successMessages" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                yield "            ";
                yield from                 $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("flash-message"), "@ShopUi/components/organisms/notification-area/notification-area.twig", 35)->unwrap()->yield(CoreExtension::toArray(["data" => ["action" => "success", "text" =>                 // line 38
$context["message"]]]));
                // line 41
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["warningMessages"]) || array_key_exists("warningMessages", $context) ? $context["warningMessages"] : (function () { throw new RuntimeError('Variable "warningMessages" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 44
                yield "            ";
                yield from                 $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("flash-message"), "@ShopUi/components/organisms/notification-area/notification-area.twig", 44)->unwrap()->yield(CoreExtension::toArray(["data" => ["action" => "warning", "text" =>                 // line 47
$context["message"]]]));
                // line 50
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "
        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alertMessages"]) || array_key_exists("alertMessages", $context) ? $context["alertMessages"] : (function () { throw new RuntimeError('Variable "alertMessages" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 53
                yield "            ";
                yield from                 $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("flash-message"), "@ShopUi/components/organisms/notification-area/notification-area.twig", 53)->unwrap()->yield(CoreExtension::toArray(["data" => ["action" => "alert", "text" =>                 // line 56
$context["message"]]]));
                // line 59
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "    ";
        }
        // line 61
        yield "
    ";
        // line 62
        yield from $this->unwrap()->yieldBlock('dynamicNotificationArea', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dynamicNotificationArea(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "        ";
        yield from         $this->loadTemplate($this->env->getFunction('organism')->getCallable()("dynamic-notification-area"), "@ShopUi/components/organisms/notification-area/notification-area.twig", 63)->unwrap()->yield([]);
        // line 64
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/organisms/notification-area/notification-area.twig";
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
        return array (  163 => 64,  160 => 63,  149 => 62,  146 => 61,  143 => 60,  137 => 59,  135 => 56,  133 => 53,  129 => 52,  126 => 51,  120 => 50,  118 => 47,  116 => 44,  112 => 43,  109 => 42,  103 => 41,  101 => 38,  99 => 35,  95 => 34,  92 => 33,  86 => 32,  84 => 29,  82 => 27,  77 => 26,  74 => 25,  67 => 24,  63 => 1,  61 => 22,  59 => 21,  57 => 20,  55 => 19,  53 => 18,  52 => 15,  51 => 14,  50 => 13,  49 => 8,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'notification-area',
    tag: 'section',
} %}

{% define data = {
    messages: [],
    successMessages: [],
    warningMessages: [],
    alertMessages: [],
    flashMessagesInfo: app.session.flashbag.get('flash.messages.info'),
    flashMessagesSuccess: app.session.flashbag.get('flash.messages.success'),
    flashMessagesError: app.session.flashbag.get('flash.messages.error'),
} %}

{% set messages = data.messages | merge(data.flashMessagesInfo) %}
{% set successMessages = data.successMessages | merge(data.flashMessagesSuccess) %}
{% set warningMessages = data.warningMessages %}
{% set alertMessages = data.alertMessages | merge(data.flashMessagesError) %}
{% set hasNoMessage = messages is empty and successMessages is empty and warningMessages is empty and alertMessages is empty %}

{% block body %}
    {% if not hasNoMessage  %}
        {% for message in messages %}
            {% include molecule('flash-message') with {
                data: {
                    text: message,
                },
            } only %}
        {% endfor %}

        {% for message in successMessages %}
            {% include molecule('flash-message') with {
                data: {
                    action: 'success',
                    text: message,
                },
            } only %}
        {% endfor %}

        {% for message in warningMessages %}
            {% include molecule('flash-message') with {
                data: {
                    action: 'warning',
                    text: message,
                },
            } only %}
        {% endfor %}

        {% for message in alertMessages %}
            {% include molecule('flash-message') with {
                data: {
                    action: 'alert',
                    text: message,
                },
            } only %}
        {% endfor %}
    {% endif %}

    {% block dynamicNotificationArea %}
        {% include organism('dynamic-notification-area') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/components/organisms/notification-area/notification-area.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/organisms/notification-area/notification-area.twig");
    }
}
