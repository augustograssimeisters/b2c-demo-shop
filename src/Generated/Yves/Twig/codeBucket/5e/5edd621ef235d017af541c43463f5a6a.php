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

/* @ShopUi/components/molecules/navigation-top-mobile-item/navigation-top-mobile-item.twig */
class __TwigTemplate_1f9301fa2aee60defbbf5c3646371432 extends Template
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
            'button' => [$this, 'block_button'],
            'icon' => [$this, 'block_icon'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/navigation-top-mobile-item/navigation-top-mobile-item.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-top-mobile-item", "tag" => "li"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["url" => "/", "iconName" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "isButton" => false, "jsClass" => ""], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "    <div class=\"grid grid--middle grid--center\">
        ";
        // line 17
        yield from $this->unwrap()->yieldBlock('button', $context, $blocks);
        // line 35
        yield "    </div>
";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "isButton", [], "any", false, false, false, 18) == true)) {
            // line 19
            yield "                <button type=\"button\" class=\"button button--skinless spacing spacing--inner spacing--reset ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "jsClass", [], "any", false, false, false, 19), "html", null, true);
            yield "\">
                    ";
            // line 20
            yield from $this->unwrap()->yieldBlock('icon', $context, $blocks);
            // line 28
            yield "                </button>
            ";
        } else {
            // line 30
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "url", [], "any", false, false, false, 30), "html", null, true);
            yield "\">
                    ";
            // line 31
            yield from             $this->unwrap()->yieldBlock("icon", $context, $blocks);
            yield "
                </a>
            ";
        }
        // line 34
        yield "        ";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "                        ";
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/navigation-top-mobile-item/navigation-top-mobile-item.twig", 21)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["big"], "data" => ["name" => CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "iconName", [], "any", false, false, false, 24)]]));
        // line 27
        yield "                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/navigation-top-mobile-item/navigation-top-mobile-item.twig";
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
        return array (  122 => 27,  120 => 24,  118 => 21,  111 => 20,  106 => 34,  100 => 31,  95 => 30,  91 => 28,  89 => 20,  84 => 19,  81 => 18,  74 => 17,  68 => 35,  66 => 17,  63 => 16,  56 => 15,  52 => 1,  51 => 10,  50 => 8,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top-mobile-item',
    tag: 'li'
} %}

{% define data = {
    url: '/',
    iconName: required,
    isButton: false,
    jsClass: ''
} %}

{% block body %}
    <div class=\"grid grid--middle grid--center\">
        {% block button %}
            {% if data.isButton == true %}
                <button type=\"button\" class=\"button button--skinless spacing spacing--inner spacing--reset {{ data.jsClass }}\">
                    {% block icon %}
                        {% include atom('icon') with {
                            modifiers: ['big'],
                            data: {
                                name: data.iconName,
                            }
                        } only %}
                    {% endblock %}
                </button>
            {% else %}
                <a href=\"{{ data.url }}\">
                    {{ block('icon') }}
                </a>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@ShopUi/components/molecules/navigation-top-mobile-item/navigation-top-mobile-item.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-top-mobile-item/navigation-top-mobile-item.twig");
    }
}
