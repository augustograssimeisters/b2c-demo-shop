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

/* @AgentWidget/views/agent-widget/agent-widget.twig */
class __TwigTemplate_f7db7202bdfa010ea647c238a8a56d40 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@AgentWidget/views/agent-widget/agent-widget.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["isLoggedIn" => CoreExtension::getAttribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "isLoggedIn", [], "any", false, false, false, 4), "agent" => CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "agent", [], "any", false, false, false, 5), "customer" => CoreExtension::getAttribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "customer", [], "any", false, false, false, 6)], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "isLoggedIn", [], "any", false, false, false, 10)) {
            // line 11
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('organism')->getCallable()("agent-control-bar", "AgentWidget"), "@AgentWidget/views/agent-widget/agent-widget.twig", 11)->unwrap()->yield(CoreExtension::toArray(["data" => ["agent" => CoreExtension::getAttribute($this->env, $this->source,             // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "agent", [], "any", false, false, false, 13), "customer" => CoreExtension::getAttribute($this->env, $this->source,             // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "customer", [], "any", false, false, false, 14)]]));
            // line 17
            yield "    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@AgentWidget/views/agent-widget/agent-widget.twig";
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
        return array (  70 => 17,  68 => 14,  67 => 13,  65 => 11,  62 => 10,  55 => 9,  51 => 1,  50 => 6,  49 => 5,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    isLoggedIn: _widget.isLoggedIn,
    agent: _widget.agent,
    customer: _widget.customer
} %}

{% block body %}
    {% if data.isLoggedIn %}
        {% include organism('agent-control-bar', 'AgentWidget') with {
            data: {
                agent: data.agent,
                customer: data.customer
            }
        } only %}
    {% endif %}
{% endblock %}
", "@AgentWidget/views/agent-widget/agent-widget.twig", "/data/vendor/spryker-shop/agent-widget/src/SprykerShop/Yves/AgentWidget/Theme/default/views/agent-widget/agent-widget.twig");
    }
}
