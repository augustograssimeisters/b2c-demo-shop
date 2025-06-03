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

/* @ContentNavigationWidget/views/navigation-footer/navigation-footer.twig */
class __TwigTemplate_ad0d762254c11b09dcc2555987d9bfd5 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["navigation" =>         // line 4
(isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 4, $this->source); })())], $context['data']);        // line 1
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
        yield "    ";
        $context["hasIcons"] = false;
        // line 9
        yield "    ";
        $context["title"] = "";
        // line 10
        yield "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "navigation", [], "any", false, false, false, 11), "nodes", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 12
            yield "        ";
            $context["nodeType"] = CoreExtension::getAttribute($this->env, $this->source, $context["node"], "nodeType", [], "any", false, false, false, 12);
            // line 13
            yield "
        ";
            // line 14
            if (((isset($context["nodeType"]) || array_key_exists("nodeType", $context) ? $context["nodeType"] : (function () { throw new RuntimeError('Variable "nodeType" does not exist.', 14, $this->source); })()) == "category")) {
                // line 15
                yield "            ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navigation.menu.categories");
                // line 16
                yield "        ";
            }
            // line 17
            yield "
        ";
            // line 18
            if (((isset($context["nodeType"]) || array_key_exists("nodeType", $context) ? $context["nodeType"] : (function () { throw new RuntimeError('Variable "nodeType" does not exist.', 18, $this->source); })()) == "cms_page")) {
                // line 19
                yield "            ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.company");
                // line 20
                yield "        ";
            }
            // line 21
            yield "
        ";
            // line 22
            if (((isset($context["nodeType"]) || array_key_exists("nodeType", $context) ? $context["nodeType"] : (function () { throw new RuntimeError('Variable "nodeType" does not exist.', 22, $this->source); })()) == "external_url")) {
                // line 23
                yield "            ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.social");
                // line 24
                yield "        ";
            }
            // line 25
            yield "
        ";
            // line 26
            if (((isset($context["nodeType"]) || array_key_exists("nodeType", $context) ? $context["nodeType"] : (function () { throw new RuntimeError('Variable "nodeType" does not exist.', 26, $this->source); })()) == "label")) {
                // line 27
                yield "            ";
                $context["hasIcons"] = true;
                // line 28
                yield "            ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.partners");
                // line 29
                yield "        ";
            }
            // line 30
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['node'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
    ";
        // line 32
        $context["triggerClass"] = ("js-navigation-footer__trigger--" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 32, $this->source); })())), [" " => "-"]));
        // line 33
        yield "    ";
        $context["targetClass"] = ("js-navigation-footer__target--" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 33, $this->source); })())), [" " => "-"]));
        // line 34
        yield "    ";
        $context["itemClass"] = "navigation-footer__col";
        // line 35
        yield "    ";
        $context["itemContentHiddenClass"] = "is-hidden-sm-only";
        // line 36
        yield "
    ";
        // line 37
        yield from         $this->loadTemplate("@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", 37, "1179897336")->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["mobile"], "class" =>         // line 39
(isset($context["itemClass"]) || array_key_exists("itemClass", $context) ? $context["itemClass"] : (function () { throw new RuntimeError('Variable "itemClass" does not exist.', 39, $this->source); })()), "data" => ["title" =>         // line 41
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 41, $this->source); })()), "triggerClass" =>         // line 42
(isset($context["triggerClass"]) || array_key_exists("triggerClass", $context) ? $context["triggerClass"] : (function () { throw new RuntimeError('Variable "triggerClass" does not exist.', 42, $this->source); })()), "targetClass" =>         // line 43
(isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 43, $this->source); })()), "hiddenClass" =>         // line 44
(isset($context["itemContentHiddenClass"]) || array_key_exists("itemContentHiddenClass", $context) ? $context["itemContentHiddenClass"] : (function () { throw new RuntimeError('Variable "itemContentHiddenClass" does not exist.', 44, $this->source); })())], "embed" => ["nodes" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 47
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "navigation", [], "any", false, false, false, 47), "nodes", [], "any", false, false, false, 47), "hasIcons" =>         // line 48
(isset($context["hasIcons"]) || array_key_exists("hasIcons", $context) ? $context["hasIcons"] : (function () { throw new RuntimeError('Variable "hasIcons" does not exist.', 48, $this->source); })())]]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig";
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
        return array (  153 => 48,  152 => 47,  151 => 44,  150 => 43,  149 => 42,  148 => 41,  147 => 39,  146 => 37,  143 => 36,  140 => 35,  137 => 34,  134 => 33,  132 => 32,  129 => 31,  123 => 30,  120 => 29,  117 => 28,  114 => 27,  112 => 26,  109 => 25,  106 => 24,  103 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  79 => 14,  76 => 13,  73 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  53 => 7,  49 => 1,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    navigation: navigation,
} %}

{% block body %}
    {% set hasIcons = false %}
    {% set title = '' %}

    {% for node in data.navigation.nodes %}
        {% set nodeType = node.nodeType %}

        {% if nodeType == 'category' %}
            {% set title = 'navigation.menu.categories' | trans %}
        {% endif %}

        {% if nodeType == 'cms_page' %}
            {% set title = 'global.company' | trans %}
        {% endif %}

        {% if nodeType == 'external_url' %}
            {% set title = 'global.social' | trans %}
        {% endif %}

        {% if nodeType == 'label' %}
            {% set hasIcons = true %}
            {% set title = 'global.partners' | trans %}
        {% endif %}
    {% endfor %}

    {% set triggerClass = 'js-navigation-footer__trigger--' ~ title | lower | replace({' ': '-'}) %}
    {% set targetClass = 'js-navigation-footer__target--' ~ title | lower | replace({' ': '-'}) %}
    {% set itemClass = 'navigation-footer__col' %}
    {% set itemContentHiddenClass = 'is-hidden-sm-only' %}

    {% embed molecule('toggler-item') with {
        modifiers: ['mobile'],
        class: itemClass,
        data: {
            title: title,
            triggerClass: triggerClass,
            targetClass: targetClass,
            hiddenClass: itemContentHiddenClass,
        },
        embed: {
            nodes: data.navigation.nodes,
            hasIcons: hasIcons,
        },
    } only %}
        {% block contentText %}
            {% if not embed.hasIcons %}
                {% include molecule('navigation-list') with {
                    modifiers: ['footer'],
                    data: {
                        nodes: embed.nodes,
                    },
                } only %}
            {% endif %}

            {% if embed.hasIcons %}
                {% embed molecule('navigation-icon-list') with {
                    data: {
                        nodes: embed.nodes,
                    },
                } only %}
                    {% block body %}
                        {% set menuClass = 'menu' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", "/data/src/Pyz/Yves/ContentNavigationWidget/Theme/default/views/navigation-footer/navigation-footer.twig");
    }
}


/* @ContentNavigationWidget/views/navigation-footer/navigation-footer.twig */
class __TwigTemplate_ad0d762254c11b09dcc2555987d9bfd5___1179897336 extends Template
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
            'contentText' => [$this, 'block_contentText'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 37
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-item"), "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", 37);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contentText(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "            ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 52, $this->source); })()), "hasIcons", [], "any", false, false, false, 52)) {
            // line 53
            yield "                ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-list"), "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", 53)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["footer"], "data" => ["nodes" => CoreExtension::getAttribute($this->env, $this->source,             // line 56
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 56, $this->source); })()), "nodes", [], "any", false, false, false, 56)]]));
            // line 59
            yield "            ";
        }
        // line 60
        yield "
            ";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 61, $this->source); })()), "hasIcons", [], "any", false, false, false, 61)) {
            // line 62
            yield "                ";
            yield from             $this->loadTemplate("@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", 62, "1529703354")->unwrap()->yield(CoreExtension::toArray(["data" => ["nodes" => CoreExtension::getAttribute($this->env, $this->source,             // line 64
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 64, $this->source); })()), "nodes", [], "any", false, false, false, 64)]]));
            // line 73
            yield "            ";
        }
        // line 74
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig";
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
        return array (  326 => 74,  323 => 73,  321 => 64,  319 => 62,  317 => 61,  314 => 60,  311 => 59,  309 => 56,  307 => 53,  304 => 52,  297 => 51,  287 => 37,  153 => 48,  152 => 47,  151 => 44,  150 => 43,  149 => 42,  148 => 41,  147 => 39,  146 => 37,  143 => 36,  140 => 35,  137 => 34,  134 => 33,  132 => 32,  129 => 31,  123 => 30,  120 => 29,  117 => 28,  114 => 27,  112 => 26,  109 => 25,  106 => 24,  103 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  79 => 14,  76 => 13,  73 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  53 => 7,  49 => 1,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    navigation: navigation,
} %}

{% block body %}
    {% set hasIcons = false %}
    {% set title = '' %}

    {% for node in data.navigation.nodes %}
        {% set nodeType = node.nodeType %}

        {% if nodeType == 'category' %}
            {% set title = 'navigation.menu.categories' | trans %}
        {% endif %}

        {% if nodeType == 'cms_page' %}
            {% set title = 'global.company' | trans %}
        {% endif %}

        {% if nodeType == 'external_url' %}
            {% set title = 'global.social' | trans %}
        {% endif %}

        {% if nodeType == 'label' %}
            {% set hasIcons = true %}
            {% set title = 'global.partners' | trans %}
        {% endif %}
    {% endfor %}

    {% set triggerClass = 'js-navigation-footer__trigger--' ~ title | lower | replace({' ': '-'}) %}
    {% set targetClass = 'js-navigation-footer__target--' ~ title | lower | replace({' ': '-'}) %}
    {% set itemClass = 'navigation-footer__col' %}
    {% set itemContentHiddenClass = 'is-hidden-sm-only' %}

    {% embed molecule('toggler-item') with {
        modifiers: ['mobile'],
        class: itemClass,
        data: {
            title: title,
            triggerClass: triggerClass,
            targetClass: targetClass,
            hiddenClass: itemContentHiddenClass,
        },
        embed: {
            nodes: data.navigation.nodes,
            hasIcons: hasIcons,
        },
    } only %}
        {% block contentText %}
            {% if not embed.hasIcons %}
                {% include molecule('navigation-list') with {
                    modifiers: ['footer'],
                    data: {
                        nodes: embed.nodes,
                    },
                } only %}
            {% endif %}

            {% if embed.hasIcons %}
                {% embed molecule('navigation-icon-list') with {
                    data: {
                        nodes: embed.nodes,
                    },
                } only %}
                    {% block body %}
                        {% set menuClass = 'menu' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", "/data/src/Pyz/Yves/ContentNavigationWidget/Theme/default/views/navigation-footer/navigation-footer.twig");
    }
}


/* @ContentNavigationWidget/views/navigation-footer/navigation-footer.twig */
class __TwigTemplate_ad0d762254c11b09dcc2555987d9bfd5___1529703354 extends Template
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
        // line 62
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-icon-list"), "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", 62);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "                        ";
        $context["menuClass"] = "menu";
        // line 69
        yield "
                        ";
        // line 70
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig";
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
        return array (  483 => 70,  480 => 69,  477 => 68,  470 => 67,  460 => 62,  326 => 74,  323 => 73,  321 => 64,  319 => 62,  317 => 61,  314 => 60,  311 => 59,  309 => 56,  307 => 53,  304 => 52,  297 => 51,  287 => 37,  153 => 48,  152 => 47,  151 => 44,  150 => 43,  149 => 42,  148 => 41,  147 => 39,  146 => 37,  143 => 36,  140 => 35,  137 => 34,  134 => 33,  132 => 32,  129 => 31,  123 => 30,  120 => 29,  117 => 28,  114 => 27,  112 => 26,  109 => 25,  106 => 24,  103 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  79 => 14,  76 => 13,  73 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  53 => 7,  49 => 1,  48 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    navigation: navigation,
} %}

{% block body %}
    {% set hasIcons = false %}
    {% set title = '' %}

    {% for node in data.navigation.nodes %}
        {% set nodeType = node.nodeType %}

        {% if nodeType == 'category' %}
            {% set title = 'navigation.menu.categories' | trans %}
        {% endif %}

        {% if nodeType == 'cms_page' %}
            {% set title = 'global.company' | trans %}
        {% endif %}

        {% if nodeType == 'external_url' %}
            {% set title = 'global.social' | trans %}
        {% endif %}

        {% if nodeType == 'label' %}
            {% set hasIcons = true %}
            {% set title = 'global.partners' | trans %}
        {% endif %}
    {% endfor %}

    {% set triggerClass = 'js-navigation-footer__trigger--' ~ title | lower | replace({' ': '-'}) %}
    {% set targetClass = 'js-navigation-footer__target--' ~ title | lower | replace({' ': '-'}) %}
    {% set itemClass = 'navigation-footer__col' %}
    {% set itemContentHiddenClass = 'is-hidden-sm-only' %}

    {% embed molecule('toggler-item') with {
        modifiers: ['mobile'],
        class: itemClass,
        data: {
            title: title,
            triggerClass: triggerClass,
            targetClass: targetClass,
            hiddenClass: itemContentHiddenClass,
        },
        embed: {
            nodes: data.navigation.nodes,
            hasIcons: hasIcons,
        },
    } only %}
        {% block contentText %}
            {% if not embed.hasIcons %}
                {% include molecule('navigation-list') with {
                    modifiers: ['footer'],
                    data: {
                        nodes: embed.nodes,
                    },
                } only %}
            {% endif %}

            {% if embed.hasIcons %}
                {% embed molecule('navigation-icon-list') with {
                    data: {
                        nodes: embed.nodes,
                    },
                } only %}
                    {% block body %}
                        {% set menuClass = 'menu' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", "/data/src/Pyz/Yves/ContentNavigationWidget/Theme/default/views/navigation-footer/navigation-footer.twig");
    }
}
