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

/* @@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig */
class __TwigTemplate_b45f7b579b0ae10de9aa7e9ce1af5479 extends Template
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
            'originalPrice' => [$this, 'block_originalPrice'],
            'originalPriceInner' => [$this, 'block_originalPriceInner'],
            'defaultPrice' => [$this, 'block_defaultPrice'],
            'defaultPriceNoText' => [$this, 'block_defaultPriceNoText'],
            'defaultPriceInner' => [$this, 'block_defaultPriceInner'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "money-price", "tag" => "span"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["amount" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "originalAmount" => null, "noPriceText" => "---", "currencyIsoCode" => null, "parentJsName" => ""], $context['data']);        // line 17
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["itemscope" => "", "itemprop" => "offers", "itemtype" => "https://schema.org/Offer"], $context['attributes']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        yield from $this->unwrap()->yieldBlock('originalPrice', $context, $blocks);
        // line 37
        yield "
    ";
        // line 38
        yield from $this->unwrap()->yieldBlock('defaultPrice', $context, $blocks);
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_originalPrice(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "        ";
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "originalAmount", [], "any", false, false, false, 25)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "originalAmount", [], "any", false, false, false, 25) > CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "amount", [], "any", false, false, false, 25)))) {
            // line 26
            yield from $this->unwrap()->yieldBlock('originalPriceInner', $context, $blocks);
        }
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_originalPriceInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "                ";
        $context["originalPriceJsName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "parentJsName", [], "any", false, false, false, 27)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "parentJsName", [], "any", false, false, false, 27) . "__original-price")) : (""));
        // line 28
        yield "
                ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "originalAmount", [], "any", false, false, false, 29)) {
            // line 30
            yield "                    <span class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            yield "__amount ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            yield "__amount--original ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["originalPriceJsName"]) || array_key_exists("originalPriceJsName", $context) ? $context["originalPriceJsName"] : (function () { throw new RuntimeError('Variable "originalPriceJsName" does not exist.', 30, $this->source); })()), "html", null, true);
            yield "\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "originalAmount", [], "any", false, false, false, 31), true, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 31)), "html", null, true);
            // line 32
            yield "</span>
                ";
        }
        // line 34
        yield "            ";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_defaultPrice(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "        ";
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "amount", [], "any", false, false, false, 39))) {
            // line 40
            yield from $this->unwrap()->yieldBlock('defaultPriceNoText', $context, $blocks);
        } else {
            // line 44
            yield from $this->unwrap()->yieldBlock('defaultPriceInner', $context, $blocks);
        }
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_defaultPriceNoText(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "noPriceText", [], "any", false, false, false, 41), "html", null, true);
        yield "
            ";
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_defaultPriceInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "                ";
        $context["defaultPriceJsName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "parentJsName", [], "any", false, false, false, 45)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "parentJsName", [], "any", false, false, false, 45) . "__default-price")) : (""));
        // line 46
        yield "
                <span class=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
        yield "__amount\">
                    ";
        // line 48
        yield from         $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", 48)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49) . "__tag"), "data" => ["name" => "tag"]]));
        // line 54
        yield "                    <span itemprop=\"price\" content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('moneyRaw')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "amount", [], "any", false, false, false, 54)), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["defaultPriceJsName"]) || array_key_exists("defaultPriceJsName", $context) ? $context["defaultPriceJsName"] : (function () { throw new RuntimeError('Variable "defaultPriceJsName" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "\">
                        <meta itemprop=\"priceCurrency\" content=\"";
        // line 55
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CurrencyIsoCodeWidget")) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", 55, 2103270807)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        yield "\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "amount", [], "any", false, false, false, 56), true, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 56)), "html", null, true);
        // line 57
        yield "</span>
                </span>
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig";
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
        return array (  195 => 57,  193 => 56,  188 => 55,  181 => 54,  179 => 49,  178 => 48,  174 => 47,  171 => 46,  168 => 45,  161 => 44,  153 => 41,  146 => 40,  140 => 44,  137 => 40,  134 => 39,  127 => 38,  122 => 34,  118 => 32,  116 => 31,  108 => 30,  106 => 29,  103 => 28,  100 => 27,  88 => 26,  85 => 25,  78 => 24,  73 => 38,  70 => 37,  67 => 24,  60 => 23,  56 => 1,  55 => 17,  54 => 10,  53 => 9,  52 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'money-price',
    tag: 'span',
} %}

{# @deprecated property \"noPriceText\" is deprecate: kept for BC reasons, will be removed in next major. #}
{% define data = {
    amount: required,
    originalAmount: null,
    noPriceText: '---',
    currencyIsoCode: null,
    parentJsName: '',
} %}

{% define attributes = {
    itemscope: '',
    itemprop: 'offers',
    itemtype: 'https://schema.org/Offer',
} %}

{% block body %}
    {% block originalPrice %}
        {% if data.originalAmount is not empty and data.originalAmount > data.amount -%}
            {% block originalPriceInner %}
                {% set originalPriceJsName = data.parentJsName ? data.parentJsName ~ '__original-price' %}

                {% if data.originalAmount %}
                    <span class=\"{{ config.name }}__amount {{ config.name }}__amount--original {{ originalPriceJsName }}\">
                        {{- data.originalAmount | money(true, data.currencyIsoCode) -}}
                    </span>
                {% endif %}
            {% endblock %}
        {%- endif -%}
    {% endblock %}

    {% block defaultPrice %}
        {% if data.amount is empty -%}
            {% block defaultPriceNoText %}
                {{ data.noPriceText }}
            {% endblock %}
        {%- else -%}
            {% block defaultPriceInner %}
                {% set defaultPriceJsName = data.parentJsName ? data.parentJsName ~ '__default-price' %}

                <span class=\"{{ config.name }}__amount\">
                    {% include atom('icon') with {
                        class: config.name ~ '__tag',
                        data: {
                            name: 'tag',
                        },
                    } only %}
                    <span itemprop=\"price\" content=\"{{ data.amount | moneyRaw }}\" class=\"{{ defaultPriceJsName }}\">
                        <meta itemprop=\"priceCurrency\" content=\"{% widget 'CurrencyIsoCodeWidget' only %}{% endwidget %}\">
                        {{- data.amount | money(true, data.currencyIsoCode) -}}
                    </span>
                </span>
            {% endblock %}
        {%- endif -%}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/money-price/money-price.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig */
class __TwigTemplate_b45f7b579b0ae10de9aa7e9ce1af5479___2103270807 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 55
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 55, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", 55);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig";
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
        return array (  316 => 55,  195 => 57,  193 => 56,  188 => 55,  181 => 54,  179 => 49,  178 => 48,  174 => 47,  171 => 46,  168 => 45,  161 => 44,  153 => 41,  146 => 40,  140 => 44,  137 => 40,  134 => 39,  127 => 38,  122 => 34,  118 => 32,  116 => 31,  108 => 30,  106 => 29,  103 => 28,  100 => 27,  88 => 26,  85 => 25,  78 => 24,  73 => 38,  70 => 37,  67 => 24,  60 => 23,  56 => 1,  55 => 17,  54 => 10,  53 => 9,  52 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'money-price',
    tag: 'span',
} %}

{# @deprecated property \"noPriceText\" is deprecate: kept for BC reasons, will be removed in next major. #}
{% define data = {
    amount: required,
    originalAmount: null,
    noPriceText: '---',
    currencyIsoCode: null,
    parentJsName: '',
} %}

{% define attributes = {
    itemscope: '',
    itemprop: 'offers',
    itemtype: 'https://schema.org/Offer',
} %}

{% block body %}
    {% block originalPrice %}
        {% if data.originalAmount is not empty and data.originalAmount > data.amount -%}
            {% block originalPriceInner %}
                {% set originalPriceJsName = data.parentJsName ? data.parentJsName ~ '__original-price' %}

                {% if data.originalAmount %}
                    <span class=\"{{ config.name }}__amount {{ config.name }}__amount--original {{ originalPriceJsName }}\">
                        {{- data.originalAmount | money(true, data.currencyIsoCode) -}}
                    </span>
                {% endif %}
            {% endblock %}
        {%- endif -%}
    {% endblock %}

    {% block defaultPrice %}
        {% if data.amount is empty -%}
            {% block defaultPriceNoText %}
                {{ data.noPriceText }}
            {% endblock %}
        {%- else -%}
            {% block defaultPriceInner %}
                {% set defaultPriceJsName = data.parentJsName ? data.parentJsName ~ '__default-price' %}

                <span class=\"{{ config.name }}__amount\">
                    {% include atom('icon') with {
                        class: config.name ~ '__tag',
                        data: {
                            name: 'tag',
                        },
                    } only %}
                    <span itemprop=\"price\" content=\"{{ data.amount | moneyRaw }}\" class=\"{{ defaultPriceJsName }}\">
                        <meta itemprop=\"priceCurrency\" content=\"{% widget 'CurrencyIsoCodeWidget' only %}{% endwidget %}\">
                        {{- data.amount | money(true, data.currencyIsoCode) -}}
                    </span>
                </span>
            {% endblock %}
        {%- endif -%}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/money-price/money-price.twig");
    }
}
