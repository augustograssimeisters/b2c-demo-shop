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

/* @HomePage/views/home/home.twig */
class __TwigTemplate_7b4a33ee773ab4998293e2bb74e241d0 extends Template
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
            'pageInfo' => [$this, 'block_pageInfo'],
            'container' => [$this, 'block_container'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("page-layout-main"), "@HomePage/views/home/home.twig", 1);
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
    public function block_pageInfo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from         $this->loadTemplate("@HomePage/views/home/home.twig", "@HomePage/views/home/home.twig", 6, "934545026")->unwrap()->yield([]);
        // line 19
        yield "

    <div class=\"container container--home-page\">
        <main>
            ";
        // line 23
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 28
        yield "        </main>
    </div>
";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "
                ";
        // line 25
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-3')->setCmsSlotTemplatePath('@HomePage/views/home/home.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 26
        yield "
            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@HomePage/views/home/home.twig";
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
        return array (  98 => 26,  97 => 25,  94 => 24,  87 => 23,  80 => 28,  78 => 23,  72 => 19,  69 => 6,  62 => 5,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-main') %}

{% block pageInfo %}{% endblock %}

{% block container %}
    {% embed organism('jumbotron-slider') only %}
        {% block body %}
            {% embed molecule('slick-carousel') with {
                attributes: {
                    'data-json': attributes['data-json'],
                },
            } only %}
                {% block slides %}
                    {% cms_slot 'slt-2' %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}


    <div class=\"container container--home-page\">
        <main>
            {% block content %}

                {% cms_slot 'slt-3' %}

            {% endblock %}
        </main>
    </div>
{% endblock %}
", "@HomePage/views/home/home.twig", "/data/src/Pyz/Yves/HomePage/Theme/default/views/home/home.twig");
    }
}


/* @HomePage/views/home/home.twig */
class __TwigTemplate_7b4a33ee773ab4998293e2bb74e241d0___934545026 extends Template
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
        // line 6
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("jumbotron-slider"), "@HomePage/views/home/home.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield "            ";
        yield from         $this->loadTemplate("@HomePage/views/home/home.twig", "@HomePage/views/home/home.twig", 8, "2010779844")->unwrap()->yield(CoreExtension::toArray(["attributes" => ["data-json" => CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 10, $this->source); })()), "data-json", [], "array", false, false, false, 10)]]));
        // line 17
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@HomePage/views/home/home.twig";
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
        return array (  208 => 17,  206 => 10,  204 => 8,  197 => 7,  187 => 6,  98 => 26,  97 => 25,  94 => 24,  87 => 23,  80 => 28,  78 => 23,  72 => 19,  69 => 6,  62 => 5,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-main') %}

{% block pageInfo %}{% endblock %}

{% block container %}
    {% embed organism('jumbotron-slider') only %}
        {% block body %}
            {% embed molecule('slick-carousel') with {
                attributes: {
                    'data-json': attributes['data-json'],
                },
            } only %}
                {% block slides %}
                    {% cms_slot 'slt-2' %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}


    <div class=\"container container--home-page\">
        <main>
            {% block content %}

                {% cms_slot 'slt-3' %}

            {% endblock %}
        </main>
    </div>
{% endblock %}
", "@HomePage/views/home/home.twig", "/data/src/Pyz/Yves/HomePage/Theme/default/views/home/home.twig");
    }
}


/* @HomePage/views/home/home.twig */
class __TwigTemplate_7b4a33ee773ab4998293e2bb74e241d0___2010779844 extends Template
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
            'slides' => [$this, 'block_slides'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("slick-carousel"), "@HomePage/views/home/home.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_slides(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "                    ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-2')->setCmsSlotTemplatePath('@HomePage/views/home/home.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 15
        yield "                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@HomePage/views/home/home.twig";
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
        return array (  315 => 15,  313 => 14,  306 => 13,  296 => 8,  208 => 17,  206 => 10,  204 => 8,  197 => 7,  187 => 6,  98 => 26,  97 => 25,  94 => 24,  87 => 23,  80 => 28,  78 => 23,  72 => 19,  69 => 6,  62 => 5,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('page-layout-main') %}

{% block pageInfo %}{% endblock %}

{% block container %}
    {% embed organism('jumbotron-slider') only %}
        {% block body %}
            {% embed molecule('slick-carousel') with {
                attributes: {
                    'data-json': attributes['data-json'],
                },
            } only %}
                {% block slides %}
                    {% cms_slot 'slt-2' %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}


    <div class=\"container container--home-page\">
        <main>
            {% block content %}

                {% cms_slot 'slt-3' %}

            {% endblock %}
        </main>
    </div>
{% endblock %}
", "@HomePage/views/home/home.twig", "/data/src/Pyz/Yves/HomePage/Theme/default/views/home/home.twig");
    }
}
