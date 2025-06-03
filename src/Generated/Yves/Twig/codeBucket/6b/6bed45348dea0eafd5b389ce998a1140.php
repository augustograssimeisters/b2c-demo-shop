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

/* @ShopUi/components/organisms/footer/footer.twig */
class __TwigTemplate_6e406308da5776494678844a0bbdf1fd extends Template
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
            'footerNavigation' => [$this, 'block_footerNavigation'],
            'copyright' => [$this, 'block_copyright'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/organisms/footer/footer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "footer", "tag" => "footer"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["showNavigation" => true], $context['data']);        // line 1
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
        yield "    <div class=\"container\">
        <div class=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        yield "__top\">
            ";
        // line 15
        yield from         $this->loadTemplate("@ShopUi/components/organisms/footer/footer.twig", "@ShopUi/components/organisms/footer/footer.twig", 15, "1612142089")->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["mobile"], "class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17) . "__subscription"), "data" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.newsletter"), "triggerClass" => (CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "jsName", [], "any", false, false, false, 20) . "__trigger-subscription"), "targetClass" => (CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "jsName", [], "any", false, false, false, 21) . "__target-subscription"), "hiddenClass" => "is-hidden-sm-only"], "embed" => ["footerName" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25)]]));
        // line 37
        yield "
            ";
        // line 38
        yield from $this->unwrap()->yieldBlock('footerNavigation', $context, $blocks);
        // line 91
        yield "        </div>

        <div class=\"grid grid--middle ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93), "html", null, true);
        yield "__bottom\">

            <div class=\"col ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 95, $this->source); })()), "name", [], "any", false, false, false, 95), "html", null, true);
        yield "__logo-section\">

                <div class=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), "html", null, true);
        yield "__logo-copy\">
                    <span class=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98), "html", null, true);
        yield "__logo-copy-text\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.logo.text"), "html", null, true);
        // line 100
        yield "</span>

                    ";
        // line 102
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("footer-logo"), "@ShopUi/components/organisms/footer/footer.twig", 102)->unwrap()->yield([]);
        // line 103
        yield "
                    ";
        // line 104
        yield from $this->unwrap()->yieldBlock('copyright', $context, $blocks);
        // line 105
        yield "                </div>

                <div class=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 107, $this->source); })()), "name", [], "any", false, false, false, 107), "html", null, true);
        yield "__logo-copy-links\">
                    <a
                        href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.logo.link.privacy"), "html", null, true);
        yield "\"
                        target=\"_blank\"
                        class=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 111, $this->source); })()), "name", [], "any", false, false, false, 111), "html", null, true);
        yield "__logo-copy-link\"
                    >";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy.title"), "html", null, true);
        // line 114
        yield "</a>

                    <a
                        href=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.logo.link.imprint"), "html", null, true);
        yield "\"
                        target=\"_blank\"
                        class=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 119, $this->source); })()), "name", [], "any", false, false, false, 119), "html", null, true);
        yield "__logo-copy-link\"
                    >";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.imprint.title"), "html", null, true);
        // line 122
        yield "</a>
                </div>
            </div>
        </div>

    </div>
";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footerNavigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "                ";
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-footer"), "@ShopUi/components/organisms/footer/footer.twig", 39)->unwrap()->yield(CoreExtension::toArray(["class" => (CoreExtension::getAttribute($this->env, $this->source,         // line 40
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40) . "__navigation"), "data" => ["items" => [["title" => "global.categories", "isShow" => CoreExtension::getAttribute($this->env, $this->source,         // line 45
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "showNavigation", [], "any", false, false, false, 45), "templates" => [["template" => "navigation-footer", "menu" => "FOOTER_NAVIGATION_CATEGORIES"]]], ["title" => "global.company", "templates" => [["template" => "navigation-footer", "menu" => "FOOTER_NAVIGATION"]]], ["title" => "global.social", "templates" => [["template" => "navigation-footer", "menu" => "SOCIAL_LINKS"]]], ["class" => "is-hidden-md-xl", "modifiers" => ["flex"], "title" => "footer.providers__title", "templates" => [["template" => "navigation-providers-shipment", "menu" => "SHIPMENT_PROVIDERS", "wrapClass" => "spacing-right spacing-right--big"], ["template" => "navigation-providers-payment", "menu" => "PAYMENT_PROVIDERS"]]]]]]));
        // line 90
        yield "            ";
        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_copyright(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/organisms/footer/footer.twig";
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
        return array (  178 => 104,  173 => 90,  171 => 45,  170 => 40,  168 => 39,  161 => 38,  150 => 122,  148 => 121,  144 => 119,  139 => 117,  134 => 114,  132 => 113,  128 => 111,  123 => 109,  118 => 107,  114 => 105,  112 => 104,  109 => 103,  107 => 102,  103 => 100,  101 => 99,  98 => 98,  94 => 97,  89 => 95,  84 => 93,  80 => 91,  78 => 38,  75 => 37,  73 => 25,  72 => 21,  71 => 20,  70 => 17,  69 => 15,  65 => 14,  62 => 13,  55 => 12,  51 => 1,  50 => 8,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'footer',
    tag: 'footer'
} %}

{% define data = {
    showNavigation: true
} %}

{% block body %}
    <div class=\"container\">
        <div class=\"{{ config.name }}__top\">
            {% embed molecule('toggler-item') with {
                modifiers: ['mobile'],
                class: config.name ~ '__subscription',
                data: {
                    title: 'global.newsletter' | trans,
                    triggerClass: config.jsName ~ '__trigger-subscription',
                    targetClass: config.jsName ~ '__target-subscription',
                    hiddenClass: 'is-hidden-sm-only',
                },
                embed: {
                   footerName : config.name,
                },
            } only %}
                {% block contentText %}
                    <span class=\"{{ embed.footerName }}__subscription-text\">
                        {{- 'footer_subscribe.subscription_text' | trans -}}
                    </span>
                    <div class=\"spacing-bottom spacing-bottom--big\">
                        {{- render(path('newsletter/subscribe')) -}}
                    </div>
                {% endblock %}
            {% endembed %}

            {% block footerNavigation %}
                {% include molecule('navigation-footer') with {
                    class: config.name ~ '__navigation',
                    data: {
                        items: [
                            {
                                title: 'global.categories',
                                isShow: data.showNavigation,
                                templates: [
                                    {
                                        template: 'navigation-footer',
                                        menu: 'FOOTER_NAVIGATION_CATEGORIES'
                                    }
                                ]
                            },
                            {
                                title: 'global.company',
                                templates: [
                                    {
                                        template: 'navigation-footer',
                                        menu: 'FOOTER_NAVIGATION'
                                    }
                                ]
                            },
                            {
                                title: 'global.social',
                                templates: [
                                    {
                                        template: 'navigation-footer',
                                        menu: 'SOCIAL_LINKS'
                                    }
                                ]
                            },
                            {
                                class: 'is-hidden-md-xl',
                                modifiers: ['flex'],
                                title: 'footer.providers__title',
                                templates: [
                                    {
                                        template: 'navigation-providers-shipment',
                                        menu: 'SHIPMENT_PROVIDERS',
                                        wrapClass: 'spacing-right spacing-right--big',
                                    },
                                    {
                                        template: 'navigation-providers-payment',
                                        menu: 'PAYMENT_PROVIDERS'
                                    }
                                ]
                            }
                        ]
                    }
                } only %}
            {% endblock %}
        </div>

        <div class=\"grid grid--middle {{ config.name }}__bottom\">

            <div class=\"col {{ config.name }}__logo-section\">

                <div class=\"{{ config.name }}__logo-copy\">
                    <span class=\"{{ config.name }}__logo-copy-text\">
                        {{- 'footer.logo.text' | trans -}}
                    </span>

                    {% include molecule('footer-logo') only %}

                    {% block copyright %}{% endblock %}
                </div>

                <div class=\"{{ config.name }}__logo-copy-links\">
                    <a
                        href=\"{{ 'footer.logo.link.privacy' | trans }}\"
                        target=\"_blank\"
                        class=\"{{ config.name }}__logo-copy-link\"
                    >
                        {{- 'page.privacy.title' | trans -}}
                    </a>

                    <a
                        href=\"{{ 'footer.logo.link.imprint' | trans }}\"
                        target=\"_blank\"
                        class=\"{{ config.name }}__logo-copy-link\"
                    >
                        {{- 'page.imprint.title' | trans -}}
                    </a>
                </div>
            </div>
        </div>

    </div>
{% endblock %}
", "@ShopUi/components/organisms/footer/footer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/footer/footer.twig");
    }
}


/* @ShopUi/components/organisms/footer/footer.twig */
class __TwigTemplate_6e406308da5776494678844a0bbdf1fd___1612142089 extends Template
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
        // line 15
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-item"), "@ShopUi/components/organisms/footer/footer.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_contentText(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "                    <span class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 29, $this->source); })()), "footerName", [], "any", false, false, false, 29), "html", null, true);
        yield "__subscription-text\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer_subscribe.subscription_text"), "html", null, true);
        // line 31
        yield "</span>
                    <div class=\"spacing-bottom spacing-bottom--big\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletter/subscribe"));
        // line 34
        yield "</div>
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/components/organisms/footer/footer.twig";
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
        return array (  397 => 34,  395 => 33,  392 => 31,  390 => 30,  386 => 29,  379 => 28,  369 => 15,  178 => 104,  173 => 90,  171 => 45,  170 => 40,  168 => 39,  161 => 38,  150 => 122,  148 => 121,  144 => 119,  139 => 117,  134 => 114,  132 => 113,  128 => 111,  123 => 109,  118 => 107,  114 => 105,  112 => 104,  109 => 103,  107 => 102,  103 => 100,  101 => 99,  98 => 98,  94 => 97,  89 => 95,  84 => 93,  80 => 91,  78 => 38,  75 => 37,  73 => 25,  72 => 21,  71 => 20,  70 => 17,  69 => 15,  65 => 14,  62 => 13,  55 => 12,  51 => 1,  50 => 8,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'footer',
    tag: 'footer'
} %}

{% define data = {
    showNavigation: true
} %}

{% block body %}
    <div class=\"container\">
        <div class=\"{{ config.name }}__top\">
            {% embed molecule('toggler-item') with {
                modifiers: ['mobile'],
                class: config.name ~ '__subscription',
                data: {
                    title: 'global.newsletter' | trans,
                    triggerClass: config.jsName ~ '__trigger-subscription',
                    targetClass: config.jsName ~ '__target-subscription',
                    hiddenClass: 'is-hidden-sm-only',
                },
                embed: {
                   footerName : config.name,
                },
            } only %}
                {% block contentText %}
                    <span class=\"{{ embed.footerName }}__subscription-text\">
                        {{- 'footer_subscribe.subscription_text' | trans -}}
                    </span>
                    <div class=\"spacing-bottom spacing-bottom--big\">
                        {{- render(path('newsletter/subscribe')) -}}
                    </div>
                {% endblock %}
            {% endembed %}

            {% block footerNavigation %}
                {% include molecule('navigation-footer') with {
                    class: config.name ~ '__navigation',
                    data: {
                        items: [
                            {
                                title: 'global.categories',
                                isShow: data.showNavigation,
                                templates: [
                                    {
                                        template: 'navigation-footer',
                                        menu: 'FOOTER_NAVIGATION_CATEGORIES'
                                    }
                                ]
                            },
                            {
                                title: 'global.company',
                                templates: [
                                    {
                                        template: 'navigation-footer',
                                        menu: 'FOOTER_NAVIGATION'
                                    }
                                ]
                            },
                            {
                                title: 'global.social',
                                templates: [
                                    {
                                        template: 'navigation-footer',
                                        menu: 'SOCIAL_LINKS'
                                    }
                                ]
                            },
                            {
                                class: 'is-hidden-md-xl',
                                modifiers: ['flex'],
                                title: 'footer.providers__title',
                                templates: [
                                    {
                                        template: 'navigation-providers-shipment',
                                        menu: 'SHIPMENT_PROVIDERS',
                                        wrapClass: 'spacing-right spacing-right--big',
                                    },
                                    {
                                        template: 'navigation-providers-payment',
                                        menu: 'PAYMENT_PROVIDERS'
                                    }
                                ]
                            }
                        ]
                    }
                } only %}
            {% endblock %}
        </div>

        <div class=\"grid grid--middle {{ config.name }}__bottom\">

            <div class=\"col {{ config.name }}__logo-section\">

                <div class=\"{{ config.name }}__logo-copy\">
                    <span class=\"{{ config.name }}__logo-copy-text\">
                        {{- 'footer.logo.text' | trans -}}
                    </span>

                    {% include molecule('footer-logo') only %}

                    {% block copyright %}{% endblock %}
                </div>

                <div class=\"{{ config.name }}__logo-copy-links\">
                    <a
                        href=\"{{ 'footer.logo.link.privacy' | trans }}\"
                        target=\"_blank\"
                        class=\"{{ config.name }}__logo-copy-link\"
                    >
                        {{- 'page.privacy.title' | trans -}}
                    </a>

                    <a
                        href=\"{{ 'footer.logo.link.imprint' | trans }}\"
                        target=\"_blank\"
                        class=\"{{ config.name }}__logo-copy-link\"
                    >
                        {{- 'page.imprint.title' | trans -}}
                    </a>
                </div>
            </div>
        </div>

    </div>
{% endblock %}
", "@ShopUi/components/organisms/footer/footer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/footer/footer.twig");
    }
}
