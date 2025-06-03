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

/* __string_template__aa1b7d6683868b2d862d5001e9b37187 */
class __TwigTemplate_996750b5c68f7f24902e6f75ab133346 extends Template
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
        yield $this->env->getFunction('content_banner')->getCallable()("br-smartwatches", "slider");
        yield $this->env->getFunction('content_banner')->getCallable()("br-smartphones", "slider");
        yield $this->env->getFunction('content_banner')->getCallable()("br-tablet", "slider");
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__aa1b7d6683868b2d862d5001e9b37187";
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
        return new Source("{{ content_banner('br-smartwatches', 'slider') }}{{ content_banner('br-smartphones', 'slider') }}{{ content_banner('br-tablet', 'slider') }}", "__string_template__aa1b7d6683868b2d862d5001e9b37187", "");
    }
}
