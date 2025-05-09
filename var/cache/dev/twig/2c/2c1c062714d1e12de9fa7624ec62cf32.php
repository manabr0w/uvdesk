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

/* @UVDeskCoreFramework/Templates/lightskin.html.twig */
class __TwigTemplate_fdd4ba897e8f1ff87c6b4c98e135686d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/lightskin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/lightskin.html.twig"));

        // line 1
        $context["brandColor"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 1, $this->source); })()), "themeColor", [], "any", false, false, false, 1)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 1, $this->source); })()), "themeColor", [], "any", false, false, false, 1)) : ("#7C70F4"));
        // line 2
        yield "
<style>
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

    .uv-btn-stroke:active{
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
    .uv-field:focus, .uv-search-inline:focus {
        border-color: ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 42, $this->source); })()), "html", null, true);
        yield ";
    }

    .uv-sidebar .uv-soft-top .uv-logo svg path, 
    .uv-inner-section .uv-view .uv-image-upload-wrapper .uv-image-upload-brick .uv-image-upload-placeholder svg path {
        fill: ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 47, $this->source); })()), "html", null, true);
        yield ";
    }

    .uv-inner-section .uv-view .uv-image-upload-wrapper .uv-image-upload-brick:hover .uv-image-upload-placeholder svg path {
    fill: ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 51, $this->source); })()), "html", null, true);
        yield ";
    opacity: .85;
    }

    li.uv-active-sidebar {
\t\tcolor: ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 56, $this->source); })()), "html", null, true);
        yield ";
\t\tborder-left: solid 3px ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 57, $this->source); })()), "html", null, true);
        yield ";
    }

    .uv-sidebar ul.uv-menubar li:not(.uv-active-sidebar) a:hover,
    .uv-sidebar ul.uv-menubar li .uv-item-active {
        color: ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 62, $this->source); })()), "html", null, true);
        yield ";
        border-left: solid 3px ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 63, $this->source); })()), "html", null, true);
        yield ";
    }

    .uv-sidebar .uv-soft-top .uv-hamburger:hover svg path {
        fill: ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 67, $this->source); })()), "html", null, true);
        yield ";
    }

    .uv-sidebar ul.uv-menubar li a:hover .uv-icon svg path,
    .uv-sidebar ul.uv-menubar li .uv-item-active .uv-icon svg path {
    fill: ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 72, $this->source); })()), "html", null, true);
        yield ";
    }

    .uv-paper .uv-navbar .uv-notification-icon-count {
        background-color: ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 76, $this->source); })()), "html", null, true);
        yield ";
    }

    .uv-paper .uv-container .uv-brick .uv-brick-section .uv-brick-icon:hover svg path {
        fill: ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 80, $this->source); })()), "html", null, true);
        yield ";
    }

    .uv-paper .uv-container .uv-brick .uv-brick-section .uv-brick-icon {
        background-image: -webkit-linear-gradient(left, ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 84, $this->source); })()), "html", null, true);
        yield " 0%, ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 84, $this->source); })()), "html", null, true);
        yield " 100%);
        background-image: -o-linear-gradient(left, ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 85, $this->source); })()), "html", null, true);
        yield " 0%, ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 85, $this->source); })()), "html", null, true);
        yield " 100%);
        background-image: linear-gradient(to right, ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 86, $this->source); })()), "html", null, true);
        yield " 0%, ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 86, $this->source); })()), "html", null, true);
        yield " 100%);
    }
    .uv-paper .uv-container .uv-home-tabs ul li{
        border-color: ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 89, $this->source); })()), "html", null, true);
        yield ";
    }
    .uv-paper .uv-container .uv-home-tabs ul .home-tab-active{
        background-color: ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 92, $this->source); })()), "html", null, true);
        yield ";
    }
    .uv-inner-section .uv-view .uv-tabs ul .uv-tab-active{
        border-bottom-color: ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 95, $this->source); })()), "html", null, true);
        yield ";
    }
    .uv-inner-section .uv-view .uv-tabs ul li:hover{
        border-bottom-color: ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 98, $this->source); })()), "html", null, true);
        yield ";
    }
    .uv-loader span:before,.uv-loader span:after{
        background: ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 101, $this->source); })()), "html", null, true);
        yield ";
    }

    .bootstrap-datetimepicker-widget table td.active, .bootstrap-datetimepicker-widget table td.active:hover {
        background-color: ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 105, $this->source); })()), "html", null, true);
        yield ";
    }

    .btn-primary, .btn-primary:hover, .btn-primary:active {
        background-color: ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 109, $this->source); })()), "html", null, true);
        yield ";
    }

    .uv-app-screen .uv-app-list-channels .uv-app-list-brick .uv-app-list-brick-lt{
        background-color: ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 113, $this->source); })()), "html", null, true);
        yield ";
        background-image: none !important;
    }

    .uv-app-screen .uv-app-list-channels .uv-app-list-brick{
        border-color: ";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 118, $this->source); })()), "html", null, true);
        yield ";
    }

    .uv-inner-section .uv-view .uv-ticket-section .uv-ticket-accordion .uv-ticket-count-stat, .uv-inner-section .uv-view .uv-ticket-section .uv-ticket-accordion .uv-ticket-count-stat:hover{
        background: ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 122, $this->source); })()), "html", null, true);
        yield ";
    }
    .uv-pagination a:hover {
        background-color: ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 125, $this->source); })()), "html", null, true);
        yield ";
        border-color: rgba(0,0,0,.1);
    }
    .uv-box-tab ul > li a:hover, .uv-box-tab ul > li .uv-box-tab-active {
        background-color: #333333;
        border-color: #333333;
    }
    .uv-box-tab ul > li a:hover, .uv-box-tab ul > li .uv-box-tab-active {
        background-color: ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 133, $this->source); })()), "html", null, true);
        yield ";
        border-color: ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 134, $this->source); })()), "html", null, true);
        yield ";
    }
    .uv-paper .uv-search-result-row .uv-brick-icon {
        background-image: -webkit-linear-gradient(left, ";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 137, $this->source); })()), "html", null, true);
        yield " 0%, ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 137, $this->source); })()), "html", null, true);
        yield " 100%) !important;
        background-image: -o-linear-gradient(left, ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 138, $this->source); })()), "html", null, true);
        yield " 0%, ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 138, $this->source); })()), "html", null, true);
        yield " 100%) !important;
        background-image: linear-gradient(to right, ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 139, $this->source); })()), "html", null, true);
        yield " 0%, ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 139, $this->source); })()), "html", null, true);
        yield " 100%) !important;
    }
    .uv-onboard-wrapper .uv-onboard-count:before{
        border-right-color: ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 142, $this->source); })()), "html", null, true);
        yield ";
    }

    .uv-onboard-wrapper .uv-onboard-container .uv-onboard-navigator-active{
        background-color: ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 146, $this->source); })()), "html", null, true);
        yield ";
    }
    .uv-icon-aside-menu,.uv-paper .uv-got-whats-new {
        background-color: ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["brandColor"]) || array_key_exists("brandColor", $context) ? $context["brandColor"] : (function () { throw new RuntimeError('Variable "brandColor" does not exist.', 149, $this->source); })()), "html", null, true);
        yield ";   
    }
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskCoreFramework/Templates/lightskin.html.twig";
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
        return array (  322 => 149,  316 => 146,  309 => 142,  301 => 139,  295 => 138,  289 => 137,  283 => 134,  279 => 133,  268 => 125,  262 => 122,  255 => 118,  247 => 113,  240 => 109,  233 => 105,  226 => 101,  220 => 98,  214 => 95,  208 => 92,  202 => 89,  194 => 86,  188 => 85,  182 => 84,  175 => 80,  168 => 76,  161 => 72,  153 => 67,  146 => 63,  142 => 62,  134 => 57,  130 => 56,  122 => 51,  115 => 47,  107 => 42,  99 => 37,  92 => 33,  84 => 28,  71 => 18,  59 => 9,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set brandColor = website.themeColor ?: '#7C70F4' %}

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

    .uv-btn-stroke:active{
        border-color: {{ brandColor }}; 
    }

    .uv-dropdown .uv-dropdown-btn-active {
        border: solid 1px {{ brandColor }};
    }

    .uv-select:focus,
    .uv-field:focus, .uv-search-inline:focus {
        border-color: {{ brandColor }};
    }

    .uv-sidebar .uv-soft-top .uv-logo svg path, 
    .uv-inner-section .uv-view .uv-image-upload-wrapper .uv-image-upload-brick .uv-image-upload-placeholder svg path {
        fill: {{ brandColor }};
    }

    .uv-inner-section .uv-view .uv-image-upload-wrapper .uv-image-upload-brick:hover .uv-image-upload-placeholder svg path {
    fill: {{ brandColor }};
    opacity: .85;
    }

    li.uv-active-sidebar {
\t\tcolor: {{ brandColor }};
\t\tborder-left: solid 3px {{ brandColor }};
    }

    .uv-sidebar ul.uv-menubar li:not(.uv-active-sidebar) a:hover,
    .uv-sidebar ul.uv-menubar li .uv-item-active {
        color: {{ brandColor }};
        border-left: solid 3px {{ brandColor }};
    }

    .uv-sidebar .uv-soft-top .uv-hamburger:hover svg path {
        fill: {{ brandColor }};
    }

    .uv-sidebar ul.uv-menubar li a:hover .uv-icon svg path,
    .uv-sidebar ul.uv-menubar li .uv-item-active .uv-icon svg path {
    fill: {{ brandColor }};
    }

    .uv-paper .uv-navbar .uv-notification-icon-count {
        background-color: {{ brandColor }};
    }

    .uv-paper .uv-container .uv-brick .uv-brick-section .uv-brick-icon:hover svg path {
        fill: {{ brandColor }};
    }

    .uv-paper .uv-container .uv-brick .uv-brick-section .uv-brick-icon {
        background-image: -webkit-linear-gradient(left, {{ brandColor }} 0%, {{ brandColor }} 100%);
        background-image: -o-linear-gradient(left, {{ brandColor }} 0%, {{ brandColor }} 100%);
        background-image: linear-gradient(to right, {{ brandColor }} 0%, {{ brandColor }} 100%);
    }
    .uv-paper .uv-container .uv-home-tabs ul li{
        border-color: {{ brandColor }};
    }
    .uv-paper .uv-container .uv-home-tabs ul .home-tab-active{
        background-color: {{ brandColor }};
    }
    .uv-inner-section .uv-view .uv-tabs ul .uv-tab-active{
        border-bottom-color: {{ brandColor }};
    }
    .uv-inner-section .uv-view .uv-tabs ul li:hover{
        border-bottom-color: {{ brandColor }};
    }
    .uv-loader span:before,.uv-loader span:after{
        background: {{ brandColor }};
    }

    .bootstrap-datetimepicker-widget table td.active, .bootstrap-datetimepicker-widget table td.active:hover {
        background-color: {{ brandColor }};
    }

    .btn-primary, .btn-primary:hover, .btn-primary:active {
        background-color: {{ brandColor }};
    }

    .uv-app-screen .uv-app-list-channels .uv-app-list-brick .uv-app-list-brick-lt{
        background-color: {{ brandColor }};
        background-image: none !important;
    }

    .uv-app-screen .uv-app-list-channels .uv-app-list-brick{
        border-color: {{ brandColor }};
    }

    .uv-inner-section .uv-view .uv-ticket-section .uv-ticket-accordion .uv-ticket-count-stat, .uv-inner-section .uv-view .uv-ticket-section .uv-ticket-accordion .uv-ticket-count-stat:hover{
        background: {{ brandColor }};
    }
    .uv-pagination a:hover {
        background-color: {{ brandColor }};
        border-color: rgba(0,0,0,.1);
    }
    .uv-box-tab ul > li a:hover, .uv-box-tab ul > li .uv-box-tab-active {
        background-color: #333333;
        border-color: #333333;
    }
    .uv-box-tab ul > li a:hover, .uv-box-tab ul > li .uv-box-tab-active {
        background-color: {{ brandColor }};
        border-color: {{ brandColor }};
    }
    .uv-paper .uv-search-result-row .uv-brick-icon {
        background-image: -webkit-linear-gradient(left, {{ brandColor }} 0%, {{ brandColor }} 100%) !important;
        background-image: -o-linear-gradient(left, {{ brandColor }} 0%, {{ brandColor }} 100%) !important;
        background-image: linear-gradient(to right, {{ brandColor }} 0%, {{ brandColor }} 100%) !important;
    }
    .uv-onboard-wrapper .uv-onboard-count:before{
        border-right-color: {{ brandColor }};
    }

    .uv-onboard-wrapper .uv-onboard-container .uv-onboard-navigator-active{
        background-color: {{ brandColor }};
    }
    .uv-icon-aside-menu,.uv-paper .uv-got-whats-new {
        background-color: {{ brandColor }};   
    }
</style>", "@UVDeskCoreFramework/Templates/lightskin.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Templates/lightskin.html.twig");
    }
}
