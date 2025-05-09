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

/* @UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig */
class __TwigTemplate_b061c014be94319780761e608856ca27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig"));

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
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 18, $this->source); })()), "html", null, true);
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
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 28, $this->source); })()), "html", null, true);
            yield ";
            opacity: .65;
        }

        .uv-btn-stroke:active {
            border-color: ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 33, $this->source); })()), "html", null, true);
            yield ";
        }

        .uv-dropdown .uv-dropdown-btn-active {
            border: solid 1px ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 37, $this->source); })()), "html", null, true);
            yield ";
        }

        .uv-select:focus,
        .uv-field:focus,
        .uv-search-inline:focus {
            border-color: ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 43, $this->source); })()), "html", null, true);
            yield ";
        }

        .uv-loader span:before,
        .uv-loader span:after {
            background: ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 48, $this->source); })()), "html", null, true);
            yield ";
        }

        .bootstrap-datetimepicker-widget table td.active,
        .bootstrap-datetimepicker-widget table td.active:hover {
            background-color: ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 53, $this->source); })()), "html", null, true);
            yield ";
        }

        .btn-primary,
        .btn-primary:hover,
        .btn-primary:active {
            background-color: ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 59, $this->source); })()), "html", null, true);
            yield ";
        }

        .uv-hero {
            background-color: ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 63, $this->source); })()), "html", null, true);
            yield ";
        }
        
        .uv-cta-wrapper .uv-cta-lt svg path {
            fill: ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 67, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-kb-layout-folder .uv-kb-folder {
            border-color: ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 70, $this->source); })()), "html", null, true);
            yield ";
        }

        .uv-kb-layout-grid .uv-kb-folder{
            border-color: ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 74, $this->source); })()), "html", null, true);
            yield ";
        }

        .uv-kb-layout-folder .uv-kb-folder .uv-kb-folder-lt {
            background-position: -90px 0px;
            background-color: ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 79, $this->source); })()), "html", null, true);
            yield ";
        }
        
        .uv-paper-article .uv-paper-section .uv-folder-title:after {
            background-color: ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 83, $this->source); })()), "html", null, true);
            yield ";
        }

        .uv-kb-layout-category .uv-kb-folder {
            border-bottom-color: ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 87, $this->source); })()), "html", null, true);
            yield ";
        }

        .uv-brand {
            color: ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 91, $this->source); })()), "html", null, true);
            yield ";
        }

        .uv-pagination a:hover {
            background-color: ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 95, $this->source); })()), "html", null, true);
            yield ";
            border-color: rgba(0,0,0,.1);
        }

        .uv-nav-tab ul.uv-nav-tab-label li .uv-nav-tab-active,
        .uv-nav-tab ul.uv-nav-tab-label li a:hover {
            border-bottom-color: ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 101, $this->source); })()), "html", null, true);
            yield ";
        }
        .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat,
        .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat:hover {
            background: ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 105, $this->source); })()), "html", null, true);
            yield ";
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
        return "@UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig";
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
        return array (  213 => 105,  206 => 101,  197 => 95,  190 => 91,  183 => 87,  176 => 83,  169 => 79,  161 => 74,  154 => 70,  148 => 67,  141 => 63,  134 => 59,  125 => 53,  117 => 48,  109 => 43,  100 => 37,  93 => 33,  85 => 28,  72 => 18,  60 => 9,  52 => 3,  50 => 2,  48 => 1,);
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

        .uv-select:focus,
        .uv-field:focus,
        .uv-search-inline:focus {
            border-color: {{ brandColor }};
        }

        .uv-loader span:before,
        .uv-loader span:after {
            background: {{ brandColor }};
        }

        .bootstrap-datetimepicker-widget table td.active,
        .bootstrap-datetimepicker-widget table td.active:hover {
            background-color: {{ brandColor }};
        }

        .btn-primary,
        .btn-primary:hover,
        .btn-primary:active {
            background-color: {{ brandColor }};
        }

        .uv-hero {
            background-color: {{ brandColor }};
        }
        
        .uv-cta-wrapper .uv-cta-lt svg path {
            fill: {{ brandColor }};
        }
        .uv-kb-layout-folder .uv-kb-folder {
            border-color: {{ brandColor }};
        }

        .uv-kb-layout-grid .uv-kb-folder{
            border-color: {{ brandColor }};
        }

        .uv-kb-layout-folder .uv-kb-folder .uv-kb-folder-lt {
            background-position: -90px 0px;
            background-color: {{ brandColor }};
        }
        
        .uv-paper-article .uv-paper-section .uv-folder-title:after {
            background-color: {{ brandColor }};
        }

        .uv-kb-layout-category .uv-kb-folder {
            border-bottom-color: {{ brandColor }};
        }

        .uv-brand {
            color: {{ brandColor }};
        }

        .uv-pagination a:hover {
            background-color: {{ brandColor }};
            border-color: rgba(0,0,0,.1);
        }

        .uv-nav-tab ul.uv-nav-tab-label li .uv-nav-tab-active,
        .uv-nav-tab ul.uv-nav-tab-label li a:hover {
            border-bottom-color: {{ brandColor }};
        }
        .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat,
        .uv-skin-dark .uv-ticket-view .uv-ticket-accordion .uv-ticket-count-stat:hover {
            background: {{ brandColor }};
        }
    </style>
{% endif %}", "@UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/lightSkin.html.twig");
    }
}
