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

/* @ShopUi/templates/page-critical-path/page-critical-path.twig */
class __TwigTemplate_bf38db1d328a5ae468c13274b60c2b62 extends Template
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
            'nonCriticalStyles' => [$this, 'block_nonCriticalStyles'],
            'styleLazyLoader' => [$this, 'block_styleLazyLoader'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("page-layout-main"), "@ShopUi/templates/page-critical-path/page-critical-path.twig", 1);
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
    public function block_nonCriticalStyles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "hasCookies", [], "any", false, false, false, 4)) {
            // line 5
            yield "        ";
            yield from $this->yieldParentBlock("nonCriticalStyles", $context, $blocks);
            yield "
    ";
        } else {
            // line 7
            yield "        <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('publicPath')->getCallable()("css/yves_default.util.css"), "html", null, true);
            yield "\">
    ";
        }
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_styleLazyLoader(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "    ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "hasCookies", [], "any", false, false, false, 12)) {
            // line 13
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("style-loader"), "@ShopUi/templates/page-critical-path/page-critical-path.twig", 13)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["path-to-css" => $this->env->getFunction('publicPath')->getCallable()("css/yves_default.non-critical.css")]]));
            // line 18
            yield "    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/templates/page-critical-path/page-critical-path.twig";
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
        return array (  89 => 18,  86 => 13,  83 => 12,  76 => 11,  67 => 7,  61 => 5,  58 => 4,  51 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-main') %}

{% block nonCriticalStyles %}
    {% if data.hasCookies %}
        {{ parent() }}
    {% else %}
        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.util.css') }}\">
    {% endif %}
{% endblock %}

{% block styleLazyLoader %}
    {% if not data.hasCookies %}
        {% include molecule('style-loader') with {
            attributes: {
                'path-to-css': publicPath('css/yves_default.non-critical.css'),
            },
        } only %}
    {% endif %}
{% endblock %}
", "@ShopUi/templates/page-critical-path/page-critical-path.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-critical-path/page-critical-path.twig");
    }
}
