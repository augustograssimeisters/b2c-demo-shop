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

/* @ShopUi/components/molecules/navigation-footer/navigation-footer.twig */
class __TwigTemplate_259bcc9ed322a0b4a0d970020951a589 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/navigation-footer/navigation-footer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-footer", "tag" => "navigation-footer"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["items" => []], $context['data']);        // line 1
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
        yield "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "items", [], "any", false, false, false, 14));
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
        foreach ($context['_seq'] as $context["_key"] => $context["itemNavigation"]) {
            // line 15
            yield "
        ";
            // line 16
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["itemNavigation"], "isShow", [], "any", true, true, false, 16)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["itemNavigation"], "isShow", [], "any", false, false, false, 16)) : (true))) {
                // line 17
                yield "            ";
                yield from                 $this->loadTemplate("@ShopUi/components/molecules/navigation-footer/navigation-footer.twig", "@ShopUi/components/molecules/navigation-footer/navigation-footer.twig", 17, "521205213")->unwrap()->yield(CoreExtension::toArray(["modifiers" => Twig\Extension\CoreExtension::merge(["mobile"], ((CoreExtension::getAttribute($this->env, $this->source,                 // line 18
$context["itemNavigation"], "modifiers", [], "any", true, true, false, 18)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["itemNavigation"], "modifiers", [], "any", false, false, false, 18)) : ([]))), "class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 19
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19) . "__col ") . ((CoreExtension::getAttribute($this->env, $this->source, $context["itemNavigation"], "class", [], "any", true, true, false, 19)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["itemNavigation"], "class", [], "any", false, false, false, 19)) : (""))), "data" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source,                 // line 21
$context["itemNavigation"], "title", [], "any", false, false, false, 21)), "triggerClass" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 22
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "jsName", [], "any", false, false, false, 22) . "__trigger"), "targetClass" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 23
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "jsName", [], "any", false, false, false, 23) . "__target--") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23)), "isTogglerIncluded" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 24
$context["loop"], "first", [], "any", false, false, false, 24)) ? (true) : (false)), "hiddenClass" => "is-hidden-sm-only"], "embed" => ["itemNavigation" =>                 // line 28
$context["itemNavigation"]]]));
                // line 47
                yield "        ";
            }
            // line 48
            yield "
    ";
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
        unset($context['_seq'], $context['_key'], $context['itemNavigation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/navigation-footer/navigation-footer.twig";
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
        return array (  98 => 48,  95 => 47,  93 => 28,  92 => 24,  91 => 23,  90 => 22,  89 => 21,  88 => 19,  87 => 18,  85 => 17,  83 => 16,  80 => 15,  63 => 14,  60 => 13,  53 => 12,  49 => 1,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-footer',
    tag: 'navigation-footer'
} %}

{% define data = {
    items: []
} %}

{% block body %}

    {% for itemNavigation in data.items %}

        {% if itemNavigation.isShow is defined ? itemNavigation.isShow : true %}
            {% embed molecule('toggler-item') with {
                modifiers: ['mobile'] | merge(itemNavigation.modifiers is defined ? itemNavigation.modifiers : []),
                class: config.name ~ '__col ' ~ (itemNavigation.class is defined ? itemNavigation.class : ''),
                data: {
                    title: itemNavigation.title | trans,
                    triggerClass: config.jsName ~ '__trigger',
                    targetClass: config.jsName ~ '__target--' ~ loop.index,
                    isTogglerIncluded: loop.first ? true : false,
                    hiddenClass: 'is-hidden-sm-only'
                },
                embed: {
                    itemNavigation: itemNavigation,
                }
            } only %}
                {% block contentText %}
                    {% for itemMenu in embed.itemNavigation.templates %}
                        {% widget 'NavigationWidget' args [itemMenu.menu, itemMenu.template] %}
                            {% block body %}
                                {% if itemMenu.wrapClass is defined %}
                                    <div class=\"{{ itemMenu.wrapClass }}\">
                                        {{ parent() }}
                                    </div>
                                {% else %}
                                    {{ parent() }}
                                {% endif %}
                            {% endblock %}
                        {% endwidget %}
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        {% endif %}

    {% endfor %}
{% endblock %}
", "@ShopUi/components/molecules/navigation-footer/navigation-footer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-footer/navigation-footer.twig");
    }
}


/* @ShopUi/components/molecules/navigation-footer/navigation-footer.twig */
class __TwigTemplate_259bcc9ed322a0b4a0d970020951a589___521205213 extends Template
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
        // line 17
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-item"), "@ShopUi/components/molecules/navigation-footer/navigation-footer.twig", 17);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contentText(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 32, $this->source); })()), "itemNavigation", [], "any", false, false, false, 32), "templates", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["itemMenu"]) {
            // line 33
            yield "                        ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("NavigationWidget", [CoreExtension::getAttribute($this->env, $this->source, $context["itemMenu"], "menu", [], "any", false, false, false, 33), CoreExtension::getAttribute($this->env, $this->source, $context["itemMenu"], "template", [], "any", false, false, false, 33)])) {
                $this->loadTemplate("@ShopUi/components/molecules/navigation-footer/navigation-footer.twig", "@ShopUi/components/molecules/navigation-footer/navigation-footer.twig", 33, 604915135)->display(array_merge($context, array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget))));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 44
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['itemMenu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/navigation-footer/navigation-footer.twig";
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
        return array (  252 => 45,  246 => 44,  241 => 33,  236 => 32,  229 => 31,  219 => 17,  98 => 48,  95 => 47,  93 => 28,  92 => 24,  91 => 23,  90 => 22,  89 => 21,  88 => 19,  87 => 18,  85 => 17,  83 => 16,  80 => 15,  63 => 14,  60 => 13,  53 => 12,  49 => 1,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-footer',
    tag: 'navigation-footer'
} %}

{% define data = {
    items: []
} %}

{% block body %}

    {% for itemNavigation in data.items %}

        {% if itemNavigation.isShow is defined ? itemNavigation.isShow : true %}
            {% embed molecule('toggler-item') with {
                modifiers: ['mobile'] | merge(itemNavigation.modifiers is defined ? itemNavigation.modifiers : []),
                class: config.name ~ '__col ' ~ (itemNavigation.class is defined ? itemNavigation.class : ''),
                data: {
                    title: itemNavigation.title | trans,
                    triggerClass: config.jsName ~ '__trigger',
                    targetClass: config.jsName ~ '__target--' ~ loop.index,
                    isTogglerIncluded: loop.first ? true : false,
                    hiddenClass: 'is-hidden-sm-only'
                },
                embed: {
                    itemNavigation: itemNavigation,
                }
            } only %}
                {% block contentText %}
                    {% for itemMenu in embed.itemNavigation.templates %}
                        {% widget 'NavigationWidget' args [itemMenu.menu, itemMenu.template] %}
                            {% block body %}
                                {% if itemMenu.wrapClass is defined %}
                                    <div class=\"{{ itemMenu.wrapClass }}\">
                                        {{ parent() }}
                                    </div>
                                {% else %}
                                    {{ parent() }}
                                {% endif %}
                            {% endblock %}
                        {% endwidget %}
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        {% endif %}

    {% endfor %}
{% endblock %}
", "@ShopUi/components/molecules/navigation-footer/navigation-footer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-footer/navigation-footer.twig");
    }
}


/* @ShopUi/components/molecules/navigation-footer/navigation-footer.twig */
class __TwigTemplate_259bcc9ed322a0b4a0d970020951a589___604915135 extends Template
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
        // line 33
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 33, $this->source); })()), "@ShopUi/components/molecules/navigation-footer/navigation-footer.twig", 33);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["itemMenu"] ?? null), "wrapClass", [], "any", true, true, false, 35)) {
            // line 36
            yield "                                    <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["itemMenu"]) || array_key_exists("itemMenu", $context) ? $context["itemMenu"] : (function () { throw new RuntimeError('Variable "itemMenu" does not exist.', 36, $this->source); })()), "wrapClass", [], "any", false, false, false, 36), "html", null, true);
            yield "\">
                                        ";
            // line 37
            yield from $this->yieldParentBlock("body", $context, $blocks);
            yield "
                                    </div>
                                ";
        } else {
            // line 40
            yield "                                    ";
            yield from $this->yieldParentBlock("body", $context, $blocks);
            yield "
                                ";
        }
        // line 42
        yield "                            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/molecules/navigation-footer/navigation-footer.twig";
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
        return array (  397 => 42,  391 => 40,  385 => 37,  380 => 36,  377 => 35,  370 => 34,  360 => 33,  252 => 45,  246 => 44,  241 => 33,  236 => 32,  229 => 31,  219 => 17,  98 => 48,  95 => 47,  93 => 28,  92 => 24,  91 => 23,  90 => 22,  89 => 21,  88 => 19,  87 => 18,  85 => 17,  83 => 16,  80 => 15,  63 => 14,  60 => 13,  53 => 12,  49 => 1,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-footer',
    tag: 'navigation-footer'
} %}

{% define data = {
    items: []
} %}

{% block body %}

    {% for itemNavigation in data.items %}

        {% if itemNavigation.isShow is defined ? itemNavigation.isShow : true %}
            {% embed molecule('toggler-item') with {
                modifiers: ['mobile'] | merge(itemNavigation.modifiers is defined ? itemNavigation.modifiers : []),
                class: config.name ~ '__col ' ~ (itemNavigation.class is defined ? itemNavigation.class : ''),
                data: {
                    title: itemNavigation.title | trans,
                    triggerClass: config.jsName ~ '__trigger',
                    targetClass: config.jsName ~ '__target--' ~ loop.index,
                    isTogglerIncluded: loop.first ? true : false,
                    hiddenClass: 'is-hidden-sm-only'
                },
                embed: {
                    itemNavigation: itemNavigation,
                }
            } only %}
                {% block contentText %}
                    {% for itemMenu in embed.itemNavigation.templates %}
                        {% widget 'NavigationWidget' args [itemMenu.menu, itemMenu.template] %}
                            {% block body %}
                                {% if itemMenu.wrapClass is defined %}
                                    <div class=\"{{ itemMenu.wrapClass }}\">
                                        {{ parent() }}
                                    </div>
                                {% else %}
                                    {{ parent() }}
                                {% endif %}
                            {% endblock %}
                        {% endwidget %}
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        {% endif %}

    {% endfor %}
{% endblock %}
", "@ShopUi/components/molecules/navigation-footer/navigation-footer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-footer/navigation-footer.twig");
    }
}
