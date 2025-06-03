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

/* @ShopUi/components/molecules/ajax-add-to-cart/ajax-add-to-cart.twig */
class __TwigTemplate_c2f2c1bd45d054ed637a770294b3959d extends Template
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
            'buttonContent' => [$this, 'block_buttonContent'],
            'buttonText' => [$this, 'block_buttonText'],
            'icon' => [$this, 'block_icon'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/ajax-add-to-cart/ajax-add-to-cart.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/ajax-add-to-cart/ajax-add-to-cart.twig", 2)->unwrap();
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "ajax-add-to-cart", "tag" => "ajax-add-to-cart"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["url" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "csrfToken" =>         // line 11
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 11, $this->source); })()), "quantity" => 1, "separateProduct" => 1, "iconName" => "cart-plus", "buttonText" => "", "buttonTitle" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 16
($context["data"] ?? null), "buttonText", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "buttonText", [], "any", false, false, false, 16), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.add-to-cart"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.add-to-cart"))), "buttonClasses" => "button button--success button--expand", "buttonExtraClasses" => "", "extraAttributes" => []], $context['data']);        // line 22
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["event-revealer" => null], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        $context["buttonText"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "buttonText", [], "any", false, false, false, 27);
        // line 28
        yield "    ";
        $context["buttonTextClasses"] = "";
        // line 29
        yield "    ";
        $context["iconName"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "iconName", [], "any", false, false, false, 29);
        // line 30
        yield "    ";
        $context["iconModifiers"] = [];
        // line 31
        yield "
    ";
        // line 32
        yield from $this->unwrap()->yieldBlock('button', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "        <button
            class=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        yield "__button ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "jsName", [], "any", false, false, false, 34), "html", null, true);
        yield "__button ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "buttonClasses", [], "any", false, false, false, 34), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "buttonExtraClasses", [], "any", false, false, false, 34), "html", null, true);
        yield "\"
            type=\"button\"
            title=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "buttonTitle", [], "any", false, false, false, 36), "html", null, true);
        yield "\"
            data-url=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()), "url", [], "any", false, false, false, 37), "html", null, true);
        yield "\"
            data-csrf-token=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "csrfToken", [], "any", false, false, false, 38), "html", null, true);
        yield "\"
            data-quantity=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "quantity", [], "any", false, false, false, 39), "html", null, true);
        yield "\"
            data-separate-product=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "separateProduct", [], "any", false, false, false, 40), "html", null, true);
        yield "\"
            ";
        // line 41
        yield CoreExtension::callMacro($macros["component"], "macro_renderAttributes", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "extraAttributes", [], "any", false, false, false, 41)], 41, $context, $this->getSourceContext());
        yield "
        >
            ";
        // line 43
        yield from $this->unwrap()->yieldBlock('buttonContent', $context, $blocks);
        // line 63
        yield "        </button>
    ";
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_buttonContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "                ";
        if ((isset($context["buttonText"]) || array_key_exists("buttonText", $context) ? $context["buttonText"] : (function () { throw new RuntimeError('Variable "buttonText" does not exist.', 44, $this->source); })())) {
            // line 45
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('buttonText', $context, $blocks);
            // line 50
            yield "                ";
        }
        // line 51
        yield "
                ";
        // line 52
        if ((isset($context["iconName"]) || array_key_exists("iconName", $context) ? $context["iconName"] : (function () { throw new RuntimeError('Variable "iconName" does not exist.', 52, $this->source); })())) {
            // line 53
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('icon', $context, $blocks);
            // line 61
            yield "                ";
        }
        // line 62
        yield "            ";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_buttonText(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "                        <span class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["buttonTextClasses"]) || array_key_exists("buttonTextClasses", $context) ? $context["buttonTextClasses"] : (function () { throw new RuntimeError('Variable "buttonTextClasses" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["buttonText"]) || array_key_exists("buttonText", $context) ? $context["buttonText"] : (function () { throw new RuntimeError('Variable "buttonText" does not exist.', 47, $this->source); })()), "html", null, true);
        // line 48
        yield "</span>
                    ";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "                        ";
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/ajax-add-to-cart/ajax-add-to-cart.twig", 54)->unwrap()->yield(CoreExtension::toArray(["modifiers" =>         // line 55
(isset($context["iconModifiers"]) || array_key_exists("iconModifiers", $context) ? $context["iconModifiers"] : (function () { throw new RuntimeError('Variable "iconModifiers" does not exist.', 55, $this->source); })()), "data" => ["name" =>         // line 57
(isset($context["iconName"]) || array_key_exists("iconName", $context) ? $context["iconName"] : (function () { throw new RuntimeError('Variable "iconName" does not exist.', 57, $this->source); })())]]));
        // line 60
        yield "                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/ajax-add-to-cart/ajax-add-to-cart.twig";
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
        return array (  206 => 60,  204 => 57,  203 => 55,  201 => 54,  194 => 53,  188 => 48,  186 => 47,  182 => 46,  175 => 45,  170 => 62,  167 => 61,  164 => 53,  162 => 52,  159 => 51,  156 => 50,  153 => 45,  150 => 44,  143 => 43,  137 => 63,  135 => 43,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  99 => 34,  96 => 33,  85 => 32,  82 => 31,  79 => 30,  76 => 29,  73 => 28,  70 => 27,  63 => 26,  59 => 1,  58 => 22,  57 => 16,  56 => 11,  55 => 10,  54 => 9,  53 => 4,  51 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}
{% import model('component') as component %}

{% define config = {
    name: 'ajax-add-to-cart',
    tag: 'ajax-add-to-cart',
} %}

{% define data = {
    url: required,
    csrfToken: required,
    quantity: 1,
    separateProduct: 1,
    iconName: 'cart-plus',
    buttonText: '',
    buttonTitle: data.buttonText | default('global.add-to-cart' | trans),
    buttonClasses: 'button button--success button--expand',
    buttonExtraClasses: '',
    extraAttributes: {},
} %}

{% define attributes = {
    'event-revealer': null,
} %}

{% block body %}
    {% set buttonText = data.buttonText %}
    {% set buttonTextClasses = '' %}
    {% set iconName = data.iconName %}
    {% set iconModifiers = [] %}

    {% block button %}
        <button
            class=\"{{ config.name }}__button {{ config.jsName }}__button {{ data.buttonClasses }} {{ data.buttonExtraClasses }}\"
            type=\"button\"
            title=\"{{ data.buttonTitle }}\"
            data-url=\"{{ data.url }}\"
            data-csrf-token=\"{{ data.csrfToken }}\"
            data-quantity=\"{{ data.quantity }}\"
            data-separate-product=\"{{ data.separateProduct }}\"
            {{ component.renderAttributes(data.extraAttributes) }}
        >
            {% block buttonContent %}
                {% if buttonText %}
                    {% block buttonText %}
                        <span class=\"{{ buttonTextClasses }}\">
                            {{- buttonText -}}
                        </span>
                    {% endblock %}
                {% endif %}

                {% if iconName %}
                    {% block icon %}
                        {% include atom('icon') with {
                            modifiers: iconModifiers,
                            data: {
                                name: iconName,
                            },
                        } only %}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        </button>
    {% endblock %}
{% endblock %}
", "@ShopUi/components/molecules/ajax-add-to-cart/ajax-add-to-cart.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/ajax-add-to-cart/ajax-add-to-cart.twig");
    }
}
