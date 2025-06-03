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

/* __string_template__cc9f56e9b203f9934752b4aa66170f82 */
class __TwigTemplate_9c7bd1e8e5c985cef7466afb6340755c extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->env->getFunction('content_navigation')->getCallable()("navigation-footer-categories", "navigation-footer");
        yield $this->env->getFunction('content_navigation')->getCallable()("navigation-footer", "navigation-footer");
        yield $this->env->getFunction('content_navigation')->getCallable()("navigation-social-links", "navigation-footer");
        yield $this->env->getFunction('content_navigation')->getCallable()("navigation-partners", "navigation-footer");
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__cc9f56e9b203f9934752b4aa66170f82";
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
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ content_navigation('navigation-footer-categories', 'navigation-footer') }}{{ content_navigation('navigation-footer', 'navigation-footer') }}{{ content_navigation('navigation-social-links', 'navigation-footer') }}{{ content_navigation('navigation-partners', 'navigation-footer') }}", "__string_template__cc9f56e9b203f9934752b4aa66170f82", "");
    }
}
