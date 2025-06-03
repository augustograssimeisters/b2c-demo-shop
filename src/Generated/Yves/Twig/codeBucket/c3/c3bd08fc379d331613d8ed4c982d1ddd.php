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

/* @ShopUi/resources/form/form.twig */
class __TwigTemplate_10b32a54dd59b3db760ac48e4ebeeeb5 extends Template
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
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'formatted_integer_widget' => [$this, 'block_formatted_integer_widget'],
            'form_row' => [$this, 'block_form_row'],
            'form_rows' => [$this, 'block_form_rows'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'form_label' => [$this, 'block_form_label'],
            'form_errors' => [$this, 'block_form_errors'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@ShopUi/resources/form/form.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 6, $this->source); })()), "")) : ("")));
        // line 8
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 8, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((("input input--expand" . (( !Twig\Extension\CoreExtension::testEmpty(        // line 9
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 9, $this->source); })()))) ? (" input--error") : (" "))) . ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 9), "")) : ("")))), "type" => ((        // line 10
array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })()), "text")) : ("text"))]);
        // line 13
        yield "<input ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()))) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "\" ";
        }
        yield " />";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 17, $this->source); })()), "")) : ("")));
        // line 19
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 19, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((("textarea textarea--expand" . (( !Twig\Extension\CoreExtension::testEmpty(        // line 20
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 20, $this->source); })()))) ? (" textarea--error") : (" "))) . ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 20), "")) : ("")))), "placeholder" => ""]);
        // line 24
        yield "<textarea ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()), "html", null, true);
        }
        yield "</textarea>";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 28, $this->source); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 28, $this->source); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new RuntimeError('Variable "placeholder_in_choices" does not exist.', 28, $this->source); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 28, $this->source); })())) && ( !CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, false, 28) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 28, $this->source); })()), "size", [], "any", false, false, false, 28) <= 1)))) {
            // line 29
            $context["required"] = false;
        }
        // line 32
        yield from         $this->loadTemplate("@ShopUi/resources/form/form.twig", "@ShopUi/resources/form/form.twig", 32, "1455954605")->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["expand"], "attributes" => ["multiple" =>         // line 35
(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 35, $this->source); })()), "placeholder" =>         // line 36
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 36, $this->source); })()), "required" =>         // line 37
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 37, $this->source); })()), "config-width" => "100%"], "embed" => ["attributes" =>         $this->unwrap()->renderBlock("widget_attributes", $context, $blocks), "value" =>         // line 42
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 42, $this->source); })()), "translation_domain" =>         // line 43
(isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 43, $this->source); })()), "preferred_choices" =>         // line 44
(isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 44, $this->source); })()), "choices" =>         // line 45
(isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 45, $this->source); })()), "separator" =>         // line 46
(isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 46, $this->source); })()), "choice_translation_domain" =>         // line 47
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 47, $this->source); })()), "class" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["attr"] ?? null), "class", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 48)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 48)) : (""))]]));
        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 98
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 98, $this->source); })()), "checkbox")) : ("checkbox"));
        // line 99
        $context["component"] = ((array_key_exists("component", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 99, $this->source); })()), $this->env->getFunction('atom')->getCallable()((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 99, $this->source); })())))) : ($this->env->getFunction('atom')->getCallable()((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 99, $this->source); })()))));
        // line 100
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 100, $this->source); })()), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 100, $this->source); })())))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 100, $this->source); })())))));
        // line 101
        $context["componentClass"] = ((array_key_exists("componentClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["componentClass"]) || array_key_exists("componentClass", $context) ? $context["componentClass"] : (function () { throw new RuntimeError('Variable "componentClass" does not exist.', 101, $this->source); })()))) : (""));
        // line 102
        $context["modifiers"] = ((Twig\Extension\CoreExtension::testEmpty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 102, $this->source); })()))) ? (["expand"]) : (["expand", "error"]));
        // line 103
        $context["inputClass"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 103))) : (""));
        // line 105
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["id" =>         // line 106
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 106, $this->source); })()), "name" =>         // line 107
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 107, $this->source); })()), "checked" => ((        // line 108
array_key_exists("checked", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 108, $this->source); })()), false)) : (false)), "required" => ((        // line 109
array_key_exists("required", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 109, $this->source); })()), false)) : (false)), "disabled" => ((        // line 110
array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 110, $this->source); })()), false)) : (false)), "value" => ((        // line 111
array_key_exists("value", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 111, $this->source); })()))) : ("")), "additionalModifier" => ""], $context['attributes']);        // line 115
        $context["modifiers"] = Twig\Extension\CoreExtension::merge((isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 115, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 115, $this->source); })()), "additionalModifier", [], "any", false, false, false, 115)]);
        // line 117
        yield from         $this->loadTemplate((isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 117, $this->source); })()), "@ShopUi/resources/form/form.twig", 117)->unwrap()->yield(CoreExtension::toArray(["class" =>         // line 118
(isset($context["componentClass"]) || array_key_exists("componentClass", $context) ? $context["componentClass"] : (function () { throw new RuntimeError('Variable "componentClass" does not exist.', 118, $this->source); })()), "modifiers" =>         // line 119
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 119, $this->source); })()), "data" => ["label" =>         // line 121
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 121, $this->source); })()), "inputClass" =>         // line 122
(isset($context["inputClass"]) || array_key_exists("inputClass", $context) ? $context["inputClass"] : (function () { throw new RuntimeError('Variable "inputClass" does not exist.', 122, $this->source); })())], "attributes" =>         // line 124
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 124, $this->source); })())]));
        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 129
        $context["type"] = "radio";
        // line 130
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("checkbox_widget", $context, $blocks);
        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 134, $this->source); })()), ["id" => ((        // line 135
array_key_exists("id", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 135, $this->source); })()), false)) : (false)), "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source,         // line 136
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 136)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 136), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 136, $this->source); })()))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 136, $this->source); })()))), (isset($context["attr_translation_parameters"]) || array_key_exists("attr_translation_parameters", $context) ? $context["attr_translation_parameters"] : (function () { throw new RuntimeError('Variable "attr_translation_parameters" does not exist.', 136, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 136, $this->source); })())), "name" =>         // line 137
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 137, $this->source); })()), "disabled" => ((        // line 138
array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 138, $this->source); })()), false)) : (false)), "required" => ((        // line 139
array_key_exists("required", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 139, $this->source); })()), false)) : (false))]);
        // line 142
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "title", [], "any", true, true, false, 142)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "title", [], "any", false, false, false, 142))) : (""))) {
            // line 143
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 143, $this->source); })()), ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source,             // line 144
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 144, $this->source); })()), "title", [], "any", false, false, false, 144), (isset($context["attr_translation_parameters"]) || array_key_exists("attr_translation_parameters", $context) ? $context["attr_translation_parameters"] : (function () { throw new RuntimeError('Variable "attr_translation_parameters" does not exist.', 144, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 144, $this->source); })()))]);
        }
        // line 147
        yield "
    ";
        // line 148
        $context["inputComplexityJsCLass"] = ("js-password-complexity-indicator__" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 148, $this->source); })()), "name", [], "any", false, false, false, 148));
        // line 149
        yield "
    ";
        // line 150
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("password-field"), "@ShopUi/resources/form/form.twig", 150)->unwrap()->yield(CoreExtension::toArray(["data" => ["inputAttributes" =>         // line 152
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 152, $this->source); })()), "inputExtraClasses" => Twig\Extension\CoreExtension::trim(((("input input--expand " . (( !Twig\Extension\CoreExtension::testEmpty(        // line 153
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 153, $this->source); })()))) ? (" input--error ") : (""))) . ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 153)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 153))) : (""))) . (isset($context["inputComplexityJsCLass"]) || array_key_exists("inputComplexityJsCLass", $context) ? $context["inputComplexityJsCLass"] : (function () { throw new RuntimeError('Variable "inputComplexityJsCLass" does not exist.', 153, $this->source); })())))]]));
        // line 156
        yield "
    ";
        // line 157
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "password_complexity_indicator", [], "any", true, true, false, 157)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "password_complexity_indicator", [], "any", false, false, false, 157))) : (""))) {
            // line 158
            yield "        ";
            yield from             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("password-complexity-indicator"), "@ShopUi/resources/form/form.twig", 158)->unwrap()->yield(CoreExtension::toArray(["attributes" => ["input-class-name" =>             // line 160
(isset($context["inputComplexityJsCLass"]) || array_key_exists("inputComplexityJsCLass", $context) ? $context["inputComplexityJsCLass"] : (function () { throw new RuntimeError('Variable "inputComplexityJsCLass" does not exist.', 160, $this->source); })())]]));
            // line 163
            yield "    ";
        }
        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_formatted_integer_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 167
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 167, $this->source); })()))) : ("")));
        // line 168
        $context["filteredAttr"] = Twig\Extension\CoreExtension::filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 168, $this->source); })()), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return ((((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 168, $this->source); })()) != "class") && ((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 168, $this->source); })()) != "min")) && ((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 168, $this->source); })()) != "max")); });
        // line 170
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 170, $this->source); })()), ["placeholder" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 171
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 171)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 171), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 171, $this->source); })()))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 171, $this->source); })())))]);
        // line 174
        $context["inputAttributes"] = ["decimal-rounding" => 1];
        // line 178
        if ((($context["grouping_separator_symbol"]) ?? (false))) {
            // line 179
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 179, $this->source); })()), ["grouping-separator" => (isset($context["grouping_separator_symbol"]) || array_key_exists("grouping_separator_symbol", $context) ? $context["grouping_separator_symbol"] : (function () { throw new RuntimeError('Variable "grouping_separator_symbol" does not exist.', 179, $this->source); })())]);
        }
        // line 181
        yield "
    ";
        // line 182
        if ((($context["decimal_separator_symbol"]) ?? (false))) {
            // line 183
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 183, $this->source); })()), ["decimal-separator" => (isset($context["decimal_separator_symbol"]) || array_key_exists("decimal_separator_symbol", $context) ? $context["decimal_separator_symbol"] : (function () { throw new RuntimeError('Variable "decimal_separator_symbol" does not exist.', 183, $this->source); })())]);
        }
        // line 185
        yield "
    ";
        // line 186
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "min", [], "any", true, true, false, 186) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "min", [], "any", false, false, false, 186)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "min", [], "any", false, false, false, 186)) : (false))) {
            // line 187
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 187, $this->source); })()), ["min" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 187, $this->source); })()), "min", [], "any", false, false, false, 187)]);
        }
        // line 189
        yield "
    ";
        // line 190
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "max", [], "any", true, true, false, 190) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "max", [], "any", false, false, false, 190)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "max", [], "any", false, false, false, 190)) : (false))) {
            // line 191
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 191, $this->source); })()), ["max" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 191, $this->source); })()), "max", [], "any", false, false, false, 191)]);
        }
        // line 193
        yield "
    ";
        // line 194
        yield from         $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("formatted-number-input"), "@ShopUi/resources/form/form.twig", 194)->unwrap()->yield(CoreExtension::toArray(["modifiers" => ["expand", (( !Twig\Extension\CoreExtension::testEmpty(        // line 195
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 195, $this->source); })()))) ? ("error") : (""))], "class" => ((        // line 196
array_key_exists("componentClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["componentClass"]) || array_key_exists("componentClass", $context) ? $context["componentClass"] : (function () { throw new RuntimeError('Variable "componentClass" does not exist.', 196, $this->source); })()))) : ("")), "data" => ["inputName" =>         // line 198
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 198, $this->source); })()), "inputValue" =>         // line 199
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 199, $this->source); })()), "inputAttributes" =>         // line 200
(isset($context["filteredAttr"]) || array_key_exists("filteredAttr", $context) ? $context["filteredAttr"] : (function () { throw new RuntimeError('Variable "filteredAttr" does not exist.', 200, $this->source); })()), "inputExtraClasses" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 201
($context["attr"] ?? null), "class", [], "any", true, true, false, 201)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 201))) : ("")), "hiddenInputExtraClasses" => ((        // line 202
array_key_exists("hiddenInputClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hiddenInputClass"]) || array_key_exists("hiddenInputClass", $context) ? $context["hiddenInputClass"] : (function () { throw new RuntimeError('Variable "hiddenInputClass" does not exist.', 202, $this->source); })()))) : (""))], "attributes" =>         // line 204
(isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 204, $this->source); })())]));
        yield from [];
    }

    // line 210
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 211
        $context["rowClass"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", false, false, false, 211), "")) : (""));
        // line 213
        yield "<div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 213, $this->source); })()), "html", null, true);
        yield "\">";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), 'label');
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), 'widget');
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), 'errors');
        // line 217
        yield "</div>";
        yield from [];
    }

    // line 220
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_rows(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 222
            yield "        ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isRendered", [], "any", false, false, false, 222)) {
                // line 223
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row', ["rowAttr" => ((                // line 224
array_key_exists("rowAttr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["rowAttr"]) || array_key_exists("rowAttr", $context) ? $context["rowAttr"] : (function () { throw new RuntimeError('Variable "rowAttr" does not exist.', 224, $this->source); })()), [])) : ([]))]);
            }
            // line 227
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 231
        $context["rowClass"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", true, true, false, 231)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", false, false, false, 231), "")) : (""));
        // line 233
        yield "<div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 233, $this->source); })()), "html", null, true);
        yield "\">";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), 'widget');
        // line 235
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), 'errors');
        // line 236
        yield "</div>";
        yield from [];
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 240
        yield from         $this->unwrap()->yieldBlock("checkbox_row", $context, $blocks);
        yield from [];
    }

    // line 245
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 246
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 246, $this->source); })()) === false)) {
            // line 247
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 247, $this->source); })())) {
                // line 248
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 248, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 248, $this->source); })()), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 248)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 248), "")) : ("")) . " label"))]);
            }
            // line 250
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 250, $this->source); })())) {
                // line 251
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 251, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 251)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 251), "")) : ("")) . " label--required"))]);
            }
            // line 253
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 253, $this->source); })()))) {
                // line 254
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 254, $this->source); })()))) {
                    // line 255
                    $context["label"] = Twig\Extension\CoreExtension::replace((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 255, $this->source); })()), ["%name%" =>                     // line 256
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 256, $this->source); })()), "%id%" =>                     // line 257
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 257, $this->source); })())]);
                } else {
                    // line 260
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 260, $this->source); })()));
                }
            }
            // line 263
            yield "<label";
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 263, $this->source); })())) {
                $__internal_compile_0 = $context;
                $__internal_compile_1 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 263, $this->source); })())];
                if (!is_iterable($__internal_compile_1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 263, $this->getSourceContext());
                }
                $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
                $context = $__internal_compile_1 + $context + $this->env->getGlobals();
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $__internal_compile_0;
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 263, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 263, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 263, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 263, $this->source); })())))), "html", null, true);
            yield "</label>";
        }
        yield from [];
    }

    // line 269
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 270
        yield "    ";
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 271
            yield "        ";
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 271, $this->source); })()))) {
                // line 272
                yield "            <ul class=\"list list--bullet list--alert\">
                ";
                // line 273
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 273, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 274
                    yield "                    <li class=\"list__item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 274)), "html", null, true);
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 276
                yield "            </ul>
        ";
            }
            // line 278
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 270
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_0_);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/resources/form/form.twig";
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
        return array (  474 => 270,  470 => 278,  466 => 276,  457 => 274,  453 => 273,  450 => 272,  447 => 271,  444 => 270,  437 => 269,  417 => 263,  413 => 260,  410 => 257,  409 => 256,  408 => 255,  406 => 254,  404 => 253,  401 => 251,  399 => 250,  396 => 248,  394 => 247,  392 => 246,  385 => 245,  380 => 240,  373 => 239,  368 => 236,  366 => 235,  364 => 234,  360 => 233,  358 => 231,  351 => 230,  342 => 227,  339 => 224,  338 => 223,  335 => 222,  331 => 221,  324 => 220,  319 => 217,  317 => 216,  315 => 215,  313 => 214,  309 => 213,  307 => 211,  300 => 210,  295 => 204,  294 => 202,  293 => 201,  292 => 200,  291 => 199,  290 => 198,  289 => 196,  288 => 195,  287 => 194,  284 => 193,  281 => 191,  279 => 190,  276 => 189,  273 => 187,  271 => 186,  268 => 185,  265 => 183,  263 => 182,  260 => 181,  257 => 179,  255 => 178,  253 => 174,  251 => 171,  250 => 170,  248 => 168,  246 => 167,  239 => 166,  233 => 163,  231 => 160,  229 => 158,  227 => 157,  224 => 156,  222 => 153,  221 => 152,  220 => 150,  217 => 149,  215 => 148,  212 => 147,  209 => 144,  208 => 143,  206 => 142,  204 => 139,  203 => 138,  202 => 137,  201 => 136,  200 => 135,  199 => 134,  192 => 133,  186 => 130,  184 => 129,  177 => 128,  172 => 124,  171 => 122,  170 => 121,  169 => 119,  168 => 118,  167 => 117,  165 => 115,  164 => 111,  163 => 110,  162 => 109,  161 => 108,  160 => 107,  159 => 106,  158 => 105,  156 => 103,  154 => 102,  152 => 101,  150 => 100,  148 => 99,  146 => 98,  139 => 97,  134 => 48,  133 => 47,  132 => 46,  131 => 45,  130 => 44,  129 => 43,  128 => 42,  127 => 37,  126 => 36,  125 => 35,  124 => 32,  121 => 29,  119 => 28,  112 => 27,  101 => 24,  99 => 20,  98 => 19,  96 => 17,  89 => 16,  76 => 13,  74 => 10,  73 => 9,  72 => 8,  70 => 6,  63 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'form_div_layout.html.twig' %}

{# widgets #}

{%- block form_widget_simple -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('input input--expand' ~ (errors is not empty ? ' input--error' : ' ') ~ (attr.class | default(''))) | trim,
        type: type | default('text')
    }) -%}

    <input {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} />
{%- endblock -%}

{%- block textarea_widget -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('textarea textarea--expand' ~ (errors is not empty ? ' textarea--error' : ' ') ~ (attr.class | default(''))) | trim,
        placeholder: ''
    }) -%}

    <textarea {{ block('widget_attributes') }}>{% if value is not empty %}{{ value }}{% endif %}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}

    {% embed molecule('custom-select') with {
        modifiers: ['expand'],
        attributes: {
            multiple: multiple,
            placeholder: placeholder,
            required: required,
            'config-width': '100%'
        },
        embed: {
            attributes: block('widget_attributes'),
            value: value,
            translation_domain: translation_domain,
            preferred_choices: preferred_choices,
            choices: choices,
            separator: separator,
            choice_translation_domain: choice_translation_domain,
            class: attr.class ?? '',
        },
    } only %}
        {% block selectAttributes %}
            {{ parent() }}
            {{ embed.attributes | raw }}
        {% endblock %}

        {% block selectClass %}
            {{ parent() }} {{ embed.class }}
        {% endblock %}

        {% block options %}
            {%- if attributes.placeholder is not none -%}
                <option value=\"\"{% if attributes.required and embed.value is empty %} selected=\"selected\"{% endif %}>
                    {{ attributes.placeholder != '' ? (embed.translation_domain is same as(false) ? attributes.placeholder : attributes.placeholder|trans({}, embed.translation_domain)) }}
                </option>
            {%- endif -%}

            {%- if embed.preferred_choices|length > 0 -%}
                {% set options = embed.preferred_choices %}

                {{- block('renderOptions') -}}

                {%- if attributes.choices|length > 0 and embed.separator is not none -%}
                    <option disabled=\"disabled\">{{ embed.separator }}</option>
                {%- endif -%}
            {%- endif -%}

            {%- set options = embed.choices -%}

            {%- block renderOptions -%}
                {% for group_label, choice in options %}
                    {%- if choice is iterable -%}
                        <optgroup label=\"{{ embed.choice_translation_domain is same as(false) ? group_label : group_label|trans({}, embed.choice_translation_domain) }}\">
                            {% set options = choice %}
                            {{- block('renderOptions') -}}
                        </optgroup>
                    {%- else -%}
                        <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(embed.value) %} selected=\"selected\"{% endif %}>
                            {{ embed.choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, embed.choice_translation_domain) }}
                        </option>
                    {%- endif -%}
                {% endfor %}
            {%- endblock -%}
        {% endblock %}
    {% endembed %}
{%- endblock -%}

{%- block checkbox_widget -%}
    {%- set type = type | default('checkbox') -%}
    {%- set component = component | default(atom(type)) -%}
    {%- set label = label | default(name | humanize) | trans -%}
    {%- set componentClass = componentClass | default -%}
    {%- set modifiers = errors is empty ? ['expand'] : ['expand', 'error'] -%}
    {%- set inputClass = attr.class | default -%}

    {% define attributes = {
        id: id,
        name: full_name,
        checked: checked | default(false),
        required: required | default(false),
        disabled: disabled | default(false),
        value: value | default,
        additionalModifier: '',
    } %}

    {%- set modifiers = modifiers | merge([attributes.additionalModifier]) -%}

    {% include component with {
        class: componentClass,
        modifiers: modifiers,
        data: {
            label: label,
            inputClass: inputClass,
        },
        attributes: attributes,
    } only %}
{%- endblock -%}

{%- block radio_widget -%}
    {% set type = 'radio' %}
    {{block('checkbox_widget')}}
{%- endblock -%}

{%- block password_widget -%}
    {%- set attr = attr | merge({
        id: id | default(false),
        placeholder: attr.placeholder | default(label) | trans(attr_translation_parameters, translation_domain),
        name: full_name,
        disabled: disabled | default(false),
        required: required | default(false),
    }) -%}

    {% if attr.title | default %}
        {%- set attr = attr | merge({
            title: attr.title | trans(attr_translation_parameters, translation_domain),
        }) -%}
    {% endif %}

    {% set inputComplexityJsCLass = 'js-password-complexity-indicator__' ~ attr.name %}

    {% include molecule('password-field') with {
        data: {
            inputAttributes: attr,
            inputExtraClasses: ('input input--expand ' ~ (errors is not empty ? ' input--error ') ~ (attr.class | default) ~ inputComplexityJsCLass) | trim,
        },
    } only %}

    {% if attr.password_complexity_indicator | default %}
        {% include molecule('password-complexity-indicator') with {
            attributes: {
                'input-class-name': inputComplexityJsCLass,
            },
        } only %}
    {% endif %}
{%- endblock password_widget -%}

{%- block formatted_integer_widget -%}
    {%- set label = (label | default) | trans -%}
    {%- set filteredAttr = attr | filter((value, key) => key != 'class' and key != 'min' and key != 'max') -%}

    {%- set attr = attr | merge({
        placeholder: attr.placeholder | default(label)
    }) -%}

    {%- set inputAttributes = {
        'decimal-rounding': 1,
    } -%}

    {% if grouping_separator_symbol ?? false %}
        {%- set inputAttributes = inputAttributes | merge({'grouping-separator': grouping_separator_symbol}) -%}
    {% endif %}

    {% if decimal_separator_symbol ?? false %}
        {%- set inputAttributes = inputAttributes | merge({'decimal-separator': decimal_separator_symbol}) -%}
    {% endif %}

    {% if attr.min ?? false %}
        {%- set inputAttributes = inputAttributes | merge({min: attr.min}) -%}
    {% endif %}

    {% if attr.max ?? false %}
        {%- set inputAttributes = inputAttributes | merge({max: attr.max}) -%}
    {% endif %}

    {% include molecule('formatted-number-input') with {
        modifiers: ['expand', errors is not empty ? 'error'],
        class: componentClass | default,
        data: {
            inputName: full_name,
            inputValue: value,
            inputAttributes: filteredAttr,
            inputExtraClasses: attr.class | default,
            hiddenInputExtraClasses: hiddenInputClass | default,
        },
        attributes: inputAttributes,
    } only %}
{%- endblock formatted_integer_widget -%}

{# rows #}

{%- block form_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock -%}

{%- block form_rows -%}
    {% for child in form %}
        {% if not child.isRendered %}
            {{- form_row(child, {
                rowAttr: rowAttr | default({})
            }) -}}
        {% endif %}
    {% endfor %}
{%- endblock -%}

{%- block checkbox_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock -%}

{%- block radio_row -%}
    {{- block('checkbox_row') -}}
{%- endblock -%}

{# labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id, 'class': (label_attr.class|default('') ~ ' label')|trim}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' label--required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock -%}

{# errors #}

{% block form_errors %}
    {% apply spaceless %}
        {% if errors | length %}
            <ul class=\"list list--bullet list--alert\">
                {% for error in errors %}
                    <li class=\"list__item\">{{ error.message | trans }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endapply %}
{% endblock %}
", "@ShopUi/resources/form/form.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/resources/form/form.twig");
    }
}


/* @ShopUi/resources/form/form.twig */
class __TwigTemplate_10b32a54dd59b3db760ac48e4ebeeeb5___1455954605 extends Template
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
            'selectAttributes' => [$this, 'block_selectAttributes'],
            'selectClass' => [$this, 'block_selectClass'],
            'options' => [$this, 'block_options'],
            'renderOptions' => [$this, 'block_renderOptions'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 32
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("custom-select"), "@ShopUi/resources/form/form.twig", 32);
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
    public function block_selectAttributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "            ";
        yield from $this->yieldParentBlock("selectAttributes", $context, $blocks);
        yield "
            ";
        // line 53
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 53, $this->source); })()), "attributes", [], "any", false, false, false, 53);
        yield "
        ";
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_selectClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "            ";
        yield from $this->yieldParentBlock("selectClass", $context, $blocks);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 57, $this->source); })()), "class", [], "any", false, false, false, 57), "html", null, true);
        yield "
        ";
        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 61, $this->source); })()), "placeholder", [], "any", false, false, false, 61))) {
            // line 62
            yield "<option value=\"\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 62, $this->source); })()), "required", [], "any", false, false, false, 62) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 62, $this->source); })()), "value", [], "any", false, false, false, 62)))) {
                yield " selected=\"selected\"";
            }
            yield ">
                    ";
            // line 63
            (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 63, $this->source); })()), "placeholder", [], "any", false, false, false, 63) != "")) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 63, $this->source); })()), "translation_domain", [], "any", false, false, false, 63) === false)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 63, $this->source); })()), "placeholder", [], "any", false, false, false, 63)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 63, $this->source); })()), "placeholder", [], "any", false, false, false, 63), [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 63, $this->source); })()), "translation_domain", [], "any", false, false, false, 63)))), "html", null, true)) : (yield ""));
            yield "
                </option>";
        }
        // line 67
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 67, $this->source); })()), "preferred_choices", [], "any", false, false, false, 67)) > 0)) {
            // line 68
            $context["options"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 68, $this->source); })()), "preferred_choices", [], "any", false, false, false, 68);
            // line 70
            yield from             $this->unwrap()->yieldBlock("renderOptions", $context, $blocks);
            // line 72
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 72, $this->source); })()), "choices", [], "any", false, false, false, 72)) > 0) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 72, $this->source); })()), "separator", [], "any", false, false, false, 72)))) {
                // line 73
                yield "<option disabled=\"disabled\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 73, $this->source); })()), "separator", [], "any", false, false, false, 73), "html", null, true);
                yield "</option>";
            }
        }
        // line 77
        $context["options"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 77, $this->source); })()), "choices", [], "any", false, false, false, 77);
        // line 79
        yield from $this->unwrap()->yieldBlock('renderOptions', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_renderOptions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 80, $this->source); })()));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 81
            if (is_iterable($context["choice"])) {
                // line 82
                yield "<optgroup label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 82, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 82) === false)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 82, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 82)))), "html", null, true);
                yield "\">
                            ";
                // line 83
                $context["options"] = $context["choice"];
                // line 84
                yield from                 $this->unwrap()->yieldBlock("renderOptions", $context, $blocks);
                // line 85
                yield "</optgroup>";
            } else {
                // line 87
                yield "<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 87), "html", null, true);
                yield "\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 87)) {
                    $__internal_compile_2 = $context;
                    $__internal_compile_3 = ["attr" => CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 87)];
                    if (!is_iterable($__internal_compile_3)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 87, $this->getSourceContext());
                    }
                    $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
                    $context = $__internal_compile_3 + $context + $this->env->getGlobals();
                    yield from                     $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                    $context = $__internal_compile_2;
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 87, $this->source); })()), "value", [], "any", false, false, false, 87))) {
                    yield " selected=\"selected\"";
                }
                yield ">
                            ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 88, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 88) === false)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 88)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 88), [], CoreExtension::getAttribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 88, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 88)))), "html", null, true);
                yield "
                        </option>";
            }
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
        unset($context['_seq'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ShopUi/resources/form/form.twig";
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
        return array (  959 => 88,  939 => 87,  936 => 85,  934 => 84,  932 => 83,  927 => 82,  925 => 81,  908 => 80,  897 => 79,  895 => 77,  889 => 73,  887 => 72,  885 => 70,  883 => 68,  881 => 67,  876 => 63,  869 => 62,  867 => 61,  860 => 60,  850 => 57,  843 => 56,  836 => 53,  831 => 52,  824 => 51,  814 => 32,  474 => 270,  470 => 278,  466 => 276,  457 => 274,  453 => 273,  450 => 272,  447 => 271,  444 => 270,  437 => 269,  417 => 263,  413 => 260,  410 => 257,  409 => 256,  408 => 255,  406 => 254,  404 => 253,  401 => 251,  399 => 250,  396 => 248,  394 => 247,  392 => 246,  385 => 245,  380 => 240,  373 => 239,  368 => 236,  366 => 235,  364 => 234,  360 => 233,  358 => 231,  351 => 230,  342 => 227,  339 => 224,  338 => 223,  335 => 222,  331 => 221,  324 => 220,  319 => 217,  317 => 216,  315 => 215,  313 => 214,  309 => 213,  307 => 211,  300 => 210,  295 => 204,  294 => 202,  293 => 201,  292 => 200,  291 => 199,  290 => 198,  289 => 196,  288 => 195,  287 => 194,  284 => 193,  281 => 191,  279 => 190,  276 => 189,  273 => 187,  271 => 186,  268 => 185,  265 => 183,  263 => 182,  260 => 181,  257 => 179,  255 => 178,  253 => 174,  251 => 171,  250 => 170,  248 => 168,  246 => 167,  239 => 166,  233 => 163,  231 => 160,  229 => 158,  227 => 157,  224 => 156,  222 => 153,  221 => 152,  220 => 150,  217 => 149,  215 => 148,  212 => 147,  209 => 144,  208 => 143,  206 => 142,  204 => 139,  203 => 138,  202 => 137,  201 => 136,  200 => 135,  199 => 134,  192 => 133,  186 => 130,  184 => 129,  177 => 128,  172 => 124,  171 => 122,  170 => 121,  169 => 119,  168 => 118,  167 => 117,  165 => 115,  164 => 111,  163 => 110,  162 => 109,  161 => 108,  160 => 107,  159 => 106,  158 => 105,  156 => 103,  154 => 102,  152 => 101,  150 => 100,  148 => 99,  146 => 98,  139 => 97,  134 => 48,  133 => 47,  132 => 46,  131 => 45,  130 => 44,  129 => 43,  128 => 42,  127 => 37,  126 => 36,  125 => 35,  124 => 32,  121 => 29,  119 => 28,  112 => 27,  101 => 24,  99 => 20,  98 => 19,  96 => 17,  89 => 16,  76 => 13,  74 => 10,  73 => 9,  72 => 8,  70 => 6,  63 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'form_div_layout.html.twig' %}

{# widgets #}

{%- block form_widget_simple -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('input input--expand' ~ (errors is not empty ? ' input--error' : ' ') ~ (attr.class | default(''))) | trim,
        type: type | default('text')
    }) -%}

    <input {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} />
{%- endblock -%}

{%- block textarea_widget -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('textarea textarea--expand' ~ (errors is not empty ? ' textarea--error' : ' ') ~ (attr.class | default(''))) | trim,
        placeholder: ''
    }) -%}

    <textarea {{ block('widget_attributes') }}>{% if value is not empty %}{{ value }}{% endif %}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}

    {% embed molecule('custom-select') with {
        modifiers: ['expand'],
        attributes: {
            multiple: multiple,
            placeholder: placeholder,
            required: required,
            'config-width': '100%'
        },
        embed: {
            attributes: block('widget_attributes'),
            value: value,
            translation_domain: translation_domain,
            preferred_choices: preferred_choices,
            choices: choices,
            separator: separator,
            choice_translation_domain: choice_translation_domain,
            class: attr.class ?? '',
        },
    } only %}
        {% block selectAttributes %}
            {{ parent() }}
            {{ embed.attributes | raw }}
        {% endblock %}

        {% block selectClass %}
            {{ parent() }} {{ embed.class }}
        {% endblock %}

        {% block options %}
            {%- if attributes.placeholder is not none -%}
                <option value=\"\"{% if attributes.required and embed.value is empty %} selected=\"selected\"{% endif %}>
                    {{ attributes.placeholder != '' ? (embed.translation_domain is same as(false) ? attributes.placeholder : attributes.placeholder|trans({}, embed.translation_domain)) }}
                </option>
            {%- endif -%}

            {%- if embed.preferred_choices|length > 0 -%}
                {% set options = embed.preferred_choices %}

                {{- block('renderOptions') -}}

                {%- if attributes.choices|length > 0 and embed.separator is not none -%}
                    <option disabled=\"disabled\">{{ embed.separator }}</option>
                {%- endif -%}
            {%- endif -%}

            {%- set options = embed.choices -%}

            {%- block renderOptions -%}
                {% for group_label, choice in options %}
                    {%- if choice is iterable -%}
                        <optgroup label=\"{{ embed.choice_translation_domain is same as(false) ? group_label : group_label|trans({}, embed.choice_translation_domain) }}\">
                            {% set options = choice %}
                            {{- block('renderOptions') -}}
                        </optgroup>
                    {%- else -%}
                        <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(embed.value) %} selected=\"selected\"{% endif %}>
                            {{ embed.choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, embed.choice_translation_domain) }}
                        </option>
                    {%- endif -%}
                {% endfor %}
            {%- endblock -%}
        {% endblock %}
    {% endembed %}
{%- endblock -%}

{%- block checkbox_widget -%}
    {%- set type = type | default('checkbox') -%}
    {%- set component = component | default(atom(type)) -%}
    {%- set label = label | default(name | humanize) | trans -%}
    {%- set componentClass = componentClass | default -%}
    {%- set modifiers = errors is empty ? ['expand'] : ['expand', 'error'] -%}
    {%- set inputClass = attr.class | default -%}

    {% define attributes = {
        id: id,
        name: full_name,
        checked: checked | default(false),
        required: required | default(false),
        disabled: disabled | default(false),
        value: value | default,
        additionalModifier: '',
    } %}

    {%- set modifiers = modifiers | merge([attributes.additionalModifier]) -%}

    {% include component with {
        class: componentClass,
        modifiers: modifiers,
        data: {
            label: label,
            inputClass: inputClass,
        },
        attributes: attributes,
    } only %}
{%- endblock -%}

{%- block radio_widget -%}
    {% set type = 'radio' %}
    {{block('checkbox_widget')}}
{%- endblock -%}

{%- block password_widget -%}
    {%- set attr = attr | merge({
        id: id | default(false),
        placeholder: attr.placeholder | default(label) | trans(attr_translation_parameters, translation_domain),
        name: full_name,
        disabled: disabled | default(false),
        required: required | default(false),
    }) -%}

    {% if attr.title | default %}
        {%- set attr = attr | merge({
            title: attr.title | trans(attr_translation_parameters, translation_domain),
        }) -%}
    {% endif %}

    {% set inputComplexityJsCLass = 'js-password-complexity-indicator__' ~ attr.name %}

    {% include molecule('password-field') with {
        data: {
            inputAttributes: attr,
            inputExtraClasses: ('input input--expand ' ~ (errors is not empty ? ' input--error ') ~ (attr.class | default) ~ inputComplexityJsCLass) | trim,
        },
    } only %}

    {% if attr.password_complexity_indicator | default %}
        {% include molecule('password-complexity-indicator') with {
            attributes: {
                'input-class-name': inputComplexityJsCLass,
            },
        } only %}
    {% endif %}
{%- endblock password_widget -%}

{%- block formatted_integer_widget -%}
    {%- set label = (label | default) | trans -%}
    {%- set filteredAttr = attr | filter((value, key) => key != 'class' and key != 'min' and key != 'max') -%}

    {%- set attr = attr | merge({
        placeholder: attr.placeholder | default(label)
    }) -%}

    {%- set inputAttributes = {
        'decimal-rounding': 1,
    } -%}

    {% if grouping_separator_symbol ?? false %}
        {%- set inputAttributes = inputAttributes | merge({'grouping-separator': grouping_separator_symbol}) -%}
    {% endif %}

    {% if decimal_separator_symbol ?? false %}
        {%- set inputAttributes = inputAttributes | merge({'decimal-separator': decimal_separator_symbol}) -%}
    {% endif %}

    {% if attr.min ?? false %}
        {%- set inputAttributes = inputAttributes | merge({min: attr.min}) -%}
    {% endif %}

    {% if attr.max ?? false %}
        {%- set inputAttributes = inputAttributes | merge({max: attr.max}) -%}
    {% endif %}

    {% include molecule('formatted-number-input') with {
        modifiers: ['expand', errors is not empty ? 'error'],
        class: componentClass | default,
        data: {
            inputName: full_name,
            inputValue: value,
            inputAttributes: filteredAttr,
            inputExtraClasses: attr.class | default,
            hiddenInputExtraClasses: hiddenInputClass | default,
        },
        attributes: inputAttributes,
    } only %}
{%- endblock formatted_integer_widget -%}

{# rows #}

{%- block form_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock -%}

{%- block form_rows -%}
    {% for child in form %}
        {% if not child.isRendered %}
            {{- form_row(child, {
                rowAttr: rowAttr | default({})
            }) -}}
        {% endif %}
    {% endfor %}
{%- endblock -%}

{%- block checkbox_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock -%}

{%- block radio_row -%}
    {{- block('checkbox_row') -}}
{%- endblock -%}

{# labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id, 'class': (label_attr.class|default('') ~ ' label')|trim}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' label--required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock -%}

{# errors #}

{% block form_errors %}
    {% apply spaceless %}
        {% if errors | length %}
            <ul class=\"list list--bullet list--alert\">
                {% for error in errors %}
                    <li class=\"list__item\">{{ error.message | trans }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endapply %}
{% endblock %}
", "@ShopUi/resources/form/form.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/resources/form/form.twig");
    }
}
