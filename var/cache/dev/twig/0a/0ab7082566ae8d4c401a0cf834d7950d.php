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

/* @UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig */
class __TwigTemplate_1e205e1ecaf3a1e12f861138dddc3347 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig"));

        // line 1
        $context["brandColor"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 1, $this->source); })()), "brandColor", [], "any", false, false, false, 1)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 1, $this->source); })()), "brandColor", [], "any", false, false, false, 1)) : ("#7C70F4"));
        // line 2
        if ((((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 2, $this->source); })()) != "#7C70F4") && ((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 2, $this->source); })()) != "#7c70f4"))) {
            // line 3
            yield "    <style>
        .uv-btn-small,
        .uv-btn,
        .uv-btn-large,
        .uv-btn-action,
        .uv-btn-label {
            background: ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 9, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-btn-small:hover,
        .uv-btn:hover,
        .uv-btn-large:hover,
        .uv-btn-action:hover,
        .btn:hover,
        .uv-btn-label:hover {
            background: ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 17, $this->source); })()), "html", null, true);
            yield ";
            opacity: .85;
        }
        .uv-btn-small:active,
        .uv-btn:active,
        .uv-btn-large:active,
        .uv-btn-action:active,
        .btn:active,
        .uv-btn-label:active {
            background: ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 26, $this->source); })()), "html", null, true);
            yield ";
            opacity: .65;
        }
        .uv-btn-stroke:active {
            border-color: ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 30, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-dropdown .uv-dropdown-btn-active {
            border: solid 1px ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 33, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-cta-wrapper .uv-cta-lt svg path {
            fill: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 36, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .uv-btn-small,
        .uv-skin-dark .uv-btn,
        .uv-skin-dark .uv-btn-large,
        .uv-skin-dark .uv-btn-action,
        .uv-skin-dark .uv-btn-label {
            background: ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 43, $this->source); })()), "html", null, true);
            yield ";
            color: #333333 !important;
        }
        .uv-skin-dark .uv-btn-small:hover,
        .uv-skin-dark .uv-btn:hover,
        .uv-skin-dark .uv-btn-large:hover,
        .uv-skin-dark .uv-btn-action:hover,
        .uv-skin-dark .btn:hover,
        .uv-skin-dark .uv-btn-label:hover {
            background: ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 52, $this->source); })()), "html", null, true);
            yield ";
            opacity: .85;
        }
        .uv-skin-dark .uv-btn-small:active,
        .uv-skin-dark .uv-btn:active,
        .uv-skin-dark .uv-btn-large:active,
        .uv-skin-dark .uv-btn-action:active,
        .uv-skin-dark .btn:active,
        .uv-skin-dark .uv-btn-label:active {
            background: ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 61, $this->source); })()), "html", null, true);
            yield ";
            opacity: .65;
        }
        .uv-skin-dark .uv-btn-stroke:active {
            border-color: ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 65, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .uv-dropdown .uv-dropdown-btn-active {
            border: solid 1px ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 68, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .uv-select:focus,
        .uv-skin-dark .uv-field:focus,
        .uv-skin-dark .uv-search-inline:focus {
            border-color: ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 73, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .uv-loader span:before,
        .uv-skin-dark .uv-loader span:after {
            background: ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 77, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .bootstrap-datetimepicker-widget table td.active,
        .uv-skin-dark .bootstrap-datetimepicker-widget table td.active:hover {
            background-color: ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 81, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .btn-primary,
        .uv-skin-dark .btn-primary:hover,
        .uv-skin-dark .btn-primary:active {
            background-color: ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 86, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .uv-hero {
            background-color: ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 89, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .uv-cta-wrapper .uv-cta-lt svg path {
            fill: ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 92, $this->source); })()), "html", null, true);
            yield ";
            opacity: .85;
        }
        .uv-kb-layout-folder .uv-kb-folder {
            border-color: ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 96, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-kb-layout-grid .uv-kb-folder{
            border-color: ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 99, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-kb-layout-folder .uv-kb-folder .uv-kb-folder-lt {
            background-position: -180px 0px;
            background-color: ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 103, $this->source); })()), "html", null, true);
            yield ";
            opacity: .85;
        }
        .uv-skin-dark .uv-paper-article .uv-paper-section .uv-folder-title:after {
            background-color: ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 107, $this->source); })()), "html", null, true);
            yield ";
            color: #333333;
        }
        .uv-skin-dark .uv-kb-layout-category .uv-kb-folder {
            border-bottom-color: ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 111, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .uv-brand {
            color: ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 114, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .uv-pagination a:hover {
            background-color: ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 117, $this->source); })()), "html", null, true);
            yield ";
            border-color: ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 118, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .uv-nav-tab ul.uv-nav-tab-label li .uv-nav-tab-active,
        .uv-skin-dark .uv-nav-tab ul.uv-nav-tab-label li a:hover {
            border-bottom-color: ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 122, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .uv-icon-down-light {
                background-image: url(\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/arrow-down-dark.svg"), "html", null, true);
            yield "\");
        }
        .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat,
        .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat:hover {
            background: ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 129, $this->source); })()), "html", null, true);
            yield ";
            color: #333333;
        }
    </style>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig";
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
        return array (  261 => 129,  254 => 125,  248 => 122,  241 => 118,  237 => 117,  231 => 114,  225 => 111,  218 => 107,  211 => 103,  204 => 99,  198 => 96,  191 => 92,  185 => 89,  179 => 86,  171 => 81,  164 => 77,  157 => 73,  149 => 68,  143 => 65,  136 => 61,  124 => 52,  112 => 43,  102 => 36,  96 => 33,  90 => 30,  83 => 26,  71 => 17,  60 => 9,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set brandColor = websiteConfiguration.brandColor ?: '#7C70F4' %}
{% if brandColor != '#7C70F4' and brandColor != '#7c70f4' %}
    <style>
        .uv-btn-small,
        .uv-btn,
        .uv-btn-large,
        .uv-btn-action,
        .uv-btn-label {
            background: {{ brandColor }};
        }
        .uv-btn-small:hover,
        .uv-btn:hover,
        .uv-btn-large:hover,
        .uv-btn-action:hover,
        .btn:hover,
        .uv-btn-label:hover {
            background: {{ brandColor }};
            opacity: .85;
        }
        .uv-btn-small:active,
        .uv-btn:active,
        .uv-btn-large:active,
        .uv-btn-action:active,
        .btn:active,
        .uv-btn-label:active {
            background: {{ brandColor }};
            opacity: .65;
        }
        .uv-btn-stroke:active {
            border-color: {{ brandColor }};
        }
        .uv-dropdown .uv-dropdown-btn-active {
            border: solid 1px {{ brandColor }};
        }
        .uv-cta-wrapper .uv-cta-lt svg path {
            fill: {{ brandColor }};
        }
        .uv-skin-dark .uv-btn-small,
        .uv-skin-dark .uv-btn,
        .uv-skin-dark .uv-btn-large,
        .uv-skin-dark .uv-btn-action,
        .uv-skin-dark .uv-btn-label {
            background: {{ brandColor }};
            color: #333333 !important;
        }
        .uv-skin-dark .uv-btn-small:hover,
        .uv-skin-dark .uv-btn:hover,
        .uv-skin-dark .uv-btn-large:hover,
        .uv-skin-dark .uv-btn-action:hover,
        .uv-skin-dark .btn:hover,
        .uv-skin-dark .uv-btn-label:hover {
            background: {{ brandColor }};
            opacity: .85;
        }
        .uv-skin-dark .uv-btn-small:active,
        .uv-skin-dark .uv-btn:active,
        .uv-skin-dark .uv-btn-large:active,
        .uv-skin-dark .uv-btn-action:active,
        .uv-skin-dark .btn:active,
        .uv-skin-dark .uv-btn-label:active {
            background: {{ brandColor }};
            opacity: .65;
        }
        .uv-skin-dark .uv-btn-stroke:active {
            border-color: {{ brandColor }};
        }
        .uv-skin-dark .uv-dropdown .uv-dropdown-btn-active {
            border: solid 1px {{ brandColor }};
        }
        .uv-skin-dark .uv-select:focus,
        .uv-skin-dark .uv-field:focus,
        .uv-skin-dark .uv-search-inline:focus {
            border-color: {{ brandColor }};
        }
        .uv-skin-dark .uv-loader span:before,
        .uv-skin-dark .uv-loader span:after {
            background: {{ brandColor }};
        }
        .uv-skin-dark .bootstrap-datetimepicker-widget table td.active,
        .uv-skin-dark .bootstrap-datetimepicker-widget table td.active:hover {
            background-color: {{ brandColor }};
        }
        .uv-skin-dark .btn-primary,
        .uv-skin-dark .btn-primary:hover,
        .uv-skin-dark .btn-primary:active {
            background-color: {{ brandColor }};
        }
        .uv-skin-dark .uv-hero {
            background-color: {{ brandColor }};
        }
        .uv-skin-dark .uv-cta-wrapper .uv-cta-lt svg path {
            fill: {{ brandColor }};
            opacity: .85;
        }
        .uv-kb-layout-folder .uv-kb-folder {
            border-color: {{ brandColor }};
        }
        .uv-kb-layout-grid .uv-kb-folder{
            border-color: {{ brandColor }};
        }
        .uv-kb-layout-folder .uv-kb-folder .uv-kb-folder-lt {
            background-position: -180px 0px;
            background-color: {{ brandColor }};
            opacity: .85;
        }
        .uv-skin-dark .uv-paper-article .uv-paper-section .uv-folder-title:after {
            background-color: {{ brandColor }};
            color: #333333;
        }
        .uv-skin-dark .uv-kb-layout-category .uv-kb-folder {
            border-bottom-color: {{ brandColor }};
        }
        .uv-skin-dark .uv-brand {
            color: {{ brandColor }};
        }
        .uv-skin-dark .uv-pagination a:hover {
            background-color: {{ brandColor }};
            border-color: {{ brandColor }};
        }
        .uv-skin-dark .uv-nav-tab ul.uv-nav-tab-label li .uv-nav-tab-active,
        .uv-skin-dark .uv-nav-tab ul.uv-nav-tab-label li a:hover {
            border-bottom-color: {{ brandColor }};
        }
        .uv-skin-dark .uv-icon-down-light {
                background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/arrow-down-dark.svg')}}\");
        }
        .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat,
        .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat:hover {
            background: {{ brandColor }};
            color: #333333;
        }
    </style>
{% endif %}", "@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/darkSkin.html.twig");
    }
}
