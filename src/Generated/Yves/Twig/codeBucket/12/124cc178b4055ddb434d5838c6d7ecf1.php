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

/* @ContentNavigationWidget/components/molecules/navigation-header-mobile/navigation-header-mobile.twig */
class __TwigTemplate_ffa591030c89ae617f84b6822faa010f extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ContentNavigationWidget/components/molecules/navigation-header-mobile/navigation-header-mobile.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-header-mobile", "tag" => "ul"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["nodes" => []], $context['data']);        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "nodes", [], "any", false, false, false, 13));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 14
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-multilevel-node"), "@ContentNavigationWidget/components/molecules/navigation-header-mobile/navigation-header-mobile.twig", 14)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["side-drawer"], "data" => ["node" =>             // line 17
$context["node"], "itemId" => CoreExtension::getAttribute($this->env, $this->source,             // line 18
$context["loop"], "index", [], "any", false, false, false, 18)]]));
            // line 21
            yield "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
    ";
        // line 23
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-accordion"), "@ContentNavigationWidget/components/molecules/navigation-header-mobile/navigation-header-mobile.twig", 23)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["trigger-class-name" => "js-navigation-multilevel-node__trigger", "class-to-toggle" => "navigation-multilevel-node__menu--hidden", "active-class" => "navigation-multilevel-node__icon--active"]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContentNavigationWidget/components/molecules/navigation-header-mobile/navigation-header-mobile.twig";
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
        return array (  100 => 23,  97 => 22,  83 => 21,  81 => 18,  80 => 17,  78 => 14,  60 => 13,  53 => 12,  49 => 1,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-header-mobile',
    tag: 'ul',
} %}

{% define data = {
    nodes: [],
} %}

{% block body %}
    {% for node in data.nodes %}
        {% include molecule('navigation-multilevel-node') with {
            modifiers: ['side-drawer'],
            data: {
                node: node,
                itemId: loop.index,
            },
        } only %}
    {% endfor %}

    {% include molecule('toggler-accordion') with {
        attributes: {
            'trigger-class-name': 'js-navigation-multilevel-node__trigger',
            'class-to-toggle': 'navigation-multilevel-node__menu--hidden',
            'active-class': 'navigation-multilevel-node__icon--active',
        },
    } only %}
{% endblock %}
", "@ContentNavigationWidget/components/molecules/navigation-header-mobile/navigation-header-mobile.twig", "/data/src/Pyz/Yves/ContentNavigationWidget/Theme/default/components/molecules/navigation-header-mobile/navigation-header-mobile.twig");
    }
}
