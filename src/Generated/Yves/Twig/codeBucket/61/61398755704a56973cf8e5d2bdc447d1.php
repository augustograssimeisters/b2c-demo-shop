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

/* @ShopUi/components/molecules/money-price/money-price.twig */
class __TwigTemplate_281463d792a60a60f728588966f67d18 extends Template
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
            'defaultPriceInner' => [$this, 'block_defaultPriceInner'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("money-price", "@SprykerShop:ShopUi"), "@ShopUi/components/molecules/money-price/money-price.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_defaultPriceInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        $context["defaultPriceJsName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "parentJsName", [], "any", false, false, false, 4)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "parentJsName", [], "any", false, false, false, 4) . "__default-price")) : (""));
        // line 5
        yield "
    <span itemprop=\"price\" content=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('moneyRaw')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "amount", [], "any", false, false, false, 6)), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "__amount ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["defaultPriceJsName"]) || array_key_exists("defaultPriceJsName", $context) ? $context["defaultPriceJsName"] : (function () { throw new RuntimeError('Variable "defaultPriceJsName" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\">
        <meta itemprop=\"priceCurrency\" content=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('currencyIsoCode')->getCallable()(), "html", null, true);
        yield "\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "amount", [], "any", false, false, false, 8), true, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 8)), "html", null, true);
        // line 9
        yield "</span>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/money-price/money-price.twig";
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
        return array (  76 => 9,  74 => 8,  71 => 7,  63 => 6,  60 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends molecule('money-price', '@SprykerShop:ShopUi') %}

{% block defaultPriceInner %}
    {% set defaultPriceJsName = data.parentJsName ? data.parentJsName ~ '__default-price' %}

    <span itemprop=\"price\" content=\"{{ data.amount | moneyRaw }}\" class=\"{{ config.name }}__amount {{ defaultPriceJsName }}\">
        <meta itemprop=\"priceCurrency\" content=\"{{ currencyIsoCode() }}\">
        {{- data.amount | money(true, data.currencyIsoCode) -}}
    </span>
{% endblock %}
", "@ShopUi/components/molecules/money-price/money-price.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/money-price/money-price.twig");
    }
}
